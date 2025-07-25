<?php
function register_incentives_api_endpoints()
{
    register_rest_route('incentives/v1', '/get-incentives', array(
        'methods' => 'GET',
        'callback' => 'get_incentives_data',
        'permission_callback' => '__return_true'
    ));

    register_rest_route('incentives/v1', '/search-incentives', array(
        'methods' => 'GET',
        'callback' => 'search_incentives_data',
        'permission_callback' => '__return_true'
    ));
}
add_action('rest_api_init', 'register_incentives_api_endpoints');

function get_incentives_data(WP_REST_Request $request)
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'incentive';
    $incentives = $wpdb->get_results("SELECT * FROM $table_name");

    // 初始化响应数据结构
    $response = array(
        array(
            'type' => 'Canada Wide',
            'cards' => array()
        ),
        array(
            'type' => 'Ontario',
            'cards' => array()
        ),
        array(
            'type' => 'Alberta',
            'cards' => array()
        ),
        array(
            'type' => 'Nova Scotia',
            'cards' => array()
        ),
        array(
            'type' => 'PEI',
            'cards' => array()
        ),
        array(
            'type' => 'British Columbia',
            'cards' => array()
        )
    );

    // 将数据分配到对应的部分
    foreach ($incentives as $incentive) {
        $labels = array_map(function ($label) {
            $parts = explode(':', $label);
            if (count($parts) == 2) {
                return [trim($parts[0]), trim($parts[1])];
            } else {
                return [trim($parts[0]), ''];
            }
        }, explode(',', $incentive->lable));

        $card = array(
            'type'    => $incentive->question,
            'labels'  => $labels,
            'content' => wp_kses_post($incentive->answer)
        );

        // 根据标题分类
        switch (true) {
            case strpos($incentive->title, 'Canada Wide') !== false:
                $response[0]['cards'][] = $card;
                break;
            case strpos($incentive->title, 'Ontario') !== false:
                $response[1]['cards'][] = $card;
                break;
            case strpos($incentive->title, 'Alberta') !== false:
                $response[2]['cards'][] = $card;
                break;
            case strpos($incentive->title, 'Nova Scotia') !== false:
                $response[3]['cards'][] = $card;
                break;
            case strpos($incentive->title, 'PEI') !== false:
                $response[4]['cards'][] = $card;
                break;
            case strpos($incentive->title, 'British Columbia') !== false:
                $response[5]['cards'][] = $card;
                break;
            default:
                // 处理其他情况
                break;
        }
    }

    return new WP_REST_Response($response, 200);
}

function search_incentives_data(WP_REST_Request $request)
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'incentive';
    $search_term = $request->get_param('query');

    if (empty($search_term)) {
        return new WP_REST_Response(array('message' => 'Query parameter is required'), 400);
    }

    $incentives = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE title LIKE %s OR question LIKE %s OR answer LIKE %s", '%' . $wpdb->esc_like($search_term) . '%', '%' . $wpdb->esc_like($search_term) . '%', '%' . $wpdb->esc_like($search_term) . '%'));

    $response = array(
        array(
            'type' => 'Canada Wide',
            'cards' => array()
        ),
        array(
            'type' => 'Ontario',
            'cards' => array()
        ),
        array(
            'type' => 'Alberta',
            'cards' => array()
        ),
        array(
            'type' => 'Nova Scotia',
            'cards' => array()
        ),
        array(
            'type' => 'PEI',
            'cards' => array()
        ),
        array(
            'type' => 'British Columbia',
            'cards' => array()
        )
    );

    foreach ($incentives as $incentive) {
        $labels = array_map(function ($label) {
            $parts = explode(':', $label);
            if (count($parts) == 2) {
                return [trim($parts[0]), trim($parts[1])];
            } else {
                return [trim($parts[0]), ''];
            }
        }, explode(',', $incentive->lable));

        $card = array(
            'type'    => $incentive->question,
            'labels'  => $labels,
            'content' => wp_kses_post($incentive->answer)
        );

        switch (true) {
            case strpos($incentive->title, 'Canada Wide') !== false:
                $response[0]['cards'][] = $card;
                break;
            case strpos($incentive->title, 'Ontario') !== false:
                $response[1]['cards'][] = $card;
                break;
            case strpos($incentive->title, 'Alberta') !== false:
                $response[2]['cards'][] = $card;
                break;
            case strpos($incentive->title, 'Nova Scotia') !== false:
                $response[3]['cards'][] = $card;
                break;
            case strpos($incentive->title, 'PEI') !== false:
                $response[4]['cards'][] = $card;
                break;
            case strpos($incentive->title, 'British Columbia') !== false:
                $response[5]['cards'][] = $card;
                break;
            default:
                // 处理其他情况
                break;
        }
    }

    return new WP_REST_Response($response, 200);
}

// 处理CORS
function add_cors_headers()
{
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept, Origin, Authorization");
}
add_action('rest_api_init', 'add_cors_headers', 15);

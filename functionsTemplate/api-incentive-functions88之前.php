<?php
/*function register_incentives_api_endpoints()
{
    register_rest_route('incentives/v1', '/get-incentives', array(
        'methods' => 'GET',
        'callback' => 'get_incentives_data',
        'permission_callback' => '__return_true'
    ));
}
add_action('rest_api_init', 'register_incentives_api_endpoints');

function get_incentives_data(WP_REST_Request $request)
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'incentive';
    $incentives = $wpdb->get_results("SELECT * FROM $table_name");

    $response = array();
    foreach ($incentives as $incentive) {
        $response[] = array(
            'id'       => $incentive->id,
            'title'    => $incentive->title,
            'question' => $incentive->question,
            'answer'   => $incentive->answer,
            'labels'   => explode(',', $incentive->lable)
        );
    }

    return new WP_REST_Response($response, 200);
}*/
function register_incentives_api_endpoints()
{
    register_rest_route('incentives/v1', '/get-incentives', array(
        'methods' => 'GET',
        'callback' => 'get_incentives_data',
        'permission_callback' => '__return_true'
    ));
    // 新增查询接口
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
            'type' => 'Federal Programs',
            'cards' => array()
        ),
        array(
            'type' => 'British Columbia Solar Program',
            'cards' => array()
        )
    );

    // 将数据分配到对应的部分
    foreach ($incentives as $incentive) {
        $labels = array_map(function ($label) {
            $parts = explode(':', $label);
            // 检查是否有两个部分
            if (count($parts) == 2) {
                return [trim($parts[0]), trim($parts[1])];
            } else {
                // 处理不符合预期格式的标签
                return [trim($parts[0]), ''];
            }
        }, explode(',', $incentive->lable));

        $card = array(
            'type'    => $incentive->question,
            'labels'  => $labels,
            // 'content' => nl2br(esc_html($incentive->answer))
            'content' => wp_kses_post($incentive->answer)
        );

        // 根据某个条件（例如 title 或者自定义字段）分配到不同的部分
        if (strpos($incentive->title, 'Federal') !== false) {
            $response[0]['cards'][] = $card;
        } else if (strpos($incentive->title, 'British Columbia') !== false) {
            $response[1]['cards'][] = $card;
        } else {
            // 如果title没有明确标识，则可以根据其他逻辑进行分类
            // 例如，默认分配到Federal Programs
            $response[0]['cards'][] = $card;
        }
    }

    return new WP_REST_Response($response, 200);
}

// function search_incentives_data(WP_REST_Request $request)
// {
//     global $wpdb;
//     $table_name = $wpdb->prefix . 'incentive';
//     $search_term = $request->get_param('query');

//     if (empty($search_term)) {
//         return new WP_REST_Response(array('message' => 'Query parameter is required'), 400);
//     }

//     // 查询数据库，寻找匹配的记录
//     $incentive = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE title LIKE %s OR question LIKE %s OR answer LIKE %s", '%' . $wpdb->esc_like($search_term) . '%', '%' . $wpdb->esc_like($search_term) . '%', '%' . $wpdb->esc_like($search_term) . '%'));

//     if (!$incentive) {
//         // return new WP_REST_Response(array('message' => 'No matching incentive found'), 404);
//         return get_incentives_data($request); // 返回所有数据
//     }

//     $labels = array_map(function ($label) {
//         $parts = explode(':', $label);
//         // 检查是否有两个部分
//         if (count($parts) == 2) {
//             return [trim($parts[0]), trim($parts[1])];
//         } else {
//             // 处理不符合预期格式的标签
//             return [trim($parts[0]), ''];
//         }
//     }, explode(',', $incentive->lable));

//     $card = array(
//         'type'    => $incentive->question,
//         'labels'  => $labels,
//         // 'content' => nl2br(esc_html($incentive->answer))
//         'content' => wp_kses_post($incentive->answer)
//     );

//     return new WP_REST_Response($card, 200);
// }


// function search_incentives_data(WP_REST_Request $request)
// {
//     global $wpdb;
//     $table_name = $wpdb->prefix . 'incentive';
//     $search_term = $request->get_param('query');

//     if (empty($search_term)) {
//         return new WP_REST_Response(array('message' => 'Query parameter is required'), 400);
//     }

//     // 查询数据库，寻找匹配的记录
//     $incentives = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE title LIKE %s OR question LIKE %s OR answer LIKE %s", '%' . $wpdb->esc_like($search_term) . '%', '%' . $wpdb->esc_like($search_term) . '%', '%' . $wpdb->esc_like($search_term) . '%'));

//     if (empty($incentives)) {
//         // return new WP_REST_Response(array('message' => 'No matching incentives found'), 404);
//         return get_incentives_data($request);
//     }

//     $response = array();

//     foreach ($incentives as $incentive) {
//         $labels = array_map(function ($label) {
//             $parts = explode(':', $label);
//             if (count($parts) == 2) {
//                 return [trim($parts[0]), trim($parts[1])];
//             } else {
//                 return [trim($parts[0]), ''];
//             }
//         }, explode(',', $incentive->lable));

//         $card = array(
//             'type'    => $incentive->question,
//             'labels'  => $labels,
//             'content' => wp_kses_post($incentive->answer)
//         );

//         $response[] = $card;
//     }

//     return new WP_REST_Response($response, 200);
// }
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
            'type' => 'Federal Programs',
            'cards' => array()
        ),
        array(
            'type' => 'British Columbia Solar Program',
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

        if (strpos($incentive->title, 'Federal') !== false) {
            $response[0]['cards'][] = $card;
        } else if (strpos($incentive->title, 'British Columbia') !== false) {
            $response[1]['cards'][] = $card;
        } else {
            $response[0]['cards'][] = $card;
        }
    }

    return new WP_REST_Response($response, 200);
}



// 如果需要处理CORS（跨域资源共享）
function add_cors_headers()
{
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept, Origin, Authorization");
}
add_action('rest_api_init', 'add_cors_headers', 15);

<?php
/**
 * Register Announcement API Endpoints
 */
function register_announcements_api_endpoints() {
    register_rest_route('announcements/v1', '/get-announcements', array(
        'methods'             => 'GET',
        'callback'            => 'get_announcements_data',
        'permission_callback' => '__return_true', // or customize as needed
    ));

    register_rest_route('announcements/v1', '/search-announcements', array(
        'methods'             => 'GET',
        'callback'            => 'search_announcements_data',
        'permission_callback' => '__return_true', // or customize as needed
    ));
}
add_action('rest_api_init', 'register_announcements_api_endpoints');

/**
 * GET /wp-json/announcements/v1/get-announcements
 * Fetches all announcements
 */
function get_announcements_data(WP_REST_Request $request) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'announcement'; // e.g. wp_announcement
    $results = $wpdb->get_results("SELECT * FROM $table_name");

    $response = array();
    foreach ($results as $row) {
        // Decode URLs if stored as JSON
        $decoded_urls = json_decode($row->urls, true);
        if (!is_array($decoded_urls)) {
            $decoded_urls = array();
        }

        $response[] = array(
            'id'           => (int) $row->id,
            'announcement' => $row->announcement,
            'urls'         => $decoded_urls,
        );
    }

    return new WP_REST_Response($response, 200);
}

/**
 * GET /wp-json/announcements/v1/search-announcements?query=somekeyword
 * Searches the 'announcement' column for the query term
 */
function search_announcements_data(WP_REST_Request $request) {
    global $wpdb;
    $table_name  = $wpdb->prefix . 'announcement';
    $search_term = $request->get_param('query');

    if (empty($search_term)) {
        return new WP_REST_Response(array('message' => 'Query parameter is required'), 400);
    }

    // Search the 'announcement' column
    $sql = $wpdb->prepare(
        "SELECT * FROM $table_name WHERE announcement LIKE %s",
        '%' . $wpdb->esc_like($search_term) . '%'
    );
    $results = $wpdb->get_results($sql);

    $response = array();
    foreach ($results as $row) {
        $decoded_urls = json_decode($row->urls, true);
        if (!is_array($decoded_urls)) {
            $decoded_urls = array();
        }

        $response[] = array(
            'id'           => (int) $row->id,
            'announcement' => $row->announcement,
            'urls'         => $decoded_urls,
        );
    }

    return new WP_REST_Response($response, 200);
}
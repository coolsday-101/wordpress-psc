<?php
// Ensure WordPress environment
if (!defined('ABSPATH')) {
    exit;
}

// Register the custom REST API endpoint
add_action('rest_api_init', function () {
    // Endpoint to get all posts
    register_rest_route('custom-api/v1', '/posts', [
        'methods'  => 'GET',
        'callback' => 'custom_get_all_posts_with_all_fields',
    ]);

    // Endpoint to get a single post by ID
    register_rest_route('custom-api/v1', '/posts/(?P<id>\d+)', [
        'methods'  => 'GET',
        'callback' => 'custom_get_post_by_id',
        'args'     => [
            'id' => [
                'required' => true,
                'validate_callback' => function ($param, $request, $key) {
                    return is_numeric($param);
                },
            ],
        ],
    ]);

    // Endpoint to get posts by tag
    register_rest_route('custom-api/v1', '/posts-by-tag/(?P<tag>\w+)', [
        'methods'  => 'GET',
        'callback' => 'custom_get_posts_by_tag',
        'args'     => [
            'tag' => [
                'required' => true,
                'validate_callback' => function ($param, $request, $key) {
                    return is_string($param) && !empty($param);
                },
            ],
        ],
    ]);

});

/**
 * Fetch all posts with all fields, categories, and tags
 *
 * @param WP_REST_Request $request The request parameters
 * @return WP_REST_Response The response data
 */
function custom_get_all_posts_with_all_fields(WP_REST_Request $request)
{
    // Query for all posts
    $query_args = [
        'post_type'      => 'post',
        'orderby'        => 'ID',
        'order'          => 'DESC',
        'posts_per_page' => -1, // Fetch all posts
        'post_status'    => 'publish',
        'fields'         => 'all', // Fetch all fields
    ];

    $query = new WP_Query($query_args);
    $posts = $query->posts;

    if (empty($posts)) {
        return new WP_REST_Response(['message' => 'No posts found'], 404);
    }

    // Prepare response data
    $data = [];
    foreach ($posts as $post) {
        $categories = get_the_category($post->ID);
        $categories_list = [];

        if (!empty($categories)) {
            foreach ($categories as $category) {
                $categories_list[] = [
                    'id'   => $category->term_id,
                    'name' => $category->name,
                    'slug' => $category->slug,
                ];
            }
        }

        $tags = wp_get_post_tags($post->ID);
        $tags_list = [];

        if (!empty($tags)) {
            foreach ($tags as $tag) {
                $tags_list[] = [
                    'id'   => $tag->term_id,
                    'name' => $tag->name,
                    'slug' => $tag->slug,
                ];
            }
        }

        $data[] = [
            'id'             => $post->ID,
            'title'          => get_the_title($post),
            'published_date' => get_the_date('Y-m-d H:i:s', $post),
            'featured_image' => get_the_post_thumbnail_url($post, 'full') ?: '',
            'url'            => get_permalink($post),
            'excerpt'        => get_the_excerpt($post),
            'content'        => apply_filters('the_content', $post->post_content),
            'categories'     => $categories_list,
            'tags'           => $tags_list,
        ];
    }

    return new WP_REST_Response($data, 200);
}

/**
 * Fetch a single post by ID with all fields, categories, and tags
 *
 * @param WP_REST_Request $request The request parameters
 * @return WP_REST_Response The response data
 */
function custom_get_post_by_id(WP_REST_Request $request)
{
    $post_id = $request->get_param('id');
    $post = get_post($post_id);

    if (!$post || $post->post_type !== 'post' || $post->post_status !== 'publish') {
        return new WP_REST_Response(['message' => 'Post not found'], 404);
    }

    $data = prepare_post_data($post);

    return new WP_REST_Response($data, 200);
}
/**
 * Fetch posts by tag with all fields
 *
 * @param WP_REST_Request $request The request parameters
 * @return WP_REST_Response The response data
 */
function custom_get_posts_by_tag(WP_REST_Request $request)
{
    $tag = sanitize_text_field($request->get_param('tag'));

    // Query for posts with the given tag
    $query_args = [
        'post_type'      => 'post',
        'orderby'        => 'ID',
        'order'          => 'DESC',
        'posts_per_page' => -1, // Fetch all posts
        'post_status'    => 'publish',
        'tag'            => $tag, // Filter by tag
        'fields'         => 'all',
    ];

    $query = new WP_Query($query_args);
    $posts = $query->posts;

    if (empty($posts)) {
        return new WP_REST_Response(['message' => 'No posts found for this tag'], 404);
    }

    // Prepare response data
    $data = [];
    foreach ($posts as $post) {
        $data[] = prepare_post_data($post);
    }

    return new WP_REST_Response($data, 200);
}

/**
 * Prepare post data with categories and tags
 *
 * @param WP_Post $post The post object
 * @return array The prepared post data
 */
function prepare_post_data($post)
{
    $categories = get_the_category($post->ID);
    $categories_list = [];

    if (!empty($categories)) {
        foreach ($categories as $category) {
            $categories_list[] = [
                'id'   => $category->term_id,
                'name' => $category->name,
                'slug' => $category->slug,
            ];
        }
    }

    $tags = wp_get_post_tags($post->ID);
    $tags_list = [];

    if (!empty($tags)) {
        foreach ($tags as $tag) {
            $tags_list[] = [
                'id'   => $tag->term_id,
                'name' => $tag->name,
                'slug' => $tag->slug,
            ];
        }
    }

    return [
        'id'             => $post->ID,
        'title'          => get_the_title($post),
        'published_date' => get_the_date('Y-m-d H:i:s', $post),
        'featured_image' => get_the_post_thumbnail_url($post, 'full') ?: '',
        'url'            => get_permalink($post),
        'excerpt'        => get_the_excerpt($post),
        'content'        => apply_filters('the_content', $post->post_content),
        'categories'     => $categories_list,
        'tags'           => $tags_list,
    ];
}
<?php
// 确保 WordPress 环境
if (!defined('ABSPATH')) {
    exit;
}

// 注册所有分类的接口
add_action('rest_api_init', function () {
    // 定义分类数组
    $categories = [
        'News',
        'Residential Solar',
        'Solar Knowledge',
        'Government Policy',
        'Going Solar with Polaron',
        'customer portal',
        '2020',
        '2021',
        '2022',
        '2023',
        '2024',
        'Project Management',
        'Pre-Installation',
        'Post-Installation',
        'Policy/Government',
        'case study',
        'commercial',
        'Feature-Commericial-Md',
    ];

    // 为每个分类注册一个 REST API 路由
    foreach ($categories as $category) {
        $slug = sanitize_title($category); // 将分类名称转为 slug

        register_rest_route('custom-api/v1', '/category/' . $slug, [
            'methods'  => 'GET',
            'callback' => 'get_posts_by_category',
            'args'     => [
                'category_name' => [
                    'default' => $slug,
                    'sanitize_callback' => 'sanitize_text_field',
                ],
            ],
        ]);
    }
});

/**
 * 获取指定分类下的文章数据
 *
 * @param WP_REST_Request $request 请求参数
 * @return WP_REST_Response 响应数据
 */
function get_posts_by_category(WP_REST_Request $request)
{
    $category_name = $request['category_name'];

    // 查询文章数据
    $query_args = [
        'post_type'      => 'post',
        'posts_per_page' => -1, // 获取所有文章
        'tax_query'      => [
            [
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => $category_name,
            ],
        ],
    ];
    $posts = get_posts($query_args);

    // 构建结果
    $data = [];
    foreach ($posts as $post) {
        $data[] = [
            'id'            => $post->ID,
            'title'         => get_the_title($post),
            'excerpt' => wp_trim_words(get_the_excerpt($post), 15, '...'),
            'content'       => apply_filters('the_content', $post->post_content),
            'featured_image' => get_the_post_thumbnail_url($post, 'full'),
            'url'           => get_permalink($post),
        ];
    }

    return new WP_REST_Response($data, 200);
}

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
        'Canadian Projects',
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
                'optional' => [
                    'default' => -1,
                    'sanitize_callback' => 'absint',
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
    $optional = $request->get_param('optional');
    if ($optional == null || $optional == 0) {
        $optional = -1;
    }

    // 查询文章数据
    $query_args = [
        'post_type'      => 'post',
        'posts_per_page' => $optional,
        'tax_query'      => [
            [
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => $category_name,
            ],
        ],
        'fields'         => 'all', // 确保返回完整的文章数据
    ];

    // 强制解除任何全局过滤器对查询的影响
    add_filter('posts_pre_query', function ($posts, $query) use ($query_args) {
        if ($query->query_vars['posts_per_page'] === $query_args['posts_per_page']) {
            remove_all_filters('posts_results');
        }
        return $posts;
    }, 10, 2);

    $posts = get_posts($query_args);

    // 构建结果
    $data = [];
    foreach ($posts as $post) {
        $data[] = [
            'id'            => $post->ID,
            'title'         => get_the_title($post),
            'published_date' => get_the_date('Y-m-d H:i:s', $post), // 添加发布时间
            'featured_image' => get_the_post_thumbnail_url($post, 'full'),
            'url'           => get_permalink($post),
            'excerpt'       => wp_trim_words(get_the_excerpt($post), 15, '...'),
            'content'       => apply_filters('the_content', $post->post_content),
        ];
    }

    return new WP_REST_Response($data, 200);
}

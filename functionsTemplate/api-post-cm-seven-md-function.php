<?php
function get_commercial_sevenmd_posts()
{
    // 查询最新的 6 篇商业分类文章
    $args = array(
        'category_name' => 'Feature-Commericial-Md',
        'posts_per_page' => 6,
        'post_status' => 'publish'
    );

    $query = new WP_Query($args);
    $posts = array();

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            // 过滤掉 HTML 标签，获取纯文本内容
            $content = get_the_content();
            //$content = get_the_excerpt();
            $plain_content = wp_strip_all_tags($content);

            $posts[] = array(
                'title' => get_the_title(),
                'excerpt' => wp_trim_words(get_the_content(), 15, '...'), // 部分内容 + 省略号
                'url' => get_permalink(),
                'featured_image' => get_the_post_thumbnail_url(get_the_ID(), 'full'), // 特色图片 URL
                'content' => $plain_content,
                'date' => get_the_date('Y-m-d H:i:s'), // 添加文章发布时间
            );
        }
    }


    wp_reset_postdata();

    return rest_ensure_response($posts);
}

add_action('rest_api_init', function () {
    register_rest_route('custom/v2', '/commercial-posts', array(
        'methods' => 'GET',
        'callback' => 'get_commercial_sevenmd_posts'
    ));
});

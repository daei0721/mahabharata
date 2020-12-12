<?php
    function my_enqueue_scripts() {
        wp_enqueue_style('my_reset', get_template_directory_uri().'/css/reset.css',array());
        wp_enqueue_style('my_style', get_template_directory_uri().'/css/style.css',array());
        wp_enqueue_style('my_animate', get_template_directory_uri().'/css/animate.css',array());
        wp_enqueue_script('wow_js', get_template_directory_uri().'/js/wow.min.js', array());
    }

    add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

    //ヘッダーのカスタムメニュー化
    register_nav_menus(
        array(
            'place_global' => 'グローバル',
        )
    );


    //テンプレート毎にカテゴリータイトルを表示
    function get_main_title() {
        if(is_singular('post')):
            $category_obj = get_the_category();
            return $category_obj[0]->name;
        elseif(is_page()):
            return get_the_title();
        elseif(is_category()):
            return single_cat_title();
        endif;
    }

    //アイキャッチ画像を利用できるようにする関数
    add_theme_support('post-thumbnails');

    //特定の記事を抽出する関数
    function get_specific_posts($post_type, $taxonomy = null, $term = null, $number = -1 ) {
        $args = array(
            'post_type' => $post_type,
            'tax_query' => array(
                array(
                    'taxonomy' => $taxonomy,
                    'field' => 'slug',
                    'field' => 'slug',
                    'terms' => $term,
                ),
            ),
            'posts_per_page' => $number,
        );
        $specific_posts = new WP_Query($args);
        return $specific_posts;
    }

    //ニュースの大きい画像サイズの設定
    add_image_size('news-large',250,140,true);

    //ニュースの大きい画像サイズの設定
    add_image_size('news-small',156,88,true);

    //投稿記事の画像サイズの設定
    add_image_size('single',810,578,true);

    //抜粋機能を固定ページで使えるように設定
    add_post_type_support('page','excerpt');
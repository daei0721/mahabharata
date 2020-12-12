<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="bg">
        <header id="header">
            <nav class="header-nav">
                <?php
                    wp_nav_menu(
                        array (
                            'theme_location' => 'place_global',
                            'container' => false,
                        )
                    );
                ?>
            </nav>
        </header>
        <?php if(is_front_page()): ?>
        <div id="mv">
            <div class="mv-picture"></div>
            <div class="mv-inner">
                <div class="mv-title wow fadeIn">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/mv-title.png"alt="世界最長の叙事詩をピーター・ブルック以来の全編舞台化 マハーバーラタ完全版">
                </div>
                <div class="mv-bottom wow fadeIn">
                    <div class="mv-day">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/mv-day@2x.png" alt="日程">
                    </div>
                    <div class="mv-text">
                        <p>小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である完全版マハーバーラタの公演が決定！！</p>
                        <p>アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！</p>
                    </div>
                </div>
            </div>
            <div class="ticket-btn btn">
                <a href="#">チケット予約サイトへ</a>
            </div>
        </div>
        <?php elseif(is_page('14')): ?>
        <?php
            $story_obj = get_page_by_path('story');
            $post = $story_obj;
            setup_postdata($post);
            $story_leading = SCF::get( 'story-leading' );
            $story_main_message = SCF::get( 'story-main-message' );
            $story_left_image = SCF::get( 'story-left-image' );
            $story_right_image = SCF::get( 'story-right-image' );
        ?>
        <div class="mv-story">
            <div class="mv-story-picture">
                <div class="container">
                    <div class="mv-inner">
                        <div class="mv-text-body">
                            <div class="mv-title">
                                <?php echo wp_get_attachment_image ($story_left_image , 'large' ); ?>
                            </div>
                            <div class="mv-day">
                                <?php echo wp_get_attachment_image ($story_right_image , 'large' ); ?>
                            </div>
                        </div>
                        <div class="ticket-btn btn">
                            <a href="#">チケット予約サイトへ</a>
                        </div>
                        <div class="breadcrumb">
                            <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
                        </div>
                        <h1 class="section-title page-story-title"><?php the_title(); ?></h1>
                        <div class="story-content">
                            <div class="story-flex">
                                <div class="story-left">
                                    <p class="leading "><?php echo esc_html($story_leading); ?></p>
                                </div>
                                <div class="story-right">
                                    <p class="story-content-text">
                                        <?php echo nl2br (esc_html($story_main_message)); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
        <div class="mv-short">
            <div class="container">
                <div class="mv-inner">
                    <div class="mv-title">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/mv-title.png" alt="世界最長の叙事詩をピーター・ブルック以来の全編舞台化 マハーバーラタ完全版">
                    </div>
                    <div class="mv-day">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/mv-day@2x.png" alt="日程">
                    </div>
                    <div class="ticket-btn btn">
                        <a href="#">チケット予約サイトへ</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endif;?>
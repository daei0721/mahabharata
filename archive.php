<?php get_header(); ?>
    <div class="news">
        <div class="container">
            <div class="breadcrumb">
                <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
            </div>
            <h1 class="section-title page-news-title wow fadeIn"><?php echo get_main_title(); ?></h1>
            <div class="news-3cards wow fadeIn">
                <?php
                    if(have_posts()):
                        while (have_posts()) :the_post();
                            get_template_part('content-archive');
                        endwhile;
                    endif;
                ?>
            </div>
            <?php if (paginate_links() ) : //ページが1ページ以上あれば以下を表示 ?>
                <!-- pagenation -->
                <div class="pagenation">
                <?php
                    echo
                    paginate_links(
                        array(
                            'end_size' => 1,
                            'mid_size' => 1,
                            'prev_next' => true,
                            'prev_text' => '<i class="fas fa-angle-left"></i>',
                            'next_text' => '<i class="fas fa-angle-right"></i>',
                            )
                    );
                ?>
                </div><!-- /pagenation -->
            <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>
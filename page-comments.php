<?php get_header(); ?>
    <div class="comments">
        <div class="container">
            <div class="breadcrumb">
                <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
            </div>
            <h1 class="section-title page-news-title"><?php echo get_main_title(); ?></h1>
            <p class="comments-sub-title"><?php echo get_the_excerpt(); ?></p>
            <?php get_template_part('parts/comments-parts'); ?>
            <div class="comments-cards wow fadeIn">
            <?php get_template_part('content-comments'); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
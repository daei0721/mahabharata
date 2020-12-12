<?php get_header(); ?>
    <div class="news-single">
        <div class="container">
        <div class="breadcrumb">
            <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
        </div>
        <?php
        if(have_posts()):
            while(have_posts()): the_post();
                get_template_part('content-single');
            endwhile;
        endif;
        ?>
        </div>
    </div>
<?php get_footer(); ?>
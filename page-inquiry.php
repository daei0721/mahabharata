<?php get_header(); ?>
    <div class="inquiry">
        <div class="container">
            <div class="breadcrumb">
                <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
            </div>
            <h1 class="section-title page-news-title"><?php echo get_main_title(); ?></h1>
            <div class="contact-form-body">
                    <?PHP
                        if(have_posts()):
                            while(have_posts()):the_post();
                                the_content();
                            endwhile;
                        endif;
                    ?>
            </div>
        </div>
        <?php get_footer(); ?>
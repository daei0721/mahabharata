<?php get_header(); ?>
    <div class="inquiry">
        <div class="container">
            <div class="breadcrumb">
                <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
            </div>
            <h1 class="section-title page-news-title">INQUIRY</h1>
            <div class="contact-confirm-body">
            <?PHP
                if(have_posts()):
                    while(have_posts()):the_post();
                        the_content();
                    endwhile;
                endif;
            ?>
            </div>
        </div>
    </div>
    <section id="news-section">
        <div class="container">
            <h1 class="section-title">LATEST NEWS</h1>
            <?php
                get_template_part('parts/news-parts');
            ?>
        </div>
    </section>
<?php get_footer(); ?>
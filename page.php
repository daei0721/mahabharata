<?php get_header(); ?>
    <div class="news">
        <div class="container">
            <div class="breadcrumb">
                <ul>
                    <li class="breadcrumb-item"><a href="/">ホーム</a></li>
                    <li class="breadcrumb-item">news</li>
                </ul>
            </div>
            <h1 class="section-title page-news-title wow fadeIn">NEWS</h1>
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
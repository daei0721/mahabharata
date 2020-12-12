<?php $term_obj = get_term_by('slug','news','category'); ?>
<div class="news-3cards wow fadeIn">
    <?php
    $news_posts = get_specific_posts('post','category','news',3);
    if($news_posts->have_posts()):
        while($news_posts->have_posts()): $news_posts->the_post();
    ?>
    <a href="<?php the_permalink(); ?>" class="news-3card">
        <div class="news-3card-image">
            <?php the_post_thumbnail('news-large'); ?>
        </div>
        <div class="card-text">
            <time><?php the_time('Y.m.d'); ?></time>
            <p><?php the_title(); ?></p>
        </div>
    </a>
    <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>
    <div class="news-btn btn">
        <a href="<?php echo esc_url(get_term_link($term_obj)); ?>">ニュース一覧へ</a>
    </div>
</div>
<div class="news-2cards wow fadeIn">
    <?php
        if(have_posts()):
            while (have_posts()) :the_post();
                get_template_part('pickup');
            endwhile;
        endif;
    ?>
</div>
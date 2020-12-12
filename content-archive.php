<a href="<?php the_permalink(); ?>" class="news-3card">
    <div class="news-archive-card-image">
        <?php the_post_thumbnail('news-large'); ?>
    </div>
    <div class="card-text">
        <time datetime="2019-09-30"><?php the_time('Y.m.d') ?></time>
        <p><?php the_title(); ?></p>
    </div>
</a>
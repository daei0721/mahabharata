<?php $pickup_ids = array( 54, 52 ); // ピックアップする記事の投稿idを指定する ?>
<?php foreach ( $pickup_ids as $id ) : ?>
    <a href="<?php the_permalink($id); ?>" class="news-2card">
        <div class="news-2card-image">
        <?php
            if ( has_post_thumbnail( $id ) ) {
            echo get_the_post_thumbnail( $id, 'large' );
            } else {
            echo '<img src="' . esc_url( get_template_directory_uri() ) . '/img/sample.jpg" alt="">';
            }
        ?>
        </div>
        <div class="card-text">
            <time><?php the_time('Y.m.d'); ?></time>
            <p><?php echo mb_substr(get_the_title( $id ), 0, 20). "…"; ?></p>
        </div>
    </a>
<?php endforeach; ?>

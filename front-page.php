<?php get_header(); ?>
<?php
    $introduction_title = SCF::get( 'introduction-title' );
    $introduction_leading = SCF::get( 'introduction-leading' );
    $introduction_left_text = SCF::get( 'introduction-left-text' );
    $introduction_right_text = SCF::get( 'introduction-right-text' );
?>
    <section id="introduction">
        <div class="container">
            <div class="inner">
                <h1 class="section-title  wow fadeIn"><?php echo esc_html($introduction_title); ?></h1>
                <h2 class="sub-title wow fadeIn"><?php echo esc_html($introduction_leading); ?></h2>
                <div class="introduction-text">
                    <p class="left-text">
                        <?php echo nl2br (esc_html($introduction_left_text)); ?>
                    </p>
                    <p class="right-text">
                        <?php echo nl2br (esc_html($introduction_right_text)); ?>
                    </p>
                </div>
            </div>
        </div>
    </section><!-- /#introduction -->
    <section id="news-section">
        <div class="container">
        <h1 class="section-title wow fadeIn">NEWS</h1>
            <?php
                get_template_part('parts/news-parts');
            ?>
        </div>
    </section><!-- /#news-section -->
    <section id="story-section">
        <?php
            $story_obj = get_page_by_path('story');
            $post = $story_obj;
            setup_postdata($post);
            $story_main_message = SCF::get( 'story-main-message' );
        ?>
        <div class="container">
            <h1 class="section-title wow fadeIn"><?php the_title(); ?></h1>
            <div class="story-text wow fadeIn">
                <p>
                <?php echo nl2br (esc_html($story_main_message)); ?>
                </p>
            </div>
            <div class="story-btn btn">
                <a href="<?php the_permalink(); ?>">もっと詳しく</a>
            </div>
        </div>
        <?php
            wp_reset_postdata();
        ?>
    </section><!-- /#story-section -->
    <section id="comments-section">
        <?php
            $comments_obj = get_page_by_path('comments');
            $post = $comments_obj;
            setup_postdata($post);
        ?>
        <div class="container">
            <h1 class="section-title wow fadeIn"><?php the_title(); ?></h1>
            <p class="comments-sub-title wow fadeIn"><?php echo get_the_excerpt(); ?></p>
            <?php get_template_part('parts/comments-parts'); ?>
        </div>
            <?php
                wp_reset_postdata();
            ?>
    </section><!-- /#comments-section -->
    <section id="cast-section">
        <?php
            $cast_obj = get_page_by_path('cast');
            $post = $cast_obj;
            setup_postdata($post);
        ?>
        <div class="container">
            <h1 class="section-title wow fadeIn"><?php the_title(); ?></h1>
            <div class="cast-flex wow fadeIn">
                <?php
                    get_template_part('parts/cast-parts');
                ?>
            </div>
            <div class="cast-more-btn">
                <a href="<?php the_permalink(); ?>">もっと見る</a>
            </div>
        </div>
        <?php
            wp_reset_postdata();
        ?>
    </section><!-- /#cast-section -->
<?php get_footer(); ?>
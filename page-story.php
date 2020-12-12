<?php get_header(); ?>
<?php
    $story_message_1 = SCF::get( 'story-message-1' );
    $story_message_2 = SCF::get( 'story-message-2' );
    $story_message_3 = SCF::get( 'story-message-3' );
?>
<div class="story-bg">
    <div class="story-bg1">
        <div class="container">
            <p class="wow fadeIn">
                <?php echo nl2br (esc_html($story_message_1)); ?>
            </p>
        </div>
    </div>
</div>
<div class="story-bg">
    <div class="story-bg2">
        <div class="container">
            <div class="story-bg2-text">
                <p class="wow fadeIn">
                    <?php echo nl2br (esc_html($story_message_2)); ?>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="story-bg">
    <div class="story-bg3">
        <div class="container">
            <p class="wow fadeIn">
                <?php echo nl2br (esc_html($story_message_3)); ?>
            </p>
        </div>
    </div>
</div>
<?php get_footer(); ?>
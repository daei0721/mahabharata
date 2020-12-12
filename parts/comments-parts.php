<?php
    $comments_top_name = SCF::get( 'comments-top-name' );//フィールド内の名前
    $comments_top_title_name = SCF::get( 'comments-top-title-name' );
    $comments_top_text = SCF::get( 'comments-top-text' );
?>
<div class="comments-img">
    <div class="comments-name wow fadeIn">
        <span class="sub-name wow fadeIn"><?php echo esc_html($comments_top_title_name); ?></span><span class="name"><?php echo esc_html($comments_top_name); ?></span>
    </div>
    <p class="comments-text wow fadeIn">
        <?php echo nl2br (esc_html($comments_top_text)); ?>
    </p>
</div>
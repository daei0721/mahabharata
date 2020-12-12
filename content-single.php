<h1 class="section-title wow fadeIn"><?php echo get_main_title(); ?></h1>
<div class="single-img wow fadeIn">
    <?php the_post_thumbnail('single'); ?>
</div>
<div class="single-title wow fadeIn">
    <time class="single-day" datetime=""><?php the_time('Y.m.d'); ?></time>
    <p><?php the_title(); ?></p>
</div>
<div class="single-text-box">
    <?php the_content(); ?>
</div>
<div class="pagenavi">
<?php
    $next_post = get_next_post();
    $prev_post = get_previous_post();
    if ($prev_post):
?>
    <a href="<?php echo get_permalink($prev_post->ID); ?>" class="pagenavi-left">
        <time class="single-day" datetime=""><?php echo get_the_time('Y.m.d',$prev_post); ?></time>
        <p class="prev-title"><?php echo get_the_title($prev_post); ?></p>
        <i class="fa fa-angle-left "></i>
    </a>
<?php
    endif;
    if($next_post):
?>
    <a href="<?php echo get_permalink($next_post->ID); ?>" class="pagenavi-right">
        <time class="single-day" datetime=""><?php echo get_the_time('Y.m.d',$next_post); ?></time>
        <p class="prev-title"><?php echo get_the_title($next_post); ?></p>
        <i class="fa fa-angle-right "></i>
    </a>
    <?php endif; ?>
</div>
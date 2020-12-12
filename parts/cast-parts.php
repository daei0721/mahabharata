<?php
    $group_set = SCF::get( 'all-casts' );//グループ名
    foreach ( $group_set as $field_name => $field_value ) {//繰り返しループ
?>
    <div class="cast-card">
        <div class="cast-card-img">
            <?php echo wp_get_attachment_image( $field_value['cast-image'] , 'large' ); ?>
        </div>
        <div class="name-box">
            <p class="cast-sub-name"><?php echo esc_html( $field_value['cast-position'] ); ?></p>
            <p class="cast-name"><?php echo esc_html( $field_value['cast-name'] ); ?></p>
            <p class="name-title"><?php echo esc_html( $field_value['cast-type'] ); ?></p>
        </div>
        <div class="cast-card-text-box">
            <p class="cast-text">
                <?php echo nl2br (esc_html($field_value['cast-text1'])); ?>
            </p>
        </div>
    </div>
<?php } ?>
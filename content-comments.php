<?php
    $group_set = SCF::get( 'all-comments' );//グループ名
    foreach ( $group_set as $field_name => $field_value ) {//繰り返しループ
?>
    <div class="comments-card">
        <p class="comments-card-name"><?php echo esc_html( $field_value['name'] ); ?></p>
        <p class="comments-card-sub-name"><?php echo esc_html( $field_value['name-title'] ); ?></p>
        <p class="comments-card-text">
            <?php echo nl2br (esc_html($field_value['message'])); ?>
        </p>
    </div>
<?php } ?>
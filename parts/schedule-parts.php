    <dl class="schedule-list wow fadeIn">
    <?php
        $page_id = get_page_by_path('home');
        $group_set = SCF::get( 'all-schedule',$page_id );//グループ名
        foreach ( $group_set as $field_name => $field_value ) {//繰り返しループ
    ?>
    <div class="schedule-list-item">
        <dt><time datetime="2020-07-04"><?php echo esc_html( $field_value['schedule-day'] ); ?><span class="start"><?php echo esc_html( $field_value['schedule-time'] ); ?></span></time></dt>
        <dd><span class="place"><?php echo esc_html( $field_value['schedule-place'] ); ?></span><br class="is-sm"><span class="accept"><a href="#">チケット予約受付中</a></span></dd>
    </div>
    <?php } ?>
    </dl>
</div>
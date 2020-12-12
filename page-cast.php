<?php get_header(); ?>
    <div class="breadcrumb cast-breadcrumb">
        <div class="container">
                <?php bcn_display(); //BreadcrumbNavXTのパンくずを表示するための記述 ?>
            <h1 class="section-title cast-page-title"><?php echo get_main_title(); ?></h1>
        </div>
    </div>
    <div class="cast">
        <div class="cast-flex-bg">
            <div class="container">
                <div class="cast-flex wow fadeIn">
                    <?php
                        get_template_part('parts/cast-parts');
                    ?>
                </div>              
            </div>
        </div>
        <div class="cast-member">
            <div class="container">
                <div class="casts-info wow fadeIn">
                <?php
                    $group_set = SCF::get( 'all-casts' );//グループ名
                    foreach ( $group_set as $field_name => $field_value ) {//繰り返しループ
                ?>
                <div class="cast-info">
                    <div class="cast-info-img">
                        <?php echo wp_get_attachment_image( $field_value['cast-image'] , 'large' ); ?>
                    </div>
                    <div class="cast-info-box">
                        <p class="cast-sub-name"><?php echo esc_html( $field_value['cast-position'] ); ?></p>
                        <p class="cast-name"><?php echo esc_html( $field_value['cast-name'] ); ?></p>
                        <p class="name-title"><?php echo esc_html( $field_value['cast-type'] ); ?></p>
                        <p class="cast-text">
                            <?php echo nl2br (esc_html($field_value['cast-text2'])); ?>
                        </p>
                    </div>
                </div>
                <?php } ?>
                </div>
            </div>
        </div>
        <div class="cast-list">
            <div class="container">
                <div class="list-members wow fadeIn">
                <?php
                    $group_set = SCF::get( 'all-casts' );//グループ名
                    foreach ( $group_set as $field_name => $field_value ) {//繰り返しループ
                ?>
                    <div class="list-member">
                        <div class="list-name-box">
                            <p class="cast-sub-name"><?php echo esc_html( $field_value['cast-position'] ); ?></p>
                            <p class="cast-name"><?php echo esc_html( $field_value['cast-name'] ); ?></p>
                            <p class="name-title"><?php echo esc_html( $field_value['cast-type'] ); ?></p>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>


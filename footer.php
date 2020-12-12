    <section id="schedule-section">
        <div class="container">
            <div class="inner">
                <h1 class="section-title wow fadeIn">SCHEDULE</h1>
                <?php
                    get_template_part('parts/schedule-parts');
                ?>
                <?php
                    $inquiry_obj = get_page_by_path('inquiry');
                    $post = $inquiry_obj;
                    setup_postdata($post);
                ?>
            <div class="schedule-btn btn">
                <div class="schedule-contact-btn">
                    <a href="<?php the_permalink(); ?>">お問い合わせはこちら</a>
                </div>
                <?php
                    wp_reset_postdata();
                ?>
                <div class="schedule-accept-btn btn">
                    <a href="#">チケット予約サイトへ</a>
                </div>
            </div>
        </div>
    </section>
</div>
<footer id="footer">
    <small class="copyright">
        Copyright &copy; 2019 完全版マハーバーラタ All Rights Reserved.
    </small>
</footer>
<script>
    new WOW().init();
</script>
<?php wp_footer(); ?>
</body>
</html>
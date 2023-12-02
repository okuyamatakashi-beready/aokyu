<?php get_header(); ?>

<div class="page_mv">
    <div class="page_mv_container">
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact_mv.jpg" alt="" class="">
        </figure>
        <div class="ttl_wrap">
            <h2 class="sec_ttl">
                <div><span>お問い合わせ</span></div>
                <strong>CONTACT</strong>
            </h2>
        </div>
    </div>
    <!-- //page_mv_container -->
</div>
<!-- //page_mv -->

<div class="contact_wrap">
    <p>
        下記ご入力内容に誤りがないかご確認ください。
    </p>
    
        <?php the_content();?>
    <!-- //contact_container -->
    <div class="contact_tel">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about/contact_tel.svg" alt="" class="pc">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about/contact_tel_sp.svg" alt="" class="sp">
    </div>
</div>



<?php get_footer(); ?>
<?php get_header(); ?>

<div class="page_mv">
    <div class="page_mv_container">
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/works/single_mv.jpg" alt="" class="">
        </figure>
        <div class="ttl_wrap">
            <h2 class="sec_ttl">
                <div><span>施工事例</span></div>
                <strong>WORKS</strong>
            </h2>
        </div>
    </div>
    <!-- //page_mv_container -->

    
</div>
<!-- //page_mv -->
<div class="post_wrap">
        <div class="post_ttl">
            <time><?php the_time('Y.m'); ?></time>
            <h1><?php the_title(); ?></h1>
            <ul class="cat_list flex">
                <?php
                    $categories = get_the_category();
                    foreach($categories as $category) {
                    echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                    }
                ?>
            </ul>
        </div>
        <!-- //post_ttl -->

        <div class="post_content">
            <?php the_content(); ?>

            <a href="javascript:history.back();" class="back">
                <img src="<?php echo get_template_directory_uri(); ?>/images/works/back_btn.png" alt="">
            </a>
        </div>
    </div>
    <!-- //post_wrap -->

    <section id="contact">
        <div class="container">
            <h2 class="sec_ttl">
                <strong>CONTACT</strong>
                <div><span>お問い合わせ</span></div>
            </h2>
            <p>
                青久商店株式会社にご興味を持っていただきありがとうございます。<br>
                お問い合わせフォームまたはお電話にて、お気軽にお問い合わせください。
            </p>

            <div class="flex">
                <a href="/contact" class="common_btn"><div><span>VIEW MORE</span></div></a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/about/contact_tel.svg" alt="">
            </div>
        </div>
    </section>

<?php get_footer(); ?>
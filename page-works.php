<?php get_header(); ?>

<div class="page_mv">
    <div class="page_mv_container">
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/images/works/works_mv.jpg" alt="" class="">
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

<div class="works_post_list">
    <div class="container">
        <ul class="works_list flex">
        <?php 
			$paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
					$args = array(
						'posts_per_page' => '3', //表示件数。-1なら全件表示
						'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
						'paged' => $paged,

					);
					?>
					<?php $my_query = new WP_Query( $args ); ?><!-- クエリの指定 -->

					<?php if ( $my_query->have_posts() ) :

						while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>">
					<div class="works_thumb" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)""></div>
					<time><?php the_time('Y.m'); ?></time>
					<h3><?php the_title(); ?></h3>
				</a>
				<ul class="cat_list flex">
					<?php
						$categories = get_the_category();
						foreach($categories as $category) {
						echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
						}
					?>
				</ul>
				
			</li>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>	

        </ul>
        <!-- //works_list -->
    </div>
</div>


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
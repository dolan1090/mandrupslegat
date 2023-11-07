<?php get_header(); ?>

<main>

	<?php
	$queried_object = get_queried_object();
	?>
	<!-- News -->
	<section class="lingerieno1-new">
		<div class="container">
			<div class="row">
				<h1 class="lingerieno1-new__title text-uppercase text-center font-regular mb-5">
					<?php single_cat_title(); ?>
				</h1>
				<div class="lingerieno1-new__list mb-4">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<div class="col-md-4">
								<div class="lingerieno1-new__item">
									<div class="lingerieno1-new__item-thumb">
										<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="lingerieno1-new__item-image" />
									</div>
									<h4 class="lingerieno1-new__item-title font-bold">
										<?php the_title(); ?>
									</h4>
									<p class="lingerieno1-new__item-time">
										<time datetime="">
											<?php
											$adress_news_detail = get_field('adress_news_detail');
											if ($adress_news_detail != '') {
												echo $adress_news_detail . ',';
											}
											?>
											<?php echo get_the_date('d/m/y - H:i'); ?>
										</time>
									</p>
									<div class="lingerieno1-new__item-desc">
										<?php the_excerpt(); ?>
									</div>
									<a href="<?php the_permalink() ?>" class="lingerieno1-new__item-link font-bold">
										<?php echo __('mehr Infos') ?>
									</a>
								</div>
							</div>
						<?php endwhile;
						wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
				<!-- Phân trang -->
				<?php if (paginate_links() != '') { ?>
					<?php
					global $wp_query;
					$big = 999999999;
					echo paginate_links(array(
						'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
						'format' => '?paged=%#%',
						'prev_text'    => __('«'),
						'next_text'    => __('»'),
						'current' => max(1, get_query_var('paged')),
						'total' => $wp_query->max_num_pages
					));
					?>
				<?php } ?>
				<!-- Phân trang -->
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
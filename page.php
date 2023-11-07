<?php get_header(); ?>
<?php $frontPageTitle = get_the_title(get_option('page_on_front')); ?>
<main>
	<?php if (is_front_page()) { ?>
	<?php } else { ?>
		<div class="warrper-title-page">
			<div class="mt-shadow">
				<div class="container">
					<h1>
						<?php echo get_the_title(); ?>
					</h1>
					<div class="breadcumbs">
						<ul>
							<li>
								<a href="<?php bloginfo('url'); ?>">
									<?php if ($frontPageTitle) {
										echo $frontPageTitle;
									} else {
										echo __('Home');
									} ?>
								</a>
							</li>
							<li>/</li>
							<li><?php echo get_the_title(); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	<div class="warrper-content-page">
		<div class='container'>
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>
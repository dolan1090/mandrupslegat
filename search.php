<?php get_header(); ?> 

<!-- Get post mặt định -->
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<?php the_content(); ?>

	<?php endwhile; else : ?>
<?php endif; ?>
<!-- Get post mặt định -->

<!-- Phân trang -->
<?php if(paginate_links()!='') {?>
	<?php
	global $wp_query;
	$big = 999999999;
	echo paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'prev_text'    => __('«'),
		'next_text'    => __('»'),
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages
	) );
	?>
<?php } ?>
<!-- Phân trang -->

<?php get_footer(); ?> 
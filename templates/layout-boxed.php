<?php
/* 
Template Name: Layout Boxed
*/
?>

<?php get_header(); ?>

<main>
	<div class='container'>

		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; ?>
		<?php endif; ?>

	</div>
</main>

<?php get_footer(); ?>
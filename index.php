<?php get_header(); ?>

<main>
	<div class='container-fluid'>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile;
		else : ?>
			<p>Informationen werden aktualisiert</p>
		<?php endif; ?>
	</div>
</main>

<?php get_footer(); ?>
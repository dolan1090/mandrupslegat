<?php get_header(); ?>

<main>
  <div class="container">
    <!-- New Detail -->
    <section class="new-detail">
      <div class="new-detail__header">
        <h1 class="new-detail__headline text-uppercase font-bebasneue"><?php the_title(); ?></h1>
      </div>
      <div class="new-detail__row">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile;
        else : ?>
          <p>Informationen werden aktualisiert</p>
        <?php endif; ?>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>
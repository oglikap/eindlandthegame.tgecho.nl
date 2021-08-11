<?php get_header(); ?>

<div class="page">  
    <div class="uk-container uk-container-large">
    <?php page_header(); ?>
      <div class="page__content">
        <div class="subtitle subtitle--wide">
          Verras ons met jouw blik op de werkelijkheid
        </div>

        <h2 class="page__title"><?php the_title(); ?></h2>

        <div class="uk-container uk-container-small">
          <?php the_field('uitleg'); ?>
        </div>
      </div>
    </div>
</div>

<?php get_footer(); ?>

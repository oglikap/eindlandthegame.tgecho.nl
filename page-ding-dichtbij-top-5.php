<?php get_header(); ?>

<div class="page">  
  <div class="uk-container uk-container-large">

    <?php page_header(); ?>

    <div class="page__content">
      <div class="subtitle subtitle--wide">
        Verras ons met jouw blik op de werkelijkheid
      </div>

      <h2 class="page__title"><?php the_title(); ?></h2>
      <h4 class="page__subtitle"><span>Maak het beste beeld</span></h4>

      <?php if(have_rows('top_5')): ?>

        <div class="card__container">

        <?php while(have_rows('top_5')): the_row(); ?>

          <h2 class="page__title">Week <?php the_sub_field('nummer'); ?></h2>

          <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-5@m uk-grid-match uk-grid-small cards" uk-grid>
          <?php while(have_rows('week')): the_row(); ?>
            <div class="card">
              <div class="card__item">
                <h4 class="card__position">Plek <span><?php the_sub_field('nummer'); ?></span>
                <div class="card__points"><?php the_sub_field('punten'); ?><br><span>punten</span></div></h4>
                <p class="card__name"><?php the_sub_field('inzender'); ?></p>
                <div uk-lightbox>
                  <?php $image = get_sub_field('foto');
                    $url = $image['url'];
                    $size = 'medium_large';
                    $square = $image['sizes'][$size];
                    $onderschrift = get_sub_field('onderschrift'); ?>

                    <a href="<?php echo esc_url($url); ?>">
                      <img src="<?php echo esc_url($square); ?>">
                    </a>

                    <?php if($onderschrift): ?>
                      <div class="card__subtext"><?php echo $onderschrift; ?></div>
                    <?php endif; ?>
                </div>
              </div>
            </div>
            <?php endwhile; //while(have_rows('week')): ?>
          </div>
          
          <?php endwhile; //while(have_rows('top_5')): ?>

          <?php else: ?>

          <div class="uk-container uk-container-small uk-margin-large-top">
           <h2>Nog geen scores!</h2>
            <p>Elke vrijdagavond na 20:57u kiest de jury per foto een TOP VIJF van de leukste inzendingen van die week. Deze wordt zaterdagochtend om 10:02u bekend gemaakt.</p>
          </div>
        </div>
      <?php endif; // if(have_rows('top_5')): ?>
        
  </div>

  <footer class="page-footer">
    <div class="uk-container uk-container-large">
      <div class="uk-flex uk-flex-right">
        <a href="#" class="button">
          <img src="<?php echo esc_url(get_theme_file_uri('/images/uitleg-240.png')); ?>" alt="">            
        </a>
      </div>
    </div>
  </footer>
</div>

<?php get_footer(); ?>

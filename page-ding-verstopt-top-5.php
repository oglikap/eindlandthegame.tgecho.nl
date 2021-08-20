<?php get_header(); ?>

<div class="page">
  <div class="uk-container uk-container-large">
  <?php page_header(); ?>

    <div class="page__content">

      <div class="subtitle subtitle--wide">
        Verras ons met jouw blik op de werkelijkheid
      </div>
    
      <h2 class="page__title"><?php the_title(); ?></h2>
      <h4 class="page__subtitle"><span>Verzin de beste tekst</span></h4>

      <div class="card__container uk-margin-top">
        <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m uk-grid-match uk-grid-small cards" uk-grid>

          <?php while(have_rows('photos_verstopt')): the_row(); ?>
            <div class="card">
              <div class="card__item">
                <h4 class="card__position"><span><?php the_sub_field('nummer'); ?></span></h4>
                <div uk-lightbox>
                  <?php $image = get_sub_field('foto');
                  
                    if($image) { 
                      $url = $image['url'];
                      $size = 'medium_large';
                      $square = $image['sizes'][$size]; ?>

                    <a href="<?php echo esc_url($url); ?>">
                      <img src="<?php echo esc_url($square); ?>">
                    </a>

                    <?php } else { ?>
                      <img class="card__question" src="<?php echo esc_url(get_theme_file_uri('/images/vraagteken--300.png')); ?>" alt="Vraagteken">

                    <?php } ?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>

        <?php if(have_rows('weekscore_verstopt')) { ?>
          <?php while(have_rows('weekscore_verstopt')) { the_row(); ?>

            <h3>Week <?php the_sub_field('week_nr'); ?></h3>

            <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m uk-grid-match uk-grid-small ranking" uk-grid>
            <?php while(have_rows('scorebord')) { the_row(); ?>
              <div class="">
                <div class="ranking__item">
                  <div class="ranking__position">
                    <span class="ranking__number"><?php the_sub_field('ranking_nummer'); ?></span>. 
                    <span class="ranking__name"><?php the_sub_field('naam'); ?></span>
                    <span class="ranking__points"><?php the_sub_field('punten'); ?></span>

                  </div>
                  <p class="ranking__text"><?php the_sub_field('tekst'); ?></p>
                </div>
              </div>              
              <?php } ?>
            </div>
          
            <?php } ?>
        <?php } //(have_rows('weekscore_verstopt')):
        else { ?>
          <div class="uk-container uk-container-small uk-margin-large-top">
           <h2>Nog geen scores!</h2>
            <p>Elke vrijdagavond na 20:57u kiest de jury per foto een TOP VIJF van de leukste inzendingen van die week. Deze wordt zaterdagochtend om 10:02u bekend gemaakt.</p>
          </div>
       <?php } ?>

      </div>
    </div><!-- .page-content -->
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

<div class="uitleg__overlay">
  <div class="uk-container uk-flex uk-flex-right uitleg__top">
    <a class="uitleg__close" href="#" uk-icon="close"></a>
  </div>
  <div class="uk-container uk-container-small">
    <?php the_field('uitleg') ;?>
  </div>
</div>

<script>
  // const uitleg = document.querySelector('.uitleg__button');
  // const uitlegClose = document.querySelector('.uitleg__close');

  // const uitlegOverlay = document.querySelector('.uitleg__overlay');

  // uitleg.addEventListener('click', function() {
  //   uitlegOverlay.classList.add('uitleg__overlay--active')
  // })

  // uitlegClose.addEventListener('click', function() {
  //   uitlegOverlay.classList.remove('uitleg__overlay--active')
  // })
</script>

<?php get_footer(); ?>

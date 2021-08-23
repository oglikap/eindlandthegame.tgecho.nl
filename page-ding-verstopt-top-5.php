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
                    
                if($image): 
                $url = $image['url'];
                $size = 'medium_large';
                $square = $image['sizes'][$size]; ?>

                <a href="<?php echo esc_url($url); ?>">
                  <img src="<?php echo esc_url($square); ?>">
                </a>

                <?php else: ?>
                  <img class="card__question" src="<?php echo esc_url(get_theme_file_uri('/images/vraagteken--300.png')); ?>" alt="Vraagteken">

                <?php endif; ?>
              </div>

            </div>
          </div>
        <?php endwhile; // photos_verstopt ?>
           
        </div>

        <?php if(have_rows('score_week_5')): ?>
        <h3>Week 5.</h3>
        <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m ranking uk-grid-match uk-grid-small" uk-grid>
          <div>
            <div class="ranking__container">
              <span class="ranking__list-nr">I.</span>
              <?php while(have_rows('score_week_0')): the_row(); ?>
              <div class="ranking__item">
                <?php ranking_chart(); ?>
              </div>
            <?php endwhile; ?>
            </div>
          </div>     
          <div>
            <div class="ranking__container">
              <span class="ranking__list-nr">II.</span>
              <?php while(have_rows('score_week_1')): the_row(); ?>
              <div class="ranking__item">
                <?php ranking_chart(); ?>
              </div>
            <?php endwhile; ?>
            </div>
          </div>
           <div>
             <div class="ranking__container">
              <span class="ranking__list-nr">III.</span>
              <?php while(have_rows('score_week_2')): the_row(); ?>
              <div class="ranking__item">
                <?php ranking_chart(); ?>
              </div>
            <?php endwhile; ?>
            </div>
          </div>
          <div>
            <div class="ranking__container">
              <span class="ranking__list-nr">IV.</span>
              <?php while(have_rows('score_week_3')): the_row(); ?>
              <div class="ranking__item">
                <?php ranking_chart(); ?>
              </div>
            <?php endwhile; ?>
            </div>
          </div>
          <div>
            <div class="ranking__container">
              <span class="ranking__list-nr">V.</span>
              <?php while(have_rows('score_week_4')): the_row(); ?>
              <div class="ranking__item">
                <?php ranking_chart(); ?>
              </div>
            <?php endwhile; ?>
            </div>
          </div>
          <div>
            <div class="ranking__container">
              <span class="ranking__list-nr">VI.</span>
              <?php while(have_rows('score_week_5')): the_row(); ?>
              <div class="ranking__item">
                <?php ranking_chart(); ?>
              </div>
            <?php endwhile; ?>
            </div>
          </div>    
        </div>
        <?php endif; ?>

        <?php if(have_rows('score_week_4')): ?>
        <h3>Week 4.</h3>
        <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m ranking uk-grid-match uk-grid-small" uk-grid>
          <div>
            <div class="ranking__container">
              <span class="ranking__list-nr">I.</span>
              <?php while(have_rows('score_week_0')): the_row(); ?>
              <div class="ranking__item">
                <?php ranking_chart(); ?>
              </div>
            <?php endwhile; ?>
            </div>
          </div>     
          <div>
           <div class="ranking__container">
              <span class="ranking__list-nr">II.</span>
              <?php while(have_rows('score_week_1')): the_row(); ?>
              <div class="ranking__item">
                <?php ranking_chart(); ?>
              </div>
            <?php endwhile; ?>
            </div>
          </div>
           <div>
             <div class="ranking__container">
              <span class="ranking__list-nr">III.</span>
              <?php while(have_rows('score_week_2')): the_row(); ?>
              <div class="ranking__item">
                <?php ranking_chart(); ?>
              </div>
            <?php endwhile; ?>
            </div>
          </div>
          <div>
            <div class="ranking__container">
              <span class="ranking__list-nr">IV.</span>
              <?php while(have_rows('score_week_3')): the_row(); ?>
              <div class="ranking__item">
                <?php ranking_chart(); ?>
              </div>
            <?php endwhile; ?>
            </div>
          </div>
          <div>
            <div class="ranking__container">
              <span class="ranking__list-nr">V.</span>
              <?php while(have_rows('score_week_4')): the_row(); ?>
              <div class="ranking__item">
                <?php ranking_chart(); ?>
              </div>
            <?php endwhile; ?>
            </div>
          </div>       
        </div>
        <?php endif; ?>

        <?php if(have_rows('score_week_3')): ?>
        <h3>Week 3.</h3>
        <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m ranking uk-grid-match uk-grid-small" uk-grid>
          <div>
            <div class="ranking__container">
              <span class="ranking__list-nr">I.</span>
              <?php while(have_rows('score_week_0')): the_row(); ?>
              <div class="ranking__item">
                <?php ranking_chart(); ?>
              </div>
            <?php endwhile; ?>
            </div>
          </div>     
          <div>
            <div class="ranking__container">
              <span class="ranking__list-nr">II.</span>
              <?php while(have_rows('score_week_1')): the_row(); ?>
              <div class="ranking__item">
                <?php ranking_chart(); ?>
              </div>
            <?php endwhile; ?>
            </div>
          </div>
           <div>
            <div class="ranking__container">
              <span class="ranking__list-nr">III.</span>
              <?php while(have_rows('score_week_2')): the_row(); ?>
              <div class="ranking__item">
                <?php ranking_chart(); ?>
              </div>
            <?php endwhile; ?>
            </div>
          </div>
          <div>
            <div class="ranking__container">
              <span class="ranking__list-nr">IV.</span>
              <?php while(have_rows('score_week_3')): the_row(); ?>
              <div class="ranking__item">
                <?php ranking_chart(); ?>
              </div>
            <?php endwhile; ?>
            </div>
          </div>       
        </div>
        <?php endif; ?>

        <?php if(have_rows('score_week_2')): ?>
        <h3>Week 2.</h3>
        <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m ranking uk-grid-match uk-grid-small" uk-grid>
          <div>
            <div class="ranking__container">
              <span class="ranking__list-nr">I.</span>
              <?php while(have_rows('score_week_0')): the_row(); ?>
              <div class="ranking__item">
                <?php ranking_chart(); ?>
              </div>
            <?php endwhile; ?>
            </div>
          </div>     
          <div>
          <div class="ranking__container">
              <span class="ranking__list-nr">II.</span>
              <?php while(have_rows('score_week_1')): the_row(); ?>
              <div class="ranking__item">
                <?php ranking_chart(); ?>
              </div>
            <?php endwhile; ?>
            </div>
          </div>
          <div>
            <div class="ranking__container">
                <span class="ranking__list-nr">III.</span>
                <?php while(have_rows('score_week_2')): the_row(); ?>
                <div class="ranking__item">
                  <?php ranking_chart(); ?>
                </div>
              <?php endwhile; ?>
            </div>
          </div>       
        </div>
        <?php endif; ?>

        <?php if(have_rows('score_week_1')): ?>
        <h3>Week 1.</h3>
        <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m ranking uk-grid-match uk-grid-small" uk-grid>
          <div>
            <div class="ranking__container">
                <span class="ranking__list-nr">I.</span>
                <?php while(have_rows('score_week_0')): the_row(); ?>
                <div class="ranking__item">
                  <?php ranking_chart(); ?>
                </div>
            <?php endwhile; ?>
            </div>
          </div>     
          <div>
           <div class="ranking__container">
              <span class="ranking__list-nr">II.</span>
              <?php while(have_rows('score_week_1')): the_row(); ?>
              <div class="ranking__item">
                <?php ranking_chart(); ?>
              </div>
            <?php endwhile; ?>
            </div>
          </div>       
        </div>
        <?php endif; ?>

      </div>

    </div>
  </div>
  <footer class="page-footer">
    <div class="uk-container uk-container-large">
      <div class="uk-flex uk-flex-right">
        <a href="#" class="button uitleg__button">
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
    <?php uitleg_jury(); ?>
  </div>
</div>

<script>
  const uitleg = document.querySelector('.uitleg__button');
  const uitlegClose = document.querySelector('.uitleg__close');

  const uitlegOverlay = document.querySelector('.uitleg__overlay');

  uitleg.addEventListener('click', function() {
    uitlegOverlay.classList.add('uitleg__overlay--active')
  })

  uitlegClose.addEventListener('click', function() {
    uitlegOverlay.classList.remove('uitleg__overlay--active')
  })
</script>

<?php get_footer(); ?>

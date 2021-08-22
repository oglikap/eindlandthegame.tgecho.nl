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
        
        <div>
        
         </div>     
        </div>

        <?php if(have_rows('score_week_5')): ?>
        <h3>Week 5.</h3>
        <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m ranking uk-grid-match uk-grid-small" uk-grid>
          <div>
            <?php while(have_rows('score_week_0')): the_row(); ?>
              <div class="ranking__item">
                <div class="ranking__position">
                  <span class="ranking__number"><?php the_sub_field('ranking_nummer'); ?>. </span>
                  <span class="ranking__name"><?php the_sub_field('naam'); ?></span>
                  <span class="ranking__points"><?php the_sub_field('punten'); ?></span>
                </div>
                <p class="ranking__text"><?php the_sub_field('tekst'); ?></p>
              </div>
            <?php endwhile; ?>
          </div>     
          <div>
            <?php while(have_rows('score_week_1')): the_row(); ?>
              <div class="ranking__item">
                <div class="ranking__position">
                  <span class="ranking__number"><?php the_sub_field('ranking_nummer'); ?>. </span>
                  <span class="ranking__name"><?php the_sub_field('naam'); ?></span>
                  <span class="ranking__points"><?php the_sub_field('punten'); ?></span>
                </div>
                <p class="ranking__text"><?php the_sub_field('tekst'); ?></p>
              </div>
            <?php endwhile; ?>
          </div>
           <div>
            <?php while(have_rows('score_week_2')): the_row(); ?>
              <div class="ranking__item">
                <div class="ranking__position">
                  <span class="ranking__number"><?php the_sub_field('ranking_nummer'); ?>. </span>
                  <span class="ranking__name"><?php the_sub_field('naam'); ?></span>
                  <span class="ranking__points"><?php the_sub_field('punten'); ?></span>
                </div>
                <p class="ranking__text"><?php the_sub_field('tekst'); ?></p>
              </div>
            <?php endwhile; ?>
          </div>
          <div>
            <?php while(have_rows('score_week_3')): the_row(); ?>
              <div class="ranking__item">
                <div class="ranking__position">
                  <span class="ranking__number"><?php the_sub_field('ranking_nummer'); ?>. </span>
                  <span class="ranking__name"><?php the_sub_field('naam'); ?></span>
                  <span class="ranking__points"><?php the_sub_field('punten'); ?></span>
                </div>
                <p class="ranking__text"><?php the_sub_field('tekst'); ?></p>
              </div>
            <?php endwhile; ?>
          </div>
          <div>
            <?php while(have_rows('score_week_4')): the_row(); ?>
              <div class="ranking__item">
                <div class="ranking__position">
                  <span class="ranking__number"><?php the_sub_field('ranking_nummer'); ?>. </span>
                  <span class="ranking__name"><?php the_sub_field('naam'); ?></span>
                  <span class="ranking__points"><?php the_sub_field('punten'); ?></span>
                </div>
                <p class="ranking__text"><?php the_sub_field('tekst'); ?></p>
              </div>
            <?php endwhile; ?>
          </div>
          <div>
            <?php while(have_rows('score_week_5')): the_row(); ?>
              <div class="ranking__item">
                <div class="ranking__position">
                  <span class="ranking__number"><?php the_sub_field('ranking_nummer'); ?>. </span>
                  <span class="ranking__name"><?php the_sub_field('naam'); ?></span>
                  <span class="ranking__points"><?php the_sub_field('punten'); ?></span>
                </div>
                <p class="ranking__text"><?php the_sub_field('tekst'); ?></p>
              </div>
            <?php endwhile; ?>
          </div>    
        </div>
        <?php endif; ?>

        <?php if(have_rows('score_week_4')): ?>
        <h3>Week 4.</h3>
        <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m ranking uk-grid-match uk-grid-small" uk-grid>
          <div>
            <?php while(have_rows('score_week_0')): the_row(); ?>
              <div class="ranking__item">
                <div class="ranking__position">
                  <span class="ranking__number"><?php the_sub_field('ranking_nummer'); ?>. </span>
                  <span class="ranking__name"><?php the_sub_field('naam'); ?></span>
                  <span class="ranking__points"><?php the_sub_field('punten'); ?></span>
                </div>
                <p class="ranking__text"><?php the_sub_field('tekst'); ?></p>
              </div>
            <?php endwhile; ?>
          </div>     
          <div>
            <?php while(have_rows('score_week_1')): the_row(); ?>
              <div class="ranking__item">
                <div class="ranking__position">
                  <span class="ranking__number"><?php the_sub_field('ranking_nummer'); ?>. </span>
                  <span class="ranking__name"><?php the_sub_field('naam'); ?></span>
                  <span class="ranking__points"><?php the_sub_field('punten'); ?></span>
                </div>
                <p class="ranking__text"><?php the_sub_field('tekst'); ?></p>
              </div>
            <?php endwhile; ?>
          </div>
           <div>
            <?php while(have_rows('score_week_2')): the_row(); ?>
              <div class="ranking__item">
                <div class="ranking__position">
                  <span class="ranking__number"><?php the_sub_field('ranking_nummer'); ?>. </span>
                  <span class="ranking__name"><?php the_sub_field('naam'); ?></span>
                  <span class="ranking__points"><?php the_sub_field('punten'); ?></span>
                </div>
                <p class="ranking__text"><?php the_sub_field('tekst'); ?></p>
              </div>
            <?php endwhile; ?>
          </div>
          <div>
            <?php while(have_rows('score_week_3')): the_row(); ?>
              <div class="ranking__item">
                <div class="ranking__position">
                  <span class="ranking__number"><?php the_sub_field('ranking_nummer'); ?>. </span>
                  <span class="ranking__name"><?php the_sub_field('naam'); ?></span>
                  <span class="ranking__points"><?php the_sub_field('punten'); ?></span>
                </div>
                <p class="ranking__text"><?php the_sub_field('tekst'); ?></p>
              </div>
            <?php endwhile; ?>
          </div>
          <div>
            <?php while(have_rows('score_week_4')): the_row(); ?>
              <div class="ranking__item">
                <div class="ranking__position">
                  <span class="ranking__number"><?php the_sub_field('ranking_nummer'); ?>. </span>
                  <span class="ranking__name"><?php the_sub_field('naam'); ?></span>
                  <span class="ranking__points"><?php the_sub_field('punten'); ?></span>
                </div>
                <p class="ranking__text"><?php the_sub_field('tekst'); ?></p>
              </div>
            <?php endwhile; ?>
          </div>       
        </div>
        <?php endif; ?>

        <?php if(have_rows('score_week_3')): ?>
        <h3>Week 3.</h3>
        <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m ranking uk-grid-match uk-grid-small" uk-grid>
          <div>
            <?php while(have_rows('score_week_0')): the_row(); ?>
              <div class="ranking__item">
                <div class="ranking__position">
                  <span class="ranking__number"><?php the_sub_field('ranking_nummer'); ?>. </span>
                  <span class="ranking__name"><?php the_sub_field('naam'); ?></span>
                  <span class="ranking__points"><?php the_sub_field('punten'); ?></span>
                </div>
                <p class="ranking__text"><?php the_sub_field('tekst'); ?></p>
              </div>
            <?php endwhile; ?>
          </div>     
          <div>
            <?php while(have_rows('score_week_1')): the_row(); ?>
              <div class="ranking__item">
                <div class="ranking__position">
                  <span class="ranking__number"><?php the_sub_field('ranking_nummer'); ?>. </span>
                  <span class="ranking__name"><?php the_sub_field('naam'); ?></span>
                  <span class="ranking__points"><?php the_sub_field('punten'); ?></span>
                </div>
                <p class="ranking__text"><?php the_sub_field('tekst'); ?></p>
              </div>
            <?php endwhile; ?>
          </div>
           <div>
            <?php while(have_rows('score_week_2')): the_row(); ?>
              <div class="ranking__item">
                <div class="ranking__position">
                  <span class="ranking__number"><?php the_sub_field('ranking_nummer'); ?>. </span>
                  <span class="ranking__name"><?php the_sub_field('naam'); ?></span>
                  <span class="ranking__points"><?php the_sub_field('punten'); ?></span>
                </div>
                <p class="ranking__text"><?php the_sub_field('tekst'); ?></p>
              </div>
            <?php endwhile; ?>
          </div>
          <div>
            <?php while(have_rows('score_week_3')): the_row(); ?>
              <div class="ranking__item">
                <div class="ranking__position">
                  <span class="ranking__number"><?php the_sub_field('ranking_nummer'); ?>. </span>
                  <span class="ranking__name"><?php the_sub_field('naam'); ?></span>
                  <span class="ranking__points"><?php the_sub_field('punten'); ?></span>
                </div>
                <p class="ranking__text"><?php the_sub_field('tekst'); ?></p>
              </div>
            <?php endwhile; ?>
          </div>       
        </div>
        <?php endif; ?>

        <?php if(have_rows('score_week_2')): ?>
        <h3>Week 2.</h3>
        <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m ranking uk-grid-match uk-grid-small" uk-grid>
          <div>
            <?php while(have_rows('score_week_0')): the_row(); ?>
              <div class="ranking__item">
                <div class="ranking__position">
                  <span class="ranking__number"><?php the_sub_field('ranking_nummer'); ?>. </span>
                  <span class="ranking__name"><?php the_sub_field('naam'); ?></span>
                  <span class="ranking__points"><?php the_sub_field('punten'); ?></span>
                </div>
                <p class="ranking__text"><?php the_sub_field('tekst'); ?></p>
              </div>
            <?php endwhile; ?>
          </div>     
          <div>
            <?php while(have_rows('score_week_1')): the_row(); ?>
              <div class="ranking__item">
                <div class="ranking__position">
                  <span class="ranking__number"><?php the_sub_field('ranking_nummer'); ?>. </span>
                  <span class="ranking__name"><?php the_sub_field('naam'); ?></span>
                  <span class="ranking__points"><?php the_sub_field('punten'); ?></span>
                </div>
                <p class="ranking__text"><?php the_sub_field('tekst'); ?></p>
              </div>
            <?php endwhile; ?>
          </div>
           <div>
            <?php while(have_rows('score_week_2')): the_row(); ?>
              <div class="ranking__item">
                <div class="ranking__position">
                  <span class="ranking__number"><?php the_sub_field('ranking_nummer'); ?>. </span>
                  <span class="ranking__name"><?php the_sub_field('naam'); ?></span>
                  <span class="ranking__points"><?php the_sub_field('punten'); ?></span>
                </div>
                <p class="ranking__text"><?php the_sub_field('tekst'); ?></p>
              </div>
            <?php endwhile; ?>
          </div>       
        </div>
        <?php endif; ?>

        <?php if(have_rows('score_week_1')): ?>
        <h3>Week 1.</h3>
        <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m ranking uk-grid-match uk-grid-small" uk-grid>
          <div>
            <?php while(have_rows('score_week_0')): the_row(); ?>
              <div class="ranking__item">
                <div class="ranking__position">
                  <span class="ranking__number"><?php the_sub_field('ranking_nummer'); ?>. </span>
                  <span class="ranking__name"><?php the_sub_field('naam'); ?></span>
                  <span class="ranking__points"><?php the_sub_field('punten'); ?></span>
                </div>
                <p class="ranking__text"><?php the_sub_field('tekst'); ?></p>
              </div>
            <?php endwhile; ?>
          </div>     
          <div>
            <?php while(have_rows('score_week_1')): the_row(); ?>
              <div class="ranking__item">
                <div class="ranking__position">
                  <span class="ranking__number"><?php the_sub_field('ranking_nummer'); ?>. </span>
                  <span class="ranking__name"><?php the_sub_field('naam'); ?></span>
                  <span class="ranking__points"><?php the_sub_field('punten'); ?></span>
                </div>
                <p class="ranking__text"><?php the_sub_field('tekst'); ?></p>
              </div>
            <?php endwhile; ?>
          </div>       
        </div>
        <?php endif; ?>

        <?php if(have_rows('score_week_0')): ?>
        <h3>Week 0.</h3>
        <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m ranking uk-grid-match uk-grid-small cards" uk-grid>
          <div>
            <?php while(have_rows('score_week_0')): the_row(); ?>
              <div class="ranking__item">
                <div class="ranking__position">
                  <span class="ranking__number"><?php the_sub_field('ranking_nummer'); ?>. </span>
                  <span class="ranking__name"><?php the_sub_field('naam'); ?></span>
                  <span class="ranking__points"><?php the_sub_field('punten'); ?></span>
                </div>
                <p class="ranking__text"><?php the_sub_field('tekst'); ?></p>
              </div>
            <?php endwhile; ?>
          </div>       
        </div>
      <?php endif; ?>

      </div>

    </div>
  </div>
</div>

<?php get_footer(); ?>

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

        <?php if(have_rows('week_beeld')): ?>

          <div class="uk-grid-collapse uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@l frames" uk-grid="masonry: true">
            <?php while(have_rows('week_beeld')): the_row(); 
              
              $name = get_sub_field('naam_beeld');
              $text = get_sub_field('tekst_beeld');
            ?>
            <div>
              <div class="frames__item">
                <div class="frames__bg-img" style="background-image: url(<?php echo esc_url(get_theme_file_uri('/images/polaroid_frame--small.png')); ?>);">
                  <!-- FOTO -->
                  <div class="frames__image">
                    <?php if(get_sub_field('image_beeld')) { ?>
                      <img style="top: 1.7em" src="<?php the_sub_field('image_beeld'); ?>" alt="">
                    <?php } else { ?>
                      <img class="frames__question" src="<?php echo esc_url(get_theme_file_uri('/images/vraagteken--300.png')); ?>" alt="">
                    <?php } ?>

                  </div>
                  <div class="frames__credit"><span>Foto:</span> <?php echo $name; ?></div>

                  <?php if($text) { ?>
                    <div class="frames__img-comment">
                      <?php echo $text; ?>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
            <?php endwhile; // have_rows('week_beeld') ?>
          </div>

        <?php endif; // have_rows('week_beeld') ?>
      </div>

    </div>
  </div>
  <?php get_footer(); ?>

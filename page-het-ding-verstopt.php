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

        <?php if(have_rows('week')): ?>
          <div class="uk-grid-collapse uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@l frames" uk-grid="masonry: true">
            <?php while(have_rows('week')): the_row(); 
        
              $week = get_sub_field('which_week');
              $coordinates = get_sub_field('coordinates')
              ?>
              <div>
                <div class="frames__item">
                  <div class="frames__bg-img" style="background-image: url(
                    <?php echo esc_url(get_theme_file_uri('/images/polaroid_frame--small.png')); ?>
                      )">
                    <div class="frames__date"><?php echo $week ?></div>
                    <div class="frames__coordinates"><?php echo $coordinates ?></div>

                    <!-- FOTO -->
                    <div class="frames__image">
                      <?php if(get_sub_field('image')) { ?>
                        <img src="<?php the_sub_field('image'); ?>" alt="">
                      <?php } else { ?>
                        <img class="frames__question" src="<?php echo esc_url(get_theme_file_uri('/images/vraagteken--300.png')); ?>" alt="">
                      <?php } ?>
                    </div>
                     
                  </div>
                  <?php if( have_rows('items') ):
                      while( have_rows('items') ) : the_row();
                      $name = get_sub_field('naam');
                      $text = get_sub_field('tekst'); ?>

                      <div class="frames__items">
                        <div class="frames__name">Naam: <span><?php echo $name; ?></span></div>
                        <div class="frames__text"><?php echo $text; ?></div>
                      </div>
                    <?php endwhile; endif; ?>
                </div>
                
              </div>
             
             <?php endwhile; // have_rows('week')): the_row(); ?>  
          </div>

        <?php endif; // have_rows('week') ?>
        <div class="page__uitleg">
          <a href="#" class="uitleg__button">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/uitleg-240.png')); ?>" alt="">            
          </a>
        </div>
      </div>
    </div>
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

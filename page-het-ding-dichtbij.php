<?php get_header(); ?>

<style>
  .frames__image > img {
     top: 1.7em;
  }
</style>

  <div class="page">  
    <div class="uk-container uk-container-large">

      <?php page_header(); ?>
      <div class="page__content">
        <div class="subtitle subtitle--wide">
          Verras ons met jouw blik op de werkelijkheid
        </div>

        <h2 class="page__title"><?php the_title(); ?></h2>
        <h4 class="page__subtitle"><span>Maak het beste beeld</span></h4>

        <?php if(have_rows('week_beeld_6')): ?>
          <h3>Week 2</h3>
          <div class="uk-grid-collapse uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@l frames" uk-grid="masonry: true">
            <?php while(have_rows('week_beeld_6')): the_row(); 
              frames_item();
            endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if(have_rows('week_beeld_5')): ?>
          <h3>Week 2</h3>
          <div class="uk-grid-collapse uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@l frames" uk-grid="masonry: true">
            <?php while(have_rows('week_beeld_5')): the_row(); 
              frames_item();
            endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if(have_rows('week_beeld_4')): ?>
          <h3>Week 2</h3>
          <div class="uk-grid-collapse uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@l frames" uk-grid="masonry: true">
            <?php while(have_rows('week_beeld_4')): the_row(); 
              frames_item();
            endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if(have_rows('week_beeld_3')): ?>
          <h3>Week 2</h3>
          <div class="uk-grid-collapse uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@l frames" uk-grid="masonry: true">
            <?php while(have_rows('week_beeld_3')): the_row(); 
              frames_item();
            endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if(have_rows('week_beeld_2')): ?>
          <h3>Week 2</h3>
          <div class="uk-grid-collapse uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@l frames" uk-grid="masonry: true">
            <?php while(have_rows('week_beeld_2')): the_row(); 
              frames_item();
            endwhile; ?>
          </div>
        <?php endif; ?>

        <?php if(have_rows('week_beeld')): ?>
          <h3>Week 1</h3>
          <div class="uk-grid-collapse uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@l frames" uk-grid="masonry: true">
            <?php while(have_rows('week_beeld')): the_row();
              frames_item();
            endwhile; ?>
          </div>
        <?php endif; ?>
        
      </div>

    </div>
    <footer class="page-footer">
      <div class="uk-container uk-container-large">
        <div class="uk-flex uk-flex-right uk-flex-middle">
          <a href="#" class="button uitleg__button">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/uitleg-240.png')); ?>" alt="">            
          </a>
          <a href="<?php echo esc_url(site_url('ding-dichtbij-top-5')); ?>" class="button">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/ranking-240.png')); ?>" alt="">            
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

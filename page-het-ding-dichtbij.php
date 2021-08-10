<?php get_header(); ?>

<div class="uk-container uk-container-large">
  <?php page_header(); ?>

  <div class="page">
    <div class="page__content">

      <?php subtitle(); ?>
    
      <h2 class="page__title">Deel 2: Het ding dichtbij</h2>
      <h4 class="page__subtitle">Maak het beste beeld</h4>

      <?php if(have_rows('week_beeld')): ?>
        <ul class="frames">

        <?php while(have_rows('week_beeld')): the_row(); 
        
          $name = get_sub_field('naam_beeld');
          $text = get_sub_field('tekst_beeld');
          ?>
          <li class="frames__item" style="background-image: url(<?php echo esc_url(get_theme_file_uri('/images/polaroid_frame--small.png')); ?>)">
            <div class="frames__image">
              <?php if(get_sub_field('image_beeld')) { ?>
                <img src="<?php the_sub_field('image_beeld'); ?>" alt="">
              <?php } else { ?>
                <img class="frames__question" src="<?php echo esc_url(get_theme_file_uri('/images/vraagteken--300.png')); ?>" alt="">
              <?php } ?>

              <div class="frames__credit"><span>Foto:</span> <?php echo $name; ?></div>
              <?php if($text) { ?>
                <div class="frames__img-comment">
                  <?php echo $text; ?>
                </div>
              <?php } ?>
            </div>
          <?php ?>

          </li>

        <?php endwhile; ?>
        </ul>
      <?php endif; ?>
        
        
    </div>
    <div class="page__uitleg">
        <a href="#" class="uitleg__button">
          <img src="<?php echo esc_url(get_theme_file_uri('/images/uitleg-240.png')); ?>" alt="">            
        </a>
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

<?php get_header(); ?>

<div class="front-page" style="padding-top: 6em">
  <div class="uk-container">
    <div class="front-page__image">
      <?php logo(); ?>
      <img src="<?php if(wp_is_mobile()) {
        echo get_theme_file_uri('/images/kaart-zonder-tekst-stip--small.jpg');
      } else {
        echo get_theme_file_uri('/images/kaart-zonder-tekst-stip--large.jpg');
      } ?>"; alt="<?php echo bloginfo('title'); ?>">
      
      <?php subtitle(); ?>
    </div>
  
    <div class="front-page__start">
      <a class="front-page__button" href="<?php echo esc_url(site_url('start')); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/start-300.png" alt="Start">
      </a>
    </div>
  </div>  
</div> 

<?php get_footer(); ?>

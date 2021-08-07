<?php get_header(); ?>

  <?php if(is_user_logged_in()) { ?>
  
  <div class="front-page">
    <div class="uk-container">
      <div class="front-page__image">
        <?php logo(); ?>
        <img src="<?php 
        if(wp_is_mobile()) {
          echo get_theme_file_uri('/images/kaart-zonder-tekst--small.jpg');
         } else {
          echo get_theme_file_uri('/images/kaart-zonder-tekst--large.jpg');
         } ?>"; alt="<?php echo bloginfo('title'); ?>">
        <div class="front-page__verras">
          Verras ons met jouw blik op de werkelijkheid
        </div>

        <style>
          #stip {
            <?php if(get_field('top')) { ?>
              top: <?php the_field('top'); ?>%;
            <?php } 
            if(get_field('left')) { ?>
             left: <?php the_field('left'); ?>%;
             <?php } ?>
          }
        </style>

        <div class="front-page__stip" id="stip">
           <img src="<?php echo get_theme_file_uri('/images/stip-80.png'); ?>" />
        </div>
      </div>
     
      <div class="front-page__start">
        <a class="front-page__button" href="<?php echo esc_url(site_url('start')); ?>">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/start-300.png" alt="Start">
        </a>
      </div>
    </div>  
   </div>
  
  <?php } else { ?> 
    <div id="demo" class="countdown" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/countdown2.jpg);"></div>

    <script>
    var countDownDate = new Date("Aug 14, 2021 15:37:25").getTime();

    var x = setInterval(function() {

      var now = new Date().getTime();
        
      var distance = countDownDate - now;
        
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
      document.getElementById("demo").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";
        
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
    </script>

 <?php } ?>  

<?php get_footer(); ?>

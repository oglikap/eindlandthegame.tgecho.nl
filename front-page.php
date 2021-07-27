<?php get_header(); ?>

  <?php if(is_user_logged_in()) { ?>
  
  <div class="front-page">
    <div class="uk-container">
    <img src="<?php echo get_theme_file_uri('/images/countdown.jpg'); ?>"; alt="<?php echo bloginfo('title'); ?>">
      <a class="front-page__start" href="<?php echo esc_url(site_url('start')); ?>">Start</a>
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

<?php get_header(); ?>

  <?php if(is_user_logged_in()) { ?>
  
    <div class="front-page">
    <div class="uk-container">
      <h1 class="site-sitle"><?php echo bloginfo('title'); ?></h1>
      <h3 class="site-description"><?php echo bloginfo('description'); ?></h3>
      <a href="<?php echo esc_url(site_url('start')); ?>">Start</a>
    </div>  
   </div>
  
  <?php } else { ?> 
    <div id="demo" class="countdown" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/countdown.jpg);"></div>

    <script>
    // Set the date we're counting down to
    var countDownDate = new Date("Aug 14, 2021 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();
        
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
        
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
      // Output the result in an element with id="demo"
      document.getElementById("demo").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";
        
      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
    </script>

 <?php } ?>  

<?php get_footer(); ?>

<?php function photo() { ?>

  <!-- FOTO -->
  <div class="frames__image" uk-lightbox>
      <?php 
        $image_beeld = get_sub_field('image_beeld');
      
        if($image_beeld) {
          $url = $image_beeld['url'];
          $size = 'square';
          $square = $image_beeld['sizes'][$size];
        ?>
        <a href="<?php echo esc_url($url); ?>" data-caption="Foto: <?php echo esc_attr($name); ?>">
          <img style="top: 1.7em" src="<?php echo esc_url($square); ?>" alt="<?php echo esc_attr($name); ?>">
        </a>
        <?php
      } else { ?>
        <img class="frames__question" src="<?php echo esc_url(get_theme_file_uri('/images/vraagteken--300.png')); ?>" alt="">
      <?php } ?>

    </div>

<?php } ?>
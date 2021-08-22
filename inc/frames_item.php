<?php function frames_item() { 
   $name = get_sub_field('naam_beeld');
   $text = get_sub_field('tekst_beeld'); ?>
  <div>
  <div class="frames__item">
    <div class="frames__bg-img" style="background-image: url(<?php echo esc_url(get_theme_file_uri('/images/polaroid_frame--small.png')); ?>);">
      <!-- FOTO -->
      <div class="frames__image" uk-lightbox>
        <?php $image_beeld = get_sub_field('image_beeld');
        
          if($image_beeld) {
            $url = $image_beeld['url'];
            $size = 'square';
            $square = $image_beeld['sizes'][$size]; ?>
            
          <a href="<?php echo esc_url($url); ?>" data-caption="Foto: <?php echo esc_attr($name); ?>">
            <img style="top: 1.7em" src="<?php echo esc_url($square); ?>" alt="<?php echo esc_attr($name); ?>">
          </a>

          <?php } else { ?>
          <img class="frames__question" src="<?php echo esc_url(get_theme_file_uri('/images/vraagteken--300.png')); ?>" alt="">
        <?php } ?>
     </div><!-- .frames__image -->
     <div class="frames__credit"><span>Foto:</span> <?php echo $name; ?></div>
      <?php if($text) { ?>
        <div class="frames__img-comment">
          <?php echo $text; ?>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
<?php } ?>
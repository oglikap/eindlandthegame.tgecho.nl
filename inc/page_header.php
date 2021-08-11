<?php function page_header() { ?>

  <div class="page-header">
    <a class="logo__url" href="<?php echo esc_url(bloginfo('url')); ?>">
      <?php logo(); ?>      
    </a>

    <span class="menu__icon menu__icon--visible" uk-icon="menu"></span>
    <span class="menu__close" uk-icon="close"></span>
  </div>

  <?php menu(); ?>

<?php } ?>
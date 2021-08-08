<?php function page_header() { ?>

  <div class="page-header">
    <a class="logo__url" href="<?php echo esc_url(bloginfo('url')); ?>">
      <?php logo(); ?>      
    </a>

    <span class="menu__icon menu__icon--visible" uk-icon="menu"></span>
    <span class="menu__close" uk-icon="close"></span>
  </div>

  <?php menu(); ?>

  <script>
    const menuIcon = document.querySelector('.menu__icon');
    const menuClose = document.querySelector('.menu__close');
    const menuOverlay = document.querySelector('.menu__overlay');

    menuIcon.addEventListener('click', function() {
      menuOverlay.classList.add('menu__overlay--active');
      menuIcon.classList.remove('menu__icon--visible');
      menuClose.classList.add('menu__close--visible');
    })

    menuClose.addEventListener('click', function() {
      menuOverlay.classList.remove('menu__overlay--active');
      menuIcon.classList.add('menu__icon--visible');
      menuClose.classList.remove('menu__close--visible');
    })
  </script>

<?php } ?>
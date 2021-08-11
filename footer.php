<?php if(!is_front_page()) { ?>
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

<?php 
  }
  wp_footer(); ?>
</body>
</html>
 <?php function menu() { ?>
 
  <div class="menu__overlay">
    <div class="menu">
      <ul class="menu__list">
        <li class="menu__item">
          <a href="<?php echo esc_url(site_url('het-ding-verstopt')); ?>">Het Ding Verstopt</a>
        </li>
        <li class="menu__item">
          <a href="<?php echo esc_url(site_url('het-ding-dichtbij')); ?>">Het Ding Dichtbij</a>
        </li>
        <li class="menu__item">
          <a href="<?php echo esc_url(site_url('eindland-award')); ?>">Eindland Award</a>
        </li>
      </ul>
    </div>
  </div>

<?php } ?>
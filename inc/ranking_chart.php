<?php function ranking_chart() { ?>
  <div class="ranking__position">
    <span class="ranking__number"><?php the_sub_field('ranking_nummer'); ?>. </span>
    <span class="ranking__name"><?php the_sub_field('naam'); ?></span>
    <span class="ranking__points"><?php the_sub_field('punten'); ?></span>
  </div>
  <p class="ranking__text"><?php the_sub_field('tekst'); ?></p>
<?php } ?>
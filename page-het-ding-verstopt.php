<?php get_header(); ?>

<div class="uk-container">
  <h1 class="title">Deel 1: Het ding verstopt</h1>
  <h4 class="subtitle">Verzin de beste tekst</h4>

  <ul class="frames">
    <li class="frames__item">
      <div class="frames__date">18 sept</div>
      <img src="http://placehold.it/200x300" alt="Foto 1" />
      <div class="frames__coordinates">x=223438 y=436241212</div>

      <?php
        // Check rows exists.
        if( have_rows('inzendingen') ):

            // Loop through rows.
            while( have_rows('inzendingen') ) : the_row();

                // Load sub field value.
                $name = get_sub_field('name');
                $text = get_sub_field('text');
                ?>
                <div class="frames__id">
                  <div class="frames__name"><?php echo $name; ?></div>
                  <div class="frames__bijdrage">
                   <?php echo $text; ?>
                  </div>
                </div>
              <?php // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif; ?>

    </li>
    <li class="frames__item">
      <div class="frames__date">21 aug</div>
      <img src="http://placehold.it/200x300" alt="Foto 2" />
      <div class="frames__coordinates">x=988664 y=412049823</div>

      <?php
        // Check rows exists.
        if( have_rows('inzendingen_2') ):

            // Loop through rows.
            while( have_rows('inzendingen_2') ) : the_row();

                // Load sub field value.
                $name = get_sub_field('name');
                $text = get_sub_field('text');
                ?>
                <div class="frames__id">
                  <div class="frames__name"><?php echo $name; ?></div>
                  <div class="frames__bijdrage">
                   <?php echo $text; ?>
                  </div>
                </div>
              <?php // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif; ?>
    </li>
    <li class="frames__item">
      <div class="frames__date">21 aug</div>
      <img src="http://placehold.it/200x300" alt="Foto 3" />
      <div class="frames__coordinates">x=032094 y=221953042</div>
      <?php
        // Check rows exists.
        if( have_rows('inzendingen_3') ):

            // Loop through rows.
            while( have_rows('inzendingen_3') ) : the_row();

                // Load sub field value.
                $name = get_sub_field('name');
                $text = get_sub_field('text');
                ?>
                <div class="frames__id">
                  <div class="frames__name"><?php echo $name; ?></div>
                  <div class="frames__bijdrage">
                   <?php echo $text; ?>
                  </div>
                </div>
              <?php // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif; ?>
    </li>
    <li class="frames__item">
      <div class="frames__date">28 aug</div>
      <img src="http://placehold.it/200x300" alt="Foto 4" />
      <div class="frames__coordinates">x=264342 y=34912149</div>
      <?php
        // Check rows exists.
        if( have_rows('inzendingen_4') ):

            // Loop through rows.
            while( have_rows('inzendingen_4') ) : the_row();

                // Load sub field value.
                $name = get_sub_field('name');
                $text = get_sub_field('text');
                ?>
                <div class="frames__id">
                  <div class="frames__name"><?php echo $name; ?></div>
                  <div class="frames__bijdrage">
                   <?php echo $text; ?>
                  </div>
                </div>
              <?php // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif; ?>
    </li>
    <li class="frames__item">
      <div class="frames__date">4 sept</div>
      <img src="http://placehold.it/200x300" alt="Foto 5" />
      <div class="frames__coordinates">x=321039 y=2011149248</div>
      <?php
        // Check rows exists.
        if( have_rows('inzendingen_5') ):

            // Loop through rows.
            while( have_rows('inzendingen_5') ) : the_row();

                // Load sub field value.
                $name = get_sub_field('name');
                $text = get_sub_field('text');
                ?>
                <div class="frames__id">
                  <div class="frames__name"><?php echo $name; ?></div>
                  <div class="frames__bijdrage">
                   <?php echo $text; ?>
                  </div>
                </div>
              <?php // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif; ?>
    </li>
    <li class="frames__item">
      <div class="frames__date">11 sept</div>
      <img src="http://placehold.it/200x300" alt="Foto 6" />
      <div class="frames__coordinates">x=121339 y=428284229</div>
      <?php
        // Check rows exists.
        if( have_rows('inzendingen_6') ):

            // Loop through rows.
            while( have_rows('inzendingen_6') ) : the_row();

                // Load sub field value.
                $name = get_sub_field('name');
                $text = get_sub_field('text');
                ?>
                <div class="frames__id">
                  <div class="frames__name"><?php echo $name; ?></div>
                  <div class="frames__bijdrage">
                   <?php echo $text; ?>
                  </div>
                </div>
              <?php // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif; ?>
    </li>
  </ul>
</div>

<?php get_footer(); ?>

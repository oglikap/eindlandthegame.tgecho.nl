<?php get_header(); ?>
  <div class="start-page">
    <div class="uk-container">

      <?php page_header(); ?>

      <div class="home" style="background-image: url(<?php if(wp_is_mobile()) { 
      echo get_theme_file_uri('/images/kaart-zonder-tekst--small.jpg'); 
    } else {
      echo get_theme_file_uri('/images/kaart-zonder-tekst--medium.jpg'); 
    } ?>)">

    <?php subtitle(); ?>

    <div class="score">
      <div class="score__container">
  
      <?php if(have_rows('top_5_deel1')): ?>
  
        <h4 class="score__title">Ranking</h4>
        <ol class="score__list">

          <?php while(have_rows('top_5_deel1')) : the_row(); 
            $name_deelnemer = get_sub_field('naam_deelnemer');
            $score = get_sub_field('score');
            // $score_2 = get_sub_field('score_2');
            // $score_3 = get_sub_field('score_3');
            // $score_4 = get_sub_field('score_4');
            // $score_5 = get_sub_field('score_5');

            // $total_score = round(($score_1 + $score_2 + $score_3 + $score_4 + $score_5)/ 5, 1);
          ?>
            <li><?php echo $name_deelnemer; echo " - "; echo $score; ?></li>
          <?php endwhile; ?>
          <!-- <li>Piet Keizer 106</li>
          <li>Wim Kieft 101</li>
          <li>Sonny Silooy 98</li>
          <li>Berry van Aerle 97</li>
          <li>Frank Rijkaard 96</li>
          <li>Dennis Bergkamp 95</li>
          <li>Louis van Gaal 83</li>
          <li>Aaron Winter 82</li>
          <li>Kees Kist 76</li>
          <li>Jan Wouterse 73</li>
          <li>Frank de Boer 72</li>
          <li>Ronald de Boer 72</li>
          <li>Margeet Dolman 61</li>
          <li>Piet Paaltjens 60</li>
          <li>Andre Hazes 58</li>
          <li>Anky van Grunsven 56</li> -->
        </ol>

      <?php else : ?>
        <h3 class="score__title">Nog geen scores...</h3>
        <!-- <li>Piet Keizer 106</li>
          <li>Wim Kieft 101</li>
          <li>Sonny Silooy 98</li>
          <li>Berry van Aerle 97</li>
          <li>Frank Rijkaard 96</li>
          <li>Dennis Bergkamp 95</li>
          <li>Louis van Gaal 83</li>
          <li>Aaron Winter 82</li>
          <li>Kees Kist 76</li>
          <li>Jan Wouterse 73</li>
          <li>Frank de Boer 72</li>
          <li>Ronald de Boer 72</li>
          <li>Margeet Dolman 61</li>
          <li>Piet Paaltjens 60</li>
          <li>Andre Hazes 58</li>
          <li>Anky van Grunsven 56</li> -->
      <?php endif; ?>

      </div>
    </div>

    <div class="home__text">
      <div class="home__text-inner">
        <?php the_field('content_startpagina'); ?>
      </div>

      <ul class="home__buttons">
        <li class="home__button">
          <a href="<?php echo esc_url(site_url('het-ding-verstopt')); ?>">Het Ding Verstopt</a>
        </li>
        <li class="home__button">
          <a href="<?php echo esc_url(site_url('het-ding-dichtbij')); ?>">Het Ding Dichtbij</a>
        </li>
        <li class="home__button">
          <a href="<?php echo esc_url(site_url('eindland-award')); ?>">Eindland Award</a>
        </li>
      </ul>
    </div>
    <!-- </div> -->

    </div>

      <div id="countdown"></div>
    </div>  
  </div>
<?php get_footer(); ?>
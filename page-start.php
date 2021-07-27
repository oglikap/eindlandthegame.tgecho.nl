<?php get_header(); ?>
  <div class="start-page">
    <div class="uk-container">
      <h1 class="site-sitle"><?php echo bloginfo('title'); ?></h1>
      <h3 class="site-description"><?php echo bloginfo('description'); ?></h3>
      <div class="home">
        <div class="score">
          <div class="score__container">
      
          <?php if(have_rows('kandidaat')): ?>
      
            <h4 class="score__title">Ranking Eindland The Game</h4>
            <ol class="score__list">

              <?php while(have_rows('kandidaat')) : the_row(); 
                $name = get_sub_field('naam');
                $score_1 = get_sub_field('score_1');
                $score_2 = get_sub_field('score_2');
                $score_3 = get_sub_field('score_3');
                $score_4 = get_sub_field('score_4');
                $score_5 = get_sub_field('score_5');

                $total_score = round(($score_1 + $score_2 + $score_3 + $score_4 + $score_5)/ 5, 1);
              ?>
                <li><?php echo $name; echo $total_score; ?></li>
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

          <?php endif; ?>

          </div>
        </div>

        <div class="home__text">
          <p>
            Het is het jaar 2393. We bekijken de wereld gezien door de ogen van een
            postapocalyptische wezen. Veel kennis is verloren gegaan, waardoor we ons verbazen
            over de dingen om ons heen. Bij alles vragen we ons af: wat zou het kunnen zijn?
          </p>

          <p>
            Het spel bestaat uit twee onderdelen: “Het Ding Verstopt” & “Het Ding Dichtbij”.
            <br />
            Bij “Het Ding Verstopt” gaat het om zes foto’s die ergens in het centrum van Arnhem
            zijn verstopt. Aan jou de opdracht om de foto’s te vinden en een zo leuk mogelijke
            tekst bij te verzinnen. Denk: Wat zou het ding op de foto kunnen zijn, gezien door
            de ogen van een postapocalyptisch wezen?<br />
            Bij “Het Ding Dichtbij” aan jou de opdracht om zelf een ding uit jouw omgeving te
            fotograferen, waarbij je duidelijk maakt (door hoe je het fotografeert, of door het
            onderschrift dat je het meegeeft) hoe de postapocalypt dit ding beziet!
          </p>
          <p>
            Het spel duurt vijf weken: van za 14 aug t/m vr 17 sep. Wekelijks kiest een jury per
            onderdeel (NB Bij “Het Ding Verstopt” worden alle zes foto’s gezien als een los
            onderdeel!) de leukste inzending. Deze worden beloond met een vrijkaartje voor de
            voorstelling EINDLAND van Theatergroep Echo.
          </p>

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
     </div>
  


      <div id="countdown"></div>
    </div>  
  </div>
<?php get_footer(); ?>
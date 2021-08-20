<?php function uitleg_jury() { ?>
  <p>Alle inzendingen worden beoordeeld door de jury:</p>

  <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l jury" uk-grid>
    <div class="jury__item">
      <h4 class="jury__header">Anna Schoen - actrice</h4>
      <figure class="jury__photo">
        <img src="<?php echo esc_url(get_theme_file_uri('/images/jury/AnnaSchoen_fotoSaris&denEngelsman_3407-2zw.jpeg')) ?>" alt="Anna Schoen, actrice">
        <figcaption class="jury__caption">Foto &copy; Saris &amp; Den Engelsman</figcaption>
      </figure>
    </div>
    <div class="jury__item">
      <h4 class="jury__header">Jibbe Willems - schrijver</h4>
      <figure class="jury__photo">
        <img src="<?php echo esc_url(get_theme_file_uri('/images/jury/Jibbe Willems- StephanVanfleteren.jpeg')) ?>" alt="Jibbe Willems, schrijver">
        <figcaption class="jury__caption">Foto &copy; Stephan Vanfleteren</figcaption>
      </figure>
    </div>
    <div class="jury__item">
      <h4 class="jury__header">Juuke Schoorl - fotograaf</h4>
      <figure class="jury__photo">
        <img src="<?php echo esc_url(get_theme_file_uri('/images/jury/Juuke-Schoorl-zelfportret.jpeg')) ?>" alt="Juuke Schoorl, fotograaf">
      </figure>
    </div>
    <div class="jury__item">
      <h4 class="jury__header">Niels Pieterse - spellenmaker</h4>
      <figure class="jury__photo">
        <img src="<?php echo esc_url(get_theme_file_uri('/images/jury/Niels-Pieterse-CornévanderStelt.jpg')) ?>" alt="Niels Pieterse, spellenmaker">
        <figcaption class="jury__caption">Foto &copy; Corné van der Stelt</figcaption>
      </figure>
    </div>
    <div class="jury__item">
      <h4 class="jury__header">Paul van der Laan - acteur</h4>
      <figure class="jury__photo">
        <img src="<?php echo esc_url(get_theme_file_uri('/images/jury/Paul-van-der-Laan.jpeg')) ?>" alt="Paul van der Laan, acteur">
      </figure>
    </div>
    <div class="jury__item">
      <h4 class="jury__header">Richard Janssen - spellenkoning (het Spelkwartier)</h4>
      <figure class="jury__photo">
        <img src="<?php echo esc_url(get_theme_file_uri('/images/jury/Richard-Janssen.jpeg')) ?>" alt="Richard Janssen, spellenkoning (het Spelkwartier)">
      </figure>
    </div>
  </div>

  <p>De jury bepaalt per week wat de vijf leukste foto’s van die week zijn. De nummer 1
  (wint dus sowieso een vrijkaartje) maar krijgt ook vijf punten, de nummer 2 krijgt vier
  punten, de nummer 3 drie enz. En deze punten tellen mee voor de Ranking, waarmee je
  kans maakt op de EINDLAND AWARD!
  Over de uitslag kan niet worden gecorrespondeerd.</p>
<?php } ?>
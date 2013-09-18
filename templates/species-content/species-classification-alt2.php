<p>
   <?php if(do_shortcode('[ct id="ct_Classifica_radio_a43a"]') == 'Green') : ?>
      <?php the_title(); ?> er på <a href="<?= home_url() ?>/klassifisering">den grønne listen</a>; et godt valg.
   <?php elseif(do_shortcode('[ct id="ct_Classifica_radio_a43a"]') == 'Orange') : ?>
      <?php the_title(); ?> er på <a href="<?= home_url() ?>/klassifisering">den oransje listen</a>; vær kritisk.
   <?php elseif(do_shortcode('[ct id="ct_Classifica_radio_a43a"]') == 'Red') : ?>
      <?php the_title(); ?> er på <a href="<?= home_url() ?>/klassifisering">den røde listen</a>; et dårlig valg.
   <?php elseif(do_shortcode('[ct id="ct_Classifica_radio_a43a"]') == 'Gray') : ?>
      <?php the_title(); ?> er <a href="<?= home_url() ?>/klassifisering">ikke på noen liste enda</a>.
   <?php endif; ?>
</p>

<p>
   <?php if(do_shortcode('[ct id="ct_Climate_Cl_radio_2e6e"]') == 'Good') : ?>
      <?php the_title(); ?> er <a href="<?= home_url() ?>/klassifisering">et godt klimavalg</a>.
   <?php elseif(do_shortcode('[ct id="ct_Climate_Cl_radio_2e6e"]') == 'Ok') : ?>
      <?php the_title(); ?> er <a href="<?= home_url() ?>/klassifisering">et ok klimavalg</a>.
   <?php elseif(do_shortcode('[ct id="ct_Climate_Cl_radio_2e6e"]') == 'Bad') : ?>
      <?php the_title(); ?> er <a href="<?= home_url() ?>/klassifisering">et dårlig klimavalg</a>.
   <?php else : ?>
      <?php the_title(); ?> har <a href="<?= home_url() ?>/klassifisering">ingen klimavurdering</a>
   <?php endif; ?>
</p>
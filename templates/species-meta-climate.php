<p>
   <?php if(do_shortcode('[ct id="ct_Climate_Cl_radio_2e6e"]') == 'Good') : ?>
      <?php the_title(); ?> er et godt klimavalg
   <?php elseif(do_shortcode('[ct id="ct_Climate_Cl_radio_2e6e"]') == 'Ok') : ?>
      <?php the_title(); ?> er et ok klimavalg
   <?php elseif(do_shortcode('[ct id="ct_Climate_Cl_radio_2e6e"]') == 'Bad') : ?>
      <?php the_title(); ?> er et dårlig klimavalg
   <?php else : ?>
      <?php the_title(); ?> har ingen klimavurdering
   <?php endif; ?>
</p>
<p>
   <?php if(do_shortcode('[ct id="ct_Classifica_radio_a43a"]') == 'Green') : ?>
      <?php the_title(); ?> er på den grønne listen.
   <?php elseif(do_shortcode('[ct id="ct_Classifica_radio_a43a"]') == 'Orange') : ?>
      <?php the_title(); ?> er på den orange listen.
   <?php elseif(do_shortcode('[ct id="ct_Classifica_radio_a43a"]') == 'Red') : ?>
      <?php the_title(); ?> er på den røde listen.
   <?php elseif(do_shortcode('[ct id="ct_Classifica_radio_a43a"]') == 'Gray') : ?>
      <?php the_title(); ?> er ikke vurdert enda.
   <?php endif; ?>
</p>
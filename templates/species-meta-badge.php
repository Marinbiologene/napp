<p>
   <?php echo do_shortcode('[ct id="ct_Badges_checkbox_110e"]') ?>

   <?php if(in_array('KRAV', do_shortcode('[ct id="ct_Badges_checkbox_110e"]')) : ?>
      KRAV
   <?php elseif(in_array('MSC', do_shortcode('[ct id="ct_Badges_checkbox_110e"]')) : ?>
      MSC
   <?php elseif(in_array('ASC', do_shortcode('[ct id="ct_Badges_checkbox_110e"]')) : ?>
      ASC
   <?php endif; ?>
</p>
<p>

  <?php if (do_shortcode('[ct id="ct_Badges_checkbox_110e"]')) : ?>
    Se etter dette <a href="<?= home_url() ?>/merking">merket</a>:
  <?php endif; ?>
  
</p>
<p>     
  <?php if (strpos(do_shortcode('[ct id="ct_Badges_checkbox_110e"]'),'KRAV') !== false ) : ?>
    <img class="env-badge" src="<?= get_bloginfo('stylesheet_directory')?>/assets/img/napp-icon_krav.jpg" alt="Krav">
  <?php endif; ?>
  <?php if (strpos(do_shortcode('[ct id="ct_Badges_checkbox_110e"]'),'MSC') !== false ) : ?>
    <img class="env-badge" src="<?= get_bloginfo('stylesheet_directory')?>/assets/img/napp-icon_msc.jpg" alt="MSC (Marine Stewardship Council)">
  <?php endif; ?>
  <?php if (strpos(do_shortcode('[ct id="ct_Badges_checkbox_110e"]'),'ASC') !== false ) : ?>
    <img class="env-badge" src="<?= get_bloginfo('stylesheet_directory')?>/assets/img/napp-icon_asc.jpg">
  <?php endif; ?>
</p>
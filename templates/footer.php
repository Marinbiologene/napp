<footer class="content-info container" role="contentinfo">
  <div class="row">
    <div class="col-lg-12">
      <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-8">
      <p><?php bloginfo('description') ?></p>
    </div>
    <div class="col-sm-4">
      <p>&copy; <?php echo date('Y'); ?> Marinbiologene DA</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

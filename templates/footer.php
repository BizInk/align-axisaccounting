<div class="section footer-logo">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="logo" style="background-image: url('<?= get_field('footer_logo', 'option'); ?>');"></div>
      </div>
    </div>
  </div>
</div>

<div class="section footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12 footer-form">
        <?php
        $form_object = get_field('footer_mainform', 'option');
        gravity_form_enqueue_scripts($form_object['id'], true);
        gravity_form($form_object['id'], true, true, false, '', true, 87136823681);
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <p class="footer-text"><?= get_field('contact_address', 'option'); ?></p>
        <p class="footer-text phone"><?= get_field('contact_phone', 'option'); ?></p>
        <p class="footer-text email"><?= get_field('contact_email', 'option'); ?></p>
        <div class="social-icons">
          <?php do_action('luca/theme/footer/social'); ?>
        </div>
        <?php
        if (has_nav_menu('footer_navigation')) :
          wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'navList navList-footer']);
        endif;
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 footer-disclaimer">
        <?php do_action('luca/theme/footer/disclaimer'); ?>
      </div>
    </div>
  </div>
</div>
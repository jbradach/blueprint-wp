<nav class="navbar navbar-primary navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'blueprint'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><strong><?php bloginfo('name'); ?></strong></a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
    endif;
    ?>
      <form role="search" method="get" class="navbar-form navbar-right" action="<?= esc_url(home_url('/')); ?>">
        <label>
          <span class="screen-reader-text">Search for:</span>
          <input type="search" class="search-field form-control" placeholder="Search ..." value="" name="s" title="Search for:" />
        </label>
      </form>
    </div>
  </div>
</nav>
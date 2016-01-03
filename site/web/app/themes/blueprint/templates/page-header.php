<?php use Roots\Sage\Titles; ?>
<?php novrian_breadcrumbs(); ?>
<?php $subtitle = get_post_meta(get_the_ID(), 'subtitle', true); ?>
<div class="page-header">
  <h1><?= Titles\title(); ?> <?php Titles\subtitle(); ?></h1>
</div>

<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>


<div class="row header">
  <img src="<?php the_field('hero_image') ?>">
</div>
<div class="row background">
  <div class="col-md-6">
    <img src="<?php the_field('beergif') ?>">
  </div>
  <div class="col-md-6">
    <img src="<?php the_field('bootlesgif') ?>">
  </div>
</div>

<?php get_footer(); ?>

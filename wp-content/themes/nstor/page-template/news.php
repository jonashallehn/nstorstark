<?php
/*
Template Name: News
*/
?>

<?php get_header(); ?>


<div class="row header">
  <img src="<?php the_field('hero_image') ?>">
</div>

<div class="row background">

  <div class="col-md-6">
    <div class="bottle1">
    <div class="bottle">
      <img src="<?php the_field('beergif') ?>">
    </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="gif1">
      <img src="<?php the_field('bootlesgif') ?>">
    </div>
  </div>






</div>

<?php get_footer(); ?>

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
    <div class="bottle">
      <img src="<?php the_field('beergif') ?>">
    </div>
    </div>

  <div class="col-md-6">
    <div class="gif1">
      <img src="<?php the_field('bootlesgif') ?>">
    </div>
  </div>

  <div class="col-md-6">
    <div class="welcome">
      <h1><?php the_field('welcome_text') ?></h1>
      <p><?php the_field('welcome_textfield') ?></p>
    </div>
    </div>

  <div class="col-md-6">
    <div class="news">
      <h1"<?php the_field('news_link') ?>"></h1>
      <p><?php the_field('textfield_news') ?></p>
    </div>
  </div>

  <div class="col-md-6">
      <div class="instagram">
        <a href="<?php the_field('instagram_link') ?>"></a>
      </div>
      </div>

  <div class="col-md-6">
    <div class="concept">
      <p><?php the_field('textfield_concept') ?></p>
    </div>
    </div>

  <div class="col-md-6">
    <a href="https://www.facebook.com/nstorstarkofficial/">
    <div class="facebook">
      <div class="facelogo">
      <img src="<?php the_field('facbook') ?>"></img>
    </div>
    </div>
  </div>
    </a>


  <div class="col-md-6">
    <div class="assortment">
      <a href="<?php the_field('sortiment_link') ?>"></a>
      <img src="<?php the_field('sortiment_picture') ?>">
    </div>
    </div>

  <div class="col-md-6">
    <div class="story">
      <a href="<?php the_field('story_link') ?>"></a>
      <p><?php the_field('textfield_story') ?></p>
    </div>
    </div>

  <div class="col-md-6">
    <div class="investor">
      <p><?php the_field('textfield_investor') ?></p>
    </div>
    </div>


</div>

<?php get_footer(); ?>

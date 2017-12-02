<?php
/*
Template Name: Konceptdrycker
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

  <div class="col-md-6">
    <div class="green">
    <div class="welcome">
      <h1><a href="<?php the_field('header_konceptdryck') ?>"></h1></a>
      <p><?php the_field('textfield_konceptdrycker') ?></p>
    </div>
    </div>
  </div>

  <div class="col-md-6">
    <a href="<?php the_field('news_link') ?>">
    <div class="green">
    <div class="news">
      <a href="<?php the_field('news_link') ?>"><h1>Nyheter</h1></a>
      <p><?php the_field('textfield_news') ?></p>
    </div>
    </div>
    </a>
  </div>

  <div class="col-sm-3">
    <div class="green1">
      <div class="instagram">
        <a href="<?php the_field('instagram_link') ?>"><h1>Instagram</h1></a>
        <section class="instagram-feed">
            <div id="instafeed"</div>
        </section>
      </div>
      </div>
  </div>

  <div class="col-sm-3">
    <div class="green1">
    <div class="concept">
      <p><?php the_field('textfield_concept') ?></p>
    </div>
    </div>
  </div>

  <div class="col-md-6">
    <a href="https://www.facebook.com/nstorstarkofficial/">
    <div class="green">
    <div class="facebook">
      <h1>Facebook</h1>
        <div class="face">
      <img src="<?php the_field('facbook') ?>">
    </div>
  </div>
  </div>
    </a>
  </div>


  <div class="col-md-6">
    <div class="green">
    <div class="assortment">
      <a href="<?php the_field('sortiment_link') ?>"><h1>Sortiment</h1></a>
      <img src="<?php the_field('sortiment_picture') ?>">
    </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="green">
    <div class="story">
      <a href="<?php the_field('story_link') ?>"><h1>Vår berättelse</h1></a>
      <p><?php the_field('textfield_story') ?></p>
    </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="green">
    <div class="investor">
      <p><?php the_field('textfield_investor') ?></p>
    </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="investor">
      <p><?php the_field('textfield_investor') ?></p>
    </div>
  </div>

</div>

<?php get_footer(); ?>

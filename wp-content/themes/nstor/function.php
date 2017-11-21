<?php

declare(strict_types=1);

// Register portfolio custom post type.
// require get_template_directory().'/post-types/portfolio.php';
// Register year taxonomy for the portfolio custom post type.
// require get_template_directory().'/taxonomies/year.php';

// Add theme supported features.
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('soil-clean-up');
    add_theme_support('soil-disable-asset-versioning');
    add_theme_support('soil-disable-trackbacks');
    add_theme_support('soil-js-to-footer');
    add_theme_support('soil-nice-search');
    add_theme_support('soil-relative-urls');
});

// Enqueue styles and scripts.
add_action('wp_enqueue_scripts', function () {


    wp_register_script('script', get_template_directory_uri() .  './assets/script/main.js', '', '', '');


    wp_enqueue_script('script');


});

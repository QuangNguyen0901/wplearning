<?php
// make sure to not include translations
$args['presets']['default'] = array(
    'title' => 'Default',
    'demo' => 'http://demo.mythemeshop.com/woocart/',
    'thumbnail' => get_template_directory_uri().'/options/demo-importer/demo-files/default/thumb.jpg', // could use external url, to minimize theme zip size
    'menus' => array( 'primary-menu' => 'Primary Menu', 'secondary-menu' => 'Secondary Menu', 'quick-links-menu' => 'Quick Links', 'footer-menu' => 'Footer Menu' ), // menu location slug => Demo menu name
    'options' => array( 'show_on_front' => 'posts', 'posts_per_page' => 4 ),
);

$args['presets']['layout-2'] = array(
    'title' => 'Layout 2',
    'demo' => 'http://demo.mythemeshop.com/woocart-2/',
    'thumbnail' => get_template_directory_uri().'/options/demo-importer/demo-files/layout-2/thumb.jpg', // could use external url, to minimize theme zip size
    'menus' => array( 'primary-menu' => 'Primary Menu', 'secondary-menu' => 'Secondary Menu', 'quick-links-menu' => 'Quick Links', 'footer-menu' => 'Footer Menu' ), // menu location slug => Demo menu name
    'options' => array( 'show_on_front' => 'posts', 'posts_per_page' => 5 ),
);

global $mts_presets;
$mts_presets = $args['presets'];

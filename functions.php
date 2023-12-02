<?php

// アイキャッチ画像の設定
add_theme_support('post-thumbnails');
the_post_thumbnail('thumbnail');
the_post_thumbnail('medium');
the_post_thumbnail('large');

function my_styles()  {
    // page-sample用のCSS
    if ( is_page('recruit-hair-new') ) {
      wp_enqueue_style( 'recruit-hair-new_css', get_template_directory_uri() . '/scss/recruit/recruit.css');
      }
    if ( is_page('about') ) {
      wp_enqueue_style( 'about_css', get_template_directory_uri() . '/scss/about/about.css');
      }
    if ( is_page('service') ) {
      wp_enqueue_style( 'service_css', get_template_directory_uri() . '/scss/service/service.css');
      }
    if ( is_page('works') ) {
      wp_enqueue_style( 'works_css', get_template_directory_uri() . '/scss/works/works.css');
      }
    if ( is_page('company') ) {
      wp_enqueue_style( 'company_css', get_template_directory_uri() . '/scss/company/company.css');
      }
    if ( is_page('contact') ) {
      wp_enqueue_style( 'contact_css', get_template_directory_uri() . '/scss/contact/contact.css');
      }
    if ( is_page('confirm') ) {
      wp_enqueue_style( 'contact_css', get_template_directory_uri() . '/scss/contact/contact.css');
      }
    if ( is_page('confirm') ) {
      wp_enqueue_style( 'thanks_css', get_template_directory_uri() . '/scss/thanks/thanks.css');
      }
    if ( is_page('thanks') ) {
      wp_enqueue_style( 'contact_css', get_template_directory_uri() . '/scss/contact/contact.css');
      }

    if ( is_singular() ) {
      wp_enqueue_style( 'single_css', get_template_directory_uri() . '/scss/single/single.css');
      }

    }
  add_action( 'wp_enqueue_scripts', 'my_styles' );
<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller {

  protected $acf = true;

  public function siteName()
  {
    return get_bloginfo('name');
  }

  public static function title()
  {
    if (is_home()) {
      if ($home = get_option('page_for_posts', true)) {
          return get_the_title($home);
      }
      return __('Latest Posts', 'sage');
    }
    if (is_archive()) {
      return get_the_archive_title();
    }
    if (is_search()) {
      return sprintf(__('Search Results for %s', 'sage'), get_search_query());
    }
    if (is_404()) {
      return __('Not Found', 'sage');
    }
    return get_the_title();
  }

  public static function generalFields() {
    return (object) array (
      'title' => get_sub_field('title'),
      'subtitle' => get_sub_field('subtitle'),
      'text' => get_sub_field('text'),
      'image' => get_sub_field('image'),
    );
  }

  public static function hero() {
    return (object) array (
      'bgcolor' => get_sub_field('background_color'),
    );
  }

  public static function cta() {
    return (object) array (
      'link' => get_sub_field('link'),
      'button' => get_sub_field('button_text'),
      'style' => get_sub_field('style'),
      'alignment' => get_sub_field('alignment'),
    );
  }

  public static function display() {
    return (object) array (
      'alignment' => get_sub_field('alignment'),
    );
  }

  public static function featured() {
    return (object) array (
      'icon' => get_sub_field('icon'),
      'border' => get_sub_field('border'),
    );
  }

  public static function relationship() {
    return (object) array (
      'relationship' => get_sub_field('relationship')
    );
  }

  public static function filter() {
    return (object) array (
      'filter' => get_sub_field('filter')
    );
  }

  public static function breadcrumbs($post) {
    $ancestors = get_post_ancestors( $post );
    $parents = [];

    foreach($ancestors as $parent) {
      $title = get_the_title($parent);
      $link = get_permalink($parent);
      $parents[] = array(
        'title' => $title,
        'link' => $link
      );
    }
    return array_reverse($parents);
  }

  public static function recentPosts() {
    $numberPosts = array( 'numberposts' => get_sub_field('number_of_posts') );

    $recent_posts = wp_get_recent_posts($numberPosts);

    return $recent_posts;
  }
}

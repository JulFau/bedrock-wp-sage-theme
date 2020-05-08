<?php

namespace App\Controllers;


use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public function siteLogo(){

        return get_theme_mod('logo');
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

    public function primarymenu() {
        $args = array(
            'theme_location' => 'header',
            'container' => false,
            'menu_class' => 'navbar-end',
            'walker' => new \App\wp_bulma_navwalker(),
        );
        return $args;
      }

    
}



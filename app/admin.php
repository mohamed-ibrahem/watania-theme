<?php

/**
 * Theme admin.
 */

namespace App;

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page([
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'settings',
        'capability'	=> 'edit_posts',
        'parent_slug'   => 'themes.php'
    ]);

}

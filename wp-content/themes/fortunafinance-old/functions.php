<?php


/*-- REGISTER BOOTSTRAP MENU --*/

require_once('wp_bootstrap_navwalker.php');

/*-- CREATE OPTIONS PAGE --*/

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

/*-- REMOVE PAGES FROM SEARCH --*/

function remove_pages_from_search() {
    global $wp_post_types;
    $wp_post_types['page']->exclude_from_search = true;
}
add_action('init', 'remove_pages_from_search');

/*-- REGISTER THUMBNAILS --*/

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 116, 172 );
        add_image_size( 'studio-thumbnail', 210, 134 );
}

/*-- REGISTER MENUS --*/

	register_nav_menus( array(
		'main_menu'   => __( 'Main Menu', 'Podcast Theme' ),
		'footer_menu'   => __( 'Footer Menu', 'Podcast Theme' ),
		'individuals_menu'   => __( 'Individuals Menu', 'Podcast Theme' ),
		'business_menu'   => __( 'Business Menu', 'Podcast Theme' ),
		'corporate_menu'   => __( 'Corporate Menu', 'Podcast Theme' )

	) );


/*--SIDEBARS AND WIDGETS --*/

register_sidebar(array('name' => __('Footer 1', 'Fortuna Finance Theme'), 'id' => 'footer_one', 'before_widget' => '<div class="widget">', 'after_widget' => '</div>', 'before_title' => '<h4>', 'after_title' => '</h4>'));	
register_sidebar(array('name' => __('Footer 2', 'Fortuna Finance Theme'), 'id' => 'footer_two', 'before_widget' => '<div class="widget">', 'after_widget' => '</div>', 'before_title' => '<h4>', 'after_title' => '</h4>'));		
register_sidebar(array('name' => __('Footer 3', 'Fortuna Finance Theme'), 'id' => 'footer_three', 'before_widget' => '<div class="widget">', 'after_widget' => '</div>', 'before_title' => '<h4>', 'after_title' => '</h4>'));			
register_sidebar(array('name' => __('Footer 4', 'Fortuna Finance Theme'), 'id' => 'footer_four', 'before_widget' => '<div class="widget">', 'after_widget' => '</div>', 'before_title' => '<h4>', 'after_title' => '</h4>'));	
register_sidebar(array('name' => __('Copyright Widget', 'Fortuna Finance Theme'), 'id' => 'copyright_widget', 'before_widget' => '<div class="widget">', 'after_widget' => '</div>', 'before_title' => '<h4>', 'after_title' => '</h4>'));	

/*--REMOVE SPAN WRAP --*/

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

/*--BOOTSTRAP NAVIGATION--*/

function numeric_bootstrap_posts_nav()
{
    if (is_singular()) {
        return;
    }
    global $wp_query;
    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1) {
        return;
    }
    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);
    /** Add current page to the array */
    if ($paged >= 1) {
        $links[] = $paged;
    }
    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
    echo '<div class="pagination_wrapper"><ul class="pagination">' . "\n";
    /** Previous Post Link */
    if (get_previous_posts_link()) {
        printf('<li>%s</li>' . "\n", get_previous_posts_link("<<"));
    }
    /** Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="first active"' : ' class="first"';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');
        if (!in_array(2, $links)) {
            echo '<li><span class="btn disabled">…</span></li>' . "\n"; // Here is the correction
        }
    }
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array)$links as $link) {
        $class = $paged == $link ? ' class="last active"' : ' class="last"';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }
    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links)) {
            echo '<li><span class="btn disabled">…</span></li>' . "\n";
        }
        $class = $paged == $max ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }
    /** Next Post Link */
    if (get_next_posts_link()) {
        printf('<li>%s</li>' . "\n", get_next_posts_link(">>"));
    }
    echo '</ul></div>' . "\n";
}

?>
<?php



//#b30059; hover color
//#ff0066; link color
//#e5127d; bold text color
	
function mytheme_script_enqueue() {
	
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/mytheme.css', array(), '3.3.4', 'all');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/font-awesome-4.6.3/css/font-awesome.min.css', array(), '4.6.3', 'all');
	// wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/mytheme.css', array(), '1.0.0', 'all');

	if( is_front_page() ){
        wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/styleheader2.css', array(), '1.0.0', 'all');
        wp_enqueue_style('style-11', get_template_directory_uri() . '/css/style11-5.css', array(), '1.0.0', 'all');
        wp_enqueue_style('styleadvert', get_template_directory_uri() . '/css/styleadvert22.css', array(), '1.0.0', 'all');
    }else if( is_category() ){
        wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/styleheader2.css', array(), '1.0.0', 'all');
        wp_enqueue_style('style-11', get_template_directory_uri() . '/css/style11-5-categoryes.css', array(), '1.0.0', 'all');
        wp_enqueue_style('styleadvert', get_template_directory_uri() . '/css/styleadvert22.css', array(), '1.0.0', 'all');
    }else{  
        if ( get_post_format() == 'aside'){
            wp_enqueue_style('stylestory', get_template_directory_uri() . '/css/stylestorys.css', array(), '1.0.0', 'all');
            wp_enqueue_style('style-12', get_template_directory_uri() . '/css/style12.css', array(), '1.0.0', 'all');
            wp_enqueue_style('styleheader2', get_template_directory_uri() . '/css/styleheader.css', array(), '1.0.0', 'all');
            wp_enqueue_style('big_advert', get_template_directory_uri() . '/css/big-advert.css', array(), '1.0.0', 'all');
        }else{
            wp_enqueue_style('stylestoryes', get_template_directory_uri() . '/css/stylestorys.css', array(), '1.0.0', 'all');
            wp_enqueue_style('style-15', get_template_directory_uri() . '/css/style15.css', array(), '1.0.0', 'all');
            wp_enqueue_style('styleheader', get_template_directory_uri() . '/css/styleheader-for-story2.css', array(), '1.0.0', 'all');
            wp_enqueue_style('recommended', get_template_directory_uri() . '/css/recomended.css', array(), '1.0.0', 'all');
        }
    }


    
    wp_enqueue_script('jquery');
	// wp_enqueue_script('customjs', get_template_directory_uri() . '/js/mytheme.js');
	wp_enqueue_script('js', get_template_directory_uri() . '/js/javascript.js');
	wp_enqueue_script('sidebar-js', get_template_directory_uri() . '/js/javascriptsidebar.js');
}

add_action( 'wp_enqueue_scripts', 'mytheme_script_enqueue');








function mytheme_theme_setup() {
	add_theme_support('menus');	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	
}
add_action('init', 'mytheme_theme_setup');


add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');


add_theme_support('post-formats',array('aside'));





/*
	==========================================
	 Sidebar function
	==========================================
*/
function awesome_widget_setup() {
	
	register_sidebar(
		array(	
			'name'	=> 'Sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	
}
add_action('widgets_init','awesome_widget_setup');
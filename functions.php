<?php
/**
 * Swim Wakefield functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Swim_Wakefield
 */

if ( ! function_exists( 'swim_wakefield_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function swim_wakefield_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Swim Wakefield, use a find and replace
		 * to change 'swim-wakefield' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'swim-wakefield', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'swim-wakefield' ),
			'footer-one' => __( 'Footer Menu One', 'swim-wakefield' ),
			'footer-two' => __( 'Footer Menu Two', 'swim-wakefield' ),
			'footer-three' => __( 'Footer Menu Three', 'swim-wakefield' ),
		) );
		
		// Register Custom Navigation Walker
		require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'swim_wakefield_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'swim_wakefield_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function swim_wakefield_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'swim_wakefield_content_width', 640 );
}
add_action( 'after_setup_theme', 'swim_wakefield_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function swim_wakefield_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'swim-wakefield' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'swim-wakefield' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'swim_wakefield_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function swim_wakefield_scripts() {
	wp_enqueue_style( 'swim-wakefield-style', get_stylesheet_uri() );

	wp_enqueue_script( 'swim-wakefield-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'swim-wakefield-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'swim_wakefield_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Logo on login screen
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/site-login-logo.png);
		height: 175px;
		width: 175px;
		background-size: 175px 175px;
		background-repeat: no-repeat;
        	padding-bottom: 0;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Logo link on login screen
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// Style password protected form
function my_password_form() {
        global $post;
        $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
        $o = '<div class="container password-page">
    	<div class="password-login-form">
    		<div class="password-login-form-content">
		    	<h3>Member Login</h3>
		    	<h5 class="text-muted">Please enter your password.</h5>
			    <form class="protected-post-form" action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
				    <div class="form-group">
				    	<label class="pass-label sr-only" for="' . $label . '">' . __( "Password" ) . ' </label>
				    	<input name="post_password" id="' . $label . '" class="form-control password-form-input" type="password" placeholder="Password"/>
				    	<input type="submit" name="Submit" class="button btn btn-primary btn-block" value="' . esc_attr__( "Submit" ) . '" style="margin-top: 20px;"/>
				    </div>
			    </form>
		    </div>
	    </div>
    </div>
        ';
        return $o;
    }
    add_filter( 'the_password_form', 'my_password_form' );

//* Remove default post type from WordPress Dashboard
add_action('admin_menu','customprefix_remove_default_post_type_menu_item');
function customprefix_remove_default_post_type_menu_item() {
	remove_menu_page('edit.php');
}

// Disable support for comments and trackbacks in post types
function df_disable_comments_post_types_support() {
	$post_types = get_post_types();
	foreach ($post_types as $post_type) {
		if(post_type_supports($post_type, 'comments')) {
			remove_post_type_support($post_type, 'comments');
			remove_post_type_support($post_type, 'trackbacks');
		}
	}
}
add_action('admin_init', 'df_disable_comments_post_types_support');

// Close comments on the front-end
function df_disable_comments_status() {
	return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);

// Hide existing comments
function df_disable_comments_hide_existing_comments($comments) {
	$comments = array();
	return $comments;
}
add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);

// Remove comments page in menu
function df_disable_comments_admin_menu() {
	remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'df_disable_comments_admin_menu');

// Redirect any user trying to access comments page
function df_disable_comments_admin_menu_redirect() {
	global $pagenow;
	if ($pagenow === 'edit-comments.php') {
		wp_redirect(admin_url()); exit;
	}
}
add_action('admin_init', 'df_disable_comments_admin_menu_redirect');

// Remove comments metabox from dashboard
function df_disable_comments_dashboard() {
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('admin_init', 'df_disable_comments_dashboard');

// Remove comments links from admin bar
function df_disable_comments_admin_bar() {
	if (is_admin_bar_showing()) {
		remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
	}
}
add_action('init', 'df_disable_comments_admin_bar');

// Rename Calendar Plugin
function rename_header_to_logo( $translated, $original, $domain ) {

$strings = array(
    'Events' => 'Calendar',
);

if ( isset( $strings[$original] ) && is_admin() ) {
    $translations = &get_translations_for_domain( $domain );
    $translated = $translations->translate( $strings[$original] );
}

  return $translated;
}

add_filter( 'gettext', 'rename_header_to_logo', 10, 3 );

// Removing "Protected" from page titles
function the_title_trim($title) {

	$title = attribute_escape($title);

	$findthese = array(
		'#Protected:#',
		'#Private:#'
	);

	$replacewith = array(
		'', // What to replace "Protected:" with
		'' // What to replace "Private:" with
	);

	$title = preg_replace($findthese, $replacewith, $title);
	return $title;
}
add_filter('the_title', 'the_title_trim');

// Admin footer modification
  
function remove_footer_admin () 
{
    echo '<span id="footer-thankyou">Made with &#9825; by <a href="http://www.tigerstripemedia.co.uk" target="_blank">Tiger Stripe Media</a></span>';
}
 
add_filter('admin_footer_text', 'remove_footer_admin');

// Add post type title placeholder for male members
 add_filter('enter_title_here', 'male_member_place_holder' , 20 , 2 );
    function male_member_place_holder($title , $post){

        if( $post->post_type == 'male_member' ){
            $my_title = "Enter last name followed by first name...";
            return $my_title;
        }

        return $title;

    }
    
// Add post type title placeholder for femae members
 add_filter('enter_title_here', 'female_member_place_holder' , 20 , 2 );
    function female_member_place_holder($title , $post){

        if( $post->post_type == 'female_member' ){
            $my_title = "Enter last name followed by first name...";
            return $my_title;
        }

        return $title;

    }
    
// Remove paragraph tags from contact form 7
add_filter('wpcf7_autop_or_not', '__return_false');

// Remove span tags from contact form 7
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});
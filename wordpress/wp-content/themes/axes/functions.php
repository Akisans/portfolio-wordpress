<?php
/**
 * axes functions and definitions
 *
 * @package WordPress
 * @subpackage Axes
 * @since Axes 1.1
 */


/*-----------------------------------------------------------------------------------*/
/*	1. Plugins Activation
/*-----------------------------------------------------------------------------------*/ 

require_once dirname( __FILE__ ) . '/inc/files/plugin-activation.php';

add_action( 'tgmpa_register', 'axes_register_js_composer_plugins' );

function axes_register_js_composer_plugins() {

    $plugins = array(
        array(
            'name'			=> 'WPBakery Visual Composer', 
            'slug'			=> 'js_composer', 
            'source'			=> get_stylesheet_directory() . '/inc/files/js_composer.zip', 
            'required'			=> true, 
            'version'			=> '4.6.2', 
            'force_activation'		=> true, 
            'force_deactivation'	=> false, 
            'external_url'		=> '', 
        ),
		array(
            'name'			=> 'Revolution Slider', 
            'slug'			=> 'revslider', 
            'source'			=> get_stylesheet_directory() . '/inc/files/revslider.zip', 
            'required'			=> true, 
            'version'			=> '4.6.93', 
            'force_activation'		=> true, 
            'force_deactivation'	=> false, 
            'external_url'		=> '', 
        ),
		array(
            'name'			=> 'Contact Form 7',
            'slug'			=> 'contact-form-7', 
            'source'			=> get_stylesheet_directory() . '/inc/files/contact-form-7.4.2.1.zip', 
            'required'			=> true, 
            'version'			=> '4.2.1', 
            'force_activation'		=> true, 
            'force_deactivation'	=> false, 
            'external_url'		=> '', 
        ),
		array(
            'name'			=> 'Dropscodes', 
            'slug'			=> 'dropscodes', 
            'source'			=> get_stylesheet_directory() . '/inc/files/dropscodes.zip', 
            'required'			=> true, 
            'version'			=> '1.1', 
            'force_activation'		=> true, 
            'force_deactivation'	=> false, 
            'external_url'		=> '', 
        ),
    );
 
    $theme_text_domain = 'axes';
 
    $config = array(
        'domain'		=> 'axes',
        'default_path'		=> '', 
        'parent_menu_slug'	=> 'themes.php', 
        'parent_url_slug'	=> 'themes.php', 
        'menu'			=> 'install-required-plugins', 
        'has_notices'		=> true, 
        'is_automatic'		=> true, 
        'message'		=> '', 
        'strings'		=> array(
            'page_title'			=> __( 'Install Required Plugins', 'axes' ),
            'menu_title'			=> __( 'Install Plugins', 'axes' ),
            'installing'			=> __( 'Installing Plugin: %s', 'axes' ), 
            'oops'				=> __( 'Something went wrong with the plugin API.', 'axes' ),
            'notice_can_install_required'	=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ),
            'notice_can_install_recommended'	=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ),
            'notice_cannot_install'		=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), 
            'notice_can_activate_required'	=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), 
            'notice_can_activate_recommended'	=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), 
            'notice_cannot_activate'		=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ),
            'notice_ask_to_update'		=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), 
            'notice_cannot_update'		=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), 
            'install_link'			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
            'activate_link'			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
            'return'				=> __( 'Return to Required Plugins Installer', 'axes' ),
            'plugin_activated'			=> __( 'Plugin activated successfully.', 'axes' ),
            'complete'				=> __( 'All plugins installed and activated successfully. %s', 'axes' ), 
            'nag_type'				=> 'updated' 
        )
    );
    tgmpa( $plugins, $config );
	
}

add_action( 'vc_before_init', 'axes_vcSetAsTheme' );
function axes_vcSetAsTheme() {
    vc_set_as_theme();
}
 
/*-----------------------------------------------------------------------------------*/
/*	2. Visual Composer Adjustments
/*-----------------------------------------------------------------------------------*/

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

if ( is_plugin_active( 'js_composer/js_composer.php' ) ) {
	require get_template_directory() .'/inc/vc/vc_adjustments.php';
}
   
/*-----------------------------------------------------------------------------------*/
/*	4. Theme Content Width
/*-----------------------------------------------------------------------------------*/

if ( ! isset( $content_width ) ) {
	$content_width = 1170;
}

/*-----------------------------------------------------------------------------------*/
/*	7. Theme Compatibility
/*-----------------------------------------------------------------------------------*/

if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

/*-----------------------------------------------------------------------------------*/
/*	8. Setup Theme 
/*-----------------------------------------------------------------------------------*/

if ( ! function_exists( 'axes_setup' ) ) :

function axes_setup() {

	// Languages
	load_theme_textdomain( 'axes', get_template_directory() . '/languages' );

	// Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Title Tag
	add_theme_support( 'title-tag' );
	
	// Post Thumbnails Size
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 870, 400, true );

	// Menu
	register_nav_menu( 'primary',array( __( 'Navigation Menu', 'axes' )) );
	
	register_nav_menus( array(
		'primary' => 'Main Menu',
		'secondary' => 'Pages Menu for Landing Version',
	) );

	// HTML5 compliance
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	// Post Formats
	add_theme_support( 'post-formats', array(
		'image', 'video', 'quote', 'gallery', 
	) );
	
	// Editor style
	add_editor_style( array( 
		'inc/css/editor-style.css', 'inc/fonts/fontawesome/css/font-awesome.min.css' 
	) );
	
}
endif; 
add_action( 'after_setup_theme', 'axes_setup' );

add_filter('widget_text', 'do_shortcode');

/*-----------------------------------------------------------------------------------*/
/*	14. Live Customizer
/*-----------------------------------------------------------------------------------*/

require get_template_directory() .'/inc/td-customizer.php';


/*-----------------------------------------------------------------------------------*/
/*	15. Google Web Fonts 
/*-----------------------------------------------------------------------------------*/

function axes_fonts() {
	
    $protocol = is_ssl() ? 'https' : 'http';
	
	// Generate the google fonts css
    wp_enqueue_style( 'axes-google-fonts', "$protocol://fonts.googleapis.com/css?family=Lato:400|Varela+Round:400" );
	
}
add_action( 'wp_enqueue_scripts', 'axes_fonts' );


/*-----------------------------------------------------------------------------------*/
/*	9. Add WooCommerce Support
/*-----------------------------------------------------------------------------------*/

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

/*-----------------------------------------------------------------------------------*/
/*	10. Setup Theme Widget Areas
/*-----------------------------------------------------------------------------------*/

function axes_widgets_init() {
	
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'axes' ),
		'id'            => 'sidebar',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'axes' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h6 class="wpb_heading">',
		'after_title'   => '</h6>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Bottom Area', 'axes' ),
		'id'            => 'bottom-area',
		'description'   => __( 'Add widgets here to appear in your footer.', 'axes' ),
		'before_widget' => '<div id="%1$s" class="col-md-3 bottom-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="wpb_heading bottom-widgets-title">',
		'after_title'   => '</h5>',
	) );
	
}
add_action( 'widgets_init', 'axes_widgets_init' );

/*-----------------------------------------------------------------------------------*/
/*	11. Load CSS Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function axes_scripts() {
	
	// Add Bootstrap grid
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/inc/css/bootstrap.min.css', array(), '3.1.1' );
	
	// Load our main stylesheet.
	wp_enqueue_style( 'axes-style', get_stylesheet_uri() );
	
	// Add Fontawesome stylesheet 
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/inc/css/font-awesome.css', array(), '4.3.0' );
	wp_enqueue_style( 'elegant-icons', get_template_directory_uri() . '/inc/css/elegant-icons.css', array(), '1.0' );
	wp_enqueue_style( 'pe-icon-7', get_template_directory_uri() . '/inc/css/pe-icon-7-stroke.css', array(), '1.0' );
	wp_enqueue_style( 'stroke-gap-icons', get_template_directory_uri() . '/inc/css/stroke-gap-icons.css', array(), '1.0' );
	
	wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/inc/css/lightbox.min.css', array(), '1.0' );
	
	// Bootstrap Script
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/inc/js/bootstrap.min.js', array( 'jquery' ), '3.3.4', true );
	wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/inc/js/bootstrap-hover-dropdown.min.js', array( 'jquery' ), '2.1.3', true );
	
	// Theme Functions Script
	wp_enqueue_script( 'functions', get_template_directory_uri() . '/inc/js/functions.js', array( 'jquery' ), '1.0.0', true );
	
	// Lightbox Script
	wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/inc/js/lightbox.min.js', array( 'jquery' ), '1.0.0', true );
	
	// Fitvids Script
	wp_enqueue_script( 'fitvids', get_template_directory_uri() . '/inc/js/jquery.fitvids.js', array( 'jquery' ), '1.0.0', true );
	
	// CountTo Script
	wp_enqueue_script( 'countTo', get_template_directory_uri() . '/inc/js/jquery.countTo.js', array( 'jquery' ), '1.0.0', true );
	
	// Parallax Script
	wp_enqueue_script( 'parallax', get_template_directory_uri() . '/inc/js/jquery.parallax-1.1.3.js', array( 'jquery' ), '1.1.3', true );
	
	// Owl Carousel
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/inc/js/owl.carousel.min.js', array( 'jquery' ), '2.0.0', true );
		
	// Navigation script
	wp_enqueue_script( 'singlePageNav', get_template_directory_uri() . '/inc/js/jquery.singlePageNav.min.js', array( 'jquery' ), '1.1.0', true );
	
	// Comment Reply
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
}
add_action( 'wp_enqueue_scripts', 'axes_scripts' );


/*-----------------------------------------------------------------------------------*/
/*	12. Template Tags
/*-----------------------------------------------------------------------------------*/

require get_template_directory() . '/inc/template-tags.php';

function axes_search_filter($query) {
	
	if ($query->is_search) {
	$query->set('post_type', 'post');
	}
	return $query;
	}

add_filter('pre_get_posts','axes_search_filter');


/*-----------------------------------------------------------------------------------*/
/*	13. Post Pagination 
/*-----------------------------------------------------------------------------------*/

if ( ! function_exists( 'axes_post_nav' ) ) :

	function axes_post_nav() {
	
		global $post;

		$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	
		$next     = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous )
			
			return;
		
		?>
	
    	<div class="port-navigation" role="navigation">

			<div class="port-left">
				
				<?php previous_post_link( '%link', _x( '<i class="fa fa-angle-left fa-2x"></i>', 'Previous post link', 'axes' ) ); ?>
                
            </div>
            
			<div class="port-right">
			
				<?php next_post_link( '%link', _x( '<i class="fa fa-angle-right fa-2x"></i>', 'Next post link', 'axes' ) ); ?>
                
			</div>

		</div>
	
	<?php }

endif;

/*-----------------------------------------------------------------------------------*/
/*	14. Portfolio Pagination 
/*-----------------------------------------------------------------------------------*/

if ( ! function_exists( 'axes_port_nav' ) ) :

	function axes_port_nav() {
	
		global $post;

		$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	
		$next     = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous )
			
			return;
		
		?>
	
    	<div class="portfolio-navigation" role="navigation">

			<div class="portfolio-left">
				
				<?php previous_post_link( '%link', _x( '<i class="fa fa-angle-left fa-2x"></i>', 'Previous portfolio link', 'axes' ) ); ?>
                
            </div>
            
			<div class="portfolio-right">
			
				<?php next_post_link( '%link', _x( '<i class="fa fa-angle-right fa-2x"></i>', 'Next portfolio link', 'axes' ) ); ?>
                
			</div>

		</div>
	
	<?php }

endif;

/*-----------------------------------------------------------------------------------*/
/*	16. Breadcrumbs 
/*-----------------------------------------------------------------------------------*/
 
function the_breadcrumb () {
     
    // Settings
    $separator  = '&#47;';
    $id         = 'breadcrumbs';
    $class      = 'breadcrumbs';
    $home_title = 'Home';
	$parents ='';
	
     
    // Get the query & post information
    global $post,$wp_query;
    $category = get_the_category();
     
    // Build the breadcrums
    echo '<ul id="' . $id . '" class="' . $class . '">';
     
    // Do not display on the homepage
    if ( !is_front_page() ) {
         
        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        echo '<li class="separator separator-home"> ' . $separator . ' </li>';
         
        if ( is_single() ) {
             
            // Single post (Only display the first category)
            echo '<li class="item-cat item-cat-' . $category[0]->term_id . ' item-cat-' . $category[0]->category_nicename . '"><a class="bread-cat bread-cat-' . $category[0]->term_id . ' bread-cat-' . $category[0]->category_nicename . '" href="' . get_category_link($category[0]->term_id ) . '" title="' . $category[0]->cat_name . '">' . $category[0]->cat_name . '</a></li>';
            echo '<li class="separator separator-' . $category[0]->term_id . '"> ' . $separator . ' </li>';
            echo '<li class="item-current item-' . $post->ID . '"><span class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</span></li>';
             
        } else if ( is_category() ) {
             
            // Category page
            echo '<li class="item-current item-cat-' . $category[0]->term_id . ' item-cat-' . $category[0]->category_nicename . '"><span class="bread-current bread-cat-' . $category[0]->term_id . ' bread-cat-' . $category[0]->category_nicename . '">' . $category[0]->cat_name . '</span></li>';
             
        } else if ( is_page() ) {
             
            // Standard page
            if( $post->post_parent ){
                 
                // If child page, get parents 
                $anc = get_post_ancestors( $post->ID );
                 
                // Get parents in the right order
                $anc = array_reverse($anc);
                 
                // Parent page loop
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }
                 
                // Display parent pages
                echo $parents;
                 
                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><span title="' . get_the_title() . '"> ' . get_the_title() . '</span></li>';
                 
            } else {
                 
                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><span class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</span></li>';
                 
            }
             
        } else if ( is_tag() ) {
             
            // Tag page
             
            // Get tag information
            $term_id = get_query_var('tag_id');
            $taxonomy = 'post_tag';
            $args ='include=' . $term_id;
            $terms = get_terms( $taxonomy, $args );
             
            // Display the tag name
            echo '<li class="item-current item-tag-' . $terms[0]->term_id . ' item-tag-' . $terms[0]->slug . '"><span class="bread-current bread-tag-' . $terms[0]->term_id . ' bread-tag-' . $terms[0]->slug . '">' . $terms[0]->name . '</span></li>';
         
        } elseif ( is_day() ) {
             
            // Day archive
             
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
             
            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
             
            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><span class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</span></li>';
             
        } else if ( is_month() ) {
             
            // Month Archive
             
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
             
            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><span class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</span></li>';
             
        } else if ( is_year() ) {
             
            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><span class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</span></li>';
             
        } else if ( is_author() ) {
             
            // Auhor archive
             
            // Get the author information
            global $author;
            $userdata = get_userdata( $author );
             
            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><span class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</span></li>';
         
        } else if ( get_query_var('paged') ) {
             
            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><span class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</span></li>';
             
        } else if ( is_search() ) {
         
            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><span class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results</span></li>';
         
        } elseif ( is_404() ) {
             
            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }
         
    }
     
    echo '</ul>';
     
}

/*-----------------------------------------------------------------------------------*/
/*	6. Comments Form Layout
/*-----------------------------------------------------------------------------------*/

function axes_comment_form($comment) {
	
  $GLOBALS['comment'] = $comment; ?>
  
	<div id="respond" class="comment-respond">
    
    	<h6 id="reply-title" class="comment-reply-title">Leave a Comment</h6>
    	<span class="widget-line"></span>
    	
        <form action="<?php echo home_url(); ?>/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate>
    		
            <div class="row">
        		<div class="col-md-12">
            		<input id="author" name="author" type="text" onfocus="if (this.value=='') this.value='';" onblur="if (this.value=='') this.value='';" value="" placeholder="Name*" aria-required='true' />
        		</div>
        		
                <div class="col-md-12">
            		<input id="email" name="email" type="email" onfocus="if (this.value=='') this.value='';" onblur="if (this.value=='') this.value='';" value="" placeholder="Email*" aria-describedby="email-notes" aria-required='true' />
        		</div>
        
        		<div class="col-md-12">						
            		<input id="url" name="url" type="url" onfocus="if (this.value=='') this.value='';" onblur="if (this.value=='') this.value='';" value="" placeholder="Website" />
        		</div>
    		</div>
    
    		<div class="row">
        		<div class="col-md-12">
            		<textarea id="comment" name="comment" onfocus="if (this.value=='') this.value='';" onblur="if (this.value=='') this.value='';" aria-describedby="form-allowed-tags" aria-required="true">Your Message</textarea>
        		</div>
    		</div>
    
    		<p class="form-submit">
    			<input name="submit" type="submit" id="submit" class="submit" value="Post Comment" />
    			<input type='hidden' name='comment_post_ID' value='104' id='comment_post_ID' />
    			<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
    		</p>
	
    	</form>
    
	</div> <!-- #respond -->
    
<?php } 

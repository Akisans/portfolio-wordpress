<?php
/**
 * The template for displaying the header
 *
 * @package WordPress
 * @subpackage Axes
 * @since Axes 1.1
 */
?>

<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
    
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<link rel="profile" href="http://gmpg.org/xfn/11">
    
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
	<!--[if lt IE 9]>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/inc/js/html5.js"></script>
	<![endif]-->
    
    <?php $favicon = get_theme_mod( 'td_favicon' ); 
	
		if (get_theme_mod( 'td_logo' ) =='' ) {
			$logo = ''.get_template_directory_uri() .'/inc/images/logo-dark.png';
		}
		else {
			$logo = get_theme_mod( 'td_logo' );
		}
		
		if (get_theme_mod( 'td_logosticky' ) =='' ) {
			$logosticky = ''.get_template_directory_uri() .'/inc/images/logo-light.png';
		}
		else {	
			$logosticky = get_theme_mod( 'td_logosticky' );
		}
	
	?>
        
    <link rel="icon" href="<?php echo esc_url($favicon); ?>" type="image/png"  />
    
    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>

	<div id="preloader">
	    <div id="status">&nbsp;</div>
	</div>
    
    <?php if ( get_theme_mod( 'tdgr_nav_type' ) != 'style2' ) : ?>
    
    <header>
    
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    
            <nav class="navigation">
    
                <div class="container">
    
                    <div class="navbar-header">
    
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        
                            <span class="sr-only">Toggle navigation</span>
                            
                            <span class="icon-bar"></span>
                            
                            <span class="icon-bar"></span>
                            
                            <span class="icon-bar"></span>
                            
                        </button>	   
  
                        <div class="logo">
                            
                            <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            		
								<img class="logo-light" style="display:block !important" src="<?php echo esc_url($logo); ?>" alt="<?php get_bloginfo( 'name' ); ?>" />
		              
                            </a>
                        
                        </div>         
    
                    </div>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                        <div id="search">
                            <i class="pe-7s-search search-trigger"></i>
                        </div>
                        <div class="search-bar">
                            <div class="search-wrap">
                                <form role="form" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                                    <div class="form-group">
                                        <input type="search" class="form-control searchbox" placeholder="<?php echo esc_attr_x( 'Search', 'axes' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'axes' ) ?>" />
                                    </div>
                                    <button type="submit" class="search-button"><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                        </div>   
                        </li>
                    </ul>
    
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                            
                        <?php if ( has_nav_menu( 'primary' ) ) { wp_nav_menu( array( 'theme_location' => 'primary','container_id'=>'menu-home-menu-container', 'menu_id' => 'menu-home-menu', 'menu_class' => 'nav navbar-nav navbar-right' ) ); } ?> 
                    </div>  
                    
                </div> 
            
            </nav> 
            
        </nav> 
        
    </header>
    
    <?php endif; ?>
    
    <?php if ( get_theme_mod( 'tdgr_nav_type' ) == 'style2' ) : ?>
    
    <header>
    
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    
            <nav class="navigation">
    
                <div class="container">
    
                    <div class="navbar-header">
    
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        
                            <span class="sr-only">Toggle navigation</span>
                            
                            <span class="icon-bar"></span>
                            
                            <span class="icon-bar"></span>
                            
                            <span class="icon-bar"></span>
                            
                        </button>	        	 
    
                        <div class="logo">
                            
                            <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                            
                            <?php if ( is_front_page() ) { ?>
                                <img class="logo-dark" src="<?php echo esc_url($logo); ?>" alt="<?php get_bloginfo( 'name' ); ?>" />
                                <img class="logo-light" src="<?php echo esc_url($logosticky); ?>" alt="<?php get_bloginfo( 'name' ); ?>" />
                            <?php } if ( !is_front_page() ) { ?>
                            	 <img class="logo-dark" src="<?php echo esc_url($logosticky); ?>" alt="<?php get_bloginfo( 'name' ); ?>" />
                            <?php } ?> 
                           
                            </a>
                        
                        </div>         
    
                    </div>
    
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                    
                    <?php if ( is_front_page() ) { ?>
                            
                        <?php if ( has_nav_menu( 'primary' ) ) { wp_nav_menu( array( 'theme_location' => 'primary','container_id'=>'menu-home-menu-container', 'menu_id' => 'menu-home-menu', 'menu_class' => 'one-menu nav navbar-nav navbar-right' ) ); } ?> 
                        
                     <?php } else { ?>
                     
                     	<?php if ( has_nav_menu( 'secondary' ) ) { wp_nav_menu( array( 'theme_location' => 'secondary','container_id'=>'menu-home-menu-container', 'menu_id' => 'menu-home-menu', 'menu_class' => 'nav navbar-nav navbar-right' ) ); } ?> 
                        
                     <?php } ?>
                        
                    </div>  
                    
                </div> 
            
            </nav> 
            
        </nav> 
        
    </header>
    
    <?php endif; ?>
    
	<div id="wrapper">  
            
		<div class="td-main"> 
        
        	<div>
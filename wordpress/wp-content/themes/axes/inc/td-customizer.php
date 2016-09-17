<?php

/*
|--------------------------------------------------------------------------
| Axes Live Customizer
|--------------------------------------------------------------------------
*/

	function td_register_theme_customizer( $wp_customize ) {	

	/*
	|--------------------------------------------------------------------------
	| Color Section
	|--------------------------------------------------------------------------
	*/
	
		$wp_customize->add_setting(
			'tdgr_primary_color',
			array(
				'default'       => '#1dcfd1',
				'priority' => 81,
				'sanitize_callback' => 'esc_url_raw'
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'primary_color',
				array(
					'label'      => __( 'Primary Color Accent', 'axes' ),
					'section'    => 'colors',
					'settings'   => 'tdgr_primary_color'
				)
			)
		);
		
	/*
	|--------------------------------------------------------------------------
	| Breadcrumbs Section
	|--------------------------------------------------------------------------
	*/
	
		$wp_customize->add_section(
			'tdgr_breadcrumbs',
			array(
				'title'     => 'Breadcrumbs',
				'priority'  => 5
			)
		);
	
		$wp_customize->add_setting(
			'tdgr_bread_color',
			array(
				'default'       => '#fff',
				'priority' => 81,
				'sanitize_callback' => 'esc_url_raw'
			)
		);
		
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'tdgr_bread_color',
				array(
					'label'      => __( 'Font color', 'axes' ),
					'section'    => 'tdgr_breadcrumbs',
					'settings'   => 'tdgr_bread_color'
				)
			)
		);
		
		$wp_customize->add_setting(
			'tdgr_bread_image',
			array(
				'default'     => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);
		
		$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'tdgr_bread_image',
			   array(
				   'label'      => __( 'Background Image', 'axes' ),
				   'section'    => 'tdgr_breadcrumbs',
				   'settings'   => 'tdgr_bread_image'
			   )
		   )
	   );
		
	/*
	|--------------------------------------------------------------------------
	| Header Section
	|--------------------------------------------------------------------------
	*/
		
		$wp_customize->add_section(
			'tdgr_logo',
			array(
				'title'     => 'Header',
				'priority'  => 5
			)
		);
	
		$wp_customize->add_setting(
			'td_logo',
			array(
				'default'     => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);
		
		$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'td_logo',
			   array(
				   'label'      => __( 'Logo', 'axes' ),
				   'section'    => 'tdgr_logo',
				   'settings'   => 'td_logo'
			   )
		   )
	   );
	   
	   $wp_customize->add_setting(
			'td_logosticky',
			array(
				'default'     => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);
		
		$wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'td_logosticky',
			   array(
				   'label'      => __( 'Logo Sticky', 'axes' ),
				   'section'    => 'tdgr_logo',
				   'settings'   => 'td_logosticky'
			   )
		   )
	   );
	   
	   $wp_customize->add_setting(
			'td_favicon',
			array(
				'default'     => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);
	   
	   $wp_customize->add_control(
		   new WP_Customize_Image_Control(
			   $wp_customize,
			   'td_favicon',
			   array(
				   'label'      => __( 'Favicon', 'axes' ),
				   'section'    => 'tdgr_logo',
				   'settings'   => 'td_favicon'
			   )
		   )
	   );
	   
	   $wp_customize->add_setting(
			'tdgr_nav_type',
			array(
				'default'    =>  'style1',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
	
		$wp_customize->add_control(
			'tdgr_nav_type',
			array(
				'section'   => 'tdgr_logo',
				'label'     => 'Navigation Style',
				'type'      => 'select',
				'choices'        => array(
                ''   => __( 'Default white', 'axes' ),
                'style2'  => __( 'Transparent', 'axes' )
            	),
				'priority'   => 3
			)
		);
		
		$wp_customize->add_control(
			'blogname',
			array(
				'section'   => 'tdgr_logo',
				'label'     => 'Site title',
				'type'      => 'text',
				'priority'   => 1
			)
		);
		
		$wp_customize->add_control(
			'blogdescription',
			array(
				'section'   => 'tdgr_logo',
				'label'     => 'Site Description',
				'type'      => 'text',
				'priority'   => 1
			)
		);
			
		/* add more sections here */
		
	/*
	|--------------------------------------------------------------------------
	| Footer Section
	|--------------------------------------------------------------------------
	*/
		
		$wp_customize->add_section(
			'tdgr_footer_options',
			array(
				'title'     => 'Footer',
				'priority'  => 10
			)
		);
		
		/* Footer Copyrights */
		$wp_customize->add_setting(
			'tdgr_footer_copyrights',
			array(
				'default'    =>  'Axes. All Rights Reserved.',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
	
		$wp_customize->add_control(
			'tdgr_footer_copyrights',
			array(
				'section'   => 'tdgr_footer_options',
				'label'     => 'Copyrights text',
				'type'      => 'text',
				'priority'   => 2
			)
		);
		
		/* Footer Social Icons */
		$wp_customize->add_setting(
			'td_fb_link',
			array(
				'default'    =>  '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
	
		$wp_customize->add_control(
			'td_fb_link',
			array(
				'section'   => 'tdgr_footer_options',
				'label'     => 'Facebook link',
				'type'      => 'text',
				'priority'   => 3
			)
		);
		
		$wp_customize->add_setting(
			'td_twitter_link',
			array(
				'default'    =>  '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
	
		$wp_customize->add_control(
			'td_twitter_link',
			array(
				'section'   => 'tdgr_footer_options',
				'label'     => 'Twitter link',
				'type'      => 'text',
				'priority'   => 4
			)
		);
		
		$wp_customize->add_setting(
			'td_dribbble_link',
			array(
				'default'    =>  '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
	
		$wp_customize->add_control(
			'td_dribbble_link',
			array(
				'section'   => 'tdgr_footer_options',
				'label'     => 'Dribbble link',
				'type'      => 'text',
				'priority'   => 5
			)
		);
		
		$wp_customize->add_setting(
			'td_instagram_link',
			array(
				'default'    =>  '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
	
		$wp_customize->add_control(
			'td_instagram_link',
			array(
				'section'   => 'tdgr_footer_options',
				'label'     => 'Instagram link',
				'type'      => 'text',
				'priority'   => 6
			)
		);
		
		$wp_customize->add_setting(
			'td_google_plus_link',
			array(
				'default'    =>  '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
	
		$wp_customize->add_control(
			'td_google_plus_link',
			array(
				'section'   => 'tdgr_footer_options',
				'label'     => 'Google plus link',
				'type'      => 'text',
				'priority'   => 7
			)
		);
		
		$wp_customize->add_setting(
			'td_behance_link',
			array(
				'default'    =>  '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
	
		$wp_customize->add_control(
			'td_behance_link',
			array(
				'section'   => 'tdgr_footer_options',
				'label'     => 'Behance link',
				'type'      => 'text',
				'priority'   => 8
			)
		);
		
		$wp_customize->add_setting(
			'td_linkedin_link',
			array(
				'default'    =>  '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
	
		$wp_customize->add_control(
			'td_linkedin_link',
			array(
				'section'   => 'tdgr_footer_options',
				'label'     => 'Linkedin link',
				'type'      => 'text',
				'priority'   => 9
			)
		);
		
		$wp_customize->add_setting(
			'td_flickr_link',
			array(
				'default'    =>  '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
	
		$wp_customize->add_control(
			'td_flickr_link',
			array(
				'section'   => 'tdgr_footer_options',
				'label'     => 'Flickr link',
				'type'      => 'text',
				'priority'   => 10
			)
		);
		
		$wp_customize->add_setting(
			'td_foursquare_link',
			array(
				'default'    =>  '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
	
		$wp_customize->add_control(
			'td_foursquare_link',
			array(
				'section'   => 'tdgr_footer_options',
				'label'     => 'Foursquare link',
				'type'      => 'text',
				'priority'   => 11
			)
		);
		
		$wp_customize->add_setting(
			'td_skype_link',
			array(
				'default'    =>  '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
	
		$wp_customize->add_control(
			'td_skype_link',
			array(
				'section'   => 'tdgr_footer_options',
				'label'     => 'Skype link',
				'type'      => 'text',
				'priority'   => 12
			)
		);
		
		$wp_customize->add_setting(
			'td_youtube_link',
			array(
				'default'    =>  '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
	
		$wp_customize->add_control(
			'td_youtube_link',
			array(
				'section'   => 'tdgr_footer_options',
				'label'     => 'Youtube link',
				'type'      => 'text',
				'priority'   => 13
			)
		);
		
		$wp_customize->add_setting(
			'td_vimeo_link',
			array(
				'default'    =>  '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
	
		$wp_customize->add_control(
			'td_vimeo_link',
			array(
				'section'   => 'tdgr_footer_options',
				'label'     => 'Vimeo link',
				'type'      => 'text',
				'priority'   => 14
			)
		);
		
		$wp_customize->add_setting(
			'td_pinterest_link',
			array(
				'default'    =>  '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
	
		$wp_customize->add_control(
			'td_pinterest_link',
			array(
				'section'   => 'tdgr_footer_options',
				'label'     => 'Pinterest link',
				'type'      => 'text',
				'priority'   => 15
			)
		);
		
		$wp_customize->add_setting(
			'td_reddit_link',
			array(
				'default'    =>  '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
	
		$wp_customize->add_control(
			'td_reddit_link',
			array(
				'section'   => 'tdgr_footer_options',
				'label'     => 'Reddit link',
				'type'      => 'text',
				'priority'   => 16
			)
		);
		
		$wp_customize->add_setting(
			'td_git_link',
			array(
				'default'    =>  '',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
	
		$wp_customize->add_control(
			'td_git_link',
			array(
				'section'   => 'tdgr_footer_options',
				'label'     => 'Github link',
				'type'      => 'text',
				'priority'   => 17
			)
		);
		
		/* Add more sections here */
		
	}
	
	add_action( 'customize_register', 'td_register_theme_customizer' );
	
/*
|--------------------------------------------------------------------------
| Generate Customizer CSS
|--------------------------------------------------------------------------
*/
	
	function axes_customizer_css() { 
	
		if ( !is_front_page() ) { ?>
        
        <style type="text/css">
			
			.page-content,
			.blog-content {
				padding:120px 0;
			}	
		
        </style>
			
		<?php }
		
		if ( is_front_page() ) { ?>
        
        <style type="text/css">
			
			.page-content,
			.blog-content {
				padding:220px 0 120px 0;
			}	
		
        </style>
			
		<?php }
	
		if ( get_theme_mod( 'tdgr_nav_type' ) == 'style2' ) { 
		
		if ( is_front_page() ) {
			
		?>
			
			<style type="text/css">
			
			.navigation {
  				background: none;
			}
			
			.navigation.sticky {
				background:#fff;
				transition: all 0.5s ease-in-out;
				-moz-transition: all 0.5s ease-in-out;
				-webkit-transition: all 0.5s ease-in-out;
				-o-transition: all 0.5s ease-in-out;
			}
			
			.navigation ul.navbar-nav > li > a {
				color:#fff ;
			}
			
			.navigation.sticky ul.navbar-nav > li > a {
				color:#45464b ;
			}
			
			.navigation .logo-dark,
			.navigation.sticky .logo-light {
			  display: none;
			}
			
			.navigation.sticky .logo-dark {
			  display: block;
			}
			
			.navigation.sticky .logo {
			  padding: 20px 0 19px;
			}
			
			</style>
            
		
		<?php } } 
	
		if ( get_theme_mod( 'tdgr_primary_color' ) == '' ) { $primary_color="#1dcfd1"; } else { $primary_color=get_theme_mod( 'tdgr_primary_color' ); }
	
		?>
		
		<style type="text/css">
					
			body {
				font-family: 'Lato', sans-serif;	
				font-size: 16px;
				font-weight: 400;
			}
					
			.ui-state-active a, 
			.ui-state-default a,
			.timer, h1, h2, h3, h4, h5, h6, .pr-btn, 
			.vc_btn_btn-load-more,
			.vc_btn_btn-load-more-dark,
			.form-submit input#submit,
			input.wpcf7-submit,
			.vc_pie_chart .vc_pie_chart_value,
			a.btn-style1,
			a.btn-style2,
			a.btn-style3,
			a.btn-style4,
			a.btn-style5,
			article input[type="submit"],
			.more-link,
			.tweettext, .widget .tweettext,
			.aiwidgetscss .owl-nav:before,
			.cta-text,
			.rsswidget,
			h6.blog2-title {
				font-family: 'Varela Round', sans-serif;	
				font-weight: 400;
			}
				
			.main-menu,
			.navbar-default .navbar-nav > li > a {
				font-family: 'Varela Round', sans-serif;	
				font-size: 12px;
				font-weight: 400;
			}
				
			.site-title {
				font-family: 'Varela Round', sans-serif;	
				font-size: 26px;
				font-weight: 400;
				text-transform:uppercase;
			}
	
		
		.pr-btn:hover,
		a.btn-style1,
		a.btn-style3:hover,
		a.btn-style3:focus,
		a.more-link:hover,
		a.more-link:focus,
		.vc_btn_btn-load-more-dark,
		.pr-btn,
		.offer,
		.vc_btn_btn-load-more:hover,
		span.highlight1,
		.tagcloud a:hover,
		.tagcloud a:focus,
		.form-submit input#submit,
		article input[type="submit"],
		input.wpcf7-submit,
		.icb-default-cl .icb-line,
		.section-line,
		.features-left .icb-icon i,
		.features-right .icb-icon i,
		a.btn-style10:hover,
		a.btn-style10:active,
		a.btn-style11,
		.pr-cl-accent.pr-header,
		.dropcaps2:first-child:first-letter,
		.footer-social a:hover,
		#back-to-top:hover,
		.search-bar button,
		#cart>a>span,
		.navbar-default .navbar-toggle:focus .icon-bar,
		.navbar-default .navbar-toggle:hover .icon-bar,
		.wpb_column h1.wpb_heading:after,
		.wpb_column h2.wpb_heading:after,
		.project-icons a:hover {
			background: <?php echo esc_attr($primary_color); ?>; 
		}
		
		.tp-bullets.simplebullets .bullet:hover,
		.tp-bullets.simplebullets .bullet.selected,
		.icon-effect-1a.icon-default .hi-icon:hover,
		.service-item-box2.icon-default i,
		.owl-dots > .active > span  {
			background: <?php echo esc_attr($primary_color); ?> !important; 
		}
		
		span.highlight1,
		article input[type="submit"] {
			color:#fff;
		}
		
		.left-content i,
		.format-link a:hover,
		h5.format-link-title,
		.go-top:hover,
		.primary,
		.main-menu li:hover > a,
		.main-menu li a:hover,
		.main-menu li:focus > a,
		.main-menu li a:focus,
		.main-menu .current_page_item > a,
		.main-menu .current_page_ancestor > a,
		.main-menu .current-menu-item > a,
		.main-menu .current-menu-ancestor > a,
		a.btn-style1:hover,
		a,
		ul.main-menu li:hover > a,
		ul.main-menu li a:hover,
		ul.main-menu li:focus > a,
		ul.main-menu li a:focus,
		ul.sub-menu li:hover > a,
		ul.sub-menu li a:hover,
		ul.sub-menu li:focus > a,
		ul.sub-menu li a:focus,
		.portfolio-tax,
		.section .wpb_toggle:hover, 
		.section #content h4.wpb_toggle:hover,
		.td-footer a:hover,
		ul.filters li:hover a,
		ul.filters .active
		.minimal-light .esg-navigationbutton:hover,
		.widget_categories a:hover,
		.widget_recent_entries a:hover,
		.widget_rss a:hover,
		.widget_calendar a:hover,
		.widget_recent_entries a:hover,
		.widget_pages a:hover,
		.widget_archive a:hover,
		.widget_recent_comments a:hover, 
		.widget_meta a:hover,
		.format-quote-author,
		.port-navigation > div > a > i:hover,
		.ui-state-default > a:hover,
		.ui-state-active > a,
		.wpb_accordion .wpb_accordion_wrapper .ui-state-active .ui-icon:before,
		.ui-state-default:hover .ui-icon:before,
		.vc_btn_btn-load-more-dark:hover,
		.vc_btn_btn-load-more-dark:focus,
		a.sidebar-menu-btn:hover,
		a.sidebar-menu-btn:focus,
		.form-submit input#submit:hover,
		article a:hover,
		article a:focus,
		.service-item.icon-default i,
		.service-item-box.icon-default i,
		.service-item-box.icon-default a,
		.service-item-box2.icon-default a,
		.blog-item a:hover h3,
		a.btn-white,
		a.btn-white2:hover,
		a.btn-white2:active,
		#breadcrumbs li a:hover,
		#breadcrumbs li a:focus,
		h3.entry-title a:hover,
		h3.entry-title a:focus,
		.vc_gitem-post-data-source-post_title h6 a:hover,
		.pr-plan,
		blockquote.blockquote2 cite,
		ul.arrows i,
		ul.numbers i,
		ul.checks i,
		.ctn-style1,
		a.site-title:hover,
		span.slider-bullet,
		.navbar-default .navigation.overlay .navbar-nav>.active>a,
		.navbar-default .navigation.overlay .navbar-nav>.active>a:focus,
		.navbar-default .navigation.overlay .navbar-nav>.active>a:hover,
		.navbar-default .navigation .navbar-nav>.active>a,
		.navbar-default .navigation .navbar-nav>.active>a:focus,
		.navbar-default .navigation .navbar-nav>.active>a:hover,
		.navbar-default .navigation .navbar-nav>li>a:hover,
		.navigation.overlay .navbar-nav a:hover, 
		.navigation.overlay.sticky .navbar-nav a:hover,
		.navbar-default .navbar-nav>.open>a,
		.navbar-default .navbar-nav>.open>a:focus,
		.navbar-default .navbar-nav>.open>a:hover,
		.bullets li:before {
			color: <?php echo esc_attr($primary_color); ?>; 
		}
		
		@-webkit-keyframes sonarEffect {
		  0% {
			opacity: 0.3;
		  }
		  40% {
			opacity: 0.5;
			box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 10px 10px <?php echo $primary_color ?>, 0 0 0 10px rgba(255,255,255,0.5);
		  }
		  100% {
			box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 10px 10px <?php echo $primary_color ?>, 0 0 0 10px rgba(255,255,255,0.5);
			-webkit-transform: scale(1.3);
			opacity: 0;
		  }
		}
		@-moz-keyframes sonarEffect {
		  0% {
			opacity: 0.3;
		  }
		  40% {
			opacity: 0.5;
			box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 10px 10px <?php echo $primary_color ?>, 0 0 0 10px rgba(255,255,255,0.5);
		  }
		  100% {
			box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 10px 10px <?php echo $primary_color ?>, 0 0 0 10px rgba(255,255,255,0.5);
			-moz-transform: scale(1.3);
			opacity: 0;
		  }
		}
		@keyframes sonarEffect {
		  0% {
			opacity: 0.3;
		  }
		  40% {
			opacity: 0.5;
			box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 10px 10px <?php echo $primary_color ?>, 0 0 0 10px rgba(255,255,255,0.5);
		  }
		  100% {
			box-shadow: 0 0 0 2px rgba(255,255,255,0.1), 0 0 10px 10px <?php echo $primary_color ?>, 0 0 0 10px rgba(255,255,255,0.5);
			transform: scale(1.3);
			opacity: 0;
		  }
		}
		
		@media (max-width: 767px) {
			
			.navigation.overlay .navbar-nav > li > a:hover,
			.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {
			  color: <?php echo esc_attr($primary_color); ?>;
			}
			
		}
		
		.icon-effect-1.icon-default .hi-icon:after {
			box-shadow: 0 0 0 4px <?php echo esc_attr($primary_color); ?>;
		}
			
		.current-menu-item > a,
		.current-menu-parent > a,
		#filters .active,
		.sidebar-menu a:hover > span.caret,
		.comment-reply i,
		.comment-reply a,
		.contact-box .vc_icon_element-icon,
		.tweettext a, 
		.widget .tweettext a,
		.contact-opacity i,
		.current,
		a.page-numbers:hover,
		.vc_grid-filter-item:hover > span,
		.scroll-link,
		.member-social a:hover,
		.mobile-close:hover {
			color: <?php echo esc_attr($primary_color); ?> !important;
		}
		
		a.btn-style1:hover,
		a.btn-style1:focus,
		a.btn-style1,
		a.btn-style3:hover,
		a.btn-style3:focus,
		a.btn-style10:hover,
		a.btn-style10:active, 
		a.btn-style11,
		a.more-link:hover,
		a.more-link:focus,
		ul.filters li:hover a,
		ul.filters .active,
		.form-submit input#submit,
		input.wpcf7-submit,
		.aiwidgetscss .owl-nav:before,
		article input[type="submit"] {
			border: 2px solid <?php echo esc_attr($primary_color); ?>; 
		}
		
		.vc_btn_btn-load-more-dark:hover,
		.vc_btn_btn-load-more-dark:focus {
			border: 1px solid <?php echo esc_attr($primary_color); ?> !important; 
		}
		
		.tagcloud a:hover {
			border: 1px solid <?php echo esc_attr($primary_color); ?>; 
		}
				
		.owl-dots > .active > span,
		.tp-bullets.simplebullets .bullet:hover,
		.tp-bullets.simplebullets .bullet.selected,
		.wpcf7-form input:focus,
		.wpcf7-form textarea:focus,
		input.wpcf7-submit,
		#respond input:focus,
		#respond textarea:focus {
			border: 2px solid <?php echo esc_attr($primary_color); ?>; 	
			outline:none;
		}
		
		.main-border.icon-default {
			border-bottom: 2px solid <?php echo esc_attr($primary_color); ?>;
		}
		
		blockquote.blockquote2 {
			border-left: 3px solid <?php echo esc_attr($primary_color); ?>;
		}
		
		.dropdown-menu {
  			border-top: 2px solid <?php echo esc_attr($primary_color); ?>;
		}
	
	</style>
    
	<?php } 
	
	add_action( 'wp_head', 'axes_customizer_css' ); 
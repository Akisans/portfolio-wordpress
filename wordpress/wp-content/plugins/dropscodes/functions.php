<?php

/**
 * Axes shortcodes
 *
 * @package Wordpress.Plugins
 * @subpackage Dropscodes
 * @since Dropscodes 1.1
 * @author TDGR / Pixeldrops.net
 *
 *
 * Index
 *
 * 1. Row
 * 2. Column
 * 3. Icon
 * 4. Button
 * 5. Simple Quote
 * 6. Team Rotator
 * 7. Team Member
 * 8. Pricing Tables
 * 9. Pricing Table Fields
 * 10. Youtube
 * 11. Vimeo
 * 12. Brands Rotator
 * 13. Single Brand
 * 14. Icon Box
 * 15. Promo Box
 * 16. Testimonials Rotator
 * 17. Single Testimonial
 * 18. Call to Action
 * 19. Owl Carousel
 * 20. Owl Slide
 * 21. Portfolio Share
 * 22. Blog ( Frontpage shortcode )
 * 23. Portfolio Carousel
 * 24. CountTo
 * 25. Dropcaps
 * 26. Process
 *
 * - Portfolio Taxonomy
 *
 */

// 1. Row 
function row_shortcode( $atts, $content = null ) {
	return '<div class="container">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'row', 'row_shortcode' );

// 2. Column
function col_shortcode( $atts, $content = null ) {
		$col = shortcode_atts( array(
		'class' => '',
	), $atts );
	return '<div class="vc_' . $col['class'] . '">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'col', 'col_shortcode' );

// 3. Icon
function icon_shortcode( $atts ){
	$ico = shortcode_atts( array(
		'class' => '',
		'link' => '#',
		'target' => 'new',
	), $atts );
	return '<a class="fa ' . $ico['class'] . '" href="' . $ico['link'] . '" target="' . $ico['target'] . '"></a>';
}
add_shortcode( 'icon', 'icon_shortcode' );

// 4. Button
function button_shortcode( $atts, $content = null ){
	$btn = shortcode_atts( array(
		'style' => '',
		'btn_type' => '',
		'size' => '',
		'href' => '',
		'title' => '',
		'target' => '',
		'icon' => '',
	), $atts );
	return '<a href="' . $btn['href'] . '" class="' . $btn['style'] . ' ' . $btn['size'] . ' ' . $btn['btn_type'] . '" title="' . $btn['title'] . '" target="' . $btn['target'] . '" /><i class="' . $btn['icon'] . '"></i> ' . $btn['title'] . '</a>';
}
add_shortcode( 'button', 'button_shortcode' );

add_action( 'vc_before_init', 'button' );
function button() {
   vc_map( array(
      "name" => __("Buttons"),
      "base" => "button",
      "class" => "",
      "category" => __('Content'),
      'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
      'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
      "params" => array(
	  	array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Label"),
            "param_name" => "title",
            "value" => __("Label"),
            "description" => __("Button label")
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Link to"),
            "param_name" => "href",
            "value" => __("#"),
            "description" => __("Add a link.")
         ),
		 array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Target"),
            "param_name" => "target",
           	"value"   => array(
				'_self'   => '_self',
				'_blank'   => '_blank',
				'new'   => 'new',
				'_parent'   => '_parent',
				'_top'   => '_top',
			),
            "description" => __("Select target (optional)")
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Icon"),
            "param_name" => "icon",
            "value" => __(""),
            "description" => __("Add the class of the icon. For example fa fa-facebook")
         ),
		 array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Style"),
            "param_name" => "style",
            "description" => __("Select size."),
			"value"   => array(
				'Style1 - Default theme accent'   => 'btn-style1',
				'Style2 - Orange'   => 'btn-style2',
				'Style3 - White'   => 'btn-style3',
				'Style4 - Purple'   => 'btn-style4',
				'Style5 - Yellow'   => 'btn-style5',
				'Style6 - Green'   => 'btn-style6',
				'Style7 - Blue'   => 'btn-style7',
				'Style8 - Pink'   => 'btn-style8',
			),
		),
		 array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Size"),
            "param_name" => "size",
            "value"   => array(
				'Medium'   => 'medium',
				'Small'   => 'small',
				'Large' => 'large',
			),
            "description" => __("Select size."),
         ),
		 array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Type"),
            "param_name" => "btn_type",
            "value"   => array(
				'Rounded'   => 'btn-rounded',
				'Squared'   => '',
			),
            "description" => __("Select type."),
         ),
	)
   ) );
}

// 5. Simple Quote
function quote_shortcode( $atts, $content = null ){
	$blq = shortcode_atts( array(
		'quote_text' => '',
		'quote_author' =>'',
		'quote_job' =>'',
		'image' => '',
	), $atts );
	
	if ( $blq['image'] == "" ) { 
		$tslogo = ''. plugins_url( 'assets/images/brand.gif', __FILE__ ) .''; 
	} 
	else {
		$tslogo =  wp_get_attachment_image_src( $blq['image'], 'large' ) ;
		$tslogo = $tslogo[0];
	}
	
	return 
	'<div class="st-block">
		<div class="st-image"><img src="' . $tslogo . '" alt="author" /></div>
		<div class="st-info">
			<h5 class="st-author">' . $blq['quote_author'] . '</h5>
			<div class="st-job">' . $blq['quote_job'] . '</div>
			<div class="st-content">' . $blq['quote_text'] . '</div>
		</div>
	</div>';
}
add_shortcode( 'quote', 'quote_shortcode' );

add_action( 'vc_before_init', 'quote' );
function quote() {
   vc_map( array(
      "name" => __("Single Testimonial"),
      "base" => "quote",
      "class" => "",
      "category" => __('Content'),
      'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
      'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Quote"),
            "param_name" => "quote_text",
            "value" => __("Count your age by friends, not years. Count your life by smiles, not tears. Darkness cannot drive out darkness: only light can do that."),
            "description" => __("Add a quote.")
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Author"),
            "param_name" => "quote_author",
            "value" => __("John Lennon"),
            "description" => __("Author name.")
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Author Info"),
            "param_name" => "quote_job",
            "value" => __("CEO at Axes Ltd.")
         ),
		 array(
            "type" => "attach_image",
			"holder" => "",
            "class" => "",
            "heading" => __("Author image", "axes"),
            "param_name" => "image"
        ),
	)
   ) );
}

// 6. Team Rotator
function team_shortcode( $atts, $content = null ) {
	return '<div id="teams" class="owl-carousel">' . do_shortcode($content) . '</div> <script type="text/javascript">(function($){"use strict";$(window).bind("load", function() {$("#teams").owlCarousel({nav : false,scrollPerPage : true,mouseDrag: true,touchDrag: true,dots : false,items:4,margin:5,responsiveClass:true,responsive : {1200 : {items : 4,},992 : {items: 3,},768 : {items:2,},0 : {items:1,}}})});})(jQuery);</script>';
}
add_shortcode( 'team', 'team_shortcode' );

// 7.Team Member
function team_member_shortcode( $atts, $content = null ) {
	
	$mem = shortcode_atts( array(
		'image' => '',
		'name' => '',
		'job' => '',
		'short_bio' => '',
		'mb_fb_link' => '',
		'mb_twitter_link' => '',
		'mb_dribbble_link' => '',
		'mb_instagram_link' => '',
		'mb_google_plus_link' => '',
		'mb_behance_link' => '',
		'mb_linkedin_link' => '',
		'mb_flickr_link' => '',
		'mb_foursquare_link' => '',
		'mb_skype_link' => '',
		'mb_youtube_link' => '',
		'mb_vimeo_link' => '',
		'mb_pinterest_link' => '',
		'mb_reddit_link' => '',
		'mb_git_link' => '',
	), $atts );
	
	// Create social links if exists
	if ( $mem['mb_fb_link'] != "" ) { $mb_fb_link = '<a href="'. $mem['mb_fb_link'] .'" target="_blank"><i class="fa fa-facebook"></i></a>'; } else { $mb_fb_link = ''; }
	if ( $mem['mb_twitter_link'] != "" ) { $mb_twitter_link = '<a href="'. $mem['mb_twitter_link'] .'" target="_blank"><i class="fa fa-twitter"></i></a>'; } else { $mb_twitter_link = ''; }
	if ( $mem['mb_dribbble_link'] != "" ) { $mb_dribbble_link = '<a href="'. $mem['mb_dribbble_link'] .'" target="_blank"><i class="fa fa-dribbble"></i></a>'; } else { $mb_dribbble_link = ''; } 
	if ( $mem['mb_instagram_link'] != "" ) { $mb_instagram_link = '<a href="'. $mem['mb_instagram_link'] .'" target="_blank"><i class="fa fa-instagram"></i></a>'; } else { $mb_instagram_link = ''; }
	if ( $mem['mb_google_plus_link'] != "" ) { $mb_google_plus_link = '<a href="'. $mem['mb_google_plus_link'] .'" target="_blank"><i class="fa fa-google-plus"></i></a>'; } else { $mb_google_plus_link = ''; }
	if ( $mem['mb_behance_link'] != "" ) { $mb_behance_link = '<a href="'. $mem['mb_behance_link'] .'" target="_blank"><i class="fa fa-behance"></i></a>'; } else { $mb_behance_link = ''; } 
	if ( $mem['mb_linkedin_link'] != "" ) { $mb_linkedin_link = '<a href="'. $mem['mb_linkedin_link'] .'" target="_blank"><i class="fa fa-linkedin"></i></a>'; } else { $mb_linkedin_link = ''; }
	if ( $mem['mb_flickr_link'] != "" ) { $mb_flickr_link = '<a href="'. $mem['mb_flickr_link'] .'" target="_blank"><i class="fa fa-flickr"></i></a>'; } else { $mb_flickr_link = ''; }
	if ( $mem['mb_foursquare_link'] != "" ) { $mb_foursquare_link = '<a href="'. $mem['mb_foursquare_link'] .'" target="_blank"><i class="fa fa-foursquare"></i></a>'; } else { $mb_foursquare_link = ''; } 
	if ( $mem['mb_skype_link'] != "" ) { $mb_skype_link = '<a href="'. $mem['mb_skype_link'] .'" target="_blank"><i class="fa fa-skype"></i></a>'; } else { $mb_skype_link = ''; }
	if ( $mem['mb_youtube_link'] != "" ) { $mb_youtube_link = '<a href="'. $mem['mb_youtube_link'] .'" target="_blank"><i class="fa fa-youtube"></i></a>'; } else { $mb_youtube_link = ''; }
	if ( $mem['mb_vimeo_link'] != "" ) { $mb_vimeo_link = '<a href="'. $mem['mb_vimeo_link'] .'" target="_blank"><i class="fa fa-vimeo-square"></i></a>'; } else { $mb_vimeo_link = ''; } 
	if ( $mem['mb_pinterest_link'] != "" ) { $mb_pinterest_link = '<a href="'. $mem['mb_pinterest_link'] .'" target="_blank"><i class="fa fa-pinterest"></i></a>'; } else { $mb_pinterest_link = ''; }
	if ( $mem['mb_reddit_link'] != "" ) { $mb_reddit_link = '<a href="'. $mem['mb_reddit_link'] .'" target="_blank"><i class="fa fa-reddit"></i></a>'; } else { $mb_reddit_link = ''; }
	if ( $mem['mb_git_link'] != "" ) { $mb_git_link = '<a href="'. $mem['mb_git_link'] .'" target="_blank"><i class="fa fa-git"></i></a>'; } else { $mb_git_link = ''; } 
	
	
	if ( $mem['image'] == "" ) { 
		$image = ''. plugins_url( 'assets/images/team.gif', __FILE__ ) .''; 
	} 
	else {
		$image =  wp_get_attachment_image_src( $mem['image'], 'large' ) ;
		$image = $image[0];
	}
	
	return '<div class="member"><div class="member-image"><img class="img-responsive" src="' . $image . '" alt="' . $mem['name'] . '" /></div><div class="member-details"><h5 class="member-name">' . $mem['name'] . '</h5><div class="member-job">' . $mem['job'] . '</div><div class="member-text">' . $mem['short_bio'] . '</div><div class="member-social">'. $mb_fb_link .''. $mb_twitter_link .''. $mb_dribbble_link .''. $mb_instagram_link .''. $mb_google_plus_link .''. $mb_behance_link .''. $mb_linkedin_link .''. $mb_flickr_link .''. $mb_foursquare_link .''. $mb_skype_link .''. $mb_youtube_link .''. $mb_vimeo_link .''. $mb_pinterest_link .''. $mb_reddit_link .''. $mb_git_link .'</div></div></div>';
}
add_shortcode( 'team_member', 'team_member_shortcode' );

// 8. Pricing Tables
function pricing_shortcode( $atts, $content = null ) {
	$prc = shortcode_atts( array(
		'label' => 'Label',
		'currency' => '$',
		'period'=>'Per Month',
		'price' => '1',
		'link' => '#',
		'button_text' => 'Select',
		'style' => '1',
		'accent' => 'pr-cl-default'
	), $atts );
	return '<div class="pr-style' . $prc['style'] . ' ' . $prc['accent'] . '"><div class="pr-header ' . $prc['accent'] . '"><h5 class="pr-plan">' . $prc['label'] . '</h5><h2 class="pr-currency"><span class="sup-currency">' . $prc['currency'] . '</span> ' . $prc['price'] . '</h2><span class="pr-period"> ' . $prc['period'] . '</span></div><div class="pr-body">' . do_shortcode($content) . '</div><a href="' . $prc['link'] . '" class="pr-button btn-rounded medium">' . $prc['button_text'] . '</a></div>';
}
add_shortcode( 'pricing', 'pricing_shortcode' );

// 9. Pricing Table fields
function field_shortcode( $atts, $content = null ) {
	$prf = shortcode_atts( array(
		'text' => 'Field Text',
	), $atts );
	return '<div class="pr-field">' . $prf['text'] . '</div>';
}
add_shortcode( 'field', 'field_shortcode' );

// 10. Youtube
function youtube_shortcode( $atts, $content = null ) {
		$yvd = shortcode_atts( array(
		'id' => '',
		'width' => '',
		'height' => '',
	), $atts );
	return '<iframe width="' . $yvd['width'] . '" height="' . $yvd['height'] . '" src="//www.youtube.com/embed/' . $yvd['id'] . '" frameborder="0" allowfullscreen></iframe>';
}
add_shortcode( 'youtube', 'youtube_shortcode' );

// 11. Vimeo
function vimeo_shortcode( $atts, $content = null ) {
		$vvd = shortcode_atts( array(
		'id' => '',
		'width' => '',
		'height' => '',
	), $atts );
	return '<iframe src="//player.vimeo.com/video/' . $vvd['id'] . '?color=white" width="' . $vvd['width'] . '" height="' . $vvd['height'] . '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
}
add_shortcode( 'vimeo', 'vimeo_shortcode' );

// 12. Brands Rotator
function brands_shortcode( $atts, $content = null ) {
	return '<div class="brands owl-carousel">
	' . do_shortcode($content) . '
	</div>
	<script type="text/javascript">
	(function($) { "use strict";
		$(window).bind("load", function() {
			$(".brands").owlCarousel({
				nav : false,scrollPerPage : true,mouseDrag: true,touchDrag: true,loop:true,dots :false,autoplay: true,
				autoplayTimeout: 4000,items:6,margin:0,responsiveClass:true,responsive : {1200 : {items : 6,},992 : {items: 5,},768 : {items:4,},0 : {items:1,}}
			})
		});
	})(jQuery);
	</script>';
}
add_shortcode( 'brands', 'brands_shortcode' );

// 13. Single Brand
function brand_shortcode( $atts ){
	$bra = shortcode_atts( array(
		'image' => '',
		'alt' => '',
	), $atts );
	
	if ( $bra['image'] == "" ) { 
		$logo = ''. plugins_url( 'assets/images/brand.gif', __FILE__ ) .''; 
	} 
	else {
		$logo =  wp_get_attachment_image_src( $bra['image'], 'large' ) ;
		$logo = $logo[0];
	}
	
	return '<div class="brand"><img class= "img-responsive" src="' . $logo . '" alt="' . $bra['alt'] . '" /></div>';
}
add_shortcode( 'brand', 'brand_shortcode' );


// 14. Icon Box
function iconbox_shortcode( $atts, $content = null ) {
	$icb = shortcode_atts( array(	
		'title' => '',
		'icon' => '',
		'icon_layout' => '',
		'icon_color' => '',
	), $atts );
	
	return 	'<div class=" ' . $icb['icon_color'] .' ' . $icb['icon_layout'] .'">
			<div class="icb-icon">
				<i class="hi-icon icon ' . $icb['icon'] .'"></i>
			</div>
			<div class="icb-details">
				<h5>' . $icb['title'] .'</h5>
				<div class="main-border ' . $icb['icon_color'] .'"></div>
				<p>' . do_shortcode($content) . '</p>
			</div>						
		</div>';
			
}
add_shortcode( 'iconbox', 'iconbox_shortcode' );

add_action( 'vc_before_init', 'iconbox' );
function iconbox() {
   vc_map( array(
      "name" => __("Icon Box"),
      "base" => "iconbox",
      "class" => "",
      "category" => __('Content'),
      'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
      'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
      "params" => array(
	  	 array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Icon"),
            "param_name" => "icon",
            "value"   => array(
				'' => '',
				'WorldWide'  => 'icon-WorldWide',
				'WorldGlobe'  => 'icon-WorldGlobe',
				'Underpants'  => 'icon-Underpants',
				'Tshirt'  => 'icon-Tshirt',
				'Trousers'  => 'icon-Trousers',
				'Tie'  => 'icon-Tie',
				'TennisBall'  => 'icon-TennisBall',
				'Telesocpe'  => 'icon-Telesocpe',
				'Stop'  => 'icon-Stop',
				'Starship'  => 'icon-Starship',
				'Starship2'  => 'icon-Starship2',
				'Speaker'  => 'icon-Speaker',
				'Speaker2'  => 'icon-Speaker2',
				'Soccer'  => 'icon-Soccer',
				'Snikers'  => 'icon-Snikers',
				'Scisors'  => 'icon-Scisors',
				'Puzzle'  => 'icon-Puzzle',
				'Printer'  => 'icon-Printer',
				'Pool'  => 'icon-Pool',
				'Podium'  => 'icon-Podium',
				'Play'  => 'icon-Play',
				'Planet'  => 'icon-Planet',
				'Pause'  => 'icon-Pause',
				'Next'  => 'icon-Next',
				'MusicNote2'  => 'icon-MusicNote2',
				'MusicNote'  => 'icon-MusicNote',
				'MusicMixer'  => 'icon-MusicMixer',
				'Microphone'  => 'icon-Microphone',
				'Medal'  => 'icon-Medal',
				'ManFigure'  => 'icon-ManFigure',
				'Magnet'  => 'icon-Magnet',
				'Like'  => 'icon-Like',
				'Hanger'  => 'icon-Hanger',
				'Handicap'  => 'icon-Handicap',
				'Forward'  => 'icon-Forward',
				'Footbal'  => 'icon-Footbal',
				'Flag'  => 'icon-Flag',
				'FemaleFigure'  => 'icon-FemaleFigure',
				'Dislike'  => 'icon-Dislike',
				'DiamondRing'  => 'icon-DiamondRing',
				'Cup'  => 'icon-Cup',
				'Crown'  => 'icon-Crown',
				'Column'  => 'icon-Column',
				'Click'  => 'icon-Click',
				'Cassette'  => 'icon-Cassette',
				'Bomb'  => 'icon-Bomb',
				'BatteryLow'  => 'icon-BatteryLow',
				'BatteryFull'  => 'icon-BatteryFull',
				'Bascketball'  => 'icon-Bascketball',
				'Astronaut'  => 'icon-Astronaut',
				'WineGlass'  => 'icon-WineGlass',
				'Water'  => 'icon-Water',
				'Wallet'  => 'icon-Wallet',
				'Umbrella'  => 'icon-Umbrella',
				'TV'  => 'icon-TV',
				'TeaMug'  => 'icon-TeaMug',
				'Tablet'  => 'icon-Tablet',
				'Soda'  => 'icon-Soda',
				'SodaCan'  => 'icon-SodaCan',
				'SimCard'  => 'icon-SimCard',
				'Signal'  => 'icon-Signal',
				'Shaker'  => 'icon-Shaker',
				'Radio'  => 'icon-Radio',
				'Pizza'  => 'icon-Pizza',
				'Phone'  => 'icon-Phone',
				'Notebook'  => 'icon-Notebook',
				'Mug'  => 'icon-Mug',
				'Mastercard'  => 'icon-Mastercard',
				'Ipod'  => 'icon-Ipod',
				'Info'  => 'icon-Info',
				'Icecream2'  => 'icon-Icecream2',
				'Icecream1'  => 'icon-Icecream1',
				'Hourglass'  => 'icon-Hourglass',
				'Help'  => 'icon-Help',
				'Goto'  => 'icon-Goto',
				'Glasses'  => 'icon-Glasses',
				'Gameboy'  => 'icon-Gameboy',
				'ForkandKnife'  => 'icon-ForkandKnife',
				'Export'  => 'icon-Export',
				'Exit'  => 'icon-Exit',
				'Espresso'  => 'icon-Espresso',
				'Drop'  => 'icon-Drop',
				'Download'  => 'icon-Download',
				'Dollars'  => 'icon-Dollars',
				'Dollar'  => 'icon-Dollar',
				'DesktopMonitor'  => 'icon-DesktopMonitor',
				'Corkscrew'  => 'icon-Corkscrew',
				'CoffeeToGo'  => 'icon-CoffeeToGo',
				'Chart'  => 'icon-Chart',
				'ChartUp'  => 'icon-ChartUp',
				'ChartDown'  => 'icon-ChartDown',
				'Calculator'  => 'icon-Calculator',
				'Bread'  => 'icon-Bread',
				'Bourbon'  => 'icon-Bourbon',
				'BottleofWIne'  => 'icon-BottleofWIne',
				'Bag'  => 'icon-Bag',
				'Arrow'  => 'icon-Arrow',
				'Antenna2'  => 'icon-Antenna2',
				'Antenna1'  => 'icon-Antenna1',
				'Anchor'  => 'icon-Anchor',
				'Wheelbarrow'  => 'icon-Wheelbarrow',
				'Webcam'  => 'icon-Webcam',
				'Unlinked'  => 'icon-Unlinked',
				'Truck'  => 'icon-Truck',
				'Timer'  => 'icon-Timer',
				'Time'  => 'icon-Time',
				'StorageBox'  => 'icon-StorageBox',
				'Star'  => 'icon-Star',
				'ShoppingCart'  => 'icon-ShoppingCart',
				'Shield'  => 'icon-Shield',
				'Seringe'  => 'icon-Seringe',
				'Pulse'  => 'icon-Pulse',
				'Plaster'  => 'icon-Plaster',
				'Plaine'  => 'icon-Plaine',
				'Pill'  => 'icon-Pill',
				'PicnicBasket'  => 'icon-PicnicBasket',
				'Phone2'  => 'icon-Phone2',
				'Pencil'  => 'icon-Pencil',
				'Pen'  => 'icon-Pen',
				'PaperClip'  => 'icon-PaperClip',
				'On-Off'  => 'icon-On-Off',
				'Mouse'  => 'icon-Mouse',
				'Megaphone'  => 'icon-Megaphone',
				'Linked'  => 'icon-Linked',
				'Keyboard'  => 'icon-Keyboard',
				'House'  => 'icon-House',
				'Heart'  => 'icon-Heart',
				'Headset'  => 'icon-Headset',
				'FullShoppingCart'  => 'icon-FullShoppingCart',
				'FullScreen'  => 'icon-FullScreen',
				'Folder'  => 'icon-Folder',
				'Floppy'  => 'icon-Floppy',
				'Files'  => 'icon-Files',
				'File'  => 'icon-File',
				'FileBox'  => 'icon-FileBox',
				'ExitFullScreen'  => 'icon-ExitFullScreen',
				'EmptyBox'  => 'icon-EmptyBox',
				'Delete'  => 'icon-Delete',
				'Controller'  => 'icon-Controller',
				'Compass'  => 'icon-Compass',
				'CompassTool'  => 'icon-CompassTool',
				'ClipboardText'  => 'icon-ClipboardText',
				'ClipboardChart'  => 'icon-ClipboardChart',
				'ChemicalGlass'  => 'icon-ChemicalGlass',
				'CD'  => 'icon-CD',
				'Carioca'  => 'icon-Carioca',
				'Car'  => 'icon-Car',
				'Book'  => 'icon-Book',
				'BigTruck'  => 'icon-BigTruck',
				'Bicycle'  => 'icon-Bicycle',
				'Wrench'  => 'icon-Wrench',
				'Web'  => 'icon-Web',
				'Watch'  => 'icon-Watch',
				'Volume'  => 'icon-Volume',
				'Video'  => 'icon-Video',
				'Users'  => 'icon-Users',
				'User'  => 'icon-User',
				'UploadCLoud'  => 'icon-UploadCLoud',
				'Typing'  => 'icon-Typing',
				'Tools'  => 'icon-Tools',
				'Tag'  => 'icon-Tag',
				'Speedometter'  => 'icon-Speedometter',
				'Share'  => 'icon-Share',
				'Settings'  => 'icon-Settings',
				'Search'  => 'icon-Search',
				'Screwdriver'  => 'icon-Screwdriver',
				'Rolodex'  => 'icon-Rolodex',
				'Ringer'  => 'icon-Ringer',
				'Resume'  => 'icon-Resume',
				'Restart'  => 'icon-Restart',
				'PowerOff'  => 'icon-PowerOff',
				'Pointer'  => 'icon-Pointer',
				'Picture'  => 'icon-Picture',
				'OpenedLock'  => 'icon-OpenedLock',
				'Notes'  => 'icon-Notes',
				'Mute'  => 'icon-Mute',
				'Movie'  => 'icon-Movie',
				'Microphone2'  => 'icon-Microphone2',
				'Message'  => 'icon-Message',
				'MessageRight'  => 'icon-MessageRight',
				'MessageLeft'  => 'icon-MessageLeft',
				'Menu'  => 'icon-Menu',
				'Media'  => 'icon-Media',
				'Mail'  => 'icon-Mail',
				'List'  => 'icon-List',
				'Layers'  => 'icon-Layers',
				'Key'  => 'icon-Key',
				'Imbox'  => 'icon-Imbox',
				'Eye'  => 'icon-Eye',
				'Edit'  => 'icon-Edit',
				'DSLRCamera'  => 'icon-DSLRCamera',
				'DownloadCloud'  => 'icon-DownloadCloud',
				'CompactCamera'  => 'icon-CompactCamera',
				'Cloud'  => 'icon-Cloud',
				'ClosedLock'  => 'icon-ClosedLock',
				'Chart2'  => 'icon-Chart2',
				'Bulb'  => 'icon-Bulb',
				'Briefcase'  => 'icon-Briefcase',
				'Blog'  => 'icon-Blog',
				'Agenda'  => 'icon-Agenda',
			),
            "description" => __("Select an icon."),
         ),
         array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Title"),
            "param_name" => "title",
            "value" => __("Awesome Icon Boxes!"),
            "description" => __("Service title.")
         ),
		 array(
            "type" => "textarea_html",
            "holder" => "",
            "class" => "",
            "heading" => __("Text"),
            "param_name" => "content",
            "value" => __("We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce."),
            "description" => __("Service text."),
         ),
		 array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Layout"),
            "param_name" => "icon_layout",
            "value"   => array(
				'' => '',
				'Style1 - Services default'   => 'service-item icon-effect-1 icon-effect-1a',
				'Style2 - Box transparent background'   => 'service-item-box',
				'Style3 - Box white background'   => 'service-item-box2',
				'Style4 - Contact info icon'   => 'contact-item',
				'Style6 - Left aligned features'   => 'features-left',
				'Style7 - Right aligned features'   => 'features-right',
			),

         ),
		 array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Color"),
            "param_name" => "icon_color",
            "value"   => array(
				'' => '',
				'Default'   => 'icon-default',
				'Purple'   => 'icon-violet',
				'Blue'   => 'icon-blue',
				'Orange'   => 'icon-orange',
				'Green'   => 'icon-green',
				'Yellow'   => 'icon-yellow',
				'Pink'   => 'icon-pink',
		
			),
			"description" => __("This setting works with styles 1,2 and 3. Styles 5 and 6 gets the primary color of theme."),
         ),
      )
   ) );
}

// 15. Promo Box
function promobox_shortcode( $atts, $content = null ) {
	$pbx = shortcode_atts( array(	
		'pbx_title' => '',
		'pbx_icon' => '',
		'pbx_color' => '',
		'pbx_btn_label' => '',
		'pbx_btn_link' => '',
	), $atts );
	
	return '<div class="promo-box" style="background:' . $pbx['pbx_color'] .';"><i class="' . $pbx['pbx_icon'] .'"></i><h3>' . $pbx['pbx_title'] .'</h3><p>' . do_shortcode($content) . '</p><a href="' . $pbx['pbx_btn_link'] .'" class="large btn-style9 btn-rounded">' . $pbx['pbx_btn_label'] .'</a></div>';
			
}
add_shortcode( 'promobox', 'promobox_shortcode' );

add_action( 'vc_before_init', 'promobox' );
function promobox() {
   vc_map( array(
      "name" => __("Promo Box"),
      "base" => "promobox",
      "class" => "",
      "category" => __('Content'),
      'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
      'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
      "params" => array(
	  	 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Background Icon"),
            "param_name" => "pbx_icon",
            "value" => __(""),
            "description" => __("Add an icon class here. For example icon icon-Bulb."),
         ),
         array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Title"),
            "param_name" => "pbx_title",
            "value" => __(""),
            "description" => __("Service title.")
         ),
		 array(
            "type" => "textarea",
            "holder" => "",
            "class" => "",
            "heading" => __("Text"),
            "param_name" => "content",
            "value" => __("We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Purchase Now"),
            "description" => __("Promo Text."),
         ),
		 array(
            "type" => "colorpicker",
            "holder" => "",
            "class" => "",
            "heading" => __("Background Color"),
            "param_name" => "pbx_color",
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Button Label"),
            "param_name" => "pbx_btn_label",
            "value" => __(""),
            "description" => __("Example : Read More")
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Button Link"),
            "param_name" => "pbx_btn_link",
            "value" => __("#"),
            "description" => __("Example : http://www.example.com")
         ),
      )
   ) );
}


// 16. Testimonials Rotator
function testimonials_shortcode( $atts, $content = null ) {
	$tec = shortcode_atts( array(
		'class' => ''
	), $atts );
	return '<div id="testimonials" class="' . $tec['class'] . ' owl-carousel">
	' . wpb_js_remove_wpautop( $content ) . '
	</div> 
	<script type="text/javascript">
	(function($) { "use strict";
		$(window).bind("load", function() {
			$("#testimonials").owlCarousel({
				nav : false,
				scrollPerPage : true,
				mouseDrag: true,
				touchDrag: true,
				loop:true,
				dots : true,
				autoplay: true,
				autoplayTimeout: 4000,
				items:3,
				margin:15,
				responsiveClass:true,
				responsive : {1200 : {items : 3,},992 : {items: 3,},768 : {items:2,},0 : {items:1,}}
			})
		});
	})(jQuery);
	</script>';

}
add_shortcode( 'testimonials', 'testimonials_shortcode' );

// 17. Single Testimonial
function testimonial_shortcode( $atts, $content = null ) {
		$tes = shortcode_atts( array(
		'image' => '',
		'alt' => '',
		'name' => '',
		'info' => ''
	), $atts );
	
	if ( $tes['image'] == "" ) { 
		$tlogo = ''. plugins_url( 'assets/images/brand.gif', __FILE__ ) .''; 
	} 
	else {
		$tlogo =  wp_get_attachment_image_src( $tes['image'], 'large' ) ;
		$tlogo = $tlogo[0];
	}
	
	return 
	'<div class="testimonial">
		<img class="testimonial-image" alt="author" src="'. $tlogo .'" />
		<div class="testimonial-item">
			<h5 class="testimonial-author">' . $tes['name'] . '</h5> 
			<span class="testimonial-info"> ' . $tes['info'] . '</span>
			<p class="testimonial-quote">' . do_shortcode($content) . '</p>
		</div>
	</div>';
}
add_shortcode( 'testimonial', 'testimonial_shortcode' );

// 18. Call to Action
function td_ctaction_shortcode( $atts, $content = null ) {
	$cta = shortcode_atts( array(
		'cta_suptitle' => '',
		'cta_title' => '',
		'cta_title_color' => '',
		'cta_btn_label' => '',
		'cta_btn_link' => '',
		'cta_align' => '',
		'cta_btn_size' => '',
		'cta_btn_type' => '',
		'cta_btn_target' => '',
		'cta_btn_style' => '',
		'cta_btn2_label' => '',
		'cta_btn2_link' => '',
		'cta_btn2_size' => '',
		'cta_btn2_type' => '',
		'cta_btn2_target' => '',
		'cta_btn2_style' => '',
		'cta_class' => '',
	), $atts );
	
	return '<div class="cta-' . $cta['cta_align'] . ' ' . $cta['cta_class'] . '">
		<div style="color:' . $cta['cta_title_color'] . ';font-size:15px;margin-botton:20px;" class="cta-sup">' . $cta['cta_suptitle'] . '</div>
		<div style="color:' . $cta['cta_title_color'] . ';font-size:54px;" class="cta-text">' . $cta['cta_title'] . '</div>
		<div class="cta-button">
			<a href="' . $cta['cta_btn_link'] . '" target="' . $cta['cta_btn_target'] . '" class="cta-button ' . $cta['cta_btn_size'] . ' ' . $cta['cta_btn_type'] . ' ' . $cta['cta_btn_style'] . '">' . $cta['cta_btn_label'] . '</a>
			<a href="' . $cta['cta_btn2_link'] . '" target="' . $cta['cta_btn2_target'] . '" class="cta-button2 ' . $cta['cta_btn2_size'] . ' ' . $cta['cta_btn2_type'] . ' ' . $cta['cta_btn2_style'] . '">' . $cta['cta_btn2_label'] . '</a>
		</div>
	</div>';
	
}
add_shortcode( 'td_ctaction', 'td_ctaction_shortcode' );

add_action( 'vc_before_init', 'td_ctaction' );
function td_ctaction() {
   vc_map( array(
      "name" => __("Axes Call to action"),
      "base" => "td_ctaction",
      "class" => "",
      "category" => __('Content'),
      'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
      'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
      "params" => array(
	  	 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Sup"),
            "param_name" => "cta_suptitle",
            "value" => __("WE’VE USED BEST UX PRACTICES")
         ),
         array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Title"),
            "param_name" => "cta_title",
            "value" => __("Are you Ready to Enjoy?"),
         ),
		 array(
            "type" => "colorpicker",
            "holder" => "",
            "class" => "",
            "heading" => __("Text Color"),
            "param_name" => "cta_title_color",
            "value" => __(""),
            "description" => __("Optional")
         ),
		 array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Align"),
            "param_name" => "cta_align",
            "value"   => array(
				'' => '',
				'Center' => 'center',
				'Center with 2 buttons' => 'center2',
				'Left'   => 'left',
				'Right'   => 'right',
			),
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Button Label"),
            "param_name" => "cta_btn_label",
            "value" => __(""),
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Button Link"),
            "param_name" => "cta_btn_link",
            "value" => __(""),
            "description" => __("Example : http://www.example.com")
         ),
		 array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Button Link Target"),
            "param_name" => "cta_btn_target",
            "value"   => array(
				'' => '',
				'_self'   => '_self',
				'_blank'   => '_blank',
				'new'   => 'new',
				'_parent'   => '_parent',
				'_top'   => '_top',
			),
            "description" => __("Link behavior")
         ),
		 array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Button Size"),
            "param_name" => "cta_btn_size",
            "value"   => array(
				'' => '',
				'Large' => 'large',
				'Medium'   => 'medium',
				'Small'   => 'small',
			),
            "description" => __("Select button size")
         ),
		 array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Button Type"),
            "param_name" => "cta_btn_type",
            "value"   => array(
				'' => '',
				'Rounded'   => 'btn-rounded',
				'Squared'   => '',
			),
         ),
		 array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Button Style"),
            "param_name" => "cta_btn_style",
            "value"   => array(
				'' => '',
				'White' => 'btn-white',
				'White - Style 2' => 'btn-white2',
				'Default theme color'   => 'btn-style1',
				'Style2'   => 'btn-style2',
				'Style3'   => 'btn-style3',
				'Style4'   => 'btn-style4',
				'Style5'   => 'btn-style5',
				'Style6'   => 'btn-style6',
				'Style7'   => 'btn-style7',
				'Style8'   => 'btn-style8',
			),
            "description" => __("Select button style")
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Button 2 Label"),
            "param_name" => "cta_btn2_label",
            "value" => __(""),
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Button 2 Link"),
            "param_name" => "cta_btn2_link",
            "value" => __(""),
            "description" => __("Example : http://www.example.com")
         ),
		 array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Button 2 Link Target"),
            "param_name" => "cta_btn2_target",
            "value"   => array(
				'' => '',
				'_self'   => '_self',
				'_blank'   => '_blank',
				'new'   => 'new',
				'_parent'   => '_parent',
				'_top'   => '_top',
			),
            "description" => __("Link behavior")
         ),
		 array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Button 2 Size"),
            "param_name" => "cta_btn2_size",
            "value"   => array(
				'' => '',
				'Large' => 'large',
				'Medium'   => 'medium',
				'Small'   => 'small',
			),
            "description" => __("Select button size")
         ),
		 array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Button 2 Type"),
            "param_name" => "cta_btn2_type",
            "value"   => array(
				'' => '',
				'Rounded'   => 'btn-rounded',
				'Squared'   => '',
			),
         ),
		 array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Button 2 Style"),
            "param_name" => "cta_btn2_style",
            "value"   => array(
				'' => '',
				'White - Style 2' => 'btn-white2',
				'White' => 'btn-white',
				'Default theme color'   => 'btn-style1',
				'Style2'   => 'btn-style2',
				'Style3'   => 'btn-style3',
				'Style4'   => 'btn-style4',
				'Style5'   => 'btn-style5',
				'Style6'   => 'btn-style6',
				'Style7'   => 'btn-style7',
				'Style8'   => 'btn-style8',
			),
            "description" => __("Select button style")
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Class"),
            "param_name" => "cta_class",
            "value" => __(""),
            "description" => __("Add an optional class.")
         ),
      )
   ) );
}

// 19. Owl Carousel
function slider_shortcode( $atts, $content = null ) {
	$osli = shortcode_atts( array(
		'class' => '',
	), $atts );
	
	return '<div id="owlslider" class="owl-carousel ' . $osli['class'] .'">' . do_shortcode($content) . '</div> ';
	
}
add_shortcode( 'slider', 'slider_shortcode' );

// 20. Owl Slide
function slide_shortcode( $atts, $content = null ){
	$bsli = shortcode_atts( array(
		'image' => '',
		'alt' => '',
	), $atts );
	
	if ( $bsli['image'] == "" ) { 
		$logo1 = ''. plugins_url( 'assets/images/post.gif', __FILE__ ) .''; 
	} 
	else {
		$logo1 =  wp_get_attachment_image_src( $bsli['image'], 'large' ) ;
		$logo1 = $logo1[0];
	}
	
	return '<div class="slide"><img class= "img-responsive" src="' . $logo1 . '" alt="' . $bsli['alt'] . '" /></div>';
}
add_shortcode( 'slide', 'slide_shortcode' );

// 21. Portfolio share
function share_shortcode( $atts, $content = null ){
	$psh = shortcode_atts( array(
		'title' => '',
		'class' => '',
	), $atts );
	
	return '<div class="portfolio-share '. $psh['class'] .'"><h6>'. $psh['title'] .'</h6><a href="http://twitter.com/home?status='. get_the_title() .'+'. get_the_permalink() .'"><span class="fa fa-twitter"></span></a><a href="http://www.facebook.com/share.php?u='. get_the_permalink() .' /&title='. get_the_title() .'"<span class="fa fa-facebook"></span></a><a href="https://plus.google.com/share?url='. get_the_permalink() .'"><span class="fa fa-google-plus"></span></a></div>';
}
add_shortcode( 'share', 'share_shortcode' );

add_action( 'vc_before_init', 'share' );
function share() {
   vc_map( array(
      "name" => __("Portfolio share"),
      "base" => "share",
      "class" => "",
      "category" => __('Content'),
      'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
      'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
	  "params" => array(
         array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Label"),
            "param_name" => "title",
            "value" => __("Share "),
            "description" => __("Example : Details")
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Optional Class"),
            "param_name" => "class",
            "value" => __(""),
            "description" => __("Optional class for css styling.")
         )
		)
   ) );
}

/* 22. Blog */

function blog_shortcode( $atts ) {
	
global $wp_query;
	
	$args = array(
	'post_type' => 'post',
	'posts_per_page' => 3,
	'post_status' => 'publish',
	'orderby' => 'date',
	'order' => 'DESC',
	
);

echo '<ul class="blog-container">';	

$wp_query = new WP_Query($args);
	
    if ( $wp_query->have_posts() ) {
     
	    while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
		 
		echo '<li class="blog-item">';
		echo '<a class="post-link" href="' . get_the_permalink() . '">';
		echo ''. the_title( '<h3>', '</h3>' ) .'';
		echo '</a>';
		echo '<span class="blog-date">';
        echo ''. the_time('j F, Y') .'';
		echo '</span>';
		echo '</li>'; 
    
	endwhile; }
	
	wp_reset_query();
	
echo '</ul>';
	
    return false;
	
}
add_shortcode( 'blog', 'blog_shortcode' ); 

add_action( 'vc_before_init', 'blog' );
function blog() {
   vc_map( array(
      "name" => __("Blog"),
      "base" => "blog",
      "class" => "",
      "category" => __('Content'),
      'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
      'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
	  "params" => array(
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Optional Class"),
            "param_name" => "class",
            "value" => __(""),
            "description" => __("Optional class for css styling.")
         )
		)
   ) );
}

/* 23. Blog One Page */

function blog2_shortcode( $atts ) {
	
global $wp_query;
	
	$args = array(
	'post_type' => 'post',
	'posts_per_page' => 3,
	'post_status' => 'publish',
	'orderby' => 'date',
	'order' => 'DESC',
	
);

$wp_query = new WP_Query($args);
	
    if ( $wp_query->have_posts() ) {
     
	    while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
		
		echo '<div class="col-md-4">';	 
		echo '<div class="blog2-image">';
		echo ''. the_post_thumbnail() .'';
		echo '</div>';
		echo '<div class="blog2-item">';
		echo '<a class="post-link" href="' . get_the_permalink() . '">';
		echo '<h6 class="blog2-title">';
        echo ''. the_title() .'';
		echo '</h6>';
		echo '</a>';
		echo '<span class="blog2-date">';
        echo ''. the_time('j F, Y') .'';
		echo '</span>';
		echo '<span class="blog2-comment">';
        echo '' . comments_number( 'no responses', 'one response', '% responses' ) . '';
		echo '</span>';
		echo '<span class="title-line"></span>';
		echo '<div class="blog2-text">';
		echo ''. substr(get_the_excerpt(), 0,80) .'';
		echo '</div>';
		echo '<a href="' . get_the_permalink() . '" class="btn-style3 small btn-rounded">Read More</a>';
		echo '</div>'; 
		echo '</div>';
    
	endwhile; }
	
	wp_reset_query();
	
    return false;
	
}
add_shortcode( 'blog2', 'blog2_shortcode' ); 

add_action( 'vc_before_init', 'blog2' );
function blog2() {
   vc_map( array(
      "name" => __("Front Page Blog"),
      "base" => "blog2",
      "class" => "",
      "category" => __('Content'),
      'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
      'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
	  "params" => array(
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Optional Class"),
            "param_name" => "class",
            "value" => __(""),
            "description" => __("Optional class for css styling.")
         )
		)
   ) );
}

/* 23. Portfolio Carousel */

function td_portfolio_carousel_shortcode( $atts, $content = null ) {
	
global $wp_query;
	
	$args = array(
	'post_type' => 'portfolio',
	'posts_per_page' => 30,
	'post_status' => 'publish',
	'orderby' => 'date',
	'order' => 'DESC',
	
);

echo '<div id="portfolio-carousel" class="owl-carousel">';

$wp_query = new WP_Query($args);
	
    if ( $wp_query->have_posts() ) {
     
	    while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
		
		global $post;
		
		// Get categories from custom post type
		$terms = get_the_terms($post->ID, 'portfolio-categories' );
		if ($terms && ! is_wp_error($terms)) :
			$term_slugs_arr = array();
			foreach ($terms as $term) {
				$term_slugs_arr[] = $term->slug;
			}
			$terms_slug_str = join( " ", $term_slugs_arr);
		endif;
		
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
	
		echo '<div class="portfolio-item">';
		echo ''. the_post_thumbnail() .'';
		echo '<div class="portfolio-overlay">';
		echo '<div class="project-icons">';
		echo '<a href="'. $thumb[0] .'" data-lightbox="true"><i class="fa fa-search"></i></a>';
		echo '<a href="'. get_the_permalink() .'"><i class="fa fa-link"></i></a>';
		echo '</div>';
		echo '<div class="featured-item-description">';
        echo ''. the_title( '<h3>', '</h3>' ) .'';
		echo '<span>'. $terms_slug_str .'</span>';
		echo '</div>';
		echo '</div>'; 
		echo '</div>';
    
	endwhile; }
	
	wp_reset_query();
	
    
	
echo '</div>';
echo'<script type="text/javascript">(function($) { "use strict";$(window).bind("load", function() {$("#portfolio-carousel").owlCarousel({nav:true,navText:["&#xf0d9;","&#xf0da;"] ,scrollPerPage:true,mouseDrag:true,touchDrag:true,loop:false,dots:false,autoplay: false,items:5,margin:0,responsive : {1200 : {items : 5,},992 : {items: 4,},768 : {items:3,},0 : {items:1,}}})});})(jQuery);</script>';

return false;
	
}
add_shortcode( 'td_portfolio_carousel', 'td_portfolio_carousel_shortcode' ); 

add_action( 'vc_before_init', 'td_portfolio_carousel' );
function td_portfolio_carousel() {
   vc_map( array(
      "name" => __("Portfolio Carousel"),
      "base" => "td_portfolio_carousel",
      "class" => "",
      "category" => __('Content'),
      'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
      'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
	  "params" => array(
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Optional Class"),
            "param_name" => "class",
            "value" => __(""),
            "description" => __("Optional class for css styling.")
         )
		)
   ) );
}

// 24. CountTo

function counter_shortcode( $atts, $content = null ) {
		$cou = shortcode_atts( array(
		'speed' => '1500',
		'start' => '1',
		'end' => '',
		'label' => '',
		'counter_font' => '',
	), $atts );
	return '<div class="countto"><span class="timer ' . $cou['counter_font'] . '" data-from="' . $cou['start'] . '" data-to="' . $cou['end'] . '" data-speed="' . $cou['speed'] . '"></span><h4 class="counter-title">' . $cou['label'] . '</h4></div>';
}
add_shortcode( 'counter', 'counter_shortcode' );

add_action( 'vc_before_init', 'counter' );
function counter() {
   vc_map( array(
      "name" => __("Counter"),
      "base" => "counter",
      "class" => "",
      "category" => __('Content'),
      'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
      'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
      "params" => array(
         array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Counting Speed"),
            "param_name" => "speed",
            "value" => __("1500"),
            "description" => __("Example : 1500 (Time in ms)")
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Start from"),
            "param_name" => "start",
            "value" => __("1"),
            "description" => __("Start counting at number")
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Stop at"),
            "param_name" => "end",
            "value" => __("210"),
            "description" => __("Stop counting at number")
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Counter Label"),
            "param_name" => "label",
            "value" => __(""),
            "description" => __("Title")
         ),
		 array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Counter font color"),
            "param_name" => "counter_font",
            "value"   => array(
				'White' => 'ctn-white',
				'Theme color'   => 'ctn-style1',
			),
            "description" => __("Select button style")
         ),
      )
   ) );
}


// 25. Dropcaps

function tddropcaps_shortcode( $atts, $content = null ) {
	return '<p class="dropcaps">' . do_shortcode($content) . '</p>';
}
add_shortcode( 'dropcaps', 'tddropcaps_shortcode' );

function tddropcaps2_shortcode( $atts, $content = null ) {
	return '<p class="dropcaps2">' . do_shortcode($content) . '</p>';
}
add_shortcode( 'dropcaps2', 'tddropcaps2_shortcode' );

// 26. Process

function tdprocess_shortcode( $atts, $content = null ) {
	$pcb = shortcode_atts( array(	
		'title' => '',
		'icon' => '',
	), $atts );
	
	return 
			
		'<div class="process-item icon-effect-8 icon-blue">
			<a href="#">
				<i class="hi-icon icon ' . $pcb['icon'] .'"></i>
			</a>
			<h5 class="heading-white">' . $pcb['title'] .'</h5>						
		</div>';
			
}
add_shortcode( 'tdprocess', 'tdprocess_shortcode' );

add_action( 'vc_before_init', 'tdprocess' );
function tdprocess() {
   vc_map( array(
      "name" => __("Process"),
      "base" => "tdprocess",
      "class" => "",
      "category" => __('Content'),
      'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
      'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
      "params" => array(
	  	 array(
            "type" => "dropdown",
            "holder" => "",
            "class" => "",
            "heading" => __("Icon"),
            "param_name" => "icon",
            "value"   => array(
				'WorldWide'  => 'icon-WorldWide',
				'WorldGlobe'  => 'icon-WorldGlobe',
				'Underpants'  => 'icon-Underpants',
				'Tshirt'  => 'icon-Tshirt',
				'Trousers'  => 'icon-Trousers',
				'Tie'  => 'icon-Tie',
				'TennisBall'  => 'icon-TennisBall',
				'Telesocpe'  => 'icon-Telesocpe',
				'Stop'  => 'icon-Stop',
				'Starship'  => 'icon-Starship',
				'Starship2'  => 'icon-Starship2',
				'Speaker'  => 'icon-Speaker',
				'Speaker2'  => 'icon-Speaker2',
				'Soccer'  => 'icon-Soccer',
				'Snikers'  => 'icon-Snikers',
				'Scisors'  => 'icon-Scisors',
				'Puzzle'  => 'icon-Puzzle',
				'Printer'  => 'icon-Printer',
				'Pool'  => 'icon-Pool',
				'Podium'  => 'icon-Podium',
				'Play'  => 'icon-Play',
				'Planet'  => 'icon-Planet',
				'Pause'  => 'icon-Pause',
				'Next'  => 'icon-Next',
				'MusicNote2'  => 'icon-MusicNote2',
				'MusicNote'  => 'icon-MusicNote',
				'MusicMixer'  => 'icon-MusicMixer',
				'Microphone'  => 'icon-Microphone',
				'Medal'  => 'icon-Medal',
				'ManFigure'  => 'icon-ManFigure',
				'Magnet'  => 'icon-Magnet',
				'Like'  => 'icon-Like',
				'Hanger'  => 'icon-Hanger',
				'Handicap'  => 'icon-Handicap',
				'Forward'  => 'icon-Forward',
				'Footbal'  => 'icon-Footbal',
				'Flag'  => 'icon-Flag',
				'FemaleFigure'  => 'icon-FemaleFigure',
				'Dislike'  => 'icon-Dislike',
				'DiamondRing'  => 'icon-DiamondRing',
				'Cup'  => 'icon-Cup',
				'Crown'  => 'icon-Crown',
				'Column'  => 'icon-Column',
				'Click'  => 'icon-Click',
				'Cassette'  => 'icon-Cassette',
				'Bomb'  => 'icon-Bomb',
				'BatteryLow'  => 'icon-BatteryLow',
				'BatteryFull'  => 'icon-BatteryFull',
				'Bascketball'  => 'icon-Bascketball',
				'Astronaut'  => 'icon-Astronaut',
				'WineGlass'  => 'icon-WineGlass',
				'Water'  => 'icon-Water',
				'Wallet'  => 'icon-Wallet',
				'Umbrella'  => 'icon-Umbrella',
				'TV'  => 'icon-TV',
				'TeaMug'  => 'icon-TeaMug',
				'Tablet'  => 'icon-Tablet',
				'Soda'  => 'icon-Soda',
				'SodaCan'  => 'icon-SodaCan',
				'SimCard'  => 'icon-SimCard',
				'Signal'  => 'icon-Signal',
				'Shaker'  => 'icon-Shaker',
				'Radio'  => 'icon-Radio',
				'Pizza'  => 'icon-Pizza',
				'Phone'  => 'icon-Phone',
				'Notebook'  => 'icon-Notebook',
				'Mug'  => 'icon-Mug',
				'Mastercard'  => 'icon-Mastercard',
				'Ipod'  => 'icon-Ipod',
				'Info'  => 'icon-Info',
				'Icecream2'  => 'icon-Icecream2',
				'Icecream1'  => 'icon-Icecream1',
				'Hourglass'  => 'icon-Hourglass',
				'Help'  => 'icon-Help',
				'Goto'  => 'icon-Goto',
				'Glasses'  => 'icon-Glasses',
				'Gameboy'  => 'icon-Gameboy',
				'ForkandKnife'  => 'icon-ForkandKnife',
				'Export'  => 'icon-Export',
				'Exit'  => 'icon-Exit',
				'Espresso'  => 'icon-Espresso',
				'Drop'  => 'icon-Drop',
				'Download'  => 'icon-Download',
				'Dollars'  => 'icon-Dollars',
				'Dollar'  => 'icon-Dollar',
				'DesktopMonitor'  => 'icon-DesktopMonitor',
				'Corkscrew'  => 'icon-Corkscrew',
				'CoffeeToGo'  => 'icon-CoffeeToGo',
				'Chart'  => 'icon-Chart',
				'ChartUp'  => 'icon-ChartUp',
				'ChartDown'  => 'icon-ChartDown',
				'Calculator'  => 'icon-Calculator',
				'Bread'  => 'icon-Bread',
				'Bourbon'  => 'icon-Bourbon',
				'BottleofWIne'  => 'icon-BottleofWIne',
				'Bag'  => 'icon-Bag',
				'Arrow'  => 'icon-Arrow',
				'Antenna2'  => 'icon-Antenna2',
				'Antenna1'  => 'icon-Antenna1',
				'Anchor'  => 'icon-Anchor',
				'Wheelbarrow'  => 'icon-Wheelbarrow',
				'Webcam'  => 'icon-Webcam',
				'Unlinked'  => 'icon-Unlinked',
				'Truck'  => 'icon-Truck',
				'Timer'  => 'icon-Timer',
				'Time'  => 'icon-Time',
				'StorageBox'  => 'icon-StorageBox',
				'Star'  => 'icon-Star',
				'ShoppingCart'  => 'icon-ShoppingCart',
				'Shield'  => 'icon-Shield',
				'Seringe'  => 'icon-Seringe',
				'Pulse'  => 'icon-Pulse',
				'Plaster'  => 'icon-Plaster',
				'Plaine'  => 'icon-Plaine',
				'Pill'  => 'icon-Pill',
				'PicnicBasket'  => 'icon-PicnicBasket',
				'Phone2'  => 'icon-Phone2',
				'Pencil'  => 'icon-Pencil',
				'Pen'  => 'icon-Pen',
				'PaperClip'  => 'icon-PaperClip',
				'On-Off'  => 'icon-On-Off',
				'Mouse'  => 'icon-Mouse',
				'Megaphone'  => 'icon-Megaphone',
				'Linked'  => 'icon-Linked',
				'Keyboard'  => 'icon-Keyboard',
				'House'  => 'icon-House',
				'Heart'  => 'icon-Heart',
				'Headset'  => 'icon-Headset',
				'FullShoppingCart'  => 'icon-FullShoppingCart',
				'FullScreen'  => 'icon-FullScreen',
				'Folder'  => 'icon-Folder',
				'Floppy'  => 'icon-Floppy',
				'Files'  => 'icon-Files',
				'File'  => 'icon-File',
				'FileBox'  => 'icon-FileBox',
				'ExitFullScreen'  => 'icon-ExitFullScreen',
				'EmptyBox'  => 'icon-EmptyBox',
				'Delete'  => 'icon-Delete',
				'Controller'  => 'icon-Controller',
				'Compass'  => 'icon-Compass',
				'CompassTool'  => 'icon-CompassTool',
				'ClipboardText'  => 'icon-ClipboardText',
				'ClipboardChart'  => 'icon-ClipboardChart',
				'ChemicalGlass'  => 'icon-ChemicalGlass',
				'CD'  => 'icon-CD',
				'Carioca'  => 'icon-Carioca',
				'Car'  => 'icon-Car',
				'Book'  => 'icon-Book',
				'BigTruck'  => 'icon-BigTruck',
				'Bicycle'  => 'icon-Bicycle',
				'Wrench'  => 'icon-Wrench',
				'Web'  => 'icon-Web',
				'Watch'  => 'icon-Watch',
				'Volume'  => 'icon-Volume',
				'Video'  => 'icon-Video',
				'Users'  => 'icon-Users',
				'User'  => 'icon-User',
				'UploadCLoud'  => 'icon-UploadCLoud',
				'Typing'  => 'icon-Typing',
				'Tools'  => 'icon-Tools',
				'Tag'  => 'icon-Tag',
				'Speedometter'  => 'icon-Speedometter',
				'Share'  => 'icon-Share',
				'Settings'  => 'icon-Settings',
				'Search'  => 'icon-Search',
				'Screwdriver'  => 'icon-Screwdriver',
				'Rolodex'  => 'icon-Rolodex',
				'Ringer'  => 'icon-Ringer',
				'Resume'  => 'icon-Resume',
				'Restart'  => 'icon-Restart',
				'PowerOff'  => 'icon-PowerOff',
				'Pointer'  => 'icon-Pointer',
				'Picture'  => 'icon-Picture',
				'OpenedLock'  => 'icon-OpenedLock',
				'Notes'  => 'icon-Notes',
				'Mute'  => 'icon-Mute',
				'Movie'  => 'icon-Movie',
				'Microphone2'  => 'icon-Microphone2',
				'Message'  => 'icon-Message',
				'MessageRight'  => 'icon-MessageRight',
				'MessageLeft'  => 'icon-MessageLeft',
				'Menu'  => 'icon-Menu',
				'Media'  => 'icon-Media',
				'Mail'  => 'icon-Mail',
				'List'  => 'icon-List',
				'Layers'  => 'icon-Layers',
				'Key'  => 'icon-Key',
				'Imbox'  => 'icon-Imbox',
				'Eye'  => 'icon-Eye',
				'Edit'  => 'icon-Edit',
				'DSLRCamera'  => 'icon-DSLRCamera',
				'DownloadCloud'  => 'icon-DownloadCloud',
				'CompactCamera'  => 'icon-CompactCamera',
				'Cloud'  => 'icon-Cloud',
				'ClosedLock'  => 'icon-ClosedLock',
				'Chart2'  => 'icon-Chart2',
				'Bulb'  => 'icon-Bulb',
				'Briefcase'  => 'icon-Briefcase',
				'Blog'  => 'icon-Blog',
				'Agenda'  => 'icon-Agenda',
			)
         ),
         array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Title"),
            "param_name" => "title",
            "value" => __("1. Brief")
         ),
		 
      )
   ) );
}


/* Portfolio Taxonomy */

add_action('init', 'prowp_register_my_post_types' );
add_action('init', 'prowp_register_my_post_taxonomies' );

function prowp_register_my_post_types() 
{
  $labels = array(
    'name' => _x("Portfolio", 'shema'),
    'singular_name' => _x("Portfolio", 'shema'),
    'add_new' => _x("Add New", 'shema'),
    'add_new_item' => __("Add New Portfolio Item",'shema'),
    'edit_item' => __("Edit Item",'shema'),
    'new_item' => __("New Item",'shema'),
    'view_item' => __("View Item",'shema'),
    'search_items' => __("Search Items",'shema'),
    'not_found' =>  __("No items found",'shema'),
    'not_found_in_trash' => __("No items found in Trash",'shema'), 
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_ui' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','thumbnail'),
	'exclude_from_search' => true,
  ); 
  register_post_type('portfolio',$args);
}

function prowp_register_my_post_taxonomies() 
{
register_taxonomy( "portfolio-categories", 
	array( 	"portfolio" ), 
	array( 	"hierarchical" => true,
			"labels" => array('name'=>"Categories",'add_new_item'=>"Add New Field"), 
			"singular_label" => __( "Field", 'shema' ), 
			"rewrite" => array( 'slug' => 'fields', 'with_front' => false)
		 ) 
);
} 



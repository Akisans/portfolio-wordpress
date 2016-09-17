<?php
/**
 * Visual Composer Adjustments for Axes
 *
 * @package WordPress
 * @subpackage Axes
 * @since Axes 1.0
 */


/*-----------------------------------------------------------------------------------*/
/*	1. Predefined Layout - MultiPage Home
/*-----------------------------------------------------------------------------------*/

add_filter( 'vc_load_default_templates', 'axes_multipage_home' ); 
 
function axes_multipage_home( $data ) {
    $template               = array();
    $template['name']       = __( 'Home / Multipage Version', 'axes' ); 
    $template['image_path'] = (get_template_directory_uri().'/inc/vc/portfolio_layout.jpg' );
    $template['custom_class'] = ''; 
    $template['content']    = <<<CONTENT
      [vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1"][vc_column width="1/1"][rev_slider_vc alias="default"][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_section_id="services" td_color="#ffffff" td_padding="120px 0"][vc_column width="1/3"][iconbox icon="icon-Pen" title="Creative Design" icon_layout="service-item icon-effect-1 icon-effect-1a" icon_color="icon-default"]We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce.[/iconbox][/vc_column][vc_column width="1/3"][iconbox icon="icon-FullScreen" title="Fully Responsive" icon_layout="service-item icon-effect-1 icon-effect-1a" icon_color="icon-violet"]We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind.[/iconbox][/vc_column][vc_column width="1/3"][iconbox icon="icon-Settings" title="Easy to Customize" icon_layout="service-item icon-effect-1 icon-effect-1a" icon_color="icon-orange"]We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind.[/iconbox][/vc_column][/vc_row][vc_row td_section_title_color="#ffffff" td_section_title_style="style1" td_background="color" td_width="2" td_section_id="featured-works" td_color="#1b1c1f" td_padding="80px 0 0 0" td_section_title="Featured Works"][vc_column width="1/1"][td_portfolio_carousel class=""][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_color="#1dcfd1" td_padding="110px 0"][vc_column width="1/1"][td_ctaction cta_suptitle="WE VE USED BEST UX PRACTICES" cta_title="Are you Ready to Enjoy?" cta_title_color="#ffffff" cta_align="center2" cta_btn_label="Learn More" cta_btn_link="" cta_btn_target="_self" cta_btn_size="large" cta_btn_type="btn-rounded" cta_btn_style="btn-white" cta_btn2_label="Buy Now" cta_btn2_link="" cta_btn2_target="_self" cta_btn2_size="large" cta_btn2_type="btn-rounded" cta_btn2_style="btn-white2" cta_class=""][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_color="#ffffff" td_padding="120px 0" td_section_id="core-features" td_section_title="Core Features" td_section_description="The Best Features in One Theme"][vc_column width="1/4"][vc_empty_space height="150px"][iconbox icon="icon-Search" title="SEO Optimized" icon_layout="features-right" icon_color="icon-default"]We possess within us two minds. So far I have written only of the conscious mind.[/iconbox][vc_empty_space height="10px"][iconbox icon="icon-Layers" title="Parallax Sections" icon_layout="features-right" icon_color="icon-green"]We possess within us two minds. So far I have written only of the conscious mind.[/iconbox][vc_empty_space height="10px"][iconbox icon="icon-Drop" title="Unlimited Colors" icon_layout="features-right" icon_color="icon-default"]We possess within us two minds. So far I have written only of the conscious mind.[/iconbox][vc_empty_space height="10px"][/vc_column][vc_column width="2/4"][vc_single_image border_color="grey" img_link_large="" img_link_target="_self" css_animation="left-to-right" img_size="534x687"][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][vc_empty_space height="150px"][iconbox icon="icon-Tools" title="Drag & Drop Builder" icon_layout="features-left" icon_color="icon-default"]We possess within us two minds. So far I have written only of the conscious mind.[/iconbox][vc_empty_space height="10px"][iconbox icon="icon-Timer" title="Responsive Design" icon_layout="features-left" icon_color="icon-default"]We possess within us two minds. So far I have written only of the conscious mind.[/iconbox][vc_empty_space height="10px"][iconbox icon="icon-Notes" title="Easy Installation" icon_layout="features-left" icon_color="icon-default"]We possess within us two minds. So far I have written only of the conscious mind.[/iconbox][vc_empty_space height="10px"][/vc_column][/vc_row][vc_row td_section_title_color="#ffffff" td_section_title_style="style1" td_background="parallax" td_width="1" td_section_id="facts" td_color="#7248f5" td_padding="100px 0 80px 0"][vc_column width="1/4"][counter speed="3000" start="1" end="743" label="Happy Clients" counter_font="ctn-white" background="#fafafa"][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][counter speed="3000" start="1" end="1024" label="Projects Completed" counter_font="ctn-white" background="#fafafa"][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][counter speed="3000" start="1" end="12340" label="Lines of Code" counter_font="ctn-white" background="#fafafa"][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][counter speed="3000" start="1" end="999" label="Pizzas Eaten" counter_font="ctn-white" background="#fafafa"][vc_empty_space height="20px"][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_color="#ecf0f1" td_padding="120px 0" td_section_id="creative-team" td_section_title="Awesome Team" td_section_description="Creative Nerds"][vc_column width="1/1"][team][team_member name="John Doe" job="CEO at shema" mb_fb_link="#" mb_twitter_link="#" mb_google_plus_link="#" mb_behance_link="#"][team_member name="John Doe" job="CEO at shema" mb_fb_link="#" mb_twitter_link="#" mb_instagram_link="#" mb_youtube_link="#"][team_member name="John Doe" job="CEO at shema" mb_twitter_link="#" mb_flickr_link="#" mb_vimeo_link="#" mb_pinterest_link="#"][team_member name="John Doe" job="CEO at shema" mb_fb_link="#" mb_google_plus_link="#" mb_pinterest_link="#" mb_reddit_link="#"][/team][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_color="#1b1c1f" td_padding="120px 0"][vc_column width="5/12"][vc_column_text css_animation=""]

Few Words About Us

We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious.



So far I have written only of the conscious mind. I would now like to introduce you to your second mind. We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind. Axes Theme is very unique and clean theme.[/vc_column_text][/vc_column][vc_column width="7/12" el_class="text-white"][vc_empty_space height="65px"][vc_progress_bar values="85|Awesomeness" bgcolor="custom" options="" units="%" custombgcolor="#f05135"][vc_progress_bar values="65|Flexibility" bgcolor="custom" options="" custombgcolor="#ffc63e" units="%"][vc_progress_bar values="93|SEO" bgcolor="custom" options="" custombgcolor="#7248f5" units="%"][vc_progress_bar values="90|Marketing" bgcolor="custom" options="" custombgcolor="#1dcfd1" units="%"][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_color="#ffffff" td_padding="120px 0" td_section_id="from-blog" td_section_title="From Blog" td_section_description="Latest News"][vc_column width="1/1"][blog class=""][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="2" td_color="#ffffff" td_padding="0" td_section_id="promo-boxes"][vc_column width="1/3"][promobox pbx_icon="icon icon-Bulb" pbx_title="Creative Ideas" pbx_btn_label="Purchase Now" pbx_btn_link="#" pbx_btn_style="btn-style3" pbx_color="#a747f5"]We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Purchase Now[/promobox][/vc_column][vc_column width="1/3"][promobox pbx_icon="icon icon-Bulb" pbx_title="Creative Ideas" pbx_btn_label="Purchase Now" pbx_btn_link="#" pbx_btn_style="btn-style1" pbx_color="#9148f5"]We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Purchase Now[/promobox][/vc_column][vc_column width="1/3"][promobox pbx_icon="icon icon-Bulb" pbx_title="Creative Ideas" pbx_btn_label="Purchase Now" pbx_btn_link="#" pbx_btn_style="btn-style1" pbx_color="#7248f5"]We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Purchase Now[/promobox][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="parallax" td_width="1" td_section_id="clients" td_section_title="Happy Clients" td_padding="120px 0"][vc_column width="1/1"][testimonials class="style1"][testimonial name="John Doe" info="CEO at Company Ltd."]thank for such a great template. The quality is awesome. so many features and you can create any website with this perfect solution[/testimonial][testimonial name="John Doe" info="CEO at Company Ltd."]thank for such a great template. The quality is awesome. so many features and you can create any website with this perfect solution[/testimonial][testimonial name="John Doe" info="CEO at Company Ltd."]thank for such a great template. The quality is awesome. so many features and you can create any website with this perfect solution[/testimonial][testimonial name="John Doe" info="CEO at Company Ltd."]thank for such a great template. The quality is awesome. so many features and you can create any website with this perfect solution[/testimonial][/testimonials][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_color="#1b1c1f" td_padding="60px 0"][vc_column width="1/1"][brands][brand][brand][brand][brand][brand][brand][/brands][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_color="#ffffff" td_padding="120px 0" td_section_id="contact-us" td_section_title="Contact" td_section_description="Get In Touch"][vc_column width="7/12"][contact-form-7 id="435"][/vc_column][vc_column width="1/12"][/vc_column][vc_column width="4/12"][vc_column_text css_animation=""]

Don not hesitate to stay in touch

Our working hours is 8:00 pm to 20:00 pm
Call us, email or send us a message[/vc_column_text][vc_empty_space height="15px"][iconbox icon="icon-Phone" title="+1 888 5146 3269" icon_layout="contact-item" icon_color="icon-default"][/iconbox][vc_empty_space height="15px"][iconbox icon="icon-WorldWide" title="hello@axescompany" icon_layout="contact-item" icon_color="icon-default"][/iconbox][vc_empty_space height="15px"][iconbox icon="icon-Like" title="Axes Theme inc. Philippines Greenwich st. 256/6 62058" icon_layout="contact-item" icon_color="icon-default"][/iconbox][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}

/*-----------------------------------------------------------------------------------*/
/*	2. Predefined Layout - OnePage Home
/*-----------------------------------------------------------------------------------*/

add_filter( 'vc_load_default_templates', 'axes_onepage_home' ); 
 
function axes_onepage_home( $data ) {
    $template               = array();
    $template['name']       = __( 'Home / One Page Version', 'axes' ); 
    $template['image_path'] = (get_template_directory_uri().'/inc/vc/portfolio_layout.jpg' );
    $template['custom_class'] = ''; 
    $template['content']    = <<<CONTENT
[vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1"][vc_column width="1/1"][rev_slider_vc alias="OnePage"][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_color="#ffffff" td_padding="120px 0" td_section_id="intro"][vc_column width="5/12"][vc_column_text]

Hello
We Are Axes Agency

Those who find beautiful meanings in beautiful things are the cultivated. We are just create awesome.

[/vc_column_text][/vc_column][vc_column width="7/12"][vc_empty_space height="10px"][vc_column_text css_animation=""]Axes is a simple and elegant template with tons of features. Lorem ipsum dolor sit amet, consectetur. We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind.

It is a great choice for any website. Fully responsive and retina ready. Simple interface and awesome user experience.

Axes is a simple and elegant template with tons of features. Lorem ipsum dolor sit amet, consectetur. We possess within us two minds.[/vc_column_text][/vc_column][/vc_row][vc_row td_section_title_color="#ffffff" td_section_title_style="style1" td_background="color" td_width="1" td_section_id="featured" td_section_title="Featured Works" td_color="#1b1c1f" td_padding="120px 0"][vc_column width="1/1"][slider][slide][slide][slide][/slider][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_section_id="our-services" td_padding="120px 0 100px 0" td_section_title="Our Services" td_section_description="The Best Features in One Theme"][vc_column width="1/4"][iconbox icon="icon-ShoppingCart" title="Ecommerce Ready" icon_layout="service-item-box2" icon_color="icon-violet"]We possess within us two minds. So far I have written only of the conscious mind.

Learn More[/iconbox][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][iconbox icon="icon-Timer" title="2 Minutes to Install" icon_layout="service-item-box2" icon_color="icon-blue"]We possess within us two minds. So far I have written only of the conscious mind.

Learn More[/iconbox][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][iconbox icon="icon-Search" title="SEO Optimized" icon_layout="service-item-box2" icon_color="icon-orange"]We possess within us two minds. So far I have written only of the conscious mind.

Learn More[/iconbox][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][iconbox icon="icon-Blog" title="Drag & Drop Builder" icon_layout="service-item-box2" icon_color="icon-green"]We possess within us two minds. So far I have written only of the conscious mind.

Learn More[/iconbox][vc_empty_space height="20px"][/vc_column][/vc_row][vc_row td_section_title_color="#ffffff" td_section_title_style="style1" td_background="parallax" td_width="1" td_section_id="fun-facts" td_padding="120px 0 100px 0" td_section_title="Fun Facts" td_section_description="What We Have Reached" td_color="#1b1c1f"][vc_column width="1/4"][counter speed="1500" start="1" end="547" label="Happy Clients" counter_font="ctn-style1"][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][counter speed="1500" start="1" end="1024" label="Projects Completed" counter_font="ctn-style1"][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][counter speed="1500" start="1" end="3589" label="Lines of Code" counter_font="ctn-style1"][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][counter speed="1500" start="1" end="999" label="Pizzaz eaten" counter_font="ctn-style1"][vc_empty_space height="20px"][/vc_column][/vc_row][vc_row td_section_title_color="#ffffff" td_section_title_style="style1" td_background="color" td_width="1" td_section_id="works" td_padding="120px 0" td_section_title="Featured Works"][vc_column width="1/1"][vc_masonry_grid post_type="portfolio" max_items="12" style="load-more" items_per_page="6" show_filter="yes" element_width="4" gap="30" orderby="date" order="DESC" filter_source="portfolio-categories" filter_style="default" filter_align="center" filter_color="grey" filter_size="md" button_style="rounded" button_color="white" button_size="md" arrows_design="none" arrows_position="inside" arrows_color="blue" paging_design="radio_dots" paging_color="grey" loop="" autoplay="-1" item="170" grid_id="vc_gid:1434054806992-5777497d-d9c6-4"][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="parallax" td_width="1" td_padding="120px 0" td_color="#1b1c1f"][vc_column width="1/1"][td_ctaction cta_suptitle="WE VE USED BEST UX PRACTICES" cta_title="Are you Ready to Enjoy?" cta_title_color="#ffffff" cta_align="center2" cta_btn_label="Learn More" cta_btn_target="_self" cta_btn_size="large" cta_btn_type="btn-rounded" cta_btn_style="btn-white" cta_btn2_label="Buy Now" cta_btn2_target="_self" cta_btn2_size="large" cta_btn2_type="btn-rounded" cta_btn2_style="btn-white2"][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="2" td_color="#ecf0f1" td_padding="120px 20px" td_section_id="creative-team" td_section_title="Awesome Team" td_section_description="Creative Nerds"][vc_column width="1/1"][team][team_member name="John Doe" job="CEO at shema" mb_fb_link="#" mb_twitter_link="#" mb_google_plus_link="#" mb_behance_link="#"][team_member name="John Doe" job="CEO at shema" mb_fb_link="#" mb_twitter_link="#" mb_instagram_link="#" mb_youtube_link="#"][team_member name="John Doe" job="CEO at shema" mb_twitter_link="#" mb_flickr_link="#" mb_vimeo_link="#" mb_pinterest_link="#"][team_member name="John Doe" job="CEO at shema" mb_fb_link="#" mb_google_plus_link="#" mb_pinterest_link="#" mb_reddit_link="#"][/team][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_color="#ffffff" td_padding="120px 0" td_section_id="core-features" td_section_title="Core Features" td_section_description="The Best Features in One Theme"][vc_column width="1/4"][vc_empty_space height="150px"][iconbox icon="icon-Search" title="SEO Optimized" icon_layout="features-right" icon_color="icon-default"]We possess within us two minds. So far I have written only of the conscious mind.[/iconbox][vc_empty_space height="10px"][iconbox icon="icon-Layers" title="Parallax Sections" icon_layout="features-right" icon_color="icon-green"]We possess within us two minds. So far I have written only of the conscious mind.[/iconbox][vc_empty_space height="10px"][iconbox icon="icon-Drop" title="Unlimited Colors" icon_layout="features-right" icon_color="icon-default"]We possess within us two minds. So far I have written only of the conscious mind.[/iconbox][vc_empty_space height="10px"][/vc_column][vc_column width="2/4"][vc_single_image image="" alignment="" style="" border_color="grey" img_link_large="" img_link_target="_self" css_animation="left-to-right" img_size="534x687"][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][vc_empty_space height="150px"][iconbox icon="icon-Tools" title="Drag & Drop Builder" icon_layout="features-left" icon_color="icon-default"]We possess within us two minds. So far I have written only of the conscious mind.[/iconbox][vc_empty_space height="10px"][iconbox icon="icon-Timer" title="Responsive Design" icon_layout="features-left" icon_color="icon-default"]We possess within us two minds. So far I have written only of the conscious mind.[/iconbox][vc_empty_space height="10px"][iconbox icon="icon-Notes" title="Easy Installation" icon_layout="features-left" icon_color="icon-default"]We possess within us two minds. So far I have written only of the conscious mind.[/iconbox][vc_empty_space height="10px"][/vc_column][/vc_row][vc_row td_section_title_color="#ffffff" td_section_title_style="style1" td_background="color" td_width="1" td_color="#1e1e1e" td_padding="120px 0 100px 0" td_section_id="pricing" td_section_title="Pricing Plans" td_section_description="The Best Prices"][vc_column width="1/4"][pricing style="2" accent="pr-cl-default" label="Basic" currency="$" price="199" period="Monthly" link="#" button_text="Purchase Now"][field text="Creative Design"][field text="Tons of Features"][field text="Visual Builder"][field text="Responsive Design"][field text="Clean and Valid"][/pricing][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][pricing style="2" accent="pr-cl-default" label="Basic" currency="$" price="199" period="Monthly" link="#" button_text="Purchase Now"][field text="Creative Design"][field text="Tons of Features"][field text="Visual Builder"][field text="Responsive Design"][field text="Clean and Valid"][/pricing][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][pricing style="2" accent="pr-cl-default" label="Basic" currency="$" price="199" period="Monthly" link="#" button_text="Purchase Now"][field text="Creative Design"][field text="Tons of Features"][field text="Visual Builder"][field text="Responsive Design"][field text="Clean and Valid"][/pricing][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][pricing style="2" accent="pr-cl-default" label="Basic" currency="$" price="199" period="Monthly" link="#" button_text="Purchase Now"][field text="Creative Design"][field text="Tons of Features"][field text="Visual Builder"][field text="Responsive Design"][field text="Clean and Valid"][/pricing][vc_empty_space height="20px"][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_section_id="clients" td_section_title="Testimonials" td_padding="120px 0 100px 0" td_section_description="Happy Customers"][vc_column width="1/2"][quote quote_text="Count your age by friends, not years. Count your life by smiles, not tears. Darkness cannot drive out darkness: only light can do that." quote_author="John Lennon" quote_job="CEO at Axes Ltd."][vc_empty_space height="20px"][quote quote_text="Count your age by friends, not years. Count your life by smiles, not tears. Darkness cannot drive out darkness: only light can do that." quote_author="John Lennon" quote_job="CEO at Axes Ltd."][vc_empty_space height="20px"][/vc_column][vc_column width="1/2"][quote quote_text="Count your age by friends, not years. Count your life by smiles, not tears. Darkness cannot drive out darkness: only light can do that." quote_author="John Lennon" quote_job="CEO at Axes Ltd."][vc_empty_space height="20px"][quote quote_text="Count your age by friends, not years. Count your life by smiles, not tears. Darkness cannot drive out darkness: only light can do that." quote_author="John Lennon" quote_job="CEO at Axes Ltd."][vc_empty_space height="20px"][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_section_id="brands" td_padding="60px 0" td_color="#7248f5"][vc_column width="1/1"][brands][brand][brand][brand][brand][brand][brand][/brands][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_padding="120px 0" td_section_id="from-blog" td_section_title="From Blog" td_section_description="Latest News"][vc_column width="1/1"][blog2][/vc_column][/vc_row][vc_row td_section_title_color="#ffffff" td_section_title_style="style1" td_background="color" td_width="1" td_color="#1b1c1f" td_padding="120px 0" td_section_id="contact" td_section_title="Contact" td_section_description="Get In Touch" td_class="contact-parallax"][vc_column width="7/12"][contact-form-7 id="435"][/vc_column][vc_column width="1/12"][/vc_column][vc_column width="4/12"][vc_column_text css_animation=""]

Do not hesitate to stay in touch

Our working hours is 8:00 pm to 20:00 pm
Call us, email or send us a message[/vc_column_text][vc_empty_space height="15px"][iconbox icon="icon-Phone" title="+1 888 5146 3269" icon_layout="contact-item" icon_color="icon-default"][/iconbox][vc_empty_space height="15px"][iconbox icon="icon-WorldWide" title="hello@axescompany" icon_layout="contact-item" icon_color="icon-default"][/iconbox][vc_empty_space height="15px"][iconbox icon="icon-Like" title="Axes Theme inc. Philippines Greenwich st. 256/6 62058" icon_layout="contact-item" icon_color="icon-default"][/iconbox][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}

/*-----------------------------------------------------------------------------------*/
/*	3. Predefined Layout - About 
/*-----------------------------------------------------------------------------------*/

add_filter( 'vc_load_default_templates', 'axes_about' ); 
 
function axes_about( $data ) {
    $template               = array();
    $template['name']       = __( 'About Us Page', 'axes' ); 
    $template['image_path'] = (get_template_directory_uri().'/inc/vc/portfolio_layout.jpg' );
    $template['custom_class'] = ''; 
    $template['content']    = <<<CONTENT
	[vc_row td_section_title_color="#44403f" td_background="color" td_width="2" td_section_id="about" td_color="#ffffff" td_padding="0" td_section_title_style="style1"][vc_column width="1/2"][vc_single_image border_color="grey" img_link_large="" img_link_target="_self" img_size="960x698"][/vc_column][vc_column width="1/2"][vc_column_text css=".vc_custom_1433337814298{padding-top: 15% !important;padding-right: 30% !important;padding-bottom: 15% !important;padding-left: 10% !important;}"]

We Are Passionate Agency

We possess within us two minds.
So far I have written only of the conscious mind.

And finally the subconscious is the mechanism through which thought impulses which are repeated regularly with feeling and emotion are quickened, charged and changed into their physical equivalent. You may voluntarily plant in your subconscious mind any plan, thought or purpose which you desire.

 10 Years on the Global Market
 167 Projects Completed
 We Like To Drink Coffee
[/vc_column_text][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_background="color" td_width="1" td_color="#ecf0f1" td_padding="120px 0 " td_section_title_style="style1" td_section_title="Awesome Team" td_section_description="Creative Nerds"][vc_column width="1/1"][team][team_member name="Joeby Ragpa" job="CEO of Company" mb_fb_link="#" mb_twitter_link="#" mb_dribbble_link="#" mb_google_plus_link="#"][team_member name="Michael Doe" job="Lead Developer" mb_twitter_link="#" mb_instagram_link="#" mb_google_plus_link="#" mb_behance_link="#"][team_member name="Alex Green" job="Creative Designer" mb_dribbble_link="#" mb_google_plus_link="#" mb_flickr_link="#" mb_behance_link="#"][team_member name="Jomelle Curtis" job="Front-End Developer" mb_twitter_link="#" mb_dribbble_link="#" mb_behance_link="#" mb_foursquare_link="#"][/team][/vc_column][/vc_row][vc_row td_section_title_color="#ffffff" td_section_title_style="style1" td_background="parallax" td_padding="120px 0 100px 0" td_width="1" td_section_id="our-results" td_section_title="Our Results" td_section_description="What We Have Reached"][vc_column width="1/4"][counter speed="3000" start="1" end="747" label="Happy Clients" counter_font="ctn-style1"][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][counter speed="3000" start="1" end="1024" label="Projects Completed" counter_font="ctn-style1"][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][counter speed="3000" start="1" end="3589" label="Lines of Code" counter_font="ctn-style1"][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][counter speed="3000" start="1" end="999" label="Pizzas Eaten" counter_font="ctn-style1"][vc_empty_space height="20px"][/vc_column][/vc_row][vc_row td_section_title_color="#ffffff" td_section_title_style="style1" td_background="color" td_width="1" td_padding="120px 0 100px 0" td_section_id="our-services" td_color="#ffffff"][vc_column width="1/3"][iconbox icon="icon-Edit" title="Easy to Customize" icon_layout="features-left" icon_color="icon-default"]We possess within us two minds. So far I have written only of the conscious mind. Axes Theme is the Best.[/iconbox][vc_empty_space height="20px"][iconbox icon="icon-Search" title="SEO Optimized" icon_layout="features-left" icon_color="icon-default"]We possess within us two minds. So far I have written only of the conscious mind. Axes Theme is the Best.[/iconbox][vc_empty_space height="20px"][/vc_column][vc_column width="1/3"][iconbox icon="icon-Timer" title="2 Minutes Install" icon_layout="features-left" icon_color="icon-default"]We possess within us two minds. So far I have written only of the conscious mind. Axes Theme is the Best.[/iconbox][vc_empty_space height="20px"][iconbox icon="icon-Layers" title="Parallax Sections" icon_layout="features-left" icon_color="icon-default"]We possess within us two minds. So far I have written only of the conscious mind. Axes Theme is the Best.[/iconbox][vc_empty_space height="20px"][/vc_column][vc_column width="1/3"][iconbox icon="icon-Book" title="Well Documented" icon_layout="features-left" icon_color="icon-default"]We possess within us two minds. So far I have written only of the conscious mind. Axes Theme is the Best.[/iconbox][vc_empty_space height="20px"][iconbox icon="icon-Drop" title="Unlimited Colors" icon_layout="features-left" icon_color="icon-default"]We possess within us two minds. So far I have written only of the conscious mind. Axes Theme is the Best.[/iconbox][vc_empty_space height="20px"][/vc_column][/vc_row][vc_row td_section_title_color="#ffffff" td_section_title_style="style1" td_background="parallax" td_width="1" td_padding="120px 0" td_section_id="happy-clients" td_section_title="Happy Clients"][vc_column width="1/1"][testimonials class="style1"][testimonial name="Mary Baga" info="CEO of the Company"]I bought Axes Theme one week ago for the website of my company. I was totaly surprised, when I saw how good and professional layers organized in this Theme.[/testimonial][testimonial name="John Baga" info="CEO of the Company"]I bought Axes Theme one week ago for the website of my company. I was totaly surprised, when I saw how good and professional layers organized in this Theme.[/testimonial][testimonial name="Alex Axes" info="CEO of the Company"]I bought Axes Theme one week ago for the website of my company. I was totaly surprised, when I saw how good and professional layers organized in this Theme.[/testimonial][/testimonials][/vc_column][/vc_row][vc_row td_section_title_color="#ffffff" td_section_title_style="style1" td_background="color" td_width="1" td_padding="60px 0" td_color="#ffffff"][vc_column width="1/1"][brands][brand][brand][brand][brand][brand][brand][/brands][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="parallax" td_width="1" td_padding="110px 0"][vc_column width="1/1"][td_ctaction cta_suptitle="WE VE USED BEST UX PRACTICES" cta_title="Are you Ready to Enjoy?" cta_title_color="#ffffff" cta_align="center" cta_btn_label="Buy Now" cta_btn_target="_self" cta_btn_size="large" cta_btn_type="btn-rounded" cta_btn_style="btn-style1" cta_btn2_label="Buy Now" cta_btn2_target="_self" cta_btn2_size="large" cta_btn2_type="btn-rounded" cta_btn2_style="btn-style1"][/vc_column][/vc_row]     
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}

/*-----------------------------------------------------------------------------------*/
/*	4. Predefined Layout - Services 
/*-----------------------------------------------------------------------------------*/

add_filter( 'vc_load_default_templates', 'axes_services' ); 
 
function axes_services( $data ) {
    $template               = array();
    $template['name']       = __( 'Services Page', 'axes' ); 
    $template['image_path'] = (get_template_directory_uri().'/inc/vc/portfolio_layout.jpg' );
    $template['custom_class'] = ''; 
    $template['content']    = <<<CONTENT
	
	[vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_color="#ecf0f1" td_padding="120px 0 100px 0"][vc_column width="1/4"][iconbox icon="icon-ShoppingCart" title="eCommerce Ready" icon_layout="service-item-box2" icon_color="icon-violet"]We possess within us two minds. So far I have written only of the conscious mind.

Learn More[/iconbox][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][iconbox icon="icon-Timer" title="2 Minutes to Install" icon_layout="service-item-box2" icon_color="icon-default"]We possess within us two minds. So far I have written only of the conscious mind.

Learn More[/iconbox][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][iconbox icon="icon-Search" title="SEO Optimized" icon_layout="service-item-box2" icon_color="icon-orange"]We possess within us two minds. So far I have written only of the conscious mind.

Learn More[/iconbox][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][iconbox icon="icon-Blog" title="Drag & Drop Builder" icon_layout="service-item-box2" icon_color="icon-green"]We possess within us two minds. So far I have written only of the conscious mind.

Learn More[/iconbox][vc_empty_space height="20px"][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_color="#ffffff" td_padding="120px 0 100px 0"][vc_column width="1/2"][vc_column_text]

Our Principles

Those who find beautiful meanings in beautiful things are the cultivated. We are just create awesome.

We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power.

We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power. We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind.[/vc_column_text][vc_empty_space height="20px"][/vc_column][vc_column width="1/2"][vc_accordion collapsible="" disable_keyboard="" title="How We Work" el_class="main-border"][vc_accordion_tab title="Super Flexible" el_id="flexible"][vc_column_text]We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="Awesome Theme" el_id="theme"][vc_column_text]We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power. leo.[/vc_column_text][/vc_accordion_tab][vc_accordion_tab title="Reatina Ready" el_id="retina"][vc_column_text]We possess within us two minds. So far I have written only of the conscious mind. I would now like to introduce you to your second mind, the hidden and mysterious subconscious. Our subconscious mind contains such power.[/vc_column_text][/vc_accordion_tab][/vc_accordion][vc_empty_space height="20px"][/vc_column][/vc_row][vc_row td_section_title_color="#ffffff" td_section_title_style="style1" td_background="parallax" td_width="1" td_section_title="Process" td_padding="120px 0 100px 0" td_section_description="How We Do It"][vc_column width="1/6"][tdprocess icon="icon-WorldWide" title="1. Brief"][/vc_column][vc_column width="1/6"][tdprocess icon="icon-WineGlass" title="2. Idea"][/vc_column][vc_column width="1/6"][tdprocess icon="icon-Pencil" title="3. Design"][/vc_column][vc_column width="1/6"][tdprocess icon="icon-Settings" title="4. Development"][/vc_column][vc_column width="1/6"][tdprocess icon="icon-Starship" title="5. Launch"][/vc_column][vc_column width="1/6"][tdprocess icon="icon-Headset" title="6. Support"][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_section_title="Featured Works" td_padding="120px 0"][vc_column width="1/1"][vc_empty_space height="20px"][slider][slide alt="Salamat"][slide alt="Amadea"][slide alt="Afela"][/slider][/vc_column][/vc_row][vc_row td_section_title_color="#ffffff" td_section_title_style="style1" td_background="parallax" td_width="1" td_section_title="Fun Facts" td_section_description="What We Have Reached" td_padding="120px 0 100px 0"][vc_column width="1/4"][counter speed="1500" start="1" end="547" label="Happy Clients" counter_font="ctn-style1"][/vc_column][vc_column width="1/4"][counter speed="1500" start="1" end="1024" label="Projects Completed" counter_font="ctn-style1"][/vc_column][vc_column width="1/4"][counter speed="1500" start="1" end="3589" label="Lines of Code" counter_font="ctn-style1"][/vc_column][vc_column width="1/4"][counter speed="1500" start="1" end="999" label="Pizzaz Eaten" counter_font="ctn-style1"][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_section_title="Testimonials" td_section_description="Happy Customers" td_padding="120px 0"][vc_column width="1/2"][quote quote_text="This template is so awesome. I didn t expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars." quote_author="John Doe" quote_job="CEO at Axes Ltd."][vc_empty_space height="20px"][quote quote_text="This template is so awesome. I didnt expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars." quote_author="Michael Doe" quote_job="Graphicriver.net"][vc_empty_space height="20px"][/vc_column][vc_column width="1/2"][quote quote_text="This template is so awesome. I didnt expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars." quote_author="Maria Doe" quote_job="Themeforest.net"][vc_empty_space height="20px"][quote quote_text="This template is so awesome. I didnt expect so many features inside. E-commerce pages are very useful, you can launch your online store in few seconds. I will rate 5 stars." quote_author="Richard Doe" quote_job="Photodune.net"][vc_empty_space height="20px"][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_padding="60px 0" td_color="#1b1c1f"][vc_column width="1/1"][brands][brand][brand][brand][brand][brand][brand][/brands][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_section_title="Contact" td_section_description="Get In Touch" td_padding="120px 0" td_color="#ffffff"][vc_column width="7/12"][contact-form-7 id="435"][/vc_column][vc_column width="1/12"][/vc_column][vc_column width="4/12"][vc_column_text css_animation=""]

Don Nott hesitate to stay in touch

Our working hours is 8:00 pm to 20:00 pm
Call us, email or send us a message[/vc_column_text][vc_empty_space height="20px"][iconbox icon="icon-Phone" title="123 456 7890" icon_layout="contact-item" icon_color="icon-default"][/iconbox][vc_empty_space height="15px"][iconbox icon="icon-Mail" title="hello@axescompany" icon_layout="contact-item" icon_color="icon-default"][/iconbox][vc_empty_space height="15px"][iconbox icon="icon-House" title="Axes Theme inc. Philippines Greenwich st. 256/6 62058" icon_layout="contact-item" icon_color="icon-default"][/iconbox][/vc_column][/vc_row]
       
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}

/*-----------------------------------------------------------------------------------*/
/*	5. Predefined Layout - Portfolio Image
/*-----------------------------------------------------------------------------------*/

add_filter( 'vc_load_default_templates', 'axes_port_image' );

function axes_port_image( $data ) {
    $template               = array();
    $template['name']       = __( 'Portfolio / Image Layout', 'axes' ); 
    $template['image_path'] = (get_template_directory_uri().'/inc/vc/portfolio_layout.jpg' );
    $template['custom_class'] = ''; 
    $template['content']    = <<<CONTENT
[vc_row td_section_title_color="#44403f" td_background="color" td_width="1" td_section_title_style="style1" td_padding="120px 0"][vc_column width="8/12"][vc_single_image border_color="grey" img_link_large="" img_link_target="_self" img_size="750x535"][/vc_column][vc_column width="4/12"][vc_column_text]

Poster Frame PSD Mockup

We further know that the subconscious has recorded every event that has ever happened to us. Every incident in our personal history is recorded within, along with the emotions and thoughts evoked by those incidents. And finally the subconscious is the mechanism through which thought impulses which are repeated regularly.

Date : 20 Apr 2015
Client : Creative Ltd
Category : Photography[/vc_column_text][button title="View Project" href="#" target="_blank" style="btn-style1" btnalign="btn-left" size="small" btn_type="btn-rounded"][share title="Share "][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_color="#1dcfd1" td_padding="50px 0"][vc_column width="1/1"][td_ctaction cta_suptitle="WE VE USED BEST UX PRACTICES" cta_title="Are you Ready to Enjoy? This is Call to Action" cta_title_color="#ffffff" cta_align="right" cta_btn_label="Buy Now" cta_btn_link="#" cta_btn_target="_self" cta_btn_size="large" cta_btn_type="btn-rounded" cta_btn_style="btn-white" cta_btn2_label="Buy Now" cta_btn2_target="_self" cta_btn2_size="large" cta_btn2_type="btn-rounded" cta_btn2_style="btn-white2"][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}

/*-----------------------------------------------------------------------------------*/
/*	6. Predefined Layout - Portfolio Carousel 
/*-----------------------------------------------------------------------------------*/

add_filter( 'vc_load_default_templates', 'axes_port_carousel' );

function axes_port_carousel( $data ) {
    $template               = array();
    $template['name']       = __( 'Portfolio / Carousel Layout', 'axes' ); 
    $template['image_path'] = (get_template_directory_uri().'/inc/vc/portfolio_layout.jpg' );
    $template['custom_class'] = ''; 
    $template['content']    = <<<CONTENT
[vc_row td_section_title_color="#44403f" td_background="color" td_width="1" td_section_title_style="style1" td_padding="120px 0"][vc_column width="8/12"][slider][slide alt="Item 1"][slide alt="Item 2"][slide alt="Item 3"][/slider][/vc_column][vc_column width="4/12"][vc_column_text]

Poster Frame PSD Mockup

We further know that the subconscious has recorded every event that has ever happened to us. Every incident in our personal history is recorded within, along with the emotions and thoughts evoked by those incidents. And finally the subconscious is the mechanism through which thought impulses which are repeated regularly.

Date : 20 Apr 2015
Client : Creative Ltd
Category : Photography[/vc_column_text][button title="View Project" href="#" target="_blank" style="btn-style1" btnalign="btn-left" size="small" btn_type="btn-rounded"][share title="Share "][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_color="#1dcfd1" td_padding="50px 0"][vc_column width="1/1"][td_ctaction cta_suptitle="WE VE USED BEST UX PRACTICES" cta_title="Are you Ready to Enjoy? This is Call to Action" cta_title_color="#ffffff" cta_align="right" cta_btn_label="Buy Now" cta_btn_link="#" cta_btn_target="_self" cta_btn_size="large" cta_btn_type="btn-rounded" cta_btn_style="btn-white" cta_btn2_label="Buy Now" cta_btn2_target="_self" cta_btn2_size="large" cta_btn2_type="btn-rounded" cta_btn2_style="btn-white2"][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}

/*-----------------------------------------------------------------------------------*/
/*	7. Predefined Layout - Portfolio Soundcloud 
/*-----------------------------------------------------------------------------------*/

add_filter( 'vc_load_default_templates', 'axes_port_soundcloud' );

function axes_port_soundcloud( $data ) {
    $template               = array();
    $template['name']       = __( 'Portfolio / Soundcloud Layout', 'axes' ); 
    $template['image_path'] = (get_template_directory_uri().'/inc/vc/portfolio_layout.jpg' );
    $template['custom_class'] = ''; 
    $template['content']    = <<<CONTENT
[vc_row td_section_title_color="#44403f" td_background="color" td_width="1" td_section_title_style="style1" td_padding="120px 0"][vc_column width="8/12"][vc_raw_html]JTNDaWZyYW1lJTIwd2lkdGglM0QlMjIxMDAlMjUlMjIlMjBoZWlnaHQlM0QlMjI0NTAlMjIlMjBzY3JvbGxpbmclM0QlMjJubyUyMiUyMGZyYW1lYm9yZGVyJTNEJTIybm8lMjIlMjBzcmMlM0QlMjJodHRwcyUzQSUyRiUyRncuc291bmRjbG91ZC5jb20lMkZwbGF5ZXIlMkYlM0Z1cmwlM0RodHRwcyUyNTNBJTJGJTJGYXBpLnNvdW5kY2xvdWQuY29tJTJGdHJhY2tzJTJGMSUyNmFtcCUzQmF1dG9fcGxheSUzRGZhbHNlJTI2YW1wJTNCaGlkZV9yZWxhdGVkJTNEZmFsc2UlMjZhbXAlM0JzaG93X2NvbW1lbnRzJTNEdHJ1ZSUyNmFtcCUzQnNob3dfdXNlciUzRHRydWUlMjZhbXAlM0JzaG93X3JlcG9zdHMlM0RmYWxzZSUyNmFtcCUzQnZpc3VhbCUzRHRydWUlMjIlM0UlM0MlMkZpZnJhbWUlM0U=[/vc_raw_html][/vc_column][vc_column width="4/12"][vc_column_text]

Poster Frame PSD Mockup

We further know that the subconscious has recorded every event that has ever happened to us. Every incident in our personal history is recorded within, along with the emotions and thoughts evoked by those incidents. And finally the subconscious is the mechanism through which thought impulses which are repeated regularly.

Date : 20 Apr 2015
Client : Creative Ltd
Category : Photography[/vc_column_text][button title="View Project" href="#" target="_blank" style="btn-style1" btnalign="btn-left" size="small" btn_type="btn-rounded"][share title="Share "][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_color="#1dcfd1" td_padding="50px 0"][vc_column width="1/1"][td_ctaction cta_suptitle="WE VE USED BEST UX PRACTICES" cta_title="Are you Ready to Enjoy? This is Call to Action" cta_title_color="#ffffff" cta_align="right" cta_btn_label="Buy Now" cta_btn_link="#" cta_btn_target="_self" cta_btn_size="large" cta_btn_type="btn-rounded" cta_btn_style="btn-white" cta_btn2_label="Buy Now" cta_btn2_target="_self" cta_btn2_size="large" cta_btn2_type="btn-rounded" cta_btn2_style="btn-white2"][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}

/*-----------------------------------------------------------------------------------*/
/*	8. Predefined Layout - Portfolio Vimeo 
/*-----------------------------------------------------------------------------------*/

add_filter( 'vc_load_default_templates', 'axes_port_vimeo' );

function axes_port_vimeo( $data ) {
    $template               = array();
    $template['name']       = __( 'Portfolio / Vimeo Layout', 'axes' ); 
    $template['image_path'] = (get_template_directory_uri().'/inc/vc/portfolio_layout.jpg' );
    $template['custom_class'] = ''; 
    $template['content']    = <<<CONTENT
[vc_row td_section_title_color="#44403f" td_background="color" td_width="1" td_section_title_style="style1" td_padding="120px 0"][vc_column width="8/12"][vc_video link="https://vimeo.com/1"][/vc_column][vc_column width="4/12"][vc_column_text]

Poster Frame PSD Mockup

We further know that the subconscious has recorded every event that has ever happened to us. Every incident in our personal history is recorded within, along with the emotions and thoughts evoked by those incidents. And finally the subconscious is the mechanism through which thought impulses which are repeated regularly.

Date : 20 Apr 2015
Client : Creative Ltd
Category : Photography[/vc_column_text][button title="View Project" href="#" target="_blank" style="btn-style1" btnalign="btn-left" size="small" btn_type="btn-rounded"][share title="Share "][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_color="#1dcfd1" td_padding="50px 0"][vc_column width="1/1"][td_ctaction cta_suptitle="WE VE USED BEST UX PRACTICES" cta_title="Are you Ready to Enjoy? This is Call to Action" cta_title_color="#ffffff" cta_align="right" cta_btn_label="Buy Now" cta_btn_link="#" cta_btn_target="_self" cta_btn_size="large" cta_btn_type="btn-rounded" cta_btn_style="btn-white" cta_btn2_label="Buy Now" cta_btn2_target="_self" cta_btn2_size="large" cta_btn2_type="btn-rounded" cta_btn2_style="btn-white2"][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}

/*-----------------------------------------------------------------------------------*/
/*	9. Predefined Layout - Portfolio Youtube 
/*-----------------------------------------------------------------------------------*/

add_filter( 'vc_load_default_templates', 'axes_port_youtube' );

function axes_port_youtube( $data ) {
    $template               = array();
    $template['name']       = __( 'axes Portfolio Youtube Layout', 'axes' ); 
    $template['image_path'] = (get_template_directory_uri().'/inc/vc/portfolio_layout.jpg' );
    $template['custom_class'] = ''; 
    $template['content']    = <<<CONTENT
[vc_row td_section_title_color="#44403f" td_background="color" td_width="1" td_section_title_style="style1" td_padding="120px 0"][vc_column width="8/12"][vc_video link="https://www.youtube.com/watch?v=1"][/vc_column][vc_column width="4/12"][vc_column_text]

Poster Frame PSD Mockup

We further know that the subconscious has recorded every event that has ever happened to us. Every incident in our personal history is recorded within, along with the emotions and thoughts evoked by those incidents. And finally the subconscious is the mechanism through which thought impulses which are repeated regularly.

Date : 20 Apr 2015
Client : Creative Ltd
Category : Photography[/vc_column_text][button title="View Project" href="#" target="_blank" style="btn-style1" btnalign="btn-left" size="small" btn_type="btn-rounded"][share title="Share "][/vc_column][/vc_row][vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_color="#1dcfd1" td_padding="50px 0"][vc_column width="1/1"][td_ctaction cta_suptitle="WE VE USED BEST UX PRACTICES" cta_title="Are you Ready to Enjoy? This is Call to Action" cta_title_color="#ffffff" cta_align="right" cta_btn_label="Buy Now" cta_btn_link="#" cta_btn_target="_self" cta_btn_size="large" cta_btn_type="btn-rounded" cta_btn_style="btn-white" cta_btn2_label="Buy Now" cta_btn2_target="_self" cta_btn2_size="large" cta_btn2_type="btn-rounded" cta_btn2_style="btn-white2"][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}

/*-----------------------------------------------------------------------------------*/
/*	10. Predefined Layout - Contact
/*-----------------------------------------------------------------------------------*/

add_filter( 'vc_load_default_templates', 'axes_contact' );

function axes_contact( $data ) {
    $template               = array();
    $template['name']       = __( 'Contact Page', 'axes' ); 
    $template['image_path'] = (get_template_directory_uri().'/inc/vc/portfolio_layout.jpg' );
    $template['custom_class'] = ''; 
    $template['content']    = <<<CONTENT
[vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="2"][vc_column width="1/1"][vc_gmaps size="500px" link="#E-8_JTNDaWZyYW1lJTIwc3JjJTNEJTIyaHR0cHMlM0ElMkYlMkZtYXBzLmdvb2dsZS5jb20lMkZtYXBzJTJGbXMlM0Ztc2ElM0QwJTI2YW1wJTNCbXNpZCUzRDIxODAxNDMzNzE1NDQyMzY2MDQ1NC4wMDA0ZThmMjEwN2MxZDE0YWZhMmQlMjZhbXAlM0JobCUzRGVsJTI2YW1wJTNCaWUlM0RVVEY4JTI2YW1wJTNCdCUzRG0lMjZhbXAlM0J6JTNEMTclMjZhbXAlM0JvdXRwdXQlM0RlbWJlZCUyMiUyMHdpZHRoJTNEJTIyMTAwJTI1JTIyJTIwaGVpZ2h0JTNEJTIyNTAwJTIyJTIwc3R5bGUlM0QlMjJib3JkZXIlM0Fub25lJTIyJTNFJTNDJTJGaWZyYW1lJTNF"][/vc_column][/vc_row]

[vc_row td_section_title_color="#44403f" td_section_title_style="style1" td_background="color" td_width="1" td_color="#ffffff" td_padding="120px 0" td_section_id="contact-us" td_section_title="" td_section_description=""][vc_column width="7/12"][contact-form-7 id="435"][/vc_column][vc_column width="1/12"][/vc_column][vc_column width="4/12"][vc_column_text css_animation=""]

Don Not hesitate to stay in touch

Our working hours is 8:00 pm to 20:00 pm
Call us, email or send us a message[/vc_column_text][vc_empty_space height="15px"][iconbox icon="icon-Phone" title="+1 888 5146 3269" icon_layout="contact-item" icon_color="icon-default"][/iconbox][vc_empty_space height="15px"][iconbox icon="icon-WorldWide" title="hello@axescompany" icon_layout="contact-item" icon_color="icon-default"][/iconbox][vc_empty_space height="15px"][iconbox icon="icon-Like" title="Axes Theme inc. Philippines Greenwich st. 256/6 62058" icon_layout="contact-item" icon_color="icon-default"][/iconbox][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}

/*-----------------------------------------------------------------------------------*/
/*	11. Predefined Layout - Pricing
/*-----------------------------------------------------------------------------------*/

add_filter( 'vc_load_default_templates', 'axes_pricing' );

function axes_pricing( $data ) {
    $template               = array();
    $template['name']       = __( 'Pricing Tables Page', 'axes' ); 
    $template['image_path'] = (get_template_directory_uri().'/inc/vc/portfolio_layout.jpg' );
    $template['custom_class'] = ''; 
    $template['content']    = <<<CONTENT
[vc_row td_section_title_color="#ffffff" td_background="color" td_width="1" td_section_id="pricing" td_color="#ffffff" td_padding="120px 0" td_section_title_style="style1"][vc_column width="1/4"][pricing label="Basic" currency="$" price="199" link="#" button_text="Buy It Now" style="1" accent="pr-cl-default" period="Monthly"][field text="Visual Composer"][field text="Revolution Slider"][field text="Google Fonts"][field text="FontAwesome Icons"][field text="Options Panel"][/pricing][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][pricing label="Business" currency="$" price="399" link="#" button_text="Buy It Now" style="1" accent="pr-cl-default" period="Monthly"][field text="Visual Composer"][field text="Revolution Slider"][field text="Google Fonts"][field text="FontAwesome Icons"][field text="Options Panel"][/pricing][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][pricing label="Advanced" currency="$" price="999" link="#" button_text="Buy It Now" class="offer" period="Monthly" style="1" accent="pr-cl-accent"][field text="Visual Composer"][field text="Revolution Slider"][field text="Google Fonts"][field text="FontAwesome Icons"][field text="Options Panel"][/pricing][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][pricing label="Premium" currency="$" price="1399" link="#" button_text="Buy It Now" style="1" accent="pr-cl-default" period="Monthly"][field text="Visual Composer"][field text="Revolution Slider"][field text="Google Fonts"][field text="FontAwesome Icons"][field text="Options Panel"][/pricing][vc_empty_space height="20px"][/vc_column][/vc_row][vc_row td_section_title_color="#ffffff" td_background="color" td_width="1" td_section_id="pricing" td_color="#ecf0f1" td_padding="120px 0 100px 0" td_section_title_style="style1"][vc_column width="1/3"][pricing label="Basic" currency="$" price="199" link="#" button_text="Buy It Now" style="1" accent="pr-cl-purple"][field text="Visual Composer"][field text="Revolution Slider"][field text="Google Fonts"][field text="FontAwesome Icons"][field text="Options Panel"][/pricing][vc_empty_space height="20px"][/vc_column][vc_column width="1/3"][pricing label="Business" currency="$" price="399" link="#" button_text="Buy It Now" style="1" accent="pr-cl-orange"][field text="Visual Composer"][field text="Revolution Slider"][field text="Google Fonts"][field text="FontAwesome Icons"][field text="Options Panel"][/pricing][vc_empty_space height="20px"][/vc_column][vc_column width="1/3"][pricing label="Advanced" currency="$" price="999" link="#" button_text="Buy It Now" class="offer" period="Per Month" style="1" accent="pr-cl-green"][field text="Visual Composer"][field text="Revolution Slider"][field text="Google Fonts"][field text="FontAwesome Icons"][field text="Options Panel"][/pricing][vc_empty_space height="20px"][/vc_column][/vc_row][vc_row td_section_title_color="#ffffff" td_background="parallax" td_width="1" td_section_id="pricing" td_color="#ffffff" td_padding="120px 0" td_section_title_style="style1" td_section_title="Pricing Plans" td_section_description="The Best Prices"][vc_column width="1/4"][pricing label="Basic" currency="$" price="199" link="#" button_text="Buy It Now" style="2" accent="pr-cl-default"][field text="Visual Composer"][field text="Revolution Slider"][field text="Google Fonts"][field text="FontAwesome Icons"][field text="Options Panel"][/pricing][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][pricing label="Business" currency="$" price="399" link="#" button_text="Buy It Now" style="2" accent="pr-cl-default"][field text="Visual Composer"][field text="Revolution Slider"][field text="Google Fonts"][field text="FontAwesome Icons"][field text="Options Panel"][/pricing][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][pricing label="Advanced" currency="$" price="999" link="#" button_text="Buy It Now" class="offer" period="Per Month" style="2" accent="pr-cl-accent"][field text="Visual Composer"][field text="Revolution Slider"][field text="Google Fonts"][field text="FontAwesome Icons"][field text="Options Panel"][/pricing][vc_empty_space height="20px"][/vc_column][vc_column width="1/4"][pricing label="Premium" currency="$" price="1399" link="#" button_text="Buy It Now" style="2" accent="pr-cl-default"][field text="Visual Composer"][field text="Revolution Slider"][field text="Google Fonts"][field text="FontAwesome Icons"][field text="Options Panel"][/pricing][vc_empty_space height="20px"][/vc_column][/vc_row]
CONTENT;
 
    array_unshift( $data, $template );
    return $data;
}

 
/*-----------------------------------------------------------------------------------*/
/*	10. Remove Unused Addons
/*-----------------------------------------------------------------------------------*/

vc_remove_element( "vc_images_carousel");
vc_remove_element( "vc_gallery");
vc_remove_element( "vc_button" ); 
vc_remove_element( "vc_btn" ); 
vc_remove_element( "vc_cta" ); 

/*-----------------------------------------------------------------------------------*/
/*	11. Remove Unused Params
/*-----------------------------------------------------------------------------------*/

vc_remove_param( "vc_row", "full_width" );
vc_remove_param( "vc_row", "el_class" );
vc_remove_param( "vc_row", "el_id" );
vc_remove_param( "vc_row", "parallax" );
vc_remove_param( "vc_row", "parallax_image" );
vc_remove_param( "vc_row", "css" );
vc_remove_param( "vc_row", "full_height" );
vc_remove_param( "vc_row", "video_bg" );
vc_remove_param( "vc_row", "video_bg_url" );
vc_remove_param( "vc_row", "video_bg_parallax" );
vc_remove_param( "vc_row", "content_placement" );
vc_remove_param( "vc_row_inner", "full_width" );
vc_remove_param( "vc_row_inner", "el_class" );
vc_remove_param( "vc_row_inner", "css" );
vc_remove_param( "vc_row_inner", "td_section_description" );
vc_remove_param( "vc_row_inner", "td_section_title" );
vc_remove_param( "vc_row_inner", "td_section_title_color" );
vc_remove_param( "vc_row_inner", "td_image" );
vc_remove_param( "vc_row_inner", "td_background" );

/*-----------------------------------------------------------------------------------*/
/*	12. Add VC editor as default editor
/*-----------------------------------------------------------------------------------*/

$list = array(
    'page',
    'portfolio',
);
vc_set_default_editor_post_types( $list );

/*-----------------------------------------------------------------------------------*/
/*	13. vc_row Custom Addon
/*-----------------------------------------------------------------------------------*/

$attributes = array(
	array(
        'type' => 'textfield',
        'heading' => "Section ID",
        'param_name' => 'td_section_id',
        'description' => __( "Menu link will be linked with this ID", "axes" )
    ),
	array(
        'type' => 'textfield',
        'heading' => "Section Title",
        'param_name' => 'td_section_title',
        'description' => __( "Section title", "axes" )
    ),
	array(
        'type' => 'textarea',
        'heading' => "Title Description",
        'param_name' => 'td_section_description',
        'description' => __( "Section title description", "axes" )
    ),
	array(
        'type' => 'dropdown',
        'heading' => "Title Color",
        'param_name' => 'td_section_title_color',
        'description' => __( "Choose a color", "axes" ),
		'value' => array( 'Dark'   => '#44403f', 'White' => '#ffffff' ),
		'default' => '#44403f'
    ),
	array(
        'type' => 'attach_image',
        'heading' => "Background Image",
        'param_name' => 'td_image',
        'description' => __( "Image from media gallery", "axes" )
    ),
	array(
        'type' => 'colorpicker',
        'heading' => "Background Color",
        'param_name' => 'td_color',
        'description' => __( "Background color", "axes" ),
		'default' => '#ffffff'
    ),
	array(
        'type' => 'colorpicker',
        'heading' => "Font Color",
        'param_name' => 'td_font_color',
        'description' => __( "Font color", "axes" )
    ),
	array(
        'type' => 'dropdown',
        'heading' => "Background Style",
        'param_name' => 'td_background',
		'value' => array( 'Color' => 'color', 'Image'   => 'image', 'Parallax'   => 'parallax', 'Pattern'   => 'pattern' ),
        'description' => __( "Background style", "axes" ),
		'default' => 'color'
    ),
	array(
        'type' => 'textfield',
        'heading' => "Padding",
        'param_name' => 'td_padding',
        'description' => __( "Examples 120px 0, 120px 0px 100px 0px etc", "axes" ),
		'default' => '120px 0'
    ),
	array(
        'type' => 'dropdown',
        'heading' => "Width Style",
        'param_name' => 'td_width',
		'value' => array( 'Fixed'   => '1', 'Full' => '2' ),
		'default' => '1'
    ),
	array(
        'type' => 'textfield',
        'heading' => "Optional Class",
        'param_name' => 'td_class',
        'description' => __( "Optional class", "axes" )
    ),
);
vc_add_params( 'vc_row', $attributes );

/*-----------------------------------------------------------------------------------*/
/*	14. vc_row_inner Custom Addon
/*-----------------------------------------------------------------------------------*/
$attributes = array(
	array(
        'type' => 'textfield',
        'heading' => "Optional Class",
        'param_name' => 'td_class',
        'description' => __( "Optional class", "axes" )
    ),
	array(
        'type' => 'colorpicker',
        'heading' => "Background Color",
        'param_name' => 'td_color',
        'description' => __( "Background color", "axes" ),
		'default' => '#ffffff'
    ),
	array(
        'type' => 'colorpicker',
        'heading' => "Font Color",
        'param_name' => 'td_font_color',
        'description' => __( "Font color", "axes" )
    ),
	array(
        'type' => 'textfield',
        'heading' => "Padding",
        'param_name' => 'td_padding',
        'description' => __( "Examples 120px 0, 120px 0px 100px 0px etc", "axes" ),
		'default' => '120px 0'
    ),
	array(
        'type' => 'dropdown',
        'heading' => "Width Style",
        'param_name' => 'td_width',
		'value' => array( 'Fixed'   => '1', 'Full' => '2' ),
		'default' => '1'
    ),
);
vc_add_params( 'vc_row_inner', $attributes );

/*-----------------------------------------------------------------------------------*/
/*	15. Brands Addon
/*-----------------------------------------------------------------------------------*/

vc_map( array(
    "name" => __("Brands", "axes"),
    "base" => "brands",
    "as_parent" => array('only' => 'brand'),
    "content_element" => true,
    "show_settings_on_create" => false,
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", "axes"),
            "param_name" => "el_class",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "axes")
        )
    ),
	"js_view" => 'VcColumnView'
) );
vc_map( array(
    "name" => __("Brand", "axes"),
    "base" => "brand",
    "content_element" => true,
    "as_child" => array('only' => 'brands'), 
    "params" => array(
        array(
            "type" => "attach_image",
            "heading" => __("Image", "axes"),
            "param_name" => "image",
            "description" => __("Add an image", "axes")
        ),
		array(
            "type" => "textfield",
            "heading" => __("Title", "axes"),
            "param_name" => "alt",
            "description" => __("Title", "axes")
        )
    )
) );

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_brands extends WPBakeryShortCodesContainer {
    }
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_brand extends WPBakeryShortCode {
    }
}

/*-----------------------------------------------------------------------------------*/
/*	16. OWL Carousel Addon
/*-----------------------------------------------------------------------------------*/

vc_map( array(
    "name" => __("Owl Carousel Slider", "axes"),
    "base" => "slider",
    "as_parent" => array('only' => 'slide'),
    "content_element" => true,
    "show_settings_on_create" => false,
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => __("Extra class name", "axes"),
            "param_name" => "class",
            "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "axes")
        )
    ),
	"js_view" => 'VcColumnView'
) );
vc_map( array(
    "name" => __("Slide Image", "axes"),
    "base" => "slide",
    "content_element" => true,
    "as_child" => array('only' => 'slider'), 
    "params" => array(
        array(
            "type" => "attach_image",
            "heading" => __("Image", "axes"),
            "param_name" => "image",
            "description" => __("Add an image", "axes")
        ),
		array(
            "type" => "textfield",
            "heading" => __("Title", "axes"),
            "param_name" => "alt",
            "description" => __("Title", "axes")
        )
    )
) );

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_slider extends WPBakeryShortCodesContainer {
    }
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_slide extends WPBakeryShortCode {
    }
}

/*-----------------------------------------------------------------------------------*/
/*	17. Pricing Tables Addon
/*-----------------------------------------------------------------------------------*/

vc_map( array(
    "name" => __("Pricing Tables", "axes"),
    "base" => "pricing",
    "as_parent" => array('only' => 'field'), 
    "content_element" => true,
    "show_settings_on_create" => true,
    "params" => array(
		array(
			'type' => 'dropdown',
			'heading' => "Style",
			'param_name' => 'style',
			'value' => array( 'Style 1 - With Border'   => '1', 'Style 2 - Without Border' => '2' ),
			'default' => '1'
		),
		array(
			'type' => 'dropdown',
			'heading' => "Accent",
			'param_name' => 'accent',
			'value' => array( 'Default' => 'pr-cl-default', 'Theme Color' => 'pr-cl-accent', 'Green' => 'pr-cl-green', 'Purple' => 'pr-cl-purple', 'Orange' => 'pr-cl-orange', 'Yellow' => 'pr-cl-yellow' ),
			'default' => '1'
		),
		array(
            "type" => "textfield",
            "heading" => __("Title", "axes"),
            "param_name" => "label",
            "description" => __("Pricing Table Title", "axes")
        ),
		array(
            "type" => "textfield",
            "heading" => __("Currency", "axes"),
            "param_name" => "currency",
            "description" => __("For example : $", "axes")
        ),
		array(
            "type" => "textfield",
            "heading" => __("Price", "axes"),
            "param_name" => "price",
            "description" => __("Add the price without currency", "axes")
        ),
		array(
            "type" => "textfield",
            "heading" => __("Period", "axes"),
            "param_name" => "period",
            "description" => __("For example : Per Year", "axes")
        ),
		array(
            "type" => "textfield",
            "heading" => __("Link to", "axes"),
            "param_name" => "link",
            "description" => __("Link to paypal or a shop page", "axes")
        ),
		array(
            "type" => "textfield",
            "heading" => __("Button Label", "axes"),
            "param_name" => "button_text",
            "description" => __("For example : Purchase, Buy it etc", "axes")
        )
    ),
	"js_view" => 'VcColumnView'
) );
vc_map( array(
    "name" => __("Pricing Table Fields", "axes"),
    "base" => "field",
    "content_element" => true,
    "as_child" => array('only' => 'pricing'), 
    "params" => array(
        array(
            "type" => "textfield",
            "heading" => __("Table Field", "axes"),
            "param_name" => "text",
            "description" => __("Add an image", "axes")
        )
    )
) );

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_pricing extends WPBakeryShortCodesContainer {
    }
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_field extends WPBakeryShortCode {
    }
}

/*-----------------------------------------------------------------------------------*/
/*	18. Testimonials Addon
/*-----------------------------------------------------------------------------------*/

vc_map( array(
    "name" => __("Testimonials", "axes"),
    "base" => "testimonials",
    "as_parent" => array('only' => 'testimonial'),
    "content_element" => true,
    "show_settings_on_create" => false,
    "params" => array(
	  	array(
            "type" => "dropdown",
            "heading" => __("Style", "axes"),
            "param_name" => "class",
            "value"   => array(
				'Style 1'   => 'style1',
			),
            "description" => __("Select style", "axes")
         )
    ),
	"js_view" => 'VcColumnView'
) );
vc_map( array(
    "name" => __("Testimonial", "axes"),
    "base" => "testimonial",
    "content_element" => true,
    "as_child" => array('only' => 'testimonials'), 
    "params" => array(
		array(
            "type" => "attach_image",
            "heading" => __("Image", "axes"),
            "param_name" => "image",
            "description" => __("Add an image", "axes")
        ),
		array(
            "type" => "textarea",
            "heading" => __("Quote", "axes"),
            "param_name" => "content",
            "description" => __("Quote", "axes")
        ),
		array(
            "type" => "textfield",
            "heading" => __("Name", "axes"),
            "param_name" => "name",
            "description" => __("Authors name", "axes")
        ),
		array(
            "type" => "textfield",
            "heading" => __("Info", "axes"),
            "param_name" => "info",
            "description" => __("Authors info", "axes")
        )
    )
) );

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_testimonials extends WPBakeryShortCodesContainer {
    }
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_testimonial extends WPBakeryShortCode {
    }
}

/*-----------------------------------------------------------------------------------*/
/*	19. Team Addon
/*-----------------------------------------------------------------------------------*/

vc_map( array(
    "name" => __("Team", "axes"),
    "base" => "team",
    "as_parent" => array('only' => 'team_member'),
    "content_element" => true,
    "show_settings_on_create" => false,
    "params" => array(
	  	array(
            "type" => "textfield",
            "heading" => __("Class", "axes"),
            "param_name" => "class",
            "description" => __("Optional class", "axes")
         )
    ),
	"js_view" => 'VcColumnView'
) );
vc_map( array(
    "name" => __("Member", "axes"),
    "base" => "team_member",
    "content_element" => true,
    "as_child" => array('only' => 'team'), 
    "params" => array(
         array(
            "type" => "attach_image",
            "holder" => "",
            "class" => "",
            "heading" => __("Image", "axes"),
            "param_name" => "image",
            "description" => __("Add an image.", "axes")
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Name", "axes"),
            "param_name" => "name",
            "value" => __("John Doe", "axes"),
            "description" => __("Member name", "axes")
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Job", "axes"),
            "param_name" => "job",
            "value" => __("CEO at axes", "axes"),
            "description" => __("Add member's job (optional)", "axes")
         ),
		 array(
            "type" => "textarea",
            "holder" => "",
            "class" => "",
            "heading" => __("Short Bio", "axes"),
            "param_name" => "short_bio",
            "description" => __("A short bio text (optional)", "axes")
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Facebook Link", "axes"),
            "param_name" => "mb_fb_link",
			"group" => 'Social Icons'
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Twitter Link", "axes"),
            "param_name" => "mb_twitter_link",
			"group" => 'Social Icons'
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Dribbble Link", "axes"),
            "param_name" => "mb_dribbble_link",
			"group" => 'Social Icons'
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Instagram Link", "axes"),
            "param_name" => "mb_instagram_link",
			"group" => 'Social Icons'
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Google Plus Link", "axes"),
            "param_name" => "mb_google_plus_link",
			"group" => 'Social Icons'
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Flickr Link", "axes"),
            "param_name" => "mb_flickr_link",
			"group" => 'Social Icons'
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Behance Link", "axes"),
            "param_name" => "mb_behance_link",
			"group" => 'Social Icons'
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Foursquare Link", "axes"),
            "param_name" => "mb_foursquare_link",
			"group" => 'Social Icons'
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Linkedin Link", "axes"),
            "param_name" => "mb_linkedin_link",
			"group" => 'Social Icons'
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Skype Link", "axes"),
            "param_name" => "mb_skype_link",
			"group" => 'Social Icons'
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Youtube Link", "axes"),
            "param_name" => "mb_youtube_link",
			"group" => 'Social Icons'
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Vimeo Link", "axes"),
            "param_name" => "mb_vimeo_link",
			"group" => 'Social Icons'
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Pinterest Link", "axes"),
            "param_name" => "mb_pinterest_link",
			"group" => 'Social Icons'
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Reddit Link", "axes"),
            "param_name" => "mb_reddit_link",
			"group" => 'Social Icons'
         ),
		 array(
            "type" => "textfield",
            "holder" => "",
            "class" => "",
            "heading" => __("Github Link", "axes"),
            "param_name" => "mb_git_link",
			"group" => 'Social Icons'
         ),
	)
) );

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_team extends WPBakeryShortCodesContainer {
    }
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_team_member extends WPBakeryShortCode {
    }
}


<?php
/**
 * vc_row override
 *
 * @package WordPress
 * @subpackage Axes
 * @since Axes 1.0
 */

/** @var $this WPBakeryShortCode_VC_Row */
extract( shortcode_atts( array(
	'td_section_id' =>'',
	'td_class' => '',
	'td_section_title' => '',
	'td_section_title_color' => '',
	'td_section_description' => '',
	'td_background' => '',
	'td_image' => '',
	'td_color' => '',
	'td_font_color' => '',
	'td_padding' => '',
	'td_width'=>'',
), $atts ) );

// wp_enqueue_style( 'js_composer_front' );
wp_enqueue_script( 'wpb_composer_front_js' );
// wp_enqueue_style('js_composer_custom_css');


$image = wp_get_attachment_url( $td_image, 'large' );

?>

<div id="<?php echo esc_attr($td_section_id); ?>" class="section<?php if ($td_width != '1') { ?>-fluid<?php } ?> <?php if ($td_background=="parallax") { echo parallax; } ?> <?php echo esc_attr($td_class); ?>" style="<?php if ($td_background != "color") { ?> background-image:url(<?php echo esc_attr($image); ?>); <?php } if($td_background == "image") { ?>background-position:center !important;background-size:cover;<?php } ?> background-color:<?php echo esc_attr($td_color); ?>;color:<?php echo esc_attr($td_font_color); ?>;">
	<div <?php if ($td_background != "color") { ?>class="mask"<?php } ?> style="padding:<?php echo esc_attr($td_padding); ?>;">
		<?php if ($td_width != '2') { ?><div class="container"><?php } ?>
            <?php if ($td_section_title != '') : ?>
            <div class="row vc_row wpb_row <?php ( $this->settings( 'base' ) === 'vc_row_inner' ? 'vc_inner ' : '' ) ?>">
                <div class="vc_col-md-12">
                    <div class="section-header-style1">
                        <h2 class="section-title" style="color:<?php echo esc_attr($td_section_title_color); ?>;"><?php echo esc_attr($td_section_title); ?></h2>
                        <p class="section-info"><?php echo esc_attr($td_section_description); ?></p>
                        <?php if ($td_section_description != '') { ?><span class="section-line"></span><?php } ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="row vc_row wpb_row">
                <?php echo wpb_js_remove_wpautop( $content ); ?>
            </div>
        <?php if ($td_width != '2') { ?></div><?php } ?>
    </div>
</div>

<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Axes
 * @since Axes 1.1
 */

get_header(); 

$td_bread_image = get_theme_mod('tdgr_bread_image');
$td_bread_color = get_theme_mod('tdgr_bread_color');

?>

<div class="blog-header"  style="<?php if (empty($td_bread_image)) { echo 'background-color:#2d2a2f !important;'; } ?>background:url('<?php echo esc_attr($td_bread_image); ?>')">
    
	<div class="container">
   		
		<div class="row">
            
			<div class="col-md-6">
            
				<h1 class="section-title" style="color:<?php if (empty($td_bread_color)) { echo "#fff"; } else { echo esc_attr($td_bread_color); } ?>"><?php echo get_the_title(); ?></h1>
                
			</div>
                
			<div class="col-md-6">
                    
				<p class="pull-right section-info"><?php axes_port_nav() ?></p>
                
			</div>
                
		</div>
        
	</div>
        
</div>


<?php while ( have_posts() ) : the_post(); ?>
                
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        
		<?php the_content(); ?>
                        
	</article>
        
<?php endwhile; ?>

<?php get_footer(); ?>
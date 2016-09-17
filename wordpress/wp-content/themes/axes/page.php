<?php
/**
 * The template for displaying pages
 *
 * @package WordPress
 * @subpackage Axes
 * @since Axes 1.0
 */

get_header();

$td_bread_image = get_theme_mod('tdgr_bread_image');
$td_bread_color = get_theme_mod('tdgr_bread_color');

?>

<?php if ( !is_front_page() ) { ?>

	<div class="blog-header parallax" style="<?php if (empty($td_bread_image)) { echo 'background-color:#2d2a2f !important;'; } ?>background:url('<?php echo esc_attr($td_bread_image); ?>')">
    
    	<div class="container">
   		
            <div class="row">
            
            	<div class="col-md-6">
            
                	<h1 class="section-title" style="color:<?php if (empty($td_bread_color)) { echo "#fff"; } else { echo esc_attr($td_bread_color); } ?>"><?php echo get_the_title(); ?></h1>
                
                </div>
                
                <div class="col-md-6">
                    
                	<p class="pull-right section-info"><?php the_breadcrumb(); ?></p>
                
                </div>
                
            </div>
        
        </div>
        
	</div>
    
<?php } ?>
    
	<div class="container page-content">
    
    	<div class="row">
        
        	<div class="col-md-12">
    
				<?php
            
                    while ( have_posts() ) : the_post();
                    
                        the_content();
                    
                    endwhile; 
                    
                ?>
    
    		</div>

		</div>
        
	</div>

<?php get_footer(); ?>

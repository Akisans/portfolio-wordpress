<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Axes
 * @since Axes 1.0
 */

get_header(); 

$td_bread_image = get_theme_mod('tdgr_bread_image');
$td_bread_color = get_theme_mod('tdgr_bread_color');

?>

	<div class="blog-header"  style="<?php if (empty($td_bread_image)) { echo 'background-color:#2d2a2f !important;'; } ?>background:url('<?php echo esc_attr($td_bread_image); ?>')">
    
    	<div class="container">
   		
            <div class="row">
            
            	<div class="col-md-6">
            
                	<h1 class="section-title" style="color:<?php if (empty($td_bread_color)) { echo "#fff"; } else { echo esc_attr($td_bread_color); } ?>"><?php echo apply_filters('the_title',get_page( get_option('page_for_posts') )->post_title); ?></h1>
                
                </div>
                
                <div class="col-md-6">
                    
                	<p class="pull-right section-info"><?php the_breadcrumb(); ?></p>
                
                </div>
                
            </div>
        
        </div>
        
	</div>

<div class="container blog-content">

	<div class="row">

		<div class="col-md-9">
    
			<?php 
            
                while ( have_posts() ) : the_post(); 
                
                    get_template_part( 'content', get_post_format() ); 
            
					axes_post_nav();
				
				endwhile; 
			
			?>
            
		</div>
        
        <div class="col-md-3">
	
    		<?php 
							
			if ( is_active_sidebar( 'sidebar' ) ) { 
							
				dynamic_sidebar( 'sidebar' ); 
							
			} 
							
			?>
        
		</div>
    
    </div>
    
</div>

<?php get_footer(); ?>
<?php
/**
 * The template for displaying archive pages
 *
 * @package WordPress
 * @subpackage Axes
 * @since Twenty Axes 1.0
 */

get_header(); 

$td_bread_image = get_theme_mod('tdgr_bread_image');
$td_bread_color = get_theme_mod('tdgr_bread_color');

?>

<div class="blog-header" style="<?php if (empty($td_bread_image)) { echo 'background-color:#2d2a2f !important;'; } ?>background:url('<?php echo esc_attr($td_bread_image); ?>')">
    
    	<div class="container">
   		
            <div class="row">
            
            	<div class="col-md-6">
            
                	<h1 class="section-title" style="color:<?php if (empty($td_bread_color)) { echo "#fff"; } else { echo esc_attr($td_bread_color); } ?>"><?php the_archive_title(); ?></h1>
                
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
			
			if ( have_posts() ) : 

				while ( have_posts() ) : the_post();
	
					get_template_part( 'content', get_post_format() );
	
				endwhile;

			else :
			
				get_template_part( 'content', 'none' );
	
			endif;
			
			echo paginate_links(); 
			
			?>
   
		</div>
        
        <div class="col-md-3">
	
			<?php dynamic_sidebar( 'sidebar' ); ?>
        
		</div>
    
    </div>
    
</div>

<?php get_footer(); ?>
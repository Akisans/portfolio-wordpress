<?php
/**
 * The main template file
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

	<div class="blog-header" style="<?php if (empty($td_bread_image)) { echo 'background-color:#2d2a2f !important;'; } ?>background:url('<?php echo esc_attr($td_bread_image); ?>')">
    
    	<div class="container">
   		
            <div class="row">
            
            	<div class="col-md-6">
            
                	<h1 class="section-title" style="color:<?php if (empty($td_bread_color)) { echo "#fff"; } else { echo esc_attr($td_bread_color); } ?>"><?php echo apply_filters('the_title',get_page( get_option('page_for_posts') )->post_title); ?></h1>
                
                </div>
                
                <div class="col-md-6">
                    
                	<p class="pull-right section-info"><ul id="breadcrumbs" class="breadcrumbs"><li class="blog-bread"><?php echo apply_filters('the_title',get_page( get_option('page_for_posts') )->post_title); ?></li></ul><?php the_breadcrumb(); ?></p>
                
                </div>
                
            </div>
        
        </div>
        
	</div>
    
    <?php } ?>
    
    <div class="container blog-content">

        <div class="row">
        
            <div class="col-md-9">
    
                <?php if ( have_posts() ) : ?>
            
                    <?php while ( have_posts() ) : the_post(); ?>
            
                        <?php get_template_part( 'content', get_post_format() ); ?>
                        
                    <?php endwhile; ?>
            
                <?php else : ?>
                    
                    <?php get_template_part( 'content', 'none' ); ?>
                        
                <?php endif; ?>
                
                <div class="blog-pagination">
                
                	<?php echo paginate_links(); ?>
            
            	</div>
            
            </div>
            
            <div class="col-md-3">
	
				<?php 
                                
                    if ( is_active_sidebar( 'sidebar' ) ) { 
                                    
                        dynamic_sidebar( 'sidebar' ); 
                                    
                    } 
                                
                ?>
        
			</div>
      
        </div><!-- /.row -->
        
	</div><!-- /.container -->
 
<?php get_footer(); ?>
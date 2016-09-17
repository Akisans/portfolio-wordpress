<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Axes
 * @since Axes 1.0
 */

get_header(); ?>

	<div id="container">
    
		<div class="row">
        
        	<div class="col-md-12">
            
                <section class="error-404 not-found">
                    <header class="page-header">
                        <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'axes' ); ?></h1>
                    </header><!-- .page-header -->
    
                    <div class="page-content">
                        <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'axes' ); ?></p>
    
                        <?php get_search_form(); ?>
                    </div><!-- .page-content -->
                </section><!-- .error-404 -->   
            
			</div>
            
		</div>
        
	</div> 

<?php get_footer(); ?>

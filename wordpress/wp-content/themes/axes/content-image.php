<?php
/**
 * The default template for displaying content
 *
 * Used for image post format.
 *
 * @package WordPress
 * @subpackage Axes
 * @since Axes 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) : 
	
		the_post_thumbnail( 'post-thumbnail', array( 'class' => 'img-responsive') );
    
    else : ?>
    
        <img src="<?php echo get_template_directory_uri(); ?>/inc/images/post.gif" class="img-responsive" alt="<?php the_title(); ?>" />
        
	<?php endif; ?>  
    
	<div class="gray-bg">
   
        <header class="entry-header">
        
			<?php if ( is_single() ) : ?>
                
                <h3 class="entry-title"><?php the_title(); ?></h3>
                    
            <?php else : ?>
                
                <h3 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                    
            <?php endif; ?>
            
            <div class="entry-meta">
            
                <span class="entry-date"><?php the_time('j F, Y'); ?></span>
                
                <span class="entry-author"><?php the_author_posts_link(); ?></span> 
                
                <span class="entry-category"><?php the_category(); ?></span> 
                
                <span class="entry-comments"><a href="<?php comments_link(); ?>"><?php comments_number( 'no responses', 'one response', '% responses' ); ?></a></span>
                
            </div>
            
        </header>

        <div class="entry-content">
        
            <?php 
			
			the_content( __( 'Read More', 'axes' ) ); 
            
            wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'axes' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'axes' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
			
			?>
            
        </div>

        <footer class="entry-footer">
        
        	<div class="row">
        
            	<div class="col-md-12"><?php edit_post_link( __( 'Edit this post', 'axes' ), '<span class="edit-link">', '</span>' ); ?></div>
            
            </div>
            
		<?php if ( is_single() ) : ?>
            
            <div class="row">
            
                <div class="post-tags col-md-6"><?php the_tags( '<h6>Tags:</h6> ', ', ', '<br />' ); ?></div>
                
                <div class="post-share-buttons col-md-6"><h6>Share: </h6><a href="http://twitter.com/home?status='<?php get_the_title() ?>+<?php get_the_permalink() ?>"><span class="fa fa-twitter"></span></a><a href="http://www.facebook.com/share.php?u=<?php get_the_permalink() ?> /&title=<?php get_the_title() ?>"<span class="fa fa-facebook"></span></a><a href="https://plus.google.com/share?url=<?php get_the_permalink() ?>"><span class="fa fa-google-plus"></span></a></div>
            
            </div>
            
          	<div class="row">
          
            	<div class="post-author-card">
                
                    <div class="col-md-3">
                    
                    	<?php echo get_avatar( 95 ); ?>
                    
                    </div>
                    
                    <div class="col-md-9 pull-right">
                    
                    	<h6><?php the_author_meta('display_name'); ?></h6>
                    
                    </div>
                    
                    <div class="col-md-9 pull-right">
                    
                    	<?php the_author_meta('description'); ?> 
                    
                    </div>
                    
                    <div class="col-md-9 pull-right">
                    
                        <span class="author-email"><i class="fa fa-envelope"></i> <?php the_author_meta('user_email'); ?></span>
                        
                        <span class="author-website"><i class="fa fa-link"></i> <a href="<?php the_author_meta('user_url'); ?>"><?php the_author_meta('user_url'); ?></a></span>
                        
                    </div>
            	
                </div>
        	
            </div>        
            
        <?php endif; ?>    
            
        </footer>
        
        <?php 
		
		if ( is_single() ) : 
		
			comments_template();
			
		endif; ?>
    
	</div>

</article>
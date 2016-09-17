<?php
/**
 * The template for displaying quote post formats
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Axes 
 * @since Axes 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="gray-bg">

	<?php if ( is_single() ) : ?>
    
        <div class="format-quote-url">
        
            <div class="entry-content">
                    
                <?php the_content(); ?>
                    
            </div>
                
            <div class="format-quote-author">
                    
                - <?php the_title(); ?>
                        
            </div>
    
        </div>
        
        <div class="entry-meta">
                
            <span class="entry-date"><?php the_time('j F, Y'); ?></span>
                    
            <span class="entry-author"><?php the_author_posts_link(); ?></span> 
                    
            <span class="entry-category"><?php the_category(); ?></span> 
                    
            <span class="entry-comments"><a href="<?php comments_link(); ?>"><?php comments_number( 'no responses', 'one response', '% responses' ); ?></a></span>
                    
        </div>
    
    <?php else : ?>
    
        <div class="format-quote-url">
        
            <div class="entry-content">
                    
                <?php the_content(); ?>
                    
            </div>
                
            <div class="format-quote-author">
                    
                - <?php the_title(); ?>
                        
            </div>
    
        </div>
        
        <div class="entry-meta">
                
            <span class="entry-date"><?php the_time('j F, Y'); ?></span>
                    
            <span class="entry-author"><?php the_author_posts_link(); ?></span> 
                    
            <span class="entry-category"><?php the_category(); ?></span> 
                    
            <span class="entry-comments"><a href="<?php comments_link(); ?>"><?php comments_number( 'no responses', 'one response', '% responses' ); ?></a></span>
                    
        </div>
    
	<?php endif; ?>

</div>

</article>

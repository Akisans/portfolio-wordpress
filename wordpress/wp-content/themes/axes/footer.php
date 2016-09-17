<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage Axes
 * @since Axes 1.0
 */
	
?>

        	</div>
         
        </div> <!-- /.td-main -->
        
        <?php if ( is_active_sidebar( 'bottom-area' ) ) { ?>
        
        <div class="td-bottom">
        
        	<div class="container">
            
            	<div class="row">
           
					<?php dynamic_sidebar( 'bottom-area' ); ?>
       
                </div>
            
        	</div>
        
        </div>
        
        <?php } ?>
        
        <div class="td-footer">
        
            <div class="container footer">
            
                <div class="row">
                
                	<div class="col-md-12">
                    
                    	<div class="footer-social">
                
						<?php 
                            
                            if ( get_theme_mod('td_fb_link') != "" ) { echo '<a href="'. get_theme_mod('td_fb_link') .'" target="_blank"><i class="fa fa-facebook"></i></a>'; }
                            if ( get_theme_mod('td_twitter_link') != "" ) { echo '<a href="'. get_theme_mod('td_twitter_link') .'" target="_blank"><i class="fa fa-twitter"></i></a>'; } 
                            if ( get_theme_mod('td_dribbble_link') != "" ) { echo '<a href="'. get_theme_mod('td_dribbble_link') .'" target="_blank"><i class="fa fa-dribbble"></i></a>'; } 
                            if ( get_theme_mod('td_instagram_link') != "" ) { echo '<a href="'. get_theme_mod('td_instagram_link') .'" target="_blank"><i class="fa fa-instagram"></i></a>'; }
                            if ( get_theme_mod('td_google_plus_link') != "" ) { echo '<a href="'. get_theme_mod('td_google_plus_link') .'" target="_blank"><i class="fa fa-google-plus"></i></a>'; }
                            if ( get_theme_mod('td_behance_link') != "" ) { echo '<a href="'. get_theme_mod('td_behance_link') .'" target="_blank"><i class="fa fa-behance"></i></a>'; } 
                            if ( get_theme_mod('td_linkedin_link') != "" ) { echo '<a href="'. get_theme_mod('td_linkedin_link') .'" target="_blank"><i class="fa fa-linkedin"></i></a>'; } 
                            if ( get_theme_mod('td_flickr_link') != "" ) { echo '<a href="'. get_theme_mod('td_flickr_link') .'" target="_blank"><i class="fa fa-flickr"></i></a>'; }
                            if ( get_theme_mod('td_foursquare_link') != "" ) { echo '<a href="'. get_theme_mod('td_foursquare_link') .'" target="_blank"><i class="fa fa-foursquare"></i></a>'; } 
                            if ( get_theme_mod('td_skype_link') != "" ) { echo '<a href="'. get_theme_mod('td_skype_link') .'" target="_blank"><i class="fa fa-skype"></i></a>'; } 
                            if ( get_theme_mod('td_youtube_link') != "" ) { echo '<a href="'. get_theme_mod('td_youtube_link') .'" target="_blank"><i class="fa fa-youtube"></i></a>'; } 
                            if ( get_theme_mod('td_vimeo_link') != "" ) { echo '<a href="'. get_theme_mod('td_vimeo_link') .'" target="_blank"><i class="fa fa-vimeo-square"></i></a>'; } 
                            if ( get_theme_mod('td_pinterest_link') != "" ) { echo '<a href="'. get_theme_mod('td_pinterest_link') .'" target="_blank"><i class="fa fa-pinterest"></i></a>'; } 
                            if ( get_theme_mod('td_reddit_link') != "" ) { echo '<a href="'. get_theme_mod('td_reddit_link') .'" target="_blank"><i class="fa fa-reddit"></i></a>'; } 
                            if ( get_theme_mod('td_git_link') != "" ) { echo '<a href="'. get_theme_mod('td_git_link') .'" target="_blank"><i class="fa fa-git"></i></a>'; } 
                            
                        ?>
                        
                        </div>
                
                        <div class="footer-info">
                        
                            <?php if ( get_theme_mod( 'tdgr_footer_copyrights' ) == '' ) { echo "Copyright &copy; Axes 2015"; } else { echo get_theme_mod( 'tdgr_footer_copyrights' ); } ?>
                                    
                        </div>
                    
                    </div>
                    
                </div><!-- /.row -->
                
            </div><!-- /.container -->
            
       </div> <!-- /.td-footer -->
       
    </div><!-- /#wrapper -->
    
	<div id="back-to-top">
    
		<a class="backToTop" href="#wrapper"><i class="fa fa-angle-up"></i></a>
            
	</div>
    
    <?php wp_footer(); ?>
    
</body>

</html>
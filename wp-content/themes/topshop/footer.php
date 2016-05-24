<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package topshop
 */
?>
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	
    <div class="site-footer-widgets">
        <div class="site-container">
            <ul>
                <?php dynamic_sidebar( 'topshop-site-footer' ); ?>
            </ul>
            <div class="clearboth"></div>
            
			
	        </div>
	    </div>
		
        <div class="clearboth"></div>
	</div>
	
</footer><!-- #colophon -->
<?php wp_footer(); ?>
</body>
</html>
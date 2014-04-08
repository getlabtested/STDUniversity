<?php //begin sidebar  ?>

<div id="sidebar_home">
		
	<ul id="sidebarhomewidgeted">
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Home') ) : ?>
    
		<li id="textwidget" class="widget">
            <h4><?php _e("Text Widget", 'studiopress'); ?></h4>
                <p><?php _e("This is an example of a text widget that you can place to describe your website. Use it as a way to get your site visitors interested, so they can click through and read more about it. This is a great place to spotlight important information that you want people to know about.", 'studiopress'); ?></p>
		</li>
        	
		<li id="recent-posts" class="widget">
            <h4><?php _e("Recent Posts", 'studiopress'); ?></h4>
                <ul>
                    <?php wp_get_archives('type=postbypost&limit=5'); ?> 
                </ul>
		</li>              		
	<?php endif; ?>	
	</ul>
</div>
<?php //end sidebar  ?>
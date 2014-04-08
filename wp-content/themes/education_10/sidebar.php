<?php //begin sidebar  ?>

<div id="sidebar">
		
	<ul id="sidebarwidgeted">
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>
	
		<li id="categories" class="widget">
            <h4>Quick Search</h4>
                <?php wp_dropdown_categories('show_option_none='.__('Select Category', 'studiopress').'&hierarchical=true'); ?>
                <script type="text/javascript"><!--
                    var dropdown = document.getElementById("cat");
                    function onCatChange() {
                        if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
                            location.href = "<?php echo get_option('home');
                ?>/?cat="+dropdown.options[dropdown.selectedIndex].value;
                        }
                    }
                    dropdown.onchange = onCatChange;
                --></script> 
		</li>
	
		<li id="archives" class="widget">
            <h4><?php _e("Archives", 'studiopress'); ?></h4>
                <ul>
                    <?php wp_get_archives('type=monthly'); ?>
                </ul>
		</li>
        
		<li id="links" class="widget">
            <h4><?php _e("Blogroll", 'studiopress'); ?></h4>
                <ul>
                    <?php wp_list_bookmarks('title_li=&categorize=0'); ?>
                </ul>
		</li>
	
		<li id="meta" class="widget">
            <h4><?php _e("Admin", 'studiopress'); ?></h4>
                <ul>
                    <?php wp_register(); ?>
                    <li><?php wp_loginout(); ?></li>
                    <li><a href="http://www.wordpress.org/">WordPress</a></li>
                    <?php wp_meta(); ?>
                    <li><a href="http://validator.w3.org/check?uri=referer">XHTML</a></li>
                </ul>
		</li>
                		
	<?php endif; ?>
	
	</ul>
	

</div>

<?php //end sidebar  ?>
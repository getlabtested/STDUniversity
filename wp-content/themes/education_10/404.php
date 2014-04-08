<?php get_header(); ?>

<div id="content">

	<div id="contentleft">
	
		<div class="postarea">
	
		<?php include(TEMPLATEPATH."/breadcrumb.php");?>
			
			<h1><?php _e("We're sorry, that page was not found - Error 404", 'studiopress'); ?></h1>
			<p>&nbsp;</p>
			<p>
				<strong><?php _e("Don't worry though!", 'studiopress'); ?></strong> <?php _e("A few tips for you to find it:", 'studiopress'); ?>
			</p>
			<ol>
				<li>
					<strong><?php _e("Search", 'studiopress'); ?></strong> <?php _e("for it", 'studiopress'); ?>:<br/>
					<form action="<?php bloginfo('siteurl');?>">
						<input type="text" name="s" id="searchbox"/> <input type="submit" id="searchbutton" value="<?php _e("Search", 'studiopress'); ?>"/>
					</form>
				</li>
				<li>
					<strong><?php _e("If you typed in a URL...", 'studiopress'); ?></strong> <?php _e("make sure the spelling, cApitALiZaTiOn, and punctuation are correct. Then try reloading the page.", 'studiopress'); ?>
				</li>
				<li>
					<p><?php _e("Search the <strong>site archives</strong> by page, month, or category:", 'studiopress'); ?></p>
					<strong><?php _e("by page:", 'studiopress'); ?></strong>
						<ul>
							<?php wp_list_pages('title_li='); ?>
						</ul>

					<strong><?php _e("by month:", 'studiopress'); ?></strong>
						<ul>
							<?php wp_get_archives('type=monthly'); ?>
						</ul>

					<strong><?php _e("by category:", 'studiopress'); ?></strong>
						<ul>
							<?php wp_list_cats('sort_column=name'); ?>
						</ul>
				</li>
				<li>
					<strong><?php _e("Start over again", 'studiopress'); ?></strong> <?php _e("at the", 'studiopress'); ?> <a href="<?php bloginfo('siteurl');?>"><?php _e("homepage", 'studiopress'); ?></a>
				</li>
			</ol>								
		</div>
		
	</div>
	
<?php get_sidebar(); ?>
		
</div>

<?php get_footer(); ?>
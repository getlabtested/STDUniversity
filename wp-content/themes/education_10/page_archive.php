<?php
/*
Template Name: Archive
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="contentleft">

		<div class="postarea">
		
		<?php include(TEMPLATEPATH."/breadcrumb.php");?>
				
				<h1><?php _e("Site Archives", 'studiopress'); ?></h1><br />
				
				<div class="archive">
		
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
							<?php wp_list_categories('sort_column=name&title_li='); ?>
						</ul>
		
				</div>
				
				<div class="archive">
					
					<strong><?php _e("by post:", 'studiopress'); ?></strong>
						<ul>
							<?php wp_get_archives('type=postbypost&limit=100'); ?> 
						</ul>
				</div>
			
			</div>
		
	</div>
	
<?php get_sidebar(); ?>
		
</div>

<?php get_footer(); ?>
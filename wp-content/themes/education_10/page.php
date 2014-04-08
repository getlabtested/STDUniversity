<?php get_header(); ?>

<div id="content">

	<div id="contentleft">
	
		<div class="postarea">
	
		<?php include(TEMPLATEPATH."/breadcrumb.php");?>
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1><br />
		
			<?php the_content(__('Read more', 'studiopress'));?><div class="clear"></div><?php edit_post_link(__('(Edit)', 'studiopress'), '', ''); ?>
			<?php endwhile; else: ?>
			
			<p><?php _e('Sorry, no posts matched your criteria.', 'studiopress'); ?></p><?php endif; ?>
		
		</div>
		
	</div>
	
<?php get_sidebar(); ?>
		
</div>

<?php get_footer(); ?>
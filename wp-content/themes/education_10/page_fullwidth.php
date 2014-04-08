<?php
/*
Template Name: Full Width
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="contentwide">
	
		<div class="postareawide">
	
		<?php sp_breadcrumb(__('Home', 'studiopress'), '/','<div class="breadcrumbwide">','</div>'); ?>
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1><br />
		
			<?php the_content(__('Read more', 'studiopress'));?><div style="clear:both;"></div><?php edit_post_link(__('(Edit)', 'studiopress'), '', ''); ?>
			<?php endwhile; else: ?>
			
			<p><?php _e('Sorry, no posts matched your criteria.', 'studiopress'); ?></p><?php endif; ?>
		
		</div>
		
	</div>
			
</div>

<?php // The main column ends  ?>

<?php get_footer(); ?>
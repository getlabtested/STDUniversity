<?php get_header(); ?>

<div id="content">

	<div id="contentleft">

		<div class="postarea">
	
		<?php include(TEMPLATEPATH."/breadcrumb.php");?>
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			
			<div class="date">
			
				<div class="dateleft">
					<p><span class="time"><?php the_time('F j, Y'); ?></span> <?php _e("by", 'studiopress'); ?> <?php the_author_posts_link(); ?> &nbsp;<?php edit_post_link(__('(Edit)', 'studiopress'), '', ''); ?><br /> <?php _e("Filed under", 'studiopress'); ?> <?php the_category(', ') ?></p> 
				</div>
				
				<div class="dateright">
					<p><span class="icomment"><a rel="nofollow" href="<?php the_permalink(); ?>#respond"><?php comments_number(__('Leave a Comment', 'studiopress'), __('1 Comment', 'studiopress'), __('% Comments', 'studiopress')); ?></a></span></p> 
				</div>
				
			</div>
			
			<div class="clear"></div>

			<?php the_content(__('Read more', 'studiopress'));?>
			
			<div class="clear"></div>
			
			<div class="postmeta">
				<p><span class="tags"><?php _e("Tags:"); ?> <?php the_tags('') ?></span></p>
			</div>
		 			
			<!--
			<?php trackback_rdf(); ?>
			-->
			
			<?php endwhile; else: ?>
			
			<p><?php _e('Sorry, no posts matched your criteria.', 'studiopress'); ?></p><?php endif; ?>
			
		</div>
			
		<div class="comments">
			<?php comments_template('',true); ?>
		</div>
		
	</div>
	
<?php get_sidebar(); ?>
		
</div>

<?php get_footer(); ?>
<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="contentleft">
	
		<div class="postarea">
	
		<?php include(TEMPLATEPATH."/breadcrumb.php");?>
				
			<?php $page = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("cat=".get_theme_mod('blog_cat')."&showposts=".get_theme_mod('blog_cat_num')."&paged=$page"); while ( have_posts() ) : the_post() ?>
            
			<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				
			<div class="date">
			
				<div class="dateleft">
					<p><span class="time"><?php the_time('F j, Y'); ?></span> <?php _e("by", 'studiopress'); ?> <?php the_author_posts_link(); ?> &nbsp;<?php edit_post_link(__('(Edit)', 'studiopress'), '', ''); ?></p> 
				</div>
				
				<div class="dateright">
					<p><span class="icomment"><a rel="nofollow" href="<?php the_permalink(); ?>#comments"><?php comments_number(__('Leave a Comment', 'studiopress'), __('1 Comment', 'studiopress'), __('% Comments', 'studiopress')); ?></a></span></p> 
				</div>
				
			</div>
				
			<?php the_excerpt(); ?>
			
			<div class="clear"></div>
				
			<div class="postmeta2">
				<?php _e("Filed Under: ", 'studiopress'); ?><?php the_category(', ') ?><br />
				<?php _e("Tagged:", 'studiopress'); ?> <?php the_tags('') ?>
			</div>
							
			<?php endwhile; ?>
			
			<p><?php posts_nav_link(); ?></p>
		
		</div>
		
	</div>
	
<?php get_sidebar(); ?>
		
</div>

<?php get_footer(); ?>
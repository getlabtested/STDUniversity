<?php get_header(); ?>

<div id="content">

	<div id="homepage">
    
    	<?php /*Check for the 'gallery_styles' function. If it's there, then include it. If not, do nothing*/ ?>
		<?php if (function_exists('gallery_styles')) : ?>
		
        <div id="homepagetop">
			
            <div class="featuredtop">
            
				<?php include (ABSPATH . '/wp-content/plugins/featured-content-gallery/gallery.php'); ?>
                
			</div>
            
		</div>
        
		<?php endif; ?>
									
			<div class="homepagenews">

<div id="rotator">
  <ul>
    <li class="show">
    <a href="javascript:void(0)">
    <img src="images/college-faculty-professor.jpg" width="400" height="300"  alt="pic1" />
    </a>
    </li>
    <li>
    <a href="javascript:void(0)">
    <img src="images/red-blood-cells.jpg" width="400" height="300"  alt="pic2" />
    </a>
    </li>
    <li>
    <a href="javascript:void(0)">
    <img src="images/university-college-campus.jpg" width="400" height="300"  alt="pic3" />
    </a>
    </li>
    <li>
    <a href="http://stduniversity.com/departments/film">
    <img src="images/the-omission.jpg" width="400" height="300"  alt="pic4" />
    </a>
    </li>
  </ul>
</div>

<style>
/* rotator in-page placement */
    div#rotator {
	position:relative;
	height:345px;
	margin-left: 15px;
}
/* rotator css */
	div#rotator ul li {
	float:left;
	position:absolute;
	list-style: none;
}
/* rotator image style */	
	div#rotator ul li img {
	border:1px solid #ccc;
	padding: 4px;
	background: #FFF;
}
    div#rotator ul li.show {
	z-index:500;
}

</style>
			<h3><?php $featcat = cat_id_to_name(get_theme_mod('featured_top_left')); echo $featcat; ?></h3>
                
				<?php $recent = new WP_Query("cat=".get_theme_mod('featured_top_left')."&showposts=".get_theme_mod('featured_top_left_num')); while($recent->have_posts()) : $recent->the_post();?>
				<?php if( get_post_meta($post->ID, "thumb", true) ): ?>
				<a href="<?php the_permalink() ?>" rel="bookmark"><img class="thumb" src="<?php bloginfo('template_directory'); ?>/tools/timthumb.php?src=<?php echo get_post_meta($post->ID, "thumb", $single = true); ?>&amp;h=<?php echo get_theme_mod('featured_top_left_thumb_height'); ?>&amp;w=<?php echo get_theme_mod('featured_top_left_thumb_width'); ?>&amp;zc=1" alt="<?php the_title(); ?>" /></a>	
				<?php else: ?>
				<?php endif; ?>					
                
				<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<?php the_content_limit(225, ""); ?>
                <a rel="nofollow" href="<?php the_permalink() ?>"><?php _e("Read more of this article", 'studiopress'); ?></a>
				
				<hr/>
				
				<?php endwhile; ?>
                
				<p class="textright"><b><a href="<?php echo get_category_link(get_theme_mod('featured_top_left')); ?>" rel="bookmark"><?php _e("Read More Posts in", 'studiopress'); ?> <?php echo $featcat; ?></a></b></p>
								
			</div>			
						
	</div>
    
<?php include(TEMPLATEPATH."/sidebar_home.php");?>
	
<?php get_sidebar(); ?>
		
</div>

<?php get_footer(); ?>
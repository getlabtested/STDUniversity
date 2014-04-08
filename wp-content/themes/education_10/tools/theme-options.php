<?php
/*
Plugin Name: Theme Options
Author: Nathan Rice
Author URI: http://www.nathanrice.net/

NOTE: this file requires WordPress 2.7+ to function
*/
$settings = 'mods_'.get_current_theme(); // do not change!

$defaults = array( // define our defaults
		'header_blog_title' => 'Image',
		'featured_top_left' => 1,
		'featured_top_left_num' => 3,
		'featured_top_left_thumb_width' => 100,
		'featured_top_left_thumb_height' => 100,
		'blog_cat' => 1,
		'blog_cat_num' => 5 // <-- no comma after the last option
);

//	push the defaults to the options database,
//	if options don't yet exist there.
add_option($settings, $defaults, '', 'yes');

/*
///////////////////////////////////////////////
This section hooks the proper functions
to the proper actions in WordPress
\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
*/
//	this function registers our settings in the db
add_action('admin_init', 'register_theme_settings');
function register_theme_settings() {
	global $settings;
	register_setting($settings, $settings);
}
//	this function adds the settings page to the Appearance tab
add_action('admin_menu', 'add_theme_options_menu');
function add_theme_options_menu() {
	add_submenu_page('themes.php', 'Education '.__('Theme Options','studiopress'), 'Education '.__('Theme Options','studiopress'), 8, 'theme-options', 'theme_settings_admin');
}

/*
///////////////////////////////////////////////
This section handles all the admin page
output (forms, update notifications, etc.)
\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
*/
function theme_settings_admin() { ?>
<?php theme_options_css_js(); ?>
<div class="wrap">
<?php
	// display the proper notification if Saved/Reset
	global $settings, $defaults;
	if(get_theme_mod('reset')) {
		echo '<div class="updated fade" id="message"><p>'.__('Theme Options', 'studiopress').' <strong>'.__('RESET TO DEFAULTS', 'studiopress').'</strong></p></div>';
		update_option($settings, $defaults);
	} elseif($_REQUEST['updated'] == 'true') {
		echo '<div class="updated fade" id="message"><p>'.__('Theme Options', 'studiopress').' <strong>'.__('SAVED', 'studiopress').'</strong></p></div>';
	}
	// display icon next to page title
	screen_icon('options-general');
?>
	<h2><?php echo get_current_theme() . ' '; _e('Theme Options', 'studiopress'); ?></h2>
	<form method="post" action="options.php">
	<?php settings_fields($settings); // important! ?>
	
	<?php // first column ?>
	<div class="metabox-holder">
		<div class="postbox">
		<h3><?php _e("Header Blog Title"); ?></h3>
			<div class="inside">
				<p><?php _e("Select from the following:", 'studiopress'); ?><br />
				<select name="<?php echo $settings; ?>[header_blog_title]">
					<option value="Image" <?php selected('Image', get_theme_mod('header_blog_title')); ?>><?php _e("Use an image logo", 'studiopress'); ?></option>
					<option value="Text" <?php selected('Text', get_theme_mod('header_blog_title')); ?>><?php _e("Use dynamic text", 'studiopress'); ?></option>
				</select></p>
			</div>
		</div>
		
		<div class="postbox">
		<h3><?php _e("Homepage Featured Left", 'studiopress'); ?></h3>
			<div class="inside">
				<p><?php _e("Select which category you want displayed:", 'studiopress'); ?><br />
    			<?php wp_dropdown_categories(array('selected' => get_theme_mod('featured_top_left'), 'name' => $settings.'[featured_top_left]', 'orderby' => 'Name' , 'hierarchical' => 1, 'hide_empty' => '0' )); ?></p>
				
				<p><?php _e("Number of posts to show:", 'studiopress'); ?><br />
				<input type="text" name="<?php echo $settings; ?>[featured_top_left_num]" value="<?php echo get_theme_mod('featured_top_left_num'); ?>" size="3" /></p>
				
				<p><?php _e("Thumbnail dimensions (Width x Height)", 'studiopress'); ?><br />
				<input type="text" name="<?php echo $settings; ?>[featured_top_left_thumb_width]" value="<?php echo get_theme_mod('featured_top_left_thumb_width'); ?>" size="3" /> x <input type="text" name="<?php echo $settings; ?>[featured_top_left_thumb_height]" value="<?php echo get_theme_mod('featured_top_left_thumb_height'); ?>" size="3" /></p>
			</div>
		</div>
        
		<div class="postbox">
		<h3><?php _e("Blog Page Template", 'studiopress'); ?></h3>
			<div class="inside">
				<p><?php _e("Select which category you want displayed:", 'studiopress'); ?><br />
    			<?php wp_dropdown_categories(array('selected' => get_theme_mod('blog_cat'), 'name' => $settings.'[blog_cat]', 'orderby' => 'Name' , 'hierarchical' => 1, 'show_option_all' => __("All Categories", 'studiopress'), 'hide_empty' => '0' )); ?></p>
				
				<p><?php _e("Number of Posts to Show:", 'studiopress'); ?><br />
				<input type="text" name="<?php echo $settings; ?>[blog_cat_num]" value="<?php echo get_theme_mod('blog_cat_num'); ?>" size="3" /></p>
			</div>
		</div>
		
		<p class="submit">
		<input type="submit" class="button-primary" value="<?php _e('Save Settings', 'studiopress') ?>" />
		<input type="submit" class="button-highlighted" name="<?php echo $settings; ?>[reset]" value="<?php _e('Reset Settings', 'studiopress'); ?>" />
		</p>
                
	</div>
    
	<!--end first column-->

	</form>

</div><!--end .wrap-->
<?php }

// add CSS and JS if necessary
function theme_options_css_js() {
echo <<<CSS

<style type="text/css">
	.metabox-holder { 
		width: 350px; float: left;
		margin: 0; padding: 0 10px 0 0;
	}
	.metabox-holder .postbox .inside {
		padding: 0 10px;
	}
</style>

CSS;
echo <<<JS

<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".fade").fadeIn(1000).fadeTo(1000, 1).fadeOut(1000);
});
</script>

JS;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes('xhtml'); ?>>
<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<link rel="Shortcut Icon" href="<?php echo bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<!-- jquery tools CDN access -->
<script src="http://cdn.jquerytools.org/1.1.2/jquery.tools.min.js"></script>
<script type="text/javascript"><!--//--><![CDATA[//><!--
sfHover = function() {
	if (!document.getElementsByTagName) return false;
	var sfEls = document.getElementById("nav").getElementsByTagName("li");

	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);
//--><!]]></script>

<script type="text/javascript">

function theRotator() {
	//Set the opacity of all images to 0
	$('div#rotator ul li').css({opacity: 0.0});
	
	//Get the first image and display it (gets set to full opacity)
	$('div#rotator ul li:first').css({opacity: 1.0});
		
	//Call the rotator function to run the slideshow, 6000 = change to next image after 6 seconds
	setInterval('rotate()',6000);
	
}

function rotate() {	
	//Get the first image
	var current = ($('div#rotator ul li.show')?  $('div#rotator ul li.show') : $('div#rotator ul li:first'));

	//Get next image, when it reaches the end, rotate it back to the first image
	var next = ((current.next().length) ? ((current.next().hasClass('show')) ? $('div#rotator ul li:first') :current.next()) : $('div#rotator ul li:first'));	
	
	//Set the fade in effect for the next image, the show class has higher z-index
	next.css({opacity: 0.0})
	.addClass('show')
	.animate({opacity: 1.0}, 1000);

	//Hide the current image
	current.animate({opacity: 0.0}, 1000)
	.removeClass('show');
	
};

$(document).ready(function() {		
	//Load the slideshow
	theRotator();
});

</script>
</head>

<body><div><a id="top"></a></div>

<div id="wrap">

	<div id="topnavbar">
	
		<div class="topnavbarleft">
			<p><?php echo date("l, F jS, Y"); ?></p>
		</div>
        
		<div class="topnavbarright">
			<p>
				<a class="rsslink" rel="nofollow" href="<?php bloginfo('rss_url'); ?>"><?php _e("News Feed", 'studiopress'); ?></a>
				<a class="rsslink" rel="nofollow" href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e("Comments", 'studiopress'); ?></a>
			</p>
		</div>

	</div>

<div id="header">

	<div class="headerleft" <?php if(get_theme_mod('header_blog_title') != 'Text') { echo 'id="imageheader"'; } ?>>
		<?php
			if (is_home()) {
				echo '<h1><a href="'.get_option('home').'/">'.get_bloginfo('name').'</a></h1>';
			} else {
				echo '<h4><a href="'.get_option('home').'/">'.get_bloginfo('name').'</a></h4>';
			}
		?>
       <p><?php bloginfo('description'); ?></p>
       
       </div>
	<!--
	<?php // To define the 468x60 ad, go to your WP dashboard and go to Appearance > Widgets. Select 468x60 Header Banner and then enter your add code into a text widget ?>
		
	<div class="headerright">
        <ul id="headerwidgeted">
       		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('468x60 Header Banner') ) : ?>  
            <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/468x60.gif" alt="<?php _e("Advertisement", 'studiopress'); ?>" /></a></li>
            <?php endif; ?>
        </ul>
	</div>
-->
</div>

<div id="navbar">

	<div id="navbarleft">
		<ul id="nav">
			<?php if (is_home()) { ?>
				<li class="current_page_item"><a rel="nofollow" href="<?php echo get_option('home'); ?>"><?php _e("Home", 'studiopress'); ?></a></li>
            <?php } else { ?>
				<li><a rel="nofollow" href="<?php echo get_option('home'); ?>"><?php _e("Home", 'studiopress'); ?></a></li>
            <?php } ?>    
     		<?php wp_list_pages('title_li=&depth=4&sort_column=menu_order'); ?>
		</ul>
	</div>
	
	<div id="navbarright">
		<form id="searchform" method="get" action="<?php bloginfo('url'); ?>/">
			<div>
				<input type="text" value="<?php _e("Search this website...", 'studiopress'); ?>" name="s" id="searchbox" onfocus="if (this.value == '<?php _e("Search this website...", 'studiopress'); ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e("Search this website...", 'studiopress'); ?>';}" />
				<input type="submit" id="searchbutton" value="<?php _e("GO", 'studiopress'); ?>" />
			</div>
		</form>
	</div>
	
	
    
</div>

<div class="clear"></div>
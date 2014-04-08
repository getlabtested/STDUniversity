<?php 

// Uncomment this if you want to test your localization, and make sure the test_localization function return your locale
// function test_localization( $locale ) {
// 	return "nl_NL";
// }
// add_filter('locale','test_localization');

load_theme_textdomain('studiopress', TEMPLATEPATH.'/languages/');

add_filter('comments_template', 'legacy_comments');

function legacy_comments($file) {

	if(!function_exists('wp_list_comments')) : // WP 2.7-only check
		$file = TEMPLATEPATH . '/legacy.comments.php';
	endif;

	return $file;
}

// Turn a category ID to a Name
function cat_id_to_name($id) {
	foreach((array)(get_categories()) as $category) {
    	if ($id == $category->cat_ID) { return $category->cat_name; break; }
	}
}

// include the theme options
include(TEMPLATEPATH."/tools/theme-options.php");

// include breadcrumb code
include(TEMPLATEPATH."/tools/breadcrumbs.php");

if ( function_exists('register_sidebars') )
	register_sidebar(array('name'=>'Sidebar','before_title'=>'<h4>','after_title'=>'</h4>'));
	register_sidebar(array('name'=>'Sidebar Home','before_title'=>'<h4>','after_title'=>'</h4>'));
	register_sidebar(array('name'=>'468x60 Header Banner',));

function the_content_limit($max_char, $more_link_text = '(more...)', $stripteaser = 0, $more_file = '') {
    $content = get_the_content($more_link_text, $stripteaser, $more_file);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    $content = strip_tags($content);

   if (strlen($_GET['p']) > 0) {
      echo "<p>";
      echo $content;
      echo "&nbsp;<a rel='nofollow' href='";
      the_permalink();
      echo "'>".__('Read More', 'studiopress')." &rarr;</a>";
      echo "</p>";
   }
   else if ((strlen($content)>$max_char) && ($espacio = strpos($content, " ", $max_char ))) {
        $content = substr($content, 0, $espacio);
        $content = $content;
        echo "<p>";
        echo $content;
        echo "...";
        echo "&nbsp;<a rel='nofollow' href='";
        the_permalink();
        echo "'>".$more_link_text."</a>";
        echo "</p>";
   }
   else {
      echo "<p>";
      echo $content;
      echo "&nbsp;<a rel='nofollow' href='";
      the_permalink();
      echo "'>".__("Read More", 'studiopress')." &rarr;</a>";
      echo "</p>";
   }
}

// Remove WP Generator for security reasons
remove_action('wp_head', 'wp_generator');
?>
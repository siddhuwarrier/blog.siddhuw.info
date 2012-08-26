<?php
// Set up Magazine Basic information
$bavotasan_theme_data = function_exists( 'wp_get_theme') ? wp_get_theme( 'magazine-basic' ) : get_theme_data( get_template_directory() . '/style.css' );
define( 'THEME_NAME', $bavotasan_theme_data['Name'] );
define( 'THEME_AUTHOR', $bavotasan_theme_data['Author'] );
define( 'THEME_HOMEPAGE', $bavotasan_theme_data['URI'] );
define( 'THEME_VERSION', trim( $bavotasan_theme_data['Version'] ) );
define( 'THEME_URL', get_template_directory_uri() );
define( 'THEME_TEMPLATE', get_template_directory() );
define( 'THEME_FILE', 'magazine-basic' );

// Make theme available for translation
// Translations can be filed in the /languages/ directory
load_theme_textdomain( THEME_FILE, THEME_TEMPLATE . '/languages' );

$locale = get_locale();
$locale_file = THEME_TEMPLATE . "/languages/$locale.php";
if ( is_readable( $locale_file ) )
	require_once( $locale_file );
	
$pbt_options = array (
	array(	"name" => __("Site Width", 'magazine-basic'),
			"desc" => __("Select the width of your site.", 'magazine-basic'),
			"id" => "site_width",
			"default" => "800"),
	
	array(  "name" => __("First Sidebar Width", 'magazine-basic'),
			"desc" => __("What would you like your first sidebar width to be?", 'magazine-basic'),
            "id" => "sidebar_width1",
			"default" => "180"),
			
	array(  "name" => __("Second Sidebar Width", 'magazine-basic'),
			"desc" => __("What would you like your second sidebar width to be?", 'magazine-basic'),
            "id" => "sidebar_width2",
			"default" => "180"),

	array(  "name" => __("Sidebar Location", 'magazine-basic'),
			"desc" => __("Where would you like your sidebars located?", 'magazine-basic'),
            "id" => "sidebar_location",
			"default" => "5"),

	array(  "name" => __("Header Logo", 'magazine-basic'),
			"desc" => __("If you would like to display a logo in the header, please enter the file URL path (link to).", 'magazine-basic'),
            "id" => "logo_header"),	
			
	array(  "name" => __("Logo or Blog Name Location", 'magazine-basic'),
			"desc" => __("Where do you want your Logo or Blog Name located?", 'magazine-basic'),
            "id" => "logo_location",
			"default" => "fl"),	
			
	array(  "name" => __("Tag Line", 'magazine-basic'),
			"desc" => __("Would you like to display a tag line beneath your blog name/logo?", 'magazine-basic'),
            "id" => "tag_line",
			"default" => "1"),			
			
	array(  "name" => __("User Login", 'magazine-basic'),
			"desc" => __("Would you like to have a User Login section at the top of your site?", 'magazine-basic'),
            "id" => "user_login",
			"default" => "1"),

	array(  "name" => __("Post Layout", 'magazine-basic'),
			"desc" => __("How would you like your posts displayed on the front page?", 'magazine-basic'),
            "id" => "post_layout",
			"default" => "3"),

	array(  "name" => __("Display Dates", 'magazine-basic'),
			"desc" => __("Would you like to have dates displayed under your post titles?", 'magazine-basic'),
            "id" => "dates_cats",
			"default" => "on"),

	array(  "id" => "dates_posts",
			"default" => "on"),
			
	array(  "name" => __("Display Authors", 'magazine-basic'),
			"desc" => __("Would you like to have the author displayed under your post titles?", 'magazine-basic'),
            "id" => "authors_cats",
			"default" => "on"),

	array(  "id" => "authors_posts",
			"default" => "on"),			

	array(  "name" => __("Number of Posts", 'magazine-basic'),
			"desc" => __("How many posts would you like to appear on the front page?", 'magazine-basic'),
            "id" => "number_posts",
			"default" => "6"),

	array(  "name" => __("Excerpt or Content", 'magazine-basic'),
			"desc" => __("Do want to display the excerpt or the content on the front page?", 'magazine-basic'),
            "id" => "excerpt_content",
			"default" => 1),

	array(  "name" => __("Excerpt Word Limit", 'magazine-basic'),
			"desc" => __("How many words do you want to appear in your front page post excerpts?", 'magazine-basic'),           
			"id" => "excerpt_one",
			"default" => "55"),

	array(  "id" => "excerpt_two",
			"default" => "45"),
	array(  "id" => "excerpt_three",
			"default" => "30"),
			
	array(  "name" => __("SEO", 'magazine-basic'),
			"desc" => __("Turn this off if you are using an SEO plugin", 'magazine-basic'),
            "id" => "seo",
 			"default" => "1"),			

	array(  "name" => __("Site Description", 'magazine-basic'),
			"desc" => __("Add meta tag description (Excerpt used on single posts and pages)", 'magazine-basic'),
            "id" => "site_description"),

	array(  "name" => __("Keywords", 'magazine-basic'),
			"desc" => __("Add meta tag keywords, separate by comma (Tags are used on single posts)", 'magazine-basic'),
            "id" => "keywords"),
				
	array(  "name" => __("Google Analytics", 'magazine-basic'),
			"desc" => __("Add your Google Analytics code", 'magazine-basic'),
            "id" => "google_analytics"),
			
	array(  "id" => "header_ad",
			"default" => ""),
	
	array(  "name" => __("Header Ad", 'magazine-basic'),
			"desc" => __("Add your 468 x 60 header ad image and link here.", 'magazine-basic'),
            "id" => "headerad_img"),			

	array(  "id" => "headerad_link"),
	
	array(  "name" => __('Display "Latest Story"', 'magazine-basic'),
			"desc" => __('Would you like to display the "Latest Story" header on the front page?', 'magazine-basic'),
            "id" => "latest_story",
			"default" => "on"),
			
	array(  "name" => __("Display Dates", 'magazine-basic'),
			"desc" => __("Would you like to have dates displayed under your post titles?", 'magazine-basic'),
			"id" => "dates_index",
			"default" => "on"),																

	array(  "name" => __("Display Authors", 'magazine-basic'),
			"desc" => __("Would you like to have author displayed under your post titles?", 'magazine-basic'),
			"id" => "authors_index",
			"default" => "on"),

	array(  "name" => __("Custom Background", 'magazine-basic'),
			"desc" => __("Set up a custom background", 'magazine-basic'),
			"id" => "custom_background"),
			
	array(  "name" => __("Custom Nav Menus", 'magazine-basic'),
			"desc" => __("Set up a custom navigation menu", 'magazine-basic'),
			"id" => "custom_menus"),
			
	array(  "name" => __("Custom Widgets", 'magazine-basic'),
			"desc" => __("Add widgets to your sidebars", 'magazine-basic'),
			"id" => "custom_widgets")						
);

// setting up the $pbt_values variable
$pbt_values = get_option(THEME_FILE);
//delete_option(THEME_FILE);

function pbt_get_index($array, $index) {
  return isset($array[$index]) ? $array[$index] : null;
}

// CALL THEME OPTIONIS
function pbt_theme_option($var) {
	global $pbt_values;
	$val = pbt_get_index($pbt_values,$var);
	return $val;
}

// Set all default options
if(!$pbt_values) {
	foreach ($pbt_options as $default) {
		if(isset($default['id']) && isset($default['default'])) {
			$setdefaultvalues1[ $default['id'] ] = $default['default'];
		}
	}
	update_option(THEME_FILE, $setdefaultvalues1);
}

// Setting up the theme options CSS
$pbt_values = get_option(THEME_FILE);
if($pbt_values['site_width']) {
	$pbt_site = $pbt_values['site_width'];
	$pbt_sidebar = $pbt_values['sidebar_width1'];	
	$pbt_secondsidebar =  $pbt_values['sidebar_width2'];
	$pbt_sidewidget = $pbt_sidebar - 20;
	$pbt_sidewidget2 = $pbt_secondsidebar - 20;
	if(empty($pbt_secondsidebar)) {
		$pbt_content =  $pbt_site - $pbt_sidebar - 65;
	} else {
		$pbt_content =  $pbt_site - $pbt_sidebar - $pbt_secondsidebar - 88;		
	}
	update_option('pbt_content_width', $pbt_content);
} else {
	$pbt_site = 800;
	$pbt_sidebar = 180;
	$pbt_sidewidget = 160;
	$pbt_content = 560;
}

// Set the content width based on the theme's design and stylesheet.
if ( ! isset( $content_width ) )
	$content_width = $pbt_content;

function pbt_header_css() {
	global $pbt_site, $pbt_sidebar, $pbt_secondsidebar, $pbt_sidewidget, $pbt_sidewidget2, $pbt_content;
?>
<style type="text/css">
body { width: <?php echo $pbt_site; ?>px; }
#mainwrapper { width: <?php echo $pbt_site-20; ?>px; }
#sidebar { width: <?php echo $pbt_sidebar; ?>px; }
#sidebar .side-widget { width: <?php echo $pbt_sidewidget; ?>px; }
<?php if(!empty($pbt_secondsidebar)) { ?>
#secondsidebar { width: <?php echo $pbt_secondsidebar; ?>px; }
#secondsidebar .side-widget { width: <?php echo $pbt_sidewidget2; ?>px; }
<?php } ?>
#leftcontent, #twocol, #threecol, #threecol2, .commentlist { width: <?php echo $pbt_content; ?>px; }
#leftcontent img, .wp-caption { max-width: <?php echo $pbt_content; ?>px; }
#leftcontent .wp-caption img, #leftcontent .gallery-thumb img { max-width: <?php echo $pbt_content-12; ?>px; }
<!-- fix for IE & Safari -->
.threepost embed { width: <?php echo ($pbt_content*.29); ?>px !important; }
.twopost embed { width: <?php echo ($pbt_content*.46); ?>px !important; }
<!-- end fix for Safari -->
</style>
	<?php
}

// Ajax save function
function pbt_save_theme_callback() {
	if (!wp_verify_nonce($_POST['nonce'], 'bavotasan_nonce'))
		exit();
		
	$savevalues = array();
	
	$items = explode("&", $_POST['option']);

	foreach ($items as $value) {
		$key_value = explode("=",$value);
		$key = urldecode($key_value[0]);
		$value = esc_attr(urldecode($key_value[1]));
		if($key=="_wp_http_referer" || $key=="bavotasan_nonce") {
			// do nothing
		} else {
			$savevalues[$key] = $value; 
		}
	}
	update_option(THEME_FILE, $savevalues);
	die();
}
add_action('wp_ajax_save_theme_options', 'pbt_save_theme_callback');

function pbt_mytheme_add_admin() {
	wp_register_script('effects_js', THEME_URL.'/admin/js/effects.js', array( 'jquery' , 'jquery-ui-core' , 'jquery-ui-tabs' ),'',true);
	
	$themelayout = add_theme_page( THEME_FILE, THEME_NAME, 'manage_options', THEME_FILE, 'pbt_options');
	add_action( "admin_print_scripts-$themelayout", 'pbt_admin_css' );
}
// initialize the theme
add_action('admin_menu', 'pbt_mytheme_add_admin'); 

// load the js and css on theme options page
function pbt_admin_css() {
	echo '<link rel="stylesheet" href="'.THEME_URL.'/admin/css/admin-style.css" />'."\n";
	wp_enqueue_script('effects_js');
}

// Setting up the layout options page tabs
function pbt_options() { 
    global $pbt_options;
?>
<div id="arturowrap" class="wrap">
    <h2><?php echo THEME_NAME." ".__("Layout Options", 'magazine-basic'); ?></h2>
    <?php echo '<div id="message" class="updated fade" style="display: none;"><p><strong>'.THEME_NAME.' '.__("Options Saved", 'magazine-basic').'</strong></p></div>'."\n"; ?>
    <div id="poststuff" class="metabox-holder has-right-sidebar">
        <div id="side-info-column" class="inner-sidebar thinner">
            <a href="http://themes.bavotasan.com" target="_blank"><img src="<?php echo THEME_URL; ?>/admin/images/brand.png" class="bavota" alt="Themes by bavotasan.com" width="225" height="84" /></a>
            <a href="javascript:{}" id="savetheme"></a><div class="ajaxsave"></div>
            <br class="clear" />
            <div class="postbox thinner" id="themeresources">
            	<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php _e("Resources", 'magazine-basic'); ?></span></h3>
                <div class="inside">
                    <ul>
                        <li><a href="http://themes.bavotasan.com" target="_blank" title="Themes by bavotasan.com">Themes by bavotasan.com</a></li>
                        <li><a href="http://themes.bavotasan.com/support/" target="_blank" title="<?php _e('Support Forum', 'magazine-basic'); ?>"><?php _e('Support Forum', 'magazine-basic'); ?></a></li>
                        <li><a href="http://themes.bavotasan.com/affiliates" target="_blank" title="<?php _e('Affiliates Program', 'magazine-basic'); ?>"><?php _e('Affiliates Program', 'magazine-basic'); ?></a></li>
                        <li><a href="http://bavotasan.com" title="bavotasan.com" target="_blank">bavotasan.com</a></li>
                    </ul>
 
                </div>
            </div>                    
			<br class="clear" />
            <div class="postbox thinner" id="themeresources">
            	<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php _e("Donate", 'magazine-basic'); ?></span></h3>
                <div class="inside">
                    <p class="donate"><?php printf(__("A lot of hard work went into creating %s. If you would like to show your support, please use the donate link below.", 'magazine-basic'), "<strong>".THEME_NAME."</strong>"); ?><p>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="5745952">
                <input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>    
                </div>
            </div>
        </div> <!-- end of #side-info-column -->
    <form method="post" action="" id="themeform" class="themesbybavotasan">
        <div id="post-body" class="has-sidebar">
            <div id="post-body-content" class="has-sidebar-content thinmain">
                <div id='normal-sortables' class='meta-box-sortables'>
                    <div id="wrapper" class="arturo">
                        <div id="tabbed">
                        <ul class="tabs">
						<?php
                        $menuPages = array(
							__('Info', 'magazine-basic') =>'pbt_info', 
							__('Main', 'magazine-basic') =>'pbt_layout_options', 
							__('Header &amp; Footer', 'magazine-basic') =>'pbt_header_options', 
							__('Front Page', 'magazine-basic') =>'pbt_frontpage_options', 
							__('Sidebars', 'magazine-basic') =>'pbt_sidebars_options', 
							__('SEO', 'magazine-basic') =>'pbt_seo_options',
							__('Upgrade', 'magazine-basic') =>'pbt_upgrade'
						);
                        $x = 1;
                        foreach($menuPages as $menuPage => $pagefunction) {
                            echo '<li><a href="#tabbed-'.$x.'">'.$menuPage.'</a></li>';
                            $x++;
                        }
                        ?>
                        </ul>
                        <?php
                        $x = 1;
                        foreach($menuPages as $menuPage => $pagefunction) {
                            echo '<div class="tab-content" id="tabbed-'.$x.'">';
                            if($x>1 && $x<7) echo '<p class="openclose"><a href="#" class="openall">'.__("Open All", 'magazine-basic').' [+]</a><a href="#" class="closeall">'.__("Close All", 'magazine-basic').' [-]</a></p>';
                            $pagefunction();
                            echo '</div>';
                            $x++;
                        }	
                        ?>
                        </div>
                    </div> <!-- end of #wrapper -->
        		</div> <!-- end of #normal-sortables -->
        	</div> <!-- end of #post-body-content -->
        </div> <!-- end of #post-body -->
    </div> <!-- end of #poststuff -->
	<?php if(function_exists('wp_nonce_field')) wp_nonce_field('bavotasan_nonce', 'bavotasan_nonce'); ?>
    </form>
</div> <!-- end of #wrap -->
<?php
}

////////////////////////
//
// Default input boxes
//
///////////////////////


// TEXTAREA
function pbt_textAreaBox($rows = 4, $valueName, $valueDesc, $valueID) {
?>
<div class="postbox">
	<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $valueName; ?></span><small> - <?php echo $valueDesc; ?></small></h3>
	<div class="inside">
		<textarea name="<?php echo $valueID; ?>" cols="60" rows="<?php echo $rows; ?>"><?php echo decode_textarea(pbt_theme_option($valueID)); ?></textarea>
		<br class="clear" />
	</div>
</div>
<?php
}

// INPUT TEXT
function pbt_textBox($size = 50, $valueName, $valueDesc, $valueID, $label = null, $maxlength = null, $align = null, $color = false) {
?>
<div class="postbox">
    <div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $valueName; ?></span><small><?php if($valueDesc) echo " - ".$valueDesc; ?></small></h3>
    <div class="inside">
        <input type="text" name="<?php echo $valueID; ?>" size="<?php echo $size; ?>"<?php if($maxlength) echo ' maxlength="'.$maxlength.'"'; ?><?php if($align) echo ' class="'.$align.'"'; ?> value="<?php echo pbt_theme_option($valueID); ?>" /><?php if($label) echo '<label style="margin: 9px 0 0 5px;">'.$label.'</label>'; ?>
    <br class="clear" />
    </div>
</div>
<?php
}

// RADIO BUTTON
function pbt_radioBox( $numof = 2, $valueName, $valueDesc, $valueID, $labels = null, $defaults = null ) {

	$labels = ( empty( $labels ) ) ? array( __('Yes', 'magazine-basic'), __('No', 'magazine-basic') ) : $labels;
	$defaults = ( empty( $defaults ) ) ? array( 1, 2 ) : $defaults;
	?>

	<div class="postbox">
	    <div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $valueName; ?></span><small> - <?php echo $valueDesc; ?></small></h3>
	    <div class="inside">
		<?php 
		$i = 0;
	    for($x=1;$x<=$numof;$x++) {
			echo '<input  name="'.$valueID.'" type="radio" value="'.$defaults[$i].'"';
			checked( pbt_theme_option($valueID), $defaults[$i] );
	        echo ' />&nbsp;<label>'.$labels[$i].'</label>&nbsp;&nbsp;';
	    	$i++;
	    }
	    ?>
	    <br class="clear" />
	    </div>
	</div>
	
	<?php

}

#####################
##  the info page  ##
#####################

function pbt_info() { 
?>
    <img src="<?php echo THEME_URL; ?>/screenshot.png" alt="<?php echo THEME_NAME; ?>" class="theme" width="200" height="150" />
    <?php
    echo '<p><ul>
		<li><strong>'.__('Version', 'magazine-basic').':</strong> '.THEME_VERSION.'</li>
		<li><strong>'.__('Author', 'magazine-basic').':</strong> <a href="http://bavotasan.com/" target="_blank">'.THEME_AUTHOR.'</a></li>
		<li><strong>'.__('Built by', 'magazine-basic').':</strong> <a href="http://themes.bavotasan.com/" target="_blank">Themes by bavotasan.com</a></li>
		<li><strong>'.__('Theme home page', 'magazine-basic').':</strong> <a href="'.THEME_HOMEPAGE.'" target="_blank">'.THEME_NAME.'</a></li>
	</ul></p>'; 
    echo '<p>';
	printf(__("Thank you for downloading %s. Hope you enjoy using it!</p>", 'magazine-basic'), '<strong>'.THEME_NAME.'</strong>');
	echo '</p><p>';
	_e("There are tons of layout possibilities available with this theme, as well as a bunch of cool features that will surely help you get your site looking and working it's best.", 'magazine-basic');
	echo '</p>';
    echo '<p><a href="http://themes.bavotasan.com/support/discussion/17/how-to-customize-a-theme/" target="_blank">'; _e('How to Customize a Theme', 'magazine-basic');
	echo '</a><br />';
    echo '<a href="http://themes.bavotasan.com/manual/" target="_blank">'; _e('Instruction Manual', 'magazine-basic');
	echo '</a></p>';	
	echo '<p>';
    _e('If you have any questions, comments, or if you encounter a bug, please visit our <a href="http://support.bavotasan.com/" target="_blank">Support Forum</a> and let us know.', 'magazine-basic'); 
	echo '</p>';
}

########################
##  the upgrade page  ##
########################

function pbt_upgrade() {
   echo '<div class="upgrade">
   <div class="imgbox"><a href="http://themes.bavotasan.com/our-themes/premium-themes/magazine-premium/" target="_blank" title="Magazine Premium" class="img-wrap"><img
width="250" height="160" src="'.THEME_URL.'/admin/images/magpre.jpg" class="attachment-category wp-post-image" alt="" /></a>
<a href="http://demos.bavotasan.com/magazine-premium/" target="_blank" class="link" title="View Demo">';
	_e('View Demo', 'magazine-basic');
	echo '</a><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=c@bavotasan.com&item_name=Magazine Premium&item_number=wpt-map&amount=39.97&currency_code=CAD" target="_blank" class="link buy">';
	_e('Buy Now', 'magazine-basic');
	echo '</a><a href="http://themes.bavotasan.com/our-themes/premium-themes/magazine-premium/" target="_blank" class="link" title="More Info">';
	_e('More Info', 'magazine-basic');
	echo '</a>
</div>
<h4>Magazine Premium</h4>';

printf(__('Purchase %s for only $39.97 and get all these amazing features and more:', 'magazine-basic'), '<a href="http://themes.bavotasan.com/our-themes/premium-themes/magazine-premium/" target="_blank"><strong>Magazine Premium</strong></a>');
	echo '<ul>';
	echo '<li>'.__('Custom CSS editor', 'magazine-basic').'</li>';
	echo '<li>'.__('10 @font-face kits', 'magazine-basic').'</li>';
	echo '<li>'.__('Color options', 'magazine-basic').'</li>';
	echo '<li>'.__('Featured post slideshow', 'magazine-basic').'</li>';
	echo '<li>'.__('Category feeds to front page sections', 'magazine-basic').'</li>';
	echo '<li>'.__('Extended widgetized footer', 'magazine-basic').'</li>';
	echo '<li>'.__('Javascript enabled ad space', 'magazine-basic').'</li>';
	echo '</ul>';
	echo '</div>'; 
   echo '<div class="upgrade">
<div class="imgbox"><a href="http://themes.bavotasan.com/our-themes/premium-themes/magazine-flow/" target="_blank" title="Magazine Flow" class="img-wrap"><img
width="250" height="160" src="'.THEME_URL.'/admin/images/magflow.jpg" class="attachment-category wp-post-image" alt="" /></a>
<a href="http://demos.bavotasan.com/magazine-flow/" target="_blank" class="link" title="View Demo">';
	_e('View Demo', 'magazine-basic');
	echo '</a><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=c@bavotasan.com&item_name=Magazine Flow&item_number=wpt-mfl&amount=39.97&currency_code=CAD" target="_blank" class="link buy">';
	_e('Buy Now', 'magazine-basic');
	echo '</a><a href="http://themes.bavotasan.com/our-themes/premium-themes/magazine-flow/" target="_blank" class="link" title="More Info">';
	_e('More Info', 'magazine-basic');
	echo '</a>
</div>
<h4>Magazine Flow</h4>';

printf(__('Purchase %s for only $39.97 and get all these amazing features and more:', 'magazine-basic'), '<a target="_blank" href="http://themes.bavotasan.com/our-themes/premium-themes/magazine-flow/"><strong>Magazine Flow</strong></a>');
	echo '<ul>';
	echo '<li>'.__('Unique Front Page Grid Layout', 'magazine-basic').'</li>';
	echo '<li>'.__('Header Background Image Editor', 'magazine-basic').'</li>';
	echo '<li>'.__('Optional Author Box', 'magazine-basic').'</li>';
	echo '<li>'.__('10 @font-face kits', 'magazine-basic').'</li>';
	echo '<li>'.__('Color options', 'magazine-basic').'</li>';
	echo '<li>'.__('Extended widgetized footer', 'magazine-basic').'</li>';
	echo '<li>'.__('Javascript enabled ad space', 'magazine-basic').'</li>';
	echo '</ul>';	
	echo '<small>NOTE: Magazine Flow has a front page layout that differs from Magazine Basic.</small>';
	echo '</div>'; 
}

###############################
##  the layout options page  ##
###############################

function pbt_layout_options() {
	global $pbt_options;

	foreach ($pbt_options as $value) { 
		switch ( pbt_get_index($value,'id') ) {
	
			case "site_width":
				pbt_radioBox(2, $value['name'], $value['desc'], $value['id'], array( __('800px', 'magazine-basic'), __('1024px', 'magazine-basic')), array(800,1024));			
			break;
				
			case "dates_cats":
			?>
			
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<input name="<?php echo $value['id']; ?>" type="checkbox" <?php if(pbt_theme_option($value['id']) == "on") { echo " checked=\"checked\""; } ?> />&nbsp;<label><?php _e("Categories, Archives, Search Pages", 'magazine-basic'); ?></label>
					&nbsp;&nbsp;<input name="dates_posts" type="checkbox" <?php if(pbt_theme_option("dates_posts") == "on") { echo " checked=\"checked\""; } ?> />&nbsp;<label><?php _e("Single Posts", 'magazine-basic'); ?></label>
					<br class="clear" />
				</div>
			</div>
			<?php break;
	
			case "authors_cats":
			?>
			
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<input name="<?php echo $value['id']; ?>" type="checkbox" <?php if(pbt_theme_option($value['id']) == "on") { echo " checked=\"checked\""; } ?> />&nbsp;<label><?php _e("Categories, Archives, Search Pages", 'magazine-basic'); ?></label>
					&nbsp;&nbsp;<input name="authors_posts" type="checkbox" <?php if(pbt_theme_option("authors_posts") == "on") { echo " checked=\"checked\""; } ?> />&nbsp;<label><?php _e("Single Posts", 'magazine-basic'); ?></label>
				<br class="clear" />
				</div>
			</div>
			<?php break;
			
			case "custom_background": ?>
				<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
				<a href="<?php echo admin_url('themes.php?page=custom-background'); ?>"><?php _e('Go to Custom Background editor', 'magazine-basic'); ?></a>
                </div>
                </div>
        	<?php break;			
		} 
	}
}

###############################
##  the header options page  ##
###############################

function pbt_header_options() {
    global $pbt_options;

	foreach ($pbt_options as $value) { 
		switch ( pbt_get_index($value,'id') ) {
	
			case "logo_header":
			?>
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<input type="text" size="50" name="<?php echo $value['id']; ?>" value="<?php echo pbt_theme_option($value['id']); ?>" />
					<?php 
					echo '<div class="headerlogo"></div>';
					?> 
				<br class="clear" />
				</div>
			</div>
			<?php
			break;
			
			case "logo_location":
			?>
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<table>
						<tr>
							<td style="padding-right: 15px;">
								<img src="<?php echo THEME_URL; ?>/admin/images/logoleft.png" alt="" />
							</td>
							<td style="padding-right: 15px;">
								<img src="<?php echo THEME_URL; ?>/admin/images/logoright.png" alt="" />
							</td>
							<td style="padding-right: 15px;">
								<img src="<?php echo THEME_URL; ?>/admin/images/logomiddle.png" alt="" />
							</td>
						</tr>
						<tr>
							<td align="center" style="padding-right: 15px;">
								<input  name="<?php echo $value['id']; ?>" type="radio" value="fl"<?php if(pbt_theme_option($value['id']) == "fl") { echo " checked=\"checked\""; } ?> />
							</td>
							<td align="center" style="padding-right: 15px;">
								<input  name="<?php echo $value['id']; ?>" type="radio" value="fr"<?php if(pbt_theme_option($value['id']) == "fr") { echo " checked=\"checked\""; } ?> />
							</td>
							<td align="center" style="padding-right: 15px;">
								<input  name="<?php echo $value['id']; ?>" type="radio" value="aligncenter"<?php if(pbt_theme_option($value['id']) == "aligncenter") { echo " checked=\"checked\""; } ?> />
							</td>
						</tr>
					</table>
					<br class="clear" />
					</div>
			 </div>
			<?php break;			

			case "tag_line":
				pbt_radioBox(2, $value['name'], $value['desc'], $value['id']);
			break;

			case "user_login":
				pbt_radioBox(2, $value['name'], $value['desc'], $value['id']);
			break;

			case "headerad_img":
			?>
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<span id="searchHeader"><input type="text" name="<?php echo $value['id']; ?>" size="50" value="<?php echo pbt_theme_option($value['id']); ?>" /><label style="padding-top: 5px;">&nbsp;&laquo;&nbsp;<?php _e('Path to Ad Image', 'magazine-basic'); ?></label>
					<br style="clear:both;" />
					<input type="text" name="headerad_link" size="50" value="<?php echo pbt_theme_option('headerad_link'); ?>" /><label style="padding-top: 5px;">&nbsp;&laquo;&nbsp;<?php _e('Click-through Link', 'magazine-basic'); ?></label>
					<br style="clear:both;" />
					<input  name="header_ad" type="checkbox" <?php if(pbt_theme_option("header_ad")=="on") { echo ' checked="checked"'; } ?> />&nbsp;<label><?php _e('Display Header Ad', 'magazine-basic'); ?></label>
	</span>
					<br class="clear" />
				</div>
			</div>
			<?php break;	

			case "custom_menus": ?>
				<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
				<a href="<?php echo admin_url('nav-menus.php'); ?>"><?php _e('Go to Custom Menu editor', 'magazine-basic'); ?></a>
                </div>
                </div>
        	<?php break;					
		}
	}	
}

##########################################
## Display the front page options page ###
##########################################

function pbt_frontpage_options() {
    global $pbt_options;

	foreach ($pbt_options as $value) { 
		switch ( pbt_get_index($value,'id') ) {
	
			case "post_layout":
			?>
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<table>
						<tr>
							<td style="padding-right: 15px;">
								<img src="<?php echo THEME_URL; ?>/admin/images/option1.png" alt="Option 1" />
							</td>
							<td style="padding-right: 15px;">
								<img src="<?php echo THEME_URL; ?>/admin/images/option2.png" alt="Option 2" />
							</td>
							<td style="padding-right: 15px;">
								<img src="<?php echo THEME_URL; ?>/admin/images/option3.png" alt="Option 3" />
							</td>
							<td style="padding-right: 15px;">
								<img src="<?php echo THEME_URL; ?>/admin/images/option4.png" alt="Option 4" />
							</td>
						</tr>
						<tr>
							<td align="center" style="padding-right: 15px;">
	<input name="<?php echo $value['id']; ?>" type="radio" value="1"<?php if(pbt_theme_option($value['id'])=="1") { echo ' checked="checked"'; } ?> />&nbsp;<label><?php _e('Option', 'magazine-basic'); ?> 1</label>                            
							</td>
							<td align="center" style="padding-right: 15px;">
	<input name="<?php echo $value['id']; ?>" type="radio" value="2"<?php if(pbt_theme_option($value['id'])=="2") { echo ' checked="checked"'; } ?> />&nbsp;<label><?php _e('Option', 'magazine-basic'); ?> 2</label>
							</td>
							<td align="center" style="padding-right: 15px;">
	<input name="<?php echo $value['id']; ?>" type="radio" value="3"<?php if(pbt_theme_option($value['id'])=="3") { echo ' checked="checked"'; } ?> />&nbsp;<label><?php _e('Option', 'magazine-basic'); ?> 3</label>
							</td>
							<td align="center" style="padding-right: 15px;">
	<input name="<?php echo $value['id']; ?>" type="radio" value="4"<?php if(pbt_theme_option($value['id'])=="4") { echo ' checked="checked"'; } ?> />&nbsp;<label><?php _e('Option', 'magazine-basic'); ?> 4</label>
							</td>
						</tr>
					</table>           
					<br class="clear" />
				</div>
			</div>
	
			<?php 
			break;
	
			case "number_posts":
				pbt_textBox(2, $value['name'], $value['desc'], $value['id'], '', 2, 'center');			
			break;
			
			case "excerpt_content":
				pbt_radioBox(2, $value['name'], $value['desc'], $value['id'], array( __('Excerpt', 'magazine-basic'), __('Content', 'magazine-basic')));			
			break;	
	
			case "excerpt_one":
			?>
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<table class="rows">
					<tr>
					<th><label><?php _e('1 Col', 'magazine-basic'); ?>:</label></th>
					<th><label><?php _e('2 Col', 'magazine-basic'); ?>:</label></th>               
					<th><label><?php _e('3 Col', 'magazine-basic'); ?>:</label></th>
					</tr>	
					<tr>
					<td><input  name="<?php echo $value['id']; ?>" size="3" type="text" value="<?php echo pbt_theme_option($value['id']); ?>" /></td>
					<td><input  name="excerpt_two" size="3" type="text" value="<?php echo pbt_theme_option('excerpt_two'); ?>" /></td>
					<td><input  name="excerpt_three" size="3" type="text" value="<?php echo pbt_theme_option('excerpt_three'); ?>" /></td>
					</tr>
					</table>
					<br class="clear" />
				</div>
			</div>
			<?php
			break;	
			
			case "latest_story":
			?>
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<input  name="<?php echo $value['id']; ?>" type="checkbox"<?php if(pbt_theme_option($value['id']) == "on") { echo ' checked="checked"'; } ?> />&nbsp;<label><?php _e('Display "Latest Story"', 'magazine-basic'); ?></label>            
					<br class="clear" />
				</div>
			</div>
			<?php
			break;			

			case "dates_index":
			?>
			
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<input name="<?php echo $value['id']; ?>" type="checkbox" <?php if(pbt_theme_option($value['id']) == "on") { echo " checked=\"checked\""; } ?> />&nbsp;<label><?php _e("Front Page", 'magazine-basic'); ?></label>
					<br class="clear" />
				</div>
			</div>
			<?php break;
	
			case "authors_index":
			?>
			
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<input name="<?php echo $value['id']; ?>" type="checkbox" <?php if(pbt_theme_option($value['id']) == "on") { echo " checked=\"checked\""; } ?> />&nbsp;<label><?php _e("Front Page", 'magazine-basic'); ?></label>
				<br class="clear" />
				</div>
			</div>
			<?php break;
	
		}
	}
}


#################################
##  the sidebars options page  ##
#################################

function pbt_sidebars_options() {
	global $pbt_options;

	foreach ( $pbt_options as $value ) { 
		switch ( pbt_get_index( $value,'id' ) ) {
				
			case 'sidebar_width1':
				pbt_radioBox( 2, $value['name'], $value['desc'], $value['id'], array( __( '180px', 'magazine-basic' ), __( '300px', 'magazine-basic' ) ), array( 180, 300 ) );			
				break;
			   
			case 'sidebar_width2':
				pbt_radioBox( 3, $value['name'], $value['desc'], $value['id'], array( __( '180px', 'magazine-basic' ), __( '300px', 'magazine-basic' ), __( 'None', 'magazine-basic' ) ), array( 180, 300, 0 ) );			
				break;			   
			   
			case 'sidebar_location':
				?>
				<div class="postbox">
					<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
					<div class="inside">
						<div id="oneSidebar">
	                        <table>
	                            <tr>
	                                <td style="padding-right: 15px;">
	                                    <img src="<?php echo THEME_URL; ?>/admin/images/oneleft.png" alt="One Left" />
	                                </td>
	                                <td style="padding-right: 15px;">
	                                    <img src="<?php echo THEME_URL; ?>/admin/images/oneright.png" alt="One Right" />
	                                </td>
	                            </tr>
	                            <tr>
	                                <td align="center" style="padding-right: 15px;">
	                                    <input  name="<?php echo $value['id']; ?>" type="radio" value="1"<?php checked( pbt_theme_option( $value['id'] ), 1 ); ?> />
	                                </td>
	                                <td align="center" style="padding-right: 15px;">
	                                    <input  name="<?php echo $value['id']; ?>" type="radio" value="2"<?php checked( pbt_theme_option( $value['id'] ), 2 ); ?> />
	                                </td>
	                            </tr>
	                        </table>
						</div>
						<div id="twoSidebar">
	                        <table>
	                            <tr>
	                                <td style="padding-right: 15px;">
	                                    <img src="<?php echo THEME_URL; ?>/admin/images/twoleft.png" alt="" />
	                                </td>
	                                <td style="padding-right: 15px;">
	                                    <img src="<?php echo THEME_URL; ?>/admin/images/tworight.png" alt="" />
	                                </td>
	                                <td style="padding-right: 15px;">
	                                    <img src="<?php echo THEME_URL; ?>/admin/images/twoseparate.png" alt="" />
	                                </td>
	                            </tr>
	                            <tr>
	                                <td align="center" style="padding-right: 15px;">
	                                    <input  name="<?php echo $value['id']; ?>" type="radio" value="3"<?php checked( pbt_theme_option( $value['id'] ), 3 ); ?> />
	                                </td>
	                                <td align="center" style="padding-right: 15px;">
	                                    <input  name="<?php echo $value['id']; ?>" type="radio" value="4"<?php checked( pbt_theme_option( $value['id'] ), 4 ); ?> />
	                                </td>
	                                <td align="center" style="padding-right: 15px;">
	                                    <input  name="<?php echo $value['id']; ?>" type="radio" value="5" <?php checked( pbt_theme_option( $value['id'] ), 5 ); ?> />
	                                </td>
	                            </tr>
	                        </table>
	                    </div>
	                    <p class="locerror"></p>
	                    <br class="clear" />
					</div>
				</div>
				<?php
				break;					

			case 'custom_widgets': ?>
				<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
				<a href="<?php echo admin_url( 'widgets.php' ); ?>"><?php _e( 'Go to Widgets editor', 'magazine-basic') ; ?></a>
                </div>
                </div>
                <?php 
        		break;
		} 
	}
}

############################
##  the seo options page  ##
############################

function pbt_seo_options() {
    global $pbt_options;

	foreach ( $pbt_options as $value ) { 
		switch ( pbt_get_index( $value, 'id' ) ) {
			case 'seo':
				pbt_radioBox( 2, $value['name'], $value['desc'], $value['id'], array( __( 'On', 'magazine-basic' ), __( 'Off', 'magazine-basic' ) ) );
				break;
			
			case 'site_description':
				pbt_textAreaBox( 4, $value['name'], $value['desc'], $value['id'] );
				break;
	
			case 'keywords':
				pbt_textAreaBox( 4, $value['name'], $value['desc'], $value['id'] );
				break;
	
			case 'google_analytics':
				pbt_textAreaBox( 6, $value['name'], $value['desc'], $value['id'] );
				break;
		}
	}
}

/**
 * Include widgets and register sidebars
 *
 * @since 1.0.0
 */
add_action( 'widgets_init', 'pbt_widgets_init' );

function pbt_widgets_init() {
	wp_register_script( 'effects', THEME_URL . '/js/effects.js', array( 'jquery' ), '', true );

	// include the widgets
	include( THEME_TEMPLATE . '/widgets/widget_login.php' ); 
	include( THEME_TEMPLATE . '/widgets/widget_feature.php' ); 
	
	// Initiating the sidebars
	register_sidebar( array(
		'name' => 'Sidebar One',
		'before_widget' => '<div id="%1$s" class="side-widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
	
	if ( 0 != pbt_theme_option( 'sidebar_width2' ) ) {
		register_sidebar( array(
			'name' => 'Sidebar Two',
			'before_widget' => '<div id="%1$s" class="side-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
		) );
	}
}

/**
 * Dynamically use tags for keywords
 *
 * @since 2.0.0
 */
function pbt_csv_tags() {
    $posttags = get_the_tags();
 	$csv_tags = '';
 
    if ( ! empty( $posttags ) ) {
		foreach ( (array) $posttags as $tag ) {
			$csv_tags .= $tag->name . ',';
		}
	}

    echo '<meta name="keywords" content="' . $csv_tags . pbt_theme_option( 'keywords' ) . '" />';
}

/**
 * Trimmable excerpts
 *
 * @since 1.0.0
 */
function pbt_theme_excerpt( $limit = 55, $readmore = true ) {
	$link = ( $readmore ) ? '<p><a href="' . get_permalink() . '" class="more-link">' . __('Read more &raquo;', 'magazine-basic' ) . '</a></p>' : '';
	$excerpt = wp_trim_words( get_the_excerpt(), $limit );

	echo '<p class="excerpt">' . $excerpt . '</p>' . $link;
}

/**
 * Dynamic meta description for SEO
 *
 * @since 2.0.0
 */
function pbt_metaDesc() {
	global $post;
	$content = apply_filters( 'the_excerpt_rss', strip_tags( $post->post_excerpt ) );

	if ( empty( $content ) ) 
		$content = apply_filters( 'the_excerpt_rss', strip_tags( get_the_content() ) );

	$content = preg_replace( '/\[.+\]/', '', $content );
	$chars = array( '', '\n', '\r', 'chr(13)', '\t', '\0', '\x0B');
	$content = str_replace( $chars, ' ', $content );
	
	if ( empty( $content ) ) 
		$content = pbt_theme_option( 'site_description' );
	
	$content = str_replace( '"', '', $content );

	if ( strlen( $content ) < 155 ) {
		echo $content;
	} else {
		$desc = substr( $content, 0, 155 );
		echo $desc . '...';
	}
}

/**
 * Retrieve first image from a post and resize according to parameters
 *
 * @since 2.7.8
 */
function pbt_resize( $width, $height, $class = 'alignleft', $showlink = true ) {
	global $more;

	$title = the_title_attribute( 'echo=0' );
	$link = ( $showlink ) ? '<a href="' . get_permalink() . '" title="' . $title . '">' : '';
	$linkend = ( $showlink ) ? '</a>' : '';

	$more = 1;
	$the_content = get_the_content();
	$more = 0;

	if ( preg_match( '/<img[^>]+src[\\s=\'"]+([^"\'>\\s]+)/is', $the_content, $match ) )
		return $link . '<img src="' . $match[1] . '" class="' . $class . '" alt="' . $title . '" width="' . $width . '" height="' . $height . '" />' . $linkend . "\n\n";
}

/**
 * Comment template callback for comments, trackbacks and pingbacks
 *
 * @since 2.7.8
 */
function pbt_mytheme_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;

	switch ( $comment->comment_type ) :
		case '' :
		?>
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
			<div id="comment-<?php comment_ID(); ?>" class="comment-body">
	
				<div class="comment-avatar">
					<?php echo get_avatar( $comment, 60 ); ?>
				</div>     
	
				<div class="comment-content">
					<div class="comment-author">
						<?php echo get_comment_author_link() . ' '; ?>
					</div>
	
					<div class="comment-meta">
						<?php
						printf( __( '%1$s at %2$s', 'magazine-basic' ), get_comment_date(), get_comment_time() ); 
						edit_comment_link( __( '(edit)', 'magazine-basic' ), '  ', '' );
						?>
					</div>
	
					<div class="comment-text">
						<?php if ( '0' == $comment->comment_approved ) { echo '<em>' . __( 'Your comment is awaiting moderation.', 'magazine-basic' ) . '</em>'; } ?>
						<?php comment_text() ?>
					</div>
	
					<?php if ( $args['max_depth'] != $depth && comments_open() && 'pingback' != $comment->comment_type ) { ?>
					<div class="reply">
						<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
					</div>
					<?php } ?>
	
				</div>
	
			</div>
			<?php
			break;

		case 'pingback'  :
		case 'trackback' :
			?>
			<li class="pingback">
		
				<div class="comment-body"><?php _e( 'Pingback:', 'magazine-basic' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(edit)', 'magazine-basic' ), ' ' ); ?></div>
			<?php
			break;
	endswitch;
}

/**
 * Pagination function. Rewriten for Magazine Basic v2.7.8
 *
 * @since 2.7.8
 */
function pbt_pagination() {
	global $wp_query;

	$current = max( 1, get_query_var('paged') );
	$big = 999999999; // need an unlikely integer
	
	$pagination_return = paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => $current,
		'total' => $wp_query->max_num_pages,
		'next_text' => '&raquo;',
		'prev_text' => '&laquo;'
	) );
	
	if ( ! empty( $pagination_return ) ) {
		echo '<div id="pagination" class="clear fl">';
		echo '<div class="total-pages fl">';
		printf( __( 'Page %1$s of %2$s', 'magazine-basic' ), $current, $wp_query->max_num_pages );
		echo '</div>';
		echo $pagination_return;
		echo '</div>';
	}	
}

/**
 * Increase the default excerpt length from 55 to 200 words
 *
 * @since 2.5.6
 */
add_filter( 'excerpt_length', 'pbt_new_excerpt_length' );

function pbt_new_excerpt_length( $length ) {
	return 200;
}

/**
 * Custom background setup depending on if you are using WP 3.4 or earlier
 *
 * @since 2.7.8
 */
global $wp_version;
if ( version_compare( $wp_version, '3.4', '>=' ) ) {
	add_theme_support( 'custom-background' );
} else {
	if( function_exists( 'add_custom_background' ) )
		add_custom_background();
}

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-formats', array( 'aside', 'audio', 'gallery', 'image', 'link', 'video' ) );

/**
 * Custom nav menus
 *
 * @since 2.6
 */
if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menu( 'main', __( 'Main Navigation Menu', 'magazine-basic' ) );
	register_nav_menu( 'sub', __( 'Sub-Navitation Menu', 'magazine-basic' ) );
}

/**
 * Callback from nav menu
 *
 * @since 2.6
 */
function pbt_display_home() {
	echo '<div class="main-navigation"><ul class="sf-menu"><li><a href="' . get_bloginfo('url') . '">Home</a></li>';
	wp_list_categories( 'title_li=&depth=1&number=5' );
	echo '</ul></div>';
}

/**
 * Add Featured Image support and columns to display image if added
 *
 * @since 2.6
 */
if ( ! function_exists( 'pbt_add_image_col' ) && function_exists( 'add_theme_support' ) ) :
	add_theme_support( 'post-thumbnails' );
 
	function pbt_add_image_col( $cols ) {
		$cols['thumbnail'] = __( 'Thumbnail', 'magazine-basic' );

		return $cols;
	}
 
	function pbt_add_image_col_value( $column_name, $post_id ) {
		if ( 'thumbnail' == $column_name ) {
			$thumbnail_id = get_post_meta( $post_id, '_thumbnail_id', true );

			if ( ! empty( $thumbnail_id ) )
				$thumb = wp_get_attachment_image( $thumbnail_id, array( 35, 35 ), true );
			
			if ( empty( $thumb ) )
				echo __( 'None', 'magazine-basic' );
			else
				echo $thumb;
		}
	}
 
	// for posts
	add_filter( 'manage_posts_columns', 'pbt_add_image_col' );
	add_action( 'manage_posts_custom_column', 'pbt_add_image_col_value', 10, 2 );
 
	// for pages
	add_filter( 'manage_pages_columns', 'pbt_add_image_col' );
	add_action( 'manage_pages_custom_column', 'pbt_add_image_col_value', 10, 2 );
endif;

/**
 * Add a Magazine Basic menu item to the new admin bar
 *
 * @since 2.7.4
 */
add_action( 'admin_bar_menu', 'pbt_add_menu_admin_bar', 70 );

function pbt_add_menu_admin_bar() {
    global $wp_admin_bar;

    if ( !is_super_admin() || !is_admin_bar_showing() )
        return;

    /* Add the main siteadmin menu item */
    $wp_admin_bar->add_menu( array( 'id' => 'theme_options', 'title' => THEME_NAME, 'href' => admin_url('themes.php')."?page=".THEME_FILE ) );
}

/**
 * Decode textarea content for HTML entities, slashes and blank spaces
 *
 * @since 2.7.7
 */
function decode_textarea( $text ) {
	return trim( html_entity_decode( stripslashes( $text ), ENT_QUOTES ) );
}

/**
 * Gather the IDs of posts that are displayed by the featured post widget 
 * so that they can be excluded from the home page custom query
 *
 * @since 2.7.8
 */
function pbt_notin() {
	$options = get_option( 'widget_sideFeature' );

	$featuredPosts = new WP_Query();
    $featuredPosts->query( array(
    	'posts_per_page' => $options['number'],
    	'cat' => $options['category'],
    	'no_found_rows' => true
    ) );

    $notin = array();

    if ( $featuredPosts->have_posts() ) :	
		while ( $featuredPosts->have_posts() ) : $featuredPosts->the_post(); 
			$notin[] = $featuredPosts->post->ID;
		endwhile;
		
		wp_reset_postdata();
	endif;
	
	return $notin;
}

/**
 * Home page custom query
 *
 * @since 2.7.8
 */
add_action( 'pre_get_posts', 'pbt_custom_home_query' );

function pbt_custom_home_query( $query = '' ) {
	if ( ! is_home() || ! is_a( $query, 'WP_Query' ) || ! $query->is_main_query() )
		return;

	$posts_number = pbt_theme_option( 'number_posts' );
	$posts_per_page = empty( $posts_number ) ? 6 : $posts_number;
	$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

	$query->set( 'posts_per_page', $posts_per_page );
	$query->set( 'paged', $paged );

    if ( is_active_widget( 'pbt_widget_myFeature' ) && pbt_notin() )
	    $query->set( 'post__not_in', pbt_notin() );
}
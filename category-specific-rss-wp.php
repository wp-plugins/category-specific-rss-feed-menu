<?php

/*
Plugin Name: Category Specific RSS Menu
Version: v1.2
Plugin URI: http://www.tipsandtricks-hq.com/?p=325
Author: Ruhul Amin
Author URI: http://www.tipsandtricks-hq.com/
Plugin Description: A simple Wordpress plugin to add category specific RSS subscription menu into your posts, pages, sidebars.
*/

/*
    This program is free software; you can redistribute it
    under the terms of the GNU General Public License version 2,
    as published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
*/

$siteurl = get_bloginfo('wpurl');
define('CAT_SPEC_RSS_FOLDER', dirname(plugin_basename(__FILE__)));
define('CAT_SPEC_RSS_URL', get_option('siteurl').'/wp-content/plugins/' . CAT_SPEC_RSS_FOLDER);

$category_specific_rss_version = 1.2;

add_option('rss_category_1_name', 'All Topics');
add_option('rss_category_1_link', 'http://www.tipsandtricks-hq.com/?feed=rss2');
add_option('rss_widget_title_name', 'Category Specific RSS');
add_option('cat_rss_all_cat', '1');

function show_category_rss_for_all_cats()
{		
		$output .= '<ul>';
		$rss_image = CAT_SPEC_RSS_URL.'/rss_small_icon.png';
		$output .= wp_list_cats('sort_column=name&feed_image='.$rss_image.'');
		$output .= '</ul>';	
		return $output;
}

function show_cat_specific_rss_menu()
{
    $rss_cat_1_name_value = get_option('rss_category_1_name');
    $rss_cat_1_link_value = get_option('rss_category_1_link');

    $rss_cat_2_name_value = get_option('rss_category_2_name');
    $rss_cat_2_link_value = get_option('rss_category_2_link');

    $rss_cat_3_name_value = get_option('rss_category_3_name');
    $rss_cat_3_link_value = get_option('rss_category_3_link');

    $rss_cat_4_name_value = get_option('rss_category_4_name');
    $rss_cat_4_link_value = get_option('rss_category_4_link');

    $rss_cat_5_name_value = get_option('rss_category_5_name');
    $rss_cat_5_link_value = get_option('rss_category_5_link');

    $rss_cat_6_name_value = get_option('rss_category_6_name');
    $rss_cat_6_link_value = get_option('rss_category_6_link');

    $rss_cat_7_name_value = get_option('rss_category_7_name');
    $rss_cat_7_link_value = get_option('rss_category_7_link');

    $rss_cat_8_name_value = get_option('rss_category_8_name');
    $rss_cat_8_link_value = get_option('rss_category_8_link');

	$show_all_cat = get_option('cat_rss_all_cat');
	if ($show_all_cat == '1')
	{
		// Display Categories and RSS feed for all categories
		$output .= show_category_rss_for_all_cats();
	}
	else
	{
		// Display configured categories and their RSS menu
	    if(!empty($rss_cat_1_name_value) && !empty($rss_cat_1_link_value))
	    {
	        $output .= "<img src=\"/wp-content/plugins/Category-specific-rss-wp/rss_icon_2.png\" alt=\"\" />";
	        $output .= " <a href=\"$rss_cat_1_link_value\">$rss_cat_1_name_value</a><br />";
	    }
	
	    if(!empty($rss_cat_2_name_value) && !empty($rss_cat_2_link_value))
	    {
	        $output .= "<img src=\"/wp-content/plugins/Category-specific-rss-wp/rss_icon_2.png\" alt=\"\" />";
	        $output .= " <a href=\"$rss_cat_2_link_value\">$rss_cat_2_name_value</a><br />";
	    }
	
	    if(!empty($rss_cat_3_name_value) && !empty($rss_cat_3_link_value))
	    {
	        $output .= "<img src=\"/wp-content/plugins/Category-specific-rss-wp/rss_icon_2.png\" alt=\"\" />";
	        $output .= " <a href=\"$rss_cat_3_link_value\">$rss_cat_3_name_value</a><br />";
	    }
	    if(!empty($rss_cat_4_name_value) && !empty($rss_cat_4_link_value))
	    {
	        $output .= "<img src=\"/wp-content/plugins/Category-specific-rss-wp/rss_icon_2.png\" alt=\"\" />";
	        $output .= " <a href=\"$rss_cat_4_link_value\">$rss_cat_4_name_value</a><br />";
	    }
	    if(!empty($rss_cat_5_name_value) && !empty($rss_cat_5_link_value))
	    {
	        $output .= "<img src=\"/wp-content/plugins/Category-specific-rss-wp/rss_icon_2.png\" alt=\"\" />";
	        $output .= " <a href=\"$rss_cat_5_link_value\">$rss_cat_5_name_value</a><br />";
	    }
	    if(!empty($rss_cat_6_name_value) && !empty($rss_cat_6_link_value))
	    {
	        $output .= "<img src=\"/wp-content/plugins/Category-specific-rss-wp/rss_icon_2.png\" alt=\"\" />";
	        $output .= " <a href=\"$rss_cat_6_link_value\">$rss_cat_6_name_value</a><br />";
	    }
	    if(!empty($rss_cat_7_name_value) && !empty($rss_cat_7_link_value))
	    {
	        $output .= "<img src=\"/wp-content/plugins/Category-specific-rss-wp/rss_icon_2.png\" alt=\"\" />";
	        $output .= " <a href=\"$rss_cat_7_link_value\">$rss_cat_7_name_value</a><br />";
	    }
	    if(!empty($rss_cat_8_name_value) && !empty($rss_cat_8_link_value))
	    {
	        $output .= "<img src=\"/wp-content/plugins/Category-specific-rss-wp/rss_icon_2.png\" alt=\"\" />";
	        $output .= " <a href=\"$rss_cat_8_link_value\">$rss_cat_8_name_value</a><br />";
	    }
	}
	$output .= 'by <a href="http://www.tipsandtricks-hq.com/?p=319">Tips and Tricks</a><br /><br />';
	return $output;	
}

function category_specific_rss_process($content)
{
    if (strpos($content, "<!-- category_specific_rss_menu -->") !== FALSE)
    {
        $content = preg_replace('/<p>\s*<!--(.*)-->\s*<\/p>/i', "<!--$1-->", $content);
        $content = str_replace('<!-- category_specific_rss_menu -->', show_cat_specific_rss_menu(), $content);
    }
    return $content;
}

// Displays Category Specific RSS Options menu
function add_category_specific_rss_option_page() {
    if (function_exists('add_options_page')) {
        add_options_page('Category Specific RSS', 'Category Specific RSS', 8, __FILE__, 'category_specific_option_page');
    }
}

function category_specific_option_page() {

    global $category_specific_rss_version;

    if (isset($_POST['info_update']))
    {
        echo '<div id="message" class="updated fade"><p><strong>';

        update_option('rss_widget_title_name', (string)$_POST["rss_widget_title_name"]);
        
        update_option('cat_rss_all_cat', ($_POST['cat_rss_all_cat']=='1') ? '1':'-1' );

        update_option('rss_category_1_name', (string)$_POST["rss_category_1_name"]);
        update_option('rss_category_1_link', (string)$_POST["rss_category_1_link"]);

        update_option('rss_category_2_name', (string)$_POST["rss_category_2_name"]);
        update_option('rss_category_2_link', (string)$_POST["rss_category_2_link"]);

        update_option('rss_category_3_name', (string)$_POST["rss_category_3_name"]);
        update_option('rss_category_3_link', (string)$_POST["rss_category_3_link"]);

        update_option('rss_category_4_name', (string)$_POST["rss_category_4_name"]);
        update_option('rss_category_4_link', (string)$_POST["rss_category_4_link"]);

        update_option('rss_category_5_name', (string)$_POST["rss_category_5_name"]);
        update_option('rss_category_5_link', (string)$_POST["rss_category_5_link"]);

        update_option('rss_category_6_name', (string)$_POST["rss_category_6_name"]);
        update_option('rss_category_6_link', (string)$_POST["rss_category_6_link"]);

        update_option('rss_category_7_name', (string)$_POST["rss_category_7_name"]);
        update_option('rss_category_7_link', (string)$_POST["rss_category_7_link"]);

        update_option('rss_category_8_name', (string)$_POST["rss_category_8_name"]);
        update_option('rss_category_8_link', (string)$_POST["rss_category_8_link"]);

        echo 'Options Updated!';
        echo '</strong></p></div>';
    }

    ?>

    <div class=wrap>

    <h2>Category Specific RSS Menu v <?php echo $category_specific_rss_version; ?></h2>

    <p>For information and updates, please visit:<br />
    <a href="http://www.tipsandtricks-hq.com/?p=325">http://www.tipsandtricks-hq.com/</a></p>

    <form method="post" action="<?php echo $_SERVER["REQUEST_URI"]; ?>">
    <input type="hidden" name="info_update" id="info_update" value="true" />

    <fieldset class="options">
    <legend><strong>Usage</strong></legend>
    <p>Use this plugin to add category specific RSS menu into your posts, pages, sidebars.</p>
    <p>There are three ways you can use this plugin:</p>
    <ol>
    <li>Add the <strong>Category Specific RSS</strong> Widget to your sidebar from the Widget menu</li>
    <li>Add the trigger text <strong>&lt;!-- category_specific_rss_menu --&gt;</strong> to your posts or pages</li>
    <li>Call the function from template files: <strong>&lt;?php echo show_cat_specific_rss_menu(); ?&gt;</strong><br /></li>
    </ol>
    </fieldset>

    <fieldset class="options">
    <legend><strong>Category Specific RSS Menu Options</strong></legend><br />
    <strong>Category Specific RSS Widget Title</strong>
        <input name="rss_widget_title_name" type="text" size="30" value="<?php echo get_option('rss_widget_title_name'); ?>"/>
    <br /><br />


    <strong>Show Category RSS for All Categories :</strong>
    <input name="cat_rss_all_cat" type="checkbox"<?php if(get_option('cat_rss_all_cat')!='-1') echo ' checked="checked"'; ?> value="1"/>
	<i> If ticked the plugin will display category specific RSS for all categories and ignore the options below.</i>
	<br /><br />
	
    <table width="100%" border="0" cellspacing="0" cellpadding="6">
	
    <tr valign="top"><td width="15%" align="left">
    <strong>Category 1 Name: </strong>
    </td><td align="left">
    <input name="rss_category_1_name" type="text" size="20" value="<?php echo get_option('rss_category_1_name'); ?>"/>
    <strong>RSS Link: </strong><input name="rss_category_1_link" type="text" size="40" value="<?php echo get_option('rss_category_1_link'); ?>"/>
    </td></tr>

    <tr valign="top"><td width="15%" align="left">
    <strong>Category 2 Name: </strong>
    </td><td align="left">
    <input name="rss_category_2_name" type="text" size="20" value="<?php echo get_option('rss_category_2_name'); ?>"/>
    <strong>RSS Link: </strong><input name="rss_category_2_link" type="text" size="40" value="<?php echo get_option('rss_category_2_link'); ?>"/>
    </td></tr>

    <tr valign="top"><td width="15%" align="left">
    <strong>Category 3 Name: </strong>
    </td><td align="left">
    <input name="rss_category_3_name" type="text" size="20" value="<?php echo get_option('rss_category_3_name'); ?>"/>
    <strong>RSS Link: </strong><input name="rss_category_3_link" type="text" size="40" value="<?php echo get_option('rss_category_3_link'); ?>"/>
    </td></tr>

    <tr valign="top"><td width="15%" align="left">
    <strong>Category 4 Name: </strong>
    </td><td align="left">
    <input name="rss_category_4_name" type="text" size="20" value="<?php echo get_option('rss_category_4_name'); ?>"/>
    <strong>RSS Link: </strong><input name="rss_category_4_link" type="text" size="40" value="<?php echo get_option('rss_category_4_link'); ?>"/>
    </td></tr>

    <tr valign="top"><td width="15%" align="left">
    <strong>Category 5 Name: </strong>
    </td><td align="left">
    <input name="rss_category_5_name" type="text" size="20" value="<?php echo get_option('rss_category_5_name'); ?>"/>
    <strong>RSS Link: </strong><input name="rss_category_5_link" type="text" size="40" value="<?php echo get_option('rss_category_5_link'); ?>"/>
    </td></tr>

    <tr valign="top"><td width="15%" align="left">
    <strong>Category 6 Name: </strong>
    </td><td align="left">
    <input name="rss_category_6_name" type="text" size="20" value="<?php echo get_option('rss_category_6_name'); ?>"/>
    <strong>RSS Link: </strong><input name="rss_category_6_link" type="text" size="40" value="<?php echo get_option('rss_category_6_link'); ?>"/>
    </td></tr>

    <tr valign="top"><td width="15%" align="left">
    <strong>Category 7 Name: </strong>
    </td><td align="left">
    <input name="rss_category_7_name" type="text" size="20" value="<?php echo get_option('rss_category_7_name'); ?>"/>
    <strong>RSS Link: </strong><input name="rss_category_7_link" type="text" size="40" value="<?php echo get_option('rss_category_7_link'); ?>"/>
    </td></tr>

    <tr valign="top"><td width="15%" align="left">
    <strong>Category 8 Name: </strong>
    </td><td align="left">
    <input name="rss_category_8_name" type="text" size="20" value="<?php echo get_option('rss_category_8_name'); ?>"/>
    <strong>RSS Link: </strong><input name="rss_category_8_link" type="text" size="40" value="<?php echo get_option('rss_category_8_link'); ?>"/>
    </td></tr>

    </table>
    </fieldset>

	<strong>Note:</strong><br />
	RSS Link of a particular category is usually the category URL followed by "/?feed=rss2" or "/feed" without the Quotes.<br />
	e.g. http://www.tipsandtricks-hq.com/category/web-development/wordpress/?feed=rss2<br />
	or http://www.tipsandtricks-hq.com/category/web-development/wordpress/feed
	
    <div class="submit">
        <input type="submit" name="info_update" value="<?php _e('Update options'); ?> &raquo;" />
    </div>

    </form>
    </div><?php
}

function show_category_rss_widget($args)
{
    extract($args);
    $rss_widget_title_name_value = get_option('rss_widget_title_name');
    
    echo $before_widget;
    echo $before_title . $rss_widget_title_name_value . $after_title;
    echo show_cat_specific_rss_menu();
    echo $after_widget;
}

function category_rss_widget_control()
{
    ?>
    <p>
    <a href="options-general.php?page=Category-specific-rss-wp/category-specific-rss-wp.php"><? _e("Settings", "category_specific_option_page"); ?></a>
    </p>
    <?php

}
function widget_category_spec_rss_init()
{
    $widget_options = array('classname' => 'widget_cat_spec_rss', 'description' => __( "Display Category Specific RSS Menu.") );
    wp_register_sidebar_widget('category_rss_widgets', __('Category Specific RSS'), 'show_category_rss_widget', $widget_options);
    wp_register_widget_control('category_rss_widgets', __('Category Specific RSS'), 'category_rss_widget_control' );
}

add_filter('the_content', 'category_specific_rss_process');

add_action('init', 'widget_category_spec_rss_init');

// Insert the add_category_specific_rss_option_page in the 'admin_menu'
add_action('admin_menu', 'add_category_specific_rss_option_page');

?>

<?php
defined('ABSPATH') or die("No script kiddies please!");
global $wpdb;
$si_id = intval(sanitize_text_field($_GET['si_id']));
$table_name = $table_name = $wpdb->prefix . "aps_social_icons";
$icon_sets = $wpdb->get_results("SELECT * FROM $table_name where si_id = $si_id");
if(!empty($icon_sets)){
$icon_set = $icon_sets[0];
//$this->print_array($icon_set);
/**
 * 
 * stdClass Object
(
    [si_id] => 12
    [icon_set_name] => Test Set
    [icon_display] => horizontal
    [num_rows] => 
    [icon_margin] => 
    [icon_tooltip] => 1
    [tooltip_background] => 
    [tooltip_text_color] => 
    [icon_animation] => 
    [opacity_hover] => 1
    [icon_details] => a:20:{s:5:"Askfm";a:17:{s:5:"title";s:5:"Askfm";s:10:"icon_width";s:4:"50px";s:11:"icon_height";s:4:"50px";s:4:"link";s:16:"http://askfm.com";s:12:"tooltip_text";s:5:"AskFM";s:11:"link_target";s:10:"New Window";s:10:"image_name";s:5:"Askfm";s:5:"image";s:117:"http://192.168.1.70/accesspress-social-icons/wp-content/plugins/accesspress-social-icons/icon-sets/png/set1/askfm.png";s:11:"border_type";s:4:"none";s:16:"border_thickness";s:1:"0";s:12:"border_color";s:0:"";s:6:"shadow";s:3:"yes";s:15:"shadow_offset_x";s:1:"0";s:15:"shadow_offset_y";s:1:"0";s:4:"blur";s:1:"0";s:12:"shadow_color";s:0:"";s:7:"padding";s:1:"0";}s:10:"Classmates";a:17:{s:5:"title";s:10:"Classmates";s:10:"icon_width";s:4:"50px";s:11:"icon_height";s:4:"50px";s:4:"link";s:21:"http://classmates.com";s:12:"tooltip_text";s:10:"classmates";s:11:"link_target";s:10:"New Window";s:10:"image_name";s:10:"Classmates";s:5:"image";s:122:"http://192.168.1.70/accesspress-social-icons/wp-content/plugins/accesspress-social-icons/icon-sets/png/set1/classmates.png";s:11:"border_type";s:4:"none";s:16:"border_thickness";s:1:"0";s:12:"border_color";s:0:"";s:6:"shadow";s:3:"yes";s:15:"shadow_offset_x";s:1:"0";s:15:"shadow_offset_y";s:1:"0";s:4:"blur";s:1:"0";s:12:"shadow_color";s:0:"";s:7:"padding";s:1:"0";}s:8:"Facebook";a:17:{s:5:"title";s:8:"Facebook";s:10:"icon_width";s:4:"50px";s:11:"icon_height";s:4:"50px";s:4:"link";s:19:"http://facebook.com";s:12:"tooltip_text";s:13:"Facebook Link";s:11:"link_target";s:10:"New Window";s:10:"image_name";s:8:"Facebook";s:5:"image";s:120:"http://192.168.1.70/accesspress-social-icons/wp-content/plugins/accesspress-social-icons/icon-sets/png/set1/facebook.png";s:11:"border_type";s:4:"none";s:16:"border_thickness";s:1:"0";s:12:"border_color";s:0:"";s:6:"shadow";s:3:"yes";s:15:"shadow_offset_x";s:1:"0";s:15:"shadow_offset_y";s:1:"0";s:4:"blur";s:1:"0";s:12:"shadow_color";s:0:"";s:7:"padding";s:1:"0";}s:6:"Flickr";a:17:{s:5:"title";s:6:"Flickr";s:10:"icon_width";s:4:"50px";s:11:"icon_height";s:4:"50px";s:4:"link";s:18:"http://Flicker.com";s:12:"tooltip_text";s:12:"FLicker Link";s:11:"link_target";s:10:"New Window";s:10:"image_name";s:6:"Flickr";s:5:"image";s:118:"http://192.168.1.70/accesspress-social-icons/wp-content/plugins/accesspress-social-icons/icon-sets/png/set1/flickr.png";s:11:"border_type";s:4:"none";s:16:"border_thickness";s:1:"0";s:12:"border_color";s:0:"";s:6:"shadow";s:3:"yes";s:15:"shadow_offset_x";s:1:"0";s:15:"shadow_offset_y";s:1:"0";s:4:"blur";s:1:"0";s:12:"shadow_color";s:0:"";s:7:"padding";s:1:"0";}s:10:"Foursquare";a:17:{s:5:"title";s:10:"Foursquare";s:10:"icon_width";s:4:"50px";s:11:"icon_height";s:4:"50px";s:4:"link";s:21:"http://foursquare.com";s:12:"tooltip_text";s:0:"";s:11:"link_target";s:10:"New Window";s:10:"image_name";s:10:"Foursquare";s:5:"image";s:122:"http://192.168.1.70/accesspress-social-icons/wp-content/plugins/accesspress-social-icons/icon-sets/png/set1/foursquare.png";s:11:"border_type";s:4:"none";s:16:"border_thickness";s:1:"0";s:12:"border_color";s:0:"";s:6:"shadow";s:3:"yes";s:15:"shadow_offset_x";s:1:"0";s:15:"shadow_offset_y";s:1:"0";s:4:"blur";s:1:"0";s:12:"shadow_color";s:0:"";s:7:"padding";s:1:"0";}s:10:"GooglePlus";a:17:{s:5:"title";s:0:"";s:10:"icon_width";s:0:"";s:11:"icon_height";s:0:"";s:4:"link";s:0:"";s:12:"tooltip_text";s:0:"";s:11:"link_target";s:10:"New Window";s:10:"image_name";s:10:"GooglePlus";s:5:"image";s:122:"http://192.168.1.70/accesspress-social-icons/wp-content/plugins/accesspress-social-icons/icon-sets/png/set1/googlePlus.png";s:11:"border_type";s:4:"none";s:16:"border_thickness";s:1:"0";s:12:"border_color";s:0:"";s:6:"shadow";s:3:"yes";s:15:"shadow_offset_x";s:1:"0";s:15:"shadow_offset_y";s:1:"0";s:4:"blur";s:1:"0";s:12:"shadow_color";s:0:"";s:7:"padding";s:1:"0";}s:9:"Instagram";a:17:{s:5:"title";s:0:"";s:10:"icon_width";s:0:"";s:11:"icon_height";s:0:"";s:4:"link";s:0:"";s:12:"tooltip_text";s:0:"";s:11:"link_target";s:10:"New Window";s:10:"image_name";s:9:"Instagram";s:5:"image";s:121:"http://192.168.1.70/accesspress-social-icons/wp-content/plugins/accesspress-social-icons/icon-sets/png/set1/instagram.png";s:11:"border_type";s:4:"none";s:16:"border_thickness";s:1:"0";s:12:"border_color";s:0:"";s:6:"shadow";s:3:"yes";s:15:"shadow_offset_x";s:1:"0";s:15:"shadow_offset_y";s:1:"0";s:4:"blur";s:1:"0";s:12:"shadow_color";s:0:"";s:7:"padding";s:1:"0";}s:8:"Linkedin";a:17:{s:5:"title";s:0:"";s:10:"icon_width";s:0:"";s:11:"icon_height";s:0:"";s:4:"link";s:0:"";s:12:"tooltip_text";s:0:"";s:11:"link_target";s:10:"New Window";s:10:"image_name";s:8:"Linkedin";s:5:"image";s:120:"http://192.168.1.70/accesspress-social-icons/wp-content/plugins/accesspress-social-icons/icon-sets/png/set1/linkedin.png";s:11:"border_type";s:4:"none";s:16:"border_thickness";s:1:"0";s:12:"border_color";s:0:"";s:6:"shadow";s:3:"yes";s:15:"shadow_offset_x";s:1:"0";s:15:"shadow_offset_y";s:1:"0";s:4:"blur";s:1:"0";s:12:"shadow_color";s:0:"";s:7:"padding";s:1:"0";}s:6:"Meetme";a:17:{s:5:"title";s:0:"";s:10:"icon_width";s:0:"";s:11:"icon_height";s:0:"";s:4:"link";s:0:"";s:12:"tooltip_text";s:0:"";s:11:"link_target";s:10:"New Window";s:10:"image_name";s:6:"Meetme";s:5:"image";s:118:"http://192.168.1.70/accesspress-social-icons/wp-content/plugins/accesspress-social-icons/icon-sets/png/set1/meetme.png";s:11:"border_type";s:4:"none";s:16:"border_thickness";s:1:"0";s:12:"border_color";s:0:"";s:6:"shadow";s:3:"yes";s:15:"shadow_offset_x";s:1:"0";s:15:"shadow_offset_y";s:1:"0";s:4:"blur";s:1:"0";s:12:"shadow_color";s:0:"";s:7:"padding";s:1:"0";}s:6:"Meetup";a:17:{s:5:"title";s:0:"";s:10:"icon_width";s:0:"";s:11:"icon_height";s:0:"";s:4:"link";s:0:"";s:12:"tooltip_text";s:0:"";s:11:"link_target";s:10:"New Window";s:10:"image_name";s:6:"Meetup";s:5:"image";s:118:"http://192.168.1.70/accesspress-social-icons/wp-content/plugins/accesspress-social-icons/icon-sets/png/set1/meetup.png";s:11:"border_type";s:4:"none";s:16:"border_thickness";s:1:"0";s:12:"border_color";s:0:"";s:6:"shadow";s:3:"yes";s:15:"shadow_offset_x";s:1:"0";s:15:"shadow_offset_y";s:1:"0";s:4:"blur";s:1:"0";s:12:"shadow_color";s:0:"";s:7:"padding";s:1:"0";}s:7:"Myspace";a:17:{s:5:"title";s:0:"";s:10:"icon_width";s:0:"";s:11:"icon_height";s:0:"";s:4:"link";s:0:"";s:12:"tooltip_text";s:0:"";s:11:"link_target";s:10:"New Window";s:10:"image_name";s:7:"Myspace";s:5:"image";s:119:"http://192.168.1.70/accesspress-social-icons/wp-content/plugins/accesspress-social-icons/icon-sets/png/set1/myspace.png";s:11:"border_type";s:4:"none";s:16:"border_thickness";s:1:"0";s:12:"border_color";s:0:"";s:6:"shadow";s:3:"yes";s:15:"shadow_offset_x";s:1:"0";s:15:"shadow_offset_y";s:1:"0";s:4:"blur";s:1:"0";s:12:"shadow_color";s:0:"";s:7:"padding";s:1:"0";}s:9:"Pinterest";a:17:{s:5:"title";s:0:"";s:10:"icon_width";s:0:"";s:11:"icon_height";s:0:"";s:4:"link";s:0:"";s:12:"tooltip_text";s:0:"";s:11:"link_target";s:10:"New Window";s:10:"image_name";s:9:"Pinterest";s:5:"image";s:121:"http://192.168.1.70/accesspress-social-icons/wp-content/plugins/accesspress-social-icons/icon-sets/png/set1/pinterest.png";s:11:"border_type";s:4:"none";s:16:"border_thickness";s:1:"0";s:12:"border_color";s:0:"";s:6:"shadow";s:3:"yes";s:15:"shadow_offset_x";s:1:"0";s:15:"shadow_offset_y";s:1:"0";s:4:"blur";s:1:"0";s:12:"shadow_color";s:0:"";s:7:"padding";s:1:"0";}s:6:"Reddit";a:17:{s:5:"title";s:0:"";s:10:"icon_width";s:0:"";s:11:"icon_height";s:0:"";s:4:"link";s:0:"";s:12:"tooltip_text";s:0:"";s:11:"link_target";s:10:"New Window";s:10:"image_name";s:6:"Reddit";s:5:"image";s:118:"http://192.168.1.70/accesspress-social-icons/wp-content/plugins/accesspress-social-icons/icon-sets/png/set1/reddit.png";s:11:"border_type";s:4:"none";s:16:"border_thickness";s:1:"0";s:12:"border_color";s:0:"";s:6:"shadow";s:3:"yes";s:15:"shadow_offset_x";s:1:"0";s:15:"shadow_offset_y";s:1:"0";s:4:"blur";s:1:"0";s:12:"shadow_color";s:0:"";s:7:"padding";s:1:"0";}s:11:"Stumbleupon";a:17:{s:5:"title";s:0:"";s:10:"icon_width";s:0:"";s:11:"icon_height";s:0:"";s:4:"link";s:0:"";s:12:"tooltip_text";s:0:"";s:11:"link_target";s:10:"New Window";s:10:"image_name";s:11:"Stumbleupon";s:5:"image";s:123:"http://192.168.1.70/accesspress-social-icons/wp-content/plugins/accesspress-social-icons/icon-sets/png/set1/stumbleupon.png";s:11:"border_type";s:4:"none";s:16:"border_thickness";s:1:"0";s:12:"border_color";s:0:"";s:6:"shadow";s:3:"yes";s:15:"shadow_offset_x";s:1:"0";s:15:"shadow_offset_y";s:1:"0";s:4:"blur";s:1:"0";s:12:"shadow_color";s:0:"";s:7:"padding";s:1:"0";}s:6:"Tagged";a:17:{s:5:"title";s:0:"";s:10:"icon_width";s:0:"";s:11:"icon_height";s:0:"";s:4:"link";s:0:"";s:12:"tooltip_text";s:0:"";s:11:"link_target";s:10:"New Window";s:10:"image_name";s:6:"Tagged";s:5:"image";s:118:"http://192.168.1.70/accesspress-social-icons/wp-content/plugins/accesspress-social-icons/icon-sets/png/set1/tagged.png";s:11:"border_type";s:4:"none";s:16:"border_thickness";s:1:"0";s:12:"border_color";s:0:"";s:6:"shadow";s:3:"yes";s:15:"shadow_offset_x";s:1:"0";s:15:"shadow_offset_y";s:1:"0";s:4:"blur";s:1:"0";s:12:"shadow_color";s:0:"";s:7:"padding";s:1:"0";}s:6:"Tumblr";a:17:{s:5:"title";s:0:"";s:10:"icon_width";s:0:"";s:11:"icon_height";s:0:"";s:4:"link";s:0:"";s:12:"tooltip_text";s:0:"";s:11:"link_target";s:10:"New Window";s:10:"image_name";s:6:"Tumblr";s:5:"image";s:118:"http://192.168.1.70/accesspress-social-icons/wp-content/plugins/accesspress-social-icons/icon-sets/png/set1/tumblr.png";s:11:"border_type";s:4:"none";s:16:"border_thickness";s:1:"0";s:12:"border_color";s:0:"";s:6:"shadow";s:3:"yes";s:15:"shadow_offset_x";s:1:"0";s:15:"shadow_offset_y";s:1:"0";s:4:"blur";s:1:"0";s:12:"shadow_color";s:0:"";s:7:"padding";s:1:"0";}s:7:"Twitter";a:17:{s:5:"title";s:0:"";s:10:"icon_width";s:0:"";s:11:"icon_height";s:0:"";s:4:"link";s:0:"";s:12:"tooltip_text";s:0:"";s:11:"link_target";s:10:"New Window";s:10:"image_name";s:7:"Twitter";s:5:"image";s:119:"http://192.168.1.70/accesspress-social-icons/wp-content/plugins/accesspress-social-icons/icon-sets/png/set1/twitter.png";s:11:"border_type";s:4:"none";s:16:"border_thickness";s:1:"0";s:12:"border_color";s:0:"";s:6:"shadow";s:3:"yes";s:15:"shadow_offset_x";s:1:"0";s:15:"shadow_offset_y";s:1:"0";s:4:"blur";s:1:"0";s:12:"shadow_color";s:0:"";s:7:"padding";s:1:"0";}s:4:"Vine";a:17:{s:5:"title";s:0:"";s:10:"icon_width";s:0:"";s:11:"icon_height";s:0:"";s:4:"link";s:0:"";s:12:"tooltip_text";s:0:"";s:11:"link_target";s:10:"New Window";s:10:"image_name";s:4:"Vine";s:5:"image";s:116:"http://192.168.1.70/accesspress-social-icons/wp-content/plugins/accesspress-social-icons/icon-sets/png/set1/vine.png";s:11:"border_type";s:4:"none";s:16:"border_thickness";s:1:"0";s:12:"border_color";s:0:"";s:6:"shadow";s:3:"yes";s:15:"shadow_offset_x";s:1:"0";s:15:"shadow_offset_y";s:1:"0";s:4:"blur";s:1:"0";s:12:"shadow_color";s:0:"";s:7:"padding";s:1:"0";}s:2:"Vk";a:17:{s:5:"title";s:0:"";s:10:"icon_width";s:0:"";s:11:"icon_height";s:0:"";s:4:"link";s:0:"";s:12:"tooltip_text";s:0:"";s:11:"link_target";s:10:"New Window";s:10:"image_name";s:2:"Vk";s:5:"image";s:114:"http://192.168.1.70/accesspress-social-icons/wp-content/plugins/accesspress-social-icons/icon-sets/png/set1/vk.png";s:11:"border_type";s:4:"none";s:16:"border_thickness";s:1:"0";s:12:"border_color";s:0:"";s:6:"shadow";s:3:"yes";s:15:"shadow_offset_x";s:1:"0";s:15:"shadow_offset_y";s:1:"0";s:4:"blur";s:1:"0";s:12:"shadow_color";s:0:"";s:7:"padding";s:1:"0";}s:7:"Youtube";a:17:{s:5:"title";s:0:"";s:10:"icon_width";s:0:"";s:11:"icon_height";s:0:"";s:4:"link";s:0:"";s:12:"tooltip_text";s:0:"";s:11:"link_target";s:10:"New Window";s:10:"image_name";s:7:"Youtube";s:5:"image";s:119:"http://192.168.1.70/accesspress-social-icons/wp-content/plugins/accesspress-social-icons/icon-sets/png/set1/youtube.png";s:11:"border_type";s:4:"none";s:16:"border_thickness";s:1:"0";s:12:"border_color";s:0:"";s:6:"shadow";s:3:"yes";s:15:"shadow_offset_x";s:1:"0";s:15:"shadow_offset_y";s:1:"0";s:4:"blur";s:1:"0";s:12:"shadow_color";s:0:"";s:7:"padding";s:1:"0";}}
    [icon_extra] => a:4:{s:13:"icon_set_type";s:1:"2";s:13:"icon_theme_id";s:1:"1";s:11:"num_columns";s:0:"";s:16:"tooltip_position";s:6:"bottom";}
)
 * */
 foreach($icon_set as $key=>$val){
    $$key = $val;
 }
 $icon_set_name .=' -copy';
 $wpdb->insert( 
	$table_name, 
array( 
		'icon_set_name' => $icon_set_name,
        'icon_display'=>$icon_display,
        'num_rows' => $num_rows,
        'icon_margin'=>$icon_margin,
        'icon_tooltip'=>$icon_tooltip,
        'tooltip_background'=>$tooltip_background,
        'tooltip_text_color'=> $tooltip_text_color,
        'opacity_hover'=>$opacity_hover,
        'icon_animation'=>$icon_animation,
        'icon_details'=>$icon_details,
        'icon_extra'=>$icon_extra 
	),
	array( 
		'%s',
        '%s',
        '%s',
        '%s',
        '%d', 
		'%s',
        '%s',
        '%s',
        '%s',
        '%s',
        '%s' 
	)
 );
 //$_SESSION['aps_message'] = __('Icon Set Copied Successfully','accesspress-social-icons');
 wp_redirect(admin_url().'admin.php?page=aps-social&message=2');   
 exit;
 }else{
   die(__('No icons found for this icon id','accesspress-social-icons')); 
 }
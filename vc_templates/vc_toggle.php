<?php
$output = $title = $el_class = $open = $css_animation = '';
extract(shortcode_atts(array(
	'id'			=> '',
	'title'			=> __("Click to toggle", "js_composer"),
	'el_class'		=> '',
	'open'			=> 'false',
	'css_animation'	=> ''
), $atts));

$el_class = $this->getExtraClass($el_class);
$open = ( $open == 'true' ) ? ' wpb_toggle_title_active' : '';
$el_class .= ( $open == ' wpb_toggle_title_active' ) ? ' wpb_toggle_open' : '';

$css_class =  apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'wpb_toggle'.$open, $this->settings['base']);
$css_class .= $this->getCSSAnimation($css_animation);

if ( $id ) {
	$output .='<div id="'. $id .'">';
}

	$output .= apply_filters('wpb_toggle_heading', '<h4 class="'.$css_class.'">'.$title.'</h4>', array('title'=>$title, 'open'=>$open));
	$css_class =  apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'wpb_toggle_content'.$el_class, $this->settings['base']);
	$output .= '<div class="'.$css_class.'">'.wpb_js_remove_wpautop($content, true).'</div>'.$this->endBlockComment('toggle')."\n";

if ( $id ) {
	$output .= '</div>';
}

echo $output;
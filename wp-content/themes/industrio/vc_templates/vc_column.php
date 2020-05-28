<?php
$output = $el_class = $width = '';
extract(shortcode_atts(array(
    'el_class' => '',
    'width' => '1/1',
    'wap_class' => '',
  'column_id' => '',
  'title' =>'',
  'subtitle' =>'',
  'type' => '',
    'image' => '',
    'description'=>'',
    'color_text'=>'',
    'link'=>'',
    'text_button'=>'',
), $atts));

if($type == 'column'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="'.$css_class.'  '.$wap_class.'" id="'.$column_id.'" >';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div> '.$this->endBlockComment($el_class) . "\n";



}elseif($type == 'faq_style_01'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="col-lg-7 col-md-8 col-sm-12 col-xs-12 pull-left">
                    <div class="sec-title">
                        <h3>'.$title.' <span>'.$color_text.'</span></h3>
                        <p>'.$subtitle.' </p>
                    </div>
                    <div class="accrodion-grp" data-grp-name="faq-accrodion">';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div>
                    <a href="'.$link.'" class="more-info">'.$text_button.' <i class="fa fa-arrow-right"></i></a>
                </div>'.$this->endBlockComment($el_class) . "\n";                    

}elseif($type == 'form_request_a_quote'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right">
                    <div class="rqa-box">
                        <h3>'.$title.' <span>'.$color_text.'</span></h3>
                        <p>'.$subtitle.'</p>';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div>
                </div>'.$this->endBlockComment($el_class) . "\n";


}elseif($type == 'blog'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="blog-list-sidebar">';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'  <div class="btn-box">
                        <a href="'.$link.'">'.$text_button.' <i class="fa fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>'.$this->endBlockComment($el_class) . "\n";                  

}elseif($type == 'progress_box'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="progress-box">
                        <p>'.$subtitle.'</p>';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div>
                </div>'.$this->endBlockComment($el_class) . "\n";  

}elseif($type == 'fact_counter'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="fact-counter row">
                        <div class="divider hor"></div>
                        <div class="divider ver"></div>';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div>
                </div>'.$this->endBlockComment($el_class) . "\n";  

}elseif($type == 'timeline_phone'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<form class="timeline-tab-select-form">
                        <select class="selectpicker" id="timeline-tab-select">';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</select>
                </form>'.$this->endBlockComment($el_class) . "\n"; 

}elseif($type == 'timeline'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="tab-title-wrapper text-center">
                        <ul class="tab-title" id="timeline-tab">';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</ul>
                </div>'.$this->endBlockComment($el_class) . "\n";

}elseif($type == 'timeline_content'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="tab-content">';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'
                </div>'.$this->endBlockComment($el_class) . "\n";

}elseif($type == 'column_6'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);
$el_class .= '';
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="col-md-6">';
$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'
                </div>'.$this->endBlockComment($el_class) . "\n";                                                                                                


}else{
  $el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);


$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);

}
echo wp_specialchars_decode(esc_attr($output),ENT_QUOTES);
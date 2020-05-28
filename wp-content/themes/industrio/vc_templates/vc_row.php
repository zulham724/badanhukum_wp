<?php

$output = $el_class = $bg_image = $bg_color = $bg_image_repeat = $font_color = $padding = $margin_bottom = $css = '';

extract(shortcode_atts(array(

    'el_class'        => '',

    'bg_image'        => '',

    'bg_image_repeat' => '',

    'padding'         => '',

    'margin_bottom'   => '',

    'css' => '',

    'ses_title'=>'',

    'ses_title_2'=>'',

    'type_row' => '',

    'ses_subtitle' => '',

    'ses_image' => '',

    'image'=>'',

    'ses_link'=>'',

    'ses_text_btn'=>'',

    'ses_text_color'=>'',



), $atts));



wp_enqueue_script( 'wpb_composer_front_js' );



$el_class = $this->getExtraClass($el_class);

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, ''. ( $this->settings('base')==='vc_row_inner' ? 'vc_inner ' : '' ) . $el_class . vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );

$style = $this->buildStyle($bg_image, $bg_color, $bg_image_repeat, $font_color, $padding, $margin_bottom);

$images = wp_get_attachment_image_src($ses_image,'');

if($type_row == 'type2'){

    $output .= wpb_js_remove_wpautop($content);

    $output .= $this->endBlockComment('row');



}elseif($type_row == 'slider_home1'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="main-slider">

                <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">

                    <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">

                        <ul>';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</ul>

            </div>

        </div>

    </section>';



}elseif($type_row == 'slider_home2'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<div id="minimal-bootstrap-carousel" class="carousel slide carousel-fade slider-home-one slider-home-two" data-ride="carousel">

                    <div class="carousel-inner" role="listbox">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

        <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">

            <i class="fas fa-angle-left"></i>

            <span class="sr-only">Previous</span>

        </a>

        <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next">

            <i class="fas fa-angle-right"></i>

            <span class="sr-only">Next</span>

        </a>



        <ul class="carousel-indicators list-inline custom-navigation">

            <li data-target="#minimal-bootstrap-carousel" data-slide-to="0" class="active"></li><!--

            --><li data-target="#minimal-bootstrap-carousel" data-slide-to="1"></li><!--

            --><li data-target="#minimal-bootstrap-carousel" data-slide-to="2"></li>

        </ul>

            

        <div class="logo home-two">

            <a href="'.$ses_link.'"><img src="'.esc_url($images[0]).'" alt="Awesome Image"/></a>

        </div>

    </div>';    



}elseif($type_row == 'slider_home3'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<div id="minimal-bootstrap-carousel" class="carousel slide carousel-fade slider-home-one slider-home-three" data-ride="carousel">

                  <div class="carousel-inner" role="listbox">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

        <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev">

            <i class="fas fa-angle-left"></i>

            <span class="sr-only">Previous</span>

        </a>

        <a class="right carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="next">

            <i class="fas fa-angle-right"></i>

            <span class="sr-only">Next</span>

        </a>



        <ul class="carousel-indicators list-inline custom-navigation">

            <li data-target="#minimal-bootstrap-carousel" data-slide-to="0" class="active"></li><!--

            --><li data-target="#minimal-bootstrap-carousel" data-slide-to="1"></li><!--

            --><li data-target="#minimal-bootstrap-carousel" data-slide-to="2"></li>

        </ul>

    </div>';    



    }elseif($type_row == 'service_style_01'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="service-style-two">

                <div class="container">

                    <div class="service-carousel-style-two owl-carousel owl-theme">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';   



    }elseif($type_row == 'service_style_02'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="service-style-one sec-pad pb0">

                  <div class="container">

                      <div class="service-carousel-one owl-carousel owl-theme">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';



    }elseif($type_row == 'service_style_03'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="service-style-three sec-pad">

                  <div class="container">

                      <div class="sec-title text-center">

                          <h3><span>'.$ses_text_color.'</span> '.$ses_title.'</h3>

                          <p>'.$ses_subtitle.' </p>

                      </div>

                      <div class="row">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>'; 



    }elseif($type_row == 'service_style_04'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="service-title" style="     

    background: #000 url('.esc_url($images[0]).') center center no-repeat;">

                    <div class="container">

                        <div class="sec-title light text-center">

                            <h3><span>'.$ses_text_color.'</span> '.$ses_title.'</h3>

                        </div>

                    </div>

                </section>

                <section class="service-style-four">

                    <div class="container">

                        <div class="row">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>'; 



    }elseif($type_row == 'service_style_05'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="service-style-four about-page">

                  <div class="container">

                    <div class="sec-title">

                      <div class="row">

                        <div class="col-md-4">

                          <h3>'.$ses_title.' <span>'.$ses_text_color.'</span> '.$ses_title_2.'</h3>

                        </div>

                        <div class="col-md-8">

                          <p>'.$ses_subtitle.'</p>

                        </div>

                      </div>

                    </div>

                      <div class="service-style-four-carousel owl-theme owl-carousel">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';         





    }elseif($type_row == 'testimonials_style_01'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="testimonials-style-two dark-bg sec-pad">

                  <div class="container">

                      <div class="sec-title light">

                          <h3>'.$ses_title.' <span>'.$ses_text_color.'</span></h3>

                      </div><!-- /.sec-title -->

                      <div class="testimonials-style-two-carousel owl-theme owl-carousel">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>'; 



    }elseif($type_row == 'testimonials_style_02'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="testimonials-style-three" style="     

    background: #000 url('.esc_url($images[0]).') center center no-repeat fixed;">

                  <div class="container">

                      <div class="sec-title light">

                          <h3>'.$ses_title.' <span>'.$ses_text_color.'</span></h3>

                      </div>

                      <div class="testimonials-style-three-carousel owl-theme owl-carousel">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';  



    }elseif($type_row == 'testimonials_style_03'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="testimonials-style-one">

                  <div class="container">

                    <div class="sec-title text-center">

                      <h3>'.$ses_title.' <span>'.$ses_text_color.'</span></h3>

                      <p>'.$ses_subtitle.'</p>

                    </div>

                    <div class="testimonials-style-one-carousel owl-theme owl-carousel">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';



    }elseif($type_row == 'testimonials_style_04'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="testimonials-style-four testimonials-page sec-pad">

                  <div class="container">

                      <div class="sec-title">

                          <div class="row">

                              <div class="col-md-4">

                                  <h3>'.$ses_title.' <br /> <span>'.$ses_text_color.'</span></h3>

                              </div>

                              <div class="col-md-8">

                                  <p>'.$ses_subtitle.'</p>

                              </div>

                          </div>

                      </div>

                      <div class="row">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';             



    }elseif($type_row == 'features_style_01'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="feature-style-one">

                  <div class="container">

                      <div class="clearfix">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>'; 



    }elseif($type_row == 'features_style_02'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="feature-style-one overlapped-top">

                  <div class="container">

                      <div class="clearfix">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>'; 



    }elseif($type_row == 'features_style_03'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="feature-style-one overlapped-bottom">

                  <div class="container">

                      <div class="clearfix">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>'; 



    }elseif($type_row == 'features_style_04'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="features-style-two">

                  <div class="container">

                    <div class="row">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';            

        

    }elseif($type_row == 'team_style_01'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="team-style-one sec-pad pb0">

                  <div class="container">

                      <div class="sec-title text-center">

                          <h3><span>'.$ses_text_color.'</span> '.$ses_title.'</h3>

                          <p>'.$ses_subtitle.' </p>

                      </div>

                      <div class="row">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';



    }elseif($type_row == 'team_style_02'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="team-style-two pt0 sec-pad">

                  <div class="container">

                      <div class="sec-title text-center">

                          <h3><span>'.$ses_text_color.'</span> '.$ses_title.'</h3>

                          <p>'.$ses_subtitle.' </p>

                      </div>

                      <div class="team-style-two-carousel owl-carousel owl-theme">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>'; 



    }elseif($type_row == 'team_style_03'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="team-style-one sec-pad team-page">

                  <div class="container">

                      <div class="sec-title text-center">

                          <h3><span>'.$ses_text_color.'</span> '.$ses_title.'</h3>

                          <p>'.$ses_subtitle.' </p>

                      </div>

                      <div class="row">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';        



    }elseif($type_row == 'faq_style_01'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="faq-rqa-section faq-style-one sec-pad pb0">

                  <div class="container">

                      <div class="row">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>'; 



    }elseif($type_row == 'faq_style_02'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="faq-rqa-section faq-style-one sec-pad">

                  <div class="container">

                      <div class="row">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';     



    }elseif($type_row == 'blog_style_01'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="blog-style-one sec-pad pb0">

                  <div class="container">

                      <div class="sec-title">

                          <h3>'.$ses_title.' <span>'.$ses_text_color.'</span></h3>

                      </div>

                      <div class="row">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';  



    }elseif($type_row == 'blog_style_02'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="blog-style-one sec-pad gray-bg">

                  <div class="container">

                      <div class="sec-title">

                          <h3>'.$ses_title.' <span>'.$ses_text_color.'</span></h3>

                      </div>

                      <div class="row">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';    



    }elseif($type_row == 'brand'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="brand-carousel-area">

                  <div class="container">
                  
                      <h2 class="displaynone">Our Partners</h2>

                      <div class="brand-carousel owl-carousel owl-theme">
                      ';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';



    }elseif($type_row == 'fact-counter'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="fact-counter-section">

                  <div class="container">

                      <div class="sec-title text-center light">

                          <h3>'.$ses_title.' <span>'.$ses_text_color.'</span></h3>

                      </div>

                      <div class="row">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>'; 



    }elseif($type_row == 'portfolio'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="portfolio-style-two full-width no-gutter sec-pad">

                  <div class="container-fluid">

                      <div class="sec-title text-center">

                          <h3>'.$ses_title.' <span>'.$ses_text_color.'</span></h3>

                          <p>'.$ses_subtitle.' </p>

                      </div>

                      <div class="row masonary-layout filter-layout" data-filter-class="filter">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='</div>

            </div>

        </section>';



    }elseif($type_row == 'timeline'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="time-line gray-bg">

                  <div class="container">

                    <div class="sec-title">

                      <div class="row">

                        <div class="col-md-4">

                          <h3>'.$ses_title.' <span>'.$ses_text_color.'</span> '.$ses_title_2.'</h3>

                        </div>

                        <div class="col-md-8">

                          <p>'.$ses_subtitle.'</p>

                        </div>

                      </div>

                    </div>';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .='

            </div>

        </section>'; 



    }elseif($type_row == 'contact'){

    $images = wp_get_attachment_image_src($ses_image,'');

    $output .='<section class="contact-page sec-pad">

                  <div class="container">

                      <div class="sec-title text-center">

                          <h3>'.$ses_title.' <span>'.$ses_text_color.'</span></h3>

                          <p>'.$ses_subtitle.' </p>

                      </div>

                      <div class="row">';

    $output .= wpb_js_remove_wpautop($content);

    $output .=''.$this->endBlockComment('row');

    $output .=' </div>

            </div>

        </section>';                                      





}else{

    $output .= wpb_js_remove_wpautop($content);

    $output .= $this->endBlockComment('row');



}

echo wp_specialchars_decode(esc_attr($output),ENT_QUOTES);
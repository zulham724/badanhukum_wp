<?php 

$textdoimain = 'industrio';

$industrio_redux_demo = get_option('redux_demo');



global $pre_text;

$pre_text = 'VG ';





add_shortcode('slider_home1', 'slider_home1_func');

function slider_home1_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'type'=>'type1',

     'text_btn_next_slide'=>'',

     'image'=>'',

     'title'=>'',

     'text1'=>'',

     'text_color'=>'',

     'text2'=>'',

     'subtitle'=>'',

     'link'=>'',

     'text_btn'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <?php if($type == 'type1'){ ?>

    <li class="slide-1" data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="slotzoom-horizontal" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1687" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="" data-title="<?php echo esc_attr($text_btn_next_slide)?>" data-transition="parallaxvertical">

                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="<?php echo (esc_url($images[0]));?>"> 

                    

                    <div class="tp-caption"

                    data-paddingbottom="[0,0,0,0]"

                    data-paddingleft="[0,0,0,0]"

                    data-paddingright="[0,0,0,0]"

                    data-paddingtop="[0,0,0,0]"

                    data-responsive_offset="on"

                    data-type="text"

                    data-height="none"

                    data-width="['650','750','700','420']"

                    data-whitespace="normal"

                    data-hoffset="['15','15','15','15']"

                    data-voffset="['-90','-80','-100','-80']"

                    data-x="['center','center','center','center']"

                    data-y="['middle','middle','middle','middle']"

                    data-textalign="['top','top','top','top']"

                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'

                    style="z-index: 7; white-space: nowrap;text-align: center;">

                        <h2><?php echo esc_attr($title)?> <br /> <?php echo esc_attr($text1)?> <span><?php echo esc_attr($text_color)?></span> <?php echo esc_attr($text2)?></h2>

                    </div>

                    

                    <div class="tp-caption tp-resizeme" 

                    data-paddingbottom="[0,0,0,0]"

                    data-paddingleft="[0,0,0,0]"

                    data-paddingright="[0,0,0,0]"

                    data-paddingtop="[0,0,0,0]"

                    data-responsive_offset="on"

                    data-type="text"

                    data-height="none"

                    data-width="['550','600','650','420']"

                    data-whitespace="normal"

                    data-hoffset="['15','15','15','15']"

                    data-voffset="['50','40','25','15']"

                    data-x="['center','center','center','center']"

                    data-y="['middle','middle','middle','middle']"

                    data-textalign="['top','top','top','top']"

                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'

                    style="z-index: 7; white-space: nowrap; text-align: center;">

                        <a href="<?php echo esc_attr($link)?>" class="theme-btn btn-style-one hvr-sweep-to-right"><?php echo esc_attr($text_btn)?> <i class="fa fa-arrow-right"></i></a>

                    </div>

                    

    </li>

    <?php }elseif($type =='type2'){ ?>

    <li class="slide-2" data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="slotzoom-horizontal" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="" data-title="<?php echo esc_attr($text_btn_next_slide)?>" data-transition="parallaxvertical">

                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="<?php echo (esc_url($images[0]));?>">

                    

                    <div class="tp-caption" 

                    data-paddingbottom="[0,0,0,0]"

                    data-paddingleft="[0,0,0,0]"

                    data-paddingright="[0,0,0,0]"

                    data-paddingtop="[0,0,0,0]"

                    data-responsive_offset="on"

                    data-type="text"

                    data-height="none"

                    data-width="['650','750','700','420']"

                    data-whitespace="normal"

                    data-hoffset="['15','15','15','15']"

                    data-voffset="['-100','-80','-100','-80']"

                    data-x="['left','left','left','left']"

                    data-y="['middle','middle','middle','middle']"

                    data-textalign="['top','top','top','top']"

                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'

                    style="z-index: 7; white-space: nowrap;">

                        <h2><?php echo esc_attr($title)?> <br /> <?php echo esc_attr($text1)?> <span><?php echo esc_attr($text_color)?></span> <?php echo esc_attr($text2)?></h2>

                    </div>

                    

                    <div class="tp-caption" 

                    data-paddingbottom="[0,0,0,0]"

                    data-paddingleft="[0,0,0,0]"

                    data-paddingright="[0,0,0,0]"

                    data-paddingtop="[0,0,0,0]"

                    data-responsive_offset="on"

                    data-type="text"

                    data-height="none"

                    data-width="['550','500','500','400']"

                    data-whitespace="normal"

                    data-hoffset="['15','15','15','15']"

                    data-voffset="['20','40','15','15']"

                    data-x="['left','left','left','left']"

                    data-y="['middle','middle','middle','middle']"

                    data-textalign="['top','top','top','top']"

                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'

                    style="z-index: 7; white-space: nowrap;">

                        <div class="text white-text"><?php echo esc_attr($subtitle)?></div>

                    </div>

                    

                    <div class="tp-caption tp-resizeme" 

                    data-paddingbottom="[0,0,0,0]"

                    data-paddingleft="[0,0,0,0]"

                    data-paddingright="[0,0,0,0]"

                    data-paddingtop="[0,0,0,0]"

                    data-responsive_offset="on"

                    data-type="text"

                    data-height="none"

                    data-width="['550','600','650','480']"

                    data-whitespace="normal"

                    data-hoffset="['15','15','15','15']"

                    data-voffset="['115','130','100','85']"

                    data-x="['left','left','left','left']"

                    data-y="['middle','middle','middle','middle']"

                    data-textalign="['top','top','top','top']"

                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'

                    style="z-index: 7; white-space: nowrap;">

                        <a href="<?php echo esc_attr($link)?>" class="theme-btn btn-style-one hvr-sweep-to-right"><?php echo esc_attr($text_btn)?> <i class="fa fa-arrow-right"></i></a>

                    </div>

                    

    </li>

    <?php }else{ ?>

    <li class="slide-3" data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="slotzoom-horizontal" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="" data-title="<?php echo esc_attr($text_btn_next_slide)?>" data-transition="parallaxvertical">

                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="<?php echo (esc_url($images[0]));?>"> 

                    

                    <div class="tp-caption" 

                    data-paddingbottom="[0,0,0,0]"

                    data-paddingleft="[0,0,0,0]"

                    data-paddingright="[0,0,0,0]"

                    data-paddingtop="[0,0,0,0]"

                    data-responsive_offset="on"

                    data-type="text"

                    data-height="none"

                    data-width="['650','750','700','420']"

                    data-whitespace="normal"

                    data-hoffset="['15','15','15','15']"

                    data-voffset="['-100','-80','-100','-80']"

                    data-x="['right','right','right','right']"

                    data-y="['middle','middle','middle','middle']"

                    data-textalign="['top','top','top','top']"

                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'

                    style="z-index: 7; white-space: nowrap; text-align: right;">

                        <h2><?php echo esc_attr($title)?> <br /> <?php echo esc_attr($text1)?> <span><?php echo esc_attr($text_color)?></span> <?php echo esc_attr($text2)?></h2>

                    </div>

                    

                    <div class="tp-caption" 

                    data-paddingbottom="[0,0,0,0]"

                    data-paddingleft="[0,0,0,0]"

                    data-paddingright="[0,0,0,0]"

                    data-paddingtop="[0,0,0,0]"

                    data-responsive_offset="on"

                    data-type="text"

                    data-height="none"

                    data-width="['550','500','500','400']"

                    data-whitespace="normal"

                    data-hoffset="['15','15','15','15']"

                    data-voffset="['20','40','15','15']"

                    data-x="['right','right','right','right']"

                    data-y="['middle','middle','middle','middle']"

                    data-textalign="['top','top','top','top']"

                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'

                    style="z-index: 7; white-space: nowrap; text-align: right;">

                        <div class="text white-text"><?php echo esc_attr($subtitle)?></div>

                    </div>

                    

                    <div class="tp-caption tp-resizeme" 

                    data-paddingbottom="[0,0,0,0]"

                    data-paddingleft="[0,0,0,0]"

                    data-paddingright="[0,0,0,0]"

                    data-paddingtop="[0,0,0,0]"

                    data-responsive_offset="on"

                    data-type="text"

                    data-height="none"

                    data-width="['550','600','650','420']"

                    data-whitespace="normal"

                    data-hoffset="['15','15','15','15']"

                    data-voffset="['115','130','100','85']"

                    data-x="['right','right','right','right']"

                    data-y="['middle','middle','middle','middle']"

                    data-textalign="['top','top','top','top']"

                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'

                    style="z-index: 7; white-space: nowrap; text-align: right;">

                        <a href="<?php echo esc_attr($link)?>" class="theme-btn btn-style-one hvr-sweep-to-right"><?php echo esc_attr($text_btn)?> <i class="fa fa-arrow-right"></i></a>

                    </div>

                    

    </li>

    <?php } ?>

<?php  return ob_get_clean();

}



add_shortcode('slider_home2', 'slider_home2_func');

function slider_home2_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'type'=>'type1',

     'image'=>'',

     'title'=>'',

     'subtitle'=>'',

     'link'=>'',

     'text_btn'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <?php if($type == 'type1'){ ?>

    <div class="item active slide-1" style="background-image: url(<?php echo (esc_url($images[0]));?>);background-position: center center;">

                

        <div class="carousel-caption">

            <div class="container">

                <div class="box valign-middle">

                    <div class="content text-center">

                        <h2 data-animation="animated fadeInUp"><?php echo wp_specialchars_decode(esc_attr($title));?></h2>

                        <a href="<?php echo esc_attr($link)?>" class="banner-btn hvr-sweep-to-right" data-animation="animated fadeInDown"><?php echo esc_attr($text_btn)?> <i class="fa fa-arrow-right"></i></a>

                    </div>

                </div>

            </div>

        </div>                

    </div>

    <?php }elseif($type =='type2'){ ?>

    <div class="item slide-2" style="background-image: url(<?php echo (esc_url($images[0]));?>);background-position: center center;">

                

        <div class="carousel-caption">

            <div class="container">

                <div class="box valign-middle">

                    <div class="content text-center">

                        <h2 data-animation="animated fadeInUp"><?php echo wp_specialchars_decode(esc_attr($title));?></h2>

                        <p data-animation="animated fadeInDown"><?php echo esc_attr($subtitle)?></p>

                        <a href="<?php echo esc_attr($link)?>" class="banner-btn hvr-sweep-to-right" data-animation="animated fadeInDown"><?php echo esc_attr($text_btn)?> <i class="fa fa-arrow-right"></i></a>

                    </div>

                </div>

            </div>

        </div>                

    </div>

    <?php }else{ ?>

    <div class="item slide-3" style="background-image: url(<?php echo (esc_url($images[0]));?>);background-position: center center;">

                

        <div class="carousel-caption">

            <div class="container">

                <div class="box valign-middle">

                    <div class="content text-right">

                        <h2 data-animation="animated fadeInUp"><?php echo wp_specialchars_decode(esc_attr($title));?></h2>

                        <p data-animation="animated fadeInDown"><?php echo esc_attr($subtitle)?></p>

                        <a href="<?php echo esc_attr($link)?>" class="banner-btn hvr-sweep-to-right" data-animation="animated fadeInDown"><?php echo esc_attr($text_btn)?> <i class="fa fa-arrow-right"></i></a>

                    </div>

                </div>

            </div>

        </div>                

    </div>

    <?php } ?>

<?php  return ob_get_clean();

}



add_shortcode('service_style_1', 'service_style_1_func');

function service_style_1_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'image'=>'',

     'icon'=>'',

     'title'=>'',

     'subtitle'=>'',

     'link'=>'',

     'text_btn'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <div class="item">

        <div class="single-service-style-two">

            <div class="img-box">

                <img src="<?php echo (esc_url($images[0]));?>" alt="Awesome Image"/>

            </div><!-- /.img-box -->

            <div class="overlay">

                <div class="box">

                    <div class="content">

                        <div class="icon-box">

                            <i class="<?php echo esc_attr($icon)?>"></i>

                        </div><!-- /.icon-box -->

                        <div class="text-box">

                            <h3><?php echo esc_attr($title)?></h3>

                        </div><!-- /.text-box -->

                    </div><!-- /.content -->

                </div><!-- /.box -->

            </div><!-- /.overlay -->

            <div class="hover">

                <div class="box">

                    <div class="content">

                        <div class="icon-box">

                            <i class="<?php echo esc_attr($icon)?>"></i>

                        </div><!-- /.icon-box -->

                        <div class="text-box">

                            <h3><?php echo esc_attr($title)?></h3>

                            <p><?php echo esc_attr($subtitle)?></p>

                            <a href="<?php echo esc_attr($link)?>" class="more"><?php echo esc_attr($text_btn)?> <i class="fa fa-angle-right"></i></a>

                        </div><!-- /.text-box -->

                    </div><!-- /.content -->

                </div><!-- /.box -->

            </div><!-- /.hover -->

        </div><!-- /.single-service-style-two -->

    </div>

<?php  return ob_get_clean();

}



add_shortcode('about_style_01', 'about_style_01_func');

function about_style_01_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'title'=>'',

     'text_color'=>'',

     'subtitle'=>'',

     'info1'=>'',

     'info2'=>'',

     'info3'=>'',

     'info4'=>'',

     'link'=>'',

     'text_btn'=>'',

     'image'=>'',

     'image2'=>'',

     'video'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    $images2 = wp_get_attachment_image_src($image2,'');

    ?>

    <section class="about-style-one sec-pad pb0">

        <div class="container">

            <div class="row">

                <div class="col-md-7">

                    <div class="about-content">

                        <h3><?php echo esc_attr($title)?> <span><?php echo esc_attr($text_color)?></span></h3>

                        <p><?php echo esc_attr($subtitle)?></p>

                        <div class="row">

                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">

                               <ul class="list-items">

                                    <li><i class="industrio-icon-next"></i>  <?php echo esc_attr($info1)?></li>

                                    <li><i class="industrio-icon-next"></i>  <?php echo esc_attr($info2)?></li>

                                </ul><!-- /.list-items -->

                            </div><!-- /.col-lg-4 col-md-6 col-sm-12 col-xs-12 -->

                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">

                               <ul class="list-items">

                                    <li><i class="industrio-icon-next"></i>  <?php echo esc_attr($info3)?></li>

                                    <li><i class="industrio-icon-next"></i>  <?php echo esc_attr($info4)?></li>

                                </ul><!-- /.list-items -->

                            </div><!-- /.col-lg-4 col-md-6 col-sm-12 col-xs-12 -->

                        </div><!-- /.row -->

                        <a href="<?php echo esc_attr($link)?>" class="about-btn hvr-sweep-to-right"><?php echo esc_attr($text_btn)?></a>

                    </div><!-- /.about-content -->



                </div><!-- /.col-md-7 -->

                <div class="col-md-5">

                    <div class="about-img-box">

                        <img src="<?php echo (esc_url($images[0]));?>" alt="Awesome Image"/>

                        <div class="video-box">

                            <img src="<?php echo (esc_url($images2[0]));?>" alt="Awesome Image"/>

                            <a href="<?php echo esc_attr($video)?>" class="video-popup"><i class="industrio-icon-play-button"></i></a>

                        </div><!-- /.video-box -->

                    </div><!-- /.about-img-box -->

                </div><!-- /.col-md-5 -->

            </div><!-- /.row -->

        </div><!-- /.container -->

    </section>

<?php  return ob_get_clean();

}



add_shortcode('service_style_2', 'service_style_2_func');

function service_style_2_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'icon'=>'',

     'title'=>'',

     'info1'=>'',

     'info2'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <div class="item">

        <div class="single-service-style-one flip-hover">

            <div class="front">

                <div class="inner-content">

                    <i class="<?php echo esc_attr($icon)?>"></i>

                    <h3><?php echo esc_attr($title)?></h3>

                </div><!-- /.inner-content -->

            </div><!-- /.front -->

            <div class="back">

                <div class="overlay">

                    <div class="box">

                        <div class="content">

                            <h3><?php echo esc_attr($info1)?></h3>

                            <p><?php echo esc_attr($info2)?> </p>

                        </div><!-- /.content -->

                    </div><!-- /.box -->

                </div><!-- /.overlay -->

            </div><!-- /.back -->

        </div><!-- /.single-service-style-one -->

    </div>

<?php  return ob_get_clean();

}



add_shortcode('service_style_3', 'service_style_3_func');

function service_style_3_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'image'=>'',

     'icon'=>'',

     'link'=>'',

     'title'=>'',

     'subtitle'=>'',

     'text_btn'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <div class="col-md-4 col-sm-6 col-xs-12">

        <div class="single-service-style-three">

            <div class="img-box">

                <img src="<?php echo (esc_url($images[0]));?>" alt="Awesome Image"/>                            

                <div class="text-box text-center">

                    <div class="inner hvr-bounce-to-bottom">

                        <div class="icon-box">

                            <i class="<?php echo esc_attr($icon)?>"></i>

                        </div><!-- /.icon-box -->

                        <a href="<?php echo esc_attr($link)?>"><h3><?php echo esc_attr($title)?></h3></a>

                        <p><?php echo esc_attr($subtitle)?></p>

                        <a href="<?php echo esc_attr($link)?>" class="more"><?php echo esc_attr($text_btn)?> <i class="fa fa-arrow-right"></i></a>

                    </div><!-- /.inner -->

                </div><!-- /.text-box -->

            </div><!-- /.img-box -->

        </div><!-- /.single-service-style-three -->

    </div>

<?php  return ob_get_clean();

}



add_shortcode('project', 'project_func');

function project_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'title'=>'',

     'text_color'=>'',

     'subtitle'=>'',

     'number'=>'',

    ), $atts));

    ob_start();

    global $redux_demo;

    ?>

    <section class="portfolio-style-two sec-pad">

        <div class="container">

            <div class="sec-title text-center">

                <h3><?php echo esc_attr($title)?> <span><?php echo esc_attr($text_color)?></span></h3>

                <p><?php echo esc_attr($subtitle)?> </p>

            </div><!-- /.sec-title -->

            <div class="gallery-filter">

                <ul class="post-filter masonary text-center">

                    <li class="filter active" data-filter=".masonary-item"><span><i class="industrio-icon-layers"></i><?php echo esc_html__( 'All Cases', 'industrio' );?></span></li>

                    <?php 

                    $categories = get_terms('type');   

                     foreach( (array)$categories as $categorie){

                        $cat_name = $categorie->name;

                        $cat_slug = $categorie->slug;

                        $cat_desc = $categorie->description;

                    ?>

                    <li class="filter " data-filter=".<?php echo esc_attr($cat_slug);?>"><span><i class="<?php echo esc_attr($cat_desc);?>"></i><?php echo esc_attr($cat_name);?></span></li>

                    <?php } ?>

                </ul><!-- /.post-filter -->

            </div><!-- /.gallery-filter -->

            <div class="row masonary-layout filter-layout" data-filter-class="filter">

                    <?php 

                        $args = array(   

                                    'post_type' => 'project',   

                                    'paged' => $paged,

                                    'posts_per_page' => $number,

                                    'order' => $orderpost,

                                    'orderby' => $orderby, 

                                );  

                                $wp_query = new WP_Query($args);

                                $i = 1;

                                while ($wp_query -> have_posts()) : $wp_query -> the_post(); 

                                $i++;

                                $cates = get_the_terms(get_the_ID(),'type');

                                $cate_name ='';

                                $cate_slug = '';

                                      foreach((array)$cates as $cate){

                            if(count($cates)>0){

                                $cate_name .= $cate->name.'  ' ;

                                $cate_slug .= $cate->slug .' ';     

                                } 

                                } 

                    ?>

                    <?php $title = get_post_meta(get_the_ID(),'_cmb_title', true);?>

                    <?php $link = get_post_meta(get_the_ID(),'_cmb_link', true);?>

                <div class="col-md-3 col-sm-6 col-xs-12 masonary-item single-filter-item <?php echo esc_attr($cate_slug);?> ">

                    <div class="single-portfolio-style-two">

                        <div class="img-box">

                          <?php if ( has_post_thumbnail() ) { ?>

                          <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="Awesome Image"/>

                          <?php } ?>

                            <div class="overlay">

                                <div class="box">

                                    <div class="content">

                                        <span><?php echo esc_attr($title);?></span>

                                        <a href="<?php echo esc_attr($link);?>"><h3><?php the_title(); ?></h3></a>

                                        <a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" class="img-popup industrio-icon-next"></a>

                                    </div><!-- /.content -->

                                </div><!-- /.box -->

                            </div><!-- /.overlay -->

                        </div><!-- /.img-box -->

                    </div><!-- /.single-portfolio-style-two -->

                </div>

                <?php  endwhile; ?>

            </div>

        </div><!-- /.container -->                

    </section>

<?php  return ob_get_clean();

}



add_shortcode('testimonials_style_01', 'testimonials_style_01_func');

function testimonials_style_01_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'quote'=>'',

     'image'=>'',

     'name'=>'',

     'info'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <div class="item">

        <div class="single-testimonial-style-two">

            <div class="inner">

            <p><i class="fas fa-quote-left"></i> <?php echo esc_attr($quote);?> <i class="fas fa-quote-right"></i></p>

            <div class="client-info-box">

                <div class="img-box">

                    <img src="<?php echo (esc_url($images[0]));?>" alt="Awesome Image"/>

                </div><!-- /.img-box -->

                <div class="text-box">

                    <h3><?php echo esc_attr($name);?></h3>

                    <p><?php echo esc_attr($info);?></p>

                </div><!-- /.text-box -->

            </div><!-- /.client-info-box -->

            </div><!-- /.inner -->

        </div><!-- /.single-testimonial-style-two -->

    </div>

<?php  return ob_get_clean();

}



add_shortcode('features_style_01', 'features_style_01_func');

function features_style_01_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'type'=>'type1',

     'icon'=>'',

     'title'=>'',

     'subtitle'=>'',

    ), $atts));

    ob_start();

    ?>

    <?php if($type == 'type1') {?>

    <div class="col-md-4">

        <div class="single-feature-style-one">

            <div class="icon-box">

                <i class="<?php echo esc_attr($icon);?>"></i>

            </div><!-- /.icon-box -->

            <div class="text-box">

                <h3><?php echo esc_attr($title);?></h3>

                <p><?php echo esc_attr($subtitle);?></p>

            </div><!-- /.text-box -->

        </div><!-- /.single-feature-style-one -->

    </div>

    <?php } else { ?>

    <div class="col-md-4">

        <div class="single-feature-style-one light">

            <div class="icon-box">

                <i class="<?php echo esc_attr($icon);?>"></i>

            </div><!-- /.icon-box -->

            <div class="text-box">

                <h3><?php echo esc_attr($title);?></h3>

                <p><?php echo esc_attr($subtitle);?></p>

            </div><!-- /.text-box -->

        </div><!-- /.single-feature-style-one -->

    </div>

    <?php } ?>

<?php  return ob_get_clean();

}



add_shortcode('team_style_01', 'team_style_01_func');

function team_style_01_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'image'=>'',

     'name'=>'',

     'job'=>'',

     'link_1'=>'',

     'link_2'=>'',

     'link_3'=>'',

     'link_4'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <div class="col-md-3 col-sm-6 col-xs-12">

        <div class="single-team-style-one text-center">

            <div class="img-box">

                <img src="<?php echo (esc_url($images[0]));?>" alt="Awesome Image"/>

                <div class="name-box">

                    <div class="inner"><?php echo esc_attr($name);?></div><!-- /.inner -->

                </div><!-- /.name-box -->

            </div><!-- /.img-box -->

            <div class="text-box">

                <p><?php echo esc_attr($job);?></p>

                <div class="social">

                    <a href="<?php echo esc_attr($link_1);?>" class="fab fa-facebook-f"></a>

                    <a href="<?php echo esc_attr($link_2);?>" class="fab fa-twitter"></a>

                    <a href="<?php echo esc_attr($link_3);?>" class="fab fa-google-plus-g"></a>

                    <a href="<?php echo esc_attr($link_4);?>" class="fab fa-instagram"></a>

                </div><!-- /.social -->

            </div><!-- /.text-box -->

        </div><!-- /.single-team-style-one -->

    </div>

<?php  return ob_get_clean();

}



add_shortcode('faq_style_01', 'faq_style_01_func');

function faq_style_01_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'type'=>'type1',

     'question'=>'',

     'answer'=>'',

    ), $atts));

    ob_start();

    ?>

    <?php if($type == 'type1') {?>

    <div class="accrodion active">

        <div class="accrodion-title">

            <h4><?php echo esc_attr($question);?></h4>

        </div>

        <div class="accrodion-content">

            <div class="inner">

                <p><?php echo esc_attr($answer);?> </p>

            </div><!-- /.inner -->

        </div>

    </div>

    <?php } else { ?>

    <div class="accrodion ">

        <div class="accrodion-title">

            <h4><?php echo esc_attr($question);?></h4>

        </div>

        <div class="accrodion-content">

            <div class="inner">

                <p><?php echo esc_attr($answer);?> </p>

            </div><!-- /.inner -->

        </div>

    </div> 

    <?php } ?>                   

<?php  return ob_get_clean();

}



add_shortcode('blog_style_01', 'blog_style_01_func');

function blog_style_01_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'number'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

     <?php 

                        $args = array(   

                                    'post_type' => 'post',   

                                    'paged' => $paged,

                                    'posts_per_page' => $number,

                                    'order' => $orderpost,

                                    'orderby' => $orderby, 

                                );  

                                $wp_query = new WP_Query($args);

                                $i = 1;

                                while ($wp_query -> have_posts()) : $wp_query -> the_post(); 

                                $i++;

                                $cates = get_the_terms(get_the_ID(),'type');

                                $cate_name ='';

                                $cate_slug = '';

                                      foreach((array)$cates as $cate){

                            if(count($cates)>0){

                                $cate_name .= $cate->name.'  ' ;

                                $cate_slug .= $cate->slug .' ';     

                                } 

                                } 

                    ?>

                    <?php $featured_image_2 = get_post_meta(get_the_ID(),'_cmb_featured_image_2', true); ?>



         <div class="col-md-4 col-sm-6 col-xs-12">

              <div class="single-blog-style-one">

                  <div class="img-box">

                      <img src="<?php echo esc_attr($featured_image_2);?>" alt="Awesome Image"/>

                  </div><!-- /.img-box -->

                  <div class="meta-info">

                      <?php the_time(get_option( 'date_format' ));?>

                      <?php 
                        // Show all category for post
                        $i = 1; foreach((get_the_category()) as $category) { 
                        if ($i == 1){echo ''; }else {echo ',';}
                            echo '<a href="'.get_category_link($category->cat_ID).'" title="'.$category->category_nicename . '" class="letter-spacing-033 small-text highlight category" >'.$category->category_nicename . ' '.'</a>'; 
                            $i++;
                        } ?>

                  </div><!-- /.meta-info -->

                  <a href="<?php the_permalink();?>"><h3><?php the_title();?> </h3></a>

                  <p><?php if(isset($industrio_redux_demo['blog_excerpt'])){?>

                                <?php echo esc_attr(industrio_excerpt($industrio_redux_demo['blog_excerpt'])); ?>

                                <?php }else{?>

                                <?php echo esc_attr(industrio_excerpt(30)); 

                                }

                                ?></p>

                  <a href="<?php the_permalink();?>" class="read-more"><?php if(isset($industrio_redux_demo['read_more'])){?>

                                    <?php echo htmlspecialchars_decode(esc_attr($industrio_redux_demo['read_more']));?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'View Details', 'industrio' );

                                    }

                                    ?> <i class="fa fa-angle-double-right"></i></a>

              </div><!-- /.single-blog-style-one -->

          </div> 

          <?php  endwhile;?>                

<?php  return ob_get_clean();

}





add_shortcode('blog_style_02', 'blog_style_02_func');

function blog_style_02_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'number'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

     <?php 

                        $args = array(   

                                    'post_type' => 'post',   

                                    'paged' => $paged,

                                    'posts_per_page' => $number,

                                    'order' => $orderpost,

                                    'orderby' => $orderby, 

                                );  

                                $wp_query = new WP_Query($args);

                                $i = 1;

                                while ($wp_query -> have_posts()) : $wp_query -> the_post(); 

                                $i++;

                                $cates = get_the_terms(get_the_ID(),'type');

                                $cate_name ='';

                                $cate_slug = '';

                                      foreach((array)$cates as $cate){

                            if(count($cates)>0){

                                $cate_name .= $cate->name.'  ' ;

                                $cate_slug .= $cate->slug .' ';     

                                } 

                                } 

                    ?>



                    <div class="single-blog-list">

                        <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>

                        <p><?php the_time(get_option( 'date_format' ));?></p>

                        <div class="cat-list">
                        <?php 

                        // Show all category for post

                        $i = 1; foreach((get_the_category()) as $category) { 

                        if ($i == 1){echo ''; }else {echo ', ';}

                            echo '<a href="'.get_category_link($category->cat_ID).'" title="'.$category->category_nicename . '" class="letter-spacing-033 small-text highlight" >'.$category->category_nicename . ' '.'</a>'; 

                            $i++;

                        } ?></div><!-- /.cat-list -->

                    </div>

          <?php  endwhile;?>                

<?php  return ob_get_clean();

}



add_shortcode('brand', 'brand_func');

function brand_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'icon'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <div class="item">

        <i class="<?php echo esc_attr($icon);?>"></i>

    </div>

<?php  return ob_get_clean();

}



add_shortcode('award', 'award_func');

function award_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'title'=>'',

     'text_color'=>'',

     'subtitle'=>'',

     'image'=>'',

     'image2'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    $images2 = wp_get_attachment_image_src($image2,'');

    ?>

    <section class="award-winning">

        <div class="container">

            <div class="row">

                <div class="col-md-7">

                    <div class="title">

                        <h3><?php echo esc_attr($title);?> <span><?php echo esc_attr($text_color);?></span></h3>

                        <p><?php echo esc_attr($subtitle);?></p>

                    </div><!-- /.title -->

                </div><!-- /.col-md-7 -->

                <div class="col-md-5">

                    <div class="img-box clearfix">

                        <img src="<?php echo (esc_url($images[0]));?>" alt="Awesome Image" class="pull-left" />

                        <img src="<?php echo (esc_url($images2[0]));?>" alt="Awesome Image" class="pull-right" />

                    </div> <!-- /.img-box -->

                </div><!-- /.col-md-5 -->

            </div><!-- /.row -->

        </div><!-- /.contianer -->

    </section>

<?php  return ob_get_clean();

}



add_shortcode('progress', 'progress_func');

function progress_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'title'=>'',

     'percent'=>'',

    ), $atts));

    ob_start();

    ?>

    <div class="single-progress-bar">

        <div class="labeled-text"><?php echo esc_attr($title);?></div><!-- /.labeled-text -->

        <div class="progress-scale">

            <div class="inner pogress-animation slideInLeft" style="width: <?php echo esc_attr($percent);?>%;"></div>

        </div><!-- /.progress-scale -->

        <div class="percent"><span class="timer" data-from="0" data-to="<?php echo esc_attr($percent);?>" data-speed="3000" data-refresh-interval="50"></span>%</div><!-- /.percent -->

    </div>

<?php  return ob_get_clean();

}



add_shortcode('fact_counter', 'fact_counter_func');

function fact_counter_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'icon'=>'',

     'number'=>'',

     'title'=>'',

    ), $atts));

    ob_start();

    ?>

    <div class="col-md-6 col-sm-6 col-xs-12">

        <div class="single-fact-counter">

            <div class="icon-box">

                <i class="<?php echo esc_attr($icon);?>"></i>

            </div><!-- /.icon-box -->

            <div class="text-box">

                <h3 class="counter"><?php echo esc_attr($number);?></h3>

                <p><?php echo esc_attr($title);?></p>

            </div><!-- /.text-box -->

        </div><!-- /.single-fact-counter -->

    </div>

<?php  return ob_get_clean();

}



add_shortcode('project_style_2', 'project_style_2_func');

function project_style_2_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'image'=>'',

     'subtitle'=>'',

     'title'=>'',

     'link'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <div class="col-md-3 col-sm-6 col-xs-12 masonary-item single-filter-item ">

        <div class="single-portfolio-style-two">

            <div class="img-box">

            <img src="<?php echo (esc_url($images[0]));?>" alt="Awesome Image"/>

                <div class="overlay">

                    <div class="box">

                        <div class="content">

                            <span><?php echo esc_attr($subtitle);?></span>

                            <a href="<?php echo esc_attr($link);?>"><h3><?php echo esc_attr($title);?></h3></a>

                            <a href="<?php echo (esc_url($images[0]));?>" class="img-popup industrio-icon-next"></a>

                        </div><!-- /.content -->

                    </div><!-- /.box -->

                </div><!-- /.overlay -->

            </div><!-- /.img-box -->

        </div><!-- /.single-portfolio-style-two -->

    </div>

<?php  return ob_get_clean();

}



add_shortcode('map', 'map_func');

function map_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'latitude'=>'',

     'longtitude'=>'',

     'image'=>'',

     'title'=>'',

     'place'=>'',

     'latitude_2'=>'',

     'longtitude_2'=>'',

     'title_2'=>'',

     'place_2'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <div 

      class="google-map" 

      id="contact-google-map" 

      data-map-lat="<?php echo esc_attr($latitude);?>" 

      data-map-lng="<?php echo esc_attr($longtitude);?>" 

      data-icon-path="<?php echo (esc_url($images[0]));?>"

      data-map-title=""

      data-map-zoom="11"

      data-markers='{

                "marker-1": [<?php echo esc_attr($latitude);?>, <?php echo esc_attr($longtitude);?>, "<h4><?php echo esc_attr($title);?></h4><p><?php echo esc_attr($place);?></p>"],

                "marker-2": [<?php echo esc_attr($latitude_2);?>, <?php echo esc_attr($longtitude_2);?>, "<h4><?php echo esc_attr($title_2);?></h4> <p><?php echo esc_attr($place_2);?></p>"]

            }'>



     </div>

<?php  return ob_get_clean();

}



add_shortcode('map_2', 'map_2_func');

function map_2_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'latitude'=>'',

     'longtitude'=>'',

     'image'=>'',

     'title'=>'',

     'place'=>'',

     'latitude_2'=>'',

     'longtitude_2'=>'',

     'title_2'=>'',

     'place_2'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <div class="col-md-6">

        <div 

          class="google-map" 

          id="contact-page-google-map" 

          data-map-lat="<?php echo esc_attr($latitude);?>" 

          data-map-lng="<?php echo esc_attr($longtitude);?>" 

          data-icon-path="<?php echo (esc_url($images[0]));?>"

          data-map-title=""

          data-map-zoom="11"

          data-markers='{

                "marker-1": [<?php echo esc_attr($latitude);?>, <?php echo esc_attr($longtitude);?>, "<h4><?php echo esc_attr($title);?></h4><p><?php echo esc_attr($place);?></p>"],

                "marker-2": [<?php echo esc_attr($latitude_2);?>, <?php echo esc_attr($longtitude_2);?>, "<h4><?php echo esc_attr($title_2);?></h4> <p><?php echo esc_attr($place_2);?></p>"]

            }'>



         </div>

    </div>

<?php  return ob_get_clean();

}





add_shortcode('slider_home3', 'slider_home3_func');

function slider_home3_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'type'=>'type1',

     'image'=>'',

     'title'=>'',

     'subtitle'=>'',

     'link'=>'',

     'text_btn'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <?php if($type == 'type1') {?>

    <div class="item active slide-1" style="background-image: url(<?php echo (esc_url($images[0]));?>);background-position: center center;">

                

        <div class="carousel-caption">

            <div class="container">

                <div class="box valign-middle">

                    <div class="content text-center">

                        <h2 data-animation="animated fadeInUp"><?php echo wp_specialchars_decode(esc_attr($title));?></h2>

                        <a href="<?php echo esc_attr($link);?>" class="banner-btn hvr-sweep-to-right" data-animation="animated fadeInDown"><?php echo esc_attr($text_btn);?> <i class="fa fa-arrow-right"></i></a>

                    </div>

                </div>

            </div>

        </div>                

    </div>

  <?php } elseif($type == 'type2') {?>

    <div class="item slide-2" style="background-image: url(<?php echo (esc_url($images[0]));?>);background-position: center center;">

                

        <div class="carousel-caption">

            <div class="container">

                <div class="box valign-middle">

                    <div class="content text-center">

                        <h2 data-animation="animated fadeInUp"><?php echo wp_specialchars_decode(esc_attr($title));?></h2>

                        <p data-animation="animated fadeInDown"><?php echo esc_attr($subtitle);?></p>

                        <a href="<?php echo esc_attr($link);?>" class="banner-btn hvr-sweep-to-right" data-animation="animated fadeInDown"><?php echo esc_attr($text_btn);?> <i class="fa fa-arrow-right"></i></a>

                    </div>

                </div>

            </div>

        </div>                

    </div>

  <?php } else { ?>

    <div class="item slide-3" style="background-image: url(<?php echo (esc_url($images[0]));?>);background-position: center center;">

                

        <div class="carousel-caption">

            <div class="container">

                <div class="box valign-middle">

                    <div class="content text-right">

                        <h2 data-animation="animated fadeInUp"><?php echo wp_specialchars_decode(esc_attr($title));?></h2>

                        <p data-animation="animated fadeInDown"><?php echo esc_attr($subtitle);?></p>

                        <a href="<?php echo esc_attr($link);?>" class="banner-btn hvr-sweep-to-right" data-animation="animated fadeInDown"><?php echo esc_attr($text_btn);?> <i class="fa fa-arrow-right"></i></a>

                    </div>

                </div>

            </div>

        </div>                

    </div>

  <?php } ?>

<?php  return ob_get_clean();

}



add_shortcode('about_style_02', 'about_style_02_func');

function about_style_02_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'title'=>'',

     'subtitle'=>'',

     'content_1'=>'',

     'image'=>'',

     'quote'=>'',

     'content_2'=>'',

     'link'=>'',

     'text_btn'=>'',

     'image2'=>'',

     'video'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    $images2 = wp_get_attachment_image_src($image2,'');

    ?>

    <section class="about-style-two sec-pad pt0">

        <div class="container">

            <div class="row">

                <div class="col-md-7">

                    <div class="about-content">

                        <h3><?php echo wp_specialchars_decode(esc_attr($title));?></h3>

                        <p class="tag-line"><?php echo wp_specialchars_decode(esc_attr($subtitle));?></p><!-- /.tag-line -->

                        <p><?php echo esc_attr($content_1)?></p>

                        <div class="quote-box">

                            <img src="<?php echo (esc_url($images[0]));?>" alt="Awesome Image"/>

                            <?php echo wp_specialchars_decode(esc_attr($quote));?>

                        </div><!-- /.qoute-box -->

                        <p><?php echo esc_attr($content_2)?></p>                        

                        <a href="<?php echo esc_attr($link)?>" class="view-more hvr-sweep-to-right"><?php echo esc_attr($text_btn)?></a>

                    </div><!-- /.about-content -->

                </div><!-- /.col-md-7 -->

                <div class="col-md-5">

                    <div class="video-box">

                        <img src="<?php echo (esc_url($images2[0]));?>" alt="Awesome Image"/>

                        <a href="<?php echo esc_attr($video)?>" class="video-popup"><i class="industrio-icon-play-button hvr-pulse"></i></a>

                    </div><!-- /.video-box -->

                </div><!-- /.col-md-5 -->

            </div><!-- /.row -->

        </div><!-- /.container -->

    </section>

<?php  return ob_get_clean();

}



add_shortcode('service_style_4', 'service_style_4_func');

function service_style_4_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'image'=>'',

     'icon'=>'',

     'title'=>'',

     'info'=>'',

     'link'=>'',

     'text_btn'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <div class="col-md-4 col-sm-6 col-xs-12">

        <div class="single-service-style-four">

            <div class="img-box">

                <img src="<?php echo (esc_url($images[0]));?>" alt="Awesome Image"/>

                <div class="box">

                    <div class="content">

                        <i class="<?php echo esc_attr($icon)?>"></i>

                        <h3><span><?php echo esc_attr($title)?></span> <br /> <?php echo esc_attr($info)?></h3>

                        <a href="<?php echo esc_attr($link)?>" class="more hvr-sweep-to-right"><?php echo esc_attr($text_btn)?></a>

                    </div><!-- /.content -->

                </div><!-- /.box -->

            </div><!-- /.img-box -->

        </div><!-- /.single-service-style-four -->

    </div>

<?php  return ob_get_clean();

}



add_shortcode('testimonials_style_02', 'testimonials_style_02_func');

function testimonials_style_02_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'image'=>'',

     'quote'=>'',

     'name'=>'',

     'info'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <div class="single-testimonials-style-three">

        <div class="img-box">

            <img src="<?php echo (esc_url($images[0]));?>" alt="Awesome Image"/>

        </div><!-- /.img-box -->

        <div class="text-box">

            <p><?php echo esc_attr($quote);?></p>

            <div class="client-name">

                - <span><?php echo esc_attr($name);?>,</span> <?php echo esc_attr($info);?>

            </div><!-- /.client-name -->

        </div><!-- /.text-box -->

    </div>

<?php  return ob_get_clean();

}



add_shortcode('team_style_02', 'team_style_02_func');

function team_style_02_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'image'=>'',

     'link_1'=>'',

     'link_2'=>'',

     'link_2'=>'',

     'name'=>'',

     'job'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <div class="item">

        <div class="single-team-style-two">

            <div class="img-box">

                <img src="<?php echo (esc_url($images[0]));?>" alt="Awesome Image"/>

                <div class="social">

                    <div class="inner">

                        <a href="<?php echo esc_attr($link_1);?>" class="fab fa-facebook-f"></a>

                        <a href="<?php echo esc_attr($link_2);?>" class="fab fa-twitter"></a>

                        <a href="<?php echo esc_attr($link_3);?>" class="fab fa-linkedin-in"></a>

                    </div><!-- /.inner -->

                </div><!-- /.social -->

            </div><!-- /.img-box -->

            <div class="text-box">

                <h3><?php echo esc_attr($name);?></h3>

                <p><?php echo esc_attr($job);?></p>

            </div><!-- /.text-box -->

        </div><!-- /.single-team-style-two -->

    </div>

<?php  return ob_get_clean();

}



add_shortcode('general_slider', 'general_slider_func');

function general_slider_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'image'=>'',

     'title'=>'',

     'home'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <div class="inner-banner" style="background-image: url(<?php echo (esc_url($images[0]));?>);background-position: center center;">

        <div class="container">

            <h3><?php echo esc_attr($title);?></h3>

            <ul class="breadcumb">

                <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_attr($home);?></a></li><!--

                --><li><span class="sep"><i class="fa fa-angle-right"></i></span></li><!--

                --><li><span><?php echo esc_attr($title);?></span></li>

            </ul><!-- /.breadcumb -->

        </div><!-- /.container -->

    </div>

<?php  return ob_get_clean();

}



add_shortcode('about_style_03', 'about_style_03_func');

function about_style_03_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'image'=>'',

     'title'=>'',

     'subtitle'=>'',

     'content_1'=>'',

     'content_2'=>'',

     'link'=>'',

     'text_btn'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <section class="about-style-three">

      <div class="container">

        <div class="row">

          <div class="col-md-6 col-sm-12 col-xs-12">

            <div class="about-img-box">

              <img src="<?php echo (esc_url($images[0]));?>" alt="Awesome Image"/>

              <div class="content">

                <span><?php echo esc_attr($title);?></span>

                <h3><?php echo esc_attr($subtitle);?></h3>

              </div><!-- /.content -->

            </div><!-- /.about-img-box -->

          </div><!-- /.col-md-6 -->

          <div class="col-md-6 col-sm-12 col-xs-12">

            <div class="about-content">

              <h3><?php echo esc_attr($content_1);?></h3>

              <p><?php echo esc_attr($content_2);?></p>

              <a href="<?php echo esc_attr($link);?>" class="about-btn hvr-sweep-to-right"><?php echo esc_attr($text_btn);?></a>

            </div><!-- /.about-content -->

          </div><!-- /.col-md-6 -->

        </div><!-- /.row -->

      </div><!-- /.container -->

    </section>

<?php  return ob_get_clean();

}



add_shortcode('features_style_02', 'features_style_02_func');

function features_style_02_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'icon'=>'',

     'title'=>'',

     'subtitle'=>'',

    ), $atts));

    ob_start();

    ?>

    <div class="col-md-4 col-sm-6 col-xs-12">

        <div class="single-features-style-two hvr-bounce-to-bottom">

            <div class="inner">

                <i class="<?php echo esc_attr($icon);?>"></i>

                <h3><?php echo esc_attr($title);?></h3>

                <p><?php echo esc_attr($subtitle);?></p>

            </div><!-- /.inner -->

        </div><!-- /.single-features-style-two -->

    </div>

<?php  return ob_get_clean();

}



add_shortcode('timeline_phone', 'timeline_phone_func');

function timeline_phone_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'value'=>'',

     'title'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <option value="<?php echo esc_attr($value);?>"><?php echo esc_attr($title);?></option>

<?php  return ob_get_clean();

}



add_shortcode('timeline', 'timeline_func');

function timeline_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'type'=>'type1',

     'link'=>'',

     'title'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <?php if($type == 'type1'){ ?>

    <li class="active" data-tab-name="year-start"><a aria-controls="year-start" data-toggle="tab" href="<?php echo esc_attr($link);?>"><?php echo esc_attr($title);?></a></li>

    <?php } else{ ?>

    <li data-tab-name=""><a aria-controls="year-start" data-toggle="tab" href="<?php echo esc_attr($link);?>"><?php echo esc_attr($title);?></a></li>

    <?php } ?>

<?php  return ob_get_clean();

}



add_shortcode('timeline_content', 'timeline_content_func');

function timeline_content_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'type'=>'type1',

     'value'=>'',

     'image'=>'',

     'title'=>'',

     'subtitle'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <?php if($type == 'type1'){ ?>

    <div class="tab-pane fade in active" id="<?php echo esc_attr($value);?>">

        <div class="row">

            <div class="col-md-6">

                <img src="<?php echo (esc_url($images[0]));?>" alt="Awesome Image"/>

            </div><!-- /.col-md-6 -->

            <div class="col-md-6">

                <div class="content">

                    <h3><?php echo esc_attr($title);?></h3>

                    <p><?php echo esc_attr($subtitle);?></p>

                </div><!-- /.content -->

            </div><!-- /.col-md-6 -->

        </div><!-- /.row -->

    </div>

    <?php } else{ ?>

    <div class="tab-pane fade in " id="<?php echo esc_attr($value);?>">

        <div class="row">

            <div class="col-md-6">

                <img src="<?php echo (esc_url($images[0]));?>" alt="Awesome Image"/>

            </div><!-- /.col-md-6 -->

            <div class="col-md-6">

                <div class="content">

                    <h3><?php echo esc_attr($title);?></h3>

                    <p><?php echo esc_attr($subtitle);?></p>

                </div><!-- /.content -->

            </div><!-- /.col-md-6 -->

        </div><!-- /.row -->

    </div>

    <?php } ?>

<?php  return ob_get_clean();

}



add_shortcode('service_style_5', 'service_style_5_func');

function service_style_5_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'image'=>'',

     'icon'=>'',

     'title'=>'',

     'info'=>'',

     'link'=>'',

     'text_btn'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <div class="item">

        <div class="single-service-style-four">

            <div class="img-box">

                <img src="<?php echo (esc_url($images[0]));?>" alt="Awesome Image"/>

                <div class="box">

                    <div class="content">

                        <i class="<?php echo esc_attr($icon);?>"></i>

                        <h3><span><?php echo esc_attr($title);?></span> <br /> <?php echo esc_attr($info);?></h3>

                        <a href="<?php echo esc_attr($link);?>" class="more hvr-sweep-to-right"><?php echo esc_attr($text_btn);?></a>

                    </div><!-- /.content -->

                </div><!-- /.box -->

            </div><!-- /.img-box -->

        </div><!-- /.single-service-style-four -->

    </div>

<?php  return ob_get_clean();

}



add_shortcode('testimonials_style_03', 'testimonials_style_03_func');

function testimonials_style_03_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'image'=>'',

     'title'=>'',

     'quote'=>'',

     'image2'=>'',

     'name'=>'',

     'info'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    $images2 = wp_get_attachment_image_src($image2,'');

    ?>

    <div class="item">

        <div class="single-testimonials-style-one">

            <img src="<?php echo (esc_url($images[0]));?>" class="qoute-img" alt="Awesome Image"/>

            <h3><?php echo esc_attr($title);?></h3>

            <p><?php echo esc_attr($quote);?></p>

            <div class="name-box">

                <div class="img-box">

                    <img src="<?php echo (esc_url($images2[0]));?>" alt="Awesome Image"/>

                </div><!-- /.img-box -->

                <div class="text-box">

                    <h4><?php echo esc_attr($name);?></h4>

                    <span><?php echo esc_attr($info);?></span>

                </div><!-- /.text-box -->

            </div><!-- /.name-box -->

        </div><!-- /.single-testimonials-style-one -->

    </div>

<?php  return ob_get_clean();

}





add_shortcode('message', 'message_func');

function message_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'image'=>'',

     'image2'=>'',

     'image3'=>'',

     'name'=>'',

     'job'=>'',

     'message'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    $images2 = wp_get_attachment_image_src($image2,'');

    $images3 = wp_get_attachment_image_src($image3,'');

    ?>

    <section class="ceo-message-wrapper" style="     

    background: #F4F5F5 url(<?php echo (esc_url($images3[0]));?>) center center no-repeat;">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <img src="<?php echo (esc_url($images[0]));?>" alt="Awesome Image"/>

                </div><!-- /.col-md-6 -->

                <div class="col-md-6">

                    <div class="ceo-message-content">

                        <h3><?php echo esc_attr($name);?></h3>

                        <span><?php echo esc_attr($job);?></span>

                        <p><?php echo esc_attr($message);?></p>

                        <img src="<?php echo (esc_url($images2[0]));?>" alt="Awesome Image"/>

                    </div><!-- /.ceo-message-content -->

                </div><!-- /.col-md-6 -->

            </div><!-- /.row -->

        </div><!-- /.container -->

    </section>

<?php  return ob_get_clean();

}



add_shortcode('testimonials_style_04', 'testimonials_style_04_func');

function testimonials_style_04_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'title'=>'',

     'name'=>'',

     'quote'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <div class="col-md-6">

        <div class="single-testimonial-style-four">

            <div class="top-box">

                <i class="qoute-icon industrio-icon-right-quote"></i>

                <div class="text-box">

                    <h3>“<?php echo esc_attr($title);?>”</h3>                                

                    <h4>- <?php echo esc_attr($name);?></h4>

                </div><!-- /.text-box -->

            </div><!-- /.top-box -->

            <div class="content-box">

                <p><?php echo esc_attr($quote);?></p>

                <div class="stars">

                    <i class="fas fa-star"></i>

                    <i class="fas fa-star"></i>

                    <i class="fas fa-star"></i>

                    <i class="fas fa-star"></i>

                    <i class="fas fa-star"></i>

                </div><!-- /.stars -->

            </div><!-- /.content-box -->

        </div><!-- /.single-testimonial-style-four -->

    </div>

<?php  return ob_get_clean();

}



add_shortcode('coming_soon', 'coming_soon_func');

function coming_soon_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'image'=>'',

     'image2'=>'',

     'title'=>'',

     'text_color'=>'',

     'subtitle'=>'',

     'time'=>'',

     'link1'=>'',

     'link2'=>'',

     'text_btn1'=>'',

     'text_btn2'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    $images2 = wp_get_attachment_image_src($image2,'');

    ?>

    <div class="coming-soon-block" style="     

    background: #000 url(<?php echo (esc_url($images[0]));?>) center center no-repeat;">

        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo"><img src="<?php echo (esc_url($images2[0]));?>" alt="Awesome Image"/></a>

        <div class="box">

            <div class="content">

                <h3><?php echo esc_attr($title);?> <span><?php echo esc_attr($text_color);?></span></h3>

                <p><?php echo esc_attr($subtitle);?></p>

                <ul class="countdown-box clearfix" data-countdown-time="<?php echo esc_attr($time);?>">

                    <!-- Loading content via jQuery -->

                </ul>

                <div class="btn-box">

                    <a href="<?php echo esc_attr($link1);?>" class="more-btn style-one hvr-sweep-to-right"><?php echo esc_attr($text_btn1);?> <i class="fa fa-arrow-right"></i></a><!-- 

                    --><a href="<?php echo esc_attr($link2);?>" class="more-btn style-two hvr-sweep-to-right"><?php echo esc_attr($text_btn2);?> <i class="fa fa-arrow-right"></i></a>

                </div><!-- /.btn-box -->

            </div><!-- /.content -->

        </div>

<?php  return ob_get_clean();

}



add_shortcode('contact', 'contact_func');

function contact_func($atts, $content = null){

    extract(shortcode_atts(array( 

     'image'=>'',

     'title'=>'',

     'subtitle'=>'',

     'link1'=>'',

     'link2'=>'',

     'link3'=>'',

     'link4'=>'',

     'video'=>'',

     'text_btn'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <section class="contact-info-style-two" style="     

    background: #000 url(<?php echo (esc_url($images[0]));?>) center center no-repeat;">

        <div class="container-fluid">

            <div class="col-md-6">

                <div class="left-content">

                    <div class="inner">

                        <h3><?php echo esc_attr($title);?></h3>

                        <?php echo wp_specialchars_decode(esc_attr($subtitle));?>

                        <div class="social">

                            <a href="<?php echo esc_attr($link1);?>" class="fab fa-facebook"></a>

                            <a href="<?php echo esc_attr($link2);?>" class="fab fa-twitter-square"></a>

                            <a href="<?php echo esc_attr($link3);?>" class="fab fa-instagram"></a>

                            <a href="<?php echo esc_attr($link4);?>" class="fab fa-linkedin"></a>

                        </div><!-- /.social -->

                    </div><!-- /.inner -->

                </div><!-- /.left-content -->

            </div><!-- /.col-md-6 -->

            <div class="col-md-6">

                <div class="right-video-box">

                    <a href="<?php echo esc_attr($video);?>" class="video-popup"><i class="industrio-icon-play-button"></i> <?php echo esc_attr($text_btn);?></a>

                </div><!-- /.right-video-box -->

            </div><!-- /.col-md-6 -->

        </div><!-- /.container-fluid -->

    </section>

<?php  return ob_get_clean();

}



add_shortcode('menu', 'menu_func');

function menu_func($atts, $content = null){

    extract(shortcode_atts(array(

     'link'=>'',

     'text_btn'=>'',

    ), $atts));

    ob_start();

    $images = wp_get_attachment_image_src($image,'');

    ?>

    <header class="header header-home-two stricky">

        <nav class="navbar navbar-default header-navigation">

            <div class="container clearfix">

                <!-- Brand and toggle get grouped for better mobile display -->

                <div class="navbar-header">

                    <button class="side-nav-toggler side-nav-opener"><i class="fa fa-bars"></i></button>

                </div>



                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse main-navigation mainmenu " id="main-nav-bar">

                    

                    <?php 

                              wp_nav_menu( 

                              array( 

                                    'theme_location' => 'primary',

                                    'container' => '',

                                    'menu_class' => '', 

                                    'menu_id' => '',

                                    'menu'            => '',

                                    'container_class' => '',

                                    'container_id'    => '',

                                    'echo'            => true,

                                     'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',

                                     'walker'            => new industrio_wp_bootstrap_navwalker(),

                                    'before'          => '',

                                    'after'           => '',

                                    'link_before'     => '',

                                    'link_after'      => '',

                                    'items_wrap'      => '<ul  class="nav navbar-nav navigation-box  %2$s">%3$s</ul>',

                                    'depth'           => 0,        

                                )

                             ); ?>                

                </div><!-- /.navbar-collapse -->

                <div class="right-side-box">

                    <a href="<?php echo esc_attr($link);?>" class="rqa-btn hvr-sweep-to-right"><span class="inner"><?php echo esc_attr($text_btn);?> <i class="fa fa-arrow-right"></i></span></a>

                </div><!-- /.right-side-box -->

            </div><!-- /.container -->

        </nav>   

    </header>

<?php  return ob_get_clean();

}










<?php
$root =dirname(dirname(dirname(dirname(dirname(__FILE__)))));

if ( file_exists( $root.'/wp-load.php' ) ) {
    require_once( $root.'/wp-load.php' );
} elseif ( file_exists( $root.'/wp-config.php' ) ) {
    require_once( $root.'/wp-config.php' );
}
header("Content-type: text/css; charset=utf-8");
function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}
global $industrio_redux_demo; 
$b=$industrio_redux_demo['main-color-1'];
$rgba = hex2rgb($b);  
?>
.header-navigation .container .right-side-box a.rqa-btn{
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.preloader{
    background-color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.sec-title span{
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.scroll-to-top:hover{
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.header-navigation .container .navbar-header button.side-nav-toggler:hover {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>!important;
}
.header-navigation .container .navbar-brand{
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>!important;
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>!important;
}
.header-navigation ul.navigation-box > li > .sub-menu li:hover > a{
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>!important;
}
.header-top .single-header-right-info .text-box p{
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>!important;
}
.header-top.home-three .top-info p span{
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>!important;
}
.header-top.home-three .top-info .social a:hover{
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>!important;
}
.header.header-home-two .header-navigation .container .right-side-box a.rqa-btn:hover{
    background-color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>!important;
}
.header.header-home-three .header-navigation .container .right-side-box a.rqa-btn{
    border-bottom: 3px solid <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>!important;
}
#minimal-bootstrap-carousel .carousel-control:hover{
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>!important;
}
.slider-home-one .content h2 span{
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>!important;
}
.slider-home-one .content a.banner-btn{
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>!important;
}
.main-slider h2 span{
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>!important;
}
.main-slider .theme-btn{
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>!important;
}
.hidden-sidebar .sidebar-content .navigation-box li a:hover {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>!important;
}
.hidden-sidebar .sidebar-content .navigation-box li.current a {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>!important;
 }
.hidden-sidebar .sidebar-content .navigation-box li + li{
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>!important;
}
.hidden-sidebar .sidebar-content .social a:hover{
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>!important;
}
.hidden-sidebar .sidebar-content p.copy-text i.fa-heart{
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.award-winning{
    border-bottom: 3px solid <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.header-navigation .container .right-side-box a.rqa-btn:after{
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.header-navigation ul.navigation-box > li > a:after{
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.header-navigation ul.navigation-box > li:before{
    background : <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.about-style-one .about-content a.about-btn {
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-service-style-two .hover .text-box a.more {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.service-carousel-style-two .owl-dots .owl-dot.active span {
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-service-style-two .hover {
    border-top: 3px solid <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-service-style-two .hover .icon-box i {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-service-style-two .overlay .icon-box i {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.about-style-one .about-content ul li i {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-service-style-one .back h3 {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-service-style-one .back {
    border-bottom: 3px solid <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-service-style-one .front i {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.service-carousel-one .owl-nav [class*=owl-]:hover {
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.portfolio-style-two .gallery-filter ul li.active span {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.portfolio-style-two .gallery-filter ul li.active span {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.portfolio-style-two .gallery-filter ul li span:after {
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.portfolio-style-two .single-portfolio-style-two .img-box .overlay .box .content a.img-popup {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.portfolio-style-two .single-portfolio-style-two .img-box .overlay .box .content span {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-testimonial-style-two p i.fas {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-testimonial-style-two .client-info-box .text-box p {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.feature-style-one [class*=col-md]:nth-child(2) {
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-team-style-one .img-box .name-box .inner {
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-team-style-one .text-box .social a:hover {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.faq-style-one .accrodion-grp .accrodion.active .accrodion-title h4 {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.faq-style-one a.more-info {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
    }
.rqa-box form.rqa-form input.hvr-sweep-to-right {
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}    
.blog-style-one .single-blog-style-one a.read-more {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.blog-style-one .single-blog-style-one h3:hover {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.blog-style-one .single-blog-style-one .meta-info a:hover {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.blog-style-one .blog-list-sidebar .btn-box a {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.blog-style-one .blog-list-sidebar .single-blog-list:hover h3 {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
footer.site-footer .footer-widget.subscribe-widget h3 {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}   
footer.site-footer .footer-widget.subscribe-widget form input.wpcf7-submit {
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}     
.scroll-to-top{
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.industrio-icon-play-button:before {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.sec-title span {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.header-navigation .container .navbar-header button.side-nav-toggler:hover {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.header-navigation .container .right-side-box a.rqa-btn {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.header-navigation .container .right-side-box a.rqa-btn:after {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.header-navigation ul.navigation-box > li:before {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.header-navigation ul.navigation-box > li > a:after {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.header-navigation ul.navigation-box > li > .sub-menu li:hover > a {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.header-top .single-header-right-info .text-box p {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.header-top.home-three .top-info p span {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.header-top.home-three .top-info .social a:hover {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.header.header-home-two .header-navigation .container .right-side-box a.rqa-btn:hover {
  background-color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.header.header-home-three .header-navigation .container .right-side-box a.rqa-btn {
  border-bottom: 3px solid <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
#minimal-bootstrap-carousel .carousel-control:hover {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.slider-home-one .content h2 span {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.slider-home-one .content a.banner-btn {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.main-slider h2 span {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.main-slider .theme-btn {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.hidden-sidebar .sidebar-content .navigation-box li a:hover {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.hidden-sidebar .sidebar-content .navigation-box li.current a {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.hidden-sidebar .sidebar-content .navigation-box li .subnav-toggler {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.hidden-sidebar .sidebar-content .social a:hover {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.hidden-sidebar .sidebar-content p.copy-text i.fa-heart {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
footer.site-footer .footer-widget.subscribe-widget h3 {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
footer.site-footer .footer-widget.subscribe-widget form.subscribe-form button {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.award-winning .title h3 span {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.blog-style-one .single-blog-style-one .meta-info a:hover {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.blog-style-one .single-blog-style-one h3:hover {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.blog-style-one .single-blog-style-one a.read-more {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.blog-style-one .blog-list-sidebar .single-blog-list:hover h3 {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.blog-style-one .blog-list-sidebar .btn-box a {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-blog-style-two .text-box h3:hover {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-blog-style-two .text-box .meta-info a:hover {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-blog-style-two .text-box .meta-info a i {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-blog-style-two .text-box a.more {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.blog-details-page .comment-box-wrapper .single-comment-box .text-box a.reply {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.blog-details-page .comment-form button.thm-btn {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.testimonials-style-one-carousel .owl-nav [class*=owl-]:hover {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-testimonial-style-two p i.fas {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-testimonial-style-two .client-info-box .text-box p {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.testimonials-style-three .single-testimonials-style-three .text-box .client-name span {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.testimonials-style-three-carousel .owl-nav [class*=owl-]:hover {
  border-color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.rqa-box h3 span {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.rqa-box form.rqa-form button {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.faq-style-one .accrodion-grp .accrodion.active .accrodion-title h4 {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.faq-style-one a.more-info {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-team-style-one .img-box .name-box .inner {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-team-style-one .text-box .social a:hover {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.team-style-two-carousel .owl-nav [class*=owl-]:hover {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.feature-style-one [class*=col-md]:nth-child(2) {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.contact-info-style-one {
  border-bottom: 3px solid <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.contact-info-style-one .title h3 span {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.contact-info-style-one .contact-infos .single-contact-infos .text-box h3 {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.contact-page form.contact-form button {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.contact-info-style-two .left-content:after {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.inner-banner ul.breadcumb a, .inner-banner ul.breadcumb span {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.inner-banner ul.breadcumb span.sep {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.error-404 .box .content h3 {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.error-404 .copy-text:after {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.coming-soon-block .box .content ul.countdown-box li .box h4 {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.coming-soon-block .box .content .btn-box a {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.coming-soon-block .copy-text:after {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.portfolio-style-two .gallery-filter ul li span:after {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.portfolio-style-two .gallery-filter ul li.active span {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.portfolio-style-two .single-portfolio-style-two .img-box .overlay .box .content span {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.portfolio-style-two .single-portfolio-style-two .img-box .overlay .box .content a.img-popup {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-service-style-one .front i {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-service-style-one .back {
  border-bottom: 3px solid <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-service-style-one .back h3 {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.service-carousel-one .owl-nav [class*=owl-]:hover {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-service-style-two .overlay .icon-box i {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-service-style-two .hover {
  border-top: 3px solid <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-service-style-two .hover .icon-box i {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-service-style-two .hover .text-box a.more {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.service-carousel-style-two .owl-dots .owl-dot.active span {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-service-style-three .text-box .inner {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-service-style-three .text-box .inner a.more {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-service-style-three .text-box:hover .inner .icon-box {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.service-style-four .row [class*=col-]:nth-child(1) .single-service-style-four .img-box .box .content h3 span {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-service-style-four .img-box .box .content a.more {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.gas.single-service-style-four .img-box .box .content h3 span {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.service-style-four-carousel .owl-nav [class*=owl-]:hover {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.about-style-one .about-content h3 span {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.about-style-one .about-content ul li i {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.about-style-one .about-content a.about-btn {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.about-style-two .about-content h3 span {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.about-style-two .about-content p.tag-line span {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.about-style-two .about-content .quote-box {
  border-left: 2px solid <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.about-style-two .about-content .quote-box h4 {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.about-style-two .about-content a.view-more {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.fact-counter-section .single-progress-bar .progress-scale .inner {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.fact-counter-section .single-fact-counter .text-box h3 {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.time-line .timeline-tab-select-form .bootstrap-select > .dropdown-toggle {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.time-line .timeline-tab-select-form .dropdown-menu > li.selected > a {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.time-line .timeline-tab-select-form .dropdown-menu > li > a:hover {
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.sidebar .single-sidebar.category-widget ul.category-list li a:hover {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.sidebar .single-sidebar.recent-post-widget .recent-post-list .single-recent-post h3:hover {
  color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.sidebar .single-sidebar.tags-widget ul.tags-list li a:hover {
  border-color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
  background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.about-style-three .about-img-box .content {
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.about-style-three .about-content a.about-btn {
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.single-features-style-two:before {
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.time-line ul.tab-title li.active a {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.time-line ul.tab-title li a:hover {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.service-style-four-carousel.owl-theme .owl-dots .owl-dot span:before {
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.service-style-four-carousel.owl-theme .owl-dots .owl-dot span:after {
    border: 2px solid <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.sidebar .single-sidebar.service-sidebar ul.service-list li a:before {
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.sidebar .single-sidebar.broucher-sidebar a.broucher-btn:hover i {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.project-details .project-details-content ul.meta-info li i {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.project-details .project-details-content .starts i {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.testimonials-style-four .single-testimonial-style-four .content-box .stars i {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.widget_categories ul li a:hover, .widget_archive ul li a:hover {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
ul.wp-tag-cloud li a:hover {
    border-color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
p.logged-in-as a:hover {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.contact-page form.contact-form input.wpcf7-submit {
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
div.product form.cart .button{
    border:1px solid <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.woocommerce-tabs .wc-tabs > li.active > a{
     border-top: 2px solid <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>!important;

}
#review_form_wrapper form button.submit{
    background-color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
a.view-all.shop_add_cart {
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
table.shop_table thead tr th{
    background-color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
td.product-name a:hover{
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.woocommerce .cart input.button{
    background-color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.wc-proceed-to-checkout a.checkout-button.button.alt.wc-forward {
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.woocommerce #payment #place_order, .woocommerce-page #payment #place_order , a.button.wc-backward ,.woocommerce-message a.button{
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.woocommerce-message {
    border-top-color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
 .star-rating span:before {
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.widget_product_tag_cloud .tagcloud a:hover {
    border-color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
    background: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
span.posted_in a:hover ,span.tagged_as a:hover , a.woocommerce-review-link:hover{
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.woocommerce p.stars a{
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
.widget_product_categories ul li a:hover{
    color: <?php echo esc_attr($industrio_redux_demo['main-color-1']); ?>;
}
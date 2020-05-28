<?php
$industrio_redux_demo = get_option('redux_demo');

//Custom fields:
require_once get_template_directory() . '/framework/wp_bootstrap_navwalker.php';
require_once get_template_directory() . '/framework/widget/recent-post.php';
require_once get_template_directory() . '/visual/shortcodes.php';
require_once get_template_directory() . '/visual/vc_shortcode.php';
//Theme Set up:
function industrio_theme_setup() {
    /*
     * This theme uses a custom image size for featured images, displayed on
     * "standard" posts and pages.
     */
	add_theme_support( 'custom-header' ); 
  remove_filter ('the_content', 'wpautop');
	add_theme_support( 'custom-background' );
	$lang = get_template_directory_uri() . '/languages';
  load_theme_textdomain('industrio', $lang);
    add_theme_support( 'post-thumbnails' );
    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );
    // Switches default core markup for search form, comment form, and comments
    // to output valid HTML5.
    add_theme_support( "title-tag" );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
    // This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
    'primary' =>  esc_html__( 'Primary Navigation Menu.', 'industrio' ),
    'mobile' =>  esc_html__( 'Navigation Menu: Chosen menu in mobile.', 'industrio' ),
    'service' =>  esc_html__( 'Service Navigation Menu: Chosen menu in sidebar on single service', 'industrio' ),
	) );
    // This theme uses its own gallery styles.
}
add_action( 'after_setup_theme', 'industrio_theme_setup' );
if ( ! isset( $content_width ) ) $content_width = 900;

function industrio_fonts_url() {
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'industrio' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Nunito:300,400,700&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}

function industrio_theme_scripts_styles() {
	$industrio_redux_demo = get_option('redux_demo');
	$protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style( 'settings', get_template_directory_uri().'/plugins/revolution/css/settings.css');
    wp_enqueue_style( 'layers', get_template_directory_uri().'/plugins/revolution/css/layers.css');
    wp_enqueue_style( 'navigation', get_template_directory_uri().'/plugins/revolution/css/navigation.css');
    wp_enqueue_style( 'industrio-style', get_template_directory_uri().'/css/style.css');
    wp_enqueue_style( 'responsive', get_template_directory_uri().'/css/responsive.css');
    
    wp_enqueue_style( 'industrio-css', get_stylesheet_uri(), array(), '2018-08-23' );

if(isset($industrio_redux_demo['chosen-color']) && $industrio_redux_demo['chosen-color']==1){
    wp_enqueue_style( 'color', get_template_directory_uri().'/framework/color.php');
    }    
if(isset($industrio_redux_demo['support-rtl']) && $industrio_redux_demo['support-rtl']==1){
    wp_enqueue_style( 'support-rtl', get_template_directory_uri().'/rtl.css');
    }
    
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );
  //Javascript
    wp_enqueue_script("industrio-jquery", get_template_directory_uri()."/js/jquery.js",array(),false,true);
    wp_enqueue_script("bootstrap", get_template_directory_uri()."/js/bootstrap.min.js",array(),false,true);
    wp_enqueue_script("bootstrap-select", get_template_directory_uri()."/js/bootstrap-select.min.js",array(),false,true);
    
    wp_enqueue_script("validate", get_template_directory_uri()."/js/jquery.validate.min.js",array(),false,true);
    
    
    wp_enqueue_script("owl-carousel", get_template_directory_uri()."/js/owl.carousel.min.js",array(),false,true);
    wp_enqueue_script("isotope", get_template_directory_uri()."/js/isotope.js",array(),false,true);
    wp_enqueue_script("magnific-popup", get_template_directory_uri()."/js/jquery.magnific-popup.min.js",array(),false,true);
    wp_enqueue_script("waypoints", get_template_directory_uri()."/js/waypoints.min.js",array(),false,true);
    wp_enqueue_script("counterup", get_template_directory_uri()."/js/jquery.counterup.min.js",array(),false,true);
    wp_enqueue_script("wow", get_template_directory_uri()."/js/wow.min.js",array(),false,true);
    
    wp_enqueue_script("easing", get_template_directory_uri()."/js/jquery.easing.min.js",array(),false,true);
    wp_enqueue_script("countdown", get_template_directory_uri()."/js/jquery.countdown.min.js",array(),false,true);
    wp_enqueue_script("appear", get_template_directory_uri()."/js/jquery.appear.js",array(),false,true);
    wp_enqueue_script("countTo", get_template_directory_uri()."/js/jquery.countTo.js",array(),false,true);
    wp_enqueue_script("custom", get_template_directory_uri()."/js/custom.js",array(),false,true);
    wp_enqueue_script("industrio-map", $protocol ."://maps.googleapis.com/maps/api/js?key=AIzaSyDeEODj4mnpmSCoPcBVOIPzzHXRZLHHd3Q&callback=initMap");
    wp_enqueue_script("gmaps", get_template_directory_uri()."/js/gmaps.js",array(),false,true);
    wp_enqueue_script("map-helper", get_template_directory_uri()."/js/map-helper.js",array(),false,true);
    wp_enqueue_script("themepunch-revolution", get_template_directory_uri()."/plugins/revolution/js/jquery.themepunch.revolution.min.js",array(),false,true);
    wp_enqueue_script("themepunch-tools", get_template_directory_uri()."/plugins/revolution/js/jquery.themepunch.tools.min.js",array(),false,true);
    wp_enqueue_script("extension-actions", get_template_directory_uri()."/plugins/revolution/js/extensions/revolution.extension.actions.min.js",array(),false,true);
    wp_enqueue_script("extension-carousel", get_template_directory_uri()."/plugins/revolution/js/extensions/revolution.extension.carousel.min.js",array(),false,true);
    wp_enqueue_script("extension-kenburn", get_template_directory_uri()."/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js",array(),false,true);
    wp_enqueue_script("extension-layeranimation", get_template_directory_uri()."/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js",array(),false,true);
    wp_enqueue_script("extension-migration", get_template_directory_uri()."/plugins/revolution/js/extensions/revolution.extension.migration.min.js",array(),false,true);
    wp_enqueue_script("extension-navigation", get_template_directory_uri()."/plugins/revolution/js/extensions/revolution.extension.navigation.min.js",array(),false,true);
    wp_enqueue_script("extension-parallax", get_template_directory_uri()."/plugins/revolution/js/extensions/revolution.extension.parallax.min.js",array(),false,true);
    wp_enqueue_script("extension-slideanims", get_template_directory_uri()."/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js",array(),false,true);
    wp_enqueue_script("extension-video", get_template_directory_uri()."/plugins/revolution/js/extensions/revolution.extension.video.min.js",array(),false,true);
    wp_enqueue_script("main-slider-script", get_template_directory_uri()."/js/main-slider-script.js",array(),false,true);

}
    
add_action( 'wp_enqueue_scripts', 'industrio_theme_scripts_styles' );

add_filter('style_loader_tag', 'myplugin_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'myplugin_remove_type_attr', 10, 2);

function myplugin_remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}


//Custom Excerpt Function
function industrio_do_shortcode($content) {
    global $shortcode_tags;
    if (empty($shortcode_tags) || !is_array($shortcode_tags))
        return $content;
    $pattern = get_shortcode_regex();
    return preg_replace_callback( "/$pattern/s", 'do_shortcode_tag', $content );
}   
// Widget Sidebar
function industrio_widgets_init() {
	register_sidebar( array(
    'name'          => esc_html__( 'Primary Sidebar', 'industrio' ),
    'id'            => 'sidebar-1',        
        'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'industrio' ),        
        'before_widget' => '<aside id="%1$s" class="widget popular-categories %2$s" >',        
        'after_widget'  => '</aside>',        
        'before_title'  => '<div class="sidebar-title">
                                   <h3>',        
        'after_title'   => '</h3>
                              </div>'
    ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Service Sidebar', 'industrio' ),
    'id'            => 'sidebar-service',        
        'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'industrio' ),        
        'before_widget' => '<aside id="%1$s" class="widget popular-categories %2$s" >',        
        'after_widget'  => '</aside>',        
        'before_title'  => '<div class="sidebar-title">
                                   <h3>',        
        'after_title'   => '</h3>
                              </div>'
    ) );

    register_sidebar( array(
    'name'          => esc_html__( 'Shop Sidebar', 'industrio' ),
    'id'            => 'sidebar-shop',        
        'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'industrio' ),        
        'before_widget' => '<aside id="%1$s" class="widget popular-categories %2$s" >',        
        'after_widget'  => '</aside>',        
        'before_title'  => '<div class="sidebar-title">
                                   <h3>',        
        'after_title'   => '</h3>
                              </div>'
    ) );

    register_sidebar( array(
    'name'          => esc_html__( 'Footer One Widget', 'industrio' ),
    'id'            => 'footer-area-1',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'industrio' ),
    'before_widget' => ' ',
    'after_widget'  => ' ',
    'before_title'  => ' ',
    'after_title'   => ' ',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer Two Widget', 'industrio' ),
    'id'            => 'footer-area-2',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'industrio' ),
    'before_widget' => ' ',
    'after_widget'  => ' ',
    'before_title'  => ' ',
    'after_title'   => ' ',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer Three Widget', 'industrio' ),
    'id'            => 'footer-area-3',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'industrio' ),
    'before_widget' => ' ',
    'after_widget'  => ' ',
    'before_title'  => ' ',
    'after_title'   => ' ',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer Four Widget', 'industrio' ),
    'id'            => 'footer-area-4',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'industrio' ),
    'before_widget' => ' ',
    'after_widget'  => ' ',
    'before_title'  => ' ',
    'after_title'   => ' ',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer Home One Widget', 'industrio' ),
    'id'            => 'footer-home-area-1',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'industrio' ),
    'before_widget' => ' ',
    'after_widget'  => ' ',
    'before_title'  => ' ',
    'after_title'   => ' ',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer Home Two Widget', 'industrio' ),
    'id'            => 'footer-home-area-2',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'industrio' ),
    'before_widget' => ' ',
    'after_widget'  => ' ',
    'before_title'  => ' ',
    'after_title'   => ' ',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Footer Home Three Widget', 'industrio' ),
    'id'            => 'footer-home-area-3',
    'description'   => esc_html__( 'Footer Widget that appears on the Footer.', 'industrio' ),
    'before_widget' => ' ',
    'after_widget'  => ' ',
    'before_title'  => ' ',
    'after_title'   => ' ',
  ) );
    register_sidebar( array(
    'name'          => esc_html__( 'Widget Area 1', 'industrio' ),
    'id'            => 'widget-area-1',
    'description'   => esc_html__( 'Widget Area 1.', 'industrio' ),
    'before_widget' => ' ',
    'after_widget'  => ' ',
    'before_title'  => ' ',
    'after_title'   => ' ',
  ) );
}
add_action( 'widgets_init', 'industrio_widgets_init' );

//function tag widgets
function industrio_tag_cloud_widget($args) {
	$args['number'] = 0; //adding a 0 will display all tags
	$args['largest'] = 18; //largest tag
	$args['smallest'] = 11; //smallest tag
	$args['unit'] = 'px'; //tag font unit
	$args['format'] = 'list'; //ul with a class of wp-tag-cloud
	$args['exclude'] = array(20, 80, 92); //exclude tags by ID
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'industrio_tag_cloud_widget' );
function industrio_excerpt() {
  $industrio_redux_demo = get_option('redux_demo');
  if(isset($industrio_redux_demo['blog_excerpt'])){
    $limit = $industrio_redux_demo['blog_excerpt'];
  }else{
    $limit = 30;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

//pagination
if (!function_exists( 'next_pagination' )){
 
    function next_pagination(){
 
        if ( $GLOBALS['wp_query']->max_num_pages <2 ){ return ''; }?>
 
            <?php if ( function_exists('wp_pagenavi') ): ?>
 
            <?php wp_pagenavi(); ?> 
 
            <?php else: ?>
                <nav class="pagination" role="navigation">
 
                    <?php if ( get_next_posts_link() ) : ?>
 
                        <button><?php next_posts_link( __('Previous', 'industrio') ); ?></button>
 
                    <?php endif; ?>
 
                    <?php if ( get_previous_posts_link() ) :?>
 
                        <button><?php previous_posts_link(__('Next', 'industrio') ); ?></button>
 
                    <?php endif; ?>
 
                </nav>
 
             <?php endif; ?>
 
       <?php }
}
function industrio_pagination($pages='') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    if($pages==''){
        global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
    }
    $pagination = array(
    'base'      => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
    'format'    => '',
    'current'     => max( 1, get_query_var('paged') ),
    'total'     => $pages,
    'prev_text' => wp_specialchars_decode(esc_html__( '<i class = "fa fa-angle-left"></i>', 'industrio' ),ENT_QUOTES),
    'next_text' => wp_specialchars_decode(esc_html__( '<i class = "fa fa-angle-right"></i>', 'industrio' ),ENT_QUOTES),
    'type'      => 'list',
    'end_size'    => 3,
    'mid_size'    => 3
);
    $return =  paginate_links( $pagination );
  echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination">', $return );
}

function industrio_search_form( $form ) {
    $form = '
  <form  method="get" action="' . esc_url(home_url('/')) . '"> 
            <input type="text"  placeholder="'.esc_attr__('Search', 'industrio').'" value="' . get_search_query() . '" name="s" > 
  </form>
	';
    return $form;
}
add_filter( 'get_search_form', 'industrio_search_form' );
//Custom comment List:


 
add_action( 'wp_login_form', 'industrio_my_form_login' );
function industrio_my_form_login( $args = array() ) {
$defaults = array(
        'echo' => true,
        'redirect' => site_url( '/wp-admin' ), 
        'form_id' => 'loginform',
        'label_username' => esc_html__( 'Username' , 'industrio'),
        'label_password' => esc_html__( 'Password', 'industrio' ),
        'label_remember' => esc_html__( 'Remember Me', 'industrio' ),
        'label_log_in' => esc_html__( 'Sign in' , 'industrio'),
        'id_username' => 'user_login',
        'id_password' => 'user_pass',
        'id_email'    => 'email',
        'id_remember' => 'rememberme',
        'id_submit' => 'wp-submit',
        'remember' => true,
        'value_username' => '',
        'value_remember' => false,
);
$args = wp_parse_args( $args, apply_filters( 'login_form_defaults', $defaults ) );

$form = '

        <form name="' . $args['form_id'] . '" id="' . $args['form_id'] . '" action="' . esc_url( site_url( 'wp-login.php', 'login_post' ) ) . '" method="post">
                ' . apply_filters( 'login_form_top', '', $args ) . '                
                <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input type="text" class="form-control" name="log" placeholder="Username" id=" '.esc_attr( $args['id_email'] ).'" value="' . esc_attr( $args['value_username'] ) . '" required="required"/>
                   
                </div>
                <div class="form-group">
                        <label for="key" class="sr-only">Password</label>
                        <input type="password" name="pwd" id="' . esc_attr( $args['id_password'] ) . '" class="form-control" placeholder="Password" value="" size="20" required="required"/>
                    
                </div>
                ' . apply_filters( 'login_form_middle', '', $args ) . '
                
                <div class="form-group">
                        <input type="submit" name="wp-submit" id="' . esc_attr( $args['id_submit'] ) . '" class="btn btn-primary btn-block" value="' . esc_attr( $args['label_log_in'] ) . '" />
                        <input type="hidden" name="redirect_to" value="' . esc_url( $args['redirect'] ) . '" />
                </div>
                ' . apply_filters( 'login_form_bottom', '', $args ) . '
        </form>';

if ( $args['echo'] )
        echo $form;
else
        return $form;
    }


 
// Comment Form
function industrio_theme_comment($comment, $args, $depth) {
    //echo 's';
   $GLOBALS['comment'] = $comment; ?>
    <?php if(get_avatar($comment,$size='75' )!=''){?>

        <div class="single-comment-box">
            <div class="img-box">
                <?php echo get_avatar($comment,$size='75' ); ?>
            </div><!-- /.img-box -->
            <div class="text-box">
                <div class="inner">
                    <h3><?php printf( get_comment_author_link()) ?></h3>
                    <span class="date"> <?php the_time('F Y, j'); ?></span>
                    <p><?php comment_text() ?></p>
                    <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                </div><!-- /.inner -->
            </div><!-- /.text-box -->
        </div>

  <?php }else{?>
        <div class="single-comment-box">
            <div class="text-box">
                <div class="inner">
                    <h3><?php printf( get_comment_author_link()) ?></h3>
                    <span class="date"> <?php the_time('F Y j'); ?></span>
                    <p><?php comment_text() ?></p>
                    <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                </div><!-- /.inner -->
            </div><!-- /.text-box -->
        </div>
      
<?php }?>

<?php
}

function industrio_custom_css_classes_for_vc_row_and_vc_column($class_string, $tag) {
    if($tag=='vc_row' || $tag=='vc_row_inner') {
        $class_string = str_replace('vc_row-fluid', '', $class_string);
    }
    if($tag=='vc_column' || $tag=='vc_column_inner') {
    $class_string = preg_replace('/vc_col-sm-12/', 'col-md-12', $class_string);
    $class_string = preg_replace('/vc_col-sm-6/', 'col-md-6', $class_string);
    $class_string = preg_replace('/vc_col-sm-4/', 'col-md-4', $class_string);
    $class_string = preg_replace('/vc_col-sm-3/', 'col-md-3', $class_string);
    $class_string = preg_replace('/vc_col-sm-5/', 'col-md-5', $class_string);
    $class_string = preg_replace('/vc_col-sm-7/', 'col-md-7', $class_string);
    $class_string = preg_replace('/vc_col-sm-8/', 'col-md-8', $class_string);
    $class_string = preg_replace('/vc_col-sm-9/', 'col-md-9', $class_string);
    $class_string = preg_replace('/vc_col-sm-10/', 'col-md-10', $class_string);
    $class_string = preg_replace('/vc_col-sm-11/', 'col-md-11', $class_string);
    $class_string = preg_replace('/vc_col-sm-1/', 'col-md-1', $class_string);
    $class_string = preg_replace('/vc_col-sm-2/', 'col-md-2', $class_string);
    }
    return $class_string;
}
// Filter to Replace default css class for vc_row shortcode and vc_column
add_filter('vc_shortcodes_css_class', 'industrio_custom_css_classes_for_vc_row_and_vc_column', 10, 2); 
// Add new Param in Row
if(function_exists('vc_add_param')){

vc_add_param('vc_row',array(
                             'type' => 'dropdown',
                             'heading' => esc_html__( 'Chosen type row', 'industrio' ),
                             'param_name' => 'type_row',
                             'value' => array(
                                esc_html__( 'None Section', 'industrio' ) => 'type2',
                                esc_html__( 'Slider Home 1', 'industrio' ) => 'slider_home1',
                                esc_html__( 'Slider Home 2', 'industrio' ) => 'slider_home2',
                                esc_html__( 'Slider Home 3', 'industrio' ) => 'slider_home3',
                                esc_html__( 'Service Style 01', 'industrio' ) => 'service_style_01',
                                esc_html__( 'Service Style 02', 'industrio' ) => 'service_style_02',
                                esc_html__( 'Service Style 03', 'industrio' ) => 'service_style_03',
                                esc_html__( 'Service Style 04', 'industrio' ) => 'service_style_04',
                                esc_html__( 'Service Style 05', 'industrio' ) => 'service_style_05',
                                esc_html__( 'Testimonials Style 01', 'industrio' ) => 'testimonials_style_01',
                                esc_html__( 'Testimonials Style 02', 'industrio' ) => 'testimonials_style_02',
                                esc_html__( 'Testimonials Style 03', 'industrio' ) => 'testimonials_style_03',
                                esc_html__( 'Testimonials Style 04', 'industrio' ) => 'testimonials_style_04',
                                esc_html__( 'Features Style 01', 'industrio' ) => 'features_style_01',
                                esc_html__( 'Features Style 02', 'industrio' ) => 'features_style_02',
                                esc_html__( 'Features Style 03', 'industrio' ) => 'features_style_03',
                                esc_html__( 'Features Style 04', 'industrio' ) => 'features_style_04',
                                esc_html__( 'Team Style 01', 'industrio' ) => 'team_style_01',
                                esc_html__( 'Team Style 02', 'industrio' ) => 'team_style_02',
                                esc_html__( 'Team Style 03', 'industrio' ) => 'team_style_03',
                                esc_html__( 'FAQ Style 01', 'industrio' ) => 'faq_style_01',
                                esc_html__( 'FAQ Style 02', 'industrio' ) => 'faq_style_02',
                                esc_html__( 'Blog Style 01', 'industrio' ) => 'blog_style_01',
                                esc_html__( 'Blog Style 02', 'industrio' ) => 'blog_style_02',
                                esc_html__( 'Brand', 'industrio' ) => 'brand',
                                esc_html__( 'Fact Counter', 'industrio' ) => 'fact-counter',
                                esc_html__( 'Portfolio', 'industrio' ) => 'portfolio',
                                esc_html__( 'Timeline', 'industrio' ) => 'timeline',
                                esc_html__( 'Contact', 'industrio' ) => 'contact',
                             ),
                             'description' => esc_html__( 'Select type row', 'industrio' )
      )); 



vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Title', 'industrio'),
                              "param_name" => "ses_title",
                              "value" => "",
                              "description" => esc_html__("Title of Section, Leave a blank do not show frontend.", "industrio"),   
    ));

vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Title 2', 'industrio'),
                              "param_name" => "ses_title_2",
                              "value" => "",
                              "description" => esc_html__("Title 2 of Section, Leave a blank do not show frontend.", "industrio"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Color Text', 'industrio'),
                              "param_name" => "ses_text_color",
                              "value" => "",
                              "description" => esc_html__("Section Color Text, Leave a blank do not show frontend.", "industrio"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textarea",
                              "heading" => esc_html__('Section Subtitle', 'industrio'),
                              "param_name" => "ses_subtitle",
                              "value" => "",
                              "description" => esc_html__("Section Subtitle, Leave a blank do not show frontend.", "industrio"),   
    ));
vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Link', 'industrio'),
                              "param_name" => "ses_link",
                              "value" => "",
                              "description" => esc_html__("Section Link, Leave a blank do not show frontend.", "industrio"),   
    ));


vc_add_param('vc_row',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Text Button', 'industrio'),
                              "param_name" => "ses_text_btn",
                              "value" => "",
                              "description" => esc_html__("Section Text Button, Leave a blank do not show frontend.", "industrio"),   
    ));
vc_add_param('vc_row',array(
                             'type' => 'attach_image',
                             'heading' => esc_html__( 'Image', 'industrio' ),
                             'param_name' => 'ses_image',
                             'value' => '',
                             'description' => esc_html__( 'Select image from media library to do your signature.', 'industrio' )
      ));
  
vc_add_param('vc_column',array(
                             'type' => 'dropdown',
                             'heading' => esc_html__( 'Type', 'industrio' ),
                             'param_name' => 'type',
                             'value' => array(
                                esc_html__( 'None', 'industrio' ) => 'none',
                                esc_html__( 'FAQ Style 01', 'industrio' ) => 'faq_style_01',
                                esc_html__( 'Form Request Quote', 'industrio' ) => 'form_request_a_quote',
                                esc_html__( 'Blog', 'industrio' ) => 'blog',
                                esc_html__( 'Progress Box', 'industrio' ) => 'progress_box',
                                esc_html__( 'Fact Counter', 'industrio' ) => 'fact_counter',
                                esc_html__( 'Timeline Show In Phone', 'industrio' ) => 'timeline_phone',
                                esc_html__( 'Timeline', 'industrio' ) => 'timeline',
                                esc_html__( 'Timeline Content', 'industrio' ) => 'timeline_content',
                                esc_html__( '6 Column', 'industrio' ) => 'column_6',
                                
                                                           ),
                             'description' => esc_html__( 'Select type section content', 'industrio' )
      )); 
vc_add_param('vc_column',array(
                             'type' => 'attach_image',
                             'heading' => esc_html__( 'Image Background', 'industrio' ),
                             'param_name' => 'image',
                             'value' => '',
                             'description' => esc_html__( 'Select image from media library to do your signature.', 'industrio' )
      ));
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Title', 'industrio'),
                              "param_name" => "title",
                              "value" => "",
                              "description" => esc_html__("Title of Section, Leave a blank do not show frontend.", "industrio"),   
    ));
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Color Text', 'industrio'),
                              "param_name" => "color_text",
                              "value" => "",
                              "description" => esc_html__("Color Text, Leave a blank do not show frontend.", "industrio"),   
    ));

vc_add_param('vc_column',array(
                              "type" => "textarea",
                              "heading" => esc_html__('Section Subtitle', 'industrio'),
                              "param_name" => "subtitle",
                              "value" => "",
                              "description" => esc_html__("Section Subtitle, Leave a blank do not show frontend.", "industrio"),   
    ));
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Link', 'industrio'),
                              "param_name" => "link",
                              "value" => "",
                              "description" => esc_html__("Link Button, Leave a blank do not show frontend.", "industrio"),   
    ));
vc_add_param('vc_column',array(
                              "type" => "textfield",
                              "heading" => esc_html__('Section Text Button', 'industrio'),
                              "param_name" => "text_button",
                              "value" => "",
                              "description" => esc_html__("Text of Button, Leave a blank do not show frontend.", "industrio"),   
    ));


}

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin <thomasgriffinmedia.com>
 * @author     Gary Jones <gamajo.com>
 * @copyright  Copyright (c) 2014, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'industrio_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
 
 
function industrio_theme_register_required_plugins() {
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
      array(
            'name'                     => esc_html__( 'Contact Form 7', 'industrio' ),
            'slug'                     => 'contact-form-7',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/contact-form-7.zip',
        ),
      array(
            'name'      => esc_html__( 'One Click Demo Import', 'industrio' ),
            'slug'      => 'one-click-demo-import',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'Classic Editor', 'industrio' ),
            'slug'      => 'classic-editor',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'Widget Importer & Exporter', 'industrio' ),
            'slug'      => 'widget-importer-&-exporter',
            'required'  => true,
        ), 
      array(
            'name'               => esc_html__( 'WPBakery Visual Composer', 'industrio' ), // The plugin name.
            'slug'               => 'visualcomposer',
            'source'             => get_template_directory_uri() . '/framework/plugins/js_composer.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
      array(
            'name'               => esc_html__( 'Woocommerce', 'industrio' ), // The plugin name.
            'slug'               => 'woocommerce',
            'source'             => get_template_directory_uri() . '/framework/plugins/woocommerce.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
      array(
            'name'               => esc_html__( 'WP Custom Register Login', 'industrio' ), // The plugin name.
            'slug'               => 'wp-custom-register-login',
            'source'             => get_template_directory_uri() . '/framework/plugins/wp-custom-register-login.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        ),
      array(
            'name'                     => esc_html__( 'Industrio Common', 'industrio' ),
            'slug'                     => 'industrio-common',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/industrio-common.zip',
        )
    );
    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => esc_html__( 'Install Required Plugins', 'industrio' ),
            'menu_title'                      => esc_html__( 'Install Plugins', 'industrio' ),
            'installing'                      => esc_html__( 'Installing Plugin: %s', 'industrio' ), // %s = plugin name.
            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'industrio' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'industrio' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'industrio' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'industrio' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'industrio' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'industrio' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'industrio' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'industrio' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'industrio' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'industrio' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'industrio' ),
            'return'                          => esc_html__( 'Return to Required Plugins Installer', 'industrio' ),
            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'industrio' ),
            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'industrio' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
    tgmpa( $plugins, $config );
}





function industrio_import_files() {
    return array(
        array(
            'import_file_name'           => 'Demo Import Industrio',
            'import_file_url'            => 'http://shtheme.com/import/industrio/content.xml',
            'import_preview_image_url'   => 'http://shtheme.com/import/industrio/Image-Preview.png',
            'import_notice'              => esc_html__( 'Import data example industrio', 'industrio' ),
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'industrio_import_files' );




function industrio_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Primary Menu', 'primary' );
    

    set_theme_mod( 'nav_menu_locations', array(
            'primary' => $main_menu->term_id,
            
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home Page One' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'industrio_after_import_setup' );


?>
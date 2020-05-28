<!doctype html>

<html class="no-js" lang="zxx">

<?php $industrio_redux_demo = get_option('redux_demo'); ?>

    <head>

    <meta name="msapplication-TileColor" content="#ffffff">

    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">

    <meta name="theme-color" content="#ffffff">

    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {

        ?>

    <link rel="shortcut icon" href="<?php if(isset($industrio_redux_demo['favicon']['url'])){?><?php echo esc_url($industrio_redux_demo['favicon']['url']); ?><?php }?>">


    <?php }?>

    <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>

      

        <div class="preloader"><div class="spinner"></div></div> <!-- /.preloader -->



        <!-- header start -->

        <div class="page-wrapper">

    

          <div class="header-top home-three">

              <div class="top-info">

                  <div class="container">

                      <div class="pull-left left-text">

                          <p><?php echo wp_specialchars_decode(esc_attr($industrio_redux_demo['greeting']));?> <span><?php echo wp_specialchars_decode(esc_attr($industrio_redux_demo['name_theme']));?></span></p>

                      </div><!-- /.pull-left -->

                      <div class="pull-right social">

                          <a href="<?php echo wp_specialchars_decode(esc_attr($industrio_redux_demo['link_fb']));?>" class="fab fa-facebook-f"></a><!--

                          --><a href="<?php echo wp_specialchars_decode(esc_attr($industrio_redux_demo['link_tw']));?>" class="fab fa-twitter"></a><!--

                          --><a href="<?php echo wp_specialchars_decode(esc_attr($industrio_redux_demo['link_google']));?>" class="fab fa-google-plus-g"></a><!--

                          --><a href="<?php echo wp_specialchars_decode(esc_attr($industrio_redux_demo['link_linke']));?>" class="fab fa-linkedin-in"></a>

                      </div><!-- /.pull-right -->

                  </div><!-- /.container -->

              </div><!-- /.top-info -->

              <div class="container">

                  <div class="logo pull-left">

                      <a href="<?php echo esc_url(home_url('/')); ?>">

                        <?php if(isset($industrio_redux_demo['logo']['url']) && $industrio_redux_demo['logo']['url'] != ''){ ?>

                            <img src="<?php echo esc_url($industrio_redux_demo['logo']['url']); ?>" alt="Awesome Image">

                        <?php }else{ ?>

                            <img src="<?php echo get_template_directory_uri();?>/img/logo2-1.png" alt="Awesome Image">

                        <?php } ?>

                      </a>  

                  </div><!-- /.logo -->

                  <div class="header-right-info pull-right">

                      <div class="single-header-right-info">

                          <div class="icon-box">

                              <i class="industrio-icon-phone-call"></i>

                          </div><!-- /.icon-box -->

                          <div class="text-box">

                              <p><?php echo wp_specialchars_decode(esc_attr($industrio_redux_demo['phone1']));?></p>

                              <h3><?php echo wp_specialchars_decode(esc_attr($industrio_redux_demo['phone2']));?></h3>

                          </div><!-- /.text-box -->

                      </div><!-- /.single-header-right-info -->

                      <div class="single-header-right-info">

                          <div class="icon-box">

                              <i class="industrio-icon-clock"></i>

                          </div><!-- /.icon-box -->

                          <div class="text-box">

                              <p><?php echo wp_specialchars_decode(esc_attr($industrio_redux_demo['time_work1']));?></p>

                              <h3><?php echo wp_specialchars_decode(esc_attr($industrio_redux_demo['time_work2']));?></h3>

                          </div><!-- /.text-box -->

                      </div><!-- /.single-header-right-info -->

                      <div class="single-header-right-info">

                          <div class="icon-box">

                              <i class="industrio-icon-envelope"></i>

                          </div><!-- /.icon-box -->

                          <div class="text-box">

                              <p><?php echo wp_specialchars_decode(esc_attr($industrio_redux_demo['mail1']));?></p>

                              <h3><?php echo wp_specialchars_decode(esc_attr($industrio_redux_demo['mail2']));?></h3>

                          </div><!-- /.text-box -->

                      </div><!-- /.single-header-right-info -->

                  </div><!-- /.header-right-info -->

              </div><!-- /.container -->

          </div><!-- /.header-top home-one -->



          <header class="header header-home-three">

              <nav class="navbar navbar-default header-navigation stricky">

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

                          <a href="<?php echo wp_specialchars_decode(esc_attr($industrio_redux_demo['link_button']));?>" class="rqa-btn"><span class="inner"><?php echo wp_specialchars_decode(esc_attr($industrio_redux_demo['text_button']));?> <i class="fa fa-caret-right"></i></span></a>

                      </div><!-- /.right-side-box -->

                  </div><!-- /.container -->

              </nav>   

          </header>



          
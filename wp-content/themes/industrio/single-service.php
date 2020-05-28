<?php

   $industrio_redux_demo = get_option('redux_demo');

   get_header(); 

?>

<?php 

    while (have_posts()): the_post();

?>

<!-- page title start -->



<div class="inner-banner" style="background: url(<?php echo esc_url($industrio_redux_demo['service_details_image']['url']); ?>) center center no-repeat;">

    <div class="container">

        <h3><?php if(isset($industrio_redux_demo['service_details_title'])){?>

                                    <?php echo htmlspecialchars_decode(esc_attr($industrio_redux_demo['service_details_title']));?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'Service Details', 'industrio' );

                                    }

                                    ?></h3>

        <ul class="breadcumb">

            <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php if(isset($industrio_redux_demo['home'])){?>

                                    <?php echo htmlspecialchars_decode(esc_attr($industrio_redux_demo['home']));?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'Home', 'industrio' );

                                    }

                                    ?></a></li><!--

            --><li><span class="sep"><i class="fa fa-angle-right"></i></span></li><!--

            --><li><span><?php if(isset($industrio_redux_demo['service_details_active'])){?>

                                    <?php echo htmlspecialchars_decode(esc_attr($industrio_redux_demo['service_details_active']));?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'Service Details', 'industrio' );

                                    }

                                    ?></span></li>

        </ul><!-- /.breadcumb -->

    </div><!-- /.container -->

</div><!-- /.inner-banner -->



<section class="service-page service-details-page">

        <div class="container">

            <div class="row">

                <div class="col-md-3 col-sm-12 col-xs-12">

                    <div class="sidebar">

                        <div class="single-sidebar service-sidebar">

                            <?php 

                              wp_nav_menu( 

                              array( 

                                    'theme_location' => 'service',

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

                                    'items_wrap'      => '<ul  class="service-list  %2$s">%3$s</ul>',

                                    'depth'           => 0,        

                                )

                             ); ?>

                        </div><!-- /.single-sidebar service-sidebar -->

                        <?php get_sidebar('service');?>

                    </div><!-- /.sidebar -->

                </div><!-- /.col-md-3 col-sm-12 col-xs-12 -->

                <div class="col-md-9 col-sm-12 col-xs-12">

                    <div class="service-item-box service-details-content">

                        <h2 class="displaynone"> Services </h2>
                        
                        <?php the_content(); ?>

                        <?php wp_link_pages(); ?><!-- /.faq-style-one -->

                    </div><!-- /.service-item-box -->

                </div><!-- /.col-md-9 col-sm-12 col-xs-12 -->

            </div><!-- /.row -->

        </div><!-- /.container -->

    </section>

<?php endwhile; ?>

    <!-- FOOTER -->

<?php

    get_footer();

?>
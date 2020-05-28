<?php
/*
 * Template Name: Service
 * Description: A Page Template with a Page Builder design.
 */
     $industrio_redux_demo = get_option('redux_demo');
     get_header(); 
?>

<div class="inner-banner" style="background: url(<?php echo esc_url($industrio_redux_demo['service_banner_image']['url']); ?>) center center no-repeat;">
    <div class="container">
        <h3><?php if(isset($industrio_redux_demo['service_title'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($industrio_redux_demo['service_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Service Page', 'industrio' );
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
            --><li><span><?php if(isset($industrio_redux_demo['service_active'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($industrio_redux_demo['service_active']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Service Page', 'industrio' );
                                    }
                                    ?></span></li>
        </ul><!-- /.breadcumb -->
    </div><!-- /.container -->
</div>

<section class="service-page">
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
                    <div class="service-item-box">
                        <div class="row masonary-layout">
                            <?php  $args = array(    
                                    'paged' => $paged,
                                    'post_type' => 'service',
                                    'posts_per_page' => $industrio_redux_demo['service_number'],
                            );
                            $wp_query = new WP_Query($args);

                            while (have_posts()): the_post(); ?>
            <?php $service_featured_image_2 = get_post_meta(get_the_ID(),'_cmb_service_featured_image_2', true); ?>
            <?php $icon = get_post_meta(get_the_ID(),'_cmb_icon', true); ?>
                            <div class="col-md-6 col-sm-6 col-sm-12">
                                <div class="single-service-style-four">
                                    <div class="img-box">
                                        <img src="<?php echo esc_attr($service_featured_image_2);?>" alt="Awesome Image"/>
                                        <div class="box">
                                            <div class="content">
                                                <i class="<?php echo esc_attr($icon);?>"></i>
                                                <h3><?php the_title();?></h3>
                                                <a href="<?php the_permalink();?>" class="more hvr-sweep-to-right"><?php if(isset($industrio_redux_demo['service_button'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($industrio_redux_demo['service_button']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Learn More', 'industrio' );
                                    }
                                    ?></a>
                                            </div><!-- /.content -->
                                        </div><!-- /.box -->
                                    </div><!-- /.img-box -->
                                </div><!-- /.single-service-style-four -->
                            </div><!-- /.col-md-4 --><!-- /.col-md-4 -->
                            <?php endwhile; ?>
                            <div class="blog-post-pagination">
                                <?php industrio_pagination();?>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.service-item-box -->
                </div><!-- /.col-md-9 col-sm-12 col-xs-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <!-- FOOTER -->
<?php
    get_footer();
?>
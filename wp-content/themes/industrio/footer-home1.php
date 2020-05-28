<?php $industrio_redux_demo = get_option('redux_demo');?> 



</div><!-- /.page-wrapper -->



<footer class="site-footer fixed-footer">

    <div class="main-footer">

        <div class="container">

            <div class="row">

                <div class="col-md-3 col-sm-6 col-xs-12">

                    <?php if ( is_active_sidebar( 'footer-area-1' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-area-1' ); ?>
                    <?php endif; ?>

                </div><!-- /.col-md-3 -->

                <div class="col-md-2 col-sm-6 col-xs-12">

                    <div class="footer-widget links-widget">

                        <?php if ( is_active_sidebar( 'footer-area-2' ) ) : ?>

                                <?php dynamic_sidebar( 'footer-area-2' ); ?>

                                <?php endif; ?>

                    </div><!-- /.footer-widget links-widget -->

                </div><!-- /.col-md-2 -->

                <div class="col-md-3 col-sm-6 col-xs-12">

                    <div class="footer-widget services-widget">

                        <?php if ( is_active_sidebar( 'footer-area-3' ) ) : ?>

                                <?php dynamic_sidebar( 'footer-area-3' ); ?>

                                <?php endif; ?>

                    </div><!-- /.footer-widget services-widget -->

                </div><!-- /.col-md-3 -->

                <div class="col-md-4 col-sm-6 col-xs-12">

                    <div class="footer-widget subscribe-widget">

                        <?php if ( is_active_sidebar( 'footer-area-4' ) ) : ?>

                                <?php dynamic_sidebar( 'footer-area-4' ); ?>

                                <?php endif; ?>

                    </div><!-- /.footer-widget subscribe-widget -->

                </div><!-- /.col-md-4 -->

            </div><!-- /.row -->

        </div><!-- /.container -->

    </div><!-- /.main-footer -->

    <div class="bottom-footer">

        <div class="container">

            <div class="left-text pull-left"><p><?php if(isset($industrio_redux_demo['footer_text_left'])){?>

                                    <?php echo htmlspecialchars_decode(esc_attr($industrio_redux_demo['footer_text_left']));?>

                                    <?php }else{?>

                                    <?php echo esc_html__( '&copy; Copyright Industrio 2018. All right reserved.', 'industrio' );

                                    }

                                    ?></p></div><!-- /.left-text -->

            <div class="right-text pull-right"><p><?php if(isset($industrio_redux_demo['footer_text_right'])){?>

                                    <?php echo htmlspecialchars_decode(esc_attr($industrio_redux_demo['footer_text_right']));?>

                                    <?php }else{?>

                                    <?php echo esc_html__( 'Created by Themexriver', 'industrio' );

                                    }

                                    ?></p></div><!-- /.right-text -->

        </div><!-- /.container -->

    </div><!-- /.bottom-footer -->

    <div class="scroll-to-top scroll-to-target" data-target="html"><i class="fa fa-angle-up"></i></div>

</footer>

<section class="hidden-sidebar side-navigation">

                <a href="#" class="close-button side-navigation-close-btn fa fa-times"></a><!-- /.close-button -->

                <div class="sidebar-content">

                    <div class="top-content">

                        <a href="<?php echo esc_url(home_url('/')); ?>">

                            <?php if(isset($industrio_redux_demo['logo2']['url']) && $industrio_redux_demo['logo2']['url'] != ''){ ?>

                            <img src="<?php echo esc_url($industrio_redux_demo['logo2']['url']); ?>" alt="Awesome Image">

                            <?php }else{ ?>

                                <img src="<?php echo get_template_directory_uri();?>/img/logo1-1.png" alt="Awesome Image">

                            <?php } ?></a>
                        <h2 class="displaynone">Logo</h2>

                    </div><!-- /.top-content -->

                    <nav class="nav-menu middle-content">

                        <?php 

                              wp_nav_menu( 

                              array( 

                                    'theme_location' => 'mobile',

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

                                    'items_wrap'      => '<ul  class="navigation-box  %2$s">%3$s</ul>',

                                    'depth'           => 0,        

                                )

                             ); ?>

                    </nav><!-- /.nav-menu -->

                    <div class="bottom-content">

                        <div class="social">

                            <a href="<?php echo wp_specialchars_decode(esc_attr($industrio_redux_demo['link_fb']));?>" class="fab fa-facebook-f"></a><!--

                            --><a href="<?php echo wp_specialchars_decode(esc_attr($industrio_redux_demo['link_tw']));?>" class="fab fa-twitter"></a><!--

                            --><a href="<?php echo wp_specialchars_decode(esc_attr($industrio_redux_demo['link_google']));?>" class="fab fa-google-plus-g"></a><!--

                            --><a href="<?php echo wp_specialchars_decode(esc_attr($industrio_redux_demo['link_linke']));?>" class="fab fa-instagram"></a><!--

                            --><a href="<?php echo wp_specialchars_decode(esc_attr($industrio_redux_demo['link_behance']));?>" class="fab fa-behance"></a>

                        </div><!-- /.social -->

                        <p class="copy-text"><?php echo wp_specialchars_decode(esc_attr($industrio_redux_demo['text_mobile1']));?> <i class="fa fa-heart"></i> <?php echo wp_specialchars_decode(esc_attr($industrio_redux_demo['text_mobile2']));?></p><!-- /.copy-text -->

                    </div><!-- /.bottom-content -->

                </div><!-- /.sidebar-content -->

            </section><!-- /.hidden-sidebar -->







            <div class="search_area zoom-anim-dialog mfp-hide" id="test-search">

                <div class="search_box_inner">

                    <div class="input-group">

                        <input type="text" class="form-control" placeholder="Search for...">

                        <span class="input-group-btn">

                            <button class="btn btn-default" type="button"><i class="fas fa-search"></i></button>

                        </span>

                    </div>

                </div>

            </div>

<?php wp_footer(); ?>


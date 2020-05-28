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
        <h3><?php if(isset($industrio_redux_demo['project_details_title'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($industrio_redux_demo['project_details_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Project Details', 'industrio' );
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
            --><li><span><?php if(isset($industrio_redux_demo['project_details_active'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($industrio_redux_demo['project_details_active']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Project Details', 'industrio' );
                                    }
                                    ?></span></li>
        </ul><!-- /.breadcumb -->
    </div><!-- /.container -->
</div><!-- /.inner-banner -->

<section class="project-details">
        <div class="container">
            <div class="row">
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.project-details -->

    
<?php endwhile; ?>
    <!-- FOOTER -->
<?php
    get_footer();
?>
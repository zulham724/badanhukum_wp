<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
    $industrio_redux_demo = get_option('redux_demo');
    get_header('404'); 
?> 

<div class="error-404" style="background: #000 url(<?php echo esc_url($industrio_redux_demo['404_image']['url']); ?>) center center no-repeat;">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
        <?php if(isset($industrio_redux_demo['logo2']['url']) && $industrio_redux_demo['logo2']['url'] != ''){ ?>
                            <img src="<?php echo esc_url($industrio_redux_demo['logo2']['url']); ?>" alt="Awesome Image">
                        <?php }else{ ?>
                            <img src="<?php echo get_template_directory_uri();?>/img/logo1-1.png" alt="Awesome Image">
                        <?php } ?></a>
    <div class="box">
        <div class="content">
            <h3><?php if(isset($industrio_redux_demo['404_title'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($industrio_redux_demo['404_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '404', 'industrio' );
                                    }
                                    ?></h3>
            <p><?php if(isset($industrio_redux_demo['404_subtitle'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($industrio_redux_demo['404_subtitle']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Page is not found!', 'industrio' );
                                    }
                                    ?></p>
        </div><!-- /.content -->
    </div>
<?php
get_footer('404'); ?> 

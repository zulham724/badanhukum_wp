<?php $industrio_redux_demo = get_option('redux_demo');?>
    <div class="copy-text">
            <div class="inner"><?php if(isset($industrio_redux_demo['footer_text_left'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($industrio_redux_demo['footer_text_left']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( '&copy; Copyright Industrio 2018. All right reserved.', 'industrio' );
                                    }
                                    ?></div><!-- /.inner -->
    </div>
</div>
<?php wp_footer(); ?>

<?php
   $industrio_redux_demo = get_option('redux_demo');
   get_header(); 
?>
<?php 
    while (have_posts()): the_post();
?>
<?php $single_facebook = get_post_meta(get_the_ID(),'_cmb_single_facebook', true); ?>
<?php $single_twitter = get_post_meta(get_the_ID(),'_cmb_single_twitter', true); ?>
<?php $single_google = get_post_meta(get_the_ID(),'_cmb_single_google', true); ?>
<?php $single_dribbble = get_post_meta(get_the_ID(),'_cmb_single_dribbble', true); ?>
<!-- page title start -->

<div class="inner-banner" style="background: url(<?php echo esc_url($industrio_redux_demo['blog_details_banner_image']['url']); ?>) center center no-repeat;">
    <div class="container">
        <h3><?php if(isset($industrio_redux_demo['blog_details_title'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($industrio_redux_demo['blog_details_title']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Blog Listing', 'industrio' );
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
            --><li><span><?php if(isset($industrio_redux_demo['blog_details_active'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($industrio_redux_demo['blog_details_active']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Blog Listing', 'industrio' );
                                    }
                                    ?></span></li>
        </ul><!-- /.breadcumb -->
    </div><!-- /.container -->
</div><!-- /.inner-banner -->

<section class="blog-listing-page blog-details-page sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="single-blog-style-two">
                        <div class="img-box">
                          <?php if ( has_post_thumbnail() ) { ?>
                            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>" alt="Awesome Image">
                            <?php } ?>                           
                        </div><!-- /.img-box -->
                        <div class="text-box">
                            <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
                            <div class="meta-info">
                                <i class="fa fa-user"></i> <?php the_author_posts_link(); ?>
                                <i class="fa fa-calendar"></i> <?php the_time(get_option( 'date_format' ));?>
                                <i class="fa fa-comments"></i> <?php comments_number( esc_html__('0 Comments', 'industrio'), esc_html__('1 Comment', 'industrio'), esc_html__('% Comments', 'industrio') ); ?>
                                <i class="fa fa-tags"></i> <?php 
                                            // Show all category for post
                                            $i = 1; foreach((get_the_category()) as $category) { 
                                            if ($i == 1){echo ''; }else {echo ', ';}
                                                echo '<a href="'.get_category_link($category->cat_ID).'" title="'.$category->category_nicename . '" class="letter-spacing-033 small-text highlight" >'.$category->category_nicename . ' '.'</a>'; 
                                                $i++;
                                            } ?>
                            </div><!-- /.meta-info -->
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?> 
                        </div><!-- /.text-box -->
                    </div><!-- /.single-blog-post-style-two -->
                    <div class="tags-share-box clearfix">
                        <div class="tags-box pull-left">
                          <?php echo esc_html__('Tags:','industrio') ?>
                          <?php echo get_the_tag_list(); ?>
                        </div><!-- /.tags-box -->
                        <div class="social pull-right">
                          <?php if($single_facebook !='') { ?>
                              <a href="<?php echo esc_url($single_facebook); ?>" class="fab fa-facebook-f"></a>
                          <?php } ?>
                          <?php if($single_twitter !='') { ?>
                          <a href="<?php echo esc_url($single_twitter); ?>" class="fab fa-twitter"></a>
                          <?php } ?>
                          <?php if($single_google !='') { ?>
                          <a href="<?php echo esc_url($single_google); ?>" class="fab fa-google-plus-g"></a>
                          <?php } ?>
                          <?php if($single_dribbble !='') { ?>
                          <a href="<?php echo esc_url($single_dribbble); ?>" class="fab fa-dribbble"></a>
                          <?php } ?>
                        </div>
                    </div>
                    <?php comments_template();?>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar sidebar-right">
                        <?php get_sidebar();?>
                    </div><!-- /.sidebar sidebar-right -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
  </section>
<?php endwhile; ?>
    <!-- FOOTER -->
<?php
    get_footer();
?>
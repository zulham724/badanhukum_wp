<?php
/*
 * Template Name: Blog
 * Description: A Page Template with a Page Builder design.
 */
     $industrio_redux_demo = get_option('redux_demo');
     get_header(); 
?>

<div class="inner-banner" style="background: url(<?php echo esc_url($industrio_redux_demo['blog_banner_image']['url']); ?>) center center no-repeat;">
    <div class="container">
        <h3><?php if(isset($industrio_redux_demo['blog_title'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($industrio_redux_demo['blog_title']));?>
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
            --><li><span><?php if(isset($industrio_redux_demo['blog_active'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($industrio_redux_demo['blog_active']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'Blog Listing', 'industrio' );
                                    }
                                    ?></span></li>
        </ul><!-- /.breadcumb -->
    </div><!-- /.container -->
</div>
<section class="blog-listing-page sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                  <?php  $args = array(    
                                    'paged' => $paged,
                                    'post_type' => 'post',
                            );
                        $wp_query = new WP_Query($args);
                        while (have_posts()): the_post(); ?>
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
                            <p><?php if(isset($industrio_redux_demo['blog_excerpt'])){?>
                                <?php echo esc_attr(industrio_excerpt($industrio_redux_demo['blog_excerpt'])); ?>
                                <?php }else{?>
                                <?php echo esc_attr(industrio_excerpt(30)); 
                                }
                                ?></p>
                            <a href="<?php the_permalink();?>" class="more hvr-sweep-to-right"><?php if(isset($industrio_redux_demo['read_more'])){?>
                                    <?php echo htmlspecialchars_decode(esc_attr($industrio_redux_demo['read_more']));?>
                                    <?php }else{?>
                                    <?php echo esc_html__( 'View Details', 'industrio' );
                                    }
                                    ?></a>
                        </div><!-- /.text-box -->
                    </div>
                    <?php endwhile; ?>
                    <div class="blog-post-pagination">
                        <?php industrio_pagination();?>
                    </div><!-- /.blog-post-pagination -->
                </div><!-- /.col-md-9 -->
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar sidebar-right">
                      <?php get_sidebar();?><!-- /.single-sidebar -->
                    </div><!-- /.sidebar sidebar-right -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
</section>
    <!-- FOOTER -->
<?php
    get_footer();
?>
<?php
/**
 * The Template for displaying all single posts
 */
 $industrio_redux_demo = get_option('redux_demo');
get_header(); ?>
<?php 
    while (have_posts()): the_post();
?>
<!-- basic-breadcrumb start -->

<div class="top-header overlay" style="background: url(<?php echo esc_url($industrio_redux_demo['blog_banner_image']['url']); ?>) no-repeat scroll center top / cover;">
      <div class="total-grad-pink-blue-intense opa-8"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-7 col-lg-8">
            <div class="wrapper">
              <div class="heading"><?php the_title();?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- basic-breadcrumb end -->
<!-- blog-area start -->
<section class="sec-normal">
  <div class="best-plans pricing classic">
    <div class="container">
      <div class="sec-main sec-bg1">
        <div class="row">
          <div class="col-sm-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
            <div class="blog-wrapper blog-details">
              <div class="blog-thumb">
                <a href="<?php the_permalink();?>">
                  <?php if ( has_post_thumbnail() ) { ?>
                  <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>"  />
                  <?php } ?>
                </a>
              </div>
              <div class="blog-content">
                  <?php the_content(); ?>
                  <?php wp_link_pages( array(
                  'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'industrio' ),
                  'after'       => '</div>',
                  'link_before' => '<span class="page-number">',
                  'link_after'  => '</span>',
                  ) ); ?>
              </div>
              <div class="next-prev-post clearfix">
                <?php previous_post_link('%link',wp_specialchars_decode(esc_html__( '<i class="ion-arrow-left-c"></i> Previous Post','industrio'),ENT_QUOTES), true); ?>
                <div class='right'><?php next_post_link('%link',wp_specialchars_decode(esc_html__('Next Post <i class="ion-arrow-right-c"></i>','industrio'),ENT_QUOTES), true); ?></div>
              </div>
             <?php           
                if ( comments_open() || get_comments_number() ) {
                  comments_template();
                }
                ?>
            </div>        
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <?php endwhile; ?>

  <!-- blog-area end -->
 <?php get_footer();?>
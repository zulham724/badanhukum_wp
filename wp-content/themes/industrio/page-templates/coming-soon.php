<?php
/*
 * Template Name: Coming Soon
 * Description: A Page Template with a Page Builder design.
 */
$industrio_redux_demo = get_option('redux_demo');
get_header('404'); ?>

<?php if (have_posts()){ ?>
  <?php while (have_posts()) : the_post()?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  <?php }else {
    echo esc_html__( 'Page Canvas For Page Builder', 'industrio' );
  }?>

    <?php
get_footer('404');
?>
<?php
/*
 * Template Name: Home Page Two
 * Description: A Page Template with a Page Builder design.
 */
$industrio_redux_demo = get_option('redux_demo');
get_header('home2'); ?>
<main class ="home2">
<?php if (have_posts()){ ?>
  <?php while (have_posts()) : the_post()?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  <?php }else {
    echo esc_html__( 'Page Canvas For Page Builder', 'industrio' );
  }?>
</main>
    <?php
get_footer();
?>
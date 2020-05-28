<?php
/*
 * Template Name: Home Page One
 * Description: A Page Template with a Page Builder design.
 */
$industrio_redux_demo = get_option('redux_demo');
get_header('home1'); ?>
<main>
<?php if (have_posts()){ ?>
  <?php while (have_posts()) : the_post()?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  <?php }else {
    echo esc_html__( 'Page Canvas For Page Builder', 'industrio' );
  }?>
</main>
    <?php
get_footer('home1');
?>
<?php get_header(); ?>

<section id="page" style="padding-top: 100px;">

  <?php function doubleMe($x) {
    return $x * 2;
    }

    if (doubleMe(12) == 24) {
      echo "To dziala i jest fajnie, bo na tym stazu bylem i teraz musze to przypominac";
    }
  ?>

  <?php while(have_posts()) {
    the_post(); ?>
    <h1>This is a page not a post</h1>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    
  <?php } ?>

  </section>

  <?php get_footer(); ?>
<?php get_header(); ?>


<!-- intro -->
<section class="intro">
    <div class="overlay"></div>
    <div class="inner">
        <h2 class="hello">
            <img src="<?php echo get_template_directory_uri(); ?>/img/hieroglyphic/H.png" title="H Letter in Hieroglyphic" alt="H Letter in Hieroglyphic">
            <img src="<?php echo get_template_directory_uri(); ?>/img/hieroglyphic/E.png" title="E Letter in Hieroglyphic" alt="E Letter in Hieroglyphic">
            <img src="<?php echo get_template_directory_uri(); ?>/img/hieroglyphic/L.png" title="L Letter in Hieroglyphic" alt="L Letter in Hieroglyphic">
            <img src="<?php echo get_template_directory_uri(); ?>/img/hieroglyphic/L.png" title="L Letter in Hieroglyphic" alt="L Letter in Hieroglyphic">
            <img src="<?php echo get_template_directory_uri(); ?>/img/hieroglyphic/O.png" title="O Letter in Hieroglyphic" alt="O Letter in Hieroglyphic">
        </h2>
    </div>
</section>


<main>


  <div class="container">
    

    <!-- blog -->
    <section class="blog">

<?php
// The Loop
if ( have_posts() ) {
  while (have_posts()) {
    the_post();
?>
        <article>
            <h3 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
            <p class="brief"><?php the_excerpt() ?></p>
        </article>

<?php
} // end while

    } else {
    echo "<h4>Sorry, no posts available.</h4>";
    } // end if
?>

    </section>
  </div>
</main>


<?php get_footer(); ?>
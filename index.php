<?php get_header(); ?>


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
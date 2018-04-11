<?php get_header(); ?>


<?php 
// Retrieve Data
the_post(); 
?>


<main class="single-article">
    <section class="hero">
        <h1 class="title"><?php the_title(); ?></h1>
    </section>

    <article class="content">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </article>
</main>

<?php get_footer(); ?>
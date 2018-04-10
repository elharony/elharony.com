<?php get_header(); ?>


<?php 
// Retrieve Data
the_post(); 
?>


<main class="single-article">
    <div class="container">
        <section class="hero">
            <h1 class="title"><?php the_title(); ?></h1>
        </section>

        <article class="content">
            <?php the_content(); ?>
        </article>
    </div>
</main>

<?php get_footer(); ?>
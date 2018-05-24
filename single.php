<?php get_header(); ?>


<?php 
// Retrieve Data
the_post(); 
?>


<main class="single-article">
    <section class="hero">
        <div class="container">
            <h1 class="title"><?php the_title(); ?></h1>
            <ul class="article-info">
                <li><?php the_category(' - '); ?></li>
                <li><time><?php the_time('F j, Y'); ?></time></li>
            </ul>
        </div>
    </section>

    <article class="content">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </article>

</main>

<?php get_footer(); ?>
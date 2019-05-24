<?php get_header(); ?>

<main class="page-404 single">
    <section class="hero">
        <div class="container">
            <h1 class="section-title">
                Page Not Found
                <span class="watermark">404 Error</span>
            </h1>
            <p>Sorry, the page you were looking for doesn't exist. It might have been removed, had its name changed, or is temporarily unavailable.</p>
            <a href="<?php echo get_home_url(); ?>" class="btn">Back to Homepage</a>
        </div>
    </section>

    <!-- blog -->
    <section class="blog">
        <div class="container">
            <h2 class="section-title">
            Read my blog
            <span class="watermark">Got a minute?</span>
            </h2>
            <div class="masonry">

<?php

$posts = get_posts(array(
    'posts_per_page' => 6,
    'orderby' => 'most_recent'
));

if ( $posts ) {
    foreach ( $posts as $post ) :
        setup_postdata( $post );
?>
    <article>
        <div class="inner">
            <div class="info"></i>Published on: <time><?php the_time('F j, Y'); ?></time></div>
            <h3 class="title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
            <div class="info"></i>In: <span class="category"><?php the_category(' - '); ?></span></div>
        </div>
    </article>

<?php
    endforeach; 
    wp_reset_postdata();
}
?>            

            </div>
        </div>
	</section>
</main>
<?php get_footer(); ?>
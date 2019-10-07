<?php get_header(); ?>

<main class="page-404 single">
    <section class="hero">
        <div class="container">
            <h1 class="section-title">Page Not Found</h1>
            <p>Sorry, the page you were looking for doesn't exist. It might have been removed, had its name changed, or is temporarily unavailable.</p>
            <a href="<?php echo get_home_url(); ?>" class="btn btn-reversed">Back to Homepage</a>
        </div>
    </section>

    <!-- blog -->
    <section class="blog">
        <div class="container">
            <h2 class="section-title">Helpful Articles</h2>
            <div class="blog-list">

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
            <div class="thumbnail">
                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                    <?php the_post_thumbnail('medium'); ?>
                </a>
            </div>
            <div class="content">
                <h3 class="title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                <div class="brief"><?php the_excerpt() ?></div>
                <?php the_category(''); ?>
                <ul class="date">                    
                    <li class="day"><?php the_time('j'); ?></li>
                    <li class="month"><?php the_time('M'); ?></li>
                </ul>
            </div>
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
<?php
get_header(); ?>

<main class="page-blog">
    <section class="hero">
        <div class="container">
            <h1 class="title">Check All Articles</h1>
        </div>
    </section>

    <!-- blog -->
    <section class="blog">
        <div class="container">
            <div class="masonry">
<?php
$posts_args = array(
'posts_per_page' => 10,
'orderby' => 'most_recent'
);

$the_posts = new WP_Query( $posts_args );

if ( have_posts() ) {
     while ( $the_posts->have_posts() ) {
       $the_posts->the_post();
?>
        <article>
            <div class="inner">
                <div class="info"><span class="category"><?php the_category(' - '); ?></span> @ <time><?php the_time('F j, Y'); ?></time></div>
                <h3 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                <!-- <div class="brief"><?php // the_excerpt() ?></div> -->
            </div>
        </article>

<?php
    } // end while
} else {
      echo "Sorry, There is no posts";
} // end if

wp_reset_postdata();

?>
            </div>
        </div>
	</section>
</main>

<?php
get_footer();
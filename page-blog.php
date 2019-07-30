<?php
get_header(); ?>

<main class="archive single">
    <section class="hero">
        <div class="container">
            <h1 class="section-title">Blog</h1>
        </div>
    </section>

    <!-- blog -->
    <section class="blog">
        <div class="container">
            <div class="blog-list">
<?php
$posts_args = array(
'posts_per_page' => 20,
'orderby' => 'most_recent'
);

$the_posts = new WP_Query( $posts_args );

if ( have_posts() ) {
     while ( $the_posts->have_posts() ) {
       $the_posts->the_post();
?>
        <article>
            <div class="inner">
                <div class="thumbnail">
                    <?php the_field('category_image'); ?>
                    <?php the_post_thumbnail('medium'); ?>
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
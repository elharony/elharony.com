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
                <li>Published On: <time><?php the_time('F j, Y'); ?></time></li>
                <li>In: <?php the_category(' - '); ?></li>
            </ul>
        </div>
    </section>

    <!-- <div class="article-controls">
        <div class="container">
            <div class="reading-mode">
                <button class="auto-scrolling-on show btn" title="Start Reading Mode"><i class="fas fa-book-open fa-fw"></i></button>
                <button class="auto-scrolling-off hide btn" title="Back to Normal"><i class="fas fa-eye fa-fw"></i></button>
            </div>
        </div>
    </div> -->
    

    <article class="content">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </article>

    <section class="comments">
        <div class="container">
        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        ?>
        </div>
    </section>


    
<?php
    //for use in the loop, list 5 post titles related to first tag on current post
    $categories = get_the_category($post->ID);

    if ($categories) {
        $first_category = $categories[0]->term_id;

        $args=array (
        'category__in' => array($first_category),
        'post__not_in' => array($post->ID),
        'posts_per_page'=>4,
        'caller_get_posts'=>1
        );

        $my_query = new WP_Query($args);

        if( $my_query->have_posts() ) {

?>

    <!-- Related Articles -->
    <section class="related-articles blog">
        <div class="container">
            <h3 class="section-title">Related Articles</h3>
            <div class="masonry">

<?php
            while ($my_query->have_posts()) {
                $my_query->the_post();
?>
            
                <!-- Related Post -->
                <article>
                    <div class="inner">
                        <div class="info"></i>Published on: <time><?php the_time('F j, Y'); ?></time></div>
                        <h3 class="title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                        <div class="info"></i>In: <span class="category"><?php the_category(' - '); ?></span></div>
                    </div>
                </article>
            
            <?php
            }
?>

            </div>
        </div>
    </section>

<?php
        } else {

        }
        wp_reset_query();
    }
?>

</main>

<?php get_footer(); ?>
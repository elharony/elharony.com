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

    <!-- Related Articles -->
    <section class="related-articles blog">
        <div class="container">
            <h3 class="section-title">Related Articles</h3>
            <div class="masonry">
    
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
            while ($my_query->have_posts()) {
                $my_query->the_post();
?>
            
                <!-- Related Post -->
                <article>
                    <div class="inner">
                        <div class="info"></i><span class="category"><?php the_category(' - '); ?></span> @ <time><?php the_time('F j, Y'); ?></time></div>
                        <h3 class="title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                </article>
            
            <?php
            }
        }
        wp_reset_query();
    }
?>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
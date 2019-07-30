<?php get_header(); ?>


<?php 
// Retrieve Data
the_post(); 
?>


<main class="single-article">
    <section class="hero">
        <div class="container">
            <div class="flex-container">
                <ul class="article-date">
                    <li class="day"><?php the_time('j'); ?></li>
                    <li class="month"><?php the_time('F'); ?></li>
                </ul>
                <div class="article-meta">
                    <h1 class="title"><?php the_title(); ?></h1>
                    <span class="category"><?php the_category(' - '); ?></span>
                </div>
            </div>
            <!-- <ul class="article-info">
                <li>Published On: <time><?php the_time('F j, Y'); ?></time></li>
                <li>In: <?php the_category(' - '); ?></li>
            </ul> -->
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
    

    <article class="article-body">
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
            <div class="blog-list">

<?php
            while ($my_query->have_posts()) {
                $my_query->the_post();
?>
            
                <!-- Related Post -->
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

<!-- Google Ads -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-6494125512418454",
          enable_page_level_ads: true
     });
</script>

<?php get_footer(); ?>
<?php get_header(); ?>


<main class="page-home">

    <!-- about -->
    <section class="about" id="about">
        <div class="container">
            <h1 class="section-title">
                Yahya Elharony
                <span class="watermark">Hey, it's me</span>
            </h1>
            <div class="intro flex-container">
                <div class="info">
                    <div class="details">
                        <p>
                            <strong>Frontend Lead</strong> @ <a href="https://www.webkeyz.com/">webkeyz</a> 🇪🇬
                        </p>
                        <p>
                            <strong>Web Development Mentor</strong> @ <a href="https://openclassrooms.com">OpenClassrooms</a> 🇫🇷
                        </p>
                        <p>
                            I <a href="/blog/">write articles</a>, build online products like; <a href="https://imeicheck.co" target="_blank">IMEICheck.co</a>, <a href="https://iphoneimeicheck.info" target="_blank">iPhoneIMEICheck.info</a>, <a href="https://emojicopypaste.co/" target="_blank">EmojiCopyPaste.co</a>, <a href="https://findfb.id/" target="_blank">FindFB.id</a>, and more!
                        </p>
                    </div>

                    <a href="https://www.elharony.com/Yahya-Elharony--Resume.pdf" class="btn btn-reversed">Download Resume</a>
                    <a href="/contact" class="btn">Let's Work Together</a>
                </div>
                <div class="empty">
                    <p>I used to put my picture here. <br>But I don't like it anymore, <br>Any ideas? <a href="/contact">Let me know</a></p>
                </div>
            </div>

            
        </div>
    </section>
    
    <!-- blog -->
    <section class="blog">
        <div class="container">
            <h2 class="section-title">Blog</h2>

            <div class="blog-list">



<?php

$posts_args = array(
    'post_type'   => 'Post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'posts_per_page' => 6
);
  
// Custom query.
$posts = new WP_Query( $posts_args );

// Check that we have query results.
if ( $posts->have_posts() ) {

    // Start looping over the query results.
    while ( $posts->have_posts() ) {

        $posts->the_post();
?>

        <article>
            <div class="inner">
                <div class="thumbnail">
                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                        <?php the_post_thumbnail('medium_large'); ?>
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

} else {
    echo "<h4>Sorry, no posts available.</h4>";
}

// Restore original post data.
wp_reset_postdata();

?>

            </div>

            <a href="/blog/" class="btn">Show All</a>

        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials" id="testimonials">
        <div class="container">
            <h2 class="section-title">Testimonials</h2>
            
            <div class="testimonials-list">


<?php
$args = array(
  'post_type'   => 'testimonials',
  'post_status' => 'publish',
  'orderby' => 'rand',
  'posts_per_page' => -1
);
 
$testimonials = new WP_Query( $args );
if( $testimonials->have_posts() ) :

    while( $testimonials->have_posts() ) :
    $testimonials->the_post();
?>
            <div class="testimonial">
                <div class="inner">
                    <div class="info">
                        <span class="client"><?php the_field('client'); ?></span>, 
                        <span class="company"><?php the_field('job_title'); ?></span>
                    </div>
                    <div class="review">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>

<?php
    endwhile;
    wp_reset_postdata();
else :
    echo "<h4>Sorry, no testimonials available.</h4>";
endif;
?>
            </div>
        </div>
    </section>

</main>


<?php get_footer(); ?>
<?php get_header(); ?>


<main class="page-home">

    <!-- about -->
    <section class="about" id="about">
        <div class="container">
            <h1 class="section-title">
                Yahya Elharony
                <span class="watermark">Hi, I am</span>
            </h1>
            <div class="intro flex-container">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Yahya_Elharony-Transparent-Picture.png" alt="Yahya Elharony Personal Picture">
                </div>
                <div class="info">
                    <div class="details">
                        <p>
                            <strong>I help non-technical entrepreneurs</strong> to build their online business website or improve an existing one 🚀
                        </p>
                        <p>
                            <strong>I help web development agencies</strong> to get the job done in a fraction of time 👌
                        </p>
                        <p>
                            When I am not working; <strong>I <a href="/blog/">write articles</a>, create <a href="https://www.youtube.com/channel/UCcWSbBe_s-T_gZRnqFbtyIA" target="_blank">youtube tutorials</a>, and build <a href="https://github.com/elharony" target="_blank">open-source projects</a> 💻</strong>
                        </p>
                    </div>

                    <a href="https://www.elharony.com/Yahya-Elharony--Resume.pdf" class="btn btn-reversed">Download Resume</a>
                    <a href="./contact" class="btn">Let's Work Together</a>
                </div>
            </div>

            <div class="featured">
                <div class="featured-list">
                    <p>Big Names Funded my journey</p>
                    <div class="logos">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/companies/google.png" alt="Google Logo" title="Google">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/companies/facebook.png" alt="Facebook Logo" title="Facebook">
                    </div>
                </div>
                <div class="featured-list schools">
                    <p>Certified Front End Developer by</p>
                    <div class="logos">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/companies/udacity.png" alt="Udacity Logo" title="Udacity">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/companies/openclassrooms.png" alt="OpenClassrooms Logo" title="OpenClassrooms">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="clients">
        <div class="container">
            <h2 class="section-title">Clients</h2>
        </div>
        <div class="container">
            <div class="clients-list">

<?php
$args = array(
  'post_type'   => 'clients',
  'post_status' => 'publish',
  'orderby' => 'rand',
  'posts_per_page' => -1
);
 
$clients = new WP_Query( $args );
if( $clients->have_posts() ) :
    while( $clients->have_posts() ) :
    $clients->the_post();
?>

        <div class="client">
            <a href="<?php the_field('client_url'); ?>" target="_blank" title="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail('medium'); ?>
            </a>
        </div>

<?php
    endwhile;
    wp_reset_postdata();
else :
    echo "<h4>Sorry, no clients available.</h4>";
endif;
?>
            </div>
        </div>
    </section>

    <!-- hero -->
    <!-- <section class="hero">
        <div class="overlay"></div>
        <div class="inner">
            <h2 class="hello-text">
            Hello in Hieroglyphic!
            </h2>
            <h2 class="hello-img">
                <img src="<?php // echo get_template_directory_uri(); ?>/img/hieroglyphic/H.png" title="'H' Letter in Hieroglyphic" alt="H Letter in Hieroglyphic">
                <img src="<?php // echo get_template_directory_uri(); ?>/img/hieroglyphic/E.png" title="'E' Letter in Hieroglyphic" alt="E Letter in Hieroglyphic">
                <img src="<?php // echo get_template_directory_uri(); ?>/img/hieroglyphic/L.png" title="'L' Letter in Hieroglyphic" alt="L Letter in Hieroglyphic">
                <img src="<?php // echo get_template_directory_uri(); ?>/img/hieroglyphic/L.png" title="'L' Letter in Hieroglyphic" alt="L Letter in Hieroglyphic">
                <img src="<?php // echo get_template_directory_uri(); ?>/img/hieroglyphic/O.png" title="'O' Letter in Hieroglyphic" alt="O Letter in Hieroglyphic">
            </h2>
        </div>
    </section> -->

    
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
    'posts_per_page' => 4
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
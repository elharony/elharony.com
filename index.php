<?php get_header(); ?>


<main class="page-home">

    <!-- about -->
    <section class="about" id="about">
        <div class="container">

            <h1 class="section-title">
                Yahya Elharony
                <span class="watermark">Hi, I am</span>
            </h1>

            <div class="flex-container">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Yahya-Elharony--Personal-Picture.png" alt="Yahya Elharony Personal Picture">
                </div>
                <div class="info">
                    <div class="details">
                        <p>
                            💡 Morning Entrepreneur && Night Coder! 💻
                        </p>
                        <p>
                            <strong>Coder:</strong> I am a Self-taught Web Developer who has done +25 projects for clients in +5 countries as an Individual Freelancer and they are 100% satisfied with my work
                        </p>
                        <p>
                            <strong>Entrepreneur:</strong> The other part of me likes Turning Ideas Into Products, Planning, Doing Market Research, and Scaling the business
                        </p>
                        <p>
                            <strong>Why me?</strong> I am playing the long game, and my first priority is Building Trust with my clients, that's why I am known for my Transparency, Integrity and Fairness!
                        </p>
                    </div>

                    <a href="https://www.elharony.com/Yahya-Elharony--CV.pdf" class="btn btn-reversed">Download CV</a>
                    <a href="./contact" class="btn">Hire Me</a>
                </div>
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
            <h2 class="section-title">
            Blog
            <span class="watermark">Personal & Technical</span>
            </h2>
            <div class="masonry">


<?php
// The Loop
if ( have_posts() ) {
  while (have_posts()) {
    the_post();
?>
            <article>
                <div class="inner">
                    <div class="info"></i>Published on: <time><?php the_time('F j, Y'); ?></time></div>
                    <h3 class="title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                    <div class="info"></i>In: <span class="category"><?php the_category(' - '); ?></span></div>
                    <!-- <div class="brief"><?php // the_excerpt() ?></div> -->
                </div>
            </article>

<?php
   
} // end post loop

    } else {
    echo "<h4>Sorry, no posts available.</h4>";
    } // end post condition
?>
            </div>
        </div>
    </section>


    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <h2 class="section-title">
                Testimonials
                <span class="watermark">Previous Clients</span>
            </h2>

            <!-- Swiper -->
            <div class="swiper-container">
                

<?php
$args = array(
  'post_type'   => 'testimonials',
  'post_status' => 'publish',
  'orderby' => 'rand',
  'posts_per_page' => -1
);
 
$testimonials = new WP_Query( $args );
if( $testimonials->have_posts() ) :

?>
                <div class="swiper-wrapper">


<?php
    while( $testimonials->have_posts() ) :
    $testimonials->the_post();
?>
        
        
                    <div class="swiper-slide">
                        <div class="inner">
                            <div class="review">
                                <?php the_content(); ?>
                            </div>
                            <div class="client">
                                <div class="name"><?php the_field('client'); ?></div>
                                <div class="company">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                        </div>
                    </div>

<?php
    endwhile;
    wp_reset_postdata();
?>

                  </div>
<?php
else :
    echo "<h4>Sorry, no testimonials available.</h4>";
endif;
?>


            </div>
    </section>

</main>


<?php get_footer(); ?>
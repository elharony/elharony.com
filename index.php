<?php get_header(); ?>


<main class="page-home">

    <!-- hero -->
    <section class="hero">
        <div class="overlay"></div>
        <div class="inner">
            <h2 class="hello-text">
            Hello in Hieroglyphic!
            </h2>
            <h2 class="hello-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/hieroglyphic/H.png" title="'H' Letter in Hieroglyphic" alt="H Letter in Hieroglyphic">
                <img src="<?php echo get_template_directory_uri(); ?>/img/hieroglyphic/E.png" title="'E' Letter in Hieroglyphic" alt="E Letter in Hieroglyphic">
                <img src="<?php echo get_template_directory_uri(); ?>/img/hieroglyphic/L.png" title="'L' Letter in Hieroglyphic" alt="L Letter in Hieroglyphic">
                <img src="<?php echo get_template_directory_uri(); ?>/img/hieroglyphic/L.png" title="'L' Letter in Hieroglyphic" alt="L Letter in Hieroglyphic">
                <img src="<?php echo get_template_directory_uri(); ?>/img/hieroglyphic/O.png" title="'O' Letter in Hieroglyphic" alt="O Letter in Hieroglyphic">
            </h2>
        </div>
    </section>

    <!-- about -->
    <section class="about" id="about">
        <div class="container">

            <h1 class="section-title">
                About
                <span class="watermark">Elharony</span>
            </h1>

            <div class="flex-container">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Yahya-Elharony-About.jpg" alt="Yahya Elharony">
                </div>
                <div class="info">
                    <div class="details">
                        <p>
                            💡 Morning Entrepreneur && Night Coder! 💻
                        </p>
                        <p>
                            <strong>Coder:</strong> I am a Self-taught Developer who has done +25 projects for clients in +5 countries as an Individual Freelancer and all of them are 100% satisfied with my work
                        </p>
                        <p>
                            <strong>Entrepreneur:</strong> The other part of me likes Turning Ideas Into Products, Planning, Doing Market Research, and Scaling the business
                        </p>
                        <p>
                            <strong>Why me?</strong> I believe what keeps me stand out is my persistence; I play the long game and I am not in a hurry. Maybe, I am slow but steady!
                        </p>
                    </div>

                    <!-- <a href="https://www.elharony.com/resume.pdf" class="resume btn">Download Resume</a> -->
                    <a href="<?php echo get_template_directory_uri(); ?>/contact" class="hire btn">Hire Me</a>
                </div>
            </div>
            
            
            
        </div>
    </section>

    <!-- blog -->
    <section class="blog">
        <div class="container">
            <h2 class="section-title">
            Blog
            <span class="watermark">Articles</span>
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
                People say
                <span class="watermark">Testimonials</span>
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
  esc_html_e( 'No testimonials in the diving taxonomy!', 'text-domain' );
endif;
?>
                


            </div>
    </section>










</main>


<?php get_footer(); ?>
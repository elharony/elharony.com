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

            <h2 class="section-title">
                About
                <span class="watermark">Elharony</span>
            </h2>

            <div class="flex-container">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Yahya-Elharony-About.jpg" alt="Yahya Elharony">
                </div>
                <div class="info">
                    <p class="details">Yahya isn't a coder. He is a unique mixture; A Developer, Volunteer, Leader, Young Entrepreneur, Photography, and Blockchain enthusiastic. <br>He is always looking for new skills to be acquired, people to be helped and challenges to be accepted!</p>
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
                    <div class="info"></i><span class="category"><?php the_category(' - '); ?></span> @ <time><?php the_time('F j, Y'); ?></time></div>
                    <h3 class="title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
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
                                <h4 class="name"><?php the_field('client'); ?></h4>
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
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
                    <img src="https://avatars1.githubusercontent.com/u/16986422?s=460&v=4" alt="">
                </div>
                <div class="info">
                    <p class="details">Yahya isn't a coder. He is a unique mixture; A Developer, Volunteer, Leader, Young Entrepreneur, Photography, and Blockchain enthusiastic. <br>He is always looking for new skills to be acquired, people to be helped and challenges to be accepted!</p>
                    <a href="https://www.elharony.com/resume.pdf" class="resume btn">Download Resume</a>
                    <a href="<?php echo get_template_directory_uri(); ?>/contact" class="hire btn-reversed">Hire Me</a>
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
</main>


<?php get_footer(); ?>
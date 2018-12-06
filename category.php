<?php
get_header(); ?>

<main>
<section class="hero">
    <div class="container">
        <h1 class="title">"<?php echo single_cat_title( '', false ); ?>" Articles</h1>
    </div>
</section>
<section class="blog">
	<div class="container">
		<div class="masonry">
			<?php if ( have_posts() ) : ?>

			<!-- <header class="archive-header">
				<h1 class="archive-title"><?php // printf( __( 'Category Archives: %s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>

				<?php
					// Show an optional term description.
				// 	$term_description = term_description();
				// if ( ! empty( $term_description ) ) :
				// 	printf( '<div class="taxonomy-description">%s</div>', $term_description );
				// 	endif;
				?>
			</header>.archive-header -->

			<?php
					// Start the Loop.
			while ( have_posts() ) :
				the_post();

// Get Categories as Links
$categories = get_the_category();
$separator = ' - ';
$output = '';
if ( ! empty( $categories ) ) {
    foreach( $categories as $category ) {
        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
    }
            ?>
                
                <article>
                    <div class="inner">
						<div class="info"></i>Published on: <time><?php the_time('F j, Y'); ?></time></div>
						<h3 class="title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<div class="info"></i>In: <span class="category"><?php the_category(' - '); ?></span></div>
					</div>
                </article>

            <?php
			} // end categories condition

					endwhile;
	
				else :
					// If no content, include the "No posts found" template.
					echo "<h4>Sorry, no posts available.</h4>";
				endif;
			?>
			
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
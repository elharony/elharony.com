<?php
get_header(); ?>

<section class="blog">
			<?php if ( have_posts() ) : ?>

			<!-- <header class="archive-header">
				<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>

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
            ?>
                
                <article>
                    <div class="inner">
                        <div class="info"><span class="category"><?php echo trim( $output, $separator ) ?></span> @ <time><?php the_time('F j, Y'); ?></time></div>
                        <h3 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                        <div class="brief"><?php the_excerpt() ?></div>
                    </div>
                </article>

            <?php
					endwhile;
	
				else :
					// If no content, include the "No posts found" template.
					
				endif;
			?>
	</section>

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
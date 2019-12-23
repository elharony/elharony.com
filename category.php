<?php
get_header(); ?>

<main class="archive single">
<section class="hero">
	<div class="container">
		<h1 class="section-title">"<?php echo single_cat_title( '', false ); ?>" Articles</h1>
	</div>
</section>
<section class="blog">
	<div class="container">
		<div class="blog-list">
			<?php if ( have_posts() ) : ?>

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
					<div class="thumbnail">
						<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(); ?>
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
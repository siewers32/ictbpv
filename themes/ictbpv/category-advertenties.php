<?php
/* Template Name: category */

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ictbpv
 */

get_header();
?>

	<main id="primary">
	<h1>Advertenties</h1>
	<div class="advertentie-panel">
		<?php
			while ( have_posts() ) :
				the_post(); ?>

			<div class="advertentie-item" id="post-<?php the_ID(); ?>">
				<?php the_title( '<p id="title">', '<p>' ); ?>
                <p id="description"><?php the_content(); ?></p>
            </div>

			<?php
				//get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;

			endwhile; // End of the loop.
			?>


	</div><!-- advertentie-panel -->


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

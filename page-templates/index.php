<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */


	 get_header();
?>

	<div id="container" class="row">
	<div id="pGauche" class="col-sm-4">
		<?php 
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				the_post_thumbnail();
			} 
		?>
	</div>
	<div id="pDroite" class="col-sm-8">
		
		<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>

				<?php the_content(); ?>

			<?php endwhile; // end of the loop. ?>
	
		</div>
	</div>

	</div>
<?php get_footer(); ?>
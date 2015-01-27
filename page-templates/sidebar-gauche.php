<?php
/**
 * Template Name: Barre laterale gauche
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */



	 get_header();
?>

	<div id="container" class="row">
	<?php get_sidebar(); ?>
	<div id="pGauche" class="col-sm-9">
		<?php while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>

				<?php the_content(); ?>

			<?php endwhile; // end of the loop. ?>
	
	
	</div>

	</div>
<?php get_footer(); ?>
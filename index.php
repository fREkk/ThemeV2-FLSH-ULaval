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
	<div id="pGauche" class="col-sm-9">
		
		<?php while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<!--span id="featuredImage">
				<?php
				//if ( has_post_thumbnail() ) {
				//	the_post_thumbnail('original');				
				//}			
			?></span-->
				<?php the_content(); ?>

			<?php endwhile; // end of the loop. ?>
	
	
	</div>

<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
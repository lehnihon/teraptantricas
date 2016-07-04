<?php
/**
 * The template for displaying all single posts.
 *
 * @package site
 */

get_header(); ?>

<div id="content">
	<section id="agenda-detalhes">
		<div class="container">
			<div class="row">
				<main class="col-md-12">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'single' ); ?>


			<?php endwhile; // End of the loop. ?>
				</main><!-- #main -->
			</div><!-- .row -->
		</div><!-- .container -->

	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div><!-- #content -->

<?php get_footer(); ?>

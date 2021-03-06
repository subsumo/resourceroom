<?php
/**
 * Template Name: Full Width
 *
 * @package Marketify
 */

get_header(); ?>

	<div class="container page-content">
		<div class="card-white double-padding">
			<div class="text-center">
				<h3><?php the_title(); ?></h3>
			</div>
			<div class="divider"></div>
		<div id="content" class="site-content row">
			<div id="primary" class="content-area col-sm-12">
				<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'page' ); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || '0' != get_comments_number() )
								comments_template();
						?>

					<?php endwhile; ?>

					<?php marketify_content_nav( 'nav-below' ); ?>

				<?php else : ?>

					<?php get_template_part( 'no-results', 'index' ); ?>

				<?php endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->

		</div>
	</div>
	</div>
	
<?php get_footer(); ?>
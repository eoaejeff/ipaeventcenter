<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>

	<?php get_template_part('parts/page-header'); ?>
			
	<div class="content">
		
		<div class="grid-container">
	
			<div class="inner-content grid-x grid-margin-x grid-padding-x grid-padding-y">
		
			    <main class="main small-12 medium-12 large-12 cell" role="main">
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
						<?php the_content(); ?>
						
						<?php if ( is_page( array( 'gallery' ) ) ) { ?>
						
							<?php get_template_part('modules/gallery-feed'); ?>
							
						<?php } ?>

						
					<?php endwhile; endif; ?>							
	
				</main> <!-- end #main -->
			    
			</div> <!-- end #inner-content -->
		
		</div>
	
	</div> <!-- end #content -->

<?php get_footer(); ?>

	
	
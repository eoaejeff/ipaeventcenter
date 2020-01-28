<?php
/**
 * Displays archive pages if a speicifc template is not set. 
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>

	<section class="page-header" style="background-image:url('<?php the_post_thumbnail_url('full'); ?>');">
	<div class="grid-container">
			<div class="grid-x">
				<div class="cell header-content">
					<h1 class="page-title"><?php the_archive_title(); ?></h1>
				</div>
			</div>
		</div>
	</section>
			
	<div class="content">
		
		<div class="grid-container">
	
			<div class="inner-content grid-x grid-margin-x grid-padding-x">
			
			    <main class="main small-12 medium-8 large-8 cell" role="main">
			
			    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				 
						<!-- To see additional archive styles, visit the /parts directory -->
						<?php get_template_part( 'parts/loop', 'archive' ); ?>
					    
					<?php endwhile; ?>	
	
						<?php joints_page_navi(); ?>
						
					<?php else : ?>
												
						<?php get_template_part( 'parts/content', 'missing' ); ?>
							
					<?php endif; ?>
			
				</main> <!-- end #main -->
		
				<?php get_sidebar(); ?>
		    
		    </div> <!-- end #inner-content -->
	    
		</div>
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>
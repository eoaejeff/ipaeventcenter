<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>

<section class="page-header" style="background-image:url('/wp-content/uploads/2019/09/iPlayAmerica_5112017_miller_79.jpg');">
	<div class="grid-container">
		<div class="grid-x">
			<div class="cell header-content">
				<h1 class="page-title">BLOG</h1>
			</div>
		</div>
	</div>
</section>
			
	<div class="content">
		
		<div class="grid-container">
	
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
	
		    <main class="main small-12 cell" role="main">
		    
			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive-grid' ); ?>
				    
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
																								
		    </main> <!-- end #main -->
		    
		    <?php //get_sidebar(); ?>

		</div> <!-- end #inner-content -->
		
		</div>

	</div> <!-- end #content -->

<?php get_footer(); ?>
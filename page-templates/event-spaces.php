<?php 
	
get_header();

/* Template Name: Event Spaces */

?>

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
					
					<?php wp_reset_postdata(); ?>						
	
				</main> <!-- end #main -->
			    
			</div> <!-- end #inner-content -->
		
		</div>
	
	</div> <!-- end #content -->
	
	<div class="after-content">
		
		<div class="grid-container">
			
			
			
			<div class="grid-x grid-margin-x grid-margin-y spaces-grid">
				
				<div class="cell small-12">
				
					<h2>See Our Spaces</h2>
			
				</div>
		
			<?php $select_event_spaces = get_field( 'select_event_spaces' ); ?>	
			
			<?php if ( $select_event_spaces ): ?>		

					<?php foreach ( $select_event_spaces as $post ):  ?>
						
						<?php setup_postdata ( $post ); ?>
						
						<a href="<?php the_permalink(); ?>" class="small-12 medium-6 large-4 cell event-space" >
							
							<div class="event-space-content">
							
								<img src="<?php the_post_thumbnail_url('full'); ?>" alt="" />
								
								<h4 class="space-name"><?php the_title(); ?></h4>
							
							</div>
						
						</a>
									
					<?php endforeach; ?>
				
				<?php wp_reset_postdata(); ?>			
			
			<?php endif; ?>
			
			</div>
		
		</div>
		
	</div>

<?php
	 
get_footer(); 

?>
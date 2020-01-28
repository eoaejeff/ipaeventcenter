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
			
			<?php $space_gallery_images = get_field( 'event_types_gallery' ); ?>
<?php if ( $space_gallery_images ) :  ?>
	<section class="room-gallery">
		<div class="grid-container">
			<div class="grid-x grid-margin-x grid-padding-x">
				<div class="cell">
					<h2 class="text-center"><?php echo get_field('events_gallery_heading'); ?></h2>
					<div class="space-gallery">
						<?php foreach ( $space_gallery_images as $space_gallery_image ): ?>
							<div class="slide">
								<img src="<?php echo $space_gallery_image['sizes']['large']; ?>" alt="<?php echo $space_gallery_image['alt']; ?>" />
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<script>
	jQuery(document).ready(function( $ ) {
		$('.space-gallery').slick({
			slidesToShow: 3,		
			arrows:true,
			autoplay:true,
			prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-circle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-circle-right"></i></button>',
			responsive: [
		    {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 2
		      }
		    }
		  ]		
		});
	});
</script>
		
		</div>
	
	</div> <!-- end #content -->

<?php get_footer(); ?>

	
	
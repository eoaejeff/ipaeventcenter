<?php 
	get_header();
	/* Template Name: BOOKING AGENTS */
?>

<section class="page-content">
	<div class="grid-container">
		<div class="grid-x grid-margin-x grid-padding-x grid-padding-y">
			<div class="cell large-9 large-order-2 content">
				<?php the_content(); ?>
			</div>
			<div class="cell large-3 large-order-1 downloads" >
				<div class="downloads_inner">
					<?php if ( $post->ID == 960 ) { ?>
					<h3>There is always a great event going on at The Event Center @iPA!</h3>
						<a class="button" style="margin: 25px 0;" href="https://www.iplayamerica.com/concerts-events/" target="_blank" rel="noopener noreferrer">See Full Concert Lineup</a>
					<?php  } else { ?>
						<h3>PLAN YOUR EVENT</h3>
						<p>Our Professional Event Planners will work with you to make the experience of planning your event easy. </p>
						<p>Helping you to create an <b>unforgettable event</b> is what we do!</p>
						<p>Call <strong>732-577-8200 EXT.383</strong></p>
						<a class="button text-center" role="button" href="<?php echo site_url(); ?>/contact-us/" target="_self" rel="noopener noreferrer"> Request Information</a>
					<?php } ?>		
				</div>
			</div>		
		</div>
	</div>
</section>


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

<?php 
	get_Footer();
?>
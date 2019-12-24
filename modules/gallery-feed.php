<?php
$args = array(
	'post_type' => array( 'spaces' ),
	'order' => 'ASC',
);
$query = new WP_Query( $args );
?>

<?php if ( $query->have_posts() ) { ?>
<?php while ( $query->have_posts() ) { ?>
<?php $query->the_post(); ?>
												
<?php $space_gallery_images = get_field( 'space_gallery' ); ?>
<?php if ( $space_gallery_images ) :  ?>
	<section class="room-gallery">
		<div class="grid-container">
			<div class="grid-x grid-margin-x grid-padding-x">
				<div class="cell">
					<h2 class="text-center"><?php the_title(); ?> Gallery</h2>
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

<?php } ?>
<?php } ?>
<?php wp_reset_postdata(); ?>

<script>
	jQuery(document).ready(function( $ ) {
		$('.space-gallery').slick({
			slidesToShow: 3,		
			arrows:true,
			autoplay:false,
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
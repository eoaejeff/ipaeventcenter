<?php get_header(); ?>

<?php get_template_part('parts/page-header'); ?>

<section class="page-content">
	<div class="grid-container">
		<div class="grid-x grid-margin-x grid-padding-x grid-padding-y">
			<div class="cell large-9 large-order-2 content">
				
				<?php the_content(); ?>
				
				<div class="grid-x grid-margin-x">
					<?php if ( have_rows( 'space_features' ) ) : ?>
						<div class="features cell medium-6">
							<table>
								<thead>
									<tr>
										<th>Features</th>
									</tr>
								</thead>
								<tbody>
									<?php while ( have_rows( 'space_features' ) ) : the_row(); ?>
									    <tr>
									      <td><?php the_sub_field( 'feature' ); ?>&nbsp;</td>
									    </tr>
									<?php endwhile; ?>
								</tbody>
							</table>
						</div>
					<?php endif; ?>
					
					<?php if ( have_rows( 'room_capacities' ) ) : ?>
						<div class="features cell medium-6">
							<table>
								<thead>
									<tr>
										<th>Room Capacities</th>
									</tr>
								</thead>
								<tbody>
									<?php while ( have_rows( 'room_capacities' ) ) : the_row(); ?>
									    <tr>
									      <td><?php the_sub_field( 'room_setup' ); ?>&nbsp;</td>
									    </tr>
									<?php endwhile; ?>
								</tbody>
							</table>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="cell large-3 large-order-1  text-center downloads" >
				<div class="downloads_inner">
					<?php if ( have_rows( 'space_downloads' ) ) : ?>	
					<h3>DOWNLOADS</h3>
					<?php while ( have_rows( 'space_downloads' ) ) : the_row(); ?>	
						<a href="<?php the_sub_field( 'button_link' ); ?>" class="button" target="_blank"><?php the_sub_field( 'button_text' ); ?></a>
					<?php endwhile; ?>
				    <br>
				    <br>
				    <br>
					<?php endif; ?>
					<?php if ( have_rows( 'call_button' ) ) : ?>
						<?php while ( have_rows( 'call_button' ) ) : the_row(); ?>
							<?php if (get_sub_field('button_text') ) { ?>
								<a href="<?php the_sub_field( 'button_link' ); ?>" class="button call"><?php the_sub_field( 'button_text' ); ?></a>
							<?php } ?>
						<?php endwhile; ?>
					<?php endif; ?>
					
				</div>
			</div>		
		</div>
	</div>
</section>

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


<?php get_footer(); ?>
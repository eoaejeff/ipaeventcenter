<?php
$args = array(
	'post_type' => array( 'event_types' ),
	'order' => 'ASC',
);
$query = new WP_Query( $args );
?>

<section class="home-hero">
	<div class="video-hero" id="video-hero" style="background-image:url(<?php the_post_thumbnail_url('large'); ?>);background-size:cover;">
	 	<div class="container text-center hide-for-medium">
		 	<h1><span>45,000 SQUARE FEET</span><br>ENDLESS POSSIBILITIES</h1>
	 	</div>
	 	<script>
	        var videoId;
	        videoID = 'qFA2pRbvANU';
	    </script>
	 	<div class="video-background show-for-medium">
	        <div class="video-foreground" id="video-foreground">
	            <div id="videoPlayer"></div>
	        </div>
		</div>
	</div>
	<div class="promo-slider">
		<?php if ( $query->have_posts() ) { ?>
			<?php while ( $query->have_posts() ) { ?>
			<?php $query->the_post(); ?>
				<a href="<?php the_permalink(); ?>" class="slide">
					<img class="bg-image" src="<?php the_post_thumbnail_url('large'); ?>">
					<div class="slide-content">
						<h3><?php the_title(); ?></h3>
						<p class="promo-link">Learn More</p>
					</div>
				</a>
			<?php } ?>
		<?php } ?>
		<?php wp_reset_postdata(); ?>
	</div>
</section>

<script>
	jQuery(document).ready(function( $ ) {
		$('.promo-slider').slick({
			slidesToShow: 2,
			vertical:true,
			verticalSwiping:true,
			arrows:true,
			autoplay:true,
			prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-angle-double-up"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-double-down"></i></button>',
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 2,
						vertical:false,
						verticalSwiping:false,
				  	}
				},
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
						vertical:false,
						verticalSwiping:false,
				  	}
				}
			]
		});
	});
</script>
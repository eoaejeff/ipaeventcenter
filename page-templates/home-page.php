<?php 
	
get_header();

/* Template Name: Home Page */

?>

<!-------------------------------->
<!-- PAGE HEADER -->
<!-------------------------------->

<?php get_template_part('modules/video-scroller-hero'); ?>

<!-------------------------------->
<!-- PAGE CONTENT -->
<!-------------------------------->

<section class="home-intro">
	<div class="grid-container">
		<div class="grid-x grid-margin-x grid-margin-y align-middle">
			<div class="cell large-9">
				<?php the_content(); ?>
			</div>
			<div class="cell large-3">
				<a id="virtual-tour" href="https://www.google.com/maps/@40.2405376,-74.2807597,3a,75y,327.68h,87.38t/data=!3m6!1e1!3m4!1sAF1QipNf89YiIIanoa5Nu4FI9QFANplDQpG5Sf5M9BDb!2e10!7i9368!8i4684" target="_blank"><i class="fas fa-video"></i> Take a Virtual Tour!</a>
			</div>
		</div>
</section>

<!-------------------------------->
<!-- FEATURE TABS -->
<!-------------------------------->

<section class="tab-content">
   
   <div class="grid-container">
	    <ul class="tabs" data-tabs id="example-tabs">
			<li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Event Space</a></li>
			<li class="tabs-title"><a href="#panel2">Event Types</a></li>
			<li class="tabs-title"><a href="#panel3">Menus</a></li>
	    </ul>
   </div>

    <div class="tabs-content" data-tabs-content="example-tabs">
		<div class="tabs-panel is-active" id="panel1">
			<?php
			$args = array(
				'post_type' => array( 'spaces' ),
			);
			$query = new WP_Query( $args );
			?>
			<div class="tab-slider tab-1">
				<?php if ( $query->have_posts() ) { ?>
					<?php while ( $query->have_posts() ) { ?>
					<?php $query->the_post(); ?>
						<div class="slide" style="background-image:url('<?php the_post_thumbnail_url('full'); ?>');">
							<div class="grid-container">
								<div class="grid-x">
									<div class="cell large-7">
										<div class="slide-content">
		                                    <h2><?php the_title(); ?></h2>
		                                    <p><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></p>
		                                    <a href="<?php the_permalink(); ?>" class="button" tabindex="0">LEARN MORE</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php } ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="tabs-panel" id="panel2">
			<?php
			$args = array(
				'post_type' => array( 'event_types' ),
			);
			$query = new WP_Query( $args );
			?>
			<div class="tab-slider tab-2">
				<?php if ( $query->have_posts() ) { ?>
					<?php while ( $query->have_posts() ) { ?>
					<?php $query->the_post(); ?>
						<div class="slide" style="background-image:url('<?php the_post_thumbnail_url('full'); ?>');">
							<div class="grid-container">
								<div class="grid-x">
									<div class="cell large-7">
										<div class="slide-content">
		                                    <h2><?php the_title(); ?></h2>
		                                    <p><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></p>
		                                    <a href="<?php the_permalink(); ?>" class="button" tabindex="0">LEARN MORE</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				<?php } ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="tabs-panel" id="panel3">
			<div class="tab-slider tab-3">
				<div class="slide" style="background-image:url('/wp-content/uploads/2018/10/menus.jpg');">
					<div class="grid-container">
						<div class="grid-x">
							<div class="cell large-7">
								<div class="slide-content">
									<h2>Bronze Reception</h2>
									<a href="/wp-content/uploads/2019/03/Bronze-Reception-no-pricing.pdf" target="_blank" class="button" tabindex="0">SEE MENU</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slide" style="background-image:url('/wp-content/uploads/2019/12/0201.jpg');">
					<div class="grid-container">
						<div class="grid-x">
							<div class="cell large-7">
								<div class="slide-content">
									<h2>Silver Reception</h2>
									<a href="/wp-content/uploads/2019/03/Silver-Reception-No-pricing.pdf" target="_blank" class="button" tabindex="0">SEE MENU</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slide" style="background-image:url('/wp-content/uploads/2019/12/0209.jpg');">
					<div class="grid-container">
						<div class="grid-x">
							<div class="cell large-7">
								<div class="slide-content">
									<h2>Gold Reception</h2>
									<a href="/wp-content/uploads/2019/03/gold-reception-no-pricing.pdf" target="_blank" class="button" tabindex="0">SEE MENU</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slide" style="background-image:url('/wp-content/uploads/2018/10/menus-2.jpg');">
					<div class="grid-container">
						<div class="grid-x">
							<div class="cell large-7">
								<div class="slide-content">
									<h2>Platinum Reception</h2>
									<a href="/wp-content/uploads/2019/03/Platinum-reception-no-price.pdf" target="_blank" class="button" tabindex="0">SEE MENU</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slide" style="background-image:url('/wp-content/uploads/2018/10/chelsea-4.jpeg');">
					<div class="grid-container">
						<div class="grid-x">
							<div class="cell large-7">
								<div class="slide-content">
									<h2>Bar Packages</h2>
									<a href="/wp-content/uploads/2019/09/Bar-Packages.pdf" target="_blank" class="button" tabindex="0">SEE MENU</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slide" style="background-image:url('/wp-content/uploads/2019/12/KwiBRM3755.jpg');">
					<div class="grid-container">
						<div class="grid-x">
							<div class="cell large-7">
								<div class="slide-content">
									<h2>Deluxe Meeting Package</h2>
									<a href="/wp-content/uploads/2019/03/Deluxe-Meeting-Package-19-no-pricing.pdf" target="_blank" class="button" tabindex="0">SEE MENU</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<script>
	jQuery(document).ready(function( $ ) {
		$('.tab-slider.tab-1').slick({
			slidesToShow: 1,		
			arrows:true,
			prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-circle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-circle-right"></i></button>',		
		});
		$('.tab-slider.tab-2').slick({
			slidesToShow: 1,		
			arrows:true,
			prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-circle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-circle-right"></i></button>',		
		});
		$('.tab-slider.tab-3').slick({
			slidesToShow: 1,		
			arrows:true,
			prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-circle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-circle-right"></i></button>',		
		});
	});
</script>

<?php
	 
get_footer(); 

?>
<?php 
	get_header();
	/* BOOKING AGENTS */
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

<?php 
	get_Footer();
?>
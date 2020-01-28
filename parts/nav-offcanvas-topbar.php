<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>


<div class="utility">
	<div class="grid-x">
		<div class="cell small-7 phone">
			<i class="fas fa-phone"></i> CALL <a href="tel:7325778200">732-577-8200 X383</a>
		</div>
		<div class="cell small-5 socials text-right">
			<h4>
				<a href="https://www.facebook.com/EventsAtiPlayAmerica/?ref=bookmarks" target="_blank"><i style="font-size:24px;" class="fab fa-facebook-square"></i></a>
				&nbsp;
				<a href="https://www.linkedin.com/showcase/the-event-center-ipa/" target="_blank"><i style="font-size:24px;" class="fab fa-linkedin-in"></i></a>
				&nbsp;
				<a href="https://www.instagram.com/eventcenteratiplayamerica/" target="_blank"><i style="font-size:24px;" class="fab fa-instagram"></i></a>
				&nbsp;
			</h4>
		</div>
	</div>
</div>

<div class="top-bar" id="top-bar-menu">
	
	<div class="logo">
		
		<?php the_custom_logo(); ?>
		
	</div>
	
	<div class="main-navigation show-for-large">
		
		<?php joints_top_nav(); ?>	
		
	</div>
	
	<div class="top-bar-extras show-for-large">
		
		<ul class="menu">
			<li><a href="/about-us/">About Us</a></li>
			<li><a href="/booking-agents/">Booking Agents</a></li>
			<li><a href="/testimonials/">Testimonials</a></li> 
		</ul>

	</div>
	
	<div class="top-bar-right float-right hide-for-large">
		
		<ul class="menu">
			
			<li><button class="menu-icon " type="button" data-toggle="off-canvas"></button></li>

		</ul>
		
	</div>
	
</div>
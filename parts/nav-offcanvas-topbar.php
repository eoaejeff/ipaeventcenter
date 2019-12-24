<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>


<div class="utility"></div>

<div class="top-bar" id="top-bar-menu">
	
	<div class="logo">
		
		<?php the_custom_logo(); ?>
		
	</div>
	
	<div class="main-navigation show-for-large">
		
		<?php joints_top_nav(); ?>	
		
	</div>
	
	<div class="top-bar-extras show-for-large">
		
		<ul class="menu dropdown">
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
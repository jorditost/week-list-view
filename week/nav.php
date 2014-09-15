<?php
/**
 * Week List View Nav
 * This file loads the week list view navigation.
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); } ?>

<?php /* ?><h3 class="tribe-events-visuallyhidden"><?php _e( 'Week Navigation', 'tribe-events-calendar-pro' ); ?></h3><?php */ ?>
<ul class="tribe-events-sub-nav">
	<?php // Previous Page Navigation ?>
	<li class="nav-previous"><?php echo tribe_previous_week_link(); ?></li>

	<?php // Next Page Navigation ?>
	<li class="nav-next"><?php echo tribe_next_week_link(); ?></li>

	<?php 
		// AJAX
		// Use classes .tribe-events-nav-previous & .tribe-events-nav-previous 
	?>
	<?php /*// Previous Page Navigation ?>
	<li class="nav-previous tribe-events-nav-previous"><?php echo tribe_previous_week_link(); ?></li>

	<?php // Next Page Navigation ?>
	<li class="nav-next tribe-events-nav-next"><?php echo tribe_next_week_link(); ?></li>
	<?php */ ?>
</ul>
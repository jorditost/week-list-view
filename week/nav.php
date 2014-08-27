<?php
/**
 * Week List View Nav
 * This file loads the week list view navigation.
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); } ?>

<h3 class="tribe-events-visuallyhidden"><?php _e( 'Week Navigation', 'tribe-events-calendar-pro' ); ?></h3>
<ul class="tribe-events-sub-nav">
	<li class="tribe-events-nav-previous">
		<?php echo tribe_previous_week_link() ?>
	</li>
	<li class="tribe-events-nav-next">
		<?php echo tribe_next_week_link() ?>
	</li>
</ul>
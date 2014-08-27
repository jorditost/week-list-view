<?php
/**
 * Week List View Loop
 * This file sets up the structure for the week list view loop
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); } ?>

<?php tribe_events_week_set_loop_type( 'hourly' ); ?>
<div class="events-list-view">
	
	<?php while ( tribe_events_week_have_days() ) : tribe_events_week_the_day(); ?>
	<?php if (tribe_events_current_week_day_has_events()) : ?>
	<div id="<?php tribe_events_week_get_the_date(); ?>" class="day-wrapper">
		<?php // Header ?>
		<span class="tribe-events-list-separator-day">
			<span><?php echo get_formatted_date_title(tribe_events_week_get_the_date(false)); ?></span>
		</span>

		<?php // Events loop ?>
		<?php foreach ( tribe_events_week_get_hourly() as $event ) : if ( tribe_events_week_setup_event($event) ) : ?>
			<div id="post-<?php the_ID() ?>" class="list-item event">
				<?php tribe_get_template_part( 'week/single', 'event' ) ?>
			</div>
		<?php endif; endforeach; ?>
	</div>
	<?php endif; endwhile; ?>
</div>
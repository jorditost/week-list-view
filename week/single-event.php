<?php 
/**
 * Week List View Single Event
 * This file contains one event in the week list view
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); } ?>

<?php 
	// Setup an array of venue details for use later in the template
	/*$venue_details = array();

	if ($venue_name = tribe_get_meta( 'tribe_event_venue_name' ) ) {
		$venue_details[] = $venue_name;	
	}

	if ($venue_address = tribe_get_meta( 'tribe_event_venue_address' ) ) {
		$venue_details[] = $venue_address;	
	}
	// Venue microformats
	$has_venue_address = ( $venue_address ) ? ' location': '';

	// Organizer
	$organizer = tribe_get_organizer();*/
?>

<?php // Event Image ?>
<a class="thumb" href="<?php echo tribe_get_event_link(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('fixed-thumb-list'); //echo tribe_event_featured_image(null, 'fixed-thumb-list', false) ?></a>

<div class="entry">
	
	<?php // Event Category ?>
	<div class="cat"><?php echo get_event_category_name(); ?></div>

	<?php // Event Title ?>
	<?php do_action( 'tribe_events_before_the_event_title' ) ?>
	<h2><a href="<?php echo tribe_get_event_link() ?>" title="<?php the_title() ?>" rel="bookmark">
			<?php the_title() ?>
			<span class="subtitle"><?php the_subtitle(); ?></span>
	</a></h2>
	<?php do_action( 'tribe_events_after_the_event_title' ) ?>

	<?php // Event Excerpt ?>
	<?php do_action( 'tribe_events_before_the_content' ) ?>
	<div class="entry-content">
		<?php the_excerpt_limit(145); ?>
	</div>
	<?php do_action( 'tribe_events_after_the_content' ) ?>

	<?php // Event Cost ?>
	<?php /*if ( tribe_get_cost() ) : ?> 
		<div class="event-cost">
			<span><?php echo tribe_get_cost( null, true ); ?></span>
		</div>
	<?php endif;*/ ?>
</div>

<?php // Event Meta ?>
<?php do_action( 'tribe_events_before_the_meta' ) ?>
<div class="item-meta">
	
	<?php the_event_venue_info(true); ?>
	<?php the_event_time(); ?>
	<?php the_event_links(); ?>

	<?php /*// Schedule & Recurrence Details ?>
	<div class="updated published time-details">
		<?php echo tribe_events_event_schedule_details() ?>
	</div>

	<?php if ($venue_details) : ?>
		<?php // Venue Display Info ?>
		<div class="tribe-events-venue-details">
			<?php echo implode( ', ', $venue_details) ; ?>
		</div>
	<?php endif;*/ ?>
</div>
<?php do_action( 'tribe_events_after_the_meta' ) ?>

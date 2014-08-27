<?php
/**
 * Week List View Template
 * The wrapper template for the week list view.
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); } ?>

<?php do_action( 'tribe_events_before_template' ) ?>

<?php // Tribe Bar ?>
<?php tribe_get_template_part( 'modules/bar' ); ?>

<?php // Main Events Content ?>
<?php tribe_get_template_part( 'week/content' ) ?>

<?php do_action( 'tribe_events_after_template' ) ?>
<?php
/**
 * Week List View Content
 *
 */

if ( !defined('ABSPATH') ) { die('-1'); } ?>

<div id="tribe-events-content" class="tribe-events-week-grid tribe-events-time-list">
	
	<?php // Calendar Title ?>
	<?php do_action( 'tribe_events_before_the_title'); ?>
	<?php /* ?><h1 class="section-title tribe-events-page-title"><span><?php tribe_events_title() ?></span></h1><?php */ ?>
	<?php do_action( 'tribe_events_after_the_title'); ?>

	<?php // Notices ?>
	<?php tribe_events_the_notices(); ?>

	<?php // Calendar Header ?>
	<?php do_action( 'tribe_events_before_header'); ?>
	<div id="tribe-events-header" <?php tribe_events_the_header_attributes('week-header') ?>>
		<?php // Header Navigation ?>
		<?php //tribe_get_template_part( 'week/nav', 'header' ); ?>
	</div>
	<?php do_action( 'tribe_events_after_header'); ?>

	<?php // Calendar Grid ?>
	<?php tribe_get_template_part( 'week/loop' ); ?>

	<?php // Calendar Footer ?>
	<?php do_action( 'tribe_events_before_footer') ?>
	<div id="tribe-events-footer">
		<?php // Footer Navigation ?>
		<?php do_action( 'tribe_events_before_footer_nav' ); ?>
		<?php tribe_get_template_part( 'week/nav', 'footer' ); ?>
		<?php do_action( 'tribe_events_after_footer_nav' ); ?>
	</div>
	<?php do_action( 'tribe_events_after_footer'); ?>

	<?php //tribe_get_template_part( 'week/mobile' ); ?>
	<?php //tribe_get_template_part( 'week/tooltip' ); ?>
</div>
week-list-view
==============

Customization of the Week view of The Calendar Plugin PRO by Modern Tribe

week.php and week/ should be placed inside the tribe-events folder inside the Wordpress Theme.

This customization has two problems / bugs:

1. When a day has more than one event. The first event is shown repeated. For example, if I have 3 events in a day, the first event is listed 3 times. I think here the problem is the “tribe_events_week_get_hourly()” function. There is no function that retrieves all events for a week day?
2. The AJAX navigation is not working well. When I click to “Next Week” or “Previous Week”, the events list is loaded well, but no event information is retrieved. That means, if a day has 3 events, I get 3 list elements but the_title() or other WordPress template functions are not working.

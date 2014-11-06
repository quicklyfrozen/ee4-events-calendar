<div class="wrap">
	<p>
        <?php _e('The calendar shortcodes allow you to display the calendar on a WordPress page or post. Unless otherwise specified, the calendar will show all events by month and exclude expired events.', 'event_espresso'); ?>
    </p>
	<ul>
		<li><?php _e('<strong>Show a calendar with all of your events</strong>', 'event_espresso'); ?><br />[ESPRESSO_CALENDAR]</li>
		<li><?php _e('<strong>Show events on the calendar and include expired events</strong>', 'event_espresso'); ?><br />[ESPRESSO_CALENDAR show_expired="true"]</li>
		<li><?php _e('<strong>Show events from a specific category on the calendar</strong>', 'event_espresso'); ?><br />[ESPRESSO_CALENDAR event_category_id="your_category_id"]</li>
		<li><?php _e('<strong>Show events from a specific category on the calendar and include expired events</strong>', 'event_espresso'); ?><br />[ESPRESSO_CALENDAR event_category_id="your_category_id" show_expired="true"]</li>
		<li><?php _e('<strong>Show events on the calendar by month</strong>', 'event_espresso'); ?><br />[ESPRESSO_CALENDAR cal_view="month"]</li>
		<li><?php _e('<strong>Show events on the calendar by a regular week</strong>', 'event_espresso'); ?><br />[ESPRESSO_CALENDAR cal_view="basicWeek"]</li>
		<li><?php _e('<strong>Show events on the calendar by a regular day</strong>', 'event_espresso'); ?><br />[ESPRESSO_CALENDAR cal_view="basicDay"]</li>
		<li><?php _e('<strong>Show events on the calendar by an agenda week</strong>', 'event_espresso'); ?><br />[ESPRESSO_CALENDAR cal_view="agendaWeek"]</li>
		<li><?php _e('<strong>Show events on the calendar by an agenda day</strong>', 'event_espresso'); ?><br />[ESPRESSO_CALENDAR cal_view="agendaDay"]</li>
	</ul>
</div>
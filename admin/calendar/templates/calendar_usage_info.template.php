<div class="padding">
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
		<ul>
			<li><?php _e('<strong>Styles/Colors</strong>', 'event_espresso'); ?>
			<br />
			<?php _e('To edit the calendar styles, copy the CSS file located in the plugin folder to your "wp-content/uploads/espresso/" directory. Then edit as needed. Refer to <a href="http://arshaw.com/fullcalendar/docs/event_rendering/Colors/" target="_blank">this page</a> for an example of styling the calendar and colors.', 'event_espresso'); ?>
			</li>
			<li>	<?php _e('<strong>Category Colors</strong>', 'event_espresso'); ?>
			<br />
			<?php _e('Event categories can have their own colors on the calendar. To use this feature, simply create a class in theme CSS file with the names of your event categories. For more information <a href="http://eventespresso.com/forums/?p=650" target="_blank">please visit the tutorial</a> for this topic.', 'event_espresso'); ?>
			</li>
		</ul>
</div>
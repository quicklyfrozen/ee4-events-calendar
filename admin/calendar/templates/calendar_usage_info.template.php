<div class="wrap">
	<h4><?php _e('Directions:', 'event_espresso'); ?></h4>
	<p>
		<?php _e(' Add [ESPRESSO_CALENDAR] to any page or post to display a calendar of Event Espresso events. Use [ESPRESSO_CALENDAR event_category_id="your_category_identifier"] to show events of a certain category (also creates a CSS using the category_identifier as the class name.) Use [ESPRESSO_CALENDAR show_expired="true"] to show expired events, can also be used inconjunction with the category ID.', 'event_espresso'); ?>
	</p>
	<h4><?php _e('Examples Shortcodes:', 'event_espresso'); ?></h4>
	<p>
		[ESPRESSO_CALENDAR]<br />
		[ESPRESSO_CALENDAR show_expired="true"]<br />
		[ESPRESSO_CALENDAR event_category_id="your_category_identifier"]<br />
		[ESPRESSO_CALENDAR event_category_id="your_category_identifier" show_expired="true"]<br />
		[ESPRESSO_CALENDAR cal_view="month"] (Available parameters: month, basicWeek, basicDay, agendaWeek, agendaDay)
	</p>
</div>
<!-- / .padding -->
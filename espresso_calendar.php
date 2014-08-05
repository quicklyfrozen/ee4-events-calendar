<?php
/*
  Plugin Name: Event Espresso - Calendar
  Plugin URI: http://www.eventespresso.com
  Description: A full calendar addon for Event Espresso. Includes month, week, and day views.
  Version: 3.1.0.p
  Author: Event Espresso
  Author URI: http://www.eventespresso.com
  Copyright 2014 Event Espresso (email : support@eventespresso.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA02110-1301USA
 *
 * ------------------------------------------------------------------------
 *
 * Event Espresso
 *
 * Event Registration and Management Plugin for WordPress
 *
 * @ package		Event Espresso
 * @ author			Event Espresso
 * @ copyright	(c) 2008-2014 Event Espresso  All Rights Reserved.
 * @ license		http://eventespresso.com/support/terms-conditions/   * see Plugin Licensing *
 * @ link				http://www.eventespresso.com
 * @ version	 	EE4
 *
 * ------------------------------------------------------------------------
 */

define( 'EE_CALENDAR_VERSION', '3.1.0.p' );
define( 'EE_CALENDAR_PLUGIN_FILE', __FILE__ );
function load_espresso_calendar_class() {
	// check for duplicate copy of Calendar addon
	if ( class_exists( 'EE_Calendar' ) || class_exists( 'EE_Calendar_Config' )) {
		EE_Error::add_error( sprintf( __( 'It appears there are multiple copies of the Event Espresso Calendar installed on your server.%sPlease remove (delete) all copies except for this version: "%s"', 'event_espresso' ), '<br />', EE_CALENDAR_VERSION ));
		return;
	}
	if ( class_exists( 'EE_Addon' )) {
		// calendar_version
		require_once ( plugin_dir_path( __FILE__ ) . 'EE_Calendar.class.php' );
		EE_Calendar::register_addon();
	}
}
add_action( 'AHEE__EE_System__load_espresso_addons', 'load_espresso_calendar_class' );

// End of file espresso_calendar.php
// Location: wp-content/plugins/espresso-calendar/espresso_calendar.php
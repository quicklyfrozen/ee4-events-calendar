<?php
namespace EventEspressoCalendar;

use EventEspresso\core\Factory;
use EventEspresso\core\libraries\iframe_display\Iframe;

if ( ! defined( 'EVENT_ESPRESSO_VERSION' ) ) {
	exit( 'No direct script access allowed' );
}



/**
 * Class CalendarIframe
 * Description
 *
 * @package       Event Espresso
 * @subpackage    core
 * @author        Brent Christensen
 * @since         $VID:$
 */
class CalendarIframe extends Iframe{

	/**
	 * CalendarIframe constructor.
	 *
	 * @throws \EE_Error
	 */
	public function __construct() {
        parent::__construct(
			__( 'Calendar', 'event_espresso' ),
            \EED_Espresso_Calendar::instance()->display_calendar( array(), false )
		);
	}



	/**
	 * display
	 *
	 * @access    public
	 * @return    void
	 * @throws \EE_Error
	 */
	public function display() {
		/** @var Iframe $iframe */
		// $iframe = Factory::create(
		// 	'Iframe',
		// 	array(
		// 		'title'   => __( 'Calendar', 'event_espresso' ),
		// 		'content' => \EED_Espresso_Calendar::instance()->display_calendar( array() )
		// 	)
		// );
        $this->addStylesheets(
			apply_filters(
				'FHEE__CalendarIframe__display__css',
				array(
					'fullcalendar'      => EE_CALENDAR_URL . 'css' . DS . 'fullcalendar.css?ver=1.6.2',
					'espresso_calendar' => EE_CALENDAR_URL . 'css' . DS . 'calendar.css?ver=' . EE_CALENDAR_VERSION,
				)
			)
		);
		$this->addScripts(
			apply_filters(
				'FHEE__CalendarIframe__display__js',
				array(
					'fullcalendar-min-js' => EE_CALENDAR_URL . 'scripts' . DS . 'fullcalendar.min.js?ver=1.6.2',
					'espresso_calendar' => EE_CALENDAR_URL . 'scripts' . DS . 'espresso_calendar.js?ver=' . EE_CALENDAR_VERSION,
				)
			)
		);
		// $iframe->addLocalizedVars(
		// 	array(
		// 		'calendar_iframe' => true,
		// 		'CalendarIframeMsg'   => __(
		// 			'Please choose at least one ticket before continuing.',
		// 			'event_espresso'
		// 		),
		// 	)
		// );
		parent::display();
	}


}
// End of file CalendarIframe.php
// Location: /eea-calendar/CalendarIframe.php
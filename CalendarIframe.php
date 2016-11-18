<?php
namespace EventEspressoCalendar;

use EED_Espresso_Calendar;
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
class CalendarIframe extends Iframe
{



    /**
     * CalendarIframe constructor.
     *
     * @param array $ee_calendar_js_options
     * @throws \DomainException
     */
    public function __construct( $ee_calendar_js_options = array() )
    {
        global $is_espresso_calendar;
        $is_espresso_calendar = true;
        EED_Espresso_Calendar::instance()->config()->tooltip->show = false;
        EED_Espresso_Calendar::instance()->calendar_scripts();
        parent::__construct(
            __( 'Calendar', 'event_espresso' ),
            \EED_Espresso_Calendar::instance()->display_calendar(
                EED_Espresso_Calendar::instance()->get_calendar_js_options(
                    \EED_Espresso_Calendar::getCalendarDefaults()
                )
            )
        );
    }



    /**
     * display
     *
     * @param string $utm_content
     * @throws \DomainException
     */
    public function display($utm_content = 'events_calendar')
    {
        parent::display($utm_content);
    }


}
// End of file CalendarIframe.php
// Location: /eea-calendar/CalendarIframe.php
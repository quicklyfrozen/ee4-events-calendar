<?php
namespace EventEspressoCalendar;

use EventEspresso\core\libraries\iframe_display\IframeEmbedButton;

defined('ABSPATH') || exit;



/**
 * Class CalendarIframeEmbedButton
 * Description
 *
 * @package       Event Espresso
 * @author        Brent Christensen
 * @since         $VID:$
 */
class CalendarIframeEmbedButton extends IframeEmbedButton
{


    public static function addEmbedButton()
    {
        // iframe embed buttons
        IframeEmbedButton::addFilterIframeEmbedButton(
            __('Events Calendar', 'event_espresso'),
            'calendar',
            'FHEE__Iframe__addEventListIframeEmbedButton__html'
        );
        IframeEmbedButton::addActionIframeEmbedButton(
            __('Events Calendar', 'event_espresso'),
            'calendar',
            'AHEE__calendar_usage_info__template__end'
        );
    }



    public static function loadScriptsAndStyles()
    {
        IframeEmbedButton::embedButtonAssets();
        \EE_Registry::$i18n_js_strings['iframe_embed_title'] = __(
            'copy and paste the following into any other site\'s content to display the event calendar:',
            'event_espresso'
        );
    }



}
// End of file CalendarIframeEmbedButton.php
// Location: EventEspressoCalendar/CalendarIframeEmbedButton.php
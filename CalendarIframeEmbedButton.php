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

    /**
     * @return string
     */
    public function embedButton()
    {
        return $this->embedButtonHtml(
            esc_html__('Events Calendar', 'event_espresso'),
            'calendar'
        );
    }

    public function addEmbedButton()
    {
        // iframe embed buttons
        $this->addFilterIframeEmbedButton(
            __('Events Calendar', 'event_espresso'),
            'calendar',
            'FHEE__EventEspresso_core_libraries_iframe_display_IframeEmbedButton__addIframeEmbedButtonsSection__embed_buttons'
        );
    }



    public function loadScriptsAndStyles()
    {
        $this->embedButtonAssets();
        \EE_Registry::$i18n_js_strings['iframe_embed_title'] = __(
            'copy and paste the following into any other site\'s content to display the event calendar:',
            'event_espresso'
        );
    }



    /**
     * Adds an iframe embed code button to the Event editor.
     * return string
     */
    public function addCalendarUsageIframeEmbedButtonSection()
    {
        return $this->addIframeEmbedButtonsSection(
            array('calendar' => $this->embedButton())
        );
    }



}
// End of file CalendarIframeEmbedButton.php
// Location: EventEspressoCalendar/CalendarIframeEmbedButton.php
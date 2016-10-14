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
	 * CalendarIframeEmbedButton constructor.
	 */
	public function __construct() {
		parent::__construct(
			esc_html__( 'Events Calendar', 'event_espresso' ),
			'calendar'
		);
	}


    public function addEmbedButton()
    {
        // iframe embed buttons
        $this->addFilterIframeEmbedButton(
            'FHEE__EventEspresso_core_libraries_iframe_display_IframeEmbedButton__addIframeEmbedButtonsSection__embed_buttons'
        );
    }



    public function loadScriptsAndStyles()
    {
	    \EE_Registry::$i18n_js_strings['iframe_embed_title'] = __(
		    'copy and paste the following into any other site\'s content to display the event calendar:',
		    'event_espresso'
	    );
	    $this->embedButtonAssets();
    }



    /**
     * Adds an iframe embed code button to the Event editor.
     * return string
     */
    public function addCalendarUsageIframeEmbedButtonSection()
    {
        return $this->addIframeEmbedButtonsSection(
            array('calendar' => $this->embedButtonHtml())
        );
    }



}
// End of file CalendarIframeEmbedButton.php
// Location: EventEspressoCalendar/CalendarIframeEmbedButton.php
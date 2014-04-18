<?php if ( ! defined( 'EVENT_ESPRESSO_VERSION' )) { exit('NO direct script access allowed'); }
/**
 * Class  EE_Calendar
 *
 * @package			Event Espresso
 * @subpackage		espresso-calendar
 * @author			    Seth Shoultes, Chris Reynolds, Brent Christensen, Michael Nelson
 *
 * ------------------------------------------------------------------------
 */
Class  EE_Calendar extends EE_Addon {

	const activation_indicator_option_name = 'ee_espresso_calendar_activation';

	public function __construct() {
		// register our activation hook
		register_activation_hook( __FILE__, array( $this, 'set_activation_indicator_option' ));
		// load_admin
		add_action( 'AHEE__EE_System__load_controllers__load_admin_controllers', array( $this, 'additional_admin_hooks' ));
	}

	public static function register_addon() {
		// define the plugin directory path and URL
		define( 'EE_CALENDAR_PATH', plugin_dir_path( __FILE__ ));
		define( 'EE_CALENDAR_URL', plugin_dir_url( __FILE__ ));
		define( 'EE_CALENDAR_PLUGIN_FILE', plugin_basename( __FILE__ ));
		define( 'EE_CALENDAR_ADMIN', EE_CALENDAR_PATH . 'admin' . DS );
		define( 'EE_CALENDAR_DMS_PATH', EE_CALENDAR_PATH . 'data_migration_scripts' . DS );
		// register addon via Plugin API
		EE_Register_Addon::register( array(
			'addon_name' 		=> 'Calendar',
			'version' 					=> EE_CALENDAR_VERSION,
			'min_core_version' => '4.2.0',
			'base_path' 				=> EE_CALENDAR_PATH,
			'admin_path' 			=> EE_CALENDAR_ADMIN . 'calendar' . DS,
			'config_class' 			=> 'EE_Calendar_Config',
			'autoloader_paths' => array(
				'EE_Calendar' 							=> EE_CALENDAR_PATH . 'EE_Calendar.class.php',
				'EE_Calendar_Config' 			=> EE_CALENDAR_PATH . 'EE_Calendar_Config.php',
				'EE_Datetime_In_Calendar' 	=> EE_CALENDAR_PATH . 'EE_Datetime_In_Calendar.class.php',
				'Calendar_Admin_Page' 		=> EE_CALENDAR_ADMIN . 'calendar' . DS . 'Calendar_Admin_Page.core.php',
				'Calendar_Admin_Page_Init' 	=> EE_CALENDAR_ADMIN . 'calendar' . DS . 'Calendar_Admin_Page_Init.core.php',
			),
			'dms_paths' 	=> array( EE_CALENDAR_DMS_PATH ),
			'modules' 		=> array( EE_CALENDAR_PATH . 'EED_Espresso_Calendar.module.php' ),
			'shortcodes' 	=> array( EE_CALENDAR_PATH . 'EES_Espresso_Calendar.shortcode.php' ),
			'widgets' 			=> array( EE_CALENDAR_PATH . 'EEW_Espresso_Calendar.widget.php' ),
		));
	}



	/**
	 * Until we do something better, we'll just check for migration scripts upon
	 * plugin activation only. In the future, we'll want to do it on plugin updates too
	 */
	public static function set_activation_indicator_option(){
		//let's just handle this on the next request, ok? right now we're just not really ready
		update_option( EE_Calendar::activation_indicator_option_name, TRUE );
	}



	/**
	 * new_install - check for migration scripts
	 * @return mixed
	 */
	public function new_install() {
		//if core is also active, then get core to check for migration scripts
		//and set maintenance mode is necessary
		if ( get_option( EE_Calendar::activation_indicator_option_name )) {
			EE_Maintenance_Mode::instance()->set_maintenance_mode_if_db_old();
			delete_option( EE_Calendar::activation_indicator_option_name );
		}
	}



	/**
	 * upgrade - check for migration scripts
	 * @return mixed
	 */
	public function upgrade() {
		//if core is also active, then get core to check for migration scripts
		//and set maintenance mode is necessary
		if ( get_option( EE_Calendar::activation_indicator_option_name )) {
			EE_Maintenance_Mode::instance()->set_maintenance_mode_if_db_old();
			delete_option( EE_Calendar::activation_indicator_option_name );
		}
	}



	/**
	 * 	additional_admin_hooks
	 *
	 *  @access 	public
	 *  @return 	void
	 */
	public function additional_admin_hooks() {
		// is admin and not in M-Mode ?
		if ( is_admin() && ! EE_Maintenance_Mode::instance()->level() ) {
			add_filter( 'plugin_action_links', array( $this, 'plugin_actions' ), 10, 2 );
			add_action( 'action_hook_espresso_calendar_update_api', array( $this, 'load_pue_update' ));
			add_action( 'action_hook_espresso_featured_image_add_to_meta_box', array( $this, 'add_to_featured_image_meta_box' ));
		}
	}





	/**
	 * 	load_pue_update - Update notifications
	 *
	 *  @return 	void
	 */
	public function load_pue_update() {
		if ( ! defined( 'EVENT_ESPRESSO_PLUGINFULLPATH' )) {
			return;
		}
		if ( is_readable( EVENT_ESPRESSO_PLUGINFULLPATH . 'class/pue/pue-client.php' )) {
			//include the file
			require( EVENT_ESPRESSO_PLUGINFULLPATH . 'class/pue/pue-client.php' );
			// initiate the class and start the plugin update engine!
			new PluginUpdateEngineChecker(
			// host file URL
				'http://eventespresso.com',
				// plugin slug(s)
				array(
					'premium' => array('reg' => 'espresso-calendar-core'),
					'prerelease' => array('beta' => 'espresso-calendar-core-pr')
				),
				// options
				array(
					'apikey' => EE_Registry::instance()->NET_CFG->core->site_license_key,
					'lang_domain' => 'event_espresso',
					'checkPeriod' => '24',
					'option_key' => 'site_license_key',
					'options_page_slug' => 'event_espresso',
					'plugin_basename' => EE_CALENDAR_PLUGIN_FILE,
					// if use_wp_update is TRUE it means you want FREE versions of the plugin to be updated from WP
					'use_wp_update' => FALSE,
				)
			);
		}
	}



	/**
	 * plugin_actions
	 *
	 * Add a settings link to the Plugins page, so people can go straight from the plugin page to the settings page.
	 * @param $links
	 * @param $file
	 * @return array
	 */
	public function plugin_actions( $links, $file ) {
		if ( $file == EE_CALENDAR_PLUGIN_FILE ) {
			// before other links
			array_unshift( $links, '<a href="admin.php?page=espresso_calendar">' . __('Settings') . '</a>' );
		}
		return $links;
	}



	/**
	 * add_to_featured_image_meta_box
	 * @param $event_meta
	 */
	public function add_to_featured_image_meta_box( $event_meta ) {
		EE_Registry::instance()->load_helper( 'Form_Fields' );
		$values = array(
			array('id' => true, 'text' => __('Yes', 'event_espresso')),
			array('id' => false, 'text' => __('No', 'event_espresso'))
		);
		$html = '<p>';
		$html .= EEH_Form_Fields::select(
			__('Add image to event calendar', 'event_espresso'),
			isset( $event_meta['display_thumb_in_calendar'] ) ? $event_meta['display_thumb_in_calendar'] : '',
			$values,
			'show_on_calendar',
			'show_on_calendar'
		);
		$html .= '</p>';
		echo $html;
	}




}
// End of file EE_Calendar.class.php
// Location: wp-content/plugins/espresso-calendar/EE_Calendar.class.php

<?php
/**
 * Contains test class for EE_Calendar.php
 *
 * @since  		3.1.0
 * @package 		Event Espresso Calendar
 * @subpackage 	tests
 */


/**
 * Test class for EE_Calendar.php
 *
 * @since 		4.3.0
 * @package 		Event Espresso
 * @subpackage 	tests
 */
class EE_Calendar_Tests extends EE_UnitTestCase {

	function test_EE_Calendar_instance() {
		$EECAL = new EE_Calendar();
		$this->assertTrue( $EECAL instanceof EE_Calendar );
	}
}

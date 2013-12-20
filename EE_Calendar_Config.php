<?php

/*
 * Settings for the calendar
 */
class EE_Calendar_Config extends EE_Config_Base{
	/**
	 *
	 * @var EE_Calendar_Config_Header
	 */
	public $header;
	/**
	 *
	 * @var EE_Calendar_Config_Button_Text
	 */
	public $buttonText;
	/**
	 *
	 * @var EE_Calendar_Config_Tooltip
	 */
	public $tooltip;
	/**
	 *
	 * @var EE_Calendar_Config_Title_Format 
	 */
	public $titleFormat;
	/**
	 *
	 * @var EE_Calendar_Config_Column_Format
	 */
	public $columnFormat;
	public $firstDay;
	public $weekends;
	public $weekMode;
	public $calendar_height;
	public $enable_calendar_thumbs;
	public $enable_calendar_filters;
	public $use_pickers;
	public $event_background;
	public $event_text_color;
	public $enable_cat_classes;
	public $disable_categories;
	public $time_format;
	public $show_time;
	public $show_attendee_limit;
	
	public function __construct(){
		$this->header = new EE_Calendar_Config_Header();
		$this->buttonText = new EE_Calendar_Config_Button_Text();
		$this->tooltip = new EE_Calendar_Config_Tooltip();
		$this->titleFormat = new EE_Calendar_Config_Title_Format();
		$this->columnFormat = new EE_Calendar_Config_Column_Format();
		$this->firstDay = '0';
		$this->weekends = true;
		$this->weekMode = 'liquid';//fixed, liquid, variable
		$this->calendar_height = '';
		$this->enable_calendar_thumbs = false;
		$this->enable_calendar_filters = false;
		$this->use_pickers = false;
		$this->event_background = '007BAE';
		$this->event_text_color = 'FFFFFF';
		$this->enable_cat_classes = false;
		$this->time_format = get_option('time_format');
		$this->show_time = true;
		$this->disable_categories = false;
		$this->show_attendee_limit = false;
	}
	
}
class EE_Calendar_Config_Header  extends EE_Config_Base{
	public $left;
	public $center;
	public $right;
	public function __construct(){
		$this->left = 'prev, today';
		$this->center = 'title';
		$this->right = 'month, agendaWeek, agendaDay, next';
	}
}
class EE_Calendar_Config_Button_Text  extends EE_Config_Base{
	public $prev;
	public $next;
	public $prevYear;
	public $nextYear;
	public $today;
	public $month;
	public $week;
	public $day;
	public function __construct(){
		$this->prev = '&lsaquo;';
		$this->next = '&rsaquo;';
		$this->prevYear = '&laquo;';
		$this->nextYear = '&raquo;';
		$this->today = 'today';
		$this->month = 'month';
		$this->week = 'week';
		$this->day = 'day';
	}
}
class EE_Calendar_Config_Tooltip  extends EE_Config_Base{
	public $pos_my_1;
	public $pos_my_2;
	public $pos_at_1;
	public $pos_at_2;
	public $style;
	public $show;
	public function __construct(){
		$this->show = true;
		$this->pos_my_1 = 'bottom';
		$this->pos_my_2 = 'center';
		$this->pos_at_1 = 'center';
		$this->pos_at_2 = 'center';
		$this->style = 'qtip-light';
	}
}
class EE_Calendar_Config_Title_Format extends EE_Config_Base{
	public $month;
	public $week;
	public $day;
	public function __construct() {
		$this->month = 'MMMM yyyy';
		$this->week = 'MMM dS[ yyyy] - {[ MMM] dS yyyy}';
		$this->day = 'dddd, MMM dS, yyyy';
	}
}

class EE_Calendar_Config_Column_Format extends EE_Config_Base{
	public $month;
	public $week;
	public $day;
	public function __construct() {
		$this->month = 'ddd';
		$this->week = 'ddd M/d';
		$this->day = 'dddd M/d';
	}
}
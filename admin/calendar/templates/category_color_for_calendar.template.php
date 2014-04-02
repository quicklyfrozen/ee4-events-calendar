<label for="use_color_picker_for_calendar"><?php _e("Use Custom Category Color", "event_espresso");?></label>
<select name="use_color_picker_for_calendar" id="use-color-picker">
	<option value="1" <?php echo $use_color_picker ? 'selected' : ''?>><?php _e("Yes", "event_espresso");?></option>
	<option value="0" <?php echo ! $use_color_picker ? 'selected' : ''?>><?php _e("No", "event_espresso");?></option>
</select><br/>
<div id="color-picker-options" style='display:none'>
	<label for="category_background_color_for_calendar"><?php _e("Background Color",'event_espresso')?></label><br/>
	<input type="text" class="category-color-picker" id="category-background-color-for-calendar" name="category_background_color_for_calendar" style="display:none" data-default-color="<?php echo $default_background_color?>" value="<?php echo $background_color?>"><br/>
	<label for="category_text_color_for_calendar"><?php _e("Text Color", "event_espresso");?></label><br/>
	<input type="text" class="category-color-picker" id="category-text-color-for-calendar" name='category_text_color_for_calendar' style="display:none" data-default-color="<?php echo $default_text_color?>" value="<?php echo $text_color?>">
</div>
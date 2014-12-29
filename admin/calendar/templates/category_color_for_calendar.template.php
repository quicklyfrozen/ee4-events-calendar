<label for="use-color-picker"><?php _e("Use Custom Category Color", "event_espresso");?></label>
<select name="use-color-picker-for-calendar" id="use-color-picker">
	<option value="1" <?php echo $use_color_picker ? 'selected' : ''?>><?php _e("Yes", "event_espresso");?></option>
	<option value="0" <?php echo ! $use_color_picker ? 'selected' : ''?>><?php _e("No", "event_espresso");?></option>
</select><br/>
<div id="color-picker-options" style='display:none'>
	<label for="category-background-color-for-calendar"><?php _e("Background Color",'event_espresso')?></label><br/>
	<input type="text" class="category-color-picker" id="category-background-color-for-calendar" name="category-background-color-for-calendar" style="display:none" data-default-color="<?php echo $default_background_color?>" value="<?php echo $background_color?>"><br/>
	<label for="category-text-color-for-calendar"><?php _e("Text Color", "event_espresso");?></label><br/>
	<input type="text" class="category-color-picker" id="category-text-color-for-calendar" name='category-text-color-for-calendar' style="display:none" data-default-color="<?php echo $default_text_color?>" value="<?php echo $text_color?>"><br/>
	<label for="category-color-priority-for-calendar"><?php _e("Color Prioirty", "event_espresso");?></label><br/>
	<input type="text" class="category-color-priority" id="category-color-priority-for-calendar" name='category-color-priority-for-calendar' data-default-color="<?php echo $category_color_priority ?>" value="<?php echo $category_color_priority ?>"><br/>
	<br/>
	<label for="skip-category-color"><?php _e("Skip Color in Calendar", "event_espresso");?></label>
	<select name="skip-category-color-for-calendar" id="skip-category-color">
	<option value="1" <?php echo $skip_category_color ? 'selected' : ''?>><?php _e("Yes", "event_espresso");?></option>
	<option value="0" <?php echo ! $skip_category_color ? 'selected' : ''?>><?php _e("No", "event_espresso");?></option>
</select>
</div>
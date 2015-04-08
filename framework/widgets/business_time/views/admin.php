<div class="business-time">
    <div class="title">
        <label class="widefat" for="<?php $this->get_field_id('title') ?>">
            <?php _e('Title:','architect') ?>
        </label>
        <input
            class="widefat"
            type="text"
            id="<?php echo $this->get_field_id('title'); ?>"
            name="<?php echo $this->get_field_name('title'); ?>"
            value="<?php echo esc_attr($instance['title']); ?>"
        />
    </div>

    <div class="hour_description" class="widefat">
        <label class="widefat" for="<?php $this->get_field_id('hour_description') ?>">
            <?php _e('Description','architect') ?>
        </label>
        <textarea
            rows="3"
            cols="28"
            maxlength="160"
            id="<?php echo $this->get_field_id( 'hour_description' ); ?>"
            name="<?php echo $this->get_field_name( 'hour_description' ); ?>"
        >
            <?php echo esc_textarea( $instance['hour_description'] ); ?>
        </textarea>
        <!-- <input
            class="widefat"
            type="text"
            id="<?php echo $this->get_field_id('hour_description'); ?>"
            name="<?php echo $this->get_field_name('hour_description'); ?>"
            value="<?php echo esc_attr($instance['hour_description']); ?>"
            />-->
    </div>

    <div class="hours_monday_to_friday">
        <label class="widefat" for="<?php $this->get_field_id('hours_monday_to_friday') ?>">
            <?php _e('Time on Monday to Friday','architect') ?>
        </label>
        <input
            class="widefat"
            type="text"
            id="<?php echo $this->get_field_id('hours_monday_to_friday'); ?>"
            name="<?php echo $this->get_field_name('hours_monday_to_friday'); ?>"
            value="<?php echo esc_attr($instance['hours_monday_to_friday']); ?>"
            />
    </div>

    <div class="hours_saturday">
        <label class="widefat" for="<?php $this->get_field_id('hours_saturday') ?>">
            <?php _e('Time on Saturday','architect') ?>
        </label>
        <input
            class="widefat"
            type="text"
            id="<?php echo $this->get_field_id('hours_saturday'); ?>"
            name="<?php echo $this->get_field_name('hours_saturday'); ?>"
            value="<?php echo esc_attr($instance['hours_saturday']); ?>"
            />
    </div>

    <div class="hours_sunday">
        <label class="widefat" for="<?php $this->get_field_id('hours_sunday') ?>">
            <?php _e('Time on Sunday','architect') ?>
        </label>
        <input
            class="widefat"
            type="text"
            id="<?php echo $this->get_field_id('hours_sunday'); ?>"
            name="<?php echo $this->get_field_name('hours_sunday'); ?>"
            value="<?php echo esc_attr($instance['hours_sunday']); ?>"
            />
    </div>
<br/>
    <div class="on_homepage">
        <label class="widefat" for="<?php $this->get_field_id('on_homepage') ?>">
            <input
                type="checkbox"
                id="<?php echo $this->get_field_id('on_homepage'); ?>"
                name="<?php echo $this->get_field_name('on_homepage'); ?>"
                value="1" <?php checked(1, $instance['on_homepage'], true); ?>
                />
            <?php _e('Show this widget on Homepage Only?','architect') ?>
        </label>

    </div>

<br/>
</div>
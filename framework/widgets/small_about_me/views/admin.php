<div class="small-about-me">
    <div>
        <label class="widefat"><?php _e( 'Your Name', 'small-about-me' ) ?></label>
        <input
               class="widefat"
               type="text"
               id="<?php echo $this->get_field_id('name'); ?>"
               name="<?php echo $this->get_field_name('name'); ?>"
               value="<?php echo esc_attr($instance['name']); ?>"
            />
    </div>

    <div>
        <label><?php _e('Your Bio', 'small-about-me') ?></label>
        <textarea
            id="<?php echo $this->get_field_id('bio'); ?>"
            name="<?php echo $this->get_field_name('bio'); ?>"
            rows="3"
            cols="28"
            maxlength="160"
            class="small-about-me-bio"
        ><?php echo esc_textarea($instance['bio']); ?>
        </textarea>
        <p class="description">
            <?php _e('You have ', 'small-about-me') ?>
            <span class="small-about-me-count">160</span>
            <?php _e(' characters remaining.', 'small-about-me') ?>
        </p>
    </div>

    <div>
        <label><?php _e('Display name', 'small-about-me'); ?></label>
        <select
            id="<?php echo $this->get_field_id('position'); ?>"
            name="<?php echo $this->get_field_name('position'); ?>"
        >
            <option value="above" <?php selected('above', $instance['position'], true); ?>><?php _e('above the bio', 'small-about-me'); ?></option>
            <option value="below" <?php selected('below', $instance['position'], true); ?>><?php _e('below the bio', 'small-about-me'); ?></option>
        </select>
    </div>

    <div>
        <label>
            <input
                type="checkbox"
                id="<?php echo $this->get_field_id('homepage-only'); ?>"
                name="<?php echo $this->get_field_name('homepage-only'); ?>"
                value="1" <?php checked(1, $instance['homepage-only'], true); ?>
            />
            <?php _e('Display only on the homepage?', 'small-about-me'); ?>
        </label>
    </div>

</div><br/>
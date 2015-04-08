<?php if( (1 == $instance['on_homepage'] && is_home()) || (1 != $instance['on_homepage']) ){ ?>

    <div class="business-time">
        <p class="b-title"><h2><?php echo $instance['title']; ?></h2></p>
        <p class="b-description"><?php echo $instance['hour_description']; ?></p>
        <p class="hours-monday-to-friday"><?php echo $instance['hours_monday_to_friday']; ?></p>
        <p class="hours_saturday"><?php echo $instance['hours_saturday']; ?></p>
        <p class="hours-sunday"><?php echo $instance['hours_sunday']; ?></p>
    </div>

<?php } ?>
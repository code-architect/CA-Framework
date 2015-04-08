<?php if( (1 == $instance['homepage-only'] && is_home()) || (1 != $instance['homepage-only']) ){ ?>

    <?php if('above' == $instance['position']){ ?>

        <p class="small-about-me-name">
            <?php echo $instance['name']; ?>
        </p>

        <p class="small-about-me-bio">
        <?php echo $instance['bio']; ?>
        </p>

    <?php }else{ ?>

        <p class="small-about-me-bio">
            <?php echo $instance['bio']; ?>
        </p>

        <p class="small-about-me-name">
            <?php echo $instance['name']; ?>
        </p>

    <?php } ?>

<?php } ?>
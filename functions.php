<?php
add_action('after_theme_setup', function () {
    add_image_size('large_image', 1920, 800, false);
    add_image_size('small_image', 10, 10, true);
});

<?php
add_action('after_theme_setup', function () {
    add_image_size('large_image', 1920, 800, false);
});

function add_something()
{
    return "I am here to add something";
}

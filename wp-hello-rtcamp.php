<?php
/*
Plugin Name: Hello rtCamp
Description: A basic WordPress plugin to display a welcome message in admin dashboard.
Version: 1.0
Author: Pranav Agone
*/

add_action('admin_notices', function () {
    echo '<div class="notice notice-success is-dismissible"><p>Hello, rtCamp! 👋</p></div>';
});

<?php

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

function my_custom_login_logo() {
    echo '<style type="text/css">
        .login h1 a { background-image:url('.get_bloginfo('stylesheet_directory').'/img/custom-login-logo.png) !important;  background-size:227px 65px;}
    </style>';
}

add_action('login_head', 'my_custom_login_logo');
?>
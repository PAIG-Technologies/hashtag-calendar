<?php
// include_once(get_template_directory()."/inc/init.php");

add_action("init",function(){
    require(get_stylesheet_directory()."/inc/init.php");
},20);



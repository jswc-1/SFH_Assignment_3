<?php
    defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
    /*local development server settings*/
    defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'xampp'.DS.'htdocs'.DS.'SFH_Assignment_3');
    /*online server settings*/    
    //definde site root for 000webhost
    //defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'storage'.DS.'ssd2'.DS.'881'.DS.'20529881'.DS.'public_html');
    
    defined('INC_PATH') ? null : define('INC_PATH', SITE_ROOT.DS.'includes');
    defined('CORE_PATH') ? null : define('CORE_PATH', SITE_ROOT.DS.'core');

    //load the config file first
    require_once("config.php");

    //core classes
    //require_once("post.php");
    require_once("event.php");
    
    ?>
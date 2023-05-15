<?php
    /* local development server settings */
    
    $db_user = "root";
    $db_password = "";
    $db_name = "sfh";
    

    /* online server settings */
    
    /*
    $db_user = "id20529881_jswc";
    $db_password = "Room1131!!";
    $db_name = "id20529881_sfh";
*/

    $db = new PDO('mysql:host=localhost;dbname='.$db_name , $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    define('APP_NAME', 'SFH');
    define('APP_VERSION', '1.0.0');
    
?>
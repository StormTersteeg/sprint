<?php
include("sprint/settings.php");

if ($use_production_db) {
    if(!defined('DB_SERVER')) {
        define('DB_SERVER', 'localhost');
    }
    if(!defined('DB_USERNAME')) {
        define('DB_USERNAME', 'root');
    }
    if(!defined('DB_PASSWORD')) {
        define('DB_PASSWORD', '');
    }
    if(!defined('DB_NAME')) {
        define('DB_NAME', '');
    }
} else {
    if(!defined('DB_SERVER')) {
        define('DB_SERVER', 'localhost');
    }
    if(!defined('DB_USERNAME')) {
        define('DB_USERNAME', 'root');
    }
    if(!defined('DB_PASSWORD')) {
        define('DB_PASSWORD', '');
    }
    if(!defined('DB_NAME')) {
        define('DB_NAME', '');
    }
}

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
  die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
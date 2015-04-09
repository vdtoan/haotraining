<?php
// @TODO : include configuration file and assign it to the variable
$db_info = include "config/database.php";


// @TODO : include database class
include "class/Database.php";

// @TODO : create object instead of the database class and pass the config to its constructor
$db = new Database($db_info);
$connected = $db->connect();
if($connected){
    echo "Connected";
}else{
    echo "Error";
}

// @TODO : call a connection and should throw the exception if connect is not established

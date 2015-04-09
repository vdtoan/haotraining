<?php
// @TODO : include configuration file and assign it to the variable
include "config/database.php";


// @TODO : include database class
include "class/Database.php";

// @TODO : create object instead of the database class and pass the config to its constructor
$conn = new Database($db_conn);
$conn->connect();

// @TODO : call a connection and should throw the exception if connect is not established

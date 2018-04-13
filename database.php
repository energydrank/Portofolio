<?php

$database_host = "localhost"; //The host of the Database
$database_user = "root"; //The account that accesses the database/
$database_password = ""; //The password the database user uses/
$database_name = "portfolio2"; //The name of the database


//Making a variable that will connect to the database
$conn = new mysqli($database_host, $database_user, $database_password, $database_name);
?>

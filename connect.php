<?php
//we are going to create a connection to the database so that info shared by user is stored into the database

//we begin..
$db_server = 'localhost';
$db_username = 'root';
$db_pass = '';
$db_name =  'university';
$conn = '';

//we have created a connect
$conn = mysqli_connect($db_server,$db_username,$db_pass,$db_name);
//we are establishing a SELECT/INSERT SQL query type below here


//let us create the database with xampp


?>
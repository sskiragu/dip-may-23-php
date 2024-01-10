<?php

$database_connection = mysqli_connect('localhost', 'root', 'your_temporary_password');

if($database_connection->connect_error){
    echo "Error" . ' ' . $database_connection->connect_error;
}else{
    echo "Database connection successful";
}
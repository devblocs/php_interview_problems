<?php

// creating a database connection
function db_connect(){
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "practice_authentication";

    return mysqli_connect($host, $username, $password, $db);
}

// checking the db connection
function check_connection(){
    if(mysqli_connect_errno(db_connect())){
        return "Connection error: " . mysqli_connect_errno() . ": " . mysqli_connect_error();
    }

    return "Connection made successfully!";
}
<?php

// creating a database connection
function db_connect(){
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "practice_subscription_form";

    return mysqli_connect($host, $username, $password, $db);
}

// checking the database connection
function check_connection(){
    if(mysqli_connect_errno(db_connect())){
        echo "Connection error: " . mysqli_connect_errno() . ": " . mysqli_connect_error();
    }else{
        echo "Connection made successfully!";
    }
}

function create_subscription(string $query){
    return mysqli_query(db_connect(), $query);
}
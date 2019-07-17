<?php

function trim_strings(string $data){
    return trim(stripslashes(strip_tags($data)));
}

function escape_string(string $data){
    return mysqli_escape_string(db_connect(), trim_strings($data));
}

function check_email_exists(string $email){
    $query = "SELECT email FROM subscription WHERE email='$email'";

    $email_exists = mysqli_query(db_connect(), $query);

    return mysqli_num_rows($email_exists);
}
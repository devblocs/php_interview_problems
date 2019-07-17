<?php

function check_email_exists(string $email){
    $query = "SELECT email FROM users WHERE email='$email'";

    $email_exists = mysqli_query(db_connect(), $query);

    return mysqli_num_rows($email_exists);
}

function create_user($fname, $lname, $email, $password, $created_at = null){
    $query = "INSERT INTO users (first_name, last_name, email, password, created_at)";
    $query .= "VALUES ('$fname', '$lname', '$email', '$password', '$created_at')";

    return mysqli_query(db_connect(), $query);
}

function get_user_by_email(string $email){
    $query = "SELECT * FROM users WHERE email='$email'";

    $user = mysqli_query(db_connect(), $query);

    if(mysqli_num_rows($user) == 1){
        return mysqli_fetch_assoc($user);
    }

    return false;
}

function get_user_by_id(int $id){
    $query = "SELECT * FROM users WHERE id='$id'";

    $user = mysqli_query(db_connect(), $query);

    if(mysqli_num_rows($user) == 1){
        return mysqli_fetch_assoc($user);
    }

    return false;
}
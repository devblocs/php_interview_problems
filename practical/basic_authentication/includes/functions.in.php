<?php

// celearing unwanted data from the form input
function trim_strings(string $data){
    return trim(stripslashes(strip_tags($data)));
}

// escaping unwanted string characters before storing into database
function escape_string(string $data){
    return mysqli_escape_string(db_connect(), trim_strings($data));
}

// redirect to page with get parameters
function redirect(string $page, array $parameters = []){
    if(!empty($parameters)){
        $query = http_build_query($parameters);

        return header("Location: {$page}.php?" . $parameters);
    }

    return header("Location: {$page}.php");
}

// to check whether the user is authenticated or not
function check_authentication(){
    if($_SESSION['sid'] !== session_id() || !isset($_SESSION['uid'])){
        return redirect("index");

        exit;
    }
}
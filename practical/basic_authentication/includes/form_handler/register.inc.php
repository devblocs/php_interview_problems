<?php

if(isset($_POST['register'])){
    $fname = "";
    $lname = "";
    $email = "";
    $password = "";
    $created_at = date("Y-m-d H:i:s");

    // validaing the first name
    if(empty($_POST["first_name"])){
        array_push($errors, "First name required");
    }else{
        $fname = strtolower(escape_string($_POST["first_name"]));

        if(!preg_match("/^[a-zA-z]*$/", $fname)){
            array_push($errors, "Invalid characters in first name");
        }

        if(strlen($fname) > 25 || strlen($fname) < 5){
            array_push($errors, "First name must be less than 25 characters and greater than 5 characters");
        }
    }

    // validating the last name
    if(empty($_POST["last_name"])){
        array_push($errors, "Last name required");
    }else{
        $lname = strtolower(escape_string($_POST["last_name"]));

        if(!preg_match("/^[a-zA-z]*$/", $lname)){
            array_push($errors, "Invalid characters in last name");
        }

        if(strlen($lname) > 25 || strlen($lname) < 5){
            array_push($errors, "Last name must be less than 25 characters and greater than 5 characters");
        }
    }

    if(empty($_POST["email"])){
        array_push($errors, "Email required");
    }else{
        $email = escape_string($_POST["email"]);

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            array_push($errors, "Invaid email format");
        }else{
            $email = filter_var($email, FILTER_VALIDATE_EMAIL);

            if(check_email_exists($email) > 0){
                array_push($errors, "Email already exists");
            }
        }
    }

    if(empty($_POST["password"])){
        array_push($errors, "Password required");
    }else{
        $password = escape_string($_POST["password"]);

        if(strlen($password) > 10 || strlen($password) < 5){
            array_push($errors, "Password cannot be greater than 10 and less than 5");
        }
    }


    if(empty($_POST["confirm_password"])){
        array_push($errors, "Confirm password");
    }else{
        $cpassword = escape_string($_POST["confirm_password"]);

        if($cpassword != $password){
            array_push($errors, "Passwords don\'t match");
        }
    }


    if(empty($errors)){
        $password = password_hash($password, PASSWORD_DEFAULT);

        $create_user = create_user($fname, $lname, $email, $password, $created_at);

        if($create_user){

            $user = get_user_by_email($email);

            if($user != false){
                $_SESSION['sid'] = session_id();
                $_SESSION["uid"] = $user['id'];
    
                redirect("welcome");
            }
        }
    }

}
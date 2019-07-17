<?php

if(isset($_POST['login'])){
    if(empty($_POST["email"])){
        array_push($errors, "Email required");
    }else{
        $email = escape_string($_POST["email"]);
    }

    if(empty($_POST["password"])){
        array_push($errors, "Password required");
    }else{
        $password = $_POST["password"];
    }


    if(empty($errors)){
        $user = get_user_by_email($email);

        if($user != false){
            $user_password = $user["password"];

            if(password_verify($password, $user_password)){
                $_SESSION['sid'] = session_id();
                $_SESSION["uid"] = $user['id'];
    
                redirect("welcome");
            }else{
                array_push($errors, "Password don't match!");
            }
        }else{
            array_push($errors, "Invalid email or password");
        }
    }
}
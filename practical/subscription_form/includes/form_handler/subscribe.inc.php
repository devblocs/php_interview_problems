<?php

if(isset($_POST["subscribe"])){
    $email = "";

    if(empty($_POST["email"])){
        array_push($errors, "Email required");
    }else{

        $email = escape_string($_POST["email"]);

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email = filter_var($email, FILTER_VALIDATE_EMAIL);

            if(check_email_exists($email)){
                array_push($errors, "Email already subscribed");
            }
        }else {
            array_push($errors, "invalid email format");
        }
    }

    if(empty($errors)){
    
        $query = "INSERT INTO subscription (email, subscription_status) VALUES ('$email', '1')";
    
        $create_subscription = create_subscription($query);
    
        if($create_subscription){
            $status = 1;
        }else{
            $status = 0;
        }
    }
}


<?php 

require "config.php"; 

if(isset($_SESSION['sid'])){
    redirect("welcome");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to basic authentication using php</title>
</head>
<body>
    <h3>Register User</h3>
    <form action="" method="post">
        <label for="first_name">First Name: </label>
        <input type="text" name="first_name" id="first_name" />
        <br />

        <label for="last_name">Last Name: </label>
        <input type="text" name="last_name" id="last_name" />
        <br />

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" />
        <br />

        <label for="password">Password: </label>
        <input type="password" name="password" id="password" />
        <br />

        <label for="confirm_password">Confirm Password: </label>
        <input type="password" name="confirm_password" id="confirm_password" />
        <br />

        <input type="submit" value="Register" name="register" />
    </form>


    <br />
    <br />
    <br />
    <br />

    <form action="" method="post">
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" />
        <br />

        <label for="password">Password: </label>
        <input type="password" name="password" id="password" />
        <br />

        <input type="submit" value="Login" name="login" />
    </form>


    <?php if(count($errors) > 0){ ?>
        <ul>
            <?php foreach($errors as $error){ ?>
                <li><?= $error ?></li>
            <?php }?>
        </ul>
    <?php } ?>
</body>
</html>
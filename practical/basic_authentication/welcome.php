<?php
require "config.php";

check_authentication();

$user_id = $_SESSION['uid'];

$user = get_user_by_id($user_id);

if($user != false){
    $name = $user['first_name'] . " " . $user["last_name"];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome <?= ucwords($name) ?> |</title>
</head>
<body>
    <h2>Welcome <?= ucwords($name) ?></h2>

    <p><a href="logout.php">Logout</a></p>
</body>
</html>



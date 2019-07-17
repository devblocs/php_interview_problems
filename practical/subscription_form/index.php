<?php require "config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to subscription form</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" placeholder="Enter your email address" />

        <input type="submit" value="Subscribe" name="subscribe" />
    </form>

    <?php if(count($errors) > 0){ ?>
        <ul>
            <?php foreach($errors as $error){ ?>
                <li><?php echo $error; ?></li>
            <?php } ?>
        </ul>
    <?php } ?>

    <?php if($status == 1){ ?>
        <ul>
            <li>Email subscribed successfully!</li>
        </ul>
    <?php } ?>
</body>
</html>
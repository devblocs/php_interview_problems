<?php

ob_start(); // start output buffering

session_start(); // start session

$errors = []; // empty array for storing the errors

// include files

include "includes/db/db.inc.php";
include "includes/functions.in.php";
include "includes/users/user.inc.php";
include "includes/form_handler/register.inc.php";
include "includes/form_handler/login.inc.php";
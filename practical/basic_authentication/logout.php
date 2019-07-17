<?php
require "config.php";

$_SESSION = [];

if(session_destroy()){
    redirect("index");

    exit;
}
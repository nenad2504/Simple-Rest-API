<?php
$config = require "config.php";

$db = $config['database'];


$con = mysqli_connect($db['host'], $db['user'], $db['password'], $db['dbname']);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
}
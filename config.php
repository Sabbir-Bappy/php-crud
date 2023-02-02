<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "crudop";

$config = mysqli_connect($host, $user, $pass, $db);
if ($config == false) {
    die("Error establishing database connection");
}

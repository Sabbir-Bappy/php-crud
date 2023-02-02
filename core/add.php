<?php require_once('../config.php');
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $adress = $_POST['adress'];
    $class = $_POST['class'];
    $phone = $_POST['phone'];
    $sql = "INSERT INTO `crud`( `name`, `adress`, `class`, `phone`) VALUES ('$name','$adress','$class','$phone')";
    $run = $config->query($sql);
    if ($run == true) {
        header("location:../index.php?msg=file-added");
    }
}

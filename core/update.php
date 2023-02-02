<?php require_once('../config.php');
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $adress = $_POST['adress'];
    $class = $_POST['class'];
    $phone = $_POST['phone'];
    $eid = $_POST['eid'];


    $sql = "UPDATE `crud` SET  `name`='$name', `adress`='$adress', `class`='$class', `phone`='$phone' WHERE md5(id)='$eid'";

    $run = $config->query($sql);
    if ($run == true) {
        header("location:../index.php?msg=file-updated");
    }
}

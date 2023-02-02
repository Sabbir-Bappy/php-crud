<?php
require_once('../config.php');
$did = $_REQUEST['did'];

$sql = "DELETE FROM `crud` WHERE md5(id)='$did'";
$run = $config->query($sql);

header("location:../?msg=file-has-been-deleted");

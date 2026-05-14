<?php
include '../admin/core.php';
if($_POST){
$id = $_POST['id'];
$core ->query("DELETE FROM `state` WHERE `id` = '$id'");
header('location:../components/admin_pan.php');
}

?>
<?php
include '../admin/core.php';
if($_POST){
$id = $_POST['id'];
$core ->query("DELETE FROM `user` WHERE `id` = '$id'");
header('location:../components/feedback.php');
}

?>
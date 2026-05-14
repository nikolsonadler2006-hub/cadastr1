<?php
include '../admin/core.php';
if($_POST){
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $user = $core ->query("SELECT * FROM `state` WHERE `phone` = '$phone'");
    if($user ->num_rows==0){
$core ->query("INSERT INTO `state`(`fullname`, `phone`) VALUES ('$fullname','$phone')");
header('location:../../index.php');
    }
    else{
        $_SESSION['error']['state']= 'Пользователь с таким номером телефона уже есть!';
        header('location:../../index.php');
    }
}


?>
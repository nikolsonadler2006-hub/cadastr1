<?php
include '../admin/core.php';
if($_POST){
    $login = $_POST['login'];
    $comm = $_POST['comm'];
    $rating = $_POST['rating'];
    $core ->query("INSERT INTO `user`(`login`,`password`,`comm`, `estimation`) VALUES ('$login', '','$comm','$rating')");
    header('location:../../index.php');
}



?>
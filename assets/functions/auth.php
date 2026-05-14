<?php
include '../admin/core.php';
if($_POST){
    $login = $_POST['login'];
    $password = $_POST['password'];
    $users = $core ->query("SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'");
    if($users->num_rows!=0){
        $user = $users->fetch_assoc();
        $_SESSION['user'] = [
            'id' => $user['id']
        ];
        header('location:../../index.php');
    }
    else{
     
        header('location:../../index.php');
        $_SESSION['error'] = 'Пользователь не найден!';
    }
}

?>
<?php

if ($_POST) {
    //Inserir,editar ou logar
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    require_once '../model/usersModel.php';
    $user = new usuariosModel();
    if ($user->login($email, $senha) == 1) {
        @session_start();
        $_SESSION['id'] = $user->getId();
        $_SESSION['login'] = $user->getEmail();
        
        //Cookie
        if(isset($_POST['rememberMe'])){
            //cria o cookie
            setcookie('rememberme', $email, time() + (86400 * 30), "/"); // 86400 = 1 day
        }
        header('location:../home.php');
    } else {
        header('location:../index.php?cod=171');
    }
} else if ($_REQUEST) {
    //Excluir
} else {
    //Exibir
}


<?php

if ($_POST) {
    @$id = $_POST['id'];
    @$email = $_POST['email'];
    @$senha = $_POST['senha'];
   

    require_once '../model/usersModel.php';
    $usuario = new usuariosModel();
    $usuario->setEmail($email);
    $usuario->setSenha($senha);

    if ($id == 0) {
       
        $total = $usuario->insert();
        if ($total == 1) {
            header('location:../index.php?cod=sucess');
        } else {
            header('location:../cadastroPage.php?cod=error');
        }
    } else {
      
        $usuario->setId($id);
        $total = $usuario->update();
         if ($total == 1) {
            header('location:../cadastroPage.php?cod=sucess');
        } else {
            header('location:../cadastroPage.php?cod=error');
        }
    }
} else {
    
    $usuarioList = loadAll();
}

function loadAll() {
    //Listar
    require_once '../model/usersModel.php';
    $usuario = new usuariosModel();
    $usuarioList = $usuario->loadAll();
    return $usuarioList;
}

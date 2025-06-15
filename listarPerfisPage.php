<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body class="container">
        <?php
        if ($_REQUEST) {
                $cod = $_REQUEST['cod'];
                
                if($cod == 'limit'){
                    echo '<div class="alert alert-warning">';
                    echo '<b>Ok:</b> Voce não pode criar mais perfis.';
                    echo '</div>';
                }
                
                
                
                if ($cod == 'success') {
                    echo '<div class="alert alert-success">';
                    echo '<b>Ok:</b> Operation realized with success.';
                    echo '</div>';
                }   
                if($cod == 'error')  {
                    echo '<div class="alert alert-danger">';
                    echo '<b>Error:</b> Error!!!!';
                    echo '</div>';
                }
            }
        ?>
        <div class="float-end">
            <a style="text-decoration: none;" href="cadastrarPerfisPage.php">Novo perfil do usuário</a>
        </div>
        <table class="table table-bordered">
            <thead>
            <th>Nome</th>
            <th>Operações</th>
        </thead>
        <tbody>
            <?php
            
            require_once './controller/perfisController.php';
            if (isset($perfisList)) {
                foreach ($perfisList as $data) {
                    echo '<tr>';
                    echo '<td>' . $data['nome'] . '</td>';
                    echo '<td>';
                    echo '<a onclick="confirm("Delete register?")" class="btn btn-danger" href="./controller/perfisController.php?cod=del&&id=' . $data['id'] . '">Excluir</a>';
                    echo '<label>|</label>';
                    echo '<a class="btn btn-warning" href="./cadastrarPerfisPage.php?cod=edit&&id=' . $data['id'] . '">Editar</a>';
                    echo '</td>';
                    echo '</tr>';
                }
            }
            ?>
        </tbody>
    </table>
        <a href="home.php" class="text-decoration-none">Voltar</a>
</body>
</html>

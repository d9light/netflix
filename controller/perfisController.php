<?php



if ($_POST) {
    require_once '../model/perfisModel.php';
    // Sanitização e validação dos dados
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    $nome = $_POST['nome'];
    $imagem = $_POST['imagem'];
    $kids = isset($_POST['kids']) ? ($_POST['kids'] == 1 ? 1 : 0) : 0;
    $loggedUser = intval($_POST['loggedUser']);


    $perfis = new perfisModel();
    $quantidadePerfis = $perfis->verificarLimitePerfis($loggedUser);
    $imagem = isset($_POST['imagem']) ? $_POST['imagem'] : '';

    if ($quantidadePerfis < 3) { 
        $perfis->setNome($nome);
        $perfis->setImagem($imagem);
        $perfis->setInfantil($kids);
        $perfis->setUsuarios_id($loggedUser);

        if ($id == 0) {
            $total = $perfis->insert();
        } else {
            $perfis->setId($id);
            $total = $perfis->update();
        }

        if ($total == 1) {
            header('location:../home.php?cod=success');
        } else {
            header('location:../listarPerfisPage.php?cod=error');
        }
    } else {
        header('location:../listarPerfisPage.php?cod=limit');
    }
} elseif ($_REQUEST) {
    if (@$_REQUEST['id']) {
        $cod = $_REQUEST['cod'];
        $id = $_REQUEST['id'];
        require_once '../model/perfisModel.php';

        $perfis = new perfisModel();
        if ($cod == 'del') {
            if ($perfis->delete(intval($id)) == 1) {
                header('location:../home.php?cod=success');
            } else {
                header('location:../listarPerfisPage.php?cod=error');
            }
        } elseif ($cod == 'edit') {
            $perfilEdit = $perfis->loadById(intval($id));
        } else {
            header('location:./listarPerfisPage.php?cod=error');
        }
    } else {
     
        $perfisList = loadAll();
    }
} else {

    $perfisList = loadAll();
}

function loadAll() {
    require_once './model/perfisModel.php';
    $perfis = new perfisModel();
    $perfisList = $perfis->loadAll();
    return $perfisList;
}
?>

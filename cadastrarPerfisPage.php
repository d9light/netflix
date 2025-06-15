<!DOCTYPE html>
<html>
    <head>
        <title>Netflix</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.7.0.min.js" type="text/javascript"></script>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.dataTables.min.js" type="text/javascript"></script>

        <style>

            header{
                border: 0.5px solid #000;
                border-color: #cccccc;
                border-color: rgba(0, 0, 0, 0.1);
            }

            body{
                font-family: 'Arial', sans-serif;

            }

            .text{
                color: #3a3a3a;
                font-weight: bold;
                text-decoration: none;
                font-size: 18px;


            }

            .lugar{
                top: 30px;
                left: 94%;
                position: relative;
                font-weight: bold;



            }




            .logo {
                position: relative;
                z-index: 2;
                height: 90px;
            }

            .logo img {
                width: 180px;
                position: absolute;
                top: 20px;
                left: 50px;
                padding: 5px;

            }

            .btn {
                border-radius: 3px;
                margin-bottom: 12px;
                background-color: red;
                padding: 20px 20px;
                font-weight: bold;
                font-size: 20px;

            }

            .pading{
                padding-top: 8px;

            }


            .form-control{
                border-color: black;
                padding: 15px 15px;

            }

            .text_passo{
                font-size: 13px;
                font-weight: bold;
            }

            .text_senha{
                font-weight: bold;
                font-size: 34px;
            }


            .center-row {
                display: flex;
                justify-content: center;
            }

            select {
                height: 50px;
                line-height: 50px;
                font-size: 12pt;
            }



        </style>

    </head>
    <body class="fundo">



        <header>

            <div class="logo">

                <img src="img/logo.png" alt=""/>
                <h4 class="lugar"> <a class="text" href="listarPerfisPage.php">Listar</a></h4>

            </div>
        </header>

        <?php require_once './controller/autenticationController.php'; ?>

        <div class="center-row">
            <div class="col-md-5">
                <div class="login-fundo">
                    <h2>Perfis de usuário</h2>
                    <div class="col-md-8">

                        <form method="post" action="controller/perfisController.php">
                            <div class="mb-3 mt-3">
                                <label for="nome">Name:</label>
                                <input type="text" class="form-control" required="" id="nome" name="nome" value="<?php echo isset($perfilEdit) ? $perfilEdit->getNome() : '' ?>" placeholder="Enter name of user" >
                            </div>






                    </div>


                    <input class="form-check-input" type="checkbox" id="imagem" name="imagem" value="1" <?php echo (isset($perfilEdit) ? (($perfilEdit->getImagem() == 1) ? 'checked' : '') : '') ?>>
                    <label for="imagem_panda">Vermelho</label>

                    <input class="form-check-input" type="checkbox" id="imagem" name="imagem" value="2" <?php echo (isset($perfilEdit) ? (($perfilEdit->getImagem() == 2) ? 'checked' : '') : '') ?>>
                    <label for="imagem_vermelho">Azul</label>

                    <br /><br />


                </div>
                <div class="mb-3 mt-3">
                    <label for="nome">Kid's?</label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="kids" name="kids" value="1" <?php
                        $kidsChecked = (isset($perfilEdit) && $perfilEdit->getInfantil() == 1) ? 'checked' : '';?>>
                        <label class="form-check-label" for="mySwitch">Yes</label>
                        
                    </div>
                    <input class="form-check-input" type="checkbox" id="imagem" name="imagem" value="3" <?php echo (isset($perfilEdit) ? (($perfilEdit->getImagem() == 3) ? 'checked' : '') : '') ?> >
                    <label for="imagem_vermelho">KID</label>
                </div>


                <input type="hidden" name="loggedUser" value="<?php echo (isset($_SESSION['id']) ? $_SESSION['id'] : ''); ?>" >
                <input type="hidden" name="id" value="<?php echo isset($perfilEdit) ? $perfilEdit->getId() : '0' ?>">
                <br>

                <input class="btn btn-primary" type="submit" value="Save">
                </form>

            </div>
        </div>
   

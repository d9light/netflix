<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <title>Netflix</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" />

        <style>

            @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap");

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: "Open Sans", sans-serif;
            }

            html {
                font-size: 62.5%;
            }

            .fundo {
                width: 100vw;
                min-height: 100vh;
                background-color: #141414;
            }

            .logo {
                width: 95vw;
                margin: auto;
                height: 7rem;
                background-color: rgb(20, 20, 20);
                /* background-color: red; */
                display: flex;
                justify-content: flex-start;
                align-items: center;
            }
            .logo a img {
                width: 180px;

                cursor: pointer;
            }

            .assistindo {
                width: 100vw;
                height: 80vh;
                /* background-color: rosybrown; */
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                color: #fff;


            }

            .assistindo h1 {
                font-size: 6.5rem;
                letter-spacing: 0.2rem;
                font-size: 60px;
                font-weight: bold;
                margin-bottom: 5%;
            }

            .memberDiv {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;

            }


            .span{
                color:#141414;

            }


            .nome {
                color: rgb(153, 153, 153);
                font-size: 50px;
                display: flex;
                margin-left: 4.5%;
                text-align: center;
                align-items: center;
                margin-right: 29.5%;
                flex-direction:inherit

            }


            .nome-add{
                color: rgb(153, 153, 153);
                font-size: 50px;

                text-align: center;
                align-items: center;
                text-decoration: none;
                flex-direction:inherit

            }

            .config {
                border: 1px solid grey;
                color: grey;
                text-transform: uppercase;
                padding: 0.8rem 2.6rem;
                letter-spacing: 0.5rem;
                font-size: 2.5rem;
                margin-top: 12rem;
                background-color: transparent;
                cursor: pointer;
                text-decoration: none;
            }

            .tamanho {
                width:10px;
                height:10px;
            }

            .fotos {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 200px;
                margin-top: 30px;

            }

            .foto {

                margin-right: 10px;
            }

            .fa{
                color: rgb(153, 153, 153);
                font-size: 250px;
                text-decoration:none;

            }



        </style>


        <?php
        require_once './controller/autenticationController.php';
        ?>

    </head>
    <body>
        <div class="fundo">
            <div class="logo">
                <a href="index.php"><img src="img/logo.png" alt="logo"></a>
            </div>

            <div class="assistindo">
                <h1>Quem está assistindo ?</h1>
                <form method="get" action="filme.php">
                    <div class="fotos ">



                        <?php
                        require_once './controller/perfisController.php';

                        if (isset($loggedUser)) {
                            foreach ($loggedUser as $data) {

                                if ($loggedUser < 3) {
                                    
                                }
                            }
                        }


                        if (isset($perfisList)) {
                            foreach ($perfisList as $data) {
                                echo '<div class="span">';
                                echo '<span class="">';
                                echo '<button name="id" class="foto" value=" ' . $data["imagem"] . '">';

                                // Exibindo a imagem correspondente ao perfil
                                $imagem = ($data["imagem"] == 1) ? "img/user1.png" : (($data["imagem"] == 2) ? "img/user2.png" : "img/user3.png");
                                echo '<img src="' . $imagem . '" alt="user">'; // Substitua os caminhos pelas imagens correspondentes

                                echo '</button>';
                                echo '<div class="nome">';
                                echo '<div class="nome">';
                                echo '<p>' . $data["nome"] . '</p>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                        }


                        if ($perfisList instanceof mysqli_result) {
                            $totalUsuarios = $perfisList->num_rows;

                            if ($totalUsuarios < 3) {
                                echo '<a href="cadastrarPerfisPage.php" class="fa fa-plus-circle fa-10x">
              <p class="nome-add text-decoration-none">Adicionar Perfil</p>
            </a>';
                            }
                        }
                        ?>
                </form>

            </div>
            <a href="listarPerfisPage.php" class="config"> CONFIGURAÇÕES</a>
        </div>
    </div>







</body>
</html>


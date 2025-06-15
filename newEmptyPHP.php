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

        <style>

            .teste{
                position: fixed;
                color:white;

                z-index: 3;
            }

            .espaco{
                margin-right: 5px;
            }
            .borda{
                border-color: black;
            }
            .escala{
                margin-top: 10px;
                margin-bottom: 30px;
            }
            
            .center-row {
                display: flex;
                justify-content: center;
            }
            
            .pading{
                padding-top: 5px;
            }
        </style>

    </head>
    <?php
echo '
<div class="center-row">      

            <div class="col-md-3">
                <div class="login-fundo">
                 <form action="controller/cadastroController.php" method="POST">
                        <div class="row">
                            <div class="pading">
                                <br>
                            </div>
                            <div>
                                
                                <h4 class="text_senha">Adicione um novo funcionario</h4>
                                <p>Faltam só mais alguns passos!<br>
                                    Nós também detestamos formulários.</p>     
                            </div>          

                            <div class="mb-3 mt-3">


                                <div>
                                    <input type="email" class="form-control" name="email"  placeholder="Email" id="email" required="">
                                </div>

                                <div class="pading">
                                    <input type="password" class="form-control"  name="senha" placeholder="Adicione sua senha" id="senha" required="">
                                </div>

                               
                                <div>
                                    <br>
                                </div>

                                <div class="d-grid pading">
                                    <input type="submit" value="Próximo" class="btn btn-warning">
                                </div>
                            </div>

                    </form>

                    
             

               
                </div>

        </div>';
        ?>

</html>

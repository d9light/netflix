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
        </style>

    </head>
    <body class="fundo">



        <header>

            <div class="logo">

                <img src="img/logo.png" alt=""/>
                <h4 class="lugar"> <a class="text" href="index.php">Entrar</a></h4>

            </div>
        </header>

        <div class="center-row">      

            <div class="col-md-3">
                <div class="login-fundo">
                 <form action="controller/cadastroController.php" method="POST">
                        <div class="row">
                            <div class="pading">
                                <br>
                            </div>
                            <div>
                                <p class="text_passo">PASSO 1 DE 3</p>
                                <h4 class="text_senha">Crie uma senha para iniciar sua assinatura</h4>
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
                                    <input type="submit" value="Próximo" class="btn btn-danger">
                                </div>
                            </div>

                    </form>

                    
             

               
                </div>

        </div>
        <div class="col-md-4"> </div>
        <?php
        require_once './shared/footer.php';
        echo'<style>footer{ background: rgba(0, 0, 0, 0);}</stle>';
        ?>
    </div>



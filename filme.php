<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Netflix</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>


        <style>

            /* CSS VARIABLES */
            :root {
                --primary: #141414;
                --light: #F3F3F3;
                --dark: 	#686868;
            }

            html, body {
                width: 100vw;
                min-height: 100vh;
                margin: 0;
                padding: 0;
                background-color: var(--primary);
                color: var(--light);
                font-family: Arial, Helvetica, sans-serif;
                box-sizing: border-box;
                line-height: 1.4;
            }

            img {
                max-width: 100%;
            }

            h1 {
                padding-top: 60px;
            }

            .wrapper {
                margin: 0;
                padding: 0;
            }


            /* MAIN CONTIANER */
            .main-container {
                padding: 50px;
            }

            .box {
                display: grid;
                grid-gap: 20px;
                grid-template-columns: repeat(6, minmax(100px, 1fr));
            }

            .box a {
                transition: transform .3s;
            }

            .box a:hover {
                transition: transform .3s;
                -ms-transform: scale(1.4);
                -webkit-transform: scale(1.4);
                transform: scale(1.4);
            }

            .box img {
                border-radius: 2px;
            }

            /* LINKS */
            .link {
                padding: 50px;
            }

            .sub-links ul {
                list-style: none;
                padding: 0;
                display: grid;
                grid-gap: 20px;
                grid-template-columns: repeat(4, 1fr);
            }

            .sub-links a {
                color: var(--dark);
                text-decoration: none;
            }

            .sub-links a:hover {
                color: var(--dark);
                text-decoration: underline;
            }

            .logos a{
                padding: 10px;
            }

            .logo {
                color: var(--dark);
            }





        </style>


    </head>



    <body>
        <div class="wrapper">

            <?php
require_once './shared/header.php';


@$cod = $_REQUEST['id'];

if ($cod == '1') {
    
    require_once './usus/usu1.php';
}
if ($cod == '2') {
    
    require_once './usus/usu2.php';
}
if ($cod == '3') {
    
    require_once './usus/usu3.php';
}



?>

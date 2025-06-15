<style>

    header {
        padding: 20px 20px 0 20px;
        position: fixed;
        top: 0;
        display: grid;
        grid-gap:5px;
        grid-template-columns: 1fr 4fr 1fr;
        grid-template-areas:
            "nt mn mn sb . . . ";
        background-color: var(--primary);
        width: 100%;
        margin-bottom: 0px;
        font-weight: bold;
    }

    .netflixLogo {
        grid-area: nt;
        object-fit: cover;
        width: 100px;
        max-height: 100%;

        padding-left: 30px;
        padding-top: 0px;
    }

    .netflixLogo img {
        height: 35px;
    }

    #logo {
        color: #E50914;
        margin: 0;
        padding: 0;
    }


    .main-nav {
        grid-area: mn;
        padding: 0 30px 0 20px;
    }

    .main-nav a {
        color: var(--light);
        text-decoration: none;
        margin: 5px;
    }

    .main-nav a:hover {
        color: var(--dark);
    }

    .sub-nav {
        grid-area: sb;
        padding: 0 40px 0 40px;
    }

    .sub-nav a {
        color: var(--light);
        text-decoration: none;
        margin: 5px;
    }

    .sub-nav a:hover {
        color: var(--dark);
    }

    .user{
        width: 25px;
    }


    .dropdown {
        position: relative;
        display: inline-block;
    }


    .dropbtn {
        font-weight: bold;
       color: white;
        background-color: var(--primary);
        padding: 10px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }


    .dropdown-content {
        display: none;
        position: absolute;
        color: white;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }


    .dropdown-content a {
        color: white;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }


  
 


    .show {
        display: block;
    }


</style>




<header>
    <div class="netflixLogo">
        <a id="logo" href="home.php"><img src="img/logo.png" alt="Logo"></a>
    </div>      
    <nav class="main-nav">                
        <a href="#inicio">Início</a>
        <a href="#series">Séries</a>
        <a href="#filmes">Filmes</a>
        <a href="#bombado">Bombado</a>
        <a href="#lista">Minha Lista</a>
        <a href="#idiomas">Navegador por Idiomas</a>

    </nav>
    <nav class="sub-nav">
        <a href="#"><i class="fas fa-search sub-nav-logo"></i></a>
        <a href="#"><i class="fas fa-bell sub-nav-logo"></i></a>
        <button onclick="toggleDropdown()" class="dropbtn">Conta</button> 

         <div id="myDropdown" class="dropdown-content">
                <a href="controller/LogoutController.php">Logout</a>

            </div>
    
           
           


        <script>
            function toggleDropdown() {
                var dropdown = document.getElementById("myDropdown");
                dropdown.classList.toggle("show");
            }


            window.onclick = function (event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }</script>



        <?php
        @$cod = $_REQUEST['id'];

        if ($cod == '1') {

            echo '<a  class="dropbtn" id="logo" href="#"><img class="user" src="img/user1.png" alt="Logo Image"></a>';
        }
        if ($cod == '2') {

            echo '<a  id="logo" href="#"><img class="user" src="img/user2.png" alt="Logo Image"></a>';
        }
        if ($cod == '3') {

            echo '<a  id="logo" href="#"><img class="user" src="img/user3.png" alt="Logo Image"></a>';
        }
        ?>

    </nav>      
</header>

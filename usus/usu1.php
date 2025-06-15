<section class="main-container" >
                <div class="location" id="home">

           <?php

$movies = [
    "img/filmes/usu1/1.jpg",
    "img/filmes/usu1/2.jpg",
    "img/filmes/usu1/3.jpg",
    "img/filmes/usu1/4.jpg",
    "img/filmes/usu1/5.jpg",
    "img/filmes/usu1/6.jpg"
];

$originals = [
    "img/filmes/usu1/7.jpg",
    "img/filmes/usu1/8.jpg",
    "img/filmes/usu1/9.jpg",
    "img/filmes/usu1/10.jpg",
    "img/filmes/usu1/11.jpg",
    "img/filmes/usu1/12.jpg"
];


function shuffleArray(&$array) {
    $currentIndex = count($array);
    while ($currentIndex !== 0) {
        $randomIndex = rand(0, $currentIndex - 1);
        $currentIndex--;


        $temp = $array[$currentIndex];
        $array[$currentIndex] = $array[$randomIndex];
        $array[$randomIndex] = $temp;
    }
}


shuffleArray($movies);
shuffleArray($originals);
?>


<h1 id="movies">Filmes</h1>
<div class="box">
    <?php foreach ($movies as $movie) : ?>
        <a href=""><img src="<?php echo $movie; ?>" alt=""></a>
    <?php endforeach; ?>
</div>

<h1 id="originals">Recomendados</h1>
<div class="box">
    <?php foreach ($originals as $original) : ?>
        <a href=""><img src="<?php echo $original; ?>" alt=""></a>
    <?php endforeach; ?>
</div>
</body>


                    </body>
                    </html>
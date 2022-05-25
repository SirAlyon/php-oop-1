<?php

include __DIR__ .'/Models/Movie.php';

$movies = [
    new Movie("La Compagnia dell'Anello", 2002, 'Peter Jackson', 'https://mr.comingsoon.it/imgdb/locandine/235x336/1029.jpg'),
    new Movie("Le due Torri", 2004, 'Peter Jackson', 'https://cdn1.thespacecinema.it/-/media/tsc/2021/07/il-signore-degli-anelli-le-due-torri/locandina.jpg'),
    new Movie("Il Ritorno del Re", 2005, 'Peter Jackson', 'https://pad.mymovies.it/filmclub/2004/01/014/locandina.jpg'),
    new Movie("Un viaggio Inaspettato", 2012, 'Peter Jackson', 'https://www.lascimmiapensa.com/wp-content/uploads/2020/03/oFOoSdLUgUV96XwP4loR29uPZjM-683x1024.jpg')

];

$lotr_1 = $movies[0];
$loHobbit_1 = $movies[3];

$lotr_1->setVote(5);
$loHobbit_1->setVote(4.5);


//var_dump($lotr_1);

//var_dump($movies)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach($movies as $movie) : ?>
                <div class="col-3">
                    <div class="movie">
                        <div class="movie-img">
                            <img src="<?= $movie->image ?>" alt="">
                        </div>
                        <div class="movie-body">
                            <h4><?= $movie->title ?></h4>
                            <div>Directed by: <?= $movie->director ?></div>
                            <div>Year: <?= $movie->year ?></div>
                            <?php if ($movie->vote > 0) :?>
                                <div>Vote: <?= $movie->vote ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    
</body>
</html>


<style>
    .movie{
        margin-top: 200px;
        padding: 1rem;
        border: 1px solid lightgray;
        min-height: 450px;
    }
    .movie-img{
        height: 300px;
    }
    .movie-img img{
        width: 100%;
        max-height: 100%;
        object-fit: contain;
    }
    .movie-body{
        font-size: 0.8rem;
    }

    h4{
        font-size: 1.4rem!important;
    }

    .d_none{
        display: none;
    }
</style>
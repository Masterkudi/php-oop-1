<?php
require_once __DIR__ . '/classes/Movie.php';

$movie1 = new Movie();

    $movie1->title = 'The Lord of the Rings: The Fellowship of the Ring';
    $movie1->year = '2001';
    $movie1->imdbID = 'tt0120737';
    $movie1->country = 'NZ/USA';
    $movie1->poster = 'https://m.media-amazon.com/images/M/MV5BN2EyZjM3NzUtNWUzMi00MTgxLWI0NTctMzY4M2VlOTdjZWRiXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_SX300.jpg';

    echo $movie1->getFullMovie();


$movie2 = new Movie();

    $movie2->title = 'The Lord of the Rings: The Two Towers';
    $movie2->year = '2002';
    $movie2->imdbID = 'tt0167261';
    $movie2->country = 'NZ/USA';
    $movie2->poster = 'https://m.media-amazon.com/images/M/MV5BNGE5MzIyNTAtNWFlMC00NDA2LWJiMjItMjc4Yjg1OWM5NzhhXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SX300.jpg';

    echo $movie2->getFullMovie();

$movie3 = new Movie();

    $movie3->title = 'The Lord of the Rings: The Return of the King';
    $movie3->year = '2003';
    $movie3->imdbID = 'tt0167260';
    $movie3->country = 'NZ/USA';
    $movie3->poster = 'https://m.media-amazon.com/images/M/MV5BNzA5ZDNlZWMtM2NhNS00NDJjLTk4NDItYTRmY2EwMWZlMTY3XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SX300.jpg';

    echo $movie3->getFullMovie();


$movie4 = new Movie();

    $movie4->title = 'Lord of War';
    $movie4->year = '2005';
    $movie4->imdbID = 'tt0399295';
    $movie4->country = 'movie';
    $movie4->poster = 'https://m.media-amazon.com/images/M/MV5BMTYzZWE3MDAtZjZkMi00MzhlLTlhZDUtNmI2Zjg3OWVlZWI0XkEyXkFqcGdeQXVyNDk3NzU2MTQ@._V1_SX300.jpg';

    echo $movie4->getFullMovie();

    var_dump($movie1, $movie2, $movie3, $movie4);

    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FontAwesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- CSS link -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Vue.js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- Title -->

    <title>PHP-OOP-1</title>

</head>

<body>

</body>

</html>
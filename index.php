<?php

require_once __DIR__ . '/models/Movie.php';

$movies = [
    new Movie ('Iron Man 3' , 'Action' , '120 min'),
    new Movie ('Batman' , 'Action' , '116 min'),
    new Movie ('Thor' , 'Fantasy' , '116 min'),
    new Movie ('Ritorno al futuro' , 'Fantasy' , '116 min')
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>Movie OOP</title>
</head>
<body class=" container">
    <h1 class="text-center my-5">OOP MOVIES</h1>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Genere</th>
            <th scope="col">Durata</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($movies as $movie):?>
        <tr>
            <th scope="row"><?php echo $movie->title ?></th>
            <td><?php echo $movie->genre ?></td>
            <td></td>
           
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</body>
</html>
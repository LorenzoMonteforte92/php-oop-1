<?php

require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Director.php';


//istanza Director per Paolo Virzì
$virzi = new Director ('Paolo', 'Virzì');
$virzi->dateOfBirth = '04-03-1964';
$virzi->nationality = 'italiano';

// //istanza Director per Paolo Sorrentino
$sorrentino = new Director ('Paolo', 'Sorrentino');
$sorrentino->dateOfBirth = '31-05-1970';
$sorrentino->nationality = 'italiano';

//instanza Movie  per Ovo Sodo
$ovoSodo = new Movie('Ovosodo', $virzi, 1997 );
// $ovoSodo->title = 'Ovosodo';
// $ovoSodo->director = 'Paolo Virzì';
$ovoSodo->genre = ['commedia', 'drammatico'];
// $ovoSodo->year = 1997;
$ovoSodo->vote = 4;
// echo $ovoSodo->getMovieFullDetails(), '<br>';


//instanza Movie per La Grande Bellezza
$laGrandeBellezza = new Movie('La Grande Bellezza', $sorrentino, 2013);
// $laGrandeBellezza->title = 'La Grande Bellezza';
// $laGrandeBellezza->director = 'Paolo Sorrentino';
$laGrandeBellezza->genre = ['drammatico', 'grottesco', 'commedia'];
// $laGrandeBellezza->year = 2013;
$laGrandeBellezza->vote = 4;
// echo $laGrandeBellezza->getMovieFullDetails();

// var_dump($ovoSodo);
// var_dump($laGrandeBellezza);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <div>
        <?php echo $ovoSodo->getMovieFullDetails() ?>
    </div>
    <div>
        <?php echo $laGrandeBellezza->getMovieFullDetails() ?>
    </div>
</body>
</html>
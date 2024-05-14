<?php

class Movie{

    //attributi della classe
    public $title;
    public $director;
    public $genre;
    public $year;
    public $vote;

    //costruttore (attributi obbligatori)
    function __construct($_title, Director $_director, $_year) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
    }

    function getMovieFullDetails(){
        
        $fullDetails = $this->title . ' ' . $this->director . ' ' . $this->year;

        return $fullDetails; 

    }
}

class Director{

    //attributi della classe
    public $name;
    public $surname;
    public $dateOfBirth;
    public $nationality;

    //costruttore (attributi obbligatori)
    function __construct($name, $surname) {
        $this->name = $name;
        $this->surname = $surname;
    }

}


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

var_dump($ovoSodo);
var_dump($laGrandeBellezza);
?>
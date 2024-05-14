<?php

class Movie{

    //attributi della classe
    public $title;
    public $director;
    public $genre;
    public $year;
    public $vote;

    //costruttore (attributi obbligatori)
    function __construct($_title, $_director, $_year) {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
    }

    function getMovieFullDetails(){
        return $fullDetails = $this->title . ' ' . $this->director . ' ' . $this->year;
    }
}


//instanza per Ovo Sodo
$ovoSodo = new Movie('Ovosodo', 'Paolo Virzì', 1997 );
// $ovoSodo->title = 'Ovosodo';
// $ovoSodo->director = 'Paolo Virzì';
$ovoSodo->genre = 'commedia';
// $ovoSodo->year = 1997;
$ovoSodo->vote = 4;
echo $ovoSodo->getMovieFullDetails(), '<br>';



//instanza per La Grande Bellezza
$laGrandeBellezza = new Movie('La Grande Bellezza', 'Paolo Sorrentino', 2013);
// $laGrandeBellezza->title = 'La Grande Bellezza';
// $laGrandeBellezza->director = 'Paolo Sorrentino';
$laGrandeBellezza->genre = 'drammatico';
// $laGrandeBellezza->year = 2013;
$laGrandeBellezza->vote = 4;
echo $laGrandeBellezza->getMovieFullDetails();

var_dump($ovoSodo);
var_dump($laGrandeBellezza);

?>
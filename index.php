<?php

class Movie{

    //attributi della classe
    public $title;
    public $director;
    public $genre;
    public $year;
    public $vote;

    //costruttore (attributi obbligatori)

}


//instanza per Ovo Sodo
$ovoSodo = new Movie();
$ovoSodo->title = 'Ovosodo';
$ovoSodo->director = 'Paolo Virzì';
$ovoSodo->genre = 'commedia';
$ovoSodo->year = 1997;
$ovoSodo->vote = 4;

//instanza per La Grande Bellezza
$laGrandeBellezza = new Movie();
$laGrandeBellezza->title = 'La Grande Bellezza';
$laGrandeBellezza->director = 'Paolo Sorrentino';
$laGrandeBellezza->genre = 'drammatico';
$laGrandeBellezza->year = 2013;
$laGrandeBellezza->vote = 4;

var_dump($ovoSodo);
var_dump($laGrandeBellezza);

?>
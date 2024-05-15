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
        
        $fullDetails = $this->title . ' ' . $this->director->name . ' ' . $this->director->surname . ' ' .$this->year;
    
        return $fullDetails; 
    
    }
   }
?>


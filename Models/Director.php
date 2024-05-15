<?php

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

?>
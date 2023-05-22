<?php

class Movie {
    public $title;
    public $duration;
    public $genre;


    function __construct($title, $genre, $duration){
        $this->title = $title;
        $this->genre = $genre;
        $this->duration = $duration;
    }
}
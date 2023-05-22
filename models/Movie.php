<?php

class Movie {
    public $title;
    public $duration;
    public $genre;


    function __construct($_title, $_genre, $_duration){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->duration = $this->getDuration($_duration);
    }
    public function getDuration($_duration){
        return number_format($_duration/60,1) . ' ore';
      }
}
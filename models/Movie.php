<?php

class Movie {
    public $title;
    public $duration;


    function __construct($title, $duration){
        $this->title = $title;
        $this->duration = $duration;
    }
}
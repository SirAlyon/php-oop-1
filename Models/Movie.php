<?php

class Movie {
    public $title;
    public $year;
    public $director;
    public $image;
    public $vote = 0;

    function __construct(String $title, Int $year, String $director, String $image)
    {
        $this->title = $title;
        $this->year = $year;
        $this->director = $director;
        $this->image = $image;
    }

    public function setVote($int) {
        $this->vote = $int;
    }
}




?>
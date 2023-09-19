<?php


class Movie {
    public $title;
    public $year;
    public $imdbID;
    public $country;
    public $poster;

    //function __construct($title, $year, $imdbID, $country, $poster) {}

    public function getFullMovie() {
        return $this->title . '' . $this->year . '' . $this->imdbID . '' . $this->country . '' . $this->poster;
    }
};


?>
<?php


class Movie {
    public $title;
    public $year;
    public $imdbID;
    public $country;
    public $poster;

    /* function __construct($title, $year, $imdbID, $country, $poster) {
        $this->title = $_title;
        $this->year = $_year;
        $this->imdbID = $_imdbID;
        $this->country = $_country;
        $this->poster = $_poster;
    } */

    public function getFullMovie() {
        return $this->title . '' . $this->year . '' . $this->imdbID . '' . $this->country . '' . $this->poster;
    }
};

?>
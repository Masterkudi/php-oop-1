<?php


class Movie {
    public $title;
    public $year;
    public $imdbID;
    public $country;
    public $poster;

    public function getFullMovie() {
        return $this->title . '' . $this->year . '' . $this->imdbID . '' . $this->country . '' . $this->poster;
    }
};


?>
<?php

class Genre{

    private string $_genre;
    private Film $_film;

    public function __construct(Film $film, $genre){
        $this->_film = $film;
        $this->_genre = $genre;
    }

    public function get_genre()
    {
        return $this->_genre;
    }
    
    public function get_film()
    {
        return $this->_film;
    }

}

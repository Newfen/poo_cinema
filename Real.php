<?php

class Real extends Personne{

    private array $_filmographie;

    public function __construct($nom, $prenom, $sexe, $naissance){
        parent::__construct($nom, $prenom, $sexe, $naissance);
        $this->_filmographie = [];
    }
    
        public function get_film()
        {
            return $this->_film;
        }

        public function addFilm(Film $newFilm){
            $this->_filmographie[] = $newFilm;
        }

        public function afficherBibliographie() {
            foreach ($this->_bibliographie as $livre) 
            echo $livre;
        }

        public function __toString()
        {
            return $this->_nom." ".$this->_prenom." ".$this->_sexe." ".$this->_naissance;
        }

}
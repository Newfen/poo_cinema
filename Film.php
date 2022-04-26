<?php

class film{

    private string $_titre;
    private string $_sortie;
    private Int    $_duree;
    private Real   $_realisateur;

    public function __construct($titre, $sortie, $duree, Real $realisateur)
    {
        $this->_titre       = $titre;
        $this->_sortie      = $sortie;
        $this->_duree       = $duree;
        $this->_realisateur = $realisateur;
        $this->_realisateur->addFilm($this);
    }

    
    public function get_titre()
    {
        return $this->_titre;
    }

    public function get_sortie()
    {
        return $this->_sortie;
    }

    public function get_duree()
    {
        return $this->_duree;
    }

    public function get_realisateur()
    {
        return $this->_realisateur;
    }

}
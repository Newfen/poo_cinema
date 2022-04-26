<?php

class Acteur extends Personne{

    protected $_film;
    // protected string $_role;


public function __construct($nom, $prenom, $sexe, $naissance, $film){
    parent::__construct($nom, $prenom, $sexe, $naissance);
    $this->_film = $film;
    // $this->_role = $role;
}

    public function get_film()
    {
        return $this->_film;
    }

    // public function get_role()
    // {
    //     return $this->_role;
    // }
}
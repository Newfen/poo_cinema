<?php

class Personne{

    protected string $_nom;
    protected string $_prenom;
    protected string $_sexe;
    protected string $_naissance;

    public function __construct($nom, $prenom, $sexe, $naissance){
    $this->_nom = $nom;
    $this->_prenom = $prenom;
    $this->_sexe = $sexe;
    $this->_naissance = $naissance;
    }

    public function get_nom()
    {
        return $this->_nom;
    }

    public function get_prenom()
    {
        return $this->_prenom;
    }

    public function get_sexe()
    {
        return $this->_sexe;
    }

    public function get_naissance()
    {
        return $this->_naissance;
    }

    public function __toString()
        {
            return $this->_nom." ".$this->_prenom." ".$this->_sexe." ".$this->_naissance;
        }

}
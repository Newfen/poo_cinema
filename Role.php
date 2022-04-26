<?php

class Role{

    protected Acteur $_acteur;

    public function __construct(Acteur $acteur)
    {
        $this->_acteur = $acteur;
    }

    public function get_acteur()
    {
        return $this->_acteur;
    }
}
<?php

require "Personne.php";
require "Film.php";
require "Genre.php";
require "Acteur.php";
require "Real.php";

$r1 = new Real("Burton", "Tim", "Homme", "1955-08-02");

$f1 = new Film("Avatar", "2012", 2, $r1);



echo $r1;
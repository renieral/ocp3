<?php


// monsite.com/

require "model/Model.php";
require "controller/Article.php";

/**
 *
 */
class Front
{

function __construct(argument)
{
//regarde barre d'adresse

// en fonction on va choisir ce que l'on a à faire

// dans l'exemple on est sur l'accueil -> home()

}


private function home(){ //affiche la liste des 10 derniers articles

// on va récupérer la liste
$data = new Model(xxxx);
$tmp;
$this->html = "";
for ($i = 0; $i< count($data); $i++){
$tmp = new Article($data[$i], "resume");
$this->html .= $tmp->html;
}
}
}

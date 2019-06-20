<?php

class Article
{
    public $id;
    public $title;
    public $date;
    public $content;
    public $html; 
    
    public function __construct ($args){
        if (isset($args["list"])) return $this->showListArticle($args["list"]);
    }

    public function readArticle()
    {
        
    }

    public function showArticle($slug)
    { 
        $article
    }

    public function showListArticle($listSpec)
    { 

    }

    public function addNewArticle()
    {

     }

    public function deleteArticle()
    { 

    }
    public function modifyArticle()
    {

     }

}

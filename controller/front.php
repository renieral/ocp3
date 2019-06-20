<?php

class Front {
	public function __construct ($uri){
		$this->uri=$uri;
		switch ($uri[0]){
			case "contact" : 
				break;
			case "biographie" :
				break;
			case "article":
				break;
			default : 
				$this->_listArticle();
				break;
	}

	private _listArticle(){
		$article=new Article([
			"list"=>[
				"quantite"=>5,
				"debut"=>0
			]
		]);
	}
}
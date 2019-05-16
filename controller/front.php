<?php


/**
 *
 */
class Front
{

	function __construct(argument)
	{
		# code...
	}

	private function accueil(){

	}
	private function bio(){

	}
	private function contact(){

	}
	private function article(){

		$chapitre = new Article("un-super-ete");
		$commentaire = new Comment($chapitre->id);

		// echo $chapitre->html;
		// echo $commentaire->html;
	}
	private function sommaire(){

	}

}

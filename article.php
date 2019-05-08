
<?php
/*
Ici nous definisson l'objet des articles
 */
class Article
{
	public $html;
	public $titre;
	public $id;
	function __construct($slug)
	{
		$model = new Model($requeteSQL);
		if ($model->succeed){
			$this->titre = $model->data["titre"];
			$this->id = $model->data["id"];
		}
		$vue = new View([], "article");
		$this->html = $vue->html;
	}
}










 ?>

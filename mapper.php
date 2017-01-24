<?php 

require_once "Generateur.php";

public function __construct(){
	$this->mapper = new Generateur ();

}

public function generer() {
		$f = fopen("Lorem.csv", "r");
		/*$f = explode(";",$f);
		$mot = "";
		$LoremIpsum = "";
		while ($ligne=fgetcsv($f, 0, ";")){
			$LoremIpsum = new Generateur (10, 10, 10, 10 );
		}
		// on peut différencier selon le nombre de paragraphes, mots, caractères, listes.
		return $LoremIpsum;*/
	}



<?php 

require_once "classGenerateur.php";

public function generer() {
		$f = fopen("Lorem.csv", "r");
		$LoremIpsum = "";
		while ($ligne=fgetcsv($f, 0, ",")){
			$LoremIpsum = new Generateur (10, 10, 10, 10 );
		}
		// on peut différencier selon le nombre de paragraphes, mots, caractères, listes.
		return $LoremIpsum;
	}





?>
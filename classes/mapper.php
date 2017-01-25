<?php 

class LoremMapper {

	private $Lorem;

	public function __construct () {
		//je veux que mon Lorem soit egale à un tableau qui contient le fichier csv et chaque mot est une string dans une case
		$this->Lorem = [];
		$f = fopen("Lorem.csv","r");
		while($ligne = fgetcsv($f)){
			$this->Lorem[] = explode(" ", $ligne[0]);
		}
	}


	public function genererParagraphe($nombreMot) {

	$phraseGen = "";
	$paragrapheGen = "";
	$longueurLorem = count($this->Lorem);

	// on définit le nombre de paragraphe
	
		for ($i=0; $i < $nombreMot ; $i++) { 
	   	$phraseAleatoire = $this->Lorem[rand(0, $longueurLorem -1)];
	    $motAleatoire = $phraseAleatoire[rand(0, count($phraseAleatoire)-1)];
		$phraseGen .= $motAleatoire ." ";
		
		}
	echo $phraseGen;
	}
	
	//fin de la class
}




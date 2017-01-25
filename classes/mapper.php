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

	

	public function genererLorem($nbParagraphe, $nbMot) {
		$paragrapheGen = "";
		$longueurLorem = count($this->Lorem);

		
		for ($j=0; $j < $nbParagraphe; $j++) { 
		$phraseGen = "";

		   	for ($i=0; $i < $nbMot ; $i++) { 
			   	$phraseAleatoire = $this->Lorem[rand(0, $longueurLorem -1)];
			    $motAleatoire = $phraseAleatoire[rand(0, count($phraseAleatoire)-1)];
				$phraseGen .= $motAleatoire ." ";
			}//fin boucle du nombre de mot
		$paragrapheGen .= ucfirst(rtrim($phraseGen)).".<br><br>";
		}//fin boucle du nombre de paragraphe
	echo $paragrapheGen;
	}


	
	//fin de la class
}




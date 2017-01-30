<?php 

class LoremMapper {

	private $Lorem;
	private $fichier;
	private $newTheme;
	private $nom;
	private $auteur;

	public function __construct ($theme = "Lorem") {
		$this->Lorem = [];
		//si on ne peut pas ouvrir "$theme.csv" alors on crée un fichier
		
		$f = fopen(__DIR__ . "/../" . $theme.".csv","r");
		while($ligne = fgetcsv($f)){
			$this->Lorem[] = explode(" ", $ligne[0]);
		}
		
		$this->nom = $this->fichier[0];
		$this->auteur = $this->fichier[1];
		$this->newtheme = $this->fichier[2];
	}



	// on veut créer un theme avec des mots inventés
	// le theme doit être stocké et disponible /home/faridl/ACS/Lorem ipsum generator/$theme
	// on doit chercher le nom du theme et de l'auteur dans un fichier csv
	// 

	public function genererLorem($nbParagraphe = 2, $nbMot = 150) {
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
	} // fin genererLorem

	public function genererTheme ($nom, $auteur, $contenuTheme) {
		if(!file_exists($this->fichier = __DIR__.'/../'.$nom.'.csv')){ 
			touch($this->fichier);
			var_dump($this->fichier);
			$f = fopen ($this->fichier,"w");
			fputcsv($f, $contenuTheme[0]);
			fclose($f);
		}
		   
	} // fin genererTheme
	//fin de la class
}
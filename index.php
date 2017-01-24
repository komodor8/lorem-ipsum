<!DOCTYPE html>
<html>
<head>

	<title>Generateur de Lorem Ipsum</title>
</head>
<body>
<p> Comment generer un lorem ipsum ? </p>

<input type="submit" name="generateur" value="generateur de Lorem" />

<?php 

$lorem = [];
	$f = fopen("Lorem.csv","r");

//ligne 1= Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla diam urna, semper eget elit sit amet, pulvinar venenatis lorem. Suspendisse purus 
	while($ligne = fgetcsv($f)){
		$lorem[] = explode(" ", $ligne[0]);
	}
	echo "<br>";
	echo "<br>";

            $phraseGen = "";

           for ($i=0; $i < rand(1,3) ; $i++) { 
	           	$phraseAleatoire = $lorem[rand(0, count($lorem)-1)];
	            $motAleatoire = $phraseAleatoire[rand(0, count($phraseAleatoire)-1)];
           		$phraseGen .= " ". $motAleatoire; 
           }
           echo $phraseGen;
            



?>
</body>
</html>
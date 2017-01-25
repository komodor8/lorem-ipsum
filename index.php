<!DOCTYPE html>
<html>
<head>

	<title>Generateur de Lorem Ipsum</title>
</head>
<body>
<p> Lorem ipsum </p>

<form>
<input type = "text" name="nbParagraphe" placeholder="combien de paragraphe ?" />
<input type = "text" name="nbMot" placeholder="combien de mot ?"/>
<input type = "text" name="theme" placeholder="votre thème"/>
<input type="submit" name="envoyer">
</form>


<?php 

require_once "classes/controller.php";


$c = new LoremController ();
if(isset($_GET["nbParagraphe"]) && isset($_GET["nbMot"])) {
	echo $c->genererLoremAction($_GET["nbParagraphe"], $_GET["nbMot"]);
} 
?>
</body>
</html>
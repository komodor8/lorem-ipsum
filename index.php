<!DOCTYPE html>
<html>
<head>

	<title>Generateur de Lorem Ipsum</title>
</head>
<body>
<h1> Lorem ipsum </h1>

<form>
<label for="nbParagraphe">Combien de paragraphe souhaitez-vous ?</label> :<br><input type = "number" min="1" max="10" name="nbParagraphe" /> <br><br>
<label for="nbMot">Et le nombre de mots dans votre paragraphe ?</label> :<br><input type = "number" min="1" max="150" name="nbMot" />
 <p>
   <label for="pays">Choisissez votre thème ?</label><br />
   <select name="theme" id="theme">
		<option value="theme" disabled> thème </option>
		<option value="Lorem">Lorem</option>
		<option value="Zombie">Zombie</option>
		<option value="Foot">Foot</option>
   </select>
</p>
<input type="submit" name="envoyer">
</form>


<?php 

require_once "classes/controller.php";

$c = new LoremController ($_GET["theme"]);
if(isset($_GET["nbParagraphe"]) && isset($_GET["nbMot"])) {
	echo $c->genererLoremAction($_GET["nbParagraphe"], $_GET["nbMot"]);
}


?>
</body>
</html>
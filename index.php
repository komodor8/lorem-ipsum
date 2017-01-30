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
<h2>Créez votre propre thème.</h2>
<input type="text" name="nom" placeholder="nom du theme"/><br><br>
<input type="text" name="auteur" placeholder="auteur du theme"/><br><br>
<textarea type="text" name="newText" row="40" cols="50"></textarea>

<br><br>
<input type="submit" name="envoyer"/>
<br><br>
</form>


<?php 

require_once "classes/controller.php";

if(isset($_GET["nbParagraphe"]) && isset($_GET["nbMot"]) && isset($_GET["theme"])){
	$c = new LoremController ($_GET["theme"]);
	echo $c->genererLoremAction($_GET["nbParagraphe"], $_GET["nbMot"]);
}

if (isset($_GET["nom"]) && isset($_GET["auteur"]) && isset($_GET["newText"])){
	$c = new LoremController($_GET["nom"]);
	$c->genererThemeAction($_GET["nom"], $_GET["auteur"], $_GET["newText"]);
	
}?>
</body>
</html>
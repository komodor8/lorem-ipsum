<!DOCTYPE html>
<html>
<head>

	<title>Generateur de Lorem Ipsum</title>
</head>
<body>
<p> Comment generer un lorem ipsum ? </p>

<form>
<input type = "submit" name="nbMot" value="1"/>
<input type = "submit" name="nbMot" value="5"/>
<input type = "submit" name="nbMot" value="10"/>
</form>


<?php 

require_once "classes/controller.php";

$c = new LoremController ();
echo $c->genererParagrapheAction ($_GET["nbMot"]);
	

?>
</body>
</html>
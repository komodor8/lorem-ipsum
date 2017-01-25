<?php 

require_once "mapper.php";


class LoremController {
	private $mapper;

	function __construct() {
		$this->mapper = new LoremMapper();
	}

	public function genererParagrapheAction () {
		return $this->mapper->genererParagraphe($_GET["nbMot"]);
	} 



}




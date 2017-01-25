<?php 

require_once "mapper.php";


class LoremController {
	private $mapper;

	function __construct() {
		$this->mapper = new LoremMapper();
	}

	public function genererLoremAction ($nbParagraphe, $nbMot) {
		return $this->mapper->genererLorem($nbParagraphe, $nbMot);
	} 




}




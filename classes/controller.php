<?php 

require_once "mapper.php";


class LoremController {
	private $mapper;

	function __construct($theme) {
		$this->mapper = new LoremMapper($theme);
	}

	public function genererLoremAction ($nbParagraphe, $nbMot) {
		return $this->mapper->genererLorem($nbParagraphe, $nbMot);
	} 




}




<?php
class Formula_Expression_Text extends Formula_Expression_Abstract {
	public function __construct($expression) {
		$this->setText($expression);
	}
	public function drow($size) {
		$this->image = affiche_math($this->texte, $size);
		$this->base_verticale = imagesy($this->image) / 2;
	}

}
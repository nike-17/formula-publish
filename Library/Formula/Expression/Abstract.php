<?php

abstract class Formula_Expression_Abstract implements Formula_Expression_Interface {

	protected $_text;
	protected $_image;
	protected $_base_verticale;

	public function getText() {
		return $this->_text;
	}

	public function setText($text) {
		$this->_text = $text;
	}

	public function getImage() {
		return $this->_image;
	}

	public function setImage($image) {
		$this->_image = $image;
	}

	public function getBase_verticale() {
		return $this->_base_verticale;
	}

	public function setBase_verticale($base_verticale) {
		$this->_base_verticale = $base_verticale;
	}

}
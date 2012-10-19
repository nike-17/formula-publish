<?php

abstract class Formula_Draw_Abstract {

	protected $_text;
	protected $_size;

	/**
	 *
	 * @var Formula
	 */
	protected $_formula;

	public function __construct(Formula $formula, $text, $size) {
		$this->setText($text);
		$this->setSize($size);
		$this->setFormula($formula);
	}

	public function getText() {
		return $this->_text;
	}

	public function setText($text) {
		$symbols = $this->getFormula()->getSymbols();
		if (isset($symbols[$text])) {
			$texte = $symbols[$texte];
		}
		$this->_text = stripslashes($text);
	}

	public function getSize() {
		return $this->_size;
	}

	public function setSize($size) {
		$this->_size = $size;
	}

	/**
	 * 
	 * @return Formula
	 */
	public function getFormula() {
		return $this->_formula;
	}

	public function setFormula($formula) {
		$this->_formula = $formula;
	}

}
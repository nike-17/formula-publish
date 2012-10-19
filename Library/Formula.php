<?php

// Register autoloader
require_once dirname(__FILE__) . '/Formula/Autoloader.php';
Formula_Autoloader::register();

class Formula {

	protected $_dirfonts;
	protected $_symbols;
	protected $_fontmath;

	public function __construct($dirfonts, $symbols, $fontmat) {
		
	}
	
	public function getDirfonts() {
		return $this->_dirfonts;
	}

	public function setDirfonts($dirfonts) {
		$this->_dirfonts = $dirfonts;
	}

	public function getSymbols() {
		return $this->_symbols;
	}

	public function setSymbols($symbols) {
		$this->_symbols = $symbols;
	}

	public function getFontmath() {
		return $this->_fontmath;
	}

	public function setFontmath($fontmath) {
		$this->_fontmath = $fontmath;
	}



}
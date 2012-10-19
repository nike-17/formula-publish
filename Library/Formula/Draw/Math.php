<?php

class Formula_Draw_Math extends Formula_Draw_Abstract {

	public function draw() {
		$htexte = 'dg' . $this->getText();
		$font = $this->_getFont();
		$hdim = ImageTTFBBox($this->getSize(), 0, $font, $htexte);
		$wdim = ImageTTFBBox($this->getSize(), 0, $font, $this->getText());
		$dx = max($wdim[2], $wdim[4]) - min($wdim[0], $wdim[6]) + ceil($this->getSize() / 8);
		$dy = max($hdim[1], $hdim[3]) - min($hdim[5], $hdim[7]) + ceil($this->getSize() / 8);
		$img = ImageCreate(max($dx, 1), max($dy, 1));
		$noir = ImageColorAllocate($img, 0, 0, 0);
		$blanc = ImageColorAllocate($img, 255, 255, 255);
		$blanc = imagecolortransparent($img, $blanc);
		ImageFilledRectangle($img, 0, 0, $dx, $dy, $blanc);
		ImageTTFText($img, $this->getSize(), 0, 0, -min($hdim[5], $hdim[7]), $noir, $font, $this->getText());
		return $img;
	}

	protected function _getFont() {
		if (isset($this->getFormula()->getFontmath[$this->getText()])) {
			return $this->getFormula()->getDirfonts() . "/" . $this->getFormula()->getFontmath[$this->getText()] . ".ttf";
		} elseif (preg_match("/[a-zA-Z]/", $this->getText())) {
			return $this->getFormula()->getDirfonts() . "/cmmi10.ttf";
		} else {
			return $this->getFormula()->getDirfonts() . "/cmr10.ttf";
		}
	}

}
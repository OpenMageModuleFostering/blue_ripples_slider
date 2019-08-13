<?php

class Blueripples_Slideshow_Model_Source_Fxcontent
{
    public function toOptionArray()
    {
        return array(
			array('value'=>'fadeFromBottom', 'label'=>Mage::helper('adminhtml')->__('Fade From Bottom')),
			array('value'=>'fadeFromRight', 'label'=>Mage::helper('adminhtml')->__('Fade From Right')),
			array('value'=>'fadeFromTop', 'label'=>Mage::helper('adminhtml')->__('Fade From Top')),
			array('value'=>'fadeFromLeft', 'label'=>Mage::helper('adminhtml')->__('Fade From Left')),
        );
    }
}

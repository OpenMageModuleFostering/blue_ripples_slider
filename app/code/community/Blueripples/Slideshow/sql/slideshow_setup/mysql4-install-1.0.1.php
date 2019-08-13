<?php

$installer = $this;

$installer->startSetup();

$installer->run("

CREATE TABLE  IF NOT EXISTS {$this->getTable('slideshow')} (
  `slideshow_id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `filename` varchar(255) NOT NULL default '',
  `slide_url` varchar(500) NOT NULL default '',
  `slide_target` varchar(255) NOT NULL default '',
  `content` text NOT NULL default '',
  `status` smallint(6) NOT NULL default '0',
  PRIMARY KEY (`slideshow_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
insert  into {$this->getTable('slideshow')}(`title`,`filename`,`content`,`status`) values ('FRUITY TEA','slideshow/slides/slide4.png','It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.','1');
insert  into {$this->getTable('slideshow')}(`title`,`filename`,`content`,`status`) values ('GREEN TEA','slideshow/slides/slide2.png','All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary making this the first true generator on the Internet.','1');
insert  into {$this->getTable('slideshow')}(`title`,`filename`,`content`,`status`) values ('BLACK TEA','slideshow/slides/slide1.png','Contrary to popular belief Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC making it over 2000 years old','1');
    ");

$installer->endSetup(); 
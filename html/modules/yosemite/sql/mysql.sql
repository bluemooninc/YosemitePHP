CREATE TABLE yosemite_test (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` mediumint(8) unsigned NOT NULL,
  `title` varchar(255) default NULL,
  `content` text default NULL,
  PRIMARY KEY  (id)
) DEFAULT CHARSET=utf8;

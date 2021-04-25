CREATE DATABASE `users1`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `users1`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `csaladi_nev` varchar(45) NOT NULL default '',
  `uto_nev` varchar(45) NOT NULL default '',
  `bejelentkezes` varchar(12) NOT NULL default '',
  `jelszo` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`id`)
)
CREATE TABLE `email` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nev` varchar(45) NOT NULL default '',
  `email` varchar(45) NOT NULL default '',
  `szoveg` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

 

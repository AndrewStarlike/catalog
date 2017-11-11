-- // create discipline table
-- Migration SQL that makes the change goes here.

CREATE TABLE IF NOT EXISTS `discipline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- @UNDO
-- SQL to undo the change goes here.

DROP TABLE `discipline`;
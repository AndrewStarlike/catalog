-- // create token table
-- Migration SQL that makes the change goes here.

CREATE TABLE IF NOT EXISTS `token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `token` varchar(50) NOT NULL DEFAULT '0',
  `valid_until` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `token_user_fk` (`user_id`),
  CONSTRAINT `token_user_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- @UNDO
-- SQL to undo the change goes here.

DROP TABLE `token`;
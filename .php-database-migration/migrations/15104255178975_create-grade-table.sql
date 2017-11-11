-- // create grade table
-- Migration SQL that makes the change goes here.

CREATE TABLE IF NOT EXISTS `grade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL DEFAULT '0',
  `teacher_id` int(11) NOT NULL DEFAULT '0',
  `discipline_id` int(11) NOT NULL DEFAULT '0',
  `grade` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `grade_student_fk` (`student_id`),
  KEY `grade_teacher_fk` (`teacher_id`),
  KEY `grade_discipline_fk` (`discipline_id`),
  CONSTRAINT `grade_discipline_fk` FOREIGN KEY (`discipline_id`) REFERENCES `discipline` (`id`),
  CONSTRAINT `grade_student_fk` FOREIGN KEY (`student_id`) REFERENCES `user` (`id`),
  CONSTRAINT `grade_teacher_fk` FOREIGN KEY (`teacher_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- @UNDO
-- SQL to undo the change goes here.

DROP TABLE `grade`;
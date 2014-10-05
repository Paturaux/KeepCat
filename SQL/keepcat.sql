CREATE DATABASE IF NOT EXISTS `keepcat`;
USE `keepcat`;

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `num_phone` varchar(20) NOT NULL,
  `b_date` date NOT NULL COMMENT 'Date de naissance',
  `location` varchar(50) NOT NULL,
  `price` TINYINT NOT NULL,
  `mark` float(11) NULL
  PRIMARY KEY (`num`)
);

INSERT INTO `user` (`num`, `name`, `pass`, `first_name`, `mail`, `num_phone`, `b_date`, `location`, `price`,`mark`) VALUES
(1, 'Menubarbe', 'admin', 'sylvio', 'tlgman@hotmail.fr', '00 00 00 00 00', '1994-01-11', 'Lyon', 20, 4.2);
INSERT INTO `user` (`num`, `name`, `pass`, `first_name`, `mail`, `num_phone`, `b_date`, `location`, `price`, `mark`) VALUES
(2, 'Paturaux', 'admin', 'florian', 'pat42410@hotmail.fr', '00 00 00 00 00', '1994-01-11', 'Lyon', 17, 4.4);
INSERT INTO `user` (`num`, `name`, `pass`, `first_name`, `mail`, `num_phone`, `b_date`, `location`, `price`, `mark`) VALUES
(3, 'Rongeard', 'admin', 'benoit', 'benoit@hotmail.fr', '00 00 00 00 00', '1994-01-11', 'Lyon', 12, 3.5);
INSERT INTO `user` (`num`, `name`, `pass`, `first_name`, `mail`, `num_phone`, `b_date`, `location`, `price`, `mark`) VALUES
(4, 'Miniot', 'admin', 'samuel', 'sam@hotmail.fr', '00 00 00 00 00', '1994-01-11', 'Lyon', 33, 4.1);
INSERT INTO `user` (`num`, `name`, `pass`, `first_name`, `mail`, `num_phone`, `b_date`, `location`, `price`, `mark`) VALUES
(5, 'Charles', 'admin', 'jean paul', 'jpcharles@hotmail.fr', '00 00 00 00 00', '1994-01-11', 'Lyon', 19, 1.6);
INSERT INTO `user` (`num`, `name`, `pass`, `first_name`, `mail`, `num_phone`, `b_date`, `location`, `price`, `mark`) VALUES
(6, 'Hubert', 'admin', 'yohan', 'yoyohub@hotmail.fr', '00 00 00 00 00', '1994-01-11', 'Lyon', 15, 2.5);
INSERT INTO `user` (`num`, `name`, `pass`, `first_name`, `mail`, `num_phone`, `b_date`, `location`, `price`, `mark`) VALUES
(7, 'Dagobert', 'admin', 'yohan', 'jeajean@hotmail.fr', '00 00 00 00 00', '1994-01-11', 'Lyon', 15, 2.9);

DROP TABLE IF EXISTS `animal`;
CREATE TABLE IF NOT EXISTS `animal` (
	`num` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL,
	`race` varchar(50) NOT NULL,
	`b_date` date NOT NULL,
	`description` TEXT NULL, 
	`numUser` int(11) NOT NULL,
	`numPhoto` int(11) NULL,
	PRIMARY KEY(`num`)
  );
  
INSERT INTO `animal` (`num`, `name`, `race`, `b_date`, `description`, `numUser`, `numPhoto`) VALUES
(1, 'Félix', 'American', '2010-00-00', 'test', 1, 1);
INSERT INTO `animal` (`num`, `name`, `race`, `b_date`, `description`, `numUser`, `numPhoto`) VALUES
(2, 'Micka', 'Ragdoll', '2008-00-00', 'test2', 1, 2);
INSERT INTO `animal` (`num`, `name`, `race`, `b_date`, `description`, `numUser`, `numPhoto`) VALUES
(3, 'Adora', 'Exotic', '2013-00-00', 'test3', 1, 3);


DROP TABLE IF EXISTS `photo`;
CREATE TABLE IF NOT EXISTS `photo` (
	`num` int(11) NOT NULL AUTO_INCREMENT,
	`title` varchar(50) NOT NULL,
	`src` varchar(60) NOT NULL,
	PRIMARY KEY(`num`)
);

INSERT INTO `photo` (`num`, `title`, `src`) VALUES
(1, 'Félix', 'resources/chat1.jpg');
INSERT INTO `photo` (`num`, `title`, `src`) VALUES
(2, 'Micka', 'resources/chat2.jpg');
 INSERT INTO `photo` (`num`, `title`, `src`) VALUES
(3, 'Micka', 'resources/chat3.jpg');
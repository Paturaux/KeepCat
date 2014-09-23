CREATE DATABASE IF NOT EXISTS `keepcat`;
USE `keepcat`;

DROP TABLE `user`;
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
  PRIMARY KEY (`num`)
);

INSERT INTO `user` (`num`, `name`, `pass`, `first_name`, `mail`, `num_phone`, `b_date`, `location`, `price`) VALUES
(1, 'Menubarbe', 'admin', 'sylvio', 'tlgman@hotmail.fr', '00 00 00 00 00', '1994-01-11', 'Lyon', 20);
INSERT INTO `user` (`num`, `name`, `pass`, `first_name`, `mail`, `num_phone`, `b_date`, `location`, `price`) VALUES
(2, 'Paturaux', 'admin', 'florian', 'pat42410@hotmail.fr', '00 00 00 00 00', '1994-01-11', 'Lyon', 17);
INSERT INTO `user` (`num`, `name`, `pass`, `first_name`, `mail`, `num_phone`, `b_date`, `location`, `price`) VALUES
(3, 'Rongeard', 'admin', 'benoit', 'benoit@hotmail.fr', '00 00 00 00 00', '1994-01-11', 'Lyon', 12);
INSERT INTO `user` (`num`, `name`, `pass`, `first_name`, `mail`, `num_phone`, `b_date`, `location`, `price`) VALUES
(4, 'Miniot', 'admin', 'samuel', 'sam@hotmail.fr', '00 00 00 00 00', '1994-01-11', 'Lyon', 33);
INSERT INTO `user` (`num`, `name`, `pass`, `first_name`, `mail`, `num_phone`, `b_date`, `location`, `price`) VALUES
(5, 'Charles', 'admin', 'jean paul', 'jpcharles@hotmail.fr', '00 00 00 00 00', '1994-01-11', 'Lyon', 19);
INSERT INTO `user` (`num`, `name`, `pass`, `first_name`, `mail`, `num_phone`, `b_date`, `location`, `price`) VALUES
(6, 'Hubert', 'admin', 'yohan', 'yoyohub@hotmail.fr', '00 00 00 00 00', '1994-01-11', 'Lyon', 15);

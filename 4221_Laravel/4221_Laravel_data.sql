DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
`ID` int(4) NOT NULL AUTO_INCREMENT,
`username` varchar(50) NOT NULL,
`passw` varchar(50) NOT NULL,
PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `users` (`username`, `passw`) VALUES ('admin1', 'Quizzy7');
INSERT INTO `users` (`username`, `passw`) VALUES ('Joe', 'joes_pass');
INSERT INTO `users` (`username`, `passw`) VALUES ('Shruti', 'shrutis_pass');
INSERT INTO `users` (`username`, `passw`) VALUES ('Eric', 'erics_pass');
INSERT INTO `users` (`username`, `passw`) VALUES ('Gerald', 'W59d$2945p');
INSERT INTO `users` (`username`, `passw`) VALUES ('Simon', '159plq!0 456');
INSERT INTO `users` (`username`, `passw`) VALUES ('Chris', 'my_super_secure_password_is_cheese');

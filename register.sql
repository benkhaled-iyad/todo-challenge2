CREATE TABLE `register` (
  `ID` int(10) AUTO_INCREMENT,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Email` varchar(100) UNIQUE NOT NULL,
  `Password` int(100) NOT NULL,
  PRIMARY KEY (`ID`)
);
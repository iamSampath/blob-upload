/*
	Author: Sampath Kumar Medarametla
	Email: skmeadarametla@gmail.com
	All rights reserved to Sampath Kumar Medarametla
	Free to use with copyright
	update the database name with the name of the database of your own 
	
*/
use custom_db;

CREATE TABLE `uploads` (
  `fileid` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(100) NOT NULL,
  `filetype` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `data` mediumblob NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`fileid`)
)
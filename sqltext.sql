/*
	
		Author: Sampath Kumar Medarametla
		Email: skmeadarametla@gmail.com
		All rights reserved to Sampath Kumar Medarametla
		Free to use with copyright
		Date: 7/9/2015

	
*/
use custom_db;

CREATE TABLE `tbl_uploads` (
  `fileid` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(100) NOT NULL,
  `filetype` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `data` mediumblob NOT NULL,
  PRIMARY KEY (`fileid`)
)

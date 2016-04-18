CREATE TABLE `email_listings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recipient_name` varchar(45) DEFAULT NULL,
  `recipient_email` varchar(45) DEFAULT NULL,
  `facility_code` int(11) DEFAULT NULL,
  `subcounty` varchar(45) DEFAULT NULL,
  `county` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1145 DEFAULT CHARSET=latin1;
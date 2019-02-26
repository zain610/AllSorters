--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
CREATE TABLE `properties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL,
  `list_price` int(11) NOT NULL,
  `sold_price` int(11) DEFAULT NULL,
  `num_bedrooms` int(11) DEFAULT NULL,
  `num_bathrooms` int(11) DEFAULT NULL,
  `image_url` varchar(512) DEFAULT NULL,
  `image_attribution` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `properties`
--
LOCK TABLES `properties` WRITE;
INSERT INTO `properties` VALUES (1,'902 Dandenong Rd, Caulfield East',1650000,1710500,3,2,'https://upload.wikimedia.org/wikipedia/commons/6/68/Grimwade_house_caulfield_north.jpg','This work has been released into the public domain by its author, Biatch at the Wikipedia project. This applies worldwide.'),(2,'26 Grant St, Malvern East',2100000,NULL,5,3,'https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/St_Stephens_Church_Caulfield_Nth.jpg/800px-St_Stephens_Church_Caulfield_Nth.jpg','This file is licensed under the Creative Commons Attribution-Share Alike 3.0 Unported license.'),(3,'100 Beaver St, Caulfield East',1800000,NULL,4,2,'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2d/Anselm_House.jpg/800px-Anselm_House.jpg','This file is licensed under the Creative Commons Attribution-Share Alike 3.0 Unported license.'),(4,'12 Turnes Rd, Caulfield East',4500000,NULL,5,4,'https://upload.wikimedia.org/wikipedia/commons/f/f3/Labassa.jpg','This work has been released into the public domain by its author, Biatch at English Wikipedia. This applies worldwide.\nI');
UNLOCK TABLES;

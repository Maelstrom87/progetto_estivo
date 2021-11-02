-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              5.7.33 - MySQL Community Server (GPL)
-- S.O. server:                  Win64
-- HeidiSQL Versione:            11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dump della struttura di tabella agenzia_viaggi.commenti
CREATE TABLE IF NOT EXISTS `commenti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `citta` varchar(255) DEFAULT NULL,
  `rating` float DEFAULT '0',
  `testo` longtext NOT NULL,
  `utente` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1168 DEFAULT CHARSET=utf8;

-- Dump dei dati della tabella agenzia_viaggi.commenti: ~36 rows (circa)
/*!40000 ALTER TABLE `commenti` DISABLE KEYS */;
INSERT INTO `commenti` (`id`, `citta`, `rating`, `testo`, `utente`) VALUES
	(7, 'Barcellona', 0, 'dasdasd asd', 'diego'),
	(8, 'Scandinavia', 0, 'Cool!', 'Pedro'),
	(10, 'Buenos Aires', 0, 'Il top', 'Lorena S.'),
	(11, 'Berlino', 0, 'Danke', 'Elena'),
	(12, 'Berlino', 0, 'Tanta birra!', 'Federico'),
	(13, 'Buenos Aires', 0, 'asimdoasijmd', 'Ada v'),
	(998, 'Barcellona', 0, 'andale', 'Lello'),
	(999, 'Barcellona', 0, 'andale', 'Lello'),
	(1000, 'Barcellona', 0, 'andale', 'Lello'),
	(1005, 'Barcellona', 0, 'andale', 'Lello'),
	(1006, 'Barcellona', 0, 'fa schifo', 'Grinch'),
	(1007, 'Barcellona', 0, 'fa schifo', 'Grinch'),
	(1138, 'Scandinavia', 0, 'xcasdasdad', 'Papaya'),
	(1139, 'Buenos Aires', 0, 'lo mejor', 'diego'),
	(1140, 'Buenos Aires', 0, 'lo mejor', 'diego'),
	(1141, 'Barcellona', 0, 'babbbarabbabra', 'Paola'),
	(1142, 'Scandinavia', 0, 'Nu cess \'e merd', 'Ciro'),
	(1143, 'Berlino', 0, 'Mi aspettavo meglio', 'Anna'),
	(1144, 'Berlino', 0, 'Kartofel', 'Gino'),
	(1145, 'Berlino', 0, 'Fantastica', 'Eva'),
	(1146, 'Berlino', 0, 'Fantastica', 'Eva'),
	(1147, 'Barcellona', 0, 'asdasd', 'Barabba'),
	(1148, 'Scandinavia', 0, 'Troppa acqua', 'Sara'),
	(1149, 'Scandinavia', 0, 'Troppa acqua', 'Sara'),
	(1150, 'Scandinavia', 0, 'Troppa acqua', 'Sara'),
	(1151, 'Scandinavia', 0, 'Bellissima', 'Pina'),
	(1152, 'Berlino', 0, 'Ottima vacanza', 'Milo'),
	(1153, 'Berlino', 0, 'Wow', 'Peter'),
	(1154, 'Berlino', 0, 'wow', 'peter'),
	(1155, 'Scandinavia', 0, 'wow', 'ptere'),
	(1156, 'Berlino', 0, 'asd', 'diego'),
	(1157, 'Berlino', 0, 'asd', 'diego'),
	(1158, 'Berlino', 0, 'asd', 'diego'),
	(1159, 'Berlino', 0, 'Magnifica', 'Patrick'),
	(1160, 'Buenos Aires', 0, 'Stragrande', 'Lolli'),
	(1161, 'Buenos Aires', 0, 'Wonderful', 'Johnny'),
	(1162, 'Berlino', 0, 'krauti', 'George'),
	(1163, 'Barcellona', 0, 'ahauhauahuhau', 'pertus'),
	(1164, 'Barcellona', 0, 'ahauhauahuhau', 'pertus'),
	(1165, 'Barcellona', 0, 'ahauhauahuhau', 'pertus'),
	(1166, 'Scandinavia', 0, 'pippirippi\r\n', '1234'),
	(1167, 'Berlino', 0, 'asdlahsdoahsdaosdhasdhasdhasdouashdoasduhasdouhsaosdh poasihdoashdaosdhijasd asdoiahsdsoiahdjsnmd8fdjvÃ skpmc0sdhfkmasd isjismdsa sjaidjÃ iamsdouihÃ¨pijnas nuhÃ¨oinasÃ²ljdnluhbaousind aishdojknÃ²jhasud nundsdsdo miscuifm sokcuiÃ¬\r\nsjcisucpsmc isdoskd jdÃ¹\r\nosd psdjkduds\r\n\r\nsdij sdoi Ã¨sodk s\r\n sÃ¨dis dposd\r\n\r\nx 0ois,sdj\r\n\r\nsocsoijsodi sdspdi Ã¨jpsdj \r\nsdsd', 'jeff');
/*!40000 ALTER TABLE `commenti` ENABLE KEYS */;

-- Dump della struttura di tabella agenzia_viaggi.utenti
CREATE TABLE IF NOT EXISTS `utenti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cognome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `citta` varchar(255) NOT NULL,
  `viaggi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- Dump dei dati della tabella agenzia_viaggi.utenti: ~23 rows (circa)
/*!40000 ALTER TABLE `utenti` DISABLE KEYS */;
INSERT INTO `utenti` (`id`, `nome`, `cognome`, `email`, `citta`, `viaggi`) VALUES
	(1, 'luca', 'lee', 'lucalee0@hotmail.com', 'Parigi', NULL),
	(2, 'diego', 'lee', 'diegolee0@hotmail.com', 'Barcellona', NULL),
	(3, 'luca', 'bianchi', 'lucabianchi0@hotmail.com', 'Roma', NULL),
	(4, 'diego', 'rossi', 'diegorossi0@gmail.com', 'Roma', NULL),
	(5, 'sara', 'bianchi', 'sarabianchi0@gmail.com', 'Berlino', NULL),
	(6, 'elia', 'verdi', 'eliaverdi0@gmail.com', 'NewYork', NULL),
	(7, 'francesco', 'pippo', 'francescopippo0@hotmail.com', 'Barcellona', NULL),
	(8, 'marta', 'lee', 'martalee0@yahoo.com', 'Parigi', NULL),
	(9, 'elia', 'rossi', 'eliarossi0@yahoo.com', 'NewYork', NULL),
	(10, 'francesco', 'verdi', 'francescoverdi0@gmail.com', 'Roma', NULL),
	(11, 'paolo', 'gomez', 'paologomez0@yahoo.com', 'Parigi', NULL),
	(12, 'luca', 'rossi', 'lucarossi0@yahoo.com', 'Barcellona', NULL),
	(13, 'paolo', 'lee', 'paololee0@gmail.com', 'Roma', NULL),
	(14, 'francesco', 'pini', 'francescopini0@yahoo.com', 'Berlino', NULL),
	(15, 'francesco', 'verdi', 'francescoverdi0@hotmail.com', 'NewYork', NULL),
	(16, 'marta', 'lee', 'martalee0@gmail.com', 'Barcellona', NULL),
	(17, 'elia', 'pippo', 'eliapippo0@yahoo.com', 'Berlino', NULL),
	(18, 'luca', 'bianchi', 'lucabianchi1@hotmail.com', 'Milano', NULL),
	(19, 'marta', 'pippo', 'martapippo0@gmail.com', 'Milano', NULL),
	(20, 'lucia', 'verdi', 'luciaverdi1@gmail.com', 'Roma', NULL),
	(21, 'sara', 'pippo', 'sarapippo0@hotmail.com', 'Roma', NULL),
	(22, 'sara', 'lee', 'saralee0@yahoo.com', 'Milano', NULL),
	(24, 'marta', 'rossi', 'martarossi1@hotmail.com', 'Barcellona', NULL),
	(25, 'elia', 'bianchi', 'eliabianchi0@hotmail.com', 'Milano', NULL);
/*!40000 ALTER TABLE `utenti` ENABLE KEYS */;

-- Dump della struttura di tabella agenzia_viaggi.viaggi
CREATE TABLE IF NOT EXISTS `viaggi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destinazione` varchar(255) NOT NULL,
  `partenza` date NOT NULL,
  `ritorno` date NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT '',
  `utenti` varchar(255) DEFAULT NULL,
  `prezzo` int(11) NOT NULL,
  `offerta` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dump dei dati della tabella agenzia_viaggi.viaggi: ~6 rows (circa)
/*!40000 ALTER TABLE `viaggi` DISABLE KEYS */;
INSERT INTO `viaggi` (`id`, `destinazione`, `partenza`, `ritorno`, `tipo`, `foto`, `utenti`, `prezzo`, `offerta`) VALUES
	(2, 'Berlino', '2021-09-09', '2021-09-18', 'volo', 'assets/images/berlin.jpg', NULL, 2000, 1),
	(3, 'Buenos Aires', '2021-08-20', '2021-09-17', 'volo', 'assets/images/buenosaires.jpg', NULL, 5000, 1),
	(4, 'Barcellona', '2021-08-27', '2021-08-31', 'volo', 'assets/images/barcellona.jpg', NULL, 1599, 1),
	(5, 'Scandinavia', '2021-09-01', '2021-09-10', 'nave', 'assets/images/cruise.jpg', NULL, 4500, 1),
	(6, 'Parigi', '2021-09-09', '2021-09-18', 'volo', 'assets/images/paris.jpg', NULL, 805, 0),
	(7, 'New York', '2021-09-16', '2021-09-30', 'volo', 'assets/images/newyork.jpg', NULL, 5000, 0);
/*!40000 ALTER TABLE `viaggi` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

CREATE TABLE IF NOT EXISTS `#__BitcoinFaucet` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`BitcoinFaucet` text NOT NULL,
	`lang` varchar(25) NOT NULL,
 
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

INSERT INTO `#__BitcoinFaucet` (`BitcoinFaucet`, `lang`) VALUES ('<span style="font-weight:bold;">Get Bitcoins Free !</span>', 'en-GB');
INSERT INTO `#__BitcoinFaucet` (`BitcoinFaucet`, `lang`) VALUES ('<span style="font-weight:bold;">Obtener Bitcoins gratis !</span>', 'es-ES');
INSERT INTO `#__BitcoinFaucet` (`BitcoinFaucet`, `lang`) VALUES ('<span style="font-weight:bold;">Obtenir des Bitcoins Gratuitement !</span>', 'fr-FR');

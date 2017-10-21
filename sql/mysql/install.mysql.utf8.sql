CREATE TABLE IF NOT EXISTS `#__BitcoinFaucet` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`BitcoinFaucet` text NOT NULL,
	`lang` varchar(25) NOT NULL,
 
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

INSERT INTO `#__BitcoinFaucet` (`BitcoinFaucet`, `lang`) VALUES ('<span style="font-weight:bold;">Bitcoins verdienen !</span>', 'de-DE');
INSERT INTO `#__BitcoinFaucet` (`BitcoinFaucet`, `lang`) VALUES ('<span style="font-weight:bold;">Win Bitcoins !</span>', 'en-GB');
INSERT INTO `#__BitcoinFaucet` (`BitcoinFaucet`, `lang`) VALUES ('<span style="font-weight:bold;">Ganar Bitcoins !</span>', 'es-ES');
INSERT INTO `#__BitcoinFaucet` (`BitcoinFaucet`, `lang`) VALUES ('<span style="font-weight:bold;">Gagner des Bitcoins !</span>', 'fr-FR');

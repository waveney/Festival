CREATE TABLE `EventTypes` (
  `ETypeNo` int(11) NOT NULL AUTO_INCREMENT,
  `SN` text NOT NULL,
  `Plural` text NOT NULL,
  `Public` tinyint(4) NOT NULL,
  `HasDance` tinyint(4) NOT NULL,
  `HasMusic` tinyint(4) NOT NULL,
  `HasOther` tinyint(4) NOT NULL,
  `NotCrit` tinyint(4) NOT NULL,
  `UseImp` tinyint(4) NOT NULL,
  `Format` int(11) NOT NULL,
  `State` tinyint(4) NOT NULL,
  `IncType` tinyint(4) NOT NULL,
  `NoPart` tinyint(4) NOT NULL,
  `FirstYear` int(11) NOT NULL,
  PRIMARY KEY (`ETypeNo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

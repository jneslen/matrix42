# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.21)
# Database: darth_de
# Generation Time: 2012-06-08 22:28:33 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table addresses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `addresses`;

CREATE TABLE `addresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('home','billing','business','previous') NOT NULL DEFAULT 'business',
  `user_id` int(10) unsigned NOT NULL,
  `care_of` varchar(34) DEFAULT NULL,
  `address1` varchar(85) DEFAULT NULL,
  `address2` varchar(85) DEFAULT NULL,
  `city` varchar(85) DEFAULT NULL,
  `county_id` int(10) unsigned NOT NULL,
  `state_id` char(2) DEFAULT '',
  `province` text,
  `postal` varchar(10) DEFAULT NULL,
  `country_id` char(2) NOT NULL DEFAULT 'US',
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk-country-addresses` (`country_id`),
  KEY `fk-state-addresses` (`state_id`),
  KEY `fk-user-addresses` (`user_id`),
  CONSTRAINT `fk-user-addresses` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-country-addresses` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-state-addresses` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table campaigns
# ------------------------------------------------------------

DROP TABLE IF EXISTS `campaigns`;

CREATE TABLE `campaigns` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `campaign_code` int(10) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `descripton` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `campaigns` WRITE;
/*!40000 ALTER TABLE `campaigns` DISABLE KEYS */;

INSERT INTO `campaigns` (`id`, `campaign_code`, `name`, `descripton`)
VALUES
	(1,100,'general','General Site Visit'),
	(2,200,'servicenow','ServiceNow'),
	(3,300,'microsoft','Microsoft SCCM Enterprise Manager'),
	(4,400,'citrix','VDI-Desktop Virtualization, Citrix Management &amp; p2v by Matrix42'),
	(5,500,'compliance','Compliance with Matrix42');

/*!40000 ALTER TABLE `campaigns` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table case_studies
# ------------------------------------------------------------

DROP TABLE IF EXISTS `case_studies`;

CREATE TABLE `case_studies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `logo` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `study_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `case_studies` WRITE;
/*!40000 ALTER TABLE `case_studies` DISABLE KEYS */;

INSERT INTO `case_studies` (`id`, `company`, `description`, `logo`, `pdf`, `video`, `study_date`, `featured`, `disabled`)
VALUES
	(1,'BMW Group Switzerland',NULL,'bmw-logo.png',NULL,NULL,'2012-06-04 13:27:37',1,0),
	(2,'Magna International Inc.',NULL,'magna-logo.png',NULL,NULL,'2012-06-04 13:28:54',1,0),
	(3,'Vinci',NULL,'vinci-logo.png',NULL,NULL,'2012-06-04 13:29:55',1,0),
	(4,'IBC Solar AG',NULL,'ibc-solar-logo.png',NULL,NULL,'2012-06-04 13:30:55',1,0);

/*!40000 ALTER TABLE `case_studies` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table companies
# ------------------------------------------------------------

DROP TABLE IF EXISTS `companies`;

CREATE TABLE `companies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `address_id` int(10) unsigned DEFAULT NULL,
  `phone_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `logo` varchar(255) DEFAULT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk-address-company` (`address_id`),
  KEY `fk-phone-company` (`phone_id`),
  CONSTRAINT `fk-address-company` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-phone-company` FOREIGN KEY (`phone_id`) REFERENCES `phones` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `companies` WRITE;
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;

INSERT INTO `companies` (`id`, `address_id`, `phone_id`, `name`, `description`, `logo`, `disabled`)
VALUES
	(1,NULL,NULL,'Microsoft',NULL,'microsoft-logo.png',0),
	(2,NULL,NULL,'Citrix',NULL,'citrix-logo.png',0),
	(3,NULL,NULL,'Gartner',NULL,'gartner-magicq-logo.png',0),
	(4,NULL,NULL,'ServiceNow',NULL,'servicenow-logo.png',0);

/*!40000 ALTER TABLE `companies` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table components
# ------------------------------------------------------------

DROP TABLE IF EXISTS `components`;

CREATE TABLE `components` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('model','method','view','content') NOT NULL DEFAULT 'content',
  `name` varchar(85) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  `content` text,
  `model` varchar(255) DEFAULT NULL,
  `directory` varchar(255) DEFAULT NULL,
  `controller` varchar(255) DEFAULT NULL,
  `method` varchar(255) DEFAULT NULL,
  `view` varchar(255) DEFAULT NULL,
  `vars` varchar(255) DEFAULT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `components` WRITE;
/*!40000 ALTER TABLE `components` DISABLE KEYS */;

INSERT INTO `components` (`id`, `type`, `name`, `description`, `content`, `model`, `directory`, `controller`, `method`, `view`, `vars`, `disabled`)
VALUES
	(1,'method','%%leadform%%','Lead Capture Körperform',NULL,NULL,NULL,'public','lead_form',NULL,NULL,0),
	(2,'content','%%getstartedpage%%','Ein gut Get Started, dass ein Bildlauf nach leadform auf der gleichen Seite','<div class=\"well margin-right\">\n	<div class=\"left\">\n		<h3 class=\"no-margin\">Lassen Sie Matrix42 befähigen, die Kontrolle über Ihre IT-Anforderungen sein.</h3>\n		<h4 class=\"no-margin\">Die perfekte IT-Lösung Starten Sie jetzt.</h4>\n	</div>\n	<a href=\"#lead-form-anchor\" class=\"btn btn-info btn-large right margin-right scroll\">Fangen Sie an!!</a>\n	<div class=\"clearfix\"></div>\n</div><!-- well -->',NULL,NULL,NULL,NULL,NULL,NULL,0),
	(3,'content','%%germantest%%','Testing German characters','befähigen',NULL,NULL,NULL,NULL,NULL,NULL,0);

/*!40000 ALTER TABLE `components` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table contents
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contents`;

CREATE TABLE `contents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned NOT NULL,
  `type` enum('main','banner','sidebar') NOT NULL DEFAULT 'main',
  `content` text COMMENT 'HTML Content',
  `elements` text COMMENT 'Serialized array for page elements',
  PRIMARY KEY (`id`),
  KEY `fk-menu-contents` (`menu_id`),
  CONSTRAINT `fk-menu-contents` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table countries
# ------------------------------------------------------------

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `id` char(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `order` int(3) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;

INSERT INTO `countries` (`id`, `name`, `order`)
VALUES
	('AD','Andorra',11),
	('AE','Vereinigte Arabische Emirate',237),
	('AF','Afghanistan',5),
	('AG','Antigua/Barbuda',15),
	('AI','Anguilla',13),
	('AL','Albanien',8),
	('AM','Armenien',18),
	('AN','NiederlÌ_ndische Antillen',152),
	('AO','Angola',12),
	('AQ','Antarktis',14),
	('AR','Argentinien',17),
	('AS','Amerikanisch-Samoa',10),
	('AT','ÌÐsterreich',2),
	('AU','Australien',22),
	('AW','Aruba',19),
	('AX','ÌÉland',7),
	('AZ','Aserbaidschan',20),
	('BA','Bosnien/Herzegowina',33),
	('BB','Barbados',26),
	('BD','Bangladesh',25),
	('BE','Belgien',27),
	('BF','Burkina Faso',39),
	('BG','Bulgarien',38),
	('BH','Bahrain',24),
	('BI','Burundi',40),
	('BJ','Benin',29),
	('BL','St. BarthÌ©lemy',195),
	('BM','Bermuda',30),
	('BN','Brunei Darussalam',37),
	('BO','Bolivien',32),
	('BR','Brasilien',36),
	('BS','Bahamas',23),
	('BT','Bhutan',31),
	('BV','Bouvetinsel',35),
	('BW','Botsuana',34),
	('BY','WeiÌÙrussland',241),
	('BZ','Belize',28),
	('CA','Kanada',103),
	('CC','Kokosinseln',108),
	('CF','Zentralafrikanische Republik',243),
	('CG','Kongo',111),
	('CH','Schweiz',3),
	('CI','ElfenbeinkÌ_ste',53),
	('CK','Cookinseln',44),
	('CL','Chile',42),
	('CM','Kamerun',102),
	('CN','China',43),
	('CO','Kolumbien',109),
	('CR','Costa Rica',45),
	('CU','Cuba',46),
	('CV','Cabo Verde',41),
	('CX','Weihnachtsinsel',240),
	('CY','Zypern',244),
	('CZ','Tschechoslowakei',221),
	('DE','Deutschland',1),
	('DJ','Dschibuti',49),
	('DK','DÌ_nemark',50),
	('DM','Dominica',47),
	('DO','Dominikanische Republik',48),
	('DZ','Algerien',9),
	('EC','Ecuador',51),
	('EE','Estland',55),
	('EG','Ìãgypten',6),
	('EH','Westsahara',242),
	('ER','Eritrea',54),
	('ES','Spanien',193),
	('ET','Ìãthiopien',21),
	('FI','Finnland',58),
	('FJ','Fidschi',57),
	('FK','Falklandinseln',56),
	('FM','Mikronesien',136),
	('FO','FÌ_rÌ¦er',63),
	('FR','Frankreich',59),
	('GA','Gabun',64),
	('GB','GroÌÙbritannien',71),
	('GD','Grenada',69),
	('GE','Georgien',66),
	('GF','FranzÌ¦sisch-Guayana',60),
	('GG','Guernsey',76),
	('GH','Ghana',67),
	('GI','Gibraltar',68),
	('GL','GrÌ¦nland',72),
	('GM','Gambia',65),
	('GN','Guinea',78),
	('GP','Guadeloupe',73),
	('GQ','Ìãquatorialguinea',16),
	('GR','Griechenland',70),
	('GS','SÌ_dgeorgien/SÌ_dlichen Sandwichinseln',209),
	('GT','Guatemala',75),
	('GU','Guam',74),
	('GW','Guinea-Bissau',77),
	('GY','Guyana',79),
	('HK','Hong Kong',83),
	('HM','Heard und McDonaldinseln',81),
	('HN','Honduras',82),
	('HR','Kroatien',112),
	('HT','Haiti',80),
	('HU','Ungarn',229),
	('ID','Indonesien',85),
	('IE','Irland',88),
	('IL','Israel',91),
	('IM','Isle Of Man',90),
	('IN','Indien',84),
	('IQ','Irak',86),
	('IR','Iran',87),
	('IS','Island',89),
	('IT','Italien',92),
	('JE','Jersey',96),
	('JM','Jamaika',93),
	('JO','Jordanien',97),
	('JP','Japan',94),
	('KE','Kenia',105),
	('KG','Kirgisistan',106),
	('KH','Kambodscha',101),
	('KI','Kiribati',107),
	('KM','Komoren',110),
	('KN','St. Kitts/Nevis',197),
	('KP','Nordkorea',156),
	('KR','SÌ_dkorea',210),
	('KW','Kuwait',113),
	('KY','Kaimaninseln',100),
	('KZ','Kasachstan',104),
	('LA','Laos',114),
	('LB','Libanon',117),
	('LC','St. Lucia',198),
	('LI','Liechtenstein',120),
	('LK','Sri Lanka',194),
	('LR','Liberia',118),
	('LS','Lesotho',115),
	('LT','Litauen',121),
	('LU','Luxemburg',4),
	('LV','Lettland',116),
	('LY','Libyen',119),
	('MA','Morokko',142),
	('MC','Monaco',138),
	('MD','Moldawien',137),
	('ME','Montenegro',140),
	('MF','St. Martin',199),
	('MG','Madagaskar',123),
	('MH','Marshallinseln',129),
	('MK','Mazedonien',134),
	('ML','Mali',127),
	('MM','Myanmar',144),
	('MN','Mongolei',139),
	('MO','Macao',122),
	('MP','NÌ¦rdliche Marianen',159),
	('MQ','Martinique',130),
	('MR','Mauretanien',131),
	('MS','Montserrat',141),
	('MT','Malta',128),
	('MU','Mauritius',132),
	('MV','Maldiven',126),
	('MW','Malawi',124),
	('MX','Mexiko',135),
	('MY','Malaysia',125),
	('MZ','Mosambik',143),
	('NA','Namibia',145),
	('NC','Neukaledonien',148),
	('NE','Niger',154),
	('NF','Norfolkinsel',157),
	('NG','Nigeria',153),
	('NI','Nicaragua',150),
	('NL','Niederlande',151),
	('NO','Norwegen',158),
	('NP','Nepal',147),
	('NR','Nauru',146),
	('NU','Niue',155),
	('NZ','Neuseeland',149),
	('OM','Oman',160),
	('PA','Panama',164),
	('PE','Peru',167),
	('PF','FranzÌ¦sisch-Polynesien',61),
	('PG','Papua-Neuguinea',165),
	('PH','Philippinen',168),
	('PK','Pakistan',161),
	('PL','Polen',170),
	('PM','St. Pierre/Miquelon',200),
	('PN','Pitcairninseln',169),
	('PR','Puerto Rico',172),
	('PS','Palestina',163),
	('PT','Portugal',171),
	('PW','Palau',162),
	('PY','Paraguay',166),
	('QA','Qatar',173),
	('RE','RÌ©union',177),
	('RO','RumÌ_nien',175),
	('RS','Serbien',185),
	('RU','Russland',176),
	('RW','Ruanda',174),
	('SA','Saudi-Arabien',182),
	('SB','Salomonen',178),
	('SC','Seychellen',186),
	('SD','Sudan',202),
	('SE','Schweden',183),
	('SG','Singapur',189),
	('SH','St. Helena',196),
	('SI','Slowenien',191),
	('SJ','Svalbard/Jan Mayen',204),
	('SK','Slowakische Republik',190),
	('SL','Sierra Leone',187),
	('SM','San Marino',181),
	('SN','Senegal',184),
	('SO','Somalia',192),
	('SR','Surinam',203),
	('ST','SÌ£o TomÌ©/PrÌ_ncipe',207),
	('SV','El Salvador',52),
	('SY','Syrien',206),
	('SZ','Swasiland',205),
	('TC','Turks- und Caicosinseln',224),
	('TD','Tschad',220),
	('TF','FranzÌ¦sische SÌ_dpolarterritorien',62),
	('TG','Togo',216),
	('TH','Thailand',214),
	('TJ','Tadschikistan',211),
	('TK','Tokelau',217),
	('TL','Timor-Leste',215),
	('TM','Turkmenistan',223),
	('TN','Tunisien',222),
	('TO','Tonga',218),
	('TR','TÌ_rkei',226),
	('TT','Trinidad und Tobago',219),
	('TV','Tuvalu',225),
	('TW','Taiwan',212),
	('TZ','Tansania',213),
	('UA','Ukraine',228),
	('UG','Uganda',227),
	('UM','United States Minor Islands',230),
	('US','USA',232),
	('UY','Uruguay',231),
	('UZ','Usbekistan',233),
	('VA','Vatikanstadt',235),
	('VC','St. Vincent/Die Grenadinen',201),
	('VE','Venezuela',236),
	('VG','Jungferninseln  Britische',99),
	('VI','Jungferninseln  Amerikanische',98),
	('VN','Vietnam',238),
	('VU','Vanuatu',234),
	('WF','Wallis/Futuna',239),
	('WS','Samoa',180),
	('YE','Jemen',95),
	('YT','Mayotte',133),
	('ZA','SÌ_dafrika',208),
	('ZM','Sambia',179),
	('ZW','Simbabwe',188);

/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table events
# ------------------------------------------------------------

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('webinar','conference','partner','training') NOT NULL DEFAULT 'webinar',
  `title` varchar(255) NOT NULL DEFAULT '',
  `subtitle` varchar(255) DEFAULT NULL,
  `description` text,
  `location` varchar(255) DEFAULT NULL,
  `link` text,
  `thumbnail` varchar(255) DEFAULT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime DEFAULT NULL,
  `use_time` tinyint(1) NOT NULL DEFAULT '0',
  `seats` int(10) unsigned DEFAULT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table leads
# ------------------------------------------------------------

DROP TABLE IF EXISTS `leads`;

CREATE TABLE `leads` (
  `id` int(10) unsigned NOT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `campaign_id` int(10) unsigned DEFAULT NULL,
  `newsletter` tinyint(1) NOT NULL DEFAULT '0',
  `inquiry_ip` varchar(20) DEFAULT NULL,
  `inquiry_date` datetime NOT NULL,
  `contact_date` datetime DEFAULT NULL,
  `downloaded` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk-campaign-leads` (`campaign_id`),
  CONSTRAINT `fk-campaign-leads` FOREIGN KEY (`campaign_id`) REFERENCES `campaigns` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-user-lead` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table menus
# ------------------------------------------------------------

DROP TABLE IF EXISTS `menus`;

CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `campaign_id` int(10) unsigned DEFAULT NULL,
  `role` enum('public','admin','member') NOT NULL DEFAULT 'public',
  `type` enum('main','submenu','subheader','footer','hidden') NOT NULL DEFAULT 'main',
  `title` varchar(55) NOT NULL,
  `url` text NOT NULL,
  `classes` varchar(255) DEFAULT NULL,
  `section` varchar(55) DEFAULT NULL,
  `controller` varchar(55) DEFAULT NULL,
  `method` varchar(55) NOT NULL DEFAULT 'index',
  `pagetitle` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `banner_title` varchar(255) DEFAULT NULL,
  `banner_subtitle` varchar(255) DEFAULT NULL,
  `banner_x` mediumint(4) DEFAULT NULL,
  `banner_y` mediumint(4) DEFAULT NULL,
  `title_width` mediumint(4) DEFAULT NULL,
  `title_color` varchar(7) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(2) DEFAULT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk-parent-menus` (`parent_id`),
  KEY `fk-campaign-menus` (`campaign_id`),
  CONSTRAINT `fk-campaign-menus` FOREIGN KEY (`campaign_id`) REFERENCES `campaigns` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-menu-menus` FOREIGN KEY (`parent_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;

INSERT INTO `menus` (`id`, `parent_id`, `campaign_id`, `role`, `type`, `title`, `url`, `classes`, `section`, `controller`, `method`, `pagetitle`, `subtitle`, `keywords`, `banner`, `banner_title`, `banner_subtitle`, `banner_x`, `banner_y`, `title_width`, `title_color`, `order`, `disabled`)
VALUES
	(1,NULL,NULL,'public','main','Produkte &amp; Lösungen','/losungen','dropdown','public','losungen','index','Matrix42 Produkte &amp; Lösungen','','','sub-banner-woman.jpg','ganzheitliches workplace','',NULL,NULL,NULL,NULL,1,0),
	(2,NULL,NULL,'public','main','Über','/uber','dropdown','public','uber','index',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,0),
	(3,NULL,NULL,'public','main','Zum Kauf','/kaufen','','public','kaufen','index','So kaufen Sie Matrix42 Produkte und Dienstleistungen','Wie Matrix42 Produkte und Lösungen, indem Sie uns einen Partner zu finden oder Händler kaufen.',NULL,'sub-banner-woman.jpg','heute beginnen','Kauf Matrix42 Produkte und Lösungen',NULL,NULL,NULL,NULL,3,0),
	(4,1,NULL,'public','submenu','Bring Your Own Device (BYOD)','/losungen/byod',NULL,'public','losungen','byod','Bring Your Own Device','Lassen Sie Ihre Mitarbeiter ihre eigenen Geräte mitbringen gleich bleibender Sicherheit. Eine Initiative BYOD-Management-Lösung.','BYOD, mobiler Arbeitsplatz, persönliche Geräte, mobile Geräte, mobile Arbeitswelt','sub-banner-byod.jpg','bringen sie Ihr eigenes gerät?','Kein Problem, der Verwaltung des gesamten Lebenszyklus für mobile Geräte',60,35,600,NULL,1,0),
	(5,1,NULL,'public','submenu','Desktop Virtualization','/losungen/desktop_virtualization',NULL,'public','losungen','desktop_virtualization','Desktop Virtualization','Workplace Management, Service Management und Client Lifecycle Management mit Matrix42',NULL,'sub-banner-virtualization.jpg','virtual workplace','Workplace Management, Service Management und Client Lifecycle Management mit Matrix42',100,25,500,NULL,2,0),
	(6,1,NULL,'public','submenu','Endpoint Management','/losungen/endpoint_management',NULL,'public','losungen','endpoint_management','Endpoint Management','Volle Integration und Automatisierung aller IT Management Prozesse',NULL,'sub-banner-integration.jpg','full integration','Volle Integration und Automatisierung aller IT Management Prozesse',100,25,500,NULL,3,0),
	(7,1,5,'public','submenu','Asset Management (Compliance)','/losungen/compliance',NULL,'public','losungen','compliance','Compliance with Matrix42','Volle Kontrolle über alle IT-Assets, Lizenzen und Verträge','compliance, software compliance','sub-banner-compliance.jpg','compliance','Volle Kontrolle über alle IT-Assets, Lizenzen und Verträge',100,25,500,'#ffffff',4,0),
	(8,1,3,'public','submenu','Windows 7 Migration','/losungen/windows_7_migration',NULL,'public','losungen','windows_7_migration','Windows 7 Migration','Windows 7 Migration:\nEinfach und zuverlässig.','window7 migration, windows upgrade, windows xp business','sub-banner-windows7.jpg','windows 7 migration','Windows 7 Migration:\nEinfach und zuverlässig.',60,35,600,'#ffffff',5,0);

/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table notes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `notes`;

CREATE TABLE `notes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `author_id` int(10) unsigned NOT NULL,
  `parent_id` int(10) unsigned DEFAULT NULL COMMENT 'Parent note_id',
  `type` enum('general','sales','response','inquiry') NOT NULL DEFAULT 'general',
  `note` text NOT NULL,
  `note_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk-user-notes` (`user_id`),
  KEY `fk-author-notes` (`author_id`),
  KEY `fk-parent-notes` (`parent_id`),
  CONSTRAINT `fk-user-notes` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-author-notes` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-parent-notes` FOREIGN KEY (`parent_id`) REFERENCES `notes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table partners
# ------------------------------------------------------------

DROP TABLE IF EXISTS `partners`;

CREATE TABLE `partners` (
  `id` int(10) unsigned NOT NULL,
  `company_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk-company-partners` (`company_id`),
  CONSTRAINT `fk-company-partners` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  CONSTRAINT `fk-user-partner` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;

INSERT INTO `partners` (`id`, `company_id`)
VALUES
	(2,1),
	(3,2),
	(4,3),
	(5,4);

/*!40000 ALTER TABLE `partners` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table phones
# ------------------------------------------------------------

DROP TABLE IF EXISTS `phones`;

CREATE TABLE `phones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('primary','alternate','mobile') DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `number` varchar(18) NOT NULL DEFAULT '',
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk-user-phones` (`user_id`),
  CONSTRAINT `fk-user-phones` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table press_releases
# ------------------------------------------------------------

DROP TABLE IF EXISTS `press_releases`;

CREATE TABLE `press_releases` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('release','award') NOT NULL DEFAULT 'release',
  `title` varchar(255) NOT NULL DEFAULT '',
  `subtitle` varchar(255) DEFAULT NULL,
  `content` text,
  `link` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(85) DEFAULT NULL,
  `release_date` date NOT NULL,
  `archive_date` date DEFAULT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `archive` tinyint(1) NOT NULL DEFAULT '0',
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table states
# ------------------------------------------------------------

DROP TABLE IF EXISTS `states`;

CREATE TABLE `states` (
  `id` char(3) NOT NULL DEFAULT '',
  `country_id` varchar(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk-country-states` (`country_id`),
  CONSTRAINT `fk-country-states` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;

INSERT INTO `states` (`id`, `country_id`, `name`)
VALUES
	('AG','CH','Aargau'),
	('AI','CH','Appenzell Innerrhoden'),
	('AR','CH','Appenzell Ausserrhoden'),
	('AT1','AT','Burgenland'),
	('AT2','AT','KŠrnten'),
	('AT3','AT','Niederšsterreich'),
	('AT4','AT','Oberšsterreich'),
	('AT5','AT','Salzburg'),
	('AT6','AT','Steiermark'),
	('AT7','AT','Tirol'),
	('AT8','AT','Vorarlberg'),
	('AT9','AT','Wien'),
	('BB','DE','Brandenburg'),
	('BE','DE','Berlin'),
	('BEC','CH','Bern'),
	('BL','CH','Basel-Land'),
	('BS','CH','Basel-Stadt'),
	('BW','DE','Baden-WŸrttemberg'),
	('BY','DE','Bayern'),
	('FR','CH','Freiburg'),
	('GE','CH','Genf'),
	('GL','CH','Glarus'),
	('GR','CH','GraubŸnden'),
	('HB','DE','Bremen'),
	('HE','DE','Hessen'),
	('HH','DE','Hamburg'),
	('JU','CH','Jura'),
	('LU','CH','Luzern'),
	('MV','DE','Mecklenburg-Vorpommern'),
	('NE','CH','Neuenburg'),
	('NI','DE','Niedersachsen'),
	('NW','DE','Nordrhein-Westfalen'),
	('NWC','CH','Nidwalden'),
	('OW','CH','Obwalden'),
	('RP','DE','Rheinland-Pfalz'),
	('SG','CH','St. Gallen'),
	('SH','DE','Schleswig-Holstein'),
	('SHC','CH','Schaffhausen'),
	('SL','DE','Saarland'),
	('SN','DE','Sachsen'),
	('SO','CH','Solothurn'),
	('ST','DE','Sachsen-Anhalt'),
	('SZ','CH','Schwyz'),
	('TG','CH','Thurgau'),
	('TH','DE','ThŸringen'),
	('TI','CH','Tessin'),
	('UR','CH','Uri'),
	('VD','CH','Waadt'),
	('VS','CH','Wallis'),
	('ZG','CH','Zug'),
	('ZH','CH','ZŸrich');

/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL DEFAULT '',
  `first` varchar(255) NOT NULL DEFAULT '',
  `initial` char(2) DEFAULT NULL,
  `last` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL DEFAULT '',
  `temp_password` char(10) DEFAULT NULL,
  `temp_password_date` datetime DEFAULT NULL,
  `role` enum('lead','partner','client','employee','admin','jedi') NOT NULL DEFAULT 'lead',
  `logins` int(11) NOT NULL DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_activity_date` datetime DEFAULT NULL,
  `user_notes` text,
  `token` varchar(255) DEFAULT NULL,
  `email_confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `last_ip` varchar(20) DEFAULT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unq_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `email`, `first`, `initial`, `last`, `password`, `temp_password`, `temp_password_date`, `role`, `logins`, `last_login`, `registration_date`, `last_activity_date`, `user_notes`, `token`, `email_confirmed`, `last_ip`, `disabled`)
VALUES
	(1,'jeff.neslen@matrix42.com','Jeff',NULL,'Neslen','257d65817a867489210bd292c83bc63dfa061147e960f925c7',NULL,NULL,'jedi',0,NULL,'2012-05-04 15:55:36',NULL,NULL,NULL,1,NULL,0),
	(2,'info@microsoft.com','Micro',NULL,'Soft','257d65817a867489210bd292c83bc63dfa061147e960f925c7',NULL,NULL,'partner',0,NULL,'2012-06-04 14:07:47',NULL,NULL,NULL,0,NULL,0),
	(3,'info@citrix.com','Citrix',NULL,'Ready','257d65817a867489210bd292c83bc63dfa061147e960f925c7',NULL,NULL,'partner',0,NULL,'2012-06-04 14:08:27',NULL,NULL,NULL,0,NULL,0),
	(4,'info@gartner.com','Gartner',NULL,'MagicQ','257d65817a867489210bd292c83bc63dfa061147e960f925c7',NULL,NULL,'partner',0,NULL,'2012-06-04 14:09:53',NULL,NULL,NULL,0,NULL,0),
	(5,'info@servicenow.com','Service',NULL,'Now','257d65817a867489210bd292c83bc63dfa061147e960f925c7',NULL,NULL,'partner',0,NULL,'2012-06-04 14:10:27',NULL,NULL,NULL,0,NULL,0);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

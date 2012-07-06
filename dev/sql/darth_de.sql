# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.21)
# Database: darth_de
# Generation Time: 2012-07-06 20:04:51 +0000
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
  `user_id` int(10) unsigned DEFAULT NULL,
  `care_of` varchar(34) DEFAULT NULL,
  `address1` varchar(85) DEFAULT NULL,
  `address2` varchar(85) DEFAULT NULL,
  `city` varchar(85) DEFAULT NULL,
  `state_id` char(3) DEFAULT '',
  `province` varchar(255) DEFAULT '',
  `postal` varchar(10) DEFAULT NULL,
  `country_id` char(2) NOT NULL DEFAULT 'US',
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk-country-addresses` (`country_id`),
  KEY `fk-state-addresses` (`state_id`),
  KEY `fk-user-addresses` (`user_id`),
  CONSTRAINT `fk-country-addresses` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-state-addresses` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`),
  CONSTRAINT `fk-user-addresses` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
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
  `website` varchar(255) DEFAULT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk-address-company` (`address_id`),
  KEY `fk-phone-company` (`phone_id`),
  CONSTRAINT `fk-address-company` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-phone-company` FOREIGN KEY (`phone_id`) REFERENCES `phones` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



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
  `language` tinyint(1) NOT NULL DEFAULT '1',
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `components` WRITE;
/*!40000 ALTER TABLE `components` DISABLE KEYS */;

INSERT INTO `components` (`id`, `type`, `name`, `description`, `content`, `model`, `directory`, `controller`, `method`, `view`, `vars`, `language`, `disabled`)
VALUES
	(1,'method','%%leadform%%','Lead Capture Körperform',NULL,NULL,NULL,'public','lead_form',NULL,NULL,1,0),
	(2,'content','%%getstartedpage%%','Ein gut Get Started, dass ein Bildlauf nach leadform auf der gleichen Seite','<div class=\"well margin-right\">\n	<div class=\"left\">\n		<h3 class=\"no-margin\">Matrix42 befähigt Sie, Ihre IT-Anforderungen selbst zu kontrollieren.</h3>\n		<h4 class=\"no-margin\">Beginnen Sie jetzt mit der perfekten IT-Lösung!</h4>\n	</div>\n	<a href=\"/get_started\" class=\"btn btn-info btn-large right margin-right\">Beginnen Sie noch heute!</a>\n	<div class=\"clearfix\"></div>\n</div><!-- well -->',NULL,NULL,NULL,NULL,NULL,NULL,1,0),
	(3,'method','%%sidebarsupport%%','Das Support-und Kontaktinformationen auch für die Sidebar',NULL,NULL,NULL,'public','side_support',NULL,NULL,1,0),
	(4,'method','%%awardslist%%','Preis Liste Tabelle',NULL,NULL,'public','press','awards',NULL,NULL,1,0),
	(5,'method','%%sidebarleadform%%','Lead Capture Formular für Sidebar',NULL,NULL,NULL,'public','side_lead_form',NULL,NULL,1,0),
	(6,'view','%%sidebarsuccessstories%%','Sidebar Success Stories',NULL,NULL,NULL,NULL,NULL,'sidebar/success_stories',NULL,1,0),
	(7,'method','%%resellerlist%%','Reseller Liste Tabelle',NULL,NULL,'public','partners','resellers',NULL,NULL,1,0);

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

LOCK TABLES `contents` WRITE;
/*!40000 ALTER TABLE `contents` DISABLE KEYS */;

INSERT INTO `contents` (`id`, `menu_id`, `type`, `content`, `elements`)
VALUES
	(1,2,'main','<div class=\"padded\">\n	<h3 class=\"emphasis\">Matrix42. Empowering the Dynamic Workplace.</h3>\n	<p>Matrix42 ist führender Anbieter für Workplace Management Lösungen. Matrix42 Workplace Management ermöglicht das nahtlose Management von physischen, virtuellen und mobilen Umgebungen. Es verbindet Client Lifecycle, Cloud, SaaS, Virtualisierung, Mobile Device Management und Service Management zu einer ganzheitlichen Lösung, mit der Anwender transparenten Zugang zu ihren Daten und Services haben - unabhängig von Ort, Zeit und Endgerät.</p>\n	<p>Anwender können Services in einem zentralen Marktplatz auswählen und bestellen. Entsprechend der jeweiligen Unternehmensrichtlinien können ihnen dann nach Bedarf die benötigten Dienste bereitgestellt und auch verrechnet werden. Mit dieser Lösung sind einerseits die Anwender autonom, andererseits hat die IT-Abteilung nach wie vor die Kontrolle und die Möglichkeit der Automatisierung. Matrix42 Workplace Management erhöht die Produktivität der Anwender, steigert die Effizienz der IT und ermöglicht die Nutzung neuer Technologien wie Cloud Computing und Virtualisierung.</p>\n	<p>Gegründet 1992 ist Matrix42 mit Standorten in der Nähe von Frankfurt und Salt Lake City (USA) seit 20 Jahren im dynamischen IT-Markt aktiv. Mit den Matrix42 Lösungen werden mehr als 6 Millionen Clients bei über 2.500 Kunden weltweit gemanaged. Marktführende Unternehmen wie Infineon, Magna und Puma sowie Integratoren wie T-Systems, Raiffeisen IT, msg systems und Bechtle vertrauen auf Matrix42. Seit Anfang 2008 ist Matrix42 ein Unternehmen der Asseco-Gruppe. Mit über 8.000 Mitarbeitern und einer Marktkapitalisierung von rund 1,2 Mrd. Euro zählt Asseco zu den größten europäischen Software-Konzernen.</p>\n	%%getstartedpage%%\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#awards\" data-toggle=\"tab\">Auszeichnungen</a></li>\n			<li><a href=\"#management\" data-toggle=\"tab\">Management</a></li>\n			<li><a href=\"#locations\" data-toggle=\"tab\">Standorte</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"awards\">\n					<h3 class=\"emphasis\">Auszeichnungen</h3>\n					<p>Dank ihrer hohen Qualität erhalten unsere Produkte und Serviceleistungen immer wieder internationale Auszeichnung und Zertifikate – wir sind stolz darauf!</p>\n					%%awardslist%%\n				</div><!-- awards -->\n				<div class=\"tab-pane padded-content\" id=\"management\">\n					<h3 class=\"emphasis\">Management Team</h3>\n					<table class=\"table\">\n						<tr>\n							<td><img src=\"/assets/img/thumbnails/management/herbert_uhl.jpg\" alt=\"Herber Uhl (Chairman, CEO)\" /></td>\n							<td>\n								<h4 class=\"secondary\">Herbert Uhl (Chairman, CEO)</h4>\n								<p>Als Vorstandsvorsitzender von Matrix42 ist Herbert Uhl verantwortlich für die Unternehmensvision und -strategie sowie ein nachhaltiges profitables Wachstum. Er kam im Zuge der Fusion von Matrix42 AG und update4u Software AG im März 2009 ins Unternehmen. Bei update4u war Uhl seit 2000 zuständig für die Unternehmensstrategie und die Vertriebsorganisation und konnte in dieser Zeit dramatische Wachstumsraten vorlegen. Vor seinem Wechsel zu update4u gründete Uhl im Jahr 1992 die Softwarefirma Prodacta; sie ging 1999 an die Börse.</p>\n								<p>Der aus dem Rheinland stammende Herbert Uhl zog kürzlich nach USA in die Region Salt Lake City im Bundesstaat Utah; dort will er das Wachstum von Matrix42 im nordamerikanischen Markt vorantreiben.</p>\n							</td>\n						</tr>\n						<tr>\n							<td><img src=\"/assets/img/thumbnails/management/jochen_jaser.jpg\" alt=\"Jochen Jaser (CTO)\" /></td>\n							<td>\n								<h4 class=\"secondary\">Jochen Jaser (CTO)</h4>\n								<p>Jochen Jaser ist seit April 2009 als Chief Technology Officer bei Matrix42 für den Ausbau und die Weiterentwicklung der beiden Produktlinien IT Service Management und Systems Management zuständig.</p>\n								<p>Eine aufregende Herausforderung lockte Jochen Jaser im Jahr 2004 zum Softwarehersteller update4u Software AG, wo er ab 2007 als Mitglied der Geschäftsleitung für Produkte und Services verantwortlich zeichnete. Jaser kann auf 15 Jahre Produkt- und Projektmanagement-Erfahrung in internationalen Unternehmen zurückblicken. Seine Arbeit geht er mit derselben Leidenschaft an wie seine sportlichen Aktivitäten: Segeln, Tauchen und Snowboardfahren inspirieren ihn zu neuen Ideen.</p>\n							</td>\n						</tr>\n						<tr>\n							<td><img src=\"/assets/img/thumbnails/management/michael_schmidt.jpg\" alt=\"Michael Schmidt (CFO)\" /></td>\n							<td>\n								<h4 class=\"secondary\">Michael Schmidt (CFO)</h4>\n								<p>Michael Schmidt ist als CFO der Matrix42 für Finance und Administration verantwortlich.</p>\n								<p>Als kaufmännischer Leiter begann der aus Hessen stammende Michael Schmidt im Juli 2011 seine Laufbahn bei Matrix42. Seit Anfang 2012 gehört er dem Vorstand an und blickt auf über 20 Jahre Finance Erfahrung in internationalen Unternehmen zurück. Entspannung findet er bei seiner Familie, dem Ausdauersport und dem Segeln.</p>\n							</td>\n						</tr>\n						<tr>\n							<td><img src=\"/assets/img/thumbnails/management/herbert_schoenle.jpg\" alt=\"Herbert Schoenle (VP Sales)\" /></td>\n							<td>\n								<h4 class=\"secondary\">Herbert Schoenle (VP Sales)</h4>\n								<p>Seit August 2011 verantwortet Herbert Schönle den Vertrieb und Regional Marketing EMEA der Matrix42. Der gebürtige Oberschwabe ist seit 20 Jahren im Softwarevertrieb tätig und bringt nun seine Erfahrungen in die Matrix42 AG ein. In den vergangenen 15 Jahren war Herbert Schönle bei PTC maßgeblich für den Aufbau einer profitablen Vertriebsorganisation in Central Europa verantwortlich. In seiner neuen Aufgabe bei Matrix42 wird er die weitere Expansion in Europa vorantreiben. Seine Freizeit verbringt er am liebsten zuhause mit seiner Familie und am nahen Bodensee sowie in den Alpen.</p>\n							</td>\n						</tr>\n						<tr>\n							<td><img src=\"/assets/img/thumbnails/management/oliver_bendig.jpg\" alt=\"Oliver Bendig (VP of Product Management)\" /></td>\n							<td>\n								<h4 class=\"secondary\">Oliver Bendig (VP of Product Management)</h4>\n								<p>Als VP Product Management ist Oliver Bendig für die Produktroadmap des Matrix42 Produktportfolios verantwortlich. Neben der Führung des Matrix42 Product Management Teams berät er Kunden im Bereich IT Service Management und Infrastructure Management mit einem Schwerpunkt auf Cloud, Virtualisierung und Mobile Device Management. Oliver Bendig greift auf mehr als 10 Jahre Erfahrung im Service Management und Infrastructure Management zurück. Bevor er 2009 zur Matrix42 kam, war er mehrere Jahre für das Product Management bei Enteo Software und FrontRange Solutions verantwortlich. Nach seinem Studium der Wirtschaftsinformatik (BA) und des Bachelor of Arts (B.A.) absolvierte Herr Bendig den Master of Science in Computer Science (M.Sc) an der Fachhochschule Karlsruhe.</p>\n							</td>\n						</tr>\n						<tr>\n							<td><img src=\"/assets/img/thumbnails/management/markus_loeb.jpg\" alt=\"Markus Loeb (Vice President Customer Services, EMEA)\" /></td>\n							<td>\n								<h4 class=\"secondary\">Markus Loeb (Vice President Customer Services, EMEA)</h4>\n								<p>Als Vice President Customer Services für EMEA verantwortet Markus Loeb die Bereiche Professional Services, Product Competence, Product Customization, Matrix42 Academy and SaaS. Mit seinem Team aus Projektleitern, Solution Architekten und Consultants sorgt er für eine professionelle Implementierung der Matrix42 Lösungen. Mit dem Produkt Competence Team sorgt er für einen kundenorientierten Support über alle Kanäle. Markus Loeb bringt für diese verantwortungsvolle Aufgabe mehr als 15 Jahre Beratungs- und Führungserfahrung aus unterschiedlichen Bereichen und Industrien internationaler Unternehmen mit</p>\n							</td>\n						</tr>\n						<tr>\n							<td><img src=\"/assets/img/thumbnails/management/alex_ferguson.jpg\" alt=\"Alex Ferguson (VP, Services & Support – Americas)\" /></td>\n							<td>\n								<h4 class=\"secondary\">Alex Ferguson (VP, Services & Support – Americas)</h4>\n								<p>Als Vice President Services & Support für Gesamtamerika verantwortet Alex Ferguson bei Matrix42 die Bereiche Weiterbildung, Professional Services und Kundenbetreuung mit dem Ziel, für die Kunden den Nutzen und Mehrwert ihrer Matrix42 Lösungen zu maximieren. Alex Ferguson kann auf über 15 Jahre Erfahrung im Aufbau von lösungsorientierten Serviceorganisationen zurückblicken. Vor seinem Wechsel zu Matrix42 arbeitete er in diversen Führungspositionen bei Novell, Inc., Symantec und BMC Software</p>\n							</td>\n						</tr>\n					</table>\n				</div><!-- management -->\n				<div class=\"tab-pane padded-content\" id=\"locations\">\n					<div class=\"span8\">\n						<h2 class=\"emphasis\">Matrix42 Standorte</h2>\n						<h3 class=\"secondary border-bottom\">Europa</h3>\n					</div>\n					<div class=\"span5\">\n						<h5 class=\"emphasis\">Zentrale</h5>\n						<p>\n							<span class=\"block\">Dornhofstr. 44-46</span>\n							<span class=\"block\">63263 Neu-Isenburg</span>\n							<span class=\"block\">Germany</span>\n							<span class=\"block\">Phone: +49 (0) 61 02 - 816-0</span>\n							<span class=\"block\">Fax: +49 (0) 61 02 - 816-100</span>\n						</p>\n						<p>mail: <a href=\"mailto:info@matrix42.de\">info@matrix42.de</a></p>\n					</div><!-- span5 -->\n					<div class=\"span5\">\n						<h5 class=\"emphasis\">Geschäftsstelle Karlsruhe</h5>\n						<p>\n							<span class=\"block\">Amalienbadstr. 41 / Bau 54</span>\n							<span class=\"block\">76227 Karlsruhe</span>\n							<span class=\"block\">Phone: +49 (721) 91432-300</span>\n							<span class=\"block\">Fax: +49 (0)721 91432-499 </span>\n						</p>\n					</div><!-- span5 -->\n					<div class=\"span8\"></div>\n					<div class=\"span5\">\n						<h5 class=\"emphasis\">Österreich</h5>\n						<p>\n							<span class=\"block\">Kontakt: Daniela Reichel</span>\n							<span class=\"block\">Phone: +49 (0) 6102 816 216</span>\n						</p>\n						<p>mail: <a href=\"mailto:info@matrix42.de\">info@matrix42.de</a></p>\n					</div><!-- span5 -->\n					<div class=\"span5\">\n						<h5 class=\"emphasis\">Schweiz</h5>\n						<p>\n							<span class=\"block\">Kontakt: Nadia Bischof</span>\n							<span class=\"block\">Postfach 2094</span>\n							<span class=\"block\">CH-8401 Winterthur</span>\n							<span class=\"block\">Schweiz</span>\n							<span class=\"block\">Phone: +41 76 346 31 62</span>\n							<span class=\"block\">Fax: +41 52 535 99 36</span>\n						</p>\n						<p>mail: <a href=\"mailto:switzerland@matrix42.com\">switzerland@matrix42.com</a></p>\n					</div><!-- span5 -->\n					<div class=\"span8\">\n						<h3 class=\"secondary border-bottom\">United Kingdom</h3>\n						<h5 class=\"emphasis\">Leicestershire Office</h5>\n						<p>\n							<span class=\"block\">Contact: David Messenger</span>\n							<span class=\"block\">22 Scalford Road</span>\n							<span class=\"block\">Eastwell</span>\n							<span class=\"block\">Leicestershire</span>\n							<span class=\"block\">LE144EJ</span>\n							<span class=\"block\">United Kingdom</span>\n							<span class=\"block\">Phone: +44 (0)1949.861.049</span>\n							<span class=\"block\">Mobile: +44 (0)7787.255.422</span>\n						</p>\n						<p>mail: <a href=\"mailto:david.messenger@matrix42.com\">david.messenger@matrix42.com</a></p>\n					</div>\n					<div class=\"span8\">\n						<h3 class=\"secondary border-bottom\">USA</h3>\n						<h4 class=\"emphasis\">Zentrale USA</h4>\n						<p>\n							<span class=\"block\">3400 North Ashton Blvd</span>\n							<span class=\"block\">Suite 110</span>\n							<span class=\"block\">Lehi, Utah 84043</span>\n							<span class=\"block\">Phone: +1.801.653.3700</span>\n							<span class=\"block\">Fax: +1.800.848.5410</span>\n						</p>\n						<p>mail: <a href=\"mailto:info@matrix42.de\">info@matrix42.de</a></p>\n					</div><!-- span8 -->\n					<div class=\"span5\">\n						<h5 class=\"emphasis\">East coast office</h5>\n						<p>\n							<span class=\"block\">53 Perimeter Center East</span>\n							<span class=\"block\">Suite 200</span>\n							<span class=\"block\">Atlanta, Georgia 30346</span>\n							<span class=\"block\">Phone: +1.888.MS42.USA</span>\n						</p>\n					</div><!-- span5 -->\n					<div class=\"span5\">\n						<h5 class=\"emphasis\">Silicon Valley office</h5>\n						<p>\n							<span class=\"block\">901 Campisi Way</span>\n							<span class=\"block\">Suite 150</span>\n							<span class=\"block\">Campbell, California 95008</span>\n						</p>\n					</div><!-- span5 -->\n				</div><!-- locations -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(2,3,'main','%%leadform%%\n<div class=\"space\"></div>\n<div class=\"padded\">\n	<h2 class=\"secondary\">Alternativ können Sie aus der Liste unserer Wiederverkäufer unten wählen Sie:</h2>\n	%%resellerlist%%\n</div><!-- padded -->',NULL),
	(3,4,'main','<div class=\"padded\">\n	<h4 class=\"emphasis\">Sicherung des mobilen Unternehmens</h4>\n	<p>Die vielleicht größte Bedrohung für die Datensicherheit eines Unternehmens besteht heutzutage in der Verbreitung von Mobilgeräten wie Smartphones und Tablets, die an das Unternehmensnetzwerk angeschlossen sind. IT befindet sich in einem Zwiespalt. Einerseits geht es darum, die Sicherheit und Integrität von Unternehmensdaten zu gewährleisten und andererseits erwarten die Mitarbeiter, dass IT die Verwendung beliebiger Geräte, ganz gleich, ob persönlich oder vom Unternehmen bereitgestellt, für den Zugriff auf Unternehmensnetzwerke, Anwendungen und Informationen jederzeit und überall zulässt. Das Mobile Device Management (MDM) ist die einzige Möglichkeit, um diesen gegensätzlichen Anforderungen gerecht zu werden.</p>\n	<p>Matrix42 bietet ein benutzerfreundliches unternehmensweites Mobile Device und WLAN-Management, um die Mobilgeräte eines Unternehmens zu verfolgen, zu überwachen und zu verwalten. Matrix42 stellt eine Echtzeit-Ansicht der gesamten Flotte aus Mobilgeräten bereit und versetzt Unternehmen somit in die Lage, die Produktivität ihrer mobilen Belegschaft und den ROI der mobilen Anwendungen zu steigern.</p>\n	%%getstartedpage%%\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#byod\" data-toggle=\"tab\">BYOD</a></li>\n			<li><a href=\"#keys\" data-toggle=\"tab\">Entscheidende Merkmale</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"byod\">\n					<h3 class=\"emphasis\">BYOD zu Ihren Konditionen</h3>\n					<p>Die meisten Unternehmen haben die BYOD-Richtlinie (Bring your own Device) bereits übernommen oder planen, diese zu übernehmen. Unternehmen können somit Geld sparen, indem sie einige der Hardware-Kosten auf die Mitarbeiter abwälzen, die Zufriedenheit und Produktivität der Mitarbeiter steigern und mit dem Ziel der Sicherheit eine Partnerschaft mit Mitarbeitern aufbauen, damit kein Grund mehr besteht, den IT-Prozess zu umgehen. Wesentlich für eine erfolgreiche BYOD-Richtlinie ist die Nutzung der richtigen Tools, die Mitarbeitern eine größere Auswahl bei gleichzeitiger Sicherheitswahrung mithilfe durchsetzbarer Unternehmensrichtlinien geben.</p>\n					<p>Das Matrix42 <strong>Mobile Workplace Management</strong> erleichtert den Start eines BYOD-Programms, das die Anforderungen von Mitarbeitern und IT gleichzeitig erfüllt. Mitarbeiter können mithilfe ihrer bevorzugten Mobilgeräte das Netzwerk aufrufen, Support anfordern und Services erhalten, während IT die Kontrolle über alle Mobilgeräte des Unternehmens behält, besseren Service anbieten und die Kosten reduzieren kann.</p>\n					<p>Matrix42 ist das erste Unternehmen, das das MDM-Management mit dem <a href=\"/losungen/self_service\">ITSM (IT Service Management)</a> integriert, um Unternehmen eine bessere Übersicht und Kontrolle über ihre mobilen Assets und die Flexibilität zu geben, im Rahmen der BYOD-Richtlinie einen Self-Service für Mitarbeiter zu implementieren.  Anwender können ihre Geräte über den Service-Katalog des Unternehmens erwerben und selbst bereitstellen und haben Zugriff auf Management-Funktionen, wie z. B. den Gerätestandort und die Datenlöschung. Mithilfe einer iPhone App können Anwender den Service-Katalog leicht aufrufen, Bestellungen aufgeben und Helpdesk-Tickets öffnen.</p>\n					<p>Die Einbeziehung von Lizenz- und <a href=\"/losungen/compliance\">Asset-Management</a> zusätzlich zur Verfolgung der Software-Lizenzen, Assets und Verträge ermöglicht die Analyse der Arbeitsprofile des Endanwenders, um dessen bevorzugten Geräte, Apps und Services zu bewerten. IT-Administratoren können sicherstellen, dass alle an das Netzwerk angeschlossenen Mobilgeräte in den Bestand aufgenommen, gesichert und im Rahmen der Unternehmensrichtlinien verwaltet werden, ganz gleich, ob sie BYOD für die Mitarbeiter unterstützen oder ob die Geräte dem Unternehmen gehören.</p>\n					<p><span class=\"italics\">Das Mobile Workplace Management kann als alleinstehendes Produkt oder als Bestandteil des Physical Workplace Management und/oder des Virtual Workplace Management verwendet werden, um alle Assets am Arbeitsplatz über eine einzige Schnittstelle zu verwalten.</span></p>\n				</div><!-- benefits -->\n				<div class=\"tab-pane padded-content\" id=\"keys\">\n					<h3 class=\"emphasis\">Entscheidende Merkmale des Mobile Workplace Management</h3>\n					<ul class=\"list\">\n						<li><span class=\"bold emphasis\">Zentrale Oberfläche</span> zur Verwaltung des Lebenszyklus aller mobilen Geräte.</li>\n						<li><span class=\"bold emphasis\">Plattformübergreifende</span> Lösung zur Verwaltung von Apple iOS, Google Android, Blackberry, Symbian und Windows Mobile Geräten.</li>\n						<li><span class=\"bold emphasis\">Webbasierte</span> Konsole, die für PCs und Tablet-Browser optimiert ist.</li>\n						<li><span class=\"bold emphasis\">Äußerst skalierbar</span>, um eine unbegrenzte Anzahl an Geräten und mobilen Daten zu unterstützen.</li>\n						<li><span class=\"bold emphasis\">Die mehrinstanzenfähige Architektur</span> ermöglicht, dass eine Software-Instanz mehrere Organisationen oder Gruppen innerhalb eines großen Unternehmens unterstützt.</li>\n						<li><span class=\"bold emphasis\">Sicherer</span>, rollenbasierter Zugriff zur Differenzierung der Zugriffsprivilegien mithilfe von benutzerdefinierten Rollen.</li>\n						<li><span class=\"bold emphasis\">Unternehmens-App-Katalog</span> für die Verwaltung interner und öffentlicher Anwendungen auf Apple iOS und Android Geräten.</li>\n					</ul>\n				</div><!-- keys -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(4,5,'main','<div class=\"padded\">\n	<h3 class=\"emphasis\">Einfache und erschwingliche Desktop-Virtualisierung</h3>\n	<p>Während etwa drei Viertel der mittelständischen und großen Unternehmen virtuelle Desktops implementieren oder sich auf diese Implementierung vorbereiten, ist es für die meisten Unternehmen immer noch schwierig diesen Prozess weniger aufwändig und kosteneffektiver zu gestalten.  Die Ausführung einer hybriden physischen/virtuellen Umgebung führt zudem zu größerer Komplexität und größeren Herausforderungen bei der Verwaltung von Betriebssystemen, Anwendungen und Benutzereinstellungen.</p>\n	<p>Die Möglichkeit, Ressourcen mithilfe der VDI-Infrastruktur (Virtual Desktop Infrastructure) gemeinsam zu nutzen, kann letztlich zu Einsparungen führen, doch die erstmalige Einrichtung ist meist teuer, zeitaufwändig und kompliziert. Für Anwender kann der gesamte Bestellvorgang frustrierend sein. Matrix42 macht den Umstieg auf virtuelle Desktops und Anwendungen einfach und erschwinglich, dank eines automatisierten Prozesses zur Verwaltung, Verfolgung und Bereitstellung virtueller Desktops.</p>\n	<p>Matrix42 ist der einzige Anbieter, der alle drei Phasen des Desktop-Transformationsmodells von Citrix unterstützt, d. h. Unternehmen können die virtuelle Desktop-Bereitschaft bewerten, den Migrationsprozess automatisieren und die reibungslose Ausführung der virtuellen Umgebung sicherstellen.</p>\n	<p>Das Virtual Workplace Management von Matrix42 automatisiert das Management der Citrix Umgebungen durch die Installation, Aktualisierung und Wartung von Citrix XenServer, Citrix XenApp und Citrix XenDesktop Infrastrukturen. Es kann entweder allein als Standalone-Produkt für die Verwaltung der Desktop-Virtualisierung verwendet oder in das Physical Workplace Management und das Mobile Workplace Management integriert werden, um die gesamte Umgebung über eine einzige Schnittstelle zu verwalten.</p>\n	%%getstartedpage%%\n	<p>Matrix42 befähigt den Anwender und ermöglicht es IT, mithilfe der IT Service Management-Funktionen gleichzeitig die Kontrolle zu behalten, damit Anwender ihren virtuellen Desktop jederzeit über einen Service-Katalog anfordern und bereitstellen können. Für ServiceNow Kunden kann das Virtual Workplace Management mit dem ServiceNow Service-Katalog integriert werden. Diese Self-Service-Fähigkeiten verringern die Belastung der IT-Abteilungen enorm und eliminieren die Notwendigkeit für Anwender, darauf zu warten, bis der IT-Administrator auf einen Support-Antrag reagiert, was zu einer schnelleren Lösung führt.</p>\n	<p>Das komplett integrierte Lizenz- und <a href=\"/solutions/compliance\">Asset-Management</a> gewährleistet die vollständige Einhaltung der Compliance- und Governance-Richtlinien durch Verfolgung der Lizenzen, Assets und Verträge. Administratoren können detaillierte Berichte ausführen, um ihre virtuellen Desktops, Anwendungen und Streams zu verfolgen.</p>\n	<p>Unternehmen können jetzt endlich die Vorteile der Virtualisierung genießen, ohne all die Kosten und all den Ärger.</p>\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#features\" data-toggle=\"tab\">Merkmale und Vorteile</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"features\">\n					<h3 class=\"emphasis\">Entscheidende Merkmale des Virtual Workplace Management</h3>\n					<ul class=\"list\">\n						<li>Integriertes Test- und Change-Management für Master-Images und virtuelle Maschinen</li>\n						<li>Vereinfachtes Management und vereinfachte Betriebsprozesse für Citrix XenDesktop und XenApp</li>\n						<li>Installation, Aktualisierung und Außerbetriebnahme von Citrix XenServer, VMware vSphere/ESX und Microsoft Hyper-V</li>\n						<li>Installation, Aktualisierung und Außerbetriebnahme von Citrix XenApp Servern</li>\n						<li>Integrierte Wartungs-Zeitfenster für Citrix XenApp Server</li>\n						<li>Integriertes Verpackungszentrum für das XenApp Anwendungs-Publishing von Citrix</li>\n						<li>Endanwender-Self-Service für virtuelle Desktops und Anwendungen von Citrix</li>\n						<li>Lizenz- und Asset-Management für Citrix XenDesktop und Citrix XenApp</li>\n					</ul>\n				</div><!-- features -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(5,6,'main','<div class=\"padded\">\n	<h3 class=\"emphasis\">Rationalisierung gängiger IT-Prozesse</h3>\n	<p>Mit steigendem Unternehmenswachstum und der zunehmenden Diversifizierung der Anwender im Hinblick auf ihre Arbeitsumgebung und Systemanforderungen verbringen IT-Administratoren mehr Zeit mit gängigen IT-Prozessen und weniger Zeit mit strategischen Initiativen, die für das Unternehmen eine Wertsteigerung bedeuten. Allein die Ausstattung neuer Mitarbeiter, Implementierung von Betriebssystem-Patches, Aufrechterhaltung der Software-Lizenzen und die Fehlersuche bei Desktop- und Notebook-Problemen stellen einen erheblichen Zeitaufwand dar.</p>\n	<p>Matrix42 verfügt über mehr als 20 Jahre Erfahrung bei der Automatisierung gängiger IT-Prozesse, wie beispielsweise Software-Implementierungen und grundlegende Helpdesk-Services, um die Zeit und Kosten für die Bereitstellung und Verwaltung von Desktops und Notebooks auf ein Minimum zu reduzieren. Matrix42 macht die Verwaltung jeder Phase des Client-Lifecycle einfach - von der Bereitstellung bis zur Außerbetriebnahme.</p>\n	<p>Das Physical Workplace Management von Matrix42 ermöglicht die zentralisierte Verwaltung aller Desktops, Notebooks, Konfigurationen und Software-Assets im Unternehmen, die unter Windows, Mac und Linux laufen, und lässt sich auf einfache Weise in die bestehende IT-Infrastruktur integrieren. Administratoren können die Unternehmensrichtlinien kontinuierlich verwalten und durchsetzen und eine beständige Compliance sicherstellen.</p>\n	%%getstartedpage%%\n	<p>Das Matrix42 Endpoint Management kann mit dem IT Service Management eingesetzt werden: entweder über einen Service-Katalog und einen Service-Desk, der im Physical Workplace Management enthalten ist, oder durch Integration mit einer bereits bestehenden ServiceNow Lösung.  Die Anwender werden somit in die Lage versetzt, viele Helpdesk-Funktionen eigenständig und auf einfache Weise auszuführen, wie beispielsweise die Bereitstellung von Services, das Hinzufügen oder erneute Installieren von Software und die Wiederherstellung des Computersystems. Endanwender genießen somit schnelleren Service, es gehen weniger Anfragen beim Helpdesk ein, die gesamten Desktop-Management-Kosten werden reduziert und IT-Administratoren können mehr Zeit für strategische Projekte aufbringen.</p>\n	<p>Das komplett integrierte Lizenz- und <a href=\"/solutions/compliance\">Asset-Management</a> gewährleistet die vollständige Einhaltung der Compliance- und Governance-Richtlinien durch Verfolgung der Lizenzen, Assets und Verträge.</p>\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#features\" data-toggle=\"tab\">Merkmale und Vorteile</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"features\">\n					<h3 class=\"emphasis\">Entscheidende Merkmale des Physical Workplace Management</h3>\n					<ul class=\"list\">\n						<li>Plattformübergreifender Support, darunter Windows, Mac, Linux und Solaris.</li>\n						<li>Bestands-Management mit detaillierten Daten zu jedem Gerät, das an das Unternehmensnetzwerk angeschlossen ist, darunter Desktops, Laptops, Software, Drucker, Router und Mobilgeräte.</li>\n						<li>Software-Management automatisiert die Software-Implementierungen/Updates und zeigt genau, was auf welcher Maschine installiert ist. Zahlreiche Matrix42 Kunden konnten ihre Rollout-Ausfallraten von 10 Prozent auf 0,002 Prozent reduzieren.</li>\n						<li>Die Betriebssystem-Implementierung automatisiert die Bereitstellungen und Migrationen, um Fehler, Anrufe beim Helpdesk und die Zeit für Hardware-Konfigurationen zu reduzieren. Systeme lassen sich entweder vor Ort oder remote mit nur einem Klick aktualisieren.</li>\n						<li>Persönliche Datensicherung stellt alle Benutzerdaten und -einstellungen entweder remote oder direkt vom System des Endanwenders aus wieder her - ein Klick genügt. Alle Anwendungs-, Daten- und Betriebssystemeinstellungen lassen sich während der Betriebssystem-Migration wiederherstellen.</li>\n						<li>Einfache Disaster-Recovery nach einer Virusinfektion, einem Hardware-Ausfall oder einem schwerwiegenden Systemfehler.</li>\n						<li>Fernsteuerung für den Remote-Zugriff auf das System eines Anwenders in weniger als 7 Sekunden, selbst wenn das System durch eine Firewall geschützt ist. So erhält der Endanwender sofortigen Support auf Abfrage - das spart Reisekosten und Zeit.</li>\n					</ul>\n				</div><!-- features -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(6,7,'main','<div class=\"padded\">\n	<h3 class=\"emphasis\">Kontrolle über Ihre IT-Assets übernehmen</h3>\n	<p>Das IT Asset Management (ITAM) bietet Unternehmen die schnellste und effektivste Möglichkeit, um Kosten zu kontrollieren und Ressourcen optimal zu nutzen. Fast ein Drittel aller Unternehmens-Software-Anwendungen sind nicht korrekt lizenziert, d. h. Unternehmen geben für einige Programme zu viel aus und besitzen für andere Programme keine Lizenzen. ITAM hilft Unternehmen, Mehrausgaben für Lizenzen und Hardware zu eliminieren und die Compliance sicherzustellen. Matrix42 integriert diesen integralen Teil zur Aufrechterhaltung der Kontrolle und Verwaltung der Kosten in alle Lösungen für das mobile, virtuelle und physische Workplace Management.</p>\n	<p>Matrix42 bietet eine Lösung zur Verwaltung von Assets, Lizenzen und Verträgen, die die Software- und Hardware-Erkennung mit Bestandshaltung, Lizenzverfolgung, Software-Verwendung und Vertragsmanagement verbindet und für sofortigen, spürbaren Nutzen sorgt.</p>\n	<ul class=\"list\">\n		<li>Niedrigere Software- und Hardware-Kosten. Matrix42 stellt eine komplette und genaue Ansicht aller Asset-Kategorien des Unternehmens bereit, um Mehrausgaben für Hardware, Software, Lizenzen und Wartung auszuschließen. Ein genaues Verständnis aller im Besitz befindlichen Assets und deren Verwendung zur Wertschöpfung erleichtern Unternehmen die Verwaltung des Hardware-Lebenszyklus. Sie können intelligente Beschaffungsentscheidungen treffen und Geld sparen.</li>\n		<li>Risiken mindern und die Compliance sicherstellen. Matrix42 gewährleistet Transparenz in allen Lizenzvereinbarungen, damit IT-Einkäufer schnell erkennen können, ob sie für einige Lizenzen zu viel bezahlen und für andere keinerlei Verträge haben. Somit wird die Compliance sichergestellt und es können nachweislich bis zu 30 Prozent der Software-Lizenzausgaben eingespart werden.</li>\n		<li>Effektiv mit Lieferanten verhandeln. Unternehmen können günstige Konditionen mit ihren Lieferanten dann aushandeln, wenn sie über ausreichende Kenntnisse über Nutzungsmuster, Lizenzen und Verträge verfügen.</li>\n	</ul>\n	%%getstartedpage%%\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#features\" data-toggle=\"tab\">Merkmale und Vorteile</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"features\">\n					<h3 class=\"emphasis\">Entscheidende Merkmale des IT Asset Management</h3>\n					<ul class=\"list\">\n						<li>\n							<h4 class=\"emphasis\">Hardware- und Software-Asset-Management</h4>\n							<ul>\n								<li>Zentraler Gerätebestand, damit Administratoren IT-Assets leicht auffinden und konfigurieren können.</li>\n								<li>Automatische Zuweisung von Hardware und Software an Benutzer, damit sie die erforderlichen Tools schnellstmöglich erhalten. Verfolgung jedes einzelnen Assets, um herauszufinden, ob etwas verwendet wird, fehlt oder beschädigt ist, wodurch fundierte Entscheidungen über Reparaturen oder Geräteersatz möglich sind.</li>\n							</ul>\n						</li>\n						<li>\n							<h4 class=\"emphasis\">Bestands-Management</h4>\n							<ul>\n								<li>Eine vollständige Übersicht über alle Assets, die mit dem Unternehmensnetzwerk verbunden sind. Automatische Erkennung aller Software, Desktops, Notebooks, Mobilgeräte, Drucker, Router und mehr.</li>\n							</ul>\n						</li>\n						<li>\n							<h4 class=\"emphasis\">Lizenzverwaltung</h4>\n							<ul>\n								<li>Import, Kontrolle und Abstimmung von Lizenzdaten, um Mehrausgaben und Nicht-Compliance zu verhindern.</li>\n								<li>Automatische System-Scans, Programmerkennung und Berichterstellung, die genau aufzeigt, wie viele Lizenzen erforderlich sind. Wenn jemand im Unternehmen Anwendungen entfernt oder installiert, führt das System einen Vergleich durch, damit Maßnehmen getroffen werden können, bevor das Unternehmen Risiken ausgesetzt wird.</li>\n								<li>Warnmeldungen, wenn Lizenzen ablaufen oder bei Nicht-Compliance des Unternehmens.</li>\n							</ul>\n						</li>\n						<li>\n							<h4 class=\"emphasis\">Vertragsmanagement</h4>\n							<ul>\n								<li>Sichere Speicherung aller Vertragsdateien in einer zentralen Datenbank für schnellen Zugriff auf und Einsicht in die Rahmenverträge und allgemeinen Lizenzen.</li>\n								<li>Vertragsberichte und Budgets mit nur einem Mausklick generieren. Warnmeldungen, wenn Vertragsverlängerungen, Audits oder andere Termine anstehen, um kostenspielige Fehler zu vermeiden.</li>\n							</ul>\n						</li>\n					</ul>\n				</div><!-- features -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(7,8,'main','<div class=\"padded\">\n	<h3 class=\"emphasis\">Sparen Sie bis zu 70 Prozent an Windows 7 Migrationskosten</h3>\n	<p>Windows XP geht schnell seinem Ende entgegen und Gartner betont, dass Unternehmen jetzt zu Windows 7 migrieren und sich Anfang 2013 in der Endphase dieser Migration befinden sollten. Matrix42 kann Unternehmen helfen, 70 Prozent ihrer Migrationskosten einzusparen, ganz gleich, ob es sich um die Migration von Windows XP vor der Einstellung des Support oder um ein Upgrade von Windows Vista zur Performancesteigerung handelt.</p>\n	<p>Dies wird durch die Automatisierung und Vereinfachung der einzelnen Prozessschritte erzielt, darunter Hardware- und Software-Analyse, Datensicherung und Treiber-/Betriebssystem-Installation.  Beispielsweise testet das Matrix42 Physical Workplace Management Treiber, Software und Betriebssysteme automatisch auf Fehler, um teure Probleme nach der Migration zu vermeiden.</p>\n	<p>Das größte Problem bei der Migration von Betriebssystemen sind Ausfallzeiten und Datenverlust. Die Matrix42 Lösung bewertet die Bereitschaft des Unternehmens zur Migration zu Windows 7 anhand spezifischer Angaben zu Komponenten, die aktualisiert werden sollten, bevor die Migration beginnt. Die Benutzer- und Dateneinstellungen für jedes System werden gespeichert und erneut installiert, damit den Endanwendern nichts an Produktivität verloren geht.</p>\n	%%getstartedpage%%\n	<p>Beim Test der Windows 7 Migrations-Tools in der IT Administrator-Fachzeitschrift erreichte Matrix42 die höchste Punktzahl. Matrix42 wurde als „dank seiner Anwendungsnutzungsverfolgung der Konkurrenz einen Schritt voraus&ldquo; beschrieben. Administratoren können erkennen, welche Anwendungen gegenwärtig installiert sind und benutzt werden, so dass sie keine Zeit und kein Geld mit der Migration nicht genutzter Anwendungen verschwenden.</p>\n	<p>Die Nutzung der Desktop-Virtualisierung während der Migration zu Windows 7 führt möglicherweise zu weiteren Einsparungen. Das Matrix42 Virtual Workplace Management richtet auf virtuellen Desktops automatisch alles ein, was Endbenutzer für ihre Remote-Arbeit brauchen.</p>\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#steps\" data-toggle=\"tab\">6 Migrationsschritte</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"steps\">\n					<h3 class=\"emphasis\">6 Schritte für die erfolgreiche Migration zu Windows 7</h3>\n					<ul class=\"list\">\n						<li><strong class=\"emphasis\">Erkennung</strong> - Matrix42 prüft die Hardware automatisch darauf, ob die Voraussetzungen für Windows 7 erfüllt sind. Mit wenigen Klicks lässt sich erkennen, welche Anwendungen installiert sind und verwendet werden, um nur die Anwendungen zu migrieren, die dafür in Frage kommen.</li>\n						<li><strong class=\"emphasis\">Analyse </strong>- Systemmeldungen über Updates, die vor der Migration an der Hardware, Software oder den Treibern vorzunehmen sind, um die Kosten beträchtlich zu senken.</li>\n						<li><strong class=\"emphasis\">Test </strong>- Matrix42 eliminiert Fehler durch Testen der Betriebssystem-Konfigurationen, Treiber und Software.</li>\n						<li><strong class=\"emphasis\">Virtualisierung</strong> - Nutzen Sie die Gelegenheit, physische PCs zu virtuellen Desktops zu migrieren und Remote-Mitarbeitern sicheren Zugriff auf das Netzwerk zu gewähren. Während der Migration zu Windows 7 richtet Matrix42 auf virtuellen Desktops automatisch alles ein, was die Endbenutzer brauchen.</li>\n						<li><strong class=\"emphasis\">Implementierung</strong> - Automatische Implementierung von Betriebssystemen, Treibern und Software während der Migration zu Windows 7. Dieser Automatisierungsgrad reduziert Fehler, Anrufe an den Helpdesk und den Zeitaufwand für Hardware-Konfigurationen. Matrix42 stellt sicher, dass die persönlichen Einstellungen des Endbenutzers während der Migration erhalten bleiben, damit diese so weiterarbeiten können wie bisher, als wären keinerlei Änderungen am System vorgenommen worden.</li>\n						<li><strong class=\"emphasis\">Betrieb</strong> - Nach abgeschlossener Migration gibt das System die aktualisierten PCs an das Netzwerk frei und gewährt den Endanwendern Zugriff.</li>\n					</ul>\n				</div><!-- steps -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(8,10,'main','<div class=\"padded\">\n	<h3 class=\"emphasis\">Professional Services</h3>\n	<p>Mit unserem Dienstleistungsspektrum unterstützen wir Sie ganzheitlich von der Planung über die Implementierung bis zum Betrieb Ihrer Lösung. Dabei erhalten Sie durchgehenden Support aus einer Hand unkompliziert, schnell und kompetent.</p>\n	<p>Sie entscheiden, ob Sie eine schlüsselfertige Lösung oder die Unterstützung zu Spezialthemen wünschen. Wir begleiten Sie vom ersten Beratungsgespräch mit einer umfassenden Anforderungsanalyse, individuellen Konzepten und professionellem Projektmanagement. Dabei stehen wir Ihnen auch nach Projekabschluss immer mit Rat und Tat zur Seite.</p>\n	%%getstartedpage%%\n	<p>Wir bieten Ihnen Dienstleistungen in den Bereichen:</p>\n	<ul class=\"list\">\n		<li>Individuell auf die Umgebung abgestimmte Lösungen</li>\n		<li>Integration</li>\n		<li>Migration der Daten auf eine neue Plattform</li>\n		<li>Lokalisation</li>\n		<li>Datenanalyse</li>\n		<li>Design</li>\n		<li>Qualitätssicherung in den Bereichen Softwarepaketierung, Konzeption und Rollouts</li>\n		<li>Trainings und Vorort-Schulungen</li>\n		<li>Wartungen</li>\n		<li>Updates</li>\n	</ul>\n	<h2 class=\"secondary\">Konsequent. Präsent. Für Sie.</h2>\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#services\" data-toggle=\"tab\">Professional Services</a></li>\n			<li><a href=\"#support\" data-toggle=\"tab\">Professional Support</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"services\">\n					<h3 class=\"emphasis\">Wir schaffen Lösungen… Nach Ihren Vorgaben mit unseren Produkten…</h3>\n					<p>Der wirtschaftliche Erfolg eines Unternehmens steht und fällt mit der fortlaufenden und nachhaltigen Optimierung seiner Geschäftsprozesse und der damit verbundenen Wertschöpfung.</p>\n					<p>Für die positive Entwicklung des Geschäftsergebnisses gilt es den Fokus auf das Kerngeschäft und die Variabilisierung der Fixkosten zu setzen.</p>\n					<p>Eine IT mit flexiblen Infrastrukturen und Arbeitsplätzen kann entscheidend zur Gewinnsteigerung beitragen.</p>\n					<p>Einen wesentlichen Beitrag leistet hierzu eine speziell auf Ihr Unternehmen zugeschnittene IT-Umgebung.</p>\n					<p>Bei der Umsetzung Ihrer IT Umgebung unterstützen wir Sie mit unseren Teams und den besten Produkten.</p>\n					<p>Wir erstellen für Sie den individuellen Dienstleistungskatalog zur Umsetzung Ihrer Lösung.</p>\n					<ul class=\"list\">\n						<li>Unsere Projektleiter haben das Projekt im Griff: Lösungsorientierte Umsetzungen in Time und Budget.</li>\n						<li>Unsere Solution Architekten konzeptionieren Ihre Lösung, abgestimmt auf Ihre Bedürfnisse.</li>\n						<li>Unsere Consultants kennen unsere Produkte am besten. Sie implementieren Ihre Lösungen nach einheitlichen Vorgehensmodellen mit Best-Practice- Ansätzen.</li>\n					</ul>\n				</div><!-- services -->\n				<div class=\"tab-pane padded-content\" id=\"support\">\n					<h3 class=\"emphasis\">Mit einem Wartungsvertrag der Matrix42 erhalten Sie eine Software-Rundum-Lösung.</h3>\n					<h4 class=\"secondary\">Jederzeit Up to date:</h4>\n					<p>Sie erhalten immer die neuesten Software-Versionen und haben Zugriff auf aktuelle Patches.</p>\n					<h4 class=\"secondary\">Zuverlässiger Support:</h4>\n					<p>Ein kompetentes Supportteam steht Ihnen für Anfragen via Telefon, E-Mail oder über unser Kundenportal zur Verfügung.</p>\n					<h4 class=\"secondary\">Insights über die Knowledge Base:</h4>\n					<p>Wir teilen unser Wissen mit Ihnen, damit Sie mit der Software von Matrix42 optimal arbeiten können.</p>\n					<p>Professional Support bietet Ihnen die Unterstützung für eine reibungslose Nutzung der Matrix42 Software.</p>\n					<h3 class=\"emphasis\">Global Priority Support</h3>\n					<p>Sie wünschen sich für Ihr Unternehmen einen personalisierten Support und weltweite Incident Response Services*? Dann bietet Ihnen Matrix42 den Global Priority Support.</p>\n					<p>Sie erhalten Ihren eigenen Service Support Manager. Er kümmert sich um die Priorisierung und Bearbeitung Ihrer Supportanfragen. Der Service und Support Manager...</p>\n					<p>...kennt Ihre technische Umgebung.</p>\n					<p>...führt regelmäßig Incident Reviews mit Ihnen durch.</p>\n					<p>...unterstützt Sie mit Best Practice Empfehlungen.</p>\n					<p>...ist die Schnittstelle zu Professional Services.</p>\n					<p>Im Rahmen eines jährlichen Status-Gesprächs bei Ihnen vor Ort werden die Learnings des vergangenen Jahres gezogen und die Planung für das kommende Jahr besprochen.</p>\n					<p>Global Priority Support ist die Matrix42-Unterstützung für Ihren individuellen Bedarf.</p>\n				</div><!-- support -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n	<h6>*Derzeit werden die Zeitzonen Nord-/Südamerika und EMEA abgedeckt</h6>\n</div><!-- padded -->',NULL),
	(9,2,'sidebar','%%sidebarleadform%%\n%%sidebarsupport%%',NULL),
	(10,4,'sidebar','%%sidebarleadform%%\n%%sidebarsupport%%',NULL),
	(11,5,'sidebar','%%sidebarleadform%%\n%%sidebarsupport%%',NULL),
	(12,6,'sidebar','%%sidebarleadform%%\n%%sidebarsupport%%',NULL),
	(13,7,'sidebar','%%sidebarleadform%%\n%%sidebarsupport%%',NULL),
	(14,8,'sidebar','%%sidebarleadform%%\n%%sidebarsupport%%',NULL),
	(15,10,'sidebar','<div id=\"links\" class=\"well margin-right\">\n	<div class=\"well-container\">\n		<div class=\"padded\">\n			<h2>Related Links!</h2>\n		</div><!-- padded -->\n		<ul class=\"list\">\n			<li><a href=\"https://support.matrix42.de/sps/portal\" target=\"_blank\">Matrix42 Support Portal</a></li>\n			<li><a href=\"http://forum.matrix42.com\" target=\"_blank\">Matrix42 Forum</a></li>\n		</ul>\n	</div><!-- support-container -->\n</div><!-- support -->\n%%sidebarsupport%%\n%%sidebarleadform%%',NULL),
	(16,9,'main','<div class=\"padded\">\n	<h3 class=\"emphasis\">Reduzierung der Supportkosten um 70 Prozent durch Automatisierung und Self-Service</h3>\n	<p>Die IT-Verwaltung wird von Tag zu Tag komplexer. Von der ständig wachsenden Popularität der SaaS-Angebote (Software as a Service) bis zur Verbreitung von Mobilgeräten: Neue Denkansätze und Managementmethoden für die Endanwender-Assets sind wesentlich für den Erfolg der IT-Abteilungen. Mit Self-Service sind Unternehmen in der Lage, die Art der Bereitstellung von IT-Services umzuwandeln und die Belastung durch manuelle Aufgaben und einmalige Anfragen beträchtlich zu reduzieren. Die täglichen Supportkosten machen für viele Unternehmen den größten Prozentanteil des IT-Budgets aus. Matrix42 rationalisiert die Supportprozesse und stellt ein automatisiertes Self-Service-Portal bereit, damit Endanwender ihre IT-Probleme auf Abfrage lösen und die Supportkosten somit um 70 Prozent reduziert werden können.</p>\n	<p>Matrix42 ist das einzige Unternehmen, das Self-Service in das Mobile Device Management, Virtual Desktop Management und Endpoint Management integriert. Die Vorteile für den Kunden sind so greifbar, dass Matrix42 den Self-Service in alle drei Kernlösungen integriert hat. Daraus ergibt sich ein einzigartiger, benutzerorientierter Ansatz für das Workplace Management, der Endanwendern die gewünschte Flexibilität und Kontrolle gibt, online zu bleiben und die Produktivität zu verbessern. Die Belastung für IT-Abteilungen wird tatsächlich verringert, obwohl sie nach wie vor die Grenzen für die Anwender festlegen, um Sicherheit und Compliance zu gewährleisten.</p>\n	<p>Anwender können Services von beliebigen physischen, virtuellen und mobilen Geräten jederzeit über den Service-Katalog anfordern und bereitstellen. Der automatisierte Prozess eliminiert die Notwendigkeit für Anwender, darauf zu warten, bis der IT-Administrator auf einen Support-Antrag reagiert, was zu einer schnelleren Lösung führt. Wenn IT-Administratoren nicht eingeschaltet werden müssen, können sie alle Assets remote auf Fehler prüfen und verwalten.</p>\n	%%getstartedpage%%\n	<h3 class=\"emphasis\">ServiceNow Integration</h3>\n	<p>Für Anwender, die bereits über eine ITSM-Lösung von ServiceNow verfügen, sind alle Matrix42 Workforce Management-Lösungen für das Mobile Device Management, das Virtual Desktop Management und das Endpoint Management vollständig integriert und können problemlos über den ServiceNow Service-Katalog bereitgestellt werden.</p>\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#features\" data-toggle=\"tab\">Merkmale und Vorteile</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"features\">\n					<h3 class=\"emphasis\">Entscheidende Merkmale des IT Service Management</h3>\n					<p>Die webbasierte, ITIL-kompatible Self-Service-Lösung von Matrix42 enthält drei Hauptkomponenten:</p>\n					<h4 class=\"emphasis\">Service-Katalog</h4>\n					<p>Der Matrix42 Service-Katalog automatisiert den kompletten Service-Request-Prozess, um die Supportkosten drastisch zu reduzieren, die Zufriedenheit der Endanwender zu erhöhen und die Unternehmensrichtlinien einzuhalten. Aufgrund des hohen Automatisierungsgrades können Unternehmen bis zu 70 Prozent ihrer IT-Support-Kosten einsparen.  Endanwender können IT-Services recherchieren und erhalten automatisierten Support rund um die Uhr. Dies kann die Helpdesk-Anrufe um bis zu 40 Prozent reduzieren und schnellere Antwortzeiten für Endanwender bedeuten.</p>\n					<p>Der Matrix42 Service-Katalog verfolgt die Endanwender, die IT-Services anfordern und berechnet diese auf Nutzungsbasis. Dies bedeutet, dass IT den einzelnen Abteilungen die angeforderten Services berechnen kann und nicht länger Vermutungen über die gesamten IT-Kosten des Unternehmens aufstellen muss. Endanwender werden zudem auf ihre Nutzung hingewiesen, damit sie kostensparende Maßnahmen ergreifen können.</p>\n					<h4 class=\"emphasis\">Helpdesk</h4>\n					<p>Der Matrix42 Helpdesk automatisiert das ITIL-Incident-, Problem- und Change Management und bietet Endanwendern besseren Service und schnellere Antwortzeiten. Die für den Helpdesk-Support erforderlichen Ressourcen können reduziert und die Supportkosten um bis zu 20 Prozent gesenkt werden. Unternehmen können alles, von der Ticket-Erstellung bis zur Software-Installation, automatisieren und die häufigsten Probleme ihrer Endanwender lösen. Das erhöht nicht nur die Zufriedenheit der Endanwender, sondern reduziert auch die Möglichkeit von Geldstrafen, wenn gegen SLAs (Service Level Agreements/Leistungsverträge) verstoßen wird.</p>\n					<p>Ein Self-Service-Portal befähigt die Endanwender zur Lösung ihrer eigenen Probleme. Sie können Support anfordern, eine Wissensdatenbank durchsuchen und automatische Updates erhalten, wenn sich der Status ihrer Helpdesk-Tickets ändert. Dadurch werden die Wartezeiten und die Anzahl der Fälle verringert, die vom IT-Team zu bearbeiten sind.</p>\n					<h4 class=\"emphasis\">Mobile Self-Service App</h4>\n					<p>Eine iPhone App ermöglicht Endanwendern den Zugriff auf den Helpdesk und Katalog. Mit nur wenigen Bewegungen lassen sich Service-Optionen und Preise einsehen und Support anfordern. Bei Bestellungen kann der Status der Anfrage/Bestellung mithilfe der App verfolgt werden. Mit diesen Self-Service-Optionen kann das Volumen der Anrufe beim Helpdesk beträchtlich reduziert werden. Mit der iPhone App können Anwender zudem Unternehmens-News empfangen und das Mitarbeiterverzeichnis aufrufen, wenn sie unterwegs sind.</p>\n				</div><!-- features -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(17,9,'sidebar','%%sidebarleadform%%\n%%sidebarsupport%%',NULL);

/*!40000 ALTER TABLE `contents` ENABLE KEYS */;
UNLOCK TABLES;


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
	('OT','Other',0),
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
  `time_zone` enum('','HADT','HAST','AKDT','AKST','PDT','PST','MDT','MST','CDT','CST','EDT','EST','ADT','AST','NDT','NST','GMT','WST','BST','IST','WEST','CET','CEST','EET','EEST','CXT','WST','CDT','CST','EDT','EST','NFT') DEFAULT NULL,
  `seats` int(10) unsigned DEFAULT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;

INSERT INTO `events` (`id`, `type`, `title`, `subtitle`, `description`, `location`, `link`, `thumbnail`, `start_date`, `end_date`, `use_time`, `time_zone`, `seats`, `featured`, `disabled`)
VALUES
	(1,'webinar','Webcast: Package Robot','','<p>Die Pflege der Software ist für Unternehmen eine zeitraubende und riskante Aufgabe, die mit steigender Anzahl von PC Arbeitsplätzen kaum mehr manuell zu bewältigen ist. IT Verwaltungen setzen zunehmend Tools zur zentralen Paketierung und Verteilung ein. Der Matrix42 Package Robot bietet eine besonders effiziente Lösung durch weitreichende Funktionalitäten wie integriertem Installationsrekorder mit Aufzeichnung der Installationsroutine, integriertem Editor und Automatisierung aller Routineaufgaben. Erfahren Sie mehr und erleben Sie eine Live-Demo in unseren aktuellen Webinars!</p>','Online','https://www3.gotomeeting.com/register/498356838','','2012-07-10 09:30:00','2012-07-10 10:15:00',1,'CEST',NULL,0,0),
	(2,'webinar','Webcast: Workplace Automation mit Empirum','Von der Erfassungs eines Inventars über die Verteilung von Software bis hin zum Backup von Benutzerdaten.','<p>Empirum ist der zentrale Baustein für ein erfolgreiches Workplace Management und deckt als einzige Lösung umfassend alle Prozesse des Device-Lifecycle-Managements integriert in einer Suite ab. Von der Erstinstallation der Geräte, über die Verwaltung bis zum sicheren Löschen aller Daten. Empirum integriert sich nahtlos in bestehende IT-Infrastrukturen. Alle Bereiche können zentral von einer Managementkonsole gesteuert werden. Weitreichende Automatisierungsmöglichkeiten der Prozesse in Anwenderbetreuung und IT-Betrieb ermöglichen messbare Kostensenkungen bei unseren Kunden um bis zu 85%.\nLernen Sie, wie einfach Clientmanagement sein kann.</p>','Online','https://www3.gotomeeting.com/register/646407198','','2012-07-10 11:00:00','2012-07-10 12:00:00',1,'CEST',NULL,0,0),
	(3,'webinar','Webcast: Citrix Management mit Empirum','Wie Sie den Übergang zur Virtualisierung ohne schlaflose Nächte schaffen.','<p>Der Weg zu einer virtualisierten Client-Umgebung ist alles andere als einfach. Neben dem Management der physikalischen Assets kommen auf Sie neue Herausforderungen bei der Verwaltung von virtuellen Softwarepaketen und Images zu. Lernen Sie in diesem Webinar, wie Sie Aufgaben mit Matrix42 Empirum automatisieren können und so zu einer effizient verwalteten Infrastruktur kommen.</p>','Online','https://www3.gotomeeting.com/register/241910766','','2012-07-10 14:00:00','2012-07-10 15:00:00',1,'CEST',NULL,0,0),
	(4,'webinar','Roadshow 2012 – Der Arbeitsplatz der Zukunft!','Wie die Kombination von mobilen Endgeräten, Bring-Your-Own-Device und Desktop-Virtualisierung neue Möglichkeiten für Anwender und IT schafft.','<p>Die Zeiten, als die IT-Abteilung Alleinherrscherin über sämtliche Geräte eines Unternehmens war, sind vorbei. Viele Mitarbeiter nutzen an den IT-Abteilungen vorbei eigene mobile Hardware. Bei unserer Umfrage auf der CeBIT 2012 gaben bereits 64% der Befragten an, dass die Verwendung eigener Endgeräte von Ihrer IT-Abteilung toleriert oder sogar offiziell unterstützt wird. Der Wunsch des Anwenders nach höherer Eigenständigkeit, Flexibilität und Mobilität bei der Nutzung seines Arbeitsplatzes führt zu einem Bring-Your-Own-Device (BYOD) -Trend in den Unternehmen.</p>\n<p>Dieser Trend stellt die IT-Abteilung vor neue Herausforderungen. Es existiert der Wunsch nach dem „Arbeitsplatz der Zukunft“, der zu jeder Zeit an jedem Ort und von jedem Gerät wie Smartphone, Tablet und PC aus nutzbar ist und bei Bedarf zur Verfügung steht.</p>\n<p>Doch wie behält man die Kontrolle über die Gerätevielfalt, beziehungsweise, wie gewinnt man sie zurück, ohne den Produktivitätsgewinn der Anwender und den neuen Arbeitsstil zu verhindern oder zu blockieren?</p>\n<p>Zusammen mit unserem Technologiepartner <span class=\"bold\">Citrix</span> und der <span class=\"bold\">Kanzlei Bartsch Rechtsanwälte</span>, beleuchten wir im Rahmen unserer Roadshow den <span class=\"bold\">Arbeitsplatz der Zukunft</span> und die technischen, prozessualen und rechtlichen Aspekte eines umfassenden IT-Arbeitsplatzmanagements.</p>\n<h3 class=\"emphasis\">Themen</h3>\n<ul class=\"list\">\n	<li>\n		<h5>Der IT-Arbeitsplatz der Zukunft</h5>\n		<span>Wie die Konvergenz von mobilen Endgeräten, BYOD und Virtualisierung neue Möglichkeiten für Anwender und IT schafft.</span>\n	</li>\n	<li>\n		<h5>Mobile Device Management – Rechtssichere Gestaltung</h5>\n		<span>Regelungsmöglichkeiten des Arbeitsgebers</span>\n	</li>\n	<li>\n		<h5>Desktop Virtualisierung mit Citrix</h5>\n		<span>Die Lösung zur Unterstützung mobiler Arbeitsstile und BYOD-Konzepten</span>\n	</li>\n	<li>\n		<h5>Dynamic Workplace Management mit Matrix42</h5>\n		<span>Einfaches und ganzheitliches Management von physischen, virtuellen und mobilen Arbeitsplätzen</span>\n	</li>\n	<li>\n		<h5>Mobile Geräte sicher unter Kontrolle</h5>\n		<span>mit dem Matrix42 Mobile Device Management</span>\n	</li>\n</ul>\n<p>Konnten wir Ihr Interesse wecken? Dann werfen Sie einen Blick auf die detaillierte Agenda mit interessanten Vorträgen unserer Referenten und melden Sie sich gleich für eine der Veranstaltungen an.</p>','NH Hotel Stuttgart Airport Bonlaender Hauptstrasse 145 70794 Filderstadt','','','2012-07-10 09:31:00','2012-07-10 16:00:00',1,'CEST',NULL,0,0),
	(5,'webinar','Webcast: Mobile Device Management','Schluss mit Warten! Bringen Sie jetzt Ihre mobilen Geräte und Arbeitsplätze unter Kontrolle – mit Matrix42!','<p>Erfahren Sie in diesem Webcast, wie Sie Ihre Mobile Devices, wie iPhone, Android, Blackberry und Co. mit Matrix42 managen können.</p>\n<p>Matrix42 Mobile Device Management basiert auf der Technologie des Marktführers AirWatch. Mit dieser Lösung haben Sie den gesamten Lebenszyklus Ihrer mobilen Endgeräte im Griff – von der Einrichtung über die Sicherheit und die Überwachung bis hin zum Management und Support:</p>\n<ul class=\"list\">\n<li>Einrichten – automatisches Einrichten der Geräte</li>\n<li>Risikominderung– Sicherheits-Standards in Echtzeit</li>\n<li>Überwachung der Endgeräte – über eine zentrale Managementkonsole</li>\n<li>Applikationsmanagement – Verwaltung und Steuerung der Applikationen</li>\n<li>Support – Unterstützung von Anwendern und Geräten</li>\n</ul>\n<p><span class=\"bold\">Wir freuen uns auf Ihre Teilnahme.</span></p>','Online','https://www3.gotomeeting.com/register/857154726','','2012-07-11 11:00:00','2012-07-11 12:00:00',1,'CEST',NULL,0,0),
	(6,'webinar','Webcast: Mobile Device Management - English','Don’t Wait, Take Control of Your Mobile Devices and Workplace with Matrix42!','<p>During this webcast you will learn how to manage your mobile devices, like iPhone, Android, Blackberry and Co. with Matrix42.</p>\n<p>Matrix42 Mobile Device Management, powered by industry leader AirWatch, gives you control over the entire mobile device lifecycle – from deployment to security, monitoring, management and support:</p>\n<ul class=\"list\">\n<li>Deploy - automated deployment of devices</li>\n<li>Reduce security risks - real time security standards</li>\n<li>Monitor devices - centrally manage</li>\n<li>Manage apps - manage and control your applications</li>\n<li>Support - support users and devices</li>\n</ul>','Online','https://www3.gotomeeting.com/register/769923558','','2012-07-11 14:00:00','2012-07-11 15:00:00',1,'CEST',NULL,0,0),
	(7,'webinar','Roadshow 2012 – Der Arbeitsplatz der Zukunft!','Wie die Kombination von mobilen Endgeräten, Bring-Your-Own-Device und Desktop-Virtualisierung neue Möglichkeiten für Anwender und IT schafft.','<p>Die Zeiten, als die IT-Abteilung Alleinherrscherin über sämtliche Geräte eines Unternehmens war, sind vorbei. Viele Mitarbeiter nutzen an den IT-Abteilungen vorbei eigene mobile Hardware. Bei unserer Umfrage auf der CeBIT 2012 gaben bereits 64% der Befragten an, dass die Verwendung eigener Endgeräte von Ihrer IT-Abteilung toleriert oder sogar offiziell unterstützt wird. Der Wunsch des Anwenders nach höherer Eigenständigkeit, Flexibilität und Mobilität bei der Nutzung seines Arbeitsplatzes führt zu einem Bring-Your-Own-Device (BYOD) -Trend in den Unternehmen.</p>\n<p>Dieser Trend stellt die IT-Abteilung vor neue Herausforderungen. Es existiert der Wunsch nach dem „Arbeitsplatz der Zukunft“, der zu jeder Zeit an jedem Ort und von jedem Gerät wie Smartphone, Tablet und PC aus nutzbar ist und bei Bedarf zur Verfügung steht.</p>\n<p>Doch wie behält man die Kontrolle über die Gerätevielfalt, beziehungsweise, wie gewinnt man sie zurück, ohne den Produktivitätsgewinn der Anwender und den neuen Arbeitsstil zu verhindern oder zu blockieren?</p>\n<p>Zusammen mit unserem Technologiepartner <span class=\"bold\">Citrix</span> und der <span class=\"bold\">Kanzlei Bartsch Rechtsanwälte</span>, beleuchten wir im Rahmen unserer Roadshow den <span class=\"bold\">Arbeitsplatz der Zukunft</span> und die technischen, prozessualen und rechtlichen Aspekte eines umfassenden IT-Arbeitsplatzmanagements.</p>\n<h3 class=\"emphasis\">Themen</h3>\n<ul class=\"list\">\n	<li>\n		<h5>Der IT-Arbeitsplatz der Zukunft</h5>\n		<span>Wie die Konvergenz von mobilen Endgeräten, BYOD und Virtualisierung neue Möglichkeiten für Anwender und IT schafft.</span>\n	</li>\n	<li>\n		<h5>Mobile Device Management – Rechtssichere Gestaltung</h5>\n		<span>Regelungsmöglichkeiten des Arbeitsgebers</span>\n	</li>\n	<li>\n		<h5>Desktop Virtualisierung mit Citrix</h5>\n		<span>Die Lösung zur Unterstützung mobiler Arbeitsstile und BYOD-Konzepten</span>\n	</li>\n	<li>\n		<h5>Dynamic Workplace Management mit Matrix42</h5>\n		<span>Einfaches und ganzheitliches Management von physischen, virtuellen und mobilen Arbeitsplätzen</span>\n	</li>\n	<li>\n		<h5>Mobile Geräte sicher unter Kontrolle</h5>\n		<span>mit dem Matrix42 Mobile Device Management</span>\n	</li>\n</ul>\n<p>Konnten wir Ihr Interesse wecken? Dann werfen Sie einen Blick auf die detaillierte Agenda mit interessanten Vorträgen unserer Referenten und melden Sie sich gleich für eine der Veranstaltungen an.</p>','Dolce Hotel Munich Andreas-Danzer-Weg 1 85716 Unterschleißheim ','','','2012-07-11 09:31:00','2012-07-11 16:00:00',1,'CEST',NULL,0,0),
	(8,'webinar','Webcast: Lizenzmanagement','Die Lizenzbilanz per Mausklick und der Weg dorthin.','<p>Automation und Qualitätssicherung sind die zwei Eckpfeiler einer Lizenz Management Lösung, die Unternehmen dabei unterstützt, belastbare und valide Reports, Analysen und Trendprognosen zu tätigen. Dabei ist Compliance aus rechtlicher Sicht längst nur noch eine Seite der Medaille. Vielmehr stellen Unternehmen in wirtschaftlich schweren Zeiten immer mehr die Möglichkeiten in den Vordergrund, politisch neutral Kosten zu sparen. Erleben Sie Live wie Sie mit der Standardsoftware Matrix42 License Manager und  der Betriebsunterstützung über die kontinuierlich erweiterte Lizenz Stammdatenbank des Matrix42 License Intelligence beide Seite unter eine Software bringen.</p>','Online','https://www3.gotomeeting.com/register/287020502','','2012-07-12 11:00:00','2012-07-12 12:00:00',1,'CEST',NULL,0,0),
	(9,'webinar','Webcast: Service Catalog & ServiceDesk','','<p>Erleben Sie live die nahtlose Integration der beiden Systeme über die zertifizierten Schnittstellen... Erfahren Sie, wie sie mehr Zeit für das Wesentliche durch die Automation von Standardanforderungen mit dem Matrix42 Service Catalog und Empirum gewinnen können. Wir zeigen Ihnen, wie Sie aus dem Matrix42 Service Desk Berechtigungen vergeben, Passwörter reseten und Software mit Empirum verteilen.</p>','Online','https://www3.gotomeeting.com/register/163499246','','2012-07-12 14:00:00','2012-07-12 15:00:00',1,'CEST',NULL,0,0),
	(10,'webinar','Webcast: Enterprise Manager for SCCM','Der Matrix42 Enterprise Manager bietet einen übersichtlichen Einstieg in alle SCCM-Aufgaben.','<p>Über eine zentrale Web-Konsole werden die Bereiche Paketierung, Rollout-Management, Delegation und User Self Service sehr einfach und effizient gesteuert, sodass die Unternehmen das Potenzial von SCCM noch stärker nutzen können:</p>\n<ul class=\"list\">\n<li>Durch das simple Paketmanagement inklusive Komprimierung und verlässlicher Reihenfolgesteuerung wird Zeit und Bandbreite eingespart. Dies verkürzt die Push-Rollout-Zeit auf weniger als eine Minute.</li>\n<li>Ein Flexibles Rollout-Management bietet die Möglichkeit, eigene Verteilziele auf Basis technischer, organisatorischer oder betriebswirtschaftlicher Daten zu definieren.</li>\n<li>Weil die webbasierte Konsole des Matrix42 Enterprise Managers insgesamt sehr übersichtlich und intuitiv gestaltet ist und eine rollenbasierte Delegation möglich ist, können derartige Aufgaben sogar an „Nicht-ITler“ übertragen und von ihnen erfolgreich umgesetzt werden.</li>\n<li>Auch der Anwender wird mit einbezogen: Mit dem Matrix42 Enterprise Manager kann der User selbst bestimmen, wann er was installiert haben möchte - selbstverständlich unter Einhaltung vorgegebener Zeitfenster.</li>\n</ul>\n\n<p>Fazit: Der Matrix42 Enterprise Manager ist eine webbasierte Lösung, die Zeit und Kosten spart und zwar sowohl in Bezug auf die Infrastruktur als auch auf hochqualifiziertes Personal.</p>\n<p>Dabei erhöht die Applikation auch noch den Service-Standard einer Unternehmens-IT und wirkt sich positiv auf das Image der Abteilung aus -  intern, wie extern.</p>','Online','https://www3.gotomeeting.com/register/802537542','','2012-07-24 11:00:00','2012-07-24 12:00:00',1,'CEST',NULL,0,0),
	(11,'webinar','Webcast: Citrix Management mit Empirum','Wie Sie den Übergang zur Virtualisierung ohne schlaflose Nächte schaffen. ','<p>Der Weg zu einer virtualisierten Client-Umgebung ist alles andere als einfach. Neben dem Management der physikalischen Assets kommen auf Sie neue Herausforderungen bei der Verwaltung von virtuellen Softwarepaketen und Images zu. Lernen Sie in diesem Webinar, wie Sie Aufgaben mit Matrix42 Empirum automatisieren können und so zu einer effizient verwalteten Infrastruktur kommen.</p>','Online','https://www3.gotomeeting.com/register/965937862','','2012-07-24 14:00:00','2012-07-24 15:00:00',1,'CEST',NULL,0,0),
	(12,'webinar','Webcast: Mobile Device Management','Schluss mit Warten! Bringen Sie jetzt Ihre mobilen Geräte und Arbeitsplätze unter Kontrolle – mit Matrix42!','<p>Erfahren Sie in diesem Webcast, wie Sie Ihre Mobile Devices, wie iPhone, Android, Blackberry und Co. mit Matrix42 managen können.</p>\n<p>Matrix42 Mobile Device Management basiert auf der Technologie des Marktführers AirWatch. Mit dieser Lösung haben Sie den gesamten Lebenszyklus Ihrer mobilen Endgeräte im Griff – von der Einrichtung über die Sicherheit und die Überwachung bis hin zum Management und Support:</p>\n<ul class=\"list\">\n<li>Einrichten – automatisches Einrichten der Geräte</li>\n<li>Risikominderung– Sicherheits-Standards in Echtzeit</li>\n<li>Überwachung der Endgeräte – über eine zentrale Managementkonsole</li>\n<li>Applikationsmanagement – Verwaltung und Steuerung der Applikationen</li>\n<li>Support – Unterstützung von Anwendern und Geräten</li>\n</ul>\n<p><span class=\"bold\">Wir freuen uns auf Ihre Teilnahme.</span></p>','Online','https://www3.gotomeeting.com/register/603041078','','2012-07-25 11:00:00','2012-07-25 12:00:00',1,'CEST',NULL,0,0),
	(13,'webinar','Webcast: Mobile Device Management - English','Don’t Wait, Take Control of Your Mobile Devices and Workplace with Matrix42!','<p>During this webcast you will learn how to manage your mobile devices, like iPhone, Android, Blackberry and Co. with Matrix42.</p>\n<p>Matrix42 Mobile Device Management, powered by industry leader AirWatch, gives you control over the entire mobile device lifecycle – from deployment to security, monitoring, management and support:</p>\n<ul class=\"list\">\n<li>Deploy - automated deployment of devices</li>\n<li>Reduce security risks - real time security standards</li>\n<li>Monitor devices - centrally manage</li>\n<li>Manage apps - manage and control your applications</li>\n<li>Support - support users and devices</li>\n</ul>','Online','https://www3.gotomeeting.com/register/982916110','','2012-07-25 14:00:00','2012-07-25 15:00:00',1,'CEST',NULL,0,0),
	(14,'webinar','Webcast: Lizenzmanagement','Die Lizenzbilanz per Mausklick und der Weg dorthin.','<p>Automation und Qualitätssicherung sind die zwei Eckpfeiler einer Lizenz Management Lösung, die Unternehmen dabei unterstützt, belastbare und valide Reports, Analysen und Trendprognosen zu tätigen. Dabei ist Compliance aus rechtlicher Sicht längst nur noch eine Seite der Medaille. Vielmehr stellen Unternehmen in wirtschaftlich schweren Zeiten immer mehr die Möglichkeiten in den Vordergrund, politisch neutral Kosten zu sparen. Erleben Sie Live wie Sie mit der Standardsoftware Matrix42 License Manager und  der Betriebsunterstützung über die kontinuierlich erweiterte Lizenz Stammdatenbank des Matrix42 License Intelligence beide Seite unter eine Software bringen.</p>','Online','https://www3.gotomeeting.com/register/924572494','','2012-07-26 11:00:00','2012-07-26 12:00:00',1,'CEST',NULL,0,0),
	(15,'webinar','Webcast: Service Catalog & ServiceDesk','','<p>Erleben Sie live die nahtlose Integration der beiden Systeme über die zertifizierten Schnittstellen... Erfahren Sie, wie sie mehr Zeit für das Wesentliche durch die Automation von Standardanforderungen mit dem Matrix42 Service Catalog und Empirum gewinnen können. Wir zeigen Ihnen, wie Sie aus dem Matrix42 Service Desk Berechtigungen vergeben, Passwörter reseten und Software mit Empirum verteilen.</p>','Online','https://www3.gotomeeting.com/register/370098038','','2012-07-26 14:00:00','2012-07-26 15:00:00',1,'CEST',NULL,0,0);

/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;


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
  `a_classes` varchar(255) DEFAULT NULL,
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
  `title_color` varchar(7) DEFAULT NULL COMMENT '#hexidecimal',
  `order` int(2) DEFAULT NULL,
  `default_lead_form` tinyint(1) NOT NULL DEFAULT '0',
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk-campaign-menus` (`campaign_id`),
  KEY `fk-menu-menus` (`parent_id`),
  CONSTRAINT `fk-campaign-menus` FOREIGN KEY (`campaign_id`) REFERENCES `campaigns` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-menu-menus` FOREIGN KEY (`parent_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;

INSERT INTO `menus` (`id`, `parent_id`, `campaign_id`, `role`, `type`, `title`, `url`, `classes`, `a_classes`, `section`, `controller`, `method`, `pagetitle`, `subtitle`, `keywords`, `banner`, `banner_title`, `banner_subtitle`, `banner_x`, `banner_y`, `title_width`, `title_color`, `order`, `default_lead_form`, `disabled`)
VALUES
	(1,NULL,NULL,'public','main','Lösungen','/losungen','dropdown','','public','losungen','index','','','','sub-banner-woman.jpg','der ganzheitliche arbeitsplatz','Die Lösung für Ihre IT-Anforderungen',NULL,NULL,NULL,'',1,0,0),
	(2,NULL,NULL,'public','main','Über Matrix42','/uber','dropdown',NULL,'public','uber','index',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,0,0),
	(3,NULL,NULL,'public','main','Rückruf anfordern','/kaufen','','bold','public','kaufen','index','So kaufen Sie die Produkte und Services von Matrix42','So können Sie Matrix42 kontaktieren bzw. einen Reseller-Partner finden',NULL,'sub-banner-woman.jpg','fangen sie noch heute damit an!','So kaufen Sie Matrix42 Produkte und Lösungen',NULL,NULL,NULL,NULL,3,0,0),
	(4,1,NULL,'public','submenu','Mobile Device Management (BYOD)','/losungen/mobile_device_management',NULL,NULL,'public','losungen','mobile_device_management','Flexibilität für Mitarbeiter, Sicherheit für IT','Flexibilität für Mitarbeiter, Sicherheit für IT - Description: „Bring Your Own Device&ldquo; minimiert Ressourcen und macht die Belegschaft effizienter.','byod, mobile workplace, personal device, mobile device, mobile workforce','sub-banner-byod.jpg','bring your own device?','Kein Problem, wenn Sie den gesamten Lebenszyklus der mobilen Endgeräte managen',60,35,600,NULL,1,0,0),
	(5,1,NULL,'public','submenu','Virtual Desktop Management','/losungen/virtual_desktop_management',NULL,NULL,'public','losungen','virtual_desktop_management','Die unabdingbare Lösung für Citrix Desktop-Deployments ','Virtueller Desktop - einfach und erschwinglich Die unabdingbare Lösung für Citrix Desktop-Deployments',NULL,'sub-banner-virtualization.jpg','desktop-virtualisierung','Die unabdingbare Lösung für Citrix Desktop-Deployments',30,35,700,NULL,2,0,0),
	(6,1,NULL,'public','submenu','Endpoint Management','/losungen/endpoint_management',NULL,NULL,'public','losungen','endpoint_management','Automatisierung aller IT-Management-Prozesse','Automatisierung vieler zeitaufwändiger Aufgaben, wie z.B. Software-Implementierung und gängige Helpdesk-Services. Bei gleichzeitiger Reduzierung der IT-Arbeitsbelastung und der Kosten.',NULL,'sub-banner-integration.jpg','vollständige integration','Automatisierung aller IT-Management-Prozesse',30,25,600,NULL,3,0,0),
	(7,1,5,'public','submenu','Asset Management (Compliance)','/losungen/compliance',NULL,NULL,'public','losungen','compliance','Kontrolle über alle IT-Assets, Lizenzen und Verträge Description','Kontrolle über alle IT-Assets, Lizenzen und Verträge Description: Die ideale Lösung, um die Interaktion zwischen Compliance und Sicherheit zu maximieren','compliance, software compliance','sub-banner-compliance.jpg','compliance','Volle Kontrolle über alle IT-Bestände, Lizenzen und Verträge',100,25,500,'#ffffff',4,0,0),
	(8,1,3,'public','submenu','Windows 7 Migration','/losungen/windows_7_migration',NULL,NULL,'public','losungen','windows_7_migration','Matrix42 Workplace Management für eine einfache, kostengünstige und sichere Migration zu Windows 7','Matrix42 Workplace Management für eine einfache, kostengünstige und sichere Migration zu Windows 7. Das Matrix42 Workplace Management vereinfacht jeden Schritt des Prozesses, darunter die Hardware- und Software-Analyse, Datensicherung und Treiber-/Betrieb','window7 migration, windows upgrade, windows xp business','sub-banner-windows7.jpg','migration zu windows 7','Schnelle und zuverlässige Migration zu Windows 7',60,45,700,'#ffffff',6,0,0),
	(9,1,NULL,'public','submenu','Self-Service','/losungen/self_service',NULL,NULL,'public','losungen','self_service','Automatisierung und Self-Service','Automatisierung und Self-Service','automatisierung, self-service, itsm',NULL,NULL,NULL,NULL,NULL,NULL,NULL,5,0,0),
	(10,NULL,NULL,'public','footer','Services &amp; Support','/support',NULL,NULL,'public','support','index','Matrix42 Service and Support','At Matrix42, we are dedicated to customer satisfaction. That means not only providing the best products but also world-class customer support.',NULL,'sub-banner-abstract.jpg','support','Services and Support when you need it.',100,25,500,'#ffffff',NULL,0,0);

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
  CONSTRAINT `fk-author-notes` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-parent-notes` FOREIGN KEY (`parent_id`) REFERENCES `notes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-user-notes` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table partners
# ------------------------------------------------------------

DROP TABLE IF EXISTS `partners`;

CREATE TABLE `partners` (
  `id` int(10) unsigned NOT NULL,
  `type` enum('technology','reseller') NOT NULL DEFAULT 'reseller',
  `company_name` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk-user-partner` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;

INSERT INTO `partners` (`id`, `type`, `company_name`, `description`, `logo`, `website`)
VALUES
	(2,'technology','Microsoft','Microsoft ist der weltweit führende Hersteller von Standardsoftware, Services und Lösungen, die Menschen und Unternehmen aller Branchen und Größen helfen, ihr Potenzial voll zu entfalten. Sicherheit und Zuverlässigkeit, Innovation und Integration sowie Of','microsoft-logo.png','www.microsoft.de'),
	(3,'technology','Citrix Systems, Inc. ','Citrix Systems, Inc. ist der weltweit führende Anbieter von Access Infrastructure Software und die zuverlässige Marke für sicheren Informations- und Applikations-Zugang für Unternehmen und Individualanwender.','citrix-logo.png','www.citrix.de'),
	(4,'technology','Gartner','Gartner evaluated vendors based on completeness of vision and ability to execute in the IT systems management market, and Matrix42 was recognized as a visionary based on Gartner\'s evaluation of \"completeness of vision\" and \"ability to execute.\"','gartner-magicq-logo.png','www.gartner.com'),
	(5,'technology','ServiceNow','Matrix42 has joined forces with ServiceNow to provide user self-provisioning capabilities for Mobile Workplace, Virtual Workplace and Physical Workplace Management to assist IT in managing the end users’ needs now and in the future.','servicenow-logo.png','www.service-now.com'),
	(23,'reseller','Intuitive Technology Group','Intuitive Technology Group is a professional corporation serving large and small organizations nationwide as well as local, state and federal government agencies under the SBA Small Business program.','intuitive-logo.jpg','www.be-intuitive.com');

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
  `type` enum('release','award','publication') NOT NULL DEFAULT 'release',
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

LOCK TABLES `press_releases` WRITE;
/*!40000 ALTER TABLE `press_releases` DISABLE KEYS */;

INSERT INTO `press_releases` (`id`, `type`, `title`, `subtitle`, `content`, `link`, `thumbnail`, `release_date`, `archive_date`, `featured`, `archive`, `disabled`)
VALUES
	(1,'release','Matrix42 und DIDAS starten mit Partnerschaftsvertrag ins neue Jahr','Full-Service-Angebot für Kunden steht im Mittelpunkt','<p><strong class=\"emphasis\">Neu-Isenburg, 13. Februar 2012</strong> – Matrix42 und DIDAS Business Services starten 2012 mit ihrer Zusammenarbeit durch. Nachdem beide Unternehmen bereits im letzten Quartal des vergangenen Jahres mit einer gemeinsamen Roadshow erfolgreich waren, wird die Partnerschaft jetzt ausgebaut: So wird DIDAS beispielsweise auch auf dem CeBIT-Stand von Matrix42 (Halle 3, F15) vertreten sein.</p>\n<p>„Die Kunden wünschen einen Full-Service, von der Beratung über Design und Einführung bis hin zum SLA-basierten Betrieb, und zwar unabhängig von der Art oder dem Hersteller der eingesetzten Geräte und Anwendungen“, sagt Jürgen Stark, Bereichsleiter Consulting und Managed Services bei DIDAS. Deshalb hat DIDAS ein eigenes Workplace-Solution-Center aufgebaut, in dem die Matrix42- Lösungen zur Workplace Automation und für das IT-Service-Management eine optimale Ergänzung zu den Workplace Services von DIDAS sind.</p>\n<p>„Durch die Überführung in ein Lifecycle-Management-Modell können die Kunden Kosteneinsparungen realisieren und schaffen sich somit Freiraum für die Weiterentwicklung in ihren strategischen Kernthemen. Das sind Punkte, von denen unsere Kunden stark profitieren werden. Deshalb freuen wir uns über die Kooperation mit DIDAS“, sagt Karl-Martin Haaf, Director Channel EMEA Matrix42.</p>\n<p>„Wir sehen bei unseren Kunden und Interessenten ein großes Potenzial für Automatisierung und Vereinfachung in der IT-Service-Erbringung“, ergänzt Jürgen Stark von DIDAS. Hierzu zählen auch das gesamte Management der Mobilgeräte sowie die Steuerung virtueller Rechner, was dank der Matrix42-Partnerschaft für DIDAS problemlos zu lösen ist. Viele Unternehmen stellt die Integration und Steuerung der Gerätevielfalt vor eine große Herausforderung. Hier setzt die Lösung von Matrix42 und DIDAS an, die unter dem Motto „Workplace Next Generation – Mobilität heute und morgen“ auf der CeBIT 2012 präsentiert wird.</p>','','','2012-02-13',NULL,0,0,0),
	(2,'release','Hattrick: TAP Desktop Solutions erneut „Matrix42 Partner of the Year”','Erstmals Channelpartner in Benelux ausgezeichnet','<p><strong class=\"emphasis\">Neu-Isenburg, 14. Februar 2012</strong> – Das dritte Mal in Folge wurde die TAP Desktop Solutions GmbH aus Straubing zum „Best Performing Matrix42 Partner“ des Jahres gewählt. Geschäftsführer Michael Krause und sein Team überzeugten auch in den zurückliegenden Monaten durch weitreichendes Fach- und Produktwissen, zahlreiche Neukundenabschlüsse sowie eine flexible und individuelle Kundenbetreuung.</p>\n<p>„Die Zusammenarbeit mit Matrix42 ist seit Jahren sehr vertrauensvoll und nachhaltig. Deshalb freut es uns umso mehr, dass wir auch in diesem Jahr wieder zu den ausgezeichneten Matrix42 Partnern gehören. Das ist eine schöne Anerkennung unseres Engagements, und wir möchten uns dafür ganz herzlich bei Matrix42 bedanken“, freut sich TAP Geschäftsführer Michael Krause.</p>\n<p>Jedes Jahr verleiht Matrix42 den „Best Performing Partner of the Year Award“ und möchte damit seinen Channelpartnern für deren Einsatz danken. Ausgezeichnet werden diejenigen Partner, denen es gelungen ist, überdurchschnittliche Leistungen bei Lizenzumsatz, Wachstum und in Bezug auf einzelne Kundenprojekte zu bringen. „Die Partnerschaft mit der TAP gibt uns ein sehr wichtiges Feedback über die Akzeptanz von Matrix42 im Markt“, sagt Karl-Martin Haaf, Channel Director EMEA bei Matrix42.</p>\n<p>Haaf sieht in der erfolgreichen Kooperation mit seinen Partnern die Basis für eine nachhaltige Marktpräsenz. „Für uns ist es nicht nur wichtig, dass uns die Kunden kennen, sondern auch, dass wir Partner und Systemhäuser haben, die sich bestens mit unseren Produkten und Dienstleitungen auskennen“, findet Haaf. „Unser Wachstum und Erfolg wäre ohne Partner wie die TAP oder Windmark nicht möglich“, ergänzt er.</p>\n<p>In diesem Jahr hat Matrix42 zum ersten Mal auch seine Partner in Benelux ausgezeichnet. Der überzeugendste Partner war die niederländische Windmark. Sie hat es geschafft, die Lösungen des deutschen Softwareanbieters nachhaltig zu verkaufen und strategisch im Markt zu platzieren. Neben TAP und Windmark gab es weitere Auszeichnungen, mit denen Matrix42 die Wichtigkeit des Channels unterstreichen möchte. So erhielt die DSP IT Service den „Most New Customers Award“. Consutling4IT wurde für den „Biggest Reselling Deal“ ausgezeichnet und Comparex schließlich für den „Most Important Strategic Deal“ nominiert.</p>','','','2012-02-14',NULL,0,0,0),
	(3,'release','CeBIT Highlight: Matrix42 präsentiert sich im neuem Look','Zweistöckiger Messestand mit großzügiger Partner-Area und MDM-Demopoints','<p><strong class=\"emphasis\">Hannover/Neu-Isenburg, 23. Februar 2012</strong> – Mit neuem Logo und im modernen Design stellt sich der führende Anbieter für Dynamic Workplace Management, Matrix42, in diesem Jahr in Hannover der großen Öffentlichkeit vor. Außerdem wird der Messestand erstmals über zwei Etagen verfügen und damit sowohl dem breiten Publikum als auch bestehenden Kunden genügend Raum für Fachgespräche bieten. Davon profitieren auch die Kooperationspartner, die sich jetzt in einem großzügigen Partnerbereich präsentieren.</p>\n<h3 class=\"emphasis\">Highlight in Halle 3: Zweistöckiger Matrix42 Stand</h3>\n<p>Erstmals wird Matrix42 in diesem Jahr mit einem doppelstöckigen Stand auf der CeBIT vertreten sein. „Das große Interesse in den vergangenen Jahren und die Tatsache, dass wir zahlreiche, innovative Neuigkeiten präsentieren, hat uns bewogen unsere Präsenz in Hannover zu erhöhen“, sagt Herbert Schönle,VP Sales & Marketing EMEA. Er und die 40-köpfige Matrix42 CeBIT-Crew sind sich sicher, dass in diesem Jahr vor allem das webbasierte MDM auf überproportionales Interesse stoßen wird.</p>\n<p>Auf der diesjährigen CeBIT präsentiert Matrix42, führender Anbieter für Dynamic Workplace Mana-gement, erstmals seine Mobile Workplace Management Lösung als Software as a Service (SaaS) Angebot. Außerdem demonstriert das Unternehmen, wie anwenderfreundliches Workplace Management funktioniert und wie es den IT-Abteilungen dabei hilft, auch bei zunehmender Gerätevielfalt den Überblick nicht zu verlieren. Die Strategie des Dynamic Workplace Management spiegelt sich auch im neuen Corporate Design des Unternehmens, das die Gestaltung des Standes eindrucksvoll prägt.</p>\n<h3 class=\"emphasis\">Partner präsentieren sich</h3>\n<p>Auf dem großzügigen Matrix42 Messestand haben jetzt auch ausgewählte Kooperationspartner des Unternehmens ihren Platz. Der Solution Partner TAP Desktop Solutions, sowie die Competence Partner Consulting4IT, DIDAS und DSP werden ihre Kompetenz rund um das Matrix42 Portfolio präsentieren und ihre Consulting Lösungen vorstellen. „Wir freuen uns sehr, dass wir gemeinsam mit unseren Partnern auf der CeBIT zeigen werden, wie wir Unternehmen beispielsweise helfen können, wenn die Mitarbeiter ihre eigenen Computer verwenden möchten“, sagt Karl-Martin Haaf, Channel Director EMEA Matrix42. „Wer z.B. sein Mobiltelefon mit an den Stand bringt, dem zeigen wir in ein paar Minuten, wie Mobile Device Management funktioniert und wie Matrix42 das klassische Desktop Management zu mobilem Workplace Management macht.“</p>\n<p>Matrix42 stellt aus in <strong>Halle 3, Stand F15</strong>. Weitere Informationen zu den CeBIT-Aktivitäten finden Sie hier.</p>','','cebit-logo.png','2012-02-23',NULL,0,0,0),
	(4,'release','Matrix42 festigt Partnerschaft mit Consulting4IT','Consulting4IT mit Beratung rund um Microsoft SCCM, ITIL und ITSM beim Einsatz von Matrix42-Lösungen','<p><strong class=\"emphasis\">Neu-Isenburg, 7. März 2012</strong> – Matrix42 und das IT Beratungshaus Consulting4IT haben ihre Partnerschaft erneuert. Consulting4IT wird auch in Zukunft die Kunden von Matrix42 als Systemintegrator sowie mit Beratungsleistungen rund um Microsoft SCCM, ITIL und ITSM unterstützen. Derzeit präsentieren sich beide Unternehmen auf der CeBIT in Halle 3, F15.</p>\n<p>Der „Matrix42 Competence Partner“ Consulting4IT steht den Kunden von Matrix42 als ganzheitlicher Integrationspartner zur Seite und begleitet sie bei der Implementierung von Softwareverteilung über Helpdesk, bis hin zum Service Katalog. Als Spezialist rund um ITIL und ITSM bietet Consulting4IT zudem intensive Beratungsleistungen zu Organisation und Prozessen. Eine weitere Kernkompetenz des Partners ist die Unterstützung von Kunden, die Matrix42-Lösungen in Kombination mit Microsoft SCCM einsetzen.</p>\n<p>„Mit der Software von Matrix42 haben wir Lösungen an der Hand, die es erlauben, die Prozesse unserer Kunden auf einfache Weise in den jeweiligen Tools abzubilden“, betont Christian Müller, Gründer und Geschäftsführer von Consulting4IT. „Ich bin davon überzeugt, dass dem ganzheitlichen Ansatz von Client und Service Management aus einer Hand, wie ihn Matrix42 gewählt hat, die Zukunft gehört. Das erleichtert nicht nur die Standardisierung von Prozessen, sondern auch deren Automatisierung.“</p>\n<p>„ITIL und ITSM spielt bei unseren Kunden eine immer wichtigere Rolle. Wir freuen uns daher sehr darüber, mit Consulting4IT einen auf diesem Gebiet so kompetenten Partner an unserer Seite zu haben“, sagt Karl-Martin Haaf, Director Channel EMEA bei Matrix42.</p>','','consulting4it-logo.png','2012-03-07',NULL,0,0,0),
	(5,'release','Matrix42 Workplace Automation bietet jetzt integriertes Virtualisierungs-Management','Unterstützung von Citrix Plattformen und verbesserte Steuerung von Citrix XenDesktop und XenApp durch aktuelles Workplace Automation Service Pack','<p><strong class=\"emphasis\">Neu-Isenburg, 8. März 2012</strong> – Ab sofort stellt Matrix42, führender Anbieter für Workplace Management Lösungen, seinen Kunden das Empirum V14 Service Pack 2 zur Verfügung. Dieses Update bietet neben diversen Verbesserungen und Funktionsergänzungen vor allem auch ein erweitertes Virtualisierungs-Management von Citrix XenDesktop und XenApp sowie die fortlaufende Unterstützung von Citrix Plattformen.</p>\n<p>Das Service Pack 2 basiert auf Best Practice Beispielen von Microsoft und Citrix und unterstützt die Anwender bei der Nutzung von Citrix Technologien, inklusive Citrix XenApp Server und erleichtert ihnen das Management virtueller Desktops. Außerdem können die Anwender jetzt Applikationen veröffentlichen – unabhängig von der eingesetzten Bereitstellungsmethode. Das Service Pack beinhaltet zudem neue Funktionen für das Management von physikalischen Desktops und optimiert die Performance virtueller Desktops. So können Kunden durch die Implementierung des Citrix Power Managements enorme Kosten sparen.</p>\n<p>„Die Anforderungen von Mitarbeitern an ihre Arbeitsplatzumgebung sind stark gestiegen. Anwender wünschen sich mehr Freiheit und Flexibilität, wollen nicht an feste Arbeitsplätze oder –geräte gebunden sein“,  sagt Patrick Sauerwein, Product Manager bei Matrix42. „Unser Ziel ist es, Organisationen in die Lage zu versetzen, diesen Ansprüchen nachzukommen und dabei gleichzeitig die Unternehmensrichtlinien einzuhalten. Mit dem Service Pack 2 haben wir die Unterstützung von virtuellen Arbeitsplätzen verbessert und optimiert, um der steigenden Anzahl von Virtualisierungsprojekten unserer Kunden gerecht zu werden. Viele dieser Projekte reflektieren die Veränderungen im heutigen Arbeitsleben. Das Service Pack 2 versetzt die IT in die Lage, den Anwendern die gewünschte dynamische Arbeitsplatzumgebung bereitzustellen.“</p>\n<h3 class=\"emphasis\">Neue Funktionen und Erweiterungen</h3>\n<h4 class=\"secondary\">Erweitertes und verbessertes Virtualisierungs-Management für Citrix XenDesktop und XenApp</h4>\n<ul class=\"list\">\n<li>Einfaches Erstellen von VHDs und schnelle Bereitstellung von Citrix XenApp Servern über Provisioning Services</li>\n<li>Optimierte Citrix XenApp Bereitstellung über Provisioning Services</li>\n<li>Bereitstellung von Disk Images auf physikalische und virtuelle Endgeräte</li>\n<li>Unterstützung von Workergruppen für flexible Software Zuweisungen</li>\n<li>Kosteneinsparungen durch Power Management für virtuelle Desktops</li>\n<li>Unterstützung aktueller Best Practices für Microsoft und Citrix</li>\n<li>Konfiguration von vDisk Access Modes und Write Cache Handling</li>\n</ul>\n<h4 class=\"secondary\">Kontinuierliche Unterstützung von Citrix-Plattformen</h4>\n<ul class=\"list\">\n<li>Citrix XenDesktop 5.5</li>\n<li>Citrix XenApp 6.5</li>\n<li>Citrix XenServer 5.6 SP2</li>\n<li>Citrix Provisioning Services 5.6 FP2</li>\n</ul>\n<h4 class=\"secondary\">Allgemeine Erweiterungen und Verbesserungen</h4>\n<ul class=\"list\">\n<li>Umsetzung von mehr als 400 Kundenanforderungen</li>\n<li>Optimierte Integration des Matrix42 Service Management</li>\n</ul>','','','2012-03-08',NULL,0,0,0),
	(6,'release','Gartner sieht Matrix42 als Visionär im Magischen Quadranten für Client Management Tools','Matrix42, führender Anbieter von Workplace Management Lösungen, wurde von Gartner als Visionär im Magischen Quadranten für Client Management Tools positioniert.','<p><strong class=\"emphasis\">Hannover (CeBIT), 6. März 2012</strong> – Matrix42, führender Anbieter von Workplace Management Lösungen, wurde von Gartner als Visionär im Magischen Quadranten für Client Management Tools positioniert. Das renommierte Analystenhaus beurteilte die Anbieter in diesem Segment bezüglich ihrer visionären Ausrichtung sowie der Fähigkeit, Strategien in die Tat umzusetzen. Laut der Marktstudie haben Visionäre, als was Gartner auch Matrix42 bezeichnet, das konkrete Ziel, ausgereifte Produkte zu bieten. Außerdem beweisen sie eine Technologieführerschaft bezüglich Lebenszyklus-Management-Funktionen – einer Forderung, die zunehmend von Anwendern gestellt wird. Laut Gartner sind  Visionäre aber auch Softwarehersteller, die in den nächsten Jahren eine bedeutende Rolle spielen werden. Visionäre haben demnach besondere Stärken in bestimmten Bereichen (z.B. Mobile Device Management, Mac Management, Applikationen, SaaS oder Desktop Virtualisierung), andererseits jedoch noch keine ausgereifte Lebenszyklus-Management-Lösung, globale Marktpräsenz oder eine geringe Bekanntheit der Marke.</p>\n<p>„Die Tatsache, dass Gartner uns als Visionär bezeichnet, reflektiert unsere Mission, Unternehmen eine IT-Strategie anzubieten, die die Anwenderzufriedenheit  zum Ziel hat“, sagt Herbert Uhl, CEO von Matrix42. „Wir sind heute einer der Marktführer bei Workplace Automation Lösungen, weil wir der einzige Anbieter sind, der Management-Lösungen für alle Formen von Endgeräten bietet – physische, virtuelle und mobile. Wir erfüllen die Ansprüche unserer Anwender bezüglich Freiheit, Flexibilität und Mobilität, weil wir einen Nutzer-zentrierten Ansatz verfolgen und der IT die Kontrolle zurück geben.“</p>\n<p>Die Anzahl privater Endgeräte, die beruflich genutzt werden, führt derzeit zu Branchentrends wie BYOD (Bring Your Own Device). So änderte Gartner auch den Namen des Magischen Quadranten in „Client Management Tools Market“, um die wachsende Gerätevielfalt  wie zum Beispiel mobile Geräte (hauptsächlich unter iOS oder Android) und Mac-Rechner abzubilden. Gartner betont zudem, dass Mobile Device Management (MDM) immer bedeutender werde und derzeit der wichtigste Bereich für Produktverbesserungen sei. Gegenwärtig könnten jedoch nicht einmal die Hälfte der verfügbaren MDM-Lösungen iOS oder Android managen.</p>\n<p>Uhl ergänzt: „Das vermehrte Aufkommen von Smartphones, Tablets und verschiedener Software-Plattformen macht das IT-Management immer komplexer. Unternehmen suchen nach einer MDM-Lösung, mit der sie sämtliche Geräte auf beliebigen Plattformen verwalten können, die VDI (Virtual Desktop Infrastructure) ermöglicht und dabei effizient ist sowie Standards und Compliance erfüllt. Matrix42 ist der einziger Anbieter, der all diese Services bietet und ist einzigartig positioniert, seinen Kunden dabei zu helfen, die neuen Standards und Geräte zu managen.“</p>\n<p>Matrix42-Lösungen werden derzeit bei über sechs Millionen Geräten von über 2.500 Kunden weltweit eingesetzt.</p>\n<h3 class=\"emphasis\">Über den Magischen Quadranten</h3>\n<p>Gartner unterstützt weder die im Magic Quadrant bewerteten Anbieter, Produkte oder Dienstleistungen, noch empfiehlt es Anwendern, bei der Auswahl ausschließlich nur die Anbieter mit den höchsten Bewertungen in Betracht zu ziehen. Der Magic Quadrant spiegelt die Auffassung des Marktforschungsinstituts Gartner wider und sollte nicht als Tatsachenaussage ausgelegt werden. Gartner schließt jegliche ausdrückliche oder implizite Haftung in Bezug auf diese Studie aus, ebenso jegliche Gewährleistung der Gebrauchstauglichkeit oder Eignung für einen bestimmten Zweck.</p>\n<h5>Pressekontakt</h5>\n<span class=\"bold\">Schmidt Kommunikation GmbH</span><br />\n<span>Alexandra Schmidt</span><br />\n<span>Schillerstrasse 8</span><br />\n<span>D-85521 Ottobrunn b. München</span><br />\n<span>Tel: 0049/ 89 / 60 66 92 22</span><br />\n<span>Mail: <a href=\"mailto:alexandra.schmidt@schmidtkom.de\">alexandra.schmidt@schmidtkom.de</a></span>','','gartner-magic-quadrant.png','2012-03-06',NULL,1,0,0),
	(7,'release','Matrix42 macht BYOD sicher und flexibel','Erste und einzige Integration von Mobile Device Management in IT Service Management ermöglicht Unternehmen die Kontrolle mobiler Endgeräte und gewährt Mitarbeitern mehr Flexibilität','<p><strong class=\"emphasis\">Neu-Isenburg, 7. Mai 2012</strong> - Matrix42, führender Anbieter von Workplace Management Lösungen, gibt heute die Integration von Mobile Device Management in seine IT Service Management (ITSM) Lösung bekannt. Matrix42 bietet die erste vollständige Integration dieser beiden sich ergänzenden Produkte an und gewährt dadurch Organisationen beim Management ihrer mobilen Geräte eine größere Transparenz und Kontrolle und erleichtert darüber hinaus die Umsetzung von BYOD Richtlinien.</p>\n<p>Diese Kombination bietet sowohl Unternehmen und als deren Mitarbeitern große Flexibilität hinsichtlich des Einsatzes und der Verwaltung der Geräte. So können IT-Administratoren sicherstellen, dass alle mit einem Netzwerk verbundenen Mobilgeräte inventarisiert und sicher sind. Außerdem können sie gemäß der Unternehmensrichtlinien verwaltet werden – unabhängig davon ob es sich um Unternehmensgeräte handelt oder um die privaten Geräte der Mitarbeiter. Desweiteren kann dem Anwender die Erlaubnis erteilt werden, dass er sein Gerät und Access- Management-Funktionen, beispielsweise die Handy-Ortung und den Data-Wipe, selbständig managt.</p>\n<p>\"Unser Ansatz hinsichtlich Mobile Device Management und IT Service Management spiegelt die Situation wider, mit der sich die meisten Organisationen heute konfrontiert sehen: Die Mitarbeiter wünschen mehr Flexibilität, um ihre eigenen mobilen Geräte zu nutzen oder aber mehr Möglichkeiten bei der Nutzung der vom Unternehmen bereitgestellten Geräte\", sagt Oliver Bendig, VP Produkt Management bei Matrix42. \"Wir bieten einen userzentrierten Fokus, der den Mitarbeitern im Umgang mit ihren mobilen Geräten mehr Freiheit gewährt, aber gleichzeitig den Unternehmen die Sicherheits- und Management-Features zur Verfügung stellt, die sie benötigen.\"</p>\n<p>Die Integration von Mobile Device Management und IT Service Management ist als Teil des neuen Matrix42 Service Store 5.3 SP3. Weitere Verbesserungen der Version sind:</p>\n<ul class=\"list\">\n<li>Verbesserte Workflow-Management-Prozesse für die Genehmigung und die Bereitstellung von Service-Requests</li>\n<li>Integration in den Matrix42 Enterprise Manager für die Bereitstellung von Microsoft SCCM Software-Paketen unmittelbar aus dem Service-Katalog</li>\n<li>Aktualisierte iPhone-App, mit einfachem Zugriff auf den Service-Katalog, so dass die Nutzer beispielweise Bestellungen aufgeben oder offene Tickets, usw. bearbeiten können</li>\n<li>Unterstützung für polnischsprachige Anwender</li>\n</ul>\n<p>Das Matrix42 Service Store 5.3 SP3 steht ab sofort als Download auf dem Support Portal auf der Matrix42 Webseite zur Verfügung. Weitere Informationen zum Matrix42 Service Store finden Sie hier: <a href=\"/losungen/mobile_device_management\">http://www.matrix42.de/losungen/mobile_device_management</a></p>','','byod.png','2012-05-07',NULL,1,0,0),
	(8,'release','Maximale Flexibilität und Mobilität','Jochen Jaser - CTO bei der Matrix42 AG','<h4 class=\"emphasis\">Business&IT: Welche Gründe sprechen für die Desktop-Virtualisierung?</h4>\n<p><strong class=\"secondary\">Jochen Jaser:</strong> Trends wie Bring your own Device (BYOD) und Consumerization (COIT) nehmen ständig zu und stellen das ITManagement vor neue Herausforderungen. Um den Zugriff auf geschäftsrelevante Anwendungen unabhängig vom Endgerät zu ermöglichen, sind verschiedene Szenarien denkbar.</p>\n<p>Ein Ansatz, den viele Unternehmen favorisieren, ist die Bereitstellung virtueller Desktops. Mit dieser Technologie können Mitarbeiter beispielsweise problemlos vom Home-Office aus arbeiten; aber auch Filialbetriebe oder dezentral organisierte Unternehmen profitieren davon. Selbst Stichworte wie „Offshoring Business“ oder „Green IT“, die Vorteile mit sich bringen aber auch Risiken bergen, treiben die Virtualisierung an.</p>\n<h4 class=\"emphasis\">Gibt es auch Gründe, die gegen die Virtualisierung sprechen?</h4>\n<p><strong class=\"secondary\">Jochen Jaser:</strong> Langfristig gesehen, gibt es sicherlich nur wenige Argumente, die dagegen sprechen – etwa die Herausforderungen im Lizenzrecht oder bei der Compliance. Allerdings ist die Desktop-Virtualisierung kein Allheilmittel, sondern bringt wie jede Technologie ihre Mehrwerte in bestimmten Bereichen besonders zum Tragen. Sie wird damit klassische Vorgehensmodelle nicht ersetzen, sondern sie ergänzen.</p>\n<h4 class=\"emphasis\">Was unterscheidet Matrix42 von den anderen Anbietern?</h4>\n<p><strong class=\"secondary\">Jochen Jaser:</strong> Der heutige Arbeitsplatz ist heterogen, flexibel und mobil. Darüber hinaus steigt die Anzahl der genutzten Geräte signifikant an. Hatte ein Benutzer in der Vergangenheit einen Laptop und ein Handy, sind es heute der virtuelle Desktop, der Laptop, ein Smartphone und ein Tablet.</p>\n<p>VDI hat das Potenzial, die Leistungsfähigkeit der IT deutlich zu erhöhen und dabei gleichzeitig Komplexitäten zu minimieren. Die meisten Hersteller setzen allerdings in erster Linie auf den „Solo-Betrieb“, der losgelöst von der sonstigen IT-Umgebung funktioniert. Im Gegensatz dazu bieten wir ein ganzheitliches Management des Arbeitsplatzes.</p>\n<p>Das Matrix42 Workplace Management stellt sicher, dass die IT mobile, physikalische und virtuelle Arbeitsplätze gleichermaßen im Griff behält und darüber hinaus die benötigten Prozesse optimal bereitstellt. Konkret erhält der Benutzer im Self Service und Service Catalog einen einfachen und klaren Überblick über seine Leistungen, kann dort zum Beispiel seinen neuen Tablet-PC oder einen dazu passenden virtuellen Desktop bestellen, der nach der Genehmigung durch die integrierte Automatisierung sofort bereitgestellt wird. Der Desktop des Anwenders wird zu dem, was er eigentlich schon immer sein sollte: einem Service. Die Zufriedenheit des Anwenders steigt, die Agilität der IT wird optimiert, die Kosten bleiben unten und Compliance ist arantiert.</p>\n<h4 class=\"emphasis\">Ist es der Kostendruck, der das Interesse an diesem Thema weckt?</h4>\n<p><strong class=\"secondary\">Jochen Jaser:</strong> Der Kostendruck ist oft die Initialzündung, sich mit dem Thema zu befassen. Den meisten wird aber schnell klar, dass dies lediglich ein Aspekt von vielen ist. In einer unserer Studien haben wir herausgefunden, dass knapp ein Drittel der Kunden die Kostenreduktion bei der Soft- und Hardware als Grund für die Desktop-Virtualisierung angibt. Gleichzeitig sagte aber ein Viertel der Probanden, dass die Flexibilität und Mobilität ausschlaggebend seien. Auch neue Betriebssysteme wie Windows 8 sind für Unternehmen ein Anlass, sich mit Desktop-Virtualisierung auseinanderzusetzen.</p>\n<p>Wer sich eingehend mit der Thematik befasst, stellt fest, dass ein Virtualisierungsprojekt vor allem eins ist: eine organisatorische Herausforderung. Denn um sicherzustellen, dass die Leistungsfähigkeit der Technologie wirklich kostenneutral angewendet werden kann, darf keine zusätzliche Expertengruppe innerhalb der IT erforderlich sein. Vielmehr ist eine gezielte Absprache unterschiedlicher IT-Bereiche erforderlich, damit die Desktop-Virtualisierung gelingt.</p>\n<h4 class=\"emphasis\">Welchen Einfluss haben Themen wie Consumerization of IT?</h4>\n<p><strong class=\"secondary\">Jochen Jaser:</strong> Die Conzumerization der IT (COIT) hat enormen Einfluss auf die Notwendigkeit der Desktop-Virtualisierung. Heute will sich kein Mitarbeiter mehr vorschreiben lassen, wann, wo und womit er zu arbeiten hat. Das, was wir aus unserem privaten Umfeld kennen, erwarten wir auch für unser Geschäftsleben: maximale Flexibilität und Mobilität.</p>\n<p>Die Virtualisierung von Unternehmens-Desktops ist ein probates und erfolgreiches Mittel, damit dieser Datenzugriff valide, preisgünstig und schnell möglich ist. Desktop-Virtualisierung bietet insbesondere für BYOD-Konzepte den Vorteil, dass die Business-Daten sicher im Unternehmen bleiben und keine Daten die Unternehmensgrenzen verlassen. Der Zugriff auf kritische Anwendungen oder sensitive Daten ist einfach und sicher zu kontrollieren. Damit bietet die Desktop-Virtualisierung für die Unternehmens-IT die Möglichkeit, einerseits dem Anwender den besten Service zu bieten, andererseits aber auch den Sicherheitserfordernissen des Unternehmens gerecht zu werden.</p>','','jochen-jaser.jpg','2012-05-31',NULL,0,0,0),
	(9,'release','Matrix42 Studie: BYOD verschiebt Prioritäten beim IT-­Arbeitsplatz-­Management','BYOD wird bald zur Norm, auch wenn sich die Unternehmen noch in der Planungsphase befinden','<p><strong class=\"emphasis\">Neu-­Isenburg, 21. Juni 2012</strong> – Die Auswirkungen von “Bring Your Own Device”(BYOD) und ähnlicher Bewegungen wie der „Consumerization of IT“ (COIT) zwingen Unternehmen dazu, über ihre Mobile Workplace Management Strategien nachzudenken. Das ist das Ergebnis einer Studie*, die Matrix42, führender Anbieter von Workplace Management Lösungen, jetzt veröffentlicht.</p>\n<p>Die Untersuchung ergab, dass sich knapp 80 Prozent der Unternehmen bewusst sind, dass Mobile Device Management (MDM) Lösungen innerhalb der nächsten zwei Jahre zu einer Schlüsselkomponente ihrer IT werden, wenngleich es derzeit noch keine bevorzugte Technologie zur Unterstützung von BYOD gibt. Außerdem geben mehr als 30 Prozent der Befragten an, dass ihr Unternehmen bisher noch keine Lösung für das Management von BYOD im Einsatz hat.</p>\n<p><a href=\"/losungen/mobile_device_management\">Die vollständige Untersuchung finden Sie hier</a>. Nachstehend eine Zusammenstellung der Kernaussagen der Matrix42 Studie:</p>\n<h3 class=\"emphasis\">BYOD wird zur Norm</h3>\n<ul class=\"list\">\n<li>24 Prozent der Befragten geben an, dass die IT‐Abteilung BYOD offiziell unterstützt; 40 Prozent sagen, dass BYOD in ihrem Unternehmen toleriert wird.</li>\n<li>7 Prozent unterstützen BYOD derzeit nicht, planen es aber für die Zukunft.</li>\n<li>In 29 Prozent der Unternehmen ist BYOD verboten.</li>\n</ul>\n<h3 class=\"emphasis\">Mobile Device Management (MDM) Lösungen werden gebraucht</h3>\n<ul class=\"list\">\n<li>Eine deutliche Mehrheit (78 Prozent) der Probanden sagt, dass Mobile Device Management in den nächsten zwei Jahren extrem bzw. sehr wichtig wird.</li>\n<li>Lediglich 2 Prozent bezeichnet MDM Lösungen als unwichtig.</li>\n</ul>\n<h3 class=\"emphasis\">Es mangelt an Implementierungen</h3>\n<ul class=\"list\">\n<li>31 Prozent der Unternehmen setzen aktuell keine Technologie oder Lösung zur Unterstützung von BYOD ein.</li>\n<li>16 Prozent verweisen auf die Verwendung von Lösungen zur Desktop Virtualisierung.</li>\n<li>15 Prozent sagen, dass sie MDM Lösungen nutzen.</li>\n<li>Die übrigen Befragten geben an, dass ihr Unternehmen Web-Applikationen, Self-Service Portale, Client Management oder IT Service Management Lösungen nutzt, um BYOD zu ermöglichen.</li>\n</ul>\n<h3 class=\"emphasis\">Geschäftsführung und IT-Abteilungen sind treibender Faktor</h3>\n<ul class=\"list\">\n<li>31 Prozent bezeichnen die IT als treibenden Faktor der BYOD-Initiativen ihres Unternehmens.</li>\n<li>23 Prozent geben den Vorstand oder die Geschäftsführung als Treiber an.</li>\n\n<h3 class=\"emphasis\">Sicherheit ist die wichtigste Herausforderung von BYOD</h3>\n<ul class=\"list\">\n<li>78 Prozent der Befragten nennen die Sicherheit der Unternehmensdaten als große bzw. größte Herausforderung.</li>\n<li>63 Prozent bezeichnen den Zugriff auf Unternehmensdaten als extrem bzw. sehr anspruchsvoll.</li>\n<li>56 Prozent sehen es als große oder sehr große Herausforderung, dass die IT nicht die Kontrolle über sensible Daten verliert.</li>\n</ul>\n<h3 class=\"emphasis\">Top BYOD Devices</h3>\n<ul class=\"list\">\n<li>46 Prozent geben an, dass in erster Linie eigene Smartphones im Unternehmen genutzt werden.</li>\n<li>21 Prozent nennen Laptops als BYOD Device.</li>\n<li>15 Prozent bringen eigene Tablets zum Arbeiten mit.</li>\n</ul>\n<p>“Die Zunahme privater Mobilgeräte am Arbeitsplatz stellt die IT bzw. das gesamte Unternehmen in punkto Sicherheit vor zahlreiche Herausforderungen“, sagt Herbert Uhl, Matrix42. “Diese Komplexität wird sich nicht von allein lösen, sondern es werden noch mehr mobile Betriebssysteme und End-geräte hinzukommen. Als einziger Anbieter für das ganzheitliche Management sämtlicher Endgeräte, hat Matrix42 schon vielen IT-Abteilungen dabei geholfen, eine Strategie für ihr Mobile Device Management zu entwickeln und den gesamten Lebenszyklus - von der Bereitstellung über das Sicherheitsmanagement bis hin zum Support - zu steuern; eine erfolgreiche Bilanz, die sich sehen lassen kann. Da die Komplexität im mobilen Bereich immer weiter zunimmt, ist eine Strategie für die Vereinfachung und zentrale Steuerung von BYOD von entscheidender Bedeutung.“</p>\n<img src=\"/assets/img/uploads/byod-challenge-graphic.jpg\" alt=\"BYOD Challenges\" />','','byod-implementation.png','2012-06-21',NULL,0,0,0),
	(10,'release','Desktop-Virtualisierung ist bei den meisten Unternehmen bereits Realität','Eine Untersuchung von Matrix42 zeigt, dass sich Desktop-Virtualisierung zunehmend etabliert und vor allem wegen der Kosteneinsparungen gefragt ist','<p><strong class=\"emphasis\">Neu-Isenburg, 28. Juni 2012</strong> – Viele Unternehmen bereiten sich vor, die Mehrzahl der Unternehmen hat die Desktop-Virtualisierung bereits umgesetzt. Das ist das Ergebnis einer Umfrage von Matrix42 beim Branchenevent „Citrix Synergy 2012“ in San Francisco. Die Umfrage unter IT-Spezialisten fand heraus, dass mehr als die Hälfte (51 Prozent) der Unternehmen Desktop-Virtualisierung  bereits umgesetzt oder erste Maßnahmen dafür ergriffen haben. Knapp ein Viertel (23 Prozent) der Befragten gab an, dieses Thema im kommenden Jahr anzugehen. Nur elf Prozent haben in Sachen Desktop-Virtualisierung noch keine Pläne.</p>\n<p>Die Gründe für die Umstellung auf virtuelle Desktops in den Unternehmen sind unterschiedlich, doch sind es vor allem die Kosteneinsparungen, welche die Unternehmen mit der Desktop-Virtualisierung realisieren wollen. Entsprechend waren die beiden am häufigsten genannten Gründe Kosteneinsparungen beim Management bzw. Support sowie geringere Ausgaben für Hard- und Software.  Gefragt nach dem Management der virtuellen Desktops, wollen rund drei Viertel (77 Prozent) der Befragten die gleichen Werkzeuge für die virtuellen Desktops verwenden, mit denen das Unternehmen bereits die physikalischen Desktops verwaltet.</p>\n<p>Es besteht Einigkeit darüber, dass zukünftig physikalische und virtuelle Umgebungen in einer zentralen IT-Management Lösung verwaltet werden. Inzwischen glauben immer mehr IT-Spezialisten, dass ein Großteil der Desktops zukünftig virtuell sein wird. So geht ein Drittel der Befragten davon aus, dass in einem Jahr 60 oder mehr Prozent der Desktops in ihrem Unternehmen bereits  virtualisiert sein werden. Damit liegt dieser Wert fast dreimal so hoch wie vor einem Jahr, als dies nur elf Prozent der Befragten glaubten.</p>\n<p>Nach Initiativen im Bereich BYOD gefragt, gaben 72 Prozent an, dass sie aktuell an einer Lösung arbeiten, um BYOD zu ermöglichen. Nur 15 Prozent sagten, dass ihr Unternehmen im Bereich BYOD keine Pläne habe.</p>','','','2012-06-28',NULL,0,0,0),
	(11,'award','Pink Elephant - (Zertifikate)',NULL,'<p>Pink Elephant hat mit Pink VERIFY das weltweit einzige unabhängige Programm zur ITIL-Zertifizierung aufgesetzt. Mit dem Prädikat Pink VERIFY werden Produkte ausgezeichnet, die Definitionen und Workflow-Anforderungen unternehmenskritischer IT Management Prozesse ITIL-gemäß unterstützen und gleichzeitig serviceorientiert sind. Die update4u Sofware AG, heutige Matrix42, erhielt 2008 als erstes deutsches Unternehmen das ITIL V3 Zertifikat für seine Suite.</p>','','pink-elephant.png','2008-06-01',NULL,0,0,0),
	(12,'award','EMA „All Star“ ',NULL,'<p>2008 wurde Matrix42 von Enterprise Management Associates (EMA) in deren “All Star” Report als “Rising Star” aufgenommen, der Kategorie der besten neuen bzw. innovativen Anbieter, die als Kandidaten für das All-Star Team in Frage kommen. Der EMA Report berichtet über die nach Analystenmeinung besten Softwarelösungen im Markt in 18 Disziplinen des Enterprise Systems Management. Für jede Disziplin werden drei Kategorien benannt: All-Star First Team (eine besondere Auszeichnung für die ‘Besten der Besten’), All-Stars (die Besten im Bereich Systemmanagement) und die ‘Rising Stars’, also die ‘aufsteigenden Sterne’ am Systemmanagement-Himmel.</p>','','ema-allstar.png','2008-06-02',NULL,0,0,0),
	(13,'award','Innovationspreis 2008',NULL,'<p>Der INNOVATIONSPREIS der Initiative Mittelstand schlägt jährlich die Brücke zwischen Innovationen und dem Mittelstand, indem er medienwirksam die innovativsten und mittelstandsgeeignetsten Produkte und Lösungen auszeichnet. Die Auszeichnung wird dem Bedürfnis des Mittelstands nach praxisrelevantem Know-How und Informationstransfer im Bereich der ITK gerecht und gibt mittelständischen Unternehmen Impulse zur Steigerung ihrer Wettbewerbsfähigkeit.</p>','','innovationspreis.png','2008-06-03',NULL,0,0,0),
	(14,'award','Deutschlands Kundenchampions',NULL,'<p>Die Matrix42 AG, europäischer Hersteller der Lifecycle-Management-Software Empirum, hat es unter die TOP 50 des Wettbewerbs „Deutschlands Kundenchampions 2008“ geschafft. Laut einer Untersuchung der Deutschen Gesellschaft für Qualität (DGQ), der forum! Marktforschung GmbH und des Wirtschaftsmagazins „impulse“ zählt Matrix42 zu den 50 Unternehmen mit den besten Kundenbeziehungen. Um „Deutschlands Kundenchampions” zu ermitteln, mussten sich die teilnehmenden Firmen einem mehrstufigen Bewertungsprogramm unterziehen – aus Sicht des Unternehmens, der Kunden und der Experten. Dafür wurden unter anderem von jedem teilnehmenden Unternehmen jeweils 100 Kunden ausführlich befragt und eine detaillierte Selbsteinschätzung der Qualität des Kundenbeziehungsmanagements erwartet.</p>','','kundenchampions.png','2008-06-05',NULL,0,0,0),
	(15,'award','Top 100',NULL,'<p>Das Gütesiegel TOP 100 bestätigt die Innovationsstärke des Unternehmens von wissenschaftlich unabhängiger Seite, das sorgt für Aufmerksamkeit und Imagezuwachs. Untersucht wird insbesondere, wie innovationsförderlich die Strukturen sind und wie erfolgreich das innovative Engagement ist.</p>',NULL,'top100_logo.png','2009-06-12',NULL,0,0,0),
	(16,'award','Testsieger Client Management 2010',NULL,'<p>IT-Administrator hat im Januar 2010 führende Client Management Suiten bei der Migration auf Windows 7 getestet. Die große Nachfrage nach Windows 7 überraschte selbst Microsoft. In zahlreichen Unternehmen steht nun die Migration von XP-Systemen auf Windows 7 an. Doch ist der nahtlose Umstieg auf das neue Betriebssystem ist nicht einfach. Im Vergleichstest, der sowohl die Verteilung als auch die Unterstützung im künftigen Betrieb prüft, wird Empirum von Matrix42 Testsieger! PDF Vergleichstest</p>',NULL,'testsieger.png','2010-06-15',NULL,0,0,0),
	(17,'award','Innovationspreis-IT 2010',NULL,'<p>Für den Service Catalog hat Matrix42 den „INNOVATIONSPREIS-IT 2010“ erhalten. Die Auszeichnung gilt Unternehmen, deren Produkte und Konzepte zukunftsweisend sind und die durch Innovationskraft überzeugen. Der Preis wurde von der Initiative Mittelstand in diesem Jahr zum 7. Mal verliehen. Der Service Store hat bei der Jury insbesondere durch die anwenderfreundliche Oberfläche sowie die zahlreichen Vorteile für Anwender und Unternehmen gepunktet.</p>',NULL,'innovationspreis-2010.png','2010-07-12',NULL,0,0,0),
	(18,'publication','VDI-Management im Test: Desktops verwalten mit Matrix42','Matrix42 ermöglicht mit der Client-Management-Lösung Empirum die einheitliche Verwaltung physischer wie virtueller Desktop-Welten (VDI).','<p>Ob physisch oder virtuell, fat, thin oder mobil – alle Clients brauchen intensive Pflege über ihren gesamten Lebenszyklus. Ab mehreren Dutzend solcher Systeme im Netz ist eine automatisierte Verwaltung erforderlich.</p>','http://www.computerwoche.de/hardware/data-center-server/2365308/','computerwoche.png','2011-03-02',NULL,0,0,0),
	(19,'publication','Tool-Test – Matrix42 Empirum v14, Teil 3: Alles wird gut','VDI macht sich breit, eine Management-Suite das Erfolgsrisiko klein','<p>Virtual Desktop Infrastructure (VDI), da sind sich viele Experten und Marktkenner einig, ist eine „und“-Technologie, die ihren Platz neben der herkömmlichen Terminal-Technik und den normalen Client-Installationen findet. Gut, wenn die gewählte IT-Management-Software diese verschiedenen Ansätze gleichermaßen steuert. Denn dieser hybride Ansatz macht das Wesen eines „Workplace Management“ aus.</p>','http://www.searchdatacenter.de/themenbereiche/networking/network-management/articles/305828/index.html','search-datacenter.png','2011-03-08',NULL,0,0,0),
	(20,'publication','Lizenzmanagement in virtualisierten Umgebungen','Lichtschein im Lizenzierungs-Dschungel','<p>Der durch Software verursachte Kostenanteil des IT-Budgets macht heute in vielen Unternehmen einen signifikanten Betrag aus. Gleichzeitig bringen neue Technologien wie die Virtualisierung eine höhere Komplexität der IT mit sich und erschweren das Management – auch und gerade von Lizenzen – erheblich. In diesem Artikel wollen wir anhand einiger exemplarischer Beispiele das Spannungsfeld der Lizenzierung in virtuellen Umgebungen besonders im Windows Server-Umfeld beleuchten und Hilfestellung für Administratoren leisten, die sich in diesem Dschungel zurechtfinden müssen.</p>','','it-administrator.png','2011-03-09',NULL,0,0,0),
	(21,'publication','Windows-7-Migration mit Matrix42 Empirum v14','Systemmanagement in der Praxis','<p>Administratoren müssen neben den physischen Systemen zunehmend virtuelle Desktops verwalten. Da geht ohne entsprechende Management-Tools meist nichts mehr. Wir haben eine Windows-7-Migraton von Clients in einem Praxisszenario mit der Managementlösung Empirum v14 durchgespielt.</p>','http://www.tecchannel.de/netzwerk/management/2034200/test_windows_7_migration_systemmanagement_mit_matrix42_empirum/','tecchannel-logo.png','2011-03-16',NULL,0,0,0),
	(22,'publication','„Who-is-Who“– Durchblick im Lizenz-Dschungel','Internationale Lizenz-Management-Studie','<p>In einer aufwändigen Studie hat der international bekannte Software Asset Management Spezialist Martin Thompson jetzt die weltweit führenden Software Asset Management (SAM)-Tools unter die Lupe genommen. Herausgekommen ist eine informative Übersicht der führenden SAM-Tools, die sich wie ein Who-is-Who des Lizenz Managements liest.</p>','','itmanagement-logo.png','2011-03-30',NULL,0,0,0),
	(23,'publication','Praxistest Matrix42 Empirum v14','Neue Software auch per Selbstbedienung','<p>Seit der Fusion der Karlsruher Update4u Software und der Neu-Isenburger Matrix42 im April 2009 firmiert das neue Unternehmen unter dem alten Namen Matrix42 AG. Infolge dieser Firmenehe verfügt Matrix42 neben der System-Management-Software auch über ein darauf aufsetzendes Service-Management. Die Service-Management-Anteile erweitern den Einsatzbereich der Software auf Unternehmensbereiche außerhalb der IT.</p>','','lanline-logo.png','2011-05-04',NULL,0,0,0),
	(24,'publication','Probleme lösen, nicht verwalten','m Gespräch mit Joachim Koch, Director Service – Information Technology bei der Magna Exteriors & Interiors GmbH & Co. KG in Sailauf, über die Einführung eines neuen System- und Servicemanagements','<p>Die IT-Abteilung muss Probleme lösen und nicht verwalten. Unsere internen Kunden erwarten von der IT-Abteilung absolute Kundennähe sowie schnellste Hilfe, und dies zu einem unschlagbaren Kostensatz.</p>','','itd-logo.png','2011-07-04',NULL,0,0,0),
	(25,'publication','Virtualisierung greift nach den Prozessen','Virtualisierung ist die Schlüsseltechnologie','<p>Weniger Aufwand für den Administrator und geringere Kosten für die IT – das waren\ndie wesentlichen Treiber für die starke Verbreitung der Server-Virtualisierung. Bei der\nDesktop-Virtualisierung greifen diese Argumente allerdings zu kurz: Sie zielt auf\nProzess-Verbesserungen ab.</p>','','itbusiness.png','2011-07-04',NULL,0,0,0),
	(26,'publication','Zwischen Wunsch und Wirklichkeit','Trotz zahlreicher Bedenken zeigen viele Unternehmen eine große Migrationsbereitschaft. Wer mit dem Gedanken spielt, auf Windows 7 umzusteigen, sollte sich gründlich darauf vorbereiten.','<p>Das Ende des Supports für Windows XP im April 2014 stellt viele Unternehmen vor die Notwendigkeit, ihr Betriebssystem auf Windows 7 zu migrieren. Mit den Vorbereitungen für den Wechsel sollten die IT-Verantwortlichen besser heute als morgen beginnen, schließlich kosten Kompatibilitätsanalysen der Soft- und Hardware Zeit.</p>','','business-it-logo.png','2011-07-07',NULL,0,0,0),
	(27,'publication','Enterprise Manager bügelt Microsoft-SCCM-Falten aus','Systemverwaltung der einfachen Art','<p>Windows-Systeme bringen bereits Basisfunktionen zur Verwaltung und Betreuung der Systeme mit. IT-Profis brauchen zumeist aber mehr Funktionalitäten und wechseln zum Microsoft System Center Configuration Manager (SCCM). Doch die Komplexität dieser Anwendung fordert hohen Aufwand bei Schulung und Einarbeitung: Ein Problem, das durch den Einsatz des „Enterprise Manager für SCCM“ von Matrix42 gelöst werden kann.</p>','','searchnetworking-logo.png','2011-08-22',NULL,0,0,0),
	(28,'publication','Mobile Geräte im Griff','Matrix42 erweitert Workplace-Managementsoftware','<p>Mit seiner neuen Workplace-Managementsoftware für mobile Endgeräte bietet Matrix42 aus Neu-Isenburg ein Tool zur Administration aller Formen von Endgeräten - sei es physisch, virtuell oder mobil.</p>','','dv-dialog-logo.png','2011-08-22',NULL,0,0,0),
	(29,'publication','Es ist angerichtet','Vor allem um die Aktivitäten des Außendienstes zu vereinfachen, setzt Villeroy & Boch seit Kurzem das Modul „Mobility for SAP CRM“ ein.','<p>MOBILE BUSINESS sprach mit Joachim Deitz, Head of CRM, über die Herausforderungen eines solchen Projekts.</p>','','mobile-business.png','2011-11-22',NULL,0,0,0),
	(30,'publication','VDI als organisatorische Herausforderung','Artikel von Oliver Bendig (Vice President Product Management bei Matrix42) über Herausforderungen und Erfolgsfaktoren der Desktop-Transformation','<p>Die Nutzung von VDI (Virtual Desktop Infrastructure) als technisches Bindeglied zwischen der traditionellen PC- und der Terminal-Service- Welt ist derzeit in aller Munde. VDI bietet eine Vielzahl von Vorteilen in der Bereitstellung einer sicheren und zentralisierten Desktop- Umgebung und ist für eine Vielzahl von Szenarien sehr interessant. Doch diese Architektur erfordert auch einige organisatorische und technische Änderungen im IT-Betrieb...</p>','','lanline-logo.png','2011-11-24',NULL,0,0,0),
	(31,'publication','Den mobilen Gerätepark sicher beherrschen','Artikel von Oliver Bendig (Vice President Product Management bei Matrix42) über Herausforderungen, Aspekte und Elemente von Mobile Device Management','<p>Die Zeiten, als die IT-Abteilung Alleinherrscherin über sämtliche Hardware eines Unternehmens war, sind vorbei. Viele Mitarbeiter nutzen an den IT-Abteilungen vorbei eigene mobile Hardware. Wie behält man die Kontrolle beziehungsweise wie gewinnt man sie zurück?</p>','http://www.zdnet.de/magazin/41558647/den-mobilen-geraetepark-sicher-beherrschen.htm','zdnet-logo.png','2011-12-19',NULL,0,0,0),
	(32,'publication','Mobile Geräte sicher unter Kontrolle','Integriertes PC- und Mobile-Device-Management','<p>Die Arbeitsbedingungen und Anforderungen an IT-Spezialisten ändern sich immer schneller: Mussten sie bis vor nicht allzu langer Zeit neben PCs nur mobile Geräte wie Notebooks verwalten, sehen sich Administratoren heute mit einem wahren Zoo unterschiedlicher Geräte konfrontiert. Spezielle Lösungen für die Verwaltung mobiler Geräte (Mobile-Device-Management, MDM) sollen helfen, auch solche neuen Endgeräte in die IT-Infrastruktur zu integrieren. Meist sind dies aber Stand-alone-Werkzeuge....</p>','','lanline-logo.png','2011-12-22',NULL,0,0,0),
	(33,'publication','Client-Management im steten Wandel','Neue Endgeräte, neue Probleme: Wie kommen die Anwendungen geordnet und gesichert auf die unterschiedlichen Geräte?','<p>IT-Verantwortliche und Administratoren, die heute einen Blick auf die „Landschaft“ der Geräte in ihrem Unternehmensnetzwerk werfen, sehen sich mit einer Reihe aktueller Probleme konfrontiert: Nicht nur das immer mehr unterschiedliche Geräte auftauchen, sondern die Anwender bestehen auch darauf, ihre eigene Tablets und Smartphones im Netz zu verwenden. Damit steht das Client-Management zunehmend vor neuen Herausforderungen...</p>','','nt4admins-logo.png','2012-01-18',NULL,0,0,0),
	(34,'publication','Mobile Device Management: Noch eine grüne Wiese','Im Mobile Device Management liegt noch viel Potenzial für Reseller','<p>Die wenigsten Unternehmen verfügen über eine Strategie für das Management ihrer Smartphones und Tablet-PCs – Integratoren und Fachhändlern mit dem richtigen Know-how bietet sich hier ein riesiger Markt...</p>','','telecomhandel-logo.png','2012-01-18',NULL,0,0,0),
	(35,'publication','Wie modernes IT Service Management bei Mitarbeitern und Bewerbern punktet','So klappt’s auch mit dem Mitarbeiter','<p>In Zeiten zunehmenden Fachkräftemangels konkurrieren viele Unternehmen um wenige, kompetente Bewerber. Diese wiederum haben oft nicht nur die Qual der Wahl, sondern auch ganz klare Vorstellungen von ihrem zukünftigen Arbeitgeber. Entscheidungskriterien sind für sie, neben den klassischen Hardskills wie Bezahlung und Softskills wie das Betriebsklima, die Arbeitszeitenregelung, auch die IT-Ausstattung des zukünftigen Arbeitsplatzes.</p>','','itmanagement-logo.png','2012-01-30',NULL,0,0,0),
	(36,'publication','Interview Mobile Device Management','Den mobilen Gerätepark sicher beherrschen','<p>Interview mit Oliver Bendig zu den Themen Mobile Device Management (MDM) und Bring Your Own Device (BYOD) im Handelsblatt.</p>','','handelsblatt-logo.png','2012-02-08',NULL,0,0,0),
	(37,'publication','Mobile Device Workplace Management in der Cloud','Mobile Workplace Management als SaaS-Lösung','<p>Premiere auf der CeBIT: Matrix42 präsentiert erstmals seine Mobile Workplace Management Lösung als Software as a Service (SaaS) Angebot. Außerdem demonstriert das Unternehmen, wie anwenderfreundliches Workplace Management funktioniert und wie es den IT-Abteilungen dabei hilft, auch bei zunehmender Gerätevielfalt den Überblick nicht zu verlieren.</p>','','chefbuero-logo.png','2012-03-20',NULL,0,0,0),
	(38,'publication','Virtualisierung und Mobilität erhöhen Bedarf beim Client-Management','Matrix42 will mit Partnern signifikant wachsen','<p>Durch die Trendthemen Virtualisierung und Mobile Device Management will der hiesige Systemmanagement-Anbieter Matrix42 deutlich wachsen. Der Channel soll wesentlich dazu beitragen.</p>','http://www.crn.de/software/artikel-95052.html','crn-logo.png','2012-04-19',NULL,0,0,0),
	(39,'publication','Management will Usability, IT das Business unterstützen','An der Swiss IT Conference präsentierten Computerworld und das IDC zum vierten Mal die Ergebnisse der grossen Marktstudie mit detaillierten Fakten zu den IT-Investitionen in der Schweiz.','<p>Am Donnerstag trafen sich rund 150 Vertreter aus Wirtschaft und Industrie zur jährlichen Swiss IT Conference von Computerworld und IDC....</p>','http://www.computerworld.ch/news/it-branche/artikel/management-will-usability-it-das-business-unterstuetzen-59847/','computerworld-logo.png','2012-04-20',NULL,0,0,0),
	(40,'publication','Matrix42 stärkt Channel-Ausrichtung','Feinschliff am Partnerprogramm','<p>Unter vielen Systemhäusern galt Matrix42 lange als echter Geheimtipp. Denn mit den Produkten des Herstellers lassen sich viele Probleme lösen, die IT-Leitern derzeit auf den Nägeln brennen....</p>','http://www.channelpartner.de/channelcenter/windows/2582139/index.html','channelpartner-logo.png','2012-04-26',NULL,0,0,0),
	(41,'publication','Nicht ohne meinen Mac','Was das Management heterogener IT-Landschaften mit Recruiting zu tun hat','<p>Die Interessenten haben andererseits oft sehr genaue Vorstellungen davon, was und wie sie arbeiten möchten. Immer wichtiger werden bei der Arbeitgeberwahl neben den klassischen Fragen nach Bezahlung und Urlaubsanspruch auch Aspekte wie das Betriebsklima, Weiterbildungsmöglichkeiten und die IT-Ausstattung</p>','','chefbuero-logo.png','2012-05-03',NULL,0,0,0),
	(42,'publication','Wie man die IT-Kosten transparent macht','Prozesse lassen sich nicht mit einer Software implementieren. Das erfuhr auch der Logistikspezialist Simon Hegele, als er eine neue Struktur für das Management der IT-Service-Provider einschließlich der internen Leistungsverrechnung einführte.','<p>Wer mehr als 90 Jahre am Markt für kundennahe Logistikdienstleistungen erfolgreich ist, sollte die Anforderungen und Wünsche der Kunden wohl ganz genau kennen. Ein zentraler Erfolgsfaktor beim Logistikdienstleister Simon Hegele sind standardisierte und nachvollziebare Prozesse. Selbstverständlich gehört dazu auch ein wettbewerbsfähiges Preis-Leistungsverhältnis, und dazu muss das Unternehmen seine Kosten zu jeder Zeit im Griff haben...</p>','http://www.computerwoche.de/management/it-strategie/2513218/','computerwoche.png','2012-06-13',NULL,1,0,0);

/*!40000 ALTER TABLE `press_releases` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table states
# ------------------------------------------------------------

DROP TABLE IF EXISTS `states`;

CREATE TABLE `states` (
  `id` char(3) NOT NULL DEFAULT '',
  `country_id` varchar(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk-country-states` (`country_id`),
  CONSTRAINT `fk-country-states` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;

INSERT INTO `states` (`id`, `country_id`, `name`, `disabled`)
VALUES
	('AG','CH','Aargau',0),
	('AI','CH','Appenzell Innerrhoden',0),
	('AR','CH','Appenzell Ausserrhoden',0),
	('AT1','AT','Burgenland',0),
	('AT2','AT','KŠrnten',0),
	('AT3','AT','Niederšsterreich',0),
	('AT4','AT','Oberšsterreich',0),
	('AT5','AT','Salzburg',0),
	('AT6','AT','Steiermark',0),
	('AT7','AT','Tirol',0),
	('AT8','AT','Vorarlberg',0),
	('AT9','AT','Wien',0),
	('BB','DE','Brandenburg',0),
	('BE','DE','Berlin',0),
	('BEC','CH','Bern',0),
	('BL','CH','Basel-Land',0),
	('BS','CH','Basel-Stadt',0),
	('BW','DE','Baden-WŸrttemberg',0),
	('BY','DE','Bayern',0),
	('FR','CH','Freiburg',0),
	('GE','CH','Genf',0),
	('GL','CH','Glarus',0),
	('GR','CH','GraubŸnden',0),
	('HB','DE','Bremen',0),
	('HE','DE','Hessen',0),
	('HH','DE','Hamburg',0),
	('JU','CH','Jura',0),
	('LU','CH','Luzern',0),
	('MV','DE','Mecklenburg-Vorpommern',0),
	('NE','CH','Neuenburg',0),
	('NI','DE','Niedersachsen',0),
	('NW','DE','Nordrhein-Westfalen',0),
	('NWC','CH','Nidwalden',0),
	('OT','OT','Other',1),
	('OW','CH','Obwalden',0),
	('RP','DE','Rheinland-Pfalz',0),
	('SG','CH','St. Gallen',0),
	('SH','DE','Schleswig-Holstein',0),
	('SHC','CH','Schaffhausen',0),
	('SL','DE','Saarland',0),
	('SN','DE','Sachsen',0),
	('SO','CH','Solothurn',0),
	('ST','DE','Sachsen-Anhalt',0),
	('SZ','CH','Schwyz',0),
	('TG','CH','Thurgau',0),
	('TH','DE','ThŸringen',0),
	('TI','CH','Tessin',0),
	('UR','CH','Uri',0),
	('VD','CH','Waadt',0),
	('VS','CH','Wallis',0),
	('ZG','CH','Zug',0),
	('ZH','CH','ZŸrich',0);

/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL DEFAULT '',
  `first` varchar(255) DEFAULT '',
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



--
-- Dumping routines (PROCEDURE) for database 'darth_de'
--
DELIMITER ;;

# Dump of PROCEDURE sp_belongs_to
# ------------------------------------------------------------

/*!50003 DROP PROCEDURE IF EXISTS `sp_belongs_to` */;;
/*!50003 SET SESSION SQL_MODE=""*/;;
/*!50003 CREATE*/ /*!50020 DEFINER=`root`@`localhost`*/ /*!50003 PROCEDURE `sp_belongs_to`(IN schemaName VARCHAR(100), IN tableName VARCHAR(100))
BEGIN
		SELECT TABLE_NAME AS keyTable, GROUP_CONCAT(COLUMN_NAME) AS keyColumns, REFERENCED_TABLE_NAME AS refTable, GROUP_CONCAT(REFERENCED_COLUMN_NAME) AS refColumns, CONSTRAINT_NAME AS constraintName
		FROM INFORMATION_SCHEMA.key_column_usage
		WHERE TABLE_SCHEMA = schemaName
		AND TABLE_NAME = tableName
		AND REFERENCED_TABLE_NAME IS NOT NULL
		GROUP BY constraintName;
	END */;;

/*!50003 SET SESSION SQL_MODE=@OLD_SQL_MODE */;;
# Dump of PROCEDURE sp_has_many
# ------------------------------------------------------------

/*!50003 DROP PROCEDURE IF EXISTS `sp_has_many` */;;
/*!50003 SET SESSION SQL_MODE=""*/;;
/*!50003 CREATE*/ /*!50020 DEFINER=`root`@`localhost`*/ /*!50003 PROCEDURE `sp_has_many`(IN schemaName VARCHAR(100), IN tableName VARCHAR(100))
BEGIN
	  SELECT REFERENCED_TABLE_NAME AS keyTable, GROUP_CONCAT(REFERENCED_COLUMN_NAME) AS keyColumns, TABLE_NAME AS refTable, GROUP_CONCAT(COLUMN_NAME) AS refColumns, CONSTRAINT_NAME AS constraintName
	  FROM INFORMATION_SCHEMA.key_column_usage
	  WHERE TABLE_SCHEMA = schemaName
	  AND REFERENCED_TABLE_NAME = tableName
	  GROUP BY constraintName;
	END */;;

/*!50003 SET SESSION SQL_MODE=@OLD_SQL_MODE */;;
DELIMITER ;

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

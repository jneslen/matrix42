# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.21)
# Database: darth_de
# Generation Time: 2012-06-27 21:27:00 +0000
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
  `province` text,
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
	(2,'content','%%getstartedpage%%','Ein gut Get Started, dass ein Bildlauf nach leadform auf der gleichen Seite','<div class=\"well margin-right\">\n	<div class=\"left\">\n		<h3 class=\"no-margin\">Lassen Sie Matrix42 befähigen, die Kontrolle über Ihre IT-Bedürfnisse zu sein.</h3>\n		<h4 class=\"no-margin\">Die perfekte IT-Lösung Starten Sie jetzt.</h4>\n	</div>\n	<a href=\"/sign_up\" class=\"btn btn-info btn-large right margin-right\">Starten Sie noch heute!</a>\n	<div class=\"clearfix\"></div>\n</div><!-- well -->',NULL,NULL,NULL,NULL,NULL,NULL,1,0),
	(3,'view','%%sidebarsupport%%','Das Support-und Kontaktinformationen auch für die Sidebar',NULL,NULL,NULL,NULL,NULL,'sidebar/support',NULL,1,0),
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
	(1,2,'main','<div class=\"padded\">\n	<h3 class=\"emphasis\">Matrix42. Empowering the Dynamic Workplace.</h3>\n	<p>Matrix42 is the leading supplier for Workplace Management solutions. Matrix42 Workplace Management enables the seamless management of physical, virtual and mobile environments. It combines Client Lifecycle, Cloud, SaaS, Virtualization, Mobile Device Management and Service Management into a holistic solution enabling users to have transparent access to their data and services everywhere, from any virtual or physical device at any time.</p>\n	<p>Users can select and order services from a central marketplace. Based on company policies they will be provisioned on demand - and can even be cross-charged. The solution allows users to have autonomy while still allowing IT to maintain control and automation. Matrix42 Workplace Management increases user productivity as well as IT-efficiency and enables the implementation of new technologies like cloud computing and virtualization.</p>\n	<p>Founded in 1992, Matrix42, with headquarters near Frankfurt Germany and Salt Lake City, Utah, has been established in the dynamic IT market for 20 years. More than six million clients are managed by Matrix42 software with more than 2,500 customers worldwide including market-leading enterprises such as Infineon, Magna, Lufthansa Systems and Puma and integrators like T-Systems, Raiffeisen IT, msg systems and Bechtle. In early 2008, Matrix42 became part of the Asseco Group. With over 8,000 employees and a market capitalization of around 1.2 billion Euros, Asseco is one of the largest European software companies.</p>\n	%%getstartedpage%%\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#awards\" data-toggle=\"tab\">Awards</a></li>\n			<li><a href=\"#management\" data-toggle=\"tab\">Management</a></li>\n			<li><a href=\"#locations\" data-toggle=\"tab\">Locations</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"awards\">\n					<h3 class=\"emphasis\">Awards</h3>\n					<p>Matrix42 is proud to have its products industry certified and to have received recognition for the quality of both their services and products.</p>\n					%%awardslist%%\n				</div><!-- awards -->\n				<div class=\"tab-pane padded-content\" id=\"management\">\n					<h3 class=\"emphasis\">Management Board</h3>\n					<table class=\"table\">\n						<tr>\n							<td><img src=\"/assets/img/thumbnails/management/herbert_uhl.jpg\" alt=\"Herber Uhl (Chairman, CEO)\" /></td>\n							<td>\n								<h4 class=\"secondary\">Herbert Uhl (Chairman, CEO)</h4>\n								<p>As Chief Executive Officer of Matrix42, Herbert Uhl is responsible for the company&#39;s vision, strategy and continuedprofitable growth. Herbert joined the company through the merger of Matrix42 AG and update4u Software AG in March 2009. Herbert was responsible for update4u&#39;s company strategy and sales organization from 2000 onwards, achieving dramatic growth during that time. Prior to update4u, Herbert founded the software company Prodacta in 1992, which went public in 1999.</p>\n								<p>Originally from the Rhineland region of Germany, Herbert recently relocated to the Salt Lake City, Utah area in order to drive Matrix42&#39;s growth in the North American market.</p>\n							</td>\n						</tr>\n						<tr>\n							<td><img src=\"/assets/img/thumbnails/management/jochen_jaser.jpg\" alt=\"Jochen Jaser (CTO)\" /></td>\n							<td>\n								<h4 class=\"secondary\">Jochen Jaser (CTO)</h4>\n								<p>Jochen Jaser joined Matrix42 as CTO in April 2009 with responsibility for the further development of the two product lines - IT Service Management and Systems Management.</p>\n								<p>Lured by an exciting challenge, Jochen Jaser joined update4u Software AG in 2004. From 2007 he joined the executive team with responsibility for products and services. Jaser can look back on 15 years of experience in international product and project management. He performs his job with real passion – just like his sports: he gets new ideas when sailing, scuba diving, or snowboarding.</p>\n							</td>\n						</tr>\n						<tr>\n							<td><img src=\"/assets/img/thumbnails/management/michael_schmidt.jpg\" alt=\"Michael Schmidt (CFO)\" /></td>\n							<td>\n								<h4 class=\"secondary\">Michael Schmidt (CFO)</h4>\n								<p>Michael Schmidt is CFO at Matrix42 and in charge of finance and administration.</p>\n								<p>Michael Schmidt was born in the federal German state of Hesse. He joined Matrix42 in July 2011 as commercial director and has been a member of the board since beginning of 2012. Mr. Schmidt has more than 20 years of finance experience in international organizations. As a means of relaxation, he enjoys being with his family, practices endurance sports and likes to go sailing.</p>\n							</td>\n						</tr>\n						<tr>\n							<td><img src=\"/assets/img/thumbnails/management/herbert_schoenle.jpg\" alt=\"Herbert Schoenle (VP Sales)\" /></td>\n							<td>\n								<h4 class=\"secondary\">Herbert Schoenle (VP Sales)</h4>\n								<p>In August 2011 Herbert Schoenle joined Matrix42 as head of the company&#39;s Sales and Regional Marketing EMEA division. Born in the region of Upper Swabia, Herbert Schoenle has 20 years of experience that flow into his work for Matrix42 AG. During the last 15 years, Herbert Schoenle worked for PTC, where he was in charge of building up a profitable sales organization in Europe. In his new role at Matrix42, his task is to drive further expansion in Europe. Outside of work, he likes to be with his family and spend his leisure time at the nearby Lake of Constance and in the Alps.</p>\n							</td>\n						</tr>\n						<tr>\n							<td><img src=\"/assets/img/thumbnails/management/oliver_bendig.jpg\" alt=\"Oliver Bendig (VP of Product Management)\" /></td>\n							<td>\n								<h4 class=\"secondary\">Oliver Bendig (VP of Product Management)</h4>\n								<p>As VP of Product Management, Oliver Bendig is responsible for product strategy and roadmap for the Matrix42 product portfolio. Aside from heading the product management team, Oliver spends a lot of time consulting with customers regarding their IT service management, virtualization and mobility strategies. Oliver has 10+ years experience in building and managing products in the Workplace Management space. Before joining Matrix42 in 2009, he was responsible for product management at Enteo Software and FrontRange Solutions. Oliver holds a BA and a Master of Science in computer science from the University of Applied Sciences in Karlsruhe, Germany.</p>\n							</td>\n						</tr>\n					</table>\n				</div><!-- management -->\n				<div class=\"tab-pane padded-content\" id=\"locations\">\n					<div class=\"span8\">\n						<h2 class=\"emphasis\">Matrix42 Locations</h2>\n						<h3 class=\"secondary border-bottom\">USA</h3>\n						<h4 class=\"emphasis\">North American Headquarters</h4>\n						<p>\n							<span class=\"block\">3400 North Ashton Blvd</span>\n							<span class=\"block\">Suite 110</span>\n							<span class=\"block\">Lehi, Utah 84043</span>\n							<span class=\"block\">Phone: +1.801.653.3700</span>\n							<span class=\"block\">Fax: +1.800.848.5410</span>\n						</p>\n						<p>mail: <a href=\"mailto:info@matrix42.com\">info@matrix42.com</a></p>\n					</div><!-- span8 -->\n					<div class=\"span5\">\n						<h5 class=\"emphasis\">East coast office</h5>\n						<p>\n							<span class=\"block\">53 Perimeter Center East</span>\n							<span class=\"block\">Suite 200</span>\n							<span class=\"block\">Atlanta, Georgia 30346</span>\n							<span class=\"block\">Phone: +1.888.MS42.USA</span>\n						</p>\n					</div><!-- span5 -->\n					<div class=\"span5\">\n						<h5 class=\"emphasis\">Silicon Valley office</h5>\n						<p>\n							<span class=\"block\">901 Campisi Way</span>\n							<span class=\"block\">Suite 150</span>\n							<span class=\"block\">Campbell, California 95008</span>\n						</p>\n					</div><!-- span5 -->\n					<div class=\"span8\">\n						<h3 class=\"secondary border-bottom\">Europe</h3>\n					</div>\n					<div class=\"span5\">\n						<h5 class=\"emphasis\">EMEA Headquarters</h5>\n						<p>\n							<span class=\"block\">Dornhofstr. 44-46</span>\n							<span class=\"block\">63263 Neu-Isenburg</span>\n							<span class=\"block\">Germany</span>\n							<span class=\"block\">Phone: +49 (0) 61 02 - 816-0</span>\n							<span class=\"block\">Fax: +49 (0) 61 02 - 816-100</span>\n						</p>\n						<p>mail: <a href=\"mailto:info@matrix42.de\">info@matrix42.de</a></p>\n					</div><!-- span5 -->\n					<div class=\"span5\">\n						<h5 class=\"emphasis\">Karlsruhe office</h5>\n						<p>\n							<span class=\"block\">Amalienbadstr. 41 / Bau 54</span>\n							<span class=\"block\">76227 Karlsruhe</span>\n							<span class=\"block\">Phone: +49 (721) 91432-300</span>\n							<span class=\"block\">Fax: +49 (0)721 91432-499 </span>\n						</p>\n					</div><!-- span5 -->\n					<div class=\"span8\">\n						<h3 class=\"secondary border-bottom\">United Kingdom</h3>\n						<h5 class=\"emphasis\">Leicestershire Office</h5>\n						<p>\n							<span class=\"block\">Contact: David Messenger</span>\n							<span class=\"block\">22 Scalford Road</span>\n							<span class=\"block\">Eastwell</span>\n							<span class=\"block\">Leicestershire</span>\n							<span class=\"block\">LE144EJ</span>\n							<span class=\"block\">United Kingdom</span>\n							<span class=\"block\">Phone: +44 (0)1949.861.049</span>\n							<span class=\"block\">Mobile: +44 (0)7787.255.422</span>\n						</p>\n						<p>mail: <a href=\"mailto:david.messenger@matrix42.com\">david.messenger@matrix42.com</a></p>\n					</div>\n				</div><!-- locations -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(2,3,'main','%%leadform%%\n<div class=\"padded padded-top\">\n	<div class=\"well\">\n		<h4 class=\"no-margin\">Alternatively you can choose from our list of resellers below:</h4>\n	</div><!-- well -->\n</div><!-- padded -->\n%%resellerlist%%',NULL),
	(3,4,'main','<div class=\"padded\">\n	<h4 class=\"emphasis\">Challenges of Supporting the Mobile Workforce</h4>\n	<p>Your employees are becoming more reliant on their mobile devices to work both inside and outside the office. According to a Cisco study on the international workforce, 66% of employees &quot;expect IT to allow them to use any device – personal or company-issued – to access corporate networks, applications, and information anywhere at any time, and they expect the types of devices to continue diversifying.&quot;</p>\n	<p>This trend is due to the growing popularity of smartphones, tablets and social media - especially among young professionals. Your tech-savvy, young employees expect to use the same technology at work that they use in their personal lives. If you want to attract and retain talent, you must support the next generation&#39;s preferred work style and start a &quot;bring your own device&quot; (BYOD) program.</p>\n	<p>If you don&#39;t embrace BYOD, your employees will find a way to work around your policies and use their own mobile devices to access your network. This can result in breaches to your systems and hackers accessing your sensitive corporate data - especially if an employee&#39;s mobile device is lost or stolen. That&#39;s why your BYOD initiative must meet your employees&#39; needs while ensuring your company data is safe and compliant - without affecting the rest of your IT infrastructure.</p>\n	%%getstartedpage%%\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#benefits\" data-toggle=\"tab\">Benefits</a></li>\n			<li><a href=\"#keys\" data-toggle=\"tab\">3 Keys</a></li>\n			<li><a href=\"#features\" data-toggle=\"tab\">Features</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"benefits\">\n					<h3 class=\"emphasis\">The Business Benefits of &quot;Bring Your Own Device&quot; (BYOD)</h3>\n					<p>The transition to BYOD is as much about processes as it is about technology. When you put the right systems in place to support BYOD, you will reduce your risks and achieve the following benefits:</p>\n					<ul class=\"list\">\n						<li><span class=\"bold emphasis\">Cost reductions.</span> <a href=\"http://www.gartner.com/it/page.jsp?id=696007\" target=\"_blank\">Gartner reported</a> that organizations can see a 9% to 44% reduction in capital expenditures when they adopt BYOD. This is because BYOD is similar to giving employees car allowances instead of buying them company cars - they both allow you to provide employees with the tools they need while you save money. By allowing employees to use their own devices, you can greatly reduce the amount of hardware you must purchase and maintain.</li>\n						<li><span class=\"bold emphasis\">Increased employee satisfaction and productivity.</span> When you allow your employees to use their favorite mobile devices, they can accomplish more and respond to requests faster - whether they&#39;re working in the office or remotely. BYOD also shows your employees that you are willing to support their preferred work styles.</li>\n						<li><span class=\"bold emphasis\">Greater security across all of your devices.</span> Implementing a BYOD strategy allows you to secure all of your organization&#39;s mobile devices, avoid data loss and protect yourself from industrial spying and data theft.</li>\n					</ul>\n					<p>Matrix42 makes it easy for you to launch a BYOD program that meets the needs of both your employees and IT team. Your employees can use their favorite mobile devices to access your network, request support and receive services. Meanwhile, your IT department can maintain control over all of your organization&#39;s mobile devices, provide a higher level of service and reduce their costs.</p>\n				</div><!-- benefits -->\n				<div class=\"tab-pane padded-content\" id=\"keys\">\n					<h3 class=\"emphasis\">3 Keys to a Successful BYOD Program</h3>\n					<p>Matrix42 provides you with all the tools you need to start and manage your BYOD program. The key features of our BYOD services include:</p>\n					<h4 class=\"emphasis\">Analysis</h4>\n					<p>The first step in a successful BYOD program is analysis. Matrix42&#39;s Inventory Management and software usage monitoring tools will help you to analyze your end users&#39; work profiles. You&#39;ll learn which devices, apps and services they prefer, as well as which users are good candidates for BYOD.</p>\n					<h4 class=\"emphasis\">Virtual Desktop Management</h4>\n					<p>Desktop virtualization is a key part of BYOD because it allows you to isolate your corporate data and apps from your end users&#39; personal data and apps. Matrix42 partners with industry leaders, such as Citrix, who provide the virtualization technology.</p>\n					<p>We then automate the entire virtualization process – including configuring the virtual desktops, delivering them to your end users&#39; mobile devices and managing them going forward. This high level of automation has allowed some of our clients to lower their virtual desktop infrastructure migration costs by up to 75%.</p>\n					<h4 class=\"emphasis\">End User Self-Service</h4>\n					<p>Offering self-service options is critical to your BYOD program&#39;s success. Through Matrix42 Service Catalog, your end users can shop for IT services from their mobile devices and receive automated support. For example, end users can request and install corporate apps directly from their personal mobile devices. This allows you to provide faster response times while you greatly reduce the effort you put into service delivery. Since all requests for service are automatically approved and provisioned, you can reduce your help desk calls by as much as 40%.</p>\n				</div><!-- keys -->\n				<div class=\"tab-pane padded-content\" id=\"features\">\n					<h3 class=\"emphasis\">Overcoming the Challenges of BYOD</h3>\n					<p>Many IT professionals view BYOD as more work and hassle. Your own IT department may be concerned about some of the common problems that can occur if a BYOD program is not properly planned, including security breaches and high costs. Matrix42 offers the following tools to help you overcome these problems:</p>\n					<h4 class=\"emphasis\">Advanced Security Features</h4>\n					<p>Matrix42 offers a number of features to help you maintain a secure environment and control over your company assets and data. For example, Mobile Device Management provides you with the following security features, so you don&#39;t have to worry about mobile device theft or data loss.</p>\n					<ul class=\"list\">\n						<li><span class=\"bold emphasis\">Remote Management.</span> When Matrix42 detects a non-compliant device, it will instantly disable access to your corporate data and services. If a mobile device is lost, stolen or non-compliant, Matrix42 can remotely lock or wipe it of all corporate data to prevent information theft.</li>\n						<li><span class=\"bold emphasis\">Automated back-up features</span> help you avoid critical data loss.</li>\n						<li><span class=\"bold emphasis\">A mobile email gateway</span> that tracks every device interaction and allows only authorized devices to access your email server. It will also warn you of threats.</li>\n					</ul>\n					<h4 class=\"emphasis\">Cost Control Tools</h4>\n					<p>Although you need to make an investment when you adopt the desktop virtualization technology that is needed for BYOD, the long-term value far outweighs the upfront costs. Matrix42 can help you achieve the following benefits from desktop virtualization:</p>\n					<ul class=\"list\">\n						<li><span class=\"bold emphasis\">Up to a 60% reduction in your IT management costs</span> thanks to automated installations and updates.</li>\n						<li><span class=\"bold emphasis\">Easy desktop management.</span> Matrix42 allows you to manage all of your physical and virtual devices from just 1 flexible console. This can reduce the total cost of ownership of your virtual devices by up to 45%.</li>\n						<li><span class=\"bold emphasis\">Automated license compliance,</span> which can help you avoid costly audits and lower your software licenses expenses by up to 23%.</li>\n					</ul>\n				</div><!-- features -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(4,5,'main','<div class=\"padded\">\n<h3 class=\"emphasis\">Matrix42 for Desktop Virtualization</h3>\n<h4 class=\"emphasis\">The Essential Solution for Desktop Transformation</h4>\n<p>Virtual desktops are quickly gaining traction in enterprises, with 80 percent of large companies and 76 percent of medium-sized companies either considering or in the process of adopting the technology, according to a recent survey. However, businesses find they still face the same challenges of managing the operating system, applications and user settings. What’s more, the introduction of virtual desktops adds further diversity with IT having to manage a hybrid physical/virtual environment for the foreseeable future.</p>\n<p>Matrix42\'s solution fully supports all three phases of the Citrix Desktop Transformation Model, allowing companies to assess virtual desktop readiness, automate the migration process and ensure smooth operation of the virtual environment.</p>\n<img src=\"/assets/img/virtual-infrastructure_automation.jpg\" alt=\"Virtual Infrastructure Automation\" />\n<p>Seamless management of physical and virtual environments</p>\n%%getstartedpage%%\n<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#why\" data-toggle=\"tab\">Why Matrix42?</a></li>\n			<li><a href=\"#features\" data-toggle=\"tab\">Features & Benefits</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"why\">\n					<h3 class=\"emphasis\">Why Matrix42?</h3>\n					<p>With nearly twenty years of experience in desktop management, Matrix42 is uniquely positioned to support organizations as they move to virtual desktops. Matrix42 is the only vendor to fully support all three phases of the Citrix Desktop Transformation Model.</p>\n					<p><img src=\"/assets/img/phase1-assessment.jpg\" alt=\"Phase 1: Assessment\" class=\"left\" /><img src=\"/assets/img/phase-arrow.jpg\" alt=\"Phase Arrow\" class=\"left\" /><img src=\"/assets/img/phase2-migration.jpg\" alt=\"Phase 2: Migration\" class=\"left\" /><img src=\"/assets/img/phase-arrow.jpg\" alt=\"Phase Arrow\" class=\"left\" /><img src=\"/assets/img/phase3-operation.jpg\" alt=\"Phase 3: Operation\" class=\"left\" /><div class=\"clear\"></div></p>\n					<h4 class=\"emphasis\">Benefits of the Matrix42 solution include:</h4>\n					<div class=\"border padded padded-bottom\">\n						<div class=\"padded\">\n							<h3 class=\"emphasis\">ASSESSMENT</h3>\n							<ul class=\"list\">\n								<li>Full transparency into existing software repository including usage data </li>\n								<li>Time and cost savings, because repackaging and transformation efforts can be focused on the most important business applications</li>\n								<li>Out of the box report and virtualization readiness check for apps</li>\n								<li>Time and cost savings because only compatible apps will be attempted to virtualize</li>\n								<li>Full transparency which hardware needs to be replaced and which of the existing hardware can be used for XenClient</li>\n							</ul>\n						</div><!-- padded -->\n					</div><!-- border -->\n					<div class=\"border padded padded-bottom\">\n						<div class=\"padded\">\n							<h3 class=\"emphasis\">MIGRATION</h3>\n							<ul class=\"list\">\n								<li>Seamless and automated migration of XenApp Farms</li>\n								<li>Reduced user downtime during migration projects</li>\n								<li>Fully automated introduction of Citrix XenClient without user interaction</li>\n								<li>More reliable and faster creation of master images compared to use of existing tools</li>\n								<li>Seamless and automated migration of the complete virtual infrastructure including master images</li>\n								<li>Freedom of choice which master image technology to use (PVS or MCS)</li>\n								<li>Save time and costs in repackaging applications for virtualization</li>\n								<li>Fully automated extension of virtual desktop infrastructure on-demand</li>\n								<li>Significant reduction of manual steps in the datacenter to provide virtual desktops</li>\n							</ul>\n						</div><!-- padded -->\n					</div><!-- border -->\n					<div class=\"border padded padded-bottom\">\n						<div class=\"padded\">\n							<h3 class=\"emphasis\">OPERATION</h3>\n							<ul class=\"list\">\n								<li>Fully automated packaging and bare metal deployment of XenApp farms</li>\n								<li>Easy extension and modification of XenApp farms</li>\n								<li>No productivity loss or end-user downtime due to maintenance work on XenApp farm</li>\n								<li>Reduced packaging effort - package only once for XenApp and fat clients</li>\n								<li>Reduce training efforts by provisioning software for virtual and physical deployment through the same process and tools</li>\n								<li>Reduced user downtime by running configuration changes in pilot before they go into production</li>\n								<li>Simplified, fast provisioning and access to virtual desktops on demand independent of device</li>\n								<li>Full transparency of virtual desktops and servers needed from a business and asset management perspective</li>\n								<li>Optimized usage of assets can avoid purchase of unneeded server hardware</li>\n								<li>Improved license compliance and license efficiency </li>\n							</ul>\n						</div><!-- padded -->\n					</div><!-- border -->\n	\n				</div><!-- why -->\n				<div class=\"tab-pane padded-content\" id=\"features\">\n	\n				</div><!-- features -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(5,6,'main','<div class=\"padded\">\n	<h3 class=\"emphasis\">Manage every phase of the physical device lifecycle</h3>\n	<p>If your organization contains a large number of desktops and notebooks, you may find it challenging to maintain control over all of your systems while giving your end users the tools they need to be productive. The larger and more diverse your fleet, the harder it is to ensure that every system complies with license agreements, corporate policies and industry or federal regulations.</p>\n	<p>However, desktop management doesn\'t need to be complicated. Matrix42 makes it easy to manage every phase in the client lifecycle - from provisioning to retirement. With Matrix42, you can:</p>\n	<ul class=\"list\">\n		<li><span class=\"bold\">Meet your Service Level Agreements (SLAs).</span> Matrix42 automates many of your time-consuming tasks such as software deployments and common help desk services. This allows you to provide end users with faster service and decrease your chance of receiving financial penalties from breached SLAs.</li>\n		<li><span class=\"bold\">Make your IT department more efficient</span> With Matrix42 client lifecycle management, you can reduce your IT department\'s workload while managing a greater number of laptops and desktops. This can lower your operating costs</li>\n	</ul>\n	<p>Matrix42 supports all of your physical devices across a variety of platforms including Windows, Mac, Linux and Sun Solaris.</p>\n	%%getstartedpage%%\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#features\" data-toggle=\"tab\">Features & Benefits</a></li>\n			<li><a href=\"#why\" data-toggle=\"tab\">Why Matrix42</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"features\">\n					<h3 class=\"emphasis\">Easily Manage the Entire Client Lifecycle - from OS Deployment to Retirement</h3>\n					<p>Unlike other desktop management solutions, Matrix42 can manage the entire client lifecycle - from provisioning to retirement. Matrix42 simplifies every phase in this process by helping you:</p>\n					<h4 class=\"emphasis\">Increase the Speed of Your OS Deployments While Dramatically Reducing Errors</h4>\n					<p>Matrix42 makes it easy for you to provision a bare-metal system - even if you\'re working remotely. You won\'t need to search for and install the right drivers for each system - a time-intensive task that could involve hundreds to thousands of configurations. During the OS deployment, Matrix42 will automatically find the correct drivers for each system. This eliminates guesswork, mistakes and downtime.</p>\n					<h4 class=\"emphasis\">Automate Your Software Discovery, Management and Reporting</h4>\n					<p>Matrix42 automatically finds all of your IT assets - without installing a software agent that would change a system\'s desired state. You can pre-schedule inventory scans or run them on demand to gain insight into your hardware and software. These scans will show you exactly what programs are installed, who is using them and the frequency of their use. This helps with your license management, as you can uninstall software that is not being used and reduce your licensee expenses.</p>\n					<p>Plus, you can deploy software updates and patches while keeping your systems in their desired states. Simply set your test and approval preferences once and then forget about them - Matrix42\'s software management tools will ensure they occur as planned and that your systems remain in compliance with corporate policies.</p>\n					<h4 class=\"emphasis\">Keep Your Data Secure Throughout the Entire Client Life Cycle</h4>\n					<p>With Matrix42, your end users won\'t lose their data during OS deployments and software updates. You can back up and restore all their data and settings with the push of a button - either from within the Matrix42 console or directly from the end user\'s system.</p>\n					<p>Matrix42 also ensures your systems are configured properly - which prevents security breaches, compliance issues and downtime.</p>\n					<p>Finally, Matrix42 can completely wipe your retired systems. This ensures that your data doesn\'t fall into the wrong hands if your hardware is sold, reassigned or junked.</p>\n				</div><!-- features -->\n				<div class=\"tab-pane padded-content\" id=\"why\">\n					<h3 class=\"emphasis\">Streamline Your Desktop Management</h3>\n					<p>Matrix42 Empirum Workplace Automation provides you with everything you need to automate your time-consuming desktop management tasks - for both physical and virtual desktops. It also integrates all of the processes in your client lifecycle management, from installation through secure data wiping, into one user-friendly platform.</p>\n					<p>Here\'s how the Empirum Workplace Automation modules can streamline your IT management:</p>\n					<p><span class=\"bold\">Inventory Management</span> gives you detailed data for every device connected to your corporate network, such as desktops, laptops, software, printers, routers, mobile devices and more. This allows you to learn what is in use, so you can remove unused applications, cancel unneeded licenses and reduce your IT costs.</p>\n					<p><span class=\"bold\">Software Management</span> automates all of your software deployments and updates - no matter how complex. It shows you exactly what is installed on each machine, so you can gain control of your software distributions and ensure your rollouts go smoothly. Thanks to Software Management\'s user-friendly features, some of Matrix42\'s customers have reduced their rollout failure rates from 10% to 0.002%.</p>\n					<p><span class=\"bold\">OS Deployment</span> automates your operating system deployments and migrations, which will reduce your errors, help desk calls and the amount of time you spend creating configurations for hardware. You can update your systems either on site or remotely with just one click.</p>\n					<p><span class=\"bold\">Personal Backup</span> restores all user data and settings with the push of a button - either remotely or directly from the end user\'s system. This module can also restore all application, data and operating system settings during an OS migration.</p>\n					<p><span class=\"bold\">Easy Recovery</span> provides complete disaster recovery after a virus infection, hardware failure or fatal system error.</p>\n					<p><span class=\"bold\">Remote Control</span> lets you gain remote access to a user\'s system in under 7 seconds - even if it\'s protected by firewalls. This allows you to provide your end users with instant support upon request while saving the costs and hassles of travel.</p>\n					<p>Matrix42 won IT-Administrator\'s \"Migration to Windows 7\" benchmark test in 2010</p>\n				</div><!-- why -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(6,7,'main','<div class=\"padded\">\n	<h4 class=\"emphasis\">Asset Management Made Easy</h4>\n	<p>Your inventory of hardware, software, mobile devices and other IT assets is constantly changing. If your paperwork for these assets is spread throughout many files, you&#39;ll have a hard time determining which assets are new, which warranties are about to expire and which systems are nearing the end of their life cycle. This lack of insight can lead to poor procurement decisions, wasted time and increased costs.</p>\n	<p>Matrix42 Asset Management consolidates all the data about your IT assets into one user-friendly system so you can gain control of your inventory. With Asset Management, you can:</p>\n	<ul class=\"list\">\n		<li><span class=\"bold emphasis\">Gain full transparency of your IT assets.</span> Matrix42 gives you insight into your physical and virtual IT assets, no matter what platform or operating system they use or where they are located in your organization.</li>\n		<li><span class=\"bold emphasis\">Lower your costs.</span> Insight into your IT assets can help you avoid unnecessary purchases and audits. Matrix42 tracks who is using each unit, so you can reduce your risk of losing equipment.</li>\n		<li><span class=\"bold emphasis\">Save time.</span> Matrix42 automates many of your tasks – from reporting to reconciling your inventory. This allows your senior IT professionals to spend time on more valuable projects.</li>\n	</ul>\n	<p>Plus, Matrix42 Asset Management integrates with your other IT asset management tools so you can run a more efficient IT department.</p>\n	%%getstartedpage%%\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#features\" data-toggle=\"tab\">Features &amp; Benefits</a></li>\n			<li><a href=\"#why\" data-toggle=\"tab\">Why Matrix42?</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"features\">\n					<h3 class=\"emphasis\">Gain Full Transparency of Your IT Assets in Just a Few Clicks</h3>\n					<p>Matrix42 offers a web-based tool that gives you complete insight into your IT assets so you can save time, make better management decisions and achieve cost savings.</p>\n					<h4 class=\"emphasis\">Automate Your Asset Management</h4>\n					<ul class=\"list\">\n						<li>Matrix42 makes your job easier by standardizing many time-intensive tasks.</li>\n						<li>With Matrix42 Asset Management, you can automatically assign equipment to users or departments, so your end users receive the tools they need faster.</li>\n						<li>The import wizard will save you hours typically spent on IT asset management. It finds all the data related to your IT assets and reconciles it to what you have in your inventory.</li>\n						<li>You can also run detailed reports with the click of a button. You&#39;ll identify exactly what you have in stock, where your assets are located in your organization and who is using them.</li>\n					</ul>\n					<h4 class=\"emphasis\">Gain Control of All Your IT Assets</h4>\n					<ul class=\"list\">\n						<li>Matrix42 lets you manage all of your computers, software applications, mobile devices, peripheral devices and more from 1 user-friendly platform.</li>\n						<li>Asset Management provides you with a central inventory of all your devices, so you can easily identify and allocate your IT assets.</li>\n						<li>You can track each unit and learn if something is in use, missing or broken. This allows you to make better decisions about repairing or replacing equipment.</li>\n						<li>Collaboration tools allow your teams to communicate efficiently and effectively. With Matrix42, the details about your IT assets will no longer get lost in someone&#39;s inbox. All your communications are stored in one central database, so you can track your assets and quickly resolve any problems.</li>\n					</ul>\n					<h4 class=\"emphasis\">Avoid Risks</h4>\n					<p>Matrix42 can eliminate many of the risks associated with not properly managing your IT assets.</p>\n					<ul class=\"list\">\n						<li>You can automate much of your IT license compliance, so you reduce your costs, remain in compliance and avoid audits.</li>\n						<li>Matrix42 gives you a clear view of your IT inventory. This allows you to avoid unnecessary purchases and quickly deliver equipment as your users make requests.</li>\n						<li>Matrix42 Asset Management makes it easy for your accounting team to reconcile your assets. Reporting tools allow you to export data to your financial department, where they can get the information they need to make better decisions.</li>\n					</ul>\n				</div><!-- features -->\n				<div class=\"tab-pane padded-content\" id=\"why\">\n					<h3 class=\"emphasis\">Streamline Your IT Asset Management</h3>\n					<p>If you manage a busy IT department in a constantly changing environment, you may have trouble tracking your contracts, licenses, software and hardware. Matrix42 Asset Management can be used as a stand-alone product to gain transparency into your hardware assets. However, when you combine it with the other modules in the IT Asset Management suite, you can streamline your entire IT operations.</p>\n					<ul class=\"list\">\n						<li>License Management helps you assess risks before they turn into audits and reduce your software spending. When you combine License Management with IT Asset Management, you&#39;ll gain the insight into your IT assets that you need to remain in compliance.</li>\n						<li>Contract Management securely stores all your contract documents. It gives you advance notice of due dates, periods of notice and other deadlines as well as your cost forecast so you&#39;ll never miss a deadline and can run your business more effectively.</li>\n						<li>Inventory Management helps you gain transparency into all of your IT assets. It reduces expenses by showing you exactly what hardware and software applications are installed on each system and how often they are used.</li>\n					</ul>\n					<p>Plus, Matrix42 lets you control who views your data through a role-based access console. You can specify who is allowed to view records and make changes, which allows you to protect your critical business information.</p>\n				</div><!-- why -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(7,8,'main','<div class=\"padded\">\n	<h4 class=\"emphasis\">Quick and Reliable Windows 7 Migration</h4>\n	<p>Microsoft will soon discontinue Windows XP support. This means the time to migrate to Windows 7 is now. However, if the migration is not properly planned, you can face data loss, increased costs, downtime and other risks.</p>\n	<p>Matrix42 Workplace Management allows for an easy, low-cost and secure migration to Windows 7. It helps you automate and simplify every step of the process including hardware and software analysis, data backup and driver/operating system installation. With Matrix42, you can:</p>\n	<ul class=\"list\">\n		<li><span class=\"bold emphasis\">Lower your migration costs by up to 70%.</span> Matrix42 reduces the amount of resources you need to complete a migration. For example, it will automatically test your drivers, software and operating systems for errors, so you don&#39;t need to fix expensive problems after the migration.<li>\n		<li><span class=\"bold emphasis\">Eliminate downtime and data loss.</span> Often after migrations, end users need days or weeks to adjust their new Windows 7 workplaces to their liking. Matrix42 automatically saves and reinstalls each system&#39;s data settings so your end users don&#39;t lose productivity.</li>\n		<li><span class=\"bold emphasis\">Gain control of your Windows 7 migrations.</span> Workplace Management&#39;s alerting and reporting features give you a high level of visibility into and control over your migrations.</li>\n	</ul>\n	<p>Matrix42 Workplace Management also integrates with your IT service management tools to give you complete insight into your operations.</p>\n	%%getstartedpage%%\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#features\" data-toggle=\"tab\">Features &amp; Benefits</a></li>\n			<li><a href=\"#why\" data-toggle=\"tab\">Why Matrix42?</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"features\">\n					<h3 class=\"emphasis\">Windows 7 Migration - In Just a Few Clicks</h3>\n					<p>Matrix42 Workplace Management provides everything you need for an easy and reliable migration of your corporate network to Windows 7. Its key features include:</p>\n					<h4 class=\"emphasis\">Instant Check of Your Hardware, Software and Licensing Requirements</h4>\n					<p>Matrix42 automatically scans all of your systems to ensure that they are ready to migrate to Windows 7 - without installing software agents that can cause errors in your systems.</p>\n					<p>The License Management feature will tell you if your systems are in compliance after the migration. It compares your systems against the 1 million records in our License Intelligence database to give you full visibility into your software licenses. This level of insight can result in a cost saving of up to 30% on your software licensing.</p>\n					<h4 class=\"emphasis\">Control Over Your IT Inventory</h4>\n					<p>Matrix42 provides you with an in-depth view of your IT inventory. During a migration, Inventory Management automatically detects all of your desktops, laptops, mobile devices, printers, software and routers. You can also see exactly what hardware and software is installed on each system and how often they are used. This allows you to uninstall applications that are not in use, cancel unneeded licenses and lower your migration costs.</p>\n					<h4 class=\"emphasis\">Automated Operating System (OS) Deployment</h4>\n					<p>Matrix42 can reduce your operating system migration efforts by up to 58%. The Matrix42 OS Deployment solution automatically detects a system&#39;s hardware configuration and installs the matching drivers and software.  Your end users can also choose a migration time that is convenient for them, so they don&#39;t waste valuable hours waiting for you to make updates.</p>\n					<h4 class=\"emphasis\">Quick and Easy Software Repackaging</h4>\n					<p>Matrix42 allows you to easily create and distribute software packages during Windows 7 migrations. The Software Management module supports all common packaging methods including unattended installation, Windows Installer (MSI) and application virtualization. Thanks to the user-friendly features of Matrix42 Software Management, some of our customers have reduced their rollout failure rates from 10% to 0.002%.</p>\n					<h4 class=\"emphasis\">Personal Backup to Protect Your Vital Data</h4>\n					<p>With Personal Backup, you can transfer existing user data and settings from Windows XP to Windows 7 with the click of a mouse. This ensures your end users won&#39;t lose files or need to reconfigure their systems after the migration.</p>\n					<h4 class=\"emphasis\">Long-Term Investment Protection</h4>\n					<p>In addition to automating your Windows 7 migrations, Matrix42 can add value to your organization and streamline all of your IT service management processes. When you use the full Empirum workplace automation suite, you can greatly reduce your expenses and gain full control of your IT contracts, software portfolio and hardware assets.</p>\n				</div><!-- features -->\n				<div class=\"tab-pane padded-content\" id=\"why\">\n					<h3 class=\"emphasis\">6 Steps to a Successful Windows 7 Migration</h3>\n					<p>Matrix42 does more than just automate the Windows 7 migration process. In addition to providing you with technology, Matrix42 will also give you best-practice guidance that saves you time, money and headaches during migrations.</p>\n					<p>With Workplace Management, you can complete a migration using the following 6 simple steps:</p>\n					<h4 class=\"emphasis\">Discover</h4>\n					<p>Matrix42 automatically checks your hardware to ensure it meets Windows 7 prerequisites. With just a few clicks, you can see which applications are currently installed and in use, so you don&#39;t waste time or money migrating unused applications.</p>\n					<h4 class=\"emphasis\">Analyze</h4>\n					<p>The system alerts you of any updates you must make to your hardware, software and drivers. Updating your systems prior to a migration will significantly lower your costs.</p>\n					<h4 class=\"emphasis\">Test</h4>\n					<p>Matrix42 eliminates errors by testing your OS configurations, drivers and software.</p>\n					<h4 class=\"emphasis\">Virtualize</h4>\n					<p>You can also migrate your physical PCs to virtual desktops and provide remote workers with secure access to your network. During the Windows 7 migration, Matrix42 will automatically provision the virtual desktops with everything your end users need to work remotely.</p>\n					<h4 class=\"emphasis\">Deploy</h4>\n					<p>Matrix42 deploys all of your operating systems, drivers and software during a Windows 7 migration. This high level of automation reduces errors, help desk calls and the amount of time you must spend configuring hardware. Matrix42 also ensures your end users&#39; personal settings are maintained during the migration, so they can continue working as though no changes were made to their systems.</p>\n					<h4 class=\"emphasis\">Operate</h4>\n					<p>When the migration is complete, the system will release the updated PCs into your network and provide your end users with access.</p>\n					<hr />\n					<p>Matrix42 received the highest score in IT-Administrator&#39;s benchmark test of Windows 7 migration tools in 2010. According to IT-Administrator, &quot;Matrix42 Empirum is one step ahead of the competition with its Application Usage Tracking.&quot;</p>\n				</div><!-- why -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(8,10,'main','<div class=\"padded\">\n	<h3 class=\"emphasis\">Professional Services</h3>\n	<p>A clear strategic direction - founded in innovative thinking - is fundamental to growth. Our strategy and change consultants can help you drive transformation, enhance competitiveness and create new sources of economic value. The only constant in today&#39;s business world is change.</p>\n	<p>Businesses cannot survive, let alone prosper, without leveraging diverse technologies into their long-term strategy and day-to-day operations.</p>\n	<h3 class=\"emphasis\">Support</h3>\n	<p>At Matrix42, we are dedicated to customer satisfaction. That means not only providing the best products but also world-class customer support that starts from the moment you purchase and continues as you implement, use and grow with our products.</p>\n	%%getstartedpage%%\n	<h2 class=\"secondary\">Support Options</h2>\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#annual\" data-toggle=\"tab\">Annual Maintenance</a></li>\n			<li><a href=\"#global\" data-toggle=\"tab\">Global Priority Support</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"annual\">\n					<h3 class=\"emphasis\">Annual Maintenance</h3>\n					<p>Annual Maintenance provides phone, email and web-based support for an unlimited number of support incidents during the annual maintenance contract period. Customers with active Annual Maintenance have access to new software versions, releases, bug fixes, patches and workarounds for the most recent product releases to ensure the product operates in substantial conformity with the current operating documentation. Customers also may access the on-line customer portal to open and track current support incidents, update their technology profile and access the knowledgebase. Annual Maintenance provides technical support for a single global region designated as the Americas, EMEA or Asia Pacific. <span class=\"italics\">Note: Annual Maintenance does not cover training or implementation services, which must be purchased separately.</span></p>\n				</div><!-- annual -->\n				<div class=\"tab-pane padded-content\" id=\"global\">\n					<h3 class=\"emphasis\">Global Priority Support</h3>\n					<p>Global Priority Support is an add-on service to Annual Maintenance that provides personalized support management and global incident response* for your organization. A dedicated Service Account Manager (SAM) is assigned to work with you to ensure the Matrix42 support team provides proper priority and attention to your open support issues. Your SAM will never work with more than six customers at a time, ensuring that you have a single point of contact who (1) understands your technical environment, (2) holds regular incident reviews, (3) provides the latest technical product information, (4) helps you with best practices, and (5) recommends additional professional services as appropriate. Included in the price of this offering is one on-site visit to the customer annually. The SAM may be available for additional requested visits at the customer\'s expense.</p>\n				</div><!-- keys -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n	<h6>*Currently covering both the Americas and EMEA time zones.</h6>\n</div><!-- padded -->',NULL),
	(9,2,'sidebar','%%sidebarleadform%%\n%%sidebarsupport%%',NULL),
	(10,4,'sidebar','%%sidebarleadform%%\n%%sidebarsupport%%',NULL),
	(11,5,'sidebar','%%sidebarleadform%%\n%%sidebarsupport%%',NULL),
	(12,6,'sidebar','%%sidebarleadform%%\n%%sidebarsupport%%',NULL),
	(13,7,'sidebar','%%sidebarleadform%%\n%%sidebarsupport%%',NULL),
	(14,8,'sidebar','%%sidebarleadform%%\n%%sidebarsupport%%',NULL),
	(15,10,'sidebar','<div id=\"links\" class=\"well margin-right\">\n	<div class=\"well-container\">\n		<div class=\"padded\">\n			<h2>Related Links!</h2>\n		</div><!-- padded -->\n		<ul class=\"list\">\n			<li><a href=\"https://support.matrix42.de/sps/portal\" target=\"_blank\">Matrix42 Support Portal</a></li>\n			<li><a href=\"http://forum.matrix42.com\" target=\"_blank\">Matrix42 Forum</a></li>\n		</ul>\n	</div><!-- support-container -->\n</div><!-- support -->\n%%sidebarsupport%%\n%%sidebarleadform%%',NULL);

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
	(1,'webinar','Webcast: Package Robot','','<p>Die Pflege der Software ist für Unternehmen eine zeitraubende und riskante Aufgabe, die mit steigender Anzahl von PC Arbeitsplätzen kaum mehr manuell zu bewältigen ist. IT Verwaltungen setzen zunehmend Tools zur zentralen Paketierung und Verteilung ein. Der Matrix42 Package Robot bietet eine besonders effiziente Lösung durch weitreichende Funktionalitäten wie integriertem Installationsrekorder mit Aufzeichnung der Installationsroutine, integriertem Editor und Automatisierung aller Routineaufgaben. Erfahren Sie mehr und erleben Sie eine Live-Demo in unseren aktuellen Webinars!</p>','Online','https://www3.gotomeeting.com/register/447643934','','2012-07-03 09:30:00','2012-07-03 10:15:00',1,'CEST',NULL,0,0),
	(2,'webinar','Webcast: Workplace Automation mit Empirum','Von der Erfassungs eines Inventars über die Verteilung von Software bis hin zum Backup von Benutzerdaten.','<p>Empirum ist der zentrale Baustein für ein erfolgreiches Workplace Management und deckt als einzige Lösung umfassend alle Prozesse des Device-Lifecycle-Managements integriert in einer Suite ab. Von der Erstinstallation der Geräte, über die Verwaltung bis zum sicheren Löschen aller Daten. Empirum integriert sich nahtlos in bestehende IT-Infrastrukturen. Alle Bereiche können zentral von einer Managementkonsole gesteuert werden. Weitreichende Automatisierungsmöglichkeiten der Prozesse in Anwenderbetreuung und IT-Betrieb ermöglichen messbare Kostensenkungen bei unseren Kunden um bis zu 85%.\nLernen Sie, wie einfach Clientmanagement sein kann.</p>','Online','https://www3.gotomeeting.com/register/999739766','','2012-07-03 11:00:00','2012-07-03 12:00:00',1,'CEST',NULL,0,0);

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
	(4,1,NULL,'public','submenu','Mobile Device Management (BYOD)','/losungen/mobile_device_management',NULL,NULL,'public','losungen','mobile_device_management','Mobile Device Management','Allow your employees to bring their own device while maintaining security. A BYOD initiative management solution.','byod, mobile workplace, personal device, mobile device, mobile workforce','sub-banner-byod.jpg','bring your own device?','Kein Problem, wenn Sie den gesamten Lebenszyklus der mobilen Endgeräte managen',60,35,600,NULL,1,0,0),
	(5,1,NULL,'public','submenu','Virtual Desktop Management','/losungen/virtual_desktop_management',NULL,NULL,'public','losungen','virtual_desktop_management','Virtual Desktop Management',NULL,NULL,'sub-banner-virtualization.jpg','der virtuelle arbeitsplatz','Die essentielle Lösung für die Desktop-Transformation',100,25,500,NULL,2,0,0),
	(6,1,NULL,'public','submenu','Endpoint Management','/losungen/endpoint_management',NULL,NULL,'public','losungen','endpoint_management','Endpoint Management','Automatisierung vieler zeitaufwändiger Arbeiten wie Software Deployments und häufig anfallende Helpdesk-Leistungen. Und dabei die IT-Abteilung entlasten und Kosten sparen.',NULL,'sub-banner-integration.jpg','vollständige integration','Automatisierung sämtlicher IT-Management-Prozesse',100,25,500,NULL,3,0,0),
	(7,1,5,'public','submenu','Asset Management (Compliance)','/losungen/compliance',NULL,NULL,'public','losungen','compliance','Compliance bei Matrix42','Volle Kontrolle über alle IT-Bestände, Lizenzen und Verträge','compliance, software compliance','sub-banner-compliance.jpg','compliance','Volle Kontrolle über alle IT-Bestände, Lizenzen und Verträge',100,25,500,'#ffffff',4,0,0),
	(8,1,3,'public','submenu','Windows 7 Migration','/losungen/windows_7_migration',NULL,NULL,'public','losungen','windows_7_migration','Windows 7 Migration','Einfache, kostengünstige und sichere Windows 7 Migrationen mit Matrix42 Workplace Management. Alle Abläufe werden automatisiert und vereinfacht, u.a. Hard- und Software-Analysen, Datensicherungen sowie die Installation von Treibern und Betriebssystemen','window7 migration, windows upgrade, windows xp business','sub-banner-windows7.jpg','windows 7 migration','Schnelle und zuverlässige Migration auf Windows 7',60,35,600,'#ffffff',6,0,0),
	(9,1,NULL,'public','submenu','Self-Service','/losungen/self_service',NULL,NULL,'public','losungen','self_service','ITSM','ITSM',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,5,0,0),
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
	(7,'technology','Microsoft','Founded in 1975, Microsoft is the worldwide leader in software, services and solutions that help people and businesses realize their full potential.','microsoft-logo.png','www.microsoft.de'),
	(8,'technology','Citrix','Today, Citrix is the global leader and most trusted name in on-demand access. More than 180,000 organizations around the world use the Citrix Access Platform to provide the best access experience to any application for any user.','citrix-logo.png','www.citrix.de'),
	(9,'technology','Gartner','Gartner evaluated vendors based on completeness of vision and ability to execute in the IT systems management market, and Matrix42 was recognized as a visionary based on Gartner\'s evaluation of \"completeness of vision\" and \"ability to execute.\"','gartner-magicq-logo.png','www.gartner.com'),
	(10,'technology','ServiceNow','Matrix42 has joined forces with ServiceNow to provide user self-provisioning capabilities for Mobile Workplace, Virtual Workplace and Physical Workplace Management to assist IT in managing the end users’ needs now and in the future.','servicenow-logo.png','www.service-now.com'),
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



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

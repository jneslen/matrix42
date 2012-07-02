# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.21)
# Database: darth_de
# Generation Time: 2012-07-02 23:08:53 +0000
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
	(2,3,'main','%%leadform%%\n<div class=\"space\"></div>\n<div class=\"padded\">\n	<h2 class=\"secondary\">Alternativ können Sie aus der Liste unserer Wiederverkäufer unten wählen Sie:</h2>\n	%%resellerlist%%\n</div><!-- padded -->',NULL),
	(3,4,'main','<div class=\"padded\">\n	<h4 class=\"emphasis\">Challenges of Supporting the Mobile Workforce</h4>\n	<p>Your employees are becoming more reliant on their mobile devices to work both inside and outside the office. According to a Cisco study on the international workforce, 66% of employees &quot;expect IT to allow them to use any device – personal or company-issued – to access corporate networks, applications, and information anywhere at any time, and they expect the types of devices to continue diversifying.&quot;</p>\n	<p>This trend is due to the growing popularity of smartphones, tablets and social media - especially among young professionals. Your tech-savvy, young employees expect to use the same technology at work that they use in their personal lives. If you want to attract and retain talent, you must support the next generation&#39;s preferred work style and start a &quot;bring your own device&quot; (BYOD) program.</p>\n	<p>If you don&#39;t embrace BYOD, your employees will find a way to work around your policies and use their own mobile devices to access your network. This can result in breaches to your systems and hackers accessing your sensitive corporate data - especially if an employee&#39;s mobile device is lost or stolen. That&#39;s why your BYOD initiative must meet your employees&#39; needs while ensuring your company data is safe and compliant - without affecting the rest of your IT infrastructure.</p>\n	%%getstartedpage%%\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#benefits\" data-toggle=\"tab\">Benefits</a></li>\n			<li><a href=\"#keys\" data-toggle=\"tab\">3 Keys</a></li>\n			<li><a href=\"#features\" data-toggle=\"tab\">Features</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"benefits\">\n					<h3 class=\"emphasis\">The Business Benefits of &quot;Bring Your Own Device&quot; (BYOD)</h3>\n					<p>The transition to BYOD is as much about processes as it is about technology. When you put the right systems in place to support BYOD, you will reduce your risks and achieve the following benefits:</p>\n					<ul class=\"list\">\n						<li><span class=\"bold emphasis\">Cost reductions.</span> <a href=\"http://www.gartner.com/it/page.jsp?id=696007\" target=\"_blank\">Gartner reported</a> that organizations can see a 9% to 44% reduction in capital expenditures when they adopt BYOD. This is because BYOD is similar to giving employees car allowances instead of buying them company cars - they both allow you to provide employees with the tools they need while you save money. By allowing employees to use their own devices, you can greatly reduce the amount of hardware you must purchase and maintain.</li>\n						<li><span class=\"bold emphasis\">Increased employee satisfaction and productivity.</span> When you allow your employees to use their favorite mobile devices, they can accomplish more and respond to requests faster - whether they&#39;re working in the office or remotely. BYOD also shows your employees that you are willing to support their preferred work styles.</li>\n						<li><span class=\"bold emphasis\">Greater security across all of your devices.</span> Implementing a BYOD strategy allows you to secure all of your organization&#39;s mobile devices, avoid data loss and protect yourself from industrial spying and data theft.</li>\n					</ul>\n					<p>Matrix42 makes it easy for you to launch a BYOD program that meets the needs of both your employees and IT team. Your employees can use their favorite mobile devices to access your network, request support and receive services. Meanwhile, your IT department can maintain control over all of your organization&#39;s mobile devices, provide a higher level of service and reduce their costs.</p>\n				</div><!-- benefits -->\n				<div class=\"tab-pane padded-content\" id=\"keys\">\n					<h3 class=\"emphasis\">3 Keys to a Successful BYOD Program</h3>\n					<p>Matrix42 provides you with all the tools you need to start and manage your BYOD program. The key features of our BYOD services include:</p>\n					<h4 class=\"emphasis\">Analysis</h4>\n					<p>The first step in a successful BYOD program is analysis. Matrix42&#39;s Inventory Management and software usage monitoring tools will help you to analyze your end users&#39; work profiles. You&#39;ll learn which devices, apps and services they prefer, as well as which users are good candidates for BYOD.</p>\n					<h4 class=\"emphasis\">Virtual Desktop Management</h4>\n					<p>Desktop virtualization is a key part of BYOD because it allows you to isolate your corporate data and apps from your end users&#39; personal data and apps. Matrix42 partners with industry leaders, such as Citrix, who provide the virtualization technology.</p>\n					<p>We then automate the entire virtualization process – including configuring the virtual desktops, delivering them to your end users&#39; mobile devices and managing them going forward. This high level of automation has allowed some of our clients to lower their virtual desktop infrastructure migration costs by up to 75%.</p>\n					<h4 class=\"emphasis\">End User Self-Service</h4>\n					<p>Offering self-service options is critical to your BYOD program&#39;s success. Through Matrix42 Service Catalog, your end users can shop for IT services from their mobile devices and receive automated support. For example, end users can request and install corporate apps directly from their personal mobile devices. This allows you to provide faster response times while you greatly reduce the effort you put into service delivery. Since all requests for service are automatically approved and provisioned, you can reduce your help desk calls by as much as 40%.</p>\n				</div><!-- keys -->\n				<div class=\"tab-pane padded-content\" id=\"features\">\n					<h3 class=\"emphasis\">Overcoming the Challenges of BYOD</h3>\n					<p>Many IT professionals view BYOD as more work and hassle. Your own IT department may be concerned about some of the common problems that can occur if a BYOD program is not properly planned, including security breaches and high costs. Matrix42 offers the following tools to help you overcome these problems:</p>\n					<h4 class=\"emphasis\">Advanced Security Features</h4>\n					<p>Matrix42 offers a number of features to help you maintain a secure environment and control over your company assets and data. For example, Mobile Device Management provides you with the following security features, so you don&#39;t have to worry about mobile device theft or data loss.</p>\n					<ul class=\"list\">\n						<li><span class=\"bold emphasis\">Remote Management.</span> When Matrix42 detects a non-compliant device, it will instantly disable access to your corporate data and services. If a mobile device is lost, stolen or non-compliant, Matrix42 can remotely lock or wipe it of all corporate data to prevent information theft.</li>\n						<li><span class=\"bold emphasis\">Automated back-up features</span> help you avoid critical data loss.</li>\n						<li><span class=\"bold emphasis\">A mobile email gateway</span> that tracks every device interaction and allows only authorized devices to access your email server. It will also warn you of threats.</li>\n					</ul>\n					<h4 class=\"emphasis\">Cost Control Tools</h4>\n					<p>Although you need to make an investment when you adopt the desktop virtualization technology that is needed for BYOD, the long-term value far outweighs the upfront costs. Matrix42 can help you achieve the following benefits from desktop virtualization:</p>\n					<ul class=\"list\">\n						<li><span class=\"bold emphasis\">Up to a 60% reduction in your IT management costs</span> thanks to automated installations and updates.</li>\n						<li><span class=\"bold emphasis\">Easy desktop management.</span> Matrix42 allows you to manage all of your physical and virtual devices from just 1 flexible console. This can reduce the total cost of ownership of your virtual devices by up to 45%.</li>\n						<li><span class=\"bold emphasis\">Automated license compliance,</span> which can help you avoid costly audits and lower your software licenses expenses by up to 23%.</li>\n					</ul>\n				</div><!-- features -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(4,5,'main','<div class=\"padded\">\n<h3 class=\"emphasis\">Matrix42 for Desktop Virtualization</h3>\n<h4 class=\"emphasis\">The Essential Solution for Desktop Transformation</h4>\n<p>Virtual desktops are quickly gaining traction in enterprises, with 80 percent of large companies and 76 percent of medium-sized companies either considering or in the process of adopting the technology, according to a recent survey. However, businesses find they still face the same challenges of managing the operating system, applications and user settings. What’s more, the introduction of virtual desktops adds further diversity with IT having to manage a hybrid physical/virtual environment for the foreseeable future.</p>\n<p>Matrix42\'s solution fully supports all three phases of the Citrix Desktop Transformation Model, allowing companies to assess virtual desktop readiness, automate the migration process and ensure smooth operation of the virtual environment.</p>\n<img src=\"/assets/img/virtual-infrastructure_automation.jpg\" alt=\"Virtual Infrastructure Automation\" />\n<p>Seamless management of physical and virtual environments</p>\n%%getstartedpage%%\n<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#why\" data-toggle=\"tab\">Why Matrix42?</a></li>\n			<li><a href=\"#features\" data-toggle=\"tab\">Features & Benefits</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"why\">\n					<h3 class=\"emphasis\">Why Matrix42?</h3>\n					<p>With nearly twenty years of experience in desktop management, Matrix42 is uniquely positioned to support organizations as they move to virtual desktops. Matrix42 is the only vendor to fully support all three phases of the Citrix Desktop Transformation Model.</p>\n					<p><img src=\"/assets/img/phase1-assessment.jpg\" alt=\"Phase 1: Assessment\" class=\"left\" /><img src=\"/assets/img/phase-arrow.jpg\" alt=\"Phase Arrow\" class=\"left\" /><img src=\"/assets/img/phase2-migration.jpg\" alt=\"Phase 2: Migration\" class=\"left\" /><img src=\"/assets/img/phase-arrow.jpg\" alt=\"Phase Arrow\" class=\"left\" /><img src=\"/assets/img/phase3-operation.jpg\" alt=\"Phase 3: Operation\" class=\"left\" /><div class=\"clear\"></div></p>\n					<h4 class=\"emphasis\">Benefits of the Matrix42 solution include:</h4>\n					<div class=\"border padded padded-bottom\">\n						<div class=\"padded\">\n							<h3 class=\"emphasis\">ASSESSMENT</h3>\n							<ul class=\"list\">\n								<li>Full transparency into existing software repository including usage data </li>\n								<li>Time and cost savings, because repackaging and transformation efforts can be focused on the most important business applications</li>\n								<li>Out of the box report and virtualization readiness check for apps</li>\n								<li>Time and cost savings because only compatible apps will be attempted to virtualize</li>\n								<li>Full transparency which hardware needs to be replaced and which of the existing hardware can be used for XenClient</li>\n							</ul>\n						</div><!-- padded -->\n					</div><!-- border -->\n					<div class=\"border padded padded-bottom\">\n						<div class=\"padded\">\n							<h3 class=\"emphasis\">MIGRATION</h3>\n							<ul class=\"list\">\n								<li>Seamless and automated migration of XenApp Farms</li>\n								<li>Reduced user downtime during migration projects</li>\n								<li>Fully automated introduction of Citrix XenClient without user interaction</li>\n								<li>More reliable and faster creation of master images compared to use of existing tools</li>\n								<li>Seamless and automated migration of the complete virtual infrastructure including master images</li>\n								<li>Freedom of choice which master image technology to use (PVS or MCS)</li>\n								<li>Save time and costs in repackaging applications for virtualization</li>\n								<li>Fully automated extension of virtual desktop infrastructure on-demand</li>\n								<li>Significant reduction of manual steps in the datacenter to provide virtual desktops</li>\n							</ul>\n						</div><!-- padded -->\n					</div><!-- border -->\n					<div class=\"border padded padded-bottom\">\n						<div class=\"padded\">\n							<h3 class=\"emphasis\">OPERATION</h3>\n							<ul class=\"list\">\n								<li>Fully automated packaging and bare metal deployment of XenApp farms</li>\n								<li>Easy extension and modification of XenApp farms</li>\n								<li>No productivity loss or end-user downtime due to maintenance work on XenApp farm</li>\n								<li>Reduced packaging effort - package only once for XenApp and fat clients</li>\n								<li>Reduce training efforts by provisioning software for virtual and physical deployment through the same process and tools</li>\n								<li>Reduced user downtime by running configuration changes in pilot before they go into production</li>\n								<li>Simplified, fast provisioning and access to virtual desktops on demand independent of device</li>\n								<li>Full transparency of virtual desktops and servers needed from a business and asset management perspective</li>\n								<li>Optimized usage of assets can avoid purchase of unneeded server hardware</li>\n								<li>Improved license compliance and license efficiency </li>\n							</ul>\n						</div><!-- padded -->\n					</div><!-- border -->\n	\n				</div><!-- why -->\n				<div class=\"tab-pane padded-content\" id=\"features\">\n	\n				</div><!-- features -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(5,6,'main','<div class=\"padded\">\n	<h3 class=\"emphasis\">Manage every phase of the physical device lifecycle</h3>\n	<p>If your organization contains a large number of desktops and notebooks, you may find it challenging to maintain control over all of your systems while giving your end users the tools they need to be productive. The larger and more diverse your fleet, the harder it is to ensure that every system complies with license agreements, corporate policies and industry or federal regulations.</p>\n	<p>However, desktop management doesn\'t need to be complicated. Matrix42 makes it easy to manage every phase in the client lifecycle - from provisioning to retirement. With Matrix42, you can:</p>\n	<ul class=\"list\">\n		<li><span class=\"bold\">Meet your Service Level Agreements (SLAs).</span> Matrix42 automates many of your time-consuming tasks such as software deployments and common help desk services. This allows you to provide end users with faster service and decrease your chance of receiving financial penalties from breached SLAs.</li>\n		<li><span class=\"bold\">Make your IT department more efficient</span> With Matrix42 client lifecycle management, you can reduce your IT department\'s workload while managing a greater number of laptops and desktops. This can lower your operating costs</li>\n	</ul>\n	<p>Matrix42 supports all of your physical devices across a variety of platforms including Windows, Mac, Linux and Sun Solaris.</p>\n	%%getstartedpage%%\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#features\" data-toggle=\"tab\">Features & Benefits</a></li>\n			<li><a href=\"#why\" data-toggle=\"tab\">Why Matrix42</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"features\">\n					<h3 class=\"emphasis\">Easily Manage the Entire Client Lifecycle - from OS Deployment to Retirement</h3>\n					<p>Unlike other desktop management solutions, Matrix42 can manage the entire client lifecycle - from provisioning to retirement. Matrix42 simplifies every phase in this process by helping you:</p>\n					<h4 class=\"emphasis\">Increase the Speed of Your OS Deployments While Dramatically Reducing Errors</h4>\n					<p>Matrix42 makes it easy for you to provision a bare-metal system - even if you\'re working remotely. You won\'t need to search for and install the right drivers for each system - a time-intensive task that could involve hundreds to thousands of configurations. During the OS deployment, Matrix42 will automatically find the correct drivers for each system. This eliminates guesswork, mistakes and downtime.</p>\n					<h4 class=\"emphasis\">Automate Your Software Discovery, Management and Reporting</h4>\n					<p>Matrix42 automatically finds all of your IT assets - without installing a software agent that would change a system\'s desired state. You can pre-schedule inventory scans or run them on demand to gain insight into your hardware and software. These scans will show you exactly what programs are installed, who is using them and the frequency of their use. This helps with your license management, as you can uninstall software that is not being used and reduce your licensee expenses.</p>\n					<p>Plus, you can deploy software updates and patches while keeping your systems in their desired states. Simply set your test and approval preferences once and then forget about them - Matrix42\'s software management tools will ensure they occur as planned and that your systems remain in compliance with corporate policies.</p>\n					<h4 class=\"emphasis\">Keep Your Data Secure Throughout the Entire Client Life Cycle</h4>\n					<p>With Matrix42, your end users won\'t lose their data during OS deployments and software updates. You can back up and restore all their data and settings with the push of a button - either from within the Matrix42 console or directly from the end user\'s system.</p>\n					<p>Matrix42 also ensures your systems are configured properly - which prevents security breaches, compliance issues and downtime.</p>\n					<p>Finally, Matrix42 can completely wipe your retired systems. This ensures that your data doesn\'t fall into the wrong hands if your hardware is sold, reassigned or junked.</p>\n				</div><!-- features -->\n				<div class=\"tab-pane padded-content\" id=\"why\">\n					<h3 class=\"emphasis\">Streamline Your Desktop Management</h3>\n					<p>Matrix42 Empirum Workplace Automation provides you with everything you need to automate your time-consuming desktop management tasks - for both physical and virtual desktops. It also integrates all of the processes in your client lifecycle management, from installation through secure data wiping, into one user-friendly platform.</p>\n					<p>Here\'s how the Empirum Workplace Automation modules can streamline your IT management:</p>\n					<p><span class=\"bold\">Inventory Management</span> gives you detailed data for every device connected to your corporate network, such as desktops, laptops, software, printers, routers, mobile devices and more. This allows you to learn what is in use, so you can remove unused applications, cancel unneeded licenses and reduce your IT costs.</p>\n					<p><span class=\"bold\">Software Management</span> automates all of your software deployments and updates - no matter how complex. It shows you exactly what is installed on each machine, so you can gain control of your software distributions and ensure your rollouts go smoothly. Thanks to Software Management\'s user-friendly features, some of Matrix42\'s customers have reduced their rollout failure rates from 10% to 0.002%.</p>\n					<p><span class=\"bold\">OS Deployment</span> automates your operating system deployments and migrations, which will reduce your errors, help desk calls and the amount of time you spend creating configurations for hardware. You can update your systems either on site or remotely with just one click.</p>\n					<p><span class=\"bold\">Personal Backup</span> restores all user data and settings with the push of a button - either remotely or directly from the end user\'s system. This module can also restore all application, data and operating system settings during an OS migration.</p>\n					<p><span class=\"bold\">Easy Recovery</span> provides complete disaster recovery after a virus infection, hardware failure or fatal system error.</p>\n					<p><span class=\"bold\">Remote Control</span> lets you gain remote access to a user\'s system in under 7 seconds - even if it\'s protected by firewalls. This allows you to provide your end users with instant support upon request while saving the costs and hassles of travel.</p>\n					<p>Matrix42 won IT-Administrator\'s \"Migration to Windows 7\" benchmark test in 2010</p>\n				</div><!-- why -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(6,7,'main','<div class=\"padded\">\n	<h4 class=\"emphasis\">Asset Management Made Easy</h4>\n	<p>Your inventory of hardware, software, mobile devices and other IT assets is constantly changing. If your paperwork for these assets is spread throughout many files, you&#39;ll have a hard time determining which assets are new, which warranties are about to expire and which systems are nearing the end of their life cycle. This lack of insight can lead to poor procurement decisions, wasted time and increased costs.</p>\n	<p>Matrix42 Asset Management consolidates all the data about your IT assets into one user-friendly system so you can gain control of your inventory. With Asset Management, you can:</p>\n	<ul class=\"list\">\n		<li><span class=\"bold emphasis\">Gain full transparency of your IT assets.</span> Matrix42 gives you insight into your physical and virtual IT assets, no matter what platform or operating system they use or where they are located in your organization.</li>\n		<li><span class=\"bold emphasis\">Lower your costs.</span> Insight into your IT assets can help you avoid unnecessary purchases and audits. Matrix42 tracks who is using each unit, so you can reduce your risk of losing equipment.</li>\n		<li><span class=\"bold emphasis\">Save time.</span> Matrix42 automates many of your tasks – from reporting to reconciling your inventory. This allows your senior IT professionals to spend time on more valuable projects.</li>\n	</ul>\n	<p>Plus, Matrix42 Asset Management integrates with your other IT asset management tools so you can run a more efficient IT department.</p>\n	%%getstartedpage%%\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#features\" data-toggle=\"tab\">Features &amp; Benefits</a></li>\n			<li><a href=\"#why\" data-toggle=\"tab\">Why Matrix42?</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"features\">\n					<h3 class=\"emphasis\">Gain Full Transparency of Your IT Assets in Just a Few Clicks</h3>\n					<p>Matrix42 offers a web-based tool that gives you complete insight into your IT assets so you can save time, make better management decisions and achieve cost savings.</p>\n					<h4 class=\"emphasis\">Automate Your Asset Management</h4>\n					<ul class=\"list\">\n						<li>Matrix42 makes your job easier by standardizing many time-intensive tasks.</li>\n						<li>With Matrix42 Asset Management, you can automatically assign equipment to users or departments, so your end users receive the tools they need faster.</li>\n						<li>The import wizard will save you hours typically spent on IT asset management. It finds all the data related to your IT assets and reconciles it to what you have in your inventory.</li>\n						<li>You can also run detailed reports with the click of a button. You&#39;ll identify exactly what you have in stock, where your assets are located in your organization and who is using them.</li>\n					</ul>\n					<h4 class=\"emphasis\">Gain Control of All Your IT Assets</h4>\n					<ul class=\"list\">\n						<li>Matrix42 lets you manage all of your computers, software applications, mobile devices, peripheral devices and more from 1 user-friendly platform.</li>\n						<li>Asset Management provides you with a central inventory of all your devices, so you can easily identify and allocate your IT assets.</li>\n						<li>You can track each unit and learn if something is in use, missing or broken. This allows you to make better decisions about repairing or replacing equipment.</li>\n						<li>Collaboration tools allow your teams to communicate efficiently and effectively. With Matrix42, the details about your IT assets will no longer get lost in someone&#39;s inbox. All your communications are stored in one central database, so you can track your assets and quickly resolve any problems.</li>\n					</ul>\n					<h4 class=\"emphasis\">Avoid Risks</h4>\n					<p>Matrix42 can eliminate many of the risks associated with not properly managing your IT assets.</p>\n					<ul class=\"list\">\n						<li>You can automate much of your IT license compliance, so you reduce your costs, remain in compliance and avoid audits.</li>\n						<li>Matrix42 gives you a clear view of your IT inventory. This allows you to avoid unnecessary purchases and quickly deliver equipment as your users make requests.</li>\n						<li>Matrix42 Asset Management makes it easy for your accounting team to reconcile your assets. Reporting tools allow you to export data to your financial department, where they can get the information they need to make better decisions.</li>\n					</ul>\n				</div><!-- features -->\n				<div class=\"tab-pane padded-content\" id=\"why\">\n					<h3 class=\"emphasis\">Streamline Your IT Asset Management</h3>\n					<p>If you manage a busy IT department in a constantly changing environment, you may have trouble tracking your contracts, licenses, software and hardware. Matrix42 Asset Management can be used as a stand-alone product to gain transparency into your hardware assets. However, when you combine it with the other modules in the IT Asset Management suite, you can streamline your entire IT operations.</p>\n					<ul class=\"list\">\n						<li>License Management helps you assess risks before they turn into audits and reduce your software spending. When you combine License Management with IT Asset Management, you&#39;ll gain the insight into your IT assets that you need to remain in compliance.</li>\n						<li>Contract Management securely stores all your contract documents. It gives you advance notice of due dates, periods of notice and other deadlines as well as your cost forecast so you&#39;ll never miss a deadline and can run your business more effectively.</li>\n						<li>Inventory Management helps you gain transparency into all of your IT assets. It reduces expenses by showing you exactly what hardware and software applications are installed on each system and how often they are used.</li>\n					</ul>\n					<p>Plus, Matrix42 lets you control who views your data through a role-based access console. You can specify who is allowed to view records and make changes, which allows you to protect your critical business information.</p>\n				</div><!-- why -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(7,8,'main','<div class=\"padded\">\n	<h4 class=\"emphasis\">Quick and Reliable Windows 7 Migration</h4>\n	<p>Microsoft will soon discontinue Windows XP support. This means the time to migrate to Windows 7 is now. However, if the migration is not properly planned, you can face data loss, increased costs, downtime and other risks.</p>\n	<p>Matrix42 Workplace Management allows for an easy, low-cost and secure migration to Windows 7. It helps you automate and simplify every step of the process including hardware and software analysis, data backup and driver/operating system installation. With Matrix42, you can:</p>\n	<ul class=\"list\">\n		<li><span class=\"bold emphasis\">Lower your migration costs by up to 70%.</span> Matrix42 reduces the amount of resources you need to complete a migration. For example, it will automatically test your drivers, software and operating systems for errors, so you don&#39;t need to fix expensive problems after the migration.<li>\n		<li><span class=\"bold emphasis\">Eliminate downtime and data loss.</span> Often after migrations, end users need days or weeks to adjust their new Windows 7 workplaces to their liking. Matrix42 automatically saves and reinstalls each system&#39;s data settings so your end users don&#39;t lose productivity.</li>\n		<li><span class=\"bold emphasis\">Gain control of your Windows 7 migrations.</span> Workplace Management&#39;s alerting and reporting features give you a high level of visibility into and control over your migrations.</li>\n	</ul>\n	<p>Matrix42 Workplace Management also integrates with your IT service management tools to give you complete insight into your operations.</p>\n	%%getstartedpage%%\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#features\" data-toggle=\"tab\">Features &amp; Benefits</a></li>\n			<li><a href=\"#why\" data-toggle=\"tab\">Why Matrix42?</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"features\">\n					<h3 class=\"emphasis\">Windows 7 Migration - In Just a Few Clicks</h3>\n					<p>Matrix42 Workplace Management provides everything you need for an easy and reliable migration of your corporate network to Windows 7. Its key features include:</p>\n					<h4 class=\"emphasis\">Instant Check of Your Hardware, Software and Licensing Requirements</h4>\n					<p>Matrix42 automatically scans all of your systems to ensure that they are ready to migrate to Windows 7 - without installing software agents that can cause errors in your systems.</p>\n					<p>The License Management feature will tell you if your systems are in compliance after the migration. It compares your systems against the 1 million records in our License Intelligence database to give you full visibility into your software licenses. This level of insight can result in a cost saving of up to 30% on your software licensing.</p>\n					<h4 class=\"emphasis\">Control Over Your IT Inventory</h4>\n					<p>Matrix42 provides you with an in-depth view of your IT inventory. During a migration, Inventory Management automatically detects all of your desktops, laptops, mobile devices, printers, software and routers. You can also see exactly what hardware and software is installed on each system and how often they are used. This allows you to uninstall applications that are not in use, cancel unneeded licenses and lower your migration costs.</p>\n					<h4 class=\"emphasis\">Automated Operating System (OS) Deployment</h4>\n					<p>Matrix42 can reduce your operating system migration efforts by up to 58%. The Matrix42 OS Deployment solution automatically detects a system&#39;s hardware configuration and installs the matching drivers and software.  Your end users can also choose a migration time that is convenient for them, so they don&#39;t waste valuable hours waiting for you to make updates.</p>\n					<h4 class=\"emphasis\">Quick and Easy Software Repackaging</h4>\n					<p>Matrix42 allows you to easily create and distribute software packages during Windows 7 migrations. The Software Management module supports all common packaging methods including unattended installation, Windows Installer (MSI) and application virtualization. Thanks to the user-friendly features of Matrix42 Software Management, some of our customers have reduced their rollout failure rates from 10% to 0.002%.</p>\n					<h4 class=\"emphasis\">Personal Backup to Protect Your Vital Data</h4>\n					<p>With Personal Backup, you can transfer existing user data and settings from Windows XP to Windows 7 with the click of a mouse. This ensures your end users won&#39;t lose files or need to reconfigure their systems after the migration.</p>\n					<h4 class=\"emphasis\">Long-Term Investment Protection</h4>\n					<p>In addition to automating your Windows 7 migrations, Matrix42 can add value to your organization and streamline all of your IT service management processes. When you use the full Empirum workplace automation suite, you can greatly reduce your expenses and gain full control of your IT contracts, software portfolio and hardware assets.</p>\n				</div><!-- features -->\n				<div class=\"tab-pane padded-content\" id=\"why\">\n					<h3 class=\"emphasis\">6 Steps to a Successful Windows 7 Migration</h3>\n					<p>Matrix42 does more than just automate the Windows 7 migration process. In addition to providing you with technology, Matrix42 will also give you best-practice guidance that saves you time, money and headaches during migrations.</p>\n					<p>With Workplace Management, you can complete a migration using the following 6 simple steps:</p>\n					<h4 class=\"emphasis\">Discover</h4>\n					<p>Matrix42 automatically checks your hardware to ensure it meets Windows 7 prerequisites. With just a few clicks, you can see which applications are currently installed and in use, so you don&#39;t waste time or money migrating unused applications.</p>\n					<h4 class=\"emphasis\">Analyze</h4>\n					<p>The system alerts you of any updates you must make to your hardware, software and drivers. Updating your systems prior to a migration will significantly lower your costs.</p>\n					<h4 class=\"emphasis\">Test</h4>\n					<p>Matrix42 eliminates errors by testing your OS configurations, drivers and software.</p>\n					<h4 class=\"emphasis\">Virtualize</h4>\n					<p>You can also migrate your physical PCs to virtual desktops and provide remote workers with secure access to your network. During the Windows 7 migration, Matrix42 will automatically provision the virtual desktops with everything your end users need to work remotely.</p>\n					<h4 class=\"emphasis\">Deploy</h4>\n					<p>Matrix42 deploys all of your operating systems, drivers and software during a Windows 7 migration. This high level of automation reduces errors, help desk calls and the amount of time you must spend configuring hardware. Matrix42 also ensures your end users&#39; personal settings are maintained during the migration, so they can continue working as though no changes were made to their systems.</p>\n					<h4 class=\"emphasis\">Operate</h4>\n					<p>When the migration is complete, the system will release the updated PCs into your network and provide your end users with access.</p>\n					<hr />\n					<p>Matrix42 received the highest score in IT-Administrator&#39;s benchmark test of Windows 7 migration tools in 2010. According to IT-Administrator, &quot;Matrix42 Empirum is one step ahead of the competition with its Application Usage Tracking.&quot;</p>\n				</div><!-- why -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(8,10,'main','<div class=\"padded\">\n	<h3 class=\"emphasis\">Professional Services</h3>\n	<p>Mit unserem Dienstleistungsspektrum unterstützen wir Sie ganzheitlich von der Planung über die Implementierung bis zum Betrieb Ihrer Lösung. Dabei erhalten Sie durchgehenden Support aus einer Hand unkompliziert, schnell und kompetent.</p>\n	<p>Sie entscheiden, ob Sie eine schlüsselfertige Lösung oder die Unterstützung zu Spezialthemen wünschen. Wir begleiten Sie vom ersten Beratungsgespräch mit einer umfassenden Anforderungsanalyse, individuellen Konzepten und professionellem Projektmanagement. Dabei stehen wir Ihnen auch nach Projekabschluss immer mit Rat und Tat zur Seite.</p>\n	%%getstartedpage%%\n	<p>Wir bieten Ihnen Dienstleistungen in den Bereichen:</p>\n	<ul class=\"list\">\n		<li>Individuell auf die Umgebung abgestimmte Lösungen</li>\n		<li>Integration</li>\n		<li>Migration der Daten auf eine neue Plattform</li>\n		<li>Lokalisation</li>\n		<li>Datenanalyse</li>\n		<li>Design</li>\n		<li>Qualitätssicherung in den Bereichen Softwarepaketierung, Konzeption und Rollouts</li>\n		<li>Trainings und Vorort-Schulungen</li>\n		<li>Wartungen</li>\n		<li>Updates</li>\n	</ul>\n	<h2 class=\"secondary\">Konsequent. Präsent. Für Sie.</h2>\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#services\" data-toggle=\"tab\">Professional Services</a></li>\n			<li><a href=\"#support\" data-toggle=\"tab\">Professional Support</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"services\">\n					<h3 class=\"emphasis\">Wir schaffen Lösungen… Nach Ihren Vorgaben mit unseren Produkten…</h3>\n					<p>Der wirtschaftliche Erfolg eines Unternehmens steht und fällt mit der fortlaufenden und nachhaltigen Optimierung seiner Geschäftsprozesse und der damit verbundenen Wertschöpfung.</p>\n					<p>Für die positive Entwicklung des Geschäftsergebnisses gilt es den Fokus auf das Kerngeschäft und die Variabilisierung der Fixkosten zu setzen.</p>\n					<p>Eine IT mit flexiblen Infrastrukturen und Arbeitsplätzen kann entscheidend zur Gewinnsteigerung beitragen.</p>\n					<p>Einen wesentlichen Beitrag leistet hierzu eine speziell auf Ihr Unternehmen zugeschnittene IT-Umgebung.</p>\n					<p>Bei der Umsetzung Ihrer IT Umgebung unterstützen wir Sie mit unseren Teams und den besten Produkten.</p>\n					<p>Wir erstellen für Sie den individuellen Dienstleistungskatalog zur Umsetzung Ihrer Lösung.</p>\n					<ul class=\"list\">\n						<li>Unsere Projektleiter haben das Projekt im Griff: Lösungsorientierte Umsetzungen in Time und Budget.</li>\n						<li>Unsere Solution Architekten konzeptionieren Ihre Lösung, abgestimmt auf Ihre Bedürfnisse.</li>\n						<li>Unsere Consultants kennen unsere Produkte am besten. Sie implementieren Ihre Lösungen nach einheitlichen Vorgehensmodellen mit Best-Practice- Ansätzen.</li>\n					</ul>\n				</div><!-- services -->\n				<div class=\"tab-pane padded-content\" id=\"support\">\n					<h3 class=\"emphasis\">Mit einem Wartungsvertrag der Matrix42 erhalten Sie eine Software-Rundum-Lösung.</h3>\n					<h4 class=\"secondary\">Jederzeit Up to date:</h4>\n					<p>Sie erhalten immer die neuesten Software-Versionen und haben Zugriff auf aktuelle Patches.</p>\n					<h4 class=\"secondary\">Zuverlässiger Support:</h4>\n					<p>Ein kompetentes Supportteam steht Ihnen für Anfragen via Telefon, E-Mail oder über unser Kundenportal zur Verfügung.</p>\n					<h4 class=\"secondary\">Insights über die Knowledge Base:</h4>\n					<p>Wir teilen unser Wissen mit Ihnen, damit Sie mit der Software von Matrix42 optimal arbeiten können.</p>\n					<p>Professional Support bietet Ihnen die Unterstützung für eine reibungslose Nutzung der Matrix42 Software.</p>\n					<h3 class=\"emphasis\">Global Priority Support</h3>\n					<p>Sie wünschen sich für Ihr Unternehmen einen personalisierten Support und weltweite Incident Response Services*? Dann bietet Ihnen Matrix42 den Global Priority Support.</p>\n					<p>Sie erhalten Ihren eigenen Service Support Manager. Er kümmert sich um die Priorisierung und Bearbeitung Ihrer Supportanfragen. Der Service und Support Manager...</p>\n					<p>...kennt Ihre technische Umgebung.</p>\n					<p>...führt regelmäßig Incident Reviews mit Ihnen durch.</p>\n					<p>...unterstützt Sie mit Best Practice Empfehlungen.</p>\n					<p>...ist die Schnittstelle zu Professional Services.</p>\n					<p>Im Rahmen eines jährlichen Status-Gesprächs bei Ihnen vor Ort werden die Learnings des vergangenen Jahres gezogen und die Planung für das kommende Jahr besprochen.</p>\n					<p>Global Priority Support ist die Matrix42-Unterstützung für Ihren individuellen Bedarf.</p>\n				</div><!-- support -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n	<h6>*Derzeit werden die Zeitzonen Nord-/Südamerika und EMEA abgedeckt</h6>\n</div><!-- padded -->',NULL),
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
	(10,'release','Desktop-Virtualisierung ist bei den meisten Unternehmen bereits Realität','Eine Untersuchung von Matrix42 zeigt, dass sich Desktop-Virtualisierung zunehmend etabliert und vor allem wegen der Kosteneinsparungen gefragt ist','<p><strong class=\"emphasis\">Neu-Isenburg, 28. Juni 2012</strong> – Viele Unternehmen bereiten sich vor, die Mehrzahl der Unternehmen hat die Desktop-Virtualisierung bereits umgesetzt. Das ist das Ergebnis einer Umfrage von Matrix42 beim Branchenevent „Citrix Synergy 2012“ in San Francisco. Die Umfrage unter IT-Spezialisten fand heraus, dass mehr als die Hälfte (51 Prozent) der Unternehmen Desktop-Virtualisierung  bereits umgesetzt oder erste Maßnahmen dafür ergriffen haben. Knapp ein Viertel (23 Prozent) der Befragten gab an, dieses Thema im kommenden Jahr anzugehen. Nur elf Prozent haben in Sachen Desktop-Virtualisierung noch keine Pläne.</p>\n<p>Die Gründe für die Umstellung auf virtuelle Desktops in den Unternehmen sind unterschiedlich, doch sind es vor allem die Kosteneinsparungen, welche die Unternehmen mit der Desktop-Virtualisierung realisieren wollen. Entsprechend waren die beiden am häufigsten genannten Gründe Kosteneinsparungen beim Management bzw. Support sowie geringere Ausgaben für Hard- und Software.  Gefragt nach dem Management der virtuellen Desktops, wollen rund drei Viertel (77 Prozent) der Befragten die gleichen Werkzeuge für die virtuellen Desktops verwenden, mit denen das Unternehmen bereits die physikalischen Desktops verwaltet.</p>\n<p>Es besteht Einigkeit darüber, dass zukünftig physikalische und virtuelle Umgebungen in einer zentralen IT-Management Lösung verwaltet werden. Inzwischen glauben immer mehr IT-Spezialisten, dass ein Großteil der Desktops zukünftig virtuell sein wird. So geht ein Drittel der Befragten davon aus, dass in einem Jahr 60 oder mehr Prozent der Desktops in ihrem Unternehmen bereits  virtualisiert sein werden. Damit liegt dieser Wert fast dreimal so hoch wie vor einem Jahr, als dies nur elf Prozent der Befragten glaubten.</p>\n<p>Nach Initiativen im Bereich BYOD gefragt, gaben 72 Prozent an, dass sie aktuell an einer Lösung arbeiten, um BYOD zu ermöglichen. Nur 15 Prozent sagten, dass ihr Unternehmen im Bereich BYOD keine Pläne habe.</p>','','','2012-06-28',NULL,0,0,0);

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



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.21)
# Database: darth_eu
# Generation Time: 2012-09-05 22:48:40 +0000
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
  `state_id` char(2) DEFAULT '',
  `province` varchar(255) DEFAULT '',
  `postal` varchar(10) DEFAULT NULL,
  `country_id` char(2) NOT NULL DEFAULT 'GB',
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
  `description` varchar(255) DEFAULT NULL,
  `download_link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `campaigns` WRITE;
/*!40000 ALTER TABLE `campaigns` DISABLE KEYS */;

INSERT INTO `campaigns` (`id`, `campaign_code`, `name`, `description`, `download_link`)
VALUES
	(1,100,'general','General Site Visit',NULL),
	(2,200,'servicenow','ServiceNow',NULL),
	(3,300,'microsoft','Microsoft SCCM Enterprise Manager',NULL),
	(4,400,'citrix','VDI-Desktop Virtualization, Citrix Management &amp; p2v by Matrix42',NULL),
	(5,500,'compliance','Compliance with Matrix42',NULL),
	(6,600,'addon','Add-on Sept. Promo',NULL),
	(7,601,'addon-sale','Order place on add-on promotion',NULL),
	(8,610,'addon-rc','Remote Control Free Trial Request',NULL),
	(9,611,'addon-pm','Power Managment Free Trial Request','/assets/uploads/power_management_trial.zip'),
	(10,612,'addon-pr','Package Robot Free Trial Request','http://www.matrix42.de/fileadmin/downloads/Package_Robot/MPR-Setup.exe');

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
  `video` text,
  `study_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `case_studies` WRITE;
/*!40000 ALTER TABLE `case_studies` DISABLE KEYS */;

INSERT INTO `case_studies` (`id`, `company`, `description`, `logo`, `pdf`, `video`, `study_date`, `featured`, `disabled`)
VALUES
	(1,'John Holland',NULL,'john-holland-logo.png',NULL,NULL,'2012-06-04 13:27:37',1,0),
	(2,'Magna International Inc.','<h2 class=\"secondary\">&quot;Solve Problems - Don&#39;t Manage Them&quot;</h2>\n<h3 class=\"emphasis\">Magna Exteriors &amp; Interiors centralized their internal IT operations in the head office and the engineering divisions to achieve a higher level of user satisfaction and cost savings</h3>\n<p>During the financial crisis of 2009, many companies all over the world and across all industries suffered setbacks. In Germany, the banks who had caused the global crisis were affected most severely, followed by the automotive industry, which in turn, impacted the automotive suppliers. In this challenging time, a company which until then had not enjoyed a high degree of recognition received extensive media coverage: Magna. The company offered to invest in the ailing Opel group, an offer which was possible because Magna&#39;s management board felt capable of handling such project, both financially and structurally.</p>\n<div class=\"well\">\n	<ul class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n		<li class=\"active\"><a href=\"#about\" data-toggle=\"tab\">Magna</a></li>\n		<li><a href=\"#challenge\" data-toggle=\"tab\">Challenge</a></li>\n		<li><a href=\"#solution\" data-toggle=\"tab\">Solution</a></li>\n	</ul>\n	<div class=\"tab-container\">\n		<div class=\"tab-content\">\n			<div id=\"about\" class=\"tab-pane active padded-content\">\n				<h3>Magna International</h3>\n				<p>With 17 billion Euros and 92,000 employees in 245 manufacturing operations and 80 development and sales centers, Magna is among the leading automotive suppliers worldwide. The company&#39;s business units include Seating, Exteriors &amp; Interiors, Mirrors &amp; Closures, Cosma International, Steyr, and Powertrain. Magna also manufactures complete vehicles.</p>\n			</div><!-- about -->\n			<div id=\"challenge\" class=\"tab-pane padded-content\">\n				<h3>Magna Challenge</h3>\n				<p>Until 2009, Magna Exteriors &amp; Interiors had independent teams for managing their IT operations at the various locations. Triggered by the economic crisis, the corporate management wanted to reduce IT costs, while maintaining or even improving corporate performance and efficiency.</p>\n			</div><!-- challenge -->\n			<div id=\"solution\" class=\"tab-pane padded-content\">\n				<h3>Magna Solution</h3>\n				<p>Magna implemented the Matrix42 system and service management solution to enable reliable IT process management, even under changing requirements.</p>\n			</div><!-- solution -->\n		</div><!-- tab-content -->\n	</div><!-- tab-container -->\n</div><!-- well -->\n<h3 class=\"emphasis\">The Automotive Crisis As Innovation Driver</h3>\n<p>In the past, Magna&#39;s Exteriors &amp; Interiors IT was managed by independent teams in the various locations. In the wake of the 2009 economic crisis corporate management wanted to reduce costs for IT services while maintaining or even improving the company&#39;s efficiency and performance. IT operations were centralized and a standardized strategy was developed. The IT team had to deal with a completely new situation: Fewer administrators had to manage additional new, internal customers without having any information about their hardware and software equipment.</p>\n<p>For the IT department, it was an enormous challenge to service more customers with reduced resources. Joachim Koch, Director Service - Information Technology at Magna Exteriors &amp; Interiors Management GmbH considered the introduction of a professional IT management tool that was able to support these efforts without compromising IT&#39;s customer intimacy. Also, the new software had to provide long-term support to the administrators without increasing administrative efforts. Together with his team, Koch defined requirements for the new tool, which clearly showed that Magna needed a solution with both service and systems management capabilities. Prior to conducting a complex market analysis, the business requirements of the various divisions were determined. &quot;Our expectation was: The new solutions should have an attractive price and solve problems, rather than manage them&quot;, remembers Koch. Finally, Matrix42 convinced Magna with the diversity of its solutions and the perfect combination of service and systems management tasks.</p>\n<p>No company - and Rhenus Group is no exception - can afford even minimal interruptions of its business-critical IT services, and so, one of the technical challenges consisted in integrating the Matrix42 products into the existing IT landscape, leveraging the valuable, extensive knowledge of the Matrix42 staff, in particular with respect to connectors and standard interfaces with directory services, ERP, financial, service and other systems. Such interfaces enable Rhenus to also integrate SAP, Active Directory and Lotus Notes without any problems. Every IT professional knows that interfaces are the key to a transparent, coherent information system with consistent, consolidated base data, and so, the project also included the creation of an additional interface to transfer ticket data from the HP Service Desk to the new Matrix42 Service Desk solution.</p>\n<h3 class=\"emphasis\">At Full Speed Into the Wall</h3>\n<p>Magna&#39;s activities in various automotive sectors also include the development of vehicle safety components. Car manufacturers request that prototypes be driven into the wall to be able to manufacture marketable and safe vehicles. Data determined in such crash tests are extremely important, and it is vital that nothing goes wrong because enormous costs are involved to develop of such prototypes.<p>\n<p>&quot;Magna, too, had to suffer from the serious crisis of the automotive industry and had to respond to slumps in production output, without affecting sensitive processes such as development and crash tests&quot;, says Koch. As he remembers, IT had functioned well before the economic downturn, but precarious situations occurred during the crisis. While, for instance, in the &quot;good old times&quot; the IT staff had a close and personal contact with the users and was able to resolve many issues locally, requirements had changed profoundly: Numerous new systems and customers were added, and the IT department was no longer able to ensure full control of the IT environment; it became clear that suitable tools were needed to provide adequate support.</p>\n<div class=\"well\">\n	<p class=\"quote italics\">&quot;Based on our history, Magna&#39;s ultimate principle is &quot;Think global, act local&quot;. Together with Matrix42, we were able to also base our IT operations on this principle.&quot;</p>\n	<p class=\"bold\">-Joachim Koch, Director Server<br />- Information Technology at Magna Exteriors &amp; Interiors Management GmbH</p>\n</div>\n<h3 class=\"emphasis\">Learning by Doing</h3>\n<p>When the decision was made to purchase the Matrix42 solution, Magna had the idea to cooperate with consulting partner TAP to implement the Empirum System Management solution combined with Service Desk. Joint workshops were held to define requirements and milestones, as-is analyses were conducted and a project schedule was developed. &quot;We wanted to participate in the project, since learning by doing within our own project is much more efficient than even the best of standard trainings&quot;, says Koch. From the very beginning, he and his team were closely involved in all of Matrix42&#39;s and TAP&#39;s activities. While this slowed down the overall project progress, it produced tangible effects: &quot;Our partnership and cooperation with TAP and Matrix42 was a recipe for success.&quot;</p>\n<h3 class=\"emphasis\">High Expectations</h3>\n<p>This was not the only challenge for Koch to master when he implemented the new service and systems management solution. He also faced internal resistance and had to address very individual requirements. He needed to integrate teams across locations as well as new supplier contacts and find ways to communicate the particularly high expectations from the automotive industry.</p>\n<p>While numerous processes were to be automated and support tickets were to be handled via a service desk, certain critical support situations must still be resolved personally and locally by a member of the IT team. &quot;After all, it makes no sense to e-mail an automatically generated ticket number in case of a plant standstill&quot;, Koch explains. He cooperated closely with Matrix42 and TAP to define such exceptions and related processes and has integrated them successfully into his IT management solution</p>\n<h3 class=\"emphasis\">Bottom Line</h3>\n<p>Magna has undertaken proactive steps to address changing conditions during the automotive crisis and was able to emerge even stronger from this situation. For IT, this involved a completely new structure, a high degree of automation and an increased service orientation. Today, a higher IT standard is ensured with fewer resources, achieving a higher degree of user satisfaction. This helped the IT department to hold its ground against attractive outsourcing projects and even insource various areas back into the internal IT department.</p>\n<h3 class=\"emphasis\">About TAP Desktop Solutions GmbH</h3>\n<p>TAP Desktop Solutions GmbH develops and implements concepts and solutions covering all client and user requirements. The company&#39;s focus is on efficiency and productivity gains. Based on the motto &quot;the solution is always easy, you just have to find it, TAP&#39;s IT specialists create individual solution concepts that can be seamlessly integrated with their customers&#39; business processes. More than ever, companies are under pressure to ensure the transparency of their corporate IT processes and reduce breaks in communications. With its strong focus on desktop and user solutions and processes, the company is the competent advisor, system integrator and service provider for desktop infrastructure, endpoint security, IT service &amp; finance management and business process management (BPM) issues. TAP Desktop Solutions GmbH is headquartered in Straubing/Germany and has German offices in Karlsruhe and Berlin and an Austrian presence in Graz. Renowned companies such as Magna, IBC Solar, Software AG, Vorarlberger Illwerke AG and others rely on TAP&#39;s advice and recommendations. TAP is a Matrix42 partner and also maintains partnerships with Citrix, Cynapspro, Kaviza and Lumension.</p>','magna-logo.png','case-magna-en.pdf',NULL,'2012-06-04 13:28:54',1,0),
	(3,'Vinci',NULL,'vinci-logo.png',NULL,NULL,'2012-06-04 13:29:55',0,0),
	(4,'IBC Solar AG','<h3 class=\"emphasis\">Innovative Energy Generation with Empirum</h3>\n<p>In the energy industry, change is the only constant. New technologies and innovations provide continuous market disruption, creating big challenges, and opportunities, for industry players. To thrive, companies in the energy sector must be incredibly flexible, agile and dynamic. This means the company&#39;s software and systems must also by dynamic and support rapid change and growth. That&#39;s why the selection of the right systems management software is critical for business success.</p>\n<hr />\n<p class=\"italics\">Matrix42 Empirum is the central component of a successful IT management approach and the only solution that can be fully integrated with all IT management processes - from initial installation to administration and the secure deletion of all data.</p>\n<p>Empirum allows for the complete, centralized, and efficient management of all corporate PCs, servers, configurations and software assets (both Windows and Linux). Matrix42 Empirum can be fully integrated with existing IT infrastructures.</p>\n<p>Comprehensive capabilities to automate user support and PC operations help to achieve measurable cost reductions. Empirum provides the leading-edge technology for completely automated content and software distribution via networks or the Internet. Empirum can be used to easily distribute, install and modify all components of a PC workstation - operating system, drivers, applications, driver connections, policies etc. - and also all personal settings and data.</p>\n<div class=\"well\">\n	<p class=\"quote italics\">&quot;The energy sector is a very dynamic and innovative industry, which requires flexible and adaptive software. Matrix42 Empirum is exactly the systems management solution that we have been looking for.&quot;</p>\n	<p class=\"bold\">-Marcus Band<br />-Head of IT at IBC, Staffelstein</p>\n</div>\n<h3 class=\"emphasis\">IBC Solar AG: Becoming a Leader with Photovoltaics</h3>\n<p>Marcus Band is head of corporate IT at IBC Solar AG based in Bad Staffelstein in Franconia, Germany and knows why hardware and software are so important for daily operations. IBC is a company with an extremely high growth rate and various domestic and international locations. For the head of the IT department this means that new workplaces have to be set up frequently, and not only in the corporate headquarters. Up to five new employees are hired each month, not to mention the new hires in the company’s international subsidiaries. &quot;We were facing a challenge which could not be addressed with traditional means. Due to our strong growth, we had to say good-bye to traditional ‘on-site support’ and switch to software-based IT service provisioning&quot;, says Marcus Band.</p>\n<h3 class=\"emphasis\">Empirum, the Central Component</h3>\n<p>Together with his team, Marcus Band created a requirements document for the desired systems management solution. The team conducted research and analyses on various IT systems management solutions and selected Matrix42 Empirum in a grassroots decision in summer 2008. Since then, IBC has not only set up the new workplaces with Empirum, but has also used the software to standardize and automate their processes. &quot;Empirum is the central component of a successful IT management and the only solution that can be fully integrated with our corporate processes&quot;, says Band. Empirum helps him to always have a full overview and be able to respond faster and easier in case a problem occurs. No matter if a computer failure occurs in the Spanish subsidiary or if the CEO’s laptop is down: There is a defined procedure used to handle the various support cases, and therefore, it is always possible for the support staff to log in remotely to solve the problem. &quot;Since we have been using Empirum, we can ensure global support, even if our headquarters in Germany are closed for a holiday - in such case, colleagues, for instance, in Spain, will provide help&quot;, the IT director sums up. Now, his 11 specialists can again focus on their essential tasks, rather than being burdened with bothersome &quot;click work&quot;. Additionally, interruptions during which one of the more than 260 employees had to do without his or her computer, have been minimized - which in turn increases employee productivity rates.</p>\n<h3 class=\"emphasis\">Higher Transparency with Service Store</h3>\n<p>Recently, IBC has also started to use the Matrix42 Service Store, a modular solution that relies on standardized processes - it links technical and business data in a way that provides an even higher degree of transparency of corporate IT environments. &quot;Service management provides final clarity on applications in use. Tickets can be resolved even faster through the help desk, and traditional software requests can be handled in an online-shopping manner,&quot; explains Band. Using the Matrix42 service and systems management products has not only increased his own satisfaction, but also the satisfaction of his users. They receive answers to their questions more quickly, problems are resolved through remote support, and software can be ordered via the Service Catalog as easily as via Amazon. &quot;Today, it is still the same two ultimate arguments that convinced us of the Matrix42 solution last year: the optimum connection between service and systems management and the excellent mapping of the IT workflow. And, as a matter of course, the ITIL V3 certification of the Service Catalog also plays a role in an industry such as the utilities sector&quot;, says Band. He can very well imagine using additional Matrix42 products, such as Personal Backup or security solutions, in his company.</p>\n<div class=\"well\">\n	<p class=\"quote italics\">&quot;Seven years ago, it took courage to decide against a free Microsoft solution and in favor of a paid systems management solution from a German vendor, about which we did not know anything - but it was definitely more than worthwhile! Today, we are still benefitting from this decision.&quot;</p>\n	<p class=\"bold\">-Martin Seeberger<br />-Head of IT, Illwerke, Vorarlberg</p>\n</div>\n<h3 class=\"emphasis\">Illwerke Vorarlberg: Innovative and Eco-Friendly</h3>\n<p>Illwerke Vorarlberg were the very first Matrix42 customer in Austria. Illwerke has used Empirum since 2003 - with great success. &quot;At that time, the merger between Illwerke and Vorarlberger Kraftwerke was impending. We knew that we had to define a corporate IT standard for this purpose&quot;, Martin Seeberger, head of IT at Illwerke, remembers.</p>\n<h3 class=\"emphasis\">Decision in Favor of Empirum</h3>\n<p>Until then, a free systems management solution by Microsoft had been used and the company thought about purchasing Intel software. Why did things turn out differently? The systems management solution by Matrix42 is an absolutely open system that could be integrated immediately with Illwerke’s unique software landscape. &quot;We decided to use Empirum, although we had not known Matrix42 at that time and had to pay for a systems management software for the first time&quot;, remembers Seeberger. This decision was based on a comprehensive analysis of various systems management solutions, including both the technical and business aspects. The fast ROI proved that his assessment was right. Within shortest time, the initial costs had paid off. Now and then, immediate time-savings were perceived; Matrix42, as a customer-oriented German vendor, always has a focus on customer requirements. This close partnership between Matrix42 and Illwerke is also reflected in the specific &quot;agent&quot; developed by Matrix42 for Illwerke. &quot;Since at that time the Empirum-integrated agent did not address our requirements profile one hundred percent, Matrix42 has programmed an agent that does exactly match our individual situation&quot;, explains Seeberger. Meanwhile, many of these specific features have been integrated into the current version of Matrix42 Empirum v12, and there are considerations to switch to the new standard agent.</p>\n<p>Today, Seeberger and his team of IT experts are in charge of more than 1300 devices - a task which could not have been handled based on the company’s former IT structure.</p>\n<p>&quot;When we migrated to the Windows XP operating system in mid-2003, the benefits of Empirum became more than obvious: Individual steps are automated, which saves time and resources&quot;, says Seeberger. A potential migration to Windows 7 does not cause him any headaches - after all, he has distributed more than 240 software packages via Empirum across the company. Empirum features such as automatic hardware detection and online updates of the driver database have been particularly helpful. Matrix42 is also used for inventory and patch management purposes, which maximizes client security. &quot;Our goal has been and still is to optimize IT processes, while improving transparency. The Matrix42 portfolio helps us to measure and control our processes easily via a centralized platform, which saves time and money&quot;.</p>\n<h3 class=\"emphasis\">Easier IT Orders</h3>\n<p>The Austrian company has added the Matrix42 Service Catalog to the automation and standardization solutions, which provides even more transparency to the employees when it comes to IT processes and interrelations, while also ensuring shorter service times and easier IT orders - with 1300 devices being used in the company, this sums up to quite a workload every day. &quot;The Matrix42 products have convinced us, as have the good cooperation and, last but not least, the price - in 2002 and still today&quot;, says Seeberger.</p>\n<h3 class=\"emphasis\">TAP Desktop Solutions GmbH</h3>\n<p>TAP Desktop Solutions, as a desktop management specialist, designs and implements client-related concepts and solutions for its customer base, which is mostly made up of medium-sized businesses and public sector organizations. Based on the company slogan &quot;the solution is always easy, you just have to find it&quot;, the TAP IT experts develop individual solution concepts that can be seamlessly integrated with the customer’s business processes. Meanwhile, Michael Krause, TAP Managing Director, and his team also work for a number of utilities companies. &quot;Today, TAP’s customers include about 90 companies and public-sector organizations across all sizes. About 100,000 clients are managed with Matrix42 solutions&quot;, says Michael Krause. &quot;More than ever, companies are under pressure to ensure the transparency of their corporate IT processes and reduce breaks in communications. Matrix42’s integrated service and systems management solutions are ideal to address these challenges; they link business and technical data to provide relevant, complete information, making life easier for IT administrators, business managers and users alike.&quot;</p>\n<p>TAP acted as central contract at IBC Solar and Vorarlberger Illwerke during all steps of the Matrix42 implementation project, from the initial presentation to implementation and training. Together, current processes were analyzed to determine and realize optimization potential.</p>','ibc-solar-logo.png','case-ibcillwerke-en.pdf',NULL,'2012-06-04 13:30:55',0,0),
	(5,'The Hartford',NULL,'the-hartford-logo.png',NULL,NULL,'2012-06-26 12:39:16',1,0),
	(6,'Puma',NULL,'puma-logo.png',NULL,NULL,'2012-06-26 12:39:38',1,0),
	(7,'Aaron&#39;s',NULL,'aarons-logo.png',NULL,NULL,'2012-06-26 12:40:14',1,0),
	(8,'Verizon',NULL,'verizon-logo.png',NULL,NULL,'2012-06-26 12:40:31',1,0),
	(9,'T-Mobile Systems',NULL,'t-systems-logo.png',NULL,NULL,'2012-07-25 16:51:10',1,0),
	(10,'The Home Depot',NULL,'home-depot-logo.png',NULL,NULL,'2012-07-25 16:55:09',1,0),
	(11,'Federal Aviation Administration',NULL,'federal-aviation-logo.png',NULL,NULL,'2012-07-25 16:58:15',1,0),
	(12,'Windstream',NULL,'windstream-logo.png',NULL,NULL,'2012-07-25 17:00:03',1,0),
	(13,'New York State Senate',NULL,'new-york-senate-logo.png',NULL,NULL,'2012-07-25 17:03:37',1,0),
	(14,'Roche Diagnostics',NULL,'roche-diagnostics-logo.png',NULL,NULL,'2012-07-26 13:17:15',0,0),
	(15,'21st Century Insurance',NULL,'21st-century-ins-logo.png',NULL,NULL,'2012-07-26 13:20:39',0,0),
	(16,'Fresenius Netcare',NULL,'fresenius-logo.png',NULL,NULL,'2012-07-26 13:25:41',0,0),
	(17,'Comisión Federal de Telecomunicaciones',NULL,'comision-telecomunicaciones.png',NULL,NULL,'2012-07-26 13:31:40',0,0),
	(18,'National Science Foundation',NULL,'nsf-logo.png',NULL,NULL,'2012-07-26 13:35:01',1,0),
	(19,'Die Post',NULL,'die-post-logo.png',NULL,NULL,'2012-07-26 13:38:48',0,0),
	(20,'Mundi Pharma','<h3 class=\"emphasis\">At Mundipharma, license and contract managment is now a walk in the park</h3>\n<p class=\"italics\">Pharmaceutical company Mundipharma breaks new ground: by introducing an innovative tool, manual efforts in the management of licenses and contracts are reduced enormously, while the quality of data is improved and sound planning is made easier.</p>\n<p>Up until 2006, Mundipharma&#39;s license and contract management was in desperate need of improvement. Too much had to be done manually: only hard copies of contracts were filed, and the tool of choice for planning the deadlines and costs of all maintenance and support contracts was Excel. The licenses that had been purchased could therefore only be synchronized with the actual usage, which was determined technically on the client, by hand - be it for a quarterly check or the re-purchase of a license. The software that was actually installed was determined automatically by the Empirum Inventory scanner.</p>\n<p>Heinrich Conrad, Director Contract Management, is glad those days are over: &quot;We simply had to put too much effort into our license and contract management during the course of a year. And if you handle your data manually they are never up to date. Moreover, as the data was entered by hand, the risk of working with incorrect data was way too high.&quot;</p>\n<p>Especially in license management, the task&#39;s complexity often led to delays and insecurities. Approved licenses, for example, could only be used at different workstations after extensive manual research. &quot;Sometimes, the resources we required for the manual research were out of all proportion to the savings we made by using the license again,&quot; remembers Conrad. To make matters worse, retracing the different versions and releases of a purchased software and differentiating between them was extremely difficult. &quot;Determining whether an upgrade, an update or a new purchase was necessary, was often an endless task, depending on the history of the license,&quot; adds Conrad.</p>\n<p>&quot;In addition, it was almost impossible to figure out which user was currently using which version of a particular software. As computers were often swapped or exchanged, users did not match the paper records anymore.&quot;</p>\n<p>The company was quick to define its main requirement when it came to finding a suitable solution: maximum automation of their data maintenance and thus highest data quality. Another important requirement was that different employees in IT and purchasing would need access to current data at the same time - depending on their role and task - to ensure that requests were dealt with quickly.</p>\n<h3 class=\"emphasis\">Automation after implementation</h3>\n<p>Mundipharma scanned the market for the best possible solution and decided on the License Manager and Contract Manager from Matrix42 (formerly update 4u). The highly integrated solution links framework, maintenance and support contracts seamlessly with the relevant licenses and rights of use.</p>\n<p>A standard interface to Empirum Inventory imports information on the software installed on the client. The reference database - the so-called License Intelligent Pack - consolidates the scanner&#39;s results automatically and adds commercial information such as manufacturer, rights of use or the manufacturer&#39;s stock-keeping unit (SKU). As a result, the solution presents the company&#39;s License Manager with the required licenses automatically and - also automatically - compares those to the licenses that were already purchased. &quot;If you have ever tried to determine manually which license-relevant products are hiding behind a technical scan result you will appreciate the intelligence of a reference database. Filtering out freeware or reports on patches and service packs is a never-ending story,&quot; adds Conrad. &quot;Should our inventory report a finger print now which is not recognize d by our reference database, a Matrix42 employee will investigate the corresponding product - license-relevant or not - and its manufacturer and will update the reference data accordingly.&quot;</p>\n<p>Mundipharma does also not need to worry about missing contractual deadlines anymore - the system keeps them informed about all dates and deadlines by email.</p>\n<h4 class=\"emphasis\">Summary</h4>\n<p>At Mundipharma, the License Manager and Contract Manager handle licenses and contracts for almost 800 employees. Conrad is happy: &quot;Today, our support staff can look up themselves if there are still free licenses available before installing software. They can also check if software is already installed, but not used. Manual research is now a thing of the past!&quot;</p>\n<p>After implementing the License and Contract Management, Mundipharma realized another project together with Matrix42 in 2007: a manually kept asset management database was replaced by the Matrix42 Asset Manager and can since be filled automatically to a great extent.</p>\n','mundi-pharma-logo.png','case-mundipharma-en.pdf','<iframe width=\"560\" height=\"315\" src=\"http://www.youtube.com/embed/WibmcsEGLKo\" frameborder=\"0\" allowfullscreen></iframe>','2012-07-26 13:40:23',0,0),
	(21,'WVS Technology Comet',NULL,'wvs-comet-logo.png',NULL,NULL,'2012-07-26 13:42:43',0,0),
	(22,'US Department of Homeland Security',NULL,'homeland-security-logo.png',NULL,NULL,'2012-07-26 13:45:39',1,0),
	(23,'Intuitive Surgical',NULL,'intuitive-surgical-logo.png',NULL,NULL,'2012-07-26 13:48:30',0,0),
	(24,'HSL Infosystems',NULL,'hcl-tech-logo.png',NULL,NULL,'2012-07-26 13:51:14',1,0),
	(25,'Nexus Management','<h3 class=\"emphasis\">MSP Uses Empirum as Cornerstone for PC Lifecycle Management Services</h3>\r<p>Nexus relies on matrix42’s Empirum Pro suite for software installation and desktop management anywhere in the world</p>\r<h4 class=\"emphasis\">Case study abstract</h4>\r<p>Nexus Management is a managed services provider (MSP) specializing in the provision of IT services delivered through the secure use of the Internet. From its world-class data center, Nexus remotely manages its customers’ IT assets in their corporate networks.</p>\r<p>Three years ago, Nexus chose matrix42’s Empirum Pro as the foundation for its PC Lifecycle Management Services, designed to extend the life of corporate investments by ensuring that desktops and laptops are kept properly updated with the latest software and patches. Empirum is used by Nexus to rollout and install new applications and operating systems, and to keep them upto-date. The latter is particularly important as companies struggle to keep up with the almost daily release of patches to protect against a growing number of viruses and other attacks. Using Empirum, Nexus handles this for its customers automatically.</p>\r<p>According to Roger Richardson, CEO of Nexus, Empirum enables Nexus to centrally manage a very large number of desktops with very few administrative staff. Empirum is used to provide services for nine corporate customers with a combined total of nearly 2,000 networked PCs.</p>\r<p>Empirum is also used by the MSP to automatically maintain a detailed inventory of all software and hardware on its customers’ corporate networks – essential for license management and to ensure standardization across the enterprise.</p>\r<p>Nexus U.S. offices are in Brunswick, Maine, with customers in the United States and Canada, as well as in the United Kingdom, Australia and the Far East.</p>','nexus-management-logo.png',NULL,NULL,'2012-07-26 14:04:32',0,0),
	(26,'BMW Switzerland','<h3 class=\"emphasis\">BMW Group Switzerland</h3>\n<p>From zero to sixty in record time. BMW Group Switzerland manages its clients at an unexpected tempo.</p>\n<h3 class=\"emphasis\">The Company</h3>\n<p>BMW Group Switzerland is a successful world-wide company that follows a future-oriented course with a clear premium brand strategy. The unmistakable design, intelligent power plants/engines and the use of the latest technologies and materials, lead to the driving pleasure of a BMW, BMW Motorbikes, and MINI. Innovative technology increases the pleasure of driving a BMW product and improves security. The trading organization of the BMW Group Switzerland is composed of a comprehensive network in all regions of Switzerland, which provides the best customer care and competent service.</p>\n<h3 class=\"emphasis\">The Challenge</h3>\n<p>Today’s administration of PCs, Notebooks and Servers has all IT departments facing organizational challenges. Not only managing the total number of existing systems, but also the management of the installed applications, updates, and of course, the data security is the main challenge of any IT organization. In this case, the PC Lifecycle Management is just one of the responsibilities of the IT department. This is why any additional tasks require innovative solutions. This is what happened to Lothar Zank, IT Manager of the BMW Group Switzerland. While initially being responsible for about 250 clients, after a reorganization of departments, an additional 100 PCs were added to his IT department’s portfolio. With the premise of not increasing the existing IT team, or the administration manner, this was an absolutely impossible task with his old solution.</p>\n<p>The procedure that was used for software distribution via images, had already reached its limit. The time cost for the administration of the existing system landscape, via the method of creating and distributing a basic image with operating system and some Microsoft Office applications, was no longer productive. Additionally, in the BMW departments, there are some additional applications, which could not be covered by this basic image.</p>\n<h3 class=\"emphasis\">The Solution</h3>\n<p>Lothar Zank took the initiative, and used the IT fair, Orbit-iEX, for probing the existing providers of IT Lifecycle Management solutions. Five vendors were identified, which were to prove their products in further tests. Two of the software products failed the initial tests, and thus, came down to a decision between Empirum by matrix42, and two other international developers.</p>\n<p>After the tests, Lothar Zank specifies the following issues, which were decisive in the selection of Empirum:</p>\n<ul class=\"list\">\n	<li><span class=\"bold emphasis\">Homogenous, simple use</span> in all product areas</li>\n	<li><span class=\"bold emphasis\">Duration of the implementation</span></li>\n	<li><span class=\"bold emphasis\">Flexibility of the OS installation,</span> due to the dynamic hardware detection and the existing driver database</li>\n	<li><span class=\"bold emphasis\">Flexibility of the packaging</span> for making all software distributable in a manner which is fair for the company and users</li>\n	<li><span class=\"bold emphasis\">Role concept</span> (not administering each PC on its own, but computer groups)</li>\n	<li><span class=\"bold emphasis\">Support</span> - With questions or situations where help is required, the matrix42 Support is always at our side</li>\n</ul>\n<h3 class=\"emphasis\">Competent Local Support</h3>\n<p>In parallel to the intensive test phase, the issue was to find a dependable service provider and partner for the Empirum support. matrix42 is represented by several Empirum Solution Partners in Switzerland. The choice was UPGREAT AG in Fehraltorf, near Zurich. As an innovative solution provider for the IT necessities of small and also larger companies, UP-GREAT develops targetoriented services for the infrastructure management, as well as for the service and system management. The central asset of the company is global thinking. UP-GREAT takes care of IT Strategy counseling, performing of server and storage consolidations, and automatic system migrations.</p>\n<h3 class=\"emphasis\">Amortization and Saving Effects</h3>\n<p>After only three months, Empirum was installed and running at BMW. 350 PCs are now being managed via Drag&Drop with operating system, software and patches. 70% of the tasks previously performed manually are performed today by Empirum automatically. Additionally, the inventory data of the networked systems are available to BMW at any time. Empirum displays which software, including the version is installed on what hardware. Changes to a system are logged, and if desired, they are announced to an IT employee via alarm. The R.O.I. has proven itself quickly with Empirum. Looking back, an administration without Empirum is no longer an option, and the decision was brilliant.</p>\n<h3 class=\"emphasis\">Matrix42</h3>\n<p>is the developer of Empirum software, one of the leading solutions for software and client management, as well as a provider of corresponding consulting and engineering solutions.</p>','bmw-logo.png','case-bmw-en.pdf','<iframe width=\"560\" height=\"315\" src=\"http://www.youtube.com/embed/ZDuxWGHA-Z4\" frameborder=\"0\" allowfullscreen></iframe>','2012-07-26 16:32:44',0,0),
	(27,'Constantin Medien AG','<h3 class=\"emphasis\">Fewer Clicks - Higher WOW Factor</h3>\n<h4 class=\"secondary\">Greatly Reduced Expenses for Software Rollouts and Installations</h4>\n<p>Constantin Medien AG is an extraordinary company with a very special history and a very special IT structure. Two years ago, the company started to look for an IT solution that matches the agility	and flexibility characteristics of the media industry, while also ensuring a maximum of professionalism. While first experiences with a client lifecycle management solution had already been gathered in the 1990s in the company&#39;s SPORT1 (formerly DSF) subsidiary, it had become clear that this software was not viable or able to address the future requirements of an international media group.</p>\n<div class=\"well\">\n<p class=\"quote\"><span class=\"italics\">Matrix42 Empirum is the central component of a successful IT management approach and the only solution that can be fully integrated with all IT management processes - from initial installation to administration and the secure deletion of all data.</span></p>\n<p>Empirum allows for the complete, centralized, and efficient management of all corporate PCs, servers, configurations and software assets (both Windows and Linux). Matrix42 Empirum can be fully integrated with existing IT infrastructures.</p>\n<p>Comprehensive capabilities to automate user support and PC operations help to achieve measurable cost reductions. Empirum provides the leading-edge technology for completely automated content and software distribution via networks or the Internet. Empirum can be used to easily distribute, install and modify all components of a PC workstation - operating system, drivers, applications, driver connections, policies etc. - and also all personal settings and data.</p>\n</div>\n<h3 class=\"emphasis\">Empirum: Completely Convincing</h3>\n<p>Thorsten Speck, Head of Office IT of Constantin Medien AG, tells about his IT headaches: &quot;In 2007, we were no longer able to perform fast and flexible changes with our existing client lifecycle management solution - our company had simply become too large and too heterogeneous. In particular, frequent software rollouts and setting up new workplaces consumed enormous resources, and we were no longer capable of fulfilling the management&#39;s and the users&#39; requirements.&quot;</p>\n<p>When he performed a market analysis to solve this problem, Thorsten Speck also attended an informational event, where he learned about Matrix42 and its Empirum client lifecycle management solution. He set up a team consisting of external consultants and internal IT specialists to test Empirum and also solutions by Frontrange, Microsoft and Altiris. Thorsten Speck remembers: &quot;According to our technicians, Empirum was the most convincing product by far; for business value, I understood that a fast return on investment could be achieved with this software.&quot; Matrix42&#39;s cooperative commitment was another factor which drove the decision in favor of Empirum.</p>\n<p>Within only three months, Constantin Medien had determined to use Empirum as the company&#39;s future client management solution: &quot;We wanted to leave big players such as Microsoft to cooperate with an innovative software vendor as our partner to design our IT future. This is what we expected from Matrix42, and we were not disappointed - to the contrary.&quot;</p>\n<h3 class=\"emphasis\">Real Savings: Online Driver Download</h3>\n<p>The greatest verifiable benefit was achieved by leveraging the online download of the numerous software and hardware drivers. During installation, Empirum automatically detects which driver is required, copies this driver and stores it on the local hard disk. This saves a lot of time. According to Speck, who implemented Empirum for a &quot;soft&quot; rollout, &quot;Matrix42&#39;s unique driver collection has reduced costs when preparing the integration of SPORT1 Online into the group many times over. For a media company such as Constantin, the focus is on 24-hour operations, and we must be very careful to ensure that IT activities do not compromise our ongoing broadcasting business&quot;.</p>\n<h3 class=\"emphasis\">Modern License Management and More</h3>\n<p>In Ismaning, the Matrix42 License Management solution has also been implemented and used successfully: An interface connects it directly to the existing ITSM system to ensure the currency of all data on software and hardware licenses. With Matrix42, the company now has a professional client asset management solution and is able to provide detailed cost overviews - a key business requirement resulting from multiple IT services being cross-charged to multiple subsidiary or group companies. &quot;For us the information that, for instance, a computer is not used is very important&quot;, says Speck, &quot;since this allows for the optimized usage of all of our licenses anytime, while saving a lot of money. While in the past our IT services were mostly cross-charged on a flat-rate basis, the business aspects of our IT now have a very clear and transparent structure.&quot;</p>\n<h3 class=\"emphasis\">Windows 7 Migration Next on the Agenda</h3>\n<p>With the Matrix42 solution achieving such convincing results, Constantin Medien is already thinking into the future. &quot;Next year, we plan to migrate to the Windows 7 operating system, and we are sure to benefit from the vast experience Matrix42 has with this issue&quot;, says a happy Thorsten Speck. &quot;Maybe Personal Backup will then gain much more importance and we will add this module to our portfolio.&quot;</p>','constantin-medien-logo.png','case-constantin-en.pdf',NULL,'2012-07-27 09:15:26',0,0),
	(28,'Infineon Technologies AG','<h3 class=\"emphasis\">Infineon Relies on IT-Commerce</h3>\n<h4 class=\"secondary\">Matrix42 Service Catalog has successfully	optimized internal IT | ROI seen within 12 months</h4>\n<p>As a Dax-listed international corporation with more than 25,000 employees, Infineon Technologies knows that rapidly responding to change is the key to success. Infineon&#39;s success is due to staying one step ahead of competition in the semiconductor industry and being a leader in many other areas, including corporate IT and interdisciplary IT service. Infineon has shown, yet again, their IT leadership with the successful implementation of Matrix42&#39;s IT Service Management solutions, embracing IT-Commerce and the future of IT.</p>\n<div class=\"well\">\n	<h3>IT-Commerce: focus on the customer</h3>\n	<p>IT-Commerce is modeled after the success of e-commerce. From product listings on the Internet, to ordering and order processing through delivery and customer service - highly automated processes ensure the fast and reliable delivery of goods and services.</p>\n	<h4>Matrix42 applies the same pattern to IT:</h4>\n	<h4>Browse, order and deliver automatically. That&#39;s easy and efficient IT.</h4>\n	<p>IT-Commerce turns users into customers. Just like shopping on the Internet, users order IT services, including software and hardware, in the web	shop. Once the order has been approved, delivery is initiated and service is cross-charged to the respective cost center, automatically.</p>\n</div><!-- well -->\n<h3 class=\"emphasis\">Standard solution to replace in-house solution</h3>\n<p>Until 2009, Infineon used an IT service platform developed internally for global integration of their corporate IT and to optimize end user communication with the centralized IT department. Ultimately, the software that had been implemented years ago was too difficult to use and was doomed to fail. &quot;The request process of the old solution was too complicated. Key users were required to handle the tool, since typical users were not able to understand it&quot;, remembers	Michael Schmelmer, CIO of Infineon.</p>\n<p>In early 2009, Infineon was under pressure to replace its in-house development with a standard solution as soon as possible. A global IT service management system with standardized processes and tools was also set up, further driving the IT shop implementation. Standardization was expected to reduce costs and provide an easy-to-use interface, which could also be used by users without training.</p>\n<p>Early on in the thorough evaluation process, it became obvious that available solutions would address no more than 60% of Infineon&#39;s requirements. This reality lead Infineon to two alternatives: continue with in-house development or work with a vendor whose IT service management solution was well-suited for integration. &quot;Right from the beginning, Matrix42 scored very highly, covering about 70% of Infineon&#39;s requirements. The Service Catalog has met our expectations and ideas of how IT should be delivered&quot;, explains Hansjorg Sonnleitner, Vice President, Operation Services, IT Systems at Infineon.</p>\n<p>Infineon was convinced about the viability of the Matrix42 IT Service Portal during the first phase of the bidding process. Michael Schmelmer, Corporate Vice President IT and CIO of Infineon contact Herbert Uhl, CEO of Matrix42 AG and established a &quot;memorandum of understanding&quot;. Matrix42 and Infineon agreed to implement the Matrix42 IT Service Catalog at Infineon and leverage the open interfaces to customize the solution. &quot;We did not want to continue with in-house development. Together with Matrix42 we have developed a product that is also available as a standard product. Delivering for us the solution we required, under equal terms&quot;, said Schmelmer in Summer 2009.</p>\n<h3 class=\"emphasis\">Technology under control</h3>\n<p>Meanwhile, the Matrix42 Service Catalog has been integrated completely with Infineon&#39;s IT infrastructure and is available globally to all clients. Changes to existing systems or new workstations can now be added automatically, requiring less time and resources. Permissions and access options are specified based on corporate guidelines. If hardware is requested, the ordered item can even be supplied including configuration settings and according to the respective job description.</p>\n<p>Even external systems ,such as the SAP purchasing tool with more than 40,000	permission variants, have meanwhile been integrated with the Matrix42 ITCommerce platform. Also, a generic workflow including interface has been set up to ensure continued and automatic support of all of Infineon&#39;s corporate approval processes. Thanks to the Matrix42 solution, Infineon is now able for the first time to bundle services and provide these services automatically - an enormous relief both for the IT staff and the end users.</p>\n<p>A generic process has also been developed for the individualized &quot;required databoxes&quot; to map the purchasing processes and data. &quot;Many features that have been developed in cooperation with Infineon have become an integral part of our IT-Commerce platform&quot;, says Herbert Uhl. &quot;It is good to see the concrete, on-site requirements of our customers, since this is the only way for us to continuously develop our tool, enabling us to not only be up-to-date, but one step ahead.&quot;</p>\n<h3 class=\"emphasis\">Happy users make everybody happy</h3>\n<p>The modern IT Service Catalog by Matrix42 has gained much acceptance	at Infineon - even within the first few weeks more than 9000 IT orders were	processed with this tool, without any problems. While in the past, processes were not comprehensible for the many end-users worldwide, prices were not available or the delivery status of a hardware or software item was unclear, the Matrix42 IT-Commerce platforms now provides a clear overview: offers, order processing and delivery are based on automated standard processes, which ensure transparency and speed, increasing both Infineon&#39;s efficiency and end-user satisfaction.</p>\n<p>&quot;Acceptance of the new IT shop is higher than expected, and we are sure that this is the first step in the right direction&quot;, is Sonnleitner&#39;s judgment. &quot;On-site	support efforts have been reduced significantly since the service management solution has been implemented. 80% of services are already automated. The remaining 20% are tasks that have to do with complex integrations and customizations.&quot; According to Sonnleitner, the goal for the future is to enable the users to do everything themselves.</p>\n<p>The Matrix42 Service management implementation is a success from both an	IT and business perspective. The automated process documentation allows for	meaningful reports - and related insights.</p>\n<p>&quot;From a manager&#39;s perspective, documentation and reporting are very important. Thanks to Matrix42, we can now provide meaningful information on the purchaser, the date and time of the order and related costs. True to the motto &quot;something can always be optimized&quot;, comprehensive reports allow us to detect weak points in the company in time and to look for appropriate solutions&quot;, explains Infineon CIO Schmelmer.</p>\n<h3 class=\"emphasis\">Benefits after 12 months</h3>\n<p>&quot;It was immediately clear that the enterprise-wide implementation of the Matrix42 Service Catalog has paid off for us within only 12 months&quot;, said CIO Michael Schmelmer. &quot;We wanted &#39;one point of service&#39;, i.e., a service offering with an increased focus on the user and an IT service provisioning process that is as simple as an online shopping portal. This is what we expect of a professional service management solution. So far, we have been very satisfied.&quot;</p>','infineon-tech-logo.png','case-infineon-en.pdf',NULL,'2012-07-27 13:43:01',0,0),
	(29,'Rhenus Logistics','<h3 class=\"emphasis\">Less Manual Effort	Thanks To Higher Automation</h3>\n<h4 class=\"secondary\">Successful logistics group undergoes a paradigm shift</h4>\n<p>With revenues of 2.7 billion Euros, Rhenus Group, headquartered in Holzwickede in Westphalia, is	one of Europe&#39;s leading logistics service providers. Its Contract Logistics, Freight Logistics, Port Logistics and Public Transport divisions stand for the management of complex supply chains and innovative value-added services - which obviously implies a very complex corporate IT infrastructure of business-critical importance.</p>\n<p>With 16,300 employees in 290 locations worldwide, the Rhenus Group&#39;s international network links key industry centers all over Europe. The company has a presence in major European sea ports and inland ports to provide highest-quality transport services both with their own facilities and in cooperation with trusted and competent partners. Rhenus Group&#39;s mission is to offer their customers an optimized, yet individual solution to address their unique procurement, production and distribution requirements. Always looking ahead, the company strives to ensure the future value of their logistics services for their customers. All over Europe, Rhenus Group accompanies their customers to help them expand and explore new roads to success.</p>\n<p>In such complex environments, optimized to provide prompt services, IT plays a key role. Not surprisingly, the IT decision-makers at Rhenus Assets &amp; Services GmbH &amp; Co. KG have dedicated quite some time to exploring the automation and standardization capabilities of IT systems management and the Alignability&trade; process model for service management tasks.</p>\n<h3 class=\"emphasis\">Initial Situation</h3>\n<p>Some IT administrative and operational prerequisites are mandatory for logistics companies of this size to enable them to provide state-of-the-art and cost-efficient means to address related requirements, including software inventory and software distribution and also license management, an end-user portal and IT service cross-charging. Already in 2009, the corporate IT department of Rhenus Assets &amp; Services GmbH &amp; Co. KG started its search for a professional solution that was able to fulfill their rigorous corporate requirements. In the meantime, another requirement has gained significant importance: Vendor support for the existing &quot;HP Open View&quot; service desk solution based on the Alignability&trade; process model will be discontinued end of 2012, which increases the scope of functionality required for the new software to also include complete service management functionalities. The overriding business goal was to replace HP Open View Service Desk with an ITIL-compliant, service-oriented ITSM tool with processes that are consistent with the previous solution to the greatest possible extent.</p>\n<p>Based on this scenario, the following requirements were derived: All IT service-related processes, from ordering to software installation and IT service cross-charging, must be mapped within one single software solution. The Rhenus Group IT decision-makers initiated a selection process for the desired software distribution and inventory solution and performed a market analysis, based on a two-phased evaluation process: By the end of 2009, the company decided to purchase the Matrix42 suite. Also, a successful feasibility study was conducted to analyze the Matrix42 Service Desk, including product management and professional services.</p>\n<p>No company - and Rhenus Group is no exception - can afford even minimal interruptions of its business-critical IT services, and so, one of the technical challenges consisted in integrating the Matrix42 products into the existing IT landscape, leveraging the valuable, extensive knowledge of the Matrix42 staff, in particular with respect to connectors and standard interfaces with directory services, ERP, financial, service and other systems. Such interfaces enable Rhenus to also integrate SAP, Active Directory and Lotus Notes without any problems. Every IT professional knows that interfaces are the key to a transparent, coherent information system with consistent, consolidated base data, and so, the project also included the creation of an additional interface to transfer ticket data from the HP Service Desk to the new Matrix42 Service Desk solution.</p>\n<div class=\"well\">\n	<p class=\"quote italics\">&quot;Maintaining our successful IT service management processes and setting new software and license management standards is one of our key objectives.&quot;</p>\n	<p class=\"bold italics\">-Dr. Hubert Sicking-Bundschuh,<br />-Head of IT Processes &amp; Support of Corporate IT, Rhenus Asset- &amp; Services GmbH &amp; Co KG</p>\n</div><!-- well -->\n<h3 class=\"emphasis\">The Future IT Landscape</h3>\n<p>Rhenus Group&#39;s IT systems management requirements were implemented in close cooperation with the Matrix42 experts. Matrix42 Inventory delivers the complete, up-to-date inventory data which form the basis for corporate decisions. The solution provides a complete overview of hardware and software in use and checks PCs to determine their suitability for new software with defined system requirements. It also allows IT staff to monitor hardware and software changes based on an automated history. The integrated alarm management detects changes to the hardware equipment and notifies the administration staff, if necessary. The Inventory module is integrated with the Matrix42 License Management solution to ensure reliable data on the actual utilization of software, compared to corporate licenses - very useful information to have. Enterprise-wide software distribution and standardization are indispensable to minimize costs related to client and server administration.</p>\n<p>But Matrix42 Software Management has much more to offer: The Rhenus Group administrators need only a few mouse-clicks to assign software to individual systems or computer groups, a process that provides full support of all current installation methods, from unattended installation to MSI with custom tools or application virtualization. Another feature is particularly useful for the IT staff: Package creation is wizard-based, and any modifications can be performed quickly and easily with a graphical editor. It is now equally easy to record installation packages - thanks to the Matrix42 Package Robot: A full sample installation is recorded with the installation recorder. All individual steps are recorded, as is the case during a normal setup routine, to allow the IT staff to create packages as an exe file, customize them manually in the script and deploy them to individual target workplaces. Audits of management activities allow the IT staff to track software rollouts with Matrix42 Empirum.</p>\n<p>Matrix42 Personal Backup enables Rhenus Group&#39;s IT experts to back up or restore data and configuration settings of user PCs directly onsite or remotely with the push of a button from within the software management solution - no matter if new installations are performed or if backed-up data must be restored selectively.</p>\n<p>Rhenus Group will use Matrix42 Service Office, Service Catalog and Service Desk for their service management tasks. The IT support staff can use the integrated Remote Control software to access user PCs directly from within the user console. Rhenus will use the Matrix42 Service Office, including License Management, Asset Management, Software and Contract Management, as a central instance to manage software licenses, hardware assets and contracts. No matter if assets are used or unused, are located in the warehouse, the headquarters or distributed across locations - Service Office ensures transparency and provides solid data to help the corporate IT decision-makers determine the corporate requirements.</p>\n<p>Rhenus Group&#39;s IT staff is particularly enthusiastic about the easy-to-use, web-based user interface of the Matrix42 Service Catalog with its easy customizing capabilities. The self-service portal provides a clear overview of all IT services and deliverables, from applications to complete PC workplaces, covering all processes from ordering to delivery and cross-charging.</p>\n<h3 class=\"emphasis\">A Look into the Future</h3>\n<p>The next phase, including Service Management implementation based on the Alignability&trade; model and migration of the previously used HP Service Desk, is impending. Migration to the Matrix42 Service Desk is a key component of Rhenus Group&#39;s eleven integration and migration projects; prerequisites include current projects to integrate master data with the main systems, continued rollout of Matrix42 Empirum Inventory and IT service standardization.</p>\n<h3 class=\"emphasis\">Bottom Line</h3>\n<p>&quot;With Matrix42 Systems Management, including the integrated License Management solution, having been successfully integrated with the Rhenus IT landscape, the migration to an ITIL-compatible, service-oriented IT service management from the same vendor and within the same environment constitutes a quantum leap for Rhenus IT&#39;s strategic options, while allowing us to continue to leverage successfully implemented IT service management processes in our new environment.&quot; (Christoph Kistner, Head of Corporate IT, Managing Director at Rhenus Asset- &amp; Services GmbH &amp; Co KG)</p>','rhenus-logo.png','case-rhenus-en.pdf',NULL,'2012-07-27 13:58:14',0,0),
	(30,'Carl Zeiss AG','<h2 class=\"secondary\">Achieving an accurate license balance and full transparency</h2>\n<h3 class=\"emphasis\">Automated license management at the touch of a button</h3>\n<p>Manually managing all licenses for 14,000 clients is not an easy task. And it rarely leads to accurate results: it bears the risk of holding not enough - or way too many - licenses. Not the ideal solution for a company known for its accuracy. But eventually, Carl Zeiss AG managed to make its license management transparent. The solution provided by Matrix42 automates many tasks, such as independently matching licenses and installations. The license balance is available at the click of the mouse - for different departments or for the entire organization. Thus, Carl Zeiss AG can now be certain to meet compliance guidelines, while saving time and money.</p>\n<div class=\"well\">\n	<ul class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n		<li class=\"active\"><a href=\"#about\" data-toggle=\"tab\">Carl Zeiss AG</a></li>\n		<li><a href=\"#challenge\" data-toggle=\"tab\">Challenge</a></li>\n		<li><a href=\"#solution\" data-toggle=\"tab\">Solution</a></li>\n	</ul>\n	<div class=\"tab-container\">\n		<div class=\"tab-content\">\n			<div id=\"about\" class=\"tab-pane active padded-content\">\n				<h3>Carl Zeiss AG</h3>\n				<p>The company is a global leader in the optical and optoelectronic industries. Its products are used in medicine and research, provide the most precise measurements to the industry and set new standards in photography and film. Carl Zeiss AG is a global company with 24,000 employees worldwide. In the year 2010/2011, the company made sales revenues of 2.1 billion euros.</p>\n			</div><!-- about -->\n			<div id=\"challenge\" class=\"tab-pane padded-content\">\n				<h3>Carl Zeiss Challenge</h3>\n				<p>Licenses were managed manually for a long time at Carl Zeiss AG. As a result, it was never obvious how many licenses were actually needed, and the company always held too many or not enough licenses - an immense legal and economic risk. Moreover, the efforts involved in the manual management of 14,000 clients were simply not acceptable.</p>\n			</div><!-- challenge -->\n			<div id=\"solution\" class=\"tab-pane padded-content\">\n				<h3>Carl Zeiss Solution</h3>\n				<p>The license management at Carl Zeiss AG is now automated to the greatest possible extent: all installations and licenses - along with the respective invoices and contracts - are instantly available. The license balance is generated by the touch of a button. The IT staff&#39;s work is much easier now, and compliance guidelines are met at all times. In addition, the company is able to negotiate better terms when buying new licenses, as it is now able to plan ahead more precisely.</p>\n				<div class=\"well\">\n					<p class=\"quote italics\">&quot;In the past, generating a license balance meant several days of work. With the Matrix42 license management solution it is much quicker: we only hit a button to know what software we have installed.&quot;</p>\n					<p class=\"bold\">-Wolfgang Kassel,<br />-Head of Sourcing &amp;Vendor Management, Carl Zeiss AG</p>\n				</div>\n			</div><!-- solution -->\n		</div><!-- tab-content -->\n	</div><!-- tab-container -->\n</div><!-- well -->\n<h3 class=\"emphasis\">Accuracy is key</h3>\n<p>Audits do not leave room for guesswork; they have to be 100% correct. Wolfgang Kassel is very aware of this fact. Being the head of sourcing &amp;vendor management at the IT department of Carl Zeiss AG he is directly responsible for the software installed on the organization&#39;s 14,000 clients worldwide. License management is an integral part of his daily work, but up until recently it required a lot of manual work: desktops were partly installed by hand and partly by an automated software distribution system. Wolfgang Kassel recalls, &quot;A certain group was assigned certain software, but there was no way of checking the software had really been assigned by the system.&quot; This lack of control led to software being licensed that was not even installed anywhere. Daily tasks, such as exchanging a desktop, made matters even worse.</p>\n<h3 class=\"emphasis\">The problem: lack of transparency</h3>\n<p>&quot;At the end of the day, our main problem was the lack of transparency,&quot; says Wolfgang Kassel. Installation figures were only available in confusing spreadsheets, which were managed separately by the many different legal entities of Carl Zeiss AG. To generate a license balance Kassel and his two colleagues had to request the relevant data before they were able to compile it. A real Herculean task! A series of workflows provided a certain level of control: &quot;We were able to review how many installations had been carried out and could allocate IT costs accordingly ,&quot; says Kassel, &quot;but we had no way of validating our allocation automatically or of regularly checking if the software was still installed on the desktops.&quot;</p>\n<h3 class=\"emphasis\">Detailed reports and sensible interfacesLicense balance without gaps</h3>\n<p>The result: incorrect licensing due to faults in the system. An unacceptable risk for Wolfgang Kassel: &quot;There was no way around it: we had to make sure our software was licensed correctly. On the one hand we did not want to use licenses indiscriminately, on the other we did not want to pay for more licenses than we had to, or even for the wrong licenses.&quot; A professional license management solution had to be found: every single process was put to the test and redeveloped if necessary - a huge project. The employees in the IT department reviewed all existing licenses and entered service contracts with the different vendors. &quot;Updates and upgrades are very important to us, as they ensure we maintain the value of our investment,&quot; explains Kassel. &quot;The next logical step therefore was to automate our license management as much as possible.&quot;</p>\n<div class=\"well\">\n	<p class=\"quote italics\">&quot;Our license management is very transparent. It allows us to plan ahead precisely, which puts us in a better position to negotiate with our suppliers. And we can be certain to meet all compliance guidelines at all times.&quot;</p>\n	<p class=\"bold\">-Wolfgang Kassel<br />-Head of Sourcing &amp;Vendor Management, Carl Zeiss AG</p>\n</div>\n<h3 class=\"emphasis\">Detailed reports and sensible interfaces</h3>\n<p>Three vendors were shortlisted after the tender process and were rated carefully on the basis of a scoring scale. The company&#39;s main requirements were seamless processes with regard to the license management and an accurate overview of all licensing needs. In addition, compliance reports needed to be broken down to the company&#39;s numerous different legal entities. &quot;Matrix42 met all of these demands perfectly well,&quot; Wolfgang Kassel explains the decision. But the company was also impressed by the diverse interfaces, for example to Microsoft Active Directory and other important systems such as software distribution, asset management and cost centers. Further commercial interfaces were tailored to the organization&#39;s needs. The tool could therefore be integrated into the existing IT landscape easily and quickly.</p>\n<h3 class=\"emphasis\">Intelligent assignment of licenses and installations</h3>\n<p>When implementing the Matrix42 solution, Carl Zeiss AG was particularly impressed with the License Intelligence Service (LIS). It holds a record of all major software vendors along with their metrics and license types: existing licenses are thus recognized and validated fully automatically. &quot;We only have to enter each purchase we make - the system will recognize itself which installation the data relates to via the inventory. This works really well,&quot; says Kassel. Nowadays, the IT staff at Carl Zeiss AG knows exactly which software is installed on the desktops. All relevant data is stored in the Matrix42 license management solution, including billing details, SAP order number and service contract details. The license balance is now generated on a monthly basis without any of the effort involved before. Whenever the information is needed it is at hand within seconds.</p>\n<h3 class=\"emphasis\">Cost awareness</h3>\n<p>Carl Zeiss AG also benefits when it comes to the internal exchange of licenses. When an employee cancels a license it becomes available to someone else. &quot;Because we are now able to pass costs on, we can also raise awareness for the subject among cost center managers,&quot; says Wolfgang Kassel.</p>\n<h3 class=\"emphasis\">Maximum compliance, minimum costs</h3>\n<p>The best result, next to flawless compliance across the entire organization, is the reduction in costs: the company only pays for the licenses it actually uses. Moreover, Wolfgang Kassel can now predict much more accurately how the actual use will change. &quot;This allows for more precise planning,&quot; he says, &quot;which in turn allows us to negotiate more long-term - and therefore less expensive - agreements with our suppliers.&quot;</p>','zeiss-logo.png','case-zeiss-en.pdf',NULL,'2012-07-27 14:47:17',0,0),
	(31,'Hogg Robinson Group','<p>Empirum in international use: Successful management of HRG‘s heterogeneous IT landscape across multiple locations</p>','hrg-logo.png',NULL,'<iframe width=\"420\" height=\"315\" src=\"http://www.youtube.com/embed/XpUMXWbDOio\" frameborder=\"0\" allowfullscreen></iframe>','2012-07-27 15:08:39',0,0);

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
	(1,'method','%%leadform%%','Lead capture body form',NULL,NULL,NULL,'public','lead_form',NULL,NULL,1,0),
	(2,'content','%%getstartedpage%%','A Get Started well that scrolls to the leadform on the same page','<div class=\"well margin-right\">\n	<div class=\"left\">\n		<h3 class=\"no-margin\">Let Matrix42 empower you to be in control of your IT needs.</h3>\n		<h4 class=\"no-margin\">Get started with the perfect IT solution now.</h4>\n	</div>\n	<a href=\"/request_a_call\" class=\"btn btn-info btn-large right margin-right\">Get Started Today!</a>\n	<div class=\"clearfix\"></div>\n</div><!-- well -->',NULL,NULL,NULL,NULL,NULL,NULL,1,0),
	(3,'method','%%sidebarsupport%%','The support and contact well for the sidebar',NULL,NULL,NULL,'public','side_support',NULL,NULL,1,0),
	(4,'method','%%awardslist%%','Award list table',NULL,NULL,'public','press','awards',NULL,NULL,1,0),
	(5,'method','%%sidebarleadform%%','Lead capture form for sidebar',NULL,NULL,NULL,'public','side_lead_form',NULL,NULL,1,0),
	(6,'view','%%sidebarsuccessstories%%','Sidebar Success Stories',NULL,NULL,NULL,NULL,NULL,'sidebar/success_stories',NULL,1,0),
	(7,'method','%%resellerlist%%','Reseller list table',NULL,NULL,'public','partners','resellers',NULL,NULL,1,0),
	(8,'method','%%publicationslist%%','Publication list table',NULL,NULL,'public','press','publications',NULL,NULL,1,0);

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
	(1,2,'main','<div class=\"padded\">\n	<h3 class=\"emphasis\">Matrix42. Empowering the Dynamic Workplace.</h3>\n	<p>Matrix42 is the leading supplier for Workplace Management solutions. Matrix42 Workplace Management enables the seamless management of physical, virtual and mobile environments. It combines Client Lifecycle, Cloud, SaaS, Virtualization, Mobile Device Management and Service Management into a holistic solution enabling users to have transparent access to their data and services everywhere, from any virtual or physical device at any time.</p>\n	<p>Users can select and order services from a central marketplace. Based on company policies they will be provisioned on demand - and can even be cross-charged. The solution allows users to have autonomy while still allowing IT to maintain control and automation. Matrix42 Workplace Management increases user productivity as well as IT-efficiency and enables the implementation of new technologies like cloud computing and virtualization.</p>\n	<p>Founded in 1992, Matrix42, with headquarters near Frankfurt Germany and Salt Lake City, Utah, has been established in the dynamic IT market for 20 years. More than six million clients are managed by Matrix42 software with more than 2,500 customers worldwide including market-leading enterprises such as Infineon, Magna, Lufthansa Systems and Puma and integrators like T-Systems, Raiffeisen IT, msg systems and Bechtle. In early 2008, Matrix42 became part of the Asseco Group. With over 8,000 employees and a market capitalization of around 1.2 billion Euros, Asseco is one of the largest European software companies.</p>\n	%%getstartedpage%%\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#locations\" data-toggle=\"tab\">Locations</a></li>\n			<li><a href=\"#awards\" data-toggle=\"tab\">Awards</a></li>\n			<li><a href=\"#publications\" data-toggle=\"tab\">Publications</a></li>\n			<li><a href=\"#management\" data-toggle=\"tab\">Management</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"locations\">\n					<div class=\"span8\">\n						<h2 class=\"emphasis\">Matrix42 Locations</h2>\n						<h3 class=\"secondary border-bottom\">USA</h3>\n						<h4 class=\"emphasis\">North American Headquarters</h4>\n						<p>\n							<span class=\"block\">3400 North Ashton Blvd</span>\n							<span class=\"block\">Suite 110</span>\n							<span class=\"block\">Lehi, Utah 84043</span>\n							<span class=\"block\">Phone: +1.801.653.3700</span>\n							<span class=\"block\">Fax: +1.800.848.5410</span>\n						</p>\n						<p>mail: <a href=\"mailto:info@matrix42.com\">info@matrix42.com</a></p>\n					</div><!-- span8 -->\n					<div class=\"span4\">\n						<h5 class=\"emphasis\">East coast office</h5>\n						<p>\n							<span class=\"block\">53 Perimeter Center East</span>\n							<span class=\"block\">Suite 200</span>\n							<span class=\"block\">Atlanta, Georgia 30346</span>\n							<span class=\"block\">Phone: +1.888.MS42.USA</span>\n						</p>\n					</div><!-- span4 -->\n					<div class=\"span4\">\n						<h5 class=\"emphasis\">Silicon Valley office</h5>\n						<p>\n							<span class=\"block\">901 Campisi Way</span>\n							<span class=\"block\">Suite 150</span>\n							<span class=\"block\">Campbell, California 95008</span>\n						</p>\n					</div><!-- span4 -->\n					<div class=\"span8\">\n						<h3 class=\"secondary border-bottom\">United Kingdom</h3>\n						<h5 class=\"emphasis\">Matrix42 UK</h5>\n						<p>\n							<span class=\"block\">Contact: Mark Lillywhite</span>\n							<span class=\"block\">Unit 2A</span>\n							<span class=\"block\">Wayside Green</span>\n							<span class=\"block\">Woodcote</span>\n							<span class=\"block\">Oxfordshire</span>\n							<span class=\"block\">RG8 0QJ</span>\n							<span class=\"block\">United Kingdom</span>\n							<span class=\"block\">Phone: +44 1865 600307</span>\n						</p>\n						<p>mail: <a href=\"mailto:mark.lillywhite@matrix42.com\">mark.lillywhite@matrix42.com</a></p>\n					</div>\n					<div class=\"span8\">\n						<h3 class=\"secondary border-bottom\">Europe</h3>\n					</div>\n					<div class=\"span4\">\n						<h5 class=\"emphasis\">EMEA Headquarters</h5>\n						<p>\n							<span class=\"block\">Dornhofstr. 44-46</span>\n							<span class=\"block\">63263 Neu-Isenburg</span>\n							<span class=\"block\">Germany</span>\n							<span class=\"block\">Phone: +49 (0) 61 02 - 816-0</span>\n							<span class=\"block\">Fax: +49 (0) 61 02 - 816-100</span>\n						</p>\n						<p>mail: <a href=\"mailto:info@matrix42.de\">info@matrix42.de</a></p>\n					</div><!-- span4 -->\n					<div class=\"span4\">\n						<h5 class=\"emphasis\">Karlsruhe office</h5>\n						<p>\n							<span class=\"block\">Amalienbadstr. 41 / Bau 54</span>\n							<span class=\"block\">76227 Karlsruhe</span>\n							<span class=\"block\">Phone: +49 (721) 91432-300</span>\n							<span class=\"block\">Fax: +49 (0)721 91432-499 </span>\n						</p>\n					</div><!-- span4 -->\n				</div><!-- locations -->\n				<div class=\"tab-pane padded-content\" id=\"awards\">\n					<h3 class=\"emphasis\">Awards</h3>\n					<p>Matrix42 is proud to have its products industry certified and to have received recognition for the quality of both their services and products.</p>\n					%%awardslist%%\n				</div><!-- awards -->\n				<div class=\"tab-pane padded-content\" id=\"publications\">\n					<h3 class=\"emphasis\">Publications</h3>\n					<p>Matrix42 in the Press</p>\n					%%publicationslist%%\n				</div><!-- publications -->\n				<div class=\"tab-pane padded-content\" id=\"management\">\n					<h3 class=\"emphasis\">Management Board</h3>\n					<table class=\"table\">\n						<tr>\n							<td style=\"min-width:107px;\"><img src=\"/assets/img/thumbnails/management/herbert_uhl.jpg\" alt=\"Herber Uhl (Chairman, CEO)\" /></td>\n							<td>\n								<h4 class=\"secondary\">Herbert Uhl (Chairman, CEO)</h4>\n								<p>As Chief Executive Officer of Matrix42, Herbert Uhl is responsible for the company&#39;s vision, strategy and continuedprofitable growth. Herbert joined the company through the merger of Matrix42 AG and update4u Software AG in March 2009. Herbert was responsible for update4u&#39;s company strategy and sales organization from 2000 onwards, achieving dramatic growth during that time. Prior to update4u, Herbert founded the software company Prodacta in 1992, which went public in 1999.</p>\n								<p>Originally from the Rhineland region of Germany, Herbert recently relocated to the Salt Lake City, Utah area in order to drive Matrix42&#39;s growth in the North American market.</p>\n							</td>\n						</tr>\n						<tr>\n							<td style=\"min-width:107px;\"><img src=\"/assets/img/thumbnails/management/jochen_jaser.jpg\" alt=\"Jochen Jaser (CTO)\" /></td>\n							<td>\n								<h4 class=\"secondary\">Jochen Jaser (CTO)</h4>\n								<p>Jochen Jaser joined Matrix42 as CTO in April 2009 with responsibility for the further development of the two product lines - IT Service Management and Systems Management.</p>\n								<p>Lured by an exciting challenge, Jochen Jaser joined update4u Software AG in 2004. From 2007 he joined the executive team with responsibility for products and services. Jaser can look back on 15 years of experience in international product and project management. He performs his job with real passion – just like his sports: he gets new ideas when sailing, scuba diving, or snowboarding.</p>\n							</td>\n						</tr>\n						<tr>\n							<td style=\"min-width:107px;\"><img src=\"/assets/img/thumbnails/management/michael_schmidt.jpg\" alt=\"Michael Schmidt (CFO)\" /></td>\n							<td>\n								<h4 class=\"secondary\">Michael Schmidt (CFO)</h4>\n								<p>Michael Schmidt is CFO at Matrix42 and in charge of finance and administration.</p>\n								<p>Michael Schmidt was born in the federal German state of Hesse. He joined Matrix42 in July 2011 as commercial director and has been a member of the board since beginning of 2012. Mr. Schmidt has more than 20 years of finance experience in international organizations. As a means of relaxation, he enjoys being with his family, practices endurance sports and likes to go sailing.</p>\n							</td>\n						</tr>\n						<tr>\n							<td style=\"min-width:107px;\"><img src=\"/assets/img/thumbnails/management/oliver_bendig.jpg\" alt=\"Oliver Bendig (VP of Product Management)\" /></td>\n							<td>\n								<h4 class=\"secondary\">Oliver Bendig (VP of Product Management)</h4>\n								<p>As VP of Product Management, Oliver Bendig is responsible for product strategy and roadmap for the Matrix42 product portfolio. Aside from heading the product management team, Oliver spends a lot of time consulting with customers regarding their IT service management, virtualization and mobility strategies. Oliver has 10+ years experience in building and managing products in the Workplace Management space. Before joining Matrix42 in 2009, he was responsible for product management at Enteo Software and FrontRange Solutions. Oliver holds a BA and a Master of Science in computer science from the University of Applied Sciences in Karlsruhe, Germany.</p>\n							</td>\n						</tr>\n						<tr>\n							<td style=\"min-width:107px;\"><img src=\"/assets/img/thumbnails/management/rex_white.jpg\" alt=\"Rex White (VP, Business Development)\" /></td>\n							<td>\n								<h4 class=\"secondary\">Rex White (VP, Business Development)</h4>\n								<p>As Vice President of Business Development, Rex is responsible for our Global Alliances and Channels programs. Rex has over 15years of experience in the IT industry and the last 10 focusing on developing new routes to market through Alliance, OEM, and Channel programs. Rex’s career includes Dell, Vignette, Altiris (where he managed the highly successful relationship with Dell), and prior to joining Matrix 42 in September of 2009, Rex worked as a consultant to many software organizations.  Rex Holds a BA in Economics and an MBA both from St Edwards University in Austin, Texas where he calls home.</p>\n							</td>\n						</tr>\n						<tr>\n							<td style=\"min-width:107px;\"><img src=\"/assets/img/thumbnails/management/herbert_schoenle.jpg\" alt=\"Herbert Schoenle (VP Sales)\" /></td>\n							<td>\n								<h4 class=\"secondary\">Herbert Schoenle (VP Sales)</h4>\n								<p>In August 2011 Herbert Schoenle joined Matrix42 as head of the company&#39;s Sales and Regional Marketing EMEA division. Born in the region of Upper Swabia, Herbert Schoenle has 20 years of experience that flow into his work for Matrix42 AG. During the last 15 years, Herbert Schoenle worked for PTC, where he was in charge of building up a profitable sales organization in Europe. In his new role at Matrix42, his task is to drive further expansion in Europe. Outside of work, he likes to be with his family and spend his leisure time at the nearby Lake of Constance and in the Alps.</p>\n							</td>\n						</tr>\n						<tr>\n							<td style=\"min-width:107px;\"><img src=\"/assets/img/thumbnails/management/markus_loeb.jpg\" alt=\"Markus Loeb (Vice President Customer Services, EMEA)\" /></td>\n							<td>\n								<h4 class=\"secondary\">Markus Loeb (Vice President Customer Services, EMEA)</h4>\n								<p>As Vice President Customer Services for EMEA, Markus Loeb is responsible for leading Professional Services, Product Competence, Product Customization, the Matrix42 Academy and SaaS. Together with his team consisting of project managers, solution architects and consultants he ensures the professional implementation of the Matrix42 solutions. His product competence team provides customer-oriented cross-channel support. Markus Loeb has more than 15 years of consulting and management experience which he has gained in various international companies across multiple industries and disciplines.</p>\n							</td>\n						</tr>\n						<tr>\n							<td style=\"min-width:107px;\"><img src=\"/assets/img/thumbnails/management/rick_conover.jpg\" alt=\"Rick Conover (VP Sales, North America)\" /></td>\n							<td>\n								<h4 class=\"secondary\">Rick Conover (VP Sales, North America)</h4>\n								<p>Rick is responsible for the North American Sales Organization. With over 15 years of experience, he has driven sales growth at leading technology companies and organizations - in infrastructure management, security, network management, and service management.  Earlier,  Rick was responsible for the Northeast business at Crossbeam Systems, a leader in the network security space. Rick also ran the Southeast business for Altiris.  He held positions at Symantec and Computer Associates as well. His expertise includes sales, sales management, and business development. Rick graduated from Drexel University with a degree in Architecture.</p>\n							</td>\n						</tr>\n						<tr>\n							<td style=\"min-width:107px;\"><img src=\"/assets/img/thumbnails/management/alex_ferguson.jpg\" alt=\"Alex Ferguson (VP, Services & Support – Americas)\" /></td>\n							<td>\n								<h4 class=\"secondary\">Alex Ferguson (VP, Services & Support – Americas)</h4>\n								<p>As Vice-President of Services and Support for the Americas at Matrix42, Alex Ferguson is responsible for leading Education, Professional Services and Customer Support to help customers maximize the value of their Matrix42 solutions.  Alex has more than 15 years of experience in building solution-centric services organizations.  Prior to joining Matrix42 Alex held various management positions at Novell, Inc., Symantec and BMC Software.</p>\n							</td>\n						</tr>\n					</table>\n				</div><!-- management -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(2,3,'main','%%leadform%%\n<div class=\"space\"></div>\n<div class=\"padded\">\n	<h2 class=\"secondary\">Alternatively you can choose from our list of resellers below:</h2>\n	%%resellerlist%%\n</div><!-- padded -->',NULL),
	(3,4,'main','<div class=\"padded\">\n	<h4 class=\"emphasis\">Securing the Mobile Enterprise</h4>\n	<p>Perhaps the greatest threat to enterprise data security today is the proliferation of mobile devices, such as smartphones and tablets, that connect to the corporate network. IT is caught in the middle of its responsibility to maintain the security and integrity of corporate data and a new generation of employees who expect IT to allow them to use any device – personal or company-issued – to access corporate networks, applications and information anywhere at anytime. The only way to effectively balance these two opposing demands is with a mobile device management (MDM) solution.</p>\n	<p>Matrix42 delivers an easy-to-use, enterprise-wide mobile device and WLAN management solution that is designed to track, monitor and manage an organization’s mobile devices. It provides a real-time view into the entire fleet of mobile devices, giving companies the ability to increase the productivity of their mobile workforce as well as increase the ROI of mobile applications.</p>\n	%%getstartedpage%%\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#byod\" data-toggle=\"tab\">BYOD</a></li>\n			<li><a href=\"#keys\" data-toggle=\"tab\">Key Features</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"byod\">\n					<h3 class=\"emphasis\">BYOD on Your Terms</h3>\n					<p>Most companies have now adopted, or are planning to adopt, a BYOD (bring your own device) policy. This helps companies save money by transferring some of the hardware costs to employees, improve employee satisfaction and productivity, and create a partnership with employees to maintain security rather than have them circumvent IT processes. The key to a successful BYOD policy is to utilize the proper tools that provide employees with the flexibility for a greater choice of devices while maintaining security by offering it within enforceable company policies.</p>\n					<p><strong>Mobile Workplace Management</strong> from Matrix 42 makes it easy to launch a BYOD program that meets the needs of both employees and IT. Employees can use their favorite mobile devices to access the network, request support and receive services, while IT can maintain control over all of the organization&#39;s mobile devices, provide a higher level of service and reduce costs.</p>\n					<p>Matrix42 is the first company to fully integrate mobile device management with <a href=\"/solutions/self_service\">IT Service Management (ITSM)</a> to give organizations greater visibility and control over their mobile assets and the flexibility to effectively implement self-service for employees as part of a BYOD policy.  Users can acquire and self-provision their device through the company&#39;s service catalog and access management features such as device location and data wiping. An iPhone application allows users to easily access the service catalog, place orders and open help desk tickets.</p>\n					<p>In addition to tracking software licenses, assets and contracts, the inclusion of license and <a href=\"/solutions/compliance\">asset management</a> provides analysis of end users&#39; work profiles to evaluate the devices, apps and services they prefer. IT administrators can ensure all mobile devices connected to the network are inventoried, secured and managed within company policies, whether they support BYOD for employees or the devices are owned by the company.</p>\n					<p><span class=\"italics\">Mobile Workplace Management can be used as a standalone product or integrated with Physical Workplace Management and/or Virtual Workplace Management to manage all workplace assets through a single interface.</span></p>\n				</div><!-- benefits -->\n				<div class=\"tab-pane padded-content\" id=\"keys\">\n					<h3 class=\"emphasis\">Mobile Workplace Management Key Features</h3>\n					<ul class=\"list\">\n						<li><span class=\"bold emphasis\">Single interface</span> to manage the lifecycle of all mobile devices.</li>\n						<li><span class=\"bold emphasis\">Cross-platform</span> solution that manages Apple iOS, Google Android, Blackberry, Symbian and Windows Mobile devices.</li>\n						<li><span class=\"bold emphasis\">Web-based</span> console that is optimized for PCs and tablet browsers.</li>\n						<li><span class=\"bold emphasis\">Highly scalable</span> to support an unlimited number of devices and mobile data.</li>\n						<li><span class=\"bold emphasis\">Multi-tenant architecture</span> allows for one instance of the software to support multiple organizations or groups within a large organization.</li>\n						<li><span class=\"bold emphasis\">Secure</span> role-based access provides for differentiating access privileges using custom roles.</li>\n						<li><span class=\"bold emphasis\">Enterprise app catalog</span> to manage both internal and public applications across Apple iOS and Android devices.</li>\n					</ul>\n				</div><!-- keys -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(4,5,'main','<div class=\"padded\">\n	<h3 class=\"emphasis\">Making Desktop Virtualization Easy and Affordable</h3>\n	<p>While about three-quarters of both mid-size and large companies have deployed or are preparing to adopt virtual desktops, most are still struggling with how to make the process less cumbersome and more cost-effective.  Running a hybrid physical/virtual environment also introduces greater complexity and challenges in managing the operating system, applications and user settings.</p>\n	<p>The ability to share resources through a virtual desktop infrastructure (VDI) can ultimately save money, but the initial set up can be costly, time consuming and complicated. For users, the complete ordering process can be frustrating. Matrix42 makes the move to virtual desktops and applications easy and affordable with an automated process for managing, tracking and delivering virtual desktops.</p>\n	<p>Matrix42 is the only vendor that fully supports all three phases of the Citrix Desktop Transformation Model, allowing companies to assess virtual desktop readiness, automate the migration process and ensure smooth operation of the virtual environment.</p>\n	<p>Virtual Workplace Management from Matrix42 automates the management of Citrix environments by installing, updating and maintaining Citrix XenServer, Citrix XenApp and Citrix XenDesktop infrastructures. It can be used as a standalone product for managing desktop virtualization and can also be integrated with Physical Workplace Management and Mobile Workplace Management to manage the entire environment through a single interface.</p>\n	%%getstartedpage%%\n	<p>Matrix42 empowers the user while also allowing IT to maintain control with IT Service Management features so users can request and provision their virtual desktop at any time through a service catalog. For ServiceNow customers, Virtual Workplace Management can be integrated with their ServiceNow Service Catalog. These self-service capabilities drastically decrease the burden on IT departments and eliminate the need for users to wait for an IT administrator to respond to a help ticket request, resulting in quicker fulfillment.</p>\n	<p>Fully integrated license and <a href=\"/solutions/compliance\">asset management</a> ensures full adherence to compliance and governance policies at all times by tracking software licenses, assets and contracts. Administrators can run detailed reports to track their virtual desktops, applications and streams.</p>\n	<p>The bottom line is that companies can now enjoy the benefits of virtualization without all the costs and hassle.</p>\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#features\" data-toggle=\"tab\">Features & Benefits</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"features\">\n					<h3 class=\"emphasis\">Virtual Workplace Management Key Features</h3>\n					<ul class=\"list\">\n						<li>Integrated test and change management for master images and VMs</li>\n						<li>Simplified management and operation processes for Citrix XenDesktop and XenApp</li>\n						<li>Installation, update and retirement of Citrix XenServer, VMware vSphere/ESX and Microsoft Hyper-V</li>\n						<li>Installation, update and retirement of Citrix XenApp servers</li>\n						<li>Integrated maintenance time frames for Citrix XenApp server</li>\n						<li>Integrated Packaging Center for Citrix XenApp application publishing</li>\n						<li>End user self-service for Citrix virtual desktops and applications</li>\n						<li>License and asset management for Citrix XenDesktop and Citrix XenApp</li>\n					</ul>\n				</div><!-- features -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(5,6,'main','<div class=\"padded\">\n	<h3 class=\"emphasis\">Streamline Common IT Processes</h3>\n	<p>As an organization grows and its users becomes more diverse in their work environments and system needs, IT administrators find themselves spending more time taking care of common IT processes and less time on strategic initiatives that drive value for the company. It can be a challenge just to keep up with equipping new employees, deploying OS patches, maintaining software licenses and troubleshooting desktop and notebook issues.</p>\n	<p>Matrix42 has more than 20 years of experience helping companies automate common IT processes, such as software deployments and basic help desk services, in order to minimize the time and costs of deploying and managing desktops and notebooks. Matrix42 makes it easy to manage every phase in the client lifecycle - from provisioning to retirement.</p>\n	<p>Physical Workplace Management from Matrix42 provides centralized management of all corporate desktops, notebooks, configurations and software assets running on Windows, Mac and Linux and can easily be integrated with the existing IT infrastructure. Administrators can continuously manage and enforce corporate policy and ensure ongoing compliance.</p>\n	%%getstartedpage%%\n	<p>Matrix42 endpoint management can be utilized with IT Service Management - either through a service catalog and service desk included with Physical Workplace Management or by integrating with an existing ServiceNow solution.  By doing this, users are able to easily complete many help desk functions on their own such as provisioning services, adding or reinstalling software, and recovering their computer. This provides faster service for end users, reduces help desk requests, lowers overall desktop management costs and allows IT administrators to spend their time on more strategic projects.</p>\n	<p>Fully integrated license and <a href=\"/solutions/compliance\">asset management</a> ensures full adherence to compliance and governance policies at all times by tracking software licenses, assets and contracts.</p>\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#features\" data-toggle=\"tab\">Features & Benefits</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"features\">\n					<h3 class=\"emphasis\">Physical Workplace Management Key Features</h3>\n					<ul class=\"list\">\n						<li>Cross-platform supports including Windows, Mac, Linux and Solaris.</li>\n						<li>Inventory management with detailed data for every device connected to the corporate network, such as desktops, laptops, software, printers, routers and mobile devices.</li>\n						<li>Software management automates software deployments and updates and shows exactly what is installed on each machine. Many Matrix42 customers have reduced rollout failure rates from 10% to 0.002%.</li>\n						<li>OS deployment automates operating system deployments and migrations to reduce errors, help desk calls and time spent creating hardware configurations. Update systems either on site or remotely with just one click.</li>\n						<li>Personal backup restores all user data and settings with the push of a button – either remotely or directly from the end user’s system. Restore all application, data and operating system settings during an OS migration.</li>\n						<li>Easy recovery provides complete disaster recovery after a virus infection, hardware failure or fatal system error.</li>\n						<li>Remote control provides remote access to a user’s system in less than 7 seconds, even if it’s protected by firewalls. This provides end users with instant support upon request and saves the costs and hassle of travel.</li>\n					</ul>\n				</div><!-- features -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(6,7,'main','<div class=\"padded\">\n	<h3 class=\"emphasis\">Take Control of Your IT Assets</h3>\n	<p>With companies looking to control costs and get the most out of their resources, one of the quickest and most effective means is IT asset management (ITAM).  Nearly one-third of corporate software applications are incorrectly licensed, which means companies are overspending on some programs and missing licenses for others. ITAM helps companies eliminate overspending on licenses and hardware as well as ensure compliance. It is such an integral part of maintaining control and managing costs that Matrix42 includes it with each of its solutions for mobile, virtual and physical workplace management. It is also available as a standalone solution.</p>\n	<p>IT Asset Management from Matrix42 provides a solution for managing assets, licenses and contracts that combines software and hardware discovery, inventory, license tracking, software usage and contract management that provide immediate and tangible benefits:</p>\n	<ul class=\"list\">\n		<li>Lower software and hardware costs. Matrix42 provides a complete and accurate view of every asset in the organization to eliminate overspending on hardware, software, licenses and maintenance. By understanding all the assets that are owned and if they are being used and providing value to the business, companies can better manage the hardware lifecycle, make smart procurement decisions and save money.</li>\n		<li>Mitigate risk and ensure compliance. Matrix42 provides transparency into all license agreements so IT purchasers can quickly see if they are overpaying for some licenses and missing contracts for others. This ensures compliance and has been proven to achieve up to a 30% saving on software license expenses.</li>\n		<li>Negotiate effectively with vendors. Armed with insight into software usage patterns, licenses and contracts, companies are in the best position to negotiate favorable terms with their vendors.</li>\n	</ul>\n	%%getstartedpage%%\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#features\" data-toggle=\"tab\">Features & Benefits</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"features\">\n					<h3 class=\"emphasis\">IT Asset Management Key Features</h3>\n					<ul class=\"list\">\n						<li>\n							<h4 class=\"emphasis\">Hardware and Software Asset Management</h4>\n							<ul>\n								<li>Central inventory of all devices, so administrators can easily locate and configure IT assets.</li>\n								<li>Automatically assign hardware and software to users so they quickly receive the tools they need. Track each asset and learn if something is in use, missing or broken, enabling more informed decisions about repairing or replacing equipment.</li>\n							</ul>\n						</li>\n						<li>\n							<h4 class=\"emphasis\">Inventory Management</h4>\n							<ul>\n								<li>A complete view of every asset connected to the corporate network. Automatic detection of all software, desktops, notebooks, mobile devices, printers, routers and more.</li>\n							</ul>\n						</li>\n						<li>\n							<h4 class=\"emphasis\">License Management</h4>\n							<ul>\n								<li>Import, control and reconcile licensing data to avoid overspending and non-compliance.</li>\n								<li>Automatically scan systems, recognize programs and create reports that show how many licenses are needed. When someone in the organization removes or installs an application, the system will reconcile so action can be taken before the company is put at risk.</li>\n								<li>Notification alerts when a license is about to expire or the company is not in compliance.</li>\n							</ul>\n						</li>\n						<li>\n							<h4 class=\"emphasis\">Contract Management</h4>\n							<ul>\n								<li>Securely stores all contract files in one central database for quick access and insight into master agreements and general licenses.</li>\n								<li>Generate contract reports and budgets with a click of a mouse. Receive alerts before contract renewal dates, audits and other deadlines to avoid costly errors.</li>\n							</ul>\n						</li>\n					</ul>\n				</div><!-- features -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(7,8,'main','<div class=\"padded\">\n	<h3 class=\"emphasis\">Save up to 70% on Windows 7 Migration Costs</h3>\n	<p>The end of life for Windows XP is rapidly closing in, and Gartner stresses that companies should now be migrating to Windows 7 and be in the final stages by early 2013. Whether it&#39;s to move from Windows XP before support is discontinued or to upgrade from Windows Vista for better performance, Matrix42 can help companies save up to 70% on their migration costs.</p>\n	<p>This is accomplished by automating and simplifying every step of the process including hardware and software analysis, data backup and driver/operating system installation.  For example, Matrix42 Physical Workplace Management automatically tests drivers, software and operating systems for errors to avoid expensive problems that need to be fixed after the migration.</p>\n	<p>One of the greatest concerns with an operating system migration is downtime and data loss. Matrix42’s solution assesses an organization&#39;s readiness for Windows 7 migration with specific details on what needs to be upgraded before migration should begin. The user and data settings on each system are saved and reinstalled so end users don&#39;t lose productivity.</p>\n	%%getstartedpage%%\n	<p>In IT Administrator magazine&#39;s test of Windows 7 migration tools, Matrix42 received the highest score. It was described as &quot;one step ahead of the competition with its application usage tracking,&quot; which lets an administrator see which applications are currently installed and in use so they don’t waste time or money migrating unused applications.</p>\n	<p>Companies can also save money by taking advantage of desktop virtualization during Windows 7 migration. Matrix42 Virtual Workplace Management automatically provisions the virtual desktops with everything end users need to work remotely.</p>\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#steps\" data-toggle=\"tab\">6 Steps to Migrate</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"steps\">\n					<h3 class=\"emphasis\">6 Steps to a Successful Windows 7 Migration</h3>\n					<ul class=\"list\">\n						<li><strong class=\"emphasis\">Discover</strong> - Matrix42 automatically checks the hardware to ensure it meets Windows 7 prerequisites. With just a few clicks, see which applications are installed and in use to determine only those which need to be migrated.</li>\n						<li><strong class=\"emphasis\">Analyze</strong> - System alerts of any updates that must or should be made to hardware, software and drivers prior to migration to significantly lower costs.</li>\n						<li><strong class=\"emphasis\">Test</strong> - Matrix42 eliminates errors by testing OS configurations, drivers and software.</li>\n						<li><strong class=\"emphasis\">Virtualize</strong> - Take advantage of the opportunity to migrate physical PCs to virtual desktops and provide remote workers with secure access to the network. During Windows 7 migration, Matrix42 automatically provisions the virtual desktops with everything end users need.</li>\n						<li><strong class=\"emphasis\">Deploy</strong> - Automatically deploy operating systems, drivers and software during a Windows 7 migration. This high level of automation reduces errors, help desk calls and the amount of time spent configuring hardware. Matrix42 ensures end users’ personal settings are maintained during the migration, so they can continue working as though no changes were made to their systems.</li>\n						<li><strong class=\"emphasis\">Operate</strong> - When the migration is complete, the system will release the updated PCs into the network and provide end users with access.</li>\n					</ul>\n				</div><!-- steps -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(8,10,'main','<div class=\"padded\">\n	<h3 class=\"emphasis\">Professional Services</h3>\n	<p>A clear strategic direction - founded in innovative thinking - is fundamental to growth. Our strategy and change consultants can help you drive transformation, enhance competitiveness and create new sources of economic value. The only constant in today&#39;s business world is change.</p>\n	<p>Businesses cannot survive, let alone prosper, without leveraging diverse technologies into their long-term strategy and day-to-day operations.</p>\n	<h3 class=\"emphasis\">Support</h3>\n	<p>At Matrix42, we are dedicated to customer satisfaction. That means not only providing the best products but also world-class customer support that starts from the moment you purchase and continues as you implement, use and grow with our products.</p>\n	%%getstartedpage%%\n	<h2 class=\"secondary\">Support Options</h2>\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#annual\" data-toggle=\"tab\">Annual Maintenance</a></li>\n			<li><a href=\"#global\" data-toggle=\"tab\">Global Priority Support</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"annual\">\n					<h3 class=\"emphasis\">Annual Maintenance</h3>\n					<p>Annual Maintenance provides phone, email and web-based support for an unlimited number of support incidents during the annual maintenance contract period. Customers with active Annual Maintenance have access to new software versions, releases, bug fixes, patches and workarounds for the most recent product releases to ensure the product operates in substantial conformity with the current operating documentation. Customers also may access the on-line customer portal to open and track current support incidents, update their technology profile and access the knowledgebase. Annual Maintenance provides technical support for a single global region designated as the Americas, EMEA or Asia Pacific. <span class=\"italics\">Note: Annual Maintenance does not cover training or implementation services, which must be purchased separately.</span></p>\n				</div><!-- annual -->\n				<div class=\"tab-pane padded-content\" id=\"global\">\n					<h3 class=\"emphasis\">Global Priority Support</h3>\n					<p>Global Priority Support is an add-on service to Annual Maintenance that provides personalized support management and global incident response* for your organization. A dedicated Service Account Manager (SAM) is assigned to work with you to ensure the Matrix42 support team provides proper priority and attention to your open support issues. Your SAM will never work with more than six customers at a time, ensuring that you have a single point of contact who (1) understands your technical environment, (2) holds regular incident reviews, (3) provides the latest technical product information, (4) helps you with best practices, and (5) recommends additional professional services as appropriate. Included in the price of this offering is one on-site visit to the customer annually. The SAM may be available for additional requested visits at the customer\'s expense.</p>\n				</div><!-- keys -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n	<h6>*Currently covering both the Americas and EMEA time zones.</h6>\n</div><!-- padded -->',NULL),
	(9,2,'sidebar','%%sidebarleadform%%\n%%sidebarsupport%%',NULL),
	(10,4,'sidebar','%%sidebarleadform%%\n%%sidebarsuccessstories%%\n%%sidebarsupport%%',NULL),
	(11,5,'sidebar','%%sidebarleadform%%\n%%sidebarsuccessstories%%\n%%sidebarsupport%%',NULL),
	(12,6,'sidebar','%%sidebarleadform%%\n%%sidebarsuccessstories%%\n%%sidebarsupport%%',NULL),
	(13,7,'sidebar','%%sidebarleadform%%\n%%sidebarsupport%%',NULL),
	(14,8,'sidebar','%%sidebarleadform%%\n%%sidebarsupport%%',NULL),
	(15,10,'sidebar','<div id=\"links\" class=\"well margin-right\">\n	<div class=\"well-container\">\n		<div class=\"padded\">\n			<h2>Related Links!</h2>\n		</div><!-- padded -->\n		<ul class=\"list\">\n			<li><a href=\"https://support.matrix42.de/sps/portal\" target=\"_blank\">Matrix42 Support Portal</a></li>\n			<li><a href=\"http://forum.matrix42.com\" target=\"_blank\">Matrix42 Forum</a></li>\n			<li><a href=\"http://feedback.matrix42.com\" target=\"_blank\">Matrix42 Feedback Portal</a></li>\n		</ul>\n	</div><!-- support-container -->\n</div><!-- support -->\n%%sidebarsupport%%\n%%sidebarleadform%%',NULL),
	(16,11,'main','<div class=\"padded\">\n	<h3 class=\"emphasis\">Reduce Support Costs by 70% through Automation and Self-service</h3>\n	<p>The world of IT is getting more complex to manage every day. From the ever-increasing popularity of Software as a Service (SaaS) offerings to the proliferation of mobile devices, a new way of thinking and managing end-user assets is critical to the success of IT departments. With self-service, organizations have an opportunity to transform the way IT services are delivered and significantly relieve the burden of manual tasks and one-off requests. For many organizations, these day-to-day support costs represent the largest percentage of the IT budget. Matrix42 streamlines support processes and provides an automated self-service portal that lets end users solve their IT challenges on demand to reduce service costs by up to 70%.</p>\n	<p>Matrix42 is the only company to incorporate self-service into mobile device management, virtual desktop management and endpoint management. The benefits for the customer are so tangible that Matrix42 has included self-service with each of its three core solutions. This results in a unique, user-centric approach to workplace management that gives end users the flexibility and control they want to stay connected and improve productivity. And, it actually decreases the burden on IT departments while still letting them set the parameters for users in order to maintain security and compliance.</p>\n	<p>Users can request and provision any services from any physical, virtual and mobile devices at any time through the service catalog. Automated processes eliminate the need for users to wait for an IT administrator to respond to a request, resulting in quicker fulfillment. When an IT administrator does need to get involved, they can troubleshoot and manage all assets remotely.</p>\n	%%getstartedpage%%\n	<h3 class=\"emphasis\">ServiceNow Integration</h3>\n	<p>For users that already have an ITSM solution from ServiceNow, all of the Matrix42 Workforce Management solutions for mobile device management, virtual desktop management and endpoint management are fully integrated and can be delivered seamlessly through the ServiceNow service catalog.</p>\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#features\" data-toggle=\"tab\">Features & Benefits</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"features\">\n					<h3 class=\"emphasis\">IT Service Management Key Features</h3>\n					<p>Matrix42’s self-service web-based, ITIL-compliant solution includes three main components:</p>\n					<h4 class=\"emphasis\">Service Catalog</h4>\n					<p>Matrix42 Service Catalog automates the complete service request process to dramatically reduce support costs, improve end-user satisfaction and comply with corporate policies. Due to the high level of automation, organizations can eliminate up to 70% of their IT support costs.  End users can shop for IT services and receive automated support 24/7. This can reduce help desk calls by up to 40% while giving end users faster response times.</p>\n					<p>The Matrix42 Service Catalog tracks the end users who request IT services and charges them based on their consumption. This means IT can cross-charge the departments that request services, instead of assuming all of the organization’s IT expenses. It also makes end users aware of their consumption so they can take cost-saving measures.</p>\n					<h4 class=\"emphasis\">Help Desk</h4>\n					<p>Matrix42 Help Desk automates ITIL incident, problem and change management to provide end users with a higher level of service and faster response times. It can reduce the amount of resources needed for help desk support and can lower support costs by up to 20%. Organizations can automate everything from ticket creation to software installations and quickly solve their end users’ most common problems. This not only increases end user’ satisfaction but also reduces the chance of receiving financial penalties from breached SLAs (service level agreements).</p>\n					<p>A self-service portal empowers end users to resolve their own issues. They can request support, search a knowledge base and receive automatic updates when the status of their help desk ticket changes. This lowers both their wait times and the number of cases the IT team is required to handle.</p>\n					<h4 class=\"emphasis\">Mobile Self-Service App</h4>\n					<p>Matrix42 Mobile lets end users access the help desk and catalog through an iPhone app. With just a few swipes, they can browse service options, view pricing and request support. Once they place orders, they can use the app to check the status of their requests and stay informed. These self-service options can greatly reduce the amount of calls the help desk receives. The iPhone app also allows end users to receive company news and access the employee directory while they’re on the go.</p>\n				</div><!-- features -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(17,11,'sidebar','%%sidebarleadform%%\n%%sidebarsupport%%',NULL),
	(18,12,'main','<div class=\"padded\">\n	<h4 class=\"emphasis\">Maximize Your ROI from Microsoft SCCM</h4>\n	<p>Although Microsoft SCCM is a powerful tool for desktop management, its limitations can cause you to spend too much time and effort on what should be simple tasks. For example, SCCM doesn&#39;t allow you to delegate jobs to non-IT employees without giving them access to the whole console. This can lead to misconfigurations and errors.</p>\n	<p>Your end users may also face delays and downtime when they need software updates, as they must open a ticket and wait for a technician whenever they need support.</p>\n	<p>That&#39;s why Matrix42 partnered with Microsoft and their customers, including BMW, to develop an add-on that allows you to get the most value from SCCM. With Enterprise Manager, you can:</p>\n	<ul class=\"list\">\n		<li><span class=\"bold emphasis\">Enable the delegation of tasks to employees who do not have advanced SCCM skills.</span> Enterprise Manager allows your non-IT staff to perform administrative duties without risking errors in the SCCM environment. That way, your technicians can spend less time doing repetitive tasks and more time on high-level projects.</li>\n		<li><span class=\"bold emphasis\">Enrich your existing Microsoft SCCM feature set.</span> Matrix42 Enterprise Manager adds many sought-after features to SCCM such as an emergency stop, which instantly halts all rollout activity when a problem is discovered.</li>\n		<li><span class=\"bold emphasis\">Simplify your desktop management.</span> The user-friendly, web-based console allows you to easily manage tasks related to inventory, software deployment, packaging and troubleshooting.</li>\n		<li><span class=\"bold emphasis\">Save time and bandwidth during software package distribution.</span> Enterprise Manager simplifies the package distribution process so it takes seconds rather than hours. This will also reduce your bandwidth consumption and server load.</li>\n		<li><span class=\"bold emphasis\">Keep your end users happy.</span> The Matrix42 Service Catalog allows your end users to request applications from a software catalog and have the programs installed and ready to use within minutes. This eliminates the frustrations of downtime. </li>\n	</ul>\n	<h4 class=\"secondary\">Matrix42 Enterprise Manager is the only product of its kind and the most comprehensive of all SCCM add-ons.</h4>\n	%%getstartedpage%%\n	<div id=\"product-tab-container\" class=\"well margin-right\">\n		<ul id=\"product-tab\" class=\"nav nav-tabs\" data-tabs=\"product-tab\">\n			<li class=\"active\"><a href=\"#features\" data-toggle=\"tab\">Features &amp; Benefits</a></li>\n			<li><a href=\"#why\" data-toggle=\"tab\">Why Matrix42?</a></li>\n		</ul><!-- product-tab -->\n		<div class=\"tab-container\">\n			<div class=\"tab-content\">\n				<div class=\"tab-pane active padded-content\" id=\"features\">\n					<h3 class=\"emphasis\">Simplify Your Microsoft SCCM Tasks and Maximize Your IT Resources</h3>\n					<p>Matrix42 Enterprise Manager is a web-based Microsoft SCCM add-on that helps you to reduce the costs and efforts of your desktop management. It enhances the feature set of SCCM in the following areas:</p>\n					<h4 class=\"emphasis\">Extended Package Management</h4>\n					<p>Matrix42 Enterprise Manager works with Microsoft SCCM to simplify your software package management and save you time.</p>\n					<p>Tasks such as installing, configuring, upgrading and removing software are often time-consuming and can overwhelm your systems. With Matrix42 Enterprise Manager, you can roll out updates in under 1 minute. Packages are also compressed to reduce your bandwidth and server load.</p>\n					<p>Enterprise Manager gives you visibility into your software so you can be sure the package you&#39;re deploying has been tested and will work properly. A glance lets you see which packages are available, where they are located, how long it took to download them to clients and if there were any errors.</p>\n					<p>Customize your software package management. Matrix42 lets you define the order in which software is installed, specify what happens in case of a failure, create deployment plans and more.</p>\n					<h4 class=\"emphasis\">Advanced Rollout Management</h4>\n					<p>Matrix42 Enterprise Manager gives you total control over your software deployment.</p>\n					<p>The Rollout Management feature offers you unlimited flexibility. You can limit rollouts to specific users or departments. This makes it easy to perform a quick beta test.</p>\n					<p>An emergency stop function halts all rollouts in case of a problem.</p>\n					<p>Enterprise Manager assures the software needed for a rollout is always linked to the deployment. This minimizes errors in your deployments and allows you to maintain control over your clients&#39; systems.</p>\n					<h4 class=\"emphasis\">Optimized Delegation Management</h4>\n					<p>Matrix42 allows you to delegate tasks without risking errors or misconfigurations in Microsoft SCCM.</p>\n					<p>The intuitive, web-based console allows even beginners to easily perform tasks related to software deployment, packaging, inventory and troubleshooting.</p>\n					<p>You maintain total control over who can access the system. For example, you can define access rights for individual users or groups.</p>\n					<p>Protect your IT assets by allowing users to only view the computers, packages and reports that they have the rights to manage.</p>\n					<h4 class=\"emphasis\">Enhanced End User Self-Service</h4>\n					<p>With Matrix42, your end users no longer have to wait for a technician to perform a simple software update.</p>\n					<p>Service Catalog allows your end users to take control of their systems and request applications on demand. The programs are automatically installed and ready to use within minutes. This eliminates the frustrations of downtime and increases productivity.</p>\n					<p>Enterprise Manager automates the software fullfillment process and reduces your service calls. You won&#39;t have to respond to support tickets, install software, validate that it installed correctly or update licenses.</p>\n					<p>Software always downloads from the closest distribution port to save you bandwidth and let your end users receive updates faster. </p>\n				</div><!-- features -->\n				<div class=\"tab-pane padded-content\" id=\"why\">\n					<h3 class=\"emphasis\">The Most Comprehensive and Flexible Microsoft SCCM Add-On</h3>\n					<p>If you have Microsoft SCCM, you may wonder why you need an add-on to optimize it. Although SCCM is a powerful desktop management tool, its performance can degrade if it&#39;s not properly maintained.</p>\n					<p>For example, SCCM can accumulate extra files - usually because the administrator creates collections and forgets about them. Over time, these unused collections can affect SCCM&#39;s performance. Enterprise Manager archives and deletes aged objects such as collections, advertisements and computers after a set amount of time to keep your systems in their ideal states.</p>\n					<p>Enterprise Manager also:</p>\n					<ul class=\"list\">\n						<li><span class=\"bold emphasis\">Does the work of 3-4 full-time IT employees at a large enterprise.</span> This means you can move some of your highly-skilled IT professionals onto more valuable projects while SCCM handles the time-intensive and repetitive tasks.</li>\n						<li><span class=\"bold emphasis\">Makes your IT department more responsive.</span> Enterprise Manager lets you give management tasks to technicians who lack advanced SCCM skills. This allows you to respond to requests faster and provide better support.</li>\n						<li><span class=\"bold emphasis\">Lets you close tickets faster.</span> Enterprise Manager&#39;s automated support tools can help you close software installation or repair tickets 50%-200% faster and eliminate one of the largest sources of end user complaints - an interruption in their productivity.</li>\n					</ul>\n					<p>Enterprise Manager is the only solution on the market that provides you with this level of flexibility and control over SCCM. Matrix42 worked in conjunction with Microsoft&#39;s customers, such as BMW, to make SCCM more user-friendly so it will add more value to your organization.</p>\n				</div><!-- why -->\n			</div><!-- tab-content -->\n		</div><!-- tab-content -->\n	</div><!-- product-tab-container -->\n</div><!-- padded -->',NULL),
	(19,12,'sidebar','%%sidebarleadform%%\n%%sidebarsupport%%',NULL);

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
	('AC','Ascension',261),
	('AD','Andorra',8),
	('AE','United Arab Emirates',184),
	('AF','Afghanistan',5),
	('AG','Antigua and Barbuda',10),
	('AI','Anguilla',223),
	('AL','Albania',6),
	('AM','Armenia',12),
	('AN','Netherlands Antilles',259),
	('AO','Angola',9),
	('AQ','Antarctica',263),
	('AR','Argentina',11),
	('AS','American Samoa',237),
	('AT','Austria',14),
	('AU','Australia',13),
	('AW','Aruba',258),
	('AX','Aland',257),
	('AZ','Azerbaijan',15),
	('BA','Bosnia and Herzegovina',26),
	('BB','Barbados',19),
	('BD','Bangladesh',18),
	('BE','Belgium',21),
	('BF','Burkina Faso',31),
	('BG','Bulgaria',30),
	('BH','Bahrain',17),
	('BI','Burundi',32),
	('BJ','Benin',23),
	('BM','Bermuda',224),
	('BN','Brunei',29),
	('BO','Bolivia',25),
	('BR','Brazil',28),
	('BS','Bahamas',16),
	('BT','Bhutan',24),
	('BV','Bouvet Island',216),
	('BW','Botswana',27),
	('BY','Belarus',20),
	('BZ','Belize',22),
	('CA','Canada',3),
	('CC','Cocos (Keeling) Islands',203),
	('CD','Congo, Democratic Republic of the (Congo – Kinshasa)',42),
	('CF','Central African Republic',36),
	('CG','Congo, Republic of the (Congo – Brazzaville)',43),
	('CH','Switzerland',169),
	('CI','Cote d&#39;Ivoire (Ivory Coast)',45),
	('CK','Cook Islands',217),
	('CL','Chile',38),
	('CM','Cameroon',34),
	('CN','China, People&#39;s Republic of',39),
	('CO','Colombia',40),
	('CR','Costa Rica',44),
	('CS','Kosovo',264),
	('CU','Cuba',47),
	('CV','Cape Verde',35),
	('CX','Christmas Island',202),
	('CY','Cyprus',48),
	('CZ','Czech Republic',49),
	('DE','Germany',4),
	('DJ','Djibouti',51),
	('DK','Denmark',50),
	('DM','Dominica',52),
	('DO','Dominican Republic',53),
	('DZ','Algeria',7),
	('EC','Ecuador',54),
	('EE','Estonia',59),
	('EG','Egypt',55),
	('EH','Western Sahara',266),
	('ER','Eritrea',58),
	('ES','Spain',163),
	('ET','Ethiopia',60),
	('FI','Finland',62),
	('FJ','Fiji',61),
	('FK','Falkland Islands (Islas Malvinas)',228),
	('FM','Micronesia',115),
	('FO','Faroe Islands',251),
	('FR','France',63),
	('GA','Gabon',64),
	('GB','United Kingdom',2),
	('GD','Grenada',69),
	('GE','Georgia',66),
	('GF','French Guiana',253),
	('GG','Guernsey',220),
	('GH','Ghana',67),
	('GI','Gibraltar',229),
	('GL','Greenland',252),
	('GM','Gambia, The',65),
	('GN','Guinea',71),
	('GP','Saint Barthelemy',210),
	('GQ','Equatorial Guinea',57),
	('GR','Greece',68),
	('GS','South Georgia and the South Sandwich Islands',233),
	('GT','Guatemala',70),
	('GU','Guam',239),
	('GW','Guinea-Bissau',72),
	('GY','Guyana',73),
	('HK','Hong Kong',249),
	('HM','Heard Island and McDonald Islands',205),
	('HN','Honduras',75),
	('HR','Croatia',46),
	('HT','Haiti',74),
	('HU','Hungary',76),
	('ID','Indonesia',79),
	('IE','Ireland',82),
	('IL','Israel',83),
	('IM','Isle of Man',221),
	('IN','India',78),
	('IO','British Indian Ocean Territory',225),
	('IQ','Iraq',81),
	('IR','Iran',80),
	('IS','Iceland',77),
	('IT','Italy',84),
	('JE','Jersey',222),
	('JM','Jamaica',85),
	('JO','Jordan',87),
	('JP','Japan',86),
	('KE','Kenya',89),
	('KG','Kyrgyzstan',94),
	('KH','Cambodia',33),
	('KI','Kiribati',90),
	('KM','Comoros',41),
	('KN','Saint Kitts and Nevis',146),
	('KP','Korea, Democratic People&#39;s Republic of (North Korea)',91),
	('KR','Korea, Republic of  (South Korea)',92),
	('KW','Kuwait',93),
	('KY','Cayman Islands',227),
	('KZ','Kazakhstan',88),
	('LA','Laos',95),
	('LB','Lebanon',97),
	('LC','Saint Lucia',147),
	('LI','Liechtenstein',101),
	('LK','Sri Lanka',164),
	('LR','Liberia',99),
	('LS','Lesotho',98),
	('LT','Lithuania',102),
	('LU','Luxembourg',103),
	('LV','Latvia',96),
	('LY','Libya',100),
	('MA','Morocco',120),
	('MC','Monaco',117),
	('MD','Moldova',116),
	('ME','Montenegro',119),
	('MG','Madagascar',105),
	('MH','Marshall Islands',111),
	('MK','Macedonia',104),
	('ML','Mali',109),
	('MM','Myanmar (Burma)',122),
	('MN','Mongolia',118),
	('MO','Macau',250),
	('MP','Northern Mariana Islands',235),
	('MQ','Martinique',255),
	('MR','Mauritania',112),
	('MS','Montserrat',230),
	('MT','Malta',110),
	('MU','Mauritius',113),
	('MV','Maldives',108),
	('MW','Malawi',106),
	('MX','Mexico',114),
	('MY','Malaysia',107),
	('MZ','Mozambique',121),
	('NA','Namibia',123),
	('NC','New Caledonia',207),
	('NE','Niger',129),
	('NF','Norfolk Island',206),
	('NG','Nigeria',130),
	('NI','Nicaragua',128),
	('NL','Netherlands',126),
	('NO','Norway',131),
	('NP','Nepal',125),
	('NR','Nauru',124),
	('NU','Niue',218),
	('NZ','New Zealand',127),
	('OM','Oman',132),
	('OT','Other',0),
	('PA','Panama',135),
	('PE','Peru',138),
	('PF','French Polynesia',208),
	('PG','Papua New Guinea',136),
	('PH','Philippines',139),
	('PK','Pakistan',133),
	('PL','Poland',140),
	('PM','Saint Pierre and Miquelon',212),
	('PN','Pitcairn Islands',231),
	('PR','Puerto Rico',236),
	('PS','Palestinian Territories',265),
	('PT','Portugal',141),
	('PW','Palau',134),
	('PY','Paraguay',137),
	('QA','Qatar',142),
	('RE','Reunion',256),
	('RO','Romania',143),
	('RS','Serbia',154),
	('RU','Russia',144),
	('RW','Rwanda',145),
	('SA','Saudi Arabia',152),
	('SB','Solomon Islands',160),
	('SC','Seychelles',155),
	('SD','Sudan',165),
	('SE','Sweden',168),
	('SG','Singapore',157),
	('SH','Saint Helena',232),
	('SI','Slovenia',159),
	('SJ','Svalbard',260),
	('SK','Slovakia',158),
	('SL','Sierra Leone',156),
	('SM','San Marino',150),
	('SN','Senegal',153),
	('SO','Somalia',161),
	('SR','Suriname',166),
	('ST','Sao Tome and Principe',151),
	('SV','El Salvador',56),
	('SY','Syria',170),
	('SZ','Swaziland',167),
	('TA','Tristan da Cunha',262),
	('TC','Turks and Caicos Islands',234),
	('TD','Chad',37),
	('TF','French Southern and Antarctic Lands',214),
	('TG','Togo',175),
	('TH','Thailand',173),
	('TJ','Tajikistan',171),
	('TK','Tokelau',219),
	('TL','Timor-Leste (East Timor)',174),
	('TM','Turkmenistan',180),
	('TN','Tunisia',178),
	('TO','Tonga',176),
	('TR','Turkey',179),
	('TT','Trinidad and Tobago',177),
	('TV','Tuvalu',181),
	('TW','China, Republic of (Taiwan)',195),
	('TZ','Tanzania',172),
	('UA','Ukraine',183),
	('UG','Uganda',182),
	('UM','Baker Island',238),
	('US','United States',1),
	('UY','Uruguay',185),
	('UZ','Uzbekistan',186),
	('VA','Vatican City',188),
	('VC','Saint Vincent and the Grenadines',148),
	('VE','Venezuela',189),
	('VG','British Virgin Islands',226),
	('VI','U.S. Virgin Islands',247),
	('VN','Vietnam',190),
	('VU','Vanuatu',187),
	('WF','Wallis and Futuna',213),
	('WS','Samoa',149),
	('YE','Yemen',191),
	('YT','Mayotte',209),
	('ZA','South Africa',162),
	('ZM','Zambia',192),
	('ZW','Zimbabwe',193);

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
	(1,'webinar','Webcast: Mobile Device Management','Don’t Wait, Take Control of Your Mobile Devices and Workplace with Matrix42!','<p>During this webcast you will learn how to manage your mobile devices, like iPhone, Android, Blackberry and Co. with Matrix42.</p>\n<p>Matrix42 Mobile Device Management, powered by industry leader AirWatch, gives you control over the entire mobile device lifecycle – from deployment to security, monitoring, management and support:</p>\n<ul class=\"list\">\n<li>Deploy - automated deployment of devices</li>\n<li>Reduce security risks - real time security standards</li>\n<li>Monitor devices - centrally manage</li>\n<li>Manage apps - manage and control your applications</li>\n<li>Support - support users and devices</li>\n</ul>','Online','https://www3.gotomeeting.com/register/769923558','','2012-07-11 08:00:00','2012-07-11 09:00:00',1,'MST',NULL,0,0);

/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table leads
# ------------------------------------------------------------

DROP TABLE IF EXISTS `leads`;

CREATE TABLE `leads` (
  `id` int(10) unsigned NOT NULL,
  `campaign_id` int(10) unsigned DEFAULT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `newsletter` tinyint(1) NOT NULL DEFAULT '0',
  `inquiry_ip` varchar(20) DEFAULT NULL,
  `inquiry_date` datetime DEFAULT NULL,
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
	(1,NULL,NULL,'public','main','Solutions','/solutions','dropdown','','public','solutions','index','','','','sub-banner-woman.jpg','holistic workplace','The Solution That Solves your IT needs.',NULL,NULL,NULL,'',1,0,0),
	(2,NULL,NULL,'public','main','About','/about','dropdown',NULL,'public','about','index',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,0,0),
	(3,NULL,NULL,'public','main','Request a call','/request_a_call','','bold','public','request_a_call','index','How to Buy Matrix42 Products and Services','How to purchase Matrix42 Products and Solutions by contacting us or finding a partner reseller.','contact, inquire, sign up, purchase, get started','sub-banner-abstract.jpg','get started','Setup a consultation today!',100,25,500,'#ffffff',3,0,0),
	(4,1,NULL,'public','submenu','Mobile Device Management (BYOD)','/solutions/mobile_device_management',NULL,NULL,'public','solutions','mobile_device_management','Bring Your Own Device minimizes field resources and makes workforce more efficient','Bring Your Own Device minimizes field resources and makes workforce more efficient','byod, mobile workplace, personal device, mobile device, mobile workforce','sub-banner-byod.jpg','byod on your terms','Flexibility for employees, Security for IT',60,35,600,NULL,1,0,0),
	(5,1,NULL,'public','submenu','Desktop Virtualization','/solutions/virtual_desktop_management',NULL,NULL,'public','solutions','virtual_desktop_management','The essential solution for Citrix desktop deployments','Virtual Desktop made easy and affordable. The essential solution for Citrix desktop deployments',NULL,'sub-banner-virtualization.jpg','desktop virtualization','The essential solution for Citrix desktop deployments',35,25,600,NULL,2,0,0),
	(6,1,NULL,'public','submenu','Endpoint Management','/solutions/endpoint_management',NULL,NULL,'public','solutions','endpoint_management','Automate many of your time-consuming tasks such as software deployments and common help desk services','Automate many of your time-consuming tasks such as software deployments and common help desk services. While reducing your IT department’s workload and reducing costs.',NULL,'sub-banner-integration.jpg','full integration','Automation of all IT Management Processes',100,25,500,NULL,3,0,0),
	(7,1,5,'public','submenu','Software Asset Management','/solutions/compliance',NULL,NULL,'public','solutions','compliance','The ideal solution to maximize the interaction between compliance and security','The ideal solution to maximize the interaction between compliance and security','compliance, software compliance','sub-banner-compliance.jpg','compliance','Take control of all IT assets, licenses and contracts',100,25,500,'#ffffff',4,0,0),
	(8,1,3,'public','submenu','Windows 7 Migration','/solutions/windows_7_migration',NULL,NULL,'public','solutions','windows_7_migration','Matrix42 Workplace Management allows for an easy, low-cost and secure migration to Windows 7','Matrix42 Workplace Management allows for an easy, low-cost and secure migration to Windows 7. It helps you automate and simplify every step of the process including hardware and software analysis, data backup and driver/operating system installation','window7 migration, windows upgrade, windows xp business','sub-banner-windows7.jpg','windows 7 migration','Quick & Reliable Migration to Windows 7',60,35,600,'#ffffff',6,0,0),
	(10,NULL,NULL,'public','footer','Services &amp; Support','/support',NULL,NULL,'public','support','index','Matrix42 Service and Support','At Matrix42, we are dedicated to customer satisfaction. That means not only providing the best products but also world-class customer support.',NULL,'sub-banner-abstract.jpg','support','Services and Support when you need it.',100,25,500,'#ffffff',NULL,0,0),
	(11,1,NULL,'public','submenu','Self-Service','/solutions/self_service',NULL,NULL,'public','solutions','self_service','Only solution to integrate ITSM with mobile, virtual and endpoint management','Only solution to integrate ITSM with mobile, virtual and endpoint management',NULL,NULL,'lighten your IT burden','Automation and self-service reduce support costs by 70%',NULL,NULL,NULL,NULL,5,0,0),
	(12,NULL,NULL,'public','footer','Workplace Management for SCCM','/solutions/enterprise_manager',NULL,NULL,'public','solutions','enterprise_manager','Matrix42 Enterprise Manager is the only product of its kind and the most comprehensive of all SCCM add-ons.','Microsoft SCCM add-on that helps you to reduce the costs and efforts of your desktop management.','microsoft sccm, enterprise manager, sccm console','sub-banner-windows7.jpg','microsoft SCCM','The most comprehensive SCCM add-on.',60,35,600,'#ffffff',7,0,0);

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



# Dump of table order_products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `order_products`;

CREATE TABLE `order_products` (
  `order_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`order_id`,`product_id`),
  KEY `fk-order-products` (`order_id`),
  KEY `fk-product-orders` (`product_id`),
  CONSTRAINT `fk-order-products` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-product-orders` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table orders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lead_id` int(10) unsigned NOT NULL,
  `promotion_id` int(10) unsigned NOT NULL,
  `partner` varchar(255) DEFAULT NULL,
  `devices` int(10) unsigned DEFAULT NULL,
  `price_estimate` decimal(10,2) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk-lead-orders` (`lead_id`),
  KEY `fk-promotion-orders` (`promotion_id`),
  CONSTRAINT `fk-lead-orders` FOREIGN KEY (`lead_id`) REFERENCES `leads` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-promotion-orders` FOREIGN KEY (`promotion_id`) REFERENCES `promotions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table partners
# ------------------------------------------------------------

DROP TABLE IF EXISTS `partners`;

CREATE TABLE `partners` (
  `id` int(10) unsigned NOT NULL,
  `type` enum('technology','reseller') NOT NULL DEFAULT 'reseller',
  `company_name` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `logo` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `certified` tinyint(1) NOT NULL DEFAULT '0',
  `order` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk-user-partner` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;

INSERT INTO `partners` (`id`, `type`, `company_name`, `description`, `logo`, `website`, `link`, `certified`, `order`)
VALUES
	(2,'technology','Microsoft','Founded in 1975, Microsoft is the worldwide leader in software, services and solutions that help people and businesses realize their full potential.','microsoft-logo.png','www.microsoft.com','/solutions/enterprise_manager',0,2),
	(3,'technology','Citrix','Today, Citrix is the global leader and most trusted name in on-demand access. More than 180,000 organizations around the world use the Citrix Access Platform to provide the best access experience to any application for any user.','citrix-logo.png','www.citrix.com','/solutions/virtual_desktop_management',0,3),
	(4,'technology','Gartner','Gartner evaluated vendors based on completeness of vision and ability to execute in the IT systems management market, and Matrix42 was recognized as a visionary based on Gartner\'s evaluation of \"completeness of vision\" and \"ability to execute.\"','gartner-magicq-logo.png','www.gartner.com','/press/release/2',0,4),
	(5,'technology','ServiceNow','Matrix42 has joined forces with ServiceNow to provide user self-provisioning capabilities for Mobile Workplace, Virtual Workplace and Physical Workplace Management to assist IT in managing the end users’ needs now and in the future.','servicenow-logo.png','www.service-now.com','http://servicenow.matrix42.com',0,1),
	(7,'technology','WinRobots','Delphin Software is the developer of &quot;WinRobots&quot;, an automation and packaging system., which has been enhanced over the years to include new functionality for a multitude o applications. WinRobots allows users to automate all operations in Windows environments. From the new version onward, the Matrix42 Package Robot is seamlessly integrated with the Package Wizard.','winrobots-logo.png','www.winrobots.com',NULL,0,8),
	(8,'technology','Novell','Novell offers enterprise class infrastructure software and services in a flexible combination of open source and proprietary technologies. This software helps customers manage, simplify, secure and integrate their heterogeneous IT environments at low cost. As a result, customers can reduce cost and complexity while increasing the return on their IT investment. Unlike others, we also help customers migrate from proprietary to open source at a pace that suits them. When it suits them.','novell-logo.png','www.novell.com',NULL,0,5),
	(9,'technology','Netviewer AG','Netviewer AG is the leading European manufacturer and provider of Web conferencing solutions. Netviewer gives Internet users a live view of a partner\'s screen so documents can be jointly discussed and edited or support cases can be solved. Visual real-time communication over the Internet significantly reduces the time and expense of travel while increasing productivity. As a basis for Matrix42 remote control Netviewer enables secure remote maintenance of clients and efficient server management. ','netviewer-logo.png','www.netviewer.com',NULL,0,7),
	(10,'technology','Intel','Intel, the world leader in silicon innovation, develops technologies, products and initiatives to continually advance how people work and live.','intel-logo.png','www.intel.com',NULL,0,6);

/*!40000 ALTER TABLE `partners` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table phones
# ------------------------------------------------------------

DROP TABLE IF EXISTS `phones`;

CREATE TABLE `phones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('primary','alternate','mobile') DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `number` varchar(20) NOT NULL DEFAULT '',
  `format` enum('north_america','europe','world','england','spain') NOT NULL DEFAULT 'north_america',
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
	(1,'release','Hat Trick: TAP Desktop Solutions Named &quot;Matrix42 Partner of the Year&quot; Again','Award to Benelux Channel Partner for First Time','<p><strong class=\"emphasis\">Neu-Isenburg, Germany, 14 February 2012</stong> – For the third time in a row, TAP Desktop Solutions GmbH of Straubing, Germany, has been named the “Best Performing Matrix42 Partner” of the year. CEO Michael Krause and his team made an impression in recent months with extensive expertise and product knowledge, numerous new customer contracts, as well as flexible and individual customer service. </p>\n<p>&quot;Our collaboration with Matrix42 is based on a strong, trusting relationship developed over many years. That&#39;s why we are all the more happy to be included among the Matrix42 partners receiving an award again this year. It represents a gracious recognition of our dedication, and we would like to express our heartfelt gratitude to Martrix42,&quot; says TAP CEO Michael Krause.</p>\n\n<p>Every year, Matrix42 awards the &quot;Best Performing Partner of the Year Award&quot; to show its appreciation to channel partners for their work. Awards are given to those partners who have been successful at delivering above-average performance in license sales, growth, and in individual customer projects. &quot;The partnership with TAP has given us very important feedback on Matrix42&#39;s acceptance on the market,&quot; says Karl-Martin Haaf, Channel Director EMEA at Matrix42.</p>\n\n<p>Haaf considers successful cooperation with partners to be the basis for a sustainable market presence. &quot;For us, it is not only important that customers know us, but also that we have partners and system vendors who are fully familiar with our products and services,&quot; explains Haaf. &quot;Our growth and success would not be possible without partners like TAP and Windmark,&quot; he continues.</p>\n\n<p>This year was the first time that Matrix42 awarded partners in the Benelux region. The most impressive partner was Windmark from the Netherlands. They managed to sustainably sell the solutions from the German software provider and strategically position them on the market. In addition to TAP and Windmark, there were further prizes with which Matrix42 would like to underline the importance of the channel. DSP IT Service, for example, received the &quot;Most New Customers Award.&quot; Consulting4IT was awarded &quot;Biggest Reselling Deal&quot; and Comparex was nominated for &quot;Most Important Strategic Deal.&quot;</p>','','','2012-02-14',NULL,0,0,0),
	(2,'release','Matrix42 a Visionary in Magic Quadrant for Client Management Tools','Matrix42 (www.matrix42.com), a leading provider of Workplace Management solutions, today announced it has been positioned by Gartner...','<p><strong class=\"emphasis\">LEHI, Utah, March 6, 2012 /PRNewswire/</strong> -- Matrix42 (www.matrix42.com), a leading provider of Workplace Management solutions, today announced it has been positioned by Gartner, Inc. in the Visionaries quadrant of the Magic Quadrant for Client Management Tools. Gartner evaluated vendors based on completeness of vision and ability to execute in the IT systems management market, and Matrix42 was recognized as a visionary based on Gartner\'s evaluation of \"completeness of vision\" and \"ability to execute.\" According to the report, \"Visionaries have vision scores that reflect feature-complete products, and they show technology leadership in providing some life cycle management functions users have begun requesting, or will have an impact during the next year or two (as discussed in the Completeness of Vision section). A Visionary will have particular strengths in certain emerging areas (e.g., mobile device management, Mac management, appliances, SaaS or desktop virtualization), but may lack a fully mature life cycle management solution, a global market presence or brand recognition.\"</p>\n<p>\"We believe our visionary status reflects our ultimate mission: to empower a corporate IT strategy where a satisfied workforce is the end-goal,\" said Herbert Uhl, CEO of Matrix42. \"But today we are established as a midmarket leader in workplace management solutions because we are the only vendor to provide management for all forms of end-user computing devices – physical, virtual and mobile. We help organizations meet user demands for freedom, flexibility, and mobility because we provide a user-centric approach, while allowing IT to remain in control.\"</p>\n<p>The number of user-owned devices entering the enterprise has led to new industry acronyms like BYOD (Bring Your Own Device). In fact, Gartner changed the name of this longtime quadrant from \"PC Configuration Life Cycle Management Market\" to \"Client Management Tools Market\" to reflect the growing variety of devices IT organizations now support, such as mobile devices (mainly iOS and Android) and Macs. Furthermore, Magic Quadrant references stated that mobile device management (MDM) was a critical need and the most important area of improvement for vendor products, and that currently, fewer than half of the vendors in this market have MDM capabilities for iOS and Android.\n<p>Added Uhl, \"The rise of various smartphones, tablets, and software platforms in the workplace has added much complexity to managing IT. Organizations are looking for a single solution to provide MDM capabilities with any service to any device, to offer virtual desktop infrastructure (VDI) capabilities, and to help retain operational standards, efficiency, and compliance. Matrix42 is the only vendor to provide all of these services, and is uniquely positioned to help customers manage this new work standard.\"</p>\n<p>Matrix42 currently manages more than six million devices on behalf of more than 2,500 customers worldwide.</p>\n<h3 class=\"emphasis\">About the Magic Quadrant</h3>\n<p>Gartner does not endorse any vendor, product or service depicted in its research publications, and does not advise technology users to select only those vendors with the highest ratings. Gartner research publications consist of the opinions of Gartner\'s research organization and should not be construed as statements of fact. Gartner disclaims all warranties, expressed or implied, with respect to this research, including any warranties of merchantability or fitness for a particular purpose.</p>\n<h3 class=\"emphasis\">About Matrix42</h3>\n<p>Matrix42 is the leading supplier for Workplace Management solutions. Matrix42 Workplace Management enables the seamless management of physical, virtual and mobile environments. It combines Client Lifecycle, Cloud, SaaS, Virtualization and Service Management into a holistic solution enabling users to have transparent access to their data and services everywhere, from any virtual or physical device at any time. Founded in 1992, Matrix42, with headquarters near Frankfurt, Germany, has been established in the dynamic IT market for almost 20 years. More than six million clients are managed by Matrix42 software with more than 2,500 customers worldwide, including market-leading enterprises such as Infineon, Magna, Lufthansa Systems and Puma and integrators like Raiffeisen IT, msg systems and Bechtle. In early 2008, Matrix42 became part of the Asseco Group. With over 8,000 employees and a market capitalization of around 1.2 billion euros, Asseco is one of the largest European software companies.</p>','','pr-newswire.png','2012-03-06',NULL,1,0,0),
	(3,'release','Matrix42 Brings Security and Flexibility to BYOD Policies','First and only integration of mobile device management and IT service management gives companies control of mobile assets while giving employees more flexibility','<p><strong class=\"emphasis\">LEHI, UTAH - May 7, 2012</strong> - Matrix42 (www.matrix42.com) a leading provider of workplace management solutions, today announced the integration of mobile device management (MDM) with IT service management (ITSM). Matrix42 is the first to fully integrate these two complementary offerings to give organizations greater visibility and control over their mobile assets and the flexibility to effectively implement BYOD (bring your own device) policies and self-provisioning for employees.</p>\n<p>This combination provides organizations and their employees flexibility in the devices that are used and how they are managed. IT administrators can ensure all mobile devices connected to the network are inventoried, secured and managed within company policies, whether they support BYOD for employees or the devices are owned by the company. Users can be given the ability to acquire and self-provision their device and access management features such as device location and data wiping.</p>\n<p>\"Our approach to mobile device management and IT service management mirrors what most organizations are facing today with employees wanting more flexibility to use their own mobile device or to have more control over the company-provided device,” said Oliver Bendig, Matrix42 vice president of product management. “We provide a user-centric focus that gives employees more freedom with their mobile devices while still providing the company the security and management features they require.\"</p>\n<p>The integration of mobile device management and IT service management is available as part of the newly released Matrix42 Service Store 5.3 SP3. Other enhancements as part of the release include:</p>\n<ul class=\"list\">\n<li>Improved workflow management processes for approving and provisioning services\n    Integration with Matrix42 Enterprise Manager for provisioning Microsoft SCCM software packages from the service catalog</li>\n<li>Updated iPhone app for users to easily access the service catalog, place orders, open help tickets, etc.</li>\n<li>Addition of Polish user interface</li>\n</ul>\n<p>Matrix42 Service Store 5.3 SP3 is now available for download from the Matrix42 Support Portal on its web site or by contacting a Matrix42 representative. For more information about Matrix42 Service Store, please visit <a href=\"/solutions/endpoint_management\">www.matrix42.com/solutions/endpoint_management</a>.</p>','','','2012-05-07',NULL,0,0,0),
	(4,'release','Matrix42 Integrates Workplace Management with ServiceNow to Extend IT Service Automation','Matrix42 physical, virtual and mobile device management integrated with ServiceNow service catalog','<p><strong class=\"emphasis\">NEW ORLEANS (Knowledge12, Booth #102) - May 15, 2012</strong> - Matrix42\n(www.matrix42.com) has integrated its Workplace Management solutions with ServiceNow to offer integrated mobile device management, VDI (virtual desktop infrastructure) and endpoint management capabilities through the ServiceNow service catalog. This allows IT to be more automated and efficient by giving them the ability to provide any service to any device through ITSM processes, while offering users flexibility and speed for IT service delivery with intuitive\nself-service options.</p>\n<p>\"IT organizations have an opportunity to transform the way services are delivered to the business,\" said Rob Luddy, ServiceNow VP of business development. \"ServiceNow cloudbased IT service automation can help significantly relieve the burden of manual tasks and oneoff requests through automation and self service. ServiceNow integrated with Matrix42 enables\nIT transformation and delivers value for our customers and partners.\"</p>\n<p>With Matrix42, users can request and provision their own physical, virtual and mobile assets through ServiceNow service request and catalog functionality. Automated process work flow eliminates the need for users to wait for an IT administrator to respond to a request logged through ServiceNow, resulting in more rapid service delivery for requests like mobile device support, IT asset provisioning and endpoint management.</p>\n<p>Matrix42 offers three solutions integrated with ServiceNow:</p>\n<ul class=\"list\">\n<li>Workplace Mobility (Mobile Device Management) – Whether a company has a BYOD policy or supplies employees with mobile devices, devices can be requested or enrolled through the service catalog, and users can add applications and manage them within company policies. This also allows companies to support any mobile device platform.</li>\n<li>Workplace Virtualization (VDI) – For virtualizing desktops, mobile devices or applications, employees can initiate the process through a service store request. The back-end process is automated to run the workflow and deliver the image, allowing customers to enjoy the benefits of virtualization without all the costs.</li>\n<li>Workplace Automation (Endpoint Management) – Users are able to easily complete many help desk functions on their own such as provisioning services, adding or reinstalling software, and recovering their computer. This lowers the overall desktop management costs and allows IT administrators to spend their time on more strategic projects.</li>\n</ul>\n<p>Matrix42 CEO Herbert Uhl added, \"Our work with ServiceNow brings together two highly complementary solutions. We are able to provide ServiceNow customers new capabilities that are in demand in today’s business environment, and this opens up new channels and markets for Matrix42 to strengthen its position in Workplace Management.\"</p>\n<p>ServiceNow is a leading provider of cloud-based services that automate enterprise IT operations. ServiceNow helps organizations transform IT by automating and standardizing business processes and consolidating IT across the global enterprise. Organizations deploy ServiceNow to create a single system of record for enterprise IT, lower operational costs and enhance efficiency.\nMatrix42 will be demonstrating its ServiceNow integration at the ServiceNow Knowledge12 Global IT Conference in Booth #102; during the breakout session at 3:40 p.m. on Tuesday, May 15; and in the ExpoNow Theatre at 12:10 p.m. on Wednesday, May 16. For more information about Matrix42 solutions, please visit http://www.matrix42.com.</p>','','','2012-05-15',NULL,0,0,0),
	(5,'award','Top 100','The &quot;Top 100&quot; seal of approval is awarded annually after an exacting, independent, scientific comparative review of midsized companies by a leading Viennese university. The seal confirms the innovative strength of selected enterprises. Matrix42','<p>The &quot;Top 100&quot; seal of approval is awarded annually after an exacting, independent, scientific comparative review of midsized companies by a leading Viennese university. The seal confirms the innovative strength of selected enterprises. Matrix42&#39;s award is recognition of their innovative power, the level of innovative structures and the success of their innovative commitment.</p>',NULL,'top100_logo.png','2012-06-12',NULL,0,0,0),
	(6,'publication','Market Synopsis: Mid-Market SAM Tools',NULL,'<p>The market synopsis represents a high level summary of how vendors are currently scored within the ‘TOOLS INTELLIGENCE’ service from The ITAM Review. Vendors have been assessed against the ‘Mid-Market SAM’ criteria.</p>','http://www.itassetmanagement.net/2010/12/09/market-synopsis-midmarket-sam-tools/','itamreview-logo.png','2010-12-13',NULL,0,0,0),
	(7,'release','Matrix42 Survey Finds as BYOD Grows, Uncertainty Remains Over How to Implement','Bring Your Own Device becoming the norm but organizations still in planning mode','<p><strong class=\"emphasis\">LEHI, Utah - June 13, 2012</strong> - While &#39Bring Your Own Device&#39 (BYOD) and similar consumer-driven IT initiatives are becoming more widely accepted, there is no real consensus yet on the best method for supporting BYOD. This is according to a survey of nearly 600 enterprise IT professionals conducted by Matrix42 (www.matrix42.com), a leading supplier of Workplace Management solutions. The survey found that nearly two-thirds of respondents said there is at least some level of ac-ceptance of BYOD by their IT department, and almost 80 percent of organizations have identified mobile device management solutions as a key component of their IT offerings in the next two years. However, more than 30 percent of respondents said their organization does not currently employ solutions to manage BYOD, and there is no clear solution leading the way for those that have de-ployed something.</p>\n<p>Key takeaways include:</p>\n<h3 class=\"emphasis\">BYOD becomes the norm</h3>\n<ul class=\"list\">\n	<li>64 percent said their IT organization either supports or tolerates BYOD with 24 percent offi-cially supporting it</li>\n	<li>An additional seven percent said BYOD is not currently supported, but it is planned</li>\n	<li>Only 29 percent said BYOD is prohibited</li>\n</ul>\n<p>Mobile device management (MDM) solutions are needed...</p>\n<ul class=\"list\">\n	<li>A clear majority of respondents (78 percent) said mobile device management will be ex-tremely or very important in the next two years</li>\n	<li>Only two percent said MDM solutions would be unimportant</li>\n</ul>\n<p>...but are not yet widely implemented</p>\n<ul class=\"list\">\n	<li>31 percent said their organizations do not use technology or solutions that enable BYOD</li>\n	<li>Only 15 percent said they used MDM solutions to enable BYOD</li>\n	<li>16 percent said they used desktop virtualization solutions</li>\n	<li>The remaining respondents said their organizations used web apps, self-service portals, client management or IT service management to enable BYOD</li>\n</ul>\n<p>IT departments lead the BYOD charge</p>\n<ul class=\"list\">\n	<li>31 percent of respondents said IT was driving BYOD initiatives in their organization.</li>\n	<li>23 percent said the executive board or managing director</li>\n	<li>21 percent said no one in their organization was driving BYOD</li>\n</ul>\n<p>Security at the top of list of BYOD challenges</p>\n<ul class=\"list\">\n	<li>78 percent of respondents said the security of company data was either extremely or very challenging</li>\n	<li>IT losing control – 56 percent said extremely or very challenging</li>\n	<li>But device complexity is not seen as extremely or very challenging by 62 percent of respond-ents</li>\n</ul>\n<p>&#39The influx of user-owned mobile devices in the workplace presents numerous challenges to IT, or-ganizational security and the overall business,&#39 said Matrix42 CEO Herbert Uhl. &#39This complexity will, Matrix42 Survey Finds as BYOD Grows, Uncertainty Remains Over How to Implement Page 2 only increase as the number of mobile operating systems and devices continues to rise. As the only vendor to provide management for all forms of end-user computing devices, Matrix42 has a strong track record of helping IT departments develop a mobile strategy to successfully manage the entire mobile device lifecycle, from deployment and security to management and support.&#39 Matrix42 surveyed 590 attendees at the CeBIT 2012 conference in Hanover, Germany. Respondents were comprised of senior executives, IT administrators and business department employees.</p>\n<img src=\"/assets/img/uploads/byod-challenge-graphic.jpg\" alt=\"BYOD Challenges\" />','','byod-implementation.png','2012-06-13',NULL,1,0,0),
	(8,'award','Pink Elephant - (Certificate)','','<p>With its Pink VERIFY program, Pink Elephant has set up the only independent ITIL certification program worldwide. The Pink VERIFY seal of approval identifies products that support the definitions and workflow requirements of business-critical IT management processes according to ITIL and with a focus on service orientation. In 2008, update4u Sofware AG, today Matrix42, was the first German company to receive the ITIL V3 certification for its update4u suite.</p>','','pink-elephant.png','2008-06-01',NULL,0,0,0),
	(9,'award','EMA &quot;All Star&quot;','','<p>Matrix42 was also named in the 2008 Enterprise Management Associates analyst &quot;All Star&quot; report as a Rising Star, a category of best new or innovative vendors with the potential to be on a future All-Star Team. The EMA report highlights what it considers to be the best available software solutions in eighteen specific enterprise systems management disciplines, in order to form a &#39;Systems Management All-Star&#39; team. Three categories of solutions were identified in each discipline: All-Star First Team (a special honor for the &#39;best of the best&#39;), All-Stars (the best performers in systems management) and Rising Stars.</p>','','ema-allstar.png','2008-06-02',NULL,0,0,0),
	(10,'award','2008 Innovation Prize','','<p>Matrix42 has won the award 2008 Innovation Prize (INNOVATIONSPREIS 2008) for its product Empirum, in the category &quot;Systems Management&quot;. This annual award is given to medium-sized businesses for outstanding performance in their line of business. The annual award for innovation in initiatives for medium-sized businesses (Initiative Mittelstand), recognizes the most innovative products and solutions based on their degree of innovation and suitability to medium-sized companies. The award acknowledges Matrix42 for meeting the requirements of medium-sized companies in best practice and information management within the ITK section. Matrix42 is awarded the Innovation Prize for its Empirum product and services, and recognized for giving companies the ability to increase competitiveness in a crowded marketplace.</p>','','innovationspreis.png','2008-06-03',NULL,0,0,0),
	(11,'award','Germany&#39;s Customer Champions','','<p>Matrix42 has reached the Top 50 in the competition &quot;Germany’s Customer Champions 2008&quot;. This was the conclusion of an analysis by business magazine &quot;impulse,&quot; the German Society for Quality (Deutsche Gesellschaft für Qualität) and the Mainzer forum! Marktforschung GmbH, which initiated the competition and examined customer relationship management in 50 companies. According to its research, Matrix42 and its Lifecycle Management product, Empirum, is considered one of the 50 companies with the best customer relationships. The research not only considered the views of the company but also of customers and experts.</p>','','kundenchampions.png','2008-06-05',NULL,0,0,0),
	(12,'publication','Matrix42 Brings Efficient Systems Management to North Georgia College & State University','','<p>IT service and systems management leader Matrix42 today announced that North Georgia College & State University has selected Matrix42 Empirum v12 to replace its current IT and systems management processes and tools. \"We spent a good amount of time researching other systems management tools and talking to other university IT departments to find a solution that fit our situation and budget,\" said Steve McLeod, associate CIO of services for IT at North Georgia College & State University.</p>','http://www.businesswire.com/portal/site/google/?ndmViewId=news_view&newsId=20091110005395&newsLang=en','businesswire.png','2009-11-18',NULL,0,0,0),
	(13,'publication','9 hot products for managing Microsoft','','<p>Microsoft and third-party vendors unveiled a slew of products at Microsoft Management Summit 2010. Here&#39;s a sample of what\'s available now and what\'s coming to manage Windows and other Microsoft technologies.</p>','http://www.networkworld.com/slideshows/2010/042210-managing-microsoft.html?source=NWWNLE_nlt_daily_pm_2010-04-23#slide5','networkworld.png','2010-04-27',NULL,0,0,0),
	(14,'publication','Cut Technology Costs with a &quot;Self-Help&quot; Portal','','<p>As every business looks for new and better ways to trim operating costs in 2010, here&#39;s an interesting thought: What if your employees were able to take care of some of their own technology management needs?</p>','http://www.businessweek.com/smallbiz/tips/archives/2010/05/cut_technology_costs_with_a_self-help_portal.html','bloomberg.png','2010-05-10',NULL,0,0,0);

/*!40000 ALTER TABLE `press_releases` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `campaign_id` int(10) unsigned DEFAULT NULL,
  `type` enum('service','add-on','package') NOT NULL DEFAULT 'service',
  `sku` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `logo` varchar(255) DEFAULT NULL,
  `description` text,
  `price` decimal(10,2) DEFAULT NULL,
  `webinar_link` varchar(255) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk-campaign-products` (`campaign_id`),
  CONSTRAINT `fk-campaign-products` FOREIGN KEY (`campaign_id`) REFERENCES `campaigns` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `campaign_id`, `type`, `sku`, `name`, `logo`, `description`, `price`, `webinar_link`, `pdf`, `deleted`)
VALUES
	(1,8,'add-on','M42-RC','Matrix42 Remote Control','rc-logo.png','<h5>Designed for efficient remote control with new Internet capability</h5>',8.00,NULL,'remote-control.pdf',0),
	(2,9,'add-on','M42-PM','Matrix42 Power Management','pm-logo.png','<h5>Designed to lower your Windows devices power consumption</h5>',8.00,NULL,'power-management.pdf',0),
	(3,10,'add-on','M42-PR','Matrix42 Package Robot','pr-logo.png','<h5>Designed to instantly create installation packages for deploying software used by an installation recorder</h5>',8.00,NULL,'package-robot.pdf',0);

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table promotions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `promotions`;

CREATE TABLE `promotions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `reg_price` decimal(10,2) NOT NULL,
  `promo_price` decimal(10,2) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `promotions` WRITE;
/*!40000 ALTER TABLE `promotions` DISABLE KEYS */;

INSERT INTO `promotions` (`id`, `name`, `description`, `reg_price`, `promo_price`, `deleted`)
VALUES
	(1,'+PlusOne','Pick one <strong class=\"emphasis\">Add-on</strong> and pay €5 per device versus €8',8.00,5.00,0),
	(2,'+PlusTwo','Pick two <strong class=\"emphasis\">Add-ons</strong> and pay €7 per device versus €16',16.00,7.00,0),
	(3,'+PlusThree','Pick all <strong class=\"emphasis\">Add-ons</strong> and pay €9 per device versus €24',24.00,9.00,0);

/*!40000 ALTER TABLE `promotions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table states
# ------------------------------------------------------------

DROP TABLE IF EXISTS `states`;

CREATE TABLE `states` (
  `id` char(2) NOT NULL,
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
	('AK','US','Alaska',0),
	('AL','US','Alabama',0),
	('AR','US','Arkansas',0),
	('AZ','US','Arizona',0),
	('CA','US','California',0),
	('CO','US','Colorado',0),
	('CT','US','Connecticut',0),
	('DC','US','District Of Columbia',0),
	('DE','US','Delaware',0),
	('FL','US','Florida',0),
	('GA','US','Georgia',0),
	('HI','US','Hawaii',0),
	('IA','US','Iowa',0),
	('ID','US','Idaho',0),
	('IL','US','Illinois',0),
	('IN','US','Indiana',0),
	('KS','US','Kansas',0),
	('KY','US','Kentucky',0),
	('LA','US','Louisiana',0),
	('MA','US','Massachusetts',0),
	('MD','US','Maryland',0),
	('ME','US','Maine',0),
	('MI','US','Michigan',0),
	('MN','US','Minnesota',0),
	('MO','US','Missouri',0),
	('MS','US','Mississippi',0),
	('MT','US','Montana',0),
	('NC','US','North Carolina',0),
	('ND','US','North Dakota',0),
	('NE','US','Nebraska',0),
	('NH','US','New Hampshire',0),
	('NJ','US','New Jersey',0),
	('NM','US','New Mexico',0),
	('NV','US','Nevada',0),
	('NY','US','New York',0),
	('OH','US','Ohio',0),
	('OK','US','Oklahoma',0),
	('OR','US','Oregon',0),
	('OT','OT','Non State',1),
	('PA','US','Pennsylvania',0),
	('RI','US','Rhode Island',0),
	('SC','US','South Carolina',0),
	('SD','US','South Dakota',0),
	('TN','US','Tennessee',0),
	('TX','US','Texas',0),
	('UT','US','Utah',0),
	('VA','US','Virginia',0),
	('VI','US','Virgin Islands',0),
	('VT','US','Vermont',0),
	('WA','US','Washington',0),
	('WI','US','Wisconsin',0),
	('WV','US','West Virginia',0),
	('WY','US','Wyoming',0);

/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `first` varchar(255) CHARACTER SET latin1 DEFAULT '',
  `initial` char(2) CHARACTER SET latin1 DEFAULT NULL,
  `last` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `temp_password` char(10) CHARACTER SET latin1 DEFAULT NULL,
  `temp_password_date` datetime DEFAULT NULL,
  `role` enum('lead','partner','client','employee','admin','jedi') CHARACTER SET latin1 NOT NULL DEFAULT 'lead',
  `logins` int(11) NOT NULL DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_activity_date` datetime DEFAULT NULL,
  `user_notes` text CHARACTER SET latin1,
  `token` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `email_confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `last_ip` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
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
	(5,'info@servicenow.com','Service',NULL,'Now','257d65817a867489210bd292c83bc63dfa061147e960f925c7',NULL,NULL,'partner',0,NULL,'2012-06-04 14:10:27',NULL,NULL,NULL,0,NULL,0),
	(7,'info@winrobots.com','Win',NULL,'Robots','bcrypt$2a$12$gUCU4ZTyfj0GLSZquZYZlecNU7dyAVMpIZZ9hQmLqhuWgIKXOfR9m',NULL,NULL,'partner',0,NULL,'2012-06-29 12:52:42',NULL,NULL,NULL,0,NULL,0),
	(8,'info@novell.com','Novell',NULL,'Novell','bcrypt$2a$12$sniEWyqBwqVeCID10Nx0hOtmoxuSeEGei9ZsUx69EQIp4WRX35fzW',NULL,NULL,'partner',0,NULL,'2012-06-29 12:58:24',NULL,NULL,NULL,0,NULL,1),
	(9,'info@netviewer.com','Netviewer',NULL,'AG','bcrypt$2a$12$4uWJVDwjhkog8asXwLnoRuU8zkg9BOgPCcBLVy/hqHy304NzLM91K',NULL,NULL,'partner',0,NULL,'2012-06-29 13:04:23',NULL,NULL,NULL,0,NULL,0),
	(10,'info@intel.com','Intel',NULL,'Microsystems','bcrypt$2a$12$A0ejyuhh4rDM17G1w0BXrO9yxT0veC/dOyaCTBlnam7cWWn0Ui9I2',NULL,NULL,'partner',0,NULL,'2012-06-29 13:06:13',NULL,NULL,NULL,0,NULL,0);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



--
-- Dumping routines (PROCEDURE) for database 'darth_eu'
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

<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-29 00:04:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions/self_service was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
2012-06-29 00:04:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions/self_service was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#1 [internal function]: Controller_Public_Index->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-06-29 10:59:45 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH/views/table.php [ 3 ]
2012-06-29 10:59:45 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH/views/table.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-29 12:23:29 --- ERROR: ErrorException [ 8 ]: Use of undefined constant link - assumed 'link' ~ APPPATH/views/press/press_release.php [ 12 ]
2012-06-29 12:23:29 --- STRACE: ErrorException [ 8 ]: Use of undefined constant link - assumed 'link' ~ APPPATH/views/press/press_release.php [ 12 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/press/press_release.php(12): Kohana_Core::error_handler(8, 'Use of undefine...', '/Volumes/Files/...', 12, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(50): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(190): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Press))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-06-29 12:52:42 --- ERROR: Exception [ 0 ]: Insert to addresses failed with errors: Array
(
    [0] => 23000
    [1] => 1452
    [2] => Cannot add or update a child row: a foreign key constraint fails (`darth`.`addresses`, CONSTRAINT `fk-state-addresses` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`))
)
 With SQL: INSERT  INTO `addresses` (`type`,`user_id`,`care_of`,`address1`,`address2`,`city`,`state_id`,`postal`,`country_id`) VALUES
(:type0,:user_id0,:care_of0,:address10,:address20,:city0,:state_id0,:postal0,:country_id0) And Data: Array
(
    [:type0] => business
    [:user_id0] => 
    [:care_of0] => 
    [:address10] => 
    [:address20] => 
    [:city0] => 
    [:state_id0] => 
    [:postal0] => 
    [:country_id0] => US
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
2012-06-29 12:52:42 --- STRACE: Exception [ 0 ]: Insert to addresses failed with errors: Array
(
    [0] => 23000
    [1] => 1452
    [2] => Cannot add or update a child row: a foreign key constraint fails (`darth`.`addresses`, CONSTRAINT `fk-state-addresses` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`))
)
 With SQL: INSERT  INTO `addresses` (`type`,`user_id`,`care_of`,`address1`,`address2`,`city`,`state_id`,`postal`,`country_id`) VALUES
(:type0,:user_id0,:care_of0,:address10,:address20,:city0,:state_id0,:postal0,:country_id0) And Data: Array
(
    [:type0] => business
    [:user_id0] => 
    [:care_of0] => 
    [:address10] => 
    [:address20] => 
    [:city0] => 
    [:state_id0] => 
    [:postal0] => 
    [:country_id0] => US
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(471): Gacela\DataSource\Database->insert('addresses', Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(886): Gacela\Mapper\Mapper->_saveResource(Object(Gacela\DataSource\Resource), Array, Object(stdClass), Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/model.php(88): Gacela\Mapper\Mapper->save(Array, Object(stdClass), Array)
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/partners.php(90): Darth\Model\Model->save(Object(Formo_Form))
#4 [internal function]: Controller_Admin_Partners->action_form()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Partners))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-06-29 12:52:55 --- ERROR: Exception [ 0 ]: Insert to users failed with errors: Array
(
    [0] => 23000
    [1] => 1062
    [2] => Duplicate entry 'info@winrobots.com' for key 'unq_email'
)
 With SQL: INSERT  INTO `users` (`email`,`first`,`last`,`password`,`role`) VALUES
(:email0,:first0,:last0,:password0,:role0) And Data: Array
(
    [:email0] => info@winrobots.com
    [:first0] => Win
    [:last0] => Robots
    [:password0] => bcrypt$2a$12$Ko4J4uxp1DZ8qCOT16iAS.F3Z36p0cToODAmXCTS.Q140nOLXaKKi
    [:role0] => partner
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
2012-06-29 12:52:55 --- STRACE: Exception [ 0 ]: Insert to users failed with errors: Array
(
    [0] => 23000
    [1] => 1062
    [2] => Duplicate entry 'info@winrobots.com' for key 'unq_email'
)
 With SQL: INSERT  INTO `users` (`email`,`first`,`last`,`password`,`role`) VALUES
(:email0,:first0,:last0,:password0,:role0) And Data: Array
(
    [:email0] => info@winrobots.com
    [:first0] => Win
    [:last0] => Robots
    [:password0] => bcrypt$2a$12$Ko4J4uxp1DZ8qCOT16iAS.F3Z36p0cToODAmXCTS.Q140nOLXaKKi
    [:role0] => partner
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(471): Gacela\DataSource\Database->insert('users', Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(879): Gacela\Mapper\Mapper->_saveResource(Object(Gacela\DataSource\Resource), Array, Object(stdClass), Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/model.php(88): Gacela\Mapper\Mapper->save(Array, Object(stdClass), Array)
#3 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(349): Darth\Model\Model->save(Object(Formo_Form))
#4 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/partners.php(84): Darth\Model\User->save(Object(Formo_Form))
#5 [internal function]: Controller_Admin_Partners->action_form()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Partners))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-06-29 12:53:08 --- ERROR: Exception [ 0 ]: Insert to users failed with errors: Array
(
    [0] => 23000
    [1] => 1062
    [2] => Duplicate entry 'info@winrobots.com' for key 'unq_email'
)
 With SQL: INSERT  INTO `users` (`email`,`first`,`last`,`password`,`role`) VALUES
(:email0,:first0,:last0,:password0,:role0) And Data: Array
(
    [:email0] => info@winrobots.com
    [:first0] => Win
    [:last0] => Robots
    [:password0] => bcrypt$2a$12$xfNUPppTs35PddMMKgdiCuYu83ttrCiED.QQJAGnBK6VQEs9bOLk2
    [:role0] => partner
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
2012-06-29 12:53:08 --- STRACE: Exception [ 0 ]: Insert to users failed with errors: Array
(
    [0] => 23000
    [1] => 1062
    [2] => Duplicate entry 'info@winrobots.com' for key 'unq_email'
)
 With SQL: INSERT  INTO `users` (`email`,`first`,`last`,`password`,`role`) VALUES
(:email0,:first0,:last0,:password0,:role0) And Data: Array
(
    [:email0] => info@winrobots.com
    [:first0] => Win
    [:last0] => Robots
    [:password0] => bcrypt$2a$12$xfNUPppTs35PddMMKgdiCuYu83ttrCiED.QQJAGnBK6VQEs9bOLk2
    [:role0] => partner
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(471): Gacela\DataSource\Database->insert('users', Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(879): Gacela\Mapper\Mapper->_saveResource(Object(Gacela\DataSource\Resource), Array, Object(stdClass), Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/model.php(88): Gacela\Mapper\Mapper->save(Array, Object(stdClass), Array)
#3 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(349): Darth\Model\Model->save(Object(Formo_Form))
#4 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/partners.php(84): Darth\Model\User->save(Object(Formo_Form))
#5 [internal function]: Controller_Admin_Partners->action_form()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Partners))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-06-29 12:54:24 --- ERROR: Exception [ 0 ]: Insert to users failed with errors: Array
(
    [0] => 23000
    [1] => 1062
    [2] => Duplicate entry 'info@winrobots.com' for key 'unq_email'
)
 With SQL: INSERT  INTO `users` (`email`,`first`,`last`,`password`,`role`) VALUES
(:email0,:first0,:last0,:password0,:role0) And Data: Array
(
    [:email0] => info@winrobots.com
    [:first0] => Win
    [:last0] => Robots
    [:password0] => bcrypt$2a$12$UZ0c4TKO8MM0xxOGuNqcW.lp7nxcsaQkSmUhe7LCy7qHRKdzP/GZe
    [:role0] => partner
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
2012-06-29 12:54:24 --- STRACE: Exception [ 0 ]: Insert to users failed with errors: Array
(
    [0] => 23000
    [1] => 1062
    [2] => Duplicate entry 'info@winrobots.com' for key 'unq_email'
)
 With SQL: INSERT  INTO `users` (`email`,`first`,`last`,`password`,`role`) VALUES
(:email0,:first0,:last0,:password0,:role0) And Data: Array
(
    [:email0] => info@winrobots.com
    [:first0] => Win
    [:last0] => Robots
    [:password0] => bcrypt$2a$12$UZ0c4TKO8MM0xxOGuNqcW.lp7nxcsaQkSmUhe7LCy7qHRKdzP/GZe
    [:role0] => partner
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(471): Gacela\DataSource\Database->insert('users', Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(879): Gacela\Mapper\Mapper->_saveResource(Object(Gacela\DataSource\Resource), Array, Object(stdClass), Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/model.php(88): Gacela\Mapper\Mapper->save(Array, Object(stdClass), Array)
#3 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(349): Darth\Model\Model->save(Object(Formo_Form))
#4 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/partners.php(84): Darth\Model\User->save(Object(Formo_Form))
#5 [internal function]: Controller_Admin_Partners->action_form()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Partners))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-06-29 12:54:33 --- ERROR: Exception [ 0 ]: Insert to users failed with errors: Array
(
    [0] => 23000
    [1] => 1062
    [2] => Duplicate entry 'info@winrobots.com' for key 'unq_email'
)
 With SQL: INSERT  INTO `users` (`email`,`first`,`last`,`password`,`role`) VALUES
(:email0,:first0,:last0,:password0,:role0) And Data: Array
(
    [:email0] => info@winrobots.com
    [:first0] => Win
    [:last0] => Robots
    [:password0] => bcrypt$2a$12$MmXUHRPplsXPj44MOuoqAefPHszcNgxZXoEQ1yraEawdsjB1xiFRu
    [:role0] => partner
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
2012-06-29 12:54:33 --- STRACE: Exception [ 0 ]: Insert to users failed with errors: Array
(
    [0] => 23000
    [1] => 1062
    [2] => Duplicate entry 'info@winrobots.com' for key 'unq_email'
)
 With SQL: INSERT  INTO `users` (`email`,`first`,`last`,`password`,`role`) VALUES
(:email0,:first0,:last0,:password0,:role0) And Data: Array
(
    [:email0] => info@winrobots.com
    [:first0] => Win
    [:last0] => Robots
    [:password0] => bcrypt$2a$12$MmXUHRPplsXPj44MOuoqAefPHszcNgxZXoEQ1yraEawdsjB1xiFRu
    [:role0] => partner
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(471): Gacela\DataSource\Database->insert('users', Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(879): Gacela\Mapper\Mapper->_saveResource(Object(Gacela\DataSource\Resource), Array, Object(stdClass), Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/model.php(88): Gacela\Mapper\Mapper->save(Array, Object(stdClass), Array)
#3 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(349): Darth\Model\Model->save(Object(Formo_Form))
#4 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/partners.php(84): Darth\Model\User->save(Object(Formo_Form))
#5 [internal function]: Controller_Admin_Partners->action_form()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Partners))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-06-29 12:54:38 --- ERROR: Exception [ 0 ]: Insert to users failed with errors: Array
(
    [0] => 23000
    [1] => 1062
    [2] => Duplicate entry 'info@winrobots.com' for key 'unq_email'
)
 With SQL: INSERT  INTO `users` (`email`,`first`,`last`,`password`,`role`) VALUES
(:email0,:first0,:last0,:password0,:role0) And Data: Array
(
    [:email0] => info@winrobots.com
    [:first0] => Win
    [:last0] => Robots
    [:password0] => bcrypt$2a$12$KjIZzPhQzOoHto03TU8sDOHQtv.njtk.NKJapah9ocPNjorglGTp2
    [:role0] => partner
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
2012-06-29 12:54:38 --- STRACE: Exception [ 0 ]: Insert to users failed with errors: Array
(
    [0] => 23000
    [1] => 1062
    [2] => Duplicate entry 'info@winrobots.com' for key 'unq_email'
)
 With SQL: INSERT  INTO `users` (`email`,`first`,`last`,`password`,`role`) VALUES
(:email0,:first0,:last0,:password0,:role0) And Data: Array
(
    [:email0] => info@winrobots.com
    [:first0] => Win
    [:last0] => Robots
    [:password0] => bcrypt$2a$12$KjIZzPhQzOoHto03TU8sDOHQtv.njtk.NKJapah9ocPNjorglGTp2
    [:role0] => partner
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(471): Gacela\DataSource\Database->insert('users', Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(879): Gacela\Mapper\Mapper->_saveResource(Object(Gacela\DataSource\Resource), Array, Object(stdClass), Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/model.php(88): Gacela\Mapper\Mapper->save(Array, Object(stdClass), Array)
#3 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(349): Darth\Model\Model->save(Object(Formo_Form))
#4 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/partners.php(84): Darth\Model\User->save(Object(Formo_Form))
#5 [internal function]: Controller_Admin_Partners->action_form()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Partners))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-06-29 12:55:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/partners/winrobots-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-29 12:55:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/partners/winrobots-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-29 12:55:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/partners/winrobots-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-29 12:55:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/partners/winrobots-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-29 12:58:24 --- ERROR: Exception [ 0 ]: Insert to addresses failed with errors: Array
(
    [0] => 23000
    [1] => 1452
    [2] => Cannot add or update a child row: a foreign key constraint fails (`darth`.`addresses`, CONSTRAINT `fk-state-addresses` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`))
)
 With SQL: INSERT  INTO `addresses` (`type`,`user_id`,`care_of`,`address1`,`address2`,`city`,`state_id`,`postal`,`country_id`) VALUES
(:type0,:user_id0,:care_of0,:address10,:address20,:city0,:state_id0,:postal0,:country_id0) And Data: Array
(
    [:type0] => business
    [:user_id0] => 
    [:care_of0] => 
    [:address10] => 
    [:address20] => 
    [:city0] => 
    [:state_id0] => 
    [:postal0] => 
    [:country_id0] => US
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
2012-06-29 12:58:24 --- STRACE: Exception [ 0 ]: Insert to addresses failed with errors: Array
(
    [0] => 23000
    [1] => 1452
    [2] => Cannot add or update a child row: a foreign key constraint fails (`darth`.`addresses`, CONSTRAINT `fk-state-addresses` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`))
)
 With SQL: INSERT  INTO `addresses` (`type`,`user_id`,`care_of`,`address1`,`address2`,`city`,`state_id`,`postal`,`country_id`) VALUES
(:type0,:user_id0,:care_of0,:address10,:address20,:city0,:state_id0,:postal0,:country_id0) And Data: Array
(
    [:type0] => business
    [:user_id0] => 
    [:care_of0] => 
    [:address10] => 
    [:address20] => 
    [:city0] => 
    [:state_id0] => 
    [:postal0] => 
    [:country_id0] => US
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(471): Gacela\DataSource\Database->insert('addresses', Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(886): Gacela\Mapper\Mapper->_saveResource(Object(Gacela\DataSource\Resource), Array, Object(stdClass), Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/model.php(88): Gacela\Mapper\Mapper->save(Array, Object(stdClass), Array)
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/partners.php(90): Darth\Model\Model->save(Object(Formo_Form))
#4 [internal function]: Controller_Admin_Partners->action_form()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Partners))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-06-29 12:58:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/partners/novell-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-29 12:58:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/partners/novell-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-29 12:58:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/partners/novell-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-29 12:58:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/partners/novell-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-29 13:04:23 --- ERROR: Exception [ 0 ]: Insert to addresses failed with errors: Array
(
    [0] => 23000
    [1] => 1452
    [2] => Cannot add or update a child row: a foreign key constraint fails (`darth`.`addresses`, CONSTRAINT `fk-state-addresses` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`))
)
 With SQL: INSERT  INTO `addresses` (`type`,`user_id`,`care_of`,`address1`,`address2`,`city`,`state_id`,`postal`,`country_id`) VALUES
(:type0,:user_id0,:care_of0,:address10,:address20,:city0,:state_id0,:postal0,:country_id0) And Data: Array
(
    [:type0] => business
    [:user_id0] => 
    [:care_of0] => 
    [:address10] => 
    [:address20] => 
    [:city0] => 
    [:state_id0] => 
    [:postal0] => 
    [:country_id0] => US
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
2012-06-29 13:04:23 --- STRACE: Exception [ 0 ]: Insert to addresses failed with errors: Array
(
    [0] => 23000
    [1] => 1452
    [2] => Cannot add or update a child row: a foreign key constraint fails (`darth`.`addresses`, CONSTRAINT `fk-state-addresses` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`))
)
 With SQL: INSERT  INTO `addresses` (`type`,`user_id`,`care_of`,`address1`,`address2`,`city`,`state_id`,`postal`,`country_id`) VALUES
(:type0,:user_id0,:care_of0,:address10,:address20,:city0,:state_id0,:postal0,:country_id0) And Data: Array
(
    [:type0] => business
    [:user_id0] => 
    [:care_of0] => 
    [:address10] => 
    [:address20] => 
    [:city0] => 
    [:state_id0] => 
    [:postal0] => 
    [:country_id0] => US
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(471): Gacela\DataSource\Database->insert('addresses', Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(886): Gacela\Mapper\Mapper->_saveResource(Object(Gacela\DataSource\Resource), Array, Object(stdClass), Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/model.php(88): Gacela\Mapper\Mapper->save(Array, Object(stdClass), Array)
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/partners.php(90): Darth\Model\Model->save(Object(Formo_Form))
#4 [internal function]: Controller_Admin_Partners->action_form()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Partners))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-06-29 13:04:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/partners/netviewer-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-29 13:04:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/partners/netviewer-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-29 13:04:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/partners/netviewer-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-29 13:04:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/partners/netviewer-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-29 13:06:13 --- ERROR: Exception [ 0 ]: Insert to addresses failed with errors: Array
(
    [0] => 23000
    [1] => 1452
    [2] => Cannot add or update a child row: a foreign key constraint fails (`darth`.`addresses`, CONSTRAINT `fk-state-addresses` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`))
)
 With SQL: INSERT  INTO `addresses` (`type`,`user_id`,`care_of`,`address1`,`address2`,`city`,`state_id`,`postal`,`country_id`) VALUES
(:type0,:user_id0,:care_of0,:address10,:address20,:city0,:state_id0,:postal0,:country_id0) And Data: Array
(
    [:type0] => business
    [:user_id0] => 
    [:care_of0] => 
    [:address10] => 
    [:address20] => 
    [:city0] => 
    [:state_id0] => 
    [:postal0] => 
    [:country_id0] => US
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
2012-06-29 13:06:13 --- STRACE: Exception [ 0 ]: Insert to addresses failed with errors: Array
(
    [0] => 23000
    [1] => 1452
    [2] => Cannot add or update a child row: a foreign key constraint fails (`darth`.`addresses`, CONSTRAINT `fk-state-addresses` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`))
)
 With SQL: INSERT  INTO `addresses` (`type`,`user_id`,`care_of`,`address1`,`address2`,`city`,`state_id`,`postal`,`country_id`) VALUES
(:type0,:user_id0,:care_of0,:address10,:address20,:city0,:state_id0,:postal0,:country_id0) And Data: Array
(
    [:type0] => business
    [:user_id0] => 
    [:care_of0] => 
    [:address10] => 
    [:address20] => 
    [:city0] => 
    [:state_id0] => 
    [:postal0] => 
    [:country_id0] => US
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(471): Gacela\DataSource\Database->insert('addresses', Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(886): Gacela\Mapper\Mapper->_saveResource(Object(Gacela\DataSource\Resource), Array, Object(stdClass), Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/model.php(88): Gacela\Mapper\Mapper->save(Array, Object(stdClass), Array)
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/partners.php(90): Darth\Model\Model->save(Object(Formo_Form))
#4 [internal function]: Controller_Admin_Partners->action_form()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Partners))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-06-29 14:48:23 --- ERROR: Exception [ 0 ]: Insert to addresses failed with errors: Array
(
    [0] => 23000
    [1] => 1452
    [2] => Cannot add or update a child row: a foreign key constraint fails (`darth`.`addresses`, CONSTRAINT `fk-state-addresses` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`))
)
 With SQL: INSERT  INTO `addresses` (`type`,`user_id`,`care_of`,`address1`,`address2`,`city`,`state_id`,`postal`,`country_id`) VALUES
(:type0,:user_id0,:care_of0,:address10,:address20,:city0,:state_id0,:postal0,:country_id0) And Data: Array
(
    [:type0] => business
    [:user_id0] => 
    [:care_of0] => 
    [:address10] => 85 Buxton Road
    [:address20] => 
    [:city0] => Stockport
    [:state_id0] => 
    [:postal0] => SK2 6
    [:country_id0] => GB
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
2012-06-29 14:48:23 --- STRACE: Exception [ 0 ]: Insert to addresses failed with errors: Array
(
    [0] => 23000
    [1] => 1452
    [2] => Cannot add or update a child row: a foreign key constraint fails (`darth`.`addresses`, CONSTRAINT `fk-state-addresses` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`))
)
 With SQL: INSERT  INTO `addresses` (`type`,`user_id`,`care_of`,`address1`,`address2`,`city`,`state_id`,`postal`,`country_id`) VALUES
(:type0,:user_id0,:care_of0,:address10,:address20,:city0,:state_id0,:postal0,:country_id0) And Data: Array
(
    [:type0] => business
    [:user_id0] => 
    [:care_of0] => 
    [:address10] => 85 Buxton Road
    [:address20] => 
    [:city0] => Stockport
    [:state_id0] => 
    [:postal0] => SK2 6
    [:country_id0] => GB
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(471): Gacela\DataSource\Database->insert('addresses', Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(886): Gacela\Mapper\Mapper->_saveResource(Object(Gacela\DataSource\Resource), Array, Object(stdClass), Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/model.php(88): Gacela\Mapper\Mapper->save(Array, Object(stdClass), Array)
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/partners.php(92): Darth\Model\Model->save(Object(Formo_Form))
#4 [internal function]: Controller_Admin_Partners->action_form()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Partners))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-06-29 15:55:53 --- ERROR: Exception [ 0 ]: Insert to addresses failed with errors: Array
(
    [0] => 23000
    [1] => 1452
    [2] => Cannot add or update a child row: a foreign key constraint fails (`darth`.`addresses`, CONSTRAINT `fk-state-addresses` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`))
)
 With SQL: INSERT  INTO `addresses` (`type`,`user_id`,`care_of`,`address1`,`address2`,`city`,`state_id`,`postal`,`country_id`) VALUES
(:type0,:user_id0,:care_of0,:address10,:address20,:city0,:state_id0,:postal0,:country_id0) And Data: Array
(
    [:type0] => business
    [:user_id0] => 
    [:care_of0] => 
    [:address10] => Homero 203
    [:address20] => Piso 10
    [:city0] => Colonia Polanco
    [:state_id0] => 
    [:postal0] => CP 11
    [:country_id0] => MX
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
2012-06-29 15:55:53 --- STRACE: Exception [ 0 ]: Insert to addresses failed with errors: Array
(
    [0] => 23000
    [1] => 1452
    [2] => Cannot add or update a child row: a foreign key constraint fails (`darth`.`addresses`, CONSTRAINT `fk-state-addresses` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`))
)
 With SQL: INSERT  INTO `addresses` (`type`,`user_id`,`care_of`,`address1`,`address2`,`city`,`state_id`,`postal`,`country_id`) VALUES
(:type0,:user_id0,:care_of0,:address10,:address20,:city0,:state_id0,:postal0,:country_id0) And Data: Array
(
    [:type0] => business
    [:user_id0] => 
    [:care_of0] => 
    [:address10] => Homero 203
    [:address20] => Piso 10
    [:city0] => Colonia Polanco
    [:state_id0] => 
    [:postal0] => CP 11
    [:country_id0] => MX
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(471): Gacela\DataSource\Database->insert('addresses', Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(886): Gacela\Mapper\Mapper->_saveResource(Object(Gacela\DataSource\Resource), Array, Object(stdClass), Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/model.php(88): Gacela\Mapper\Mapper->save(Array, Object(stdClass), Array)
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/partners.php(92): Darth\Model\Model->save(Object(Formo_Form))
#4 [internal function]: Controller_Admin_Partners->action_form()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Partners))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-06-29 15:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/partners/redicsa-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-29 15:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/partners/redicsa-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-29 15:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/partners/redicsa-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-29 15:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/partners/redicsa-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-29 15:59:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/partners/redicsa-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-29 15:59:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/partners/redicsa-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-29 15:59:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/partners/redicsa-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-29 15:59:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/partners/redicsa-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-29 16:52:38 --- ERROR: Exception [ 0 ]: Insert to addresses failed with errors: Array
(
    [0] => 23000
    [1] => 1452
    [2] => Cannot add or update a child row: a foreign key constraint fails (`darth`.`addresses`, CONSTRAINT `fk-state-addresses` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`))
)
 With SQL: INSERT  INTO `addresses` (`type`,`user_id`,`care_of`,`address1`,`address2`,`city`,`state_id`,`province`,`postal`,`country_id`) VALUES
(:type0,:user_id0,:care_of0,:address10,:address20,:city0,:state_id0,:province0,:postal0,:country_id0) And Data: Array
(
    [:type0] => business
    [:user_id0] => 
    [:care_of0] => 
    [:address10] => 4295 Dawson Street
    [:address20] => 
    [:city0] => Burndaby
    [:state_id0] => 
    [:province0] => BC
    [:postal0] => V5C 4
    [:country_id0] => CA
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
2012-06-29 16:52:38 --- STRACE: Exception [ 0 ]: Insert to addresses failed with errors: Array
(
    [0] => 23000
    [1] => 1452
    [2] => Cannot add or update a child row: a foreign key constraint fails (`darth`.`addresses`, CONSTRAINT `fk-state-addresses` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`))
)
 With SQL: INSERT  INTO `addresses` (`type`,`user_id`,`care_of`,`address1`,`address2`,`city`,`state_id`,`province`,`postal`,`country_id`) VALUES
(:type0,:user_id0,:care_of0,:address10,:address20,:city0,:state_id0,:province0,:postal0,:country_id0) And Data: Array
(
    [:type0] => business
    [:user_id0] => 
    [:care_of0] => 
    [:address10] => 4295 Dawson Street
    [:address20] => 
    [:city0] => Burndaby
    [:state_id0] => 
    [:province0] => BC
    [:postal0] => V5C 4
    [:country_id0] => CA
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(471): Gacela\DataSource\Database->insert('addresses', Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(886): Gacela\Mapper\Mapper->_saveResource(Object(Gacela\DataSource\Resource), Array, Object(stdClass), Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/model.php(88): Gacela\Mapper\Mapper->save(Array, Object(stdClass), Array)
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/partners.php(92): Darth\Model\Model->save(Object(Formo_Form))
#4 [internal function]: Controller_Admin_Partners->action_form()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Partners))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
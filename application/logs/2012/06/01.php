<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-01 08:45:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/losungen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-06-01 08:45:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/losungen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-06-01 08:45:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-06-01 08:45:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-06-01 08:50:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL losungen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-06-01 08:50:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL losungen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-06-01 08:51:43 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: subtitle ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-06-01 08:51:43 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: subtitle ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(78): Kohana_View->__get('subtitle')
#1 [internal function]: Controller_Public_Index->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-06-01 08:52:14 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: subtitle ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-06-01 08:52:14 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: subtitle ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(94): Kohana_View->__get('subtitle')
#1 [internal function]: Controller_Public_Index->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-06-01 08:52:40 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: subtitle ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-06-01 08:52:40 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: subtitle ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(94): Kohana_View->__get('subtitle')
#1 [internal function]: Controller_Public_Index->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-06-01 08:52:40 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: subtitle ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-06-01 08:52:40 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: subtitle ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(94): Kohana_View->__get('subtitle')
#1 [internal function]: Controller_Public_Index->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-06-01 08:53:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL losungen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-06-01 08:53:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL losungen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-06-01 08:57:57 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: subtitle ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-06-01 08:57:57 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: subtitle ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(82): Kohana_View->__get('subtitle')
#1 [internal function]: Controller_Public->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-06-01 08:59:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL losungen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-06-01 08:59:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL losungen was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-06-01 08:59:44 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: subtitle ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-06-01 08:59:44 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: subtitle ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(82): Kohana_View->__get('subtitle')
#1 [internal function]: Controller_Public->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-06-01 09:00:35 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: subtitle ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-06-01 09:00:35 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: subtitle ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(42): Kohana_View->__get('subtitle')
#1 [internal function]: Controller_Public->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-06-01 09:04:49 --- ERROR: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Query/Sql.php [ 65 ]
2012-06-01 09:04:49 --- STRACE: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Query/Sql.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-01 09:09:25 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: subtitle ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-06-01 09:09:25 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: subtitle ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(81): Kohana_View->__get('subtitle')
#1 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(27): Controller_Public->action_index()
#2 [internal function]: Controller_Public_Index->action_index()
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#7 {main}
2012-06-01 09:12:29 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Public_Index::action_testing() ~ MODPATH/site/classes/controller/public.php [ 58 ]
2012-06-01 09:12:29 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Public_Index::action_testing() ~ MODPATH/site/classes/controller/public.php [ 58 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-01 09:13:43 --- ERROR: ErrorException [ 1 ]: Call to a member function action_testing() on a non-object ~ MODPATH/site/classes/controller/public.php [ 58 ]
2012-06-01 09:13:43 --- STRACE: ErrorException [ 1 ]: Call to a member function action_testing() on a non-object ~ MODPATH/site/classes/controller/public.php [ 58 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-01 09:14:58 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php on line 58 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2012-06-01 09:14:58 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php on line 58 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Volumes/Files/...', 43, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(58): Kohana_Controller->__construct()
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#3 [internal function]: Controller_Public_Index->action_index()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-06-01 09:15:18 --- ERROR: ErrorException [ 4 ]: parse error ~ MODPATH/site/classes/controller/public.php [ 58 ]
2012-06-01 09:15:18 --- STRACE: ErrorException [ 4 ]: parse error ~ MODPATH/site/classes/controller/public.php [ 58 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-01 09:15:29 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php on line 58 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
2012-06-01 09:15:29 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php on line 58 and defined ~ SYSPATH/classes/kohana/controller.php [ 43 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Volumes/Files/...', 43, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(58): Kohana_Controller->__construct()
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#3 [internal function]: Controller_Public_Index->action_index()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-06-01 09:16:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 54 ]
2012-06-01 09:16:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 54 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(60): Controller_Public->action_index()
#1 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#2 [internal function]: Controller_Public_Index->action_index()
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#7 {main}
2012-06-01 10:09:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-01 10:09:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-01 10:15:27 --- ERROR: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] Connection refused ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Pdo.php [ 24 ]
2012-06-01 10:15:27 --- STRACE: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] Connection refused ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Pdo.php [ 24 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Pdo.php(0): PDO->__construct()
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Mysql.php(19): Gacela\DataSource\Adapter\Pdo->__construct(Object(stdClass))
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(54): Gacela\DataSource\Adapter\Mysql->__construct(Object(stdClass))
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/DataSource.php(117): Gacela\DataSource\Database->_driver()
#4 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(419): Gacela\DataSource\DataSource->loadResource('users')
#5 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(192): Gacela\Mapper\Mapper->_initResource()
#6 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(767): Gacela\Mapper\Mapper->_init()
#7 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(509): Gacela\Mapper\Mapper->init()
#8 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela.php(278): Gacela\Mapper\Mapper->__construct()
#9 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(80): Gacela->loadMapper('User')
#10 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(46): Kacela_Core::load('user')
#11 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(271): Kacela_Core::find('user', 1)
#12 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(58): Controller_Site->_set_user()
#13 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(30): Controller_Site->before()
#14 [internal function]: Controller_Public->before()
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#19 {main}
2012-06-01 10:18:40 --- ERROR: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] Connection refused ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Pdo.php [ 24 ]
2012-06-01 10:18:40 --- STRACE: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] Connection refused ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Pdo.php [ 24 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Pdo.php(0): PDO->__construct()
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Mysql.php(19): Gacela\DataSource\Adapter\Pdo->__construct(Object(stdClass))
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(54): Gacela\DataSource\Adapter\Mysql->__construct(Object(stdClass))
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/DataSource.php(117): Gacela\DataSource\Database->_driver()
#4 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(419): Gacela\DataSource\DataSource->loadResource('users')
#5 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(192): Gacela\Mapper\Mapper->_initResource()
#6 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(767): Gacela\Mapper\Mapper->_init()
#7 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(509): Gacela\Mapper\Mapper->init()
#8 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela.php(278): Gacela\Mapper\Mapper->__construct()
#9 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(80): Gacela->loadMapper('User')
#10 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(46): Kacela_Core::load('user')
#11 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(271): Kacela_Core::find('user', 1)
#12 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(58): Controller_Site->_set_user()
#13 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(30): Controller_Site->before()
#14 [internal function]: Controller_Public->before()
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#19 {main}
2012-06-01 10:18:41 --- ERROR: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] Connection refused ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Pdo.php [ 24 ]
2012-06-01 10:18:41 --- STRACE: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] Connection refused ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Pdo.php [ 24 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Pdo.php(0): PDO->__construct()
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Mysql.php(19): Gacela\DataSource\Adapter\Pdo->__construct(Object(stdClass))
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(54): Gacela\DataSource\Adapter\Mysql->__construct(Object(stdClass))
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/DataSource.php(117): Gacela\DataSource\Database->_driver()
#4 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(419): Gacela\DataSource\DataSource->loadResource('users')
#5 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(192): Gacela\Mapper\Mapper->_initResource()
#6 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(767): Gacela\Mapper\Mapper->_init()
#7 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(509): Gacela\Mapper\Mapper->init()
#8 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela.php(278): Gacela\Mapper\Mapper->__construct()
#9 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(80): Gacela->loadMapper('User')
#10 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(46): Kacela_Core::load('user')
#11 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(271): Kacela_Core::find('user', 1)
#12 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(58): Controller_Site->_set_user()
#13 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(30): Controller_Site->before()
#14 [internal function]: Controller_Public->before()
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#19 {main}
2012-06-01 10:18:42 --- ERROR: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] Connection refused ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Pdo.php [ 24 ]
2012-06-01 10:18:42 --- STRACE: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] Connection refused ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Pdo.php [ 24 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Pdo.php(0): PDO->__construct()
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Mysql.php(19): Gacela\DataSource\Adapter\Pdo->__construct(Object(stdClass))
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(54): Gacela\DataSource\Adapter\Mysql->__construct(Object(stdClass))
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/DataSource.php(117): Gacela\DataSource\Database->_driver()
#4 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(419): Gacela\DataSource\DataSource->loadResource('users')
#5 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(192): Gacela\Mapper\Mapper->_initResource()
#6 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(767): Gacela\Mapper\Mapper->_init()
#7 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(509): Gacela\Mapper\Mapper->init()
#8 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela.php(278): Gacela\Mapper\Mapper->__construct()
#9 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(80): Gacela->loadMapper('User')
#10 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(46): Kacela_Core::load('user')
#11 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(271): Kacela_Core::find('user', 1)
#12 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(58): Controller_Site->_set_user()
#13 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(30): Controller_Site->before()
#14 [internal function]: Controller_Public->before()
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#19 {main}
2012-06-01 10:18:42 --- ERROR: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] Connection refused ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Pdo.php [ 24 ]
2012-06-01 10:18:42 --- STRACE: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] Connection refused ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Pdo.php [ 24 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Pdo.php(0): PDO->__construct()
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Mysql.php(19): Gacela\DataSource\Adapter\Pdo->__construct(Object(stdClass))
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(54): Gacela\DataSource\Adapter\Mysql->__construct(Object(stdClass))
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/DataSource.php(117): Gacela\DataSource\Database->_driver()
#4 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(419): Gacela\DataSource\DataSource->loadResource('users')
#5 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(192): Gacela\Mapper\Mapper->_initResource()
#6 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(767): Gacela\Mapper\Mapper->_init()
#7 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(509): Gacela\Mapper\Mapper->init()
#8 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela.php(278): Gacela\Mapper\Mapper->__construct()
#9 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(80): Gacela->loadMapper('User')
#10 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(46): Kacela_Core::load('user')
#11 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(271): Kacela_Core::find('user', 1)
#12 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(58): Controller_Site->_set_user()
#13 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(30): Controller_Site->before()
#14 [internal function]: Controller_Public->before()
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#19 {main}
2012-06-01 14:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 54 ]
2012-06-01 14:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 54 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(60): Controller_Public->action_index()
#1 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#2 [internal function]: Controller_Public_Index->action_index()
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#7 {main}
2012-06-01 16:28:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/transparent-bg-dark.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-01 16:28:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/transparent-bg-dark.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-01 16:29:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/transparent-bg-dark.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-01 16:29:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/transparent-bg-dark.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-01 16:30:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/transparent-bg-dark.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-01 16:30:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/transparent-bg-dark.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-01 16:30:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/transparent-bg-dark.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-01 16:30:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/transparent-bg-dark.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-01 16:30:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/transparent-bg-dark.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-01 16:30:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/transparent-bg-dark.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-01 16:30:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/transparent-bg-dark.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-01 16:30:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/transparent-bg-dark.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-01 16:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/transparent-bg-dark.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-01 16:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/transparent-bg-dark.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-01 16:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/transparent-bg-dark.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-01 16:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/transparent-bg-dark.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
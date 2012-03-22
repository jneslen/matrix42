<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-20 10:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-03-20 10:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-03-20 14:18:30 --- ERROR: View_Exception [ 0 ]: The requested view public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-03-20 14:18:30 --- STRACE: View_Exception [ 0 ]: The requested view public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('public')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(30): Kohana_View->__construct('public', NULL)
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(33): Kohana_View::factory('public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(32): Kohana_Controller_Template->before()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(11): Controller_Site->before()
#5 [internal function]: Controller_Public->before()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Start))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-03-20 14:21:48 --- ERROR: View_Exception [ 0 ]: The requested view public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-03-20 14:21:48 --- STRACE: View_Exception [ 0 ]: The requested view public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('public')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(30): Kohana_View->__construct('public', NULL)
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(33): Kohana_View::factory('public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(32): Kohana_Controller_Template->before()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(11): Controller_Site->before()
#5 [internal function]: Controller_Public->before()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Start))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-03-20 14:41:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::script() ~ MODPATH/site/classes/controller/site.php [ 42 ]
2012-03-20 14:41:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::script() ~ MODPATH/site/classes/controller/site.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-20 14:46:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::script() ~ MODPATH/site/classes/controller/site.php [ 42 ]
2012-03-20 14:46:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::script() ~ MODPATH/site/classes/controller/site.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-20 14:46:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::script() ~ MODPATH/site/classes/controller/site.php [ 42 ]
2012-03-20 14:46:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::script() ~ MODPATH/site/classes/controller/site.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-20 14:49:37 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::script() ~ MODPATH/site/classes/controller/site.php [ 42 ]
2012-03-20 14:49:37 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::script() ~ MODPATH/site/classes/controller/site.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-20 14:50:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::script() ~ MODPATH/site/classes/controller/site.php [ 42 ]
2012-03-20 14:50:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::script() ~ MODPATH/site/classes/controller/site.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-20 14:51:02 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::script() ~ MODPATH/site/classes/controller/site.php [ 42 ]
2012-03-20 14:51:02 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::script() ~ MODPATH/site/classes/controller/site.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-20 14:51:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::script() ~ MODPATH/site/classes/controller/site.php [ 42 ]
2012-03-20 14:51:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::script() ~ MODPATH/site/classes/controller/site.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-20 15:15:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::script() ~ MODPATH/site/classes/controller/site.php [ 42 ]
2012-03-20 15:15:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::script() ~ MODPATH/site/classes/controller/site.php [ 42 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-20 15:30:55 --- ERROR: ErrorException [ 1 ]: Class 'Menu' not found ~ MODPATH/site/classes/controller/site.php [ 103 ]
2012-03-20 15:30:55 --- STRACE: ErrorException [ 1 ]: Class 'Menu' not found ~ MODPATH/site/classes/controller/site.php [ 103 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-03-20 15:31:35 --- ERROR: ErrorException [ 8 ]: Undefined index:  view ~ MODPATH/menu/classes/kohana/menu.php [ 21 ]
2012-03-20 15:31:35 --- STRACE: ErrorException [ 8 ]: Undefined index:  view ~ MODPATH/menu/classes/kohana/menu.php [ 21 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 21, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(38): Kohana_Menu->__construct('menu/public')
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(103): Kohana_Menu::factory('public')
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Start))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-03-20 15:33:17 --- ERROR: ErrorException [ 8 ]: Undefined index:  view ~ MODPATH/menu/classes/kohana/menu.php [ 21 ]
2012-03-20 15:33:17 --- STRACE: ErrorException [ 8 ]: Undefined index:  view ~ MODPATH/menu/classes/kohana/menu.php [ 21 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(21): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 21, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(38): Kohana_Menu->__construct('menu/public')
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(103): Kohana_Menu::factory('public')
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Start))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-03-20 15:34:24 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Public_Start::$_sidebar ~ MODPATH/site/classes/controller/site.php [ 109 ]
2012-03-20 15:34:24 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Public_Start::$_sidebar ~ MODPATH/site/classes/controller/site.php [ 109 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(109): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Files/...', 109, Array)
#1 [internal function]: Controller_Site->after()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Start))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
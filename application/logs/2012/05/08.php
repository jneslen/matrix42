<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-08 08:49:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-08 08:49:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-08 09:27:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL \press\1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-08 09:27:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL \press\1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 09:37:35 --- ERROR: View_Exception [ 0 ]: The requested view banner1 could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-08 09:37:35 --- STRACE: View_Exception [ 0 ]: The requested view banner1 could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('banner1')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(30): Kohana_View->__construct('banner1', NULL)
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/press.php(11): Kohana_View::factory('banner1')
#3 [internal function]: Controller_Public_Press->before()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Press))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-05-08 09:40:37 --- ERROR: View_Exception [ 0 ]: The requested view sub-banner-woman could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-08 09:40:37 --- STRACE: View_Exception [ 0 ]: The requested view sub-banner-woman could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('sub-banner-woma...')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(30): Kohana_View->__construct('sub-banner-woma...', NULL)
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/press.php(11): Kohana_View::factory('sub-banner-woma...')
#3 [internal function]: Controller_Public_Press->before()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Press))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-05-08 09:59:54 --- ERROR: ErrorException [ 1 ]: Cannot break/continue 1 level ~ MODPATH/site/classes/controller/public.php [ 60 ]
2012-05-08 09:59:54 --- STRACE: ErrorException [ 1 ]: Cannot break/continue 1 level ~ MODPATH/site/classes/controller/public.php [ 60 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-08 10:08:50 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Controller_Public::$_content ~ APPPATH/classes/controller/public/press.php [ 21 ]
2012-05-08 10:08:50 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Controller_Public::$_content ~ APPPATH/classes/controller/public/press.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-08 10:09:11 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Controller_Public::$_content ~ APPPATH/classes/controller/public/press.php [ 21 ]
2012-05-08 10:09:11 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Controller_Public::$_content ~ APPPATH/classes/controller/public/press.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-08 10:13:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: press/release/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-08 10:13:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: press/release/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-08 10:13:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/press/release/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-08 10:13:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/press/release/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-08 10:13:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/press/release/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-08 10:13:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/press/release/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-08 10:14:54 --- ERROR: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-08 10:14:54 --- STRACE: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('site')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(30): Kohana_View->__construct('site', NULL)
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(33): Kohana_View::factory('site')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(46): Kohana_Controller_Template->before()
#4 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/press.php(7): Controller_Site->before()
#5 [internal function]: Controller_Public_Press->before()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Press))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-05-08 10:22:25 --- ERROR: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-08 10:22:25 --- STRACE: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('site')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(30): Kohana_View->__construct('site', NULL)
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(33): Kohana_View::factory('site')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(46): Kohana_Controller_Template->before()
#4 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/press.php(7): Controller_Site->before()
#5 [internal function]: Controller_Public_Press->before()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Press))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-05-08 10:24:36 --- ERROR: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-08 10:24:36 --- STRACE: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('site')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(30): Kohana_View->__construct('site', NULL)
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(33): Kohana_View::factory('site')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(46): Kohana_Controller_Template->before()
#4 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/press.php(7): Controller_Site->before()
#5 [internal function]: Controller_Public_Press->before()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Press))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-05-08 10:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 10:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 10:26:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 10:26:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 10:26:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 10:26:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 10:26:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 10:26:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 10:26:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 10:26:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 10:26:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 10:26:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 10:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 10:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 10:27:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 10:27:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 10:27:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 10:27:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 10:27:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 10:27:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 10:27:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 10:27:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 10:27:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 10:27:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 10:27:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 10:27:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 10:28:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-08 10:28:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 10:28:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-08 10:28:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 10:28:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-08 10:28:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 10:28:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-08 10:28:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 10:28:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-08 10:28:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 10:28:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-08 10:28:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 10:28:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-08 10:28:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 10:28:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-08 10:28:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 10:28:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-08 10:28:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/release/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 10:29:27 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Public2_Press' not found ~ MODPATH/site/classes/controller/public.php [ 51 ]
2012-05-08 10:29:27 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Public2_Press' not found ~ MODPATH/site/classes/controller/public.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-08 10:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dork was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-08 10:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dork was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 11:30:02 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Komponent_Core::replace() must be an instance of Darth\Model\Content, string given, called in /Volumes/Files/Sites/darth/bane/application/views/press_release.php on line 6 and defined ~ MODPATH/komponent/classes/komponent/core.php [ 36 ]
2012-05-08 11:30:02 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Komponent_Core::replace() must be an instance of Darth\Model\Content, string given, called in /Volumes/Files/Sites/darth/bane/application/views/press_release.php on line 6 and defined ~ MODPATH/komponent/classes/komponent/core.php [ 36 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(36): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Volumes/Files/...', 36, Array)
#1 /Volumes/Files/Sites/darth/bane/application/views/press_release.php(6): Komponent_Core->replace('<p><strong>Pres...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(43): Kohana_View->__toString()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(151): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Site->after()
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Press))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#15 {main}
2012-05-08 11:33:42 --- ERROR: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Query/Database.php [ 56 ]
2012-05-08 11:33:42 --- STRACE: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Query/Database.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-08 11:48:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/press/release/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-08 11:48:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: public/press/release/1 ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-08 11:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 11:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 11:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 11:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 11:59:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-08 11:59:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 11:59:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-08 11:59:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 11:59:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-08 11:59:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 11:59:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-08 11:59:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 11:59:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 11:59:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 12:00:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 12:00:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 12:00:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 12:00:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 12:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 12:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 12:01:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 12:01:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 12:01:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 12:01:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 12:01:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 12:01:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 12:01:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 12:01:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 12:01:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 12:01:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 12:02:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 12:02:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 12:04:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 12:04:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 12:04:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 12:04:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 12:07:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-08 12:07:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions/it_service_management was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-08 12:08:47 --- ERROR: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 63 ~ SYSPATH/classes/kohana/route.php [ 392 ]
2012-05-08 12:08:47 --- STRACE: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 63 ~ SYSPATH/classes/kohana/route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/Volumes/Files/...', 392, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/route.php(392): preg_match('#^/press(?:/(?P...', 'solutions/it_se...', NULL)
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(567): Kohana_Route->matches('solutions/it_se...')
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(785): Kohana_Request::process_uri('solutions/it_se...', Array)
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(198): Kohana_Request->__construct('/solutions/it_s...', NULL)
#5 /Volumes/Files/Sites/darth/bane/index.php(102): Kohana_Request::factory()
#6 {main}
2012-05-08 12:09:36 --- ERROR: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 62 ~ SYSPATH/classes/kohana/route.php [ 392 ]
2012-05-08 12:09:36 --- STRACE: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 62 ~ SYSPATH/classes/kohana/route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/Volumes/Files/...', 392, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/route.php(392): preg_match('#^press(?:/(?P<...', 'solutions/it_se...', NULL)
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(567): Kohana_Route->matches('solutions/it_se...')
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(785): Kohana_Request::process_uri('solutions/it_se...', Array)
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(198): Kohana_Request->__construct('/solutions/it_s...', NULL)
#5 /Volumes/Files/Sites/darth/bane/index.php(102): Kohana_Request::factory()
#6 {main}
2012-05-08 12:09:39 --- ERROR: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 62 ~ SYSPATH/classes/kohana/route.php [ 392 ]
2012-05-08 12:09:39 --- STRACE: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 62 ~ SYSPATH/classes/kohana/route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/Volumes/Files/...', 392, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/route.php(392): preg_match('#^press(?:/(?P<...', 'solutions/it_se...', NULL)
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(567): Kohana_Route->matches('solutions/it_se...')
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(785): Kohana_Request::process_uri('solutions/it_se...', Array)
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(198): Kohana_Request->__construct('/solutions/it_s...', NULL)
#5 /Volumes/Files/Sites/darth/bane/index.php(102): Kohana_Request::factory()
#6 {main}
2012-05-08 12:09:42 --- ERROR: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 62 ~ SYSPATH/classes/kohana/route.php [ 392 ]
2012-05-08 12:09:42 --- STRACE: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 62 ~ SYSPATH/classes/kohana/route.php [ 392 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/Volumes/Files/...', 392, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/route.php(392): preg_match('#^press(?:/(?P<...', 'press/release/1', NULL)
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(567): Kohana_Route->matches('press/release/1')
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(785): Kohana_Request::process_uri('press/release/1', Array)
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(198): Kohana_Request->__construct('/press/release/...', NULL)
#5 /Volumes/Files/Sites/darth/bane/index.php(102): Kohana_Request::factory()
#6 {main}
2012-05-08 12:18:37 --- ERROR: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/controller/public/press.php [ 30 ]
2012-05-08 12:18:37 --- STRACE: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/controller/public/press.php [ 30 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/press.php(30): Kohana_Core::error_handler(2048, 'Only variables ...', '/Volumes/Files/...', 30, Array)
#1 [internal function]: Controller_Public_Press->action_release()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Press))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-05-08 12:18:53 --- ERROR: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/controller/public/press.php [ 30 ]
2012-05-08 12:18:53 --- STRACE: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/controller/public/press.php [ 30 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/press.php(30): Kohana_Core::error_handler(2048, 'Only variables ...', '/Volumes/Files/...', 30, Array)
#1 [internal function]: Controller_Public_Press->action_release()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Press))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-05-08 14:55:43 --- ERROR: View_Exception [ 0 ]: The requested view admin/leads/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-08 14:55:43 --- STRACE: View_Exception [ 0 ]: The requested view admin/leads/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/leads/ind...')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/leads/ind...', NULL)
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(74): Kohana_View::factory('admin/leads/ind...')
#3 [internal function]: Controller_Admin_Leads->action_index()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-05-08 14:56:19 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH/classes/controller/admin/index.php [ 18 ]
2012-05-08 14:56:19 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH/classes/controller/admin/index.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-08 14:56:54 --- ERROR: View_Exception [ 0 ]: The requested view admin/leads/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-08 14:56:54 --- STRACE: View_Exception [ 0 ]: The requested view admin/leads/index could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('admin/leads/ind...')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(30): Kohana_View->__construct('admin/leads/ind...', NULL)
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(74): Kohana_View::factory('admin/leads/ind...')
#3 [internal function]: Controller_Admin_Leads->action_index()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-05-08 15:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/event/event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-08 15:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/event/event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-08 15:10:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/event/event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-08 15:10:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/event/event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-08 15:20:49 --- ERROR: ReflectionException [ 0 ]: Method Formo_Driver_Bool::add() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
2012-05-08 15:20:49 --- STRACE: ReflectionException [ 0 ]: Method Formo_Driver_Bool::add() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/container.php(146): ReflectionMethod->__construct(Object(Formo_Driver_Bool), 'add')
#1 /Volumes/Files/Sites/darth/bane/application/classes/model/event.php(11): Formo_Core_Container->__call('add', Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/event.php(11): Formo_Field->add('class', 'use-time')
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/events.php(80): Darth\Model\Event->get_form()
#4 [internal function]: Controller_Admin_Events->action_form()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Events))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-08 15:21:41 --- ERROR: ReflectionException [ 0 ]: Method Formo_Driver_Bool::class() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
2012-05-08 15:21:41 --- STRACE: ReflectionException [ 0 ]: Method Formo_Driver_Bool::class() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/container.php(146): ReflectionMethod->__construct(Object(Formo_Driver_Bool), 'class')
#1 /Volumes/Files/Sites/darth/bane/application/classes/model/event.php(11): Formo_Core_Container->__call('class', Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/event.php(11): Formo_Field->class('use-time')
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/events.php(80): Darth\Model\Event->get_form()
#4 [internal function]: Controller_Admin_Events->action_form()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Events))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-08 15:21:48 --- ERROR: ReflectionException [ 0 ]: Method Formo_Driver_Bool::add_class() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
2012-05-08 15:21:48 --- STRACE: ReflectionException [ 0 ]: Method Formo_Driver_Bool::add_class() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/container.php(146): ReflectionMethod->__construct(Object(Formo_Driver_Bool), 'add_class')
#1 /Volumes/Files/Sites/darth/bane/application/classes/model/event.php(11): Formo_Core_Container->__call('add_class', Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/event.php(11): Formo_Field->add_class('use-time')
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/events.php(80): Darth\Model\Event->get_form()
#4 [internal function]: Controller_Admin_Events->action_form()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Events))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-08 15:22:54 --- ERROR: ReflectionException [ 0 ]: Method Formo_Driver_Bool::classes() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
2012-05-08 15:22:54 --- STRACE: ReflectionException [ 0 ]: Method Formo_Driver_Bool::classes() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/container.php(146): ReflectionMethod->__construct(Object(Formo_Driver_Bool), 'classes')
#1 /Volumes/Files/Sites/darth/bane/application/classes/model/event.php(11): Formo_Core_Container->__call('classes', Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/event.php(11): Formo_Field->classes('use-time')
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/events.php(80): Darth\Model\Event->get_form()
#4 [internal function]: Controller_Admin_Events->action_form()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Events))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-08 15:23:20 --- ERROR: ErrorException [ 1 ]: Call to a member function classes() on a non-object ~ APPPATH/classes/model/event.php [ 11 ]
2012-05-08 15:23:20 --- STRACE: ErrorException [ 1 ]: Call to a member function classes() on a non-object ~ APPPATH/classes/model/event.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-08 15:23:34 --- ERROR: ErrorException [ 1 ]: Call to a member function classes() on a non-object ~ APPPATH/classes/model/event.php [ 11 ]
2012-05-08 15:23:34 --- STRACE: ErrorException [ 1 ]: Call to a member function classes() on a non-object ~ APPPATH/classes/model/event.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-08 15:24:36 --- ERROR: ErrorException [ 1 ]: Call to a member function attr() on a non-object ~ APPPATH/classes/model/event.php [ 11 ]
2012-05-08 15:24:36 --- STRACE: ErrorException [ 1 ]: Call to a member function attr() on a non-object ~ APPPATH/classes/model/event.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-08 15:24:44 --- ERROR: ReflectionException [ 0 ]: Method Formo_Driver_Bool::attr() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
2012-05-08 15:24:44 --- STRACE: ReflectionException [ 0 ]: Method Formo_Driver_Bool::attr() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/container.php(146): ReflectionMethod->__construct(Object(Formo_Driver_Bool), 'attr')
#1 /Volumes/Files/Sites/darth/bane/application/classes/model/event.php(11): Formo_Core_Container->__call('attr', Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/event.php(11): Formo_Field->attr('class', 'use-time')
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/events.php(80): Darth\Model\Event->get_form()
#4 [internal function]: Controller_Admin_Events->action_form()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Events))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-08 15:25:51 --- ERROR: ReflectionException [ 0 ]: Method Formo_Driver_Bool::add_class() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
2012-05-08 15:25:51 --- STRACE: ReflectionException [ 0 ]: Method Formo_Driver_Bool::add_class() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/container.php(146): ReflectionMethod->__construct(Object(Formo_Driver_Bool), 'add_class')
#1 /Volumes/Files/Sites/darth/bane/application/classes/model/event.php(11): Formo_Core_Container->__call('add_class', Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/event.php(11): Formo_Field->add_class(Array)
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/events.php(80): Darth\Model\Event->get_form()
#4 [internal function]: Controller_Admin_Events->action_form()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Events))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-08 15:26:24 --- ERROR: ReflectionException [ 0 ]: Method Formo_Driver_Bool::add_class() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
2012-05-08 15:26:24 --- STRACE: ReflectionException [ 0 ]: Method Formo_Driver_Bool::add_class() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/container.php(146): ReflectionMethod->__construct(Object(Formo_Driver_Bool), 'add_class')
#1 /Volumes/Files/Sites/darth/bane/application/classes/model/event.php(11): Formo_Core_Container->__call('add_class', Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/event.php(11): Formo_Field->add_class('use-time')
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/events.php(80): Darth\Model\Event->get_form()
#4 [internal function]: Controller_Admin_Events->action_form()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Events))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-08 15:26:39 --- ERROR: ErrorException [ 1 ]: Call to a member function add_class() on a non-object ~ APPPATH/classes/model/event.php [ 11 ]
2012-05-08 15:26:39 --- STRACE: ErrorException [ 1 ]: Call to a member function add_class() on a non-object ~ APPPATH/classes/model/event.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-08 15:27:49 --- ERROR: ReflectionException [ 0 ]: Method Formo_Driver_Bool::add_class() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
2012-05-08 15:27:49 --- STRACE: ReflectionException [ 0 ]: Method Formo_Driver_Bool::add_class() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/container.php(146): ReflectionMethod->__construct(Object(Formo_Driver_Bool), 'add_class')
#1 /Volumes/Files/Sites/darth/bane/application/classes/model/event.php(11): Formo_Core_Container->__call('add_class', Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/event.php(11): Formo_Field->add_class('use-time')
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/events.php(80): Darth\Model\Event->get_form()
#4 [internal function]: Controller_Admin_Events->action_form()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Events))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-08 15:28:36 --- ERROR: ReflectionException [ 0 ]: Method Formo_Driver_Input::add_class() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
2012-05-08 15:28:36 --- STRACE: ReflectionException [ 0 ]: Method Formo_Driver_Input::add_class() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/container.php(146): ReflectionMethod->__construct(Object(Formo_Driver_Input), 'add_class')
#1 /Volumes/Files/Sites/darth/bane/application/classes/model/event.php(11): Formo_Core_Container->__call('add_class', Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/event.php(11): Formo_Field->add_class('use-time')
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/events.php(80): Darth\Model\Event->get_form()
#4 [internal function]: Controller_Admin_Events->action_form()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Events))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-08 15:30:44 --- ERROR: ErrorException [ 2 ]: filemtime(): stat failed for /Volumes/Files/Sites/darth/bane/assets/less/admin.less ~ MODPATH/assets/classes/assets/core.php [ 166 ]
2012-05-08 15:30:44 --- STRACE: ErrorException [ 2 ]: filemtime(): stat failed for /Volumes/Files/Sites/darth/bane/assets/less/admin.less ~ MODPATH/assets/classes/assets/core.php [ 166 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filemtime(): st...', '/Volumes/Files/...', 166, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/assets/classes/assets/core.php(166): filemtime('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/application/classes/request.php(89): Assets_Core->styles()
#3 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(23): Request->styles()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(151): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Site->after()
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Events))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#13 {main}
2012-05-08 16:31:55 --- ERROR: ReflectionException [ 0 ]: Method Formo_Driver_Form::get_errors() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
2012-05-08 16:31:55 --- STRACE: ReflectionException [ 0 ]: Method Formo_Driver_Form::get_errors() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/container.php(146): ReflectionMethod->__construct(Object(Formo_Driver_Form), 'get_errors')
#1 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(64): Formo_Core_Container->__call('get_errors', Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/events.php(86): Formo_Core_Validator->__call('get_errors', Array)
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/events.php(86): Formo_Form->get_errors()
#4 [internal function]: Controller_Admin_Events->action_form()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Events))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-08 16:36:58 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/event.php [ 8 ]
2012-05-08 16:36:58 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/event.php [ 8 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/model/event.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Files/...', 8, Array)
#1 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/events.php(80): Darth\Model\Event->get_form()
#2 [internal function]: Controller_Admin_Events->action_form()
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Events))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#7 {main}
2012-05-08 16:37:08 --- ERROR: ErrorException [ 1 ]: Call to a member function values() on a non-object ~ APPPATH/classes/model/event.php [ 8 ]
2012-05-08 16:37:08 --- STRACE: ErrorException [ 1 ]: Call to a member function values() on a non-object ~ APPPATH/classes/model/event.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-08 16:37:54 --- ERROR: ErrorException [ 1 ]: Call to undefined method Darth\Model\Event::_data() ~ APPPATH/classes/model/event.php [ 8 ]
2012-05-08 16:37:54 --- STRACE: ErrorException [ 1 ]: Call to undefined method Darth\Model\Event::_data() ~ APPPATH/classes/model/event.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-08 16:38:47 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/event.php [ 8 ]
2012-05-08 16:38:47 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/event.php [ 8 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/model/event.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Files/...', 8, Array)
#1 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/events.php(80): Darth\Model\Event->get_form()
#2 [internal function]: Controller_Admin_Events->action_form()
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Events))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#7 {main}
2012-05-08 20:53:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-08 20:53:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
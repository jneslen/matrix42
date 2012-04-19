<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-16 09:00:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 9 ]
2012-04-16 09:00:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 9 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/breadcrumb.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 9, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/modules/breadcrumb/classes/breadcrumb/core.php(55): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(158): Breadcrumb_Core->render()
#5 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(90): Controller_Site->set_breadcrumb()
#6 [internal function]: Controller_Site->after()
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#11 {main}
2012-04-16 09:02:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 9 ]
2012-04-16 09:02:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 9 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/breadcrumb.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 9, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/modules/breadcrumb/classes/breadcrumb/core.php(55): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(158): Breadcrumb_Core->render()
#5 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(90): Controller_Site->set_breadcrumb()
#6 [internal function]: Controller_Site->after()
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#11 {main}
2012-04-16 09:02:54 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/site/views/breadcrumb.php [ 8 ]
2012-04-16 09:02:54 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/site/views/breadcrumb.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-16 09:03:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 8 ]
2012-04-16 09:03:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 8 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/breadcrumb.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 8, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/modules/breadcrumb/classes/breadcrumb/core.php(55): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(158): Breadcrumb_Core->render()
#5 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(90): Controller_Site->set_breadcrumb()
#6 [internal function]: Controller_Site->after()
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#11 {main}
2012-04-16 09:05:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 8 ]
2012-04-16 09:05:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 8 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/breadcrumb.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 8, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/modules/breadcrumb/classes/breadcrumb/core.php(55): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(158): Breadcrumb_Core->render()
#5 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(90): Controller_Site->set_breadcrumb()
#6 [internal function]: Controller_Site->after()
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#11 {main}
2012-04-16 09:05:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 8 ]
2012-04-16 09:05:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 8 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/breadcrumb.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 8, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/modules/breadcrumb/classes/breadcrumb/core.php(55): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(158): Breadcrumb_Core->render()
#5 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(90): Controller_Site->set_breadcrumb()
#6 [internal function]: Controller_Site->after()
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#11 {main}
2012-04-16 09:05:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 8 ]
2012-04-16 09:05:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 8 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/breadcrumb.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 8, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/modules/breadcrumb/classes/breadcrumb/core.php(55): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(158): Breadcrumb_Core->render()
#5 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(90): Controller_Site->set_breadcrumb()
#6 [internal function]: Controller_Site->after()
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#11 {main}
2012-04-16 09:06:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 8 ]
2012-04-16 09:06:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 8 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/breadcrumb.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 8, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/modules/breadcrumb/classes/breadcrumb/core.php(55): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(158): Breadcrumb_Core->render()
#5 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(90): Controller_Site->set_breadcrumb()
#6 [internal function]: Controller_Site->after()
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#11 {main}
2012-04-16 09:10:34 --- ERROR: View_Exception [ 0 ]: The requested view breadcrumb/breadcrumb could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-04-16 09:10:34 --- STRACE: View_Exception [ 0 ]: The requested view breadcrumb/breadcrumb could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('breadcrumb/brea...')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(30): Kohana_View->__construct('breadcrumb/brea...', NULL)
#2 /Volumes/Files/Sites/darth/bane/modules/breadcrumb/classes/breadcrumb/core.php(50): Kohana_View::factory('breadcrumb/brea...')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(158): Breadcrumb_Core->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(90): Controller_Site->set_breadcrumb()
#5 [internal function]: Controller_Site->after()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-04-16 09:11:17 --- ERROR: View_Exception [ 0 ]: The requested view my_breadcrumb could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-04-16 09:11:17 --- STRACE: View_Exception [ 0 ]: The requested view my_breadcrumb could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('my_breadcrumb')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(30): Kohana_View->__construct('my_breadcrumb', NULL)
#2 /Volumes/Files/Sites/darth/bane/modules/breadcrumb/classes/breadcrumb/core.php(50): Kohana_View::factory('my_breadcrumb')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(158): Breadcrumb_Core->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(90): Controller_Site->set_breadcrumb()
#5 [internal function]: Controller_Site->after()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-04-16 09:22:21 --- ERROR: View_Exception [ 0 ]: The requested view breadcrumb/trail could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-04-16 09:22:21 --- STRACE: View_Exception [ 0 ]: The requested view breadcrumb/trail could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('breadcrumb/trai...')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(30): Kohana_View->__construct('breadcrumb/trai...', NULL)
#2 /Volumes/Files/Sites/darth/bane/modules/breadcrumb/classes/breadcrumb/core.php(50): Kohana_View::factory('breadcrumb/trai...')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(158): Breadcrumb_Core->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(90): Controller_Site->set_breadcrumb()
#5 [internal function]: Controller_Site->after()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-04-16 09:23:03 --- ERROR: View_Exception [ 0 ]: The requested view trail could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-04-16 09:23:03 --- STRACE: View_Exception [ 0 ]: The requested view trail could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('trail')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(30): Kohana_View->__construct('trail', NULL)
#2 /Volumes/Files/Sites/darth/bane/modules/breadcrumb/classes/breadcrumb/core.php(50): Kohana_View::factory('trail')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(158): Breadcrumb_Core->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(90): Controller_Site->set_breadcrumb()
#5 [internal function]: Controller_Site->after()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-04-16 09:24:36 --- ERROR: View_Exception [ 0 ]: The requested view trail could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-04-16 09:24:36 --- STRACE: View_Exception [ 0 ]: The requested view trail could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('trail')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(30): Kohana_View->__construct('trail', NULL)
#2 /Volumes/Files/Sites/darth/bane/modules/breadcrumb/classes/breadcrumb/core.php(50): Kohana_View::factory('trail')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(158): Breadcrumb_Core->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(90): Controller_Site->set_breadcrumb()
#5 [internal function]: Controller_Site->after()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-04-16 09:30:58 --- ERROR: View_Exception [ 0 ]: The requested view breadcrumb could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-04-16 09:30:58 --- STRACE: View_Exception [ 0 ]: The requested view breadcrumb could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('breadcrumb')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(30): Kohana_View->__construct('breadcrumb', NULL)
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(93): Kohana_View::factory('breadcrumb')
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-04-16 12:08:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: top ~ APPPATH/views/banner.php [ 2 ]
2012-04-16 12:08:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: top ~ APPPATH/views/banner.php [ 2 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/banner.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 2, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(30): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(131): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-04-16 12:08:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: left ~ APPPATH/views/banner.php [ 2 ]
2012-04-16 12:08:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: left ~ APPPATH/views/banner.php [ 2 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/banner.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 2, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(30): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(131): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-04-16 12:23:36 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/site/views/public.php [ 32 ]
2012-04-16 12:23:36 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/site/views/public.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-16 13:21:42 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/public/index.php [ 11 ]
2012-04-16 13:21:42 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/public/index.php [ 11 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Files/...', 11, Array)
#1 [internal function]: Controller_Public_Index->before()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-16 13:22:09 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/public/index.php [ 11 ]
2012-04-16 13:22:09 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/controller/public/index.php [ 11 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Files/...', 11, Array)
#1 [internal function]: Controller_Public_Index->before()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-16 13:52:27 --- ERROR: ErrorException [ 1 ]: Class 'Sidebar' not found ~ MODPATH/site/classes/controller/site.php [ 124 ]
2012-04-16 13:52:27 --- STRACE: ErrorException [ 1 ]: Class 'Sidebar' not found ~ MODPATH/site/classes/controller/site.php [ 124 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-16 13:53:03 --- ERROR: ErrorException [ 1 ]: Class 'Sidebar' not found ~ MODPATH/site/classes/controller/site.php [ 124 ]
2012-04-16 13:53:03 --- STRACE: ErrorException [ 1 ]: Class 'Sidebar' not found ~ MODPATH/site/classes/controller/site.php [ 124 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-16 13:58:43 --- ERROR: ErrorException [ 4096 ]: Object of class Sidebar could not be converted to string ~ MODPATH/site/views/public.php [ 45 ]
2012-04-16 13:58:43 --- STRACE: ErrorException [ 4096 ]: Object of class Sidebar could not be converted to string ~ MODPATH/site/views/public.php [ 45 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(45): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Files/...', 45, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(136): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Site->after()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-04-16 13:59:44 --- ERROR: ErrorException [ 4096 ]: Object of class Sidebar could not be converted to string ~ MODPATH/site/views/public.php [ 45 ]
2012-04-16 13:59:44 --- STRACE: ErrorException [ 4096 ]: Object of class Sidebar could not be converted to string ~ MODPATH/site/views/public.php [ 45 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(45): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Files/...', 45, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(136): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Site->after()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-04-16 15:36:02 --- ERROR: Database_Exception [ 1146 ]: Table 'darth.menu_items' doesn't exist [ SHOW FULL COLUMNS FROM `menu_items` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-04-16 15:36:02 --- STRACE: Database_Exception [ 1146 ]: Table 'darth.menu_items' doesn't exist [ SHOW FULL COLUMNS FROM `menu_items` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu_items')
#2 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(24): Kohana_ORM::factory('menu_item')
#7 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(38): Kohana_Menu->__construct('menu/public')
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(121): Kohana_Menu::factory('public')
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-04-16 15:40:49 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/public/solutions.php [ 15 ]
2012-04-16 15:40:49 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/public/solutions.php [ 15 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(15): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Files/...', 15, Array)
#1 [internal function]: Controller_Public_Solutions->before()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-16 15:42:27 --- ERROR: Database_Exception [ 1146 ]: Table 'darth.menu_items' doesn't exist [ SHOW FULL COLUMNS FROM `menu_items` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-04-16 15:42:27 --- STRACE: Database_Exception [ 1146 ]: Table 'darth.menu_items' doesn't exist [ SHOW FULL COLUMNS FROM `menu_items` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu_items')
#2 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(24): Kohana_ORM::factory('menu_item')
#7 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(38): Kohana_Menu->__construct('menu/public')
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(121): Kohana_Menu::factory('public')
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-04-16 23:57:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-16 23:57:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
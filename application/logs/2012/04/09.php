<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-09 13:32:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-09 13:32:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-09 14:16:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::segments() ~ MODPATH/site/classes/controller/site.php [ 114 ]
2012-04-09 14:16:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::segments() ~ MODPATH/site/classes/controller/site.php [ 114 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-09 16:32:58 --- ERROR: ErrorException [ 4 ]: parse error ~ MODPATH/site/classes/controller/site.php [ 146 ]
2012-04-09 16:32:58 --- STRACE: ErrorException [ 4 ]: parse error ~ MODPATH/site/classes/controller/site.php [ 146 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-09 16:33:22 --- ERROR: ErrorException [ 4 ]: parse error ~ MODPATH/site/classes/controller/site.php [ 151 ]
2012-04-09 16:33:22 --- STRACE: ErrorException [ 4 ]: parse error ~ MODPATH/site/classes/controller/site.php [ 151 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-09 16:33:29 --- ERROR: ErrorException [ 1 ]: Class 'Breadcrumb' not found ~ MODPATH/site/classes/controller/site.php [ 158 ]
2012-04-09 16:33:29 --- STRACE: ErrorException [ 1 ]: Class 'Breadcrumb' not found ~ MODPATH/site/classes/controller/site.php [ 158 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-09 16:33:40 --- ERROR: ErrorException [ 1 ]: Class 'Breadcrumb' not found ~ MODPATH/site/classes/controller/site.php [ 158 ]
2012-04-09 16:33:40 --- STRACE: ErrorException [ 1 ]: Class 'Breadcrumb' not found ~ MODPATH/site/classes/controller/site.php [ 158 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-09 16:35:25 --- ERROR: ErrorException [ 1 ]: Class 'Breadcrumb_Core' not found ~ MODPATH/breadcrumb/classes/breadcrumb.php [ 3 ]
2012-04-09 16:35:25 --- STRACE: ErrorException [ 1 ]: Class 'Breadcrumb_Core' not found ~ MODPATH/breadcrumb/classes/breadcrumb.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-09 16:36:57 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Breadcrumb_Core::factory() must be an instance of string, string given, called in /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php on line 158 and defined ~ MODPATH/breadcrumb/classes/breadcrumb/core.php [ 25 ]
2012-04-09 16:36:57 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Breadcrumb_Core::factory() must be an instance of string, string given, called in /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php on line 158 and defined ~ MODPATH/breadcrumb/classes/breadcrumb/core.php [ 25 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/breadcrumb/classes/breadcrumb/core.php(25): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Volumes/Files/...', 25, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(158): Breadcrumb_Core::factory(Array, 'Matrix42 Soluti...')
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(90): Controller_Site->set_breadcrumb()
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-04-09 16:37:18 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Breadcrumb_Core::__construct() must be an instance of string, string given, called in /Volumes/Files/Sites/darth/bane/modules/breadcrumb/classes/breadcrumb/core.php on line 27 and defined ~ MODPATH/breadcrumb/classes/breadcrumb/core.php [ 37 ]
2012-04-09 16:37:18 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Breadcrumb_Core::__construct() must be an instance of string, string given, called in /Volumes/Files/Sites/darth/bane/modules/breadcrumb/classes/breadcrumb/core.php on line 27 and defined ~ MODPATH/breadcrumb/classes/breadcrumb/core.php [ 37 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/breadcrumb/classes/breadcrumb/core.php(37): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Volumes/Files/...', 37, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/breadcrumb/classes/breadcrumb/core.php(27): Breadcrumb_Core->__construct(Array, 'Matrix42 Soluti...')
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(158): Breadcrumb_Core::factory(Array, 'Matrix42 Soluti...')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(90): Controller_Site->set_breadcrumb()
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-04-09 16:37:27 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Assets_Core::factory(), called in /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php on line 159 and defined ~ MODPATH/assets/classes/assets/core.php [ 83 ]
2012-04-09 16:37:27 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Assets_Core::factory(), called in /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php on line 159 and defined ~ MODPATH/assets/classes/assets/core.php [ 83 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/assets/classes/assets/core.php(83): Kohana_Core::error_handler(2, 'Missing argumen...', '/Volumes/Files/...', 83, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(159): Assets_Core::factory()
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(90): Controller_Site->set_breadcrumb()
#3 [internal function]: Controller_Site->after()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-04-09 16:37:49 --- ERROR: ErrorException [ 4096 ]: Object of class Breadcrumb could not be converted to string ~ MODPATH/site/views/breadcrumb.php [ 12 ]
2012-04-09 16:37:49 --- STRACE: ErrorException [ 4096 ]: Object of class Breadcrumb could not be converted to string ~ MODPATH/site/views/breadcrumb.php [ 12 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/breadcrumb.php(12): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Files/...', 12, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(29): Kohana_View->__toString()
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
2012-04-09 16:38:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 9 ]
2012-04-09 16:38:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 9 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/breadcrumb.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 9, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/breadcrumb.php(12): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(29): Kohana_View->__toString()
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(131): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Site->after()
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#18 {main}
2012-04-09 16:43:36 --- ERROR: ErrorException [ 4096 ]: Object of class Breadcrumb could not be converted to string ~ MODPATH/site/views/breadcrumb.php [ 12 ]
2012-04-09 16:43:36 --- STRACE: ErrorException [ 4096 ]: Object of class Breadcrumb could not be converted to string ~ MODPATH/site/views/breadcrumb.php [ 12 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/breadcrumb.php(12): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Files/...', 12, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(29): Kohana_View->__toString()
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
2012-04-09 16:43:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 9 ]
2012-04-09 16:43:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 9 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/breadcrumb.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 9, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/breadcrumb.php(12): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(29): Kohana_View->__toString()
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(131): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Site->after()
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#18 {main}
2012-04-09 16:47:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 9 ]
2012-04-09 16:47:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 9 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/breadcrumb.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 9, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/breadcrumb.php(12): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(29): Kohana_View->__toString()
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(131): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Site->after()
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#18 {main}
2012-04-09 16:48:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 9 ]
2012-04-09 16:48:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 9 ]
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
2012-04-09 16:49:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 9 ]
2012-04-09 16:49:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 9 ]
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
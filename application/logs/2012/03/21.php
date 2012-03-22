<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-03-21 11:01:52 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Public_Start::$sidebar_loc ~ MODPATH/site/classes/controller/site.php [ 113 ]
2012-03-21 11:01:52 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Public_Start::$sidebar_loc ~ MODPATH/site/classes/controller/site.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(113): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Files/...', 113, Array)
#1 [internal function]: Controller_Site->after()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Start))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-03-21 11:02:16 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Public_Start::$_chat ~ MODPATH/site/classes/controller/site.php [ 118 ]
2012-03-21 11:02:16 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Public_Start::$_chat ~ MODPATH/site/classes/controller/site.php [ 118 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(118): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Files/...', 118, Array)
#1 [internal function]: Controller_Site->after()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Start))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-03-21 11:02:28 --- ERROR: ErrorException [ 2 ]: file_put_contents(/Volumes/Files/Sites/darth/bane/assets/css/public_403ce85fe6257600ee02b25c2009169e6435cfc8.css): failed to open stream: Permission denied ~ MODPATH/assets/classes/assets/core.php [ 226 ]
2012-03-21 11:02:28 --- STRACE: ErrorException [ 2 ]: file_put_contents(/Volumes/Files/Sites/darth/bane/assets/css/public_403ce85fe6257600ee02b25c2009169e6435cfc8.css): failed to open stream: Permission denied ~ MODPATH/assets/classes/assets/core.php [ 226 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/Volumes/Files/...', 226, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/assets/classes/assets/core.php(226): file_put_contents('/Volumes/Files/...', '.ui-helper-hidd...')
#2 /Volumes/Files/Sites/darth/bane/application/classes/request.php(89): Assets_Core->styles()
#3 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(22): Request->styles()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(119): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Site->after()
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Start))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#13 {main}
2012-03-21 11:03:36 --- ERROR: ErrorException [ 2 ]: file_put_contents(/Volumes/Files/Sites/darth/bane/assets/css/public_403ce85fe6257600ee02b25c2009169e6435cfc8.css): failed to open stream: Permission denied ~ MODPATH/assets/classes/assets/core.php [ 226 ]
2012-03-21 11:03:36 --- STRACE: ErrorException [ 2 ]: file_put_contents(/Volumes/Files/Sites/darth/bane/assets/css/public_403ce85fe6257600ee02b25c2009169e6435cfc8.css): failed to open stream: Permission denied ~ MODPATH/assets/classes/assets/core.php [ 226 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/Volumes/Files/...', 226, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/assets/classes/assets/core.php(226): file_put_contents('/Volumes/Files/...', '.ui-helper-hidd...')
#2 /Volumes/Files/Sites/darth/bane/application/classes/request.php(89): Assets_Core->styles()
#3 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(22): Request->styles()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(119): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Site->after()
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Start))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#13 {main}
2012-03-21 11:03:52 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/site/views/menu/user.php [ 1 ]
2012-03-21 11:03:52 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/site/views/menu/user.php [ 1 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/menu/user.php(1): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Files/...', 1, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/header.php(18): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(26): Kohana_View->__toString()
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(119): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Site->after()
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Start))
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#18 {main}
2012-03-21 11:03:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_403ce85fe6257600ee02b25c2009169e6435cfc8.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-21 11:03:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_403ce85fe6257600ee02b25c2009169e6435cfc8.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-03-21 11:03:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/matrix42-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-21 11:03:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/matrix42-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-03-21 11:03:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/matrix42-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-21 11:03:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/matrix42-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-03-21 11:03:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_403ce85fe6257600ee02b25c2009169e6435cfc8.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-21 11:03:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_403ce85fe6257600ee02b25c2009169e6435cfc8.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-03-21 11:15:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: chat ~ MODPATH/site/views/public.php [ 47 ]
2012-03-21 11:15:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: chat ~ MODPATH/site/views/public.php [ 47 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 47, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(119): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Site->after()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Start))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-03-21 11:15:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_403ce85fe6257600ee02b25c2009169e6435cfc8.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-21 11:15:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_403ce85fe6257600ee02b25c2009169e6435cfc8.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-03-21 11:15:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/matrix42-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-21 11:15:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/matrix42-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-03-21 11:15:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/matrix42-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-21 11:15:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_403ce85fe6257600ee02b25c2009169e6435cfc8.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-03-21 11:15:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/matrix42-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-03-21 11:15:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_403ce85fe6257600ee02b25c2009169e6435cfc8.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
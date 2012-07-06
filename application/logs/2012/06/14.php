<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-14 08:50:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-14 08:50:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-14 10:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-14 10:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-14 12:33:18 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Controller_Site::$_lead_form_rendered ~ MODPATH/site/classes/controller/public.php [ 126 ]
2012-06-14 12:33:18 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Controller_Site::$_lead_form_rendered ~ MODPATH/site/classes/controller/public.php [ 126 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-14 12:35:27 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Controller_Site::set_lead_form_rendered() must be an instance of bool, boolean given, called in /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php on line 126 and defined ~ MODPATH/site/classes/controller/site.php [ 287 ]
2012-06-14 12:35:27 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Controller_Site::set_lead_form_rendered() must be an instance of bool, boolean given, called in /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php on line 126 and defined ~ MODPATH/site/classes/controller/site.php [ 287 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(287): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Volumes/Files/...', 287, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(126): Controller_Site->set_lead_form_rendered(true)
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(25): Controller_Public->lead_form(true)
#3 [internal function]: Controller_Public->before()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-06-14 12:36:01 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Controller_Site::set_lead_form_rendered() must be an instance of boolean, boolean given, called in /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php on line 126 and defined ~ MODPATH/site/classes/controller/site.php [ 287 ]
2012-06-14 12:36:01 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Controller_Site::set_lead_form_rendered() must be an instance of boolean, boolean given, called in /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php on line 126 and defined ~ MODPATH/site/classes/controller/site.php [ 287 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(287): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Volumes/Files/...', 287, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(126): Controller_Site->set_lead_form_rendered(true)
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(25): Controller_Public->lead_form(true)
#3 [internal function]: Controller_Public->before()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-06-14 12:47:37 --- ERROR: ErrorException [ 8 ]: Undefined index: lead_form_rendered ~ MODPATH/site/classes/controller/public.php [ 113 ]
2012-06-14 12:47:37 --- STRACE: ErrorException [ 8 ]: Undefined index: lead_form_rendered ~ MODPATH/site/classes/controller/public.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(113): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 113, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(25): Controller_Public->lead_form(true)
#2 [internal function]: Controller_Public->before()
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#7 {main}
2012-06-14 13:29:01 --- ERROR: ErrorException [ 8 ]: Undefined index:  count ~ MODPATH/site/classes/controller/public.php [ 127 ]
2012-06-14 13:29:01 --- STRACE: ErrorException [ 8 ]: Undefined index:  count ~ MODPATH/site/classes/controller/public.php [ 127 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(127): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 127, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(25): Controller_Public->lead_form(true)
#2 [internal function]: Controller_Public->before()
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#7 {main}
2012-06-14 13:32:44 --- ERROR: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ MODPATH/site/classes/controller/public.php [ 126 ]
2012-06-14 13:32:44 --- STRACE: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ MODPATH/site/classes/controller/public.php [ 126 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-14 13:32:53 --- ERROR: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ MODPATH/site/classes/controller/public.php [ 126 ]
2012-06-14 13:32:53 --- STRACE: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ MODPATH/site/classes/controller/public.php [ 126 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-14 13:34:27 --- ERROR: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ MODPATH/site/classes/controller/public.php [ 127 ]
2012-06-14 13:34:27 --- STRACE: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ MODPATH/site/classes/controller/public.php [ 127 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
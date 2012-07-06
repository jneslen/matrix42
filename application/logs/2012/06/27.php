<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-27 14:17:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/thumbnails/press/itamreview-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-27 14:17:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/thumbnails/press/itamreview-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-27 14:17:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/thumbnails/press/itamreview-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-27 14:17:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/thumbnails/press/itamreview-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-27 14:30:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL support was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-06-27 14:30:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL support was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-06-27 14:31:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL support was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-06-27 14:31:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL support was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-06-27 14:48:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL request_a_call was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
2012-06-27 14:48:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL request_a_call was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#1 [internal function]: Controller_Public_Index->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-06-27 14:49:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL request_a_call was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
2012-06-27 14:49:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL request_a_call was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#1 [internal function]: Controller_Public_Index->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-06-27 15:11:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: pagetitle ~ MODPATH/site/views/public.php [ 14 ]
2012-06-27 15:11:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: pagetitle ~ MODPATH/site/views/public.php [ 14 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 14, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(190): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Site->after()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-11 11:05:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-11 11:05:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-11 16:41:20 --- ERROR: ErrorException [ 4 ]: parse error ~ APPPATH/views/content.php [ 4 ]
2012-06-11 16:41:20 --- STRACE: ErrorException [ 4 ]: parse error ~ APPPATH/views/content.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-11 16:45:02 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/content.php [ 2 ]
2012-06-11 16:45:02 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/content.php [ 2 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/content.php(2): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Files/...', 2, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(45): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(185): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-06-11 16:45:42 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/content.php [ 2 ]
2012-06-11 16:45:42 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/content.php [ 2 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/content.php(2): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Files/...', 2, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(45): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(185): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-06-11 16:46:10 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/content.php [ 2 ]
2012-06-11 16:46:10 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/content.php [ 2 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/content.php(2): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Files/...', 2, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(45): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(185): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-06-11 16:49:12 --- ERROR: ErrorException [ 1 ]: Call to undefined method Darth\Model\Content::replace_contents() ~ MODPATH/site/classes/controller/public.php [ 98 ]
2012-06-11 16:49:12 --- STRACE: ErrorException [ 1 ]: Call to undefined method Darth\Model\Content::replace_contents() ~ MODPATH/site/classes/controller/public.php [ 98 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-11 16:49:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method Darth\Model\Content::replace_contents() ~ MODPATH/site/classes/controller/public.php [ 98 ]
2012-06-11 16:49:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method Darth\Model\Content::replace_contents() ~ MODPATH/site/classes/controller/public.php [ 98 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-11 16:58:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method Darth\Model\Content::replace_contents() ~ MODPATH/site/classes/controller/public.php [ 98 ]
2012-06-11 16:58:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method Darth\Model\Content::replace_contents() ~ MODPATH/site/classes/controller/public.php [ 98 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
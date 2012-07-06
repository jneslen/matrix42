<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-30 12:07:14 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$language ~ MODPATH/site/classes/controller/site.php [ 55 ]
2012-05-30 12:07:14 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$language ~ MODPATH/site/classes/controller/site.php [ 55 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-30 15:39:53 --- ERROR: ErrorException [ 2 ]: preg_match(): Delimiter must not be alphanumeric or backslash ~ MODPATH/site/classes/controller/site.php [ 55 ]
2012-05-30 15:39:53 --- STRACE: ErrorException [ 2 ]: preg_match(): Delimiter must not be alphanumeric or backslash ~ MODPATH/site/classes/controller/site.php [ 55 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): D...', '/Volumes/Files/...', 55, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(55): preg_match('\.([a-z]{2,3})\...', 'http://bane/')
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(29): Controller_Site->before()
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(7): Controller_Public->before()
#4 [internal function]: Controller_Public_Index->before()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-30 15:41:23 --- ERROR: ErrorException [ 2 ]: preg_match(): Delimiter must not be alphanumeric or backslash ~ MODPATH/site/classes/controller/site.php [ 55 ]
2012-05-30 15:41:23 --- STRACE: ErrorException [ 2 ]: preg_match(): Delimiter must not be alphanumeric or backslash ~ MODPATH/site/classes/controller/site.php [ 55 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): D...', '/Volumes/Files/...', 55, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(55): preg_match('\.([a-z]{2,3})\...', 'http://bane/', NULL)
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(29): Controller_Site->before()
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(7): Controller_Public->before()
#4 [internal function]: Controller_Public_Index->before()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-30 15:41:43 --- ERROR: ErrorException [ 2 ]: preg_match(): Delimiter must not be alphanumeric or backslash ~ MODPATH/site/classes/controller/site.php [ 55 ]
2012-05-30 15:41:43 --- STRACE: ErrorException [ 2 ]: preg_match(): Delimiter must not be alphanumeric or backslash ~ MODPATH/site/classes/controller/site.php [ 55 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): D...', '/Volumes/Files/...', 55, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(55): preg_match('\.([a-z]{2,3})\...', 'http://bane/', NULL)
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(29): Controller_Site->before()
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(7): Controller_Public->before()
#4 [internal function]: Controller_Public_Index->before()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-30 15:43:05 --- ERROR: ErrorException [ 2 ]: preg_match(): Delimiter must not be alphanumeric or backslash ~ MODPATH/site/classes/controller/site.php [ 56 ]
2012-05-30 15:43:05 --- STRACE: ErrorException [ 2 ]: preg_match(): Delimiter must not be alphanumeric or backslash ~ MODPATH/site/classes/controller/site.php [ 56 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): D...', '/Volumes/Files/...', 56, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(56): preg_match('\.([a-z]{2,3})\...', 'http://bane/', NULL)
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(29): Controller_Site->before()
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(7): Controller_Public->before()
#4 [internal function]: Controller_Public_Index->before()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-30 15:43:32 --- ERROR: ErrorException [ 2 ]: preg_match(): No ending delimiter '.' found ~ MODPATH/site/classes/controller/site.php [ 56 ]
2012-05-30 15:43:32 --- STRACE: ErrorException [ 2 ]: preg_match(): No ending delimiter '.' found ~ MODPATH/site/classes/controller/site.php [ 56 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): N...', '/Volumes/Files/...', 56, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(56): preg_match('.([a-z]{2,3})/?...', 'http://bane/', NULL)
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(29): Controller_Site->before()
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(7): Controller_Public->before()
#4 [internal function]: Controller_Public_Index->before()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-30 15:43:45 --- ERROR: ErrorException [ 2 ]: preg_match(): No ending delimiter '^' found ~ MODPATH/site/classes/controller/site.php [ 56 ]
2012-05-30 15:43:45 --- STRACE: ErrorException [ 2 ]: preg_match(): No ending delimiter '^' found ~ MODPATH/site/classes/controller/site.php [ 56 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): N...', '/Volumes/Files/...', 56, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(56): preg_match('^([a-z]{2,3})/?...', 'http://bane/', NULL)
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(29): Controller_Site->before()
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(7): Controller_Public->before()
#4 [internal function]: Controller_Public_Index->before()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-30 15:43:59 --- ERROR: ErrorException [ 2 ]: preg_match(): Delimiter must not be alphanumeric or backslash ~ MODPATH/site/classes/controller/site.php [ 56 ]
2012-05-30 15:43:59 --- STRACE: ErrorException [ 2 ]: preg_match(): Delimiter must not be alphanumeric or backslash ~ MODPATH/site/classes/controller/site.php [ 56 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): D...', '/Volumes/Files/...', 56, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(56): preg_match('\.([a-z]{2,3})/...', 'http://bane/', NULL)
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(29): Controller_Site->before()
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(7): Controller_Public->before()
#4 [internal function]: Controller_Public_Index->before()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-30 15:45:37 --- ERROR: ErrorException [ 2 ]: preg_match(): Unknown modifier '?' ~ MODPATH/site/classes/controller/site.php [ 56 ]
2012-05-30 15:45:37 --- STRACE: ErrorException [ 2 ]: preg_match(): Unknown modifier '?' ~ MODPATH/site/classes/controller/site.php [ 56 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): U...', '/Volumes/Files/...', 56, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(56): preg_match('/.([a-z]{2,3})/...', 'http://bane/', NULL)
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(29): Controller_Site->before()
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(7): Controller_Public->before()
#4 [internal function]: Controller_Public_Index->before()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-30 17:21:31 --- ERROR: View_Exception [ 0 ]: The requested view de/banner could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-30 17:21:31 --- STRACE: View_Exception [ 0 ]: The requested view de/banner could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('de/banner')
#1 /Volumes/Files/Sites/darth/bane/application/classes/view.php(12): Kohana_View->__construct('de/banner', NULL)
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(15): View::factory('banner')
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(7): Controller_Public->before()
#4 [internal function]: Controller_Public_Index->before()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-30 17:22:50 --- ERROR: View_Exception [ 0 ]: The requested view de/public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-30 17:22:50 --- STRACE: View_Exception [ 0 ]: The requested view de/public could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('de/public')
#1 /Volumes/Files/Sites/darth/bane/application/classes/view.php(12): Kohana_View->__construct('de/public', NULL)
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(33): View::factory('public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(54): Kohana_Controller_Template->before()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(29): Controller_Site->before()
#5 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(7): Controller_Public->before()
#6 [internal function]: Controller_Public_Index->before()
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#11 {main}
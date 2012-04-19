<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-13 15:09:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 9 ]
2012-04-13 15:09:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: breadcrumb_content ~ MODPATH/site/views/breadcrumb.php [ 9 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/breadcrumb.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 9, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/modules/breadcrumb/classes/breadcrumb/core.php(55): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(158): Breadcrumb_Core->render()
#5 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(90): Controller_Site->set_breadcrumb()
#6 [internal function]: Controller_Site->after()
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#11 {main}
<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-22 16:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions/login was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 53 ]
2012-05-22 16:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions/login was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 53 ]
--
#0 [internal function]: Controller_Public->action_index()
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#5 {main}
2012-05-22 16:55:28 --- ERROR: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/controller/admin/leads.php [ 171 ]
2012-05-22 16:55:28 --- STRACE: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/controller/admin/leads.php [ 171 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-22 16:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-22 16:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-22 16:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-22 16:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-22 17:00:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-22 17:00:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-22 17:00:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-22 17:00:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-22 17:01:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-22 17:01:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
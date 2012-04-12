<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-04 09:48:46 --- ERROR: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH/classes/kohana/view.php [ 339 ]
2012-04-04 09:48:46 --- STRACE: View_Exception [ 0 ]: You must set the file to use within your view before rendering ~ SYSPATH/classes/kohana/view.php [ 339 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#1 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(32): Kohana_View->__toString()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(124): Kohana_Controller_Template->after()
#6 [internal function]: Controller_Site->after()
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#11 {main}
2012-04-04 09:58:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap/carousel.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-04 09:58:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap/carousel.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-04 09:58:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap/carousel.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-04 09:58:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap/carousel.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-04 10:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap/scrollspy.js.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-04 10:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap/scrollspy.js.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-04 10:59:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap/scrollspy.js.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-04 10:59:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap/scrollspy.js.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-04 10:59:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap/scrollspy.js.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-04 10:59:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap/scrollspy.js.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-04 10:59:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap/scrollspy.js.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-04 10:59:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/bootstrap/scrollspy.js.js ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-04 15:55:54 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/site/classes/controller/site.php [ 90 ]
2012-04-04 15:55:54 --- STRACE: ErrorException [ 2 ]: Attempt to assign property of non-object ~ MODPATH/site/classes/controller/site.php [ 90 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(90): Kohana_Core::error_handler(2, 'Attempt to assi...', '/Volumes/Files/...', 90, Array)
#1 [internal function]: Controller_Site->after()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-04 23:02:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-04 23:02:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
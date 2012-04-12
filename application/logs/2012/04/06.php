<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-06 08:44:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-06 08:44:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-06 14:52:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/solid-aaa.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-06 14:52:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/solid-aaa.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-06 14:52:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/solid-aaa.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-06 14:52:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/solid-aaa.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-06 15:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/solid-aaa.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-06 15:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/solid-aaa.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-06 15:04:48 --- ERROR: Exception [ 0 ]: parse error: failed at `.margin-top: 10px;` line: 1172 ~ MODPATH/assets/vendor/lessphp/lessc.inc.php [ 2296 ]
2012-04-06 15:04:48 --- STRACE: Exception [ 0 ]: parse error: failed at `.margin-top: 10px;` line: 1172 ~ MODPATH/assets/vendor/lessphp/lessc.inc.php [ 2296 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/assets/vendor/lessphp/lessc.inc.php(2242): lessc->throwError()
#1 /Volumes/Files/Sites/darth/bane/modules/assets/vendor/lessphp/lessc.inc.php(2272): lessc->parseTree('#home-banner {?...')
#2 /Volumes/Files/Sites/darth/bane/modules/assets/classes/assets/core.php(218): lessc->parse('#home-banner {?...')
#3 /Volumes/Files/Sites/darth/bane/application/classes/request.php(89): Assets_Core->styles()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(23): Request->styles()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(129): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
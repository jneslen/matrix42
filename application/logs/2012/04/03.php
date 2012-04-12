<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-03 08:28:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-03 08:28:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-03 09:01:49 --- ERROR: Exception [ 0 ]: parse error: failed at `.img(@height; @width) {` line: 27 ~ MODPATH/assets/vendor/lessphp/lessc.inc.php [ 2296 ]
2012-04-03 09:01:49 --- STRACE: Exception [ 0 ]: parse error: failed at `.img(@height; @width) {` line: 27 ~ MODPATH/assets/vendor/lessphp/lessc.inc.php [ 2296 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/assets/vendor/lessphp/lessc.inc.php(2242): lessc->throwError()
#1 /Volumes/Files/Sites/darth/bane/modules/assets/vendor/lessphp/lessc.inc.php(2272): lessc->parseTree('@img_path: '/as...')
#2 /Volumes/Files/Sites/darth/bane/modules/assets/classes/assets/core.php(218): lessc->parse('@img_path: '/as...')
#3 /Volumes/Files/Sites/darth/bane/application/classes/request.php(89): Assets_Core->styles()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(26): Request->styles()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(154): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-04-03 10:29:23 --- ERROR: Exception [ 0 ]: parse error: failed at `(~".span@{index}") { .span(@index); }` line: 1664 ~ MODPATH/assets/vendor/lessphp/lessc.inc.php [ 2296 ]
2012-04-03 10:29:23 --- STRACE: Exception [ 0 ]: parse error: failed at `(~".span@{index}") { .span(@index); }` line: 1664 ~ MODPATH/assets/vendor/lessphp/lessc.inc.php [ 2296 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/assets/vendor/lessphp/lessc.inc.php(2242): lessc->throwError()
#1 /Volumes/Files/Sites/darth/bane/modules/assets/vendor/lessphp/lessc.inc.php(2272): lessc->parseTree('@img_path: '/as...')
#2 /Volumes/Files/Sites/darth/bane/modules/assets/classes/assets/core.php(218): lessc->parse('@img_path: '/as...')
#3 /Volumes/Files/Sites/darth/bane/application/classes/request.php(89): Assets_Core->styles()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(22): Request->styles()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(154): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-04-03 10:30:19 --- ERROR: Exception [ 0 ]: parse error: failed at `(~".span@{index}") { .span(@index); }` line: 1664 ~ MODPATH/assets/vendor/lessphp/lessc.inc.php [ 2296 ]
2012-04-03 10:30:19 --- STRACE: Exception [ 0 ]: parse error: failed at `(~".span@{index}") { .span(@index); }` line: 1664 ~ MODPATH/assets/vendor/lessphp/lessc.inc.php [ 2296 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/assets/vendor/lessphp/lessc.inc.php(2242): lessc->throwError()
#1 /Volumes/Files/Sites/darth/bane/modules/assets/vendor/lessphp/lessc.inc.php(2272): lessc->parseTree('@img_path: '/as...')
#2 /Volumes/Files/Sites/darth/bane/modules/assets/classes/assets/core.php(218): lessc->parse('@img_path: '/as...')
#3 /Volumes/Files/Sites/darth/bane/application/classes/request.php(89): Assets_Core->styles()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(22): Request->styles()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(154): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-04-03 10:30:51 --- ERROR: Exception [ 0 ]: parse error: failed at `(~".span@{index}") { .span(@index); }` line: 1664 ~ MODPATH/assets/vendor/lessphp/lessc.inc.php [ 2296 ]
2012-04-03 10:30:51 --- STRACE: Exception [ 0 ]: parse error: failed at `(~".span@{index}") { .span(@index); }` line: 1664 ~ MODPATH/assets/vendor/lessphp/lessc.inc.php [ 2296 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/assets/vendor/lessphp/lessc.inc.php(2242): lessc->throwError()
#1 /Volumes/Files/Sites/darth/bane/modules/assets/vendor/lessphp/lessc.inc.php(2272): lessc->parseTree('@img_path: '/as...')
#2 /Volumes/Files/Sites/darth/bane/modules/assets/classes/assets/core.php(218): lessc->parse('@img_path: '/as...')
#3 /Volumes/Files/Sites/darth/bane/application/classes/request.php(89): Assets_Core->styles()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(22): Request->styles()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(154): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-04-03 10:31:07 --- ERROR: Exception [ 0 ]: parse error: failed at `(~".offset@{index}") { .offset(@index); }` line: 1672 ~ MODPATH/assets/vendor/lessphp/lessc.inc.php [ 2296 ]
2012-04-03 10:31:07 --- STRACE: Exception [ 0 ]: parse error: failed at `(~".offset@{index}") { .offset(@index); }` line: 1672 ~ MODPATH/assets/vendor/lessphp/lessc.inc.php [ 2296 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/assets/vendor/lessphp/lessc.inc.php(2242): lessc->throwError()
#1 /Volumes/Files/Sites/darth/bane/modules/assets/vendor/lessphp/lessc.inc.php(2272): lessc->parseTree('@img_path: '/as...')
#2 /Volumes/Files/Sites/darth/bane/modules/assets/classes/assets/core.php(218): lessc->parse('@img_path: '/as...')
#3 /Volumes/Files/Sites/darth/bane/application/classes/request.php(89): Assets_Core->styles()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(22): Request->styles()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(154): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-04-03 16:09:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/{@img_path}nav-active.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-03 16:09:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/{@img_path}nav-active.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-03 16:10:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/{@img_path}nav-active.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-03 16:10:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/{@img_path}nav-active.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-03 16:10:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/{@img_path}nav-active.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-03 16:10:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/{@img_path}nav-active.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-03 16:10:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/@img_pathnav-active.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-03 16:10:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/@img_pathnav-active.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-03 16:12:48 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/site/views/header.php [ 8 ]
2012-04-03 16:12:48 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/site/views/header.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-03 16:12:56 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/site/views/header.php [ 8 ]
2012-04-03 16:12:56 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/site/views/header.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-03 16:13:04 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/site/views/header.php [ 8 ]
2012-04-03 16:13:04 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/site/views/header.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-03 16:39:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: banner ~ MODPATH/site/views/public.php [ 32 ]
2012-04-03 16:39:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: banner ~ MODPATH/site/views/public.php [ 32 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 32, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(120): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Site->after()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
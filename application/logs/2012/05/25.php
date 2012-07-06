<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-25 08:34:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-25 08:34:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-25 14:13:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-25 14:13:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-25 14:13:33 --- ERROR: ErrorException [ 2 ]: opendir(/assets/img/banners): failed to open dir: No such file or directory ~ APPPATH/classes/helper.php [ 11 ]
2012-05-25 14:13:33 --- STRACE: ErrorException [ 2 ]: opendir(/assets/img/banners): failed to open dir: No such file or directory ~ APPPATH/classes/helper.php [ 11 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/assets...', '/Volumes/Files/...', 11, Array)
#1 /Volumes/Files/Sites/darth/bane/application/classes/helper.php(11): opendir('/assets/img/ban...')
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(39): Helper::directory_list('/assets/img/ban...')
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/cms.php(60): Darth\Model\Menu->get_form()
#4 [internal function]: Controller_Admin_Cms->action_form()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Cms))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-25 14:13:43 --- ERROR: ErrorException [ 2 ]: opendir(/assets/img/banners): failed to open dir: No such file or directory ~ APPPATH/classes/helper.php [ 11 ]
2012-05-25 14:13:43 --- STRACE: ErrorException [ 2 ]: opendir(/assets/img/banners): failed to open dir: No such file or directory ~ APPPATH/classes/helper.php [ 11 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/assets...', '/Volumes/Files/...', 11, Array)
#1 /Volumes/Files/Sites/darth/bane/application/classes/helper.php(11): opendir('/assets/img/ban...')
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(39): Helper::directory_list('/assets/img/ban...')
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/cms.php(60): Darth\Model\Menu->get_form()
#4 [internal function]: Controller_Admin_Cms->action_form()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Cms))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-25 14:26:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-25 14:26:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
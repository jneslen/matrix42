<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-20 08:51:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-20 08:51:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-20 10:00:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL solutions/byod was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
2012-06-20 10:00:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL solutions/byod was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#1 [internal function]: Controller_Public_Index->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-06-20 11:06:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/awards was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-06-20 11:06:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/awards was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-06-20 13:07:38 --- ERROR: Exception [ 0 ]: Specified key (a_classes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-06-20 13:07:38 --- STRACE: Exception [ 0 ]: Specified key (a_classes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(68): Kacela\Model\Model->__get('a_classes')
#1 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(29): Kohana_Menu->get_from_database(Object(Kacela\Collection))
#2 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(168): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Events))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-06-20 13:07:54 --- ERROR: Exception [ 0 ]: Specified key (a_classes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-06-20 13:07:54 --- STRACE: Exception [ 0 ]: Specified key (a_classes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(68): Kacela\Model\Model->__get('a_classes')
#1 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(29): Kohana_Menu->get_from_database(Object(Kacela\Collection))
#2 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(168): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-06-20 15:08:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-20 15:08:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-20 15:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-20 15:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-20 15:44:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-20 15:44:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-20 16:50:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-20 16:50:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-20 16:51:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-20 16:51:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-20 16:52:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-20 16:52:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-20 16:52:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-20 16:52:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-20 16:53:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-20 16:53:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
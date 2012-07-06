<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-02 12:16:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: chat ~ MODPATH/site/views/sidebar/support.php [ 7 ]
2012-07-02 12:16:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: chat ~ MODPATH/site/views/sidebar/support.php [ 7 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/sidebar/support.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 7, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 [internal function]: Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(61): str_replace('%%sidebarsuppor...', Object(View), '%%sidebarleadfo...')
#6 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(18): Komponent_Core->replace(Object(Darth\Model\Content))
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(97): Darth\Model\Menu->get_content('sidebar')
#8 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#9 [internal function]: Controller_Public_Index->action_index()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-07-02 12:18:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: chat ~ MODPATH/site/views/sidebar/support.php [ 7 ]
2012-07-02 12:18:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: chat ~ MODPATH/site/views/sidebar/support.php [ 7 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/sidebar/support.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 7, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 [internal function]: Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(61): str_replace('%%sidebarsuppor...', Object(View), '%%sidebarleadfo...')
#6 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(18): Komponent_Core->replace(Object(Darth\Model\Content))
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(97): Darth\Model\Menu->get_content('sidebar')
#8 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#9 [internal function]: Controller_Public_Index->action_index()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-07-02 12:21:05 --- ERROR: View_Exception [ 0 ]: The requested view sidebar\support could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-02 12:21:05 --- STRACE: View_Exception [ 0 ]: The requested view sidebar\support could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('sidebar\support')
#1 /Volumes/Files/Sites/darth/bane/application/classes/view.php(12): Kohana_View->__construct('sidebar\support', NULL)
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(153): View::factory('sidebar\support')
#3 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->side_support()
#4 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(18): Komponent_Core->replace(Object(Darth\Model\Content))
#5 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(97): Darth\Model\Menu->get_content('sidebar')
#6 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#7 [internal function]: Controller_Public_Index->action_index()
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#12 {main}
2012-07-02 12:21:08 --- ERROR: View_Exception [ 0 ]: The requested view sidebar\support could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-07-02 12:21:08 --- STRACE: View_Exception [ 0 ]: The requested view sidebar\support could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('sidebar\support')
#1 /Volumes/Files/Sites/darth/bane/application/classes/view.php(12): Kohana_View->__construct('sidebar\support', NULL)
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(153): View::factory('sidebar\support')
#3 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->side_support()
#4 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(18): Komponent_Core->replace(Object(Darth\Model\Content))
#5 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(97): Darth\Model\Menu->get_content('sidebar')
#6 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#7 [internal function]: Controller_Public_Index->action_index()
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#12 {main}
2012-07-02 12:23:37 --- ERROR: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$boldchat ~ MODPATH/boldchat/classes/boldchat/core.php [ 20 ]
2012-07-02 12:23:37 --- STRACE: ErrorException [ 1 ]: Access to undeclared static property: Kohana::$boldchat ~ MODPATH/boldchat/classes/boldchat/core.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-02 12:36:12 --- ERROR: ErrorException [ 4096 ]: Object of class Boldchat could not be converted to string ~ MODPATH/site/views/sidebar/support.php [ 7 ]
2012-07-02 12:36:12 --- STRACE: ErrorException [ 4096 ]: Object of class Boldchat could not be converted to string ~ MODPATH/site/views/sidebar/support.php [ 7 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/sidebar/support.php(7): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Files/...', 7, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 [internal function]: Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(50): str_replace('%%sidebarsuppor...', Object(View), '%%sidebarleadfo...')
#6 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(18): Komponent_Core->replace(Object(Darth\Model\Content))
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(97): Darth\Model\Menu->get_content('sidebar')
#8 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#9 [internal function]: Controller_Public_Index->action_index()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-07-02 12:38:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/{@bold_chat} was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
2012-07-02 12:38:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/{@bold_chat} was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#1 [internal function]: Controller_Public_Index->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-07-02 12:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/{@bold_chat} was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
2012-07-02 12:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/{@bold_chat} was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#1 [internal function]: Controller_Public_Index->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-07-02 12:41:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/{@bold_chat} was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
2012-07-02 12:41:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/{@bold_chat} was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#1 [internal function]: Controller_Public_Index->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-07-02 12:43:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/{@bold_chat} was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
2012-07-02 12:43:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/{@bold_chat} was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#1 [internal function]: Controller_Public_Index->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-07-02 12:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/{@bold_chat} was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
2012-07-02 12:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/{@bold_chat} was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#1 [internal function]: Controller_Public_Index->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-07-02 12:46:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/{@bold_chat} was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
2012-07-02 12:46:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/{@bold_chat} was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#1 [internal function]: Controller_Public_Index->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-07-02 12:46:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/{@bold_chat} was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
2012-07-02 12:46:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL assets/css/{@bold_chat} was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#1 [internal function]: Controller_Public_Index->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
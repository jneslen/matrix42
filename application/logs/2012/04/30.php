<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-30 10:26:28 --- ERROR: ErrorException [ 1 ]: Class 'Komponent' not found ~ APPPATH/classes/model/menu.php [ 33 ]
2012-04-30 10:26:28 --- STRACE: ErrorException [ 1 ]: Class 'Komponent' not found ~ APPPATH/classes/model/menu.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-30 10:31:17 --- ERROR: ErrorException [ 8 ]: Undefined property: Darth\Model\Menu::$contents ~ APPPATH/classes/model/menu.php [ 33 ]
2012-04-30 10:31:17 --- STRACE: ErrorException [ 8 ]: Undefined property: Darth\Model\Menu::$contents ~ APPPATH/classes/model/menu.php [ 33 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(33): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Files/...', 33, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(29): Darth\Model\Menu->_get_contents()
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(10): Kacela\Model\Model->__get('contents')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(64): Darth\Model\Menu->get_content('banner')
#4 [internal function]: Controller_Public->action_index()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-04-30 10:33:27 --- ERROR: ErrorException [ 8 ]: Undefined property: Darth\Model\Menu::$contents ~ APPPATH/classes/model/menu.php [ 33 ]
2012-04-30 10:33:27 --- STRACE: ErrorException [ 8 ]: Undefined property: Darth\Model\Menu::$contents ~ APPPATH/classes/model/menu.php [ 33 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(33): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Files/...', 33, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(29): Darth\Model\Menu->_get_contents()
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(10): Kacela\Model\Model->__get('contents')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(64): Darth\Model\Menu->get_content('banner')
#4 [internal function]: Controller_Public->action_index()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-04-30 10:33:40 --- ERROR: Exception [ 0 ]: Specified key (content) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-30 10:33:40 --- STRACE: Exception [ 0 ]: Specified key (content) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(33): Kacela\Model\Model->__get('content')
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(29): Darth\Model\Menu->_get_contents()
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(10): Kacela\Model\Model->__get('contents')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(64): Darth\Model\Menu->get_content('banner')
#4 [internal function]: Controller_Public->action_index()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-04-30 10:33:49 --- ERROR: ErrorException [ 8 ]: Undefined property: Darth\Model\Menu::$contents ~ APPPATH/classes/model/menu.php [ 33 ]
2012-04-30 10:33:49 --- STRACE: ErrorException [ 8 ]: Undefined property: Darth\Model\Menu::$contents ~ APPPATH/classes/model/menu.php [ 33 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(33): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Files/...', 33, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(29): Darth\Model\Menu->_get_contents()
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(10): Kacela\Model\Model->__get('contents')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(64): Darth\Model\Menu->get_content('banner')
#4 [internal function]: Controller_Public->action_index()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-04-30 10:53:16 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Komponent_Core::replace() must be an instance of object, instance of Darth\Model\Content given, called in /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php on line 15 and defined ~ MODPATH/komponent/classes/komponent/core.php [ 36 ]
2012-04-30 10:53:16 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Komponent_Core::replace() must be an instance of object, instance of Darth\Model\Content given, called in /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php on line 15 and defined ~ MODPATH/komponent/classes/komponent/core.php [ 36 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(36): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Volumes/Files/...', 36, Array)
#1 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(15): Komponent_Core->replace(Object(Darth\Model\Content))
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->get_content('main')
#3 [internal function]: Controller_Public->action_index()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-04-30 10:58:42 --- ERROR: ErrorException [ 4096 ]: Object of class Darth\Model\Component could not be converted to string ~ MODPATH/komponent/classes/komponent/core.php [ 47 ]
2012-04-30 10:58:42 --- STRACE: ErrorException [ 4096 ]: Object of class Darth\Model\Component could not be converted to string ~ MODPATH/komponent/classes/komponent/core.php [ 47 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(47): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Files/...', 47, Array)
#1 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(15): Komponent_Core->replace(Object(Darth\Model\Content))
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->get_content('main')
#3 [internal function]: Controller_Public->action_index()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-04-30 10:59:36 --- ERROR: ErrorException [ 1 ]: Call to a member function lead_form() on a non-object ~ MODPATH/komponent/classes/komponent/core.php [ 47 ]
2012-04-30 10:59:36 --- STRACE: ErrorException [ 1 ]: Call to a member function lead_form() on a non-object ~ MODPATH/komponent/classes/komponent/core.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-30 11:00:26 --- ERROR: ErrorException [ 1 ]: Call to a member function lead_form() on a non-object ~ MODPATH/komponent/classes/komponent/core.php [ 47 ]
2012-04-30 11:00:26 --- STRACE: ErrorException [ 1 ]: Call to a member function lead_form() on a non-object ~ MODPATH/komponent/classes/komponent/core.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-30 11:01:25 --- ERROR: ErrorException [ 1 ]: Class 'public' not found ~ MODPATH/komponent/classes/komponent/core.php [ 47 ]
2012-04-30 11:01:25 --- STRACE: ErrorException [ 1 ]: Class 'public' not found ~ MODPATH/komponent/classes/komponent/core.php [ 47 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-30 11:03:22 --- ERROR: ErrorException [ 8 ]: Undefined property: Komponent::$request ~ MODPATH/komponent/classes/komponent/core.php [ 48 ]
2012-04-30 11:03:22 --- STRACE: ErrorException [ 8 ]: Undefined property: Komponent::$request ~ MODPATH/komponent/classes/komponent/core.php [ 48 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(48): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Files/...', 48, Array)
#1 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(15): Komponent_Core->replace(Object(Darth\Model\Content))
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->get_content('main')
#3 [internal function]: Controller_Public->action_index()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-04-30 11:11:04 --- ERROR: ErrorException [ 8 ]: Undefined property: Darth\Model\Menu::$contents ~ APPPATH/classes/model/menu.php [ 34 ]
2012-04-30 11:11:04 --- STRACE: ErrorException [ 8 ]: Undefined property: Darth\Model\Menu::$contents ~ APPPATH/classes/model/menu.php [ 34 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(34): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Files/...', 34, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(29): Darth\Model\Menu->_get_contents()
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(11): Kacela\Model\Model->__get('contents')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(64): Darth\Model\Menu->get_content('banner')
#4 [internal function]: Controller_Public->action_index()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-04-30 11:14:15 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Komponent_Core::replace() must be an instance of Darth\Model\Content, null given, called in /Volumes/Files/Sites/darth/bane/application/classes/model/content.php on line 8 and defined ~ MODPATH/komponent/classes/komponent/core.php [ 36 ]
2012-04-30 11:14:15 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Komponent_Core::replace() must be an instance of Darth\Model\Content, null given, called in /Volumes/Files/Sites/darth/bane/application/classes/model/content.php on line 8 and defined ~ MODPATH/komponent/classes/komponent/core.php [ 36 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(36): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Volumes/Files/...', 36, Array)
#1 /Volumes/Files/Sites/darth/bane/application/classes/model/content.php(8): Komponent_Core->replace(NULL)
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(29): Darth\Model\Content->_get_content()
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(65): Kacela\Model\Model->__get('content')
#4 [internal function]: Controller_Public->action_index()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-04-30 11:18:19 --- ERROR: ErrorException [ 8 ]: Undefined property: Darth\Model\Menu::$contents ~ APPPATH/classes/model/menu.php [ 34 ]
2012-04-30 11:18:19 --- STRACE: ErrorException [ 8 ]: Undefined property: Darth\Model\Menu::$contents ~ APPPATH/classes/model/menu.php [ 34 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(34): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Files/...', 34, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(29): Darth\Model\Menu->_get_contents()
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(11): Kacela\Model\Model->__get('contents')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(64): Darth\Model\Menu->get_content('banner')
#4 [internal function]: Controller_Public->action_index()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-04-30 16:52:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-30 16:52:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
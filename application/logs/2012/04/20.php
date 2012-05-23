<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-20 08:40:01 --- ERROR: ErrorException [ 1 ]: Call to undefined method Darth\Model\Menu::debug() ~ APPPATH/classes/controller/public/solutions.php [ 22 ]
2012-04-20 08:40:01 --- STRACE: ErrorException [ 1 ]: Call to undefined method Darth\Model\Menu::debug() ~ APPPATH/classes/controller/public/solutions.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-20 08:43:13 --- ERROR: ErrorException [ 1 ]: Call to undefined method Darth\Model\Menu::last_query() ~ APPPATH/classes/controller/public/solutions.php [ 22 ]
2012-04-20 08:43:13 --- STRACE: ErrorException [ 1 ]: Call to undefined method Darth\Model\Menu::last_query() ~ APPPATH/classes/controller/public/solutions.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-20 08:43:23 --- ERROR: Exception [ 0 ]: Specified key (mapper) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-20 08:43:23 --- STRACE: Exception [ 0 ]: Specified key (mapper) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(22): Kacela\Model\Model->__get('mapper')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-20 08:43:35 --- ERROR: Exception [ 0 ]: Specified key (_mapper) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-20 08:43:35 --- STRACE: Exception [ 0 ]: Specified key (_mapper) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(22): Kacela\Model\Model->__get('_mapper')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-20 08:44:40 --- ERROR: ErrorException [ 4 ]: parse error, expecting `T_STRING' or `T_VARIABLE' or `'{'' or `'$'' ~ APPPATH/classes/controller/public/solutions.php [ 24 ]
2012-04-20 08:44:40 --- STRACE: ErrorException [ 4 ]: parse error, expecting `T_STRING' or `T_VARIABLE' or `'{'' or `'$'' ~ APPPATH/classes/controller/public/solutions.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-20 08:46:48 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kacela\Criteria::debug() ~ APPPATH/classes/controller/public/solutions.php [ 21 ]
2012-04-20 08:46:48 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kacela\Criteria::debug() ~ APPPATH/classes/controller/public/solutions.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-20 08:50:09 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kacela\Criteria::assemble() ~ APPPATH/classes/controller/public/solutions.php [ 21 ]
2012-04-20 08:50:09 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kacela\Criteria::assemble() ~ APPPATH/classes/controller/public/solutions.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-20 08:50:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Darth\Model\Menu::assemble() ~ APPPATH/classes/controller/public/solutions.php [ 24 ]
2012-04-20 08:50:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Darth\Model\Menu::assemble() ~ APPPATH/classes/controller/public/solutions.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-20 08:52:33 --- ERROR: ErrorException [ 1 ]: Call to undefined method Darth\Model\Menu::debug() ~ APPPATH/classes/kacela.php [ 17 ]
2012-04-20 08:52:33 --- STRACE: ErrorException [ 1 ]: Call to undefined method Darth\Model\Menu::debug() ~ APPPATH/classes/kacela.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-20 08:54:48 --- ERROR: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-20 08:54:48 --- STRACE: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(24): Kacela\Model\Model->__get('contents')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-20 08:54:57 --- ERROR: Exception [ 0 ]: Specified key (content) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-20 08:54:57 --- STRACE: Exception [ 0 ]: Specified key (content) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(24): Kacela\Model\Model->__get('content')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-20 08:58:48 --- ERROR: Exception [ 0 ]: Specified key (content) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-20 08:58:48 --- STRACE: Exception [ 0 ]: Specified key (content) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(24): Kacela\Model\Model->__get('content')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-20 09:00:12 --- ERROR: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-20 09:00:12 --- STRACE: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(24): Kacela\Model\Model->__get('contents')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-20 09:01:42 --- ERROR: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-20 09:01:42 --- STRACE: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(24): Kacela\Model\Model->__get('contents')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-20 09:01:46 --- ERROR: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-20 09:01:46 --- STRACE: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(24): Kacela\Model\Model->__get('contents')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-20 09:02:08 --- ERROR: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-20 09:02:08 --- STRACE: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(24): Kacela\Model\Model->__get('contents')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-20 09:02:10 --- ERROR: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-20 09:02:10 --- STRACE: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(24): Kacela\Model\Model->__get('contents')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-20 09:08:45 --- ERROR: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-20 09:08:45 --- STRACE: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(24): Kacela\Model\Model->__get('contents')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-20 09:08:46 --- ERROR: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-20 09:08:46 --- STRACE: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(24): Kacela\Model\Model->__get('contents')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-20 09:08:47 --- ERROR: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-20 09:08:47 --- STRACE: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(24): Kacela\Model\Model->__get('contents')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-20 09:15:30 --- ERROR: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-20 09:15:30 --- STRACE: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(24): Kacela\Model\Model->__get('contents')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-20 09:15:45 --- ERROR: Exception [ 0 ]: Specified key (_contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-20 09:15:45 --- STRACE: Exception [ 0 ]: Specified key (_contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(24): Kacela\Model\Model->__get('_contents')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-20 09:26:35 --- ERROR: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-20 09:26:35 --- STRACE: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(24): Kacela\Model\Model->__get('contents')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-20 09:34:10 --- ERROR: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-20 09:34:10 --- STRACE: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(24): Kacela\Model\Model->__get('contents')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-20 09:34:31 --- ERROR: Exception [ 0 ]: Specified key (content) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-20 09:34:31 --- STRACE: Exception [ 0 ]: Specified key (content) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(24): Kacela\Model\Model->__get('content')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-20 09:37:19 --- ERROR: Exception [ 0 ]: Specified key (content) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-20 09:37:19 --- STRACE: Exception [ 0 ]: Specified key (content) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(24): Kacela\Model\Model->__get('content')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-20 09:37:27 --- ERROR: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-20 09:37:27 --- STRACE: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(24): Kacela\Model\Model->__get('contents')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-20 09:38:24 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Gacela\Mapper\Mapper::_primaryKey() must be an instance of stdClass, instance of Kacela\Criteria given, called in /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php on line 634 and defined ~ MODPATH/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php [ 418 ]
2012-04-20 09:38:24 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Gacela\Mapper\Mapper::_primaryKey() must be an instance of stdClass, instance of Kacela\Criteria given, called in /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php on line 634 and defined ~ MODPATH/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php [ 418 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(418): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Volumes/Files/...', 418, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(634): Gacela\Mapper\Mapper->_primaryKey(Array, Object(Kacela\Criteria))
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(46): Gacela\Mapper\Mapper->find(Object(Kacela\Criteria))
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(22): Kacela_Core::find('menu', Object(Kacela\Criteria))
#4 [internal function]: Controller_Public_Solutions->action_index()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-04-20 09:38:57 --- ERROR: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-20 09:38:57 --- STRACE: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(26): Kacela\Model\Model->__get('contents')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-20 09:39:18 --- ERROR: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-20 09:39:18 --- STRACE: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(24): Kacela\Model\Model->__get('contents')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-20 09:40:49 --- ERROR: Exception [ 0 ]: Improper has_many definition: stdClass Object
(
    [keyTable] => menus
    [keyColumns] => id
    [refTable] => contents
    [refColumns] => menu_id
    [constraintName] => fk_menu_contents
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Mysql.php [ 174 ]
2012-04-20 09:40:49 --- STRACE: Exception [ 0 ]: Improper has_many definition: stdClass Object
(
    [keyTable] => menus
    [keyColumns] => id
    [refTable] => contents
    [refColumns] => menu_id
    [constraintName] => fk_menu_contents
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Mysql.php [ 174 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/DataSource.php(81): Gacela\DataSource\Adapter\Mysql->load(Object(PDO), 'menus', 'darth')
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(395): Gacela\DataSource\DataSource->loadResource('menus')
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(186): Gacela\Mapper\Mapper->_initResource()
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(762): Gacela\Mapper\Mapper->_init()
#4 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(485): Gacela\Mapper\Mapper->init()
#5 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela.php(245): Gacela\Mapper\Mapper->__construct()
#6 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(80): Gacela->loadMapper('Menu')
#7 /Volumes/Files/Sites/darth/bane/application/classes/kacela.php(17): Kacela_Core::load('menu')
#8 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(22): Kacela::find_one('menu', Object(Kacela\Criteria))
#9 [internal function]: Controller_Public_Solutions->action_index()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-04-20 09:43:12 --- ERROR: ErrorException [ 8 ]: Undefined property: Kacela\Collection::$content ~ APPPATH/classes/controller/public/solutions.php [ 24 ]
2012-04-20 09:43:12 --- STRACE: ErrorException [ 8 ]: Undefined property: Kacela\Collection::$content ~ APPPATH/classes/controller/public/solutions.php [ 24 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(24): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Files/...', 24, Array)
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-20 10:09:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: page_contents ~ APPPATH/views/content.php [ 1 ]
2012-04-20 10:09:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: page_contents ~ APPPATH/views/content.php [ 1 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/content.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 1, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(43): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(139): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-04-20 10:10:04 --- ERROR: ErrorException [ 4096 ]: Object of class Darth\Model\Content could not be converted to string ~ APPPATH/views/content.php [ 2 ]
2012-04-20 10:10:04 --- STRACE: ErrorException [ 4096 ]: Object of class Darth\Model\Content could not be converted to string ~ APPPATH/views/content.php [ 2 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/content.php(2): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Files/...', 2, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(43): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(139): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
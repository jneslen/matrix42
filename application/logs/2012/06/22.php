<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-22 09:30:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: top ~ APPPATH/views/banner.php [ 5 ]
2012-06-22 09:30:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: top ~ APPPATH/views/banner.php [ 5 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/banner.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 5, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(32): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(190): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Partners))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-06-22 15:23:08 --- ERROR: Exception [ 0 ]: Specified key (default_lead_form) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-06-22 15:23:08 --- STRACE: Exception [ 0 ]: Specified key (default_lead_form) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(107): Kacela\Model\Model->__get('default_lead_fo...')
#1 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#2 [internal function]: Controller_Public_Index->action_index()
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#7 {main}
2012-06-22 15:31:21 --- ERROR: Exception [ 0 ]: Specified key (default_lead_form) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-06-22 15:31:21 --- STRACE: Exception [ 0 ]: Specified key (default_lead_form) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(107): Kacela\Model\Model->__get('default_lead_fo...')
#1 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#2 [internal function]: Controller_Public_Index->action_index()
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#7 {main}
2012-06-22 15:55:21 --- ERROR: Exception [ 0 ]: Specified key (default_lead_form) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-06-22 15:55:21 --- STRACE: Exception [ 0 ]: Specified key (default_lead_form) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(107): Kacela\Model\Model->__get('default_lead_fo...')
#1 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#2 [internal function]: Controller_Public_Index->action_index()
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#7 {main}
2012-06-22 16:02:36 --- ERROR: Exception [ 0 ]: Specified key (default_lead_form) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-06-22 16:02:36 --- STRACE: Exception [ 0 ]: Specified key (default_lead_form) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(107): Kacela\Model\Model->__get('default_lead_fo...')
#1 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#2 [internal function]: Controller_Public_Index->action_index()
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#7 {main}
2012-06-22 16:05:06 --- ERROR: Exception [ 0 ]: Specified key (default_lead_form) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-06-22 16:05:06 --- STRACE: Exception [ 0 ]: Specified key (default_lead_form) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(107): Kacela\Model\Model->__get('default_lead_fo...')
#1 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#2 [internal function]: Controller_Public_Index->action_index()
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#7 {main}
2012-06-22 16:31:01 --- ERROR: View_Exception [ 0 ]: The requested view de/sidebar_lead_form could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-06-22 16:31:01 --- STRACE: View_Exception [ 0 ]: The requested view de/sidebar_lead_form could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('de/sidebar_lead...')
#1 /Volumes/Files/Sites/darth/bane/application/classes/view.php(12): Kohana_View->__construct('de/sidebar_lead...', Array)
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(146): View::factory('sidebar_lead_fo...', Array)
#3 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->side_lead_form()
#4 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(18): Komponent_Core->replace(Object(Darth\Model\Content))
#5 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(97): Darth\Model\Menu->get_content('sidebar')
#6 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#7 [internal function]: Controller_Public_Index->action_index()
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#12 {main}
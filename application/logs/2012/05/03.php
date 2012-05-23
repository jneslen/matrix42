<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-03 08:35:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-03 08:35:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-03 09:54:30 --- ERROR: ReflectionException [ 0 ]: Method Valid::full_name() does not exist ~ SYSPATH/classes/kohana/validation.php [ 394 ]
2012-05-03 09:54:30 --- STRACE: ReflectionException [ 0 ]: Method Valid::full_name() does not exist ~ SYSPATH/classes/kohana/validation.php [ 394 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/validation.php(394): ReflectionMethod->__construct('\Valid', 'full_name')
#1 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator/field.php(68): Kohana_Validation->check()
#2 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(125): Formo_Core_Validator_Field->validate(true)
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#4 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#5 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#6 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#7 [internal function]: Controller_Public->action_index()
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#12 {main}
2012-05-03 12:55:47 --- ERROR: ReflectionException [ 0 ]: Method Valid::full_name() does not exist ~ SYSPATH/classes/kohana/validation.php [ 394 ]
2012-05-03 12:55:47 --- STRACE: ReflectionException [ 0 ]: Method Valid::full_name() does not exist ~ SYSPATH/classes/kohana/validation.php [ 394 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/validation.php(394): ReflectionMethod->__construct('\Valid', 'full_name')
#1 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator/field.php(68): Kohana_Validation->check()
#2 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(125): Formo_Core_Validator_Field->validate(true)
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#4 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#5 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#6 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#7 [internal function]: Controller_Public->action_index()
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#12 {main}
2012-05-03 12:57:35 --- ERROR: ReflectionException [ 0 ]: Method Valid::full_name() does not exist ~ SYSPATH/classes/kohana/validation.php [ 394 ]
2012-05-03 12:57:35 --- STRACE: ReflectionException [ 0 ]: Method Valid::full_name() does not exist ~ SYSPATH/classes/kohana/validation.php [ 394 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/validation.php(394): ReflectionMethod->__construct('\Valid', 'full_name')
#1 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator/field.php(68): Kohana_Validation->check()
#2 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(125): Formo_Core_Validator_Field->validate(true)
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#4 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#5 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#6 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#7 [internal function]: Controller_Public->action_index()
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#12 {main}
2012-05-03 12:58:50 --- ERROR: ReflectionException [ 0 ]: Method Valid::full_name() does not exist ~ SYSPATH/classes/kohana/validation.php [ 394 ]
2012-05-03 12:58:50 --- STRACE: ReflectionException [ 0 ]: Method Valid::full_name() does not exist ~ SYSPATH/classes/kohana/validation.php [ 394 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/validation.php(394): ReflectionMethod->__construct('\Valid', 'full_name')
#1 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator/field.php(68): Kohana_Validation->check()
#2 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(125): Formo_Core_Validator_Field->validate(true)
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#4 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#5 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#6 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#7 [internal function]: Controller_Public->action_index()
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#12 {main}
2012-05-03 12:59:07 --- ERROR: ReflectionException [ 0 ]: Method Valid::full_name() does not exist ~ SYSPATH/classes/kohana/validation.php [ 394 ]
2012-05-03 12:59:07 --- STRACE: ReflectionException [ 0 ]: Method Valid::full_name() does not exist ~ SYSPATH/classes/kohana/validation.php [ 394 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/validation.php(394): ReflectionMethod->__construct('\Valid', 'full_name')
#1 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator/field.php(68): Kohana_Validation->check()
#2 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(125): Formo_Core_Validator_Field->validate(true)
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#4 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#5 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#6 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#7 [internal function]: Controller_Public->action_index()
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#12 {main}
2012-05-03 14:25:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-03 14:25:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-03 15:42:53 --- ERROR: ReflectionException [ 0 ]: Function name() does not exist ~ SYSPATH/classes/kohana/validation.php [ 383 ]
2012-05-03 15:42:53 --- STRACE: ReflectionException [ 0 ]: Function name() does not exist ~ SYSPATH/classes/kohana/validation.php [ 383 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/validation.php(383): ReflectionFunction->__construct('name')
#1 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator/field.php(68): Kohana_Validation->check()
#2 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(125): Formo_Core_Validator_Field->validate(true)
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#4 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#5 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#6 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#7 [internal function]: Controller_Public->action_index()
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#12 {main}
2012-05-03 15:43:34 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, string given, called in /Volumes/Files/Sites/darth/bane/system/classes/kohana/validation.php on line 228 and defined ~ SYSPATH/classes/kohana/validation.php [ 197 ]
2012-05-03 15:43:34 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be an array, string given, called in /Volumes/Files/Sites/darth/bane/system/classes/kohana/validation.php on line 228 and defined ~ SYSPATH/classes/kohana/validation.php [ 197 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/validation.php(197): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/Volumes/Files/...', 197, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/validation.php(228): Kohana_Validation->rule('name', '\Valid::full_na...', 'full_name')
#2 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator/field.php(88): Kohana_Validation->rules('name', Array)
#3 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator/field.php(66): Formo_Core_Validator_Field->_add_rules()
#4 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(125): Formo_Core_Validator_Field->validate(true)
#5 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#6 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#7 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#9 [internal function]: Controller_Public->action_index()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-03 16:12:08 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/lead_form.php [ 29 ]
2012-05-03 16:12:08 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/lead_form.php [ 29 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/lead_form.php(29): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Files/...', 29, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 [internal function]: Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(50): str_replace('%%leadform%%', Object(View), '%%leadform%%')
#6 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#8 [internal function]: Controller_Public->action_index()
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#13 {main}
2012-05-03 16:15:23 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/views/lead_form.php [ 29 ]
2012-05-03 16:15:23 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/views/lead_form.php [ 29 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-03 16:56:00 --- ERROR: ErrorException [ 2 ]: strlen() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/valid.php [ 357 ]
2012-05-03 16:56:00 --- STRACE: ErrorException [ 2 ]: strlen() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/valid.php [ 357 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strlen() expect...', '/Volumes/Files/...', 357, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/valid.php(357): strlen(Array)
#2 [internal function]: Kohana_Valid::phone(Array, Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/validation.php(378): ReflectionMethod->invokeArgs(NULL, Array)
#4 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(180): Kohana_Validation->check()
#5 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(140): Formo_Core_Validator->_determine_errors()
#6 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(125): Formo_Core_Validator->validate(true)
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#8 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#9 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#10 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#11 [internal function]: Controller_Public->action_index()
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#13 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#16 {main}
2012-05-03 16:56:24 --- ERROR: ErrorException [ 2 ]: strlen() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/valid.php [ 357 ]
2012-05-03 16:56:24 --- STRACE: ErrorException [ 2 ]: strlen() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/valid.php [ 357 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strlen() expect...', '/Volumes/Files/...', 357, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/valid.php(357): strlen(Array)
#2 [internal function]: Kohana_Valid::phone(Array, Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/validation.php(378): ReflectionMethod->invokeArgs(NULL, Array)
#4 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(180): Kohana_Validation->check()
#5 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(140): Formo_Core_Validator->_determine_errors()
#6 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(125): Formo_Core_Validator->validate(true)
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#8 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#9 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#10 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#11 [internal function]: Controller_Public->action_index()
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#13 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#16 {main}
2012-05-03 16:56:42 --- ERROR: ErrorException [ 2 ]: strlen() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/valid.php [ 357 ]
2012-05-03 16:56:42 --- STRACE: ErrorException [ 2 ]: strlen() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/valid.php [ 357 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strlen() expect...', '/Volumes/Files/...', 357, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/valid.php(357): strlen(Array)
#2 [internal function]: Kohana_Valid::phone(Array, Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/validation.php(378): ReflectionMethod->invokeArgs(NULL, Array)
#4 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(180): Kohana_Validation->check()
#5 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(140): Formo_Core_Validator->_determine_errors()
#6 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(125): Formo_Core_Validator->validate(true)
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#8 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#9 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#10 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#11 [internal function]: Controller_Public->action_index()
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#13 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#16 {main}
2012-05-03 16:59:32 --- ERROR: ErrorException [ 2 ]: strlen() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/valid.php [ 357 ]
2012-05-03 16:59:32 --- STRACE: ErrorException [ 2 ]: strlen() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/valid.php [ 357 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strlen() expect...', '/Volumes/Files/...', 357, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/valid.php(357): strlen(Array)
#2 [internal function]: Kohana_Valid::phone(Array, Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/validation.php(378): ReflectionMethod->invokeArgs(NULL, Array)
#4 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(180): Kohana_Validation->check()
#5 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(140): Formo_Core_Validator->_determine_errors()
#6 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(125): Formo_Core_Validator->validate(true)
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#8 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#9 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#10 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#11 [internal function]: Controller_Public->action_index()
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#13 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#16 {main}
2012-05-03 17:02:38 --- ERROR: ErrorException [ 2 ]: strlen() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/valid.php [ 357 ]
2012-05-03 17:02:38 --- STRACE: ErrorException [ 2 ]: strlen() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/valid.php [ 357 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strlen() expect...', '/Volumes/Files/...', 357, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/valid.php(357): strlen(Array)
#2 [internal function]: Kohana_Valid::phone(Array, Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/validation.php(378): ReflectionMethod->invokeArgs(NULL, Array)
#4 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(180): Kohana_Validation->check()
#5 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(140): Formo_Core_Validator->_determine_errors()
#6 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(125): Formo_Core_Validator->validate(true)
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#8 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#9 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#10 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#11 [internal function]: Controller_Public->action_index()
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#13 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#16 {main}
2012-05-03 17:07:33 --- ERROR: ErrorException [ 2 ]: strlen() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/valid.php [ 357 ]
2012-05-03 17:07:33 --- STRACE: ErrorException [ 2 ]: strlen() expects parameter 1 to be string, array given ~ SYSPATH/classes/kohana/valid.php [ 357 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'strlen() expect...', '/Volumes/Files/...', 357, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/valid.php(357): strlen(Array)
#2 [internal function]: Kohana_Valid::phone(Array, Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/validation.php(378): ReflectionMethod->invokeArgs(NULL, Array)
#4 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(180): Kohana_Validation->check()
#5 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(140): Formo_Core_Validator->_determine_errors()
#6 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(125): Formo_Core_Validator->validate(true)
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#8 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#9 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#10 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#11 [internal function]: Controller_Public->action_index()
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#13 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#16 {main}
2012-05-03 17:09:40 --- ERROR: ErrorException [ 1 ]: Call to a member function merge() on a non-object ~ MODPATH/formo/classes/formo/core/validator.php [ 193 ]
2012-05-03 17:09:40 --- STRACE: ErrorException [ 1 ]: Call to a member function merge() on a non-object ~ MODPATH/formo/classes/formo/core/validator.php [ 193 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-03 17:10:12 --- ERROR: ReflectionException [ 0 ]: Function number() does not exist ~ SYSPATH/classes/kohana/validation.php [ 383 ]
2012-05-03 17:10:12 --- STRACE: ReflectionException [ 0 ]: Function number() does not exist ~ SYSPATH/classes/kohana/validation.php [ 383 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/validation.php(383): ReflectionFunction->__construct('number')
#1 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(180): Kohana_Validation->check()
#2 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(140): Formo_Core_Validator->_determine_errors()
#3 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(125): Formo_Core_Validator->validate(true)
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#5 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#6 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#8 [internal function]: Controller_Public->action_index()
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#13 {main}
2012-05-03 17:10:28 --- ERROR: ErrorException [ 1 ]: Call to a member function merge() on a non-object ~ MODPATH/formo/classes/formo/core/validator.php [ 193 ]
2012-05-03 17:10:28 --- STRACE: ErrorException [ 1 ]: Call to a member function merge() on a non-object ~ MODPATH/formo/classes/formo/core/validator.php [ 193 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-03 17:13:25 --- ERROR: ReflectionException [ 0 ]: Function number() does not exist ~ SYSPATH/classes/kohana/validation.php [ 383 ]
2012-05-03 17:13:25 --- STRACE: ReflectionException [ 0 ]: Function number() does not exist ~ SYSPATH/classes/kohana/validation.php [ 383 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/validation.php(383): ReflectionFunction->__construct('number')
#1 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator/field.php(68): Kohana_Validation->check()
#2 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(125): Formo_Core_Validator_Field->validate(true)
#3 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(125): Formo_Core_Validator->validate(true)
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#5 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#6 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#8 [internal function]: Controller_Public->action_index()
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#13 {main}
2012-05-03 17:14:08 --- ERROR: ErrorException [ 1 ]: Call to a member function merge() on a non-object ~ MODPATH/formo/classes/formo/core/validator.php [ 193 ]
2012-05-03 17:14:08 --- STRACE: ErrorException [ 1 ]: Call to a member function merge() on a non-object ~ MODPATH/formo/classes/formo/core/validator.php [ 193 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-03 17:14:23 --- ERROR: ErrorException [ 1 ]: Call to a member function merge() on a non-object ~ MODPATH/formo/classes/formo/core/validator.php [ 193 ]
2012-05-03 17:14:23 --- STRACE: ErrorException [ 1 ]: Call to a member function merge() on a non-object ~ MODPATH/formo/classes/formo/core/validator.php [ 193 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-03 17:15:31 --- ERROR: ReflectionException [ 0 ]: Function number() does not exist ~ SYSPATH/classes/kohana/validation.php [ 383 ]
2012-05-03 17:15:31 --- STRACE: ReflectionException [ 0 ]: Function number() does not exist ~ SYSPATH/classes/kohana/validation.php [ 383 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/validation.php(383): ReflectionFunction->__construct('number')
#1 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(180): Kohana_Validation->check()
#2 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(140): Formo_Core_Validator->_determine_errors()
#3 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(125): Formo_Core_Validator->validate(true)
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#5 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#6 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#8 [internal function]: Controller_Public->action_index()
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#13 {main}
2012-05-03 17:18:14 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/views/lead_form.php [ 33 ]
2012-05-03 17:18:14 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/views/lead_form.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
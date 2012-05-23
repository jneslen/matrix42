<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-04 10:28:22 --- ERROR: ErrorException [ 1 ]: Class 'Bonafide' not found ~ APPPATH/classes/model/user.php [ 62 ]
2012-05-04 10:28:22 --- STRACE: ErrorException [ 1 ]: Class 'Bonafide' not found ~ APPPATH/classes/model/user.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-04 10:29:09 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/bonafide/classes/kohana/bonafide.php [ 46 ]
2012-05-04 10:29:09 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/bonafide/classes/kohana/bonafide.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-04 10:31:12 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/bonafide/classes/kohana/bonafide.php [ 46 ]
2012-05-04 10:31:12 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/bonafide/classes/kohana/bonafide.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-04 10:32:57 --- ERROR: ErrorException [ 1 ]: Function name must be a string ~ MODPATH/bonafide/classes/kohana/bonafide.php [ 46 ]
2012-05-04 10:32:57 --- STRACE: ErrorException [ 1 ]: Function name must be a string ~ MODPATH/bonafide/classes/kohana/bonafide.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-04 10:34:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/bonafide/classes/kohana/bonafide.php [ 74 ]
2012-05-04 10:34:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/bonafide/classes/kohana/bonafide.php [ 74 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-04 10:35:05 --- ERROR: ErrorException [ 8 ]: Undefined index: first ~ MODPATH/kacela/classes/kacela/model/model.php [ 86 ]
2012-05-04 10:35:05 --- STRACE: ErrorException [ 8 ]: Undefined index: first ~ MODPATH/kacela/classes/kacela/model/model.php [ 86 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(86): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 86, Array)
#1 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(409): Kacela\Model\Model->__set('first', 'Joe')
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(78): Darth\Model\User->_set_full_name('Joe Smo')
#3 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(65): Kacela\Model\Model->__set('full_name', 'Joe Smo')
#4 [internal function]: Darth\Model\User->create_new_lead(Object(Formo_Form))
#5 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(409): call_user_func_array(Array, Array)
#6 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(145): Formo_Core_Validator->_run_callbacks(true)
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(88): Formo_Core_Validator->validate()
#8 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#9 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#10 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#11 [internal function]: Controller_Public->action_index()
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#13 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#16 {main}
2012-05-04 10:41:00 --- ERROR: ErrorException [ 8 ]: Undefined index: first ~ MODPATH/kacela/classes/kacela/model/model.php [ 86 ]
2012-05-04 10:41:00 --- STRACE: ErrorException [ 8 ]: Undefined index: first ~ MODPATH/kacela/classes/kacela/model/model.php [ 86 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(86): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 86, Array)
#1 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(410): Kacela\Model\Model->__set('first', 'Joe')
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(78): Darth\Model\User->_set_full_name('Joe Smo')
#3 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(65): Kacela\Model\Model->__set('full_name', 'Joe Smo')
#4 [internal function]: Darth\Model\User->create_new_lead(Object(Formo_Form))
#5 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(409): call_user_func_array(Array, Array)
#6 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(145): Formo_Core_Validator->_run_callbacks(true)
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(88): Formo_Core_Validator->validate()
#8 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#9 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#10 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#11 [internal function]: Controller_Public->action_index()
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#13 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#16 {main}
2012-05-04 10:42:24 --- ERROR: ErrorException [ 8 ]: Undefined index: first ~ MODPATH/kacela/classes/kacela/model/model.php [ 86 ]
2012-05-04 10:42:24 --- STRACE: ErrorException [ 8 ]: Undefined index: first ~ MODPATH/kacela/classes/kacela/model/model.php [ 86 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(86): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 86, Array)
#1 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(410): Kacela\Model\Model->__set('first', 'Joe')
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(78): Darth\Model\User->_set_full_name('Joe Smo')
#3 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(65): Kacela\Model\Model->__set('full_name', 'Joe Smo')
#4 [internal function]: Darth\Model\User->create_new_lead(Object(Formo_Form))
#5 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(409): call_user_func_array(Array, Array)
#6 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(145): Formo_Core_Validator->_run_callbacks(true)
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(88): Formo_Core_Validator->validate()
#8 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#9 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#10 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#11 [internal function]: Controller_Public->action_index()
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#13 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#16 {main}
2012-05-04 10:49:30 --- ERROR: ErrorException [ 8 ]: Undefined index: first ~ MODPATH/kacela/classes/kacela/model/model.php [ 86 ]
2012-05-04 10:49:30 --- STRACE: ErrorException [ 8 ]: Undefined index: first ~ MODPATH/kacela/classes/kacela/model/model.php [ 86 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(86): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 86, Array)
#1 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(410): Kacela\Model\Model->__set('first', 'Joe')
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(78): Darth\Model\User->_set_full_name('Joe Smo')
#3 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(65): Kacela\Model\Model->__set('full_name', 'Joe Smo')
#4 [internal function]: Darth\Model\User->create_new_lead(Object(Formo_Form))
#5 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(409): call_user_func_array(Array, Array)
#6 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(145): Formo_Core_Validator->_run_callbacks(true)
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(88): Formo_Core_Validator->validate()
#8 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#9 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#10 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#11 [internal function]: Controller_Public->action_index()
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#13 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#16 {main}
2012-05-04 10:53:40 --- ERROR: ErrorException [ 8 ]: Undefined index: first ~ MODPATH/kacela/classes/kacela/model/model.php [ 86 ]
2012-05-04 10:53:40 --- STRACE: ErrorException [ 8 ]: Undefined index: first ~ MODPATH/kacela/classes/kacela/model/model.php [ 86 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(86): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 86, Array)
#1 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(65): Kacela\Model\Model->__set('first', 'dude')
#2 [internal function]: Darth\Model\User->create_new_lead(Object(Formo_Form))
#3 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(409): call_user_func_array(Array, Array)
#4 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(145): Formo_Core_Validator->_run_callbacks(true)
#5 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(88): Formo_Core_Validator->validate()
#6 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#7 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#9 [internal function]: Controller_Public->action_index()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-04 10:57:33 --- ERROR: ErrorException [ 8 ]: Undefined index: inquiry_id ~ MODPATH/kacela/classes/kacela/model/model.php [ 86 ]
2012-05-04 10:57:33 --- STRACE: ErrorException [ 8 ]: Undefined index: inquiry_id ~ MODPATH/kacela/classes/kacela/model/model.php [ 86 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(86): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 86, Array)
#1 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(73): Kacela\Model\Model->__set('inquiry_id', '127.0.0.1')
#2 [internal function]: Darth\Model\User->create_new_lead(Object(Formo_Form))
#3 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(409): call_user_func_array(Array, Array)
#4 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(145): Formo_Core_Validator->_run_callbacks(true)
#5 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(88): Formo_Core_Validator->validate()
#6 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#7 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#9 [internal function]: Controller_Public->action_index()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-04 10:59:34 --- ERROR: ErrorException [ 1 ]: Call to a member function errors() on a non-object ~ APPPATH/classes/model/user.php [ 77 ]
2012-05-04 10:59:34 --- STRACE: ErrorException [ 1 ]: Call to a member function errors() on a non-object ~ APPPATH/classes/model/user.php [ 77 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-04 10:59:46 --- ERROR: ErrorException [ 1 ]: Call to a member function get_errors() on a non-object ~ APPPATH/classes/model/user.php [ 77 ]
2012-05-04 10:59:46 --- STRACE: ErrorException [ 1 ]: Call to a member function get_errors() on a non-object ~ APPPATH/classes/model/user.php [ 77 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-04 10:59:57 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/user.php [ 77 ]
2012-05-04 10:59:57 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/model/user.php [ 77 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(77): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Files/...', 77, Array)
#1 [internal function]: Darth\Model\User->create_new_lead(Object(Formo_Form))
#2 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(409): call_user_func_array(Array, Array)
#3 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(145): Formo_Core_Validator->_run_callbacks(true)
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(88): Formo_Core_Validator->validate()
#5 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#6 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#8 [internal function]: Controller_Public->action_index()
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#13 {main}
2012-05-04 11:00:35 --- ERROR: ErrorException [ 1 ]: Call to a member function debug() on a non-object ~ APPPATH/classes/model/user.php [ 77 ]
2012-05-04 11:00:35 --- STRACE: ErrorException [ 1 ]: Call to a member function debug() on a non-object ~ APPPATH/classes/model/user.php [ 77 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-04 11:19:48 --- ERROR: ErrorException [ 1 ]: Call to undefined method Darth\Model\Lead::errors() ~ APPPATH/classes/model/user.php [ 76 ]
2012-05-04 11:19:48 --- STRACE: ErrorException [ 1 ]: Call to undefined method Darth\Model\Lead::errors() ~ APPPATH/classes/model/user.php [ 76 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-04 11:24:18 --- ERROR: ErrorException [ 1 ]: Call to a member function _mapper() on a non-object ~ APPPATH/classes/model/user.php [ 77 ]
2012-05-04 11:24:18 --- STRACE: ErrorException [ 1 ]: Call to a member function _mapper() on a non-object ~ APPPATH/classes/model/user.php [ 77 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-04 13:02:12 --- ERROR: Exception [ 0 ]: Insert to users failed with errors: Array
(
    [0] => 23000
    [1] => 1062
    [2] => Duplicate entry 'jneslen@yahoo.com' for key 'unq_email'
)
 With SQL: INSERT INTO `users` (`email`,`first`,`last`,`password`,`role`,`last_activity_date`,`last_ip`) VALUES
(:email0,:first0,:last0,:password0,:role0,:last_activity_date0,:last_ip0) And Data: Array
(
    [email0] => jneslen@yahoo.com
    [first0] => Jeff
    [last0] => Neslen
    [password0] => bcrypt$2a$12$dmZ3nYAcIzMlD86MMBQz7e887gRKqBjgVd0GuDg3V8qs19zy6wHPa
    [role0] => lead
    [last_activity_date0] => 2012-05-04T13:02:12-06:00
    [last_ip0] => 127.0.0.1
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 208 ]
2012-05-04 13:02:12 --- STRACE: Exception [ 0 ]: Insert to users failed with errors: Array
(
    [0] => 23000
    [1] => 1062
    [2] => Duplicate entry 'jneslen@yahoo.com' for key 'unq_email'
)
 With SQL: INSERT INTO `users` (`email`,`first`,`last`,`password`,`role`,`last_activity_date`,`last_ip`) VALUES
(:email0,:first0,:last0,:password0,:role0,:last_activity_date0,:last_ip0) And Data: Array
(
    [email0] => jneslen@yahoo.com
    [first0] => Jeff
    [last0] => Neslen
    [password0] => bcrypt$2a$12$dmZ3nYAcIzMlD86MMBQz7e887gRKqBjgVd0GuDg3V8qs19zy6wHPa
    [role0] => lead
    [last_activity_date0] => 2012-05-04T13:02:12-06:00
    [last_ip0] => 127.0.0.1
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 208 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(447): Gacela\DataSource\Database->insert('users', Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(874): Gacela\Mapper\Mapper->_saveResource(Object(Gacela\DataSource\Resource), Array, Object(stdClass), Array)
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Model/Model.php(188): Gacela\Mapper\Mapper->save(Array, Object(stdClass), Array)
#3 /Volumes/Files/Sites/darth/bane/application/classes/model/model.php(61): Gacela\Model\Model->save(NULL)
#4 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(389): Darth\Model\Model->save(NULL)
#5 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(76): Darth\Model\User->save()
#6 [internal function]: Darth\Model\User->create_new_lead(Object(Formo_Form))
#7 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(409): call_user_func_array(Array, Array)
#8 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(145): Formo_Core_Validator->_run_callbacks(true)
#9 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(88): Formo_Core_Validator->validate()
#10 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#11 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#12 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#13 [internal function]: Controller_Public->action_index()
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#18 {main}
2012-05-04 13:06:45 --- ERROR: Exception [ 0 ]: Specified key (lead) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-04 13:06:45 --- STRACE: Exception [ 0 ]: Specified key (lead) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(69): Kacela\Model\Model->__get('lead')
#1 [internal function]: Darth\Model\User->create_new_lead(Object(Formo_Form))
#2 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(409): call_user_func_array(Array, Array)
#3 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(145): Formo_Core_Validator->_run_callbacks(true)
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(88): Formo_Core_Validator->validate()
#5 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#6 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#8 [internal function]: Controller_Public->action_index()
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#13 {main}
2012-05-04 13:15:39 --- ERROR: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ APPPATH/classes/model/lead.php [ 35 ]
2012-05-04 13:15:39 --- STRACE: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ APPPATH/classes/model/lead.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-04 13:19:57 --- ERROR: Exception [ 0 ]: Insert to users failed with errors: Array
(
    [0] => 23000
    [1] => 1062
    [2] => Duplicate entry 'jer@topgear.com' for key 'unq_email'
)
 With SQL: INSERT INTO `users` (`email`,`first`,`last`,`password`,`role`,`last_activity_date`,`last_ip`) VALUES
(:email0,:first0,:last0,:password0,:role0,:last_activity_date0,:last_ip0) And Data: Array
(
    [email0] => jer@topgear.com
    [first0] => Jeremy
    [last0] => Clarkson
    [password0] => bcrypt$2a$12$mxDzHfESqnG71lPoCzCy1ukr3lfNJ7FDafdZxY1RRhL9U.V9LZKWS
    [role0] => lead
    [last_activity_date0] => 2012-05-04T13:19:57-06:00
    [last_ip0] => 127.0.0.1
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 208 ]
2012-05-04 13:19:57 --- STRACE: Exception [ 0 ]: Insert to users failed with errors: Array
(
    [0] => 23000
    [1] => 1062
    [2] => Duplicate entry 'jer@topgear.com' for key 'unq_email'
)
 With SQL: INSERT INTO `users` (`email`,`first`,`last`,`password`,`role`,`last_activity_date`,`last_ip`) VALUES
(:email0,:first0,:last0,:password0,:role0,:last_activity_date0,:last_ip0) And Data: Array
(
    [email0] => jer@topgear.com
    [first0] => Jeremy
    [last0] => Clarkson
    [password0] => bcrypt$2a$12$mxDzHfESqnG71lPoCzCy1ukr3lfNJ7FDafdZxY1RRhL9U.V9LZKWS
    [role0] => lead
    [last_activity_date0] => 2012-05-04T13:19:57-06:00
    [last_ip0] => 127.0.0.1
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 208 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(447): Gacela\DataSource\Database->insert('users', Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(874): Gacela\Mapper\Mapper->_saveResource(Object(Gacela\DataSource\Resource), Array, Object(stdClass), Array)
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Model/Model.php(188): Gacela\Mapper\Mapper->save(Array, Object(stdClass), Array)
#3 /Volumes/Files/Sites/darth/bane/application/classes/model/model.php(61): Gacela\Model\Model->save(NULL)
#4 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(292): Darth\Model\Model->save(NULL)
#5 /Volumes/Files/Sites/darth/bane/application/classes/model/lead.php(26): Darth\Model\User->save()
#6 [internal function]: Darth\Model\Lead->create_new_lead(Object(Formo_Form))
#7 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(409): call_user_func_array(Array, Array)
#8 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(145): Formo_Core_Validator->_run_callbacks(true)
#9 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(88): Formo_Core_Validator->validate()
#10 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#11 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#12 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#13 [internal function]: Controller_Public->action_index()
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#18 {main}
2012-05-04 14:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-04 14:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-04 14:24:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/auth/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-04 14:24:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/auth/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-04 14:24:24 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/public/auth.php [ 7 ]
2012-05-04 14:24:24 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/public/auth.php [ 7 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/auth.php(7): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Files/...', 7, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(59): Controller_Public_Auth->action_login()
#2 [internal function]: Controller_Public->action_index()
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Auth))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#7 {main}
2012-05-04 14:30:36 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/public/auth.php [ 7 ]
2012-05-04 14:30:36 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/public/auth.php [ 7 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/auth.php(7): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Files/...', 7, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(59): Controller_Public_Auth->action_login()
#2 [internal function]: Controller_Public->action_index()
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Auth))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#7 {main}
2012-05-04 14:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-04 14:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-04 14:31:14 --- ERROR: View_Exception [ 0 ]: The requested view public/auth/login could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-04 14:31:14 --- STRACE: View_Exception [ 0 ]: The requested view public/auth/login could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('public/auth/log...')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(30): Kohana_View->__construct('public/auth/log...', NULL)
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/auth.php(12): Kohana_View::factory('public/auth/log...')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(59): Controller_Public_Auth->action_login()
#4 [internal function]: Controller_Public->action_index()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Auth))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-04 14:34:32 --- ERROR: View_Exception [ 0 ]: The requested view public/auth/login could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-04 14:34:32 --- STRACE: View_Exception [ 0 ]: The requested view public/auth/login could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('public/auth/log...')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(30): Kohana_View->__construct('public/auth/log...', NULL)
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/auth.php(12): Kohana_View::factory('public/auth/log...')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(59): Controller_Public_Auth->action_login()
#4 [internal function]: Controller_Public->action_index()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Auth))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-04 14:35:26 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Public_' not found ~ MODPATH/site/classes/controller/public.php [ 51 ]
2012-05-04 14:35:26 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Public_' not found ~ MODPATH/site/classes/controller/public.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-04 14:49:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-04 14:49:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-04 14:49:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-04 14:49:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-04 14:52:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-04 14:52:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-04 14:52:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-04 14:52:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-04 14:52:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-04 14:52:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-04 15:39:16 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Public_' not found ~ MODPATH/site/classes/controller/public.php [ 51 ]
2012-05-04 15:39:16 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Public_' not found ~ MODPATH/site/classes/controller/public.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-04 15:56:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-04 15:56:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-04 16:09:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL leads was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-04 16:09:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL leads was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-04 16:10:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL leads was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-04 16:10:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL leads was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-04 16:10:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-04 16:10:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-04 16:10:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-04 16:10:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-04 16:15:57 --- ERROR: View_Exception [ 0 ]: The requested view public/auth/logout could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-04 16:15:57 --- STRACE: View_Exception [ 0 ]: The requested view public/auth/logout could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('public/auth/log...')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(30): Kohana_View->__construct('public/auth/log...', NULL)
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/auth.php(44): Kohana_View::factory('public/auth/log...')
#3 [internal function]: Controller_Public_Auth->action_logout()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Auth))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-05-04 16:25:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: form ~ APPPATH/views/login.php [ 5 ]
2012-05-04 16:25:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: form ~ APPPATH/views/login.php [ 5 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/login.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 5, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(43): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(149): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Auth))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-04 16:30:10 --- ERROR: Exception [ 0 ]: Code (23000) Error: Column 'disabled' in where clause is ambiguousQuery: SELECT leads.*, `users`.`email`, `users`.`first`, `users`.`initial`, `users`.`last`, `users`.`password`, `users`.`temp_password`, `users`.`temp_password_date`, `users`.`role`, `users`.`logins`, `users`.`last_login`, `users`.`registration_date`, `users`.`last_activity_date`, `users`.`user_notes`, `users`.`token`, `users`.`email_confirmed`, `users`.`last_ip`, `users`.`disabled`
FROM `leads`
INNER JOIN `users` ON `leads`.`id` = `users`.`id`
WHERE (`disabled` = :disabled_0)
LIMIT 0, 3000

Args: Array
(
    [:disabled_0] => 0
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 265 ]
2012-05-04 16:30:10 --- STRACE: Exception [ 0 ]: Code (23000) Error: Column 'disabled' in where clause is ambiguousQuery: SELECT leads.*, `users`.`email`, `users`.`first`, `users`.`initial`, `users`.`last`, `users`.`password`, `users`.`temp_password`, `users`.`temp_password_date`, `users`.`role`, `users`.`logins`, `users`.`last_login`, `users`.`registration_date`, `users`.`last_activity_date`, `users`.`user_notes`, `users`.`token`, `users`.`email_confirmed`, `users`.`last_ip`, `users`.`disabled`
FROM `leads`
INNER JOIN `users` ON `leads`.`id` = `users`.`id`
WHERE (`disabled` = :disabled_0)
LIMIT 0, 3000

Args: Array
(
    [:disabled_0] => 0
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 265 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(142): Gacela\DataSource\Database->query(Object(Gacela\DataSource\Resource), Object(Gacela\DataSource\Query\Database))
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(661): Gacela\DataSource\Database->findAll(Object(Gacela\DataSource\Query\Database), Object(Gacela\DataSource\Resource), Array, Array)
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/mapper/mapper.php(24): Gacela\Mapper\Mapper->findAll(Object(Kacela\Criteria))
#3 /Volumes/Files/Sites/darth/bane/application/classes/mapper/mapper.php(29): Kacela\Mapper\Mapper->find_all(Object(Kacela\Criteria))
#4 /Volumes/Files/Sites/darth/bane/application/classes/kacela.php(7): Darth\Mapper\Mapper->find_active(Object(Kacela\Criteria))
#5 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(12): Kacela::find_active('lead', Object(Kacela\Criteria))
#6 [internal function]: Controller_Admin_Leads->action_index()
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#11 {main}
2012-05-04 16:31:33 --- ERROR: ErrorException [ 1 ]: Class 'Kable' not found ~ APPPATH/classes/controller/admin/leads.php [ 14 ]
2012-05-04 16:31:33 --- STRACE: ErrorException [ 1 ]: Class 'Kable' not found ~ APPPATH/classes/controller/admin/leads.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-04 16:53:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-04 16:53:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-04 16:53:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/back_disabled.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-04 16:53:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/back_disabled.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-04 16:53:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/forward_disabled.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-04 16:53:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/forward_disabled.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-04 16:53:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-04 16:53:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-04 16:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/forward_disabled.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-04 16:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/forward_disabled.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-04 16:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-04 16:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-04 16:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/back_disabled.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-04 16:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/back_disabled.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-04 16:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-04 16:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-04 17:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/back_disabled.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-04 17:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/forward_disabled.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-04 17:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/back_disabled.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-04 17:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/forward_disabled.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-04 17:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-04 17:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/sort_asc.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-04 17:01:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-04 17:01:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/datatables/sort_both.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
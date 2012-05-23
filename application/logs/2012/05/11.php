<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-11 08:36:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-11 08:36:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-11 11:32:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-11 11:32:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-11 13:43:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads/detail/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-11 13:43:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads/detail/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-11 13:46:15 --- ERROR: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/model/address.php [ 24 ]
2012-05-11 13:46:15 --- STRACE: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/model/address.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-11 13:58:16 --- ERROR: Exception [ 0 ]: Specified key (countries) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-11 13:58:16 --- STRACE: Exception [ 0 ]: Specified key (countries) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/model/address.php(29): Kacela\Model\Model->__get('countries')
#1 /Volumes/Files/Sites/darth/bane/application/classes/model/lead.php(79): Darth\Model\Address->get_form()
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(79): Darth\Model\Lead->get_form()
#3 [internal function]: Controller_Admin_Leads->action_form()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-05-11 13:58:27 --- ERROR: Exception [ 0 ]: Specified key (countrys) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-11 13:58:27 --- STRACE: Exception [ 0 ]: Specified key (countrys) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/model/address.php(29): Kacela\Model\Model->__get('countrys')
#1 /Volumes/Files/Sites/darth/bane/application/classes/model/lead.php(79): Darth\Model\Address->get_form()
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(79): Darth\Model\Lead->get_form()
#3 [internal function]: Controller_Admin_Leads->action_form()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-05-11 14:00:58 --- ERROR: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ SYSPATH/classes/kohana/arr.php [ 104 ]
2012-05-11 14:00:58 --- STRACE: ErrorException [ 2 ]: array_key_exists(): The first argument should be either a string or an integer ~ SYSPATH/classes/kohana/arr.php [ 104 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'array_key_exist...', '/Volumes/Files/...', 104, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/arr.php(104): array_key_exists(Object(Darth\Model\Country), Array)
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(936): Kohana_Arr::path(Array, Object(Darth\Model\Country), Object(Darth\Model\Country))
#3 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/view.php(84): Kohana_Core::message('validate', Object(Darth\Model\Country), Object(Darth\Model\Country))
#4 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/view/html.php(378): Formo_Core_View->translate(Object(Darth\Model\Country))
#5 /Volumes/Files/Sites/darth/bane/modules/formo/views/formo/html/select.php(16): Formo_Core_View_HTML->option_label(Object(Darth\Model\Country))
#6 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/view.php(134): include('/Volumes/Files/...')
#7 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/view.php(175): Formo_Core_View->_capture('/Volumes/Files/...', Array)
#8 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/driver.php(407): Formo_Core_View->render('formo/html/sele...')
#9 [internal function]: Formo_Core_Driver->render()
#10 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/container.php(147): ReflectionMethod->invokeArgs(Object(Formo_Driver_Select), Array)
#11 /Volumes/Files/Sites/darth/bane/modules/formo/views/formo/html/group.php(6): Formo_Core_Container->__call('render', Array)
#12 /Volumes/Files/Sites/darth/bane/modules/formo/views/formo/html/group.php(6): Formo_Field->render()
#13 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/view.php(134): include('/Volumes/Files/...')
#14 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/view.php(175): Formo_Core_View->_capture('/Volumes/Files/...', Array)
#15 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/driver.php(407): Formo_Core_View->render('formo/html/grou...')
#16 [internal function]: Formo_Core_Driver->render()
#17 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/container.php(147): ReflectionMethod->invokeArgs(Object(Formo_Driver_Group), Array)
#18 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(64): Formo_Core_Container->__call('render', Array)
#19 /Volumes/Files/Sites/darth/bane/modules/formo/views/formo/html/form.php(6): Formo_Core_Validator->__call('render', Array)
#20 /Volumes/Files/Sites/darth/bane/modules/formo/views/formo/html/form.php(6): Formo_Form->render()
#21 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/view.php(134): include('/Volumes/Files/...')
#22 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/view.php(175): Formo_Core_View->_capture('/Volumes/Files/...', Array)
#23 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/driver.php(407): Formo_Core_View->render('formo/html/form')
#24 [internal function]: Formo_Core_Driver->render()
#25 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/container.php(147): ReflectionMethod->invokeArgs(Object(Formo_Driver_Form), Array)
#26 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(64): Formo_Core_Container->__call('render', Array)
#27 /Volumes/Files/Sites/darth/bane/application/views/admin/form.php(8): Formo_Core_Validator->__call('render', Array)
#28 /Volumes/Files/Sites/darth/bane/application/views/admin/form.php(8): Formo_Form->render()
#29 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#30 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#31 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#32 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#33 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#34 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#35 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#36 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(151): Kohana_Controller_Template->after()
#37 [internal function]: Controller_Site->after()
#38 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#39 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#40 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#41 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#42 {main}
2012-05-11 14:26:37 --- ERROR: ReflectionException [ 0 ]: Function number() does not exist ~ SYSPATH/classes/kohana/validation.php [ 383 ]
2012-05-11 14:26:37 --- STRACE: ReflectionException [ 0 ]: Function number() does not exist ~ SYSPATH/classes/kohana/validation.php [ 383 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/validation.php(383): ReflectionFunction->__construct('number')
#1 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator/field.php(68): Kohana_Validation->check()
#2 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(125): Formo_Core_Validator_Field->validate(true)
#3 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(125): Formo_Core_Validator->validate(true)
#4 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(85): Formo_Core_Validator->validate()
#5 [internal function]: Controller_Admin_Leads->action_form()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-05-11 14:27:53 --- ERROR: ReflectionException [ 0 ]: Function _set_number() does not exist ~ SYSPATH/classes/kohana/validation.php [ 383 ]
2012-05-11 14:27:53 --- STRACE: ReflectionException [ 0 ]: Function _set_number() does not exist ~ SYSPATH/classes/kohana/validation.php [ 383 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/validation.php(383): ReflectionFunction->__construct('_set_number')
#1 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator/field.php(68): Kohana_Validation->check()
#2 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(125): Formo_Core_Validator_Field->validate(true)
#3 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(125): Formo_Core_Validator->validate(true)
#4 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(85): Formo_Core_Validator->validate()
#5 [internal function]: Controller_Admin_Leads->action_form()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-05-11 14:28:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads/detail/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-11 14:28:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads/detail/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-11 14:30:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads/detail/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-11 14:30:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads/detail/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-11 14:33:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads/detail/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-11 14:33:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads/detail/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
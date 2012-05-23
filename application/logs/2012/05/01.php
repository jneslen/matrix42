<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-01 08:35:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-01 08:35:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-01 08:57:27 --- ERROR: View_Exception [ 0 ]: The requested view public/signup could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-01 08:57:27 --- STRACE: View_Exception [ 0 ]: The requested view public/signup could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('public/signup')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(30): Kohana_View->__construct('public/signup', NULL)
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(83): Kohana_View::factory('public/signup')
#3 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(49): Controller_Public->lead_form()
#4 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#5 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#6 [internal function]: Controller_Public->action_index()
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#11 {main}
2012-05-01 08:59:51 --- ERROR: ErrorException [ 1 ]: Class 'Optimus\Model\Phone' not found ~ APPPATH/classes/model/user.php [ 237 ]
2012-05-01 08:59:51 --- STRACE: ErrorException [ 1 ]: Class 'Optimus\Model\Phone' not found ~ APPPATH/classes/model/user.php [ 237 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-01 09:00:51 --- ERROR: ErrorException [ 1 ]: Class 'Formo' not found ~ APPPATH/classes/model/model.php [ 36 ]
2012-05-01 09:00:51 --- STRACE: ErrorException [ 1 ]: Class 'Formo' not found ~ APPPATH/classes/model/model.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-01 09:01:19 --- ERROR: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/model/phone.php [ 14 ]
2012-05-01 09:01:19 --- STRACE: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/model/phone.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-01 15:12:05 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/formo/classes/formo/core/view/html.php [ 284 ]
2012-05-01 15:12:05 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/formo/classes/formo/core/view/html.php [ 284 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/Volumes/Files/...', 284, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/view/html.php(284): implode(' ', Array)
#2 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/view/html.php(395): Formo_Core_View_HTML->_attr_to_str()
#3 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/view/html.php(460): Formo_Core_View_HTML->open()
#4 /Volumes/Files/Sites/darth/bane/modules/formo/views/formo/html/submit.php(2): Formo_Core_View_HTML->html()
#5 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/view.php(134): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/view.php(175): Formo_Core_View->_capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/driver.php(407): Formo_Core_View->render('formo/html/subm...')
#8 [internal function]: Formo_Core_Driver->render()
#9 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/container.php(147): ReflectionMethod->invokeArgs(Object(Formo_Driver_Submit), Array)
#10 /Volumes/Files/Sites/darth/bane/application/views/lead_form.php(38): Formo_Core_Container->__call('render', Array)
#11 /Volumes/Files/Sites/darth/bane/application/views/lead_form.php(38): Formo_Field->render()
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#13 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#15 [internal function]: Kohana_View->__toString()
#16 /Volumes/Files/Sites/darth/bane/modules/komponent/classes/komponent/core.php(50): str_replace('%%leadform%%', Object(View), '%%leadform%%')
#17 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(36): Komponent_Core->replace(Object(Darth\Model\Content))
#18 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(76): Darth\Model\Menu->replace_contents()
#19 [internal function]: Controller_Public->action_index()
#20 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#21 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#22 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#23 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#24 {main}
2012-05-01 15:16:26 --- ERROR: ErrorException [ 1 ]: Class 'Formo_Driver_Send Inquiry' not found ~ MODPATH/formo/classes/formo/core/container.php [ 768 ]
2012-05-01 15:16:26 --- STRACE: ErrorException [ 1 ]: Class 'Formo_Driver_Send Inquiry' not found ~ MODPATH/formo/classes/formo/core/container.php [ 768 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-01 15:17:24 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/views/lead_form.php [ 38 ]
2012-05-01 15:17:24 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/views/lead_form.php [ 38 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
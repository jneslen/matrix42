<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-09 11:23:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method Darth\Model\Event::_formo_field() ~ APPPATH/classes/model/event.php [ 23 ]
2012-05-09 11:23:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method Darth\Model\Event::_formo_field() ~ APPPATH/classes/model/event.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-09 11:26:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method Darth\Model\Event::_formo_rules() ~ APPPATH/classes/model/model.php [ 52 ]
2012-05-09 11:26:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method Darth\Model\Event::_formo_rules() ~ APPPATH/classes/model/model.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-09 11:42:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/clients/edit/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-09 11:42:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/clients/edit/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-09 11:54:43 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 812 ]
2012-05-09 11:54:43 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 812 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 812, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(198): Kohana_Request->__construct('', NULL)
#2 /Volumes/Files/Sites/darth/bane/index.php(102): Kohana_Request::factory()
#3 {main}
2012-05-09 11:55:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-09 11:55:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-09 11:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL public/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-09 11:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL public/index was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-09 11:56:57 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 812 ]
2012-05-09 11:56:57 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/kohana/request.php [ 812 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', '/Volumes/Files/...', 812, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(198): Kohana_Request->__construct('', NULL)
#2 /Volumes/Files/Sites/darth/bane/index.php(102): Kohana_Request::factory()
#3 {main}
2012-05-09 12:51:55 --- ERROR: ErrorException [ 2 ]: date() expects at least 1 parameter, 0 given ~ APPPATH/classes/mapper/event.php [ 18 ]
2012-05-09 12:51:55 --- STRACE: ErrorException [ 2 ]: date() expects at least 1 parameter, 0 given ~ APPPATH/classes/mapper/event.php [ 18 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'date() expects ...', '/Volumes/Files/...', 18, Array)
#1 /Volumes/Files/Sites/darth/bane/application/classes/mapper/event.php(18): date()
#2 /Volumes/Files/Sites/darth/bane/application/classes/kacela.php(7): Darth\Mapper\Event->find_active(Object(Kacela\Criteria))
#3 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(24): Kacela::find_active('event', Object(Kacela\Criteria))
#4 [internal function]: Controller_Public_Index->action_index()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-09 12:52:39 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kacela\Criteria::debug() ~ APPPATH/classes/mapper/event.php [ 19 ]
2012-05-09 12:52:39 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kacela\Criteria::debug() ~ APPPATH/classes/mapper/event.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-09 12:54:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kacela\Collection::debug() ~ APPPATH/classes/mapper/event.php [ 21 ]
2012-05-09 12:54:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kacela\Collection::debug() ~ APPPATH/classes/mapper/event.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-09 12:55:20 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kacela\Collection::debug() ~ APPPATH/classes/controller/public/index.php [ 25 ]
2012-05-09 12:55:20 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kacela\Collection::debug() ~ APPPATH/classes/controller/public/index.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-09 12:56:11 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kacela\Criteria::debug() ~ APPPATH/classes/controller/public/index.php [ 25 ]
2012-05-09 12:56:11 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kacela\Criteria::debug() ~ APPPATH/classes/controller/public/index.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-09 12:56:18 --- ERROR: ErrorException [ 8 ]: Undefined property: Kacela\Criteria::$debug ~ APPPATH/classes/controller/public/index.php [ 25 ]
2012-05-09 12:56:18 --- STRACE: ErrorException [ 8 ]: Undefined property: Kacela\Criteria::$debug ~ APPPATH/classes/controller/public/index.php [ 25 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(25): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Files/...', 25, Array)
#1 [internal function]: Controller_Public_Index->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-05-09 13:20:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: release ~ APPPATH/views/home_page.php [ 76 ]
2012-05-09 13:20:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: release ~ APPPATH/views/home_page.php [ 76 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/home_page.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 76, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(151): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-09 13:21:32 --- ERROR: ErrorException [ 8 ]: Undefined variable: release ~ APPPATH/views/home_page.php [ 76 ]
2012-05-09 13:21:32 --- STRACE: ErrorException [ 8 ]: Undefined variable: release ~ APPPATH/views/home_page.php [ 76 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/home_page.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 76, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(151): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-09 13:22:49 --- ERROR: Exception [ 0 ]: Specified key (desciption) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-09 13:22:49 --- STRACE: Exception [ 0 ]: Specified key (desciption) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/home_page.php(80): Kacela\Model\Model->__get('desciption')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(151): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-09 13:23:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-09 13:23:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-09 13:23:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-09 13:23:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-09 13:23:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-09 13:23:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-09 13:23:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-09 13:23:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-09 13:25:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-09 13:25:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-09 13:25:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-09 13:25:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-09 13:27:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-09 13:27:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-09 13:27:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-09 13:27:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-09 13:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-09 13:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-09 13:27:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-09 13:27:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-09 13:28:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-09 13:28:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-09 13:28:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-09 13:28:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-event.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-09 13:36:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL press/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-09 13:36:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL press/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-09 15:22:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL events/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-09 15:22:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL events/1 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-09 15:22:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-release.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-09 15:22:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-release.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-09 15:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-release.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-09 15:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/thumbnails/events/conference-release.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-09 15:24:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: release ~ APPPATH/views/events/detail.php [ 3 ]
2012-05-09 15:24:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: release ~ APPPATH/views/events/detail.php [ 3 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/events/detail.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 3, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(43): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(151): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Events))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
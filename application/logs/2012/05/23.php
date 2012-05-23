<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-23 08:32:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 08:32:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 12:40:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 12:40:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 12:50:57 --- ERROR: Exception [ 0 ]: Failed to find mapper (Press_release)! ~ MODPATH/kacela/vendor/Gacela/library/Gacela.php [ 242 ]
2012-05-23 12:50:57 --- STRACE: Exception [ 0 ]: Failed to find mapper (Press_release)! ~ MODPATH/kacela/vendor/Gacela/library/Gacela.php [ 242 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(80): Gacela->loadMapper('Press_release')
#1 /Volumes/Files/Sites/darth/bane/application/classes/kacela.php(7): Kacela_Core::load('press_release')
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(26): Kacela::find_active('press_release', Object(Kacela\Criteria))
#3 [internal function]: Controller_Public_Index->action_index()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-05-23 12:52:39 --- ERROR: Exception [ 0 ]: Error Code: 42S02Array
(
    [0] => 42S02
    [1] => 1146
    [2] => Table 'darth.presses' doesn't exist
)
Param Dump: ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Mysql.php [ 47 ]
2012-05-23 12:52:39 --- STRACE: Exception [ 0 ]: Error Code: 42S02Array
(
    [0] => 42S02
    [1] => 1146
    [2] => Table 'darth.presses' doesn't exist
)
Param Dump: ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Mysql.php [ 47 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/DataSource.php(81): Gacela\DataSource\Adapter\Mysql->load(Object(PDO), 'presses', 'darth')
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(395): Gacela\DataSource\DataSource->loadResource('presses')
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(186): Gacela\Mapper\Mapper->_initResource()
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(762): Gacela\Mapper\Mapper->_init()
#4 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(485): Gacela\Mapper\Mapper->init()
#5 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela.php(245): Gacela\Mapper\Mapper->__construct()
#6 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(80): Gacela->loadMapper('Press')
#7 /Volumes/Files/Sites/darth/bane/application/classes/kacela.php(7): Kacela_Core::load('press')
#8 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(26): Kacela::find_active('press', Object(Kacela\Criteria))
#9 [internal function]: Controller_Public_Index->action_index()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-23 12:52:55 --- ERROR: Exception [ 0 ]: Error Code: 42S02Array
(
    [0] => 42S02
    [1] => 1146
    [2] => Table 'darth.presses' doesn't exist
)
Param Dump: ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Mysql.php [ 47 ]
2012-05-23 12:52:55 --- STRACE: Exception [ 0 ]: Error Code: 42S02Array
(
    [0] => 42S02
    [1] => 1146
    [2] => Table 'darth.presses' doesn't exist
)
Param Dump: ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Mysql.php [ 47 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/DataSource.php(81): Gacela\DataSource\Adapter\Mysql->load(Object(PDO), 'presses', 'darth')
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(395): Gacela\DataSource\DataSource->loadResource('presses')
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(186): Gacela\Mapper\Mapper->_initResource()
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(762): Gacela\Mapper\Mapper->_init()
#4 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(485): Gacela\Mapper\Mapper->init()
#5 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela.php(245): Gacela\Mapper\Mapper->__construct()
#6 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(80): Gacela->loadMapper('Press')
#7 /Volumes/Files/Sites/darth/bane/application/classes/kacela.php(7): Kacela_Core::load('press')
#8 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(26): Kacela::find_active('press', Object(Kacela\Criteria))
#9 [internal function]: Controller_Public_Index->action_index()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-23 12:53:00 --- ERROR: Exception [ 0 ]: Error Code: 42S02Array
(
    [0] => 42S02
    [1] => 1146
    [2] => Table 'darth.presses' doesn't exist
)
Param Dump: ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Mysql.php [ 47 ]
2012-05-23 12:53:00 --- STRACE: Exception [ 0 ]: Error Code: 42S02Array
(
    [0] => 42S02
    [1] => 1146
    [2] => Table 'darth.presses' doesn't exist
)
Param Dump: ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Mysql.php [ 47 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/DataSource.php(81): Gacela\DataSource\Adapter\Mysql->load(Object(PDO), 'presses', 'darth')
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(395): Gacela\DataSource\DataSource->loadResource('presses')
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(186): Gacela\Mapper\Mapper->_initResource()
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(762): Gacela\Mapper\Mapper->_init()
#4 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(485): Gacela\Mapper\Mapper->init()
#5 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela.php(245): Gacela\Mapper\Mapper->__construct()
#6 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(80): Gacela->loadMapper('Press')
#7 /Volumes/Files/Sites/darth/bane/application/classes/kacela.php(7): Kacela_Core::load('press')
#8 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(26): Kacela::find_active('press', Object(Kacela\Criteria))
#9 [internal function]: Controller_Public_Index->action_index()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-23 14:18:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 14:18:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 14:24:00 --- ERROR: ErrorException [ 8 ]: Undefined property: Kacela::$_cacheEnabled ~ MODPATH/kacela/classes/kacela/core.php [ 168 ]
2012-05-23 14:24:00 --- STRACE: ErrorException [ 8 ]: Undefined property: Kacela::$_cacheEnabled ~ MODPATH/kacela/classes/kacela/core.php [ 168 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(168): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Files/...', 168, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela.php(268): Kacela_Core->cache('mapper_User')
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(80): Gacela->loadMapper('User')
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(46): Kacela_Core::load('user')
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(271): Kacela_Core::find('user', 1)
#5 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(58): Controller_Site->_set_user()
#6 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(29): Controller_Site->before()
#7 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(7): Controller_Public->before()
#8 [internal function]: Controller_Public_Index->before()
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Index))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#13 {main}
2012-05-23 14:25:22 --- ERROR: ErrorException [ 1 ]: Class 'Cache' not found ~ MODPATH/kacela/init.php [ 32 ]
2012-05-23 14:25:22 --- STRACE: ErrorException [ 1 ]: Class 'Cache' not found ~ MODPATH/kacela/init.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 14:28:14 --- ERROR: ErrorException [ 1 ]: Class 'Cache' not found ~ MODPATH/kacela/init.php [ 32 ]
2012-05-23 14:28:14 --- STRACE: ErrorException [ 1 ]: Class 'Cache' not found ~ MODPATH/kacela/init.php [ 32 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 14:28:48 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/cache/classes/kohana/cache.php [ 123 ]
2012-05-23 14:28:48 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/cache/classes/kohana/cache.php [ 123 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 14:30:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/cache/classes/kohana/cache.php [ 123 ]
2012-05-23 14:30:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH/cache/classes/kohana/cache.php [ 123 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 14:33:32 --- ERROR: Exception [ 0 ]: Specified key (menus) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-23 14:33:32 --- STRACE: Exception [ 0 ]: Specified key (menus) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/tree.php(8): Kacela\Model\Model->__get('menus')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/application/views/admin/cms/cms.php(8): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(52): Kohana_View->__toString()
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(177): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Site->after()
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Cms))
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#18 {main}
2012-05-23 14:35:17 --- ERROR: Exception [ 0 ]: Specified key (menus) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-23 14:35:17 --- STRACE: Exception [ 0 ]: Specified key (menus) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/tree.php(8): Kacela\Model\Model->__get('menus')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/application/views/admin/cms/cms.php(8): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(52): Kohana_View->__toString()
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(177): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Site->after()
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Cms))
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#18 {main}
2012-05-23 14:38:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 14:38:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 14:39:50 --- ERROR: Exception [ 0 ]: Specified key (menus) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-23 14:39:50 --- STRACE: Exception [ 0 ]: Specified key (menus) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/tree.php(8): Kacela\Model\Model->__get('menus')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/application/views/admin/cms/cms.php(8): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(52): Kohana_View->__toString()
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(177): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Site->after()
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Cms))
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#18 {main}
2012-05-23 14:40:32 --- ERROR: Exception [ 0 ]: Specified key (menus) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-23 14:40:32 --- STRACE: Exception [ 0 ]: Specified key (menus) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/tree.php(8): Kacela\Model\Model->__get('menus')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/application/views/admin/cms/cms.php(8): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(52): Kohana_View->__toString()
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(177): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Site->after()
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Cms))
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#18 {main}
2012-05-23 14:41:01 --- ERROR: Exception [ 0 ]: Specified key (menus) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-23 14:41:01 --- STRACE: Exception [ 0 ]: Specified key (menus) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/tree.php(8): Kacela\Model\Model->__get('menus')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/application/views/admin/cms/cms.php(8): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(52): Kohana_View->__toString()
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(177): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Site->after()
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Cms))
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#18 {main}
2012-05-23 14:42:03 --- ERROR: Exception [ 0 ]: Specified key (sub_menus) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-23 14:42:03 --- STRACE: Exception [ 0 ]: Specified key (sub_menus) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/tree.php(8): Kacela\Model\Model->__get('sub_menus')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/application/views/admin/cms/cms.php(8): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(52): Kohana_View->__toString()
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(177): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Site->after()
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Cms))
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#18 {main}
2012-05-23 14:42:27 --- ERROR: Exception [ 0 ]: Specified key (menus) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-23 14:42:27 --- STRACE: Exception [ 0 ]: Specified key (menus) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/tree.php(9): Kacela\Model\Model->__get('menus')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/application/views/admin/cms/cms.php(8): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(52): Kohana_View->__toString()
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(177): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Site->after()
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Cms))
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#18 {main}
2012-05-23 14:42:49 --- ERROR: Exception [ 0 ]: Specified key (menus) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-23 14:42:49 --- STRACE: Exception [ 0 ]: Specified key (menus) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/tree.php(9): Kacela\Model\Model->__get('menus')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/application/views/admin/cms/cms.php(8): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(52): Kohana_View->__toString()
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#12 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(177): Kohana_Controller_Template->after()
#13 [internal function]: Controller_Site->after()
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Cms))
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#18 {main}
2012-05-23 14:43:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 14:43:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 14:44:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 14:44:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 14:44:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 14:44:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 14:47:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 14:47:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 14:55:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 14:55:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 14:55:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 14:55:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 14:57:18 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 14:57:18 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 14:57:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 14:57:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 14:57:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 14:57:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:00:47 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:00:47 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:00:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 15:00:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 15:00:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:00:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:01:15 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:01:15 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:01:50 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:01:50 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:02:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:02:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:02:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 15:02:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 15:02:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:02:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:02:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:02:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:02:52 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:02:52 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:04:41 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:04:41 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:04:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:04:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:05:33 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:05:33 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:09:16 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:09:16 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:10:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:10:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:10:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:10:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:11:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/classes/model/menu.php [ 22 ]
2012-05-23 15:11:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH/classes/model/menu.php [ 22 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 22, Array)
#1 /Volumes/Files/Sites/darth/bane/application/classes/model/menu.php(70): Darth\Model\Menu->get_content('main', true)
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/cms.php(60): Darth\Model\Menu->get_form()
#3 [internal function]: Controller_Admin_Cms->action_form()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Cms))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-05-23 15:12:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:12:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:12:58 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:12:58 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:13:35 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:13:35 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:15:50 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:15:50 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:16:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:16:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:18:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 15:18:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 15:19:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:19:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:19:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:19:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:19:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 15:19:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 15:20:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 15:20:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 15:20:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 15:20:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 15:21:22 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:21:22 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 15:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 15:21:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:21:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:22:44 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:22:44 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:37:30 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:37:30 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:41:08 --- ERROR: ErrorException [ 1 ]: Call to a member function val() on a non-object ~ APPPATH/classes/controller/admin/cms.php [ 61 ]
2012-05-23 15:41:08 --- STRACE: ErrorException [ 1 ]: Call to a member function val() on a non-object ~ APPPATH/classes/controller/admin/cms.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:41:11 --- ERROR: ErrorException [ 1 ]: Call to a member function val() on a non-object ~ APPPATH/classes/controller/admin/cms.php [ 61 ]
2012-05-23 15:41:11 --- STRACE: ErrorException [ 1 ]: Call to a member function val() on a non-object ~ APPPATH/classes/controller/admin/cms.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:41:16 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:41:16 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:41:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:41:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:41:29 --- ERROR: ErrorException [ 1 ]: Call to a member function val() on a non-object ~ APPPATH/classes/controller/admin/cms.php [ 61 ]
2012-05-23 15:41:29 --- STRACE: ErrorException [ 1 ]: Call to a member function val() on a non-object ~ APPPATH/classes/controller/admin/cms.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:41:44 --- ERROR: ErrorException [ 1 ]: Call to a member function val() on a non-object ~ APPPATH/classes/controller/admin/cms.php [ 61 ]
2012-05-23 15:41:44 --- STRACE: ErrorException [ 1 ]: Call to a member function val() on a non-object ~ APPPATH/classes/controller/admin/cms.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:41:50 --- ERROR: ErrorException [ 1 ]: Call to a member function val() on a non-object ~ APPPATH/classes/controller/admin/cms.php [ 61 ]
2012-05-23 15:41:50 --- STRACE: ErrorException [ 1 ]: Call to a member function val() on a non-object ~ APPPATH/classes/controller/admin/cms.php [ 61 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:43:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:43:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:44:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 15:44:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 15:44:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:44:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:44:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:44:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:46:01 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:46:01 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:46:03 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:46:03 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:46:09 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:46:09 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:47:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:47:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:47:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:47:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 15:47:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
2012-05-23 15:47:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method stdClass::transform() ~ APPPATH/classes/model/model.php [ 231 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-23 16:00:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 16:00:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 16:25:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 16:25:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 16:26:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 16:26:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 16:26:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 16:26:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 16:28:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 16:28:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 16:28:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 16:28:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 16:28:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 16:28:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 16:30:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-23 16:30:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/js/plugins/themes/apple/style.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-23 16:32:15 --- ERROR: Exception [ 0 ]: Specified key (sub_menu) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-23 16:32:15 --- STRACE: Exception [ 0 ]: Specified key (sub_menu) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(67): Kacela\Model\Model->__get('sub_menu')
#1 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(29): Kohana_Menu->get_from_database(Object(Kacela\Collection))
#2 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(157): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-23 16:37:01 --- ERROR: Exception [ 0 ]: Specified key (sub_menu) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-23 16:37:01 --- STRACE: Exception [ 0 ]: Specified key (sub_menu) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(67): Kacela\Model\Model->__get('sub_menu')
#1 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(29): Kohana_Menu->get_from_database(Object(Kacela\Collection))
#2 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(157): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-23 16:37:29 --- ERROR: Exception [ 0 ]: Specified key (sub_menu) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-23 16:37:29 --- STRACE: Exception [ 0 ]: Specified key (sub_menu) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(67): Kacela\Model\Model->__get('sub_menu')
#1 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(29): Kohana_Menu->get_from_database(Object(Kacela\Collection))
#2 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(157): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-23 16:38:26 --- ERROR: Exception [ 0 ]: Specified key (sub_menu) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-23 16:38:26 --- STRACE: Exception [ 0 ]: Specified key (sub_menu) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(67): Kacela\Model\Model->__get('sub_menu')
#1 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(29): Kohana_Menu->get_from_database(Object(Kacela\Collection))
#2 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(157): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-23 16:39:38 --- ERROR: Exception [ 0 ]: Specified key (sub_menu) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-23 16:39:38 --- STRACE: Exception [ 0 ]: Specified key (sub_menu) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(67): Kacela\Model\Model->__get('sub_menu')
#1 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(29): Kohana_Menu->get_from_database(Object(Kacela\Collection))
#2 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(157): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-23 16:39:45 --- ERROR: Exception [ 0 ]: Specified key (sub_menu) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-23 16:39:45 --- STRACE: Exception [ 0 ]: Specified key (sub_menu) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(67): Kacela\Model\Model->__get('sub_menu')
#1 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(29): Kohana_Menu->get_from_database(Object(Kacela\Collection))
#2 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(157): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-23 16:39:49 --- ERROR: Exception [ 0 ]: Specified key (sub_menu) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-23 16:39:49 --- STRACE: Exception [ 0 ]: Specified key (sub_menu) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(67): Kacela\Model\Model->__get('sub_menu')
#1 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(29): Kohana_Menu->get_from_database(Object(Kacela\Collection))
#2 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(157): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-23 16:40:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: subcategories ~ APPPATH/classes/kohana/menu.php [ 68 ]
2012-05-23 16:40:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: subcategories ~ APPPATH/classes/kohana/menu.php [ 68 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(68): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 68, Array)
#1 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(29): Kohana_Menu->get_from_database(Object(Kacela\Collection))
#2 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(157): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-23 16:40:56 --- ERROR: Exception [ 0 ]: Specified key (sub_menu) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-23 16:40:56 --- STRACE: Exception [ 0 ]: Specified key (sub_menu) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(67): Kacela\Model\Model->__get('sub_menu')
#1 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(29): Kohana_Menu->get_from_database(Object(Kacela\Collection))
#2 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(41): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(157): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
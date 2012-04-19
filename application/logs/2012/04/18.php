<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-18 08:40:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-18 08:40:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-18 11:19:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: sidebar_views ~ MODPATH/site/views/sidebar/sidebar.php [ 4 ]
2012-04-18 11:19:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: sidebar_views ~ MODPATH/site/views/sidebar/sidebar.php [ 4 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/sidebar/sidebar.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 4, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/modules/sidebar/classes/sidebar/core.php(63): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(96): Sidebar_Core->render()
#5 [internal function]: Controller_Site->after()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-04-18 11:21:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: sidebar_views ~ MODPATH/site/views/sidebar/sidebar.php [ 4 ]
2012-04-18 11:21:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: sidebar_views ~ MODPATH/site/views/sidebar/sidebar.php [ 4 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/sidebar/sidebar.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 4, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/modules/sidebar/classes/sidebar/core.php(63): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(96): Sidebar_Core->render()
#5 [internal function]: Controller_Site->after()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-04-18 11:21:24 --- ERROR: ErrorException [ 4096 ]: Object of class Sidebar could not be converted to string ~ MODPATH/site/views/public.php [ 46 ]
2012-04-18 11:21:24 --- STRACE: ErrorException [ 4096 ]: Object of class Sidebar could not be converted to string ~ MODPATH/site/views/public.php [ 46 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(46): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Files/...', 46, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(139): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Site->after()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-04-18 11:21:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: sidebar_views ~ MODPATH/site/views/sidebar/sidebar.php [ 4 ]
2012-04-18 11:21:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: sidebar_views ~ MODPATH/site/views/sidebar/sidebar.php [ 4 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/site/views/sidebar/sidebar.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 4, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/modules/sidebar/classes/sidebar/core.php(63): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(132): Sidebar_Core->render()
#5 [internal function]: Controller_Site->after()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-04-18 13:35:21 --- ERROR: View_Exception [ 0 ]: The requested view temp could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-04-18 13:35:21 --- STRACE: View_Exception [ 0 ]: The requested view temp could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(137): Kohana_View->set_filename('temp')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(30): Kohana_View->__construct('temp', NULL)
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(20): Kohana_View::factory('temp')
#3 [internal function]: Controller_Public_Solutions->action_index()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-04-18 13:45:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/bullet.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-18 13:45:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/bullet.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-18 13:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/bullet.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-18 13:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/bullet.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-18 13:46:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/bullet.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-18 13:46:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/bullet.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-18 16:01:18 --- ERROR: Database_Exception [ 1146 ]: Table 'darth.menu_items' doesn't exist [ SHOW FULL COLUMNS FROM `menu_items` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-04-18 16:01:18 --- STRACE: Database_Exception [ 1146 ]: Table 'darth.menu_items' doesn't exist [ SHOW FULL COLUMNS FROM `menu_items` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu_items')
#2 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(24): Kohana_ORM::factory('menu_item')
#7 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(38): Kohana_Menu->__construct('menu/public')
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(122): Kohana_Menu::factory('public')
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-04-18 16:03:10 --- ERROR: ErrorException [ 1 ]: Class 'Model_Menu' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
2012-04-18 16:03:10 --- STRACE: ErrorException [ 1 ]: Class 'Model_Menu' not found ~ MODPATH/orm/classes/kohana/orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-18 16:09:13 --- ERROR: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-04-18 16:09:13 --- STRACE: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(64): Kohana_ORM->__get('subcategories')
#1 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(26): Kohana_Menu->get_from_database_orm(Object(Database_MySQL_Result))
#2 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(38): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(122): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-04-18 16:13:23 --- ERROR: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-04-18 16:13:23 --- STRACE: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(64): Kohana_ORM->__get('subcategories')
#1 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(26): Kohana_Menu->get_from_database_orm(Object(Database_MySQL_Result))
#2 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(38): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(122): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-04-18 16:14:51 --- ERROR: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-04-18 16:14:51 --- STRACE: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(64): Kohana_ORM->__get('subcategories')
#1 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(26): Kohana_Menu->get_from_database_orm(Object(Database_MySQL_Result))
#2 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(38): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(122): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-04-18 16:16:07 --- ERROR: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-04-18 16:16:07 --- STRACE: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(64): Kohana_ORM->__get('subcategories')
#1 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(26): Kohana_Menu->get_from_database_orm(Object(Database_MySQL_Result))
#2 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(38): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(122): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-04-18 16:20:17 --- ERROR: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-04-18 16:20:17 --- STRACE: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(64): Kohana_ORM->__get('subcategories')
#1 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(26): Kohana_Menu->get_from_database_orm(Object(Database_MySQL_Result))
#2 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(38): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(122): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-04-18 16:21:37 --- ERROR: Database_Exception [ 1146 ]: Table 'darth.menu_items' doesn't exist [ SHOW FULL COLUMNS FROM `menu_items` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-04-18 16:21:37 --- STRACE: Database_Exception [ 1146 ]: Table 'darth.menu_items' doesn't exist [ SHOW FULL COLUMNS FROM `menu_items` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu_items')
#2 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(24): Kohana_ORM::factory('menu_item')
#7 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(38): Kohana_Menu->__construct('menu/public')
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(122): Kohana_Menu::factory('public')
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-04-18 16:21:56 --- ERROR: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu_item class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-04-18 16:21:56 --- STRACE: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu_item class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(64): Kohana_ORM->__get('subcategories')
#1 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(26): Kohana_Menu->get_from_database_orm(Object(Database_MySQL_Result))
#2 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(38): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(122): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-04-18 16:32:09 --- ERROR: Database_Exception [ 1146 ]: Table 'darth.menu_items' doesn't exist [ SHOW FULL COLUMNS FROM `menu_items` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2012-04-18 16:32:09 --- STRACE: Database_Exception [ 1146 ]: Table 'darth.menu_items' doesn't exist [ SHOW FULL COLUMNS FROM `menu_items` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/database/classes/kohana/database/mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(1504): Kohana_Database_MySQL->list_columns('menu_items')
#2 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(392): Kohana_ORM->list_columns(true)
#3 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(337): Kohana_ORM->reload_columns()
#4 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(246): Kohana_ORM->_initialize()
#5 /Volumes/Files/Sites/darth/bane/modules/orm/classes/kohana/orm.php(37): Kohana_ORM->__construct(NULL)
#6 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(24): Kohana_ORM::factory('menu_item')
#7 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(38): Kohana_Menu->__construct('menu/public')
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(122): Kohana_Menu::factory('public')
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-04-18 16:32:27 --- ERROR: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-04-18 16:32:27 --- STRACE: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(64): Kohana_ORM->__get('subcategories')
#1 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(26): Kohana_Menu->get_from_database_orm(Object(Database_MySQL_Result))
#2 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(38): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(122): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-04-18 16:37:57 --- ERROR: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-04-18 16:37:57 --- STRACE: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(64): Kohana_ORM->__get('subcategories')
#1 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(26): Kohana_Menu->get_from_database_orm(Object(Database_MySQL_Result))
#2 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(38): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(122): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-04-18 16:38:13 --- ERROR: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-04-18 16:38:13 --- STRACE: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(64): Kohana_ORM->__get('subcategories')
#1 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(26): Kohana_Menu->get_from_database_orm(Object(Database_MySQL_Result))
#2 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(38): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(122): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-04-18 17:01:57 --- ERROR: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-04-18 17:01:57 --- STRACE: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(64): Kohana_ORM->__get('subcategories')
#1 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(26): Kohana_Menu->get_from_database_orm(Object(Database_MySQL_Result))
#2 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(38): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(122): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-04-18 17:05:04 --- ERROR: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-04-18 17:05:04 --- STRACE: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(59): Kohana_ORM->__get('subcategories')
#1 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(26): Kohana_Menu->get_from_database_orm(Object(Database_MySQL_Result))
#2 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(38): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(122): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-04-18 17:05:13 --- ERROR: Kohana_Exception [ 0 ]: The subcategory property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-04-18 17:05:13 --- STRACE: Kohana_Exception [ 0 ]: The subcategory property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(59): Kohana_ORM->__get('subcategory')
#1 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(26): Kohana_Menu->get_from_database_orm(Object(Database_MySQL_Result))
#2 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(38): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(122): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-04-18 17:08:53 --- ERROR: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-04-18 17:08:53 --- STRACE: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(59): Kohana_ORM->__get('subcategories')
#1 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(26): Kohana_Menu->get_from_database_orm(Object(Database_MySQL_Result))
#2 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(38): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(122): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
2012-04-18 17:18:41 --- ERROR: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-04-18 17:18:41 --- STRACE: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(59): Kohana_ORM->__get('subcategories')
#1 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(26): Kohana_Menu->get_from_database_orm(Object(Database_MySQL_Result))
#2 /Volumes/Files/Sites/darth/bane/modules/menu/classes/kohana/menu.php(38): Kohana_Menu->__construct('menu/public')
#3 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(122): Kohana_Menu::factory('public')
#4 [internal function]: Controller_Site->after()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#9 {main}
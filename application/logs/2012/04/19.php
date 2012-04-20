<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-19 08:39:40 --- ERROR: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-04-19 08:39:40 --- STRACE: Kohana_Exception [ 0 ]: The subcategories property does not exist in the Model_Menu class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
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
2012-04-19 09:44:15 --- ERROR: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 72 ]
2012-04-19 09:44:15 --- STRACE: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 72 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(0): PDO->__construct()
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela.php(271): Gacela\DataSource\Database->__construct(Array)
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(232): Gacela->registerDataSource('db', 'database', Array)
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/init.php(27): Kacela_Core->register_datasource('db', 'database', Array)
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(565): require_once('/Volumes/Files/...')
#5 /Volumes/Files/Sites/darth/bane/application/bootstrap.php(129): Kohana_Core::modules(Array)
#6 /Volumes/Files/Sites/darth/bane/index.php(96): require('/Volumes/Files/...')
#7 {main}
2012-04-19 09:47:46 --- ERROR: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 72 ]
2012-04-19 09:47:46 --- STRACE: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 72 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(0): PDO->__construct()
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela.php(271): Gacela\DataSource\Database->__construct(Array)
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(232): Gacela->registerDataSource('db', 'database', Array)
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/init.php(27): Kacela_Core->register_datasource('db', 'database', Array)
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(565): require_once('/Volumes/Files/...')
#5 /Volumes/Files/Sites/darth/bane/application/bootstrap.php(129): Kohana_Core::modules(Array)
#6 /Volumes/Files/Sites/darth/bane/index.php(96): require('/Volumes/Files/...')
#7 {main}
2012-04-19 09:51:00 --- ERROR: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 72 ]
2012-04-19 09:51:00 --- STRACE: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 72 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(0): PDO->__construct()
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela.php(271): Gacela\DataSource\Database->__construct(Array)
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(232): Gacela->registerDataSource('db', 'database', Array)
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/init.php(27): Kacela_Core->register_datasource('db', 'database', Array)
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(565): require_once('/Volumes/Files/...')
#5 /Volumes/Files/Sites/darth/bane/application/bootstrap.php(129): Kohana_Core::modules(Array)
#6 /Volumes/Files/Sites/darth/bane/index.php(96): require('/Volumes/Files/...')
#7 {main}
2012-04-19 09:55:22 --- ERROR: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 72 ]
2012-04-19 09:55:22 --- STRACE: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 72 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(0): PDO->__construct()
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela.php(271): Gacela\DataSource\Database->__construct(Array)
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(232): Gacela->registerDataSource('db', 'database', Array)
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/init.php(27): Kacela_Core->register_datasource('db', 'database', Array)
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(565): require_once('/Volumes/Files/...')
#5 /Volumes/Files/Sites/darth/bane/application/bootstrap.php(129): Kohana_Core::modules(Array)
#6 /Volumes/Files/Sites/darth/bane/index.php(96): require('/Volumes/Files/...')
#7 {main}
2012-04-19 09:55:35 --- ERROR: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 72 ]
2012-04-19 09:55:35 --- STRACE: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 72 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(0): PDO->__construct()
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela.php(271): Gacela\DataSource\Database->__construct(Array)
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(232): Gacela->registerDataSource('db', 'database', Array)
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/init.php(27): Kacela_Core->register_datasource('db', 'database', Array)
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(565): require_once('/Volumes/Files/...')
#5 /Volumes/Files/Sites/darth/bane/application/bootstrap.php(129): Kohana_Core::modules(Array)
#6 /Volumes/Files/Sites/darth/bane/index.php(96): require('/Volumes/Files/...')
#7 {main}
2012-04-19 09:55:52 --- ERROR: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 72 ]
2012-04-19 09:55:52 --- STRACE: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 72 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(0): PDO->__construct()
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela.php(271): Gacela\DataSource\Database->__construct(Array)
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(232): Gacela->registerDataSource('db', 'database', Array)
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/init.php(27): Kacela_Core->register_datasource('db', 'database', Array)
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(565): require_once('/Volumes/Files/...')
#5 /Volumes/Files/Sites/darth/bane/application/bootstrap.php(129): Kohana_Core::modules(Array)
#6 /Volumes/Files/Sites/darth/bane/index.php(96): require('/Volumes/Files/...')
#7 {main}
2012-04-19 10:00:37 --- ERROR: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 72 ]
2012-04-19 10:00:37 --- STRACE: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 72 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(0): PDO->__construct()
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela.php(271): Gacela\DataSource\Database->__construct(Array)
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(232): Gacela->registerDataSource('db', 'database', Array)
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/init.php(27): Kacela_Core->register_datasource('db', 'database', Array)
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(565): require_once('/Volumes/Files/...')
#5 /Volumes/Files/Sites/darth/bane/application/bootstrap.php(129): Kohana_Core::modules(Array)
#6 /Volumes/Files/Sites/darth/bane/index.php(96): require('/Volumes/Files/...')
#7 {main}
2012-04-19 10:00:41 --- ERROR: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 72 ]
2012-04-19 10:00:41 --- STRACE: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 72 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(0): PDO->__construct()
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela.php(271): Gacela\DataSource\Database->__construct(Array)
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(232): Gacela->registerDataSource('db', 'database', Array)
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/init.php(27): Kacela_Core->register_datasource('db', 'database', Array)
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(565): require_once('/Volumes/Files/...')
#5 /Volumes/Files/Sites/darth/bane/application/bootstrap.php(129): Kohana_Core::modules(Array)
#6 /Volumes/Files/Sites/darth/bane/index.php(96): require('/Volumes/Files/...')
#7 {main}
2012-04-19 10:01:45 --- ERROR: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 72 ]
2012-04-19 10:01:45 --- STRACE: PDOException [ 2002 ]: SQLSTATE[HY000] [2002] No such file or directory ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 72 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(0): PDO->__construct()
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela.php(271): Gacela\DataSource\Database->__construct(Array)
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(232): Gacela->registerDataSource('db', 'database', Array)
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/init.php(27): Kacela_Core->register_datasource('db', 'database', Array)
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(565): require_once('/Volumes/Files/...')
#5 /Volumes/Files/Sites/darth/bane/application/bootstrap.php(129): Kohana_Core::modules(Array)
#6 /Volumes/Files/Sites/darth/bane/index.php(96): require('/Volumes/Files/...')
#7 {main}
2012-04-19 10:20:12 --- ERROR: ErrorException [ 1 ]: Class 'Bane\Model\User' not found ~ APPPATH/classes/controller/public/solutions.php [ 20 ]
2012-04-19 10:20:12 --- STRACE: ErrorException [ 1 ]: Class 'Bane\Model\User' not found ~ APPPATH/classes/controller/public/solutions.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-19 10:20:25 --- ERROR: ErrorException [ 1 ]: Class 'Bane\Model\User' not found ~ APPPATH/classes/controller/public/solutions.php [ 20 ]
2012-04-19 10:20:25 --- STRACE: ErrorException [ 1 ]: Class 'Bane\Model\User' not found ~ APPPATH/classes/controller/public/solutions.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-19 10:20:36 --- ERROR: ErrorException [ 1 ]: Class 'Darth\Model\User' not found ~ APPPATH/classes/controller/public/solutions.php [ 20 ]
2012-04-19 10:20:36 --- STRACE: ErrorException [ 1 ]: Class 'Darth\Model\User' not found ~ APPPATH/classes/controller/public/solutions.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-19 10:22:21 --- ERROR: ErrorException [ 1 ]: Class 'Darth\Model\User' not found ~ APPPATH/classes/controller/public/solutions.php [ 20 ]
2012-04-19 10:22:21 --- STRACE: ErrorException [ 1 ]: Class 'Darth\Model\User' not found ~ APPPATH/classes/controller/public/solutions.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-19 12:11:41 --- ERROR: ErrorException [ 1 ]: Call to undefined method Darth\Model\Menu::get_menu() ~ APPPATH/classes/controller/public/solutions.php [ 21 ]
2012-04-19 12:11:41 --- STRACE: ErrorException [ 1 ]: Call to undefined method Darth\Model\Menu::get_menu() ~ APPPATH/classes/controller/public/solutions.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-19 12:12:50 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kacela::find_active() ~ APPPATH/classes/controller/public/solutions.php [ 20 ]
2012-04-19 12:12:50 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kacela::find_active() ~ APPPATH/classes/controller/public/solutions.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-19 12:15:23 --- ERROR: Exception [ 0 ]: Specified key (name) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-19 12:15:23 --- STRACE: Exception [ 0 ]: Specified key (name) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(23): Kacela\Model\Model->__get('name')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-19 12:33:11 --- ERROR: ErrorException [ 1 ]: Call to undefined method Darth\Model\Menu::child_menu() ~ APPPATH/classes/controller/public/solutions.php [ 23 ]
2012-04-19 12:33:11 --- STRACE: ErrorException [ 1 ]: Call to undefined method Darth\Model\Menu::child_menu() ~ APPPATH/classes/controller/public/solutions.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-19 12:35:46 --- ERROR: Exception [ 0 ]: Specified key (menu) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-19 12:35:46 --- STRACE: Exception [ 0 ]: Specified key (menu) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(23): Kacela\Model\Model->__get('menu')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-19 12:35:51 --- ERROR: Exception [ 0 ]: Specified key (menus) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-19 12:35:51 --- STRACE: Exception [ 0 ]: Specified key (menus) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(23): Kacela\Model\Model->__get('menus')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-19 12:36:04 --- ERROR: Exception [ 0 ]: Specified key (child) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-19 12:36:04 --- STRACE: Exception [ 0 ]: Specified key (child) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(23): Kacela\Model\Model->__get('child')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-19 12:36:10 --- ERROR: Exception [ 0 ]: Specified key (children) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-19 12:36:10 --- STRACE: Exception [ 0 ]: Specified key (children) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(23): Kacela\Model\Model->__get('children')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-19 12:41:51 --- ERROR: ErrorException [ 8 ]: Undefined property: Kacela\Collection::$dependents ~ APPPATH/classes/controller/public/solutions.php [ 21 ]
2012-04-19 12:41:51 --- STRACE: ErrorException [ 8 ]: Undefined property: Kacela\Collection::$dependents ~ APPPATH/classes/controller/public/solutions.php [ 21 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Files/...', 21, Array)
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-19 12:41:56 --- ERROR: ErrorException [ 8 ]: Undefined property: Kacela\Collection::$_dependents ~ APPPATH/classes/controller/public/solutions.php [ 21 ]
2012-04-19 12:41:56 --- STRACE: ErrorException [ 8 ]: Undefined property: Kacela\Collection::$_dependents ~ APPPATH/classes/controller/public/solutions.php [ 21 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Files/...', 21, Array)
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-19 12:42:07 --- ERROR: ErrorException [ 8 ]: Undefined property: Kacela\Collection::$menu ~ APPPATH/classes/controller/public/solutions.php [ 21 ]
2012-04-19 12:42:07 --- STRACE: ErrorException [ 8 ]: Undefined property: Kacela\Collection::$menu ~ APPPATH/classes/controller/public/solutions.php [ 21 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Files/...', 21, Array)
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-19 12:42:12 --- ERROR: ErrorException [ 8 ]: Undefined property: Kacela\Collection::$menus ~ APPPATH/classes/controller/public/solutions.php [ 21 ]
2012-04-19 12:42:12 --- STRACE: ErrorException [ 8 ]: Undefined property: Kacela\Collection::$menus ~ APPPATH/classes/controller/public/solutions.php [ 21 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Files/...', 21, Array)
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-19 12:47:12 --- ERROR: ErrorException [ 1 ]: Call to undefined method Darth\Model\Menu::sub_menu() ~ APPPATH/classes/controller/public/solutions.php [ 24 ]
2012-04-19 12:47:12 --- STRACE: ErrorException [ 1 ]: Call to undefined method Darth\Model\Menu::sub_menu() ~ APPPATH/classes/controller/public/solutions.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-19 12:47:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method Darth\Model\Menu::get_sub_menu() ~ APPPATH/classes/controller/public/solutions.php [ 24 ]
2012-04-19 12:47:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method Darth\Model\Menu::get_sub_menu() ~ APPPATH/classes/controller/public/solutions.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-19 12:59:45 --- ERROR: ErrorException [ 1 ]: Call to undefined method Menu::factory() ~ MODPATH/site/classes/controller/site.php [ 122 ]
2012-04-19 12:59:45 --- STRACE: ErrorException [ 1 ]: Call to undefined method Menu::factory() ~ MODPATH/site/classes/controller/site.php [ 122 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-19 13:00:38 --- ERROR: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH/classes/kohana/menu.php [ 24 ]
2012-04-19 13:00:38 --- STRACE: ErrorException [ 1 ]: Class 'ORM' not found ~ APPPATH/classes/kohana/menu.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-19 13:01:27 --- ERROR: ErrorException [ 1 ]: Call to undefined method Darth\Model\Menu::where() ~ APPPATH/classes/kohana/menu.php [ 25 ]
2012-04-19 13:01:27 --- STRACE: ErrorException [ 1 ]: Call to undefined method Darth\Model\Menu::where() ~ APPPATH/classes/kohana/menu.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-19 13:05:10 --- ERROR: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH/classes/kohana/menu.php [ 67 ]
2012-04-19 13:05:10 --- STRACE: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH/classes/kohana/menu.php [ 67 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-19 13:06:57 --- ERROR: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH/classes/kohana/menu.php [ 67 ]
2012-04-19 13:06:57 --- STRACE: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH/classes/kohana/menu.php [ 67 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-04-19 13:08:04 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$sub_menu ~ APPPATH/classes/kohana/menu.php [ 66 ]
2012-04-19 13:08:04 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$sub_menu ~ APPPATH/classes/kohana/menu.php [ 66 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(66): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Files/...', 66, Array)
#1 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(68): Kohana_Menu->get_from_database(Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(28): Kohana_Menu->get_from_database(Object(Kacela\Collection))
#3 /Volumes/Files/Sites/darth/bane/application/classes/kohana/menu.php(40): Kohana_Menu->__construct('menu/public')
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(122): Kohana_Menu::factory('public')
#5 [internal function]: Controller_Site->after()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#10 {main}
2012-04-19 13:42:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-19 13:42:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-19 17:02:14 --- ERROR: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-19 17:02:14 --- STRACE: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(22): Kacela\Model\Model->__get('contents')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-19 17:02:47 --- ERROR: Exception [ 0 ]: Specified key (content) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-19 17:02:47 --- STRACE: Exception [ 0 ]: Specified key (content) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(21): Kacela\Model\Model->__get('content')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-19 17:02:53 --- ERROR: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-19 17:02:53 --- STRACE: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(21): Kacela\Model\Model->__get('contents')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-19 17:03:25 --- ERROR: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-19 17:03:25 --- STRACE: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(27): Kacela\Model\Model->__get('contents')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-04-19 17:03:42 --- ERROR: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-04-19 17:03:42 --- STRACE: Exception [ 0 ]: Specified key (contents) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/solutions.php(27): Kacela\Model\Model->__get('contents')
#1 [internal function]: Controller_Public_Solutions->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-03 09:50:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: feature ~ APPPATH/classes/controller/public/index.php [ 41 ]
2012-07-03 09:50:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: feature ~ APPPATH/classes/controller/public/index.php [ 41 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 41, Array)
#1 [internal function]: Controller_Public_Index->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-07-03 15:46:53 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/helper.php [ 70 ]
2012-07-03 15:46:53 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/helper.php [ 70 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/helper.php(70): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Files/...', 70, Array)
#1 /Volumes/Files/Sites/darth/bane/application/config/local.php(8): Helper::language()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(792): include('/Volumes/Files/...')
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/Volumes/Files/...')
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('local')
#5 /Volumes/Files/Sites/darth/bane/application/config/kacela.php(10): Kohana_Config->load('local')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(792): include('/Volumes/Files/...')
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/Volumes/Files/...')
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('kacela')
#9 /Volumes/Files/Sites/darth/bane/modules/kacela/init.php(9): Kohana_Config->load('kacela')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(565): require_once('/Volumes/Files/...')
#11 /Volumes/Files/Sites/darth/bane/application/bootstrap.php(153): Kohana_Core::modules(Array)
#12 /Volumes/Files/Sites/darth/bane/index.php(96): require('/Volumes/Files/...')
#13 {main}
2012-07-03 15:49:07 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/helper.php [ 70 ]
2012-07-03 15:49:07 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/helper.php [ 70 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/helper.php(70): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Files/...', 70, Array)
#1 /Volumes/Files/Sites/darth/bane/application/config/local.php(8): Helper::language()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(792): include('/Volumes/Files/...')
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/Volumes/Files/...')
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('local')
#5 /Volumes/Files/Sites/darth/bane/application/config/kacela.php(10): Kohana_Config->load('local')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(792): include('/Volumes/Files/...')
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/Volumes/Files/...')
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('kacela')
#9 /Volumes/Files/Sites/darth/bane/modules/kacela/init.php(9): Kohana_Config->load('kacela')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(565): require_once('/Volumes/Files/...')
#11 /Volumes/Files/Sites/darth/bane/application/bootstrap.php(153): Kohana_Core::modules(Array)
#12 /Volumes/Files/Sites/darth/bane/index.php(96): require('/Volumes/Files/...')
#13 {main}
2012-07-03 15:49:26 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/helper.php [ 70 ]
2012-07-03 15:49:26 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/helper.php [ 70 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/helper.php(70): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Files/...', 70, Array)
#1 /Volumes/Files/Sites/darth/bane/application/config/local.php(8): Helper::language()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(792): include('/Volumes/Files/...')
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/Volumes/Files/...')
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('local')
#5 /Volumes/Files/Sites/darth/bane/application/config/kacela.php(10): Kohana_Config->load('local')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(792): include('/Volumes/Files/...')
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/Volumes/Files/...')
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('kacela')
#9 /Volumes/Files/Sites/darth/bane/modules/kacela/init.php(9): Kohana_Config->load('kacela')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(565): require_once('/Volumes/Files/...')
#11 /Volumes/Files/Sites/darth/bane/application/bootstrap.php(153): Kohana_Core::modules(Array)
#12 /Volumes/Files/Sites/darth/bane/index.php(96): require('/Volumes/Files/...')
#13 {main}
2012-07-03 15:50:33 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/helper.php [ 70 ]
2012-07-03 15:50:33 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/helper.php [ 70 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/helper.php(70): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Files/...', 70, Array)
#1 /Volumes/Files/Sites/darth/bane/application/config/local.php(8): Helper::language()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(792): include('/Volumes/Files/...')
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/Volumes/Files/...')
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('local')
#5 /Volumes/Files/Sites/darth/bane/application/config/kacela.php(10): Kohana_Config->load('local')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(792): include('/Volumes/Files/...')
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/Volumes/Files/...')
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('kacela')
#9 /Volumes/Files/Sites/darth/bane/modules/kacela/init.php(9): Kohana_Config->load('kacela')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(565): require_once('/Volumes/Files/...')
#11 /Volumes/Files/Sites/darth/bane/application/bootstrap.php(153): Kohana_Core::modules(Array)
#12 /Volumes/Files/Sites/darth/bane/index.php(96): require('/Volumes/Files/...')
#13 {main}
2012-07-03 15:50:38 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/helper.php [ 70 ]
2012-07-03 15:50:38 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/helper.php [ 70 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/helper.php(70): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Files/...', 70, Array)
#1 /Volumes/Files/Sites/darth/bane/application/config/local.php(8): Helper::language()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(792): include('/Volumes/Files/...')
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/Volumes/Files/...')
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('local')
#5 /Volumes/Files/Sites/darth/bane/application/config/kacela.php(10): Kohana_Config->load('local')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(792): include('/Volumes/Files/...')
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/Volumes/Files/...')
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('kacela')
#9 /Volumes/Files/Sites/darth/bane/modules/kacela/init.php(9): Kohana_Config->load('kacela')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(565): require_once('/Volumes/Files/...')
#11 /Volumes/Files/Sites/darth/bane/application/bootstrap.php(153): Kohana_Core::modules(Array)
#12 /Volumes/Files/Sites/darth/bane/index.php(96): require('/Volumes/Files/...')
#13 {main}
2012-07-03 15:51:16 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/helper.php [ 70 ]
2012-07-03 15:51:16 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/helper.php [ 70 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/helper.php(70): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Files/...', 70, Array)
#1 /Volumes/Files/Sites/darth/bane/application/config/local.php(8): Helper::language()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(792): include('/Volumes/Files/...')
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/Volumes/Files/...')
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('local')
#5 /Volumes/Files/Sites/darth/bane/application/config/kacela.php(10): Kohana_Config->load('local')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(792): include('/Volumes/Files/...')
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/Volumes/Files/...')
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('kacela')
#9 /Volumes/Files/Sites/darth/bane/modules/kacela/init.php(9): Kohana_Config->load('kacela')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(565): require_once('/Volumes/Files/...')
#11 /Volumes/Files/Sites/darth/bane/application/bootstrap.php(153): Kohana_Core::modules(Array)
#12 /Volumes/Files/Sites/darth/bane/index.php(96): require('/Volumes/Files/...')
#13 {main}
2012-07-03 15:57:44 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/helper.php [ 70 ]
2012-07-03 15:57:44 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/helper.php [ 70 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/helper.php(70): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Files/...', 70, Array)
#1 /Volumes/Files/Sites/darth/bane/application/config/local.php(8): Helper::language()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(792): include('/Volumes/Files/...')
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/Volumes/Files/...')
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('local')
#5 /Volumes/Files/Sites/darth/bane/application/config/kacela.php(10): Kohana_Config->load('local')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(792): include('/Volumes/Files/...')
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/Volumes/Files/...')
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('kacela')
#9 /Volumes/Files/Sites/darth/bane/modules/kacela/init.php(9): Kohana_Config->load('kacela')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(565): require_once('/Volumes/Files/...')
#11 /Volumes/Files/Sites/darth/bane/application/bootstrap.php(153): Kohana_Core::modules(Array)
#12 /Volumes/Files/Sites/darth/bane/index.php(96): require('/Volumes/Files/...')
#13 {main}
2012-07-03 15:57:44 --- ERROR: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/kohana/exception.php [ 140 ]
2012-07-03 15:57:44 --- STRACE: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/kohana/exception.php [ 140 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 15:58:51 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/helper.php [ 70 ]
2012-07-03 15:58:51 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/helper.php [ 70 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/helper.php(70): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Files/...', 70, Array)
#1 /Volumes/Files/Sites/darth/bane/application/config/local.php(8): Helper::language()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(792): include('/Volumes/Files/...')
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/Volumes/Files/...')
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('local')
#5 /Volumes/Files/Sites/darth/bane/application/config/kacela.php(10): Kohana_Config->load('local')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(792): include('/Volumes/Files/...')
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/Volumes/Files/...')
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('kacela')
#9 /Volumes/Files/Sites/darth/bane/modules/kacela/init.php(9): Kohana_Config->load('kacela')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(565): require_once('/Volumes/Files/...')
#11 /Volumes/Files/Sites/darth/bane/application/bootstrap.php(153): Kohana_Core::modules(Array)
#12 /Volumes/Files/Sites/darth/bane/index.php(96): require('/Volumes/Files/...')
#13 {main}
2012-07-03 15:58:51 --- ERROR: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/kohana/exception.php [ 140 ]
2012-07-03 15:58:51 --- STRACE: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/kohana/exception.php [ 140 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 16:00:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL bingo was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
2012-07-03 16:00:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL bingo was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 60 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#1 [internal function]: Controller_Public_Index->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-07-03 16:02:23 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/helper.php [ 71 ]
2012-07-03 16:02:23 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/helper.php [ 71 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/helper.php(71): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Files/...', 71, Array)
#1 /Volumes/Files/Sites/darth/bane/application/config/local.php(8): Helper::language()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(792): include('/Volumes/Files/...')
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/Volumes/Files/...')
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('local')
#5 /Volumes/Files/Sites/darth/bane/application/config/kacela.php(10): Kohana_Config->load('local')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(792): include('/Volumes/Files/...')
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/Volumes/Files/...')
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('kacela')
#9 /Volumes/Files/Sites/darth/bane/modules/kacela/init.php(9): Kohana_Config->load('kacela')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(565): require_once('/Volumes/Files/...')
#11 /Volumes/Files/Sites/darth/bane/application/bootstrap.php(153): Kohana_Core::modules(Array)
#12 /Volumes/Files/Sites/darth/bane/index.php(96): require('/Volumes/Files/...')
#13 {main}
2012-07-03 16:02:23 --- ERROR: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/kohana/exception.php [ 140 ]
2012-07-03 16:02:23 --- STRACE: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/kohana/exception.php [ 140 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-03 16:02:28 --- ERROR: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/helper.php [ 71 ]
2012-07-03 16:02:28 --- STRACE: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH/classes/helper.php [ 71 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/helper.php(71): Kohana_Core::error_handler(8, 'Undefined offse...', '/Volumes/Files/...', 71, Array)
#1 /Volumes/Files/Sites/darth/bane/application/config/local.php(8): Helper::language()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(792): include('/Volumes/Files/...')
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/Volumes/Files/...')
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('local')
#5 /Volumes/Files/Sites/darth/bane/application/config/kacela.php(10): Kohana_Config->load('local')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(792): include('/Volumes/Files/...')
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config/file/reader.php(49): Kohana_Core::load('/Volumes/Files/...')
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/config.php(124): Kohana_Config_File_Reader->load('kacela')
#9 /Volumes/Files/Sites/darth/bane/modules/kacela/init.php(9): Kohana_Config->load('kacela')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/core.php(565): require_once('/Volumes/Files/...')
#11 /Volumes/Files/Sites/darth/bane/application/bootstrap.php(153): Kohana_Core::modules(Array)
#12 /Volumes/Files/Sites/darth/bane/index.php(96): require('/Volumes/Files/...')
#13 {main}
2012-07-03 16:02:28 --- ERROR: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/kohana/exception.php [ 140 ]
2012-07-03 16:02:28 --- STRACE: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH/classes/kohana/exception.php [ 140 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
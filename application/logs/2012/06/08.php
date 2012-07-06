<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-08 08:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-08 08:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-08 08:53:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-06-08 08:53:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-06-08 14:27:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home_page.php [ 21 ]
2012-06-08 14:27:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: partners ~ APPPATH/views/home_page.php [ 21 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/home_page.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 21, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(53): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(185): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-06-08 16:00:31 --- ERROR: Exception [ 0 ]: Code (42S22) Error: Unknown column 'featured' in 'where clause'Query: SELECT press_releases.*
FROM `press_releases`
WHERE (`featured` = :featured_356a192b7913b04c54574d18c28d46e6395428ab)
AND (`disabled` = :disabled_da39a3ee5e6b4b0d3255bfef95601890afd80709)
ORDER BY `release_date` ASC

Args: Array
(
    [:featured_356a192b7913b04c54574d18c28d46e6395428ab] => 1
    [:disabled_da39a3ee5e6b4b0d3255bfef95601890afd80709] => 
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 244 ]
2012-06-08 16:00:31 --- STRACE: Exception [ 0 ]: Code (42S22) Error: Unknown column 'featured' in 'where clause'Query: SELECT press_releases.*
FROM `press_releases`
WHERE (`featured` = :featured_356a192b7913b04c54574d18c28d46e6395428ab)
AND (`disabled` = :disabled_da39a3ee5e6b4b0d3255bfef95601890afd80709)
ORDER BY `release_date` ASC

Args: Array
(
    [:featured_356a192b7913b04c54574d18c28d46e6395428ab] => 1
    [:disabled_da39a3ee5e6b4b0d3255bfef95601890afd80709] => 
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 244 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(127): Gacela\DataSource\Database->query(Object(Gacela\DataSource\Resource), Object(Gacela\DataSource\Query\Sql))
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(685): Gacela\DataSource\Database->findAll(Object(Gacela\DataSource\Query\Sql), Object(Gacela\DataSource\Resource), Array, Array)
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/mapper/mapper.php(24): Gacela\Mapper\Mapper->findAll(Object(Kacela\Criteria))
#3 /Volumes/Files/Sites/darth/bane/application/classes/mapper/mapper.php(29): Kacela\Mapper\Mapper->find_all(Object(Kacela\Criteria))
#4 /Volumes/Files/Sites/darth/bane/application/classes/mapper/mapper.php(51): Darth\Mapper\Mapper->find_active(Object(Kacela\Criteria))
#5 /Volumes/Files/Sites/darth/bane/application/classes/kacela.php(17): Darth\Mapper\Mapper->find_one(Object(Kacela\Criteria))
#6 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(34): Kacela::find_one('press_release', Object(Kacela\Criteria))
#7 [internal function]: Controller_Public_Index->action_index()
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#12 {main}
2012-06-08 16:30:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uber was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 58 ]
2012-06-08 16:30:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uber was not found on this server. ~ MODPATH/site/classes/controller/public.php [ 58 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#1 [internal function]: Controller_Public_Index->action_index()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-06 14:04:52 --- ERROR: Exception [ 0 ]: Error Code: 42S02Array
(
    [0] => 42S02
    [1] => 1146
    [2] => Table 'darth_de.case_studies' doesn't exist
)
Param Dump: ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Mysql.php [ 62 ]
2012-06-06 14:04:52 --- STRACE: Exception [ 0 ]: Error Code: 42S02Array
(
    [0] => 42S02
    [1] => 1146
    [2] => Table 'darth_de.case_studies' doesn't exist
)
Param Dump: ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Mysql.php [ 62 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/DataSource.php(117): Gacela\DataSource\Adapter\Mysql->load('case_studies')
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(419): Gacela\DataSource\DataSource->loadResource('case_studies')
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(192): Gacela\Mapper\Mapper->_initResource()
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(767): Gacela\Mapper\Mapper->_init()
#4 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(509): Gacela\Mapper\Mapper->init()
#5 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela.php(278): Gacela\Mapper\Mapper->__construct()
#6 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(80): Gacela->loadMapper('Case_study')
#7 /Volumes/Files/Sites/darth/bane/application/classes/kacela.php(7): Kacela_Core::load('case_study')
#8 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(21): Kacela::find_active('case_study', Object(Kacela\Criteria))
#9 [internal function]: Controller_Public_Index->action_index()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-06-06 14:04:58 --- ERROR: Exception [ 0 ]: Error Code: 42S02Array
(
    [0] => 42S02
    [1] => 1146
    [2] => Table 'darth_de.case_studies' doesn't exist
)
Param Dump: ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Mysql.php [ 62 ]
2012-06-06 14:04:58 --- STRACE: Exception [ 0 ]: Error Code: 42S02Array
(
    [0] => 42S02
    [1] => 1146
    [2] => Table 'darth_de.case_studies' doesn't exist
)
Param Dump: ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Mysql.php [ 62 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/DataSource.php(117): Gacela\DataSource\Adapter\Mysql->load('case_studies')
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(419): Gacela\DataSource\DataSource->loadResource('case_studies')
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(192): Gacela\Mapper\Mapper->_initResource()
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(767): Gacela\Mapper\Mapper->_init()
#4 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(509): Gacela\Mapper\Mapper->init()
#5 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela.php(278): Gacela\Mapper\Mapper->__construct()
#6 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(80): Gacela->loadMapper('Case_study')
#7 /Volumes/Files/Sites/darth/bane/application/classes/kacela.php(7): Kacela_Core::load('case_study')
#8 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(21): Kacela::find_active('case_study', Object(Kacela\Criteria))
#9 [internal function]: Controller_Public_Index->action_index()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
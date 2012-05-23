<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-18 08:36:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-18 08:36:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-18 11:03:51 --- ERROR: Exception [ 0 ]: Specified key (full_name) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-18 11:03:51 --- STRACE: Exception [ 0 ]: Specified key (full_name) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/press.php(52): Kacela\Model\Model->__get('full_name')
#1 /Volumes/Files/Sites/darth/bane/modules/kable/vendor/Table/library/Table/Value.php(24): {closure}(Object(Darth\Model\Press_Release))
#2 /Volumes/Files/Sites/darth/bane/modules/kable/vendor/Table/library/Table/Cell.php(49): Table\Value->__invoke(Object(Closure), Object(Darth\Model\Press_Release))
#3 /Volumes/Files/Sites/darth/bane/modules/kable/vendor/Table/library/Table/Cell.php(76): Table\Cell->value(Object(Darth\Model\Press_Release))
#4 /Volumes/Files/Sites/darth/bane/modules/kable/vendor/Table/library/views/table.php(22): Table\Cell->render(Object(Darth\Model\Press_Release))
#5 /Volumes/Files/Sites/darth/bane/modules/kable/vendor/Table/library/Table.php(217): require('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/application/views/admin/index.php(7): Table->render()
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#10 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#13 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#14 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#15 [internal function]: Controller_Site->after()
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Press))
#17 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#18 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#19 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#20 {main}
2012-05-18 11:25:11 --- ERROR: Exception [ 0 ]: Failed to find mapper (Author)! ~ MODPATH/kacela/vendor/Gacela/library/Gacela.php [ 242 ]
2012-05-18 11:25:11 --- STRACE: Exception [ 0 ]: Failed to find mapper (Author)! ~ MODPATH/kacela/vendor/Gacela/library/Gacela.php [ 242 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(712): Gacela->loadMapper('author')
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(31): Gacela\Mapper\Mapper->findRelation('author', Object(stdClass))
#2 /Volumes/Files/Sites/darth/bane/application/views/admin/leads/detail.php(60): Kacela\Model\Model->__get('author')
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#11 [internal function]: Controller_Site->after()
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#13 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#16 {main}
2012-05-18 11:26:59 --- ERROR: Exception [ 0 ]: Error Code: 42S02Array
(
    [0] => 42S02
    [1] => 1146
    [2] => Table 'darth.authors' doesn't exist
)
Param Dump: ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Mysql.php [ 47 ]
2012-05-18 11:26:59 --- STRACE: Exception [ 0 ]: Error Code: 42S02Array
(
    [0] => 42S02
    [1] => 1146
    [2] => Table 'darth.authors' doesn't exist
)
Param Dump: ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Mysql.php [ 47 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/DataSource.php(81): Gacela\DataSource\Adapter\Mysql->load(Object(PDO), 'authors', 'darth')
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(395): Gacela\DataSource\DataSource->loadResource('authors')
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(186): Gacela\Mapper\Mapper->_initResource()
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(762): Gacela\Mapper\Mapper->_init()
#4 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(485): Gacela\Mapper\Mapper->init()
#5 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela.php(245): Gacela\Mapper\Mapper->__construct()
#6 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(712): Gacela->loadMapper('author')
#7 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(31): Gacela\Mapper\Mapper->findRelation('author', Object(stdClass))
#8 /Volumes/Files/Sites/darth/bane/application/views/admin/leads/detail.php(60): Kacela\Model\Model->__get('author')
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#12 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#13 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#16 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#17 [internal function]: Controller_Site->after()
#18 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#19 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#20 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#21 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#22 {main}
2012-05-18 11:27:37 --- ERROR: Exception [ 0 ]: Failed to find mapper (Author)! ~ MODPATH/kacela/vendor/Gacela/library/Gacela.php [ 242 ]
2012-05-18 11:27:37 --- STRACE: Exception [ 0 ]: Failed to find mapper (Author)! ~ MODPATH/kacela/vendor/Gacela/library/Gacela.php [ 242 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(712): Gacela->loadMapper('author')
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(31): Gacela\Mapper\Mapper->findRelation('author', Object(stdClass))
#2 /Volumes/Files/Sites/darth/bane/application/views/admin/leads/detail.php(60): Kacela\Model\Model->__get('author')
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#11 [internal function]: Controller_Site->after()
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#13 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#16 {main}
2012-05-18 11:28:17 --- ERROR: Exception [ 0 ]: Error Code: 42S02Array
(
    [0] => 42S02
    [1] => 1146
    [2] => Table 'darth.authors' doesn't exist
)
Param Dump: ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Mysql.php [ 47 ]
2012-05-18 11:28:17 --- STRACE: Exception [ 0 ]: Error Code: 42S02Array
(
    [0] => 42S02
    [1] => 1146
    [2] => Table 'darth.authors' doesn't exist
)
Param Dump: ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Adapter/Mysql.php [ 47 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/DataSource.php(81): Gacela\DataSource\Adapter\Mysql->load(Object(PDO), 'authors', 'darth')
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(395): Gacela\DataSource\DataSource->loadResource('authors')
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(186): Gacela\Mapper\Mapper->_initResource()
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(762): Gacela\Mapper\Mapper->_init()
#4 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(485): Gacela\Mapper\Mapper->init()
#5 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela.php(245): Gacela\Mapper\Mapper->__construct()
#6 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(712): Gacela->loadMapper('author')
#7 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(31): Gacela\Mapper\Mapper->findRelation('author', Object(stdClass))
#8 /Volumes/Files/Sites/darth/bane/application/views/admin/leads/detail.php(60): Kacela\Model\Model->__get('author')
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#12 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#13 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#16 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#17 [internal function]: Controller_Site->after()
#18 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#19 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#20 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#21 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#22 {main}
2012-05-18 11:28:38 --- ERROR: Exception [ 0 ]: Failed to find mapper (Author)! ~ MODPATH/kacela/vendor/Gacela/library/Gacela.php [ 242 ]
2012-05-18 11:28:38 --- STRACE: Exception [ 0 ]: Failed to find mapper (Author)! ~ MODPATH/kacela/vendor/Gacela/library/Gacela.php [ 242 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(712): Gacela->loadMapper('author')
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(31): Gacela\Mapper\Mapper->findRelation('author', Object(stdClass))
#2 /Volumes/Files/Sites/darth/bane/application/views/admin/leads/detail.php(60): Kacela\Model\Model->__get('author')
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#6 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#10 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#11 [internal function]: Controller_Site->after()
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#13 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#15 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#16 {main}
2012-05-18 11:30:13 --- ERROR: ErrorException [ 8 ]: Undefined property: Kacela\Collection::$author ~ APPPATH/classes/controller/admin/leads.php [ 121 ]
2012-05-18 11:30:13 --- STRACE: ErrorException [ 8 ]: Undefined property: Kacela\Collection::$author ~ APPPATH/classes/controller/admin/leads.php [ 121 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(121): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Files/...', 121, Array)
#1 [internal function]: Controller_Admin_Leads->action_detail()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-05-18 11:31:16 --- ERROR: Exception [ 0 ]: Failed to find mapper (Author)! ~ MODPATH/kacela/vendor/Gacela/library/Gacela.php [ 242 ]
2012-05-18 11:31:16 --- STRACE: Exception [ 0 ]: Failed to find mapper (Author)! ~ MODPATH/kacela/vendor/Gacela/library/Gacela.php [ 242 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(712): Gacela->loadMapper('author')
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(31): Gacela\Mapper\Mapper->findRelation('author', Object(stdClass))
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(123): Kacela\Model\Model->__get('author')
#3 [internal function]: Controller_Admin_Leads->action_detail()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-05-18 11:31:24 --- ERROR: Exception [ 0 ]: Specified key (authors) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-18 11:31:24 --- STRACE: Exception [ 0 ]: Specified key (authors) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(123): Kacela\Model\Model->__get('authors')
#1 [internal function]: Controller_Admin_Leads->action_detail()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-05-18 11:31:30 --- ERROR: Exception [ 0 ]: Failed to find mapper (Author)! ~ MODPATH/kacela/vendor/Gacela/library/Gacela.php [ 242 ]
2012-05-18 11:31:30 --- STRACE: Exception [ 0 ]: Failed to find mapper (Author)! ~ MODPATH/kacela/vendor/Gacela/library/Gacela.php [ 242 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(712): Gacela->loadMapper('author')
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(31): Gacela\Mapper\Mapper->findRelation('author', Object(stdClass))
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(123): Kacela\Model\Model->__get('author')
#3 [internal function]: Controller_Admin_Leads->action_detail()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-05-18 11:35:06 --- ERROR: Exception [ 0 ]: Failed to find mapper (Author)! ~ MODPATH/kacela/vendor/Gacela/library/Gacela.php [ 242 ]
2012-05-18 11:35:06 --- STRACE: Exception [ 0 ]: Failed to find mapper (Author)! ~ MODPATH/kacela/vendor/Gacela/library/Gacela.php [ 242 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(712): Gacela->loadMapper('author')
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(31): Gacela\Mapper\Mapper->findRelation('author', Object(stdClass))
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(123): Kacela\Model\Model->__get('author')
#3 [internal function]: Controller_Admin_Leads->action_detail()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-05-18 11:48:45 --- ERROR: Exception [ 0 ]: Failed to find mapper (Author)! ~ MODPATH/kacela/vendor/Gacela/library/Gacela.php [ 242 ]
2012-05-18 11:48:45 --- STRACE: Exception [ 0 ]: Failed to find mapper (Author)! ~ MODPATH/kacela/vendor/Gacela/library/Gacela.php [ 242 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(712): Gacela->loadMapper('author')
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(31): Gacela\Mapper\Mapper->findRelation('author', Object(stdClass))
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(123): Kacela\Model\Model->__get('author')
#3 [internal function]: Controller_Admin_Leads->action_detail()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-05-18 11:49:21 --- ERROR: Exception [ 0 ]: Failed to find mapper (Author)! ~ MODPATH/kacela/vendor/Gacela/library/Gacela.php [ 242 ]
2012-05-18 11:49:21 --- STRACE: Exception [ 0 ]: Failed to find mapper (Author)! ~ MODPATH/kacela/vendor/Gacela/library/Gacela.php [ 242 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(712): Gacela->loadMapper('author')
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(31): Gacela\Mapper\Mapper->findRelation('author', Object(stdClass))
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(123): Kacela\Model\Model->__get('author')
#3 [internal function]: Controller_Admin_Leads->action_detail()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-05-18 11:50:26 --- ERROR: ErrorException [ 8 ]: Undefined property: Darth\Model\Note::$author ~ APPPATH/classes/model/note.php [ 27 ]
2012-05-18 11:50:26 --- STRACE: ErrorException [ 8 ]: Undefined property: Darth\Model\Note::$author ~ APPPATH/classes/model/note.php [ 27 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/model/note.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Files/...', 27, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(29): Darth\Model\Note->_get_author()
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(123): Kacela\Model\Model->__get('author')
#3 [internal function]: Controller_Admin_Leads->action_detail()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-05-18 12:01:35 --- ERROR: Exception [ 0 ]: Specified key (notes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-18 12:01:35 --- STRACE: Exception [ 0 ]: Specified key (notes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/leads/detail.php(71): Kacela\Model\Model->__get('notes')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-18 12:02:07 --- ERROR: Exception [ 0 ]: Specified key (notes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-18 12:02:07 --- STRACE: Exception [ 0 ]: Specified key (notes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/leads/detail.php(71): Kacela\Model\Model->__get('notes')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-18 12:04:22 --- ERROR: Exception [ 0 ]: Specified key (notes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-18 12:04:22 --- STRACE: Exception [ 0 ]: Specified key (notes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/leads/detail.php(71): Kacela\Model\Model->__get('notes')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-18 12:04:43 --- ERROR: Exception [ 0 ]: Specified key (notes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-18 12:04:43 --- STRACE: Exception [ 0 ]: Specified key (notes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/model/note.php(9): Kacela\Model\Model->__get('notes')
#1 /Volumes/Files/Sites/darth/bane/application/views/admin/leads/detail.php(71): Darth\Model\Note->get_children_notes()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#5 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#9 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#10 [internal function]: Controller_Site->after()
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#15 {main}
2012-05-18 12:08:30 --- ERROR: ErrorException [ 4096 ]: Object of class Darth\Model\Note could not be converted to string ~ APPPATH/views/admin/leads/detail.php [ 43 ]
2012-05-18 12:08:30 --- STRACE: ErrorException [ 4096 ]: Object of class Darth\Model\Note could not be converted to string ~ APPPATH/views/admin/leads/detail.php [ 43 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/leads/detail.php(43): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Files/...', 43, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-18 12:09:18 --- ERROR: ErrorException [ 4096 ]: Object of class Darth\Model\Note could not be converted to string ~ APPPATH/views/admin/leads/detail.php [ 43 ]
2012-05-18 12:09:18 --- STRACE: ErrorException [ 4096 ]: Object of class Darth\Model\Note could not be converted to string ~ APPPATH/views/admin/leads/detail.php [ 43 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/leads/detail.php(43): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Files/...', 43, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-18 12:10:08 --- ERROR: ErrorException [ 4096 ]: Object of class Darth\Model\Note could not be converted to string ~ APPPATH/views/admin/leads/detail.php [ 43 ]
2012-05-18 12:10:08 --- STRACE: ErrorException [ 4096 ]: Object of class Darth\Model\Note could not be converted to string ~ APPPATH/views/admin/leads/detail.php [ 43 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/leads/detail.php(43): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Files/...', 43, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-18 12:10:25 --- ERROR: ErrorException [ 4096 ]: Object of class Darth\Model\Note could not be converted to string ~ APPPATH/views/admin/leads/detail.php [ 70 ]
2012-05-18 12:10:25 --- STRACE: ErrorException [ 4096 ]: Object of class Darth\Model\Note could not be converted to string ~ APPPATH/views/admin/leads/detail.php [ 70 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/leads/detail.php(70): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Files/...', 70, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-18 12:13:46 --- ERROR: ErrorException [ 4096 ]: Object of class Darth\Model\Note could not be converted to string ~ APPPATH/views/admin/leads/detail.php [ 43 ]
2012-05-18 12:13:46 --- STRACE: ErrorException [ 4096 ]: Object of class Darth\Model\Note could not be converted to string ~ APPPATH/views/admin/leads/detail.php [ 43 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/leads/detail.php(43): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Files/...', 43, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-18 12:15:39 --- ERROR: ErrorException [ 4096 ]: Object of class Darth\Model\Note could not be converted to string ~ APPPATH/views/admin/leads/detail.php [ 70 ]
2012-05-18 12:15:39 --- STRACE: ErrorException [ 4096 ]: Object of class Darth\Model\Note could not be converted to string ~ APPPATH/views/admin/leads/detail.php [ 70 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/leads/detail.php(70): Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Files/...', 70, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-18 12:16:44 --- ERROR: Exception [ 0 ]: Specified key (notes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-18 12:16:44 --- STRACE: Exception [ 0 ]: Specified key (notes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/leads/detail.php(71): Kacela\Model\Model->__get('notes')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-18 12:17:36 --- ERROR: Exception [ 0 ]: Specified key (notes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-18 12:17:36 --- STRACE: Exception [ 0 ]: Specified key (notes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/leads/detail.php(71): Kacela\Model\Model->__get('notes')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-18 12:18:06 --- ERROR: ErrorException [ 1 ]: Call to undefined method Darth\Model\Lead::get_note() ~ APPPATH/views/admin/leads/detail.php [ 43 ]
2012-05-18 12:18:06 --- STRACE: ErrorException [ 1 ]: Call to undefined method Darth\Model\Lead::get_note() ~ APPPATH/views/admin/leads/detail.php [ 43 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-18 12:18:17 --- ERROR: Exception [ 0 ]: Specified key (notes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-18 12:18:17 --- STRACE: Exception [ 0 ]: Specified key (notes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/leads/detail.php(71): Kacela\Model\Model->__get('notes')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-18 12:20:55 --- ERROR: Exception [ 0 ]: Specified key (notes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-18 12:20:55 --- STRACE: Exception [ 0 ]: Specified key (notes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/leads/detail.php(71): Kacela\Model\Model->__get('notes')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-18 12:21:26 --- ERROR: Exception [ 0 ]: Specified key (notes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-18 12:21:26 --- STRACE: Exception [ 0 ]: Specified key (notes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/leads/detail.php(71): Kacela\Model\Model->__get('notes')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-18 12:23:15 --- ERROR: Exception [ 0 ]: Specified key (notes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-18 12:23:15 --- STRACE: Exception [ 0 ]: Specified key (notes) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/leads/detail.php(71): Kacela\Model\Model->__get('notes')
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-18 14:30:15 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/admin/leads/detail.php [ 71 ]
2012-05-18 14:30:15 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/admin/leads/detail.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-18 14:30:45 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/admin/leads/detail.php [ 71 ]
2012-05-18 14:30:45 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/admin/leads/detail.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-18 14:31:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/admin/leads/detail.php [ 72 ]
2012-05-18 14:31:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: menu ~ APPPATH/views/admin/leads/detail.php [ 72 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/leads/detail.php(72): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 72, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-18 14:32:07 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Admin_Leads::$user ~ APPPATH/classes/controller/admin/leads.php [ 147 ]
2012-05-18 14:32:07 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Admin_Leads::$user ~ APPPATH/classes/controller/admin/leads.php [ 147 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(147): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Files/...', 147, Array)
#1 [internal function]: Controller_Admin_Leads->action_note()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-05-18 14:37:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads/note_form/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-18 14:37:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads/note_form/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-18 14:38:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads/note_form/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-18 14:38:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads/note_form/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-18 14:38:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads/note_form/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-18 14:38:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads/note_form/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-18 14:38:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads/note_form/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-18 14:38:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads/note_form/2 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-18 14:49:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: sub_menu ~ APPPATH/views/admin/leads/detail.php [ 89 ]
2012-05-18 14:49:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: sub_menu ~ APPPATH/views/admin/leads/detail.php [ 89 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/views/admin/leads/detail.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', '/Volumes/Files/...', 89, Array)
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(169): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-18 14:51:33 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kacela::find_active() must be an instance of Gacela\Criteria, string given, called in /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php on line 120 and defined ~ APPPATH/classes/kacela.php [ 5 ]
2012-05-18 14:51:33 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kacela::find_active() must be an instance of Gacela\Criteria, string given, called in /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php on line 120 and defined ~ APPPATH/classes/kacela.php [ 5 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/kacela.php(5): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Volumes/Files/...', 5, Array)
#1 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(120): Kacela::find_active('lead', '2')
#2 [internal function]: Controller_Admin_Leads->action_detail()
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#7 {main}
2012-05-18 14:52:24 --- ERROR: Exception [ 0 ]: Code (42S22) Error: Unknown column 'user_id' in 'where clause'Query: SELECT leads.*, `users`.`email`, `users`.`first`, `users`.`initial`, `users`.`last`, `users`.`password`, `users`.`temp_password`, `users`.`temp_password_date`, `users`.`role`, `users`.`logins`, `users`.`last_login`, `users`.`registration_date`, `users`.`last_activity_date`, `users`.`user_notes`, `users`.`token`, `users`.`email_confirmed`, `users`.`last_ip`, `users`.`disabled`
FROM `leads`
INNER JOIN `users` ON `leads`.`id` = `users`.`id`
WHERE (`user_id` = :user_id_2)
AND (`disabled` = :disabled_0)

Args: Array
(
    [:user_id_2] => 2
    [:disabled_0] => 0
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 265 ]
2012-05-18 14:52:24 --- STRACE: Exception [ 0 ]: Code (42S22) Error: Unknown column 'user_id' in 'where clause'Query: SELECT leads.*, `users`.`email`, `users`.`first`, `users`.`initial`, `users`.`last`, `users`.`password`, `users`.`temp_password`, `users`.`temp_password_date`, `users`.`role`, `users`.`logins`, `users`.`last_login`, `users`.`registration_date`, `users`.`last_activity_date`, `users`.`user_notes`, `users`.`token`, `users`.`email_confirmed`, `users`.`last_ip`, `users`.`disabled`
FROM `leads`
INNER JOIN `users` ON `leads`.`id` = `users`.`id`
WHERE (`user_id` = :user_id_2)
AND (`disabled` = :disabled_0)

Args: Array
(
    [:user_id_2] => 2
    [:disabled_0] => 0
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 265 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(142): Gacela\DataSource\Database->query(Object(Gacela\DataSource\Resource), Object(Gacela\DataSource\Query\Database))
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(661): Gacela\DataSource\Database->findAll(Object(Gacela\DataSource\Query\Database), Object(Gacela\DataSource\Resource), Array, Array)
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/mapper/mapper.php(24): Gacela\Mapper\Mapper->findAll(Object(Kacela\Criteria))
#3 /Volumes/Files/Sites/darth/bane/application/classes/mapper/mapper.php(29): Kacela\Mapper\Mapper->find_all(Object(Kacela\Criteria))
#4 /Volumes/Files/Sites/darth/bane/application/classes/kacela.php(7): Darth\Mapper\Mapper->find_active(Object(Kacela\Criteria))
#5 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(120): Kacela::find_active('lead', Object(Kacela\Criteria))
#6 [internal function]: Controller_Admin_Leads->action_detail()
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#11 {main}
2012-05-18 15:20:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads/download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-18 15:20:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/leads/download was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-18 15:46:21 --- ERROR: ErrorException [ 1 ]: Class 'Xls' not found ~ APPPATH/classes/model/user.php [ 163 ]
2012-05-18 15:46:21 --- STRACE: ErrorException [ 1 ]: Class 'Xls' not found ~ APPPATH/classes/model/user.php [ 163 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-18 15:58:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Gacela\DataSource\Query\Database::debug() ~ APPPATH/classes/mapper/lead.php [ 34 ]
2012-05-18 15:58:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Gacela\DataSource\Query\Database::debug() ~ APPPATH/classes/mapper/lead.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-18 15:59:04 --- ERROR: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Query/Database.php [ 403 ]
2012-05-18 15:59:04 --- STRACE: ErrorException [ 1 ]: Maximum function nesting level of '100' reached, aborting! ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Query/Database.php [ 403 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-18 16:19:39 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Gacela\DataSource\Query\Database::join() must be an array, string given, called in /Volumes/Files/Sites/darth/bane/application/classes/mapper/lead.php on line 24 and defined ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Query/Database.php [ 560 ]
2012-05-18 16:19:39 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Gacela\DataSource\Query\Database::join() must be an array, string given, called in /Volumes/Files/Sites/darth/bane/application/classes/mapper/lead.php on line 24 and defined ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Query/Database.php [ 560 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Query/Database.php(560): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/Volumes/Files/...', 560, Array)
#1 /Volumes/Files/Sites/darth/bane/application/classes/mapper/lead.php(24): Gacela\DataSource\Query\Database->join(Array, 'left', 'a.user_id = l.i...')
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(146): Darth\Mapper\Lead->get_leads(Array)
#3 [internal function]: Controller_Admin_Leads->action_download()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-05-18 16:20:39 --- ERROR: ErrorException [ 4096 ]: Argument 3 passed to Gacela\DataSource\Query\Database::join() must be an array, null given, called in /Volumes/Files/Sites/darth/bane/application/classes/mapper/lead.php on line 24 and defined ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Query/Database.php [ 560 ]
2012-05-18 16:20:39 --- STRACE: ErrorException [ 4096 ]: Argument 3 passed to Gacela\DataSource\Query\Database::join() must be an array, null given, called in /Volumes/Files/Sites/darth/bane/application/classes/mapper/lead.php on line 24 and defined ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Query/Database.php [ 560 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Query/Database.php(560): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/Volumes/Files/...', 560, Array)
#1 /Volumes/Files/Sites/darth/bane/application/classes/mapper/lead.php(24): Gacela\DataSource\Query\Database->join(Array, 'a.user_id = l.i...', NULL, 'left')
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(146): Darth\Mapper\Lead->get_leads(Array)
#3 [internal function]: Controller_Admin_Leads->action_download()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-05-18 16:28:05 --- ERROR: Exception [ 0 ]: Code (23000) Error: Column 'type' in on clause is ambiguousQuery: SELECT l.inquiry_date, l.contact_date, l.business_name, u.*, a.address1, a.address2, a.city, a.state_id, a.province, a.postal, a.country_id, p.number, n.note
FROM `leads` AS `l`
INNER JOIN `users` AS `u` ON u.id = l.id
LEFT JOIN `addresses` AS `a` ON a.user_id = l.id AND type  "business"
LEFT JOIN `phones` AS `p` ON p.user_id = l.id AND type  "primary"
LEFT JOIN `notes` AS `n` ON n.user_id = l.id AND type  "inquiry"
WHERE (u.disabled = 0)
AND (l.id IN (:l_id_2,:l_id_3,:l_id_4))
ORDER BY `l`.`id` DESC

Args: Array
(
    [:l_id_2] => 2
    [:l_id_3] => 3
    [:l_id_4] => 4
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 265 ]
2012-05-18 16:28:05 --- STRACE: Exception [ 0 ]: Code (23000) Error: Column 'type' in on clause is ambiguousQuery: SELECT l.inquiry_date, l.contact_date, l.business_name, u.*, a.address1, a.address2, a.city, a.state_id, a.province, a.postal, a.country_id, p.number, n.note
FROM `leads` AS `l`
INNER JOIN `users` AS `u` ON u.id = l.id
LEFT JOIN `addresses` AS `a` ON a.user_id = l.id AND type  "business"
LEFT JOIN `phones` AS `p` ON p.user_id = l.id AND type  "primary"
LEFT JOIN `notes` AS `n` ON n.user_id = l.id AND type  "inquiry"
WHERE (u.disabled = 0)
AND (l.id IN (:l_id_2,:l_id_3,:l_id_4))
ORDER BY `l`.`id` DESC

Args: Array
(
    [:l_id_2] => 2
    [:l_id_3] => 3
    [:l_id_4] => 4
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 265 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/mapper/lead.php(33): Gacela\DataSource\Database->query(Object(Gacela\DataSource\Resource), Object(Gacela\DataSource\Query\Database))
#1 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(146): Darth\Mapper\Lead->get_leads(Array)
#2 [internal function]: Controller_Admin_Leads->action_download()
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#7 {main}
2012-05-18 16:28:53 --- ERROR: Exception [ 0 ]: Code (23000) Error: Column 'type' in on clause is ambiguousQuery: SELECT l.inquiry_date, l.contact_date, l.business_name, u.*, a.address1, a.address2, a.city, a.state_id, a.province, a.postal, a.country_id, p.number, n.note
FROM `leads` AS `l`
INNER JOIN `users` AS `u` ON u.id = l.id
LEFT JOIN `addresses` AS `a` ON a.user_id = l.id AND type = "business"
LEFT JOIN `phones` AS `p` ON p.user_id = l.id AND type = "primary"
LEFT JOIN `notes` AS `n` ON n.user_id = l.id AND type = "inquiry"
WHERE (u.disabled = 0)
AND (l.id IN (:l_id_2,:l_id_3,:l_id_4))
ORDER BY `l`.`id` DESC

Args: Array
(
    [:l_id_2] => 2
    [:l_id_3] => 3
    [:l_id_4] => 4
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 265 ]
2012-05-18 16:28:53 --- STRACE: Exception [ 0 ]: Code (23000) Error: Column 'type' in on clause is ambiguousQuery: SELECT l.inquiry_date, l.contact_date, l.business_name, u.*, a.address1, a.address2, a.city, a.state_id, a.province, a.postal, a.country_id, p.number, n.note
FROM `leads` AS `l`
INNER JOIN `users` AS `u` ON u.id = l.id
LEFT JOIN `addresses` AS `a` ON a.user_id = l.id AND type = "business"
LEFT JOIN `phones` AS `p` ON p.user_id = l.id AND type = "primary"
LEFT JOIN `notes` AS `n` ON n.user_id = l.id AND type = "inquiry"
WHERE (u.disabled = 0)
AND (l.id IN (:l_id_2,:l_id_3,:l_id_4))
ORDER BY `l`.`id` DESC

Args: Array
(
    [:l_id_2] => 2
    [:l_id_3] => 3
    [:l_id_4] => 4
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 265 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/mapper/lead.php(33): Gacela\DataSource\Database->query(Object(Gacela\DataSource\Resource), Object(Gacela\DataSource\Query\Database))
#1 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(146): Darth\Mapper\Lead->get_leads(Array)
#2 [internal function]: Controller_Admin_Leads->action_download()
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#7 {main}
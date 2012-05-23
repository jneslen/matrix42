<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-10 11:04:32 --- ERROR: ReflectionException [ 0 ]: Method Formo_Driver_Form::attr() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
2012-05-10 11:04:32 --- STRACE: ReflectionException [ 0 ]: Method Formo_Driver_Form::attr() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/container.php(146): ReflectionMethod->__construct(Object(Formo_Driver_Form), 'attr')
#1 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(64): Formo_Core_Container->__call('attr', Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/lead.php(82): Formo_Core_Validator->__call('attr', Array)
#3 /Volumes/Files/Sites/darth/bane/application/classes/model/lead.php(82): Formo_Form->attr('action', '/events/detail/...')
#4 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(84): Darth\Model\Lead->get_lead_form()
#5 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/events.php(31): Controller_Public->lead_form()
#6 [internal function]: Controller_Public_Events->action_detail()
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Events))
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#11 {main}
2012-05-10 11:21:05 --- ERROR: ErrorException [ 1 ]: Class 'Formo_Driver_/events/detail/1#lead-form' not found ~ MODPATH/formo/classes/formo/core/container.php [ 768 ]
2012-05-10 11:21:05 --- STRACE: ErrorException [ 1 ]: Class 'Formo_Driver_/events/detail/1#lead-form' not found ~ MODPATH/formo/classes/formo/core/container.php [ 768 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-10 12:02:25 --- ERROR: ErrorException [ 2 ]: PDOStatement::execute(): SQLSTATE[HY093]: Invalid parameter number: parameter was not defined ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 258 ]
2012-05-10 12:02:25 --- STRACE: ErrorException [ 2 ]: PDOStatement::execute(): SQLSTATE[HY093]: Invalid parameter number: parameter was not defined ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 258 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'PDOStatement::e...', '/Volumes/Files/...', 258, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(258): PDOStatement->execute(Array)
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(142): Gacela\DataSource\Database->query(Object(Gacela\DataSource\Resource), Object(Gacela\DataSource\Query\Database))
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(661): Gacela\DataSource\Database->findAll(Object(Gacela\DataSource\Query\Database), Object(Gacela\DataSource\Resource), Array, Array)
#4 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/mapper/mapper.php(24): Gacela\Mapper\Mapper->findAll(Object(Kacela\Criteria))
#5 /Volumes/Files/Sites/darth/bane/application/classes/mapper/mapper.php(29): Kacela\Mapper\Mapper->find_all(Object(Kacela\Criteria))
#6 /Volumes/Files/Sites/darth/bane/application/classes/mapper/mapper.php(51): Darth\Mapper\Mapper->find_active(Object(Kacela\Criteria))
#7 /Volumes/Files/Sites/darth/bane/application/classes/kacela.php(17): Darth\Mapper\Mapper->find_one(Object(Kacela\Criteria))
#8 /Volumes/Files/Sites/darth/bane/application/classes/model/lead.php(12): Kacela::find_one('lead', Object(Kacela\Criteria))
#9 [internal function]: Darth\Model\Lead->create_new_lead(Object(Formo_Form))
#10 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(409): call_user_func_array(Array, Array)
#11 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(145): Formo_Core_Validator->_run_callbacks(true)
#12 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#13 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(29): Controller_Public->lead_form(true)
#14 [internal function]: Controller_Public_Index->action_index()
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#19 {main}
2012-05-10 12:03:30 --- ERROR: ErrorException [ 2 ]: PDOStatement::execute(): SQLSTATE[HY093]: Invalid parameter number: parameter was not defined ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 258 ]
2012-05-10 12:03:30 --- STRACE: ErrorException [ 2 ]: PDOStatement::execute(): SQLSTATE[HY093]: Invalid parameter number: parameter was not defined ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 258 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'PDOStatement::e...', '/Volumes/Files/...', 258, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(258): PDOStatement->execute(Array)
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(142): Gacela\DataSource\Database->query(Object(Gacela\DataSource\Resource), Object(Gacela\DataSource\Query\Database))
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(661): Gacela\DataSource\Database->findAll(Object(Gacela\DataSource\Query\Database), Object(Gacela\DataSource\Resource), Array, Array)
#4 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/mapper/mapper.php(24): Gacela\Mapper\Mapper->findAll(Object(Kacela\Criteria))
#5 /Volumes/Files/Sites/darth/bane/application/classes/mapper/mapper.php(29): Kacela\Mapper\Mapper->find_all(Object(Kacela\Criteria))
#6 /Volumes/Files/Sites/darth/bane/application/classes/mapper/mapper.php(51): Darth\Mapper\Mapper->find_active(Object(Kacela\Criteria))
#7 /Volumes/Files/Sites/darth/bane/application/classes/kacela.php(17): Darth\Mapper\Mapper->find_one(Object(Kacela\Criteria))
#8 /Volumes/Files/Sites/darth/bane/application/classes/model/lead.php(12): Kacela::find_one('user', Object(Kacela\Criteria))
#9 [internal function]: Darth\Model\Lead->create_new_lead(Object(Formo_Form))
#10 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(409): call_user_func_array(Array, Array)
#11 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(145): Formo_Core_Validator->_run_callbacks(true)
#12 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#13 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(29): Controller_Public->lead_form(true)
#14 [internal function]: Controller_Public_Index->action_index()
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#19 {main}
2012-05-10 12:03:43 --- ERROR: ErrorException [ 4096 ]: Object of class Kacela\Criteria could not be converted to string ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 258 ]
2012-05-10 12:03:43 --- STRACE: ErrorException [ 4096 ]: Object of class Kacela\Criteria could not be converted to string ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 258 ]
--
#0 [internal function]: Kohana_Core::error_handler(4096, 'Object of class...', '/Volumes/Files/...', 258, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(258): PDOStatement->execute(Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/mapper/user.php(15): Gacela\DataSource\Database->query(Object(Gacela\DataSource\Resource), Object(Gacela\DataSource\Query\Database))
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(46): Darth\Mapper\User->find(Object(Kacela\Criteria))
#4 /Volumes/Files/Sites/darth/bane/application/classes/model/lead.php(12): Kacela_Core::find('user', Object(Kacela\Criteria))
#5 [internal function]: Darth\Model\Lead->create_new_lead(Object(Formo_Form))
#6 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(409): call_user_func_array(Array, Array)
#7 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(145): Formo_Core_Validator->_run_callbacks(true)
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#9 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(29): Controller_Public->lead_form(true)
#10 [internal function]: Controller_Public_Index->action_index()
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#15 {main}
2012-05-10 12:03:57 --- ERROR: ErrorException [ 2 ]: PDOStatement::execute(): SQLSTATE[HY093]: Invalid parameter number: parameter was not defined ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 258 ]
2012-05-10 12:03:57 --- STRACE: ErrorException [ 2 ]: PDOStatement::execute(): SQLSTATE[HY093]: Invalid parameter number: parameter was not defined ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 258 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'PDOStatement::e...', '/Volumes/Files/...', 258, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(258): PDOStatement->execute(Array)
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(142): Gacela\DataSource\Database->query(Object(Gacela\DataSource\Resource), Object(Gacela\DataSource\Query\Database))
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(661): Gacela\DataSource\Database->findAll(Object(Gacela\DataSource\Query\Database), Object(Gacela\DataSource\Resource), Array, Array)
#4 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/mapper/mapper.php(24): Gacela\Mapper\Mapper->findAll(Object(Kacela\Criteria))
#5 /Volumes/Files/Sites/darth/bane/application/classes/mapper/mapper.php(29): Kacela\Mapper\Mapper->find_all(Object(Kacela\Criteria))
#6 /Volumes/Files/Sites/darth/bane/application/classes/kacela.php(7): Darth\Mapper\Mapper->find_active(Object(Kacela\Criteria))
#7 /Volumes/Files/Sites/darth/bane/application/classes/model/lead.php(12): Kacela::find_active('user', Object(Kacela\Criteria))
#8 [internal function]: Darth\Model\Lead->create_new_lead(Object(Formo_Form))
#9 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(409): call_user_func_array(Array, Array)
#10 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(145): Formo_Core_Validator->_run_callbacks(true)
#11 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#12 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(29): Controller_Public->lead_form(true)
#13 [internal function]: Controller_Public_Index->action_index()
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#18 {main}
2012-05-10 12:04:40 --- ERROR: ErrorException [ 2 ]: PDOStatement::execute(): SQLSTATE[HY093]: Invalid parameter number: parameter was not defined ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 258 ]
2012-05-10 12:04:40 --- STRACE: ErrorException [ 2 ]: PDOStatement::execute(): SQLSTATE[HY093]: Invalid parameter number: parameter was not defined ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 258 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'PDOStatement::e...', '/Volumes/Files/...', 258, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(258): PDOStatement->execute(Array)
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(142): Gacela\DataSource\Database->query(Object(Gacela\DataSource\Resource), Object(Gacela\DataSource\Query\Database))
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(661): Gacela\DataSource\Database->findAll(Object(Gacela\DataSource\Query\Database), Object(Gacela\DataSource\Resource), Array, Array)
#4 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/mapper/mapper.php(24): Gacela\Mapper\Mapper->findAll(Object(Kacela\Criteria))
#5 /Volumes/Files/Sites/darth/bane/application/classes/mapper/mapper.php(29): Kacela\Mapper\Mapper->find_all(Object(Kacela\Criteria))
#6 /Volumes/Files/Sites/darth/bane/application/classes/kacela.php(7): Darth\Mapper\Mapper->find_active(Object(Kacela\Criteria))
#7 /Volumes/Files/Sites/darth/bane/application/classes/model/lead.php(12): Kacela::find_active('lead', Object(Kacela\Criteria))
#8 [internal function]: Darth\Model\Lead->create_new_lead(Object(Formo_Form))
#9 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(409): call_user_func_array(Array, Array)
#10 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(145): Formo_Core_Validator->_run_callbacks(true)
#11 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#12 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(29): Controller_Public->lead_form(true)
#13 [internal function]: Controller_Public_Index->action_index()
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#18 {main}
2012-05-10 12:06:23 --- ERROR: ErrorException [ 2 ]: PDOStatement::execute(): SQLSTATE[HY093]: Invalid parameter number: parameter was not defined ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 258 ]
2012-05-10 12:06:23 --- STRACE: ErrorException [ 2 ]: PDOStatement::execute(): SQLSTATE[HY093]: Invalid parameter number: parameter was not defined ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 258 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'PDOStatement::e...', '/Volumes/Files/...', 258, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(258): PDOStatement->execute(Array)
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(142): Gacela\DataSource\Database->query(Object(Gacela\DataSource\Resource), Object(Gacela\DataSource\Query\Database))
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(661): Gacela\DataSource\Database->findAll(Object(Gacela\DataSource\Query\Database), Object(Gacela\DataSource\Resource), Array, Array)
#4 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/mapper/mapper.php(24): Gacela\Mapper\Mapper->findAll(Object(Kacela\Criteria))
#5 /Volumes/Files/Sites/darth/bane/application/classes/mapper/mapper.php(29): Kacela\Mapper\Mapper->find_all(Object(Kacela\Criteria))
#6 /Volumes/Files/Sites/darth/bane/application/classes/kacela.php(7): Darth\Mapper\Mapper->find_active(Object(Kacela\Criteria))
#7 /Volumes/Files/Sites/darth/bane/application/classes/model/lead.php(12): Kacela::find_active('user', Object(Kacela\Criteria))
#8 [internal function]: Darth\Model\Lead->create_new_lead(Object(Formo_Form))
#9 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(409): call_user_func_array(Array, Array)
#10 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(145): Formo_Core_Validator->_run_callbacks(true)
#11 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#12 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(29): Controller_Public->lead_form(true)
#13 [internal function]: Controller_Public_Index->action_index()
#14 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#18 {main}
2012-05-10 12:06:51 --- ERROR: ErrorException [ 2 ]: PDOStatement::execute(): SQLSTATE[HY093]: Invalid parameter number: parameter was not defined ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 258 ]
2012-05-10 12:06:51 --- STRACE: ErrorException [ 2 ]: PDOStatement::execute(): SQLSTATE[HY093]: Invalid parameter number: parameter was not defined ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 258 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'PDOStatement::e...', '/Volumes/Files/...', 258, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(258): PDOStatement->execute(Array)
#2 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php(142): Gacela\DataSource\Database->query(Object(Gacela\DataSource\Resource), Object(Gacela\DataSource\Query\Database))
#3 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(661): Gacela\DataSource\Database->findAll(Object(Gacela\DataSource\Query\Database), Object(Gacela\DataSource\Resource), Array, Array)
#4 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/mapper/mapper.php(24): Gacela\Mapper\Mapper->findAll(Object(Kacela\Criteria))
#5 /Volumes/Files/Sites/darth/bane/application/classes/mapper/mapper.php(29): Kacela\Mapper\Mapper->find_all(Object(Kacela\Criteria))
#6 /Volumes/Files/Sites/darth/bane/application/classes/mapper/mapper.php(51): Darth\Mapper\Mapper->find_active(Object(Kacela\Criteria))
#7 /Volumes/Files/Sites/darth/bane/application/classes/kacela.php(17): Darth\Mapper\Mapper->find_one(Object(Kacela\Criteria))
#8 /Volumes/Files/Sites/darth/bane/application/classes/model/lead.php(12): Kacela::find_one('user', Object(Kacela\Criteria))
#9 [internal function]: Darth\Model\Lead->create_new_lead(Object(Formo_Form))
#10 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(409): call_user_func_array(Array, Array)
#11 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(145): Formo_Core_Validator->_run_callbacks(true)
#12 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#13 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(29): Controller_Public->lead_form(true)
#14 [internal function]: Controller_Public_Index->action_index()
#15 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#17 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#18 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#19 {main}
2012-05-10 12:07:26 --- ERROR: ErrorException [ 1 ]: Call to undefined method Darth\Model\Lead::find_one() ~ APPPATH/classes/model/lead.php [ 12 ]
2012-05-10 12:07:26 --- STRACE: ErrorException [ 1 ]: Call to undefined method Darth\Model\Lead::find_one() ~ APPPATH/classes/model/lead.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-10 12:46:01 --- ERROR: ReflectionException [ 0 ]: Method Formo_Driver_Form::message() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
2012-05-10 12:46:01 --- STRACE: ReflectionException [ 0 ]: Method Formo_Driver_Form::message() does not exist ~ MODPATH/formo/classes/formo/core/container.php [ 146 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/container.php(146): ReflectionMethod->__construct(Object(Formo_Driver_Form), 'message')
#1 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(64): Formo_Core_Container->__call('message', Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/lead.php(45): Formo_Core_Validator->__call('message', Array)
#3 /Volumes/Files/Sites/darth/bane/application/classes/model/lead.php(45): Formo_Form->message()
#4 [internal function]: Darth\Model\Lead->create_new_lead(Object(Formo_Form))
#5 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(409): call_user_func_array(Array, Array)
#6 /Volumes/Files/Sites/darth/bane/modules/formo/classes/formo/core/validator.php(145): Formo_Core_Validator->_run_callbacks(true)
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(87): Formo_Core_Validator->validate()
#8 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(29): Controller_Public->lead_form(true)
#9 [internal function]: Controller_Public_Index->action_index()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-05-10 12:46:15 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kacela\Collection::save() ~ APPPATH/classes/model/lead.php [ 46 ]
2012-05-10 12:46:15 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kacela\Collection::save() ~ APPPATH/classes/model/lead.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-10 12:53:25 --- ERROR: Exception [ 0 ]: Specified key (message) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-05-10 12:53:25 --- STRACE: Exception [ 0 ]: Specified key (message) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(59): Kacela\Model\Model->__get('message')
#1 /Volumes/Files/Sites/darth/bane/modules/kable/vendor/Table/library/Table/Value.php(24): {closure}(Object(Darth\Model\Lead))
#2 /Volumes/Files/Sites/darth/bane/modules/kable/vendor/Table/library/Table/Cell.php(49): Table\Value->__invoke(Object(Closure), Object(Darth\Model\Lead))
#3 /Volumes/Files/Sites/darth/bane/modules/kable/vendor/Table/library/Table/Cell.php(76): Table\Cell->value(Object(Darth\Model\Lead))
#4 /Volumes/Files/Sites/darth/bane/modules/kable/vendor/Table/library/views/table.php(22): Table\Cell->render(Object(Darth\Model\Lead))
#5 /Volumes/Files/Sites/darth/bane/modules/kable/vendor/Table/library/Table.php(217): require('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/application/views/admin/index.php(7): Table->render()
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#10 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(51): Kohana_View->__toString()
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#13 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#14 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(151): Kohana_Controller_Template->after()
#15 [internal function]: Controller_Site->after()
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#17 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#18 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#19 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#20 {main}
2012-05-10 16:38:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-10 16:38:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
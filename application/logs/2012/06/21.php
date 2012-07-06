<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-06-21 10:19:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/partners/form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-06-21 10:19:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/partners/form was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-06-21 11:02:01 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin/partners.php [ 82 ]
2012-06-21 11:02:01 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin/partners.php [ 82 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/partners.php(82): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Files/...', 82, Array)
#1 [internal function]: Controller_Admin_Partners->action_form()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Partners))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-06-21 11:02:21 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin/partners.php [ 82 ]
2012-06-21 11:02:21 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin/partners.php [ 82 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/partners.php(82): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Files/...', 82, Array)
#1 [internal function]: Controller_Admin_Partners->action_form()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Partners))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-06-21 11:02:43 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin/partners.php [ 82 ]
2012-06-21 11:02:43 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin/partners.php [ 82 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/partners.php(82): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Files/...', 82, Array)
#1 [internal function]: Controller_Admin_Partners->action_form()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Partners))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-06-21 11:02:49 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin/partners.php [ 82 ]
2012-06-21 11:02:49 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/admin/partners.php [ 82 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/partners.php(82): Kohana_Core::error_handler(8, 'Trying to get p...', '/Volumes/Files/...', 82, Array)
#1 [internal function]: Controller_Admin_Partners->action_form()
#2 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Partners))
#3 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#6 {main}
2012-06-21 12:09:59 --- ERROR: ErrorException [ 1 ]: Call to undefined method Darth\Model\Partner::errors() ~ APPPATH/classes/controller/admin/partners.php [ 86 ]
2012-06-21 12:09:59 --- STRACE: ErrorException [ 1 ]: Call to undefined method Darth\Model\Partner::errors() ~ APPPATH/classes/controller/admin/partners.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-21 12:10:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method Darth\Model\Partner::errors() ~ APPPATH/classes/controller/admin/partners.php [ 86 ]
2012-06-21 12:10:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method Darth\Model\Partner::errors() ~ APPPATH/classes/controller/admin/partners.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-21 12:11:10 --- ERROR: ErrorException [ 1 ]: Call to a member function debug() on a non-object ~ APPPATH/classes/controller/admin/partners.php [ 86 ]
2012-06-21 12:11:10 --- STRACE: ErrorException [ 1 ]: Call to a member function debug() on a non-object ~ APPPATH/classes/controller/admin/partners.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-21 12:11:18 --- ERROR: ErrorException [ 1 ]: Call to a member function debug() on a non-object ~ APPPATH/classes/controller/admin/partners.php [ 86 ]
2012-06-21 12:11:18 --- STRACE: ErrorException [ 1 ]: Call to a member function debug() on a non-object ~ APPPATH/classes/controller/admin/partners.php [ 86 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-21 12:20:14 --- ERROR: ErrorException [ 1 ]: Call to a member function errors() on a non-object ~ APPPATH/classes/model/model.php [ 84 ]
2012-06-21 12:20:14 --- STRACE: ErrorException [ 1 ]: Call to a member function errors() on a non-object ~ APPPATH/classes/model/model.php [ 84 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-21 12:20:35 --- ERROR: ErrorException [ 1 ]: Call to a member function debug() on a non-object ~ APPPATH/classes/model/model.php [ 84 ]
2012-06-21 12:20:35 --- STRACE: ErrorException [ 1 ]: Call to a member function debug() on a non-object ~ APPPATH/classes/model/model.php [ 84 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-21 12:31:05 --- ERROR: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/model/partner.php [ 11 ]
2012-06-21 12:31:05 --- STRACE: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/model/partner.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-21 12:31:11 --- ERROR: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/model/partner.php [ 11 ]
2012-06-21 12:31:11 --- STRACE: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/model/partner.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-21 14:50:06 --- ERROR: Exception [ 0 ]: Specified key (company) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
2012-06-21 14:50:06 --- STRACE: Exception [ 0 ]: Specified key (company) does not exist! ~ MODPATH/kacela/classes/kacela/model/model.php [ 38 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/partners.php(25): Kacela\Model\Model->__get('company')
#1 /Volumes/Files/Sites/darth/bane/modules/kable/vendor/Table/library/Table/Value.php(24): {closure}(Object(Darth\Model\Partner))
#2 /Volumes/Files/Sites/darth/bane/modules/kable/vendor/Table/library/Table/Cell.php(49): Table\Value->__invoke(Object(Closure), Object(Darth\Model\Partner))
#3 /Volumes/Files/Sites/darth/bane/modules/kable/vendor/Table/library/Table/Cell.php(76): Table\Cell->value(Object(Darth\Model\Partner))
#4 /Volumes/Files/Sites/darth/bane/modules/kable/vendor/Table/library/views/table.php(22): Table\Cell->render(Object(Darth\Model\Partner))
#5 /Volumes/Files/Sites/darth/bane/modules/kable/vendor/Table/library/Table.php(217): require('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/application/views/admin/index.php(16): Table->render()
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(228): Kohana_View->render()
#10 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(53): Kohana_View->__toString()
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#13 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#14 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(190): Kohana_Controller_Template->after()
#15 [internal function]: Controller_Site->after()
#16 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin_Partners))
#17 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#18 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#19 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#20 {main}
2012-06-21 15:48:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method Darth\Model\Lead::_formo_add_fields() ~ APPPATH/classes/model/model.php [ 39 ]
2012-06-21 15:48:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method Darth\Model\Lead::_formo_add_fields() ~ APPPATH/classes/model/model.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-21 15:49:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method Darth\Model\Lead::_formo_add_fields() ~ APPPATH/classes/model/model.php [ 39 ]
2012-06-21 15:49:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method Darth\Model\Lead::_formo_add_fields() ~ APPPATH/classes/model/model.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-21 15:49:52 --- ERROR: ErrorException [ 1 ]: Call to undefined method Darth\Model\Lead::_formo_add_fields() ~ APPPATH/classes/model/model.php [ 39 ]
2012-06-21 15:49:52 --- STRACE: ErrorException [ 1 ]: Call to undefined method Darth\Model\Lead::_formo_add_fields() ~ APPPATH/classes/model/model.php [ 39 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-06-21 16:02:36 --- ERROR: Exception [ 0 ]: Insert to users failed with errors: Array
(
    [0] => 23000
    [1] => 1062
    [2] => Duplicate entry '' for key 'unq_email'
)
 With SQL: INSERT  INTO `users` (`password`) VALUES
(:password0) And Data: Array
(
    [:password0] => bcrypt$2a$12$tEpRGx9UoseK6mWwzHGf9uBOjzJieBS8C00N2MfamoJIW3XoOKKIK
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
2012-06-21 16:02:36 --- STRACE: Exception [ 0 ]: Insert to users failed with errors: Array
(
    [0] => 23000
    [1] => 1062
    [2] => Duplicate entry '' for key 'unq_email'
)
 With SQL: INSERT  INTO `users` (`password`) VALUES
(:password0) And Data: Array
(
    [:password0] => bcrypt$2a$12$tEpRGx9UoseK6mWwzHGf9uBOjzJieBS8C00N2MfamoJIW3XoOKKIK
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(471): Gacela\DataSource\Database->insert('users', Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(879): Gacela\Mapper\Mapper->_saveResource(Object(Gacela\DataSource\Resource), Array, Object(stdClass), Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/model.php(84): Gacela\Mapper\Mapper->save(Array, Object(stdClass), Array)
#3 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(348): Darth\Model\Model->save(NULL)
#4 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(355): Darth\Model\User->save()
#5 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(345): Darth\Model\User->set_password('temp1123!')
#6 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(123): Darth\Model\User->save(Object(Formo_Form))
#7 [internal function]: Controller_Admin_Leads->action_form()
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#12 {main}
2012-06-21 16:02:44 --- ERROR: Exception [ 0 ]: Insert to users failed with errors: Array
(
    [0] => 23000
    [1] => 1062
    [2] => Duplicate entry '' for key 'unq_email'
)
 With SQL: INSERT  INTO `users` (`password`) VALUES
(:password0) And Data: Array
(
    [:password0] => bcrypt$2a$12$RmPOIRzGEwCjTKTRTfINiucq0NWzLvfT3AzC76gM0dYGPggOMIfrG
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
2012-06-21 16:02:44 --- STRACE: Exception [ 0 ]: Insert to users failed with errors: Array
(
    [0] => 23000
    [1] => 1062
    [2] => Duplicate entry '' for key 'unq_email'
)
 With SQL: INSERT  INTO `users` (`password`) VALUES
(:password0) And Data: Array
(
    [:password0] => bcrypt$2a$12$RmPOIRzGEwCjTKTRTfINiucq0NWzLvfT3AzC76gM0dYGPggOMIfrG
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(471): Gacela\DataSource\Database->insert('users', Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(879): Gacela\Mapper\Mapper->_saveResource(Object(Gacela\DataSource\Resource), Array, Object(stdClass), Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/model.php(84): Gacela\Mapper\Mapper->save(Array, Object(stdClass), Array)
#3 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(348): Darth\Model\Model->save(NULL)
#4 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(355): Darth\Model\User->save()
#5 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(345): Darth\Model\User->set_password('temp1123!')
#6 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(123): Darth\Model\User->save(Object(Formo_Form))
#7 [internal function]: Controller_Admin_Leads->action_form()
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#12 {main}
2012-06-21 16:02:45 --- ERROR: Exception [ 0 ]: Insert to users failed with errors: Array
(
    [0] => 23000
    [1] => 1062
    [2] => Duplicate entry '' for key 'unq_email'
)
 With SQL: INSERT  INTO `users` (`password`) VALUES
(:password0) And Data: Array
(
    [:password0] => bcrypt$2a$12$S2SW4us2wITx2Nc1tgtg4.k8nuJyQi4HB9us8/uRIPiAPWWhIAfDq
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
2012-06-21 16:02:45 --- STRACE: Exception [ 0 ]: Insert to users failed with errors: Array
(
    [0] => 23000
    [1] => 1062
    [2] => Duplicate entry '' for key 'unq_email'
)
 With SQL: INSERT  INTO `users` (`password`) VALUES
(:password0) And Data: Array
(
    [:password0] => bcrypt$2a$12$S2SW4us2wITx2Nc1tgtg4.k8nuJyQi4HB9us8/uRIPiAPWWhIAfDq
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 199 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(471): Gacela\DataSource\Database->insert('users', Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/vendor/Gacela/library/Gacela/Mapper/Mapper.php(879): Gacela\Mapper\Mapper->_saveResource(Object(Gacela\DataSource\Resource), Array, Object(stdClass), Array)
#2 /Volumes/Files/Sites/darth/bane/application/classes/model/model.php(84): Gacela\Mapper\Mapper->save(Array, Object(stdClass), Array)
#3 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(348): Darth\Model\Model->save(NULL)
#4 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(355): Darth\Model\User->save()
#5 /Volumes/Files/Sites/darth/bane/application/classes/model/user.php(345): Darth\Model\User->set_password('temp1123!')
#6 /Volumes/Files/Sites/darth/bane/application/classes/controller/admin/leads.php(123): Darth\Model\User->save(Object(Formo_Form))
#7 [internal function]: Controller_Admin_Leads->action_form()
#8 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin_Leads))
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#12 {main}
2012-06-21 17:15:15 --- ERROR: Exception [ 0 ]: Code (23000) Error: Column 'id' in where clause is ambiguousQuery: SELECT partners.*, `users`.`email`, `users`.`first`, `users`.`initial`, `users`.`last`, `users`.`password`, `users`.`temp_password`, `users`.`temp_password_date`, `users`.`role`, `users`.`logins`, `users`.`last_login`, `users`.`registration_date`, `users`.`last_activity_date`, `users`.`user_notes`, `users`.`token`, `users`.`email_confirmed`, `users`.`last_ip`, `users`.`disabled`
FROM `partners`
INNER JOIN `users` ON `partners`.`id` = `users`.`id`
WHERE (`id` = :id_356a192b7913b04c54574d18c28d46e6395428ab)
AND (`disabled` = :disabled_da39a3ee5e6b4b0d3255bfef95601890afd80709)

Args: Array
(
    [:id_356a192b7913b04c54574d18c28d46e6395428ab] => 1
    [:disabled_da39a3ee5e6b4b0d3255bfef95601890afd80709] => 
)
 ~ MODPATH/kacela/vendor/Gacela/library/Gacela/DataSource/Database.php [ 244 ]
2012-06-21 17:15:15 --- STRACE: Exception [ 0 ]: Code (23000) Error: Column 'id' in where clause is ambiguousQuery: SELECT partners.*, `users`.`email`, `users`.`first`, `users`.`initial`, `users`.`last`, `users`.`password`, `users`.`temp_password`, `users`.`temp_password_date`, `users`.`role`, `users`.`logins`, `users`.`last_login`, `users`.`registration_date`, `users`.`last_activity_date`, `users`.`user_notes`, `users`.`token`, `users`.`email_confirmed`, `users`.`last_ip`, `users`.`disabled`
FROM `partners`
INNER JOIN `users` ON `partners`.`id` = `users`.`id`
WHERE (`id` = :id_356a192b7913b04c54574d18c28d46e6395428ab)
AND (`disabled` = :disabled_da39a3ee5e6b4b0d3255bfef95601890afd80709)

Args: Array
(
    [:id_356a192b7913b04c54574d18c28d46e6395428ab] => 1
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
#6 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/partners.php(56): Kacela::find_one('partner', Object(Kacela\Criteria))
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(66): Controller_Public_Partners->action_partner()
#8 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/index.php(9): Controller_Public->action_index()
#9 [internal function]: Controller_Public_Index->action_index()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Index))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
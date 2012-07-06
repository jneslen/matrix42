<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-24 08:33:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-24 08:33:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-24 08:42:38 --- ERROR: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/controller/admin/leads.php [ 171 ]
2012-05-24 08:42:38 --- STRACE: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/controller/admin/leads.php [ 171 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-24 08:46:09 --- ERROR: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/controller/admin/leads.php [ 171 ]
2012-05-24 08:46:09 --- STRACE: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/controller/admin/leads.php [ 171 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-24 10:11:00 --- ERROR: Exception [ 0 ]: Failed to find mapper (Press)! ~ MODPATH/kacela/vendor/Gacela/library/Gacela.php [ 275 ]
2012-05-24 10:11:00 --- STRACE: Exception [ 0 ]: Failed to find mapper (Press)! ~ MODPATH/kacela/vendor/Gacela/library/Gacela.php [ 275 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/core.php(80): Gacela->loadMapper('Press')
#1 /Volumes/Files/Sites/darth/bane/application/classes/kacela.php(7): Kacela_Core::load('press')
#2 /Volumes/Files/Sites/darth/bane/application/classes/controller/public/press.php(14): Kacela::find_active('press', Object(Kacela\Criteria))
#3 [internal function]: Controller_Public_Press->action_index()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Press))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
2012-05-24 10:43:02 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/views/lead_form.php [ 37 ]
2012-05-24 10:43:02 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/views/lead_form.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
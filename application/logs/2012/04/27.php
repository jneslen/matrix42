<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-27 16:38:15 --- ERROR: ErrorException [ 8 ]: Undefined property: Darth\Model\Content::$content ~ APPPATH/classes/model/content.php [ 8 ]
2012-04-27 16:38:15 --- STRACE: ErrorException [ 8 ]: Undefined property: Darth\Model\Content::$content ~ APPPATH/classes/model/content.php [ 8 ]
--
#0 /Volumes/Files/Sites/darth/bane/application/classes/model/content.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', '/Volumes/Files/...', 8, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/kacela/classes/kacela/model/model.php(29): Darth\Model\Content->_get_content()
#2 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/public.php(64): Kacela\Model\Model->__get('content')
#3 [internal function]: Controller_Public->action_index()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Solutions))
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#8 {main}
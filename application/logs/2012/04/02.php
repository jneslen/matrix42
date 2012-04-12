<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-04-02 12:12:13 --- ERROR: ErrorException [ 2 ]: filemtime(): stat failed for /Volumes/Files/Sites/darth/bane/assets/less/bootstrap/accordian.less ~ MODPATH/assets/classes/assets/core.php [ 166 ]
2012-04-02 12:12:13 --- STRACE: ErrorException [ 2 ]: filemtime(): stat failed for /Volumes/Files/Sites/darth/bane/assets/less/bootstrap/accordian.less ~ MODPATH/assets/classes/assets/core.php [ 166 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filemtime(): st...', '/Volumes/Files/...', 166, Array)
#1 /Volumes/Files/Sites/darth/bane/modules/assets/classes/assets/core.php(166): filemtime('/Volumes/Files/...')
#2 /Volumes/Files/Sites/darth/bane/application/classes/request.php(89): Assets_Core->styles()
#3 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(22): Request->styles()
#4 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#7 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(153): Kohana_Controller_Template->after()
#8 [internal function]: Controller_Site->after()
#9 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Start))
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#13 {main}
2012-04-02 12:13:37 --- ERROR: Exception [ 0 ]: parse error: failed at `(~".span@{index}") { .span(@index); }` line: 1422 ~ MODPATH/assets/vendor/lessphp/lessc.inc.php [ 2296 ]
2012-04-02 12:13:37 --- STRACE: Exception [ 0 ]: parse error: failed at `(~".span@{index}") { .span(@index); }` line: 1422 ~ MODPATH/assets/vendor/lessphp/lessc.inc.php [ 2296 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/assets/vendor/lessphp/lessc.inc.php(2242): lessc->throwError()
#1 /Volumes/Files/Sites/darth/bane/modules/assets/vendor/lessphp/lessc.inc.php(2272): lessc->parseTree('/*? * jQuery UI...')
#2 /Volumes/Files/Sites/darth/bane/modules/assets/classes/assets/core.php(218): lessc->parse('/*? * jQuery UI...')
#3 /Volumes/Files/Sites/darth/bane/application/classes/request.php(89): Assets_Core->styles()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(22): Request->styles()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(153): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Start))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-04-02 12:20:25 --- ERROR: Exception [ 0 ]: parse error: failed at `(~".span@{index}") { .span(@index); }` line: 1422 ~ MODPATH/assets/vendor/lessphp/lessc.inc.php [ 2296 ]
2012-04-02 12:20:25 --- STRACE: Exception [ 0 ]: parse error: failed at `(~".span@{index}") { .span(@index); }` line: 1422 ~ MODPATH/assets/vendor/lessphp/lessc.inc.php [ 2296 ]
--
#0 /Volumes/Files/Sites/darth/bane/modules/assets/vendor/lessphp/lessc.inc.php(2242): lessc->throwError()
#1 /Volumes/Files/Sites/darth/bane/modules/assets/vendor/lessphp/lessc.inc.php(2272): lessc->parseTree('/*? * jQuery UI...')
#2 /Volumes/Files/Sites/darth/bane/modules/assets/classes/assets/core.php(218): lessc->parse('/*? * jQuery UI...')
#3 /Volumes/Files/Sites/darth/bane/application/classes/request.php(89): Assets_Core->styles()
#4 /Volumes/Files/Sites/darth/bane/modules/site/views/public.php(22): Request->styles()
#5 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(61): include('/Volumes/Files/...')
#6 /Volumes/Files/Sites/darth/bane/system/classes/kohana/view.php(343): Kohana_View::capture('/Volumes/Files/...', Array)
#7 /Volumes/Files/Sites/darth/bane/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 /Volumes/Files/Sites/darth/bane/modules/site/classes/controller/site.php(153): Kohana_Controller_Template->after()
#9 [internal function]: Controller_Site->after()
#10 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Start))
#11 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#14 {main}
2012-04-02 13:07:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_0d74d08603a05a372dbcb290e6fcba569a5c9d97.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 13:07:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_0d74d08603a05a372dbcb290e6fcba569a5c9d97.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 13:07:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/matrix42-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 13:07:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/matrix42-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 14:21:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/matrix42-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 14:21:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/matrix42-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 14:21:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_0d74d08603a05a372dbcb290e6fcba569a5c9d97.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 14:21:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_0d74d08603a05a372dbcb290e6fcba569a5c9d97.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 14:21:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_0d74d08603a05a372dbcb290e6fcba569a5c9d97.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 14:21:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_0d74d08603a05a372dbcb290e6fcba569a5c9d97.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 14:21:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/matrix42-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 14:21:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/matrix42-logo.png ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 14:29:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_0d74d08603a05a372dbcb290e6fcba569a5c9d97.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 14:29:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_0d74d08603a05a372dbcb290e6fcba569a5c9d97.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 14:29:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_0d74d08603a05a372dbcb290e6fcba569a5c9d97.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 14:29:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_0d74d08603a05a372dbcb290e6fcba569a5c9d97.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 14:30:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_0d74d08603a05a372dbcb290e6fcba569a5c9d97.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 14:30:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_0d74d08603a05a372dbcb290e6fcba569a5c9d97.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 14:30:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_0d74d08603a05a372dbcb290e6fcba569a5c9d97.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 14:30:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_0d74d08603a05a372dbcb290e6fcba569a5c9d97.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 14:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_0d74d08603a05a372dbcb290e6fcba569a5c9d97.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 14:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_0d74d08603a05a372dbcb290e6fcba569a5c9d97.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 14:31:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_0d74d08603a05a372dbcb290e6fcba569a5c9d97.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 14:31:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_0d74d08603a05a372dbcb290e6fcba569a5c9d97.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 14:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_0d74d08603a05a372dbcb290e6fcba569a5c9d97.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 14:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_0d74d08603a05a372dbcb290e6fcba569a5c9d97.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 14:41:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_0d74d08603a05a372dbcb290e6fcba569a5c9d97.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 14:41:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_0d74d08603a05a372dbcb290e6fcba569a5c9d97.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_803da6d5b33fe56595b6f8861fbeb76d7ab4df54.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_803da6d5b33fe56595b6f8861fbeb76d7ab4df54.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:01:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_803da6d5b33fe56595b6f8861fbeb76d7ab4df54.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:01:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_803da6d5b33fe56595b6f8861fbeb76d7ab4df54.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_803da6d5b33fe56595b6f8861fbeb76d7ab4df54.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_803da6d5b33fe56595b6f8861fbeb76d7ab4df54.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:08:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_803da6d5b33fe56595b6f8861fbeb76d7ab4df54.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:08:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_803da6d5b33fe56595b6f8861fbeb76d7ab4df54.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:09:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_803da6d5b33fe56595b6f8861fbeb76d7ab4df54.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:09:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_803da6d5b33fe56595b6f8861fbeb76d7ab4df54.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:09:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_803da6d5b33fe56595b6f8861fbeb76d7ab4df54.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:09:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/csspublic_803da6d5b33fe56595b6f8861fbeb76d7ab4df54.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/reset.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/grid.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/mixins.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/scaffolding.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/mixins.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/grid.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/reset.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/scaffolding.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/variables.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/variables.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/layouts.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/layouts.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/type.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/type.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/forms.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/forms.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/sprites.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/tables.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/sprites.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/tables.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/code.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/code.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/dropdowns.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/dropdowns.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/wells.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/wells.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/component-animations.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/close.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/component-animations.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/close.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/button-groups.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/button-groups.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/buttons.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/buttons.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/alerts.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/alerts.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/pagination.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/pagination.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/navs.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/navs.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/navbar.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/breadcrumbs.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/navbar.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/breadcrumbs.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/pager.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/pager.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/modals.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/modals.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/popovers.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/popovers.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/thumbnails.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/thumbnails.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/tooltip.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/tooltip.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/labels.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/labels.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/badges.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/badges.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/progress-bars.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/progress-bars.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/accordion.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/accordion.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/carousel.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/carousel.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/hero-unit.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/hero-unit.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 15:11:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/utilities.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-04-02 15:11:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/css/utilities.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#1 {main}
2012-04-02 16:11:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-04-02 16:11:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-04-02 16:32:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-04-02 16:32:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-04-02 16:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-04-02 16:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
2012-04-02 16:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-04-02 16:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Volumes/Files/Sites/darth/bane/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Volumes/Files/Sites/darth/bane/index.php(103): Kohana_Request->execute()
#3 {main}
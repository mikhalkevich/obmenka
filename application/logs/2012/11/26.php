<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-26 00:22:12 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-11-26 00:22:12 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image/gd.php(480): Kohana_Image_GD->_save_function('pic', 100)
#1 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image.php(625): Kohana_Image_GD->_do_save('/var/www/vhosts...', 100)
#2 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/ajax.php(52): Kohana_Image->save('/var/www/vhosts...')
#3 [internal function]: Controller_Adminka_Ajax->action_index()
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Ajax))
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-26 00:39:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 00:39:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 00:59:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 00:59:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 01:00:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 01:00:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 01:31:36 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-11-26 01:31:36 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image/gd.php(480): Kohana_Image_GD->_save_function('pic', 100)
#1 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image.php(625): Kohana_Image_GD->_do_save('/var/www/vhosts...', 100)
#2 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/ajax.php(52): Kohana_Image->save('/var/www/vhosts...')
#3 [internal function]: Controller_Adminka_Ajax->action_index()
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Ajax))
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-26 01:49:59 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_120351_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-11-26 01:49:59 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_120351_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image/gd.php(480): Kohana_Image_GD->_save_function('xn--p1ai_descr_...', 100)
#1 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image.php(625): Kohana_Image_GD->_do_save('/var/www/vhosts...', 100)
#2 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/ajax.php(52): Kohana_Image->save('/var/www/vhosts...')
#3 [internal function]: Controller_Adminka_Ajax->action_index()
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Ajax))
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-26 01:59:56 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_194527_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-11-26 01:59:56 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_194527_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image/gd.php(480): Kohana_Image_GD->_save_function('xn--p1ai_descr_...', 100)
#1 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image.php(625): Kohana_Image_GD->_do_save('/var/www/vhosts...', 100)
#2 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/ajax.php(52): Kohana_Image->save('/var/www/vhosts...')
#3 [internal function]: Controller_Adminka_Ajax->action_index()
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Ajax))
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-26 02:28:00 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support tiff images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-11-26 02:28:00 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support tiff images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image/gd.php(480): Kohana_Image_GD->_save_function('tiff', 100)
#1 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image.php(625): Kohana_Image_GD->_do_save('/var/www/vhosts...', 100)
#2 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/ajax.php(52): Kohana_Image->save('/var/www/vhosts...')
#3 [internal function]: Controller_Adminka_Ajax->action_index()
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Ajax))
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-26 02:45:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 02:45:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 03:13:01 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support tiff images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-11-26 03:13:01 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support tiff images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image/gd.php(480): Kohana_Image_GD->_save_function('tiff', 100)
#1 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image.php(625): Kohana_Image_GD->_do_save('/var/www/vhosts...', 100)
#2 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/ajax.php(52): Kohana_Image->save('/var/www/vhosts...')
#3 [internal function]: Controller_Adminka_Ajax->action_index()
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Ajax))
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-26 06:15:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 06:15:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 06:15:55 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_192143_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-11-26 06:15:55 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_192143_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image/gd.php(480): Kohana_Image_GD->_save_function('xn--p1ai_descr_...', 100)
#1 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image.php(625): Kohana_Image_GD->_do_save('/var/www/vhosts...', 100)
#2 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/ajax.php(52): Kohana_Image->save('/var/www/vhosts...')
#3 [internal function]: Controller_Adminka_Ajax->action_index()
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Ajax))
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-26 06:29:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 06:29:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 06:29:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 06:29:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 06:45:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 06:45:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 09:47:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 09:47:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 10:11:42 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_197264_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-11-26 10:11:42 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_197264_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image/gd.php(480): Kohana_Image_GD->_save_function('xn--p1ai_descr_...', 100)
#1 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image.php(625): Kohana_Image_GD->_do_save('/var/www/vhosts...', 100)
#2 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/ajax.php(52): Kohana_Image->save('/var/www/vhosts...')
#3 [internal function]: Controller_Adminka_Ajax->action_index()
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Ajax))
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-26 10:26:29 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-11-26 10:26:29 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image/gd.php(480): Kohana_Image_GD->_save_function('pic', 100)
#1 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image.php(625): Kohana_Image_GD->_do_save('/var/www/vhosts...', 100)
#2 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/ajax.php(52): Kohana_Image->save('/var/www/vhosts...')
#3 [internal function]: Controller_Adminka_Ajax->action_index()
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Ajax))
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-26 10:32:21 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support jpg%3F6d89b403431f4c3235ceb899f2084738 images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-11-26 10:32:21 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support jpg%3F6d89b403431f4c3235ceb899f2084738 images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image/gd.php(480): Kohana_Image_GD->_save_function('jpg%3F6d89b4034...', 100)
#1 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image.php(625): Kohana_Image_GD->_do_save('/var/www/vhosts...', 100)
#2 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/ajax.php(52): Kohana_Image->save('/var/www/vhosts...')
#3 [internal function]: Controller_Adminka_Ajax->action_index()
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Ajax))
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-26 10:41:33 --- ERROR: ErrorException [ 1 ]: Call to a member function is_root() on a non-object ~ APPPATH/views/tovars/v_tovars_sell.php [ 10 ]
2012-11-26 10:41:33 --- STRACE: ErrorException [ 1 ]: Call to a member function is_root() on a non-object ~ APPPATH/views/tovars/v_tovars_sell.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/vhosts...', Array)
#1 {main}
2012-11-26 10:50:51 --- ERROR: ErrorException [ 1 ]: Call to a member function has_children() on a non-object ~ APPPATH/views/tovars/v_tovars_sell.php [ 7 ]
2012-11-26 10:50:51 --- STRACE: ErrorException [ 1 ]: Call to a member function has_children() on a non-object ~ APPPATH/views/tovars/v_tovars_sell.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/vhosts...', Array)
#1 {main}
2012-11-26 10:53:49 --- ERROR: ErrorException [ 1 ]: Call to a member function has_children() on a non-object ~ APPPATH/views/tovars/v_tovars_sell.php [ 8 ]
2012-11-26 10:53:49 --- STRACE: ErrorException [ 1 ]: Call to a member function has_children() on a non-object ~ APPPATH/views/tovars/v_tovars_sell.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/vhosts...', Array)
#1 {main}
2012-11-26 11:04:47 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Catalog::get_children() ~ APPPATH/classes/controller/tovars/sell.php [ 28 ]
2012-11-26 11:04:47 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Catalog::get_children() ~ APPPATH/classes/controller/tovars/sell.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-26 11:05:34 --- ERROR: ErrorException [ 1 ]: Call to a member function get_children() on a non-object ~ APPPATH/classes/controller/tovars/sell.php [ 28 ]
2012-11-26 11:05:34 --- STRACE: ErrorException [ 1 ]: Call to a member function get_children() on a non-object ~ APPPATH/classes/controller/tovars/sell.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-26 11:06:51 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Catalog::get_children() ~ APPPATH/classes/controller/tovars/sell.php [ 28 ]
2012-11-26 11:06:51 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Catalog::get_children() ~ APPPATH/classes/controller/tovars/sell.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-26 11:13:15 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Catalog::get_children() ~ APPPATH/classes/controller/tovars/sell.php [ 28 ]
2012-11-26 11:13:15 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Catalog::get_children() ~ APPPATH/classes/controller/tovars/sell.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-26 11:13:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$fulltree ~ APPPATH/classes/controller/tovars/sell.php [ 28 ]
2012-11-26 11:13:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$fulltree ~ APPPATH/classes/controller/tovars/sell.php [ 28 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/tovars/sell.php(28): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tovars_Sell->action_index(Object(Controller_Tovars_Sell))
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-26 11:28:57 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/tovars/v_tovars_sell.php [ 7 ]
2012-11-26 11:28:57 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/tovars/v_tovars_sell.php [ 7 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/tovars/v_tovars_sell.php(7): Kohana_Core::error_handler('/var/www/vhosts...', Array)
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(82): Kohana_View->__toString('/var/www/vhosts...', Array)
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Tovars_Sell))
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-26 11:49:51 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/v_base.php [ 81 ]
2012-11-26 11:49:51 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/v_base.php [ 81 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(81): Kohana_Core::error_handler('/var/www/vhosts...', Array)
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Adminka_Tovars))
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-26 11:50:56 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/v_base.php [ 81 ]
2012-11-26 11:50:56 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/v_base.php [ 81 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(81): Kohana_Core::error_handler('/var/www/vhosts...', Array)
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Adminka_Tovars))
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-26 12:03:15 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_193325_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-11-26 12:03:15 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_193325_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image/gd.php(480): Kohana_Image_GD->_save_function('xn--p1ai_descr_...', 100)
#1 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image.php(625): Kohana_Image_GD->_do_save('/var/www/vhosts...', 100)
#2 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/ajax.php(52): Kohana_Image->save('/var/www/vhosts...')
#3 [internal function]: Controller_Adminka_Ajax->action_index()
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Ajax))
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-26 12:09:36 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-11-26 12:09:36 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image/gd.php(480): Kohana_Image_GD->_save_function('pic', 100)
#1 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image.php(625): Kohana_Image_GD->_do_save('/var/www/vhosts...', 100)
#2 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/ajax.php(50): Kohana_Image->save('/var/www/vhosts...')
#3 [internal function]: Controller_Adminka_Ajax->action_index()
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Ajax))
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2012-11-26 12:27:45 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adminka/findpicture/userguide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-26 12:27:45 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adminka/findpicture/userguide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-26 12:29:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adminka/findpicture/userguide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-26 12:29:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adminka/findpicture/userguide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-26 12:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adminka/findpicture/guide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-26 12:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adminka/findpicture/guide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-26 12:29:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adminka/findpicture/guide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-26 12:29:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adminka/findpicture/guide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-26 12:29:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adminka/findpicture/userguide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-26 12:29:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adminka/findpicture/userguide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-26 12:30:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adminka/findpicture/userguide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-11-26 12:30:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adminka/findpicture/userguide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-26 12:30:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userguide ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 12:30:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: userguide ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 12:51:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL tovars/photo/47215 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-11-26 12:51:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL tovars/photo/47215 was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-26 13:06:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH/classes/controller/adminka/tovars.php [ 163 ]
2012-11-26 13:06:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH/classes/controller/adminka/tovars.php [ 163 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_admi...')
#1 {main}
2012-11-26 13:06:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH/classes/controller/adminka/tovars.php [ 163 ]
2012-11-26 13:06:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH/classes/controller/adminka/tovars.php [ 163 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_admi...')
#1 {main}
2012-11-26 13:22:48 --- ERROR: ReflectionException [ 0 ]: Function not_empty’() does not exist ~ SYSPATH/classes/kohana/validation.php [ 383 ]
2012-11-26 13:22:48 --- STRACE: ReflectionException [ 0 ]: Function not_empty’() does not exist ~ SYSPATH/classes/kohana/validation.php [ 383 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/validation.php(383): ReflectionFunction->__construct('not_empty???')
#1 /var/www/vhosts/obmenka.by/httpdocs/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check()
#2 /var/www/vhosts/obmenka.by/httpdocs/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#3 /var/www/vhosts/obmenka.by/httpdocs/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#4 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/main/main.php(123): Kohana_ORM->save()
#5 [internal function]: Controller_Main_Main->action_msg()
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main_Main))
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#10 {main}
2012-11-26 13:30:03 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Delimiter must not be alphanumeric or backslash ~ SYSPATH/classes/kohana/valid.php [ 39 ]
2012-11-26 13:30:03 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Delimiter must not be alphanumeric or backslash ~ SYSPATH/classes/kohana/valid.php [ 39 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/valid.php(39): Kohana_Core::error_handler('script', 'script')
#1 [internal function]: Kohana_Valid::regex('script', 'script')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/validation.php(378): ReflectionMethod->invokeArgs(NULL, Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check()
#4 /var/www/vhosts/obmenka.by/httpdocs/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#5 /var/www/vhosts/obmenka.by/httpdocs/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#6 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/main/main.php(123): Kohana_ORM->save()
#7 [internal function]: Controller_Main_Main->action_msg()
#8 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main_Main))
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#12 {main}
2012-11-26 13:30:28 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Delimiter must not be alphanumeric or backslash ~ SYSPATH/classes/kohana/valid.php [ 39 ]
2012-11-26 13:30:28 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Delimiter must not be alphanumeric or backslash ~ SYSPATH/classes/kohana/valid.php [ 39 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/valid.php(39): Kohana_Core::error_handler('script', '12324124124')
#1 [internal function]: Kohana_Valid::regex('12324124124', 'script')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/validation.php(378): ReflectionMethod->invokeArgs(NULL, Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check()
#4 /var/www/vhosts/obmenka.by/httpdocs/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#5 /var/www/vhosts/obmenka.by/httpdocs/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#6 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/main/main.php(123): Kohana_ORM->save()
#7 [internal function]: Controller_Main_Main->action_msg()
#8 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main_Main))
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#12 {main}
2012-11-26 13:32:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting '(' ~ APPPATH/views/adminka/tovars/v_tovars_photo.php [ 6 ]
2012-11-26 13:32:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting '(' ~ APPPATH/views/adminka/tovars/v_tovars_photo.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/vhosts...', Array)
#1 {main}
2012-11-26 13:38:27 --- ERROR: ErrorException [ 2 ]: preg_match() [function.preg-match]: Delimiter must not be alphanumeric or backslash ~ SYSPATH/classes/kohana/valid.php [ 39 ]
2012-11-26 13:38:27 --- STRACE: ErrorException [ 2 ]: preg_match() [function.preg-match]: Delimiter must not be alphanumeric or backslash ~ SYSPATH/classes/kohana/valid.php [ 39 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/valid.php(39): Kohana_Core::error_handler('s/script/??????...', '<p>??asd script...')
#1 [internal function]: Kohana_Valid::regex('<p>??asd script...', 's/script/??????...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/validation.php(378): ReflectionMethod->invokeArgs(NULL, Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check()
#4 /var/www/vhosts/obmenka.by/httpdocs/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#5 /var/www/vhosts/obmenka.by/httpdocs/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#6 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/main/main.php(123): Kohana_ORM->save()
#7 [internal function]: Controller_Main_Main->action_msg()
#8 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main_Main))
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#12 {main}
2012-11-26 13:44:45 --- ERROR: ReflectionException [ 0 ]: Function notregex() does not exist ~ SYSPATH/classes/kohana/validation.php [ 383 ]
2012-11-26 13:44:45 --- STRACE: ReflectionException [ 0 ]: Function notregex() does not exist ~ SYSPATH/classes/kohana/validation.php [ 383 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/validation.php(383): ReflectionFunction->__construct('notregex')
#1 /var/www/vhosts/obmenka.by/httpdocs/modules/orm/classes/kohana/orm.php(1172): Kohana_Validation->check()
#2 /var/www/vhosts/obmenka.by/httpdocs/modules/orm/classes/kohana/orm.php(1200): Kohana_ORM->check(NULL)
#3 /var/www/vhosts/obmenka.by/httpdocs/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->create(NULL)
#4 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/main/main.php(123): Kohana_ORM->save()
#5 [internal function]: Controller_Main_Main->action_msg()
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Main_Main))
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#10 {main}
2012-11-26 13:53:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 13:53:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 13:53:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 13:53:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 13:53:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 13:53:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 13:53:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 13:53:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 13:54:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 13:54:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 13:54:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 13:54:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 13:54:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 13:54:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 13:54:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 13:54:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 13:54:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 13:54:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 13:54:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 13:54:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 13:54:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 13:54:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 13:55:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 13:55:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 13:55:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 13:55:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 13:56:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 13:56:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 13:56:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 13:56:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 13:56:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 13:56:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 13:56:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 13:56:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 13:56:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 13:56:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 13:57:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 13:57:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-26 13:57:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-26 13:57:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
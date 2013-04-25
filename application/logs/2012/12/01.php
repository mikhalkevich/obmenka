<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-12-01 00:36:59 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 00:36:59 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 01:33:40 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_145090_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 01:33:40 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_145090_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 01:35:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 01:35:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 01:37:46 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_191470_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 01:37:46 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_191470_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 02:06:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 02:06:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 02:15:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 02:15:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 02:22:56 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_194527_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 02:22:56 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_194527_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 02:29:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 02:29:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 02:47:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 02:47:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 02:52:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 02:52:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 03:09:59 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_149798_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 03:09:59 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_149798_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 03:11:56 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 03:11:56 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 03:24:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 03:24:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 03:25:20 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_193056_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 03:25:20 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_193056_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 03:27:20 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 03:27:20 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 03:35:30 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 03:35:30 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 03:41:42 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_173028_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 03:41:42 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_173028_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 04:04:48 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_102449_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 04:04:48 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_102449_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 04:16:57 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 04:16:57 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 04:42:11 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 04:42:11 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 04:57:14 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_138469_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 04:57:14 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_138469_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 05:00:42 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_102449_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 05:00:42 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_102449_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 05:02:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 05:02:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 05:03:13 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_132455_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 05:03:13 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_132455_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 05:22:47 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_197747_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 05:22:47 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_197747_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 05:23:40 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_173028_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 05:23:40 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_173028_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 05:30:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 05:30:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 05:30:34 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 05:30:34 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 05:37:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 05:37:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 05:53:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 05:53:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:02:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:02:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:03:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:03:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:03:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:03:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:04:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:04:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:04:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:04:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:04:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:04:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:04:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:04:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:05:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:05:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:05:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:05:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:05:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:05:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:07:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:07:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:07:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:07:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:07:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:07:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:07:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:07:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:08:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:08:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:08:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:08:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:08:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:08:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:09:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:09:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:09:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:09:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:09:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:09:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:09:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:09:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:10:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:10:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:11:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:11:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:11:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:11:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:12:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:12:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:12:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:12:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:12:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:12:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:12:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: friends/cabinet ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:12:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: friends/cabinet ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:12:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:12:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:12:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:12:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:14:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:14:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:14:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:14:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:16:55 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 06:16:55 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 06:17:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adminka/post was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-01 06:17:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adminka/post was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-01 06:17:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:17:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:17:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:17:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:17:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:17:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:19:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:19:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:20:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:20:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:20:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:20:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:21:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:21:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:21:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:21:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:22:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:22:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:23:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 06:23:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 06:30:13 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 06:30:13 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 06:37:04 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 06:37:04 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 06:48:16 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_189111_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 06:48:16 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_189111_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 06:49:00 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_189111_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 06:49:00 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_189111_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 06:50:48 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_193056_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 06:50:48 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_193056_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 06:59:15 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_193056_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 06:59:15 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_193056_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 07:10:43 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_138469_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 07:10:43 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_138469_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 07:12:50 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_149798_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 07:12:50 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_149798_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 07:15:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 07:15:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 08:00:17 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 08:00:17 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 08:01:34 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_145064_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 08:01:34 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_145064_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 08:06:43 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_27144_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 08:06:43 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_27144_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 08:17:07 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support bmp images ~ MODPATH/image/classes/kohana/image/gd.php [ 108 ]
2012-12-01 08:17:07 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support bmp images ~ MODPATH/image/classes/kohana/image/gd.php [ 108 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image.php(53): Kohana_Image_GD->__construct('/var/www/vhosts...')
#1 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/ajax.php(48): Kohana_Image::factory('/var/www/vhosts...')
#2 [internal function]: Controller_Adminka_Ajax->action_index()
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Ajax))
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#7 {main}
2012-12-01 08:17:20 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-12-01 08:17:20 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/modules/orm/classes/kohana/orm.php(1261): Kohana_ORM->check(NULL)
#1 /var/www/vhosts/obmenka.by/httpdocs/modules/orm/classes/kohana/orm.php(1314): Kohana_ORM->update(NULL)
#2 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/ajax.php(57): Kohana_ORM->save()
#3 [internal function]: Controller_Adminka_Ajax->action_index()
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Ajax))
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-01 08:20:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 08:20:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 08:30:52 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_191470_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 08:30:52 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_191470_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 08:42:04 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_191470_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 08:42:04 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_191470_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 09:03:07 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 09:03:07 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 10:08:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 10:08:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 10:54:46 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support ru_v_1352031306192_bulletin images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 10:54:46 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support ru_v_1352031306192_bulletin images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image/gd.php(480): Kohana_Image_GD->_save_function('ru_v_1352031306...', 100)
#1 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image.php(625): Kohana_Image_GD->_do_save('/var/www/vhosts...', 100)
#2 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/ajax.php(52): Kohana_Image->save('/var/www/vhosts...')
#3 [internal function]: Controller_Adminka_Ajax->action_index()
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Ajax))
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-01 10:57:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 10:57:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 10:58:10 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_192143_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 10:58:10 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_192143_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 11:09:38 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support jpg%3F6d89b403431f4c3235ceb899f2084738 images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 11:09:38 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support jpg%3F6d89b403431f4c3235ceb899f2084738 images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 11:17:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 11:17:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 12:00:06 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_120351_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 12:00:06 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_120351_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 12:01:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 12:01:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 13:24:02 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 13:24:02 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 13:24:22 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 13:24:22 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 13:24:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 13:24:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 13:26:30 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 13:26:30 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 13:35:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-01 13:35:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-01 13:52:30 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_27144_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 13:52:30 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_27144_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-01 14:15:59 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_193056_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-01 14:15:59 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_193056_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
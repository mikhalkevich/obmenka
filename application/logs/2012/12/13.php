<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-12-13 00:52:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 00:52:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 01:37:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 01:37:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 02:03:29 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_197264_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-13 02:03:29 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_197264_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-13 02:05:48 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-13 02:05:48 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-13 02:27:35 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-13 02:27:35 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-13 02:31:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 02:31:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 02:31:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 02:31:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 02:33:26 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_138469_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-13 02:33:26 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_138469_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-13 02:46:18 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-13 02:46:18 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-13 02:50:49 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_173038_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-13 02:50:49 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_173038_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-13 02:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 02:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 02:57:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 02:57:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 02:58:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 02:58:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 02:58:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 02:58:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 02:58:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 02:58:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 02:58:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 02:58:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 03:00:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 03:00:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 03:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 03:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:39:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:39:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:40:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:40:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:40:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:40:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:41:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:41:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:41:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admink ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:41:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: admink ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:41:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:41:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:41:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:41:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:42:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:42:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:42:22 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-13 04:42:22 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-13 04:42:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:42:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:42:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:42:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:42:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:42:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:42:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:42:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:43:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:43:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:43:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:43:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:43:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:43:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:43:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:43:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:43:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:43:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/sort_asc.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/sort_asc.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/sort_both.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/images/sort_both.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:44:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:44:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:56:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:56:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:56:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:56:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:56:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:56:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:57:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:57:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:57:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:57:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:58:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:58:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:58:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:58:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 04:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 04:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 05:10:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 05:10:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 05:29:30 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support com_is_image_PhilipsConsumer_SHG7210_10-IMS-global%3Fwid%3D225%26hei%3D225%26%24jpglarge%24 images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-13 05:29:30 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support com_is_image_PhilipsConsumer_SHG7210_10-IMS-global%3Fwid%3D225%26hei%3D225%26%24jpglarge%24 images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image/gd.php(480): Kohana_Image_GD->_save_function('com_is_image_Ph...', 100)
#1 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image.php(625): Kohana_Image_GD->_do_save('/var/www/vhosts...', 100)
#2 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/ajax.php(52): Kohana_Image->save('/var/www/vhosts...')
#3 [internal function]: Controller_Adminka_Ajax->action_index()
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Ajax))
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-13 05:52:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 05:52:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 07:15:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 07:15:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 07:36:38 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_197264_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-13 07:36:38 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_197264_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-13 07:43:52 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-12-13 07:43:52 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
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
2012-12-13 07:54:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/104/f103413_2012_12_13_07_17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 07:54:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/104/f103413_2012_12_13_07_17.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 07:54:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/353/f75422_2012_12_13_07_31.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 07:54:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/353/f75422_2012_12_13_07_31.jpg ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 08:13:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 08:13:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 08:27:54 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-13 08:27:54 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-13 08:33:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 08:33:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 08:37:14 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-13 08:37:14 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-13 08:54:50 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-13 08:54:50 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-13 10:09:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 10:09:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 10:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 10:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 10:17:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 10:17:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 11:36:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 11:36:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 11:36:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 11:36:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 11:41:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 11:41:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 11:43:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 11:43:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 12:03:17 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_166852_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-13 12:03:17 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_166852_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-13 12:13:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: вот ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 12:13:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: вот ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 12:13:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 12:13:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 12:13:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 12:13:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 12:21:53 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-12-13 12:21:53 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
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
2012-12-13 12:30:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 12:30:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 12:31:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 12:31:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 12:31:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 12:31:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 12:34:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 12:34:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 12:43:56 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_197264_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-13 12:43:56 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_197264_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-13 13:10:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 13:10:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 14:00:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 14:00:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-13 15:45:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-13 15:45:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
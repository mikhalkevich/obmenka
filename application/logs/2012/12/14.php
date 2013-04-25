<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-12-14 01:03:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-14 01:03:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 01:10:00 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-14 01:10:00 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-14 01:17:38 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-12-14 01:17:38 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
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
2012-12-14 01:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-14 01:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 01:31:29 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-14 01:31:29 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-14 01:31:38 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support jpg%3F6d89b403431f4c3235ceb899f2084738 images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-14 01:31:38 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support jpg%3F6d89b403431f4c3235ceb899f2084738 images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-14 01:56:27 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-14 01:56:27 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-14 02:03:45 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-12-14 02:03:45 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
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
2012-12-14 02:11:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-14 02:11:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 02:11:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-14 02:11:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 02:11:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-14 02:11:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 02:22:41 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-14 02:22:41 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-14 03:03:50 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_186701_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-14 03:03:50 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_186701_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-14 03:12:34 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-14 03:12:34 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-14 03:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-14 03:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 03:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-14 03:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 03:15:45 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_197264_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-14 03:15:45 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_197264_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-14 03:40:28 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-14 03:40:28 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-14 03:46:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-14 03:46:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 04:04:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-14 04:04:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 04:13:02 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_197264_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-14 04:13:02 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_197264_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-14 04:43:28 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_138469_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-14 04:43:28 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_138469_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-14 04:45:16 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-14 04:45:16 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-14 04:49:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-14 04:49:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 05:02:46 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_121033_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-14 05:02:46 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_121033_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-14 05:29:03 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_151859_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-14 05:29:03 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_151859_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-14 06:54:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-14 06:54:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 06:54:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-14 06:54:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 06:55:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-14 06:55:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 06:55:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-14 06:55:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 06:55:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-14 06:55:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 07:06:10 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-14 07:06:10 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-14 07:14:19 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support jpg%3F6d89b403431f4c3235ceb899f2084738 images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-14 07:14:19 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support jpg%3F6d89b403431f4c3235ceb899f2084738 images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-14 07:22:15 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-12-14 07:22:15 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
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
2012-12-14 07:24:27 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-12-14 07:24:27 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
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
2012-12-14 08:16:13 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support jpg_resize_800x800_ images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-14 08:16:13 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support jpg_resize_800x800_ images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image/gd.php(480): Kohana_Image_GD->_save_function('jpg_resize_800x...', 100)
#1 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image.php(625): Kohana_Image_GD->_do_save('/var/www/vhosts...', 100)
#2 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/ajax.php(50): Kohana_Image->save('/var/www/vhosts...')
#3 [internal function]: Controller_Adminka_Ajax->action_index()
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Ajax))
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-14 09:37:30 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_173028_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-14 09:37:30 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_173028_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-14 09:51:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-14 09:51:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 09:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-14 09:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 09:57:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-14 09:57:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 09:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-14 09:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 09:58:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-14 09:58:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:13:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/617/s_u40056000_2012_11_21_06_29.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:13:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/613/s_u40051917_2012_11_24_08_34.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:13:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/860/s_f82516_2012_11_28_08_23.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:13:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/785/s_137269_1005_2012_11_27_10_58.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:13:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1171/s_n120342_2012_11_30_04_44.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:13:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/617/s_u40056000_2012_11_21_06_29.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:13:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/83/s_40066628_9995_2012_11_19_06_50.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:13:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/83/s_40066628_9995_2012_11_19_06_50.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:13:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/613/s_u40051917_2012_11_24_08_34.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:13:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/860/s_f82516_2012_11_28_08_23.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:13:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/785/s_137269_1005_2012_11_27_10_58.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:13:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1171/s_n120342_2012_11_30_04_44.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:13:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1350/s_u40051798_2012_11_19_12_02.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:13:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/611/s_40066598_9995_2012_11_19_08_52.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:13:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1350/s_u40051798_2012_11_19_12_02.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:13:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/611/s_40066598_9995_2012_11_19_08_52.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:13:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/889/s_87991_995_2012_11_26_09_01.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:13:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/889/s_87991_995_2012_11_26_09_01.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:13:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/73/s_97646_995_2012_11_21_04_26.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:13:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/73/s_97646_995_2012_11_21_04_26.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:14:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/73/s_97646_995_2012_11_21_04_26.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:14:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/73/s_97646_995_2012_11_21_04_26.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:14:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/892/s_87686_995_2012_11_24_05_27.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:14:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/892/s_87686_995_2012_11_24_05_27.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:15:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/83/s_40066628_9995_2012_11_19_06_50.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:15:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/231/s_27641_1005_2012_11_20_04_50.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:15:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1352/s_u40030456_2012_11_27_02_15.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:15:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/686/s_n76001_2012_11_27_05_19.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:15:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/83/s_40066628_9995_2012_11_19_06_50.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:15:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/730/s_f87848_2012_11_20_03_38.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:15:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1055/s_u40032170_2012_11_26_01_39.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:15:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1055/s_u40032170_2012_11_26_01_39.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:15:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/686/s_n76001_2012_11_27_05_19.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:15:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1352/s_u40030456_2012_11_27_02_15.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:15:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/231/s_27641_1005_2012_11_20_04_50.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:15:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/730/s_f87848_2012_11_20_03_38.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:15:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/304/s_n50702_2012_11_29_08_38.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:15:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/304/s_n50702_2012_11_29_08_38.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:15:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/12/s_40044042_9995_2012_11_22_04_38.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:15:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/12/s_40044042_9995_2012_11_22_04_38.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:15:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1120/s_114598_1005_2012_11_29_02_26.jpeg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:15:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1120/s_114598_1005_2012_11_29_02_26.jpeg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:15:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/452/s_f100127_2012_11_23_01_25.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:15:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/452/s_f100127_2012_11_23_01_25.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:15:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1178/s_f55451_2012_11_24_05_31.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:15:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1178/s_f55451_2012_11_24_05_31.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:15:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/185/s_n134536_2012_11_26_02_36.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:15:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/943/s_f95870_2012_11_28_05_58.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:15:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/185/s_n134536_2012_11_26_02_36.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:15:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/478/s_n139426_2012_12_04_01_54.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:15:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/943/s_f95870_2012_11_28_05_58.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:15:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/478/s_n139426_2012_12_04_01_54.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:15:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/773/s_127013_1005_2012_11_24_05_02.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:15:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/773/s_127013_1005_2012_11_24_05_02.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:16:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1208111203.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:16:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1208111203.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:16:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/bear.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:16:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/bear.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:16:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/cat7.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:16:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/cat7.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 10:16:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/12/small_12_1209270618.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 10:16:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/12/small_12_1209270618.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1287/s__2012_11_28_06_27.jpeg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1287/s__2012_11_28_06_27.jpeg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/57/s__2012_11_28_05_44.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/57/s__2012_11_28_05_13.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/57/s__2012_11_28_05_13.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/57/s__2012_11_28_05_44.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/57/s__2012_11_28_08_48.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/57/s__2012_11_28_08_48.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:04:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1287/s_f44209_2012_11_19_06_48.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:04:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1287/s_f44209_2012_11_19_06_48.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1287/s_f78259_2012_11_26_08_46.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1287/s_f33130_2012_11_23_05_22.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1287/s_f78259_2012_11_26_08_46.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1287/s_f31011_2012_11_19_06_18.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1287/s_f31011_2012_11_19_06_18.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1287/s_f33130_2012_11_23_05_22.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1287/s_f102258_2012_11_28_12_19.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1285/s_f73665_2012_11_22_11_37.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1285/s_f73665_2012_11_22_11_37.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1287/s_f102258_2012_11_28_12_19.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1287/s_f92942_2012_11_29_03_55.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1287/s_f29822_2012_11_26_06_09.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1287/s_f23672_2012_11_19_12_17.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1287/s_f23669_2012_11_17_08_45.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1287/s_f92942_2012_11_29_03_55.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1285/s_f73663_2012_11_28_03_02.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1285/s_f73663_2012_11_28_03_02.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1285/s_f78815_2012_11_20_03_16.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1285/s_f78815_2012_11_20_03_16.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1285/s_f57266_2012_11_28_02_57.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1287/s_f23672_2012_11_19_12_17.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1285/s_f57266_2012_11_28_02_57.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1285/s_f57267_2012_11_26_07_10.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1285/s_f57321_2012_11_22_12_04.JPG ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/1285/s_f57321_2012_11_22_12_04.JPG ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:24:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adminka/catalogs/asdf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-12-14 11:24:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adminka/catalogs/asdf was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-14 11:27:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: cat_number ~ APPPATH\classes\controller\adminka\catalogs.php [ 69 ]
2012-12-14 11:27:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: cat_number ~ APPPATH\classes\controller\adminka\catalogs.php [ 69 ]
--
#0 C:\xampp\htdocs\obmenka.by\application\classes\controller\adminka\catalogs.php(69): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 69, Array)
#1 [internal function]: Controller_Adminka_Catalogs->action_vipadd()
#2 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Catalogs))
#3 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#6 {main}
2012-12-14 11:28:41 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\v_base.php [ 84 ]
2012-12-14 11:28:41 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\v_base.php [ 84 ]
--
#0 C:\xampp\htdocs\obmenka.by\application\views\v_base.php(84): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 84, Array)
#1 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\obmenka.by\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Adminka_Catalogs))
#6 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#9 {main}
2012-12-14 11:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/12/small_12_1209270618.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1208160445.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1208111203.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/12/small_12_1209270618.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1208160445.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1208111203.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1208111222.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1208111210.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:41:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/bear.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1208111210.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/bear.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:41:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/cat7.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:41:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/cat7.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:41:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1208111222.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 11:41:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/bear.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-12-14 11:41:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/bear.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-14 12:03:16 --- ERROR: ErrorException [ 8 ]: Undefined variable: uri ~ APPPATH\classes\controller\adminka\catalogs.php [ 80 ]
2012-12-14 12:03:16 --- STRACE: ErrorException [ 8 ]: Undefined variable: uri ~ APPPATH\classes\controller\adminka\catalogs.php [ 80 ]
--
#0 C:\xampp\htdocs\obmenka.by\application\classes\controller\adminka\catalogs.php(80): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 80, Array)
#1 [internal function]: Controller_Adminka_Catalogs->action_vipadd()
#2 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Catalogs))
#3 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#6 {main}
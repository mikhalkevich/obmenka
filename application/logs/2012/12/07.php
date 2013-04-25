<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-12-07 00:28:21 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_151859_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-07 00:28:21 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_151859_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-07 00:54:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-07 00:54:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-07 01:31:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-07 01:31:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-07 01:39:45 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_168217_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-07 01:39:45 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_168217_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-07 01:49:47 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_173028_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-07 01:49:47 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_173028_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-07 02:04:56 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-07 02:04:56 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-07 02:12:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: com ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-07 02:12:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: com ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-07 02:12:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-07 02:12:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-07 02:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-07 02:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: robots.txt ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-07 03:21:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-07 03:21:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-07 03:26:45 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-07 03:26:45 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-07 04:08:27 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-07 04:08:27 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-07 04:12:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-07 04:12:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-07 04:27:05 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-12-07 04:27:05 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
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
2012-12-07 04:30:12 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support jpg_resize_350x350_ images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-07 04:30:12 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support jpg_resize_350x350_ images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image/gd.php(480): Kohana_Image_GD->_save_function('jpg_resize_350x...', 100)
#1 /var/www/vhosts/obmenka.by/httpdocs/modules/image/classes/kohana/image.php(625): Kohana_Image_GD->_do_save('/var/www/vhosts...', 100)
#2 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/ajax.php(52): Kohana_Image->save('/var/www/vhosts...')
#3 [internal function]: Controller_Adminka_Ajax->action_index()
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Ajax))
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#8 {main}
2012-12-07 04:51:09 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-07 04:51:09 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-07 05:15:23 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_121033_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-07 05:15:23 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_121033_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-07 05:26:22 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support com_is_image_PhilipsConsumer_DCM3065_51-IMS-global%3Fwid%3D225%26hei%3D225%26%24jpglarge%24 images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-07 05:26:22 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support com_is_image_PhilipsConsumer_DCM3065_51-IMS-global%3Fwid%3D225%26hei%3D225%26%24jpglarge%24 images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-07 05:41:27 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-12-07 05:41:27 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
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
2012-12-07 05:45:48 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_192143_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-07 05:45:48 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_192143_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-07 06:00:45 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support jpg%3F6d89b403431f4c3235ceb899f2084738 images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-07 06:00:45 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support jpg%3F6d89b403431f4c3235ceb899f2084738 images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-07 06:25:15 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-07 06:25:15 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-07 06:42:33 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_189111_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-07 06:42:33 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_189111_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-07 06:46:31 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_27144_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-07 06:46:31 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_27144_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-07 07:17:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-07 07:17:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-07 07:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-07 07:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-07 07:40:56 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
2012-12-07 07:40:56 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/kohana/orm.php [ 1174 ]
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
2012-12-07 07:47:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-07 07:47:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-07 07:52:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adminka/post was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-07 07:52:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adminka/post was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-07 07:52:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL adminka/post was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-12-07 07:52:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL adminka/post was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-07 08:09:29 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_151859_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-07 08:09:29 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_151859_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-07 08:27:53 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_91110_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-07 08:27:53 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_91110_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-07 08:48:54 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support tiff images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-12-07 08:48:54 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support tiff images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-12-07 08:59:22 --- ERROR: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 08:59:22 --- STRACE: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messages_from')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 09:38:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tovars/sell/141.фыва ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-07 09:38:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: tovars/sell/141.фыва ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-07 10:19:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-07 10:19:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-07 11:02:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-07 11:02:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-07 11:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-07 11:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-07 11:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-07 11:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-07 11:53:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-07 11:53:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-07 12:15:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-07 12:15:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-07 12:15:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-07 12:15:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-07 12:35:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mainpricerff ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-12-07 12:35:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: mainpricerff ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-07 12:35:34 --- ERROR: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 12:35:34 --- STRACE: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messages_from')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 12:52:24 --- ERROR: Kohana_Exception [ 0 ]: The user_id property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 12:52:24 --- STRACE: Kohana_Exception [ 0 ]: The user_id property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(24): Kohana_ORM->__get('user_id')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 12:52:59 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 12:52:59 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(24): Kohana_ORM->__get('name')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:01:28 --- ERROR: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:01:28 --- STRACE: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messages_from')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:02:26 --- ERROR: Kohana_Exception [ 0 ]: The id_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:02:26 --- STRACE: Kohana_Exception [ 0 ]: The id_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('id_from')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:03:05 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$messages_from ~ APPPATH/views/main/v_users.php [ 22 ]
2012-12-07 13:03:05 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$messages_from ~ APPPATH/views/main/v_users.php [ 22 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_Core::error_handler('/var/www/vhosts...', Array)
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString('/var/www/vhosts...', Array)
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main_Main))
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:04:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$messages_from ~ APPPATH/views/main/v_users.php [ 22 ]
2012-12-07 13:04:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$messages_from ~ APPPATH/views/main/v_users.php [ 22 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_Core::error_handler('/var/www/vhosts...', Array)
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString('/var/www/vhosts...', Array)
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main_Main))
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:05:23 --- ERROR: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:05:23 --- STRACE: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messages_from')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:05:35 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$messages_from ~ APPPATH/views/main/v_users.php [ 6 ]
2012-12-07 13:05:35 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$messages_from ~ APPPATH/views/main/v_users.php [ 6 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(6): Kohana_Core::error_handler('/var/www/vhosts...', Array)
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString('/var/www/vhosts...', Array)
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main_Main))
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:08:55 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$messages_from ~ APPPATH/views/main/v_users.php [ 22 ]
2012-12-07 13:08:55 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$messages_from ~ APPPATH/views/main/v_users.php [ 22 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_Core::error_handler('/var/www/vhosts...', Array)
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString('/var/www/vhosts...', Array)
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main_Main))
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:09:31 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$messages_from ~ APPPATH/views/main/v_users.php [ 22 ]
2012-12-07 13:09:31 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$messages_from ~ APPPATH/views/main/v_users.php [ 22 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_Core::error_handler('/var/www/vhosts...', Array)
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString('/var/www/vhosts...', Array)
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main_Main))
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:09:43 --- ERROR: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:09:43 --- STRACE: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messages_from')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:10:41 --- ERROR: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:10:41 --- STRACE: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messages_from')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:16:03 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/main/v_users.php [ 22 ]
2012-12-07 13:16:03 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/main/v_users.php [ 22 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_Core::error_handler('/var/www/vhosts...', Array)
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString('/var/www/vhosts...', Array)
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main_Main))
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:16:27 --- ERROR: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:16:27 --- STRACE: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messages_from')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:16:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/main/v_users.php [ 22 ]
2012-12-07 13:16:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/main/v_users.php [ 22 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_Core::error_handler('/var/www/vhosts...', Array)
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString('/var/www/vhosts...', Array)
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main_Main))
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:16:58 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/main/v_users.php [ 22 ]
2012-12-07 13:16:58 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/main/v_users.php [ 22 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_Core::error_handler('/var/www/vhosts...', Array)
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString('/var/www/vhosts...', Array)
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main_Main))
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:18:49 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/main/v_users.php [ 22 ]
2012-12-07 13:18:49 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/main/v_users.php [ 22 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_Core::error_handler('/var/www/vhosts...', Array)
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString('/var/www/vhosts...', Array)
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Main_Main))
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:19:03 --- ERROR: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:19:03 --- STRACE: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messages_from')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:21:15 --- ERROR: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:21:15 --- STRACE: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messages_from')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:21:40 --- ERROR: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:21:40 --- STRACE: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messages_from')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:22:43 --- ERROR: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:22:43 --- STRACE: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messages_from')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:24:11 --- ERROR: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:24:11 --- STRACE: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messages_from')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:25:02 --- ERROR: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:25:02 --- STRACE: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messages_from')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:25:09 --- ERROR: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:25:09 --- STRACE: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messages_from')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:25:13 --- ERROR: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:25:13 --- STRACE: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messages_from')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:25:41 --- ERROR: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:25:41 --- STRACE: Kohana_Exception [ 0 ]: The messages_from property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messages_from')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:26:42 --- ERROR: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:26:42 --- STRACE: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messagesrfrom')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:27:14 --- ERROR: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:27:14 --- STRACE: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messagesrfrom')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:27:42 --- ERROR: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:27:42 --- STRACE: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messagesrfrom')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:29:05 --- ERROR: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:29:05 --- STRACE: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messagesrfrom')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:29:47 --- ERROR: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:29:47 --- STRACE: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messagesrfrom')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:30:07 --- ERROR: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:30:07 --- STRACE: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messagesrfrom')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:30:34 --- ERROR: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:30:34 --- STRACE: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messagesrfrom')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:31:09 --- ERROR: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:31:09 --- STRACE: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messagesrfrom')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:33:57 --- ERROR: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:33:57 --- STRACE: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messagesrfrom')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:34:12 --- ERROR: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:34:12 --- STRACE: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messagesrfrom')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:34:30 --- ERROR: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:34:30 --- STRACE: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messagesrfrom')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-12-07 13:35:11 --- ERROR: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
2012-12-07 13:35:11 --- STRACE: Kohana_Exception [ 0 ]: The messagesrfrom property does not exist in the Model_Usersimage class ~ MODPATH/orm/classes/kohana/orm.php [ 612 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/main/v_users.php(22): Kohana_ORM->__get('messagesrfrom')
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(85): Kohana_View->__toString()
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/vhosts...', Array)
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Main_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
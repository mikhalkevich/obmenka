<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-20 00:10:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-20 00:10:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-20 00:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-20 00:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-20 00:43:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-20 00:43:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-20 04:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-20 04:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-20 04:48:07 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support com_is_image_PhilipsConsumer_LFH0635_00-IMS-global%3Fwid%3D430%26hei%3D430%26%24jpglarge%24 images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-11-20 04:48:07 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support com_is_image_PhilipsConsumer_LFH0635_00-IMS-global%3Fwid%3D430%26hei%3D430%26%24jpglarge%24 images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-11-20 05:17:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: catalog ~ APPPATH/views/widget/v_left_menu_obmen.php [ 7 ]
2012-11-20 05:17:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: catalog ~ APPPATH/views/widget/v_left_menu_obmen.php [ 7 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/widget/v_left_menu_obmen.php(7): Kohana_Core::error_handler('/var/www/vhosts...', Array)
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Widgets_Menuleft))
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/books/main.php(9): Kohana_Request->execute()
#9 [internal function]: Controller_Books_Main->before(Object(Controller_Books_Main))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#13 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#14 {main}
2012-11-20 10:18:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-20 10:18:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-20 10:18:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-20 10:18:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-20 10:18:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-20 10:18:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-20 11:55:31 --- ERROR: ErrorException [ 2 ]: file_get_contents() [function.file-get-contents]: SSL: Connection reset by peer ~ APPPATH/classes/controller/adminka/ajax.php [ 15 ]
2012-11-20 11:55:31 --- STRACE: ErrorException [ 2 ]: file_get_contents() [function.file-get-contents]: SSL: Connection reset by peer ~ APPPATH/classes/controller/adminka/ajax.php [ 15 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/ajax.php(15): Kohana_Core::error_handler('https://www.goo...')
#1 [internal function]: Controller_Adminka_Ajax->action_index()
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Ajax))
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-20 12:14:54 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_173038_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-11-20 12:14:54 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_173038_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-11-20 15:26:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-20 15:26:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-20 15:37:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/indicator.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-20 15:37:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/indicator.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-20 15:39:54 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: scripts ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-11-20 15:39:54 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: scripts ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/widgets/menuleftsell.php(10): Kohana_View->__get('scripts')
#1 [internal function]: Controller_Widgets_Menuleftsell->action_sell()
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Widgets_Menuleftsell))
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/tovars/sell.php(9): Kohana_Request->execute()
#6 [internal function]: Controller_Tovars_Sell->before()
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Tovars_Sell))
#8 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#11 {main}
2012-11-20 15:54:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-20 15:54:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
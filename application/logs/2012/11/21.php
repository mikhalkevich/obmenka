<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-21 03:33:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 03:33:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 03:51:09 --- ERROR: ErrorException [ 2 ]: file_get_contents(https://www.google.by/search?q=Геймпад+Dialog+Master+&lt;GP-M24+Red&gt;+(Vibration.+12кн.+8+поз.перекл.+2мини-джойстика.+USB)&amp;hl=ru&amp;client=firefox&amp;rls=org.mozilla:ru:official&amp;prmd=imvns&amp;source=lnms&amp;tbm=isch&amp;sa=X&amp;ei=wDKlUJvPPIek4gT_koDIDg&amp;ved=0CAcQ_AUoAQ&amp;biw=1366&amp;bih=664#hl=ru&amp;client=firefox&amp;rls=org.mozilla:ru%3Aofficial&amp;tbm=isch&amp;sa=1&amp;q=ext.+DVD%C2%B1RW+Samsung+%28SE-208AB%2FTSBS%29+USB+2.0.+RTL.+Black&amp;oq=ext.+DVD%C2%B1RW+Samsung+%28SE-208AB%2FTSBS%29+USB+2.0.+RTL.+Black&amp;gs_l=img.3...487592.487592.0.488601.1.1.0.0.0.0.180.180.0j1.1.0...0.0...1c.1.lKSFYnBJ_go&amp;pbx=1&amp;bav=on.2,or.r_gc.r_pw.r_cp.r_qf.&amp;fp=8098a21b783fe04&amp;bpcl=38625945&amp;biw=1366&amp;bih=334) [function.file-get-contents]: failed to open stream: Connection timed out ~ APPPATH/classes/controller/adminka/ajax.php [ 15 ]
2012-11-21 03:51:09 --- STRACE: ErrorException [ 2 ]: file_get_contents(https://www.google.by/search?q=Геймпад+Dialog+Master+&lt;GP-M24+Red&gt;+(Vibration.+12кн.+8+поз.перекл.+2мини-джойстика.+USB)&amp;hl=ru&amp;client=firefox&amp;rls=org.mozilla:ru:official&amp;prmd=imvns&amp;source=lnms&amp;tbm=isch&amp;sa=X&amp;ei=wDKlUJvPPIek4gT_koDIDg&amp;ved=0CAcQ_AUoAQ&amp;biw=1366&amp;bih=664#hl=ru&amp;client=firefox&amp;rls=org.mozilla:ru%3Aofficial&amp;tbm=isch&amp;sa=1&amp;q=ext.+DVD%C2%B1RW+Samsung+%28SE-208AB%2FTSBS%29+USB+2.0.+RTL.+Black&amp;oq=ext.+DVD%C2%B1RW+Samsung+%28SE-208AB%2FTSBS%29+USB+2.0.+RTL.+Black&amp;gs_l=img.3...487592.487592.0.488601.1.1.0.0.0.0.180.180.0j1.1.0...0.0...1c.1.lKSFYnBJ_go&amp;pbx=1&amp;bav=on.2,or.r_gc.r_pw.r_cp.r_qf.&amp;fp=8098a21b783fe04&amp;bpcl=38625945&amp;biw=1366&amp;bih=334) [function.file-get-contents]: failed to open stream: Connection timed out ~ APPPATH/classes/controller/adminka/ajax.php [ 15 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/ajax.php(15): Kohana_Core::error_handler('https://www.goo...')
#1 [internal function]: Controller_Adminka_Ajax->action_index()
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Ajax))
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-21 05:13:08 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_192143_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-11-21 05:13:08 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_192143_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-11-21 07:17:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 07:17:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 08:24:35 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-11-21 08:24:35 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support pic images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
2012-11-21 08:54:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 08:54:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 08:57:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 08:57:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 09:01:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 09:01:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 09:03:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 09:03:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 09:07:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 09:07:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 09:57:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/widget/v_left_menu_sell.php [ 66 ]
2012-11-21 09:57:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/widget/v_left_menu_sell.php [ 66 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/widget/v_left_menu_sell.php(66): Kohana_Core::error_handler('/var/www/vhosts...', Array)
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Widgets_Menuleftsell))
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/tovars/sell.php(9): Kohana_Request->execute()
#9 [internal function]: Controller_Tovars_Sell->before(Object(Controller_Tovars_Sell))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#13 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#14 {main}
2012-11-21 10:14:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/controller/widgets/menuleftsell.php [ 14 ]
2012-11-21 10:14:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/controller/widgets/menuleftsell.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_widg...')
#1 {main}
2012-11-21 10:14:55 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/widgets/menuleftsell.php [ 14 ]
2012-11-21 10:14:55 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/controller/widgets/menuleftsell.php [ 14 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/widgets/menuleftsell.php(14): Kohana_Core::error_handler()
#1 [internal function]: Controller_Widgets_Menuleftsell->action_sell(Object(Controller_Widgets_Menuleftsell))
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/tovars/sell.php(9): Kohana_Request->execute()
#6 [internal function]: Controller_Tovars_Sell->before(Object(Controller_Tovars_Sell))
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Request))
#8 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#11 {main}
2012-11-21 10:22:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/indicator.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 10:22:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/indicator.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 10:25:20 --- ERROR: ErrorException [ 8 ]: Undefined index:  search ~ APPPATH/classes/controller/widgets/menuleftsell.php [ 18 ]
2012-11-21 10:25:20 --- STRACE: ErrorException [ 8 ]: Undefined index:  search ~ APPPATH/classes/controller/widgets/menuleftsell.php [ 18 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/widgets/menuleftsell.php(18): Kohana_Core::error_handler()
#1 [internal function]: Controller_Widgets_Menuleftsell->action_sell(Object(Controller_Widgets_Menuleftsell))
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/tovars/sell.php(9): Kohana_Request->execute()
#6 [internal function]: Controller_Tovars_Sell->before(Object(Controller_Tovars_Sell))
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Request))
#8 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#11 {main}
2012-11-21 10:25:38 --- ERROR: ErrorException [ 8 ]: Undefined index:  search ~ APPPATH/classes/controller/widgets/menuleftsell.php [ 18 ]
2012-11-21 10:25:38 --- STRACE: ErrorException [ 8 ]: Undefined index:  search ~ APPPATH/classes/controller/widgets/menuleftsell.php [ 18 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/widgets/menuleftsell.php(18): Kohana_Core::error_handler()
#1 [internal function]: Controller_Widgets_Menuleftsell->action_sell(Object(Controller_Widgets_Menuleftsell))
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/tovars/sell.php(9): Kohana_Request->execute()
#6 [internal function]: Controller_Tovars_Sell->before(Object(Controller_Tovars_Sell))
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Request))
#8 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#10 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#11 {main}
2012-11-21 10:31:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/indicator.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 10:31:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/indicator.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 10:50:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/indicator.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 10:50:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/css/indicator.gif ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 11:12:19 --- ERROR: ErrorException [ 1 ]: Call to a member function where() on a non-object ~ APPPATH/classes/controller/widgets/menuleftsell.php [ 19 ]
2012-11-21 11:12:19 --- STRACE: ErrorException [ 1 ]: Call to a member function where() on a non-object ~ APPPATH/classes/controller/widgets/menuleftsell.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-21 12:01:11 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/tovars/v_tovars_sell.php [ 1 ]
2012-11-21 12:01:11 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/tovars/v_tovars_sell.php [ 1 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/tovars/v_tovars_sell.php(1): Kohana_Core::error_handler('/var/www/vhosts...', Array)
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
2012-11-21 12:02:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: catalog ~ APPPATH/classes/controller/tovars/sell.php [ 29 ]
2012-11-21 12:02:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: catalog ~ APPPATH/classes/controller/tovars/sell.php [ 29 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/tovars/sell.php(29): Kohana_Core::error_handler()
#1 [internal function]: Controller_Tovars_Sell->action_index(Object(Controller_Tovars_Sell))
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-21 12:03:56 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/tovars/v_tovars_sell.php [ 1 ]
2012-11-21 12:03:56 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/tovars/v_tovars_sell.php [ 1 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/tovars/v_tovars_sell.php(1): Kohana_Core::error_handler('/var/www/vhosts...', Array)
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
2012-11-21 12:10:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting '(' ~ APPPATH/views/tovars/v_tovars_sell.php [ 3 ]
2012-11-21 12:10:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting '(' ~ APPPATH/views/tovars/v_tovars_sell.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/var/www/vhosts...', Array)
#1 {main}
2012-11-21 12:13:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.jqplot.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 12:13:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.jqplot.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 12:13:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.jqplot.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 12:13:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/js/jquery.jqplot.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 12:16:48 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/v_base.php [ 81 ]
2012-11-21 12:16:48 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/v_base.php [ 81 ]
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
2012-11-21 12:28:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: friends/cabinet ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 12:28:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: friends/cabinet ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 12:45:30 --- ERROR: ErrorException [ 8 ]: Undefined offset:  1 ~ APPPATH/classes/controller/adminka/price/mainprice.php [ 43 ]
2012-11-21 12:45:30 --- STRACE: ErrorException [ 8 ]: Undefined offset:  1 ~ APPPATH/classes/controller/adminka/price/mainprice.php [ 43 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/price/mainprice.php(43): Kohana_Core::error_handler()
#1 [internal function]: Controller_Adminka_Price_Mainprice->action_index(Object(Controller_Adminka_Price_Mainprice))
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-21 12:47:24 --- ERROR: ErrorException [ 8 ]: Undefined offset:  1 ~ APPPATH/classes/controller/adminka/price/mainprice.php [ 43 ]
2012-11-21 12:47:24 --- STRACE: ErrorException [ 8 ]: Undefined offset:  1 ~ APPPATH/classes/controller/adminka/price/mainprice.php [ 43 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/price/mainprice.php(43): Kohana_Core::error_handler()
#1 [internal function]: Controller_Adminka_Price_Mainprice->action_index(Object(Controller_Adminka_Price_Mainprice))
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-21 12:48:42 --- ERROR: ErrorException [ 8 ]: Undefined offset:  1 ~ APPPATH/classes/controller/adminka/price/mainprice.php [ 43 ]
2012-11-21 12:48:42 --- STRACE: ErrorException [ 8 ]: Undefined offset:  1 ~ APPPATH/classes/controller/adminka/price/mainprice.php [ 43 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/price/mainprice.php(43): Kohana_Core::error_handler()
#1 [internal function]: Controller_Adminka_Price_Mainprice->action_index(Object(Controller_Adminka_Price_Mainprice))
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-21 12:58:07 --- ERROR: ErrorException [ 8 ]: Undefined offset:  1 ~ APPPATH/classes/controller/adminka/price/mainprice.php [ 43 ]
2012-11-21 12:58:07 --- STRACE: ErrorException [ 8 ]: Undefined offset:  1 ~ APPPATH/classes/controller/adminka/price/mainprice.php [ 43 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/price/mainprice.php(43): Kohana_Core::error_handler()
#1 [internal function]: Controller_Adminka_Price_Mainprice->action_index(Object(Controller_Adminka_Price_Mainprice))
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-21 13:04:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 13:04:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 13:04:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 13:04:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 13:04:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 13:04:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: post ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 13:06:58 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/v_center.php [ 38 ]
2012-11-21 13:06:58 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/v_center.php [ 38 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_center.php(38): Kohana_Core::error_handler('/var/www/vhosts...', Array)
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(82): Kohana_View->__toString('/var/www/vhosts...', Array)
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after(Object(Controller_Index))
#9 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#10 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#12 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#13 {main}
2012-11-21 13:33:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 13:33:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 13:34:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 13:34:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:14:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:14:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:15:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:15:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:15:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:15:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:15:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:15:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:15:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:15:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:16:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:16:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:17:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:17:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:17:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:17:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:17:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:17:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:18:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:18:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:18:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:18:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:18:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:18:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:18:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:18:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:19:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:19:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:20:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:20:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:20:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:20:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:20:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:20:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:21:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:21:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:22:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:22:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:24:01 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:24:01 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:24:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:24:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:24:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:24:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:25:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:25:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:25:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:25:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:26:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:26:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:26:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:26:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:26:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:26:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:27:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:27:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:27:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:27:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:28:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:28:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:28:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:28:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:28:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:28:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:29:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:29:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:29:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:29:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:30:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:30:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:30:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:30:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:30:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:30:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:30:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:30:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:30:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:30:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:31:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-21 14:31:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-21 14:49:34 --- ERROR: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_173028_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
2012-11-21 14:49:34 --- STRACE: Kohana_Exception [ 0 ]: Installed GD does not support xn--p1ai_descr_173028_pict images ~ MODPATH/image/classes/kohana/image/gd.php [ 561 ]
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
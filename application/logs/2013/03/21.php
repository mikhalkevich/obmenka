<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-03-21 15:09:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/12/small_12_1209270618.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-21 15:09:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1208111203.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-21 15:09:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/12/small_12_1209270618.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-21 15:09:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1208111203.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-21 15:09:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1208111210.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-21 15:09:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1208111210.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-21 15:09:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/877/s_f81248_2012_11_21_05_12.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-03-21 15:09:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/877/s_f81248_2012_11_21_05_12.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-03-21 15:09:32 --- ERROR: ErrorException [ 8 ]: Undefined index: cat_id ~ MODPATH\orm\classes\kohana\orm.php [ 564 ]
2013-03-21 15:09:32 --- STRACE: ErrorException [ 8 ]: Undefined index: cat_id ~ MODPATH\orm\classes\kohana\orm.php [ 564 ]
--
#0 C:\xampp\htdocs\obmenka.by\modules\orm\classes\kohana\orm.php(564): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 564, Array)
#1 C:\xampp\htdocs\obmenka.by\application\views\thema\v_allthema.php(12): Kohana_ORM->__get('themas')
#2 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\obmenka.by\application\views\v_base.php(73): Kohana_View->__toString()
#6 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\obmenka.by\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#9 [internal function]: Kohana_Controller_Template->after()
#10 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Thema_Blog))
#11 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#14 {main}
2013-03-21 15:10:21 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\thema\v_allthema.php [ 12 ]
2013-03-21 15:10:21 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\thema\v_allthema.php [ 12 ]
--
#0 C:\xampp\htdocs\obmenka.by\application\views\thema\v_allthema.php(12): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 12, Array)
#1 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\obmenka.by\application\views\v_base.php(73): Kohana_View->__toString()
#5 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\obmenka.by\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Thema_Blog))
#10 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#13 {main}
2013-03-21 15:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL account/themas was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2013-03-21 15:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL account/themas was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#3 {main}
2013-03-21 16:04:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH\views\thema\v_user_themas.php [ 100 ]
2013-03-21 16:04:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH\views\thema\v_user_themas.php [ 100 ]
--
#0 C:\xampp\htdocs\obmenka.by\application\views\thema\v_user_themas.php(100): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 100, Array)
#1 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\obmenka.by\application\views\v_base.php(73): Kohana_View->__toString()
#5 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\obmenka.by\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Thema_Userthema))
#10 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#13 {main}
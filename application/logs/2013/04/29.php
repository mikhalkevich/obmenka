<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-04-29 17:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1364372133.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-29 17:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1364372133.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-29 17:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/877/s_f81248_2012_11_21_05_12.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-29 17:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/877/s_f81248_2012_11_21_05_12.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-29 17:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/70/small_70_1364572959.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-29 17:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/70/small_70_1364572959.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-29 17:43:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1364366825.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-29 17:43:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1364366825.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-29 17:43:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: products ~ APPPATH\views\tovars\v_tovars.php [ 56 ]
2013-04-29 17:43:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: products ~ APPPATH\views\tovars\v_tovars.php [ 56 ]
--
#0 C:\xampp\htdocs\obmenka.by\application\views\tovars\v_tovars.php(56): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 56, Array)
#1 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\obmenka.by\application\views\v_base.php(100): Kohana_View->__toString()
#5 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\obmenka.by\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tovars_Need))
#10 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-29 17:47:54 --- ERROR: Kohana_Exception [ 0 ]: The products_pic_small property does not exist in the Model_Hotelkinew class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-04-29 17:47:54 --- STRACE: Kohana_Exception [ 0 ]: The products_pic_small property does not exist in the Model_Hotelkinew class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\xampp\htdocs\obmenka.by\application\views\tovars\v_need.php(58): Kohana_ORM->__get('products_pic_sm...')
#1 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\obmenka.by\application\views\v_base.php(100): Kohana_View->__toString()
#5 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\obmenka.by\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tovars_Need))
#10 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-29 17:48:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH\views\tovars\v_need.php [ 7 ]
2013-04-29 17:48:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: pagination ~ APPPATH\views\tovars\v_need.php [ 7 ]
--
#0 C:\xampp\htdocs\obmenka.by\application\views\tovars\v_need.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 7, Array)
#1 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\obmenka.by\application\views\v_base.php(100): Kohana_View->__toString()
#5 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\obmenka.by\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tovars_Need))
#10 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#13 {main}
2013-04-29 17:53:03 --- ERROR: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\controller\tovars\need.php [ 30 ]
2013-04-29 17:53:03 --- STRACE: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\controller\tovars\need.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-04-29 18:10:42 --- ERROR: Kohana_Exception [ 0 ]: The fio property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2013-04-29 18:10:42 --- STRACE: Kohana_Exception [ 0 ]: The fio property does not exist in the Model_User class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\xampp\htdocs\obmenka.by\application\views\tovars\v_need.php(15): Kohana_ORM->__get('fio')
#1 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\obmenka.by\application\views\v_base.php(100): Kohana_View->__toString()
#5 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\obmenka.by\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\obmenka.by\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Tovars_Need))
#10 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#13 {main}
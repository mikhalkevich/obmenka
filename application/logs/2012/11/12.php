<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-12 10:45:37 --- ERROR: ErrorException [ 2 ]: set_time_limit() [function.set-time-limit]: Cannot set time limit in safe mode ~ APPPATH/classes/controller/adminka/price/mainprice.php [ 18 ]
2012-11-12 10:45:37 --- STRACE: ErrorException [ 2 ]: set_time_limit() [function.set-time-limit]: Cannot set time limit in safe mode ~ APPPATH/classes/controller/adminka/price/mainprice.php [ 18 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/price/mainprice.php(18): Kohana_Core::error_handler(0)
#1 [internal function]: Controller_Adminka_Price_Mainprice->action_index()
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Price_Mainprice))
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-12 10:46:48 --- ERROR: ErrorException [ 2 ]: set_time_limit() [function.set-time-limit]: Cannot set time limit in safe mode ~ APPPATH/classes/controller/adminka/price/mainprice.php [ 18 ]
2012-11-12 10:46:48 --- STRACE: ErrorException [ 2 ]: set_time_limit() [function.set-time-limit]: Cannot set time limit in safe mode ~ APPPATH/classes/controller/adminka/price/mainprice.php [ 18 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/price/mainprice.php(18): Kohana_Core::error_handler(0)
#1 [internal function]: Controller_Adminka_Price_Mainprice->action_index()
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Price_Mainprice))
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-12 10:47:41 --- ERROR: ErrorException [ 2 ]: move_uploaded_file(/var/www/vhosts/obmenka.by/httpdocs/media/uploads/price/price.csv) [function.move-uploaded-file]: failed to open stream: Permission denied ~ APPPATH/classes/controller/adminka/price/mainprice.php [ 27 ]
2012-11-12 10:47:41 --- STRACE: ErrorException [ 2 ]: move_uploaded_file(/var/www/vhosts/obmenka.by/httpdocs/media/uploads/price/price.csv) [function.move-uploaded-file]: failed to open stream: Permission denied ~ APPPATH/classes/controller/adminka/price/mainprice.php [ 27 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/classes/controller/adminka/price/mainprice.php(27): Kohana_Core::error_handler('/tmp/php4M0eKd', '/var/www/vhosts...')
#1 [internal function]: Controller_Adminka_Price_Mainprice->action_index()
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Adminka_Price_Mainprice))
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#6 {main}
2012-11-12 11:03:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-12 11:03:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-12 11:06:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-12 11:06:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-12 12:50:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-12 12:50:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-12 13:13:29 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/v_base.php [ 81 ]
2012-11-12 13:13:29 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/v_base.php [ 81 ]
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
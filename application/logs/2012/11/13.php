<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-11-13 00:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-13 00:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-13 00:38:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-13 00:38:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-13 08:26:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-13 08:26:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-13 11:08:09 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/v_base.php [ 81 ]
2012-11-13 11:08:09 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/v_base.php [ 81 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/application/views/v_base.php(81): Kohana_Core::error_handler('/var/www/vhosts...', Array)
#1 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(61): include('/var/www/vhosts...')
#2 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Adminka_Findpicture))
#5 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/vhosts/obmenka.by/httpdocs/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#9 {main}
2012-11-13 11:21:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-13 11:21:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-13 11:56:02 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Tovar::count() ~ APPPATH/classes/controller/adminka/findpicture.php [ 12 ]
2012-11-13 11:56:02 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Tovar::count() ~ APPPATH/classes/controller/adminka/findpicture.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-13 12:46:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loadpictureajax ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-13 12:46:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loadpictureajax ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-13 12:46:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loadpictureajax ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-13 12:46:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loadpictureajax ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-13 12:50:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loadpictureajax ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-13 12:50:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loadpictureajax ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-13 12:50:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loadpictureajax ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-13 12:50:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loadpictureajax ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-13 12:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loadpictureajax ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-13 12:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loadpictureajax ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-13 12:51:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loadpictureajax ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-11-13 12:51:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loadpictureajax ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/vhosts/obmenka.by/httpdocs/index.php(109): Kohana_Request->execute()
#1 {main}
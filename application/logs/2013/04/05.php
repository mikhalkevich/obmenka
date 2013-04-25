<?php defined('SYSPATH') or die('No direct script access.'); ?>

2013-04-05 11:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/877/s_f81248_2012_11_21_05_12.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1364366825.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/877/s_f81248_2012_11_21_05_12.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 11:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1364372133.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:45:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/70/small_70_1364572959.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1364372133.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 11:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/70/small_70_1364572959.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 11:45:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1364366825.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 11:45:34 --- ERROR: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 106 ]
2013-04-05 11:45:34 --- STRACE: Kohana_Exception [ 0 ]: Not an image or invalid image:  ~ MODPATH\image\classes\kohana\image.php [ 106 ]
--
#0 C:\xampp\htdocs\obmenka.by\modules\image\classes\kohana\image\gd.php(90): Kohana_Image->__construct('media/uploads/c...')
#1 C:\xampp\htdocs\obmenka.by\modules\image\classes\kohana\image.php(53): Kohana_Image_GD->__construct('media/uploads/c...')
#2 C:\xampp\htdocs\obmenka.by\application\classes\controller\thema\userthema.php(78): Kohana_Image::factory('media/uploads/c...', NULL)
#3 [internal function]: Controller_Thema_Userthema->action_index()
#4 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Thema_Userthema))
#5 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\obmenka.by\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#8 {main}
2013-04-05 11:46:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_2081365151562.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:46:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_2081365151562.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 11:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1364372133.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/70/small_70_1364572959.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1364372133.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 11:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/70/small_70_1364572959.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 11:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/877/s_f81248_2012_11_21_05_12.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/eshop/877/s_f81248_2012_11_21_05_12.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 11:56:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1364366825.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:56:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/tovars/2/small_2_1364366825.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 11:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_2081365151562.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_2081365151562.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 11:56:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_2081365151562.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:56:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_2081365151562.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 11:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_871365152225.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_2331365152228.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_871365152225.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 11:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_2331365152228.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 11:57:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_2081365151562.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:57:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_2081365151562.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 11:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_871365152225.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_871365152225.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 11:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_2081365151562.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_2081365151562.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 11:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_1364649285.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_1364649285.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 11:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_1364652986.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_1364652986.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 11:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_1364805904.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_1364805904.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 11:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_2331365152228.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_2331365152228.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 11:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_1364653069.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_1364653069.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 11:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_1364652504.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_1364652504.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 11:57:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_1364652141.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:57:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_1364652141.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 11:58:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_2331365152228.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 11:58:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_2331365152228.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 12:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/10/small_2_3531365099472.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 12:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/10/small_2_3531365099472.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 12:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/9/small_2_34121365098857.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 12:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/9/small_2_34121365098857.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 12:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/9/small_2_8281365098857.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 12:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/9/small_2_8281365098857.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 12:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/10/small_2_2161365099471.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 12:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/10/small_2_2161365099471.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 12:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/9/small_2_2521365098857.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 12:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/9/small_2_2521365098857.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 12:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/8/small_2_5201365099218.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 12:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/8/small_2_5201365099218.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 12:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/9/small_2_1611365098857.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 12:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/8/small_2_32261365099213.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 12:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/9/small_2_1611365098857.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 12:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/8/small_2_32261365099213.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 12:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/10/small_2_17351365099469.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 12:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/3/small_2_1364805904.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 12:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/3/small_2_1364805904.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 12:00:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/10/small_2_10341365099468.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 12:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/10/small_2_17351365099469.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 12:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_1364653069.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 12:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/3/small_2_1364649285.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 12:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_1364653069.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 12:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_1364652986.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 12:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_1364652986.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 12:00:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/10/small_2_10341365099468.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 12:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_1364652141.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 12:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_1364652141.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 12:00:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_1364652504.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2013-04-05 12:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/2/small_2_1364652504.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
2013-04-05 12:00:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: media/uploads/content/3/small_2_1364649285.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\obmenka.by\index.php(109): Kohana_Request->execute()
#1 {main}
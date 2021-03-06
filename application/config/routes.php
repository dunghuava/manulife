<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] 	= 'web/index';
$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= FALSE;

$route['admin']							= 'admin/category';
$route['admin/login'] 					= 'admin/account/login';
$route['admin/logout'] 					= 'admin/account/logout';

$route['staff']							= 'staff/customer';
$route['staff/login'] 					= 'staff/account/login';
$route['staff/logout'] 					= 'staff/account/logout';

$route['crm']							= 'crm/customer';
$route['crm/login'] 					= 'crm/account/login';
$route['crm/logout'] 					= 'crm/account/logout';

$route['thuong-hieu.html']		        = 'web/list_brand';
$route['thuong-hieu-(:any).html']		= 'web/list_brand/$1';
$route['(:any).html']					= 'web/route/$1';
$route['bai-viet/(:any).html']			= 'web/tintuc_detail/$1';
$route['dich-vu/(:any).html']		    = 'web/dichvu_detail/$1';
$route['san-pham/(:any).html']		    = 'web/product_detail/$1';

$route['dang-nhap']                     = 'user/account/page_user_login'; 
$route['quen-mat-khau']                 = 'user/account/page_user_reset'; 
$route['dang-ky']                       = 'user/account/page_user_register';

$route['thong-tin']                     = 'user/account/infoUser';
$route['user']							= 'user/post';
$route['tim-kiem']                      = 'web/page_search';





<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home/index";
$route['404_override'] = '';

$route['home'] = "home";

$route['user'] = "user";
$route['login'] = "user/login";
$route['register'] = "user/register";
$route['logout'] = "user/logout";

$route['aboutus'] = "about";

$route['gallery/(:num)'] = "gallery/index/$1";

$route['chi-tiet/(:any)'] = "news/detail_t/$1";

$route['du-lich'] = "news/index/0";
$route['thu-cong'] = "news/index/1";
$route['giao-duc'] = "news/index/2";

$route['du-lich/(:any)'] = "news/index_t/0/$1";
$route['thu-cong/(:any)'] = "news/index_t/1/$1";
$route['giao-duc/(:any)'] = "news/index_t/2/$1";

$route['gioi-thieu-chung'] = "about/index/4";
$route['cac-thuong-hieu'] = "about/index/7";
$route['du-an-moi'] = "about/index/8";

$route['iin-art-vietnam'] = "about/index/9";
$route['iin-edu-vietnam'] = "about/index/10";
$route['iin-tour-vietnam'] = "contact";

// $route['list-support'] = "admin/support";
// $route['list-booking'] = "admin/booking";

$route['list-category/(:num)'] = "admin/category/index/$1";
$route['add-category/(:num)'] = "admin/category/add/$1";
$route['edit-category/(:num)/(:num)'] = "admin/category/edit/$1/$2";

$route['list-news/(:num)'] = "admin/news/index/$1";
$route['add-news/(:num)'] = "admin/news/add/$1";
$route['edit-news/(:num)/(:num)'] = "admin/news/edit/$1/$2";

// $route['list-gallery'] = "admin/gallery/index";
// $route['add-gallery'] = "admin/gallery/add";

// $route['setting'] = "admin/setting";
// $route['edit-setting/(:num)'] = "admin/setting/edit/$1";

$route['header'] = "header";

/* End of file routes.php */
/* Location: ./application/config/routes.php */
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
$route['default_controller'] = 'Skyrim';
$route['history'] = 'Skyrim/history';
$route['home'] = 'Skyrim/index';
$route['forum/(:any)'] = 'Skyrim/forum/$1';
$route['forum'] = 'Skyrim/forum';
$route['blog'] = 'Skyrim/blog';
$route['blog/(:any)'] = 'Skyrim/blog/$1';
$route['registration'] = 'Register';
$route['validation'] = 'Register/validation';
$route['regsuccess'] = 'Register/regsuccess';
$route['login'] = 'Skyrim/login';
$route['logout'] = 'Skyrim/logout';
$route['addcomment'] = 'Skyrim/addcomment';
$route['addBlogcomment'] = 'Skyrim/addBlogcomment';
$route['addforum'] = 'Skyrim/addforum';
$route['like/(:num)'] = 'Skyrim/like/$1';
$route['forumsingle/(:any)'] = 'Skyrim/forumsingle/$1';
$route['blogsingle/(:num)'] = 'Skyrim/blogsingle/$1';

//Admin
$route['admintool'] = 'admintool/login/admin_login';
$route['adminhome'] = 'admintool/admin/index';
$route['adminforum'] = 'admintool/admin/forum';
$route['addadminforum'] = 'admintool/admin/addforum';
$route['deleteforum/(:num)'] = 'admintool/admin/deleteforum/$1';
$route['adminfs/(:num)'] = 'admintool/admin/forumsingle/$1';
$route['deleteForumComment/(:num)/(:num)'] = 'admintool/admin/deleteForumComment/$1/$2';

$route['users'] = 'admintool/admin/users';
$route['deleteuser/(:num)'] = 'admintool/admin/deleteuser/$1';

$route['adminblog'] = 'admintool/admin/blog';
$route['addadminblog'] = 'admintool/admin/addblog';
$route['adminbs/(:num)'] = 'admintool/admin/blogsingle/$1';


$route['deleteBlogComment/(:num)'] = 'admintool/admin/deleteBlogComment/$1';
$route['deleteblog/(:num)'] = 'admintool/admin/delete_blog/$1';



$route['adminlogout'] = 'admintool/Login/logout';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

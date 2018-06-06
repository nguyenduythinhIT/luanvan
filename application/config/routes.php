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
$route['default_controller'] = 'Trangchu/view';
$route['Trangchu']='Trangchu/view';
$route['Dangnhap']='Dangnhap/view';
$route['Danhnhap/login']='Dangnhap/login';
$route['Danhnhap/logout']='Dangnhap/logout';
$route['Dangki/thanhcong']='Dangki/success';
$route['Dangki/buoc1']='Dangki/view1';
$route['Dangki/buoc2']='Dangki/view2';
$route['Dangki/buoc3']='Dangki/view3';
$route['Dangki/vertify']='Dangki/vertify';
$route['Dangki/thanhcong']='Dangki/success';
$route['trangcanhan']='Thongtincanhan/view';
$route['user/(:any)/update']='Thongtincanhan/update/$1';
$route['trangcanhan/(:any)']='Thongtincanhan/view/$1';
$route['admin']='Admin_home/view';
$route['admin/trangchu']='Admin_home/view';
$route['admin/menu']='Admin_menu/view';
$route['admin/menu/update']='Admin_menu/update';
$route['admin/menu/insert']='Admin_menu/insert';
$route['admin/menu/delete/(:any)']='Admin_menu/delete/$1';
$route['admin/product_type']='Admin_danhmuc/view';
$route['admin/category']='Admin_category/view';
$route['admin/category/insert']='Admin_category/insert';
$route['admin/category/(:any)']='Admin_category/view2/$1';
$route['admin/category/delete/(:any)']='Admin_category/delete/$1';
$route['admin/category/update/(:any)']='Admin_category/update/$1';
$route['admin/slider']='Admin_slider/view';
$route['admin/slider/insert']='Admin_slider/insert';
$route['admin/slider/(:any)']='Admin_slider/view2/$1';
$route['admin/slider/update/(:any)']='Admin_slider/update/$1';
$route['admin/slider/delete/(:any)']='Admin_slider/delete/$1';
$route['admin/sanpham']='Admin_sanpham/view';
$route['admin/thanhvien']='Admin_thanhvien/view';
$route['admin/thanhvien/userupdate/(:any)']='Admin_thanhvien/update/$1';
$route['admin/thanhvien/(:any)']='Admin_thanhvien/viewmember/$1';
$route['admin/thanhvien/delete/(:any)']='Admin_thanhvien/delete/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

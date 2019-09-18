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
$route['default_controller'] = 'C_dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// controller C_auth

$route['login'] = 'C_auth';
$route['login-act'] = 'C_auth/proses_login';
$route['logout'] = 'C_auth/proses_logout';

// controller C_dashboard

$route['dashboard'] = 'C_dashboard';

$route['barang'] = 'C_dashboard/menu_data_barang';
$route['tambah-barang'] = 'C_dashboard/menu_tambah_barang';
$route['edit-barang/(:any)'] = 'C_dashboard/menu_edit_barang/$1'; 

$route['tambah-stok'] = 'C_dashboard/menu_stok';
$route['tambah-stok-pro'] = 'C_dashboard/add_stok';

$route['suplier'] = 'C_dashboard/menu_suplier';
$route['tambah-suplier'] = 'C_dashboard/menu_tambah_suplier';
$route['edit-suplier/(:any)'] = 'C_dashboard/menu_edit_suplier/$1';

$route['data-pinjam'] = 'C_dashboard/menu_data_pinjam';

$route['pinjam'] = 'C_dashboard/menu_pinjam';
$route['pinjam-barang/(:any)'] = 'C_dashboard/menu_tambah_pinjam/$1';

$route['user'] = 'C_dashboard/menu_user';
$route['tambah-user'] = 'C_dashboard/menu_tambah_user';
$route['edit-user/(:any)'] = 'C_dashboard/menu_edit_user/$1';

// URI Proses CRUD

$route['tambah-barang-pro'] = 'C_dashboard/add_barang';
$route['edit-barang-pro/(:any)'] = 'C_dashboard/edit_barang/$1';
$route['hapus-barang/(:any)'] = 'C_dashboard/delete_barang/$1';

$route['tambah-suplier-pro'] = 'C_dashboard/add_suplier';
$route['edit-suplier-pro/(:any)'] = 'C_dashboard/edit_suplier/$1';
$route['hapus-suplier/(:any)'] = 'C_dashboard/delete_suplier/$1';

$route['tambah-pinjam-pro/(:any)'] = 'C_dashboard/add_pinjam_barang/$1';
$route['edit-pinjam/(:any)'] = 'C_dashboard/selesaikan_pinjam_barang/$1';
$route['hapus-pinjam/(:any)'] = 'C_dashboard/hapus_pinjam_barang/$1';

$route['tambah-user-pro'] = 'C_dashboard/add_user';
$route['edit-user-pro/(:any)'] = 'C_dashboard/edit_user/$1';
$route['update-status/(:any)/(:any)'] = 'C_dashboard/update_status/$1/$2';
$route['hapus-user/(:any)'] = 'C_dashboard/delete_user/$1';

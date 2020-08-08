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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['vendor/category_add'] = 'admin/category_add';
$route['vendor/manufacturer_add'] = 'admin/manufacturer_add';
// $route['vendor/product_form_list'] = 'admin/product_form_list';
$route['vendor/saltComposition_add'] = 'admin/saltComposition_add';
$route['vendor/product_form_add'] = 'admin/product_form_add';
$route['vendor/subcategory_add'] = 'admin/subcategory_add';
$route['vendor/brand_list'] = 'admin/brand_list';
$route['vendor/brand_add'] = 'admin/brand_add';
$route['vendor/product_form_edit/(:any)'] = 'admin/product_form_edit/$1';
$route['vendor/manufacturer_edit/(:any)'] = 'admin/manufacturer_edit/$1';
$route['vendor/brand_edit/(:any)'] = 'admin/brand_edit/$1';
$route['vendor/category_edit/(:any)'] = 'admin/category_edit/$1';
$route['vendor/subcategory_edit/(:any)'] = 'admin/subcategory_edit/$1';

$route['vendor/subcategory_list/(:any)'] = 'admin/subcategory_list/$1';
$route['vendor/category_list/(:any)'] = 'admin/category_list/$1';
$route['vendor/manufacturer_list/(:any)'] = 'admin/manufacturer_list/$1';
$route['vendor/product_form_list/(:any)'] = 'admin/product_form_list/$1';
$route['vendor/brand_list/(:any)'] = 'admin/brand_list/$1';
$route['vendor/saltComposition_list/(:any)'] = 'admin/saltComposition_list/$1';
$route['vendor/saltComposition_edit/(:any)'] = 'admin/saltComposition_edit/$1';

$route['vendor/brand_bulk'] = 'admin/brand_bulk';
$route['vendor/upload_brand_bulk'] = 'admin/upload_brand_bulk';
$route['vendor/brand_bulk_update'] = 'admin/brand_bulk_update';
$route['vendor/saltComposition_bulk'] = 'admin/saltComposition_bulk';
$route['vendor/upload_saltComposition_bulk'] = 'admin/upload_saltComposition_bulk';
$route['vendor/manufacturer_bulk'] = 'admin/manufacturer_bulk';
$route['vendor/upload_manufacturer_bulk'] = 'admin/upload_manufacturer_bulk';
$route['vendor/product_form_bulk'] = 'admin/product_form_bulk';
$route['vendor/upload_product_form_bulk'] = 'admin/upload_product_form_bulk';


// $route['vendor/brand_add'] = 'admin/brand_add';
// $route['vendor/brand_add'] = 'admin/brand_add';




$route['admin/all_product'] = 'vendor/all_product';
$route['admin/addSingleProduct'] = 'vendor/addSingleProduct';
$route['admin/editPersonalDetails/(:any)'] = 'vendor/editPersonalDetails/$1';
$route['admin/vendor_bulk_upload'] = 'vendor/vendor_bulk_upload';
$route['admin/product'] = 'vendor/inventory';

$route['admin/edit_singleProduct/(:any)'] = 'vendor/edit_singleProduct/$1';


$route['user/login_code'] = 'vendor/vendorLogin';
$route['user/signup_code'] = 'vendor/vendorregister';
$route['user/forgot_password'] = 'vendor/forgot_password';




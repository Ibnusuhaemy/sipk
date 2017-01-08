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

$route['default_controller'] 	= "home";
$route['daftar']   				= "home/daftar";
$route['sukses']   				= "home/sukses";
$route['proses_daftar']			= "home/proses_daftar";
$route['profile']   			= "home/profile";
$route['layanan']   			= "home/layanan";
$route['about']   				= "home/about";
$route['admin']   				= "admin/index";
$route['cek_login'] 			= "admin/cek_login";
$route['admin_home'] 					= "admin/home";
$route['admin_profile'] 				= "admin/profile";
$route['admin_layanan'] 				= "admin/layanan";
$route['admin_about'] 					= "admin/about";
$route['update_profile'] 				= "admin/update_profile";
$route['proses_update_layanan'] 		= "admin/proses_layanan";
$route['proses_update_about'] 			= "admin/proses_about";
$route['admin_user'] 					= "admin/user";
$route['admin_jadwal'] 					= "admin/jadwal";
$route['admin_tambah_jadwal'] 			= "admin/admin_tambah_jadwal";
$route['admin_edit_jadwal/(:num)']		= "admin/admin_edit_jadwal/$1";
$route['admin_proses_edit_jadwal']		= "admin/admin_proses_edit_jadwal";
$route['admin_proses_tambah_jadwal']	= "admin/admin_proses_tambah_jadwal";
$route['admin_hapus_jadwal/(:num)']		= "admin/hapus_jadwal/$1";
$route['admin_tambah_user']				= "admin/tambah_user";
$route['admin_pembayaran']				= "admin/pembayaran_admin";
$route['admin_edit_user/(:num)']		= "admin/edit_user/$1";
$route['admin_hapus_user/(:num)']		= "admin/hapus_user/$1";
$route['proses_tambah_user'] 			= "admin/proses_tambah_users";
$route['proses_edit_user'] 				= "admin/edit_users";
$route['admin_daftar'] 					= "admin/pelamar";
$route['admin_jadwal'] 					= "admin/jadwal";
$route['admin_validasi/(:num)'] 		= "admin/validasi";
$route['logout'] 						= "admin/logout";
$route['user_pembayaran'] 				= "user/pembayaran";
$route['hapus_pembayaran_admin/(:any)']	= "admin/hapus_pembayaran_admin/$1";
$route['admin_hapus_pelamar/(:any)']	= "admin/admin_hapus_pelamar/$1";
$route['user_pendaftaran'] 				= "user/pendaftaran";
$route['user_jadwal'] 					= "user/user_jadwal";
$route['proses_pembayaran']				= "user/proses_pembayaran";

$route['guru_jadwal'] 					= "pengajar/jadwal";
$route['guru_nilai'] 					= "pengajar/nilai";
$route['proses_edit_nilai'] 			= "pengajar/proses_edit_nilai";
$route['edit_nilai/(:num)'] 			= "pengajar/edit_nilai/$1";

$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */
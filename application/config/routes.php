<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//contoh route untuk live
// $route['rossa-iwan'] = 'theme/couple';

//contoh route untuk demo
$route['rossa-iwan/(:any)'] = 'theme/couple_demo/$1';

$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

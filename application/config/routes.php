<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// user
$route['default_controller'] = 'UserController';
$route['home']               = 'UserController/index';
$route['about']              = 'UserController/about';
$route['contact']            = 'UserController/contact';
$route['teachers']           = 'UserController/teachers';
$route['course2']        = 'UserController/courseGrid2';


// Admin
$route['admin'] = 'AdminController/index';
$route['login'] = 'AdminController/login';
// Admin Slider
$route['c_slider'] = 'AdminController/c_slider';
$route['l_slider'] = 'AdminController/l_slider';




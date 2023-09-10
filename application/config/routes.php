<?php
defined('BASEPATH') or exit('No direct script access allowed');
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
$route['c_slider_act'] = 'AdminController/c_slider_act';
$route['e_slider/(.*)'] = 'AdminController/e_slider/$1';
$route['d_slider/(.*)'] = 'AdminController/d_slider/$1';
$route['e_slider_act/(.*)'] = 'AdminController/e_slider_act/$1';

// Course
$route['c_course'] = 'AdminController/c_course';
$route['l_course'] = 'AdminController/l_course';
$route['c_course_act'] = 'AdminController/c_course_act';
$route['e_course/(.*)'] = 'AdminController/e_course/$1';
$route['d_course/(.*)'] = 'AdminController/d_course/$1';
$route['e_course_act/(.*)'] = 'AdminController/e_course_act/$1';

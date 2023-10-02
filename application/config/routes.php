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
$route['partners']           = 'UserController/partners';
$route['directoria']           = 'UserController/directoria';
$route['course2']            = 'UserController/courseGrid2';


// Admin
$route['admin']              = 'AdminController/index';
$route['login']              = 'AdminController/login';

// Admin Slider
$route['c_slider']           = 'AdminController/c_slider';
$route['l_slider']           = 'AdminController/l_slider';
$route['c_slider_act']       = 'AdminController/c_slider_act';
$route['e_slider/(.*)']      = 'AdminController/e_slider/$1';
$route['d_slider/(.*)']      = 'AdminController/d_slider/$1';
$route['e_slider_act/(.*)']  = 'AdminController/e_slider_act/$1';

// Course
$route['c_course']           = 'AdminController/c_course';
$route['l_course']           = 'AdminController/l_course';
$route['c_course_act']       = 'AdminController/c_course_act';
$route['e_course/(.*)']      = 'AdminController/e_course/$1';
$route['d_course/(.*)']      = 'AdminController/d_course/$1';
$route['e_course_act/(.*)']  = 'AdminController/e_course_act/$1';

//  news
$route['c_news']             = 'AdminController/c_news';
$route['l_news']             = 'AdminController/l_news';
$route['c_news_act']         = 'AdminController/c_news_act';
$route['e_news/(.*)']        = 'AdminController/e_news/$1';
$route['d_news/(.*)']        = 'AdminController/d_news/$1';
$route['e_news_act/(.*)']    = 'AdminController/e_news_act/$1';

// Footer About
$route['c_footer'] = 'AdminController/c_footer';
$route['l_footer'] = 'AdminController/l_footer';
$route['c_footer_act'] = 'AdminController/c_footer_act';
$route['e_footer/(.*)'] = 'AdminController/e_footer/$1';
$route['d_footer/(.*)'] = 'AdminController/d_footer/$1';
$route['e_footer_act/(.*)'] = 'AdminController/e_footer_act/$1';

// Partners
$route['c_partners'] = 'AdminController/c_partners';
$route['l_partners'] = 'AdminController/l_partners';
$route['c_partners_act'] = 'AdminController/c_partners_act';
$route['e_partners/(.*)'] = 'AdminController/e_partners/$1';
$route['d_partners/(.*)'] = 'AdminController/d_partners/$1';
$route['e_partners_act/(.*)'] = 'AdminController/e_partners_act/$1';

// About
$route['c_about'] = 'AdminController/c_about';
$route['l_about'] = 'AdminController/l_about';
$route['c_about_act'] = 'AdminController/c_about_act';
$route['e_about/(.*)'] = 'AdminController/e_about/$1';
$route['d_about/(.*)'] = 'AdminController/d_about/$1';
$route['e_about_act/(.*)'] = 'AdminController/e_about_act/$1';
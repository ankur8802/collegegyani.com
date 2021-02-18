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
$route[''] = '';
$route['default_controller'] = 'User';

$route['(?i)University/(:num)/(:any)'] = 'User/viewcollegedetail/$1/$2';
$route['(?i)college/(:num)/(:any)'] = 'User/viewcollegedetail/$1/$2';
$route['404_override'] = 'Error404';
$route['(?i)translate_uri_dashes'] = FALSE;
 

$route['(?i)exam-in-india'] = 'User/examsmain/';
$route['(?i)management-colleges-in-india'] = 'User/managementcolleges/';
$route['(?i)engineering-colleges-in-india'] = 'User/enggcolleges/';
$route['(?i)commerce-colleges-in-india'] = 'User/commercecolleges/';
$route['(?i)medical-colleges-in-india'] = 'User/medicalcecolleges/';
$route['(?i)login'] = 'User/login';
$route['(?i)educational-news'] = 'User/news/';
$route['(?i)write-a-review'] = 'User/review'; 
$route['(?i)reviews'] = 'User/reviewall'; 

$route['(?i)university-in-india'] = 'User/topuniversity/';
$route['(?i)admission-2020'] = 'User/admission';
$route['(?i)common-application-process'] = 'User/application';
$route['(?i)colleges'] = 'User/viewcollege';
$route['(?i)news/(:num)/(:any)'] = 'User/newsdetailpage/$1/$2';
$route['(?i)my-profile'] = '/User/userlogin';
$route['(?i)exam-details/(:num)/(:any)'] = 'User/newsdetail/$1/$2';
$route['(?i)bba-colleges'] = 'User/filterbbacolleges';
$route['(?i)mba-colleges'] = 'User/filtermbacolleges';
$route['(?i)pgdm-colleges'] = 'User/filterpgdmcolleges';
$route['(?i)bba-mba-colleges'] = 'User/filterbbambacolleges';
$route['(?i)bbm-colleges'] = 'User/filterbbmcolleges';
$route['(?i)btech-colleges'] = 'User/filterbtechcolleges';
$route['(?i)mtech-colleges'] = 'User/filtermtechcolleges';
$route['(?i)barch-colleges'] = 'User/filterbarchcolleges';
$route['(?i)btech-mtech-colleges'] = 'User/filterbtechmtechcolleges';
$route['(?i)be-colleges'] = 'User/filterbecolleges';
$route['(?i)find-college'] = 'User/searchresult';
$route['(?i)bcom-colleges'] = 'User/filterbcomcolleges';
$route['(?i)mcom-colleges'] = 'User/filtermcomcolleges';
$route['(?i)mphil-colleges'] = 'User/filtermphilcolleges';
$route['(?i)bed-colleges'] = 'User/filterbedcolleges';
$route['(?i)cs-colleges'] = 'User/filtercscolleges';
$route['(?i)mbbs-colleges'] = 'User/filtermbbscolleges';
$route['(?i)bpharma-colleges'] = 'User/filterbpharmacolleges';
$route['(?i)mpharma-colleges'] = 'User/filtermpharmacolleges';
$route['(?i)bpt-colleges'] = 'User/filterbptcolleges';
$route['(?i)bams-colleges'] = 'User/filterbamscolleges';
$route['(?i)top-management-college-in-noida'] = 'User/filtermanagementcollegesnoida';
$route['(?i)top-management-college-in-ghaziabad'] = 'User/filtermanagementcollegesghaziabad';
$route['(?i)top-management-college-in-delhi'] = 'User/filtermanagementcollegesdelhi';
$route['(?i)top-management-college-in-pune'] = 'User/filtermanagementcollegespune';
$route['(?i)top-management-college-in-lucknow'] = 'User/filtermanagementcollegeslucknow';
$route['(?i)top-management-college-in-bangalore'] = 'User/filtermanagementcollegesbangalore';
$route['(?i)top-engineering-college-in-noida'] = 'User/filterengineeringcollegesnoida';
$route['(?i)top-engineering-college-in-ghaziabad'] = 'User/filterengineeringcollegesghaziabad';
$route['(?i)top-engineering-college-in-delhi'] = 'User/filterengineeringcollegesdelhi';
$route['(?i)top-engineering-college-in-pune'] = 'User/filterengineeringcollegespune';
$route['(?i)top-engineering-college-in-lucknow'] = 'User/filterengineeringcollegeslucknow';
$route['(?i)top-engineering-college-in-bangalore'] = 'User/filterengineeringcollegesbangalore';
$route['(?i)top-commerce-college-in-noida'] = 'User/filtercommercecollegesnoida';
$route['(?i)top-commerce-college-in-ghaziabad'] = 'User/filtercommercecollegesghaziabad';
$route['(?i)top-commerce-college-in-delhi'] = 'User/filtercommercecollegesdelhi';
$route['(?i)top-commerce-college-in-pune'] = 'User/filtercommercecollegespune';
$route['(?i)top-commerce-college-in-lucknow'] = 'User/filtercommercecollegeslucknow';
$route['(?i)top-commerce-college-in-bangalore'] = 'User/filtercommercecollegesbangalore';
$route['(?i)top-medical-college-in-noida'] = 'User/filtermedicalcollegesnoida';
$route['(?i)top-medical-college-in-ghaziabad'] = 'User/filtermedicalcollegesghaziabad';
$route['(?i)top-medical-college-in-delhi'] = 'User/filtermedicalcollegesdelhi';
$route['(?i)top-medical-college-in-pune'] = 'User/filtermedicalcollegespune';
$route['(?i)top-medical-college-in-lucknow'] = 'User/filtermedicalcollegeslucknow';
$route['(?i)top-medical-college-in-bangalore'] = 'User/filtermedicalcollegesbangalore';
$route['(?i)mbbs-in-russia'] = 'User/abroadrussia';
$route['(?i)mbbs-in-china'] = 'User/abroadchina';
$route['(?i)mbbs-in-georgia'] = 'User/abroadgoergia';
$route['(?i)mbbs-in-ukraine'] = 'User/abroadukraine';
$route['(?i)mbbs-in-philippines'] = 'User/abroadphilippines';
$route['(?i)mbbs-in-poland'] = 'User/abroadpoland';
$route['(?i)mbbs-in-kyrgyzstan'] = 'User/abroadkyrgyzstan';
$route['(?i)mbbs-in-bagladesh'] = 'User/abroadbagladesh';
$route['(?i)study-abroad'] = 'User/abroad';
$route['(?i)top-management-college-in-delhi-state'] = 'User/filtermanagementcollegestatedelhi';
$route['(?i)top-management-college-in-uttar-pradesh'] = 'User/filtermanagementcollegestateuttarpradesh';
$route['(?i)top-management-college-in-maharashtra'] = 'User/filtermanagementcollegestatemaharashtra';
$route['(?i)top-management-college-in-madhya-pradesh'] = 'User/filtermanagementcollegestatemadhyapradesh';
$route['(?i)top-management-college-in-karnataka'] = 'User/filtermanagementcollegestatekarnataka';
$route['(?i)top-management-college-in-tamil-nadu'] = 'User/filtermanagementcollegestatetamilnadu';
$route['(?i)top-engineering-college-in-delhi-state'] = 'User/filterengineeringcollegestatedelhi';
$route['(?i)top-engineering-college-in-uttar-pradesh'] = 'User/filterengineeringcollegestateuttarpradesh';
$route['(?i)top-engineering-college-in-maharashtra'] = 'User/filterengineeringcollegestatemaharashtra';
$route['(?i)top-engineering-college-in-madhya-pradesh'] = 'User/filterengineeringcollegestatemadhyapradesh';
$route['(?i)top-engineering-college-in-karnataka'] = 'User/filterengineeringcollegestatekarnataka';
$route['(?i)top-engineering-college-in-tamil-nadu'] = 'User/filterengineeringcollegestatetamilnadu';
$route['(?i)top-commerce-college-in-delhi-state'] = 'User/filtercommercecollegestatedelhi';
$route['(?i)top-commerce-college-in-uttar-pradesh'] = 'User/filtercommercecollegestateuttarpradesh';
$route['(?i)top-commerce-college-in-maharashtra'] = 'User/filtercommercecollegestatemaharashtra';
$route['(?i)top-commerce-college-in-madhya-pradesh'] = 'User/filtercommercecollegestatemadhyapradesh';
$route['(?i)top-commerce-college-in-karnataka'] = 'User/filtercommercecollegestatekarnataka';
$route['(?i)top-commerce-college-in-tamil-nadu'] = 'User/filtercommercecollegestatetamilnadu';
$route['(?i)top-medical-college-in-delhi-state'] = 'User/filtermedicalcollegestatedelhi';
$route['(?i)top-medical-college-in-uttar-pradesh'] = 'User/filtermedicalcollegestateuttarpradesh';
$route['(?i)top-medical-college-in-maharashtra'] = 'User/filtermedicalcollegestatemaharashtra';
$route['(?i)top-medical-college-in-madhya-pradesh'] = 'User/filtermedicalcollegestatemadhyapradesh';
$route['(?i)top-medical-college-in-karnataka'] = 'User/filtermedicalcollegestatekarnataka';
$route['(?i)top-medical-college-in-tamil-nadu'] = 'User/filtermedicalcollegestatetamilnadu';
$route['(?i)blogs'] = 'User/blogs';
$route['(?i)blog/(:any)'] = 'User/blogdetail/$1';

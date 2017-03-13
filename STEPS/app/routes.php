<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//Login Controller Routes
Route::get('/logout',array('uses'=>'LoginController@student_logout'));
Route::post('/login',array('uses'=>'LoginController@student_login'));
Route::get('/adminlogin',array('uses'=>'LoginController@admin_login_display'));
Route::post('/adminloginpost',array('uses'=>'LoginController@admin_login_post'));
Route::get('/collegelogout',array('uses'=>'LoginController@college_logout'));
Route::get('/saologout',array('uses'=>'LoginController@sao_logout'));
Route::get('/oaslogout',array('uses'=>'LoginController@oas_logout'));
Route::get('/guidancelogout',array('uses'=>'LoginController@guidance_logout'));
//End of LoginController Routes

//Registration Controller Routes
Route::post('/register',array('uses'=>'RegistrationController@student_register'));
Route::post('/adminregister',array('uses'=>'RegistrationController@admin_register'));
//End of Registration Controller Routes

//Student Controller Routes
Route::get('/',array('uses'=>'StudentController@index'));
Route::get('/home',array('before'=>'auth', 'uses'=>'StudentController@student_home'));
//End of Student Controller Routes

//Admin Controller Routes
Route::get('/collegehome',array('uses'=>'AdminController@admin_college_home'));
Route::get('/saohome',array('uses'=>'AdminController@admin_sao_home'));
Route::get('/oashome',array('uses'=>'AdminController@admin_oas_home'));
Route::get('/guidancehome',array('uses'=>'AdminController@admin_guidance_home'));
//End of Admin Controller Routes

//Steps Controller Routes
Route::post('/evaluate',array('uses'=>'StepsController@evaluate'));
Route::post('/evaluation',array('uses'=>'StepsController@evaluation'));

Route::post('/requirements',array('uses'=>'StepsController@requirements'));
Route::post('/submitrequirements',array('uses'=>'StepsController@submit_requirements'));
Route::post('/submittedrequirements',array('uses'=>'StepsController@submitted_requirements'));

Route::post('/oasviewstudent',array('uses'=>'StepsController@oas_view_student'));

Route::post('/payment',array('uses'=>'StepsController@view_payment'));
Route::post('/receivepayment',array('uses'=>'StepsController@receive_payment'));

Route::post('/identification',array('uses'=>'StepsController@get_identification'));
Route::post('/claimidentification', array('uses'=>'StepsController@claimed_identification'));

Route::post('/examscheduling',array('uses'=>'StepsController@exam_scheduling'));
Route::post('/oasscheduleexam',array('uses'=>'StepsController@oas_schedule_exam'));
Route::post('/studentscheduleexam',array('uses'=>'StepsController@student_schedule_exam'));
//End of Steps Controller Routes



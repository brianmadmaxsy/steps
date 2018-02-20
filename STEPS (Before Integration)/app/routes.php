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

//LoginController Routes
	//Login Controller Routes for Student
	Route::post('/login',array('uses'=>'LoginController@student_login'));
	//Login Controller Routes for admin
	Route::get('/adminlogin',array('uses'=>'LoginController@admin_login_display'));
	Route::post('/adminloginpost',array('uses'=>'LoginController@admin_login_post'));
//End of LoginController Routes


//LogoutController Routes
	//Logout Controller for Student
	Route::get('/logout',array('uses'=>'LogoutController@student_logout'));
	//Logout Controller for Admin
	Route::get('/collegelogout',array('uses'=>'LogoutController@college_logout'));
	Route::get('/saologout',array('uses'=>'LogoutController@sao_logout'));
	Route::get('/oaslogout',array('uses'=>'LogoutController@oas_logout'));
	Route::get('/guidancelogout',array('uses'=>'LogoutController@guidance_logout'));
	Route::get('/masteradminlogout',array('uses'=>'LogoutController@master_admin_logout'));
//End of LogoutController Routes

//Registration Controller Routes
	Route::post('/register',array('uses'=>'RegistrationController@student_register'));
	Route::post('/adminregister',array('uses'=>'RegistrationController@admin_register'));
//End of Registration Controller Routes



//Student Controller Routes (Main Website and Student Dashboard)
	//Website
	Route::get('/',array('uses'=>'StudentController@index'));
	Route::get('/about',array('uses'=>'StudentController@about'));
	Route::get('/facility',array('uses'=>'StudentController@facility'));
	Route::get('/activities',array('uses'=>'StudentController@activities'));
	Route::get('/contact',array('uses'=>'StudentController@contact'));
	
	//Student Dashboard
	//Route::get('/home',array('before'=>'auth', 'uses'=>'StudentController@student_home'));
	Route::get('/home',array('uses'=>'StudentController@student_home'));
	Route::post('/edittransfereeprofile',array('uses'=>'StudentController@edit_transferee_profile'));
	Route::post('/editfreshmenprofile',array('uses'=>'StudentController@edit_freshmen_profile'));
	Route::post('/edittransfereeavatar',array('uses'=>'StudentController@edit_transferee_avatar'));
	Route::post('/editfreshmenavatar',array('uses'=>'StudentController@edit_freshmen_avatar'));
//End of Student Controller Routes



//Admin Controller Routes
	Route::get('/collegehome',array('uses'=>'AdminController@admin_college_home'));
	Route::get('/saohome',array('uses'=>'AdminController@admin_sao_home'));
	Route::get('/oashome',array('uses'=>'AdminController@admin_oas_home'));
	Route::get('/guidancehome',array('uses'=>'AdminController@admin_guidance_home'));
	Route::get('/masteradminhome',array('uses'=>'AdminController@admin_masteradmin_home'));
	Route::post('/editadminavatar',array('uses'=>'AdminController@edit_admin_avatar'));
	Route::post('/editadminprofile',array('uses'=>'AdminController@edit_admin_profile'));
//End of Admin Controller Routes

//Master Admin Controller Routes
	Route::post('/masteraddadmin',array('uses'=>'MasterAdminController@master_add_admin'));
	Route::post('/masteraddstudent',array('uses'=>'MasterAdminController@master_add_student'));
	Route::post('/mastergetadminuserid',array('uses'=>'MasterAdminController@master_get_admin_userid'));
	Route::post('/mastergetstudentuserid',array('uses'=>'MasterAdminController@master_get_student_userid'));
	Route::get('/masterviewadmin',array('uses'=>'MasterAdminController@master_view_admin'));
	Route::get('/masterviewstudent',array('uses'=>'MasterAdminController@master_view_student'));
	Route::post('/masteradmineditadminpost',array('uses'=>'MasterAdminController@master_edit_admin'));
	Route::post('/masteradmineditadminavatarpost',array('uses'=>'MasterAdminController@master_edit_admin_avatar'));
	Route::post('/masteradmineditfreshmenpost',array('uses'=>'MasterAdminController@master_edit_freshmen'));
	Route::post('/masteradminedittransfereepost',array('uses'=>'MasterAdminController@master_edit_transferee'));
	Route::post('/masteradmineditstudentavatarpost',array('uses'=>'MasterAdminController@master_edit_student_avatar'));
	Route::post('/masterremoveadmin',array('uses'=>'MasterAdminController@master_remove_admin'));
	Route::post('/masterremovestudent',array('uses'=>'MasterAdminController@master_remove_student'));
	Route::post('/masterresetstudentlogincredential',array('uses'=>'MasterAdminController@master_reset_student_login_credential'));
	Route::post('/masterresetadminlogincredential',array('uses'=>'MasterAdminController@master_reset_admin_login_credential'));
//End of Master Admin Controller Routes	


/*Steps Controller Routes*/

//College Steps
Route::post('/collegegettransferee',array('uses'=>'CollegeController@college_get_transferee_userid'));
Route::get('/evaluate',array('uses'=>'CollegeController@evaluate'));
Route::post('/evaluation',array('uses'=>'CollegeController@evaluation'));
//End of College Steps

//SAO Steps
Route::post('/saogettransferee',array('uses'=>'SaoController@sao_get_transferee_userid'));
Route::get('/requirements',array('uses'=>'SaoController@requirements'));
Route::post('/submitrequirements',array('uses'=>'SaoController@submit_requirements'));
Route::post('/submittedrequirements',array('uses'=>'SaoController@submitted_requirements'));
Route::get('/saoviewtransferee',array('uses'=>'SaoController@sao_view_transferee'));
Route::get('/interview',array('uses'=>'SaoController@interview'));
Route::post('/sao_interview_post',array('uses'=>'SaoController@sao_interview_post'));
//End of SAO Steps


//OAS Steps
Route::post('/oasgettransfereeuserid',array('uses'=>'OasController@oas_get_transferee_userid'));
Route::get('/oasviewstudent',array('uses'=>'OasController@oas_view_student'));


Route::get('/payment',array('uses'=>'OasController@view_payment'));
Route::post('/receivepayment',array('uses'=>'OasController@receive_payment'));

Route::get('/identification',array('uses'=>'OasController@get_identification'));
Route::post('/claimidentification', array('uses'=>'OasController@claimed_identification'));

Route::get('/examscheduling',array('uses'=>'OasController@exam_scheduling'));
Route::post('/oasscheduleexam',array('uses'=>'OasController@oas_schedule_exam'));
Route::post('/studentscheduleexam',array('uses'=>'OasController@student_schedule_exam'));

//For freshmen
Route::post('/oasgetfreshmenuserid',array('uses'=>'OasController@oas_get_freshmen_userid'));
Route::get('/oasviewfreshmen',array('uses'=>'OasController@oas_view_freshmen_student'));
Route::get('/oasviewfreshmenrequirements',array('uses'=>'OasController@oas_view_freshmen_requirements'));
Route::post('/submitfreshmenrequirements',array('uses'=>'OasController@submit_freshmen_requirements'));
Route::post('/approvefreshmenrequirements',array('uses'=>'OasController@approve_freshmen_requirements'));
Route::get('/oasviewfreshmenpayment',array('uses'=>'OasController@oas_view_freshmen_payment'));
Route::post('/receivefreshmenpayment',array('uses'=>'OasController@receive_freshmen_payment'));
Route::get('/viewfreshmenidentification',array('uses'=>'OasController@get_freshmen_identification'));
Route::post('/claimfreshmenidentification', array('uses'=>'OasController@claimed_freshmen_identification'));
Route::post('/freshmenstudentscheduleexam',array('uses'=>'OasController@freshmen_student_schedule_exam'));
Route::get('/freshmenexamscheduling',array('uses'=>'OasController@oas_freshmen_view_exam_scheduling'));
Route::post('/oasfreshmenscheduleexam',array('uses'=>'OasController@oas_freshmen_schedule_exam'));
Route::get('/viewfreshmeninterview',array('uses'=>'OasController@oas_freshmen_view_interview'));
Route::post('/oasfreshmeninterviewpost',array('uses'=>'OasController@oas_freshmen_interview_post'));
//End of OAS Steps

//Guidance Steps
Route::post('/guidancegettransfereeuserid',array('uses'=>'GuidanceController@guidance_get_transferee_userid'));
Route::get('/guidanceviewstudent',array('uses'=>'GuidanceController@guidance_view_student'));
Route::post('/postresults',array('uses'=>'GuidanceController@post_exam_results'));
Route::post('/guidancegetfreshmenuserid',array('uses'=>'GuidanceController@guidance_get_freshmen_userid'));
Route::get('/guidanceviewfreshmen',array('uses'=>'GuidanceController@guidance_view_freshmen_student'));
Route::post('/postfreshmenexamresults',array('uses'=>'GuidanceController@post_freshmen_exam_results'));
Route::get('/examschedules',array('uses'=>'GuidanceController@display_exam_schedules'));
Route::post('/guidanceaddexam',array('uses'=>'GuidanceController@guidance_add_exam_schedule'));
Route::post('/getexamscheduleid',array('uses'=>'GuidanceController@guidance_get_exam_scheduleid'));
Route::get('/guidanceviewexamschedule',array('uses'=>'GuidanceController@guidance_view_exam_schedule'));
//End of Guidance Steps




/*End of Steps Controller Routes*/



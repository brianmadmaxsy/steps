<?php
class LogoutController extends BaseController{

	public function student_logout()
	{
		//Session::flush();
		Session::forget('sess_student_arr');
		Auth::logout();

		$message="thank you for using steps";
		Session::put('message',$message);
		return Redirect::intended('http://localhost:8000');
	}

	public function college_logout()
	{
		Session::forget('sess_admin_college_arr');
		//return View::make('AdminLoginRegister.AdminLoginRegister')->with('message','<font color="green">'.'Thank You for using STEPS!'.'</font>');

		$message='thank you for using steps';
		Session::put('adminmessage',$message);
		return Redirect::intended('/adminlogin');
	}
	public function sao_logout()
	{
		Session::forget('sess_admin_sao_arr');
		//return View::make('AdminLoginRegister.AdminLoginRegister')->with('message','<font color="green">'.'Thank You for using STEPS!'.'</font>');


		$message='thank you for using steps';
		Session::put('adminmessage',$message);
		return Redirect::intended('/adminlogin');
	}
	public function oas_logout()
	{
		Session::forget('sess_admin_oas_arr');
		Session::forget('sess_oas_freshmen_userid');
		//return View::make('AdminLoginRegister.AdminLoginRegister')->with('message','<font color="green">'.'Thank You for using STEPS!'.'</font>');


		$message='thank you for using steps';
		Session::put('adminmessage',$message);
		return Redirect::intended('/adminlogin');
	}
	public function guidance_logout()
	{
		Session::forget('sess_admin_guidance_arr');
		//return View::make('AdminLoginRegister.AdminLoginRegister')->with('message','<font color="green">'.'Thank You for using STEPS!'.'</font>');

		$message='thank you for using steps';
		Session::put('adminmessage',$message);
		return Redirect::intended('/adminlogin');
	}

	public function master_admin_logout()
	{
		Session::forget('sess_admin_masteradmin_arr');
		$message='thank you for using steps';
		Session::put('adminmessage',$message);
		return Redirect::intended('/adminlogin');
	}
}
?>
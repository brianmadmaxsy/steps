<?php
class LogoutController extends BaseController{

	public function student_logout()
	{
		Session::flush();
		Auth::logout();

		$message='<script language="javascript">'.'alert("Thank you for using STEPS!")'.'</script>';
		Session::put($message);
		return Redirect::intended('http://localhost:8000');
	}

	public function college_logout()
	{
		Session::forget('sess_admin_college_arr');
		return View::make('AdminLoginRegister.AdminLoginRegister')->with('message','<font color="green">'.'Thank You for using STEPS!'.'</font>');
	}
	public function sao_logout()
	{
		Session::forget('sess_admin_sao_arr');
		return View::make('AdminLoginRegister.AdminLoginRegister')->with('message','<font color="green">'.'Thank You for using STEPS!'.'</font>');
	}
	public function oas_logout()
	{
		Session::forget('sess_admin_oas_arr');
		return View::make('AdminLoginRegister.AdminLoginRegister')->with('message','<font color="green">'.'Thank You for using STEPS!'.'</font>');
	}
	public function guidance_logout()
	{
		Session::forget('sess_admin_guidance_arr');
		return View::make('AdminLoginRegister.AdminLoginRegister')->with('message','<font color="green">'.'Thank You for using STEPS!'.'</font>');
	}

}
?>
<?php
class LoginController extends BaseController{

	public function student_login()
	{

		$username=Input::get('login_username');
		$password=Input::get('login_password');
		
		$userdata=array('username'=>$username, 'password'=>$password);

		if(Auth::attempt($userdata))
		{
			$student = StudentModel::where('username','=',$username)->first();
			Session::put('sess_student_arr',$student);
			
			if($student['studenttype']=="Transferee")
			{
				$transferee = TransfereeModel::where('userid','=',$student['userid'])->first();
				Session::put('sess_transferee_arr',$transferee);
			}
			else if($student['studenttype']=="Freshmen")
			{
				$freshmen = FreshmenModel::where('userid','=',$student['userid'])->first();
				Session::put('sess_freshmen_arr',$freshmen);
			}
			
			return Redirect::intended('/home');
		}
		else
		{
			//echo "try again!";
			$message='user not found';
			Session::put('message',$message);
			return Redirect::intended('http://localhost:8000');

			//return View::make('Website.Website_home')->with('message',$message);
		}
		
	}
	

	public function admin_login_display()
	{
		$admin=Session::get('sess_admin_arr');
		$admin = unserialize(serialize($admin)); //added code to unserialize the __PHP_Incomplete_Class

		if($admin=="")
		{
			return View::make('AdminLoginRegister.AdminLoginRegister');
		}
		else
		{
			return Redirect::intended('http://localhost:8000/adminhome');
		}
		
	}

	public function admin_login_post()
	{
		try
		{
			$username=Input::get('username');
			$pw=Input::get('password');

			$password=md5($pw);
			$admin = AdminModel::where('username','=',$username)->where('password','=',$password)->first();

			if($admin!="")//if sessionfile is not empty
			{
				//session, get data using the inputed username and password
				$admin = AdminModel::where('username','=',$username)->first();
				
				if(strpos($admin['department'], 'College') !== false)
				{
					Session::put('sess_admin_college_arr',$admin);
					return Redirect::intended('/collegehome');
				}
				elseif($admin['department']=="Student Affairs Office")
				{
					Session::put('sess_admin_sao_arr',$admin);
					return Redirect::intended('/saohome');
				}
				elseif($admin['department']=="Office of Academic Scholarship")
				{
					Session::put('sess_admin_oas_arr',$admin);
					return Redirect::intended('/oashome');
				}
				elseif($admin['department']=="Guidance Office")
				{
					Session::put('sess_admin_guidance_arr',$admin);
					return Redirect::intended('/guidancehome');
				}
				
				
			}
			else{
				//admin user not found
				$message='user not found';
				Session::put('adminmessage',$message);
				return Redirect::intended('/adminlogin');
			}
		}
		catch(Exception $e)
		{
			echo $e;
		}
	}

	

	
}

?>
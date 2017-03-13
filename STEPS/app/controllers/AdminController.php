<?php
class AdminController extends BaseController{

	public function admin_college_home()
	{
		$college=Session::get('sess_admin_college_arr');
		$college=unserialize(serialize($college));

		
		if($college!="")
		{
			
			$students = DB::table('student')
            ->leftJoin('evaluation', 'student.userid', '=', 'evaluation.userid')
            ->where('student.department','=',$college['department'])
            ->get();
            
			return View::make('CollegeAdminDashboard.CollegeAdminHome')->with('college',$college)->with('students',$students);
		}
		else{
			return Redirect::intended('http://localhost:8000/adminlogin');
		}
	}
	public function admin_sao_home()
	{
		$sao=Session::get('sess_admin_sao_arr');
		$sao = unserialize(serialize($sao)); //added code to unserialize the __PHP_Incomplete_Class

		if($sao!="")
		{
			$students = DB::table('student')
			->leftJoin('requirements','student.userid','=','requirements.userid')
			->leftJoin('interview','student.userid','=','interview.userid')
			->get();

			return View::make('SaoAdminDashboard.SaoAdminHome')->with('sao',$sao)->with('students',$students);
		}
		else{
			return Redirect::intended('http://localhost:8000/adminlogin');
		}
	}
	public function admin_oas_home()
	{
		$oas=Session::get('sess_admin_oas_arr');
		$oas = unserialize(serialize($oas)); //added code to unserialize the __PHP_Incomplete_Class

		if($oas!="")
		{
			$students = DB::table('student')
			->leftJoin('payment','student.userid','=','payment.userid')
			->leftJoin('identification','student.userid','=','identification.userid')
			->leftJoin('examschedule','student.userid','=','examschedule.userid')
			->get();
			return View::make('OasAdminDashboard.OasAdminHome')->with('oas',$oas)->with('students',$students);
		}
		else{
			return Redirect::intended('http://localhost:8000/adminlogin');
		}
	}
	public function admin_guidance_home()
	{
		$guidance=Session::get('sess_admin_guidance_arr');
		$guidance = unserialize(serialize($guidance)); //added code to unserialize the __PHP_Incomplete_Class
		
		if($guidance!="")
		{
			return View::make('GuidanceAdminDashboard.GuidanceAdminHome')->with('guidance',$guidance);
		}
		else{
			return Redirect::intended('http://localhost:8000/adminlogin');
		}
	}
}

?>
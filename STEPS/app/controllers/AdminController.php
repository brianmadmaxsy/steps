<?php
class AdminController extends BaseController{

	public function admin_college_home()
	{
		$college=Session::get('sess_admin_college_arr');
		$college=unserialize(serialize($college));

		
		if($college!="")
		{
			
			$transfereestudents = DB::table('student')
			->leftJoin('transferee', 'student.userid', '=', 'transferee.userid')
            ->leftJoin('evaluation', 'student.userid', '=', 'evaluation.userid')
            ->where('student.department','=',$college['department'])
            ->where('student.studenttype','=','Transferee')
            ->get();

            $freshmenstudents = DB::table('student')
			->leftJoin('freshmen', 'student.userid', '=', 'freshmen.userid')
            ->leftJoin('evaluation', 'student.userid', '=', 'evaluation.userid')
            ->where('student.department','=',$college['department'])
            ->where('student.studenttype','=','Freshmen')
            ->get();
            
			return View::make('CollegeAdminDashboard.CollegeAdminHome')->with('college',$college)->with('transfereestudents',$transfereestudents)->with('freshmenstudents',$freshmenstudents);
		}
		else{
			return Redirect::intended('/adminlogin');
		}
	}
	public function admin_sao_home()
	{
		$sao=Session::get('sess_admin_sao_arr');
		$sao = unserialize(serialize($sao)); //added code to unserialize the __PHP_Incomplete_Class

		if($sao!="")
		{
			$transfereestudents = DB::table('student')
			->leftJoin('transferee', 'student.userid', '=', 'transferee.userid')
			->leftJoin('transferee_requirements','student.userid','=','transferee_requirements.userid')
			->leftJoin('interview','student.userid','=','interview.userid')
			->where('student.studenttype','=','Transferee')
			->get();

			$freshmenstudents = DB::table('student')
			->leftJoin('freshmen', 'student.userid', '=', 'freshmen.userid')
			->leftJoin('transferee_requirements','student.userid','=','transferee_requirements.userid')
			->leftJoin('interview','student.userid','=','interview.userid')
			->where('student.studenttype','=','Freshmen')
			->get();

			return View::make('SaoAdminDashboard.SaoAdminHome')->with('sao',$sao)->with('transfereestudents',$transfereestudents)->with('freshmenstudents',$freshmenstudents);
		}
		else{
			return Redirect::intended('/adminlogin');
		}
	}
	public function admin_oas_home()
	{
		Session::forget('sess_oas_freshmen_userid');
		Session::forget('sess_oas_transferee_userid');
		$oas=Session::get('sess_admin_oas_arr');
		$oas = unserialize(serialize($oas)); //added code to unserialize the __PHP_Incomplete_Class

		if($oas!="")
		{
			$transfereestudents = DB::table('student')
			->leftJoin('transferee', 'student.userid', '=', 'transferee.userid')
			->leftJoin('payment','student.userid','=','payment.userid')
			->leftJoin('identification','student.userid','=','identification.userid')
			->leftJoin('examschedule','student.userid','=','examschedule.userid')
			->where('student.studenttype','=','Transferee')
			->get();

			$freshmenstudents = DB::table('student')
			->leftJoin('freshmen', 'student.userid', '=', 'freshmen.userid')
			->where('student.studenttype','=','Freshmen')
			->get();


			return View::make('OasAdminDashboard.OasAdminHome')->with('oas',$oas)->with('transfereestudents',$transfereestudents)->with('freshmenstudents',$freshmenstudents);
		}
		else{
			return Redirect::intended('/adminlogin');
		}
	}
	public function admin_guidance_home()
	{
		Session::forget('sess_guidance_freshmen_userid');
		Session::forget('sess_guidance_transferee_userid');
		$guidance=Session::get('sess_admin_guidance_arr');
		$guidance = unserialize(serialize($guidance)); //added code to unserialize the __PHP_Incomplete_Class
		
		if($guidance!="")
		{
			$transfereestudents = DB::table('student')
			->leftJoin('transferee', 'student.userid', '=', 'transferee.userid')
			->leftJoin('examschedule','student.userid','=','examschedule.userid')
			->leftJoin('entranceexam','student.userid','=','entranceexam.userid')
			->leftJoin('results','student.userid','=','results.userid')
			->where('student.studenttype','=','Transferee')
			->get();

			$freshmenstudents = DB::table('student')
			->leftJoin('freshmen', 'student.userid', '=', 'freshmen.userid')
			->leftJoin('examschedule','student.userid','=','examschedule.userid')
			->leftJoin('entranceexam','student.userid','=','entranceexam.userid')
			->leftJoin('results','student.userid','=','results.userid')
			->where('student.studenttype','=','Freshmen')
			->get();

			$examschedulelist = ExamScheduleListModel::all();
			return View::make('GuidanceAdminDashboard.GuidanceAdminHome')->with('guidance',$guidance)->with('transfereestudents',$transfereestudents)->with('freshmenstudents',$freshmenstudents)->with('examschedulelist',$examschedulelist);
		}
		else{
			return Redirect::intended('/adminlogin');
		}
	}

	public function admin_masteradmin_home()
	{
		Session::forget('sess_masteradmin_fetched_admin_userid');
		Session::forget('sess_masteradmin_fetched_student_userid');
		Session::forget('sess_masteradmin_username');
		
		$master=Session::get('sess_admin_masteradmin_arr');
		$master=unserialize(serialize($master));

		if($master!="")
		{
			$students = DB::table('student')->get();
			$admins = DB::table('admin')
			->where('username','!=',$master['username'])
			->get();

			return View::make('MasterAdminDashboard.MasterAdminHome')->with('masteradmin',$master)->with('admins',$admins)->with('students',$students);
		}
	}
}

?>
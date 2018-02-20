<?php
class GuidanceController extends BaseController{

	
	//GUIDANCE STEPS

	public function guidance_get_transferee_userid()
	{
		//$steps_status=Input::get('get_steps_status');
		$userid=Input::get('get_userid');
		$fromlink=Input::get('from_link');
		Session::put('sess_guidance_transferee_userid',$userid);
		Session::put('sess_guidance_get_from_link',$fromlink);
		$student=StudentModel::where('userid','=',$userid)->first();
		
		
		return Redirect::intended('/guidanceviewstudent');
		
	}
	public function guidance_view_student()
	{
		//$userid=Input::get('get_userid');
		$userid=Session::get('sess_guidance_transferee_userid');
		$from_link=Session::get('sess_guidance_get_from_link');
		$guidance=Session::get('sess_admin_guidance_arr');
		$guidance=unserialize(serialize($guidance));

		$student=StudentModel::where('userid','=',$userid)->first();
		$transferee=TransfereeModel::where('userid','=',$userid)->first();
		$examschedule=ExamScheduleModel::where('userid','=',$userid)->first();
		$results=ResultsModel::where('userid','=',$userid)->first();
		$entranceexam=EntranceExamModel::where('userid','=',$userid)->first();
		return View::make('GuidanceAdminDashboard.GuidanceAdminViewStudent')->with('guidance',$guidance)->with('student',$student)->with('transferee',$transferee)->with('examschedule',$examschedule)->with('results',$results)->with('entranceexam',$entranceexam)->with('fromlink',$from_link);
	}

	public function post_exam_results()
	{
		$iqtest=Input::get('iqtest');
		$mathtest=Input::get('mathtest');
		$englishtest=Input::get('englishtest');
		$userid=Input::get('get_userid');
		$guidance_username=Input::get('get_guidance_username');

		

		$results=ResultsModel::where('userid',$userid);
		$results->update(['guidance_username'=>$guidance_username,'IQTest'=>$iqtest,'MathTest'=>$mathtest,'EnglishTest'=>$englishtest,'status'=>'true']);

		$entranceexam=EntranceExamModel::where('userid',$userid);
		$entranceexam->update(['guidance_username'=>$guidance_username,'status'=>'true']);

		$student=StudentModel::where('userid',$userid);
		$student->update(['steps_status'=>'interview','step_number'=>7]);

		//$student = StudentModel::where('userid','=',$userid)->first();
		//Session::put('sess_student_arr',$student);

		$admin = AdminModel::where('username','=',$guidance_username)->first();
		Session::put('sess_admin_guidance_arr',$admin);
		return Redirect::intended('/guidancehome');
	}


	//For freshmen student
	public function guidance_get_freshmen_userid()
	{
		//$steps_status=Input::get('get_steps_status');
		$userid=Input::get('get_userid');
		$fromlink=Input::get('from_link');
		Session::put('sess_guidance_freshmen_userid',$userid);
		Session::put('sess_guidance_get_from_link',$fromlink);
		$student=StudentModel::where('userid','=',$userid)->first();
		
		if($student['steps_status']=="EntranceExam")
		{
			return Redirect::intended('/guidanceviewfreshmen');
		}
		else
		{
			return Redirect::intended('/guidanceviewfreshmen');
		}
		
	}

	public function guidance_view_freshmen_student()
	{
		$userid=Session::get('sess_guidance_freshmen_userid');
		$from_link=Session::get('sess_guidance_get_from_link');
		$guidance=Session::get('sess_admin_guidance_arr');
		$guidance=unserialize(serialize($guidance));

		$student=StudentModel::where('userid','=',$userid)->first();
		$freshmen=FreshmenModel::where('userid','=',$userid)->first();
		$examschedule=ExamScheduleModel::where('userid','=',$userid)->first();
		$results=ResultsModel::where('userid','=',$userid)->first();
		$entranceexam=EntranceExamModel::where('userid','=',$userid)->first();
		return View::make('GuidanceAdminDashboard.GuidanceAdminViewFreshmenStudent')->with('guidance',$guidance)->with('student',$student)->with('freshmen',$freshmen)->with('examschedule',$examschedule)->with('results',$results)->with('entranceexam',$entranceexam)->with('fromlink',$from_link);
	}

	public function post_freshmen_exam_results()
	{
		$iqtest=Input::get('iqtest');
		$mathtest=Input::get('mathtest');
		$englishtest=Input::get('englishtest');
		$userid=Input::get('get_userid');
		$guidance_username=Input::get('get_guidance_username');

		

		$results=ResultsModel::where('userid',$userid);
		$results->update(['guidance_username'=>$guidance_username,'IQTest'=>$iqtest,'MathTest'=>$mathtest,'EnglishTest'=>$englishtest,'status'=>'true']);

		$entranceexam=EntranceExamModel::where('userid',$userid);
		$entranceexam->update(['guidance_username'=>$guidance_username,'status'=>'true']);

		$student=StudentModel::where('userid',$userid);
		$student->update(['steps_status'=>'interview','step_number'=>6]);

		//$student = StudentModel::where('userid','=',$userid)->first();
		//Session::put('sess_student_arr',$student);

		$admin = AdminModel::where('username','=',$guidance_username)->first();
		Session::put('sess_admin_guidance_arr',$admin);

		return Redirect::intended('/guidancehome');
	}


	public function display_exam_schedules()
	{
		Session::forget('sess_guidance_get_exam_scheduleid');
		Session::forget('sess_guidance_get_from_link');
		$guidance=Session::get('sess_admin_guidance_arr');
		$guidance = unserialize(serialize($guidance)); //added code to unserialize the __PHP_Incomplete_Class

		$guidance_admins = DB::table('admin')
			->where('department','=',"Guidance Office")
			->get();

		$examschedulelist = DB::table('examschedulelist')->get();

		if($guidance!="")
		{
			return View::make('GuidanceAdminDashboard.GuidanceAdminExamSchedules')->with('guidance',$guidance)->with('guidance_admins',$guidance_admins)->with('examschedulelist',$examschedulelist);
		}
		
	}

	public function guidance_add_exam_schedule()
	{
		$scheduledate=Input::get('date');
		$scheduleday=Input::get('scheduleday');
		$scheduletime=Input::get('scheduletime');
		$facilitator=Input::get('facilitator');
		$guidance_username=Input::get('guidance_username');

		//echo $scheduledate." ".$scheduleday." ".$scheduletime." ".$facilitator." ".$guidance_username;
		$examschedulelist=new ExamScheduleListModel;
		$examschedulelist->scheduleid=bin2hex(mcrypt_create_iv(20, MCRYPT_DEV_URANDOM));
		$examschedulelist->schedule_day=$scheduleday;
		$examschedulelist->schedule_date=$scheduledate;
		$examschedulelist->schedule_time=$scheduletime;
		$examschedulelist->facilitator=$facilitator;
		$examschedulelist->guidance_username=$guidance_username;
		$examschedulelist->save();


		$admin = AdminModel::where('username','=',$guidance_username)->first();
		Session::put('sess_admin_guidance_arr',$admin);

		return Redirect::intended('/examschedules');
	}

	public function guidance_get_exam_scheduleid()
	{
		$scheduleid=Input::get('schedule_id');
		$guidance_username=Input::get('guidance_username');
		$button=Input::get('exambutton'); //Values are either 'open' or 'remove'
		
		if($button=="View")
		{
			Session::put('sess_guidance_get_exam_scheduleid',$scheduleid);
			return Redirect::intended('/guidanceviewexamschedule');
		}
		elseif($button=="Remove")
		{
			
			DB::table('examschedulelist')->where('scheduleid', '=', $scheduleid)->delete();

			$admin = AdminModel::where('username','=',$guidance_username)->first();
			Session::put('sess_admin_guidance_arr',$admin);

			return Redirect::intended('/examschedules');
		}
	}

	public function guidance_view_exam_schedule()
	{
		$guidance=Session::get('sess_admin_guidance_arr');
		$guidance = unserialize(serialize($guidance)); //added code to unserialize the __PHP_Incomplete_Class
		
		$scheduleid=Session::get('sess_guidance_get_exam_scheduleid');

		$examschedule=ExamScheduleListModel::where('scheduleid','=',$scheduleid)->first();

		$exam_freshmen_students = DB::table('student')
			->leftJoin('freshmen','student.userid','=','freshmen.userid')
            ->leftJoin('examschedule', 'student.userid', '=', 'examschedule.userid')
            ->leftJoin('examschedulelist','examschedule.scheduleid','=','examschedulelist.scheduleid')
            ->where('examschedule.scheduleid','=',$scheduleid)
            ->where('student.studenttype','=','freshmen')
            ->get();
        
        $exam_transferee_students = DB::table('student')
			->leftJoin('transferee','student.userid','=','transferee.userid')
            ->leftJoin('examschedule', 'student.userid', '=', 'examschedule.userid')
            ->leftJoin('examschedulelist','examschedule.scheduleid','=','examschedulelist.scheduleid')
            ->where('examschedule.scheduleid','=',$scheduleid)
            ->where('student.studenttype','=','transferee')
            ->get();    

        return View::make('GuidanceAdminDashboard.GuidanceAdminViewExamSchedule')->with('guidance',$guidance)->with('examschedule',$examschedule)->with('exam_transferee_students',$exam_transferee_students)->with('exam_freshmen_students',$exam_freshmen_students);  
	}
}
?>
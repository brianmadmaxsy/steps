<?php
class GuidanceController extends BaseController{

	
	//GUIDANCE STEPS

	public function guidance_view_student()
	{
		$userid=Input::get('get_userid');
		$guidance=Session::get('sess_admin_guidance_arr');
		$guidance=unserialize(serialize($guidance));

		$student=StudentModel::where('userid','=',$userid)->first();
		$transferee=TransfereeModel::where('userid','=',$userid)->first();
		$examschedule=ExamScheduleModel::where('userid','=',$userid)->first();
		$results=ResultsModel::where('userid','=',$userid)->first();
		$entranceexam=EntranceExamModel::where('userid','=',$userid)->first();
		return View::make('GuidanceAdminDashboard.GuidanceAdminViewStudent')->with('guidance',$guidance)->with('student',$student)->with('transferee',$transferee)->with('examschedule',$examschedule)->with('results',$results)->with('entranceexam',$entranceexam);
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

		$student = StudentModel::where('userid','=',$userid)->first();
		Session::put('sess_student_arr',$student);

		$admin = AdminModel::where('username','=',$guidance_username)->first();
		Session::put('sess_admin_guidance_arr',$admin);
		return Redirect::intended('http://localhost:8000/guidancehome');
	}


	//For freshmen student
	public function guidance_get_freshmen_userid()
	{
		$steps_status=Input::get('get_steps_status');
		$userid=Input::get('get_userid');
		Session::put('sess_guidance_freshmen_userid',$userid);

		if($steps_status=="EntranceExam")
		{
			return Redirect::intended('http://localhost:8000/guidanceviewfreshmen');
		}
		else
		{
			return Redirect::intended('http://localhost:8000/guidanceviewfreshmen');
		}
		
	}

	public function guidance_view_freshmen_student()
	{
		$userid=Session::get('sess_guidance_freshmen_userid');
		$guidance=Session::get('sess_admin_guidance_arr');
		$guidance=unserialize(serialize($guidance));

		$student=StudentModel::where('userid','=',$userid)->first();
		$freshmen=FreshmenModel::where('userid','=',$userid)->first();
		$examschedule=ExamScheduleModel::where('userid','=',$userid)->first();
		$results=ResultsModel::where('userid','=',$userid)->first();
		$entranceexam=EntranceExamModel::where('userid','=',$userid)->first();
		return View::make('GuidanceAdminDashboard.GuidanceAdminViewFreshmenStudent')->with('guidance',$guidance)->with('student',$student)->with('freshmen',$freshmen)->with('examschedule',$examschedule)->with('results',$results)->with('entranceexam',$entranceexam);
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

		$student = StudentModel::where('userid','=',$userid)->first();
		Session::put('sess_student_arr',$student);

		$admin = AdminModel::where('username','=',$guidance_username)->first();
		Session::put('sess_admin_guidance_arr',$admin);

		return Redirect::intended('http://localhost:8000/guidancehome');
	}
}
?>
<?php
class GuidanceController extends BaseController{

	
	//GUIDANCE STEPS

	public function guidance_view_student()
	{
		$userid=Input::get('get_userid');
		$guidance=Session::get('sess_admin_guidance_arr');
		$guidance=unserialize(serialize($guidance));

		$student=StudentModel::where('userid','=',$userid)->first();
		$examschedule=ExamScheduleModel::where('userid','=',$userid)->first();
		$results=ResultsModel::where('userid','=',$userid)->first();
		$entranceexam=EntranceExamModel::where('userid','=',$userid)->first();
		return View::make('GuidanceAdminDashboard.GuidanceAdminViewStudent')->with('guidance',$guidance)->with('student',$student)->with('examschedule',$examschedule)->with('results',$results)->with('entranceexam',$entranceexam);
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
}
?>
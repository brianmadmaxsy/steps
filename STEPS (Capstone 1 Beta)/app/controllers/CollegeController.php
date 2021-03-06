<?php
class CollegeController extends BaseController{

	public function evaluate()
	{
		$userid=Input::get('get_userid');
		$college=Session::get('sess_admin_college_arr');
		$college=unserialize(serialize($college));

		$student=StudentModel::where('userid','=',$userid)->first();
		$evaluation=EvaluationModel::where('userid','=',$userid)->first();

		return View::make('CollegeAdminDashboard.CollegeAdminEvaluation')->with('college',$college)->with('student',$student)->with('evaluation',$evaluation);
		//echo $userid;
	}
	public function evaluation()
	{
		$button=Input::get('evaluate');

		if($button=="Approve")
		{
			$comment=Input::get('comment');
			$userid=Input::get('get_userid');
			$evaluator_name=Input::get('get_evaluator');

			$evaluation=EvaluationModel::where('userid',$userid);
			$evaluation->update(['evaluator_name'=>$evaluator_name,'comment'=>$comment,'status'=>'true']);
			$student=StudentModel::where('userid',$userid);
			$student->update(['steps_status'=>'requirements','step_number'=>2]);

			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);

			$admin = AdminModel::where('username','=',$evaluator_name)->first();
			Session::put('sess_admin_college_arr',$admin);
			return Redirect::intended('http://localhost:8000/collegehome');
		}
		elseif($button=="Decline")
		{
			$comment=Input::get('comment');
			$userid=Input::get('get_userid');
			$evaluator=Input::get('get_evaluator');

			$evaluation=EvaluationModel::where('userid',$userid);
			$evaluation->update(['evaluator_name'=>$evaluator,'comment'=>$comment,'status'=>'false']);
			$student=StudentModel::where('userid',$userid);
			$student->update(['steps_status'=>'declined']);

			return Redirect::intended('http://localhost:8000/collegehome');
		}
	}
}
?>
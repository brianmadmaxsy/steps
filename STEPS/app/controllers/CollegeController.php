<?php
class CollegeController extends BaseController{

	public function college_get_transferee_userid()
	{
		$userid=Input::get('get_userid');
		Session::put('sess_college_transferee_userid',$userid);
		return Redirect::intended('/evaluate');

	}
	public function evaluate()
	{
		//$userid=Input::get('get_userid');
		$userid=Session::get('sess_college_transferee_userid');
		$college=Session::get('sess_admin_college_arr');
		$college=unserialize(serialize($college));

		$student=StudentModel::where('userid','=',$userid)->first();
		$transferee=TransfereeModel::where('userid','=',$userid)->first();
		$evaluation=EvaluationModel::where('userid','=',$userid)->first();

		return View::make('CollegeAdminDashboard.CollegeAdminEvaluation')->with('college',$college)->with('student',$student)->with('transferee',$transferee)->with('evaluation',$evaluation);
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
			return Redirect::intended('/collegehome');
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

			return Redirect::intended('/collegehome');
		}
	}
}
?>
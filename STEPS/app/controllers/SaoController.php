<?php
class SaoController extends BaseController{

	public function sao_get_transferee_userid()
	{
		$userid=Input::get('get_userid');
		$steps_status=Input::get('get_steps_status');
		Session::put('sess_sao_transferee_userid',$userid);
		/*
		<form method="post" <?php if($student->steps_status=="requirements"){ ?> action="/requirements"<?php } elseif($student->steps_status=="interview"){ ?> action="/interview" <?php }elseif($student->steps_status=="Officially Enrolled"){ ?> action="/interview" <?php }else{ ?> action="/requirements" <?php } ?> >
		*/

		if($steps_status=="requirements")
		{
			return Redirect::intended('http://localhost:8000/requirements');
		}
		elseif($steps_status=="interview")
		{
			return Redirect::intended('http://localhost:8000/interview');
		}
		else
		{
			return Redirect::intended('http://localhost:8000/saoviewtransferee');
		}

		
	}
	public function requirements()
	{
		//$userid=Input::get('get_userid');
		$userid=Session::get('sess_sao_transferee_userid');
		$sao=Session::get('sess_admin_sao_arr');
		$sao=unserialize(serialize($sao));

		$student=StudentModel::where('userid','=',$userid)->first();
		$transferee=TransfereeModel::where('userid','=',$userid)->first();
		$transferee_requirements=TransfereeRequirementsModel::where('userid','=',$userid)->first();

		return View::make('SaoAdminDashboard.SaoAdminRequirements')->with('sao',$sao)->with('student',$student)->with('transferee',$transferee)->with('requirements',$transferee_requirements);
	}
	public function submit_requirements()
	{
		$userid=Input::get('get_userid');
		$sao_username=Input::get('get_sao_username');
		$nso=false;
		$cot=false;
		$gm=false;
		$tor=false;
		$rf=false;

		if(Input::get('nso')!="")
		{
			//$nso=true;
			$transferee_requirements=TransfereeRequirementsModel::where('userid',$userid);
			$transferee_requirements->update(['NSO'=>'true']);
		}
		if(Input::get('cot')!="")
		{
			//$cot=true;
			$transferee_requirements=TransfereeRequirementsModel::where('userid',$userid);
			$transferee_requirements->update(['COT'=>'true']);
		}
		if(Input::get('gm')!="")
		{
			//$gm=true;
			$transferee_requirements=TransfereeRequirementsModel::where('userid',$userid);
			$transferee_requirements->update(['GM'=>'true']);
		}
		if(Input::get('tor')!="")
		{
			//$tor=true;
			$transferee_requirements=TransfereeRequirementsModel::where('userid',$userid);
			$transferee_requirements->update(['TOR'=>'true']);
		}
		if(Input::get('rf')!="")
		{
			//$rf=true;
			$transferee_requirements=TransfereeRequirementsModel::where('userid',$userid);
			$transferee_requirements->update(['RF'=>'true']);
		}
		$transferee_requirements=TransfereeRequirementsModel::where('userid',$userid);
		$transferee_requirements->update(['sao_username'=>$sao_username]);

		$student = StudentModel::where('userid','=',$userid)->first();
		Session::put('sess_student_arr',$student); //replace the old session for student user. So that after this transaction, student can refresh his page and page loads updated data
		
		$admin = AdminModel::where('username','=',$sao_username)->first();
		Session::put('sess_admin_sao_arr',$admin); //same to student, this also replaces the old admin data.

		if($student['steps_status']=="requirements")
		{
			return Redirect::intended('http://localhost:8000/requirements');
		}
		else if($student['steps_status']=="interview")
		{
			return Redirect::intended('http://localhost:8000/interview');
		}
		else
		{
			return Redirect::intended('http://localhost:8000/saoviewtransferee');
		}
		
		
	}

	public function submitted_requirements()
	{
		$button=Input::get('submitted_button');

		if($button=="Approve")
		{
			$userid=Input::get('get_userid');
			$comment=Input::get('requirements_comment');
			$sao_username=Input::get('get_sao_username');

			$transferee_requirements=TransfereeRequirementsModel::where('userid',$userid);
			$transferee_requirements->update(['status'=>'true','requirements_comment'=>$comment,'sao_username'=>$sao_username]);
			//$studentid="17-".rand (1000 , 9999)."-".rand(100,999);
			$studentid=Input::get('studentid');
			$student=StudentModel::where('userid',$userid);
			$student->update(['steps_status'=>'payment','studentid'=>$studentid,'step_number'=>3]);

			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);

			$admin = AdminModel::where('username','=',$sao_username)->first();
			Session::put('sess_admin_sao_arr',$admin);


			return Redirect::intended('http://localhost:8000/saohome');
		}
		elseif($button=="Decline")
		{
			$userid=Input::get('get_userid');
			$sao_username=Input::get('get_sao_username');

			$transferee_requirements=TransfereeRequirementsModel::where('userid',$userid);
			$transferee_requirements->update(['status'=>'false','sao_username'=>$sao_username]);
			$student=StudentModel::where('userid',$userid);
			$student->update(['steps_status'=>'declined']);

			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);

			$admin = AdminModel::where('username','=',$sao_username)->first();
			Session::put('sess_admin_sao_arr',$admin);
			return Redirect::intended('http://localhost:8000/saohome');
		}
	}

	public function interview()
	{
		//$userid=Input::get('get_userid');
		$userid=Session::get('sess_sao_transferee_userid');
		$sao=Session::get('sess_admin_sao_arr');
		$sao=unserialize(serialize($sao));

		$transferee_requirements=TransfereeRequirementsModel::where('userid','=',$userid)->first();
		$results=ResultsModel::where('userid','=',$userid)->first();
		$student=StudentModel::where('userid','=',$userid)->first();
		$transferee=TransfereeModel::where('userid','=',$userid)->first();
		$interview=InterviewModel::where('userid','=',$userid)->first();
		return View::make('SaoAdminDashboard.SaoAdminInterview')->with('sao',$sao)->with('requirements',$transferee_requirements)->with('student',$student)->with('transferee',$transferee)->with('results',$results)->with('interview',$interview);
	}

	public function sao_interview_post()
	{
		$button=Input::get('interview_button');

		if($button=="Approve")
		{
			$comment=Input::get('comment');
			$userid=Input::get('get_userid');
			$sao_username=Input::get('get_sao_username');

			$interview=InterviewModel::where('userid',$userid);
			$interview->update(['sao_username'=>$sao_username,'status'=>'true','interview_comment'=>$comment]);
			$student=StudentModel::where('userid',$userid);
			$student->update(['steps_status'=>'Officially Enrolled','step_number'=>8]);
			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);

			$admin = AdminModel::where('username','=',$sao_username)->first();
			Session::put('sess_admin_sao_arr',$admin);


			return Redirect::intended('http://localhost:8000/saohome');
		}
		elseif($button=="Decline")
		{
			$userid=Input::get('get_userid');
			$sao_username=Input::get('get_sao_username');

			$student=StudentModel::where('userid',$userid);
			$student->update(['steps_status'=>'declined']);

			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);

			$admin = AdminModel::where('username','=',$sao_username)->first();
			Session::put('sess_admin_sao_arr',$admin);
			return Redirect::intended('http://localhost:8000/saohome');
		}
	}

	public function sao_view_transferee()
	{
		//$userid=Input::get('get_userid');
		$userid=Session::get('sess_sao_transferee_userid');
		$sao=Session::get('sess_admin_sao_arr');
		$sao=unserialize(serialize($sao));

		$student=StudentModel::where('userid','=',$userid)->first();

		$transferee=TransfereeModel::where('userid','=',$userid)->first();
		$transferee_requirements=TransfereeRequirementsModel::where('userid','=',$userid)->first();
		$results=ResultsModel::where('userid','=',$userid)->first();
		$interview=InterviewModel::where('userid','=',$userid)->first();

		return View::make('SaoAdminDashboard.SaoAdminViewTransferee')->with('sao',$sao)->with('student',$student)->with('transferee',$transferee)->with('requirements',$transferee_requirements)->with('results',$results)->with('interview',$interview);
	}
}
?>
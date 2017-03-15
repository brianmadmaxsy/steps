<?php
class StepsController extends BaseController{

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
			$student->update(['steps_status'=>'requirements']);

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
	
	public function requirements()
	{
		$userid=Input::get('get_userid');
		$sao=Session::get('sess_admin_sao_arr');
		$sao=unserialize(serialize($sao));

		$student=StudentModel::where('userid','=',$userid)->first();
		$requirements=RequirementsModel::where('userid','=',$userid)->first();

		return View::make('SaoAdminDashboard.SaoAdminRequirements')->with('sao',$sao)->with('student',$student)->with('requirements',$requirements);
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
			$requirements=RequirementsModel::where('userid',$userid);
			$requirements->update(['NSO'=>'true']);
		}
		if(Input::get('cot')!="")
		{
			//$cot=true;
			$requirements=RequirementsModel::where('userid',$userid);
			$requirements->update(['COT'=>'true']);
		}
		if(Input::get('gm')!="")
		{
			//$gm=true;
			$requirements=RequirementsModel::where('userid',$userid);
			$requirements->update(['GM'=>'true']);
		}
		if(Input::get('tor')!="")
		{
			//$tor=true;
			$requirements=RequirementsModel::where('userid',$userid);
			$requirements->update(['TOR'=>'true']);
		}
		if(Input::get('rf')!="")
		{
			//$rf=true;
			$requirements=RequirementsModel::where('userid',$userid);
			$requirements->update(['RF'=>'true']);
		}
		$requirements=RequirementsModel::where('userid',$userid);
		$requirements->update(['sao_username'=>$sao_username]);

		$student = StudentModel::where('userid','=',$userid)->first();
		Session::put('sess_student_arr',$student); //replace the old session for student user. So that after this transaction, student can refresh his page and page loads updated data
		
		$admin = AdminModel::where('username','=',$sao_username)->first();
		Session::put('sess_admin_sao_arr',$admin); //same to student, this also replaces the old admin data.

		return Redirect::intended('http://localhost:8000/saohome');
		
	}

	public function submitted_requirements()
	{
		$button=Input::get('submitted_button');

		if($button=="Approve")
		{
			$userid=Input::get('get_userid');
			$sao_username=Input::get('get_sao_username');

			$requirements=RequirementsModel::where('userid',$userid);
			$requirements->update(['status'=>'true','sao_username'=>$sao_username]);
			$studentid="17-".rand (1000 , 9999)."-".rand(100,999);
			$student=StudentModel::where('userid',$userid);
			$student->update(['steps_status'=>'payment','studentid'=>$studentid]);

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

			$requirements=RequirementsModel::where('userid',$userid);
			$requirements->update(['status'=>'false','sao_username'=>$sao_username]);
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
		$userid=Input::get('get_userid');
		$sao=Session::get('sess_admin_sao_arr');
		$sao=unserialize(serialize($sao));


		$results=ResultsModel::where('userid','=',$userid)->first();
		$student=StudentModel::where('userid','=',$userid)->first();
		$interview=InterviewModel::where('userid','=',$userid)->first();
		return View::make('SaoAdminDashboard.SaoAdminInterview')->with('sao',$sao)->with('student',$student)->with('results',$results)->with('interview',$interview);
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
			$student->update(['steps_status'=>'Officially Enrolled']);
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

	//OAS Steps method
	public function oas_view_student()
	{
		$userid=Input::get('get_userid');
		$oas=Session::get('sess_admin_oas_arr');
		$oas=unserialize(serialize($oas));

		$student=StudentModel::where('userid','=',$userid)->first();
		return View::make('OasAdminDashboard.OasAdminViewStudent')->with('oas',$oas)->with('student',$student);
	}
	public function view_payment()
	{
		$userid=Input::get('get_userid');
		$oas=Session::get('sess_admin_oas_arr');
		$oas=unserialize(serialize($oas));

		$student=StudentModel::where('userid','=',$userid)->first();
		$payment=PaymentModel::where('userid','=',$userid)->first();

		return View::make('OasAdminDashboard.OasAdminPayment')->with('oas',$oas)->with('student',$student)->with('payment',$payment);
	}
	public function receive_payment()
	{
		$button=Input::get('receivepaymentbutton');

		if($button=="Receive Payment")
		{
			$userid=Input::get('get_userid');
			$oas_username=Input::get('get_oas_username');
			$receiptnumber=Input::get('receiptnumber');

			$payment=PaymentModel::where('userid',$userid);
			$payment->update(['paymentreceiptnum'=>$receiptnumber,'receivedpayment'=>'true','oas_username'=>$oas_username]);
			$student=StudentModel::where('userid',$userid);
			$student->update(['steps_status'=>'identification']);

			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);

			$admin = AdminModel::where('username','=',$oas_username)->first();
			Session::put('sess_admin_oas_arr',$admin);
			return Redirect::intended('http://localhost:8000/oashome');
		}
		elseif($button=="Decline")
		{
			$userid=Input::get('get_userid');
			$oas_username=Input::get('get_oas_username');
			
			$student=StudentModel::where('userid',$userid);
			$student->update(['steps_status'=>'declined']);

			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);

			$admin = AdminModel::where('username','=',$oas_username)->first();
			Session::put('sess_admin_oas_arr',$admin);

			return Redirect::intended('http://localhost:8000/oashome');
		}
	}

	public function get_identification()
	{
		$userid=Input::get('get_userid');
		$oas=Session::get('sess_admin_oas_arr');
		$oas=unserialize(serialize($oas));

		$student=StudentModel::where('userid','=',$userid)->first();
		$identification=IdentificationModel::where('userid','=',$userid)->first();

		return View::make('OasAdminDashboard.OasAdminIdentification')->with('oas',$oas)->with('student',$student)->with('identification',$identification);
	}
	public function claimed_identification()
	{
		$button=Input::get('getidentificationbutton');

		if($button=="Claimed Temporary ID")
		{
			$userid=Input::get('get_userid');
			$oas_username=Input::get('get_oas_username');
			

			$identification=IdentificationModel::where('userid',$userid);
			$identification->update(['getIdentification'=>'true','oas_username'=>$oas_username]);
			$student=StudentModel::where('userid',$userid);
			$student->update(['steps_status'=>'ExamScheduling']);

			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);

			$admin = AdminModel::where('username','=',$oas_username)->first();
			Session::put('sess_admin_oas_arr',$admin);
			return Redirect::intended('http://localhost:8000/oashome');
		}
		elseif($button=="Decline")
		{
			$userid=Input::get('get_userid');
			$oas_username=Input::get('get_oas_username');
			
			$student=StudentModel::where('userid',$userid);
			$student->update(['steps_status'=>'declined']);

			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);

			$admin = AdminModel::where('username','=',$oas_username)->first();
			Session::put('sess_admin_oas_arr',$admin);

			return Redirect::intended('http://localhost:8000/oashome');
		}
	}

	public function exam_scheduling()
	{
		$userid=Input::get('get_userid');
		$oas=Session::get('sess_admin_oas_arr');
		$oas=unserialize(serialize($oas));

		$student=StudentModel::where('userid','=',$userid)->first();
		$examschedule=ExamScheduleModel::where('userid','=',$userid)->first();

		return View::make('OasAdminDashboard.OasAdminExamScheduling')->with('oas',$oas)->with('student',$student)->with('examschedule',$examschedule);
	}

	public function oas_schedule_exam() //SAO personnel schedules an exam for student
	{
		$button=Input::get('chooseschedulebutton');

		if($button=="Choose Schedule")
		{
			$userid=Input::get('get_userid');
			$oas_username=Input::get('get_oas_username');
			$schedule=Input::get('examschedule');

			$examschedule=ExamScheduleModel::where('userid',$userid);
			$examschedule->update(['schedule'=>$schedule]);
			$student=StudentModel::where('userid',$userid);
			$student->update(['steps_status'=>'EntranceExam']);

			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);

			$admin = AdminModel::where('username','=',$oas_username)->first();
			Session::put('sess_admin_oas_arr',$admin);
			return Redirect::intended('http://localhost:8000/oashome');
		}
		elseif($button=="Decline")
		{
			$userid=Input::get('get_userid');
			$oas_username=Input::get('get_oas_username');
			
			$student=StudentModel::where('userid',$userid);
			$student->update(['steps_status'=>'declined']);

			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);

			$admin = AdminModel::where('username','=',$oas_username)->first();
			Session::put('sess_admin_oas_arr',$admin);

			return Redirect::intended('http://localhost:8000/oashome');
		}
	}
	//End of OAS Steps method

	//This is the method if student is the one choosing his/her schedule
	public function student_schedule_exam()
	{
		$userid=Input::get('get_userid');
		$schedule=Input::get('schedule');

		$examschedule=ExamScheduleModel::where('userid',$userid);
		$examschedule->update(['schedule'=>$schedule]);
		$student=StudentModel::where('userid',$userid);
		$student->update(['steps_status'=>'EntranceExam']);

		
		
		$oas=Session::get('sess_admin_oas_arr');
		$oas=unserialize(serialize($oas));

		if($oas!="")
		{
			$oas_username=$oas['username'];
			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);

			$admin = AdminModel::where('username','=',$oas_username)->first();
			Session::put('sess_admin_oas_arr',$admin);
		}
		else{
			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);
		}

		return Redirect::intended('http://localhost:8000/home');
	}
	//End of student_schedule_exam


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
		$student->update(['steps_status'=>'interview']);

		$student = StudentModel::where('userid','=',$userid)->first();
		Session::put('sess_student_arr',$student);

		$admin = AdminModel::where('username','=',$guidance_username)->first();
		Session::put('sess_admin_guidance_arr',$admin);
		return Redirect::intended('http://localhost:8000/guidancehome');
	}
}//End of StepsController class
?>
<?php
class OasController extends BaseController{

	//Start of functions for Transferee Students
	public function oas_view_student()
	{
		$userid=Input::get('get_userid');
		$oas=Session::get('sess_admin_oas_arr');
		$oas=unserialize(serialize($oas));

		$student=StudentModel::where('userid','=',$userid)->first();
		$transferee=TransfereeModel::where('userid','=',$userid)->first();
		return View::make('OasAdminDashboard.OasAdminViewStudent')->with('oas',$oas)->with('student',$student)->with('transferee',$transferee);
	}

	public function view_payment()
	{
		$userid=Input::get('get_userid');
		$oas=Session::get('sess_admin_oas_arr');
		$oas=unserialize(serialize($oas));

		$student=StudentModel::where('userid','=',$userid)->first();
		$transferee=TransfereeModel::where('userid','=',$userid)->first();
		$payment=PaymentModel::where('userid','=',$userid)->first();

		return View::make('OasAdminDashboard.OasAdminPayment')->with('oas',$oas)->with('student',$student)->with('transferee',$transferee)->with('payment',$payment);
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
			$student->update(['steps_status'=>'identification','step_number'=>4]);

			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);

			$admin = AdminModel::where('username','=',$oas_username)->first();
			Session::put('sess_admin_oas_arr',$admin);
			return Redirect::intended('/oashome');
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

			return Redirect::intended('/oashome');
		}
	}

	public function get_identification()
	{
		$userid=Input::get('get_userid');
		$oas=Session::get('sess_admin_oas_arr');
		$oas=unserialize(serialize($oas));

		$student=StudentModel::where('userid','=',$userid)->first();
		$transferee=TransfereeModel::where('userid','=',$userid)->first();
		$identification=IdentificationModel::where('userid','=',$userid)->first();

		return View::make('OasAdminDashboard.OasAdminIdentification')->with('oas',$oas)->with('student',$student)->with('transferee',$transferee)->with('identification',$identification);
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
			$student->update(['steps_status'=>'ExamScheduling','step_number'=>5]);

			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);

			$admin = AdminModel::where('username','=',$oas_username)->first();
			Session::put('sess_admin_oas_arr',$admin);
			return Redirect::intended('/oashome');
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

			return Redirect::intended('/oashome');
		}
	}

	public function exam_scheduling()
	{
		$userid=Input::get('get_userid');
		$oas=Session::get('sess_admin_oas_arr');
		$oas=unserialize(serialize($oas));

		$student=StudentModel::where('userid','=',$userid)->first();
		$transferee=TransfereeModel::where('userid','=',$userid)->first();
		$examschedule=ExamScheduleModel::where('userid','=',$userid)->first();

		return View::make('OasAdminDashboard.OasAdminExamScheduling')->with('oas',$oas)->with('student',$student)->with('transferee',$transferee)->with('examschedule',$examschedule);
	}

	public function oas_schedule_exam() //OAS personnel schedules an exam for student
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
			$student->update(['steps_status'=>'EntranceExam','step_number'=>6]);

			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);

			$admin = AdminModel::where('username','=',$oas_username)->first();
			Session::put('sess_admin_oas_arr',$admin);
			return Redirect::intended('/oashome');
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

			return Redirect::intended('/oashome');
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
		$student->update(['steps_status'=>'EntranceExam','step_number'=>6]);

		
		
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

		return Redirect::intended('/home');
	}
	//End of student_schedule_exam

	//

	//End of functions for Transferee Students

	//

	//Start of functions for freshmen students
	public function oas_get_freshmen_userid()
	{
		$steps_status=Input::get('get_steps_status');
		$userid=Input::get('get_userid');
		Session::put('sess_oas_freshmen_userid',$userid);

		if($steps_status=="requirements")
		{
			return Redirect::intended('/oasviewfreshmenrequirements');
		}
		elseif($steps_status=="payment") 
		{
			return Redirect::intended('/oasviewfreshmenpayment');
		}
		elseif($steps_status=="identification") 
		{
			return Redirect::intended('/viewfreshmenidentification');
		}
		elseif($steps_status=="ExamScheduling")
		{
			return Redirect::intended('/freshmenexamscheduling');
			
		}
		elseif($steps_status=="interview")
		{
			return Redirect::intended('/viewfreshmeninterview');
		}
		else
		{
			return Redirect::intended('/oasviewfreshmen');
		}
		
	}

	public function oas_view_freshmen_requirements()
	{
		$userid=Session::get('sess_oas_freshmen_userid');
		$oas=Session::get('sess_admin_oas_arr');
		$oas=unserialize(serialize($oas));

		$student=StudentModel::where('userid','=',$userid)->first();
		$freshmenrequirements=FreshmenRequirementsModel::where('userid','=',$userid)->first();
		$freshmen=FreshmenModel::where('userid','=',$userid)->first();
		
		return View::make('OasAdminDashboard.OasAdminViewFreshmenRequirements')->with('oas',$oas)->with('student',$student)->with('freshmen',$freshmen)->with('requirements',$freshmenrequirements);
	}

	public function submit_freshmen_requirements()
	{
		$userid=Input::get('get_userid');
		$oas_username=Input::get('get_oas_username');
		$highschoolcard=false;
		$gm=false;
		$nso=false;
		$ncae=false;

		if(Input::get('highschoolcard')!="")
		{
			//$cot=true;
			$freshmen_requirements=FreshmenRequirementsModel::where('userid',$userid);
			$freshmen_requirements->update(['highschoolcard'=>'true']);
		}
		if(Input::get('gm')!="")
		{
			//$gm=true;
			$freshmen_requirements=FreshmenRequirementsModel::where('userid',$userid);
			$freshmen_requirements->update(['GM'=>'true']);
		}
		if(Input::get('nso')!="")
		{
			//$nso=true;
			$freshmen_requirements=FreshmenRequirementsModel::where('userid',$userid);
			$freshmen_requirements->update(['NSO'=>'true']);
		}
		if(Input::get('ncae')!="")
		{
			//$tor=true;
			$freshmen_requirements=FreshmenRequirementsModel::where('userid',$userid);
			$freshmen_requirements->update(['NCAE'=>'true']);
		}
		
		$freshmen_requirements=FreshmenRequirementsModel::where('userid',$userid);
		$freshmen_requirements->update(['oas_username'=>$oas_username]);

		$student = StudentModel::where('userid','=',$userid)->first();
		Session::put('sess_student_arr',$student); //replace the old session for student user. So that after this transaction, student can refresh his page and page loads updated data
		
		$admin = AdminModel::where('username','=',$oas_username)->first();
		Session::put('sess_admin_oas_arr',$admin); //same to student, this also replaces the old admin data.

		if($student['steps_status']=="requirements")
		{
			return Redirect::intended('/oasviewfreshmenrequirements');
		}
		else if($student['steps_status']=="interview")
		{
			return Redirect::intended('/viewfreshmeninterview');
		}
		
	}
	public function approve_freshmen_requirements()
	{
		$button=Input::get('submitted_button');

		if($button=="Approve")
		{
			$userid=Input::get('get_userid');
			$studentid=Input::get('studentid');
			$comment=Input::get('requirements_comment');
			$oas_username=Input::get('get_oas_username');

			$freshmen_requirements=FreshmenRequirementsModel::where('userid',$userid);
			$freshmen_requirements->update(['status'=>'true','requirements_comment'=>$comment,'oas_username'=>$oas_username]);
			
			$student=StudentModel::where('userid',$userid);
			$student->update(['steps_status'=>'payment','studentid'=>$studentid,'step_number'=>2]);

			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);

			$admin = AdminModel::where('username','=',$oas_username)->first();
			Session::put('sess_admin_oas_arr',$admin);


			return Redirect::intended('/oashome');
		}
		elseif($button=="Decline")
		{
			$userid=Input::get('get_userid');
			$oas_username=Input::get('get_oas_username');

			$freshmen_requirements=FreshmenRequirementsModel::where('userid',$userid);
			$freshmen_requirements->update(['status'=>'false','oas_username'=>$oas_username]);
			$student=StudentModel::where('userid',$userid);
			$student->update(['steps_status'=>'declined']);

			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);

			$admin = AdminModel::where('username','=',$oas_username)->first();
			Session::put('sess_admin_oas_arr',$admin);
			return Redirect::intended('/oashome');
		}
	}

	public function oas_view_freshmen_payment()
	{
		$userid=Session::get('sess_oas_freshmen_userid');
		$oas=Session::get('sess_admin_oas_arr');
		$oas=unserialize(serialize($oas));

		$student=StudentModel::where('userid','=',$userid)->first();
		$freshmen=FreshmenModel::where('userid','=',$userid)->first();
		$payment=PaymentModel::where('userid','=',$userid)->first();
		
		return View::make('OasAdminDashboard.OasAdminViewFreshmenPayment')->with('oas',$oas)->with('student',$student)->with('freshmen',$freshmen)->with('payment',$payment);
	}

	public function receive_freshmen_payment()
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
			$student->update(['steps_status'=>'identification','step_number'=>3]);

			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);

			$admin = AdminModel::where('username','=',$oas_username)->first();
			Session::put('sess_admin_oas_arr',$admin);
			return Redirect::intended('/oashome');
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

			return Redirect::intended('/oashome');
		}
	}

	public function get_freshmen_identification()
	{
		$userid=Session::get('sess_oas_freshmen_userid');
		$oas=Session::get('sess_admin_oas_arr');
		$oas=unserialize(serialize($oas));

		$student=StudentModel::where('userid','=',$userid)->first();
		$freshmen=FreshmenModel::where('userid','=',$userid)->first();
		$identification=IdentificationModel::where('userid','=',$userid)->first();

		return View::make('OasAdminDashboard.OasAdminFreshmenIdentification')->with('oas',$oas)->with('student',$student)->with('freshmen',$freshmen)->with('identification',$identification);
	}
	public function claimed_freshmen_identification()
	{
		$button=Input::get('getidentificationbutton');

		if($button=="Claimed Temporary ID")
		{
			$userid=Input::get('get_userid');
			$oas_username=Input::get('get_oas_username');
			

			$identification=IdentificationModel::where('userid',$userid);
			$identification->update(['getIdentification'=>'true','oas_username'=>$oas_username]);
			$student=StudentModel::where('userid',$userid);
			$student->update(['steps_status'=>'ExamScheduling','step_number'=>4]);

			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);

			$admin = AdminModel::where('username','=',$oas_username)->first();
			Session::put('sess_admin_oas_arr',$admin);
			return Redirect::intended('/oashome');
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

			return Redirect::intended('/oashome');
		}
	}

	//This is the method if OAS is the one choosing the entrance exam schedule for freshmen student

	public function oas_freshmen_view_exam_scheduling()
	{
		$userid=Session::get('sess_oas_freshmen_userid');
		$oas=Session::get('sess_admin_oas_arr');
		$oas=unserialize(serialize($oas));

		$student=StudentModel::where('userid','=',$userid)->first();
		$freshmen=FreshmenModel::where('userid','=',$userid)->first();
		$examschedule=ExamScheduleModel::where('userid','=',$userid)->first();

		return View::make('OasAdminDashboard.OasAdminViewFreshmenExamScheduling')->with('oas',$oas)->with('student',$student)->with('freshmen',$freshmen)->with('examschedule',$examschedule);
	}
	//end of oas_freshmen_view_exam_scheduling

	public function oas_freshmen_schedule_exam() //OAS personnel schedules an exam for freshmen student
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
			$student->update(['steps_status'=>'EntranceExam','step_number'=>5]);

			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);

			$admin = AdminModel::where('username','=',$oas_username)->first();
			Session::put('sess_admin_oas_arr',$admin);
			return Redirect::intended('/oashome');
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

			return Redirect::intended('/oashome');
		}
	}

	//This is the method if freshmen student is the one choosing his/her schedule
	public function freshmen_student_schedule_exam()
	{
		$userid=Input::get('get_userid');
		$schedule=Input::get('schedule');

		$examschedule=ExamScheduleModel::where('userid',$userid);
		$examschedule->update(['schedule'=>$schedule]);
		$student=StudentModel::where('userid',$userid);
		$student->update(['steps_status'=>'EntranceExam','step_number'=>5]);

		
		
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

		return Redirect::intended('/home');
	}
	//End of freshmen_student_schedule_exam

	public function oas_view_freshmen_student() //Display freshmen student
	{
		$userid=Session::get('sess_oas_freshmen_userid');
		$oas=Session::get('sess_admin_oas_arr');
		$oas=unserialize(serialize($oas));

		$student=StudentModel::where('userid','=',$userid)->first();
		$freshmen=FreshmenModel::where('userid','=',$userid)->first();
		
		return View::make('OasAdminDashboard.OasAdminViewFreshmen')->with('oas',$oas)->with('student',$student)->with('freshmen',$freshmen);
		
	}

	public function oas_freshmen_view_interview()
	{
		$userid=Session::get('sess_oas_freshmen_userid');
		$oas=Session::get('sess_admin_oas_arr');
		$oas=unserialize(serialize($oas));

		$freshmen_requirements=FreshmenRequirementsModel::where('userid','=',$userid)->first();
		$results=ResultsModel::where('userid','=',$userid)->first();
		$student=StudentModel::where('userid','=',$userid)->first();
		$freshmen=FreshmenModel::where('userid','=',$userid)->first();
		$interview=InterviewModel::where('userid','=',$userid)->first();
		return View::make('OasAdminDashboard.OasAdminViewFreshmenInterview')->with('oas',$oas)->with('requirements',$freshmen_requirements)->with('student',$student)->with('freshmen',$freshmen)->with('results',$results)->with('interview',$interview);
	}

	public function oas_freshmen_interview_post()
	{
		$button=Input::get('interview_button');

		if($button=="Approve")
		{
			$comment=Input::get('comment');
			$userid=Input::get('get_userid');
			$oas_username=Input::get('get_oas_username');

			$interview=InterviewModel::where('userid',$userid);
			$interview->update(['sao_username'=>$oas_username,'status'=>'true','interview_comment'=>$comment]);
			$student=StudentModel::where('userid',$userid);
			$student->update(['steps_status'=>'Officially Enrolled','step_number'=>7]);
			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);

			$admin = AdminModel::where('username','=',$oas_username)->first();
			Session::put('sess_admin_oas_arr',$admin);


			return Redirect::intended('/oashome');
		}
		elseif($button=="Decline")
		{
			$userid=Input::get('get_userid');
			$sao_username=Input::get('get_sao_username');

			$student=StudentModel::where('userid',$userid);
			$student->update(['steps_status'=>'declined']);

			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);

			$admin = AdminModel::where('username','=',$oas_username)->first();
			Session::put('sess_admin_oas_arr',$admin);
			return Redirect::intended('/oashome');
		}
	}
	//end of functions for freshmen students
}
?>
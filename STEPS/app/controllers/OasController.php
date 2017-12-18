<?php
class OasController extends BaseController{

	//OAS Steps method
	public function oas_view_student()
	{
		$userid=Input::get('get_userid');
		$oas=Session::get('sess_admin_oas_arr');
		$oas=unserialize(serialize($oas));

		$student=StudentModel::where('userid','=',$userid)->first();
		$transferee=TransfereeModel::where('userid','=',$userid)->first();
		return View::make('OasAdminDashboard.OasAdminViewStudent')->with('oas',$oas)->with('student',$student)->with('transferee',$transferee);
	}

	public function oas_get_freshmen_userid()
	{
		$userid=Input::get('get_userid');
		Session::put('sess_oas_freshmen_userid',$userid);

		return Redirect::intended('http://localhost:8000/oasviewfreshmen');
	}
	public function oas_view_freshmen_student()
	{
		$userid=Session::get('sess_oas_freshmen_userid');
		$oas=Session::get('sess_admin_oas_arr');
		$oas=unserialize(serialize($oas));

		$student=StudentModel::where('userid','=',$userid)->first();
		$freshmen=FreshmenModel::where('userid','=',$userid)->first();
		
		return View::make('OasAdminDashboard.OasAdminViewFreshmen')->with('oas',$oas)->with('student',$student)->with('freshmen',$freshmen);
		
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
		$transferee=TransfereeModel::where('userid','=',$userid)->first();
		$examschedule=ExamScheduleModel::where('userid','=',$userid)->first();

		return View::make('OasAdminDashboard.OasAdminExamScheduling')->with('oas',$oas)->with('student',$student)->with('transferee',$transferee)->with('examschedule',$examschedule);
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
			$student->update(['steps_status'=>'EntranceExam','step_number'=>6]);

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

		return Redirect::intended('http://localhost:8000/home');
	}
	//End of student_schedule_exam



}
?>
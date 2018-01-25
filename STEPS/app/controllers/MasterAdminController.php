<?php
class MasterAdminController extends BaseController{

	

	public function master_add_admin()
	{
		$master_admin_username=Input::get('master_admin_username');
		$firstname=Input::get('firstname');
		$middlename=Input::get('middlename');
		$lastname=Input::get('lastname');
		$username=Input::get('username');
		$password=Input::get('password');
		$cpassword=Input::get('confirmpassword');
		$birth_month=Input::get('birth-month');
		$birth_day=Input::get('birth-day');
		$birth_year=Input::get('birth-year');
		$birthday=$birth_month."-".$birth_day."-".$birth_year;
		$email=Input::get('email');
		$contact=Input::get('contact');
		$department=Input::get('department');
		$position=Input::get('position');
		$past_university=Input::get('pastuniversity');
		$education=Input::get('education');

		$userid=bin2hex(mcrypt_create_iv(22, MCRYPT_DEV_URANDOM))."-".$username;

		$pw=md5($password);
		//$adminid=
		if($password==$cpassword)
		{
			$admin=new AdminModel;
			$admin->userid=$userid;
			$admin->adminid=$userid;
			$admin->firstname=$firstname;
			$admin->middlename=$middlename;
			$admin->lastname=$lastname;
			$admin->username=$username;
			$admin->password=$pw;
			$admin->email=$email;
			$admin->contact=$contact;
			$admin->department=$department;
			$admin->position=$position;
			$admin->birthdate=$birthday;
			$admin->education=$education;
			$admin->pastuniversity=$past_university;
			$admin->save();

			//$message="Thank you for registering to STEPS!";
			$admin = AdminModel::where('username','=',$master_admin_username)->first();
			Session::put('sess_admin_masteradmin_arr',$admin);
			return Redirect::intended('/masteradminhome');
		}
	}

	public function master_add_student()
	{
		try
		{
			$master_admin_username=Input::get('master_admin_username');
			$firstname=Input::get('firstname');
			$middlename=Input::get('middlename');
			$lastname=Input::get('lastname');
			$username=Input::get('username');
			$email=Input::get('email');
			$password=Input::get('password');
			$cpassword=Input::get('cpassword');
			$password=md5($password);
			$birth_month=Input::get('birth-month');
			$birth_day=Input::get('birth-day');
			$birth_year=Input::get('birth-year');

			$birthplace=Input::get('birthplace');
			$gender=Input::get('gender');
			$civilstatus=Input::get('civilstatus');
			$contact=Input::get('contact');
			$homeaddress=Input::get('homeaddress');
			$provincialaddress=Input::get('provincialaddress');

			$year_entered=Input::get('year-entered');
			$semester=Input::get('semester');
			$studenttype=Input::get('studenttype');

			$userid=bin2hex(mcrypt_create_iv(22, MCRYPT_DEV_URANDOM))."-".$username;

			
			if(StudentModel::where('username','=',$username)->exists())
			{
				$message="username already existed";
				Session::put('message',$message);
				return Redirect::intended('/masteradminhome');
			}
			else{
				$studentDB=new StudentModel;
				$studentDB->userid=$userid;
				$studentDB->studentid="";
				$studentDB->firstname=$firstname;
				$studentDB->middlename=$middlename;
				$studentDB->lastname=$lastname;
				$studentDB->username=$username;
				$studentDB->email=$email;
				//$studentDB->password=Hash::make($password);
				$studentDB->password=$password;
				
				$studentDB->birthdate=$birth_month."-".$birth_day."-".$birth_year;
				$studentDB->birthplace=$birthplace;
				$studentDB->gender=$gender;
				$studentDB->civilstatus=$civilstatus;
				$studentDB->contact=$contact;
				$studentDB->homeaddress=$homeaddress;
				$studentDB->provincialaddress=$provincialaddress;
				$studentDB->schoolyear=$year_entered;
				$studentDB->semester=$semester;
				$studentDB->studenttype=$studenttype;

				if($studenttype=="Freshmen")
				{
					$freshmen_highschool=Input::get('freshmen_highschool');
					$freshmen_tocourse=Input::get('freshmen_tocourse');

					$department="";
					if($freshmen_tocourse=="Bachelors of Science in Information Technology" || $freshmen_tocourse=="Bachelors of Science in Computer Science")
					{
						$department="College of Computer Science";
					}
					else{
						$department="";
					}

					$freshmenDB=new FreshmenModel;
					$freshmenDB->userid=$userid;
					$freshmenDB->highschool=$freshmen_highschool;
					$freshmenDB->tocourse=$freshmen_tocourse;
					$freshmenDB->save();

					$freshmen_requirements=new FreshmenRequirementsModel;
					$freshmen_requirements->requirementsid=bin2hex(mcrypt_create_iv(15, MCRYPT_DEV_URANDOM))."freshmenrequirements";
					$freshmen_requirements->userid=$userid;
					$freshmen_requirements->oas_username="";
					$freshmen_requirements->highschoolcard="false";
					$freshmen_requirements->GM="false";
					$freshmen_requirements->NSO="false";
					$freshmen_requirements->NCAE="false";
					$freshmen_requirements->save();

					$payment=new PaymentModel;
					$payment->paymentid=bin2hex(mcrypt_create_iv(15, MCRYPT_DEV_URANDOM))."payment";
					$payment->userid=$userid;
					$payment->oas_username="";
					$payment->paymentreceiptnum="";
					$payment->receivedpayment="false";
					$payment->save();

					$identification=new IdentificationModel;
					$identification->userid=$userid;
					$identification->oas_username="";
					$identification->getIdentification="false";
					$identification->save();

					$examschedule=new ExamScheduleModel;
					$examschedule->examscheduleid=bin2hex(mcrypt_create_iv(15, MCRYPT_DEV_URANDOM))."examschedule";
					$examschedule->userid=$userid;
					$examschedule->schedule="";
					$examschedule->save();

					$entranceexam=new EntranceExamModel;
					$entranceexam->entranceexamid=bin2hex(mcrypt_create_iv(15, MCRYPT_DEV_URANDOM))."exam";
					$entranceexam->userid=$userid;
					$entranceexam->guidance_username="";
					$entranceexam->schedule="";
					$entranceexam->status="false";
					$entranceexam->save();

					$results=new ResultsModel;
					$results->resultid=bin2hex(mcrypt_create_iv(15, MCRYPT_DEV_URANDOM))."results";
					$results->userid=$userid;
					$results->guidance_username="";
					$results->IQTest="";
					$results->MathTest="";
					$results->EnglishTest="";
					$results->status="false";
					$results->save();

					//Step5 interview
					$interview=new InterviewModel;
					$interview->interviewid=bin2hex(mcrypt_create_iv(15, MCRYPT_DEV_URANDOM))."interview";
					$interview->userid=$userid;
					$interview->schedule="";
					$interview->sao_username="";
					$interview->status="false";
					$interview->interview_comment="";
					$interview->save();


					$studentDB->department=$department;
					$studentDB->steps_status="requirements";
					$studentDB->step_number=1;
				} //end of if($studenttype=="Freshmen")
				else if($studenttype=="Transferee")
				{

					$tocourse=Input::get('tocourse');
					$fromcourse=Input::get('fromcourse');
					$fromschool=Input::get('fromschool');

					$department="";
					if($tocourse=="Bachelors of Science in Information Technology" || $tocourse=="Bachelors of Science in Computer Science")
					{
						$department="College of Computer Studies";
					}
					else{
						$department="";
					}

					$transfereeDB=new TransfereeModel;
					$transfereeDB->userid=$userid;
					$transfereeDB->tocourse=$tocourse;
					$transfereeDB->fromcourse=$fromcourse;
					$transfereeDB->fromschool=$fromschool;
					$transfereeDB->save();

					$evaluation=new EvaluationModel;
					$evaluation->evaluationid=bin2hex(mcrypt_create_iv(15, MCRYPT_DEV_URANDOM))."evaluation";
					$evaluation->userid=$userid;
					$evaluation->evaluator_name="";
					$evaluation->course=$tocourse;
					$evaluation->department=$department;
					$evaluation->status="false";
					$evaluation->comment="";
					$evaluation->save();

					$transferee_requirements=new TransfereeRequirementsModel;
					$transferee_requirements->requirementsid=bin2hex(mcrypt_create_iv(15, MCRYPT_DEV_URANDOM))."transfereerequirements";
					$transferee_requirements->userid=$userid;
					$transferee_requirements->sao_username="";
					$transferee_requirements->NSO="false";
					$transferee_requirements->COT="false";
					$transferee_requirements->GM="false";
					$transferee_requirements->TOR="false";
					$transferee_requirements->RF="false";
					$transferee_requirements->requirements_comment="";
					$transferee_requirements->status="false";
					$transferee_requirements->save();

					$payment=new PaymentModel;
					$payment->paymentid=bin2hex(mcrypt_create_iv(15, MCRYPT_DEV_URANDOM))."payment";
					$payment->userid=$userid;
					$payment->oas_username="";
					$payment->paymentreceiptnum="";
					$payment->receivedpayment="false";
					$payment->save();

					$identification=new IdentificationModel;
					$identification->userid=$userid;
					$identification->oas_username="";
					$identification->getIdentification="false";
					$identification->save();

					$examschedule=new ExamScheduleModel;
					$examschedule->examscheduleid=bin2hex(mcrypt_create_iv(15, MCRYPT_DEV_URANDOM))."examschedule";
					$examschedule->userid=$userid;
					$examschedule->schedule="";
					$examschedule->save();

					$entranceexam=new EntranceExamModel;
					$entranceexam->entranceexamid=bin2hex(mcrypt_create_iv(15, MCRYPT_DEV_URANDOM))."exam";
					$entranceexam->userid=$userid;
					$entranceexam->guidance_username="";
					$entranceexam->schedule="";
					$entranceexam->status="false";
					$entranceexam->save();

					$results=new ResultsModel;
					$results->resultid=bin2hex(mcrypt_create_iv(15, MCRYPT_DEV_URANDOM))."results";
					$results->userid=$userid;
					$results->guidance_username="";
					$results->IQTest="";
					$results->MathTest="";
					$results->EnglishTest="";
					$results->status="false";
					$results->save();

					//Step5 interview
					$interview=new InterviewModel;
					$interview->interviewid=bin2hex(mcrypt_create_iv(15, MCRYPT_DEV_URANDOM))."interview";
					$interview->userid=$userid;
					$interview->schedule="";
					$interview->sao_username="";
					$interview->status="false";
					$interview->interview_comment="";
					$interview->save();

					$studentDB->department=$department;
					$studentDB->steps_status="evaluation";
					$studentDB->step_number=1;
				} //end of else if($studenttype=="Transferee")
				
				
				$studentDB->save();

				//$message="Thank you for registering to STEPS!";
				$admin = AdminModel::where('username','=',$master_admin_username)->first();
				Session::put('sess_admin_masteradmin_arr',$admin);
				return Redirect::intended('/masteradminhome');
				
			}
			
		}
		catch(Exception $e)
		{
			echo $e;
		}
	}

	public function master_get_admin_userid()
	{
		$master_admin_username=Input::get('master_admin_username');
		$userid=Input::get('get_userid');

		Session::put('sess_masteradmin_username',$master_admin_username);
		Session::put('sess_masteradmin_fetched_admin_userid',$userid);

		return Redirect::intended('/masterviewadmin');
	}

	public function master_get_student_userid()
	{
		$master_admin_username=Input::get('master_admin_username');
		$userid=Input::get('get_userid');

		Session::put('sess_masteradmin_username',$master_admin_username);
		Session::put('sess_masteradmin_fetched_student_userid',$userid);
		return Redirect::intended('/masterviewstudent');
	}

	public function master_view_admin()
	{
		$userid=Session::get('sess_masteradmin_fetched_admin_userid');
		$master_admin_username=Session::get('sess_masteradmin_username');
		
		$admin=AdminModel::where('userid','=',$userid)->first();
		$masteradmin=AdminModel::where('username','=',$master_admin_username)->first();

		//Session::forget('sess_masteradmin_fetched_admin_userid');
		//Session::forget('sess_masteradmin_username');
		
		return View::make('MasterAdminDashboard.MasterAdminViewAdmin')->with('admin',$admin)->with('masteradmin',$masteradmin);

	}

	public function master_edit_admin()
	{
		$master_admin_username=Input::get('master_admin_username');
		$userid=Input::get('get_userid');

		$firstname=Input::get('firstname');
		$middlename=Input::get('middlename');
		$lastname=Input::get('lastname');
		$username=Input::get('username');
		$birthdate=Input::get('editbirthdate');
		$email=Input::get('email');
		$contact=Input::get('contact');
		$department=Input::get('department');
		$position=Input::get('position');
		$pastuniversity=Input::get('pastuniversity');
		$education=Input::get('education');

		$admin=AdminModel::where('userid',$userid);
		$admin->update(['firstname'=>$firstname,'middlename'=>$middlename,'lastname'=>$lastname,'username'=>$username,'birthdate'=>$birthdate,'email'=>$email,'contact'=>$contact,'department'=>$department,'position'=>$position,'pastuniversity'=>$pastuniversity,'education'=>$education]);


		Session::put('sess_masteradmin_username',$master_admin_username);
		Session::put('sess_masteradmin_fetched_admin_userid',$userid);

		return Redirect::intended('/masterviewadmin');
	}

	public function master_view_student()
	{
		$userid=Session::get('sess_masteradmin_fetched_student_userid');
		$master_admin_username=Session::get('sess_masteradmin_username');
		
		$masteradmin=AdminModel::where('username','=',$master_admin_username)->first();
		$student=StudentModel::where('userid','=',$userid)->first();
		
		if($student['studenttype']=="Transferee")
		{
			$transferee=TransfereeModel::where('userid','=',$userid)->first();

			//Session::forget('sess_masteradmin_fetched_student_userid');
			//Session::forget('sess_masteradmin_username');
			
			return View::make('MasterAdminDashboard.MasterAdminViewTransferee')->with('masteradmin',$masteradmin)->with('student',$student)->with('transferee',$transferee);
		}
		else if($student['studenttype']=="Freshmen")
		{
			$freshmen=FreshmenModel::where('userid','=',$userid)->first();

			//Session::forget('sess_masteradmin_fetched_student_userid');
			//Session::forget('sess_masteradmin_username');
			
			return View::make('MasterAdminDashboard.MasterAdminViewFreshmen')->with('masteradmin',$masteradmin)->with('student',$student)->with('freshmen',$freshmen);
		
		}
	}

	public function master_edit_freshmen()
	{
		$userid=Input::get('get_userid');
		$master_admin_username=Input::get('master_admin_username');

		$edited_firstname=Input::get('editfirstname');
		$edited_middlename=Input::get('editmiddlename');
		$edited_lastname=Input::get('editlastname');
		$edited_email=Input::get('editemail');
		$edited_birthdate=Input::get('editbirthdate');
		$edited_birthplace=Input::get('editbirthplace');
		$edited_gender=Input::get('editgender');
		$edited_civilstatus=Input::get('editcivilstatus');
		$edited_contact=Input::get('editcontact');
		$edited_homeaddress=Input::get('edithomeaddress');
		$edited_provincialaddress=Input::get('editprovincialaddress');
		$edited_year_entered=Input::get('edityear-entered');
		$edited_semester=Input::get('editsemester');
		$edited_tocourse=Input::get('edittocourse');
		$edited_highschool=Input::get('edithighschool');

		$department="";
		if($edited_tocourse=="Bachelors of Science in Information Technology" || $edited_tocourse=="Bachelors of Science in Computer Science")
		{
			$department="College of Computer Studies";
		}
		else{
			$department="";
		}

		$student=StudentModel::where('userid',$userid);
			$student->update(['firstname'=>$edited_firstname,'middlename'=>$edited_middlename,'lastname'=>$edited_lastname,'email'=>$edited_email,'birthdate'=>$edited_birthdate,'birthplace'=>$edited_birthplace,'gender'=>$edited_gender,'civilstatus'=>$edited_civilstatus,'contact'=>$edited_contact,'homeaddress'=>$edited_homeaddress,'provincialaddress'=>$edited_provincialaddress,'schoolyear'=>$edited_year_entered,'semester'=>$edited_semester,'department'=>$department]);

		$freshmen=FreshmenModel::where('userid',$userid);
		$freshmen->update(['highschool'=>$edited_highschool,'tocourse'=>$edited_tocourse]);

		Session::put('sess_masteradmin_username',$master_admin_username);
		Session::put('sess_masteradmin_fetched_admin_userid',$userid);

		return Redirect::intended('/masterviewstudent');
	}

	public function master_edit_transferee()
	{
		try
		{
			$userid=Input::get('get_userid');
			$master_admin_username=Input::get('master_admin_username');
			$edited_firstname=Input::get('editfirstname');
			$edited_middlename=Input::get('editmiddlename');
			$edited_lastname=Input::get('editlastname');
			$edited_email=Input::get('editemail');
			$edited_birthdate=Input::get('editbirthdate');
			$edited_birthplace=Input::get('editbirthplace');
			$edited_gender=Input::get('editgender');
			$edited_civilstatus=Input::get('editcivilstatus');
			$edited_contact=Input::get('editcontact');
			$edited_homeaddress=Input::get('edithomeaddress');
			$edited_provincialaddress=Input::get('editprovincialaddress');
			$edited_year_entered=Input::get('edityear-entered');
			$edited_semester=Input::get('editsemester');
			$edited_tocourse=Input::get('edittocourse');
			$edited_fromcourse=Input::get('editfromcourse');
			$edited_fromschool=Input::get('editfromschool');

			$department="";
			if($edited_tocourse=="Bachelors of Science in Information Technology" || $edited_tocourse=="Bachelors of Science in Computer Science")
			{
				$department="College of Computer Studies";
			}
			else{
				$department="";
			}

			$student=StudentModel::where('userid',$userid);
			$student->update(['firstname'=>$edited_firstname,'middlename'=>$edited_middlename,'lastname'=>$edited_lastname,'email'=>$edited_email,'birthdate'=>$edited_birthdate,'birthplace'=>$edited_birthplace,'gender'=>$edited_gender,'civilstatus'=>$edited_civilstatus,'contact'=>$edited_contact,'homeaddress'=>$edited_homeaddress,'provincialaddress'=>$edited_provincialaddress,'schoolyear'=>$edited_year_entered,'semester'=>$edited_semester,'department'=>$department]);

			$transferee=TransfereeModel::where('userid',$userid);
			$transferee->update(['tocourse'=>$edited_tocourse,'fromcourse'=>$edited_fromcourse,'fromschool'=>$edited_fromschool]);
			
			Session::put('sess_masteradmin_username',$master_admin_username);
			Session::put('sess_masteradmin_fetched_admin_userid',$userid);

			return Redirect::intended('/masterviewstudent');
			
		}
		catch(Exception $e)
		{
			echo $e;
		}
	}

	public function master_remove_admin()
	{
		$admin_userid=Input::get('get_userid');
		$masteradmin_username=Input::get('master_admin_username');

		DB::table('admin')->where('userid', '=', $admin_userid)->delete();

		$masteradmin=AdminModel::where('username','=',$masteradmin_username)->first();
		Session::put('sess_admin_masteradmin_arr',$masteradmin);

		return Redirect::intended('/masteradminhome');
	}

	public function master_remove_student()
	{
		$student_userid=Input::get('get_userid');
		$masteradmin_username=Input::get('master_admin_username');
		$studenttype=Input::get('get_studenttype');

		DB::table('student')->where('userid', '=', $student_userid)->delete();
		DB::table('results')->where('userid', '=', $student_userid)->delete();
		DB::table('payment')->where('userid', '=', $student_userid)->delete();
		DB::table('interview')->where('userid', '=', $student_userid)->delete();
		DB::table('identification')->where('userid', '=', $student_userid)->delete();
		DB::table('examschedule')->where('userid', '=', $student_userid)->delete();
		DB::table('evaluation')->where('userid', '=', $student_userid)->delete();
		DB::table('entranceexam')->where('userid', '=', $student_userid)->delete();

		if($studenttype=="Transferee")
		{
			DB::table('transferee')->where('userid', '=', $student_userid)->delete();
			DB::table('transferee_requirements')->where('userid', '=', $student_userid)->delete();
		}
		else if($studenttype=="Freshmen")
		{
			DB::table('freshmen')->where('userid', '=', $student_userid)->delete();
			DB::table('freshmen_requirements')->where('userid', '=', $student_userid)->delete();
		}

		$masteradmin=AdminModel::where('username','=',$masteradmin_username)->first();
		Session::put('sess_admin_masteradmin_arr',$masteradmin);

		return Redirect::intended('/masteradminhome');
	}
}
?>
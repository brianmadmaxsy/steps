<?php
class RegistrationController extends BaseController{
	
	public function student_register()
	{
		try
		{
			
			$firstname=Input::get('firstname');
			$middlename=Input::get('middlename');
			$lastname=Input::get('lastname');
			$username=Input::get('username');
			$email=Input::get('email');
			$password=Input::get('password');
			$cpassword=Input::get('cpassword');

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

			$tocourse=Input::get('tocourse');
			$fromcourse=Input::get('fromcourse');
			$fromschool=Input::get('fromschool');

			$userid=bin2hex(mcrypt_create_iv(22, MCRYPT_DEV_URANDOM))."-".$username;

			$department="";
			if($tocourse=="Bachelors of Science in Information Technology" || $tocourse=="Bachelors of Science in Computer Science")
			{
				$department="College of Computer Science";
			}
			else{
				$department="";
			}

			if($password==$cpassword)
			{
				$studentDB=new StudentModel;
				$studentDB->userid=$userid;
				$studentDB->studentid="";
				$studentDB->firstname=$firstname;
				$studentDB->middlename=$middlename;
				$studentDB->lastname=$lastname;
				$studentDB->username=$username;
				$studentDB->email=$email;
				$studentDB->password=Hash::make($password);
				$studentDB->birthdate=$birth_month."-".$birth_day."-".$birth_year;
				$studentDB->birthplace=$birthplace;
				$studentDB->gender=$gender;
				$studentDB->civilstatus=$civilstatus;
				$studentDB->contact=$contact;
				$studentDB->homeaddress=$homeaddress;
				$studentDB->provincialaddress=$provincialaddress;
				$studentDB->schoolyear=$year_entered;
				$studentDB->semester=$semester;
				$studentDB->tocourse=$tocourse;
				$studentDB->fromcourse=$fromcourse;
				$studentDB->fromschool=$fromschool;
				$studentDB->department=$department;
				$studentDB->steps_status="evaluation";
				$studentDB->save();

				$evaluation=new EvaluationModel;
				$evaluation->evaluationid=bin2hex(mcrypt_create_iv(15, MCRYPT_DEV_URANDOM))."evaluation";
				$evaluation->userid=$userid;
				$evaluation->evaluator_name="";
				$evaluation->course=$tocourse;
				$evaluation->department=$department;
				$evaluation->status="false";
				$evaluation->comment="";
				$evaluation->save();

				$requirements=new RequirementsModel;
				$requirements->requirementsid=bin2hex(mcrypt_create_iv(15, MCRYPT_DEV_URANDOM))."evaluation";
				$requirements->userid=$userid;
				$requirements->sao_username="";
				$requirements->NSO="false";
				$requirements->COT="false";
				$requirements->GM="false";
				$requirements->TOR="false";
				$requirements->RF="false";
				$requirements->requirements_comment="";
				$requirements->status="false";
				$requirements->save();

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



				//return View::make('website.website_home')->with('message','<script language="javascript">'.'alert("Thank you for registering to STEPS! You may now login to your account!")'.'</script>');
				$message='<script language="javascript">'.'alert("Thank you for registering to STEPS! You may now login to your account!")'.'</script>';

				Session::put('message',$message);

				//return Redirect::intended('http://localhost:8000')->with('message','<script language="javascript">'.'alert("Thank you for registering to STEPS! You may now login to your account!")'.'</script>');
				return Redirect::intended('http://localhost:8000');
			}
			else{
				//return View::make('website.website_home')->with('message','<script language="javascript">'.'alert("Both Password did not match!")'.'</script>');
				//return Redirect::intended('http://localhost:8000')->with('message','<script language="javascript">'.'alert("Both Password did not match!")'.'</script>');

				$message='<script language="javascript">'.'alert("Both Password did not match!")'.'</script>';
				Session::put('message',$message);
				return Redirect::intended('http://localhost:8000');
			}
			
		}
		catch(Exception $e)
		{
			echo $e;
		}
	}

	public function admin_register()
	{
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

			$message="Thank you for registering to STEPS!";

			
			return View::make('AdminLoginRegister.AdminLoginRegister')->with('message','<font color="green">'.$message.'</font>');
		}
	} 
}
?>
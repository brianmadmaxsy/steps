<?php
class StudentController extends BaseController{

	public function index() //Displays the STEPS website (with student's login)
	{
		$student=Session::get('sess_student_arr');

		if($student=="")
		{
			return View::make('Website.Website_home');
		}
		else if($student!="")
		{
			return Redirect::intended('/home');
		}
		
	}

	public function about()
	{
		return View::make('Website.Website_about');
	}

	public function activities()
	{
		return View::make('Website.Website_activities');
	}

	public function facility()
	{
		return View::make('Website.Website_facility');
	}

	public function contact()
	{
		return View::make('Website.Website_contact');
	}

	public function student_home() //Displays the STEPS dashboard home
	{
		
		
		$student_sess = Session::get('sess_student_arr');
		$student_sess = unserialize(serialize($student_sess)); //added code to unserialize the __PHP_Incomplete_Class
		
		$student = StudentModel::where('username','=',$student_sess['username'])->where('password','=',$student_sess['password'])->first(); //recall student row
		

		if($student!="")
		{
			if($student['studenttype']=="Transferee")
			{
				//$transferee_sess=Session::get('sess_transferee_arr');
				//$transferee_sess = unserialize(serialize($transferee_sess));

				$transferee = TransfereeModel::where('userid','=',$student['userid'])->first();

				//select all requirements
				$transferee_requirements= TransfereeRequirementsModel::where('userid','=',$student['userid'])->first();
				$examschedule= ExamScheduleModel::where('userid','=',$student['userid'])->first();
				$results = ResultsModel::where('userid','=',$student['userid'])->first();
				//$examschedulelist = DB::table('examschedulelist')->where('username','!=',$master['username'])->get();
				$examschedulelist = DB::table('examschedulelist')->get();
				
				return View::make('TransfereeDashboard.Transferee_Home_Dashboard')->with('student',$student)->with('transferee',$transferee)->with('requirements',$transferee_requirements)->with('examschedule',$examschedule)->with('examschedulelist',$examschedulelist)->with('results',$results);
			}
			else if($student['studenttype']=="Freshmen")
			{
				//$freshmen_sess=Session::get('sess_freshmen_arr');
				//$freshmen_sess = unserialize(serialize($freshmen_sess));

				$freshmen = FreshmenModel::where('userid','=',$student['userid'])->first();

				$freshmen_requirements= FreshmenRequirementsModel::where('userid','=',$student['userid'])->first();
				$examschedule= ExamScheduleModel::where('userid','=',$student['userid'])->first();
				$results = ResultsModel::where('userid','=',$student['userid'])->first();
				//$examschedulelist = DB::table('examschedulelist')->where('username','!=',$master['username'])->get();
				$examschedulelist = DB::table('examschedulelist')->get();
				
				return View::make('FreshmenDashboard.Freshmen_Home_Dashboard')->with('student',$student)->with('freshmen',$freshmen)->with('requirements',$freshmen_requirements)->with('examschedule',$examschedule)->with('examschedulelist',$examschedulelist)->with('results',$results);
				
			}
			
		}
		else
		{
			//echo "User not logged in";
			$message='user not logged in';
			Session::put('message',$message);
			return Redirect::intended('/');

			//return View::make('Website.Website_home')->with('message',$message);
		
		}
		
				//print_r($student);
	}

	public function edit_freshmen_profile()
	{
		try
		{
			$userid=Input::get('get_userid');
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
			

			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);
			$freshmen = FreshmenModel::where('userid','=',$userid)->first();
			Session::put('sess_freshmen_arr',$freshmen);
			return Redirect::intended('/home');
		}
		catch(Exception $e)
		{
			echo $e;
		}
	}

	public function edit_transferee_profile()
	{
		try
		{
			$userid=Input::get('get_userid');
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
			

			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);
			$transferee = TransfereeModel::where('userid','=',$userid)->first();
			Session::put('sess_transferee_arr',$transferee);
			return Redirect::intended('/home');
		}
		catch(Exception $e)
		{
			echo $e;
		}
	}
}

?>
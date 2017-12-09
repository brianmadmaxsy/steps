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
			return Redirect::intended('http://localhost:8000/home');
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
		
		
		$student = Session::get('sess_student_arr');
		$student = unserialize(serialize($student)); //added code to unserialize the __PHP_Incomplete_Class
		
		
		if($student!="")
		{
			//select all requirements
			$requirements= RequirementsModel::where('userid','=',$student['userid'])->first();
			$examschedule= ExamScheduleModel::where('userid','=',$student['userid'])->first();
			$results = ResultsModel::where('userid','=',$student['userid'])->first();
			return View::make('Studentdashboard.Home_dashboard')->with('student',$student)->with('requirements',$requirements)->with('examschedule',$examschedule)->with('results',$results);
		}
		
				//print_r($student);
	}

	public function editstudentprofile()
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

			$student=StudentModel::where('userid',$userid);
			$student->update(['firstname'=>$edited_firstname,'middlename'=>$edited_middlename,'lastname'=>$edited_lastname,'email'=>$edited_email,'birthdate'=>$edited_birthdate,'birthplace'=>$edited_birthplace,'gender'=>$edited_gender,'civilstatus'=>$edited_civilstatus,'contact'=>$edited_contact,'homeaddress'=>$edited_homeaddress,'provincialaddress'=>$edited_provincialaddress,'schoolyear'=>$edited_year_entered,'semester'=>$edited_semester,'tocourse'=>$edited_tocourse,'fromcourse'=>$edited_fromcourse,'fromschool'=>$edited_fromschool]);

			$student = StudentModel::where('userid','=',$userid)->first();
			Session::put('sess_student_arr',$student);
			return Redirect::intended('http://localhost:8000/home');
		}
		catch(Exception $e)
		{
			echo $e;
		}
	}
}

?>
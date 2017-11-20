<?php
class StudentController extends BaseController{

	public function index() //Displays the STEPS website (with student's login)
	{
		$student=Session::get('sess_student_arr');

		if($student=="")
		{
			return View::make('Website.Website_home')->with('message','');
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
}

?>
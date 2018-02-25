<?php
class AdminController extends BaseController{

	public function admin_college_home()
	{
		$college=Session::get('sess_admin_college_arr');
		$college=unserialize(serialize($college));

		
		if($college!="")
		{
			
			$transfereestudents = DB::table('student')
			->leftJoin('transferee', 'student.userid', '=', 'transferee.userid')
            ->leftJoin('evaluation', 'student.userid', '=', 'evaluation.userid')
            ->where('student.department','=',$college['department'])
            ->where('student.studenttype','=','Transferee')
            ->get();

            $freshmenstudents = DB::table('student')
			->leftJoin('freshmen', 'student.userid', '=', 'freshmen.userid')
            ->leftJoin('evaluation', 'student.userid', '=', 'evaluation.userid')
            ->where('student.department','=',$college['department'])
            ->where('student.studenttype','=','Freshmen')
            ->get();
            
			return View::make('CollegeAdminDashboard.CollegeAdminHome')->with('college',$college)->with('transfereestudents',$transfereestudents)->with('freshmenstudents',$freshmenstudents);
		}
		else{
			return Redirect::intended('/adminlogin');
		}
	}
	public function admin_sao_home()
	{
		$sao=Session::get('sess_admin_sao_arr');
		$sao = unserialize(serialize($sao)); //added code to unserialize the __PHP_Incomplete_Class

		if($sao!="")
		{
			$transfereestudents = DB::table('student')
			->leftJoin('transferee', 'student.userid', '=', 'transferee.userid')
			->leftJoin('transferee_requirements','student.userid','=','transferee_requirements.userid')
			->leftJoin('interview','student.userid','=','interview.userid')
			->where('student.studenttype','=','Transferee')
			->get();

			$freshmenstudents = DB::table('student')
			->leftJoin('freshmen', 'student.userid', '=', 'freshmen.userid')
			->leftJoin('transferee_requirements','student.userid','=','transferee_requirements.userid')
			->leftJoin('interview','student.userid','=','interview.userid')
			->where('student.studenttype','=','Freshmen')
			->get();

			return View::make('SaoAdminDashboard.SaoAdminHome')->with('sao',$sao)->with('transfereestudents',$transfereestudents)->with('freshmenstudents',$freshmenstudents);
		}
		else{
			return Redirect::intended('/adminlogin');
		}
	}
	public function admin_oas_home()
	{
		Session::forget('sess_oas_freshmen_userid');
		Session::forget('sess_oas_transferee_userid');
		$oas=Session::get('sess_admin_oas_arr');
		$oas = unserialize(serialize($oas)); //added code to unserialize the __PHP_Incomplete_Class

		if($oas!="")
		{
			$transfereestudents = DB::table('student')
			->leftJoin('transferee', 'student.userid', '=', 'transferee.userid')
			->leftJoin('payment','student.userid','=','payment.userid')
			->leftJoin('identification','student.userid','=','identification.userid')
			->leftJoin('examschedule','student.userid','=','examschedule.userid')
			->where('student.studenttype','=','Transferee')
			->get();

			$freshmenstudents = DB::table('student')
			->leftJoin('freshmen', 'student.userid', '=', 'freshmen.userid')
			->where('student.studenttype','=','Freshmen')
			->get();


			return View::make('OasAdminDashboard.OasAdminHome')->with('oas',$oas)->with('transfereestudents',$transfereestudents)->with('freshmenstudents',$freshmenstudents);
		}
		else{
			return Redirect::intended('/adminlogin');
		}
	}
	public function admin_guidance_home()
	{
		Session::forget('sess_guidance_freshmen_userid');
		Session::forget('sess_guidance_transferee_userid');
		Session::forget('sess_guidance_get_exam_scheduleid');
		Session::forget('sess_guidance_get_from_link');
		$guidance=Session::get('sess_admin_guidance_arr');
		$guidance = unserialize(serialize($guidance)); //added code to unserialize the __PHP_Incomplete_Class
		
		if($guidance!="")
		{
			$transfereestudents = DB::table('student')
			->leftJoin('transferee', 'student.userid', '=', 'transferee.userid')
			->leftJoin('examschedule','student.userid','=','examschedule.userid')
			->leftJoin('entranceexam','student.userid','=','entranceexam.userid')
			->leftJoin('results','student.userid','=','results.userid')
			->where('student.studenttype','=','Transferee')
			->get();

			$freshmenstudents = DB::table('student')
			->leftJoin('freshmen', 'student.userid', '=', 'freshmen.userid')
			->leftJoin('examschedule','student.userid','=','examschedule.userid')
			->leftJoin('entranceexam','student.userid','=','entranceexam.userid')
			->leftJoin('results','student.userid','=','results.userid')
			->where('student.studenttype','=','Freshmen')
			->get();

			$examschedulelist = ExamScheduleListModel::all();
			return View::make('GuidanceAdminDashboard.GuidanceAdminHome')->with('guidance',$guidance)->with('transfereestudents',$transfereestudents)->with('freshmenstudents',$freshmenstudents)->with('examschedulelist',$examschedulelist);
		}
		else{
			return Redirect::intended('/adminlogin');
		}
	}

	public function admin_masteradmin_home()
	{
		Session::forget('sess_masteradmin_fetched_admin_userid');
		Session::forget('sess_masteradmin_fetched_student_userid');
		Session::forget('sess_masteradmin_username');
		
		$master=Session::get('sess_admin_masteradmin_arr');
		$master=unserialize(serialize($master));

		if($master!="")
		{
			$students = DB::table('student')->get();
			$admins = DB::table('admin')
			->where('username','!=',$master['username'])
			->get();

			return View::make('MasterAdminDashboard.MasterAdminHome')->with('masteradmin',$master)->with('admins',$admins)->with('students',$students);
		}
	}

	public function edit_admin_avatar()
	{
		try
		{
			
			if(Input::hasFile('file')) //If this is a file uploaded
			{
				$userid=Input::get('get_userid');
				$department=Input::get('get_department');
				$position=Input::get('get_position');


				
				//delete old picture from server
				$admin = AdminModel::where('userid','=',$userid)->first();
				$filename = public_path().'/profilepics/'.$admin['picture'];

				if (File::exists($filename)) {
				    File::delete($filename);
				} 
				//end of delete old picture from server

				//upload new picture and update database
				$file=Input::file('file');
				$filename=$userid."-".$department."-".$position."-".$file->getClientOriginalName();
				$file->move('public/profilepics/',$filename);

				$picture=$filename;

				$admin=AdminModel::where('userid',$userid);
				$admin->update(['picture'=>$picture]);
				
				$admin = AdminModel::where('userid','=',$userid)->first();
				

				if(strpos($department, 'College') !== false)
				{
					Session::put('sess_admin_college_arr',$admin);
					return Redirect::intended('/collegehome');
				}
				elseif($department=="Student Affairs Office")
				{
					Session::put('sess_admin_sao_arr',$admin);
					return Redirect::intended('/saohome');
				}
				elseif($department=="Office of Academic Scholarship")
				{
					Session::put('sess_admin_oas_arr',$admin);
					return Redirect::intended('/oashome');
				}
				elseif($department=="Guidance Office")
				{
					Session::put('sess_admin_guidance_arr',$admin);
					return Redirect::intended('/guidancehome');
				}
				elseif($department=="STEPS" AND $position=="Master Administrator")
				{
					Session::put('sess_admin_masteradmin_arr',$admin);
					return Redirect::intended('/masteradminhome');
				}
				elseif($department=="STEPS" AND $position=="Publisher")
				{
					Session::put('sess_admin_publisher_arr',$admin);
					return Redirect::intended('/publisherprofile');
				}
				

			}
			else
			{
				echo "no file uploaded";
			}


		}	
		catch(Exception $e)
		{
			echo $e;
		}
	}

	public function edit_admin_profile()
	{
		try
		{
			$userid=Input::get('get_userid');
			$department=Input::get('get_department');
			$position=Input::get('get_position');


			$firstname=Input::get('firstname');
			$middlename=Input::get('middlename');
			$lastname=Input::get('lastname');
			$username=Input::get('username');
			$edited_password=Input::get('editpassword');
			$edited_cpassword=Input::get('editcpassword');
			$birthdate=Input::get('editbirthdate');
			$email=Input::get('email');
			$contact=Input::get('contact');
			$department=Input::get('department');
			$position=Input::get('position');
			$pastuniversity=Input::get('pastuniversity');
			$education=Input::get('education');

			$admin=AdminModel::where('userid',$userid);
			$admin->update(['firstname'=>$firstname,'middlename'=>$middlename,'lastname'=>$lastname,'username'=>$username,'birthdate'=>$birthdate,'email'=>$email,'contact'=>$contact,'department'=>$department,'position'=>$position,'pastuniversity'=>$pastuniversity,'education'=>$education]);
			
			if($edited_password!="" && $edited_password==$edited_cpassword)
			{
				$password=md5($edited_password);
				$admin=AdminModel::where('userid',$userid);
				$admin->update(['password'=>$password]);
			}

			$admin = AdminModel::where('userid','=',$userid)->first();
				

			if(strpos($department, 'College') !== false)
			{
				Session::put('sess_admin_college_arr',$admin);
				return Redirect::intended('/collegehome');
			}
			elseif($department=="Student Affairs Office")
			{
				Session::put('sess_admin_sao_arr',$admin);
				return Redirect::intended('/saohome');
			}
			elseif($department=="Office of Academic Scholarship")
			{
				Session::put('sess_admin_oas_arr',$admin);
				return Redirect::intended('/oashome');
			}
			elseif($department=="Guidance Office")
			{
				Session::put('sess_admin_guidance_arr',$admin);
				return Redirect::intended('/guidancehome');
			}
			elseif($department=="STEPS" AND $position=="Master Administrator")
			{
				Session::put('sess_admin_masteradmin_arr',$admin);
				return Redirect::intended('/masteradminhome');
			}
			elseif($department=="STEPS" AND $position=="Publisher")
			{
				Session::put('sess_admin_publisher_arr',$admin);
				return Redirect::intended('/publisherprofile');
			}
			
		}
		catch(Exception $e)
		{
			echo $e;
		}
	}

	public function admin_publisher_home()
	{
		Session::forget('sess_publisher_freshmen_userid');
		Session::forget('sess_publisher_transferee_userid');
		Session::forget('sess_publisher_get_exam_scheduleid');
		Session::forget('sess_publisher_get_from_link');
		$publisher=Session::get('sess_admin_publisher_arr');
		$publisher = unserialize(serialize($publisher)); //added code to unserialize the __PHP_Incomplete_Class


		if($publisher!="")
		{

			return View::make('PublisherAdminDashboard.PublisherAdminHome')->with('publisher',$publisher)->with('events', EventModel::all());
		}
		else
		{
			return Redirect::intended('/adminlogin');
		}

		
	}
}

?>
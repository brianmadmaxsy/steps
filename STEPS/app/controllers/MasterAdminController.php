<?php
class MasterAdminController extends BaseController{

	public function master_admin_home()
	{
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
}
?>
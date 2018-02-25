<?php

class PublisherController extends BaseController{


	public function load_events() {
		return Response::json(EventModel::all());
	}

	public function add_event() {
		$event = new EventModel;
		$event->title = Input::get('title');
		$event->start = Input::get('start');
		$event->save(); 

		return Response::json($event->id);
	}

	public function edit_event() {
		$event = EventModel::find(Input::get('id'));
		$event->title = Input::get('title');
		$event->start = Input::get('start');
		$event->save(); 

		return Response::json($event->id);
	}

	public function delete_event() {
		$event = EventModel::find(Input::get('id'));
		$event->delete(); 

		return Response::json(true);
	}

	public function publisher_news()
	{
		$news = NewsModel::all();
		Session::forget('sess_publisher_freshmen_userid');
		Session::forget('sess_publisher_transferee_userid');
		Session::forget('sess_publisher_get_exam_scheduleid');
		Session::forget('sess_publisher_get_from_link');
		$publisher=Session::get('sess_admin_publisher_arr');
		$publisher = unserialize(serialize($publisher)); //added code to unserialize the __PHP_Incomplete_Class

		return View::make('PublisherAdminDashboard.PublisherNews')->with('publisher',$publisher)->with('news', $news);
	}

	public function publisher_add_news() {
		$new = new NewsModel;
		$new->title = Input::get('title');
		$new->description = Input::get('description');
		$new->date = date('Y-m-d', strtotime(str_replace('-', '/', Input::get('date'))));
		if(Input::hasFile('image')) {
			$file = Input::file('image');
			$destinationPath = public_path('images');
			// if(!File::exists($destinationPath)) {
			// 	$fileDir = File::makeDirectory('images');
			// }
			$image = $file->getClientOriginalName('images');
			$file->move($destinationPath, $image);
			$new->image = $image;
		}

		$new->save(); 

		return Redirect::to('/publishernews');
	}

	public function edit_news(){

		$new =  NewsModel::find(Input::get('id'));
		$new->title = Input::get('title');
		$new->description = Input::get('description');
		$new->save();

		return Redirect::route('/publishernews');
	}

	public function delete_new($id){

		$new = NewsModel::find($id);
		$new->delete();

		return Redirect::to('/publishernews');
	}

	public function publisherprofile()
	{
		$profile = Session::get("sess_admin_publisher_arr");
		return View::make('PublisherAdminDashboard.PublisherAdminProfile', compact('profile'));
	}

	public function get_singe_news()
	{
		$news = NewsModel::find(Input::get('id'));

		return Response::json($news);
	}

	public function publisher_edit_news() {
		// if(Input::hasFile('image')) {

		// }
		$new = NewsModel::find(Input::get('id'));
		$new->title = Input::get('title');
		$new->description = Input::get('description');
		$new->date = date('Y-m-d', strtotime(str_replace('-', '/', Input::get('date'))));;
		

		if(Input::hasFile('image')) {
			$file = Input::file('image');
			$destinationPath = public_path('images');
			// if(!File::exists($destinationPath)) {
			// 	$fileDir = File::makeDirectory('images');
			// }
			$image = $file->getClientOriginalName('images');
			$file->move($destinationPath, $image);
			$new->image = $image;
		}

		$new->save(); 

		return Redirect::to('/publishernews');
	}
}

?>
<?php

class CourseController extends Controller
{
	public function index()
	{
		$courseCS = Course::where('category' , '=', 'cs')->get();
		$courseMath = Course::where('category' , '=', 'math')->get();

		return View::make('pages.courses')->with
		([
			"courseCS" => $courseCS,
			"courseMath" => $courseMath,
		]);
	}
}
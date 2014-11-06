<?php

class PageController extends Controller
{
	public function home()
	{
		$skills = Skill::all();
		$tools = Tool::all();

		return View::make('pages.home')->with
		([
			"skills" => $skills,
			"tools" => $tools,
		]);
	}

	public function projects()
	{
		$projects = Project::all();

		return View::make('pages.projects')->with
		([
			"projects" => $projects,
		]);
	}

	public function courses()
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
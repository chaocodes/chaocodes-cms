<?php

class PageController extends Controller
{
	public function home()
	{
		$skills = Skill::orderBy('experience', 'desc')->get();
		$tools = Tool::all();

		return View::make('pages.home')->with
		([
			"skills" => $skills,
			"tools" => $tools,
		]);
	}

	public function projects()
	{
		$projects = Project::orderBy('id', 'desc')->get();

		return View::make('pages.projects')->with
		([
			"projects" => $projects,
		]);
	}

	public function resume()
	{
		return View::make('pages.resume');
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

	public function login()
	{
		if (Auth::check()) // Already logged in...
		{
			return Redirect::to('admin');
		}
		return View::make('pages.login');
	}

	public function processLogin()
	{
		$rules =
		[
			'username' => 'required',
			'password' => 'required',
		];

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails())
		{
			return Redirect::to('login')->withErrors($validator);
		}
		else
		{
			$user =
			[
				'username' => Input::get('username'),
				'password' => Input::get('password'),
			];

			if (Auth::attempt($user))
			{
				return Redirect::to('admin');
			}
		}
		return Redirect::to('login');
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::to('login');
	}
}
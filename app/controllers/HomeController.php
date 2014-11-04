<?php

class HomeController extends Controller
{
	public function index()
	{
		$skills = Skill::all();
		$tools = Tool::all();

		return View::make('pages.home')->with
		([
			"skills" => $skills,
			"tools" => $tools,
		]);
	}
}

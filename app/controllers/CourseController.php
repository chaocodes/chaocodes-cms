<?php

class CourseController extends Controller
{
	private $rules;

	public function __construct()
	{
		$this->rules =
		[
			"name" => "required",
			"description" => "required",
			"category" => "required",
		];
	}

	public function index()
	{
		$courses = Course::all();

		return View::make('admin.course.index')->with
		([
			'courses' => $courses,
		]);
	}

	public function create()
	{
		return View::make('admin.course.create');
	}

	public function store()
	{
		$validator = Validator::make(Input::all(), $this->rules);

		if ($validator->fails())
		{
			return Redirect::to('admin/course/create')->withErrors($validator);
		}
		else
		{
			$course = new Course;
			$course->name = Input::get('name');
			$course->description = Input::get('description');
			$course->category = Input::get('category');
			$course->save();
		}
		return Redirect::to('admin/course');
	}

	public function edit($id)
	{
		$course = Course::find($id);

		return View::make('admin.course.edit')->with
		([
			"course" => $course,
		]);
	}

	public function update($id)
	{
		$validator = Validator::make(Input::all(), $this->rules);

		if ($validator->fails())
		{
			return Redirect::to('admin/course/edit/' . $id)->withErrors($validator);
		}
		else
		{
			$course = Course::find($id);
			$course->name = Input::get('name');
			$course->description = Input::get('description');
			$course->category = Input::get('category');
			$course->save();
		}

        return Redirect::to('admin/course');
	}

	public function destroy($id)
	{
		Course::destroy($id);

		return Redirect::to('admin/course');
	}
}
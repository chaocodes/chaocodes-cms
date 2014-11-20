<?php

class ProjectController extends Controller
{
	private $rules;

	public function __construct()
	{
		$this->rules =
		[
			"name" => "required",
			"url" => "required",
			"image" => "required",
			"description" => "required",
		];
	}

	public function index()
	{
		$projects = Project::all();

		return View::make('admin.project.index')->with
		([
			'projects' => $projects,
		]);
	}

	public function create()
	{
		return View::make('admin.project.create');
	}

	public function store()
	{
		$validator = Validator::make(Input::all(), $this->rules);

		if ($validator->fails())
		{
			return Redirect::to('admin/project/create')->withErrors($validator);
		}
		else
		{
			$project = new Project;
			$project->name = Input::get('name');
			$project->url = Input::get('url');
			$project->image = Input::get('image');
			$project->description = Input::get('description');
			$project->save();
		}
		return Redirect::to('admin/project');
	}

	public function edit($id)
	{
		$project = Project::find($id);

		return View::make('admin.project.edit')->with
		([
			"project" => $project,
		]);
	}

	public function update($id)
	{
		$validator = Validator::make(Input::all(), $this->rules);

		if ($validator->fails())
		{
			return Redirect::to('admin/project/edit/' . $id)->withErrors($validator);
		}
		else
		{
			$project = Project::find($id);
			$project->name = Input::get('name');
			$project->url = Input::get('url');
			$project->image = Input::get('image');
			$project->description = Input::get('description');
			$project->save();
		}

        return Redirect::to('admin/project');
	}

	public function destroy($id)
	{
		Project::destroy($id);

		return Redirect::to('admin/project');
	}
}
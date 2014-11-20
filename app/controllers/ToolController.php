<?php

class ToolController extends Controller
{
	private $rules;

	public function __construct()
	{
		$this->rules =
		[
			"name" => "required",
			"image" => "required",
			"url" => "required",
		];
	}

	public function index()
	{
		$tools = Tool::all();

		return View::make('admin.tool.index')->with
		([
			'tools' => $tools,
		]);
	}

	public function create()
	{
		return View::make('admin.tool.create');
	}

	public function store()
	{
		$validator = Validator::make(Input::all(), $this->rules);

		if ($validator->fails())
		{
			return Redirect::to('admin/tool/create')->withErrors($validator);
		}
		else
		{
			$tool = new Tool;
			$tool->name = Input::get('name');
			$tool->image = Input::get('image');
			$tool->url = Input::get('url');
			$tool->save();
		}
		return Redirect::to('admin/tool');
	}

	public function edit($id)
	{
		$tool = Tool::find($id);

		return View::make('admin.tool.edit')->with
		([
			"tool" => $tool,
		]);
	}

	public function update($id)
	{
		$validator = Validator::make(Input::all(), $this->rules);

		if ($validator->fails())
		{
			return Redirect::to('admin/tool/edit/' . $id)->withErrors($validator);
		}
		else
		{
			$tool = Tool::find($id);
			$tool->name = Input::get('name');
			$tool->image = Input::get('image');
			$tool->url = Input::get('url');
			$tool->save();
		}

        return Redirect::to('admin/tool');
	}

	public function destroy($id)
	{
		Tool::destroy($id);

		return Redirect::to('admin/tool');
	}
}
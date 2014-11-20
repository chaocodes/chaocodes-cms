<?php

class SkillController extends Controller
{
	private $rules;

	public function __construct()
	{
		$this->rules =
		[
			"skill" => "required",
			"experience" => "required|integer|between:0,100"
		];
	}

	public function index()
	{
		$skills = Skill::all();

		return View::make('admin.skill.index')->with
		([
			'skills' => $skills,
		]);
	}

	public function create()
	{
		return View::make('admin.skill.create');
	}

	public function store()
	{
		$validator = Validator::make(Input::all(), $this->rules);

		if ($validator->fails())
		{
			return Redirect::to('admin/skill/create')->withErrors($validator);
		}
		else
		{
			$skill = new Skill;
			$skill->skill = Input::get('skill');
			$skill->experience = Input::get('experience');
			$skill->save();
		}
		return Redirect::to('admin/skill');
	}

	public function edit($id)
	{
		$skill = Skill::find($id);

		return View::make('admin.skill.edit')->with
		([
			"skill" => $skill,
		]);
	}

	public function update($id)
	{
		$validator = Validator::make(Input::all(), $this->rules);

		if ($validator->fails())
		{
			return Redirect::to('admin/skill/edit/' . $id)->withErrors($validator);
		}
		else
		{
			$skill = Skill::find($id);
			$skill->skill = Input::get('skill');
			$skill->experience = Input::get('experience');
			$skill->save();
		}

        return Redirect::to('admin/skill');
	}

	public function destroy($id)
	{
		Skill::destroy($id);

		return Redirect::to('admin/skill');
	}
}

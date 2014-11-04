<?php

class ContentSeeder extends Seeder
{
	public function run()
	{
		// Skills
		$skills = array
		(
			"Java" => 85,
			"HTML/CSS" => 70,
			"JavaScript" => 60,
			"C/C++" => 50,
			"Assembly & Scheme" => 30,
			"Python" => 25,
			"PHP" => 20,
		);
		foreach ($skills as $name => $value)
		{
			$skill = new Skill;
			$skill->skill = $name;
			$skill->experience = $value;
			$skill->save();
		}

		// Classes
	}
}

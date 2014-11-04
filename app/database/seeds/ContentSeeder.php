<?php

class ContentSeeder extends Seeder
{
	public function run()
	{
		// Skills
		DB::table('skills')->delete();
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

		// Courses
		DB::table('courses')->delete();
		$coursesCS = array
		(
			"CSE4703" => "Principle of Computer Graphics",
			"CSE3502" => "Theory of Computation",
			"CSE3000" => "Contemporary Issues in CSE",
			"CSE4709" => "Networked Embedded Systems",
			"CSE4300" => "Operating Systems",
			"CSE2304" => "Computer Architecture",
			"CSE3500" => "Algorithms and Complexity",
			"CSE2102" => "Introduction to Software Engineering",
			"CSE2100" => "Data Structures and Introduction to Algorithms",
			"CSE2500" => "Introduction to Discrete Systems",
			"CSE1102" => "Object Oriented Design & Programming",
			"CSE1010" => "Introduction to Computing for Engineers",
		);
		$coursesMath = array
		(
			"MATH2210Q" => "Applied Linear Algebra",
			"STAT3025Q" => "Statistical Math",
			"MATH2110Q" => "Multivariable Calculus",
			"MATH2410Q" => "Elementary Differential Equations",
			"MATH1132Q" => "Calculus II",
		);
		foreach ($coursesCS as $name => $desc)
		{
			$course = new Course;
			$course->name = $name;
			$course->description = $desc;
			$course->category = "cs";
			$course->save();
		}
		foreach ($coursesMath as $name => $desc)
		{
			$course = new Course;
			$course->name = $name;
			$course->description = $desc;
			$course->category = "math";
			$course->save();
		}

		// Projects
		DB::table('projects')->delete();
		$project = new Project;
		$project->name = "ChaoCodes CMS";
		$project->url = "https://github.com/chaocodes/chaocodes-cms";
		$project->image = "images/projects/chaocodes.jpg";
		$project->description = "The website you're currently visiting!
		The design was created in Photoshop CS6 and coded using HTML5 and CSS3 in Notepad++.
		The design and layout is meant to be simple and efficient for those visiting to find
		relevant information about me! Future updates will include creating
		PHP or JS scripts to manage the content instead of editing HTML files."; // Old
		$project->save();

		// Tools
		DB::table('tools')->delete();
		$tools = array
		(
			"Photoshop" => "http://www.adobe.com/products/photoshop.edu.html",
			"Visual Studio" => "http://msdn.microsoft.com/en-US/vstudio",
			"Eclipse" => "https://www.eclipse.org/",
			"Sony Vegas" => "http://www.sonycreativesoftware.com/vegassoftware",
			"After Effects" => "http://www.adobe.com/products/aftereffects.edu.html",
		);
		foreach ($tools as $name => $url)
		{
			$tool = new Tool;
			$tool->name = $name;
			$imgPath = str_replace(' ', '', strtolower($name));
			$tool->image = "images/software/" . $imgPath;
			$tool->url = $url;
			$tool->save();
		}
	}
}

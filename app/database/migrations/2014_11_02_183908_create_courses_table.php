<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
	public function up()
	{
		Schema::create('courses', function($table)
		{
			$table->increments('id');
			$table->string('name', 30);
			$table->string('description', 30);
			$table->enum('category', array('cs', 'math'));
		});
	}

	public function down()
	{
		Schema::drop('courses');
	}

}

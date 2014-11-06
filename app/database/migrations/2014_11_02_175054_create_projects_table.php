<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration 
{
	public function up()
	{
		Schema::create('projects', function($table)
		{
			$table->increments('id');
			$table->string('name', 30);
			$table->string('url', 60);
			$table->string('image', 30);
			$table->text('description');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('projects');
	}
}

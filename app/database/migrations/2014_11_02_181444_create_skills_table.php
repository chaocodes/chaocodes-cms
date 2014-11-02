<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
	public function up()
	{
		Schema::create('skills', function($table)
		{
			$table->increments('id');
			$table->string('skill', 30);
			$table->integer('experience');
		});
	}

	public function down()
	{
		Schema::drop('skills');
	}

}

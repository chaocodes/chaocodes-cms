<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToolsTable extends Migration
{
	public function up()
	{
		Schema::create('tools', function($table)
		{
			$table->increments('id');
			$table->string('name', 40);
			$table->string('image', 40);
			$table->string('url', 40);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('tools');
	}
}

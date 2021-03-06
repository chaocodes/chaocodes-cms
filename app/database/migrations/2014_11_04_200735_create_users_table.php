<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
	public function up()
	{
		Schema::create('users', function($table)
		{
			$table->increments('id');
			$table->string('username', 16);
			$table->string('password', 128);
			$table->string('remember_token', 100);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}
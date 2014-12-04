<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table) {
			$table->increments('id');
			$table->string('fname', 20);
			$table->string('lname', 20);
			$table->string('email', 100)->unique();
			$table->string('password', 64);
			$table->string('phone', 20);
			$table->string('company', 20);
			$table->timestamps();
			$table->string('remember_token', 100);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}

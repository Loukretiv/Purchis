<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInviteKeysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invite_keys', function($table) {
			$table->increments('id');
			$table->string('key', 15);
			$table->char('sent')->default('N');
			$table->char('registered')->default('N');
			$table->integer('user_id')->unsigned()->nullable();
			$table->foreign('user_id')->references('id')->on('users');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('invite_keys', function($table) {
			$table->dropForeign('invite_keys_user_id_foreign');
		});
		Schema::drop('invite_keys');
	}

}

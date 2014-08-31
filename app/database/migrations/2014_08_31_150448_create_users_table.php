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
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nameFirst');
			$table->string('nameLast');
			$table->string('username')->unique();
			$table->string('email')->unique();
			$table->string('password');
			$table->integer('role_id')->unsigned();
			$table->foreign('role_id')->references('id')->on('usersRoles');
			$table->string('remember_token')->nullable();
			$table->integer('status');
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
		Schema::drop('users');
	}

}

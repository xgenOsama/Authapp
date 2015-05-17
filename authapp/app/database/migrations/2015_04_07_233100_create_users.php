<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('users', function($newtabel){
			$newtabel->increments('id');
			$newtabel->string('email')->unique();
			$newtabel->string('username',100)->unique();
			$newtabel->string('password',255);
			$newtabel->rememberToken();
			$newtabel->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('users');
	}

}

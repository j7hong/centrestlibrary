<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('Books', function($table){
			$table->increments('Books_Id');
			$table->string('Title');
			$table->string('Author');
			$table->string('ISBN');
			$table->string('Location');
			$table->string('Type');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Books');
	}

}

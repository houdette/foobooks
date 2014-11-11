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
	  Schema::create('books', function($table){
		  //2 first ones are very common. 1. set up primary key. 2. in case any changes are inputted to the table. 
		  $table -> increments('id');
		  $table -> timestamps();
		  
		  $table ->string ('author');
		  $table ->string ('title');
		  $table ->integer ('published');
		  $table ->string ('cover');
		  $table ->string ('purchase_link');
		  
	  });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('books');
	}

}

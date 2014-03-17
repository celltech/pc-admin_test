<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('contacts', function(Blueprint $table) {
            $table->increments('id');
			$table->string('contact_first_name', 50);
			$table->string('contact_last_name', 60);
			$table->string('contact_tel_home', 10)->nullable();
			$table->string('contact_tel_cell', 10)->unique();
			$table->boolean('active');
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
	    Schema::drop('contacts');
	}

}

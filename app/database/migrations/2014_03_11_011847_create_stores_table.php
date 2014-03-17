<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('stores', function(Blueprint $table) {
            $table->increments('id');
			$table->integer('store_num');
			$table->string('store_name');
			$table->string('store_address');
			$table->string('store_city');
			$table->string('store_state');
			$table->string('store_zip');
			$table->string('store_tel');
			$table->string('store_fax');
			$table->string('store_dealer_code');
			$table->string('store_landmark');
			$table->string('store_map');
			$table->string('store_hours_mf');
			$table->string('store_hours_fri');
			$table->string('store_hours_sat');
			$table->string('store_hours_sun');
			$table->integer('active');
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
	    Schema::drop('stores');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cities', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('city_id')->nullable()->default(0);
			$table->string('city', 30);
			$table->integer('state_id');
			$table->integer('is_default')->nullable()->default(0);
			$table->integer('is_active')->default(1);
			$table->integer('sort_order')->default(9999);
			$table->string('lang', 10)->default('en');
			$table->timestamps(10);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cities');
	}

}

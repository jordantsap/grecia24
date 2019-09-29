<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdvertFieldValuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dbec_adsmanager_field_values', function(Blueprint $table)
		{
			$table->integer('fieldvalueid', true);
			$table->integer('fieldid')->default(0);
			$table->string('fieldtitle', 50)->default('');
			$table->string('fieldvalue', 50)->default('0');
			$table->integer('ordering')->default(0);
			$table->boolean('sys')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dbec_adsmanager_field_values');
	}

}

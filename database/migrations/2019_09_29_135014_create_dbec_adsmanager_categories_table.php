<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDbecAdsmanagerCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dbec_adsmanager_categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('parent')->unsigned()->nullable()->default(0);
			$table->string('name', 50)->nullable();
			$table->text('description', 65535)->nullable();
			$table->integer('ordering')->nullable()->default(0);
			$table->boolean('published')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dbec_adsmanager_categories');
	}

}

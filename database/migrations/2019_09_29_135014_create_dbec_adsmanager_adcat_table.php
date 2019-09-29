<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDbecAdsmanagerAdcatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dbec_adsmanager_adcat', function(Blueprint $table)
		{
			$table->integer('adid')->unsigned();
			$table->integer('catid')->unsigned();
			$table->primary(['adid','catid']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dbec_adsmanager_adcat');
	}

}

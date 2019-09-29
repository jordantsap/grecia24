<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDbecAdvertProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('advert_profile', function(Blueprint $table)
		{
			$table->integer('userid')->default(0)->primary();
			$table->text('name', 65535);
			$table->text('ad_city', 65535);
			$table->text('email', 65535);
			$table->text('ad_zip', 65535);
			$table->text('ad_phone', 65535);
			$table->text('ad_kindof', 65535);
			$table->text('ad_adorofos', 65535);
			$table->text('ad_whatorofos', 65535);
			$table->text('ad_katastasi', 65535);
			$table->text('ad_etoskataskeuis', 65535);
			$table->text('ad_etosanakainisis', 65535);
			$table->text('ad_upnodomatia', 65535);
			$table->text('ad_master', 65535);
			$table->text('ad_bani', 65535);
			$table->text('ad_ktisma', 65535);
			$table->text('ad_emvadonoikop', 65535);
			$table->text('ad_timisuzitisimi', 65535);
			$table->text('ad_asteron', 65535);
			$table->text('ad_monokatoikis', 65535);
			$table->text('ad_mezoneta', 65535);
			$table->text('ad_villa', 65535);
			$table->text('ad_akinito', 65535);
			$table->text('ad_prosanatolismos', 65535);
			$table->text('ad_thea', 65535);
			$table->text('ad_apostasithalassa', 65535);
			$table->text('ad_apostasitm', 65535);
			$table->text('ad_xaraktiristika', 65535);
			$table->text('ad_orofosnumber', 65535);
			$table->text('ad_epipedo', 65535);
			$table->text('ad_tm', 65535);
			$table->text('ad_perioxi', 65535);
			$table->text('ad_domatia', 65535);
			$table->text('ad_akinitopros', 65535);
			$table->text('ad_paradigmadropdown', 65535);
			$table->text('ad_thesiautokinitou', 65535);
			$table->text('ad_patari', 65535);
			$table->text('ad_artiokaioikodomisimomeadeiaanegersiskatoikias', 65535);
			$table->text('ad_wc', 65535);
			$table->text('ad_kinito', 65535);
			$table->text('ad_', 65535);
			$table->text('ad_mesitis', 65535);
			$table->text('ad_eidosakinitouwwwwww', 65535);
			$table->text('ad_eidosakinitou', 65535);
			$table->text('ad_aerodromioapostasi', 65535);
			$table->text('ad_kontinoteripoliapostasi', 65535);
			$table->text('ad_limaniapostasi', 65535);
			$table->text('ad_renttype', 65535);
			$table->text('ad_price', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dbec_adsmanager_profile');
	}

}

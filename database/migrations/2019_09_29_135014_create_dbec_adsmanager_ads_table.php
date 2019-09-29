<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDbecAdsmanagerAdsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dbec_adsmanager_ads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category')->unsigned()->nullable()->default(0);
			$table->integer('userid')->unsigned()->nullable();
			$table->text('name', 65535)->nullable();
			$table->text('ad_zip', 65535)->nullable();
			$table->text('ad_city', 65535)->nullable();
			$table->text('ad_phone', 65535)->nullable();
			$table->text('email', 65535)->nullable();
			$table->text('ad_kindof', 65535)->nullable();
			$table->text('ad_headline', 65535)->nullable();
			$table->text('ad_text', 65535)->nullable();
			$table->text('ad_state', 65535)->nullable();
			$table->text('ad_price', 65535)->nullable();
			$table->dateTime('date_created');
			$table->date('date_recall')->nullable();
			$table->date('expiration_date')->nullable();
			$table->boolean('recall_mail_sent')->nullable()->default(0);
			$table->integer('views')->unsigned()->nullable()->default(0);
			$table->boolean('published')->nullable()->default(1);
			$table->text('ad_adorofos', 65535);
			$table->text('ad_whatorofos', 65535);
			$table->text('ad_katastasi', 65535);
			$table->text('ad_etoskataskeuis', 65535);
			$table->text('ad_etosanakainisis', 65535);
			$table->text('ad_upnodomatia', 65535);
			$table->text('ad_master', 65535);
			$table->text('ad_bani', 65535);
			$table->text('ad_wc', 65535);
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
			$table->text('ad_tuposthermansis', 65535);
			$table->text('ad_xaraktiristika', 65535);
			$table->text('ad_eidosakinitou', 65535);
			$table->text('ad_orofosnumber', 65535);
			$table->text('ad_epipedo', 65535);
			$table->text('ad_tm', 65535);
			$table->text('ad_perioxi', 65535);
			$table->text('ad_domatia', 65535);
			$table->text('ad_akinitopros', 65535);
			$table->text('ad_paradigmadropdown', 65535);
			$table->text('ad_checkboxparadigma', 65535);
			$table->text('ad_testvasia', 65535);
			$table->text('ad_numbersonly', 65535);
			$table->text('ad_thesiautokinitou', 65535);
			$table->text('ad_perigrafhakinhtoueswterika', 65535);
			$table->text('ad_eswterikiskala', 65535);
			$table->text('ad_tavania', 65535);
			$table->text('ad_dapeda', 65535);
			$table->text('ad_mpanio', 65535);
			$table->text('ad_adtzamia', 65535);
			$table->text('ad_perigrafhakinhtouekswterika', 65535);
			$table->text('ad_veranta', 65535);
			$table->text('ad_roofgarden', 65535);
			$table->text('ad_picina', 65535);
			$table->text('ad_patari', 65535);
			$table->text('ad_artiokaioikodomisimomeadeiaanegersiskatoikias', 65535);
			$table->text('ad_saloni', 65535);
			$table->text('ad_kouzina', 65535);
			$table->text('ad_ypnodwmatia', 65535);
			$table->text('ad_kinito', 65535);
			$table->text('ad_', 65535);
			$table->text('ad_mesitis', 65535);
			$table->text('ad_description', 65535);
			$table->text('ad_aerodromioapostasi', 65535);
			$table->text('ad_kontinoteripoliapostasi', 65535);
			$table->text('ad_limaniapostasi', 65535);
			$table->string('ad_country')->default('gr');
			$table->text('ad_renttype', 65535);
			$table->text('ad_akrivisperioxi', 65535);
			$table->text('ad_imagess', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dbec_adsmanager_ads');
	}

}

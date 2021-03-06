<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->unsignedInteger('category');
            $table->unsignedInteger('country_id');
            $table->unsignedInteger('state_id');
            $table->unsignedInteger('city_id');
            $table->string('tk');
            $table->string('agent');
            $table->integer('tel');
            $table->string('email');
            $table->string('agentcode');
            $table->unsignedInteger('advert_kind_id');
            $table->unsignedInteger('advert_type_id');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('wc');
            $table->integer('parking');
            $table->integer('price');
            $table->boolean('askable');
            $table->integer('floor');
            $table->date('costructiondate');
            $table->date('updatedate');
            $table->integer('sea_meters');
            $table->integer('floortype');
            $table->integer('airportdistance');
            $table->integer('citycenterdistance');
            $table->integer('seaportdistance');
            $table->integer('plot_tm');
            $table->integer('building_tm');
            $table->integer('buildable_permition');
            $table->unsignedInteger('ammenities_id');
            $table->unsignedInteger('views_id');
            $table->unsignedInteger('heat_types_id');
            $table->unsignedInteger('orientation_id');
            $table->unsignedInteger('intervals_id');
            $table->unsignedInteger('kitchen_id');
            $table->unsignedInteger('livingroom_id');
            $table->unsignedInteger('bedrooms_id');
            $table->unsignedInteger('bathrooms_id');
            $table->unsignedInteger('floors_id');
            $table->unsignedInteger('innerstairs_id');
            $table->unsignedInteger('ceilings_id');
            $table->boolean('windows');
            $table->string('loft');//patari
            $table->unsignedInteger('outdoordesc');
            $table->unsignedInteger('veranda');
            $table->unsignedInteger('pool');
            $table->boolean('roofgarden');
            $table->text('description');
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
        Schema::dropIfExists('adverts');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field_values', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('fieldid')->unsigned()->nullable()->default(null);
            $table->foreign('fieldid')->references('id')->on('fields')->onUpdate('cascade')->onDelete('set null');

            $table->string('fieldtitle');
            $table->string('fieldvalue');
            $table->integer('ordering');
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
        Schema::dropIfExists('field_values');
    }
}

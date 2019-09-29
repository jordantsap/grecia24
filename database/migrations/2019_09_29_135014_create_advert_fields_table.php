<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDbecAdvertFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('advert_fields', function(Blueprint $table)
		{
			$table->integer('fieldid', true);
			$table->string('name', 50)->default('');
			$table->string('title')->default('');
			$table->boolean('display_title')->default(0);
			$table->text('description', 16777215);
			$table->string('type', 50)->default('');
			$table->integer('maxlength')->nullable();
			$table->integer('size')->nullable();
			$table->boolean('required')->nullable()->default(0);
			$table->integer('ordering')->nullable();
			$table->integer('cols')->nullable();
			$table->integer('rows')->nullable();
			$table->string('link_text')->default('');
			$table->string('link_image')->default('');
			$table->integer('columnid')->default(-1);
			$table->integer('columnorder')->default(0);
			$table->boolean('pos')->default(1);
			$table->boolean('posorder')->default(1);
			$table->boolean('profile')->default(0);
			$table->integer('cb_field')->default(-1);
			$table->integer('cbfieldvalues')->default(-1);
			$table->boolean('editable')->default(1);
			$table->boolean('searchable')->default(1);
			$table->boolean('sort')->default(0);
			$table->string('sort_direction', 4)->default('DESC');
			$table->text('catsid', 65535);
			$table->boolean('published')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dbec_adsmanager_fields');
	}

}

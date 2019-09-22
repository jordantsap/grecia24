<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $sql = database_path('seeds/states.sql');
        DB::unprepared(File::get($sql));
    }
}

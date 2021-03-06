<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Traits\Seedable;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(PackagesTableSeeder::class);
      $this->call(BusinessTypesTableSeeder::class);
      $this->call(AdvertTypesTableSeeder::class);
      $this->call(DestinationsTableSeeder::class);
      $this->call(BusinessTableSeeder::class);
      $this->call(ImageTableSeeder::class);
      $this->call(CountriesTableSeeder::class);
      $this->call(StatesTableSeeder::class);
      $this->call(CitiesTableSeeder::class);
      $this->call('DataTypesTableSeeder');
      $this->call('DataRowsTableSeeder');
      $this->call('MenusTableSeeder');
      $this->call('MenuItemsTableSeeder');
      $this->call('CategoriesTableSeeder');
      $this->call('RolesTableSeeder');
      $this->call('PermissionsTableSeeder');
      $this->call('PermissionRoleTableSeeder');
      $this->call('SettingsTableSeeder');
      $this->call('UsersTableSeeder');
      $this->call('PostsTableSeeder');
      $this->call('PagesTableSeeder');
      // $this->call('TranslationsTableSeeder');
      $this->call('PermissionRoleTableSeeder');
    }
}

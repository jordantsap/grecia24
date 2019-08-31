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
      $this->call('DataTypesTableSeeder');
      $this->call('DataRowsTableSeeder');
      $this->call('MenusTableSeeder');
      $this->call('MenuItemsTableSeeder');
      $this->call('RolesTableSeeder');
      $this->call('PermissionsTableSeeder');
      $this->call('PermissionRoleTableSeeder');
      $this->call('SettingsTableSeeder');
      $this->call('CategoriesTableSeeder');
      $this->call('UsersTableSeeder');
      $this->call('PostsTableSeeder');
      $this->call('PagesTableSeeder');
      $this->call('TranslationsTableSeeder');
      $this->call('PermissionRoleTableSeeder');
      $this->call(DestinationsTableSeeder::class);
      $this->call(BusinessTypesTableSeeder::class);
      $this->call('ImageTableSeeder');
    }
}

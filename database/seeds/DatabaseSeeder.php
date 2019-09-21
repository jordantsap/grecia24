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
      $this->call(BusinessTypesTableSeeder::class);
      $this->call(DestinationsTableSeeder::class);
      $this->call(BusinessTableSeeder::class);
      $this->call(ImageTableSeeder::class);
      $this->call(CountriesTableSeeder::class);
      $this->call('PropertiesTableSeeder');
      $this->call('PropertyAmmenitiesTableSeeder');
      $this->call('PropertyBathroomsTableSeeder');
      $this->call('PropertyBedroomsTableSeeder');
      $this->call('PropertyCategoriesTableSeeder');
      $this->call('PropertyCeilingsTableSeeder');
      $this->call('PropertyFloorsTableSeeder');
      $this->call('PropertyHeatTypesTableSeeder');
      $this->call('PropertyInnerstairsTableSeeder');
      $this->call('PropertyIntervalsTableSeeder');
      $this->call('PropertyKindsTableSeeder');
      $this->call('PropertyKitchensTableSeeder');
      $this->call('PropertyLivingroomsTableSeeder');
      $this->call('PropertyOrientationsTableSeeder');
      $this->call('PropertyOutdoordescsTableSeeder');
      $this->call('PropertyPoolsTableSeeder');
      $this->call('PropertyRoofgardensTableSeeder');
      $this->call('PropertyTypesTableSeeder');
      $this->call('PropertyVerandasTableSeeder');
      $this->call('PropertyViewsTableSeeder');
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
    }
}

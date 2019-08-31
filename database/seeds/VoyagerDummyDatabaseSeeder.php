<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Traits\Seedable;

class VoyagerDummyDatabaseSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedersPath = database_path('seeds').'/';
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

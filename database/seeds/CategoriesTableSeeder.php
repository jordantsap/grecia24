<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
      Schema::disableForeignKeyConstraints();

      DB::table('categories')->insert( [
'id'=>1,
'parent'=>23,
'name'=>'Διαμερίσματα',
'description'=>'',
'ordering'=>1,
'published'=>1
] );



DB::table('categories')->insert( [
'id'=>2,
'parent'=>23,
'name'=>'Αγροτεμάχια',
'description'=>'',
'ordering'=>13,
'published'=>1
] );



DB::table('categories')->insert( [
'id'=>3,
'parent'=>23,
'name'=>'Επαγγελματικοί Χώροι',
'description'=>'',
'ordering'=>9,
'published'=>1
] );



DB::table('categories')->insert( [
'id'=>5,
'parent'=>23,
'name'=>'Ξενοδοχεία',
'description'=>'',
'ordering'=>7,
'published'=>1
] );



DB::table('categories')->insert( [
'id'=>7,
'parent'=>22,
'name'=>'Διαμερίσματα',
'description'=>'',
'ordering'=>4,
'published'=>1
] );



DB::table('categories')->insert( [
'id'=>8,
'parent'=>23,
'name'=>'Επιχειρήσεις',
'description'=>'',
'ordering'=>8,
'published'=>1
] );



DB::table('categories')->insert( [
'id'=>9,
'parent'=>23,
'name'=>'Μονοκατοικίες',
'description'=>'



\r\n


',
'ordering'=>2,
'published'=>1
] );


DB::table('categories')->insert( [
'id'=>10,
'parent'=>23,
'name'=>'Εξοχικές Κατοικίες',
'description'=>'

\"home

',
'ordering'=>3,
'published'=>1
] );


DB::table('categories')->insert( [
'id'=>11,
'parent'=>23,
'name'=>'Οικόπεδα',
'description'=>'

\"home

',
'ordering'=>14,
'published'=>1
] );


DB::table('categories')->insert( [
'id'=>12,
'parent'=>23,
'name'=>'Νησιά',
'description'=>'',
'ordering'=>15,
'published'=>1
] );



DB::table('categories')->insert( [
'id'=>13,
'parent'=>22,
'name'=>'Μονοκατοικίες',
'description'=>'',
'ordering'=>5,
'published'=>1
] );



DB::table('categories')->insert( [
'id'=>14,
'parent'=>22,
'name'=>'Εξοχικές Κατοικίες',
'description'=>'',
'ordering'=>6,
'published'=>1
] );



DB::table('categories')->insert( [
'id'=>15,
'parent'=>22,
'name'=>'Ξενοδοχεία',
'description'=>'',
'ordering'=>10,
'published'=>1
] );



DB::table('categories')->insert( [
'id'=>16,
'parent'=>22,
'name'=>'Επιχειρήσεις',
'description'=>'',
'ordering'=>11,
'published'=>1
] );



DB::table('categories')->insert( [
'id'=>17,
'parent'=>22,
'name'=>'Επαγγελματικοί Χώροι',
'description'=>'',
'ordering'=>12,
'published'=>1
] );



DB::table('categories')->insert( [
'id'=>18,
'parent'=>22,
'name'=>' Αγροτεμάχια',
'description'=>'',
'ordering'=>16,
'published'=>1
] );



DB::table('categories')->insert( [
'id'=>19,
'parent'=>22,
'name'=>'Οικόπεδα',
'description'=>'',
'ordering'=>17,
'published'=>1
] );



DB::table('categories')->insert( [
'id'=>20,
'parent'=>22,
'name'=>'Νησιά',
'description'=>'',
'ordering'=>18,
'published'=>1
] );



DB::table('categories')->insert( [
'id'=>22,
'parent'=>0,
'name'=>'Ενοικιάσεις Ακινήτων',
'description'=>'',
'ordering'=>0,
'published'=>1
] );



DB::table('categories')->insert( [
'id'=>23,
'parent'=>0,
'name'=>'Πωλήσεις Ακινήτων',
'description'=>'',
'ordering'=>0,
'published'=>1
] );

//Joomla seeder end
//
//

        //Data Type
        $dataType = $this->dataType('name', 'categories');
        if (!$dataType->exists) {
            $dataType->fill([
                'slug'                  => 'categories',
                'display_name_singular' => __('voyager::seeders.data_types.category.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.category.plural'),
                'icon'                  => 'voyager-categories',
                'model_name'            => 'TCG\\Voyager\\Models\\Category',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
        //Data Rows
        $categoryDataType = DataType::where('slug', 'categories')->firstOrFail();
        $dataRow = $this->dataRow($categoryDataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('voyager::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($categoryDataType, 'parent_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => __('voyager::seeders.data_rows.parent'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'default' => '',
                    'null'    => '',
                    'options' => [
                        '' => '-- None --',
                    ],
                    'relationship' => [
                        'key'   => 'id',
                        'label' => 'name',
                    ],
                ],
                'order' => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($categoryDataType, 'order');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.order'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'default' => 1,
                ],
                'order' => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($categoryDataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.name'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 4,
            ])->save();
        }

        $dataRow = $this->dataRow($categoryDataType, 'slug');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('voyager::seeders.data_rows.slug'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'details'      => [
                    'slugify' => [
                        'origin' => 'name',
                    ],
                ],
                'order' => 5,
            ])->save();
        }

        $dataRow = $this->dataRow($categoryDataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 6,
            ])->save();
        }

        $dataRow = $this->dataRow($categoryDataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('voyager::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 7,
            ])->save();
        }

        //Menu Item
        $menu = Menu::where('name', 'admin')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.categories'),
            'url'     => '',
            'route'   => 'voyager.categories.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-categories',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 8,
            ])->save();
        }

        //Permissions
        Permission::generateFor('categories');

        //Content
        // $category = Category::firstOrNew([
        //     'slug' => 'category-1',
        // ]);
        // if (!$category->exists) {
        //     $category->fill([
        //         'name' => 'Category 1',
        //     ])->save();
        // }
        //
        // $category = Category::firstOrNew([
        //     'slug' => 'category-2',
        // ]);
        // if (!$category->exists) {
        //     $category->fill([
        //         'name' => 'Category 2',
        //     ])->save();
        // }
    }

    /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */
    protected function dataRow($type, $field)
    {
        return DataRow::firstOrNew([
                'data_type_id' => $type->id,
                'field'        => $field,
            ]);
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}

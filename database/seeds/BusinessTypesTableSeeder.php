<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\BusinessType;
class BusinessTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      BusinessType::create([
          'title'           => 'Real Estate Agents',
          'slug'          => Str::slug('Real Estate Agents', '-'),
          'icon'          => 'catalog/ktimatomesites.png',
      ]);
      BusinessType::create([
          'title'           => 'Home Furniture',
          'slug'          => Str::slug('Home Furniture', '-'),
          'icon'          => 'catalog/epipla_katoikias.png',
      ]);
      BusinessType::create([
          'title'           => 'Office Furniture',
          'slug'          => Str::slug('Office Furniture', '-'),
          'icon'          => 'catalog/epaggelmatika_epipla.png',
      ]);
      BusinessType::create([
          'title'           => 'Notaries',
          'slug'          => Str::slug('Notaries', '-'),
          'icon'          => 'catalog/sumvolaiografoi.png',
      ]);
      BusinessType::create([
          'title'           => 'Lawyers',
          'slug'          => Str::slug('Lawyers', '-'),
          'icon'          => 'catalog/dikigoroi.png',
      ]);
      BusinessType::create([
          'title'           => 'Residential Renovations',
          'slug'          => Str::slug('Residential Renovations', '-'),
          'icon'          => 'catalog/anakainiseis_katoikion.png',
      ]);
      BusinessType::create([
          'title'           => 'Accountants',
          'slug'          => Str::slug('Accountants', '-'),
          'icon'          => 'catalog/logistes.png',
      ]);
      BusinessType::create([
          'title'           => 'Accountants',
          'slug'          => Str::slug('Beach bar', '-'),
          'icon'          => 'catalog/beach_bar.png',
      ]);
      BusinessType::create([
          'title'           => 'Doctors',
          'slug'          => Str::slug('Doctors', '-'),
          'icon'          => 'catalog/doctor.png',
      ]);
      BusinessType::create([
          'title'           => 'Cafes',
          'slug'          => Str::slug('Cafes', '-'),
          'icon'          => 'catalog/kafeteries.png',
      ]);
      BusinessType::create([
          'title'           => 'Taverns & Restaurants',
          'slug'          => Str::slug('Taverns Restaurants', '-'),
          'icon'          => 'catalog/estiatoria.png',
      ]);
      BusinessType::create([
          'title'           => 'Hotels',
          'slug'          => Str::slug('Hotels', '-'),
          'icon'          => 'catalog/ksenodoxeia.png',
      ]);
      BusinessType::create([
          'title'           => 'Tourist Agencies',
          'slug'          => Str::slug('Tourist Agencies', '-'),
          'icon'          => 'catalog/touristika_praktoreia.png',
      ]);

    }
}

<?php

namespace Database\Seeders;

use App\Models\PropertyType;
use Illuminate\Database\Seeder;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PropertyType::create(['type' => 'Apartment']);
        PropertyType::create(['type' => 'Studio']);
        PropertyType::create(['type' => 'Loft']);
        PropertyType::create(['type' => 'Maisonette']);

    }
}

<?php

namespace Database\Seeders;

use App\Models\PropertyPropertyType;
use Illuminate\Database\Seeder;

class PropertyPropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PropertyPropertyType::create(['property_id' => 1, 'property_type_id' => 1]);
        PropertyPropertyType::create(['property_id' => 2, 'property_type_id' => 1]);
        PropertyPropertyType::create(['property_id' => 2, 'property_type_id' => 2]);
        PropertyPropertyType::create(['property_id' => 3, 'property_type_id' => 1]);
        PropertyPropertyType::create(['property_id' => 4, 'property_type_id' => 1]);
        PropertyPropertyType::create(['property_id' => 5, 'property_type_id' => 1]);
        PropertyPropertyType::create(['property_id' => 5, 'property_type_id' => 2]);
        PropertyPropertyType::create(['property_id' => 6, 'property_type_id' => 2]);
        PropertyPropertyType::create(['property_id' => 7, 'property_type_id' => 2]);
        PropertyPropertyType::create(['property_id' => 8, 'property_type_id' => 2]);
        PropertyPropertyType::create(['property_id' => 8, 'property_type_id' => 3]);
        PropertyPropertyType::create(['property_id' => 9, 'property_type_id' => 2]);
        PropertyPropertyType::create(['property_id' => 10, 'property_type_id' => 2]);
        PropertyPropertyType::create(['property_id' => 11, 'property_type_id' => 1]);
        PropertyPropertyType::create(['property_id' => 11, 'property_type_id' => 2]);
        PropertyPropertyType::create(['property_id' => 11, 'property_type_id' => 3]);
        PropertyPropertyType::create(['property_id' => 12, 'property_type_id' => 3]);
        PropertyPropertyType::create(['property_id' => 13, 'property_type_id' => 3]);
        PropertyPropertyType::create(['property_id' => 14, 'property_type_id' => 3]);
        PropertyPropertyType::create(['property_id' => 15, 'property_type_id' => 3]);
        PropertyPropertyType::create(['property_id' => 16, 'property_type_id' => 1]);
        PropertyPropertyType::create(['property_id' => 16, 'property_type_id' => 4]);
        PropertyPropertyType::create(['property_id' => 17, 'property_type_id' => 4]);
        PropertyPropertyType::create(['property_id' => 18, 'property_type_id' => 4]);
        PropertyPropertyType::create(['property_id' => 19, 'property_type_id' => 4]);
        PropertyPropertyType::create(['property_id' => 20, 'property_type_id' => 4]);

    }
}

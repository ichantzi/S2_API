<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;


class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Property::create(['location' => 'Athens', 'availability' => 'Sale', 'price' => 230000, 'square_meters' => 100]);
        Property::create(['location' => 'Athens', 'availability' => 'Sale', 'price' => 190000, 'square_meters' => 70]);
        Property::create(['location' => 'Thessaloniki', 'availability' => 'Sale', 'price' => 250000, 'square_meters' => 140]);
        Property::create(['location' => 'Patra', 'availability' => 'Rent', 'price' => 250, 'square_meters' => 55]);
        Property::create(['location' => 'Patra', 'availability' => 'Rent', 'price' => 360, 'square_meters' => 80]);
        Property::create(['location' => 'Athens', 'availability' => 'Sale', 'price' => 90000, 'square_meters' => 30]);
        Property::create(['location' => 'Athens', 'availability' => 'Sale', 'price' => 120000, 'square_meters' => 40]);
        Property::create(['location' => 'Thessaloniki', 'availability' => 'Rent', 'price' => 300, 'square_meters' => 65]);
        Property::create(['location' => 'Thessaloniki', 'availability' => 'Rent', 'price' => 300, 'square_meters' => 65]);
        Property::create(['location' => 'Thessaloniki', 'availability' => 'Rent', 'price' => 500, 'square_meters' => 90]);
        Property::create(['location' => 'Athens', 'availability' => 'Sale', 'price' => 350000, 'square_meters' => 70]);
        Property::create(['location' => 'Chania', 'availability' => 'Sale', 'price' => 20000, 'square_meters' => 45]);
        Property::create(['location' => 'Patra', 'availability' => 'Sale', 'price' => 35000, 'square_meters' => 55]);
        Property::create(['location' => 'Chania', 'availability' => 'Rent', 'price' => 400, 'square_meters' => 65]);
        Property::create(['location' => 'Patra', 'availability' => 'Rent', 'price' => 250, 'square_meters' => 45]);
        Property::create(['location' => 'Thessaloniki', 'availability' => 'Sale', 'price' => 140000, 'square_meters' => 65]);
        Property::create(['location' => 'Patra', 'availability' => 'Sale', 'price' => 340000, 'square_meters' => 210]);
        Property::create(['location' => 'Thessaloniki', 'availability' => 'Rent', 'price' => 700, 'square_meters' => 120]);
        Property::create(['location' => 'Patra', 'availability' => 'Rent', 'price' => 160, 'square_meters' => 100]);
        Property::create(['location' => 'Patra', 'availability' => 'Rent', 'price' => 160, 'square_meters' => 100]);
    }
}

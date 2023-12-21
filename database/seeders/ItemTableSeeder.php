<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            'image' => 'images/card1.png',
            'name' => 'Palembang',
            'Gender' => 'Male',
            'description' => 'Description for Palembang...',
            'price' => 1500000,
        ]);
        Item::create([
            'image' => 'images/card2.png',
            'name' => 'Bali',
            'Gender' => 'Female',
            'description' => 'Description for Bali...',
            'price' => 2500000,
        ]);
        Item::create([
            'image' => 'images/card3.png',
            'name' => 'Jambi',
            'Gender' => 'Female',
            'description' => 'Description for Jambi...',
            'price' => 2500000,
        ]);
        Item::create([
            'image' => 'images/card4.png',
            'name' => 'Shari',
            'Gender' => 'Male',
            'description' => 'Description for Shari...',
            'price' => 1500000,
        ]);
        Item::create([
            'image' => 'images/card5.png',
            'name' => 'Sumatra Utara',
            'Gender' => 'Female',
            'description' => 'Description for Sumatra utara...',
            'price' => 1500000,
        ]);
        Item::create([
            'image' => 'images/card6.png',
            'name' => 'Lampung',
            'Gender' => 'Female',
            'description' => 'Description for Lampung...',
            'price' => 1500000,
        ]);
        Item::create([
            'image' => 'images/card7.png',
            'name' => 'Jawa Barat',
            'Gender' => 'Male',
            'description' => 'Description for Jawa Barat...',
            'price' => 1000000,
        ]);
        Item::create([
            'image' => 'images/card8.png',
            'name' => 'Sumatra Barat',
            'Gender' => 'Male',
            'description' => 'Description for Sumatra Barat...',
            'price' => 1500000,
        ]);
        Item::create([
            'image' => 'images/card9.png',
            'name' => 'Sulawesi',
            'Gender' => 'Female',
            'description' => 'Description for Sulawesi...',
            'price' => 1500000,
        ]);
        Item::create([
            'image' => 'images/card10.png',
            'name' => 'Banten',
            'Gender' => 'Female',
            'description' => 'Description for Banten...',
            'price' => 1500000,
        ]);
        Item::create([
            'image' => 'images/card11.png',
            'name' => 'Minang',
            'Gender' => 'Female',
            'description' => 'Description for Minang...',
            'price' => 1000000,
        ]);
        Item::create([
            'image' => 'images/card12.png',
            'name' => 'Dayak',
            'Gender' => 'Female',
            'description' => 'Description for Dayak...',
            'price' => 1500000,
        ]);
        Item::create([
            'image' => 'images/card13.png',
            'name' => 'Kalimantan Barat',
            'Gender' => 'Male',
            'description' => 'Description for Kalimantan Barat...',
            'price' => 1500000,
        ]);
        Item::create([
            'image' => 'images/card14.png',
            'name' => 'Batak',
            'Gender' => 'Male',
            'description' => 'Description for Batak...',
            'price' => 1000000,
        ]);
        Item::create([
            'image' => 'images/card15.png',
            'name' => 'Sulawesi',
            'Gender' => 'Male',
            'description' => 'Description for Sulawesi...',
            'price' => 1500000,
        ]);
        Item::create([
            'image' => 'images/card16.png',
            'name' => 'Sunda',
            'Gender' => 'Male',
            'description' => 'Description for Sunda...',
            'price' => 1000000,
        ]);
    }
}

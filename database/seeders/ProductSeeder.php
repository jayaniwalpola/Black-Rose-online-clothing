<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
           [
            'name'=>'Red Jumpsuit',
            "price"=>"2050",
            "description"=>"Red color valentine jumpsuit",
            "category"=>"Jumpsuit",
            "gallery"=>"https://i.pinimg.com/originals/26/91/58/269158aef42a82fdb712f31f8d9f7e1d.jpg",
           ],
           [
            'name'=>'Blue Frock',
            "price"=>"5000",
            "description"=>"Blue color geoget frock sleevless",
            "category"=>"Frock",
            "gallery"=>"https://4.imimg.com/data4/QC/WG/MY-11283819/embellished-western-wear-blue-faux-georgette-short-sl-500x500.jpg",
           ],
           [
            'name'=>'Yellow flowerd frock',
            "price"=>"3000",
            "description"=>"yellow color cotton mini frock with flower decorated",
            "category"=>"Frock",
            "gallery"=>"https://ae01.alicdn.com/kf/HTB1NhG7d3aH3KVjSZFjq6AFWpXah/Mostnica-Yellow-Flower-Lace-Summer-Slip-Dress-for-Woman-Spaghetti-Strap-Layered-Halter-Mini-Dresses-Women.jpg_Q90.jpg_.webp",
           ],
           [
            'name'=>'Pink crop top',
            "price"=>"1800",
            "description"=>"pink color crop top",
            "category"=>"Top",
            "gallery"=>"https://assets.ajio.com/medias/sys_master/root/hf4/h33/14533845680158/-1117Wx1400H-460478049-pink-MODEL.jpg",
           ],
           [
            'name'=>'Green Top',
            "price"=>"2100",
            "description"=>"green color sleevless top with cross strips",
            "category"=>"Top",
            "gallery"=>"https://cdn1.ninecolours.com/image/cache/products/Georgette-Western-Wear-Top-In-Sea-Green-Colour-TP0893127-A-1200x1799.jpg",
           ]
        ]);
    }
}

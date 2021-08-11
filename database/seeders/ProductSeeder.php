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
            "gallery"=>"https://image.shutterstock.com/image-photo/beautiful-young-woman-on-stone-260nw-1893195220.jpg",
           ],
           [
            'name'=>'Blue Frock',
            "price"=>"5000",
            "description"=>"Blue color geoget frock sleevless",
            "category"=>"Frock",
            "gallery"=>"https://www.cottonable.com/wp-content/uploads/2019/10/girl-1526889_1280-1024x641.jpg",
           ],
           [
            'name'=>'Yellow flowerd frock',
            "price"=>"3000",
            "description"=>"yellow color cotton mini frock with flower decorated",
            "category"=>"Frock",
            "gallery"=>"https://www.zastavki.com/pictures/originals/2020Girls___Beautyful_Girls_Beautiful_Asian_girl_in_a_yellow_dress_138860_.jpg",
           ],
           [
            'name'=>'Pink crop top',
            "price"=>"1800",
            "description"=>"pink color crop top",
            "category"=>"Top",
            "gallery"=>"https://i.pinimg.com/474x/9c/65/d8/9c65d866a5bc7806d378678f5a231d21.jpg",
           ],
           [
            'name'=>'Green Top',
            "price"=>"2100",
            "description"=>"green color sleevless top with cross strips",
            "category"=>"Top",
            "gallery"=>"https://www.1zoom.me/big2/51/133885-avallonist.jpg",
           ]
        ]);
    }
}

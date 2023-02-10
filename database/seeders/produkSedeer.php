<?php

namespace Database\Seeders;

use App\Models\produk;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class produkSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['img'=>'ktkt1.png', 'name'=>'kitkat caramilk', 'price'=>'Rp.20', 'stock'=>100, 'desc'=>'Rich dark chocolate '],
            ['img'=>'ktkt2.png', 'name'=>'kitkat crunchie', 'price'=>'Rp.20', 'stock'=>100, 'desc'=>'A chunky, gold bar '],
            ['img'=>'ktkt3.png', 'name'=>'kitkat curlywurly', 'price'=>'Rp.20', 'stock'=>100, 'desc'=>'Chewy and curly, wavy '],
            ['img'=>'ktkt4.png', 'name'=>'kitkat darkmilk', 'price'=>'Rp.20', 'stock'=>100, 'desc'=>'The richest chocolate '],
            ['img'=>'ktkt5.png', 'name'=>'doubledecker', 'price'=>'Rp.20', 'stock'=>100, 'desc'=>'combination crispy cereal '],
            ['img'=>'ktkt6.png', 'name'=>'kitkat wispa', 'price'=>'Rp.20', 'stock'=>100, 'desc'=>'yet intensely chocolatey '],
            ['img'=>'ktkt7.png', 'name'=>'kitkat boost', 'price'=>'Rp.20', 'stock'=>100, 'desc'=>'Everyones favourite finger '],
            ['img'=>'ktkt8.png', 'name'=>'kitkat picnic', 'price'=>'Rp.20', 'stock'=>100, 'desc'=>'creation of crispy wafer '],
            ];

            foreach ($data as $item ) {
                produk::insert([
                    'img' => $item['img'],
                    'name' => $item['name'],
                    'price' => $item['price'],
                    'stock' => $item['stock'],
                    'desc' => $item['desc'],
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now()
                ]);                                      
            }
    }
}

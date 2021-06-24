<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('Trends')->insert([
    		'nama' => 'Baju Anak Lucu',
    		'model' => 'Korea',
    		'gambar' => 'nike.png',
    	]);

    	DB::table('Trends')->insert([
    		'nama' => 'Baju Lucu',
    		'model' => 'Korea',
    		'gambar' => 'jaket.png',
    	]);

    	DB::table('Trends')->insert([
    		'nama' => 'Baju Musim Dingin',
    		'model' => 'Lokal',
    		'gambar' => 'jaket.png',
    	]);

    	DB::table('Trends')->insert([
    		'nama' => 'Baju Anak',
    		'model' => 'Lokal',
    		'gambar' => 'jaket.png',
    	]);
    }
}

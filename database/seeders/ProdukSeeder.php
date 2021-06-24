<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('Produks')->insert([
    		'nama' => 'KB KID WHITE FREEZE',
    		'trend_id' => 2,
    		'gambar' => 'chelsea.png'
    	]);

    	DB::table('Produks')->insert([
    		'nama' => 'KB KID WHITE HOT',
    		'trend_id' => 2,
    		'gambar' => 'leicester.png'
    	]);

    	DB::table('Produks')->insert([
    		'nama' => 'KB CLOTH KEREN',
    		'trend_id' => 2,
    		'gambar' => 'mu.png'
    	]);

    	DB::table('Produks')->insert([
    		'nama' => 'KB KID TOPI FREEZE',
    		'trend_id' => 2,
    		'gambar' => 'liverpool.png'
    	]);

    	DB::table('Produks')->insert([
    		'nama' => 'KB KID JAKET FREEZE',
    		'trend_id' => 2,
    		'gambar' => 'tottenham.png'
    	]);

    	DB::table('Produks')->insert([
    		'nama' => 'KB KID CELANA FREEZE',
    		'trend_id' => 1,
    		'gambar' => 'dortmund.png'
    	]);

    	DB::table('Produks')->insert([
    		'nama' => 'KB TOPI LUCU',
    		'trend_id' => 1,
    		'gambar' => 'munchen.png'
    	]);

    	DB::table('Produks')->insert([
    		'nama' => 'KB KID BLACK FREEZE',
    		'trend_id' => 4,
    		'gambar' => 'juve.png'
    	]);

    	DB::table('Produks')->insert([
    		'nama' => 'KB KID ED FREEZE',
    		'trend_id' => 4,
    		'gambar' => 'asroma.png'
    	]);

    	DB::table('Produks')->insert([
    		'nama' => 'KB KID YELLOW FREEZE',
    		'trend_id' => 4,
    		'gambar' => 'acmilan.png'
    	]);

    	DB::table('Produks')->insert([
    		'nama' => 'KB KID TAS BEAR',
    		'trend_id' => 4,
    		'gambar' => 'lazio.png'
    	]);

    	DB::table('Produks')->insert([
    		'nama' => 'KB BREX JAKET',
    		'trend_id' => 3,
    		'gambar' => 'madrid.png'
    	]);
    }
}

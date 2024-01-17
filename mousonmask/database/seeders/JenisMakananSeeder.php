<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisMakananSeeder extends Seeder
{
    public function run()
    {
        $jenisMakananData = [
            ['jenis_makanan' => 'Snack'],
            ['jenis_makanan' => 'Appetizer'],
            ['jenis_makanan' => 'Dessert'],
            ['jenis_makanan' => 'Main Course'],
            ['jenis_makanan' => 'alcohol'], 
            ['jenis_makanan' => 'Non alcohol'], 
        ];

        DB::table('jenis_makanan')->insert($jenisMakananData);
    }
}

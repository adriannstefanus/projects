<?php

use Illuminate\Database\Seeder;

class productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'productcode' => 1,
            'email' => 'adrian@gmail.com',
            'name' => 'meja kayu',
            'tag' => 'diningset',
            'status' => false
        ]);

        DB::table('products')->insert([
            'productcode' => 2,
            'email' => 'albert@gmail.com',
            'name' => 'patung zeus',
            'tag' => 'statue#stone',
            'status' => false
        ]);

        DB::table('products')->insert([
            'productcode' => 3,
            'email' => 'russell@gmail.com',
            'name' => 'baju soekarno',
            'tag' => 'clothes# jewelry',
            'status' => false
        ]);
    }
}

<?php

use App\Categorie;
use Illuminate\Database\Seeder;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorie::create([
            'id'      => '1',
            'name'      => 'Geral',
            'description'     => 'General Categorie',
            'icon'     => 'noImage.jpg',
        ]);
    }
}

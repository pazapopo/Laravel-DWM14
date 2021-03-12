<?php

namespace Database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            [
            'name' => "Astérix",
            'create_year' => 1960,
            'name_bd' => "Astérix légionnaire",
            'author_id' => 1,
            
            ],
            [ 
            'name' => "Obélix",
            'create_year' => 1960,
            'name_bd' => "Astérix légionnaire",
            'author_id' => 1,
            ],
            [
            'name' => "Tintin",
            'create_year' => 1931,
            'name_bd' => "Tintin au Congo",
            'author_id' => 3,
            ],
            [
            'name' => "Spirou",
            'create_year' => 1948,
            'name_bd' => "Spirou et Fantasio",
            'author_id' => 2,
            ]
        ]);
    }
}
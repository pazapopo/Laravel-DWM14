<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            [
            'name' => "Albert Uderzo",
            'birthday' => "1927",
            'nationality' => "Français",
            
            ],
            [ 
            'name' => "André Franquin",
            'birthday' => "1924",
            'nationality' => "Français-Belge",
            ],
            [
            'name' => "Hergé",
            'birthday' => "1983",
            'nationality' => "Belge",
            ]
        ]);
    }
}
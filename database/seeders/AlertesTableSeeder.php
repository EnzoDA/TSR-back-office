<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Examen;

class AlertesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<5;$i++){
            DB::table('alertes')->insert([

                'titre' => Str::random(5),

                'description' => Str::random(5),

                'terminee' => false,

                'pdf' => 'lien',

                'examen_id' => Examen::all()->first()->id,

            ]);
        }
    }
}

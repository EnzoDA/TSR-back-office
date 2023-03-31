<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Examen;
use App\Models\Formation;

class EpreuvesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<5;$i++){
            DB::table('epreuves')->insert([

                'created_at' => '2023-05-20',

                'matiere' => Str::random(5),

                'description' => Str::random(10),

                'debutepreuve' => '15:38:30',

                'finepreuve' => '15:38:30',

                'miseenloge' => '20:00:25',

            ]);
        }
    }
}

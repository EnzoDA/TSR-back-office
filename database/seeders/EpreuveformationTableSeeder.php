<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Epreuve;
use App\Models\Formation;
use Illuminate\Support\Facades\DB;

class EpreuveformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('epreuve_formation')->insert([

            'created_at' => '2023-05-20',

            'epreuve_id' => Epreuve::all()->first()->id,

            'formation_id' => Formation::all()->first()->id,

        ]);
    }
}

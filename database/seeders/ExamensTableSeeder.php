<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Formation;
use App\Models\Epreuve;
use App\Models\Salle;

class ExamensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<5;$i++){
            DB::table('examens')->insert([

                'created_at' => '2023-05-20 15:00:20',

                'repere' => Str::random(5),

                'dictionnaire' => true,

                'calculatrice' => false,

                'estdematerialise' => false,

                'commentaire' => Str::random(20),

                'regle' => Str::random(20),

                'date' => '2023-05-20 15:00:20',

                'formation_id' => Formation::all()->first()->id,

                'epreuve_id' => Epreuve::all()->first()->id,

                'salle_id' => Salle::all()->first()->id,

            ]);
        }
    }
}

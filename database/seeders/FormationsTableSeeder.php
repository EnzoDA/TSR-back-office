<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Examen;
use App\Models\Epreuve;

class FormationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<5;$i++){
            DB::table('formations')->insert([

                'created_at' => '1998-05-20 15:00:20',

                'nom' => Str::random(5),

                'code' => Str::random(5),

                'serie' => Str::random(5),

                'academie' => Str::random(5),

            ]);
        }
    }
}

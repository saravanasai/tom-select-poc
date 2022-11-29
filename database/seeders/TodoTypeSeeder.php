<?php

namespace Database\Seeders;

use App\Models\Todos\TodoType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TodoType::create([
            "string"=>"Important"
        ]);


        TodoType::create([
            "string"=>"Super Important"
        ]);

        TodoType::create([
            "string"=>"Do on Last"
        ]);
    }
}

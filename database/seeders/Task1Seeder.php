<?php

namespace Database\Seeders;

use App\Models\Task1;
use Illuminate\Database\Seeder;


class Task1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        Task1::factory()->times(100)->create();

        
    }
}

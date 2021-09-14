<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Photos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Photo::factory(20)->create();
    }
}

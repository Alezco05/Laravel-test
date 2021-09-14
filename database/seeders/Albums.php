<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Albums extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Album::factory(10)->create();
    }
}

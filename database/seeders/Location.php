<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Location extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        \App\Models\Location::factory(10)->create();
        Schema::enableForeignKeyConstraints();
    }
}

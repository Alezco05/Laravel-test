<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Member extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        \App\Models\Member::factory(10)->create();
        Schema::enableForeignKeyConstraints();
    }
}

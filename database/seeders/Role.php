<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('role')->truncate();
        for($i = 1; $i<=20; $i++){
            DB::table('role')->insert([
                'description' => "Description $i",
            ]);
        }
        Schema::enableForeignKeyConstraints();
    }
}

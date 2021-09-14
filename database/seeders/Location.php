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
        DB::table('location')->truncate();
        for($i = 1; $i<=20; $i++){
            DB::table('location')->insert([
                'description' => "Description $i",
            ]);
        }
        Schema::enableForeignKeyConstraints();
    }
}

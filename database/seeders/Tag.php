<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Tag extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('tag')->truncate();
        for($i = 1; $i<=20; $i++){
            DB::table('tag')->insert([
                'title' => "Titulo $i",
                'tag_photos_idTag_photos' => "$i",
            ]);
        }
        Schema::enableForeignKeyConstraints();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Tag_Photos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('tag_photos')->truncate();
        for($i = 1; $i<=20; $i++){
            DB::table('tag_photos')->insert([
                'photo_idPhoto' => "$i",
            ]);
        }
        Schema::enableForeignKeyConstraints();
    }
}

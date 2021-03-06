<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->string('title',120);
            
            $table->string('description',250);  
            $table->foreignId('member_idMember')
            ->references('id')->on('member')
            ->onDelete('cascade');     
            $table->foreignId('location_iLocation')
            ->references('id')->on('location')
            ->onDelete('cascade');
            $table->foreignId('photo_idPhoto')->constrained()
            ->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
    }
}

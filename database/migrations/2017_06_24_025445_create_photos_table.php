<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    // polymorphic relation part 1 11/69
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->increments('id');
            // string(path),integer(imageable_id) & string(imageable_type) hinzugefügt
            // und migriert
            $table->string('path');
            $table->integer('imageable_id');
            $table->string('imageable_type');
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
        Schema::drop('photos');
    }
}

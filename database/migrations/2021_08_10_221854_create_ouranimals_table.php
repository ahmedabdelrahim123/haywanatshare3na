<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOuranimalsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ouranimals', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('color');
            $table->string('breed');
            $table->string('AnimalType');
            $table->string('location');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ouranimals');
    }
}
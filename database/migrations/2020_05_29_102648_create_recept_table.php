<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recept', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('description');
            $table->string('ingredients');
            $table->string('preparation_time');
            $table->string('tags');
            $table->string('user_id');
            $table->string('name');
            $table->string('url');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recept');
    }
}

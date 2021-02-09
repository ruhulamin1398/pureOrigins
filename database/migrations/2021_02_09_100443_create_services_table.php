<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->string('title2')->nullable();
            $table->longText('description2')->nullable();
            $table->string('title3')->nullable();
            $table->longText('description3')->nullable();
            $table->string('title4')->nullable();
            $table->longText('description4')->nullable();
            $table->string('title5')->nullable();
            $table->longText('description5')->nullable();
            $table->string('title6')->nullable();
            $table->longText('description6')->nullable();
            $table->unsignedBigInteger('image_id');
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
        Schema::dropIfExists('services');
    }
}

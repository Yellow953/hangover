<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('drinks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->double('price');
            $table->string('source');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('drinks');
    }
};

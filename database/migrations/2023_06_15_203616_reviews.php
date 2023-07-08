<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('name');
            $table->string("name_en");
            $table->text('description');
            $table->text("description_en");
            $table->timestamp('date')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};
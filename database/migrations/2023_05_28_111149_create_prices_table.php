<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('price_uah')->default('0');
            $table->string('price_gbp')->default('0');
            $table->string('sale_price_uah')->default('0');
            $table->string('sale_price_gbp')->default('0');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prices');
    }
};

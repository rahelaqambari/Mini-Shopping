<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('product_detailes', function (Blueprint $table) {
            $table->id();
            $table->integer('price');
            $table->string('descreption');
            $table->integer('quentity');
            $table->string('made_in');
            $table->string('img_url');
            $table->foreignId('product_id')->constrained('products');
            $table->timestamps();
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

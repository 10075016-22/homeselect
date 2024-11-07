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
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_owner');
            $table->string('name_apartment');
            $table->string("address", 500);
            $table->unsignedBigInteger("room");
            $table->unsignedTinyInteger("parking")->default(0)->comment("If the apartment have parking");
            $table->text("observation")->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('id_owner')->references('id')->on('owners');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartments');
    }
};

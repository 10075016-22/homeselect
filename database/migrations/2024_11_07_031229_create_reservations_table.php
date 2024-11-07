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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_apartment");
            $table->unsignedBigInteger("id_client");
            $table->dateTime("start_date");
            $table->dateTime("end_date");
            $table->text("observation");
            $table->decimal("total_cost");
            $table->enum("status", ["Pending", "Confirmed", "Completed", "Cancelled", "No_show", "In progress"]);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_apartment')->references('id')->on('apartments');
            $table->foreign('id_client')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};

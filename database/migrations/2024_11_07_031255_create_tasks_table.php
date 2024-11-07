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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_incident");
            $table->unsignedBigInteger("id_employee");
            $table->enum("cost_responsible", ["Client", "Owner", "Homeselect"])->nullable();
            $table->text("observation");
            $table->dateTime("asignation_date");
            $table->decimal("estimated_cost")->default(0);
            $table->dateTime("start_date")->nullable();
            $table->dateTime("end_date")->nullable();
            $table->enum("status", ["Unasigned", "Asigned", "In progress", "Done", "Not done"]);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_incident')->references('id')->on('incidents');
            $table->foreign('id_employee')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};

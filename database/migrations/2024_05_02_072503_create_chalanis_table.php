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
        Schema::create('chalanis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fisical_year_id')->constrained('fisical_years')->cascadeOnDelete();
            $table->unsignedInteger('chalani_number');
            $table->string('chalani_employee');
            $table->date('chalani_date_bs');
            $table->date('chalani_date_ad');
            $table->unsignedInteger('patra_number');
            $table->string('subject');
            $table->string('images');
            $table->foreignId('department_id')->constrained('departments')->cascadeOnDelete();
            $table->string('patra_sender_office');
            $table->string('patra_sender_person');
            $table->string('receiver_person');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chalanis');
    }
};

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
        Schema::create('tippanis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fisical_year_id')->constrained('fisical_years')->cascadeOnDelete();
            $table->unsignedInteger('tippani_number');
            $table->string('tippani_employee');
            $table->date('tippani_date_bs');
            $table->date('tippani_date_ad');
            $table->unsignedInteger('file_number');
            $table->string('subject');
            $table->string('image');
            $table->foreignId('department_id')->constrained('departments')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tippanis');
    }
};

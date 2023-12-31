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
        Schema::create('rgms', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 50);
            $table->string('email')->unique();
            $table->string('branch', 255);
            $table->decimal('salary', 10,2);
            $table->string('contact_number', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rgms');
    }
};

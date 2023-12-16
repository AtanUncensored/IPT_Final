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
        Schema::create('crews', function (Blueprint $table) {
            $table->id();
            $table->string('full_name',50);
            $table->string('address',250);
            $table->decimal('salary', 10,2);
            $table->string('station', 50);
            $table->string('contact_number', 20);
            $table->foreignId('manager_id')->constrained()->onDelete('cascade');
            $table->foreignId('rgm_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crews');
    }
};

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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nulllable();
            $table->string('email')->nulllable();
            $table->string('phone')->nulllable();
            $table->string('doctor')->nulllable();
            $table->string('date')->nulllable();
            $table->string('message')->nulllable();
            $table->string('status')->nulllable();
            $table->string('user_id')->nulllable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};

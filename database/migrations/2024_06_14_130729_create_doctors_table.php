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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->String('doctor_name');
            $table->String('email');
            $table->String('designation');
            $table->String('degree');
            $table->String('department');
            $table->String('specialist');
            $table->String('doctor_experience');
            $table->date('birth_date');
            $table->String('phone_number');
            $table->String('gender');
            $table->String('address');
            $table->String('about_me');
            $table->String('image');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('SET NULL');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};

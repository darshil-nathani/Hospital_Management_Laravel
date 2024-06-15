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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->String('patient_name');
            $table->date('birthdate');
            $table->integer('age');
            $table->String('gender');
            $table->String('blood_group');
            $table->String('email');
            $table->String('phone_number');
            $table->String('mobile');
            $table->String('address');
            $table->integer('post_code');
            $table->String('city');
            $table->String('heart_diseases');
            $table->String('blood_pressure');
            $table->String('accident');
            $table->String('diabetic');
            $table->String('surgeries');
            $table->String('other');
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
        Schema::dropIfExists('patients');
    }
};

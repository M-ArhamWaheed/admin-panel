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
            $table->string('fname');
            $table->string('l_name');
            $table->string('datebirth');
            $table->string('age');
            $table->string('gender');
            $table->string('cnic');
            $table->string('relation');
            $table->string('f_h_name');
            $table->string('billing_group');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('city');
            $table->string('address');
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

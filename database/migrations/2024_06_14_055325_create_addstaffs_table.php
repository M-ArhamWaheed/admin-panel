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
        Schema::create('addstaffs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('l_name');
            $table->string('datebirth');
            $table->string('age');
            $table->string('gender');
            $table->string('role');
            $table->string('phone');
            $table->string('email');
             $table->string('city');
            $table->string('address');
            $table->string('m_school');
            $table->string('graduation');
            $table->string('residency');
            $table->string('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addstaffs');
    }
};

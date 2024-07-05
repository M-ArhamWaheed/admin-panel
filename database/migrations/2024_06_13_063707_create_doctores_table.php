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
        Schema::create('doctores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('l_name');
            $table->string('datebirth');
            $table->string('age');
            $table->string('gender');
            $table->string('specialist');
            $table->string('phone');
            $table->string('email');
            $table->string('city');
            $table->string('address');
            $table->string('l_number');
            $table->string('i_Authority');
            $table->string('expiration');
            $table->string('m_school');
            $table->string('graduation');
            $table->string('residency');
            $table->string('message');
            $table->datetime('datetime')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctores');
    }
};

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
        Schema::create('phamacies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('telephone');
            $table->string('email');
            $table->string('address');
            $table->string('fname');
            $table->string('l_name');
            $table->string('datebirth');
            $table->string('phoneno');
            $table->string('emailaddress');
            $table->string('city');
            $table->string('addresses');
            $table->string('license');
            $table->string('work');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phamacies');
    }
};

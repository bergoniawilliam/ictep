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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('rank');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('qualifier')->nullable();
            $table->string('badge_number')->nullable();
            $table->string('contact_number');
            // $table->string('office_unit'); to be created in new migration file
            $table->string('section');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};

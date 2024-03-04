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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('unit_id');
            $table->string('transaction_type');
            $table->text('initial_check');
            $table->text('concern');
            $table->string('status');
            $table->text('findings');
            $table->text('rendered_service');
            $table->text('recommendation');
            $table->foreignId('received_user_id');
            $table->foreignId('received_by_client_id');
            $table->dateTime('received_date');
            $table->dateTime('released_date');
            $table->foreignId('released_user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};

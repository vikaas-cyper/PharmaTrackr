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
        Schema::create('state_managers', function (Blueprint $table) {

            $table->id();
            $table->foreignId('state_id');
            $table->foreignId('user_id')->nullable();
            $table->string('name');
            $table->date('hired_at');
            $table->date('retired_at')->nullable();
            $table->boolean('retirement_status')->default(false);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('state_managers');
    }
};

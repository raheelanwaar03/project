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
        Schema::create('payment_requests', function (Blueprint $table) {
            $table->id();
            $table->string('Full_Name')->nullable();
            $table->string('Email')->nullable();
            $table->string('Phone_No')->nullable();
            $table->string('TRC20_ID')->nullable();
            $table->string('Recharge_Amount')->nullable();
            $table->string('Screen_shot')->nullable();
            $table->string('Action')->nullable();
            $table->string('user_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_requests');
    }
};

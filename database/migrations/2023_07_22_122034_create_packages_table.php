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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('Package_name')->nullable();
            $table->string('Package_price')->nullable();
            $table->string('Package_Days')->nullable();
            $table->string('Daily_income')->nullable();
            $table->string('Daily_Withdrawal')->nullable();
            $table->string('Total_after_Package_end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};

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
        Schema::create('delivery_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('outlet_id')->constrained();
            $table->date('delivery_date');
            $table->enum('delivery_status', ['scheduled', 'in_transit', 'completed']);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_schedules');
    }
};

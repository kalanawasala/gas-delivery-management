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
        Schema::create('gas_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('outlet_id')->constrained('outlets');
            $table->foreignId('delivery_schedule_id')->nullable()->constrained('delivery_schedules');
            $table->integer('quantity');
            $table->enum('status', ['pending', 'approved', 'rejected', 'completed', 'cancelled']);
            $table->date('expected_pickup_date');
            $table->date('pickup_deadline');
            $table->boolean('empty_cylinder_received')->default(false);
            $table->boolean('payment_received')->default(false);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gas_requests');
    }
};

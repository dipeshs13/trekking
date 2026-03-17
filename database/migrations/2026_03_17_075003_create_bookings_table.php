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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('trek_title');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('total_participants');
            $table->string('currency')->default('USD');
            $table->decimal('base_price', 10, 2);
            $table->decimal('insurance_total', 10, 2)->default(0);
            $table->decimal('service_fee', 10, 2)->default(0);
            $table->decimal('total_amount', 10, 2);
            $table->string('payment_method'); //card or checking
            $table->string('payment_status')->default('pending');// pending, completed, failed
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};

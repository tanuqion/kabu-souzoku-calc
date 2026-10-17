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
        Schema::create('daily_stock_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stock_id')->constrained();
            $table->date('price_date');
            $table->decimal('close_price', 10, 1);
            $table->unique(['stock_id', 'price_date']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_stock_prices');
    }
};

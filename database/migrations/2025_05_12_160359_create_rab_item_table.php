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
       Schema::create('rab_items', function (Blueprint $table) {
    $table->id();
    $table->foreignId('rab_id')->constrained()->onDelete('cascade');
    $table->string('description');
    $table->integer('quantity');
    $table->integer('unit_price');
    $table->integer('subtotal');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rab_item');
    }
};

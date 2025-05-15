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
        Schema::create('projects', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->foreignId('contractor_id')->nullable()->constrained()->onDelete('set null');
    $table->foreignId('service_id')->constrained();
    $table->foreignId('house_type_id')->constrained();
    $table->text('location');
    $table->integer('estimated_cost')->nullable();
    $table->enum('status', [
        'draft', 'menunggu_kontraktor', 'menunggu_user',
        'disepakati', 'dikerjakan', 'finishing',
        'selesai', 'batal'
    ])->default('draft');
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

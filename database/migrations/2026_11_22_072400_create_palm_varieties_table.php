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
        Schema::create('palm_varieties', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignId('company_id')->constrained()->cascadeOnDelete();
            $table->string('code', 20);
            $table->string('name');
            $table->string('species')->default('Elaeis guineensis');
            $table->text('description')->nullable();
            $table->decimal('potential_yield_ton_ha', 8, 2)->nullable();
            $table->integer('years_to_maturity')->nullable();
            $table->integer('economic_lifespan_years')->nullable();
            $table->json('characteristics')->nullable(); // disease resistance, oil content, etc.
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
            
            $table->index('uuid');
            $table->index('company_id');
            $table->index('is_active');
            $table->unique(['company_id', 'code']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('palm_varieties');
    }
};
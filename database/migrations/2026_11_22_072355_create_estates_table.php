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
        Schema::create('estates', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignId('company_id')->constrained()->cascadeOnDelete();
            $table->string('code', 20);
            $table->string('name');
            $table->json('location')->nullable(); // GIS centroid as GeoJSON
            $table->json('boundary')->nullable(); // GIS boundary as GeoJSON
            $table->decimal('total_area_ha', 10, 2)->nullable();
            $table->decimal('planted_area_ha', 10, 2)->nullable();
            $table->string('hgu_number')->nullable();
            $table->date('hgu_expiry')->nullable();
            $table->unsignedBigInteger('manager_id')->nullable(); // FK to employees (created later)
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes();
            
            $table->index('uuid');
            $table->index('company_id');
            $table->index('is_active');
            $table->index('manager_id');
            $table->unique(['company_id', 'code']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estates');
    }
};
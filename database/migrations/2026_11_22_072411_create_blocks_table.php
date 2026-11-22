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
        Schema::create('blocks', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignId('afdeling_id')->constrained()->cascadeOnDelete();
            $table->string('code', 20);
            $table->string('name')->nullable();
            $table->foreignId('variety_id')->nullable()->constrained('palm_varieties')->nullOnDelete();
            $table->year('planting_year')->nullable();
            $table->date('planting_date')->nullable();
            $table->string('spacing')->nullable();
            $table->integer('density_per_ha')->nullable();
            $table->integer('total_palms')->nullable();
            $table->integer('productive_palms')->nullable();
            $table->decimal('area_ha', 10, 2)->nullable();
            $table->json('boundary')->nullable();
            $table->string('soil_type')->nullable();
            $table->enum('terrain_type', ['flat', 'undulating', 'hilly', 'steep'])->nullable();
            $table->enum('status', ['immature', 'mature', 'prime', 'declining', 'replanting', 'cleared'])->default('immature');
            $table->year('replanting_due_year')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            $table->index('uuid');
            $table->index('afdeling_id');
            $table->index('variety_id');
            $table->index('status');
            $table->unique(['afdeling_id', 'code']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blocks');
    }
};
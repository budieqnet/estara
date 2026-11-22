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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignId('company_id')->constrained()->cascadeOnDelete();
            $table->foreignId('estate_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('afdeling_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('department_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('position_id')->nullable()->constrained()->nullOnDelete();
            $table->string('employee_number', 50)->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->nullable()->unique();
            $table->string('phone')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('address')->nullable();
            $table->string('ktp_number')->nullable()->unique();
            $table->string('npwp_number')->nullable();
            $table->string('bpjs_kesehatan_number')->nullable();
            $table->string('bpjs_ketenagakerjaan_number')->nullable();
            $table->date('hire_date');
            $table->date('termination_date')->nullable();
            $table->enum('employment_status', ['active', 'inactive', 'terminated', 'resigned', 'retired'])->default('active');
            $table->enum('employment_type', ['permanent', 'contract', 'daily', 'probation'])->default('permanent');
            $table->string('bank_account')->nullable();
            $table->string('bank_name')->nullable();
            $table->json('emergency_contact')->nullable();
            $table->json('documents')->nullable(); // paths to contracts, certificates, etc.
            $table->timestamps();
            $table->softDeletes();
            
            $table->index('uuid');
            $table->index('company_id');
            $table->index('estate_id');
            $table->index('afdeling_id');
            $table->index('department_id');
            $table->index('position_id');
            $table->index('employee_number');
            $table->index('employment_status');
            $table->index('hire_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
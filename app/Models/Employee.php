<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'uuid',
        'company_id',
        'estate_id',
        'afdeling_id',
        'department_id',
        'position_id',
        'employee_number',
        'first_name',
        'last_name',
        'email',
        'phone',
        'date_of_birth',
        'gender',
        'address',
        'ktp_number',
        'npwp_number',
        'bpjs_kesehatan_number',
        'bpjs_ketenagakerjaan_number',
        'hire_date',
        'termination_date',
        'employment_status',
        'employment_type',
        'bank_account',
        'bank_name',
        'emergency_contact',
        'documents',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'hire_date' => 'date',
        'termination_date' => 'date',
        'emergency_contact' => 'array',
        'documents' => 'array',
    ];

    protected $dates = [
        'deleted_at',
    ];

    // Relationships
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function estate(): BelongsTo
    {
        return $this->belongsTo(Estate::class);
    }

    public function afdeling(): BelongsTo
    {
        return $this->belongsTo(Afdeling::class);
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }

    public function attendances(): HasMany
    {
        return $this->hasMany(Attendance::class);
    }

    public function workAssignments(): HasMany
    {
        return $this->hasMany(WorkAssignment::class);
    }

    // Accessors
    public function getFullNameAttribute(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('employment_status', 'active');
    }

    public function scopeByCompany($query, $companyId)
    {
        return $query->where('company_id', $companyId);
    }

    public function scopeByEstate($query, $estateId)
    {
        return $query->where('estate_id', $estateId);
    }

    public function scopeByAfdeling($query, $afdelingId)
    {
        return $query->where('afdeling_id', $afdelingId);
    }
}